<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Auth;

use App\Package;
use App\Customer;
use App\PackageItem;
use App\PackageInvoice;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function packages()
    {
        $packages = Package::with('items')->orderBy('updated_at', 'desc')->get();
    	return view('admin.packages')->with('packages', $packages);
    }
    public function confirmPackages()
    {
        $packages = Package::where('status', 'customer')->orderBy('updated_at', 'desc')->get();
        return view('admin.packages-confirm')->with('packages', $packages);
    }
    public function reviewPackages()
    {
        $packages = Package::where('status', 'review')->orderBy('updated_at', 'desc')->get();
        return view('admin.packages-review')->with('packages', $packages);
    }
    public function readyPackages()
    {
        $packages = Package::where('status', 'ship')->orderBy('updated_at', 'desc')->get();
        return view('admin.packages-review')->with('packages', $packages);
    }

    public function addPackage()
    {
    	return view('admin.package-add');
    }

    public function submitPackage(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'seller' => 'required',
    		'refference' => 'required',
    		'locker' => 'required',
    		'price' => 'required',
            'weight' => 'required',
    		'received' => 'required|date',
            'status' => 'required',
    	]);

    	$package = new Package;

    	$customer = Customer::where('locker', $request->locker)->first();

    	$package->customer_id = $customer->id;
    	$package->order_id = 'PCKG-'.$customer->id.'-'.time();
    	$package->title = $request->title;
    	$package->seller = $request->seller;
    	$package->refference = $request->refference;
    	$package->locker = $request->locker;
        $package->weight = $request->weight;
    	$package->price = $request->price;
    	$package->received = date('Y-m-d', strtotime($request->received));
        $package->status = $request->status;

    	$package->save();

    	return redirect(route('admin.packages'))->with('message', 'Success! New package added to list.');
    }

    public function editPackage(Request $request)
    {
        $package = Package::find($request->id);
        $items = PackageItem::where('packid', $package->id)->get();
        $invoice = PackageInvoice::where('packid', $package->id)->orderBy('updated_at', 'desc')->first();
        $customer = Customer::where('locker', $package->locker)->first();
        return view('admin.package-edit')->with(['package'=>$package, 'customer'=>$customer, 'items'=>$items, 'invoice'=>$invoice]);
    }

    public function updatePackage(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'seller' => 'required',
            'refference' => 'required',
            'locker' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'received' => 'required|date',
            'status' => 'required'
        ]);

        $package = Package::find($request->id);

        $customer = Customer::where('locker', $request->locker)->first();
        if (!empty($customer)) {
            $package->customer_id = $customer->id;
            $package->title = $request->title;
            $package->seller = $request->seller;
            $package->refference = $request->refference;
            $package->locker = $customer->locker;
            $package->price = $request->price;
            $package->weight = $request->weight;
            $package->received = date('Y-m-d', strtotime($request->received));
            $package->status = $request->status;
            $package->save();

            return redirect()->back()->with('message', 'Package updated successfully.');
        }else{
            return redirect(route('admin.packages'))->with('error', 'Locker number does not found in database.');
        }
    }

    public function submitItem(Request $request)
    {
        $this->validate($request, [
            'item' => 'required',
            'qty' => 'required'
        ]);

        $item = new PackageItem;

        $item->packid = $request->packid;
        $item->item = $request->item;
        $item->qty = $request->qty;
        $item->price = $request->price;
        $item->total = $request->price * $request->qty;
        if (!empty($item->price)) {
            $item->confirm_by = 'shoppre';
        }
        
        $item->save();

        return redirect()->back()->with('message', 'Success! New item added to package.');
    }

    public function deleteItem(Request $request)
    {
        PackageItem::where('id', $request->id)->delete();
        return redirect()->back()->with('error', 'Item removed from package.');
    }
}
