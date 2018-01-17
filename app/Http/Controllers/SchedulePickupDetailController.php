<?php

namespace App\Http\Controllers;

use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;

use Auth;

class SchedulePickupDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function detail()
    {
        return view('schedule-pickup.pickup-detail');
    }

    public function pickupView(Request $request)
    {
      $pickup_id = $request->id;
      $pickup_details = SchedulePickup::where('id',$pickup_id)->first();
      return view('schedule-pickup.pickup-detail')->with(['pickup_details' => $pickup_details]);
    }

    public function pickupList()
    {
        $pickups = SchedulePickup::orderBy('id','desc')->get();
        return view('schedule-pickup.schedule-pickup-list')->with(['pickups' => $pickups]);
    }
}
