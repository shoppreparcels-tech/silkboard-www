<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/leads/signup', 'LeadController@create')->name('leads.signup');

Route::post('/campaign/newaspaper', 'PageController@saveFlyerUser')->name('flyerUser');
Route::post('/schedule-pickup/submit', 'SchedulePickupController@submit')->name('schedulePickup.submit');
Route::post('/subscribe', 'PageController@createSubscriber')->name('subscribe');

