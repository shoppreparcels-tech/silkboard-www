<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Conn\FStorage;
use App\ItemCategory;
use App\SchedulePickup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Auth;


use App\Package;
use App\Customer;
use App\PackageItem;
use App\PackageInvoice;
use App\PackagePhoto;
use App\PhotoRequest;
use App\PackageCharge;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\PackageMail;
use App\ScanDocument;
use App\ScanRequest;
use App\ShopperBalance;
use App\WalletTransaction;

use App\Mail\Myaccount\PackageArrived;
use App\Mail\Myaccount\PackageAction;
use App\Mail\Myaccount\PackageSplitDone;
use App\Mail\Myaccount\PackageReturnDone;

class PackageItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create(Request $req)
    {
        $this->validate($req, [
            'item' => 'required',
            'item_category_id' => 'required',
            'quantity' => 'required',
        ]);

        $item = new PackageItem;

        $item->package_id = $req->package_id;
        $item->item = $req->item;
        $item->item_category_id = $req->item_category_id;
        $item->quantity = $req->quantity;
        $item->price = $req->price;
        $item->total = $req->price * $req->quantity;

        if (!empty($item->price)) {
            $item->confirm_by = 'shoppre';
        }

        try {
            $item->save();
        } catch(\Exception $e) {
            echo $e->getMessage(); exit;
        }

        if(isset($req->image)) {
            $image = FStorage::upload('package-items', $item->id, $req->image);
            $item->file_name = $image['file_name'];
            $item->save();
        }


        return redirect()->back()->with('message', 'Success! New item added to package.');
    }

}
