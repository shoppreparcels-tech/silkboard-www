<?php

namespace App\Http\Controllers\Myaccount\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LockerCharge;
use Auth;
use App\Customer;
class LockerGenerationController extends Controller
{

    public function lockerPayment()
    {
        $data = LockerCharge::orderBy('id','desc')->first();
        return view('locker_charge.locker-charge')->with(['data'=>$data]);
    }

    public function paymentRequest(Request $request)
    {

            switch ($request->payment_gateway_name){
                case 'card':
                    return redirect()->route('locker.generate.payment.axis.start');
                    break;
                case 'paypal':
                    return redirect()->route('locker.generate.payment.paypal.start');
                    break;
                case 'paytm':
                    return redirect()->route('locker.generate.payment.paytm.start');
                    break;
            }
            return redirect()->route('lockerCharge');
        }
}
