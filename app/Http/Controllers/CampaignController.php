<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignEmployees;
use Auth;
use App\Customer;
use Illuminate\Http\Request;
use App\GoogleUrl\GoogleShortUrl;


class CampaignController extends Controller
{
    public function channelSubmit(Request $request)
    {
        $campaign = Campaign::find($request->campaign_id);
        $myurl = "https://www.shoppre.com/campaign/".$campaign->slug."/".$request->channel."/".$request->employee_id;
        $short_url = GoogleShortUrl::shorten($myurl);//
        $campaign_employee = new CampaignEmployees();
        $campaign_employee->campaign_id = $request->campaign_id;
        $campaign_employee->channel = $request->channel;
        $campaign_employee->employee_id = $request->employee_id;
        $campaign_employee->actual_url = $myurl;
        $campaign_employee->shorten_url =$short_url;
        $result = $campaign_employee->save();
        return redirect(route('channelList',['camp_id'=>$request->campaign_id]));
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
      $channels = CampaignEmployees::where('campaign_id',$campaign_id)->get();
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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('./img/campaigns');
            $image->move($destinationPath, $name);
            $campaign->image = $name;
            $campaign->name = $request->name;
            $campaign->coupon_code = $request->coupon_code;
            $campaign->cashback = $request->cashback;
            $campaign->begin_date = $begin_date;
            $campaign->end_date = $end_date;
            $campaign->comment = $request->comment;
            $campaign->save();
        }
        else
        {
            $campaign->name = $request->name;
            $campaign->coupon_code = $request->coupon_code;
            $campaign->cashback = $request->cashback;
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
            ->get();
        return view('campaign.list')->with(['campaigns' => $campaigns]);
    }
}
