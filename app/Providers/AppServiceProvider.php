<?php

namespace App\Providers;

use App\Announcement;
use App\Campaign;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\PromoCode;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', 'App\Http\ViewComposers\GlobalComposer');
//        $promos = PromoCode::where('featured', '1')->whereDate('validity', '>=', date('Y-m-d'))->get();
//        $announcements = Announcement::where('featured', '1')->whereDate('validity', '>=', date('Y-m-d'))->first();
        $campaign = Campaign::where('type', 'login')->first();
        View::share(['campaign'=>$campaign]);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
