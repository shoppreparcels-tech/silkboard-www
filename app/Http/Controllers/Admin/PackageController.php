<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Session;
use Auth;

use App\Package;
use App\Customer;
use App\PackageItem;
use App\PackageInvoice;
use App\PackagePhoto;
use App\PhotoRequest;
use App\PackageCharge;
use App\LoyaltyPoint;

use App\Mail\PackageArrived;
use App\Mail\PackageAction;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function packages(Request $request)
    {
        $query = Package::query();
        if (isset($request->search) && !empty($request->search)) {
            $keyword = $request->search;
            $query->orWhere('order_id', 'like', '%'.$keyword.'%')
                                ->orWhere('seller', 'like', '%'.$keyword.'%')
                                ->orWhere('refference', 'like', '%'.$keyword.'%')
                                ->orWhere('locker', 'like', '%'.$keyword.'%');
        }

        $packages = $query->orderBy('updated_at', 'desc')->paginate(20);

    	return view('admin.package.all')->with('packages', $packages);
    }

    public function packagesInreview()
    {
        $packages = Package::where('status', 'review')->orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.package.inreview')->with('packages', $packages);
    }

    public function packagesInAction()
    {
        $packages = Package::whereIn('status', ['values', 'invoice'])->orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.package.inaction')->with('packages', $packages);
    }

    public function packagesReady()
    {
        $packages = Package::where('status', 'ship')->orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.package.ready')->with('packages', $packages);
    }

    public function addPackage()
    {
    	return view('admin.package-add');
    }

    public function submitPackage(Request $request)
    {
    	$this->validate($request, [
    		'seller' => 'required',
    		'refference' => 'required',
    		'locker' => 'required',
            'type' => 'required',
    		'price' => 'required',
            'weight' => 'required',
    		'received' => 'required|date'
    	]);

    	$package = new Package;
    	$customer = Customer::where('locker', $request->locker)->first();
    	$package->customer_id = $customer->id;

        do
        {
            $order_id = 'PCKG-'.rand(100, 999).$customer->id.rand(1000, 9999);
            $checkOrder = Package::where('order_id', $order_id)->get();
        }
        while(!$checkOrder->isEmpty());
        $package->order_id = $order_id;

    	$package->seller = $request->seller;
    	$package->refference = $request->refference;
    	$package->locker = $request->locker;
        $package->type = $request->type;
        $package->weight = $request->weight;
    	$package->price = $request->price;
    	$package->received = date('Y-m-d', strtotime($request->received));
        $package->liquid = $request->liquid;
        $package->sellerfeat = $request->sellerfeat;

        $package->status = 'review';
        $package->review = 'Review package values, items, charges and photos';
    	$package->save();

        $weight = $package->weight;

        $charges = new PackageCharge;
        $charges->packid = $package->id;
        if ($request->type == 'doc') {
            $charges->doc = 100.00;
        }
        $charges->save();

        if ($request->sellerfeat == '1') {
            $points = 100;
            $loyalid = LoyaltyPoint::where('custid', $customer->id)->first()->id;
            $loyalty = LoyaltyPoint::find($loyalid);
            $loyalty->points += $points;
            $loyalty->total += $points;

            $level = $loyalty->level;
            if ($loyalty->total > 1000) {
                $level = (int)($loyalty->total / 1000) + 1;
            }
            $loyalty->level = $level;
            $loyalty->save();
        }

    	return redirect(route('admin.packages'))->with('message', 'Success! New package added to list.');
    }

    public function editPackage(Request $request)
    {
        $package = Package::find($request->id);
        if (empty($package)) {
            return redirect(route('admin.packages'));
        }
        $items = PackageItem::where('packid', $package->id)->get();
        $invoice = PackageInvoice::where('packid', $package->id)->orderBy('updated_at', 'desc')->first();

        $customer = Customer::where('locker', $package->locker)->first();
        return view('admin.package')->with(['package'=>$package, 'customer'=>$customer, 'items'=>$items, 'invoice'=>$invoice]);
    }

    public function updatePackage(Request $request)
    {
        $this->validate($request, [
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
            $package->seller = $request->seller;
            $package->refference = $request->refference;
            $package->locker = $customer->locker;
            $package->price = $request->price;
            $package->weight = $request->weight;
            $package->liquid = $request->liquid;
            $package->sellerfeat = $request->sellerfeat;
            $package->received = date('Y-m-d', strtotime($request->received));
            $package->status = $request->status;
            if ($request->status == 'values') {
                $package->review = 'Package waiting for customer input value action';
            }elseif ($request->status == 'invoice') {
                $package->review = 'Package under review for customer invoice upload';
            }elseif ($request->status == 'reivew') {
                $package->review = 'Package is under shoppre review';
            }else{
                $package->review = '';
            }
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

    public function submitPhoto(Request $request)
    {
        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'packid' => 'required',
            'type' => 'required'
        ]);

        $filename = '';
        $packid = $request->packid;
        $type = $request->type;
        if($request->hasFile('photos')) {
            $files = $request->file('photos');
            foreach ($files as $file) {
                $destinationPath = "/uploads/packages/$type/$packid/";
                $filename = "IMG-".uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path(). $destinationPath, $filename);

                $photo = new PackagePhoto;
                $photo->packid = $packid;
                $photo->name = $filename;
                $photo->type = $type;
                $photo->save();
            }
        }
        return redirect()->back()->with('message', 'Success! Photos added to package.');
    }

    public function deletePhoto(Request $request)
    {
        $photo = PackagePhoto::where('id', $request->id)->first();
        unlink(public_path("/uploads/packages/$photo->type/$photo->packid/".$photo->name));
        $photo->delete();
        return redirect()->back()->with('error', 'Photo removed from package.');
    }

    public function updatePhotoRequest(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'reqid' => 'required',
        ]);

        $photoReq = PhotoRequest::find($request->reqid);
        $photoReq->status = $request->status;
        $photoReq->save();
        return redirect()->back()->with('message', 'Photo request updated!');
    }

    public function updatePackCharge(Request $request)
    {
        $this->validate($request, [
            'chargeid' => 'required'
        ]);

        $charge = PackageCharge::find($request->chargeid);

        $charge->storage = $request->storage;
        $charge->address = $request->address;
        $charge->handling = $request->handling;
        $charge->pickup = $request->pickup;
        $charge->doc = $request->doc;
        $charge->liquid = $request->liquid;
        $charge->basic_photo = $request->basic_photo;
        $charge->advnc_photo = $request->advnc_photo;
        $charge->save();

        return redirect()->back()->with('message', 'Package level charges updated!');
    }

    public function mailerPackage(Request $request)
    {
        $this->validate($request, [
            'packid' => 'required',
            'condition' => 'required'
        ]);

        $package = Package::find($request->packid);
        if (!empty($package)) {
            $customer = Customer::find($package->customer_id);

            switch ($request->condition) {
                case 'arrived':
                    Mail::to($customer->email)->send(new PackageArrived($customer, $package));
                    return redirect()->back()->with('message', 'Package arrival notification send to customer.');
                break;

                case 'action_req':
                    Mail::to($customer->email)->send(new PackageAction());
                    return redirect()->back()->with('message', 'Action required mail send to customer.');
                break;
            }
        }else{
            return redirect()->route('admin.packages');
        }

        
    }
}
