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
