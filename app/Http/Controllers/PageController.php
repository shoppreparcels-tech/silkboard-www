<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Country;
use App\ShippingRate;
use App\Store;
use App\StoreCategory;
use App\StoreCatClub;
use App\FaqCategory;
use App\Page;

use App\Mail\ContactEnquiry;

class PageController extends Controller
{
    public function home()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('page.home')->with('countries', $countries);
    }
    public function about()
    {
        return view('page.about');
    }
    public function partner()
    {
        return view('page.partner');
    }
    public function faq()
    {
        $categories = FaqCategory::all();
        return view('page.faq')->with('categories', $categories);
    }
    public function contact()
    {
        return view('page.contact');
    }
    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:250',
            'lastname' => 'required|max:250',
            'email' => 'required|email|max:250',
            'country' => 'required',
            'msg_content' => 'required',
        ]);

        Mail::to("web@greenpepperdigital.com")->send(new ContactEnquiry($request));
        return redirect()->back()->with('message', 'Your enquiry has been submited.');
    }
    public function services()
    {
        return view('page.services');
    }
    public function howitworks()
    {
        return view('page.howitworks');
    }
    public function viewPage(Request $request)
    {
        $slug = $request->slug;
        $page = Page::where('slug', $slug)->first();
        return view('page.view')->with('page', $page);
    }
    public function pricing()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('page.pricing')->with('countries', $countries);

    }
    public function shipCalculate(Request $request)
    {
        $country = Country::find($request->country);
        $weight = $request->weight;
        $unit = $request->unit;
        $discount = $country->discount;

        $type = $request->weight <= 2 ? $request->type : 'nondoc';

        if ($unit === "lbs") {
            $weight = $weight * 0.45;
        }

        if ($weight <= 300) {
            $rate = ShippingRate::where('country_id', $country->id)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '>=', $weight)
                                ->first();
        }else{
            $rate = ShippingRate::where('country_id', $country->id)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '=', 0)
                                ->first();
        }

        if (!empty($rate)) {
            $amount = $rate->rate_type == "fixed" ? $rate->amount : $rate->amount * $weight;

            $amount = number_format($amount, 2, '.', '');
            $time = $rate->timerange;

            return response()->json([ 'error'=>'0', 'time'=> $time, 'amount'=>$amount, 'discount'=>$discount ]);
        }else{
            return response()->json(['error'=>'1']);
        }
    }

    public function stores()
    {
        $categories = StoreCategory::orderBy('category', 'asc')->get();
        $webs = StoreCatClub::where('cat_id', 1)
                            ->where('type', 'web')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get();
        $fbs = StoreCatClub::where('cat_id', 1)
                            ->where('type', 'fb')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get();
        $feats = StoreCatClub::where('cat_id', 1)
                            ->where('featured', 1)
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get();

        return view('page.stores')->with(['categories'=>$categories, 'webs'=>$webs, 'fbs'=>$fbs, 'feats'=>$feats]);
    }

    public function sortStores(Request $request)
    {
        $cat = $request->cat;
        $stores = array();

        $stores['web'] = StoreCatClub::where('cat_id', $cat)
                            ->where('type', 'web')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get()
                            ->toArray();

        $stores['fb'] = StoreCatClub::where('cat_id', $cat)
                            ->where('type', 'fb')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get()
                            ->toArray();

        $stores['feat'] = StoreCatClub::where('cat_id', $cat)
                            ->where('featured', 1)
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get()
                            ->toArray();

        return response()->json(['stores'=>$stores]);
    }
}
