<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;
use App\ShippingRate;

class ShippingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function countries()
    {
    	$countries = Country::orderBy('name', 'asc')->get();
    	return view('admin.shipping-countries')->with('countries', $countries);
    }

    public function updateCountry(Request $request)
    {
        $country = Country::find($request->id);
        $country->name = $request->name;
        $country->iso = $request->iso;
        $country->phonecode = $request->phonecode;
        $country->discount = $request->discount;
        $country->save();

        return redirect()->back()->with('message', 'Country Details Updated.');
    }

    public function deleteCountry(Request $request)
    {
        //Country::where('id', $request->id)->delete();
        return redirect()->back()->with('message', 'Shipping Country Removed.');
    }

    public function charges()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('admin.shipping-charges')->with('countries', $countries);
    }

    public function shipCharge(Request $request)
    {
        $country = Country::where('iso', $request->country)->first();
        $rates = ShippingRate::where('country_id', $country->id)->orderBy('min', 'desc')->get();
        return view('admin.shipping-charge')->with(['country'=>$country, 'rates'=>$rates]);
    }

    public function shippingRate(Request $request)
    {
        $country = $request->country;
        $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'courier' => 'required',
            'amount' => 'required',
            'timerange' => 'required',
            'item_type' => 'required',
            'rate_type' => 'required'
        ]);

        $ship = new ShippingRate;
        $ship->country_id = $country;
        $ship->min = $request->min;
        $ship->max = $request->max;
        $ship->amount = $request->amount;
        $ship->courier = $request->courier;
        $ship->timerange = $request->timerange;
        $ship->item_type = $request->item_type;
        $ship->rate_type = $request->rate_type;
        $ship->save();

        return redirect($request->redirect)->with('message', 'Shipping Rate Added To Database.');
    }

    public function deleteRate(Request $request)
    {
    	ShippingRate::where('id', $request->rate)->delete();
    	return redirect()->back()->with('message', 'Shipping Rate Removed.');
    }

    public function updateRate(Request $request)
    {
        $this->validate($request, [
            'rateid' => 'required',
            'min' => 'required',
            'max' => 'required',
            'courier' => 'required',
            'amount' => 'required',
            'timerange' => 'required',
            'item_type' => 'required',
            'rate_type' => 'required'
        ]);

        $ship = ShippingRate::find($request->rateid);
        $ship->min = $request->min;
        $ship->max = $request->max;
        $ship->amount = $request->amount;
        $ship->courier = $request->courier;
        $ship->timerange = $request->timerange;
        $ship->item_type = $request->item_type;
        $ship->rate_type = $request->rate_type;
        $ship->save();

        return redirect()->back()->with('message', 'Shipping Rates Updated.');
    }
}
