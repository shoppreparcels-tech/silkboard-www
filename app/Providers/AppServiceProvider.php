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



        $promos = PromoCode::where('featured', '1')
            ->whereDate('validity', '>=', date('Y-m-d'))
            ->get();

        $announcements = Announcement::where('featured', '1')
            ->whereDate('validity', '>=', date('Y-m-d'))
            ->first();

        $home_campaign = Campaign::orderBy('name','desc')
        ->join('campaign_employees','campaigns.id','=','campaign_employees.campaign_id' )
        ->where('campaign_employees.channel','=','website')
        ->where('type', 'login')->first();

        View::share([
            'promos' => $promos,
            'announcements' => $announcements,
            'home_campaign' => $home_campaign,
        ]);
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
