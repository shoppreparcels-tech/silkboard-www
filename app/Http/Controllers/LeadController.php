<?php

namespace App\Http\Controllers;

use App\FirstVisit;
use App\HttpReferrer;
use App\Mail\EmailChat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\Customer;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\RefferCode;
use App\ShippingPreference;
use App\ShopperBalance;
use App\Mail\EmailVerification;


class LeadController extends Controller
{
    public function create(Request $request)
    {
//        $loyalPoints = 0;
//        if (!empty($request->refferal)) {
//            $reffer = RefferCode::where('friend', $request->email)->where('code', $request->refferal)->first();
//            if (!empty($reffer)) {
//                $loyalPoints = 100;
//                $firendId = LoyaltyPoint::where('custid', $reffer->custid)->first()->id;
//                $friend = LoyaltyPoint::find($firendId);
//                $friend->points += $loyalPoints;
//                $friend->total += $loyalPoints;
//                $friendLevel = $friend->level;
//                if ($friend->total > 1000) {
//                    $friendLevel = (int)($friend->total / 1000) + 1;
//                }
//                $friend->level = $friendLevel;
//                $friend->save();
//            }else{
//                return redirect()->back()->with('error', 'You may entered an invalid refferal code. Try with another or proceed without.');
//            }
//        }

        $customer = new Customer;
        $customer->name = $request->first_name." ".$request->last_name;
        $customer->email = $request->email;
        $customer->password = bcrypt("shoppre111");
        do
        {
            $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
            $user_code = Customer::where('locker', $code)->get();
        }
        while(!$user_code->isEmpty());
        $customer->locker = $code;
        $customer->save();
        $contact = new CustomerContact;
        $contact->customer_id = $customer->id;
        $contact->save();
        $loyalty = new LoyaltyPoint;
        $loyalty->custid = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = 0;
        $loyalty->total = 0;
        $loyalty->save();
        $setting = new ShippingPreference;
        $setting->custid = $customer->id;
        $setting->save();
        $balance = new ShopperBalance;
        $balance->custid = $customer->id;
        $balance->amount = 0;
        $balance->save();

        $http_referrer = new HttpReferrer();
        $http_referrer->url = $request->referrer;
        $http_referrer->created_by = $customer->id;
        $http_referrer->visitor_id = $customer->id;
        $http_referrer->save();

        $customer_detail = new Customer();
        $customer_detail = Customer::where('id',$customer->id)->first();
        $customer_detail->http_referrer_id = $http_referrer->id;
        $customer_detail->save();

        $first_visit = new FirstVisit();
        $first_visit->url = $request->first_visit;
        $first_visit->customer_id = $customer->id;
        $first_visit->save();
//      $this->sendEmailVerification($request->email);
        return "Success Registration";
    }
}
