<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Campaign;


class LoginController extends Controller
{

    public function homeLogin(Request $request)
    {
        $this->validate($request, [
            'email_id' => 'required|email',
            'l_password' => 'required|min:6',
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email_id,
            'password' => $request->l_password], $request->remember_me))
        {
            echo "<script> localStorage.popupClose = \"close\";</script>";
            return redirect()->intended(route('home'));
        }
        return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')
            ->withInput($request->only('email', 'remember'));
    }

    public function submitLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email,
            'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('schedulePickup.List'));
        }
        return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')
            ->withInput($request->only('email', 'remember'));
    }

    public function login()
    {
        $campaign_image = Campaign::where('type', 'login')->first();
        return view('page.login')->with(['campaign_image'=>$campaign_image]);
    }
}
