<?php

namespace App\Http\Controllers\Myaccount\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Asana\AsanaTaskOperations;
use Auth;
use App\Customer;
use App\ShopperRequest;
use App\ShopperOrder;
use App\ShopperRequestSelf;
use App\ShopperOrderSelf;
use App\AdminNotification;
use App\Country;

use App\Mail\Myaccount\ShopperOrderReceived;
use App\Mail\Myaccount\ShopperOrderCancelled;
use App\Mail\Myaccount\SelfShopperOrderReceived;
use App\Mail\Myaccount\SelfShopperOrderCancelled;

class ShopperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function termsConditions()
    {
        return view('myaccount.customer.shopper.terms-and-conditions');
    }

    public function personalShopper()
    {
    	$cartCount = ShopperRequest::where('customer_id', Auth::id())->where('status', 'pending')->count();
    	return view('myaccount.customer.shopper.index')->with('cartCount', $cartCount);
    }

    public function asanaTrackingOrder(Request $request) {

        if (!empty($request->id)) {
            $shopper_order = ShopperOrder::where('id', '=', $request->id)->first();
            $shopper_order->asana_url = $request->asana_url;
            $shopper_order->save();
            return response()->json([ 'error'=>'0', 'message'=>'success']);
        }
    }

    public function orderForm()
    {
    	$cartCount = ShopperRequest::where('customer_id', Auth::id())->where('status', 'pending')->count();
    	$cart = ShopperOrder::where('customer_id', Auth::id())->where('status', 'pending')->first();
        $countries = Country::orderBy('name', 'asc')->get();
        return view('myaccount.customer.shopper.orderform')->with(['cartCount' => $cartCount, 'cart' => $cart, 'countries' => $countries]);
    }

    public function submitForm(Request $request)
    {
    	$this->validate($request, [
            'type' => 'required',
            'phone' => 'required',
            'country_code' => 'required',
            'quantity' => 'required|integer|min:1',
            'url' => 'required|url',
            'item_name' => 'required|max:250',
            'price' => 'required|numeric',
            'if_item_unavailable' => 'required',
        ]);

        $customer_id = Auth::id();
        $phone = $request->phone;
        $country_code = $request->country_code;

        $url = $request->url;
        $domain = parse_url($url, PHP_URL_HOST);
        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
		    $sellerHost =  $regs['domain'];
		}

		$price  = trim(str_replace(',', '', $request->price));

		$checkOrder = ShopperOrder::where('seller', $sellerHost)
									->where('customer_id', $customer_id)
									->where('status', 'pending')
									->first();
		if (!empty($checkOrder)) {
			$orderid = $checkOrder->id;
			$shopOrder= ShopperOrder::find($orderid);
	        $shopOrder->total_quantity = $request->quantity + $checkOrder->total_quantity;
	        $total_price = ($request->quantity * $price) + $checkOrder->total_price;
	        $shopOrder->total_price = $total_price;

	        $pscost = (7 / 100) * $total_price;
	        $pscost = round($pscost);
	        if ($pscost < 200) { $pscost = 200; }
            if ($shopOrder->total_quantity > 15) {
                $pscost += ($shopOrder->total_quantity - 15) * 50;
            }
	        $shopOrder->personal_shopper_cost = $pscost;
	        $shopOrder->sub_total = $total_price + $pscost;
	        $shopOrder->save();
		}else{
			$shopOrder = new ShopperOrder;
	        $shopOrder->customer_id = $customer_id;
	        $shopOrder->seller = $sellerHost;
	        do
	        {
	            $reference_number = "P".$customer_id.rand(100, 999);
	            $order_ref = ShopperOrder::where('reference_number', $reference_number)->get();
	        }
	        while(!$order_ref->isEmpty());

	        $shopOrder->reference_number = $reference_number;
	        $shopOrder->total_quantity = $request->quantity;
	        $total_price = $request->quantity * $price;
	        $shopOrder->total_price = $total_price;

	        $pscost = (7 / 100) * $total_price;
	        $pscost = round($pscost);
	        if ($pscost < 200) { $pscost = 200; }

            if ($shopOrder->total_quantity > 15) {
                $pscost += ($shopOrder->total_quantity - 15) * 50;
            }

	        $shopOrder->personal_shopper_cost = $pscost;

	        $shopOrder->sub_total = $total_price + $pscost;
	        $shopOrder->status = 'pending';
	        $shopOrder->phone = $phone;
	        $shopOrder->country_code = $country_code;
            $customer = Customer::find($customer_id);
            $ps_name = $customer->name.'-'.$shopOrder->customer_id.' - PS Order';
            $ps_details = "Order Number - ".$shopOrder->reference_number." , seller name - ".$shopOrder->seller." , Phone - ".$shopOrder->country_code." - ".$shopOrder->phone;
            $response = AsanaTaskOperations::createTask($ps_name, $ps_details, "P");
            $phpArray = json_decode($response,true);
            $shopOrder->asana_url = "https://app.asana.com/0/1106432437090454/".$phpArray['data']['id'];
	        $shopOrder->save();
	        $orderid = $shopOrder->id;
		}

        $shopReq = new ShopperRequest;
        $shopReq->customer_id = $customer_id;
        $shopReq->order_id = $orderid;
        $shopReq->type = $request->type;
        $shopReq->quantity = $request->quantity;
        $shopReq->url = $request->url;
        $shopReq->item_code = $request->item_code;
        $shopReq->item_name = $request->item_name;
        $shopReq->item_color = $request->item_color;
        $shopReq->item_size = $request->item_size;
        $shopReq->price = $price;
        $shopReq->total_price = $price * $request->quantity;
        $shopReq->note = $request->note;
        $shopReq->if_item_unavailable = $request->if_item_unavailable;
        $shopReq->status = 'pending';
        $shopReq->save();

        return redirect(route('personal.shopper.cart'));
    }

    public function shopperCart()
    {
    	$customer_id = Auth::id();
    	$orders = ShopperOrder::where('customer_id', $customer_id)->where('status', 'pending')->get();
    	$cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
    	return view('myaccount.customer.shopper.cart')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function editOrder(Request $request)
    {
        $customer_id = Auth::id();
        $cartCount = ShopperRequest::where('customer_id', Auth::id())->where('status', 'pending')->count();
        $order = ShopperRequest::where('customer_id', $customer_id)->where('id', $request->reqid)->where('status', 'pending')->first();
        return view('myaccount.customer.shopper.editorder')->with(['cartCount' => $cartCount, 'order' => $order]);
    }

    public function updateOrder(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'quantity' => 'required|integer|min:1',
            'url' => 'required|url',
            'item_name' => 'required|max:250',
            'price' => 'required|numeric',
            'if_item_unavailable' => 'required',
        ]);

        $customer_id = Auth::id();
        $checReq = ShopperRequest::where('customer_id', $customer_id)->where('id', $request->reqid)->first();
        if (!empty($checReq)) {
            $url = $request->url;
            $domain = parse_url($url, PHP_URL_HOST);
            if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
                $newHost =  $regs['domain'];
            }
            $checkOrder = ShopperOrder::where('seller', $newHost)
                                        ->where('customer_id', $customer_id)
                                        ->where('status', 'pending')
                                        ->first();

            $oldurl = $checReq->url;
            $olddomain = parse_url($oldurl, PHP_URL_HOST);
            if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $olddomain, $regs)){
                $oldHost =  $regs['domain'];
            }
            $oldOrder = ShopperOrder::where('seller', $oldHost)
                                        ->where('customer_id', $customer_id)
                                        ->where('status', 'pending')
                                        ->first();


            if ($newHost == $oldHost) {
                if (!empty($checkOrder)) {

                    $orderid = $checkOrder->id;
                    $shopOrder= ShopperOrder::find($orderid);

                    $newqty = ($checkOrder->total_quantity - $checReq->quantity) + $request->quantity;

                    $price  = trim(str_replace(',', '', $request->price));
                    $newprice = $checkOrder->total_price - $checReq->total_price;
                    $newprice += $request->quantity * $price;

                    $shopOrder->total_price = $newprice;
                    $shopOrder->total_quantity = $newqty;

                    $pscost = (7 / 100) * $newprice;
                    $pscost = round($pscost);
                    if ($pscost < 200) { $pscost = 200; }

                    if ($shopOrder->total_quantity > 15) {
                        $pscost += ($shopOrder->total_quantity - 15) * 50;
                    }

                    $shopOrder->personal_shopper_cost = $pscost;
                    $shopOrder->sub_total = $newprice + $pscost;
                    $shopOrder->save();

                }else{
                    return redirect(route('personal.shopper.cart'));
                }
            }else{

                $checkQty = $oldOrder->total_quantity - $checReq->quantity;
                if ($checkQty <= 0) {
                    ShopperOrder::find($oldOrder->id)->delete();
                }

                $udpateOrder = ShopperOrder::where('seller', $newHost)
                                        ->where('customer_id', $customer_id)
                                        ->where('status', 'pending')
                                        ->first();

                if (!empty($udpateOrder)) {

                    $orderid = $udpateOrder->id;
                    $shopOrder= ShopperOrder::find($orderid);

                    $newqty = $udpateOrder->total_quantity + $request->quantity;
                    $price  = trim(str_replace(',', '', $request->price));
                    $newprice = $udpateOrder->total_price;
                    $newprice += $request->quantity * $price;

                    $shopOrder->total_price = $newprice;
                    $shopOrder->total_quantity = $newqty;

                    $pscost = (7 / 100) * $newprice;
                    $pscost = round($pscost);
                    if ($pscost < 200) { $pscost = 200; }

                    if ($shopOrder->total_quantity > 15) {
                        $pscost += ($shopOrder->total_quantity - 15) * 50;
                    }

                    $shopOrder->personal_shopper_cost = $pscost;
                    $shopOrder->sub_total = $newprice + $pscost;
                    $shopOrder->save();

                }else{

                    $shopOrder = new ShopperOrder;
                    $shopOrder->customer_id = $customer_id;
                    $shopOrder->seller = $newHost;
                    do
                    {
                        $reference_number = "P".$customer_id.rand(100, 999);
                        $order_ref = ShopperOrder::where('reference_number', $reference_number)->get();
                    }
                    while(!$order_ref->isEmpty());

                    $shopOrder->reference_number = $reference_number;
                    $shopOrder->total_quantity = $request->quantity;
                    $price  = trim(str_replace(',', '', $request->price));
                    $total_price = $request->quantity * $price;
                    $shopOrder->total_price = $total_price;

                    $pscost = (7 / 100) * $total_price;
                    $pscost = round($pscost);
                    if ($pscost < 200) { $pscost = 200; }

                    if ($shopOrder->total_quantity > 15) {
                        $pscost += ($shopOrder->total_quantity - 15) * 50;
                    }

                    $shopOrder->personal_shopper_cost = $pscost;

                    $shopOrder->sub_total = $total_price + $pscost;
                    $shopOrder->status = 'pending';
                    $shopOrder->save();
                    $orderid = $shopOrder->id;
                }
            }

            $shopReq = ShopperRequest::find($checReq->id);
            $shopReq->order_id = $orderid;
            $shopReq->type = $request->type;
            $shopReq->quantity = $request->quantity;
            $shopReq->url = $request->url;
            $shopReq->item_code = $request->item_code;
            $shopReq->item_name = $request->item_name;
            $shopReq->item_color = $request->item_color;
            $shopReq->item_size = $request->item_size;
            $shopReq->price = $price;
            $shopReq->total_price = $price * $request->quantity;
            $shopReq->note = $request->note;
            $shopReq->if_item_unavailable = $request->if_item_unavailable;
            $shopReq->save();

            return redirect(route('personal.shopper.cart'));

        }else{
            return redirect(route('personal.shopper.form'));
        }
    }

    public function deleteReq(Request $request){
        $customer_id = Auth::id();
        $checReq = ShopperRequest::where('customer_id', $customer_id)->where('id', $request->reqid)->first();

        if (!empty($checReq)) {

            $oldurl = $checReq->url;
            $olddomain = parse_url($oldurl, PHP_URL_HOST);
            if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $olddomain, $regs)){
                $oldHost =  $regs['domain'];
            }
            $order = ShopperOrder::where('seller', $oldHost)
                                        ->where('customer_id', $customer_id)
                                        ->where('status', 'pending')
                                        ->first();

            $newqty = $order->total_quantity - $checReq->quantity;
            $newprice = $order->total_price - $checReq->total_price;

            if ($newqty <= 0) {
                ShopperOrder::find($order->id)->delete();
                ShopperRequest::find($checReq->id)->delete();
            }else{

                $shopOrder= ShopperOrder::find($order->id);
                $shopOrder->total_price = $newprice;
                $shopOrder->total_quantity = $newqty;

                $pscost = (7 / 100) * $newprice;
                $pscost = round($pscost);
                if ($pscost < 200) { $pscost = 200; }

                if ($shopOrder->total_quantity > 15) {
                    $pscost += ($shopOrder->total_quantity - 15) * 50;
                }
                $subtotal=$newprice+$pscost;
                $shopOrder->sub_total=$subtotal;
                $shopOrder->personal_shopper_cost = $pscost;
                $shopOrder->save();
                ShopperRequest::find($checReq->id)->delete();
            }

            return redirect(route('personal.shopper.cart'));
        }else{
            return redirect(route('personal.shopper.cart'));
        }
    }

    public function deleteOrder(Request $request){
        $customer_id = Auth::id();
        $order = ShopperOrder::where('id', $request->order_id)->where('customer_id', $customer_id)->where('status', 'pending')->first();
        if (!empty($order)) {
            foreach ($order->requests as $orderReq) {
                ShopperRequest::find($orderReq->id)->delete();
            }
            ShopperOrder::find($order->id)->delete();

            return redirect(route('personal.shopper.cart'));
        }
    }

    public function shopperOptions()
    {
    	$customer_id = Auth::id();
    	$orders = ShopperOrder::where('customer_id', $customer_id)->where('status', 'pending')->get();
    	$cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
    	return view('myaccount.customer.shopper.options')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function submitOptions(Request $request)
    {
    	$customer_id = Auth::id();
    	$orders = ShopperOrder::where('customer_id', $customer_id)->where('status', 'pending')->get();
    	foreach ($orders as $order) {
    		$shopOrder = ShopperOrder::find($order->id);
            $subtotal = $shopOrder->total_price;
    		$sale_tax = $request->sales_tax[$order->id];
    		$ship_charge = $request->delivery_charge[$order->id];

    		if (!empty($sale_tax)) {
    			$shopOrder->sales_tax = $sale_tax;
    			$subtotal += $sale_tax;
    		}
    		if (!empty($ship_charge)) {
    			$shopOrder->delivery_charge = $ship_charge;
    			$subtotal += $ship_charge;
    		}
            if (!empty($shopOrder->personal_shopper_cost)) {
                $subtotal += $shopOrder->personal_shopper_cost;
            }
    		$shopOrder->sub_total = $subtotal;

    		$shopOrder->promo_code = $request->promo_code[$order->id];
    		$shopOrder->promo_info = $request->promo_info[$order->id];
    		$shopOrder->if_promo_unavailable = $request->if_promo_unavailable[$order->id];
    		$shopOrder->instruction = $request->instruction[$order->id];
    		$shopOrder->save();
    	}

    	return redirect(route('personal.shopper.summary'));
    }

    public function shopperSummary()
    {
    	$customer_id = Auth::id();
    	$cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
    	$orders = ShopperOrder::where('customer_id', $customer_id)->where('status', 'pending')->get();
    	return view('myaccount.customer.shopper.summary')->with(['orders'=>$orders, 'cartCount' => $cartCount]);
    }

    public function shopperPayment()
    {
    	$customer_id = Auth::id();
    	$cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
    	$orders = ShopperOrder::where('customer_id', $customer_id)->where('status', 'pending')->get();
    	return view('myaccount.customer.shopper.payment')->with(['orders'=>$orders, 'cartCount' => $cartCount,'reference_number'=>'']);
    }

    public function submitPayment(Request $request)
    {
        $customer_id = Auth::id();
        $orders = '';
        if ($request->hdn_reference_number)
        {
            $orders = ShopperOrder::where('customer_id', $customer_id)
                ->where('reference_number', '=',$request->hdn_reference_number)
                ->where('payment_status', '=','pending')
                ->orWhere('status', '=', 'pending')
                ->get();
        }
        else
        {
            $orders = ShopperOrder::where('customer_id', $customer_id)
                ->where('payment_status', '=','pending')
                ->orWhere('status', '=', 'pending')
                ->get();
        }
    	if (!$orders->isEmpty()) {
            $orderids = array();
            foreach ($orders as $order) {
                $orderids[] = $order->id;
            }
            $request->session()->put(['orderids' => $orderids]);

    		switch ($request->payment_gateway_name) {
                case 'card':
                        return redirect()->route('shopper.payment.axis.start');
                    break;

	    		case 'wire':
                    ShopperOrder::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'wire', 'payment_status' => 'pending','status' => 'awaiting', 'created_at' => date("Y-m-d H:i:s") ]);
                    ShopperRequest::where('customer_id', $customer_id)->whereIn('order_id', $orderids)->update(['status' => 'awaiting']);

                    foreach ($orders as $order) {
                        $notify = new AdminNotification;
                        $notify->customer_id = Auth::id();
                        $notify->action_type = 'shopper';
                        $notify->action_id = $order->id;
                        $notify->action_description = 'Selected Wire Transfer as Payment option - Order# '.$order->reference_number;
                        $notify->save();
                    }

                    return redirect()->route('personal.shopper.response');
	    		break;

                case 'paypal':
                        return redirect()->route('shopper.payment.paypal.start');
                    break;

                case 'paytm':
                        return redirect()->route('shopper.payment.paytm.start');
                    break;

	    		default:
	    				return redirect(route('personal.shopper.payment'));
	    			break;
	    	}
    	}else{
    		return redirect(route('personal.shopper.cart'));
    	}
    }

    public function shopperResponse(Request $request)
    {
    	if ($request->session()->has('orderids')) {
            if ($request->session()->exists('orderids')) {
            	$customer_id = Auth::id();
                $customer = Customer::find($customer_id);
                $orderids = $request->session()->pull('orderids');

                $orders = ShopperOrder::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();

                foreach ($orders as $order) {

                    $notify = new AdminNotification;
                    $notify->customer_id = Auth::id();
                    $notify->action_type = 'shopper';
                    $notify->action_id = $order->id;
                    $notify->action_description = 'Personal Shopper request submitted - Order# '.$order->reference_number;
                    $notify->save();

                    Mail::to($customer->email)->bcc('support@shoppre.com')->send(new ShopperOrderReceived($order, $customer));
                }

                $payment_gateway_name = $orders[0]->payment_gateway_name;

		    	$cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
		    	return view('myaccount.customer.shopper.response')->with(['payment_gateway_name' => $payment_gateway_name, 'orders' => $orders, 'cartCount' => $cartCount]);
            }else{
            	return redirect(route('personal.shopper.history'));
            }
        }else{
        	return redirect(route('personal.shopper.history'));
        }
    }

    public function orderInvoice(Request $request)
    {
        $customer_id = Auth::id();
        $reference_number = $request->reference_number;
        $customer = Customer::find($customer_id);
        $order = ShopperOrder::where('customer_id', $customer_id)->where('reference_number', $reference_number)->first();
        if (!empty($order)) {
            return view('myaccount.customer.shopper.invoice')->with(['order'=>$order, 'customer' => $customer]);
        }else{
            return redirect(route('personal.shopper.history'));
        }
    }

    public function cancelShopper(Request $request)
    {
    	$customer_id = Auth::id();
    	$reference_number = $request->reference_number;
    	$customer = Customer::find($customer_id);
    	$order = ShopperOrder::where('customer_id', $customer_id)->where('reference_number', $reference_number)->first();
    	if (!empty($order)) {
            ShopperOrder::where('customer_id', $customer_id)->where('id', $order->id)->update(['status' => 'canceled']);
            ShopperRequest::where('customer_id', $customer_id)->where('order_id', $order->id)->update(['status' => 'canceled']);
            Mail::to($customer->email)->send(new ShopperOrderCancelled($order, $customer));

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'shopper';
            $notify->action_id = $order->id;
            $notify->action_description = 'Personal Shopper request cancelled - Order# '.$order->reference_number;
            $notify->save();

            return redirect(route('personal.shopper.history'));
    	}else{
    		return redirect(route('personal.shopper.history'));
    	}
    }

    public function orderPayChange(Request $request)
    {
        $customer_id = Auth::id();
        if($request->reference_number)
        {
            $shopper_order = ShopperOrder::where('reference_number',$request->reference_number)->first();
            $cartCount = ShopperRequest::where('customer_id', $customer_id)
                ->where('status', 'pending')
                ->where('order_id', $shopper_order->id)
                ->count();
            $orders = ShopperOrder::where('reference_number', $request->reference_number)
                ->where('customer_id', $customer_id)
                ->get();
        }
        else
        {
            $cartCount = ShopperRequest::where('customer_id', $customer_id)
                ->where('status', 'pending')
                ->count();
            $orders = ShopperOrder::where('reference_number', $request->reference_number)
                ->where('customer_id', $customer_id)
                ->get();
        }
//        $cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
//        $orders = ShopperOrder::where('reference_number', $request->reference_number)->where('customer_id', $customer_id)->get();
        return view('myaccount.customer.shopper.payment')->with([
            'orders'=>$orders,
            'cartCount' => $cartCount,
            'reference_number' => $request->reference_number
        ]);
    }

    public function shopperHistory()
    {
    	$customer_id = Auth::id();
    	$cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
    	$orders = ShopperOrder::where('customer_id', $customer_id)->where('status', "!=" ,'pending')->orderBy('created_at', 'desc')->get();
    	return view('myaccount.customer.shopper.history')->with(['cartCount'=>$cartCount, 'orders' => $orders]);
    }

    public function asanaTrackingSelfOrder(Request $request) {

        if (!empty($request->id)) {
            $self_shopper_order = ShopperOrderSelf::where('id', '=', $request->id)->first();
            $self_shopper_order->asana_url = $request->asana_url;
            $self_shopper_order->save();
            return response()->json([ 'error'=>'0', 'message'=>'success']);
        }
    }

    public function selfOrderSubmit(Request $request)
    {
        $customer_id = Auth::id();
        $phone = $request->phone;
        $country_code = $request->country_code;
        $orderids = array();
        $sellers = array();
        $i = 0;
        foreach ($request->url as $key => $item_url) {

            $domain = parse_url($item_url, PHP_URL_HOST);
            if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
                $sellerHost =  $regs['domain'];
            }

            $sellers[$sellerHost][$i]['url'] = $item_url;
            $sellers[$sellerHost][$i]['price'] = $request->amount[$key];
            $sellers[$sellerHost][$i]['quantity'] = $request->quantity[$key];
            $sellers[$sellerHost][$i]['invoice'] = $request->file('document')[$key];

            $i++;
        }

        foreach ($sellers as $seller => $selfReqs) {

            $total_quantity = array_sum(array_column($selfReqs, 'quantity'));
            $total_price = array_sum(array_column($selfReqs, 'price'));
            $total_fee = 0;
            $grand_total = 0;

            $order = new ShopperOrderSelf;
            $order->customer_id = $customer_id;

            do
            {
                $reference_number = "SELF".$customer_id.rand(100, 999);
                $order_ref = ShopperOrderSelf::where('reference_number', $reference_number)->get();
            }
            while(!$order_ref->isEmpty());

            $order->reference_number = $reference_number;


            $order->seller = $seller;
            $order->total_quantity = $total_quantity;
            $order->total_price = $total_price;

            $total_fee = (7 / 100) * $total_price;
            if ($total_fee < 200) { $total_fee = 200; }

            if($total_quantity > 15){
                $total_fee += ($total_quantity - 15) * 50;
            }

            $order->total_fee = $total_fee;
            $order->grand_total = $total_fee + $total_price;
            $order->status = 'submit_pay';
            $order->phone = $phone;
            $order->country_code = $country_code;
            $customer = Customer::find($customer_id);
            $self_name = $customer->name.'-'.$order->customer_id.' - PS Self Order';
            $self_details = "Order Number - ".$order->reference_number." , seller name - ".$order->seller." , Phone - ".$order->country_code." - ".$order->phone;
            $response = AsanaTaskOperations::createTask($self_name, $self_details, "P");
            $phpArray = json_decode($response,true);
            $order->asana_url = "https://app.asana.com/0/1106432437090454/".$phpArray['data']['id'];
            $order->save();

            $orderid = $order->id;

            foreach ($selfReqs as $self) {
                $selfReq = new ShopperRequestSelf;
                $selfReq->customer_id = $customer_id;
                $selfReq->order_id = $orderid;
                $selfReq->url = $self['url'];
                $selfReq->price = $self['price'];
                $selfReq->quantity = $self['quantity'];

                $file = $self['invoice'];
                $destinationPath = "/uploads/shopper/$orderid";
//                $destinationPath = "/uploads/shopper/self/invoice/$orderid";
                $filename = "INVC-".uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path(). $destinationPath, $filename);

                $selfReq->invoice = $filename;
                $selfReq->status = 'pending';
                $selfReq->save();
            }

            $orderids[] = $orderid;
        }

        $request->session()->put(['orderids' => $orderids]);

        return redirect(route('shopper.self.pay'));
    }

    public function selfOrderPayRedirect(Request $request)
    {
        $customer_id = Auth::id();
        $order = ShopperOrderSelf::where('reference_number', $request->reference_number)->where('customer_id', $customer_id)->first();
        if (!empty($order)) {
            $orderids = array($order->id);
            $request->session()->put(['orderids' => $orderids]);
            return redirect(route('shopper.self.pay'));
        }else{
            return redirect(route('shopper.self.history'));
        }
    }

    public function selfOrderPayment(Request $request)
    {
        if ($request->session()->has('orderids')) {
            if ($request->session()->exists('orderids')) {
                $orderids = $request->session()->get('orderids');
                $customer_id = Auth::id();
                $cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
                $orders = ShopperOrderSelf::whereIn('id', $orderids)->where('customer_id', $customer_id)->get();
                return view('myaccount.customer.shopper.self.payment')->with(['orders'=>$orders, 'cartCount' => $cartCount]);

            }else{
                return redirect(route('shopper.self.history'));
            }
        }else{
            return redirect(route('shopper.self.history'));
        }
    }

    public function selfOrderPaySubmit(Request $request)
    {

        if ($request->session()->has('orderids')) {
            if ($request->session()->exists('orderids')) {
                $orderids = $request->session()->get('orderids');
                $customer_id = Auth::id();
                $orders = ShopperOrderSelf::whereIn('id', $orderids)
                    ->where('customer_id', $customer_id)
                    ->get();

                if (!$orders->isEmpty()) {

                    switch ($request->payment_gateway_name) {
                        case 'card':
                                return redirect()->route('shopper.self.axis.start');
                            break;

                        case 'wire':
                            ShopperOrderSelf::where('customer_id', $customer_id)
                                ->whereIn('id', $orderids)
                                ->update([
                                    'payment_gateway_name' => 'wire',
                                    'status' => 'awaiting',
                                    'created_at' => date("Y-m-d H:i:s")
                                ]);

                            foreach ($orders as $order) {
                                $notify = new AdminNotification;
                                $notify->customer_id = Auth::id();
                                $notify->action_type = 'selfshopper';
                                $notify->action_id = $order->id;
                                $notify->action_description = 'Selected Wire Transfer as payment option - Order# '.$order->reference_number;
                                $notify->save();
                            }

                            return redirect()->route('shopper.self.response');
                        break;

                        case 'paypal':
                                return redirect()->route('shopper.self.paypal.start');
                            break;

                        case 'paytm':
                                return redirect()->route('shopper.self.paytm.start');
                            break;

                        default:
                                return redirect(route('shopper.self.history'));
                            break;
                    }
                }else{
                    return redirect(route('shopper.self.history'));
                }
            }else{
                return redirect(route('shopper.self.history'));
            }
        }else{
            return redirect(route('shopper.self.history'));
        }
    }

    public function selfOrderResponse(Request $request)
    {
        if ($request->session()->has('orderids')) {
            if ($request->session()->exists('orderids')) {
                $customer_id = Auth::id();
                $customer = Customer::find($customer_id);
                $orderids = $request->session()->pull('orderids');

                $orders = ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();
                foreach ($orders as $order) {

                    $notify = new AdminNotification;
                    $notify->customer_id = Auth::id();
                    $notify->action_type = 'selfshopper';
                    $notify->action_id = $order->id;
                    $notify->action_description = 'Self Shopper request created - Order# '.$order->reference_number;
                    $notify->save();

                    Mail::to($customer->email)->bcc('support@shoppre.com')->send(new SelfShopperOrderReceived($order, $customer));
                }

                $payment_gateway_name = $orders[0]->payment_gateway_name;

                $cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
                return view('myaccount.customer.shopper.self.response')->with(['payment_gateway_name' => $payment_gateway_name, 'orders' => $orders, 'cartCount' => $cartCount]);
            }else{
                return redirect(route('shopper.self.history'));
            }
        }else{
            return redirect(route('shopper.self.history'));
        }
    }

    public function selfOrderHistory()
    {
        $customer_id = Auth::id();
        $cartCount = ShopperRequest::where('customer_id', $customer_id)->where('status', 'pending')->count();
        $orders = ShopperOrderSelf::where('customer_id', $customer_id)->orderBy('created_at', 'desc')->get();
        return view('myaccount.customer.shopper.self.history')->with(['cartCount'=>$cartCount, 'orders' => $orders]);
    }

    public function cancelSelfShopper(Request $request)
    {
        $customer_id = Auth::id();
        $reference_number = $request->reference_number;
        $customer = Customer::find($customer_id);
        $order = ShopperOrderSelf::where('customer_id', $customer_id)->where('reference_number', $reference_number)->first();
        if (!empty($order)) {
            ShopperOrderSelf::where('customer_id', $customer_id)->where('id', $order->id)->update(['status' => 'canceled']);
            Mail::to($customer->email)->send(new SelfShopperOrderCancelled($order, $customer));

            $notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'selfshopper';
            $notify->action_id = $order->id;
            $notify->action_description = 'Self Shopper order cancelled - Order# '.$order->reference_number;
            $notify->save();

            return redirect(route('shopper.self.history'));
        }else{
            return redirect(route('shopper.self.history'));
        }
    }

    public function selfOrderInvoice(Request $request)
    {
        $customer_id = Auth::id();
        $reference_number = $request->reference_number;
        $customer = Customer::find($customer_id);
        $order = ShopperOrderSelf::where('customer_id', $customer_id)->where('reference_number', $reference_number)->first();
        if (!empty($order)) {
            return view('myaccount.customer.shopper.self.invoice')->with(['order'=>$order, 'customer' => $customer]);
        }else{
            return redirect(route('shopper.self.history'));
        }
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
