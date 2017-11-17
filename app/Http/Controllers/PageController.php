<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\Country;
use App\ShippingRate;
use App\Store;
use App\StoreCategory;
use App\StoreCatClub;
use App\FaqCategory;
use App\Page;
use App\FavoriteStore;
use App\Review;

use App\Mail\ContactEnquiry;
use App\Mail\GetQuote;

class PageController extends Controller
{
    public function home()
    {
       
        $reviews = Review::orderBy('updated_at', 'desc')
                            ->where('approve', '1')
                            ->limit(10)
                            ->get();
        return view('page.home')->with(['reviews' => $reviews]);
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

        Mail::to("support@shoppre.com")->send(new ContactEnquiry($request));
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
        if(empty($page)) return abort(404);
        return view('page.view')->with('page', $page);
    }
    public function pricing()
    {
        $reviews = Review::orderBy('updated_at', 'desc')
                            ->where('approve', '1')
                            ->limit(10)
                            ->get();
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        return view('page.pricing')->with(['reviews' => $reviews, 'countries' => $countries]);

    }
    public function shipCalculate(Request $request)
    {
        $weight = $request->weight;
        $country = Country::find($request->country);
        if (isset($request->length) && isset($request->width) && isset($request->height)) {
            $volume = $request->length * $request->width * $request->height;
            if ($request->scale == "in") {
                $volume = $volume/2.54;
            }
            $volWeight = $volume/5000;
            if ($volume > $volWeight) {
                $weight = $volWeight;
            }
        }
        
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

    public function getQuote(Request $request)
    {
        $this->validate($request, [
            'state' => 'required|max:250',
            'city' => 'required|max:250',
            'pin' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'unit' => 'required',
            'email' => 'required|email|max:250',
        ]);

        $mail = Mail::to("support@shoppre.com")->send(new GetQuote($request));
        return response()->json([ 'mail'=> $mail]);
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

        if (Auth::check()) {
            $favs = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
            return view('page.stores')->with(['categories'=>$categories, 'webs'=>$webs, 'fbs'=>$fbs, 'feats'=>$feats, 'favs'=>$favs]);
        }

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
        if (Auth::check()) {
            $stores['custid'] = true;
            $stores['favs'] = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
        }

        return response()->json(['stores'=>$stores]);
    }

    public function reviews()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        $reviews = Review::orderBy('updated_at', 'desc')->where('approve', '1')->paginate(10);
        return view('page.reviews')->with(['countries'=>$countries, 'reviews'=>$reviews]);
    }

    public function submitReview(Request $request)
    {
        $this->validate($request, [
            'person' => 'required|max:250',
            'countrid' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);

        $review = new Review;
        $review->person = $request->person;
        $review->countrid = $request->countrid;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->approve = '0';
        $review->save();

        return redirect()->back()->with('message', 'Success! Review has been submit for admin approval.');
    }
}
