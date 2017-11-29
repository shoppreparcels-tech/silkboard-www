<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;
use App\LoyaltyPoint;
use App\ShippingPreference;

use Socialite;
use Auth;

class SocialAuthController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        $socialUser = Socialite::driver('google')->user();
        if (!empty($socialUser->email)) {
        	$checkProfile = Customer::where('email', $socialUser->email)->first();
	        if (empty($checkProfile)) {
	        	$customer = new Customer;
			    $customer->name = $socialUser->name;
			    $customer->email = $socialUser->email;
			    $customer->password = bcrypt(rand(1000000, 9999999));
			    do{
			        $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
			        $user_code = Customer::where('locker', $code)->get();
			    }while(!$user_code->isEmpty());
			    $customer->locker = $code;
			    $customer->email_verify = 'yes';
			    $customer->save();

			    $loyalty = new LoyaltyPoint;
		        $loyalty->custid = $customer->id;
		        $loyalty->level = 1;
		        $loyalty->points = 0;
		        $loyalty->total = 0;
		        $loyalty->save();

		        $setting = new ShippingPreference;
		        $setting->custid = $customer->id;
		        $setting->save();

			    $custid = $customer->id;
	        }else{
	        	$custid = $checkProfile->id;
	        }

	        Auth::loginUsingId($custid);

	        return redirect()->route('customer.locker');

        }else{
        	return redirect(route('customer.register'))->with('error', 'Sorry, Now we are unable to login/register using Google API. Try again after sometime!');
        }
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(Request $request)
    {
    	if (isset($request->error_code) && $request->error_code == 200) {
    		return redirect(route('customer.register'))->with('error', 'Facebook login process canceled.');
    	}

        $socialUser = Socialite::driver('facebook')->user();
        if (!empty($socialUser->email)) {
        	$checkProfile = Customer::where('email', $socialUser->email)->first();
	        if (empty($checkProfile)) {
	        	$customer = new Customer;
			    $customer->name = $socialUser->name;
			    $customer->email = $socialUser->email;
			    $customer->password = bcrypt(rand(1000000, 9999999));
			    do{
			        $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
			        $user_code = Customer::where('locker', $code)->get();
			    }while(!$user_code->isEmpty());
			    $customer->locker = $code;
			    $customer->email_verify = 'yes';
			    $customer->save();

			    $loyalty = new LoyaltyPoint;
		        $loyalty->custid = $customer->id;
		        $loyalty->level = 1;
		        $loyalty->points = 0;
		        $loyalty->total = 0;
		        $loyalty->save();

		        $setting = new ShippingPreference;
		        $setting->custid = $customer->id;
		        $setting->save();

			    $custid = $customer->id;
	        }else{
	        	$custid = $checkProfile->id;
	        }

	        Auth::loginUsingId($custid);

	        return redirect()->route('customer.locker');

        }else{
        	return redirect(route('customer.register'))->with('error', 'Sorry, Now we are unable to login/register using Facebook API. Try again after sometime!');
        }
    }
}
