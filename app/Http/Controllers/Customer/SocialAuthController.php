<?php

namespace App\Http\Controllers\Customer;

use App\GoogleUrl\GoogleShortUrl;
use App\ShipMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\ShippingPreference;
use App\ShopperBalance;

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
			    $customer->password = bcrypt('shoppre@570');
			    do{
			        $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
			        $user_code = Customer::where('locker', $code)->get();
			    }while(!$user_code->isEmpty());
			    $customer->locker = $code;
			    $customer->email_verify = 'yes';
			    $customer->save();

			    $contact = new CustomerContact;
			    $contact->customer_id = $customer->id;
			    $contact->save();

			    $loyalty = new LoyaltyPoint;
		        $loyalty->custid = $customer->id;
		        $loyalty->level = 1;
		        $loyalty->points = 0;
		        $loyalty->total = 0;
		        $loyalty->save();

		        $setting = new ShippingPreference;
		        $setting->custid = $customer->id;
		        $setting->save();

		        $balance = new ShopperBalance;
		        $balance->custid = $customer->id;
		        $balance->amount = 0;
		        $balance->save();

			    $custid = $customer->id;
	        }
	        else
	        {
	        	$custid = $checkProfile->id;
	        }

	        $this->checkProfileSet($custid);
	        Auth::loginUsingId($custid);
	        return redirect()->route('schedulePickup.List');

        }
        else
        {
        	 return redirect(route('customer.login'))->with('error', 'Sorry, Now we are unable to login/register
        	 using Google API. Try again after sometime!');
        }
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(Request $request)
    {
    	if (isset($request->error_code) && $request->error_code == 200) {
    		return redirect(route('customer.login'))->with('error', 'Facebook login process canceled.');
    	}

        $socialUser = Socialite::driver('facebook')->user();
        if (!empty($socialUser->email)) {
        	$checkProfile = Customer::where('email', $socialUser->email)->first();
	        if (empty($checkProfile)) {
	        	$customer = new Customer;
			    $customer->name = $socialUser->name;
			    $customer->email = $socialUser->email;
			    $customer->password = bcrypt('shoppre@570');
			    do{
			        $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
			        $user_code = Customer::where('locker', $code)->get();
			    }while(!$user_code->isEmpty());
			    $customer->locker = $code;
			    $customer->email_verify = 'yes';
			    $customer->save();

			    $contact = new CustomerContact;
			    $contact->customer_id = $customer->id;
			    $contact->save();

			    $loyalty = new LoyaltyPoint;
		        $loyalty->custid = $customer->id;
		        $loyalty->level = 1;
		        $loyalty->points = 0;
		        $loyalty->total = 0;
		        $loyalty->save();

		        $setting = new ShippingPreference;
		        $setting->custid = $customer->id;
		        $setting->save();

		        $balance = new ShopperBalance;
		        $balance->custid = $customer->id;
		        $balance->amount = 0;
		        $balance->save();

			    $custid = $customer->id;
	        }
	        else{
	        	$custid = $checkProfile->id;
	        }

	        $this->checkProfileSet($custid);
	        Auth::loginUsingId($custid);

	        return redirect()->route('schedulePickup.List');

        }else{
        	return redirect(route('customer.login'))->with('error', 'Sorry, Now we are unable to login/register using Facebook API. Try again after sometime!');
        }
    }

    public function checkProfileSet($custid)
    {
        if (empty(CustomerContact::where('customer_id', $custid)->first())) {
            $contact = new CustomerContact;
            $contact->customer_id = $custid;
            $contact->save();
        }
        
        if (empty(LoyaltyPoint::where('custid', $custid)->first())) {
            $loyalty = new LoyaltyPoint;
            $loyalty->custid = $custid;
            $loyalty->level = 1;
            $loyalty->points = 0;
            $loyalty->total = 0;
            $loyalty->save();
        }

        if (empty(ShippingPreference::where('custid', $custid)->first())) {
            $setting = new ShippingPreference;
            $setting->custid = $custid;
            $setting->save();
        }

        if (empty(ShopperBalance::where('custid', $custid)->first())) {
            $balance = new ShopperBalance;
            $balance->custid = $custid;
            $balance->amount = 0;
            $balance->save();
        }
    }
}
