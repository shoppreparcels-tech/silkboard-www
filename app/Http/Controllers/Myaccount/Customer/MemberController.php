<?php

namespace App\Http\Controllers\Myaccount\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Address;
use App\Country;
use App\Customer;
use App\States;

class MemberController extends Controller
{
    public function memberRegister(Request $req)
    {
        return redirect(env('PREFIX').'login.'.env('DOMAIN').'/signup');
        $countries = Country::orderBy('name','asc')->get();
        $states = States::orderBy('name','asc')->get();
        $memberType = $req->member;
        $req->session()->put(['membership_type' => $memberType]);
        return view('myaccount.membership.register')
            ->with(['countries'=>$countries,'states'=>$states]);
    }

    public function memberPay(Request $req) {
        $membership_type = $req->session()->get('membership_type');
        if ($membership_type === 'y') {
            $amount = 5000;
        } else if ($membership_type === 'h') {
            $amount = 2500;
        }

        $pgFee = 0;
        $paymentGatewayName = $req->paymentGatewayName;
        $directSignup =  $req->directSignup;
        switch ($req->paymentGatewayName) {
            case 'card':
                $pgFee = (2.5 / 100) * $amount;
                break;
            case 'paypal':
                $pgFee = (10 / 100) * $amount;
                break;
            case 'paytm':
                $pgFee = (3 / 100) * $amount;
                break;
            default:
                $paymentGatewayName = 'card';
                $pgFee = (2.5 / 100) * $amount;
                break;
        }

        $totalAmount = $amount + $pgFee;
        return view('myaccount.membership.memberConfirmation')
            ->with([
                'memberFeeAmount' => $amount,
                'pgFee' => $pgFee,
                'totalAmount' => $totalAmount,
                'message' => $directSignup,
                'paymentGatewayName' => $paymentGatewayName,
            ]);
    }

    public function memberProceedPayment(Request $req) {
        $paymentGatewayName = $req->payment_gateway_name;
        $req->session()->put(['memberFee' => $req->totalAmount]);
        switch ($paymentGatewayName) {
            case 'card':
                echo 'card';
                return redirect()->route('payment.member.axis.start');
                break;
            case 'paypal':
                return redirect()->route('payment.member.paypal.start');
                break;
            case 'paytm':
                return redirect()->route('payment.member.paytm.start');
                break;
        }
    }

    public function memberPlan(Request $req) {
        return redirect(env('PREFIX').'login.'.env('DOMAIN').'/signup');
//        return view('myaccount.membership.memberPlan');
    }
}
