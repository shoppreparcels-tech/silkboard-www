<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Mail\Myaccount\ShipmentRefunded;
use App\ShopperBalance;
use App\PromoCode;
use App\PromoCodeApplied;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Country;
use App\ShippingRate;
use App\ShipRequest;
use App\ShipOption;
use App\Customer;
use App\Package;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\ShipTracking;
use App\ShipMail;
use App\WalletTransaction;

use App\Mail\Myaccount\ShipmentForConfirm;
use App\Mail\Myaccount\ShipmentReceived;
use App\Mail\Myaccount\ShipmentDispatched;
use App\Mail\Myaccount\ShipmentDelivered;
use App\Mail\Myaccount\PaymentFailed;
use App\Mail\Myaccount\ShipmentCancelled;

class ShippingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function countries()
    {
    	$countries = Country::orderBy('name', 'asc')->paginate(20);
    	return view('myaccount.admin.shipping-countries')->with('countries', $countries);
    }

    public function updateCountry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_code' => 'required',
            'flag' => 'mimes:jpeg,bmp,png,gif,jpg'
        ]);

        $country = Country::find($request->id);

        $filename = $country->flag;
        if($request->hasFile('flag')) {
            $file = $request->file('flag');
            $destinationPath = '/uploads/country/';
            $filename = "flag_".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }

        $country->name = $request->name;
        $country->phone_code = $request->phone_code;
        $country->flag = $filename;
        $country->discount = $request->discount;
        $country->shipping = ($request->shipping == "1") ? "1" : "0";
        $country->save();

        return redirect()->back()->with('message', 'Country Details Updated.');
    }

    public function deleteCountry(Request $request)
    {
        //Country::where('id', $request->id)->delete();
        return redirect()->back()->with('message', 'Shipping Country Removed.');
    }

    public function charges()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('myaccount.admin.shipping-charges')->with('countries', $countries);
    }

    public function shipCharge(Request $request)
    {
        $country = Country::where('iso', $request->country)->first();
        $rates = ShippingRate::where('country_id', $country->id)->orderBy('min', 'desc')->get();
        return view('myaccount.admin.shipping-charge')->with(['country'=>$country, 'rates'=>$rates]);
    }

    public function shippingRate(Request $request)
    {
        $country = $request->country;
        $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'courier' => 'required',
            'amount' => 'required',
            'timerange' => 'required',
            'item_type' => 'required',
            'rate_type' => 'required'
        ]);

        $ship = new ShippingRate;
        $ship->country_id = $country;
        $ship->min = $request->min;
        $ship->max = $request->max;
        $ship->amount = $request->amount;
        $ship->courier = $request->courier;
        $ship->timerange = $request->timerange;
        $ship->item_type = $request->item_type;
        $ship->rate_type = $request->rate_type;
        $ship->save();

        return redirect($request->redirect)->with('message', 'Shipping Rate Added To Database.');
    }

    public function deleteRate(Request $request)
    {
    	ShippingRate::where('id', $request->rate)->delete();
    	return redirect()->back()->with('message', 'Shipping Rate Removed.');
    }

    public function updateRate(Request $request)
    {
        $this->validate($request, [
            'rateid' => 'required',
            'min' => 'required',
            'max' => 'required',
            'courier' => 'required',
            'amount' => 'required',
            'timerange' => 'required',
            'item_type' => 'required',
            'rate_type' => 'required'
        ]);

        $ship = ShippingRate::find($request->rateid);
        $ship->min = $request->min;
        $ship->max = $request->max;
        $ship->amount = $request->amount;
        $ship->courier = $request->courier;
        $ship->timerange = $request->timerange;
        $ship->item_type = $request->item_type;
        $ship->rate_type = $request->rate_type;
        $ship->save();

        return redirect()->back()->with('message', 'Shipping Rates Updated.');
    }

    public function shipments(Request $request)
    {
        $query = ShipRequest::query();
        if (isset($request->search) && !empty($request->search)) {
            $keyword = $request->search;
            $query->orWhere('full_name', 'like', '%'.$keyword.'%')
                    ->orWhere('order_id', 'like', '%'.$keyword.'%')
                    ->orWhere('shipping_status', 'like', '%'.$keyword.'%');
        }
//        $shipments = $query->orderBy('updated_at', 'desc')->paginate(20);
        $shipments = $query->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.shipments')->with('shipments', $shipments);
    }

    public function shipQueue()
    {
        $shipments = ShipRequest::where('shipping_status', 'inqueue')->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.ship_queue')->with('shipments', $shipments);
    }

    public function shipReview()
    {
        $shipments = ShipRequest::where('shipping_status', 'inreview')->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.ship_review')->with('shipments', $shipments);
    }

    public function shipDispatched()
    {
        $shipments = ShipRequest::where('shipping_status', 'dispatched')->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.ship_dispatch')->with('shipments', $shipments);
    }

    public function shipDelivered()
    {
        $shipments = ShipRequest::where('shipping_status', 'delivered')->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.ship_deliver')->with('shipments', $shipments);
    }

    public function shipCanceled()
    {
        $shipments = ShipRequest::where('shipping_status', 'canceled')->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.ship_cancel')->with('shipments', $shipments);
    }
    public function shipRefunded()
    {
        $shipments = ShipRequest::where('shipping_status', 'refunded')->orderBy('updated_at', 'desc')->get();
        return view('myaccount.admin.shipments')->with('shipments', $shipments);
    }

    public function shipOrder(Request $request)
    {
        $shipment = ShipRequest::find($request->id);
        if (empty($shipment)) {
            return redirect()->route('admin.shipping');
        }

        $customer = Customer::find($shipment->customer_id);
        $package_ids = explode(",", $shipment->package_ids);
        $packages = Package::whereIn('id', $package_ids)->get();
        $shipmails = ShipMail::where('ship_request_id', $shipment->id)->get()->pluck('condition')->toArray();

        $shipment->admin_read = 'yes';
        $shipment->save();

        return view('myaccount.admin.shipment')
            ->with([
                'shipment'=>$shipment,
                'customer'=>$customer,
                'packages' => $packages,
                'shipmails' => $shipmails
            ]);
    }

    public function markUnread(Request $request)
    {
        $shipment = ShipRequest::find($request->ship_request_id);
        $shipment->admin_read = "no";
        $shipment->save();
        return redirect()->route('admin.shipping');
    }

    public function orderUpdate(Request $request)
    {

        $this->validate($request, [
            'ship_request_id' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'weight' => 'required',
            'volumetric_weight' => 'required',
            'shipment_type' => 'required',
        ]);

        $is_axis_banned_items = "";

        if ($request->is_axis_banned_item == "")
        {
            $is_axis_banned_items = 0;
        }
        else
        {
            $is_axis_banned_items = $request->is_axis_banned_item;
        }

        $shipRqst = ShipRequest::find($request->ship_request_id);
        $package_ids = explode(",", $shipRqst->package_ids);

        $customer = Customer::find($shipRqst->customer_id);

        $shipRqst->full_name = $request->full_name;
        $shipRqst->address = $request->address;
        $shipRqst->phone = $request->phone;
        $shipRqst->weight = $request->weight;
        $shipRqst->actual_weight = $request->actual_weight;
        $shipRqst->volumetric_weight = $request->volumetric_weight;
        $shipRqst->pick_up_charge = $request->pick_up_charge;
        $shipRqst->is_axis_banned_item = $is_axis_banned_items;
        $shipRqst->shipment_type = $request->shipment_type;

        $pick_up_charge = $request->pick_up_charge;
        $package_level_charges = $request->package_level_charges;
        $shipOption = ShipOption::find($shipRqst->option->id);

        if ($shipOption->liquid == '1') {
            $package_level_charges -= $shipOption->liquid_amt;

            if ($request->weight < 5) {
                $shipOption->liquid_amt = 1392.40;
            }
            if ($request->weight >= 5 && $request->weight < 10) {
                $shipOption->liquid_amt = 3009.00;
            }
            if ($request->weight >= 10 && $request->weight < 15) {
                $shipOption->liquid_amt = 5369.00;
            }
            if ($request->weight >= 15) {
                $shipOption->liquid_amt = 7729.00;
            }
        }
//        if ($shipOption->overweight == '1') {
//            $package_level_charges -= $shipOption->overweight_amt;
//            if ($request->weight > 30) {
//                $shipOption->overweight_amt = 2500.00;
//            }else{
//                $shipOption->overweight = '0';
//                $shipOption->overweight_amt = 0;
//            }
//        }else{
//            if ($request->weight > 30) {
//                $shipOption->overweight = '1';
//                $shipOption->overweight_amt = 2500.00;
//            }else{
//                $shipOption->overweight = '0';
//                $shipOption->overweight_amt = 0;
//            }
//        }

        $shipOption->save();

        $package_level_charges += $shipOption->liquid_amt;
//        $package_level_charges += $shipOption->overweight_amt;
        $shipRqst->package_level_charges = $package_level_charges;

        $types = Package::whereIn('id', $package_ids)->pluck('type')->toArray();
        $packtype = in_array("nondoc", $types) ? 'nondoc' : 'doc';

        $country = Country::find($shipRqst->country);

        /*$subtotal = $this->calcShipping($country->id, $request->weight, $packtype);
        $discount = ($country->discount / 100) * $subtotal;
        $estimated = ($subtotal -  $discount) + $request->package_level_charges;*/

        $subtotal = $request->sub_total;
        $discount = $request->discount;
        $estimated = ($subtotal -  $discount) + $package_level_charges + $pick_up_charge;

        $shipRqst->sub_total = $subtotal;
        $shipRqst->discount = $discount;
        $shipRqst->estimated = $estimated;

        $shipmails = ShipMail::where('ship_request_id', $shipRqst->id)->get()->pluck('condition')->toArray();

        switch ($request->shipping_status) {
            case 'confirmation':
                $shipRqst->shipping_status = 'confirmation';
                $shipRqst->created_at = date("Y-m-d H:i:s");
                if(!in_array('for_confirm', $shipmails)){
                    $this->mailerShipping($shipRqst->id, 'for_confirm');
                }

            break;
            case 'inqueue':
                $shipRqst->shipping_status = 'inqueue';
            break;
            case 'pay_failed':

                $this->mailerShipping($shipRqst->id, 'pay_failed');

                $shipRqst->shipping_status = 'inqueue';
                $shipRqst->payment_status = 'failed';
            break;
            case 'received':
                $shipRqst->shipping_status = 'received';
                $shipRqst->payment_status = 'success';

                $loyalid = LoyaltyPoint::where('customer_id', $shipRqst->customer_id)->first()->id;
                $loyalty = LoyaltyPoint::find($loyalid);

                if ($loyalty->ship_request_id!=1) {
                if ($loyalty->level == 1) {
                    $points = (int) ((5/100) * $shipRqst->final_amount);
                }elseif ($loyalty->level == 2) {
                    $points = (int) ((8/100) * $shipRqst->final_amount);
                }elseif ($loyalty->level == 3) {
                    $points = (int) ((10/100) * $shipRqst->final_amount);
                }elseif ($loyalty->level == 4) {
                    $points = (int) ((12/100) * $shipRqst->final_amount);
                }

                $loyalty->points += $points;
                $loyalty->total += $points;

                if ($loyalty->total < 1000) {
                    $loyalty->level = 1;
                }elseif ($loyalty->total >= 1000 && $loyalty->total < 6000) {
                    $loyalty->level = 2;
                }elseif ($loyalty->total >= 6000 && $loyalty->total < 26000) {
                    $loyalty->level = 3;
                }elseif ($loyalty->total >= 26000) {
                    $loyalty->level = 4;
                }
                $loyalty->ship_request_id = 1;
                $loyalty->save();

                $misc = new LoyaltyMisc;
                $misc->customer_id = $shipRqst->customer_id;
                $misc->info = 'Shipping Reward';
                $misc->points = $points;
                $misc->save();
                }
                if (empty($shipRqst->tracking)) {
                    $tracking = new ShipTracking;
                    $tracking->ship_request_id = $shipRqst->id;
                    $tracking->ship_request_date = date('Y-m-d');
                    $tracking->box_nos = $shipRqst->count;
                    $tracking->package_weight = $shipRqst->weight;
                    $tracking->package_value = $shipRqst->value;
                    $tracking->save();
                }

                if(!in_array('pay_received', $shipmails)){
                    $this->mailerShipping($shipRqst->id, 'pay_received');
                }

            break;
            case 'dispatched':
                if (!empty($shipRqst->tracking)) {
                    $tracking = $shipRqst->tracking;
                    if (empty($tracking->ship_request_date) || empty($tracking->carrier) || empty($tracking->box_nos) || empty($tracking->package_weight) || empty($tracking->package_value) || empty($tracking->tracking_id) || empty($tracking->tracking_url) ) {

                        return redirect()->back()->with('error', 'You must update Shipment Tracking Information to send dispatch notification!');
                    }else{
                        $shipRqst->shipping_status = 'dispatched';

                        $coupon_applied_status = PromoCodeApplied::where('shipment_id',$shipRqst->order_id)
                            ->where('status','=','success')
                            ->first();

                        if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                            $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                                ->first();

                            if (isset($promo) && !empty($promo)){
                                if(isset($promo->cashback) && !empty($promo->cashback))
                                {
                                    $total_wallet_amount = $customer->balance->amount;
                                    $shoppre_balance = ShopperBalance::find($customer->balance->id);
                                    $cashback_amount =  $estimated * ($promo->cashback / 100);
                                    $max_coupon_amount = $promo->max_cash_amount;
                                    $total_cashback_amount = 0;
                                    if($cashback_amount <= $max_coupon_amount)
                                    {
                                        $total_cashback_amount =  $cashback_amount;
                                    }
                                    else
                                    {
                                        $total_cashback_amount =  $max_coupon_amount;
                                    }
                                    $shoppre_balance->amount = $total_wallet_amount + $total_cashback_amount;
                                    $shoppre_balance->save();
                                    $trans = new WalletTransaction;
                                    $trans->customer_id = $customer->id;
                                    $trans->wallet_id = $customer->balance->id;
                                    $trans->amount = $total_cashback_amount;
                                    $trans->description = 'Cashback Amount added Successfully To Wallet | Shipment ID ' . $shipRqst->order_id;
                                    $trans->save();
                                }
                            }
                        }
                        if(!in_array('ship_dispatched', $shipmails)){
                            $this->mailerShipping($shipRqst->id, 'ship_dispatched');
                        }
                    }
                }else{
                    return redirect()->back()->with('error', 'You must update Shipment Tracking Information to send dispatch notification!');
                }
            break;
            case 'delivered':
                $shipRqst->shipping_status = 'delivered';
                Package::whereIn('id', $package_ids)->update(['status' => 'delivered']);
                if(!in_array('ship_delivered', $shipmails)){
                    $this->mailerShipping($shipRqst->id, 'ship_delivered');
                }
            break;
            case 'canceled':
                $shipRqst->shipping_status = 'canceled';
                Package::whereIn('id', $package_ids)->update(['status' => 'ship']);

                $packages = Package::where('customer_id', $shipRqst->customer_id)->whereIn('id', $package_ids)->get();
                Mail::to($customer->email)->send(new ShipmentCancelled($packages, $shipRqst));
            break;
            case 'refunded':
                $shipRqst->shipping_status = 'refunded';
                Package::whereIn('id', $package_ids)->update(['status' => 'refunded']);

                $packages = Package::where('customer_id', $shipRqst->customer_id)->whereIn('id', $package_ids)->get();
                Mail::to($customer->email)->send(new ShipmentRefunded($packages, $shipRqst));
                break;
        }

        $shipRqst->save();

        return redirect()->back()->with('message', 'Shipment Order Updated.');
    }

    public function optionsUpdate(Request $request)
    {
        $shipment = ShipRequest::find($request->ship_request_id);
        $package_level_charges = $shipment->package_level_charges;

        $option = ShipOption::find($request->optionid);

        $package_level_chargesOld = $option->repack_amt + $option->sticker_amt + $option->extrapack_amt + $option->giftwrap_amt + $option->giftnote_amt + $option->consolid_amt;
        $package_level_charges -= $package_level_chargesOld;

        if (isset($request->repack_amt) && !empty($request->repack_amt)) {
            $option->repack_amt = $request->repack_amt;
            $package_level_charges += $request->repack_amt;
        }

        if (isset($request->sticker_amt) && !empty($request->sticker_amt)) {
            $option->sticker_amt = $request->sticker_amt;
            $package_level_charges += $request->sticker_amt;
        }

        if (isset($request->extrapack_amt) && !empty($request->extrapack_amt)) {
            $option->extrapack_amt = $request->extrapack_amt;
            $package_level_charges += $request->extrapack_amt;
        }

        if (isset($request->consolid_amt) && !empty($request->consolid_amt)) {
            $option->consolid_amt = $request->consolid_amt;
            $package_level_charges += $request->consolid_amt;
        }

        if (isset($request->giftwrap_amt) && !empty($request->giftwrap_amt)) {
            $option->giftwrap_amt = $request->giftwrap_amt;
            $package_level_charges += $request->giftwrap_amt;
        }

        if (isset($request->giftnote_amt) && !empty($request->giftnote_amt)) {
            $option->giftnote_amt = $request->giftnote_amt;
            $package_level_charges += $request->giftnote_amt;
        }

        $option->save();

        $shipment->package_level_charges = $package_level_charges;
        $shipment->save();

        return redirect()->back()->with('message', 'Shipment Options Updated.');
    }

    public function trackingUpdate(Request $request)
    {
        $this->validate($request, [
            'ship_request_date' => 'required',
            'carrier' => 'required',
            'box_nos' => 'required',
            'package_weight' => 'required',
            'package_value' => 'required',
            'tracking_id' => 'required',
            'tracking_url' => 'required'
        ]);

        $tracking = ShipTracking::find($request->trackingid);
        $tracking->ship_request_date = $request->ship_request_date;
        $tracking->carrier = $request->carrier;
        $tracking->box_nos = $request->box_nos;
        $tracking->package_weight = $request->package_weight;
        $tracking->package_value = $request->package_value;
        $tracking->tracking_id = $request->tracking_id;
        $tracking->tracking_url = $request->tracking_url;
        $tracking->save();
        return redirect()->back()->with('message', 'Tracking Information Updated.');
    }

    public function calcShipping($country_id, $weight, $type)
    {
        $weight = $weight;
        $type = $weight <= 2 ? $type : 'nondoc';

        if ($weight <= 300) {
            $rate = ShippingRate::where('country_id', $country_id)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '>=', $weight)
                                ->first();
        }else{
            $rate = ShippingRate::where('country_id', $country_id)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '=', 0)
                                ->first();
        }

        if ($rate) {
            $amount = ($rate->rate_type == "fixed") ? $rate->amount : $rate->amount * $weight;
            return $amount;
        }else{
            return false;
        }
    }

    public function mailerShipping($ship_request_id, $condition)
    {
        $shipment = ShipRequest::find($ship_request_id);
        if (!empty($shipment)) {

            $customer = Customer::find($shipment->customer_id);
            $payment_method = "Please Use Paypal payment gateway to make your payment.";
            $payment_url = env('PREFIX')."myaccount.".env('DOMAIN')."/shipping/request/confirm/".$shipment->order_id;

            $mailCondition = "";

            switch ($condition) {
                case 'for_confirm':
                    Mail::to($customer->email)->send(new ShipmentForConfirm($shipment,$payment_method,$payment_url));
                    $message = 'Confirmation mail send to customer.';
                    $mailCondition = "for_confirm";
                break;
                case 'pay_received':
                    Mail::to($customer->email)->send(new ShipmentReceived($shipment));
                    $message = 'Payment notification send to customer.';
                    $mailCondition = "pay_received";
                break;
                case 'ship_dispatched':
                    Mail::to($customer->email)->send(new ShipmentDispatched($shipment));
                    $message = 'Shipment dispatched notification send to customer.';
                    $mailCondition = "ship_dispatched";
                break;
                case 'ship_delivered':
                    Mail::to($customer->email)->send(new ShipmentDelivered($shipment));
                    $message = 'Shipment delivered notification send to customer.';
                    $mailCondition = "ship_delivered";
                break;
                case 'pay_failed':
                    Mail::to($customer->email)->send(new PaymentFailed($shipment));
                    $mailCondition = "pay_failed";
                break;
            }
            if( count(Mail::failures()) == 0 ) {
                $shipMail = new ShipMail;
                $shipMail->ship_request_id = $shipment->id;
                $shipMail->condition = $mailCondition;
                $shipMail->save();
            }
        }
    }

    public function shipmentInvoice(Request $request)
    {
        $orderid = $request->order_id;
        $shipment = ShipRequest::where('order_id', $orderid)->first();
        if (!empty($shipment)) {
            $package_ids = explode(",", $shipment->package_ids);
            $packages = Package::whereIn('id', $package_ids)->get();
            return view('myaccount.customer.shipping.invoice')->with(['shipment'=>$shipment, 'packages' => $packages]);
        }else{
            return redirect(route('admin.shipping'));
        }
    }

    public function deleteShipping(Request $request)
    {
      $ship_request_id = $request->id;
      $shipment = ShipRequest::find( $ship_request_id);
      if (!empty($shipment)) {
        if ($shipment->shipping_status != 'canceled') {
            $package_ids = explode(",", $shipment->package_ids);
            Package::whereIn('id', $package_ids)->update(['status' => 'ship']);
        }
        ShipOption::where('ship_request_id', $shipment->id)->delete();
        ShipTracking::where('ship_request_id', $shipment->id)->delete();
        ShipMail::where('ship_request_id', $shipment->id)->delete();

        ShipRequest::destroy($shipment->id);
        return redirect()->route('admin.shipping')->with('error', 'Shipment deleted successfully.');

      }else{
        return redirect()->route('admin.shipping');
      }
    }
}
