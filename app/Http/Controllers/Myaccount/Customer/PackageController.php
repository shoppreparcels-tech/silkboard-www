<?php

namespace App\Http\Controllers\Myaccount\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\Customer;
use App\Package;
use App\PackageItem;
use App\PackageInvoice;
use App\PackagePhoto;
use App\PhotoRequest;
use App\PackageCharge;
use App\ShopperBalance;
use App\ScanRequest;
use App\AdminNotification;

use App\Mail\Myaccount\PackageSplit;
use App\Mail\Myaccount\PackageAbandon;
use App\Mail\Myaccount\PackageReturn;
use App\Mail\Myaccount\Admin\ActionRequired;
use App\Mail\Myaccount\Admin\SubmitValues;
use App\Mail\Myaccount\Admin\AdvancePhoto;
use App\Mail\Myaccount\Admin\PickupRequest;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function valueConfirm(Request $request)
    {
        if (!empty($request->values)) {
            foreach ($request->values as $key => $value) {
                $items[$key]['price'] = $value;
            }

            foreach ($request->quantity as $key => $value) {
                $items[$key]['quantity'] = $value;
            }

            foreach ($items as $key => $item) {
                $total = $item['price'] * $item['quantity'];

                if(strlen((string)$item['price']) > 6 || !preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $item['price'])) {
                    return redirect(route('customer.locker.action'))->with('error', 'Please submit valid amount only!');
                }

                if(strlen((string)$total) > 6 || !preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $total)) {
                    return redirect(route('customer.locker.action'))->with('error', 'Please submit valid amount only!');
                }

                PackageItem::where('id', $key)
                    ->update([
                        'price' => $item['price'],
                        'confirm_by' => 'customer',
                        'total' => $total
                    ]);
            }
            $package = Package::find($request->package_id);
            $package->status = 'review';
            $package->review = 'Inputted value verification pending';
            $package->save();

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'package';
            $notify->action_id = $package->id;
            $notify->action_description = 'Customer confirmed values in action required - Order# '.$package->order_id;
            $notify->save();

            Mail::to('support@shoppre.com')->send(new ActionRequired($package));

            return redirect(route('customer.locker'))->with('message', 'The values that you added for your package has been submitted for shoppre review. You can view your package under "In Review".');
        }
        return redirect()->back();

    }

    public function invoicePackage(Request $request)
    {
        $this->validate($request, [
            'package_id' => 'required',
            'invoice' => 'required|mimes:pdf,doc,docx,jpeg,bmp,png|max:2048'
        ]);

        $packid = $request->package_id;
        $destinationPath = '/uploads/invoice/'.$packid.'/';
        if($request->hasFile('invoice')) {
            $file = $request->file('invoice');
            $filename = "INVOICE".$packid."-".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);

            $packInvoice = new PackageInvoice;
            $packInvoice->package_id = $packid;
            $packInvoice->invoice = $filename;
            $packInvoice->save();

            $package = Package::find($packid);
            $package->status = 'review';
            $package->review = 'Uploaded invoice verification pending';
            $package->save();

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'package';
            $notify->action_id = $package->id;
            $notify->action_description = 'Customer uploaded invoice in action required - Order# '.$package->order_id;
            $notify->save();

            Mail::to('support@shoppre.com')->send(new ActionRequired($package));

            return redirect(route('customer.locker'))->with('message', 'Your package invoice has been submitted for shoppre review.');
        }
        return redirect(route('customer.locker'))->with('error', 'Package invoice failed to upload.');
    }

    public function changeValues(Request $request)
    {
        foreach ($request->values as $key => $value) {
            $items[$key]['price'] = $value;
        }
        foreach ($request->quantity as $key => $value) {
            $items[$key]['quantity'] = $value;
        }

        $packtotal = 0;

        foreach ($items as $key => $item) {
            $total = $item['price'] * $item['quantity'];

            if(strlen((string)$item['price']) > 6 || !preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $item['price'])) {
                return redirect(route('customer.locker'))->with('error', 'Please submit valid amount only!');
            }

            if(strlen((string)$total) > 6 || !preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $total)) {
                return redirect(route('customer.locker'))->with('error', 'Please submit valid amount only!');
            }

            PackageItem::where('id', $key)
                ->update([
                    'price' => $item['price'],
                    'confirm_by' => 'customer',
                    'total' => $total
                ]);
            $packtotal += $total;
        }
        $package = Package::find($request->package_id);
        $package->price = $packtotal;
        $package->save();

        $notify = new AdminNotification;
        $notify->customer_id = Auth::id();
        $notify->action_type = 'package';
        $notify->action_id = $package->id;
        $notify->action_description = 'Customer changed values in Ready to Ship - Order# '.$package->order_id;
        $notify->save();

        Mail::to('support@shoppre.com')->send(new SubmitValues($package));


        return redirect(route('customer.locker'))->with('message', 'Package price has been updated as per your input.');
    }

    public function requestStdPhotos(Request $request)
    {
        $customer_id = Auth::id();
        $packid = (int)$request->package_id;

        if (!empty($packid) && is_int($packid)) {
            $package = Package::where('id', $packid)->where('customer_id', $customer_id)->first();
            if (!empty($package)) {
                $photos = PackagePhoto::where('package_id', $packid)->where('type', 'standard')->get();

                $status = ($photos->isEmpty()) ? 'pending' : 'completed';

                $photoReq = new PhotoRequest;
                $photoReq->package_id = $packid;
                $photoReq->type = 'standard';
                $photoReq->status = $status;
                $photoReq->charge = 20.00;
                $photoReq->save();

                PackageCharge::where('package_id', $packid)->update(['basic_photo' => 20.00 ]);

                $notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'package';
                $notify->action_id = $packid;
                $notify->action_description = 'Requested for Standard Photos - Order# '.$package->order_id;
                $notify->save();

                if ($status == 'completed') {
                    return response()->json([ 'error'=>'0', 'status'=> $status, 'photos'=>$photos]);
                }
                if($status == 'pending'){
                    $pack = Package::find($packid);
                    $pack->status = 'review';
                    $pack->review = 'Requested for Standard Photos';
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
        $customer_id = Auth::id();
        $packid = (int)$request->package_id;

        if (!empty($packid) && is_int($packid)) {
            $package = Package::where('id', $packid)->where('customer_id', $customer_id)->first();
            if (!empty($package)) {
                $photoReq = new PhotoRequest;
                $photoReq->package_id = $packid;
                $photoReq->type = 'advanced';
                $photoReq->status = 'pending';
                $photoReq->charge = 500.00;
                $photoReq->description = $request->description;
                $photoReq->save();

                PackageCharge::where('package_id', $packid)->update(['advance_photo' => 500.00 ]);

                $pack = Package::find($packid);
                $pack->status = 'review';
                $pack->review = 'Requested for Advanced Photos';
                $pack->save();

                $notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'package';
                $notify->action_id = $packid;
                $notify->action_description = 'Requested for Advanced Photos - Order# '.$package->order_id;
                $notify->save();

                Mail::to('support@shoppre.com')->send(new AdvancePhoto($pack));

                return response()->json([ 'error'=>'0']);
            }else{
                return response()->json(['error'=>'1']);
            }
        }else{
            return response()->json(['error'=>'1']);
        }
    }

    public function requestPickup(Request $request)
    {
        $customer_id = Auth::id();
        $package_ids = $request->package_ids;
        $packages = Package::where('customer_id', $customer_id)->where('status', 'ship')->whereIn('id', $package_ids)->get();

        if (!$packages->isEmpty()) {

            foreach ($packages as $package) {
                $notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'package';
                $notify->action_id = $package->id;
                $notify->action_description = 'Pickup from shoppre requested - Order# '.$package->order_id;
                $notify->save();
            }

            Mail::to('support@shoppre.com')->send(new PickupRequest($packages));

            Package::whereIn('id', $package_ids)->update(['status' => 'pickup', 'review' => 'Pickup from shoppre requested']);

            return view('customer.pickup_response');
        }

        return redirect(route('customer.locker'));
    }

    public function returnSender(Request $request)
    {
        $customer_id = Auth::id();
        $packid = $request->return_packid;
        $package = Package::where('customer_id', $customer_id)->where('id', $packid)->first();

        if (!empty($package)) {

            if ($request->return_type == 'return_pickup') {
                $returnmsg = "return_pickup,".$request->message1;
            }else{
                $returnmsg = "return_shoppre,".$request->message2;
            }

            $customer = Customer::find($customer_id);
            Mail::to($customer->email)->send(new PackageReturn($package, $returnmsg));

            Package::where('id', $packid)->update(['status' => 'return', 'review' => 'Return to sender requested', 'return_send' => $returnmsg ]);

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'package';
            $notify->action_id = $package->id;
            $notify->action_description = 'Return to sender requested - Order# '.$package->order_id;
            $notify->save();

            return redirect(route('customer.locker'))->with('message', 'Your Return to Sender request has been submitted to shoppre team.');
        }
    }

    public function splitPackage(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $packid = $request->split_packid;
        $package = Package::where('customer_id', $customer_id)->where('id', $packid)->first();

        if (!empty($package)) {

            $splitmessage = $request->message;

            Mail::to($customer->email)->send(new PackageSplit($package, $splitmessage));

            Package::where('id', $packid)->update(['status' => 'split', 'review' => 'Split package requested', 'split_pack' => $splitmessage ]);

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'package';
            $notify->action_id = $package->id;
            $notify->action_description = 'Split package requested - Order# '.$package->order_id;
            $notify->save();

            return redirect(route('customer.locker'))->with('message', 'Your Split Package request has been submitted to shoppre team.');
        }
    }

    public function abandonPackage(Request $request)
    {
        $customer_id = Auth::id();
        $packid = $request->abandon_packid;
        $package = Package::where('customer_id', $customer_id)->where('id', $packid)->first();

        if (!empty($package)) {

            $customer = Customer::find($customer_id);

            Mail::to($customer->email)->send(new PackageAbandon($package));

            Package::where('id', $packid)->update(['status' => 'abandon']);

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'package';
            $notify->action_id = $package->id;
            $notify->action_description = 'Abandon package request - Order# '.$package->order_id;
            $notify->save();

            return redirect(route('customer.locker'))->with('message', 'All items in your package has been discarded as per your request. You can no longer retrieve the items in your package.');
        }
    }

    public function requestScan(Request $request)
    {
        $customer_id = Auth::id();
        $packid = $request->doc_packid;
        $package = Package::where('id', $packid)->where('customer_id', $customer_id)->first();
        if (!empty($package)) {
            $scan = new ScanRequest;
            $scan->package_id = $package->id;

            if ($request->scan_type == 'limited') {
                $scan->type = 'limited';
                $scan->page_from = $request->page_from;
                $scan->page_to = $request->page_to;
            }else{
                $scan->type = 'full';
            }

            $scan->message = $request->message;
            $scan->status = 'pending';
            $scan->save();

            $pack = Package::find($packid);
            $pack->status = 'review';
            $pack->review = 'Requested Document Scan';
            $pack->save();

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'package';
            $notify->action_id = $package->id;
            $notify->action_description = 'Requested Document Scan - Order# '.$package->order_id;
            $notify->save();

            return redirect(route('customer.locker.review'))->with('message', 'Your Document Scan request has been submitted to shoppre team.');
        }else{
            return redirect(route('customer.locker'));
        }
    }

    public function addNote(Request $request)
    {
        $customer_id = Auth::id();
        $package = Package::find($request->note_packid);
        if (!empty($package) && $package->customer_id == $customer_id) {
            $package->info = $request->message;
            $package->save();
        }

        return redirect()->back()->with('message', 'Note updated to your package');
    }
}
