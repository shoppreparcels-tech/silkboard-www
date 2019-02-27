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
      $status_code = $this->pickupApi($request);
//      return route('confirmPickup');
        return redirect(route('confirmPickup'));
//      return view('schedule-pickup.confirm-pickup');
    }

    public function pickupApi($request)
    {
        $curl = curl_init();
        $items = array();
        $i = 0;
        foreach ($request->name as $key => $name) {
            $items[$i]['name'] = $name;
            $items[$i]['quantity'] = $request->quantity[$i];
            $items[$i]['amount'] = $request->amount[$i];
            $i++;
        }
//        echo $request->pc_fname;exit;

//        $customer_id =  Auth::id();
        $special_items = "";
        $body = $request->all();
        unset($body['_token']);
        $schedule_package = new SchedulePickup($body);

//        if($request->home_made)
//        {
//            $special_items = $special_items.$request->home_made.",";
//        }
//        if($request->branded_food_items)
//        {
//            $special_items = $special_items.$request->branded_food_items.",";
//        }
//        if($request->liquid_items)
//        {
//            $special_items = $special_items.$request->liquid_items.",";
//        }
//        if($request->medicine_items)
//        {
//            $special_items = $special_items.$request->medicine_items.",";
//        }
//        if($request->electronics)
//        {
//            $special_items = $special_items.$request->electronics.",";
//        }
//        if($request->other)
//        {
//            $special_items = $special_items.$request->other.",";
//        }

//        $country = Country::where('phone_code','=',$request->dc_phone_code)->first(['id','name']);
//
//        $addressess = Address::where('customer_id','=',$customer_id)->get(['id', 'first_name']);

//        $schedule_package->special_items = $special_items;
//        $schedule_package->customer_id = $customer_id;

//        $name = $request->pc_fname.' '.$request->pc_lname;
//        $details = "Phone Number - ".$request->phone_code.'-'.$request->mobile.',Email -'.$request->user_email;
//        $pc_details = ",Pickup Details - ".$request->pc_fname."  ".$request->pc_lname." , ".$request->pc_street.
//            " , ".$request->pc_city." , ".$request->pc_state." , ".$request->pc_pincode." , ".$request->pc_contact_no." , ".$request->pc_email;
//        $dc_details = ",Destination Details - ".$request->dc_fname."  ".$request->dc_lname." , ".$request->dc_street.
//            " , ".$request->dc_city." , ".$request->dc_state." , ".$request->dc_country." , ".$request->dc_pincode." , ".$request->dc_phone_code.
//            " - ".$request->dc_contact_no;
//        $package_details = ",No of Packages -  ".$request->no_of_packages." ,Weight - ".$request->package_weight." ,Size - ".$request->size_of_package;
//        $package_items_details = ",Package items - ".$request->package_items." ,Special Items - ".$schedule_package->special_items." ,Other Items - ".$request->other_items;
//        $all_details = $details.$pc_details.$dc_details.$package_details.$package_items_details;
//        $response = AsanaTaskOperations::createTask($name, $all_details, "S");
//        $phpArray = json_decode($response,true);
//        $schedule_package->asana_url = "https://app.asana.com/0/819867433809220/".$phpArray['data']['id'];
//        $schedule_package->save();


        $size_of_package = $request->length.'*'.$request->width.'*'.$request->height;
        $name = $request->first_name.' '.$request->last_name;
        $details = "Phone Number - ".$request->phone_code."-".$request->mobile;
        $pc_details = "\n\nPickup Details - ".$request->pc_fname."  ".$request->pc_lname." , ".$request->pc_street.
            " , ".$request->pc_city." , ".$request->pc_state." , ".$request->pc_pincode." , ".$request->pc_contact_no." , ".$request->pc_email;
        $dc_details = "\n\nDestination Details - ".$request->dc_fname."  ".$request->dc_lname." , ".$request->dc_street.
            " , ".$request->dc_city." , ".$request->dc_state." , ".$request->dc_country." , ".$request->dc_pincode." , ".$request->dc_phone_code.
            " - ".$request->dc_contact_no;
        $package_details = "\n\nWeight - ".$request->package_weight."kg, Size - ".$size_of_package;
        $package_items_details = "\n\nPickup Items- ".json_encode($items);
        $all_details = $details.$pc_details.$dc_details.$package_details.$package_items_details;
        $response = AsanaTaskOperations::createTask($name, $all_details, "S");
        $phpArray = json_decode($response,true);
        $schedule_package->asana_url = "https://app.asana.com/0/819867433809220/".$phpArray['data']['id'];
        $schedule_package->save();
        $this->sendEmailPickup($schedule_package);



        //-required for node js integration - please dont delete this section

//        $data_string = [
//            'customer_id' => 2285,
//            'pickup_first_name' => $data->pc_fname,
//            'pickup_last_name' => $data->pc_lname,
//            'pickup_address' => $data->pc_street.''.$data->pc_pincode,
//            'pickup_city' => $data->pc_city,
//            'pickup_state' => $data->pc_state,
//            'pickup_mobile' => $data->pc_contact_no,
//            'pickup_email' => $data->pc_email,
//            'package_length' => $data->length,
//            'package_width' => $data->width,
//            'package_height' => $data->height,
//            'package_weight' => $data->package_weight,
//            'destination_first_name' => $data->dc_fname,
//            'destination_last_name' => $data->dc_lname,
//            'destination_address_line1' => $data->dc_street,
//            'destination_address_line2' => $data->dc_pincode,
//            'destination_city' => $data->dc_city,
//            'destination_state' => $data->dc_state,
//            'destination_country' => $data->dc_country,
//            'destination_phone_code' => $data->dc_phone_code,
//            'destination_mobile' => $data->dc_contact_no,
//            'comment' => $data->comment,
//            'items'=> $items,
//        ];
//
//        $size_of_package = $data->length.'*'.$data->width.'*'.$data->height;
//        $name = $data->pc_fname.' '.$data->pc_lname;
//        $details = "Phone Number - ".$data->pc_contact_no.',Email -'.$data->pc_email;
//        $pc_details = "\nPickup Details - ".$data->pc_fname."  ".$data->pc_lname." , ".$data->pc_street.
//            " , ".$data->pc_city." , ".$data->pc_state." , ".$data->pc_pincode." , ".$data->pc_contact_no." , ".$data->pc_email;
//        $dc_details = "\nDestination Details - ".$data->dc_fname."  ".$data->dc_lname." , ".$data->dc_street.
//            " , ".$data->dc_city." , ".$data->dc_state." , ".$data->dc_country." , ".$data->dc_pincode." , ".$data->dc_phone_code.
//            " - ".$data->dc_contact_no;
//        $package_details = "\nWeight - ".$data->package_weight."kg, Size - ".$size_of_package;
//        $package_items_details = "\nPickup Items- ".json_encode($items);
//        $all_details = $details.$pc_details.$dc_details.$package_details.$package_items_details;
//        $response = AsanaTaskOperations::createTask($name, $all_details, "S");
//        $phpArray = json_decode($response,true);
//
//
//        $url = env('MIGRATION_PREFIX') ."parcel-api.".env('DOMAIN')."/api/pickups";
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => $url,
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_HEADER  => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_AUTOREFERER    => true,
//            CURLOPT_CONNECTTIMEOUT => 120,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "POST",
//            CURLOPT_POSTFIELDS => json_encode($data_string),
//            CURLOPT_HTTPHEADER => array(
//                "cache-control: no-cache",
//                "content-type: application/json",
//                "postman-token: abea44b9-1858-235d-ef6d-a7d67e8130da"
//            ),
//        ));
//
//        $response = curl_exec($curl);
//        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//        $err = curl_error($curl);
//
//        curl_close($curl);
//
//        if ($err) {
//            echo "cURL Error #:" . $err;
//        } else {
//            return $httpcode;
//        }
    }

    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
//        $states = States::orderBy('name','asc')->get();
        $destination_addresses = '';
//        $is_authenticated = Auth::check();
//        if ($is_authenticated) {
//            $customer_id =  Auth::id();
//            $destination_addresses = Address::where('customer_id',$customer_id)->get();
//        }
        $pickup_address = '';
        $is_authenticated = Auth::check();
        if ($is_authenticated) {
            $customer_id =  Auth::id();
            $pickup_address = SchedulePickup::whereRaw("id = (select max(`id`) from schedule_pickups where customer_id='$customer_id')")->first();
        }
        return view('schedule-pickup.schedule-pickup')
            ->with([
            'countries'=>$countries,
//            'states'=>$states,
            'pickup_address'=>$pickup_address,
//            'destination_addresses'=>$destination_addresses
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
