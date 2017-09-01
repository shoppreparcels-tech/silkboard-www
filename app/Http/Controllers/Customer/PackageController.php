<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Package;
use App\PackageItem;
use App\PackageInvoice;

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
        $destinationPath = '/uploads/invoice/';
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
            $package->save();

            return redirect(route('customer.locker'))->with('message', 'Your package invoice has been submited for shoppre review.');
        }
        return redirect(route('customer.locker'))->with('error', 'Package invoice failed to upload.');
    }
}
