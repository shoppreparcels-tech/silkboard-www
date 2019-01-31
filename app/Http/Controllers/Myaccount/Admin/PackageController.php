<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Authorization\Authorization;
use App\ItemCategory;
use App\SchedulePickup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Auth;

use App\PackageMail;
use App\Package;
use App\Customer;
use App\PackageItem;
use App\PackageInvoice;
use App\PackagePhoto;
use App\PhotoRequest;
use App\PackageCharge;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\ScanDocument;
use App\ScanRequest;
use App\ShopperBalance;
use App\WalletTransaction;

use App\Mail\Myaccount\PackageArrived;
use App\Mail\Myaccount\PackageAction;
use App\Mail\Myaccount\PackageSplitDone;
use App\Mail\Myaccount\PackageReturnDone;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pickupUpdateSubmit(Request $request)
    {

    }

    public function packages(Request $request)
    {
        $query = Package::query();
        if (isset($request->search) && !empty($request->search)) {
            $keyword = $request->search;
            $query->orWhere('order_id', 'like', '%'.$keyword.'%')
                                ->orWhere('seller', 'like', '%'.$keyword.'%')
                                ->orWhere('reference', 'like', '%'.$keyword.'%')
                                ->orWhere('locker', 'like', '%'.$keyword.'%');
        }

        $packages = $query->orderBy('updated_at', 'desc')->paginate(20);

    	return view('myaccount.admin.package.all')->with('packages', $packages);
    }

    public function packagesInreview()
    {
        $packages = Package::where('status', 'review')
            ->orderBy('updated_at', 'desc')->paginate(20);
        return view('myaccount.admin.package.inreview')->with('packages', $packages);
    }

    public function packagesInAction()
    {
        $packages = Package::whereIn('status', ['values', 'invoice'])
            ->orderBy('updated_at', 'desc')->paginate(20);
        return view('myaccount.admin.package.inaction')->with('packages', $packages);
    }

    public function packagesReady()

    {
        $packages = Package::where('status', 'ship')
            ->orderBy('updated_at', 'desc')->paginate(20);
        return view('myaccount.admin.package.ready')->with('packages', $packages);

    }

    public function addPackage()
    {
    	return view('myaccount.admin.package-add');
    }

    public function submitPackage(Request $request)
    {
    	$this->validate($request, [
    		'seller' => 'required',
    		'reference' => 'required',
    		'locker' => 'required',
            'type' => 'required',
            'number_of_items' => 'required',
    		'price' => 'required',
            'weight' => 'required',
    		'received' => 'required|date'
    	]);

    	$customer = Customer::where('locker', $request->locker)->first();
        if (empty($customer)) {
            return redirect()->back()->with('error', 'Invalid Locker Number Entered!');
        }
        if ($customer->is_migrated == 2) {
          $authorized_url = Authorization::authorizeUser($customer->email);
            return redirect($authorized_url);
        }

        $package = new Package;
    	$package->customer_id = $customer->id;

        do
        {
            $order_id = 'PCKG-'.rand(100, 999).$customer->id.rand(1000, 9999);
            $checkOrder = Package::where('order_id', $order_id)->get();
        }
        while(!$checkOrder->isEmpty());
        $package->order_id = $order_id;

    	$package->seller = $request->seller;
    	$package->reference = $request->reference;
    	$package->locker = $request->locker;
        $package->type = $request->type;
        $package->weight = $request->weight;
        $package->number_of_items = $request->number_of_items;
    	$package->price = $request->price;
    	$package->received = date('Y-m-d', strtotime($request->received));
        $package->liquid = $request->liquid;
        $package->is_featured_seller = $request->is_featured_seller;
        $package->is_item_damaged = $request->is_item_damaged;

        $package->status = 'review';
        $package->review = 'Review package values, items, charges and photos';
    	$package->save();

        $weight = $package->weight;

        $charges = new PackageCharge;
        $charges->package_id = $package->id;
        if ($request->type == 'doc') {
            $charges->doc = 0.00;
        }
        $charges->save();

        if ($request->is_featured_seller == '1') {
            $points = 50;
            $loyalid = LoyaltyPoint::where('customer_id', $customer->id)->first()->id;
            $loyalty = LoyaltyPoint::find($loyalid);
            $loyalty->points += $points;
            $loyalty->total += $points;

            if ($loyalty->total < 1000) {
                $loyalty->level = 1;
            }elseif ($loyalty->total >= 1000 && $loyalty->total < 6000) {
                $loyalty->level = 2;
            }elseif ($loyalty->total >= 6000 && $loyalty->total < 26000) {
                $loyalty->level = 3;
            }elseif ($loyalty->total >= 26000) {
                $loyalty->level = 4;
            }

            $loyalty->save();

            $misc = new LoyaltyMisc;
            $misc->customer_id = $customer->id;
            $misc->info = 'Featured Seller Shopping Reward';
            $misc->points = $points;
            $misc->save();
        }

    	return redirect(route('admin.packages'))->with('message', 'Success! New package added to list.');
    }

    public function deletePackage(Request $request)
    {
      $packid = $request->hdn_p_id;
      $package = Package::where('id', $packid)
          ->whereIn('status', ['ship', 'review', 'values', 'invoice'])->first();
      if (!empty($package)) {

        PackageCharge::where('package_id', $package->id)->delete();
        PackageInvoice::where('package_id', $package->id)->delete();
        PackageItem::where('package_id', $package->id)->delete();
        PackagePhoto::where('package_id', $package->id)->delete();
        PhotoRequest::where('package_id', $package->id)->delete();

        File::deleteDirectory(public_path().'/uploads/packages/standard/'.$package->id);
        File::deleteDirectory(public_path().'/uploads/packages/advanced/'.$package->id);

        Package::destroy($package->id);
        return redirect()->back()->with('error', 'Package deleted successfully.');

      }else{
        return redirect()->route('admin.packages');
      }
    }

    public function edit(Request $req)
    {
        $package = Package::find($req->id);

        if (empty($package)) {
            return redirect(route('admin.packages'));
        }

        $item_categories = ItemCategory::orderBy('name','asc')->get();

        $items = PackageItem::where('package_id', $package->id)
                 ->leftJoin('item_categories','item_categories.id','=','package_items.item_category_id')
                 ->orderBy('package_items.id','desc')
                 ->select('item_categories.id as item_category_id', 'item_categories.name as item_name','package_items.*')
                  ->get();

        $invoice = PackageInvoice::where('package_id', $package->id)
            ->orderBy('updated_at', 'desc')
            ->first();

        $customer = Customer::where('locker', $package->locker)->first();
        $package_mails = PackageMail::select('condition')
            ->where('package_id', $package->id)
            ->get()
            ->pluck('condition')
            ->toArray();

        $package->admin_read = 'yes';
        $package->save();

        return view('myaccount.admin.package.edit')
            ->with([
                'package' => $package,
                'customer' => $customer,
                'items' => $items,
                'invoice' => $invoice,
                'package_mails' => $package_mails,
                'item_categories'=>$item_categories,
            ]);
    }

    public function markUnread(Request $request)
    {
        $package = Package::find($request->package_id);
        $package->admin_read = "no";
        $package->save();
        return redirect()->route('admin.packages');
    }

    public function updatePackage(Request $request)
    {
        $this->validate($request, [
            'seller' => 'required',
            'reference' => 'required',
            'locker' => 'required',
            'number_of_items' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'received' => 'required|date',
            'status' => 'required'
        ]);

        $package = Package::find($request->id);

        $customer = Customer::where('locker', $request->locker)->first();
        $item_count = PackageItem::where('package_id', $request->id)->sum('quantity');
        $photo_request=PhotoRequest::where('package_id',$request->id)->first();
        if (!empty($customer)) {
            $package->customer_id = $customer->id;
            $package->seller = $request->seller;
            $package->reference = $request->reference;
            $package->type = $request->type;
            $package->locker = $customer->locker;
            $package->number_of_items = $request->number_of_items;
            $package->price = $request->price;
            $package->weight = $request->weight;
            $package->liquid = $request->liquid;
            $package->is_featured_seller = $request->is_featured_seller;
            $package->is_item_damaged = $request->is_item_damaged;
            $package->received = date('Y-m-d', strtotime($request->received));
            $package->status = $request->status;

                if ($request->status == 'ship') {
                    if(!empty($photo_request)) {
                        if ($photo_request->status == "pending") {
                            return redirect()->back()->with('error', 'Please check and update the Photo Request Status !');
                        }
                    }
                    if ($item_count != $package->number_of_items) {
                            return redirect()->back()->with('error', 'please check your items !');
                        }
                }elseif ($request->status == 'values') {
                    $package->review = 'Package waiting for customer input value action';
                } elseif ($request->status == 'invoice') {
                    $package->review = 'Package under review for customer invoice upload';
                } elseif ($request->status == 'reivew') {
                    $package->review = 'Package is under shoppre review';
                } elseif ($request->status == 'split_done') {
                    $package->review = 'Package Splitted!';
                    Mail::to($customer->email)->send(new PackageSplitDone($package));
                } elseif ($request->status == 'return_done') {
                    $package->review = 'Package Returned to Sender!';
                    Mail::to($customer->email)->send(new PackageReturnDone($package));

                    $balance = ShopperBalance::where('customer_id', $customer->id)->first();
                    $walletAmount = $balance->amount - 400;
                    ShopperBalance::where('customer_id', $customer->id)->update(['amount' => $walletAmount]);
                    $trans = new WalletTransaction;
                    $trans->customer_id = $package->customer_id;
                    $trans->wallet_id = $balance->id;
                    $trans->amount = -400;
                    $trans->description = 'Return service fee deducted | Order ID ' . $package->order_id;
                    $trans->save();

                } else {
                    $package->review = '';
                }
                $package->save();

                return redirect()->back()->with('message', 'Package updated successfully.');
            } else {
                return redirect(route('admin.packages'))->with('error', 'Locker number does not found in database.');
            }
        }

    public function submitItem(Request $request)
    {
        $this->validate($request, [
            'item' => 'required',
            'item_category_id' => 'required',
            'quantity' => 'required'

        ]);

        $item = new PackageItem;

        $item->package_id = $request->package_id;
        $item->item = $request->item;
        $item->item_category_id = $request->item_category_id;
        $item->quantity = $request->quantity;
        $item->price = $request->price;
        $item->total = $request->price * $request->quantity;
        if (!empty($item->price)) {
            $item->confirm_by = 'shoppre';
        }

        $item->save();

        return redirect()->back()->with('message', 'Success! New item added to package.');
    }

    public function submitCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

        ]);
        $category = new ItemCategory;
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('message', 'Success! New item added to Category.');
    }
    public function submitUpdateItem(Request $request)
    {
        $item_id = $request->hdn_item_id;
        $item = PackageItem::find($item_id);
        $item->item = $request->item_name;
        $item->item_category_id = $request->item_category_id;
        $item->quantity = $request->item_quantity;

        $item->price = $request->item_price;
        $item->total = $request->item_price * $request->item_quantity;
        if (!empty($item->item_price)) {
            $item->confirm_by = 'shoppre';
        }

        $item->save();

        return redirect()->back()->with('message', 'Success! item updated .');
    }

    public function getItemDetail(Request $request)
    {
      $item_id = $request->item_id;
      $item = PackageItem::where('id',$item_id)->first();
        if (!empty($item))
        {
        return response()->json([ 'error'=>'0', 'item'=> $item]);
        }else{
        return response()->json(['error'=>'1']);
        }
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
            'package_id' => 'required',
            'type' => 'required'
        ]);

        $filename = '';
        $packid = $request->package_id;
        $type = $request->type;
        if($request->hasFile('photos')) {
            $files = $request->file('photos');
            foreach ($files as $file) {
                $destinationPath = "/uploads/packages/$type/$packid/";
                $filename = "IMG-".uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path(). $destinationPath, $filename);

                $photo = new PackagePhoto;
                $photo->package_id = $packid;
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
        unlink(public_path("/uploads/packages/$photo->type/$photo->package_id/".$photo->name));
        $photo->delete();
        return redirect()->back()->with('error', 'Photo removed from package.');
    }

    public function updatePhotoRequest(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'reqid' => 'required',
        ]);

        $photo_request = PhotoRequest::find($request->reqid);
        $photo_request->status = $request->status;
        $photo_request->save();
        return redirect()->back()->with('message', 'Photo request updated!');
    }

    public function submitScandoc(Request $request)
    {
        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'package_id' => 'required'
        ]);

        $filename = '';
        $packid = $request->package_id;
        if($request->hasFile('photos')) {
            $files = $request->file('photos');
            foreach ($files as $file) {
                $destinationPath = "/uploads/scandocs/$packid/";
                $filename = "SCAN-".uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path(). $destinationPath, $filename);

                $scan = new ScanDocument;
                $scan->package_id = $packid;
                $scan->name = $filename;
                $scan->save();
            }
        }

        $count = ScanDocument::where('package_id', $packid)->get()->count();
        $charge = 40 * $count;
        if ($charge < 100) { $charge = 100; }

        PackageCharge::where('package_id', $packid)->update(['scan_doc' => $charge]);

        return redirect()->back()->with('message', 'Success! Documents added to package.');
    }

    public function deleteScandoc(Request $request)
    {
        $scan = ScanDocument::where('id', $request->id)->first();
        $packid = $scan->package_id;
        unlink(public_path("/uploads/scandocs/$packid/".$scan->name));
        $scan->delete();

        $count = ScanDocument::where('package_id', $packid)->get()->count();
        $charge = 40 * $count;
        PackageCharge::where('package_id', $packid)->update(['scan_doc' => $charge]);

        return redirect()->back()->with('error', 'Document removed from package.');
    }

    public function updateScanRequest(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'reqid' => 'required',
        ]);

        $scanReq = ScanRequest::find($request->reqid);
        $scanReq->status = $request->status;
        $scanReq->save();
        return redirect()->back()->with('message', 'Scan Document request updated!');
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
        $charge->basic_photo = $request->basic_photo;
        $charge->advance_photo = $request->advance_photo;
        $charge->split = $request->split;
        $charge->scan_doc = $request->scan_doc;
        $charge->save();

        return redirect()->back()->with('message', 'Package level charges updated!');
    }

    public function mailerPackage(Request $request)
    {
        $this->validate($request, [
            'package_id' => 'required',
            'condition' => 'required'
        ]);

        $package = Package::find($request->package_id);
        if (!empty($package)) {

            $mailCondition = "";
            $customer = Customer::find($package->customer_id);

            switch ($request->condition) {
                case 'arrived':
                    Mail::to($customer->email)->send(new PackageArrived($customer, $package));
                    $message = 'Package arrival notification send to customer.';
                    $mailCondition = "arrived";
                break;

                case 'action_req':
                    Mail::to($customer->email)->send(new PackageAction());
                    $message = 'Action required mail send to customer.';
                    $mailCondition = "action_req";
                break;
            }

            if( count(Mail::failures()) == 0 ) {
                $packMail = new PackageMail;
                $packMail->package_id = $package->id;
                $packMail->condition = $mailCondition;
                $packMail->save();
            }

            return redirect()->back()->with('message', $message);

        }else{
            return redirect()->route('admin.packages');
        }


    }
}
