<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PromoCode;

class PromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function promos()
    {
    	$promos = PromoCode::all();
    	return view('admin.promos')->with('promos', $promos);
    }

    public function submitCode(Request $request)
    {
    	$this->validate($request, [
            'title' => 'required|max:250',
    		'code' => 'required',
    		'validity' => 'required|date'
    	]);

        if (empty($request->cashback) && empty($request->discount)) {
            return redirect(route('admin.promos'))->with('error', 'Enter value in any of cashback or discount');
        }

    	$promo = new PromoCode;

        $promo->title = $request->title;
    	$promo->code = $request->code;
    	$promo->cashback = $request->cashback;
    	$promo->discount = $request->discount;
    	$promo->validity = date('Y-m-d', strtotime($request->validity));
    	$promo->featured = $request->featured;
    	$promo->save();

    	return redirect(route('admin.promos'))->with('message', 'Success! New promo code added.');
    }

    public function updateCode(Request $request)
    {
    	$this->validate($request, [
    		'promoid' => 'required',
    		'code' => 'required',
    		'validity' => 'required|date'
    	]);

    	$promo = PromoCode::find($request->promoid);
        $promo->title = $request->title;
    	$promo->code = $request->code;
    	$promo->cashback = $request->cashback;
    	$promo->discount = $request->discount;
    	$promo->validity = date('Y-m-d', strtotime($request->validity));
    	$promo->featured = $request->featured;
    	$promo->save();

    	return redirect(route('admin.promos'))->with('message', 'Success! Promo code updated.');
    }
}
