<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\URL;


class LoginController extends Controller
{

    public function homeLogin(Request $request)
    {
        if ($request->ajax()) {
            if (Auth::guard('customer')->attempt(['email' => $request->email,
                'password' => $request->password], $request->remember)) {
                 $request->session()->regenerate();
                return response()->json([ 'error'=>'0', 'message'=> "success"]);
            }
        }
        else
        {
            return response()->json([ 'error'=>'0', 'message'=> "failed"]);
        }

// return response()->json([ 'error'=>'0', 'request'=> $response]);

//        if ($request->ajax()) {
//            return response()->json([
//                'auth' => $auth,
//                'intended' => URL::route('home')
//            ]);
//        } else {
//            return redirect()->intended(URL::route('about'));
//        }
       // return response()->json([ 'error'=>'0', 'request'=> $request->email]);
    }

	public function submitLogin(Request $request)
	{
		$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

    	if(Auth::guard('customer')->attempt(['email'=>$request->email,
            'password'=>$request->password], $request->remember))
    	{
    		return redirect()->intended(route('schedulePickup.List'));
    	}
    	return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')
            ->withInput($request->only('email', 'remember'));
	}

    public function login()
    {
        return view('page.login');
    }
}
