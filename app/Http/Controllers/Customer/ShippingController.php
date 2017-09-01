<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


use Auth;
use App\ShippingPreference;
use App\Address;
use App\AccountDocument;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function getPreference()
    {
    	$id = Auth::id();
    	$settings = ShippingPreference::where('customer_id', $id)->first();
    	$docs = AccountDocument::where('customer_id', $id)->get();
    	$address = Address::where('cust_id', $id)->where('default', 'yes')->first();

    	return view('customer.ship-preference')->with(['settings'=>$settings, 'address'=>$address, 'docs'=>$docs]);
    }

    public function updatePreference(Request $request)
    {
    	$this->validate($request, [
    		'email_alt' => 'nullable|email',
    		'box_weight' => 'nullable|numeric'
    	]);

    	$id = Auth::id();
    	ShippingPreference::updateOrCreate(
            ['customer_id' => $id],
            ['email_alt' => $request->email_alt,
            'photo_login' => $request->photo_login,
            'schedule' => $request->schedule,
            'repack' => $request->repack,
            'sticker' => $request->sticker,
            'pack_extra' => $request->pack_extra,
            'orginal_box' => $request->orginal_box,
            'box_weight' => $request->box_weight,
            'tax_id' => $request->tax_id,
            'personal' => $request->personal,
            'include_invoice' => $request->include_invoice
            ]
        );

        $files = $request->file('documents');
        $destinationPath = '/uploads/account-documents/';
    	if($request->hasFile('documents')) {
    		foreach ($files as $file) {

	            $filename = $file->getClientOriginalName();
	            $i = 0;
	            while(file_exists(public_path().$destinationPath.$filename)) {
	            	$filename = "(".++$i.") ".$file->getClientOriginalName();
	            }
	            $file->move(public_path(). $destinationPath, $filename);

	            $document = new AccountDocument;
	            $document->customer_id = $id;
	            $document->document = $filename;
	            $document->save();
	        }
    	}
       
        return redirect(route('customer.ship.prefer'))->with('message', 'Shipping preferences updated.');
    }

    public function deleteAccountDoc(Request $request)
    {
    	$doc = AccountDocument::where('id', $request->id)->first();
    	unlink(public_path('/uploads/account-documents/'.$doc->document));
    	$doc->delete();
    	return redirect()->back()->with('message', 'Shipping Document Removed.');
    }
}
