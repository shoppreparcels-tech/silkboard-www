<?php

namespace App\Http\Controllers\Myaccount\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AdminNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function customerNotify()
    {
    	$notifications = AdminNotification::where('action_type', 'customer')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

    	return view('myaccount.admin.notify.customer')->with(['notifications' => $notifications]);
    }

    public function incomingNotify()
    {
    	$notifications = AdminNotification::where('action_type', 'incoming')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

    	return view('myaccount.admin.notify.incoming')->with(['notifications' => $notifications]);
    }

    public function packageNotify()
    {
    	$notifications = AdminNotification::where('action_type', 'package')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

    	return view('myaccount.admin.notify.package')->with(['notifications' => $notifications]);
    }

    public function shipmentNotify()
    {
    	$notifications = AdminNotification::where('action_type', 'shipment')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

    	return view('myaccount.admin.notify.shipment')->with(['notifications' => $notifications]);
    }

    public function psshoppreNotify()
    {
    	$notifications = AdminNotification::where('action_type', 'shopper')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

    	return view('myaccount.admin.notify.psshoppre')->with(['notifications' => $notifications]);
    }

    public function psselfNotify()
    {
    	$notifications = AdminNotification::where('action_type', 'selfshopper')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
    	return view('myaccount.admin.notify.psself')->with(['notifications' => $notifications]);
    }

    public function statusChange(Request $request)
    {
        $notify = AdminNotification::find($request->notification_id);
        if ($notify->solve_status == 'no') {
        	$notify->solve_status = 'yes';
        }else{
        	$notify->solve_status = 'no';
        }
        $notify->save();

        return redirect()->back();
    }
}
