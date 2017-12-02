<?php


namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Address;
use Menu;

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
        if (!empty($user)) {
            $phone = empty($user->phone) ? 0: 1;
            $checkAddress = Address::where('cust_id', $user->id)->where('default', 'yes')->first();
            $address = empty($checkAddress) ? 0: 1;
        }

        $completion = array('phone' => $phone, 'address' => $address);

        $view->with('completion', $completion);
    }
}

?>