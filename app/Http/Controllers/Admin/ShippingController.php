<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Country;
use App\ShippingRate;
use App\ShipRequest;
use App\Customer;
use App\Package;
use App\LoyaltyPoint;
use App\ShipTracking;

use App\Mail\ShipmentForConfirm;
use App\Mail\ShipmentReceived;
use App\Mail\ShipmentDispatched;
use App\Mail\ShipmentDelivered;

class ShippingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function countries()
    {
    	$countries = Country::orderBy('name', 'asc')->paginate(20);
    	return view('admin.shipping-countries')->with('countries', $countries);
    }

    public function updateCountry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phonecode' => 'required',
            'flag' => 'mimes:jpeg,bmp,png,gif,jpg'
        ]);

        $country = Country::find($request->id);

        $filename = $country->flag;
        if($request->hasFile('flag')) {
            $file = $request->file('flag');
            $destinationPath = '/uploads/country/';
            $filename = "flag_".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }
        
        $country->name = $request->name;
        $country->phonecode = $request->phonecode;
        $country->flag = $filename;
        $country->discount = $request->discount;
        $country->shipping = ($request->shipping == "1") ? "1" : "0";
        $country->save();

        return redirect()->back()->with('message', 'Country Details Updated.');
    }

    public function deleteCountry(Request $request)
    {
        //Country::where('id', $request->id)->delete();
        return redirect()->back()->with('message', 'Shipping Country Removed.');
    }

    public function charges()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('admin.shipping-charges')->with('countries', $countries);
    }

    public function shipCharge(Request $request)
    {
        $country = Country::where('iso', $request->country)->first();
        $rates = ShippingRate::where('country_id', $country->id)->orderBy('min', 'desc')->get();
        return view('admin.shipping-charge')->with(['country'=>$country, 'rates'=>$rates]);
    }

    public function shippingRate(Request $request)
    {
        $country = $request->country;
        $this->validate($request, [
            'min' => 'required',
            'max' => 'required',
            'courier' => 'required',
            'amount' => 'required',
            'timerange' => 'required',
            'item_type' => 'required',
            'rate_type' => 'required'
        ]);

        $ship = new ShippingRate;
        $ship->country_id = $country;
        $ship->min = $request->min;
        $ship->max = $request->max;
        $ship->amount = $request->amount;
        $ship->courier = $request->courier;
        $ship->timerange = $request->timerange;
        $ship->item_type = $request->item_type;
        $ship->rate_type = $request->rate_type;
        $ship->save();

        return redirect($request->redirect)->with('message', 'Shipping Rate Added To Database.');
    }

    public function deleteRate(Request $request)
    {
    	ShippingRate::where('id', $request->rate)->delete();
    	return redirect()->back()->with('message', 'Shipping Rate Removed.');
    }

    public function updateRate(Request $request)
    {
        $this->validate($request, [
            'rateid' => 'required',
            'min' => 'required',
            'max' => 'required',
            'courier' => 'required',
            'amount' => 'required',
            'timerange' => 'required',
            'item_type' => 'required',
            'rate_type' => 'required'
        ]);

        $ship = ShippingRate::find($request->rateid);
        $ship->min = $request->min;
        $ship->max = $request->max;
        $ship->amount = $request->amount;
        $ship->courier = $request->courier;
        $ship->timerange = $request->timerange;
        $ship->item_type = $request->item_type;
        $ship->rate_type = $request->rate_type;
        $ship->save();

        return redirect()->back()->with('message', 'Shipping Rates Updated.');
    }

    public function shipments(Request $request)
    {
        $query = ShipRequest::query();
        if (isset($request->search) && !empty($request->search)) {
            $keyword = $request->search;
            $query->orWhere('fullname', 'like', '%'.$keyword.'%')
                    ->orWhere('orderid', 'like', '%'.$keyword.'%')
                    ->orWhere('shipstatus', 'like', '%'.$keyword.'%');
        }

        $shipments = $query->orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.shipments')->with('shipments', $shipments);
    }

    public function shipQueue()
    {
        $shipments = ShipRequest::where('shipstatus', 'inqueue')->orderBy('updated_at', 'desc')->get();
        return view('admin.ship_queue')->with('shipments', $shipments);
    }

    public function shipReview()
    {
        $shipments = ShipRequest::where('shipstatus', 'inreview')->orderBy('updated_at', 'desc')->get();
        return view('admin.ship_review')->with('shipments', $shipments);
    }

    public function shipDispatched()
    {
        $shipments = ShipRequest::where('shipstatus', 'dispatched')->orderBy('updated_at', 'desc')->get();
        return view('admin.ship_dispatch')->with('shipments', $shipments);
    }

    public function shipDelivered()
    {
        $shipments = ShipRequest::where('shipstatus', 'delivered')->orderBy('updated_at', 'desc')->get();
        return view('admin.ship_deliver')->with('shipments', $shipments);
    }

    public function shipCanceled()
    {
        $shipments = ShipRequest::where('shipstatus', 'canceled')->orderBy('updated_at', 'desc')->get();
        return view('admin.ship_cancel')->with('shipments', $shipments);
    }

    public function shipOrder(Request $request)
    {
        $shipment = ShipRequest::find($request->id);
        $customer = Customer::find($shipment->custid);
        $packids = explode(",", $shipment->packids);
        $packages = Package::whereIn('id', $packids)->get();
        return view('admin.shipment')->with(['shipment'=>$shipment, 'customer'=>$customer, 'packages' => $packages]);
    }

    public function orderUpdate(Request $request)
    {
        $this->validate($request, [
            'shipid' => 'required',
            'fullname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'weight' => 'required',
        ]);

        $shipRqst = ShipRequest::find($request->shipid);
        $shipRqst->fullname = $request->fullname;
        $shipRqst->address = $request->address;
        $shipRqst->phone = $request->phone;
        $shipRqst->weight = $request->weight;
        $shipRqst->packlevel = $request->packlevel;

        $packids = explode(",", $shipRqst->packids);
        $types = Package::whereIn('id', $packids)->pluck('type')->toArray();
        $packtype = in_array("nondoc", $types) ? 'nondoc' : 'doc';

        $country = Country::find($shipRqst->country);

        $subtotal = $this->calcShipping($country->id, $request->weight, $packtype);
        $discount = ($country->discount / 100) * $subtotal;
        $estimated = ($subtotal -  $discount) + $request->packlevel;

        $shipRqst->subtotal = $subtotal;
        $shipRqst->discount = $discount;
        $shipRqst->estimated = $estimated;

        switch ($request->shipstatus) {
            case 'confirmation':
                $shipRqst->shipstatus = 'confirmation';
            break;
            case 'inqueue':
                $shipRqst->shipstatus = 'inqueue';
            break;
            case 'dispatched':
                $shipRqst->shipstatus = 'dispatched';
                $shipRqst->paystatus = 'success';

                if (empty($shipRqst->tracking)) {
                    $tracking = new ShipTracking;
                    $tracking->shipid = $shipRqst->id;
                    $tracking->shipdate = date('Y-m-d');
                    $tracking->box_nos = $shipRqst->count;
                    $tracking->packweight = $shipRqst->weight;
                    $tracking->packvalue = $shipRqst->value;
                    $tracking->save();
                }

                $points = (int) ((10/100) * $shipRqst->amount);
                $loyalid = LoyaltyPoint::where('custid', $shipRqst->custid)->first()->id;
                $loyalty = LoyaltyPoint::find($loyalid);
                $loyalty->points += $points;
                $loyalty->total += $points;

                $level = $loyalty->level;
                if ($loyalty->total > 1000) {
                    $level = (int)($loyalty->total / 1000) + 1;
                }
                $loyalty->level = $level;
                $loyalty->save();

            break;
            case 'delivered':
                $shipRqst->shipstatus = 'delivered';
                Package::whereIn('id', $packids)->update(['status' => 'delivered']);
            break;
            case 'canceled':
                $shipRqst->shipstatus = 'canceled';
                Package::whereIn('id', $packids)->update(['status' => 'ship']);
            break;
        }

        $shipRqst->save();

        return redirect()->back()->with('message', 'Shipment Order Updated.');
    }

    public function trackingUpdate(Request $request)
    {
        $this->validate($request, [
            'shipdate' => 'required',
            'carrier' => 'required',
            'box_nos' => 'required',
            'packweight' => 'required',
            'packvalue' => 'required',
            'trackid' => 'required',
            'track_url' => 'required'
        ]);

        $tracking = ShipTracking::find($request->trackingid);
        $tracking->shipdate = $request->shipdate;
        $tracking->carrier = $request->carrier;
        $tracking->box_nos = $request->box_nos;
        $tracking->packweight = $request->packweight;
        $tracking->packvalue = $request->packvalue;
        $tracking->trackid = $request->trackid;
        $tracking->track_url = $request->track_url;
        $tracking->save();
        return redirect()->back()->with('message', 'Tracking Information Updated.');
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

    public function mailerShipping(Request $request)
    {
        $this->validate($request, [
            'shipid' => 'required',
            'condition' => 'required'
        ]);

        $shipment = ShipRequest::find($request->shipid);
        if (!empty($shipment)) {
            $customer = Customer::find($shipment->custid);
            switch ($request->condition) {
                case 'confirmation':
                    Mail::to($customer->email)->send(new ShipmentForConfirm($shipment));
                    return redirect()->back()->with('message', 'Confirmation mail send to customer.');
                break;
                case 'received':
                    Mail::to($customer->email)->send(new ShipmentReceived());
                    return redirect()->back()->with('message', 'Payment notification send to customer.');
                break;
                case 'dispatched':
                    Mail::to($customer->email)->send(new ShipmentDispatched($shipment));
                    return redirect()->back()->with('message', 'Shipment dispatched notification send to customer.');
                break;
                case 'delivered':
                    Mail::to($customer->email)->send(new ShipmentDelivered($shipment));
                    return redirect()->back()->with('message', 'Shipment delivered notification send to customer.');
                break;
            }
        }else{
            return redirect()->route('admin.shipping');
        }
        
    }
}
