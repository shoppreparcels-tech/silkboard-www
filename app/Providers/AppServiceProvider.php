<?php

namespace App\Providers;

use App\Announcement;
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
        $promos = PromoCode::where('featured', '1')->whereDate('validity', '>=', date('Y-m-d'))->get();
        $announcements = Announcement::where('featured', '1')->whereDate('validity', '>=', date('Y-m-d'))->first();
        View::share([ 'promos' => $promos,'announcements'=>$announcements]);
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
