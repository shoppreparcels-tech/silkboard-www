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
        $details = "Phone Number - ".$request->phone_code.'-'.$request->mobile.',Email -'.$request->user_email;
        $pc_details = ",Pickup Details - ".$request->pc_fname."  ".$request->pc_lname." , ".$request->pc_street.
            " , ".$request->pc_city." , ".$request->pc_state." , ".$request->pc_pincode." , ".$request->pc_contact_no." , ".$request->pc_email;
        $dc_details = ",Destination Details - ".$request->dc_fname."  ".$request->dc_lname." , ".$request->dc_street.
            " , ".$request->dc_city." , ".$request->dc_state." , ".$request->dc_country." , ".$request->dc_pincode." , ".$request->dc_phone_code.
            " - ".$request->dc_contact_no;
        $package_details = ",No of Packages -  ".$request->no_of_packages." ,Weight - ".$request->package_weight." ,Size - ".$request->size_of_package;
        $package_items_details = ",Package items - ".$request->package_items." ,Special Items - ".$schedule_package->special_items." ,Other Items - ".$request->other_items;
        $all_details = $details.$pc_details.$dc_details.$package_details.$package_items_details;
        $response = AsanaTaskOperations::createTask($name, $all_details, "S");
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
