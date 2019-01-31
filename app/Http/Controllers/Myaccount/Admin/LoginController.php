<?php

namespace App\Http\Controllers\Myaccount\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
