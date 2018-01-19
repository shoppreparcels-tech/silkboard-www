<?php

namespace App\Http\Controllers;

use App\Campaign;
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


class CampaignController extends Controller
{


    public function editSubmit(Request $request)
    {
        $campaign = Campaign::where('id',$request->hdn_campaign_id)->first();
        $campaign->name = $request->name;
        $campaign->coupon_code = $request->coupon_code;
        $campaign->begain_date = $request->begain_date;
        $campaign->end_date = $request->end_date;
        $campaign->comment = $request->comment;
        $campaign->save();
        return redirect(route('campaign.index'));
    }

    public function edit(Request $request)
    {
        $campaign = Campaign::where('id',$request->id)->first();
//          echo $campaigns;
//          exit;
        return view('campaign.edit')->with(['campaign'=>$campaign]);
    }

    public function submit(Request $request)
    {
        $body = $request->all();
        unset($body['_token']);
        $campaign = new Campaign($body);
        $campaign->save();
        return redirect(route('campaign.index'));
    }

    public function create(Request $request)
    {
        return view('campaign.create');
    }

    public function index()
    {
          $campaigns = Campaign::orderBy('id','desc')
//                       ->join('customers', 'customers.id', '=', 'campaigns.customer_id')
//                       ->select('customers.name as cname', 'campaigns.name', 'campaigns.coupon_code','campaigns.begin_date')
                       ->get();
//          echo $campaigns;
//          exit;
          return view('campaign.list')->with(['campaigns'=>$campaigns]);
    }
}
