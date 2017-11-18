<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;


use Auth;
use DateTime;
use App\Customer;
use App\ShippingPreference;
use App\Address;
use App\Package;
use App\PackageCharge;
use App\Country;
use App\AccountDocument;
use App\ShippingRate;
use App\ShopperBalance;
use App\LoyaltyPoint;
use App\LoyaltyHistory;
use App\ShipRequest;
use App\ShipOption;
use App\PromoCode;
use App\ShipTracking;

use App\Mail\ShipmentRequested;
use App\Mail\ShipmentConfirmed;
use App\Mail\ShipmentDispatched;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function getPreference()
    {
    	$id = Auth::id();
    	$settings = ShippingPreference::where('custid', $id)->first();
    	$address = Address::where('cust_id', $id)->where('default', 'yes')->first();

    	return view('customer.ship-preference')->with(['settings'=>$settings, 'address'=>$address]);
    }

    public function updatePreference(Request $request)
    {
    	$id = Auth::id();
        $setting = ShippingPreference::where('custid', $id)->first();
        $setting->std_photo = $request->std_photo;
        $setting->advc_photo = $request->advc_photo;
        $setting->repack = $request->repack;
        $setting->sticker = $request->sticker;
        $setting->pack_extra = $request->pack_extra;
        $setting->orginal_box = $request->orginal_box;
        $setting->tax_id = $request->tax_id;
        $setting->personal = $request->personal;
        $setting->include_invoice = $request->include_invoice;
        $setting->save();
        return redirect(route('customer.ship.prefer'))->with('message', 'Shipping preferences updated.');
    }

    public function accountDocs()
    {
        $id = Auth::id();
        $docs = AccountDocument::where('customer_id', $id)->get();
        return view('customer.docs')->with('docs', $docs);
    }

    public function submitDocs(Request $request)
    {
        $this->validate($request, 
            [
                'documents.*' => 'required|mimes:jpg,jpeg,png,bmp,doc,docx,pdf|max:2000'
            ],
            [
                'documents.*.required' => 'Please upload a document',
                'documents.*.mimes' => 'Only jpg, jpeg, png, bmp, png, doc, docx, pdf files are allowed',
                'documents.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',
            ]
        );

        $id = Auth::id();
        $files = $request->file('documents');
        $destinationPath = "/uploads/documents/$id";
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
        return redirect(route('customer.account.docs'))->with('message', 'Shipping documents added.');
    }

    public function deleteAccountDoc(Request $request)
    {
    	$doc = AccountDocument::where('id', $request->id)->first();
    	unlink(public_path("/uploads/documents/$doc->customer_id/$doc->document"));
    	$doc->delete();
    	return redirect()->back()->with('message', 'Shipping Document Removed.');
    }

    public function ajaxCalculation(Request $request)
    {
        $id = Auth::id();
        $packids = $request->packids;
        $address = Address::where('cust_id', $id)->where('default', 'yes')->first();
        $shipping = $this->getEstimation($packids, $address->countrid);
        return response()->json($shipping);
    }

    public function redirectShipment(Request $request)
    {
        $custid = Auth::id();
        $packids = $request->packids;
        $packages = Package::where('customer_id', $custid)->where('status', 'ship')->whereIn('id', $packids)->get();
        if (!$packages->isEmpty()) {
            foreach ($packages as $pack) {
                $checkLiquid[$pack->id] = ($pack->liquid == "1") ? "1" : "0";
            }

            if (count(array_intersect(array('1', '0'), $checkLiquid)) == 2) {
                return redirect()->back()->with('error', 'Packages containing special items must be chosen and shipped separately');
            }else{
                $liquid = (in_array("1", $checkLiquid)) ? "1" : "0";
            }

            $options = array(
                "repack" => $request->repack,
                "sticker" => $request->sticker,
                "extrapack" => $request->extrapack,
                "original" => $request->original,
                "giftwrap" => $request->giftwrap,
                "giftnote" => $request->giftnote,
                "liquid" => $liquid,
                "invoice_taxid" => $request->invoice_taxid,
                "invoice_personal" => $request->invoice_personal,
                "invoice_include" => $request->invoice_include
            );

            if (isset($request->addressid)) {
                $address = Address::find($request->addressid);
                if (empty($address)) {
                    $address = Address::where('cust_id', $custid)->where('default', 'yes')->first();
                }
            }else{
                $address = Address::where('cust_id', $custid)->where('default', 'yes')->first();
            }

            $request->session()->put(['packids' => $packids, 'options' => $options, 'address' => $address]);
            return redirect()->route('shipping.request.create');
        
        }else{
            return redirect()->route('customer.locker');
        }
    }

    public function createShipment(Request $request)
    {
        $custid = Auth::id();
        if ($request->session()->has('packids') && $request->session()->exists('packids')) {
            $packids = $request->session()->get('packids');
            $options = $request->session()->get('options');
            $address = $request->session()->get('address');

            $packages = Package::where('customer_id', $custid)->where('status', 'ship')->whereIn('id', $packids)->get();

            if (!$packages->isEmpty()) {

                $consolid_amt = 0;
                if(count($packids) > 1){
                    $consolid_amt = count($packids) * 100.00;
                }

                $charges = array('storage' => 0, 'photo' => 0, 'pickup' => 0, 'handling' => 0, 'doc' => 0, 'address' => 0, 'consolid' => $consolid_amt, 'optsamt' => 0);

                $weight = 0;
                foreach ($packages as $pack) {
                    $weight += $pack->weight;
                    $charge = $pack->charges;
                    $charges['storage'] += $charge->storage;
                    $charges['photo'] += $charge->basic_photo + $charge->advnc_photo;
                    $charges['pickup'] += $charge->pickup;
                    $charges['handling'] += $charge->handling;
                    $charges['doc'] += $charge->doc;
                    $charges['address'] = $charge->address;
                }
                
                $extrapack_amt = 0;
                if ($options['extrapack'] == 1) {
                    if ($weight > 0 && $weight <= 5) {
                        $extrapack_amt = 300.00;
                    }
                    if ($weight > 5 && $weight <= 10) {
                        $extrapack_amt = 400.00;
                    }
                    if ($weight > 10 && $weight <= 20) {
                        $extrapack_amt = 500.00;
                    }
                    if ($weight > 20) {
                        $extrapack_amt = 600.00;
                    }
                }

                $repack_amt = ($options['repack'] == 1) ? 100.00 : 0 ;
                $sticker_amt = ($options['sticker'] == 1) ? 100.00 : 0 ;
                $original_amt = 0;
                $giftwrap_amt = ($options['giftwrap'] == 1) ? 100.00 : 0 ;
                $giftnote_amt = ($options['giftnote'] == 1) ? 50.00 : 0 ;

                $charges['optsamt'] = $repack_amt + $sticker_amt + $extrapack_amt + $original_amt + $giftwrap_amt + $giftnote_amt;

                $addresses = Address::where('cust_id', $custid)->get();

                return view('customer.shipping.request')->with([
                    'packages' => $packages, 
                    'address' => $address,
                    'addresses' => $addresses, 
                    'options' => $options, 
                    'charges' => $charges
                ]);

            }else{
                return redirect()->route('customer.locker');
            }
        }else{
            return redirect()->route('customer.locker');
        }
    }

    public function submitShipment(Request $request)
    {
        $custid = Auth::id();
        $this->validate($request, [
            'packids.*' => 'required',
        ]);
        $packids = $request->packids;
        $address = Address::find($request->addressid);
        $shipping = $this->getEstimation($packids, $address->countrid);

        $packages = Package::where('customer_id', $custid)->where('status', 'ship')->whereIn('id', $packids)->get();
        if (!$packages->isEmpty()) {

            $toAddress = "";
            $toAddress .= $address->line1;
            if (!empty($address->line2)) {
                $toAddress .= ", ".$address->line2;
            }
            $toAddress .= ", ".$address->city;
            $toAddress .= ", ".$address->state;
            $toAddress .= ", ".$address->country;
            $toAddress .= " - ".$address->pin;

            $shipment = new ShipRequest;
            $shipment->custid = $custid;
            $shipment->fullname = $address->name;
            $shipment->address = $toAddress;
            $shipment->country = $address->countrid;
            $shipment->phone = "+".$address->code."-".$address->phone;
            $shipment->packids = implode(",", $packids);
            $shipment->count = $shipping['count'];
            $shipment->weight = $shipping['weight'];
            $shipment->value = $shipping['price'];
            $shipment->discount = $shipping['discount'];
            $shipment->packlevel = $shipping['level'];
            $shipment->subtotal = $shipping['subtotal'];
            $shipment->estimated = $shipping['estimated'];
            $shipment->finalamount = 0;

            $shipment->payoption = 'pending';
            $shipment->paystatus = 'pending';
            $shipment->shipstatus = 'inreview';

            do
            {
                $orderid = rand(100, 999)."-".$custid."-".rand(1000, 9999);
                $checkReqst = ShipRequest::where('orderid', $orderid)->get();
            }
            while(!$checkReqst->isEmpty());

            $shipment->orderid = $orderid;
            $shipment->save();


            $shipOption = new ShipOption;
            $shipOption->shipid = $shipment->id;

            $shipOption->repack = $request->repack;
            $shipOption->sticker = $request->sticker;
            $shipOption->extrapack = $request->extrapack;
            $shipOption->original = $request->original;
            $shipOption->giftwrap = $request->giftwrap;
            $shipOption->giftnote = $request->giftnote;
            $shipOption->liquid = $request->liquid;
            
            $shipOption->repack_amt = ($request->repack == 1) ? 100.00 : 0 ;
            $shipOption->sticker_amt = ($request->sticker == 1) ? 100.00 : 0 ;
            $shipOption->original_amt = 0 ;

            if(count($packids) > 1){
                $shipOption->consolid = '1';
                $shipOption->consolid_amt = count($packids) * 100.00;
            }

            $shipOption->giftwrap_amt = ($request->giftwrap == 1) ? 100.00 : 0 ;
            $shipOption->giftnote_amt = ($request->giftnote == 1) ? 50.00 : 0 ;

            if ($request->extrapack == 1) {
                if ($shipping['weight'] > 0 && $shipping['weight'] <= 5) {
                    $shipOption->extrapack_amt = 300.00;
                }
                if ($shipping['weight'] > 5 && $shipping['weight'] <= 10) {
                    $shipOption->extrapack_amt = 400.00;
                }
                if ($shipping['weight'] > 10 && $shipping['weight'] <= 20) {
                    $shipOption->extrapack_amt = 500.00;
                }
                if ($shipping['weight'] > 20) {
                    $shipOption->extrapack_amt = 600.00;
                }
            }

            if ($request->liquid == '1') {
                if ($shipping['weight'] < 5) {
                    $shipOption->liquid_amt = 1000.00;
                }
                if ($shipping['weight'] >= 5 && $shipping['weight'] <= 10) {
                    $shipOption->liquid_amt = 1500.00;
                }
                if ($shipping['weight'] > 10) {
                    $shipOption->liquid_amt = 2500.00;
                }
            }

            $shipOption->profoma_taxid = $request->invoice_taxid;
            $shipOption->profoma_personal = $request->invoice_personal;
            $shipOption->invoice_include = $request->invoice_include;
            $shipOption->save();

            $optsamt = $shipOption->repack_amt + $shipOption->sticker_amt + $shipOption->extrapack_amt + $shipOption->original_amt + $shipOption->giftwrap_amt + $shipOption->giftnote_amt;
            $packlevel = $optsamt;
            $packlevel += $shipOption->liquid_amt;
            
            
            $updateShip = ShipRequest::find($shipment->id);
            $updateShip->packlevel = $packlevel;
            $updateShip->save();

            Package::whereIn('id', $packids)->update(['status' => 'processing']);

            $customer = Customer::find($custid);
            Mail::to($customer->email)->bcc('support@shoppre.com')->send(new ShipmentRequested($packages, $address));

            $request->session()->put(['shipid'=>$shipment->id]);

            return redirect()->route('shipping.request.toreview');

        }else{
            return redirect()->route('customer.locker');
        }
        
    }

    public function responseToReview(Request $request)
    {
        if ($request->session()->has('shipid')) {
            if ($request->session()->exists('shipid')) {
                $shipid = $request->session()->pull('shipid');
                $shipment = ShipRequest::find($shipid);
                if (!empty($shipment)) {
                    $options = ShipOption::where('shipid', $shipment->id)->first();
                    return view('customer.shipping.toreview')->with(['shipment'=>$shipment, 'options' => $options]);
                }else{
                    return redirect()->route('customer.locker');
                }
            }else{
                return redirect()->route('customer.locker');
            }
        }else{
            return redirect()->route('customer.locker');
        }
    }


    public function getEstimation($packids, $countrid)
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        $packages = Package::where('customer_id', $id)->whereIn('id', $packids)->get();

        $country = Country::find($countrid);

        $shipping = array('price' => 0, 'weight'=>0,'subtotal'=>0, 'estimated'=>0, 'level'=>0,'count'=>$packages->count());

        foreach ($packages as $pack) {
            $shipping['price'] += $pack->price;
            $shipping['weight'] += $pack->weight;

            $charge = $pack->charges;
            $packLevel = $charge->storage + $charge->address + $charge->handling + $charge->pickup + $charge->doc + $charge->liquid + $charge->basic_photo + $charge->advnc_photo;
            $shipping['level'] += $packLevel;

            $charge = $this->calcShipping($countrid, $pack->weight, $pack->type);
            if ($charge != false) {
                $shipping['subtotal'] += $charge ;
            }
        }

        $shipping['discount'] = ($country->discount / 100) * $shipping['subtotal'];
        $estimated = $shipping['subtotal'] -  $shipping['discount'];
        $estimated += $shipping['level'];
        $shipping['estimated'] = $estimated;

        return $shipping;
    }

    public function shipQueue()
    {
        $id = Auth::id();
        $shipments = ShipRequest::where('custid', $id)->whereIn('shipstatus', ['inqueue', 'inreview', 'confirmation'])->get();
        return view('customer.shipping.inqueue')->with('shipments', $shipments);
    }

    public function confirmShipment(Request $request)
    {
        $custid = Auth::id();
        $shipment = ShipRequest::where('custid', $custid)->where('orderid', $request->orderid)->where('shipstatus', 'confirmation')->first();

        if ($shipment) {
            $packids = explode(",", $shipment->packids);
            $packages = Package::where('customer_id', $custid)->whereIn('id', $packids)->get();

            $payment = array('tax' => 0, 'coupon' => 0, 'loyalty' => 0, 'amount' => 0);
            $payment['amount'] = $shipment->estimated;

            if ($request->insurance == '1') {
                $payment['amount'] += 30.00;
            }

            if (isset($request->promocode) && !empty($request->promocode)) {
                $promo = PromoCode::where('code', $request->promocode)->whereDate('validity', '>=', date('Y-m-d'))->first();
                if (!empty($promo)) {
                    if (!empty($promo->cashback)) {
                        $payment['coupon'] = $promo->cashback;
                    }elseif (!empty($promo->discount)) {
                        $payment['coupon'] = ($promo->discount / 100) * $shipment->estimated;
                    }
                    $payment['amount'] -= $payment['coupon'];
                }else{
                    return redirect()->back()->with('promoerror', 'Invalid or Expired Promo Code Entered!');
                }
            }

            $points = LoyaltyPoint::where('custid', $custid)->pluck('points')->first();
            $rewards = 0;
            while ( $points  >= 1000 ) {
                $rewards += 100;
                $points -= 1000;
            }

            $payment['loyalty'] = $rewards;
            $payment['amount'] -=  $payment['loyalty'];

            return view('customer.shipping.confirmation')->with([
                'shipment'=>$shipment,
                'packages'=>$packages, 
                'payment' => $payment
            ]);

        }else{
            return redirect()->route('customer.locker');
        }
    }

    public function finalShipRequest(Request $request)
    {
        $custid = Auth::id();
        $shipid = $request->shipid;
        $shipment = ShipRequest::find($shipid);

        if (!empty($shipment) && $shipment->custid == $custid) {

            $payment = array('tax' => 0, 'loyalty' => 0, 'finalamount' => $shipment->estimated);

            $points = LoyaltyPoint::where('custid', $custid)->pluck('points')->first();
            while ( $points  >= 1000 ) {
                $payment['loyalty'] += 100;
                $points -= 1000;
            }
            $payment['finalamount'] -=  $payment['loyalty'];

            if($request->insurance == 1){
                $payment['finalamount'] += 30.00;

                ShipOption::where('shipid', $shipid)->update(['insurance' => '1', 'insurance_amt' => '30.00']);
            }

            switch ($request->payoption) {
                case 'wire':
                        $payoption = 'wire';
                        $paystatus = 'pending';
                    break;
                
                default:
                        $payoption = '';
                        $paystatus = "unauthorized";
                    break;
            }
            
            $shipment->coupon = 0;
            $shipment->loyalty = $payment['loyalty'];
            $shipment->finalamount = $payment['finalamount'];
            $shipment->payoption = $payoption;
            $shipment->paystatus = $paystatus;
            $shipment->shipstatus = 'inqueue';
            $shipment->save();

            if ($payment['loyalty'] >= 100) {
                $hispoints = $payment['loyalty'] * 10;
                $history = new LoyaltyHistory;
                $history->custid = $custid;
                $history->points = $hispoints;
                $history->redeemed = date('Y-m-d', time());
                $history->save();

                $loyalty = LoyaltyPoint::where('custid', $custid)->first();
                $balance = $loyalty->points - $hispoints;
                LoyaltyPoint::where('custid', $custid)->update(['points' => $balance]);
            }

            $request->session()->put(['shipid' => $shipment->id]);

            $customer = Customer::find($custid);
            Mail::to($customer->email)->bcc('support@shoppre.com')->send(new ShipmentConfirmed());

            return redirect()->route('shipping.request.response');
        }
    }

    public function responseShipment(Request $request)
    {
        if ($request->session()->has('shipid') && $request->session()->exists('shipid')) {
            $shipid = $request->session()->pull('shipid');
            $custid = Auth::id();
            $shipment = ShipRequest::find($shipid);
            if (!empty($shipment) && $shipment->custid == $custid) {
                $options = ShipOption::where('shipid', $shipment->id)->first();
                return view('customer.shipping.response')->with(['shipment'=>$shipment, 'options' => $options]);
            }else{
                return redirect()->route('customer.locker');
            }
        }else{
            return redirect()->route('customer.locker');
        }
    }

    public function shipHistory()
    {
        $id = Auth::id();
        $shipments = ShipRequest::where('custid', $id)->whereIn('shipstatus', ['dispatched', 'delivered', 'canceled'])->orderBy('updated_at', 'desc')->get();
        foreach ($shipments as $shipment) {
            if (empty($shipment->tracking)) {
                $tracking = new ShipTracking;
                $tracking->shipid = $shipment->id;
                $tracking->shipdate = date('Y-m-d');
                $tracking->box_nos = $shipment->count;
                $tracking->packweight = $shipment->weight;
                $tracking->packvalue = $shipment->value;
                $tracking->save();
            }
        }
        return view('customer.shipping.history')->with('shipments', $shipments);
    }

    public function shipmentInvoice(Request $request)
    {
        $custid = Auth::id();
        $orderid = $request->orderid;
        $customer = Customer::find($custid);
        $shipment = ShipRequest::where('custid', $custid)->where('orderid', $orderid)->first();
        if (!empty($shipment)) {
            $packids = explode(",", $shipment->packids);
            $packages = Package::where('customer_id', $custid)->whereIn('id', $packids)->get();
            return view('customer.shipping.invoice')->with(['shipment'=>$shipment, 'packages' => $packages]);
        }else{
            return redirect(route('customer.shipping.history'));
        }
    }

    public function cancelRequest(Request $request)
    {
        $custid = Auth::id();
        $shipment = ShipRequest::where('custid', $custid)->whereIn('shipstatus', ['inreview', 'inqueue'])->where('orderid', $request->orderid)->first();
        if (!empty($shipment)) {
            $diff = date_diff(new DateTime(date('Y-m-d H:i:s')), new DateTime($shipment->created_at));
            $hours = ($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h + $diff->i/60;
            if(ceil($hours) <= 1){
                ShipRequest::where('id', $shipment->id)->update(['shipstatus' => 'canceled']);
                $packids = explode(",", $shipment->packids);
                Package::whereIn('id', $packids)->update(['status' => 'ship']);
                return redirect()->route('customer.locker')->with('error', 'Ship request has been canceled!');
            }else{
                return redirect()->route('customer.locker');
            }
        }else{
            return redirect()->route('customer.locker');
        }
    }

    public function calcShipping($countrid, $weight, $type)
    {
        $weight = $weight;
        $type = $weight <= 2 ? $type : 'nondoc';

        if ($weight <= 300) {
            $rate = ShippingRate::where('country_id', $countrid)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '>=', $weight)
                                ->first();
        }else{
            $rate = ShippingRate::where('country_id', $countrid)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '=', 0)
                                ->first();
        }

        if ($rate) {
            $amount = ($rate->rate_type == "fixed") ? $rate->amount : $rate->amount * $weight;
            return $amount;
        }else{
            return false;
        }
    }

    public function getFinalPayment($shipping)
    {
        $custid = Auth::id();
        $payment = array('tax' => 0, 'loyalty' => 0, 'amount' => 0);
        $payment['tax'] = (18 / 100) * $shipping['estimated'];

        $payment['amount'] = $shipping['estimated'] + $payment['tax'];


        $loyalty = LoyaltyPoint::where('custid', $custid)->first();
        $points = $loyalty->points;
        $rewards = 0;
        while ( $points  >= 1000 ) {
            $rewards += 100;
            $points -= 1000;
        }

        $payment['loyalty'] = $rewards;
        $payment['amount'] -=  $payment['loyalty'];

        return $payment;
    }
}
