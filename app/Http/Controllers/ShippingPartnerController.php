<?php

namespace App\Http\Controllers;

use App\Package;
use App\ShipRequest;
use App\StoreCatClub;
use Auth;
use Illuminate\Http\Request;

class ShippingPartnerController extends Controller
{

    public function dtdcIndex()
    {
        $shipments = ShipRequest::orderBy('ship_requests.id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.payment_gateway_name', 'ship_requests.city',
                'ship_requests.weight', 'ship_requests.final_amount', 'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', 'like', 'dtdc')
            ->where('ship_requests.shipping_status', '=', 'delivered')
            ->paginate(20);
        return view('partners.dtdc')->with(['shipments' => $shipments]);
    }

    public function dtdcShipmentDetail(Request $req)
    {
        $shipment = ShipRequest::orderBy('id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.package_ids', 'ship_requests.payment_gateway_name',
                'ship_requests.city', 'ship_requests.weight', 'ship_requests.final_amount',
                'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', 'like', 'dtdc')
            ->where('ship_requests.id', $req->id)
            ->first();

        $stores = StoreCatClub::where('category_id', 1)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->take(8)
            ->get();

        $packages = Package::whereIn('id', [$shipment->package_ids])
            ->with('items', 'photos')
            ->get();
        return view('partners.detail_dtdc')
            ->with(
                [
                    'shipment' => $shipment,
                    'packages' => $packages,
                    'stores' => $stores
                ]
            );
    }

    public function fedexIndex()
    {
        $shipments = ShipRequest::orderBy('ship_requests.id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.payment_gateway_name', 'ship_requests.city',
                'ship_requests.weight', 'ship_requests.final_amount', 'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', '=', 'fedex')
            ->where('ship_requests.shipping_status', '=', 'delivered')
            ->paginate(20);
        return view('partners.fedex')->with(['shipments' => $shipments]);
    }

    public function fedexShipmentDetail(Request $req)
    {
        $shipment = ShipRequest::orderBy('id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.package_ids', 'ship_requests.payment_gateway_name',
                'ship_requests.city', 'ship_requests.weight', 'ship_requests.final_amount',
                'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', '=', 'fedex')
            ->where('ship_requests.id', $req->id)
            ->first();

        $stores = StoreCatClub::where('category_id', 1)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->take(8)
            ->get();

        $packages = Package::whereIn('id', [$shipment->package_ids])
            ->with('items', 'photos')
            ->get();
        return view('partners.detail_fedex')
            ->with(
                [
                    'shipment' => $shipment,
                    'packages' => $packages,
                    'stores' => $stores
                ]
            );
    }

    public function dhlIndex()
    {
        $shipments = ShipRequest::orderBy('ship_requests.id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.payment_gateway_name', 'ship_requests.city',
                'ship_requests.weight', 'ship_requests.final_amount', 'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', '=', 'dhl')
            ->where('ship_requests.shipping_status', '=', 'delivered')
            ->paginate(20);
        return view('partners.dhl')->with(['shipments' => $shipments]);
    }
    public function dhlIndexNew()
    {
        $shipments = ShipRequest::orderBy('ship_requests.id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.payment_gateway_name', 'ship_requests.city',
                'ship_requests.weight', 'ship_requests.final_amount', 'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', '=', 'dhl')
            ->where('ship_requests.shipping_status', '=', 'delivered')

            ->paginate(10);
        return view('partners.dhl-new')->with(['shipments' => $shipments]);
    }

    public function dhlShipmentDetail(Request $req)
    {
        $shipment = ShipRequest::orderBy('id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.package_ids', 'ship_requests.payment_gateway_name',
                'ship_requests.city', 'ship_requests.weight', 'ship_requests.final_amount',
                'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', '=', 'dhl')
            ->where('ship_requests.id', $req->id)
            ->first();

        $stores = StoreCatClub::where('category_id', 1)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->take(8)
            ->get();

        $packages = Package::whereIn('id', [$shipment->package_ids])
            ->with('items', 'photos')
            ->get();
        return view('partners.detail_dhl')
            ->with(
                [
                    'shipment' => $shipment,
                    'packages' => $packages,
                    'stores' => $stores
                ]
            );
    }
    public function dhlShipmentDetailNew(Request $req)
    {
        $shipment = ShipRequest::orderBy('id', 'asc')
            ->with('tracking')
            ->select(['ship_requests.id', 'ship_requests.package_ids', 'ship_requests.payment_gateway_name',
                'ship_requests.city', 'ship_requests.weight', 'ship_requests.final_amount',
                'ship_requests.full_name as customer_name',
                'countries.name as country', 'ship_trackings.carrier'])
            ->join('ship_trackings', 'ship_trackings.ship_request_id', '=', 'ship_requests.id')
            ->join('countries', 'countries.id', '=', 'ship_requests.country')
            ->where('ship_trackings.carrier', '=', 'dhl')
            ->where('ship_requests.id', $req->id)
            ->first();

        $stores = StoreCatClub::where('category_id', 1)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->take(8)
            ->get();

        $packages = Package::whereIn('id', [$shipment->package_ids])
            ->with('items', 'photos')
            ->get();
        return view('partners.detail_dhl_new')
            ->with(
                [
                    'shipment' => $shipment,
                    'packages' => $packages,
                    'stores' => $stores
                ]
            );
    }
}
