<?php

namespace App\Http\Controllers;

use App\Authorization\Authorization;
use App\Country;
use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;
use App\Mail\Myaccount\SignUpWelcomeMail;
use App\Mail\Myaccount\EmailVerification;
use App\Mailchimp\mailChimpTaskOperations;
use App\Asana\AsanaTaskOperations;

use App\States;
use Auth;

use App\Api\MailChimp;
use App\Customer;
use App\ShopperBalance;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
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
        if ($status_code === 201) {
            $message = "Pickup Request Received. You need to confirm your account. We have sent you an activation email Please check your Email";
        } else {
            $message = 'Pickup Request Received. Please login to Continue';
        }
        $url = env('MIGRATION_PREFIX') . "login.".env('DOMAIN')."/signin?client_id=courier&message=".$message;
        return redirect($url);
    }

    public function pickupApi($request)
    {
        $customer_name = explode(" ",$request->first_name);
        $first_name = '';
        $last_name = '';
        if (sizeof($customer_name) > 1) {
            $first_name = $customer_name[0];
            $last_name = $customer_name[1];
        }
        else {
            $first_name = $customer_name[0];
        }
        $phone_code = $request->phone_code;
        $mobile = $request->mobile;
        $email = $request->user_email;
        $customer = $this->signUpPhp($request->first_name, $email, $phone_code, $mobile);
        $curl = curl_init();
        $items = array();
        $i = 0;
        $items_data = '';
        $newline = '
        ';
        foreach ($request->name as $key => $name) {
            $items[$i]['name'] = $name;
            $items[$i]['quantity'] = (int)$request->quantity[$i];
            $items[$i]['price'] = (float)$request->amount[$i];
            $i++;

            $items_data = $items_data.' item '.$i.'= Name-'.$name. ', Quantity-'.$request->quantity[$i-1].', Price-'. $request->amount[$i-1].$newline;
        }
        $data = $request;
        $data_string = [
            'customer_id' => $customer->id,
            'pickup_first_name' => $first_name,
            'pickup_last_name' => $last_name,
            'type' => $data->type,
            'drop_off_id' => $data->drop_off_location_id,
            'pickup_address' => $data->pc_street,
            'pickup_pincode' => $data->pc_pincode,
            'pickup_city' => $data->pc_city,
            'pickup_state' => $data->pc_state,
            'pickup_mobile' => '+91'.$data->pc_contact_no,
            'pickup_email' => $data->pc_email,
            'package_length' => $data->length,
            'package_width' => $data->width,
            'package_height' => $data->height,
            'package_weight' => $data->package_weight,
            'number_of_packages' => $data->no_of_packages,
            'destination_first_name' => $data->dc_fname,
            'destination_last_name' => $data->dc_lname,
            'destination_address_line1' => $data->dc_street,
            'destination_address_line2' => '',
            'destination_pincode' => $data->dc_pincode,
            'destination_city' => $data->dc_city,
            'destination_state' => $data->dc_state,
            'destination_country' => $data->dc_country,
            'destination_phone_code' => $data->dc_phone_code,
            'destination_mobile' => '+'.$data->dc_phone_code.$data->dc_contact_no,
            'comment' => $data->comment,
            'items'=> $items,
        ];

        $request->items = $items_data;

        $this->sendEmailPickup($request);


        $url = env('MIGRATION_PREFIX') ."courier.".env('DOMAIN')."/api/shipments";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER  => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: abea44b9-1858-235d-ef6d-a7d67e8130da"
            ),
        ));

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return $customer->status_code;
        } else {
            return $customer->status_code;
        }
    }

    public function signUpPhp($name, $email, $phone_code, $mobile) {
        $rules = array(
//            'title' => 'required|max:250',
//            'firstname' => 'required|max:250',
//            'lastname' => 'required|max:250',
//            'email' => 'required|email|max:250|unique:customers',
            'password' => 'required|min:6',
        );

        $customer = new Customer;

        $douplicate = Customer::where('email', $email)->first();

        if (!empty($douplicate)){
            $customer = $douplicate;
        }
        else {
            $phone = $phone_code.$mobile;
            $loyalPoints = 0;

            $customer = new Customer;

            $customer->name = $name;
            $customer->email = $email;
            $customer->phone = $phone;
            $customer->country_code = $phone_code;
            $customer->utm_campaign = 'no-utm_campaign';
            $customer->utm_source = 'no-utm_source';
            $customer->utm_medium = 'no-utm_medium';
            $customer->gcl_id = 'no-gcl_id';
            $customer->referer = 'no-referer';
            $customer->first_visit = 'no-first_visit';
            $customer->membership_type = 'b';
            $customer->password = $name;
//            do {
//                $code = 'SHPR' . rand(10, 99) . "-" . rand(100, 999);
//                $user_code = Customer::where('locker', $code)->get();
//            } while (!$user_code->isEmpty());

//            $customer->locker = $code;
            $commnet = "New Sign up " . $email . "\n contact No: +" . $phone_code.$phone;
        }

        $c = $this->signUpAPI($customer);

        $customer->id = $c['response']->id;
        $customer->status_code = $c['code'];
        return $customer;
    }

    public function sendEmailVerification($email)
    {
        $this->generateToken($email);
        $customer = Customer::where('email', $email)->first();
        Mail::to($customer->email)->send(new EmailVerification($customer));
    }

    private function generateToken($email)
    {
        $customer = new Customer;
        $token = hash_hmac('sha256', str_random(40), config('app.key'));
        $customer->where('email', $email)->update(['email_token' => $token]);
        return $token;
    }

    public function signUpAPI($user)
    {
        $curl = curl_init();
        $splitName = explode(' ', $user->name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
        $last_name = !empty($splitName[2]) ? $splitName[2] : '';
        $data_string = [
            'salutation' => '',
            'first_name' => $first_name,
            'last_name' => $middle_name.' '.$last_name,
            'email' => $user->email,
            'phone' => $user->phone,
            'password' => $user->password,
            'hooks' => false,
            'domain' => 'courier',
        ];

        $url = env('MIGRATION_PREFIX') ."login.".env('DOMAIN')."/api/users/register";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER  => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: abea44b9-1858-235d-ef6d-a7d67e8130da"
            ),
        ));

        $response = curl_exec($curl);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err = curl_error($curl);
        curl_close($curl);



        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return [ 'response' => json_decode($body), 'code' => $httpcode ];
        }
    }

    public function informMailtrain($customer)
    {
        $data = array(
            "EMAIL" => $customer->email,
            "FIRST_NAME" => $customer->name,
            "REQUIRE_CONFIRMATION" => "no"
        );
        $url = 'https://mailtrain.shoppre.com/api/subscribe/-TG3P-amN?access_token=9f19384da11de72805b86b4640bb64da9efdaff0';
        return $this->curl($url, $data);
    }

    public function curl($url, $data)
    {
        $data_string = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );
        return curl_exec($ch);
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
                ->bcc(['support@shopprecouriers.com',$schedule_package->pc_email])
                ->send(new EmailSchedulePickup($schedule_package));
        }
        else {
            Mail::to($schedule_package->user_email)
                ->bcc(['support@shopprecouriers.com'])
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
