<?php


namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
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
        $phone = empty($user->phone) ? 0: 1;

        $complition = array('phone' => $phone);

        $view->with('complition', $complition);
    }
}

?>