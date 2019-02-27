<?php

namespace App\Http\Controllers\Myaccount\Customer;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Asana\AsanaTaskOperations;
use App\Customer;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\RefferCode;
use App\ShippingPreference;
use App\ShopperBalance;
use App\Api\MailChimp;
use App\Mail\Myaccount\EmailVerification;
use App\Mail\Myaccount\ReferEarned;
use App\Mail\Myaccount\ReferralSuccess;
use App\States;
use App\Country;
use Auth;
use App\Authorization\Authorization;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer', ['except' => ['verifyEmail', 'sendEmailVerification']]
        );
    }

    public function register()
    {
        $countries = Country::orderBy('name','asc')->get();
        $states = States::orderBy('name','asc')->get();
        return view('myaccount.customer.register')->with(['countries'=>$countries,'states'=>$states]);;
    }


    public function submitRegister(Request $request)
    {
//        $membership_type = $request->session()->get('membership_type');
        $membership_type = $request->member;
        $rules = array(
//            'title' => 'required|max:250',
            'firstname' => 'required|max:250',
//            'lastname' => 'required|max:250',
//            'email' => 'required|email|max:250|unique:customers',
            'password' => 'required|min:6',
        );

        $this->validate($request, $rules);

        $douplicate = Customer::where('email', $request->email)->first();
        if (!empty($douplicate)){
            return redirect()->back()->with('error_message', 'This email id already registered.');
        }
        $loyalPoints = 0;
        if (!empty($request->refferal)) {
            $reffer = RefferCode::where('friend', $request->email)
                ->where('code', $request->refferal)->first();
            if (!empty($reffer)) {
                $loyalPoints = 200;
                $firendId = LoyaltyPoint::where('customer_id', $reffer->customer_id)->first()->id;

                $friend = LoyaltyPoint::find($firendId);
                $friend->points += $loyalPoints;
                $friend->total += $loyalPoints;

                if ($friend->total < 1000) {
                    $friend->level = 1;
                } elseif ($friend->total >= 1000 && $friend->total < 6000) {
                    $friend->level = 2;
                } elseif ($friend->total >= 6000 && $friend->total < 26000) {
                    $friend->level = 3;
                } elseif ($friend->total >= 26000) {
                    $friend->level = 4;
                }

                $friend->save();

                $referFriend = Customer::find($reffer->customer_id);
                $misc = new LoyaltyMisc;
                $misc->customer_id = $reffer->customer_id;
                $misc->info = 'Your friend signed up with the referral code that you sent';
                $misc->points = $loyalPoints;
                $misc->save();

                Mail::to($referFriend->email)->send(new ReferEarned('Congratulations! You have 
		        earned 200 Shoppre Loyalty Points simply because your friend signed up with the referral 
		        code that you sent!'));

                Mail::to($request->email)->send(new ReferEarned('Congratulations! You have earned 
		        200 Shoppre Loyalty Points simply because you signed up with the referral code that your 
		        friend sent!'));

            } else {
                return redirect()->back()->with('error_message', 'You may entered an invalid refferal code.
	    		 Try with another or proceed without.');
            }
        }

        $customer = new Customer;

        if (!empty($request->referrer)) {
            $customer->referred_customer_id = base64_decode($request->referrer);
            $referrer = Customer::where('id', $customer->referred_customer_id)
                ->select('name', 'email')->first();
            Mail::to($referrer->email)
                ->send(new ReferralSuccess(['referrer' => $referrer, 'customer' => $customer]));
        }

        $name = "";
        if (!empty($request->title)) {
            $name .= $request->title . ". ";
        }
        $name .= $request->firstname . " " . $request->lastname;

        $customer->name = $name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->country_code = $request->country_code;
        $customer->utm_campaign = $request->utm_campaign;
        $customer->utm_source = $request->utm_source;
        $customer->utm_medium = $request->utm_medium;
        $customer->gcl_id = $request->gcl_id;
        $customer->referer = $request->referer;
        $customer->first_visit = $request->first_visit;
        $customer->membership_type = 'b';
//        $customer->medium = $request->continue;
        $customer->password = bcrypt($request->password);
        if (!empty($request->referrer)) {
            $customer->referred_customer_id = base64_decode($request->referrer);
            $referrer = Customer::where('id', base64_decode($request->referrer))
                ->select('name', 'email')->first();
            Mail::to($referrer->email)
                ->send(new ReferralSuccess(['referrer' => $referrer, 'customer' => $customer]));
        }

        do {
            $code = 'SHPR' . rand(10, 99) . "-" . rand(100, 999);
            $user_code = Customer::where('locker', $code)->get();
        } while (!$user_code->isEmpty());

        $customer->locker = $code;
        $commnet = "New Sign up " . $request->email . "\n contact No: " . $request->country_code.$request->phone;
        AsanaTaskOperations::createTask($name, $commnet, "R");

        $customer->save();

        $contact = new CustomerContact;
        $contact->customer_id = $customer->id;
        $contact->save();

        $loyalty = new LoyaltyPoint;
        $loyalty->customer_id = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = $loyalPoints;
        $loyalty->total = $loyalPoints;
        $loyalty->save();

        $misc = new LoyaltyMisc;
        $misc->customer_id = $customer->id;
        $misc->info = 'Signed up with the referral code that your friend sent';
        $misc->points = $loyalPoints;
        $misc->save();

        $setting = new ShippingPreference;
        $setting->customer_id = $customer->id;
        $setting->save();

        $balance = new ShopperBalance;
        $balance->customer_id = $customer->id;
        $balance->amount = 0;
        $balance->save();

//        MailChimp::getInterest();
        $status = MailChimp::signUpSubscriber($name,$request->email);


//        $status_ask = $this->informToAsk($customer);
        $status = $this->informMailtrain($customer);
        $this->sendEmailVerification($request->email);
        Authorization::signUp($customer);

        $this->signUp($customer);
        Authorization::authorizeUser($customer->email);

        if ($membership_type === 'y' || $membership_type == 'h') {
            if (Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
                $customer_id = Auth::id();
                $request->session()->put(['membership_type' => $membership_type]);
                return redirect(route('member.pay',['directSignup' =>'You need to confirm your account.
            We have sent you an activation code, Please check your email after payment.']));
            }
        }

        if ($request->continue)
        {
            return redirect(route('customer.login',['continue' => 'mi']))
                ->with('message', 'You need to confirm your account.
	    We have sent you an activation code, please check your email.');
        }
        else
        {
            return redirect(route('customer.login'))
                ->with('message', 'You need to confirm your account.
	    We have sent you an activation code, please check your email.');
        }
    }

    public function signUp($customer)
    {
        $status = $this->signUpAPI($customer);
        $curl = curl_init();
        $name = $customer->name;
        $name = str_replace("Mr. ","",$name);
        $name = str_replace("Ms. ","",$name);
        $name = str_replace("Mrs. ","",$name);
        $splitName = explode(' ', $name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
        $last_name = !empty($splitName[2]) ? $splitName[2] : '';
        $data_string = [
            'id' => $customer->id,
            'salutation' => '',
            'first_name' => $first_name,
            'last_name' => $middle_name.' '.$last_name,
            'email' => $customer->email,
            'virtual_address_code' => $customer->locker,
            'hooks' => false
        ];

        $url = env('MIGRATION_PREFIX') ."parcel-api.".env('DOMAIN')."/api/users/public/register";
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

        $customer = Customer::find($customer->id);

        if ($httpcode == 201)
        {
            $customer->is_migrated = 2;
            $customer->save();
        }

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $httpcode;
        }
    }

    public function signUpAPI($user)
    {
        $curl = curl_init();
        $splitName = explode(' ', $user->name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
        $last_name = !empty($splitName[2]) ? $splitName[2] : '';
        $data_string = [
            'id' => $user->id,
            'salutation' => '',
            'first_name' => $first_name,
            'last_name' => $middle_name.' '.$last_name,
            'email' => $user->email,
            'password' => $user->password,
            'hooks' => false
        ];
        $url = env('MIGRATION_PREFIX') ."api.".env('DOMAIN')."/api/users/public/register";
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
            echo "cURL Error #:" . $err;
        } else {
            return $httpcode;
        }
    }

//    public function informToAsk($customer)
//    {
//        $data = array(
//            "email" => $customer->email,
//            "group_names" => "moderator",
//            "custom_message" => "Welcome"
//        );
//        $url = 'https://ask.shoppre.com/invites?api_key=c44223e3776bbe63f4b700369b4d94a121502c460e023121fef035397d6e1dd5&api_username=shoppre';
//        return $this->curl($url, $data);
//    }
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

    private function generateToken($email)
    {
        $customer = new Customer;
        $token = hash_hmac('sha256', str_random(40), config('app.key'));
        $customer->where('email', $email)->update(['email_token' => $token]);
        return $token;
    }

    public function sendEmailVerification($email)
    {
        $this->generateToken($email);
        $customer = Customer::where('email', $email)->first();
        Mail::to($customer->email)->send(new EmailVerification($customer));
    }

    public function verifyEmail(Request $request)
    {
        if (isset($request->email)) {
            $customer = Customer::where('email', $request->email)->first();
            if ($customer->email_verify !== 'yes') {
                if ($request->token == $customer->email_token) {

                    Customer::where('email', $request->email)
                        ->update(['email_token' => null, 'email_verify' => 'yes']);

                    return redirect(route('customer.login'))
                        ->with('message', 'Email address verified successfully. Please login to continue.');
                } else {
                    return redirect(route('customer.login'))
                        ->with('error', 'Email verification failed! Resend verfication link from your profile.');
                }
            } else {
                return redirect(route('customer.login'))
                    ->with('message', 'Your email address already been verified. Please login to continue.');
            }
        }
    }
}
