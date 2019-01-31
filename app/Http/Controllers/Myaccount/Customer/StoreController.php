<?php

namespace App\Http\Controllers\Myaccount\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Store;
use App\StoreCategory;
use App\StoreCatClub;
use App\FavoriteStore;

class StoreController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:customer');
	}

	public function favStores()
	{
	    $favs = FavoriteStore::where('customer_id', Auth::id())->pluck('club_id')->toArray();
		$stores = StoreCatClub::whereIn('id', $favs )->where('category_id', 1)->get();
		$categories = StoreCategory::orderBy('category', 'asc')->get();
		return view('myaccount.customer.favorites')->with(['categories'=>$categories, 'stores'=>$stores]);
	}

	public function addFavorite(Request $request)
	{
		$fav = new FavoriteStore;
		$fav->club_id = $request->club_id;
		$fav->customer_id = Auth::id();
		$fav->save();
		return response()->json(['club_id'=>$fav->club_id]);
	}

	public function removeFavorite(Request $request)
	{
		FavoriteStore::where('customer_id', Auth::id())->where('club_id', $request->club_id)->delete();
		return response()->json([ 'club_id'=> $request->club_id ]);
	}

	public function sortFavorite(Request $request)
	{
		$cat = $request->cat;
        $stores = array();

        $favs = FavoriteStore::where('customer_id', Auth::id())->pluck('club_id')->toArray();
		$clubs = StoreCatClub::whereIn('id', $favs )->where('category_id', $cat)->get();

		$i=0;
		foreach ($clubs as $club) {
			$stores[$i]['logo'] = $club->store->logo;
			$stores[$i]['url'] = $club->url;
			$i++;
		}

        return response()->json(['stores'=>$stores]);
	}
}
