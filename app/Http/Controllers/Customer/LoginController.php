<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

	public function login()
	{
		return view('customer.login');
	}

	public function submitLogin(Request $request)
	{
		$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

    	if (Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
    		return redirect()->intended(route('customer.locker'));
    	}
    	
    	return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')->withInput($request->only('email', 'remember'));
	}
}
