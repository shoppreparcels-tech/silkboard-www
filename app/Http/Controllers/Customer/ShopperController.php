<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Customer;
use App\ShopperRequest;
use App\ShopperOrder;

class ShopperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function personalShopper()
    {
    	$cartCount = ShopperRequest::where('custid', Auth::id())->where('status', 'pending')->count();
    	return view('customer.shopper.index')->with('cartCount', $cartCount);
    }

    public function orderForm()
    {
    	$cartCount = ShopperRequest::where('custid', Auth::id())->where('status', 'pending')->count();
    	return view('customer.shopper.orderform')->with('cartCount', $cartCount);
    }

    public function submitForm(Request $request)
    {
    	$this->validate($request, [
            'type' => 'required',
            'qty' => 'required|integer|min:1',
            'url' => 'required|url',
            'item_name' => 'required|max:250',
            'price' => 'required|numeric',
            'unavail' => 'required',
        ]);

        $custid = Auth::id();

        $url = $request->url;
        $domain = parse_url($url, PHP_URL_HOST);
        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
		    $sellerHost =  $regs['domain'];
		}

		$price  = trim(str_replace(',', '', $request->price));

		$checkOrder = ShopperOrder::where('seller', $sellerHost)
									->where('custid', $custid)
									->where('status', 'pending')
									->first();
		if (!empty($checkOrder)) {
			$orderid = $checkOrder->id;
			$shopOrder= ShopperOrder::find($orderid);
	        $shopOrder->totalqty = $request->qty + $checkOrder->totalqty;
	        $totalprice = ($request->qty * $price) + $checkOrder->totalprice;
	        $shopOrder->totalprice = $totalprice;

	        $pscost = (7 / 100) * $totalprice;
	        $pscost = round($pscost);
	        if ($pscost < 200) { $pscost = 200; }
	        $shopOrder->pscost = $pscost;
	        $shopOrder->subtotal = $totalprice + $pscost;
	        $shopOrder->save();
		}else{
			$shopOrder = new ShopperOrder;
	        $shopOrder->custid = $custid;
	        $shopOrder->seller = $sellerHost;
	        do
	        {
	            $refnum = "P".$custid.rand(100, 999);
	            $order_ref = ShopperOrder::where('refnum', $refnum)->get();
	        }
	        while(!$order_ref->isEmpty());

	        $shopOrder->refnum = $refnum;
	        $shopOrder->totalqty = $request->qty;
	        $totalprice = $request->qty * $price;
	        $shopOrder->totalprice = $totalprice;

	        $pscost = (7 / 100) * $totalprice;
	        $pscost = round($pscost);
	        if ($pscost < 200) { $pscost = 200; }
	        $shopOrder->pscost = $pscost;
	        
	        $shopOrder->subtotal = $totalprice + $pscost;
	        $shopOrder->status = 'pending';
	        $shopOrder->save();
	        $orderid = $shopOrder->id;
		}

        $shopReq = new ShopperRequest;
        $shopReq->custid = $custid;
        $shopReq->orderid = $orderid;
        $shopReq->type = $request->type;
        $shopReq->qty = $request->qty;
        $shopReq->url = $request->url;
        $shopReq->item_num = $request->item_num;
        $shopReq->item_name = $request->item_name;
        $shopReq->item_color = $request->item_color;
        $shopReq->item_size = $request->item_size;
        $shopReq->price = $price;
        $shopReq->totalprice = $price * $request->qty;
        $shopReq->note = $request->note;
        $shopReq->unavail = $request->unavail;
        $shopReq->status = 'pending';
        $shopReq->save();

        return redirect(route('personal.shopper.cart'));
    }

    public function shopperCart()
    {
    	$custid = Auth::id();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', 'pending')->get();
    	$cartCount = ShopperRequest::where('custid', $custid)->where('status', 'pending')->count();
    	return view('customer.shopper.cart')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function shopperOptions()
    {
    	$custid = Auth::id();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', 'pending')->get();
    	$cartCount = ShopperRequest::where('custid', $custid)->where('status', 'pending')->count();
    	return view('customer.shopper.options')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function submitOptions(Request $request)
    {
    	$custid = Auth::id();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', 'pending')->get();
    	foreach ($orders as $order) {
    		$shopOrder = ShopperOrder::find($order->id);
    		$subtotal = $shopOrder->subtotal;
    		$sale_tax = $request->sale_tax[$order->id];
    		$ship_charge = $request->ship_charge[$order->id];

    		if (!empty($sale_tax)) {
    			$shopOrder->sale_tax = $sale_tax;
    			$subtotal += $sale_tax;
    		}
    		if (!empty($ship_charge)) {
    			$shopOrder->ship_charge = $ship_charge;
    			$subtotal += $ship_charge;
    		}
    		$shopOrder->subtotal = $subtotal;

    		$shopOrder->promo_code = $request->promo_code[$order->id];
    		$shopOrder->promo_info = $request->promo_info[$order->id];
    		$shopOrder->promo_unavail = $request->promo_unavail[$order->id];
    		$shopOrder->instruction = $request->instruction[$order->id];
    		$shopOrder->save();
    	}

    	return redirect(route('personal.shopper.summary'));
    }

    public function shopperSummary()
    {
    	$custid = Auth::id();
    	$cartCount = ShopperRequest::where('custid', $custid)->where('status', 'pending')->count();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', 'pending')->get();
    	return view('customer.shopper.summary')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function shopperPayment()
    {
    	$custid = Auth::id();
    	$cartCount = ShopperRequest::where('custid', $custid)->where('status', 'pending')->count();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', 'pending')->get();
    	return view('customer.shopper.payment')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function submitPayment(Request $request)
    {
    	$custid = Auth::id();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', 'pending')->get();
    	if (!$orders->isEmpty()) {

    		switch ($request->payoption) {
	    		case 'wire':
	    				$payoption = 'wire';
                        $status = 'awaiting';
	    			break;
	    		
	    		default:
	    				return redirect(route('personal.shopper.payment'));
	    			break;
	    	}

    		$totalamount = $orders->sum('subtotal');
	    	$orderids = array();
	    	foreach ($orders as $order) {
	    		$orderids[] = $order->id;
	    	}

            ShopperOrder::where('custid', $custid)->whereIn('id', $orderids)->update(['payoption'=>$payoption, 'status' => $status]);

            ShopperRequest::where('custid', $custid)->whereIn('orderid', $orderids)->update(['status' => $status]);

    		$request->session()->put(['orderids' => $orderids]);
	    	return redirect()->route('personal.shopper.response');

    	}else{
    		return redirect(route('personal.shopper.cart'));
    	}
    	
    }

    public function shopperResponse(Request $request)
    {
    	if ($request->session()->has('orderids')) {
            if ($request->session()->exists('orderids')) {
            	$custid = Auth::id();
                $orderids = $request->session()->pull('orderids');

                $orders = ShopperOrder::where('custid', $custid)->whereIn('id', $orderids)->get();
                $payoption = $orders[0]->payoption;
                
		    	$cartCount = ShopperRequest::where('custid', $custid)->where('status', 'pending')->count();
		    	return view('customer.shopper.response')->with(['payoption' => $payoption, 'orders' => $orders, 'cartCount' => $cartCount]);
            }else{
            	return redirect(route('personal.shopper.history'));
            }
        }else{
        	return redirect(route('personal.shopper.history'));
        }
    }

    public function orderInvoice(Request $request)
    {
        $custid = Auth::id();
        $refnum = $request->refnum;
        $customer = Customer::find($custid);
        $order = ShopperOrder::where('custid', $custid)->where('refnum', $refnum)->first();
        if (!empty($order)) {
            return view('customer.shopper.invoice')->with(['order'=>$order, 'customer' => $customer]);
        }else{
            return redirect(route('personal.shopper.history'));
        }
    }

    public function cancelShopper(Request $request)
    {
    	$custid = Auth::id();
    	$refnum = $request->refnum;
    	$customer = Customer::find($custid);
    	$order = ShopperOrder::where('custid', $custid)->where('refnum', $refnum)->first();
    	if (!empty($order)) {
            ShopperOrder::where('custid', $custid)->where('id', $order->id)->update(['status' => 'canceled']);
            ShopperRequest::where('custid', $custid)->where('orderid', $order->id)->update(['status' => 'canceled']);
            return redirect(route('personal.shopper.history'));
    	}else{
    		return redirect(route('personal.shopper.history'));
    	}
    }

    public function shopperHistory()
    {
    	$custid = Auth::id();
    	$cartCount = ShopperRequest::where('custid', $custid)->where('status', 'pending')->count();
    	$orders = ShopperOrder::where('custid', $custid)->where('status', "!=" ,'pending')->get();
    	return view('customer.shopper.history')->with(['cartCount'=>$cartCount, 'orders' => $orders]);
    }

    public function randomUnique($size) {
        $alpha_key = '';
        $keys = range('A', 'Z');
        for ($i = 0; $i < 2; $i++) {
            $alpha_key .= $keys[array_rand($keys)];
        }
        $length = $size - 2;
        $key = '';
        $keys = range(0, 9);
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $alpha_key . $key;
    }
}
