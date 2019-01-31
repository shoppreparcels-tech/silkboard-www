<?php


namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Address;
use Menu;

use App\SchedulePickup;
use App\AdminNotification;

class GlobalComposer {

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = Auth::user();
        $phone = 0;
        $address = 0;
        if (!empty($user))
        {
            $phone = empty($user->phone) ? 0: 1;
            $checkAddress = Address::where('customer_id', $user->id)->where('is_default', 'yes')->first();
            $address = empty($checkAddress) ? 0: 1;
        }

        $completion = array('phone' => $phone, 'address' => $address);

        $notification = "";

        if (Auth::guard('admin')->check())
        {
            $notification = array(
                'customers' => AdminNotification::where('action_type', 'customer')
                    ->where('solve_status', 'no')
                    ->orderBy('created_at', 'desc')->get(),

                'packages' => AdminNotification::where('action_type', 'package')
                    ->where('solve_status', 'no')
                    ->orderBy('created_at', 'desc')->get(),

                'shipments' => AdminNotification::where('action_type', 'shipment')
                    ->where('solve_status', 'no')
                    ->orderBy('created_at', 'desc')->get(),

                'shoppers' => AdminNotification::where('action_type', 'shopper')
                    ->where('solve_status', 'no')
                    ->orderBy('created_at', 'desc')
                    ->get(),

                'selfshopper' => AdminNotification
                    ::where('action_type', 'selfshopper')
                    ->where('solve_status', 'no')
                    ->orderBy('created_at', 'desc')
                    ->get(),

                'incomings' => AdminNotification::where('action_type', 'incoming')
                    ->where('solve_status', 'no')
                    ->orderBy('created_at', 'desc')
                    ->get(),
                'schedulepickup' => SchedulePickup::orderBy('created_at','desc')
                    ->where('status','review')->get() ,
            );
        }

        $view->with(['completion' => $completion, 'notification' => $notification]);
    }
}

?>
