<?php

namespace App\Http\Controllers\Myaccount\Customer;

use App\Mail\Myaccount\PaymentOptionCash;
use App\PromoCodeApplied;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
use App\AdminNotification;
use App\WalletTransaction;

use App\Mail\Myaccount\PaymentOptionWire;
use App\Mail\Myaccount\ShipmentRequested;
use App\Mail\Myaccount\ShipmentConfirmed;
use App\Mail\Myaccount\ShipmentCancelled;

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
        $address = Address::where('customer_id', $id)->where('is_default')->first();
        return view('myaccount.customer.ship-preference')->with(['settings' => $settings, 'address' => $address]);
    }

    public function updatePreference(Request $request)
    {
        $id = Auth::id();
        $setting = ShippingPreference::where('customer_id', $id)->first();
        $setting->standard_photo = $request->standard_photo;
        $setting->advance_photo = $request->advance_photo;
        $setting->scan_doc = $request->scan_doc;
        $setting->repack = $request->repack;
        $setting->sticker = $request->sticker;
        $setting->pack_extra = $request->pack_extra;
        $setting->orginal_box = $request->orginal_box;
        $setting->max_weight = $request->max_weight;
        $setting->gift_wrap = $request->gift_wrap;
        $setting->gift_note = $request->gift_note;
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
        return view('myaccount.customer.docs')->with('docs', $docs);
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
        $destinationPath = public_path() . "/uploads/documents/$id";
        if ($request->hasFile('documents')) {
            foreach ($files as $file) {

                $filename = $file->getClientOriginalName();
                $i = 0;
                while (file_exists($destinationPath . $filename)) {
                    $filename = "(" . ++$i . ") " . $file->getClientOriginalName();
                }
                $file->move($destinationPath, $filename);

                $document = new AccountDocument;
                $document->customer_id = $id;
                $document->document_name = $filename;
                $document->save();
            }
        }

        $notify = new AdminNotification;
        $notify->customer_id = $id;
        $notify->action_type = 'customer';
        $notify->action_id = $id;
        $notify->action_description = 'Account documents uploaded';
        $notify->save();

        return redirect(route('customer.account.docs'))->with('message', 'Shipping documents added.');
    }

    public function deleteAccountDoc(Request $request)
    {
        $doc = AccountDocument::where('id', $request->id)->first();
        unlink(public_path("/uploads/documents/$doc->customer_id/$doc->document_name"));
        $doc->delete();
        return redirect()->back()->with('message', 'Shipping Document Removed.');
    }

    public function ajaxCalculation(Request $request)
    {
        $id = Auth::id();
        $package_ids = $request->package_ids;
        $address = Address::where('customer_id', $id)->where('is_default')->first();
        $shipping = $this->getEstimation($package_ids, $address->country_id);
        return response()->json($shipping);
    }

    public function redirectShipment(Request $request)
    {
        $customer_id = Auth::id();
        $package_ids = $request->package_ids;
        $packages = Package::where('customer_id', $customer_id)->where('status', 'ship')->whereIn('id', $package_ids)->get();
        if (!$packages->isEmpty()) {

            foreach ($packages as $pack) {

                $checkLiquid[$pack->id] = ($pack->liquid == "1") ? "1" : "0";

                if (strtotime(date('Y-m-d')) > strtotime($pack->received . ' + 20 days')) {
                    $datetime1 = new DateTime(date('Y-m-d'));
                    $datetime2 = new DateTime($pack->received);
                    $interval = $datetime1->diff($datetime2);
                    $days = $interval->format('%a');
                    $storage_charge = ($days - 20) * 100;
                    PackageCharge::where('id', $pack->id)->update(['storage' => $storage_charge]);
                }
            }

            if (count(array_intersect(array('1', '0'), $checkLiquid)) == 2) {
                return redirect()->back()->with('error', 'Packages containing special items must be chosen and shipped separately');
            } else {
                $liquid = (in_array("1", $checkLiquid)) ? "1" : "0";
            }

            $options = array(
                "repack" => $request->repack,
                "sticker" => $request->sticker,
                "extrapack" => $request->extrapack,
                "original" => $request->original,
                "gift_wrap" => $request->gift_wrap,
                "gift_note" => $request->gift_note,
                "giftnote_txt" => $request->giftnote_txt,
                "liquid" => $liquid,
                "max_weight" => $request->max_weight,
                "invoice_taxid" => $request->invoice_taxid,
                "invoice_personal" => $request->invoice_personal,
                "invoice_include" => $request->invoice_include
            );

            if (isset($request->address_id)) {
                $address = Address::find($request->address_id);
                if (empty($address)) {
                    $address = Address::where('customer_id', $customer_id)
                        ->where('is_default', '=', 1)
                        ->first();
                    if (empty($address)) {
                        return redirect()->route('customer.address')->with('error', 'Ship request required address to proceed!');
                    }
                }
            } else {
                $address = Address::where('customer_id', $customer_id)
                    ->where('is_default', '=', 1)
                    ->first();
                if (empty($address)) {
                    return redirect()->route('customer.address')->with('error', 'Ship request required address to proceed!');
                }
            }

            $request->session()->put(['package_ids' => $package_ids, 'options' => $options, 'address' => $address]);
            return redirect()->route('shipping.request.create');

        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function createShipment(Request $request)
    {
        $customer_id = Auth::id();

        if ($request->session()->has('package_ids') && $request->session()->exists('package_ids')) {
            $package_ids = $request->session()->get('package_ids');
            $options = $request->session()->get('options');

            $packages = Package::where('customer_id', $customer_id)->where('status', 'ship')->whereIn('id', $package_ids)->get();

            if (!$packages->isEmpty()) {

                $consolid_amt = 0;
                if (count($package_ids) > 1) {
                    $consolid_amt = (count($package_ids) - 1) * 100.00;
                }

                $charges = array(
                    'storage' => 0,
                    'photo' => 0,
                    'pickup' => 0,
                    'handling' => 0,
                    'doc' => 0,
                    'split' => 0,
                    'address' => 0,
                    'consolid' => $consolid_amt,
                    'optsamt' => 0,
                    'scan_doc' => 0
                );

                $weight = 0;
                foreach ($packages as $pack) {
                    $weight += $pack->weight;
                    $charge = $pack->charges;

                    $charges['storage'] += $charge->storage;
                    $charges['photo'] += $charge->basic_photo + $charge->advance_photo;
                    $charges['pickup'] += $charge->pickup;
                    $charges['handling'] += $charge->handling;
                    $charges['doc'] += $charge->doc;
                    $charges['split'] += $charge->split;
                    $charges['address'] += $charge->address;
                    $charges['scan_doc'] += $charge->scan_doc;
                }

                $extrapack_amt = 0;
                if ($options['extrapack'] == 1) {
                    $extrapack_amt = 500.00;
                }

                $repack_amt = ($options['repack'] == 1) ? 100.00 : 0;
                $sticker_amt = ($options['sticker'] == 1) ? 0.00 : 0;
                $original_amt = 0;
                $giftwrap_amt = ($options['gift_wrap'] == 1) ? 100.00 : 0;
                $giftnote_amt = ($options['gift_note'] == 1) ? 50.00 : 0;

                $charges['optsamt'] = $repack_amt + $sticker_amt + $extrapack_amt + $original_amt + $giftwrap_amt + $giftnote_amt;

                $addresses = Address::fetch($customer_id);

                $customer = Customer::find($customer_id);
                $countries = Country::orderBy('name', 'desc')->get();

                return view('myaccount.customer.shipping.request')->with([
                    'packages' => $packages,
                    'addresses' => $addresses,
                    'options' => $options,
                    'charges' => $charges,
                    'customer' => $customer,
                    'countries' => $countries
                ]);

            } else {
                return redirect()->route('customer.locker');
            }
        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function submitShipment(Request $request)
    {
        $customer_id = Auth::id();
        $this->validate($request, [
            'package_ids.*' => 'required',
        ]);
        $package_ids = $request->package_ids;
        $address = Address::find($request->address_id);
        $shipping = $this->getEstimation($package_ids, $address->country_id);

        $packages = Package::where('customer_id', $customer_id)->where('status', 'ship')->whereIn('id', $package_ids)->get();
        if (!$packages->isEmpty()) {

            $toAddress = $address->line1;
            if (!empty($address->line2)) {
                $toAddress .= ", " . $address->line2;
            }
            $toAddress .= ", " . $address->city;
            $toAddress .= ", " . $address->state;
            $toAddress .= ", " . $address->country;
            $toAddress .= " - " . $address->pincode;

            $shipment = new ShipRequest;
            $shipment->customer_id = $customer_id;
            $shipment->full_name = $address->first_name;
            $shipment->address = $toAddress;
            $shipment->country = $address->country_id;
            $shipment->phone = "+" . $address->country_code . "-" . $address->phone;
            $shipment->package_ids = implode(",", $package_ids);
            $shipment->count = $shipping['count'];
            $shipment->weight = $shipping['weight'];
            $shipment->value = $shipping['price'];
            $shipment->discount = $shipping['discount'];
            $shipment->package_level_charges = $shipping['level'];
            $shipment->sub_total = $shipping['sub_total'];
            $shipment->estimated = $shipping['estimated'];
            $shipment->final_amount = 0;

            $shipment->payment_gateway_name = 'pending';
            $shipment->payment_status = 'pending';
            $shipment->shipping_status = 'inreview';
            do {
                $orderid = rand(100, 999) . "-" . $customer_id . "-" . rand(1000, 9999);
                $checkReqst = ShipRequest::where('order_id', $orderid)->get();
            } while (!$checkReqst->isEmpty());

            $shipment->order_id = $orderid;
            $shipment->save();

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'shipment';
            $notify->action_id = $shipment->id;
            $notify->action_description = 'New shipment request created - Order# ' . $shipment->order_id;
            $notify->save();


            $shipOption = new ShipOption;
            $shipOption->ship_request_id = $shipment->id;

            $shipOption->repack = $request->repack;
            $shipOption->sticker = $request->sticker;
            $shipOption->extrapack = $request->extrapack;
            $shipOption->original = $request->original;
            $shipOption->gift_wrap = $request->gift_wrap;
            $shipOption->gift_note = $request->gift_note;
            $shipOption->giftnote_txt = $request->giftnote_txt;
            $shipOption->liquid = $request->liquid;
            $shipOption->max_weight = $request->max_weight;

            $shipOption->repack_amt = ($request->repack == 1) ? 100.00 : 0;
            $shipOption->sticker_amt = ($request->sticker == 1) ? 0 : 0;
            $shipOption->original_amt = 0;

            if (count($package_ids) > 1) {
                $shipOption->consolid = '1';
                $shipOption->consolid_amt = (count($package_ids) - 1) * 100.00;
            }

            $shipOption->giftwrap_amt = ($request->gift_wrap == 1) ? 100.00 : 0;
            $shipOption->giftnote_amt = ($request->gift_note == 1) ? 50.00 : 0;

            $shipOption->extrapack_amt = ($request->extrapack == 1) ? 500.00 : 0;

            if ($request->liquid == '1') {
                if ($request->weight < 5) {
                    $shipOption->liquid_amt = 1392.40;
                }
                if ($request->weight >= 5 && $request->weight < 10) {
                    $shipOption->liquid_amt = 3009.00;
                }
                if ($request->weight >= 10 && $request->weight < 15) {
                    $shipOption->liquid_amt = 5369.00;
                }
                if ($request->weight >= 15) {
                    $shipOption->liquid_amt = 7729.00;
                }
            }
            $shipOption->profoma_taxid = $request->invoice_taxid;
            $shipOption->profoma_personal = $request->invoice_personal;
            $shipOption->invoice_include = $request->invoice_include;
            $shipOption->save();

            $package_level_charges = $shipment->package_level_charges;
            $package_level_charges += $shipOption->repack_amt + $shipOption->sticker_amt + $shipOption->extrapack_amt + $shipOption->original_amt + $shipOption->giftwrap_amt + $shipOption->giftnote_amt + $shipOption->consolid_amt;

            $package_level_charges += $shipOption->liquid_amt;

            $updateShip = ShipRequest::find($shipment->id);

            $estimated = $updateShip->estimated;
            $estimated -= $shipment->package_level_charges;
            $estimated += $package_level_charges;

            $updateShip->package_level_charges = $package_level_charges;
            $updateShip->estimated = $estimated;
            $updateShip->save();

            Package::whereIn('id', $package_ids)->update(['status' => 'processing']);

            $customer = Customer::find($customer_id);
            Mail::to($customer->email)->bcc('support@shoppre.com')->send(new ShipmentRequested($packages, $address, $updateShip));

            $request->session()->put(['ship_request_id' => $shipment->id]);

            return redirect()->route('shipping.request.toreview');

        } else {
            return redirect()->route('customer.locker');
        }

    }

    public function responseToReview(Request $request)
    {
        if ($request->session()->has('ship_request_id')) {
            if ($request->session()->exists('ship_request_id')) {
                $ship_request_id = $request->session()->pull('ship_request_id');
                $shipment = ShipRequest::find($ship_request_id);
                if (!empty($shipment)) {
                    $options = ShipOption::where('ship_request_id', $shipment->id)->first();
                    return view('myaccount.customer.shipping.toreview')->with(['shipment' => $shipment, 'options' => $options]);
                } else {
                    return redirect()->route('customer.locker');
                }
            } else {
                return redirect()->route('customer.locker');
            }
        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function getEstimation($package_ids, $country_id)
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        $packages = Package::where('customer_id', $id)->whereIn('id', $package_ids)->get();

        $country = Country::find($country_id);

        $shipping = array('price' => 0, 'weight' => 0, 'sub_total' => 0, 'estimated' => 0, 'level' => 0, 'count' => $packages->count());

        foreach ($packages as $pack) {
            $shipping['price'] += $pack->price;
            $shipping['weight'] += $pack->weight;

            $charge = $pack->charges;
            $package_level_charges = $charge->storage + $charge->address + $charge->handling + $charge->pickup + $charge->doc + $charge->liquid + $charge->basic_photo + $charge->advance_photo + $charge->split + $charge->scan_doc;
            $shipping['level'] += $package_level_charges;

            $charge = $this->calcShipping($country_id, $pack->weight, $pack->type);
            if ($charge != false) {
                $shipping['sub_total'] += $charge;
            }
        }

        $shipping['discount'] = ($country->discount / 100) * $shipping['sub_total'];
        $estimated = $shipping['sub_total'] - $shipping['discount'];
        $estimated += $shipping['level'];
        $shipping['estimated'] = $estimated;

        return $shipping;
    }

    public function shipQueue()
    {
        $id = Auth::id();
        $shipments = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['inqueue', 'inreview', 'received', 'confirmation'])->orderBy('created_at', 'desc')->get();
        return view('myaccount.customer.shipping.inqueue')->with('shipments', $shipments);
    }

    public function confirmShipment(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $shipment = ShipRequest::where('customer_id', $customer_id)
                    ->where('order_id', $request->order_id)
                    ->where('shipping_status', 'confirmation')
                    ->first();

        if ($shipment) {
            $package_ids = explode(",", $shipment->package_ids);
            $packages = Package::where('customer_id', $customer_id)->whereIn('id', $package_ids)->get();

            $payment = array('wallet' => 0,
                'coupon' => 0,
                'loyalty' => 0,
                'amount' => 0,
                'payment_gateway_name' => 'wire',
                'payment_gateway_fee' => 0
            );
            $payment['amount'] = $shipment->estimated;
            if ($request->wallet == 1 || $customer->balance->amount < 0) {
                $payment['wallet'] = $customer->balance->amount;
                $payment['amount'] -= $payment['wallet'];
            }

//            $payment['amount'] += 30.00;
//            if ($request->insurance == '2') {
//                $payment['amount'] -= 30.00;
//            }

            $coupon_applied_status = PromoCodeApplied::where('shipment_id', $request->order_id)->first();

            $promo_status = '';
            $coupon_amount = 0;
            $coupon_name = '';

            if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                    ->whereDate('validity', '>=', date('Y-m-d'))->first();
                if (!empty($promo)) {
                    if (!empty($promo->cashback)) {
                        $promo_status = "cashback_success";
                        $estimated = $shipment->estimated - $shipment->package_level_charges - $payment['wallet'];
                        $total_coupon_amount = $estimated * ($promo->cashback / 100);
                        $max_coupon_amount = $promo->max_cash_amount;
                        if ($total_coupon_amount <= $max_coupon_amount) {
                            $coupon_amount = $total_coupon_amount;
                        } else {
                            $coupon_amount = $max_coupon_amount;
                        }
                        $coupon_name = $coupon_applied_status->coupon_code;
                    } elseif (!empty($promo->discount)) {
                        $estimated = $shipment->estimated - $shipment->package_level_charges - $payment['wallet'];
                        $discount_amount = $estimated * ($promo->discount / 100);
                        $max_coupon_amount = $promo->max_cash_amount;
                        if ($discount_amount <= $max_coupon_amount) {
                            $payment['coupon'] = $discount_amount;
                        } else {
                            $payment['coupon'] = $max_coupon_amount;
                        }

                        $coupon_name = $coupon_applied_status->coupon_code;
                        $promo_status = "discount_success";
                    }
                    $payment['amount'] -= $payment['coupon'];
                } else {

                    $promo_status = "promo_expired";
                }
            }

            $points = LoyaltyPoint::where('customer_id', $customer_id)->pluck('points')->first();
            $rewards = 0;
            while ($points >= 1000) {
                $rewards += 100;
                $points -= 1000;
            }

            $payment['loyalty'] = $rewards;
            $payment['amount'] -= $payment['loyalty'];

            switch ($request->payment_gateway_name) {
                case 'card':
                    $payment['payment_gateway_name'] = 'card';
                    break;
                case 'wire':
                    $payment['payment_gateway_name'] = 'wire';
                    break;
                case 'cash':
                    $payment['payment_gateway_name'] = 'cash';
                    break;
                case 'wallet':
                    $payment['payment_gateway_name'] = 'wallet';
                    break;
                case 'paypal':
                    $payment['payment_gateway_name'] = 'paypal';
                    $payment['payment_gateway_fee'] = (10 / 100) * $payment['amount'];
                    $payment['amount'] += $payment['payment_gateway_fee'];
                    break;
                case 'paytm':
                    $payment['payment_gateway_name'] = 'paytm';
                    $payment['payment_gateway_fee'] = (3 / 100) * $payment['amount'];
                    $payment['amount'] += $payment['payment_gateway_fee'];
                    break;
                default:
                    $payment['payment_gateway_name'] = '';
                    break;
            }

            return view('myaccount.customer.shipping.confirmation')->with([
                'shipment' => $shipment,
                'packages' => $packages,
                'payment' => $payment,
                'promo_status' => $promo_status,
                'cpn_amount' => $coupon_amount,
                'cpn_name' => $coupon_name,
                'wallet_amount' => $customer->balance->amount
            ]);

        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function finalShipRequest(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $ship_request_id = $request->ship_request_id;
        $shipment = ShipRequest::find($ship_request_id);

        if (!empty($shipment) && $shipment->customer_id == $customer_id) {

            $payment = array('coupon' => 0, 'loyalty' => 0, 'final_amount' => $shipment->estimated);

            $points = LoyaltyPoint::where('customer_id', $customer_id)->pluck('points')->first();
            while ($points >= 1000) {
                $payment['loyalty'] += 100;
                $points -= 1000;
            }

            $payment['final_amount'] -= $payment['loyalty'];

            $payment['wallet'] = 0;
            $is_wallet_used = $request->wallet;
            $request->session()->put(['is_retry_payment' => 0]);
            if ($is_wallet_used == 1) {
                $payment['wallet'] = $customer->balance->amount;
                $payment['final_amount'] -= $payment['wallet'];
                $request->session()->put(['is_wallet_used' => 1]);
            } else {
                $request->session()->put(['is_wallet_used' => 0]);
            }

//            $payment['final_amount'] += 30.00;
//            if ($request->insurance == '2') {
//                $payment['final_amount'] -= 30.00;
//            }else{
//                ShipOption::where('ship_request_id', $ship_request_id)->update(['insurance' => '1', 'insurance_amt' => '30.00']);
//            }

            $coupon_applied_status = PromoCodeApplied::where('shipment_id', $shipment->order_id)->first();
            $promo_status = '';
            $coupon_amount = 0;
            $coupon_name = '';

            if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                    ->whereDate('validity', '>=', date('Y-m-d'))->first();

                if (!empty($promo)) {
                    if (!empty($promo->cashback)) {
                        $promo_status = "cashback_success";
                        $estimated = $shipment->estimated - $shipment->package_level_charges - $payment['wallet'];
                        $total_coupon_amount = $estimated * ($promo->cashback / 100);
                        $max_coupon_amount = $promo->max_cash_amount;
                        if ($total_coupon_amount <= $max_coupon_amount) {
                            $coupon_amount = $total_coupon_amount;
                        } else {
                            $coupon_amount = $max_coupon_amount;
                        }
                        $payment['coupon'] = $coupon_amount;
                        $coupon_name = $coupon_applied_status->coupon_code;
                    } elseif (!empty($promo->discount)) {
                        $estimated = $shipment->estimated - $shipment->package_level_charges - $payment['wallet'];
                        $payment['coupon'] = $estimated * ($promo->discount / 100);
                        $coupon_name = $coupon_applied_status->coupon_code;
                        $promo_status = "discount_success";
                        $max_coupon_amount = $promo->max_cash_amount;
                        if ($payment['coupon'] <= $max_coupon_amount) {
                            $payment['coupon'] = $payment['coupon'];
                        } else {
                            $payment['coupon'] = $max_coupon_amount;
                        }
                        $payment['final_amount'] -= $payment['coupon'];
                    }
                }
            }

//            $wallet = $customer->balance->amount;
//            $walletBalance = 0;


//            if ($payment['final_amount'] < 0) {
//                $payment['final_amount'] = 0;
//                $walletBalance = abs($payment['final_amount']);
//            }

            $payment_gateway_name = '';
            $payment_gateway_fee = 0;

            switch ($request->payment_gateway_name) {
                case 'card':
                    $payment_gateway_name = 'card';
                    break;
                case 'wire':
                    $payment_gateway_name = 'wire';
                    $this->updatePromoStatus($shipment);
                    Mail::to($customer->email)->send(new PaymentOptionWire($shipment));
                    break;
                case 'cash':
                    $payment_gateway_name = 'cash';
                    $this->updatePromoStatus($shipment);
                    Mail::to($customer->email)->send(new PaymentOptionCash($shipment));
                    break;
                case 'paypal':
                    $payment_gateway_name = 'paypal';
                    break;
                case 'paytm':
                    $payment_gateway_name = 'paytm';
                    break;
                case 'wallet':
                    $payment_gateway_name = 'wallet';
                    break;
            }

            $shipment->coupon = $payment['coupon'];
            $shipment->wallet = $payment['wallet'];
            $shipment->loyalty = $payment['loyalty'];
            $shipment->payment_gateway_fee = $payment_gateway_fee;
            $shipment->final_amount = $payment['final_amount'];

            if ($payment_gateway_name == 'wire') {
                $shipment->payment_gateway_name = 'wire';
                $shipment->shipping_status = 'inqueue';
                $shipment->payment_status = 'pending';
                if ($is_wallet_used == 1) {
                    ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                    $this->walletTransection($shipment->wallet,$customer,$shipment);
                }
            } else if ($payment_gateway_name == 'cash') {
                $shipment->payment_gateway_name = 'cash';
                $shipment->shipping_status = 'inqueue';
                $shipment->payment_status = 'pending';
                if ($is_wallet_used == 1) {
                    ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                    $this->walletTransection($shipment->wallet,$customer,$shipment);
                }
            } else if($payment_gateway_name == 'wallet')
            {
                $shipment->payment_gateway_name = 'wallet';
                $shipment->shipping_status = 'inqueue';
                $shipment->payment_status = 'success';
                $customer_total_wallet_amount = $customer->balance->amount;
                $remaining_wallet_amount = $customer_total_wallet_amount - $payment['final_amount'];
                ShopperBalance::where('customer_id', $customer_id)
                    ->update(['amount' => $remaining_wallet_amount]);
                $this->updateCustomerWallet($shipment);
                $this->walletTransection($payment['final_amount'],$customer,$shipment);
            } else {
                $shipment->payment_status = 'pending';
                $shipment->shipping_status = 'confirmation';
            }
            $shipment->save();
                // - commented and added in payment response API.
//            if ($shipment->wallet != 0){
//               $this->walletTransection($shipment->wallet,$customer,$shipment);
//            }

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'shipment';
            $notify->action_id = $shipment->id;
            $notify->action_description = 'Customer submitted payment - Order# ' . $shipment->order_id;
            $notify->save();

//            ShopperBalance::where('customer_id', $customer_id)->update(['amount' => $walletBalance]);
            LoyaltyPoint::where('customer_id', $customer_id)->update(['ship_request_id' => $shipment->id]);
            if ($payment['loyalty'] >= 100) {
                $hispoints = $payment['loyalty'] * 10;
                $history = new LoyaltyHistory;
                $history->customer_id = $customer_id;
                $history->points = $hispoints;
                $history->redeemed = date('Y-m-d', time());
                $history->save();

                $loyalty = LoyaltyPoint::where('customer_id', $customer_id)->first();
                $balance = $loyalty->points - $hispoints;
                LoyaltyPoint::where('customer_id', $customer_id)
                    ->update([
                        'points' => $balance,
                    ]);
            }

            $request->session()->put(['ship_request_id' => $shipment->id]);

            $customer = Customer::find($customer_id);
            $finalShipment = ShipRequest::find($ship_request_id);

            Mail::to($customer->email)->bcc('support@shoppre.com')->send(new ShipmentConfirmed($finalShipment));

            switch ($payment_gateway_name) {
                case 'card':
                    return redirect()->route('payment.axis.start');
                    break;
                case 'paypal':
                    return redirect()->route('payment.paypal.start');
                    break;
                case 'paytm':
                    return redirect()->route('payment.paytm.start');
                    break;
            }
            return redirect()->route('shipping.request.response');
        }
    }

    public function walletTransection($wallet_amount,$customer,$shipment)
    {
        $trans = new WalletTransaction;
        $trans->customer_id = $customer->id;
        $trans->wallet_id = $customer->balance->id;
        $trans->amount = $wallet_amount;
        $trans->description = 'Wallet balance offsetted against shipment cost | Shipment ID ' . $shipment->order_id;
        $trans->save();
    }

    public function updatePromoStatus($shipment)
    {
        $coupon_applied_status = PromoCodeApplied::where('shipment_id', $shipment->order_id)->first();
        $promo_status = '';

        if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
            $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                ->whereDate('validity', '>=', date('Y-m-d'))->first();
            if (isset($promo) && !empty($promo)) {
                PromoCodeApplied::where('shipment_id', $shipment->order_id)->update(['status' => 'success']);
            }
        }
    }

    public function updateCustomerWallet($shipment)
    {
        $coupon_applied_status = PromoCodeApplied::where('shipment_id', $shipment->order_id)->first();

        if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
            $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                ->whereDate('validity', '>=', date('Y-m-d'))->first();

            if (!empty($promo)) {
                if (isset($promo->cashback) && !empty($promo->cashback)) {
                    $customer_id = Auth::id();
                    $customer = Customer::find($customer_id);
                    $total_wallet_amount = $customer->balance->amount + ($shipment->estimated * ($promo->cashback / 100));
                    $shoppre_balance = ShopperBalance::find($customer->balance->id);
                    $shoppre_balance->amount = $total_wallet_amount;
                    $shoppre_balance->save();
                    PromoCodeApplied::where('shipment_id', $shipment->order_id)->update(['status' => 'success']);
                } elseif (isset($promo->discount) && !empty($promo->discount)) {
                    PromoCodeApplied::where('shipment_id', $shipment->order_id)->update(['status' => 'success']);
                }
            }
        }
    }

    public function responseShipment(Request $request)
    {
        if ($request->session()->has('ship_request_id') && $request->session()->exists('ship_request_id')) {
            $ship_request_id = $request->session()->pull('ship_request_id');
            $customer_id = Auth::id();
            $shipment = ShipRequest::find($ship_request_id);
            if (!empty($shipment) && $shipment->customer_id == $customer_id) {
                return view('myaccount.customer.shipping.response')->with(['shipment' => $shipment]);
            } else {
                return redirect()->route('customer.locker');
            }
        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function retryPayment(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $shipment = ShipRequest::where('customer_id', $customer_id)
            ->where('order_id', $request->order_id)
            ->whereIn('payment_status', ['failed', 'pending'])
            ->first();
        if ($shipment) {

            $package_ids = explode(",", $shipment->package_ids);
            $packages = Package::where('customer_id', $customer_id)
                ->whereIn('id', $package_ids)
                ->get();
            $payment = array('amount' => 0, 'coupon' => $shipment->coupon, 'payment_gateway_name' => 'wire', 'payment_gateway_fee' => 0);

            if (!empty($shipment->payment_gateway_fee)) {
                $payment['amount'] = $shipment->estimated - $shipment->payment_gateway_fee - $shipment->wallet;
            } else {
                $payment['amount'] = $shipment->estimated - $shipment->wallet;
            }
//            $ship_option = ShipOption::where('ship_request_id', $shipment->id)
//                ->first(['insurance','insurance_amt']);
//
//            if($request->insurance)
//            {
//                if ($request->insurance == '1')
//                {
//                    $payment['amount'] += 30.00;
//                }
//            }
//            else if($shipment->option->insurance == 1 )
//            {
//                $payment['amount'] += 30.00;
//            }
            if ($request->wallet == 1)
            {
                $payment['amount'] -= $customer->balance->amount;

            }
            $payment['wallet'] = $customer->balance->amount;
            $payment['amount'] -= $shipment->loyalty;
            $coupon_applied_status = PromoCodeApplied::where('shipment_id', $request->order_id)->first();
            $promo_status = '';
            $coupon_amount = 0;
            $coupon_name = '';
            if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                    ->whereDate('validity', '>=', date('Y-m-d'))->first();
                if (isset($promo) && !empty($promo)) {
                    if (isset($promo->cashback) && !empty($promo->cashback)) {
                        $promo_status = "cashback_success";
                        $coupon_amount = $shipment->estimated * ($promo->cashback / 100);
                        $coupon_name = $coupon_applied_status->coupon_code;
                        $payment['coupon'] = 0;
                    } elseif (isset($promo->discount) && !empty($promo->discount)) {
                        $estimated = $shipment->estimated - $shipment->package_level_charges - $payment['wallet'];
                        $max_coupon_amount = $promo->max_cash_amount;

                        $total_coupon_amount = $estimated * ($promo->discount / 100);
                        if ($total_coupon_amount <= $max_coupon_amount) {
                            $coupon_amount = $total_coupon_amount;
                        } else {
                            $coupon_amount = $max_coupon_amount;
                        }

                        $payment['coupon'] = $coupon_amount;
                        $coupon_name = $coupon_applied_status->coupon_code;
                        $promo_status = "discount_success";

                    }
                    $payment['amount'] -= $payment['coupon'];
                } else {

                    $promo_status = "promo_expired";
                }
            }
            switch ($request->payment_gateway_name) {
                case 'card':
                    $payment['payment_gateway_name'] = 'card';
                    break;
                case 'wire':
                    $payment['payment_gateway_name'] = 'wire';
                    break;
                case 'cash':
                    $payment['payment_gateway_name'] = 'cash';
                    break;
                case 'wallet':
                    $payment['payment_gateway_name'] = 'wallet';
                    break;
                case 'paypal':
                    $payment['payment_gateway_name'] = 'paypal';
                    $payment['payment_gateway_fee'] = (10 / 100) * $payment['amount'];
                    $payment['amount'] += $payment['payment_gateway_fee'];
                    break;
                case 'paytm':
                    $payment['payment_gateway_name'] = 'paytm';
                    $payment['payment_gateway_fee'] = (3 / 100) * $payment['amount'];
                    $payment['amount'] += $payment['payment_gateway_fee'];
                    break;
                default:
                    $payment['payment_gateway_name'] = '';
                    break;
            }

            return view('myaccount.customer.shipping.retry')->with([
                'shipment' => $shipment,
                'packages' => $packages,
                'payment' => $payment,
                'promo_status' => $promo_status,
                'cpn_amount' => $coupon_amount,
                'cpn_name' => $coupon_name,
                'wallet_amount' => $customer->balance->amount
            ]);

        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function payretrySubmit(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $ship_request_id = $request->ship_request_id;
        $shipment = ShipRequest::find($ship_request_id);
        if (!empty($shipment) && $shipment->customer_id == $customer_id) {
            $payment = array('coupon' => 0, 'final_amount' => $shipment->estimated);
//            if ($request->insurance == 1)
//            {
//                $payment['final_amount'] += 30.00;
//                ShipOption::where('ship_request_id', $shipment->id)
//                    ->update(['insurance' => '1', 'insurance_amt' => '30.00']);
//            }

            /* Please dont remove this code its required */


//            $payment['wallet'] = $shipment->wallet;

//            $coupon_applied_status = PromoCodeApplied::where('shipment_id',$shipment->order_id)->first();
//            $promo_status = '';
//            $coupon_amount = 0;
//            $coupon_name = '';
//
//            if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
//                $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
//                    ->whereDate('validity', '>=', date('Y-m-d'))->first();
//
//                if (isset($promo) && !empty($promo)){
//                    if(!empty($promo->cashback))
//                    {
////                        $payment['coupon'] = $promo->cashback;
//                        $promo_status = "cashback_success";
////                        $coupon_amount = $shipment->estimated * ($promo->cashback / 100);
//                        $payment['coupon'] = 0;
//                        $coupon_name = $coupon_applied_status->coupon_code;
//                    }elseif (!empty($promo->discount))
//                    {
//                        $estimated = $shipment->estimated- $shipment->package_level_charges - $payment['wallet'];
//                        $payment['coupon'] =  $estimated * ($promo->discount / 100);
//                        $coupon_name = $coupon_applied_status->coupon_code;
//                        $promo_status = "discount_success";
////                      $payment['final_amount'] -= $payment['coupon'];
//                    }
//                }
//            }

//            $shipment->coupon = $payment['coupon'];
            $customer_wallet_amount = 0;
            $request->session()->put(['is_wallet_used' => 0]);
            $request->session()->put(['is_retry_payment' => 0]);
            $shipment_wallet_amount = $shipment->wallet;
            // if using wallet amount for shipment
            if ($request->wallet == 1)
            {
                if ($request->payment_gateway_name == 'cash' || $request->payment_gateway_name == 'wire')
                {
                    $customer_wallet_amount = $customer->balance->amount;
                    $payment['final_amount'] -= $customer_wallet_amount;
                    $shipment_wallet_amount += $customer_wallet_amount;
                }
                $request->session()->put(['is_wallet_used' => 1]);
                $request->session()->put(['is_retry_payment' => 1]);
            }
            // end
            if ($request->payment_gateway_name == 'wallet')
            {
                $shipment->payment_gateway_name = 'wallet';
                $shipment->shipping_status = 'inqueue';
                $shipment->payment_status = 'success';
            }
            $shipment->wallet = $shipment_wallet_amount;
            $shipment->final_amount = $payment['final_amount'] - $shipment->wallet - $shipment->loyalty - $shipment->coupon;

            $request->session()->put(['ship_request_id' => $shipment->id]);
            $shipment->save();
            if ($customer_wallet_amount > 0)
            {
                $this->walletTransection($customer_wallet_amount,$customer,$shipment);
            }
            switch ($request->payment_gateway_name) {
                case 'card':
                    return redirect()->route('payment.axis.start');
                    break;
                case 'wire':
                    $coupon_applied_status = PromoCodeApplied::where('shipment_id', $shipment->order_id)->first();
                    $promo_status = '';

                    if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                        $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                            ->whereDate('validity', '>=', date('Y-m-d'))->first();
                        if (isset($promo) && !empty($promo)) {
                            PromoCodeApplied::where('shipment_id', $shipment->order_id)->update(['status' => 'success']);
                        } else {
                            PromoCodeApplied::where('shipment_id', $shipment->order_id)->update(['status' => 'applied']);
                        }
                    }
                    if ($request->wallet == 1) {
                        ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                    }
                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'wire', 'payment_status' => 'pending', 'shipping_status' => 'inqueue']);
                    break;
                   case 'cash':

                    /* Please dont remove this code its required */

//                    $coupon_applied_status = PromoCodeApplied::where('shipment_id',$shipment->order_id)->first();
//                    $promo_status = '';
//
//                    if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
//                        $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
//                            ->whereDate('validity', '>=', date('Y-m-d'))->first();
//                        if (isset($promo) && !empty($promo)){
//                            PromoCodeApplied::where('shipment_id',$shipment->order_id)->update(['status' => 'success']);
//                        }
//                        else
//                        {
//                            PromoCodeApplied::where('shipment_id',$shipment->order_id)->update(['status' => 'applied']);
//                        }
//                    }
                    if ($request->wallet == 1) {
                        ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                    }
                    ShipRequest::where('id', $ship_request_id)
                        ->update(['payment_gateway_name' => 'cash',
                                'payment_status' => 'pending',
                                'shipping_status' => 'inqueue'
                            ]);
                    break;
                case 'wallet':
                    $customer_total_wallet_amount = $customer->balance->amount;
                    $total_shipment_amount = $payment['final_amount'] - $shipment->wallet - $shipment->loyalty - $shipment->coupon;
                    $remaining_wallet_amount = $customer_total_wallet_amount - $total_shipment_amount;
                    ShopperBalance::where('customer_id', $customer_id)
                        ->update(['amount' => $remaining_wallet_amount]);
                    $this->walletTransection($payment['final_amount'],$customer,$shipment);
                    break;
                case 'paypal':
                    return redirect()->route('payment.paypal.start');
                    break;
                case 'paytm':
                    return redirect()->route('payment.paytm.start');
                    break;
                default:
                    return redirect()->route('customer.locker');
                    break;
            }
            return redirect()->route('shipping.request.response');
        }
    }

    public function shipHistory()
    {
        $id = Auth::id();
        $shipments = ShipRequest::where('customer_id', $id)
                     ->whereIn('shipping_status', ['dispatched', 'delivered', 'canceled', 'refunded'])
                     ->orderBy('updated_at', 'desc')->get();
        return view('myaccount.customer.shipping.history')->with('shipments', $shipments);
    }

    public function shipmentInvoice(Request $request)
    {
        $customer_id = Auth::id();
        $orderid = $request->order_id;
        $customer = Customer::find($customer_id);
        $shipment = ShipRequest::where('customer_id', $customer_id)->where('order_id', $orderid)->first();
        if (!empty($shipment)) {
            $package_ids = explode(",", $shipment->package_ids);
            $packages = Package::where('customer_id', $customer_id)->whereIn('id', $package_ids)->get();
            return view('myaccount.customer.shipping.invoice')->with(['shipment' => $shipment, 'packages' => $packages]);
        } else {
            return redirect(route('shipping.history'));
        }
    }

    public function cancelRequest(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $shipment = ShipRequest::where('customer_id', $customer_id)->whereIn('shipping_status', ['inreview', 'inqueue'])->where('order_id', $request->order_id)->first();
        if (!empty($shipment)) {
            $diff = date_diff(new DateTime(date('Y-m-d H:i:s')), new DateTime($shipment->created_at));
            $hours = ($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h + $diff->i / 60;
            if (ceil($hours) <= 1) {
                ShipRequest::where('id', $shipment->id)->update(['shipping_status' => 'canceled']);
                $package_ids = explode(",", $shipment->package_ids);
                Package::whereIn('id', $package_ids)->update(['status' => 'ship']);

                $packages = Package::where('customer_id', $customer_id)->whereIn('id', $package_ids)->get();
                Mail::to($customer->email)->send(new ShipmentCancelled($packages, $shipment));

                $notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'shipment';
                $notify->action_id = $shipment->id;
                $notify->action_description = 'Shipment request cancelled - Order# ' . $shipment->order_id;
                $notify->save();

                return redirect()->route('customer.locker')->with('error', 'Ship request has been cancelled!');
            } else {
                return redirect()->route('customer.locker');
            }
        } else {
            return redirect()->route('customer.locker');
        }
    }

    public function calcShipping($country_id, $weight, $type)
    {
        $weight = $weight;
        $type = $weight <= 2 ? $type : 'nondoc';
        if ($weight <= 300) {
            $rate = ShippingRate::where('country_id', $country_id)
                ->where('item_type', $type)
                ->where('min', '<', $weight)
                ->where('max', '>=', $weight)
                ->first();
        } else {
            $rate = ShippingRate::where('country_id', $country_id)
                ->where('item_type', $type)
                ->where('min', '<', $weight)
                ->where('max', '=', 0)
                ->first();
        }
        if ($rate) {
            $amount = ($rate->rate_type == "fixed") ? $rate->amount : $rate->amount * $weight;
            return $amount;
        } else {
            return false;
        }
    }

    public function getFinalPayment($shipping)
    {
        $customer_id = Auth::id();
        $payment = array('tax' => 0, 'loyalty' => 0, 'amount' => 0);
        $payment['tax'] = (18 / 100) * $shipping['estimated'];

        $payment['amount'] = $shipping['estimated'] + $payment['tax'];
        $loyalty = LoyaltyPoint::where('customer_id', $customer_id)->first();
        $points = $loyalty->points;
        $rewards = 0;
        while ($points >= 1000) {
            $rewards += 100;
            $points -= 1000;
        }
        $payment['loyalty'] = $rewards;
        $payment['amount'] -= $payment['loyalty'];
        return $payment;
    }
}
