<?php

namespace App\Http\Controllers\Myaccount\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;
use App\CountryGuide;

class CguideController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function cguideIndex()
	{
		$countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
		return view('myaccount.admin.cguide.index')->with(['countries' => $countries ]);
	}

	public function cguideView(Request $request)
	{
		$iso = $request->iso;
		$country = Country::where('iso', $iso)->first();
		if (!empty($country)) {
			$countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
			$guide = CountryGuide::where('country_id', $country->id)->first();
			return view('myaccount.admin.cguide.view')->with(['country' => $country, 'countries' => $countries, 'guide' => $guide]);
		}

		return redirect()->route('admin.cguide.index');
	}

	public function updateCountry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'flag' => 'mimes:jpeg,bmp,png,gif,jpg'
        ]);

        $country = Country::find($request->country_id);

        $filename = $country->flag;
        if($request->hasFile('flag')) {
            $file = $request->file('flag');
            $destinationPath = '/uploads/country/';
            $filename = "flag_".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }

        $country->name = $request->name;
        $country->flag = $filename;
        $country->shipping = ($request->shipping == "1") ? "1" : "0";
        $country->save();

        return redirect()->back()->with('message', 'Country Details Updated.');
    }

    public function updateGuide(Request $request)
    {
    	$this->validate($request, [
            'country_id' => 'required',
            'banner_img' => 'mimes:jpeg,bmp,png,gif,jpg'
        ]);

        $guide = CountryGuide::where('country_id', $request->country_id)->first();

        $filename = !empty($guide) ? $guide->banner_img : '';
        if($request->hasFile('banner_img')) {
            $file = $request->file('banner_img');
            $destinationPath = '/uploads/country/guide/banner/';
            $filename = "cguide_".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }

        CountryGuide::updateOrCreate(
            ['country_id' => $request->country_id],
            [
            	'banner_img' => $filename,
            	'dutytax' => $request->dutytax,
            	'dutytax_meta' => $request->dutytax_meta,
            	'transits' => $request->transits,
            	'transits_meta' => $request->transits_meta,
            	'forbidden' => $request->forbidden,
                'forbidden_meta' => $request->forbidden_meta,
                'video_url' => $request->video_url,
                'video_head' => $request->video_head,
            	'video_desc' => $request->video_desc
            ]
        );

        return redirect()->back()->with('message', 'Country Guide Updated.');
    }
}
