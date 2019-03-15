<?php

namespace App\Http\Controllers\Myaccount\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Hash;

use App\Customer;
use App\PasswordReset;
use App\Mail\Myaccount\ResetPassword;

class PasswordController extends Controller
{
    public function forgotPassword()
    {
    	return view('myaccount.customer.forgot');
    }

    public function submitForgot(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email',
    	]);

    	$customer = Customer::where('email', $request->email)->first();

    	if (!empty($customer)) {
    		$customer->token = $this->createPasswordReset($customer->email);
    		Mail::to($customer->email)->send(new ResetPassword($customer));
    		return redirect()->back()->with('status', 'Password reset link send to your email address.');
    	}else{
    		return redirect()->back()->with('error', 'Sorry, Email address submitted not found!')->withInput($request->only('email'));
    	}
    }

    public function createPasswordReset($email)
    {
    	$reset = new PasswordReset;
        $token = hash_hmac('sha256', str_random(40), config('app.key'));
        $reset->email = $email;
        $reset->token = $token;
        $reset->save();
        return $token;
    }

    public function resetForgot(Request $request)
    {
    	if (isset($request->email)) {
    		$reset = PasswordReset::where('email', $request->email)
    							->where('token', $request->token)
    							->first();
    		if(!empty($reset)){
    			return view('myaccount.customer.reset')->with('email', $request->email);
    		}else{
    			return redirect()->route('customer.forgot');
    		}
    	}
    }

    public function resetPassword(Request $request)
    {
    	$rules = array(
	        'password' => 'required|min:8',
	        'password_confirmation' => 'required|same:password'
	    );
    	$this->validate($request, $rules);

    	PasswordReset::where('email', $request->email)->delete();

	    $customer = Customer::where('email', $request->email)->first();
	    $customer->password = bcrypt($request->password);
	    $customer->save();

	    return redirect(route('customer.login'))->with('message', 'Your account password has been changed. Please login to continue.');
    }

    public function changePassword(Request $request)
    {
        $customerid = $request->id;
        $user = Customer::find($customerid);
        $oldPassword = $request->old_password;
        $password = $request->password;

        if (Hash::check($oldPassword, $user->password)) {
        $customer = new Customer;
        $customer->where('id', $customerid)->update(['password' => bcrypt($password)]);

         return response()->json(['message' => 'success']);
        } else {
         return response()->json(['message' => 'failed']);
        }
    }
}
