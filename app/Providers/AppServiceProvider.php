<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Auth;

use App\PromoCode;

use App\Package;

use App\ScheduledMail;
use App\Mail\Myaccount\PackageExpiring;
use App\Mail\Myaccount\PackageExpired;

use DateTime;
use App\ShipRequest;
use App\ShopperBalance;
use App\Customer;
use App\ShopperOrderSelf;
use App\WalletTransaction;
use App\Announcement;
use App\Campaign;

use App\Mail\Myaccount\ShipmentExpired;
use App\Mail\Myaccount\ShipmentExpiring;
use App\Mail\Myaccount\PaymentWireTransfer;
use App\Mail\Myaccount\SelfShopperOrderReminder;
use App\Mail\Myaccount\SelfShopperOrderExpired;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Authenticated;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', 'App\Http\ViewComposers\GlobalComposer');
        $id = Auth::id();
        Event::listen(Authenticated::class, function ($event) {
            $customer_id = $event->user->id;
            $package_count = Package::where('customer_id', $customer_id)->count();
            $customer = Customer::where('id', $customer_id)->select(['id','name','is_migrated'])->first();

            $promos = PromoCode::where('featured', '1')
                ->whereDate('validity', '>=', date('Y-m-d'))
                ->get();

            $announcements = Announcement::where('featured', '1')
                ->whereDate('validity', '>=', date('Y-m-d'))
                ->first();

            $home_campaign = Campaign::orderBy('name','desc')
                ->join('campaign_employees','campaigns.id','=','campaign_employees.campaign_id' )
                ->where('campaign_employees.channel','=','website')
                ->where('type', 'login')->first();

            View::share([
                'promos' => $promos,
                'migrate_package_count' => $package_count,
                'customer' => $customer,
                'announcements' => $announcements,
                'home_campaign' => $home_campaign,
            ]);
        });

        $this->packExpiringMail();
        $this->packExpiredMail();
        $this->shipExpiredMail();
        $this->shipExpiringMail();
        $this->wireTransferMail();
        $this->selfShopperReminderMail();
        $this->selfShopperExpiredMail();

    }

    public function packExpiringMail()
    {
        $date1 = \Carbon\Carbon::today()->subDays(15);
        $date2 = \Carbon\Carbon::today()->subDays(20);
        $packages = Package::where('received', '<=', $date1)
            ->where('received', '>=', $date2)
            ->whereIn('status', ['ship','review','invoice','values'])
            ->get();

        $packCustomers = array();
        $packs = array();

        foreach ($packages as $package) {
            $today = date('Y-m-d');
            if(strtotime($today) >= strtotime($package->received.' + 15 days') && strtotime($today) <= strtotime($package->received.' + 20 days')){
                $packCustomers[$package->customer_id][] = $package;
                $packs[] = $package->id;
            }
        }

        foreach ($packCustomers as $custPackages) {

            $schedule = ScheduledMail::where('customer_id', $custPackages[0]->customer->id)
                ->whereDay('created_at', date('d'))
                ->where('type', 'package')
                ->where('condition', 'pack_storage_expiring')
                ->first();

            if (empty($schedule)) {
                Mail::to($custPackages[0]->customer->email)->send(new PackageExpiring($custPackages));

                if( count(Mail::failures()) == 0 ) {
                    $mail = new ScheduledMail;
                    $mail->customer_id = $custPackages[0]->customer->id;
                    $mail->type = 'package';
                    $mail->condition = 'pack_storage_expiring';
                    $mail->status = 'success';
                    $mail->save();
                }
            }
        }
    }

    public function packExpiredMail()
    {
        $date = \Carbon\Carbon::today()->subDays(21);
        $packages = Package::where('received', '<=', $date)
            ->whereIn('status', ['ship','review','invoice','values'])
            ->get();

        $packCustomers = array();
        $packs = array();

        foreach ($packages as $package) {
            $today = date('Y-m-d');
            if(strtotime($today) >= strtotime($package->received.' + 21 days')){
                $packCustomers[$package->customer_id][] = $package;
                $packs[] = $package->id;
            }
        }

        foreach ($packCustomers as $custPackages) {

            $schedule = ScheduledMail::where('customer_id', $custPackages[0]->customer->id)
                ->whereDay('created_at', date('d'))
                ->where('type', 'package')
                ->where('condition', 'pack_storage_expired')
                ->first();

            if (empty($schedule)) {

                Mail::to($custPackages[0]->customer->email)->send(new PackageExpired($custPackages));

                if( count(Mail::failures()) == 0 ) {
                    $mail = new ScheduledMail;
                    $mail->customer_id = $custPackages[0]->customer->id;
                    $mail->type = 'package';
                    $mail->condition = 'pack_storage_expired';
                    $mail->status = 'success';
                    $mail->save();
                }
            }
        }
    }

    public function shipExpiredMail()
    {
        $date = \Carbon\Carbon::today()->subDays(7);
        $shipments = ShipRequest::where('created_at', '<', $date)
            ->whereIn('shipping_status', ['inqueue', 'confirmation'])
            ->whereIn('payment_status', ['pending', 'failed'])
            ->get();

        foreach ($shipments as $shipment) {

            $customer = Customer::find($shipment->customer_id);

            $schedule = ScheduledMail::where('customer_id', $customer->id)
                ->whereDay('created_at', date('d'))
                ->where('type', 'shipment')
                ->where('type_id', $shipment->id)
                ->where('condition', 'shipment_expired')
                ->first();

            if (empty($schedule)) {

                $customer_id = $shipment->customer_id;

                $datetime1 = new DateTime(date('Y-m-d'));
                $datetime2 = new DateTime(date('Y-m-d', strtotime($shipment->created_at)));
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');

                if($days >= 8){

                    Mail::to($customer->email)->send(new ShipmentExpired($shipment));

                    if( count(Mail::failures()) == 0 ) {
                        $mail = new ScheduledMail;
                        $mail->customer_id = $customer->id;
                        $mail->type = 'shipment';
                        $mail->type_id = $shipment->id;
                        $mail->condition = 'shipment_expired';
                        $mail->status = 'success';
                        $mail->save();

                        $balance = ShopperBalance::where('customer_id', $customer_id)->first();
                        $balAmount = $balance->amount;
                        $balAmount -= 100;

                        ShopperBalance::where('customer_id', $customer_id)->update(['amount' => $balAmount]);

                        $trans = new WalletTransaction;
                        $trans->customer_id = $customer_id;
                        $trans->wallet_id = $balance->id;
                        $trans->amount = -100;
                        $trans->description = 'Ready-to-be shipped package Storage Fee deducted | Shipment ID '.$shipment->order_id;
                        $trans->save();

                    }
                }
            }
        }
    }

    public function shipExpiringMail()
    {
        $date1 = \Carbon\Carbon::today()->subDays(4);
        $date2 = \Carbon\Carbon::today()->subDays(7);
        $shipments = ShipRequest::where('created_at', '<=', $date1)
            ->where('created_at', '>=', $date2)
            ->whereIn('shipping_status', ['inqueue', 'confirmation'])
            ->whereIn('payment_status', ['pending', 'failed'])
            ->get();

        foreach ($shipments as $shipment) {

            $customer = Customer::find($shipment->customer_id);

            $schedule = ScheduledMail::where('customer_id', $customer->id)
                ->whereDay('created_at', date('d'))
                ->where('type', 'shipment')
                ->where('type_id', $shipment->id)
                ->where('condition', 'shipment_expiring')
                ->first();

            if (empty($schedule)) {

                $datetime1 = new DateTime(date('Y-m-d'));
                $datetime2 = new DateTime(date('Y-m-d', strtotime($shipment->created_at)));
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');

                if($days >= 5 && $days <= 7 ){
                    Mail::to($customer->email)->send(new ShipmentExpiring($shipment));

                    if( count(Mail::failures()) == 0 ) {
                        $mail = new ScheduledMail;
                        $mail->customer_id = $customer->id;
                        $mail->type = 'shipment';
                        $mail->type_id = $shipment->id;
                        $mail->condition = 'shipment_expiring';
                        $mail->status = 'success';
                        $mail->save();
                    }
                }
            }
        }
    }

    public function wireTransferMail()
    {
        $date1 = \Carbon\Carbon::today()->subDays(2);
        $date2 = \Carbon\Carbon::today()->subDays(1);
        $shipments = ShipRequest::where('created_at', '>=', $date1)
            ->where('created_at', '<', $date2)
            ->where('shipping_status', 'inqueue')
            ->where('payment_gateway_name', 'wire')
            ->where('payment_status', 'pending')
            ->get();

        foreach ($shipments as $shipment) {

            $customer = Customer::find($shipment->customer_id);

            $datetime1 = new DateTime(date('Y-m-d'));
            $datetime2 = new DateTime(date('Y-m-d', strtotime($shipment->created_at)));
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

            if ($days == 2) {
                $schedule = ScheduledMail::where('customer_id', $customer->id)
                    ->whereDay('created_at', date('d'))
                    ->where('type', 'shipment')
                    ->where('type_id', $shipment->id)
                    ->where('condition', 'wire_transfer_2')
                    ->first();

                if (empty($schedule)) {

                    Mail::to($customer->email)->send(new PaymentWireTransfer($shipment));

                    if( count(Mail::failures()) == 0 ) {
                        $mail = new ScheduledMail;
                        $mail->customer_id = $customer->id;
                        $mail->type = 'shipment';
                        $mail->type_id = $shipment->id;
                        $mail->condition = 'wire_transfer_2';
                        $mail->status = 'success';
                        $mail->save();
                    }
                }
            }
        }
    }

    public function selfShopperReminderMail()
    {
        $date1 = \Carbon\Carbon::today()->subDays(6);
        $date2 = \Carbon\Carbon::today()->subDays(1);

        $orders = ShopperOrderSelf::where('created_at', '>=', $date1)
            ->where('created_at', '<=', $date2)
            ->where('status', 'awaiting')
            ->where('payment_gateway_name', 'wire')
            ->get();

        foreach ($orders as $order) {
            $customer = Customer::find($order->customer_id);

            $datetime1 = new DateTime(date('Y-m-d'));
            $datetime2 = new DateTime(date('Y-m-d', strtotime($order->created_at)));
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

            if ($days >=1 && $days <= 6) {

                $schedule = ScheduledMail::where('customer_id', $customer->id)
                    ->whereDay('created_at', date('d'))
                    ->where('type', 'selfshop')
                    ->where('type_id', $order->id)
                    ->where('condition', 'pay_awaiting')
                    ->first();

                if (empty($schedule)) {

                    Mail::to($customer->email)->send(new SelfShopperOrderReminder($order, $customer));

                    if( count(Mail::failures()) == 0 ) {
                        $mail = new ScheduledMail;
                        $mail->customer_id = $customer->id;
                        $mail->type = 'selfshop';
                        $mail->type_id = $order->id;
                        $mail->condition = 'pay_awaiting';
                        $mail->status = 'success';
                        $mail->save();
                    }
                }
            }
        }
    }

    public function selfShopperExpiredMail()
    {
        $date1 = \Carbon\Carbon::today()->subDays(7);
        $date2 = \Carbon\Carbon::today()->subDays(6);
        $orders = ShopperOrderSelf::where('created_at', '>=', $date1)
            ->where('created_at', '<', $date2)
            ->where('status', 'awaiting')
            ->where('payment_gateway_name', 'wire')
            ->get();

        foreach ($orders as $order) {
            $customer = Customer::find($order->customer_id);

            $datetime1 = new DateTime(date('Y-m-d'));
            $datetime2 = new DateTime(date('Y-m-d', strtotime($order->created_at)));
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

            if ($days >= 7) {

                ShopperOrderSelf::where('id', $order->id)->update(['status' => 'canceled']);

                $schedule = ScheduledMail::where('customer_id', $customer->id)
                    ->whereDay('created_at', date('d'))
                    ->where('type', 'selfshop')
                    ->where('type_id', $order->id)
                    ->where('condition', 'order_expired')
                    ->first();

                if (empty($schedule)) {

                    Mail::to($customer->email)->send(new SelfShopperOrderExpired($order, $customer));

                    if( count(Mail::failures()) == 0 ) {
                        $mail = new ScheduledMail;
                        $mail->customer_id = $customer->id;
                        $mail->type = 'selfshop';
                        $mail->type_id = $order->id;
                        $mail->condition = 'order_expired';
                        $mail->status = 'success';
                        $mail->save();
                    }
                }
            }
        }
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
