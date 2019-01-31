<?php

namespace App\Http\Controllers\Myaccount\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\File;

use App\Store;
use App\StoreCategory;
use App\StoreCatClub;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$stores = Store::orderBy('created_at', 'desc')->paginate(20);
    	return view('myaccount.admin.stores')->with(['stores'=>$stores]);
    }

    public function submitStore(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:255',
    		'type' => 'required',
    		'logo' => 'mimes:jpeg,bmp,png'
    	]);

        $filename = '';
        if($request->hasFile('logo')) {
            $file = $request->file('logo');
            $destinationPath = '/uploads/stores/';
            $filename = "logo_".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }

        $store = new Store;
        $store->name = $request->name;
        $store->type = $request->type;
        $store->logo = $filename;
        $store->save();

        return redirect(route('admin.stores'))->with('message', 'New Store Added.');
    }

    public function updateStore(Request $request)
    {
        $this->validate($request, [
            'storeid' => 'required',
            'name' => 'required|max:255',
            'type' => 'required',
            'logo' => 'mimes:jpeg,bmp,png'
        ]);

        $store = Store::find($request->storeid);

        $filename = $store->logo;
        if($request->hasFile('logo')) {

            $oldfile = public_path().'/uploads/stores/'.$store->logo;
            File::delete($oldfile);

            $file = $request->file('logo');
            $destinationPath = '/uploads/stores/';
            $filename = "logo_".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }
        $store->name = $request->name;
        $store->type = $request->type;
        $store->logo = $filename;
        $store->save();
        return redirect()->route('admin.stores')->with('message', 'Store details has been updated.');
    }

    public function deleteStore(Request $request)
    {
    	$store = Store::find($request->id);
    	$filepath = public_path().'/uploads/stores/'.$store->logo;
    	File::delete($filepath);
    	$store->delete();
    	return redirect()->route('admin.stores')->with('error', 'Store has been removed from the list.');
    }

    public function categories()
    {
    	$categories = StoreCategory::orderBy('category', 'asc')->get();
    	return view('myaccount.admin.categories')->with(['categories'=>$categories]);
    }

    public function addCategory(Request $request)
    {
    	$this->validate($request, [
    		'category' => 'required|unique:store_categories'
    	]);

    	$cat = new StoreCategory;
    	$cat->category = $request->category;
    	$cat->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category)));

    	$cat->save();

    	return redirect(route('admin.categories'))->with('message', 'New Category Added.');
    }

    public function updateCategory(Request $request)
    {
        $this->validate($request, [
            'category' => 'required|unique:store_categories'
        ]);

        $cat = StoreCategory::find($request->catid);
        $cat->category = $request->category;
        $cat->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category)));
        $cat->save();

        return redirect(route('admin.categories'))->with('message', 'Category Updated.');
    }

    public function deleteCategory(Request $request)
    {
    	StoreCategory::where('id', $request->id)->delete();
    	return redirect()->route('admin.categories')->with('error', 'Seller Category Removed.');
    }

    public function storesCategory(Request $request)
    {
//        $cat_id = $request->id;
        $category = StoreCategory::find($request->id);
        if (!empty($category)) {
            $stores = Store::all();
            $clubs = StoreCatClub::where('category_id', $category->id)
                                    ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                                    ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                                    ->get();
            return view('myaccount.admin.categories-store')->with(['category_id'=>$category->id, 'stores'=>$stores, 'clubs'=>$clubs ]);
        }else{
            return redirect()->route('admin.categories');
        }
    }

    public function submitStoreCat(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'store' => 'required',
            'url' => 'required|url',
            'rank' => 'required'
        ]);

        $club = new StoreCatClub;
        $club->category_id = $request->category_id;
        $club->store_id = $request->store;
        $club->url = $request->url;
        $club->rank = $request->rank;
        $club->featured = $request->featured;
        $club->info = $request->info;

        $club->save();

        return redirect()->back()->with('message', 'Store added to category.');
    }

    public function updateStoreCat(Request $request)
    {
        $this->validate($request, [
            'club_id' => 'required',
            'url' => 'required|url',
            'rank' => 'required'
        ]);

        $club = StoreCatClub::find($request->club_id);

        $club->url = $request->url;
        $club->rank = $request->rank;
        $club->featured = $request->featured;
        $club->info = $request->info;
        $club->save();

        return redirect()->back()->with('message', 'Store details has been updated.');
    }

    public function deleteStoreCat(Request $request)
    {
        StoreCatClub::where('id', $request->id)->delete();
        return redirect()->back()->with('error', 'Store Removed.');
    }
}
