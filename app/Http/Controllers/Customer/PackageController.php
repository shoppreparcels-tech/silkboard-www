<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Package;
use App\PackageItem;
use App\PackageInvoice;
use App\PackagePhoto;
use App\PhotoRequest;
use App\PackageCharge;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function addPackage()
    {
        return view('customer.package-add');
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

        $package->status = 'ship';
        $package->review = 'Review package values, items, charges and photos';
        $package->save();

        $weight = $package->weight;

        $charges = new PackageCharge;
        $charges->packid = $package->id;
        if ($request->type == 'doc') {
            $charges->doc = 100.00;
        }
        if ($request->liquid == '1') {
            if ($weight < 5) {
                $charges->liquid = 1000.00;
            }
            if ($weight >= 5 && $weight <= 10) {
                $charges->liquid = 1500.00;
            }
            if ($weight > 10) {
                $charges->liquid = 2500.00;
            }
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

        $id = Auth::id();
        $customer = Customer::find($id);

        $ships = Package::where('customer_id', $id)->where('status', 'ship')->get();
        $reviews = Package::where('customer_id', $id)->where('status', 'review')->get();
        $confirms = Package::with('items')->where('customer_id', $id)
            ->whereIn('status', ['invoice', 'values'])
            ->get();
        $packages = Package::where('customer_id', $id)
            ->whereIn('status', ['ship','review','invoice','values'])
            ->get();

        $shipQueue = ShipRequest::where('custid', $id)->whereIn('shipstatus', ['inqueue', 'inreview', 'confirmation'])->get();
        $shipConfirm = ShipRequest::where('custid', $id)->where('shipstatus', 'confirmation')->get();

        foreach ($ships as $ship) {
            $expireDays = 0;
            $expire = strtotime($ship->received.' + 20 days');
            if(time() > $expire){
                $expireDays = floor((time() - $expire) / (60 * 60 * 24)) + 1;
                $storageCost = $expireDays * 100;
                PackageCharge::where('packid', $ship->id)->update([ 'storage' => $storageCost ]);
            }
        }

        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $address = Address::where('cust_id', $id)->where('default', 'yes')->first();

        $survey = RegisterSurvey::where('custid', $id)->first();

        return view('customer.locker')->with(['customer'=>$customer, 'ships'=>$ships,
            'reviews'=>$reviews, 'confirms'=>$confirms, 'packages'=>$packages, 'shipQueue'=>$shipQueue,
            'countries'=>$countries, 'address'=>$address, 'survey'=>$survey, 'shipConfirm'=>$shipConfirm]);

    }
    
    public function valueConfirm(Request $request)
    {
        foreach ($request->values as $key => $value) {
            $items[$key]['price'] = $value;
        }
    	foreach ($request->qty as $key => $value) {
            $items[$key]['qty'] = $value;
        }
        foreach ($items as $key => $item) {
            $total = $item['price'] * $item['qty'];
            PackageItem::where('id', $key)
                ->update([
                    'price' => $item['price'],
                    'confirm_by' => 'customer',
                    'total' => $total
                ]);
        }
        $package = Package::find($request->packid);
        $package->status = 'review';
        $package->review = 'Verify customer action input values';
        $package->save();
        return redirect(route('customer.locker'))->with('message', 'Your package has been submited for shoppre review.');
    }

    public function invoicePackage(Request $request)
    {
        $this->validate($request, [
            'packid' => 'required',
            'invoice' => 'required|mimes:pdf,doc,docx,jpeg,bmp,png|max:2048'
        ]);

        $packid = $request->packid;
        $destinationPath = '/uploads/invoice/'.$packid.'/';
        if($request->hasFile('invoice')) {
            $file = $request->file('invoice');
            $filename = "INVOICE".$packid."-".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);

            $packInvoice = new PackageInvoice;
            $packInvoice->packid = $packid;
            $packInvoice->invoice = $filename;
            $packInvoice->save();

            $package = Package::find($packid);
            $package->status = 'review';
            $package->review = 'Verify customer uploaded invoice';
            $package->save();

            return redirect(route('customer.locker'))->with('message', 'Your package invoice has been submited for shoppre review.');
        }
        return redirect(route('customer.locker'))->with('error', 'Package invoice failed to upload.');
    }

    public function changeValues(Request $request)
    {
        foreach ($request->values as $key => $value) {
            $items[$key]['price'] = $value;
        }
        foreach ($request->qty as $key => $value) {
            $items[$key]['qty'] = $value;
        }

        $packtotal = 0;

        foreach ($items as $key => $item) {
            $total = $item['price'] * $item['qty'];
            PackageItem::where('id', $key)
                ->update([
                    'price' => $item['price'],
                    'confirm_by' => 'customer',
                    'total' => $total
                ]);
            $packtotal += $total;
        }
        $package = Package::find($request->packid);
        $package->price = $packtotal;
        $package->save();
        return redirect(route('customer.locker'))->with('message', 'Package price has been updated as per your input.');
    }

    public function requestStdPhotos(Request $request)
    {
        $custid = Auth::id();
        $packid = (int)$request->packid;

        if (!empty($packid) && is_int($packid)) {
            $package = Package::where('id', $packid)->where('customer_id', $custid)->first();
            if (!empty($package)) {
                $photos = PackagePhoto::where('packid', $packid)->where('type', 'standard')->get();

                $status = ($photos->isEmpty()) ? 'pending' : 'completed';

                $photoReq = new PhotoRequest;
                $photoReq->packid = $packid;
                $photoReq->type = 'standard';
                $photoReq->status = $status;
                $photoReq->charge = 100.00;
                $photoReq->save();

                PackageCharge::where('packid', $packid)->update(['basic_photo' => 100.00 ]);

                if ($status == 'completed') {
                    return response()->json([ 'error'=>'0', 'status'=> $status, 'photos'=>$photos]);
                }
                if($status == 'pending'){
                    $pack = Package::find($packid);
                    $pack->status = 'review';
                    $pack->review = 'Customer requested for Standard Photos';
                    $pack->save();
                    return response()->json([ 'error'=>'1', 'status'=> $status ]);
                }
            }else{
                return response()->json(['error'=>'2']);
            }
        }else{
            return response()->json(['error'=>'2']);
        }

        
    }

    public function requestAdvncPhotos(Request $request)
    {
        $custid = Auth::id();
        $packid = (int)$request->packid;

        if (!empty($packid) && is_int($packid)) {
            $package = Package::where('id', $packid)->where('customer_id', $custid)->first();
            if (!empty($package)) {
                $photoReq = new PhotoRequest;
                $photoReq->packid = $packid;
                $photoReq->type = 'advanced';
                $photoReq->status = 'pending';
                $photoReq->charge = 500.00;
                $photoReq->description = $request->description;
                $photoReq->save();

                PackageCharge::where('packid', $packid)->update(['advnc_photo' => 500.00 ]);

                $pack = Package::find($packid);
                $pack->status = 'review';
                $pack->review = 'Customer requested for Advanced Photos';
                $pack->save();
                return response()->json([ 'error'=>'0']);
            }else{
                return response()->json(['error'=>'1']);
            }
        }else{
            return response()->json(['error'=>'1']);
        }
    }
}
