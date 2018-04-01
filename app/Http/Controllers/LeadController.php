<?php

namespace App\Http\Controllers;

use App\FirstVisit;
use App\HttpReferrer;
use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\RefferCode;
use App\ShippingPreference;
use App\ShopperBalance;



class LeadController extends Controller
{
    public function create(Request $request)
    {
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
        $loyalty->customer_id = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = 0;
        $loyalty->total = 0;
        $loyalty->save();
        $setting = new ShippingPreference;
        $setting->customer_id = $customer->id;
        $setting->save();
        $balance = new ShopperBalance;
        $balance->customer_id = $customer->id;
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

        return "Success Registration";
    }
}
