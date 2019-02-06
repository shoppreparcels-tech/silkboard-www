<?php

namespace App\Http\Controllers;

use App\Country;
use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;
use App\Mailchimp\mailChimpTaskOperations;
use App\Asana\AsanaTaskOperations;

use App\States;
use Auth;

use App\Customer;
use App\ShopperBalance;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\Myaccount\LoyaltyMisc;
use App\ShippingPreference;
use App\Address;

class SchedulePickupController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth:customer');
//    }

   public function getDestinationAddressAjax(Request $request) {
       $address = Address::where('id', $request->id)->first();
       if (!empty($address)) {
           return response()->json(['status'=>'success','address'=>$address]);
       }
       return response()->json(['status'=>'not_found','address'=>$address]);
   }

    public function asanaTracking(Request $request) {

        if (!empty($request->pickup_id)) {
            $schedule_pickup = SchedulePickup::where('id', '=', $request->pickup_id)->first();
            $schedule_pickup->asana_url = $request->asana_url;
            $schedule_pickup->save();
            return response()->json([ 'error'=>'0', 'message'=>'success']);
        }
    }

    public function submit(Request $request)
    {
        $customer_id =  Auth::id();
        $special_items = "";
        $body = $request->all();
        unset($body['_token']);
        $schedule_package = new SchedulePickup($body);
        if($request->home_made)
        {
            $special_items = $special_items.$request->home_made.",";
        }
        if($request->branded_food_items)
        {
            $special_items = $special_items.$request->branded_food_items.",";
        }
        if($request->liquid_items)
        {
            $special_items = $special_items.$request->liquid_items.",";
        }
        if($request->medicine_items)
        {
            $special_items = $special_items.$request->medicine_items.",";
        }
        if($request->electronics)
        {
            $special_items = $special_items.$request->electronics.",";
        }
        if($request->other)
        {
            $special_items = $special_items.$request->other.",";
        }

        $country = Country::where('phone_code','=',$request->dc_phone_code)->first(['id','name']);

        $addressess = Address::where('customer_id','=',$customer_id)->get(['id', 'first_name']);

        if ($addressess->count() < 5) {
            $address = new Address();
            $address->customer_id = $customer_id;
            $address->country_id = $country->id;
            $address->first_name = $request->dc_fname;
            $address->last_name = $request->dc_lname;
            $address->line1 = $request->dc_street;
            $address->line2 = $request->dc_fname;
            $address->state = $request->dc_state;
            $address->city = $request->dc_city;
            $address->country = $request->dc_country;
            $address->pincode = $request->dc_pincode;
            $address->country_code = $request->dc_phone_code;
            $address->phone = $request->dc_contact_no;
            $status = $address->save();
        }

        $schedule_package->special_items = $special_items;
        $schedule_package->customer_id = $customer_id;

        $name = $request->first_name.' '.$request->last_name;
        $details = "Phone Number - ".$request->phone_code.'-'.$request->mobile.',Email -'.$request->user_email;
        $pc_details = ",Pickup Details - ".$request->pc_fname."  ".$request->pc_lname." , ".$request->pc_street.
            " , ".$request->pc_city." , ".$request->pc_state." , ".$request->pc_pincode." , ".$request->pc_contact_no." , ".$request->pc_email;
        $dc_details = ",Destination Details - ".$request->dc_fname."  ".$request->dc_lname." , ".$request->dc_street.
            " , ".$request->dc_city." , ".$request->dc_state." , ".$request->dc_country." , ".$request->dc_pincode." , ".$request->dc_phone_code.
            " - ".$request->dc_contact_no;
        $package_details = ",No of Packages -  ".$request->no_of_packages." ,Weight - ".$request->package_weight." ,Size - ".$request->size_of_package;
        $package_items_details = ",Package items - ".$request->package_items." ,Special Items - ".$schedule_package->special_items." ,Other Items - ".$request->other_items;
        $all_details = $details.$pc_details.$dc_details.$package_details.$package_items_details;
        $response = AsanaTaskOperations::createTask($name, $all_details, "S");
        $phpArray = json_decode($response,true);
        $schedule_package->asana_url = "https://app.asana.com/0/819867433809220/".$phpArray['data']['id'];
        $schedule_package->save();

        $this->sendEmailPickup($schedule_package);
        return response()->json([ 'error'=>'0', 'message'=>$request->user_email]);
    }

    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
        $states = States::orderBy('name','asc')->get();
        $destination_addresses = '';
        $is_authenticated = Auth::check();
        if ($is_authenticated) {
            $customer_id =  Auth::id();
            $destination_addresses = Address::where('customer_id',$customer_id)->get();
        }
        $pickup_address = '';
        $is_authenticated = Auth::check();
        if ($is_authenticated) {
            $customer_id =  Auth::id();
            $pickup_address = SchedulePickup::whereRaw("id = (select max(`id`) from schedule_pickups where customer_id='$customer_id')")->first();
        }
        return view('schedule-pickup.schedule-pickup')
            ->with([
            'countries'=>$countries,
            'states'=>$states,
            'pickup_address'=>$pickup_address,
            'destination_addresses'=>$destination_addresses
            ]);
    }

     public function sendEmailPickup($schedule_package)
    {
        if(!empty($schedule_package->pc_email)) {
            Mail::to($schedule_package->user_email)
                ->bcc(['support@shoppre.com',$schedule_package->pc_email])
                ->send(new EmailSchedulePickup($schedule_package));
        }
        else {
            Mail::to($schedule_package->user_email)
                ->bcc(['support@shoppre.com'])
                ->send(new EmailSchedulePickup($schedule_package));
        }
    }

    public function confirm()
    {
        return view('schedule-pickup.confirm-pickup');
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
