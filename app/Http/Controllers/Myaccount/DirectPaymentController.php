<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectPayment;
use Auth;

class DirectPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function paymentSuccess(){
        return view('payment.payment-success');
    }

    public function paymentSubmit(Request $request){
        $body = $request->all();
        unset($body['_token']);
        $payment_detail = new DirectPayment($body);
        $payment_detail->save();
        $max_id = $payment_detail->id;
        return redirect(route('direct.payment.axis.start',['payment_id'=>$max_id]));
    }

    public function paymentView(){
        return view('payment.payment-home');
    }
}
