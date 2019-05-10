<?php

namespace App\Http\Controllers\Myaccount\Customer;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

	public function login(Request $req)
	{
		$campaign = DB::table('campaigns')
            ->select('image')
            ->whereRaw('CURRENT_DATE <=end_date')
            ->orderBy('end_date')->first();

		return view('myaccount.customer.login')
            ->with([
                'campaign' => $campaign,
                'continue' => $req->continue
            ]);
	}

	public function submitLogin(Request $req)
	{
//        print  json_encode('login');exit;
		$this->validate($req, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);
		$customer = Customer::where('email','=',$req->email)->first();

        if (!empty($customer)) {
         if ($customer->email_verify == 'yes') {
             $req->session()->put(['continue' => $req->continue]);
                 if (Auth::guard('customer')->attempt(['email'=>$req->email, 'password'=>$req->password], $req->remember)) {
                     return redirect()->intended(route('customer.locker'));
                 }
             return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')->withInput($req->only('email', 'remember'));
         }
         else {
             return redirect()->back()->with('error_message', 'Please verify your email')->withInput($req->only('email', 'remember'));
         }
        }
        return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')->withInput($req->only('email', 'remember'));
	}
}
