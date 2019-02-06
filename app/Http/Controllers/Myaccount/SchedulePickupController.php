<?php

namespace App\Http\Controllers\Myaccount;

use App\Customer;
use App\Http\Controllers\Controller;
use App\SchedulePickup;
use App\ShopperBalance;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\ShippingPreference;
use Illuminate\Http\Request;

class SchedulePickupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function asanaTracking(Request $request) {
        if (!empty($request->pickup_id)) {
            $schedule_pickup = SchedulePickup::where('id', '=', $request->pickup_id)->first();
            $schedule_pickup->asana_url = $request->asana_url;
            $schedule_pickup->save();
            return response()->json([ 'error'=>'0', 'message'=>'success']);
        }
    }

    public function pickupUpdateSubmit(Request $req)
    {
        $id = $req->pickup_id;
        $status = $req->status;
        $action_comment = $req->action_comment;
        // - updating pickup status
        SchedulePickup::where('id', $id)
            ->update([
                'status' => $status,
                'action_comment' => $action_comment
            ]);

        $pickup = SchedulePickup::where('id', $id)
            ->select('user_email', 'mobile', 'id', 'first_name', 'last_name')
            ->first();

        $first_name = $pickup->first_name;
        $last_name = $pickup->last_name;
        $user_email = $pickup->user_email;
        $mobile = $pickup->mobile;

        $customer_check = Customer::where('email', $user_email)
            ->first();

        if (empty($customer_check)) {
            $user = new Customer;
            $user->name = $first_name . $last_name;
            $user->email = $user_email;
            $user->password = 'shoppre@111';
            $user->phone = $mobile;

            do {
                $code = 'SHPR' . rand(10, 99) . "-" . rand(100, 999);
                echo($code);
                $user_code = Customer::where('locker', $code)
                    ->get();
            } while (!$user_code->isEmpty());

            $user->locker = $code;
            $user->save();

            $customer_id = $user->id;
            $locker_number = $user->locker;

            $contact = new CustomerContact;
            $contact->customer_id = $customer_id;
            $contact->save();

            $loyalty = new LoyaltyPoint;
            $loyalty->customer_id = $customer_id;
            $loyalty->save();

            $loyalty_misc = new LoyaltyMisc;
            $loyalty_misc->customer_id = $customer_id;
            $loyalty_misc->save();

            $shopper_balance = new ShopperBalance;
            $shopper_balance->customer_id = $customer_id;
            $shopper_balance->amount = 0;
            $shopper_balance->save();

            $shipping_preference = new ShippingPreference;
            $shipping_preference->customer_id = $customer_id;
            $shipping_preference->save();
        } else {
            $locker_number = $customer_check->locker;
        }

        return redirect(route('myaccount.admin.package.add', [
            'schedule_pick_id' => $id,
            'locker_number' => $locker_number]));
    }

    public function schedulePickupList()
    {
        $schedule_pickups = SchedulePickup::orderBy('id', 'desc')
            ->select([
                'id', 'first_name', 'last_name', 'user_email',
                'package_weight', 'package_items', 'status', 'created_at'
            ])
            ->paginate(20);
        return view('myaccount.admin.schedule-pickup.list')
            ->with([
                'schedule_pickups' => $schedule_pickups
            ]);
    }

    public function pickupView(Request $req)
    {
        $pickup_id = $req->id;
        $pickup_details = SchedulePickup::where('id', $pickup_id)
            ->first();
        return view('myaccount.admin.schedule-pickup.detail')
            ->with([
                'pickup_details' => $pickup_details
            ]);
    }

    public function pickupViewDetail(Request $req)
    {
        $pickup_id = $req->id;
        $pickup_details = SchedulePickup::where('id', $pickup_id)
            ->first();
        return view('myaccount.admin.schedule-pickup.pickup-detail')
            ->with([
                'pickup_details' => $pickup_details
            ]);
    }

    public function pickupList()
    {
        $pickups = SchedulePickup::orderBy('id','desc')->paginate(20);
        return view('myaccount.admin.schedule-pickup.list')->with(['pickups' => $pickups]);
    }
}
