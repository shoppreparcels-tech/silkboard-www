<?php

namespace App\Http\Controllers;

use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;

use Auth;

class SchedulePickupController extends Controller
{
    public function index()
    {
        return view('schedule-pickup.schedule-pickup');
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
        if($request->other)
        {
            $special_items = $special_items.$request->other.",";
        }

        $schedule_package->special_items = $special_items;

        $schedule_package->save();

        $this->sendEmailSchedulePickup($schedule_package);

        return redirect(route('schedulePickup.confirmPickup'));
    }
     public function sendEmailSchedulePickup($schedule_package)
    {             
        Mail::to($schedule_package->email)->send(new EmailSchedulePickup($schedule_package));
    }

    public function confirm()
    {
        return view('schedule-pickup.confirm-pickup');
    }
}
