<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Authorization\Authorization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\ShopperBalance;
use App\LoyaltyPoint;
use App\ShippingPreference;
use App\LoyaltyMisc;

use Auth;

class LoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:admin');
	}
    public function showLogin()
    {
    	return view('myaccount.admin.login');
    }

    public function loginWithShoppre(Request $request) {
        $auth_code = $request->code;

        $response = Authorization::codeToToken($auth_code);
        $me = Authorization::tokenToUserInfo($response->access_token);

        $customer = Customer::where('id', $me->id)->select(['id','name','is_migrated'])->first();
        if (empty($customer)) {
            $this->createUser($me->id, $response->access_token);
        }
        Auth::guard('customer')->loginUsingId($me->id);

         return redirect(env('PREFIX').'login.'.env('DOMAIN')).'/home';
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	if (Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password], $request->remember)) {
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	return redirect()->back()->with('message', 'Your username/password combination was incorrect')->withInput($request->only('username', 'remember'));
    }

    public function createUser($id, $token) {
        $response = Authorization::fetchUser($id, $token);
        $response = json_decode($response) ;

        $customer = new Customer;
        $customer->name = $response->first_name.' '.$response->last_name;
        $customer->email = $response->email;
        $customer->phone = $response->phone;
        $customer->password = $response->password;
        $customer->is_migrated = 2;
        $customer->email_verify = $response->is_email_verified === 1 ? 'yes' : 'no';
        $customer->id = $id;

        $customer->save();

        $loyalPoints = 0;

        $loyalty = new LoyaltyPoint;
        $loyalty->customer_id = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = $loyalPoints;
        $loyalty->total = $loyalPoints;
        $loyalty->save();

        $misc = new LoyaltyMisc;
        $misc->customer_id = $customer->id;
        $misc->info = 'info';
        $misc->points = $loyalPoints;
        $misc->save();

        $setting = new ShippingPreference;
        $setting->customer_id = $customer->id;
        $setting->save();

        $balance = new ShopperBalance;
        $balance->customer_id = $customer->id;
        $balance->amount = 0;
        $balance->save();

        return $customer;
    }

    public function generateVirtualCode(Request $request) {
        $customer = new Customer;
        do {
            $code = 'SHPR' . rand(10, 99) . "-" . rand(100, 999);
            $user_code = Customer::where('locker', $code)->get();
        } while (!$user_code->isEmpty());

        $customer->locker = $code;

        Customer::where('id', $request->id)->update(['locker' => $code]);

        return response()->json(['code' => $code]);
    }
}
