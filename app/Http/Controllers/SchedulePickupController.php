<?php

namespace App\Http\Controllers;

use App\Country;
use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;
use App\Mailchimp\mailChimpTaskOperations;
use App\Asana\AsanaTaskOperations;

use App\States;
use Auth;

class SchedulePickupController extends Controller
{

    public function asanaTracking(Request $request) {

        if (!empty($request->pickup_id)) {
            $schedule_pickup = SchedulePickup::where('id', '=', $request->pickup_id)->first();
            $schedule_pickup->asana_url = $request->asana_url;
            $schedule_pickup->save();
            return response()->json([ 'error'=>'0', 'message'=>'success']);
        }
    }

    public function submit(Request $request)
    {
        $special_items = "";
        $body = $request->all();
        unset($body['_token']);
        $schedule_package = new SchedulePickup($body);
        if($request->home_made)
        {
            $special_items = $special_items.$request->home_made.",";
        }
        if($request->branded_food_items)
        {
            $special_items = $special_items.$request->branded_food_items.",";
        }
        if($request->liquid_items)
        {
            $special_items = $special_items.$request->liquid_items.",";
        }
        if($request->medicine_items)
        {
            $special_items = $special_items.$request->medicine_items.",";
        }
        if($request->electronics)
        {
            $special_items = $special_items.$request->electronics.",";
        }
        if($request->other)
        {
            $special_items = $special_items.$request->other.",";
        }

        $schedule_package->special_items = $special_items;

        $name = $request->first_name.' '.$request->last_name;
        $commnet = "Pickup request from ".$request->pc_city." to ".$request->dc_city;
        $response = AsanaTaskOperations::createTask($name, $commnet, "S");
        $phpArray = json_decode($response,true);
        $schedule_package->asana_url = "https://app.asana.com/0/819867433809220/".$phpArray['data']['id'];
        $schedule_package->save();

        $this->sendEmailPickup($schedule_package);
        return response()->json([ 'error'=>'0', 'message'=>$request->user_email]);
    }

    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
        $states = States::orderBy('name','asc')->get();
        return view('schedule-pickup.schedule-pickup')->with(['countries'=>$countries,'states'=>$states]);
    }

     public function sendEmailPickup($schedule_package)
    {
        if(!empty($schedule_package->pc_email)) {
            Mail::to($schedule_package->user_email)
                ->bcc(['support@shoppre.com',$schedule_package->pc_email])
                ->send(new EmailSchedulePickup($schedule_package));
        }
        else {
            Mail::to($schedule_package->user_email)
                ->bcc(['support@shoppre.com'])
                ->send(new EmailSchedulePickup($schedule_package));
        }
    }

    public function confirm()
    {
        return view('schedule-pickup.confirm-pickup');
    }
}
