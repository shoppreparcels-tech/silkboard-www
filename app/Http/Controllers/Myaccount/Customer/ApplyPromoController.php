<?php

namespace App\Http\Controllers\Myaccount\Customer;

use App\PromoCodeApplied;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\PromoCode;
use App\ShipRequest;


class ApplyPromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function applyCode(Request $request) {
        $customer_id = Auth::id();
        $first_shipment_coupon = env('FIRST_SHIPMENT_COUPON');
        $shipment_count = ShipRequest::where('customer_id', '=',$customer_id)->get(['id','customer_id']);
        if ($request->promocode == $first_shipment_coupon && $shipment_count != '')
        {
            return redirect()->back()->with('error_promo', 'This Promo Code Is For First Shipment Only .');
        }
        $promo_applied_status = PromoCodeApplied::where('shipment_id',$request->hdn_ship_id)->first();
        $shipment = ShipRequest::where('customer_id', $customer_id)
            ->where('order_id', $request->order_id)
            ->where('shipping_status', 'confirmation')->first();

        $promo_value = PromoCode::where('code',$request->promocode)
            ->whereDate('validity', '>=', date('Y-m-d'))
            ->first();
        if (!empty($promo_value))
        {
            if (empty($promo_applied_status))
            {
                $promo_applied = new PromoCodeApplied();
                $promo_applied->shipment_id = $request->hdn_ship_id;
                $promo_applied->coupon_code = $request->promocode;
                $promo_applied->save();
                return redirect()->back();
            }elseif (!empty($promo_applied_status) && $promo_applied_status->coupon_code != $request->promocode)
            {
                $promo_applied_status->coupon_code = $request->promocode;
                $promo_applied_status->save();
                return redirect()->back();

            }elseif (!empty($promo_applied_status) && $promo_applied_status->coupon_code == $request->promocode)
            {
                return redirect()->back()->with('error_promo', 'Promo code Already applied .');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back()->with('error_promo', 'Invalid or Expired Promo Code .');
        }
    }

    public function applyCodeRetryPayment(Request $request) {
        $customer_id = Auth::id();
        $first_shipment_coupon = env('FIRST_SHIPMENT_COUPON');
        $shipment_count = ShipRequest::where('customer_id', '=',$customer_id)->get(['id','customer_id']);

        if ($request->promocode == $first_shipment_coupon && $shipment_count != '')
        {
            return redirect()->back()->with('error_promo', 'This Promo Code Is For First Shipment Only .');
        }

        $promo_applied_status = PromoCodeApplied::where('shipment_id',$request->hdn_ship_id)->first();
        $shipment = ShipRequest::where('customer_id', $customer_id)
            ->where('order_id', $request->hdn_ship_id)
            ->where('shipping_status', 'inqueue')->first();

        $promo_value = PromoCode::where('code',$request->promocode)
            ->whereDate('validity', '>=', date('Y-m-d'))
            ->first();
        if (!empty($promo_value))
        {
            if (empty($promo_applied_status))
            {
                $promo_applied = new PromoCodeApplied();
                $promo_applied->shipment_id = $request->hdn_ship_id;
                $promo_applied->coupon_code = $request->promocode;
                $promo_applied->save();
                $coupon_amount = 0;
                if(!empty($promo_value->cashback))
                {
                    $coupon_amount = 0;
                    $coupon_name = $request->promocode;
                }elseif (!empty($promo_value->discount))
                {
                    $estimated = $shipment->estimated- $shipment->package_level_charges - $shipment->wallet;
                    $coupon_amount =  $estimated * ($promo_value->discount / 100);
                    $coupon_name = $request->promocode;
                }
                $final_amount = $shipment->estimated - $shipment->wallet - $coupon_amount;
                $shipment->coupon = $coupon_amount;
                $shipment->final_amount = $final_amount;
                $shipment->save();
                return redirect()->back();
            }elseif (!empty($promo_applied_status) && $promo_applied_status->coupon_code != $request->promocode)
            {
                $promo_applied_status->coupon_code = $request->promocode;
                $promo_applied_status->save();
                $coupon_amount = 0;
                if(!empty($promo_value->cashback))
                {
                    $coupon_amount = 0;
                    $coupon_name = $request->promocode;
                }elseif (!empty($promo_value->discount))
                {
                    $estimated = $shipment->estimated- $shipment->package_level_charges - $shipment->wallet;
                    $coupon_amount =  $estimated * ($promo_value->discount / 100);
                    $coupon_name = $request->promocode;
                }
                $final_amount = $shipment->estimated - $shipment->wallet - $coupon_amount;
                $shipment->coupon = $coupon_amount;
                $shipment->final_amount = $final_amount;
                $shipment->save();

                return redirect()->back();

            }elseif (!empty($promo_applied_status) && $promo_applied_status->coupon_code == $request->promocode)
            {
                return redirect()->back()->with('error_promo', 'Promo code Already applied .');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back()->with('error_promo', 'Invalid or Expired Promo Code .');
        }
    }
}
