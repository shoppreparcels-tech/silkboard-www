<?php

namespace App\Http\Controllers\Customer;

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
		$favs = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
		$stores = StoreCatClub::whereIn('id', $favs )->where('cat_id', 1)->get();
		$categories = StoreCategory::orderBy('category', 'asc')->get();
		return view('customer.favorites')->with(['categories'=>$categories, 'stores'=>$stores]);
	}

	public function addFavorite(Request $request)
	{
		$fav = new FavoriteStore;
		$fav->clubid = $request->clubid;
		$fav->custid = Auth::id();
		$fav->save();
		return response()->json(['clubid'=>$fav->clubid]);
	}

	public function removeFavorite(Request $request)
	{
		FavoriteStore::where('custid', Auth::id())->where('clubid', $request->clubid)->delete();
		return response()->json([ 'clubid'=> $request->clubid ]);
	}

	public function sortFavorite(Request $request)
	{
		$cat = $request->cat;
        $stores = array();

        $favs = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
		$clubs = StoreCatClub::whereIn('id', $favs )->where('cat_id', $cat)->get();

		$i=0;
		foreach ($clubs as $club) {
			$stores[$i]['logo'] = $club->store->logo;
			$stores[$i]['url'] = $club->url;
			$i++;
		}
        
        return response()->json(['stores'=>$stores]);
	}
}
