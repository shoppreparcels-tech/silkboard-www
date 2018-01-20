<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Customer;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\RefferCode;
use App\ShippingPreference;
use App\ShopperBalance;
use Auth;
use App\Mail\EmailVerification;

class RegisterController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:customer', ['except' => ['verifyEmail', 'sendEmailVerification'] ]
			);
	}


    public function homeSignup(Request $request)
    {
        $rules = array(
            'firstname' => 'required|max:250',
            'lastname' => 'required|max:250',
            'email' => 'required|email|max:250|unique:customers',
            'password' => 'required|min:6|confirmed',
        );

        $this->validate($request, $rules);

        $loyalPoints = 0;
        if (!empty($request->refferal)) {
            $reffer = RefferCode::where('friend', $request->email)->where('code', $request->refferal)->first();
            if (!empty($reffer)) {
                $loyalPoints = 100;
                $firendId = LoyaltyPoint::where('custid', $reffer->custid)->first()->id;

                $friend = LoyaltyPoint::find($firendId);
                $friend->points += $loyalPoints;
                $friend->total += $loyalPoints;

                $friendLevel = $friend->level;
                if ($friend->total > 1000) {
                    $friendLevel = (int)($friend->total / 1000) + 1;
                }
                $friend->level = $friendLevel;
                $friend->save();
            }else{
                return redirect()->back()->with('error', 'You may entered an invalid refferal code. Try with another or proceed without.');
            }
        }

        $customer = new Customer;

        $customer->name = $request->firstname." ".$request->lastname;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);

        do
        {
            $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
            $user_code = Customer::where('locker', $code)->get();
        }
        while(!$user_code->isEmpty());

        $customer->locker = $code;
        $customer->email_verify = "yes";
        $customer->save();

        $contact = new CustomerContact;
        $contact->customer_id = $customer->id;
        $contact->save();

        $loyalty = new LoyaltyPoint;
        $loyalty->custid = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = $loyalPoints;
        $loyalty->total = $loyalPoints;
        $loyalty->save();

        $setting = new ShippingPreference;
        $setting->custid = $customer->id;
        $setting->save();

        $balance = new ShopperBalance;
        $balance->custid = $customer->id;
        $balance->amount = 0;
        $balance->save();

        if (Auth::guard('customer')->attempt(['email' => $request->email,
            'password' => $request->password], '')) {
            return redirect()->intended(route('home'));
        }
        else
        {
            return redirect()->intended(route('login'));
        }
    }

	public function register()
	{
		return view('customer.register');
	}

	public function submitRegister(Request $request)
	{
		$rules = array(
			'firstname' => 'required|max:250',
			'lastname' => 'required|max:250',
	        'email' => 'required|email|max:250|unique:customers',
	        'password' => 'required|min:6|confirmed',
	    );

    	$this->validate($request, $rules);

    	$loyalPoints = 0;
    	if (!empty($request->refferal)) {
	    	$reffer = RefferCode::where('friend', $request->email)->where('code', $request->refferal)->first();
	    	if (!empty($reffer)) {
	    		$loyalPoints = 100;
	    		$firendId = LoyaltyPoint::where('custid', $reffer->custid)->first()->id;

	    		$friend = LoyaltyPoint::find($firendId);
		        $friend->points += $loyalPoints;
		        $friend->total += $loyalPoints;

		        $friendLevel = $friend->level;
		        if ($friend->total > 1000) {
		        	$friendLevel = (int)($friend->total / 1000) + 1;
		        }
		        $friend->level = $friendLevel;
		        $friend->save();
	    	}else{
	    		return redirect()->back()->with('error', 'You may entered an invalid refferal code. Try with another or proceed without.');
	    	}
	    }
	    
	    $customer = new Customer;

	    $customer->name = $request->firstname." ".$request->lastname;
	    $customer->email = $request->email;
	    $customer->password = bcrypt($request->password);

	    do
	    {
	        $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
	        $user_code = Customer::where('locker', $code)->get();
	    }
	    while(!$user_code->isEmpty());

	    $customer->locker = $code;
	    $customer->save();

	    $contact = new CustomerContact;
	    $contact->customer_id = $customer->id;
	    $contact->save();

	    $loyalty = new LoyaltyPoint;
        $loyalty->custid = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = $loyalPoints;
        $loyalty->total = $loyalPoints;
        $loyalty->save();

        $setting = new ShippingPreference;
        $setting->custid = $customer->id;
        $setting->save();

        $balance = new ShopperBalance;
        $balance->custid = $customer->id;
        $balance->amount = 0;
        $balance->save();

	    $this->sendEmailVerification($request->email);

	    return redirect(route('home'))->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
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
	    			Customer::where('email', $request->email)->update(['email_token' => null, 'email_verify'=>'yes']);
	    			return redirect(route('customer.login'))->with('message', 'Email address verified successfully. Please login to continue.');
	    		}else{
	    			return redirect(route('customer.login'))->with('error', 'Email verification failed! Resend verfication link from your profile.');
	    		}
			}else{
				return redirect(route('customer.login'))->with('message', 'Your email address already been verified. Please login to continue.');
			}
    	}
    }
}
