<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Customer;
use App\Mail\EmailVerification;

class RegisterController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:customer', ['except' => ['verifyEmail', 'sendEmailVerification'] ]
			);
	}

	public function register()
	{
		return view('customer.register');
	}

	public function submitRegister(Request $request)
	{
		$rules = array(
			'name' => 'required|max:250',
	        'email' => 'required|email|max:250|unique:customers',
	        'password' => 'required|min:6|confirmed',
	    );

    	$this->validate($request, $rules);
	    
	    $customer = new Customer;

	    $customer->name = $request->name;
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

	    $this->sendEmailVerification($request->email);

	    return redirect(route('customer.login'))->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
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
	    			return view('customer.verify')->with('message', 'Email address verified successfully.');
	    		}else{
	    			return view('customer.verify')->with('error', 'Email verification failed! Resend verfication link from your profile.');
	    		}
			}else{
				return view('customer.verify')->with('message', 'Your email address already verified.');
			}
    	}
    }
}
