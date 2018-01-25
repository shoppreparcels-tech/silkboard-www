<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignEmployees;
use App\CampaignStatistics;
use Auth;
use App\Customer;
use Illuminate\Http\Request;
use App\GoogleShorten;
use Mbarwick83\Shorty\Facades\Shorty;


class CampaignController extends Controller
{
    public function channelSubmit(Request $request)
    {

        $myurl = "https://www.shoppre.com/aboutus";

        $short = Shorty::shorten($myurl);

//        $api = new GoogleShorten\GoogleUrl('AIzaSyA-q8Qz-818FQFHITwTqFti00SNlNzyhjU');

        echo "Shorten Url".$short;

//        echo $api->decode('http://goo.gl/mR2d');
//        $campaign_employee = new CampaignEmployees();
//        $campaign_employee->campaign_id	 = $request->campaign_id;
//        $campaign_employee->channel = $request->channel;
//        $campaign_employee->employee_id = $request->employee_id;
//        $campaign_employee->shorten_url ='';
//        $result = $campaign_employee->save();

        exit;
    }

    function shorten($url) {
        $key = "AIzaSyA-q8Qz-818FQFHITwTqFti00SNlNzyhjU";
        $gurl = "https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyA-q8Qz-818FQFHITwTqFti00SNlNzyhjU";
        $url  = json_encode(array("longUrl" => $url));
        $ch   = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $gurl);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: appliaction/json", "Content-Type: application/json"));

        $r = json_decode(curl_exec($ch));
        return $r->id;
    }

    public function channelCreate(Request $request)
    {
        $campaign_id = $request->camp_id;
        $campaigns = Campaign::orderBy('id','desc')->get();
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('campaign.channel-create')->with(['campaigns'=>$campaigns,
            'customers'=>$customers,'campaign_id'=>$campaign_id]);
    }

    public function channelList(Request $request)
    {
      $campaign_id = $request->camp_id;
      $channels = CampaignEmployees::where('campaign_id',2)->get();
      return view('campaign.channel-list')->with(['channels'=>$channels,'campaign_id'=>$campaign_id]);
    }

    public function campaignDetailChannel(Request $request)
    {
        $cname = $request->cname;
        $url = $request->fullUrl();

        $campaign_detail = Campaign::where('slug',$request->cname)->first();

        return view('campaign.campaign-detail')->with(['campaign_detail'=>$campaign_detail]);
    }
    public function campaignDetail(Request $request)
    {

        $cname = $request->cname;
        $url = $request->fullUrl();

        $campaign_detail = Campaign::where('slug',$request->cname)->first();

        return view('campaign.campaign-detail')->with(['campaign_detail'=>$campaign_detail]);
    }

    public function editSubmit(Request $request)
    {
        $campaign = Campaign::where('id', $request->hdn_campaign_id)->first();
        $begin_date = "";
        $end_date = "";
        if($request->begin_date == "")
        {
            $begin_date = $campaign->begin_date;
        }
        else
        {
            $begin_date = $request->begin_date;
        }

        if($request->end_date == "")
        {
            $end_date = $campaign->end_date;
        }
        else
        {
            $end_date = $request->end_date;
        }

//
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('./img/campaigns');
            $image->move($destinationPath, $name);
            $campaign->image = $name;
            $campaign->name = $request->name;
            $campaign->coupon_code = $request->coupon_code;
            $campaign->begin_date = $begin_date;
            $campaign->end_date = $end_date;
            $campaign->comment = $request->comment;
            $campaign->save();
        }
        else
        {
            $campaign->name = $request->name;
            $campaign->coupon_code = $request->coupon_code;
            $campaign->begin_date = $begin_date;
            $campaign->end_date = $end_date;
            $campaign->comment = $request->comment;
            $campaign->save();
        }
        return redirect(route('campaign.index'));
    }

    public function editCampaign(Request $request)
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        $campaign = Campaign::where('id', $request->id)->first();
        return view('campaign.edit')->with(['campaign' => $campaign, 'customers' => $customers]);
    }

    public function submit(Request $request)
    {
        $body = $request->all();
        unset($body['_token']);
        $campaign = new Campaign($body);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('./img/campaigns');
            $image->move($destinationPath, $name);
            $campaign->image = $name;
            $campaign->save();
        } else {
            $campaign->save();
        }
        return redirect(route('campaign.index'));
    }

    public function create(Request $request)
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('campaign.create')->with(['customers' => $customers]);
    }

    public function index()
    {
        $campaigns = Campaign::orderBy('id', 'desc')
//                       ->join('customers', 'customers.id', '=', 'campaigns.customer_id')
//                       ->select('customers.name as cname', 'campaigns.name', 'campaigns.coupon_code','campaigns.begin_date')
            ->get();
//          echo $campaigns;
//          exit;
        return view('campaign.list')->with(['campaigns' => $campaigns]);
    }
}
