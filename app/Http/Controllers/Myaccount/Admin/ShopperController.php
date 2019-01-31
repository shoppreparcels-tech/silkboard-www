<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Mail\Myaccount\ShopperOrderPayReceived;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Customer;
use App\ShopperRequest;
use App\ShopperOrder;
use App\ShopperRequestSelf;
use App\ShopperOrderSelf;
use App\ShopperPayment;
use App\ShopperBalance;
use App\ShopperMail;
use App\WalletTransaction;

use App\Mail\Myaccount\SelfShopperOrderPayReceived;
use App\Mail\Myaccount\SelfShopperOrderPayNotReceived;
use App\Mail\Myaccount\ShopperOrderCancelled;
use App\Mail\Myaccount\SelfShopperOrderCancelled;
use App\Mail\Myaccount\Admin\ShopperOrderProcessed;

class ShopperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function orders()
    {
    	$orders = ShopperOrder::where('status', '!=','pending')->orderBy('created_at', 'desc')->get();
    	return view('myaccount.admin.shopper.orders')->with(['orders'=>$orders]);
    }
    public function awaitingOrders()
    {
        $orders = ShopperOrder::where('status', 'awaiting')->orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.shopper.awaiting')->with(['orders'=>$orders]);
    }
    public function receivedOrders()
    {
        $orders = ShopperOrder::where('status', 'received')->orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.shopper.received')->with(['orders'=>$orders]);
    }
    public function processedOrders()
    {
        $orders = ShopperOrder::where('status', 'processed')->orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.shopper.processed')->with(['orders'=>$orders]);
    }
    public function canceledOrders()
    {
        $orders = ShopperOrder::where('status', 'canceled')->orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.shopper.canceled')->with(['orders'=>$orders]);
    }
    public function completedOrders()
    {
        $orders = ShopperOrder::where('status', 'completed')->orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.shopper.completed')->with(['orders'=>$orders]);
    }

    public function viewOrder(Request $request)
    {
    	$orderid = $request->order_id;
    	$order = ShopperOrder::find($orderid);
    	if (empty($order)) {
    		return redirect()->route('admin.shopper.orders');
    	}

    	$customer = Customer::find($order->customer_id);

        $mails = ShopperMail::where('personal_shopper_id', $order->id)->where('type', 'shoppre')->get();

    	return view('myaccount.admin.shopper.order')->with(['order'=>$order, 'customer'=>$customer, 'mails' => $mails]);
    }

    public function markUnread(Request $request)
    {
        $order = ShopperOrder::find($request->order_id);
        $order->admin_read = "no";
        $order->save();
        return redirect()->route('admin.shopper.orders');
    }

    public function updateOrder(Request $request)
    {
    	$this->validate($request, [
            'order_id' => 'required',
            'status' => 'required',
        ]);

        $orderid = $request->order_id;

        $order = ShopperOrder::find($orderid);
        if (empty($order)) {
    		return redirect()->route('admin.shopper.orders');
    	}

        $customer = Customer::find($order->customer_id);

        if($request->hasFile('invoice')) {
            $filename = '';
            $file = $request->file('invoice');
            $destinationPath = '/uploads/shopper/'.$order->id.'/';
//            $destinationPath = '/uploads/shopper/seller/'.$order->id.'/';
            $filename = "PSPAID-".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
            $order->seller_invoice = $filename;
        }
        $order->amount_paid = $request->amount_paid;
        $total_wallet_amount = $customer->balance->amount;
        $shoppre_balance = ShopperBalance::find($customer->balance->id);
        $transactions = new WalletTransaction();

    	switch ($request->status) {
            case 'awaiting':
                $order->status = 'awaiting';
            break;
            case 'received':
                $order->status = 'received';
                $order->payment_status = 'success';

            break;
            case 'processed':
                if (empty($order->amount_paid) || empty($order->seller_invoice)) {
                    return redirect()->back()->with('error', 'Please update final amount paid to website and seller invoice to proceed!');
                }
                $order->status = 'processed';
                $customer_paid_to_website =$order->total_price+$order->sales_tax+$order->delivery_charge;
                $wallet_added = $customer_paid_to_website - $order->amount_paid;
                $shoppre_balance->amount = $total_wallet_amount+$wallet_added;
                $transactions->description = 'personal shopper ';
                $transactions->amount = $wallet_added;
                $transactions->customer_id = $customer->id;
                $transactions->wallet_id = $customer->balance->id;
                $transactions->save();
                $shoppre_balance->save();
            break;
            case 'canceled':
                $order->status = 'canceled';
                ShopperRequest::where('order_id', $orderid)->update(['status'=>'canceled']);
            break;
            case 'completed':
                $order->status = 'completed';
            break;
        }

        $order->save();

        if ($request->status == 'received') {
            Mail::to($customer->email)->send(new ShopperOrderPayReceived($order, $customer));
            if( count(Mail::failures()) == 0 ) {
                $psmail = new ShopperMail;
                $psmail->type = 'shoppre';
                $psmail->personal_shopper_id = $order->id;
                $psmail->condition = 'received';
                $psmail->save();
            }
        }

        if ($request->status == 'canceled') {
            Mail::to($customer->email)->send(new ShopperOrderCancelled($order, $customer));
            if( count(Mail::failures()) == 0 ) {
                $psmail = new ShopperMail;
                $psmail->type = 'shoppre';
                $psmail->personal_shopper_id = $order->id;
                $psmail->condition = 'canceled';
                $psmail->save();
            }
        }

        if ($request->status == 'processed') {
            Mail::to($customer->email)->send(new ShopperOrderProcessed($order, $customer));
            if( count(Mail::failures()) == 0 ) {
                $psmail = new ShopperMail;
                $psmail->type = 'shoppre';
                $psmail->personal_shopper_id = $order->id;
                $psmail->condition = 'processed';
                $psmail->save();
            }
        }

        return redirect()->back()->with('message', 'Order status updated!');
    }

    public function updateOrderItem(Request $request)
    {
        $this->validate($request, [
            'reqid' => 'required',
            'status' => 'required',
        ]);

        $item = ShopperRequest::find($request->reqid);
        $item->status = $request->status;
        $item->save();

        return redirect()->back()->with('message', 'Order item status updated!');
    }

    public function selfOrders()
    {
        $orders = ShopperOrderSelf::orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.shopper.self.orders')->with(['orders'=>$orders]);
    }

    public function viewSelfOrder(Request $request)
    {
        $orderid = $request->order_id;
        $order = ShopperOrderSelf::find($orderid);
        if (empty($order)) {
            return redirect()->route('admin.shopper.self.orders');
        }
        $mails = ShopperMail::where('personal_shopper_id', $order->id)->where('type', 'self')->get();

        $customer = Customer::find($order->customer_id);

        return view('myaccount.admin.shopper.self.order')->with(['order'=>$order, 'customer'=>$customer, 'mails' => $mails]);
    }

    public function updateSelfOrder(Request $request)
    {
        $this->validate($request, [
            'order_id' => 'required',
            'status' => 'required',
        ]);

        $orderid = $request->order_id;

        $order = ShopperOrderSelf::find($orderid);
        if (empty($order)) {
            return redirect()->route('admin.shopper.self.orders');
        }

        $customer = Customer::find($order->customer_id);

        switch ($request->status) {
            case 'awaiting':
                $order->status = 'awaiting';
            break;
            case 'received':
                $order->status = 'received';
                Mail::to($customer->email)->send(new SelfShopperOrderPayReceived($order, $customer));
                if( count(Mail::failures()) == 0 ) {
                    $psmail = new ShopperMail;
                    $psmail->type = 'self';
                    $psmail->personal_shopper_id = $order->id;
                    $psmail->condition = 'received';
                    $psmail->save();
                }
            break;
            case 'canceled':
                $order->status = 'canceled';
                Mail::to($customer->email)->send(new SelfShopperOrderCancelled($order, $customer));
                if( count(Mail::failures()) == 0 ) {
                    $psmail = new ShopperMail;
                    $psmail->type = 'self';
                    $psmail->personal_shopper_id = $order->id;
                    $psmail->condition = 'canceled';
                    $psmail->save();
                }
            break;
            case 'completed':
                $order->status = 'completed';
            break;
            case 'not_received':
                Mail::to($customer->email)->send(new SelfShopperOrderPayNotReceived($order, $customer));
                if( count(Mail::failures()) == 0 ) {
                    $psmail = new ShopperMail;
                    $psmail->type = 'self';
                    $psmail->personal_shopper_id = $order->id;
                    $psmail->condition = 'not_received';
                    $psmail->save();
                }
                return redirect()->back()->with('message', 'Payment Status Notification Sent!');
            break;
        }

        $order->save();

        return redirect()->back()->with('message', 'Order status updated!');
    }

    public function updateSelfItem(Request $request)
    {
        $this->validate($request, [
            'reqid' => 'required',
            'status' => 'required',
        ]);

        $item = ShopperRequestSelf::find($request->reqid);
        $item->status = $request->status;
        $item->save();

        return redirect()->back()->with('message', 'Order item status updated!');
    }
}
