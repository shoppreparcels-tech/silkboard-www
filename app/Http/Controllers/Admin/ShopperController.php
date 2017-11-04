<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;
use App\ShopperRequest;
use App\ShopperOrder;
use App\ShopperPayment;
use App\ShopperBalance;

class ShopperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function orders()
    {
    	$orders = ShopperOrder::orderBy('updated_at', 'desc')->get();
    	return view('admin.shopper.orders')->with(['orders'=>$orders]);
    }
    public function awaitingOrders()
    {
        $orders = ShopperOrder::where('status', 'awaiting')->orderBy('updated_at', 'desc')->get();
        return view('admin.shopper.awaiting')->with(['orders'=>$orders]);
    }
    public function receivedOrders()
    {
        $orders = ShopperOrder::where('status', 'received')->orderBy('updated_at', 'desc')->get();
        return view('admin.shopper.received')->with(['orders'=>$orders]);
    }
    public function processedOrders()
    {
        $orders = ShopperOrder::where('status', 'processed')->orderBy('updated_at', 'desc')->get();
        return view('admin.shopper.processed')->with(['orders'=>$orders]);
    }
    public function canceledOrders()
    {
        $orders = ShopperOrder::where('status', 'canceled')->orderBy('updated_at', 'desc')->get();
        return view('admin.shopper.canceled')->with(['orders'=>$orders]);
    }
    public function completedOrders()
    {
        $orders = ShopperOrder::where('status', 'completed')->orderBy('updated_at', 'desc')->get();
        return view('admin.shopper.completed')->with(['orders'=>$orders]);
    }

    public function viewOrder(Request $request)
    {
    	$orderid = $request->orderid;
    	$order = ShopperOrder::find($orderid);
    	if (empty($order)) {
    		return redirect()->route('admin.shopper.orders');
    	}

    	$customer = Customer::find($order->custid);
    	return view('admin.shopper.order')->with(['order'=>$order, 'customer'=>$customer]);
    }

    public function updateOrder(Request $request)
    {
    	$this->validate($request, [
            'orderid' => 'required',
            'status' => 'required',
        ]);

        $orderid = $request->orderid;

        $order = ShopperOrder::find($orderid);
        if (empty($order)) {
    		return redirect()->route('admin.shopper.orders');
    	}

    	switch ($request->status) {
            case 'awaiting':
                $order->status = 'awaiting';
                $reqstatus = 'awaiting';
            break;
            case 'received':
                $order->status = 'received';
                $reqstatus = 'received';
            break;
            case 'processed':
                $order->status = 'processed';
                $reqstatus = 'processed';
            break;
            case 'canceled':
                $order->status = 'canceled';
                $reqstatus = 'canceled';
            break;
            case 'completed':
                $order->status = 'completed';
                $reqstatus = 'completed';
            break;
        }

        $order->wallet = $request->wallet;
        $order->save();

        $balance = ShopperBalance::find($order->custid);
        $balance->amount += $request->wallet;
        $balance->save();

        ShopperRequest::where('orderid', $orderid)->update(['status'=>$reqstatus]);

        return redirect()->back()->with('message', 'Order status updated!');
    }
}
