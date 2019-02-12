<?php

namespace App\Http\Controllers\Myaccount\Customer;
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

use App\ShopperBalance;
use App\PromoCode;
use App\PromoCodeApplied;
use App\WalletTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\ShipRequest;
use App\Customer;
use App\ShopperOrder;
use App\ShopperRequest;
use App\ShopperRequestSelf;
use App\ShopperOrderSelf;
use App\AdminNotification;
use App\LockerCharge;
use App\Mail\Myaccount\PaymentFailed;

class PaytmController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:customer');
	}

	public function testForm()
	{
		return view('myaccount.customer.payment.paytm');
	}

    public function lockerGeneartePaymentInitiate(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $ship_request_id = $request->session()->get('ship_request_id');
        $shipment = ShipRequest::find($ship_request_id);
        if (!empty($customer)) {

            $locker_charge = LockerCharge::orderBy('id','desc')->first();
            $final_amount = $locker_charge->charge;
            $payment_gateway_fee = (3/100) * $final_amount;
            $final_amount += $payment_gateway_fee;

            $checkSum = "";
            $paramList = array();

            $ORDER_ID = "PAY".$customer_id."-".time();
            $CUST_ID = $customer_id;
            $INDUSTRY_TYPE_ID = 'Retail109';
            $CHANNEL_ID = 'WEB';
            $TXN_AMOUNT = round($final_amount);

            $PHONE = str_replace("+", "", $customer->phone);
            $PHONE = preg_replace('/\s+/', '', $PHONE);
            $EMAIL  = $customer->email;

            // Create an array having all required parameters for creating checksum.
            $paramList["MID"] = 'INDLLP22228431438570';
            $paramList["ORDER_ID"] = $ORDER_ID;
            $paramList["CUST_ID"] = $CUST_ID;
            $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
            $paramList["CHANNEL_ID"] = $CHANNEL_ID;
            $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
            $paramList["WEBSITE"] = 'INDLLPWEB';
            $paramList["CALLBACK_URL"] = route('locker.generate.payment.paytm.status');

            if (!empty($PHONE)) {
                $paramList["MOBILE_NO"] = $PHONE;
            }

            if (!empty($EMAIL)) {
                $paramList["EMAIL"] = $EMAIL;
            }

            $paramList["ORDER_DETAILS"] = rand(5, 15).$ORDER_ID;

            //Here checksum string will return by getChecksumFromArray() function.
            $checkSum = $this->getChecksumFromArray($paramList, 'r&Xd973ZIk43rWzq');

            return view('myaccount.customer.payment.paytm_do')->with(['paramList' => $paramList, 'checkSum' => $checkSum]);

        }else{
            return redirect()->route('locker.generate.payment')->with('error', 'Unauthorized customer transaction!');
        }
    }

    public function lockerGenearteResponsePayment(Request $request)
    {

        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
//        $ship_request_id = $request->session()->get('ship_request_id');
//        $shipment = ShipRequest::find($ship_request_id);
        if (!empty($customer)) {

            $paytmChecksum = "";
            $paramList = array();
            $isValidChecksum = "FALSE";

            $paramList = $request->all();
            $paytmChecksum = isset($request->CHECKSUMHASH) ? $request->CHECKSUMHASH : "";

            $isValidChecksum = $this->verifychecksum_e($paramList, 'r&Xd973ZIk43rWzq', $paytmChecksum);

            $STATUS = $request->STATUS;

            if($isValidChecksum == "TRUE") {

//                if (!empty($shipment->payment_gateway_fee)) {
//                    $final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
//                }else{
//                    $final_amount = $shipment->final_amount;
//                }
//
//                $payment_gateway_fee = (3/100) * $final_amount;
//                $final_amount += $payment_gateway_fee;

                if($STATUS == "TXN_SUCCESS"){
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_fee' => $payment_gateway_fee, 'final_amount' => $final_amount, 'payment_gateway_name' => 'paytm', 'payment_status' => 'success', 'admin_info' => 'Payment Successful!', 'admin_read' => 'no']);
//
//                    $notify = new AdminNotification;
//                    $notify->customer_id = Auth::id();
//                    $notify->action_type = 'shipment';
//                    $notify->action_id = $shipment->id;
//                    $notify->action_description = 'Shipment Payment Successful - PayTm';
//                    $notify->save();
//
//                    return redirect()->route('shipping.request.response');
                    echo "Payment Success";
                    exit;
                }
                else if($STATUS == "TXN_FAILURE"){
                    $resMsg = $request->RESPMSG;
//                    $resMsg = "Txn failure";
                    echo $resMsg;
                    exit;
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
                }
                else if($STATUS == "PENDING" || $STATUS == "OPEN") {
                    $resMsg = "Your transaction in pending now. We will inform you once we have received your payment.";
                    echo $resMsg;
                    exit;
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_fee' => $payment_gateway_fee, 'final_amount' => $final_amount, 'payment_gateway_name' => 'paytm', 'payment_status' => 'pending', 'admin_info' => 'Payment status pending!', 'admin_read' => 'no']);
                }
                else{
                    $resMsg = "Security Error! Payment Transaction Failed. Try again or contact us for support.";
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
                }

//                $notify = new AdminNotification;
//                $notify->customer_id = Auth::id();
//                $notify->action_type = 'shipment';
//                $notify->action_id = $shipment->id;
//                $notify->action_description = 'Shipment Payment Failed - PayTm';
//                $notify->save();
//
//                Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));
//
//                return redirect()->route('shipping.queue')->with('error', $resMsg);
                echo "payment failed";
                exit;

            }else{
                echo "payment failed ,error";
                exit;
//                return redirect()->route('shipping.queue')->with('error', 'Security Error! Payment Transaction checksum mismatched.');
            }

        }else{

            echo "Unauthorized customer transaction";
            exit;
//            return redirect()->route('shipping.queue')->with('error', 'Unauthorized customer transaction!');
        }
    }

	public function initiatePayment(Request $request)
	{
		$customer_id = Auth::id();
		$customer = Customer::find($customer_id);
		$ship_request_id = $request->session()->get('ship_request_id');
        $is_wallet_used = $request->session()->get('is_wallet_used');
        $is_retry_payment = $request->session()->get('is_retry_payment');
		$shipment = ShipRequest::find($ship_request_id);
		if (!empty($shipment) && $shipment->customer_id == $customer_id) {

			if (!empty($shipment->payment_gateway_fee)) {
				$final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
			}else{
				$final_amount = $shipment->final_amount;
			}
			$payment_gateway_fee = (3/100) * $final_amount;
			$final_amount += $payment_gateway_fee;

            if ($is_wallet_used == 1 && $is_retry_payment == 1)
            {
                $customer_wallet_amount = $customer->balance->amount;
                $final_amount -= $customer_wallet_amount;
            }

			$checkSum = "";
			$paramList = array();

			$ORDER_ID = "PAY".$customer_id."-".time();
			$CUST_ID = $customer->locker;
			$INDUSTRY_TYPE_ID = 'Retail109';
			$CHANNEL_ID = 'WEB';
			$TXN_AMOUNT = round($final_amount);

			$PHONE = str_replace("+", "", $shipment->phone);
			$PHONE = preg_replace('/\s+/', '', $PHONE);
			$EMAIL  = $customer->email;

			// Create an array having all required parameters for creating checksum.
			$paramList["MID"] = 'INDLLP22228431438570';
			$paramList["ORDER_ID"] = $ORDER_ID;
			$paramList["CUST_ID"] = $CUST_ID;
			$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
			$paramList["CHANNEL_ID"] = $CHANNEL_ID;
			$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
			$paramList["WEBSITE"] = 'INDLLPWEB';
			$paramList["CALLBACK_URL"] = route('payment.paytm.status');

			if (!empty($PHONE)) {
				$paramList["MOBILE_NO"] = $PHONE;
			}

			if (!empty($EMAIL)) {
				$paramList["EMAIL"] = $EMAIL;
			}

			$paramList["ORDER_DETAILS"] = "SHIPMENT ID ".$shipment->order_id;

			//Here checksum string will return by getChecksumFromArray() function.
			$checkSum = $this->getChecksumFromArray($paramList, 'r&Xd973ZIk43rWzq');

			return view('myaccount.customer.payment.paytm_do')->with(['paramList' => $paramList, 'checkSum' => $checkSum]);

		}else{
			return redirect()->route('shipping.queue')->with('error', 'Unauthorized customer transaction!');
		}

	}

	public function responsePayment(Request $request)
	{

		$customer_id = Auth::id();
		$customer = Customer::find($customer_id);
		$ship_request_id = $request->session()->get('ship_request_id');
        $is_wallet_used = $request->session()->get('is_wallet_used');
        $is_retry_payment = $request->session()->get('is_retry_payment');
		$shipment = ShipRequest::find($ship_request_id);
		if (!empty($shipment) && $shipment->customer_id == $customer_id) {

			$paytmChecksum = "";
			$paramList = array();
			$isValidChecksum = "FALSE";

			$paramList = $request->all();
			$paytmChecksum = isset($request->CHECKSUMHASH) ? $request->CHECKSUMHASH : "";

			$isValidChecksum = $this->verifychecksum_e($paramList, 'r&Xd973ZIk43rWzq', $paytmChecksum);

			$STATUS = $request->STATUS;

			if($isValidChecksum == "TRUE") {

				if (!empty($shipment->payment_gateway_fee)) {
					$final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
				}else{
					$final_amount = $shipment->final_amount;
				}

				$payment_gateway_fee = (3/100) * $final_amount;
				$final_amount += $payment_gateway_fee;

				if($STATUS == "TXN_SUCCESS"){

                    $wallet = $shipment->wallet;
                    if ($is_wallet_used == 1 && $is_retry_payment == 1)
                    {
                        $customer_wallet_amount = $customer->balance->amount;
                        $final_amount -= $customer_wallet_amount;
                        $wallet = $shipment->wallet + $customer_wallet_amount;
                        ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                        $this->walletTransection($customer_wallet_amount,$customer,$shipment);
                    } else if ($is_wallet_used == 1 && $is_retry_payment != 1) {
                        $wallet = $shipment->wallet;
                        ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                        $this->walletTransection($shipment->wallet,$customer,$shipment);
                    }
					ShipRequest::where('id', $ship_request_id)
                        ->update([
                            'payment_gateway_fee' => $payment_gateway_fee,
                            'shipping_status' => 'inqueue',
                            'final_amount' => $final_amount,
                            'wallet' => $wallet,
                            'payment_gateway_name' => 'paytm',
                            'payment_status' => 'success',
                            'admin_info' => 'Payment Successful!',
                            'admin_read' => 'no'
                            ]);

					$notify = new AdminNotification;
	                $notify->customer_id = Auth::id();
	                $notify->action_type = 'shipment';
	                $notify->action_id = $shipment->id;
	                $notify->action_description = 'Shipment Payment Successful - PayTm';
	                $notify->save();

                    $coupon_applied_status = PromoCodeApplied::where('shipment_id',$shipment->order_id)->first();
                    if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                        $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                            ->whereDate('validity', '>=', date('Y-m-d'))->first();

                        if (!empty($promo)){
                            if(isset($promo->cashback) && !empty($promo->cashback))
                            {
                                // commented by punith- Cash back creating with cashback percentage
//                                $total_wallet_amount = $customer->balance->amount+( $shipment->estimated * ($promo->cashback / 100));
//                                $shoppre_balance = ShopperBalance::find($customer->balance->id);
//                                $shoppre_balance->amount = $total_wallet_amount;
//                                $shoppre_balance->save();
                                PromoCodeApplied::where('shipment_id',$shipment->order_id)->update(['status' => 'success']);
                            }elseif (isset($promo->discount) && !empty($promo->discount))
                            {
                                PromoCodeApplied::where('shipment_id',$shipment->order_id)->update(['status' => 'success']);
                            }
                        }
                    }

//                    ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);

					return redirect()->route('shipping.request.response');

				}
				else if($STATUS == "TXN_FAILURE"){
					$resMsg = $request->RESPMSG;
					ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
				}
				else if($STATUS == "PENDING" || $STATUS == "OPEN") {
					$resMsg = "Your transaction in pending now. We will inform you once we have received your payment.";
					ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_fee' => $payment_gateway_fee, 'final_amount' => $final_amount, 'payment_gateway_name' => 'paytm', 'payment_status' => 'pending', 'admin_info' => 'Payment status pending!', 'admin_read' => 'no']);
				}
				else{
					$resMsg = "Security Error! Payment Transaction Failed. Try again or contact us for support.";
					ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
				}

				$notify = new AdminNotification;
	            $notify->customer_id = Auth::id();
	            $notify->action_type = 'shipment';
	            $notify->action_id = $shipment->id;
	            $notify->action_description = 'Shipment Payment Failed - PayTm';
	            $notify->save();

				Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

				return redirect()->route('shipping.queue')->with('error', $resMsg);

			}else{

				return redirect()->route('shipping.queue')->with('error', 'Security Error! Payment Transaction checksum mismatched.');
			}

		}else{
			return redirect()->route('shipping.queue')->with('error', 'Unauthorized customer transaction!');
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


    public function shopperPaymentInitiate(Request $request)
	{
		$customer_id = Auth::id();
		$customer = Customer::find($customer_id);
		$orderids = $request->session()->get('orderids');
		$orders = ShopperOrder::where('customer_id', $customer_id)
            ->whereIn('status', ['pending','awaiting'])
            ->whereIn('id', $orderids)->get();
    	if (!$orders->isEmpty()) {

			$final_amount = $orders->sum('sub_total');
			$payment_gateway_fee = (3/100) * $final_amount;
			$final_amount += $payment_gateway_fee;

			$checkSum = "";
			$paramList = array();

			$ORDER_ID = "PSPAY".$customer_id."-".time();
			$CUST_ID = $customer->locker;
			$INDUSTRY_TYPE_ID = 'Retail109';
			$CHANNEL_ID = 'WEB';
			$TXN_AMOUNT = round($final_amount);

			$EMAIL  = $customer->email;

			// Create an array having all required parameters for creating checksum.
			$paramList["MID"] = 'INDLLP22228431438570';
			$paramList["ORDER_ID"] = $ORDER_ID;
			$paramList["CUST_ID"] = $CUST_ID;
			$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
			$paramList["CHANNEL_ID"] = $CHANNEL_ID;
			$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
			$paramList["WEBSITE"] = 'INDLLPWEB';
			$paramList["CALLBACK_URL"] = route('shopper.payment.paytm.status');

			if (!empty($customer->phone)) {
				$PHONE = $customer->country_code.$customer->phone;
				$PHONE = preg_replace('/\s+/', '', $PHONE);
				$paramList["MOBILE_NO"] = $PHONE;
			}

			if (!empty($EMAIL)) {
				$paramList["EMAIL"] = $EMAIL;
			}

			$paramList["ORDER_DETAILS"] = "LOCKER ID ".$customer->locker;

			//Here checksum string will return by getChecksumFromArray() function.
			$checkSum = $this->getChecksumFromArray($paramList, 'r&Xd973ZIk43rWzq');

			return view('myaccount.customer.payment.paytm_do')->with(['paramList' => $paramList, 'checkSum' => $checkSum]);

		}else{
			return redirect()->route('personal.shopper.summary')->with('error', 'Unauthorized customer transaction!');
		}

	}

	public function shopperResponsePayment(Request $request)
	{

		$customer_id = Auth::id();
		$customer = Customer::find($customer_id);
		$orderids = $request->session()->get('orderids');
		$orders = ShopperOrder::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();
    	if (!$orders->isEmpty()) {

			$paytmChecksum = "";
			$paramList = array();
			$isValidChecksum = "FALSE";

			$paramList = $request->all();
			$paytmChecksum = isset($request->CHECKSUMHASH) ? $request->CHECKSUMHASH : "";

			$isValidChecksum = $this->verifychecksum_e($paramList, 'r&Xd973ZIk43rWzq', $paytmChecksum);

			$STATUS = $request->STATUS;

			if($isValidChecksum == "TRUE") {

				if($STATUS == "TXN_SUCCESS"){

					foreach ($orders as $order) {
						$final_amount = $order->sub_total;
			    		$payment_gateway_fee = (3/100) * $final_amount;
						$final_amount += $payment_gateway_fee;

						$updateOrder = ShopperOrder::find($order->id);
						$updateOrder->payment_gateway_fee = $payment_gateway_fee;
						$updateOrder->sub_total = $final_amount;
						$updateOrder->save();

						$notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'shopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Successful - PayTm';
	                    $notify->save();
					}

					ShopperOrder::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'success', 'status' => 'awaiting', 'created_at' => date("Y-m-d H:i:s") ]);
                    ShopperRequest::where('customer_id', $customer_id)->whereIn('order_id', $orderids)->update(['status' => 'awaiting']);

                    return redirect()->route('personal.shopper.response');

				}
				else if($STATUS == "TXN_FAILURE"){
					$resMsg = $request->RESPMSG;
				}
				else if($STATUS == "PENDING" || $STATUS == "OPEN") {
					$resMsg = "Your transaction in pending now. We will inform you once we have received your payment.";
				}
				else{
					$resMsg = "Security Error! Payment Transaction Failed. Try again or contact us for support.";
				}

				foreach ($orders as $order) {
	                $notify = new AdminNotification;
	                $notify->customer_id = Auth::id();
	                $notify->action_type = 'shopper';
	                $notify->action_id = $order->id;
	                $notify->action_description = 'Personal Shopper Payment Failed - PayTm';
	                $notify->save();
	            }

				return redirect()->route('personal.shopper.summary')->with('error', $resMsg);

			}else{
				return redirect()->route('personal.shopper.summary')->with('error', 'Security Error! Payment Transaction checksum mismatched.');
			}

		}else{
			return redirect()->route('personal.shopper.summary')->with('error', 'Unauthorized customer transaction!');
		}
	}


	public function selfPaymentStart(Request $request)
	{
		$customer_id = Auth::id();
		$customer = Customer::find($customer_id);
		$orderids = $request->session()->get('orderids');
		$orders = ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();
    	if (!$orders->isEmpty()) {

			$final_amount = $orders->sum('grand_total');
			$payment_gateway_fee = (3/100) * $final_amount;
			$final_amount += $payment_gateway_fee;

			$checkSum = "";
			$paramList = array();

			$ORDER_ID = "PSPAY".$customer_id."-".time();
			$CUST_ID = $customer->locker;
			$INDUSTRY_TYPE_ID = 'Retail109';
			$CHANNEL_ID = 'WEB';
			$TXN_AMOUNT = round($final_amount);

			$EMAIL  = $customer->email;

			// Create an array having all required parameters for creating checksum.
			$paramList["MID"] = 'INDLLP22228431438570';
			$paramList["ORDER_ID"] = $ORDER_ID;
			$paramList["CUST_ID"] = $CUST_ID;
			$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
			$paramList["CHANNEL_ID"] = $CHANNEL_ID;
			$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
			$paramList["WEBSITE"] = 'INDLLPWEB';
			$paramList["CALLBACK_URL"] = route('shopper.self.paytm.status');

			if (!empty($customer->phone)) {
				$PHONE = $customer->country_code.$customer->phone;
				$PHONE = preg_replace('/\s+/', '', $PHONE);
				$paramList["MOBILE_NO"] = $PHONE;
			}

			if (!empty($EMAIL)) {
				$paramList["EMAIL"] = $EMAIL;
			}

			$paramList["ORDER_DETAILS"] = "LOCKER ID ".$customer->locker;

			//Here checksum string will return by getChecksumFromArray() function.
			$checkSum = $this->getChecksumFromArray($paramList, 'r&Xd973ZIk43rWzq');

			return view('myaccount.customer.payment.paytm_do')->with(['paramList' => $paramList, 'checkSum' => $checkSum]);

		}else{
			return redirect()->route('shopper.self.history')->with('error', 'Unauthorized customer transaction!');
		}
	}

	public function selfPaymentStatus(Request $request)
	{
		$customer_id = Auth::id();
		$orderids = $request->session()->get('orderids');
		$orders = ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();
    	if (!$orders->isEmpty()) {

			$paytmChecksum = "";
			$paramList = array();
			$isValidChecksum = "FALSE";

			$paramList = $request->all();
			$paytmChecksum = isset($request->CHECKSUMHASH) ? $request->CHECKSUMHASH : "";

			$isValidChecksum = $this->verifychecksum_e($paramList, 'r&Xd973ZIk43rWzq', $paytmChecksum);

			$STATUS = $request->STATUS;

			if($isValidChecksum == "TRUE") {

				if($STATUS == "TXN_SUCCESS"){

				foreach ($orders as $order) {
					$final_amount = $order->grand_total;
		    		$payment_gateway_fee = (3/100) * $final_amount;
					$final_amount += $payment_gateway_fee;

					$updateOrder = ShopperOrderSelf::find($order->id);
					$updateOrder->payment_gateway_fee = $payment_gateway_fee;
					$updateOrder->grand_total = $final_amount;
					$updateOrder->save();

					$notify = new AdminNotification;
                    $notify->customer_id = Auth::id();
                    $notify->action_type = 'selfshopper';
                    $notify->action_id = $order->id;
                    $notify->action_description = 'Personal Shopper Payment Successful - PayTm';
                    $notify->save();
				}

				ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'paytm', 'status' => 'received', 'created_at' => date("Y-m-d H:i:s") ]);

                    return redirect()->route('shopper.self.response');

				}
				else if($STATUS == "TXN_FAILURE"){
					$resMsg = $request->RESPMSG;
				}
				else if($STATUS == "PENDING" || $STATUS == "OPEN") {
					$resMsg = "Your transaction in pending now. We will inform you once we have received your payment.";
				}
				else{
					$resMsg = "Security Error! Payment Transaction Failed. Try again or contact us for support.";
				}

				foreach ($orders as $order) {
	                $notify = new AdminNotification;
	                $notify->customer_id = Auth::id();
	                $notify->action_type = 'selfshopper';
	                $notify->action_id = $order->id;
	                $notify->action_description = 'Personal Shopper Payment Failed - PayTm';
	                $notify->save();
	            }

				return redirect()->route('shopper.self.history')->with('error', $resMsg);

			}else{
				return redirect()->route('shopper.self.history')->with('error', 'Security Error! Payment Transaction checksum mismatched.');
			}

		}else{
			return redirect()->route('shopper.self.history')->with('error', 'Unauthorized customer transaction!');
		}
	}

	public function getChecksumFromArray($arrayList, $key, $sort = 1) {
		if ($sort != 0) {
			ksort($arrayList);
		}
		$str = $this->getArray2Str($arrayList);
		$salt = $this->generateSalt_e(4);
		$finalString = $str . "|" . $salt;
		$hash = hash("sha256", $finalString);
		$hashString = $hash . $salt;
		$checksum = $this->encrypt_e($hashString, $key);
		return $checksum;
	}

	public function getArray2Str($arrayList) {
		$paramStr = "";
		$flag = 1;
		foreach ($arrayList as $key => $value) {
			if ($flag) {
				$paramStr .= $this->checkString_e($value);
				$flag = 0;
			} else {
				$paramStr .= "|" . $this->checkString_e($value);
			}
		}
		return $paramStr;
	}

	public function checkString_e($value) {
		$myvalue = ltrim($value);
		$myvalue = rtrim($myvalue);
		if ($myvalue == 'null')
			$myvalue = '';
		return $myvalue;
	}

	public function generateSalt_e($length) {
		$random = "";
		srand((double) microtime() * 1000000);

		$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
		$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
		$data .= "0FGH45OP89";

		for ($i = 0; $i < $length; $i++) {
			$random .= substr($data, (rand() % (strlen($data))), 1);
		}

		return $random;
	}

	public function encrypt_e($input, $ky) {
		$key = $ky;
		$size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
		$input = $this->pkcs5_pad_e($input, $size);
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', 'cbc', '');
		$iv = "@@@@&&&&####$$$$";
		mcrypt_generic_init($td, $key, $iv);
		$data = mcrypt_generic($td, $input);
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		$data = base64_encode($data);
		return $data;
	}

	public function pkcs5_pad_e($text, $blocksize) {
		$pad = $blocksize - (strlen($text) % $blocksize);
		return $text . str_repeat(chr($pad), $pad);
	}


	public function verifychecksum_e($arrayList, $key, $checksumvalue) {
		$arrayList = $this->removeCheckSumParam($arrayList);
		ksort($arrayList);
		$str = $this->getArray2Str($arrayList);
		$paytm_hash = $this->decrypt_e($checksumvalue, $key);
		$salt = substr($paytm_hash, -4);

		$finalString = $str . "|" . $salt;

		$website_hash = hash("sha256", $finalString);
		$website_hash .= $salt;

		$validFlag = "FALSE";
		if ($website_hash == $paytm_hash) {
			$validFlag = "TRUE";
		} else {
			$validFlag = "FALSE";
		}
		return $validFlag;
	}

	public function removeCheckSumParam($arrayList) {
		if (isset($arrayList["CHECKSUMHASH"])) {
			unset($arrayList["CHECKSUMHASH"]);
		}
		return $arrayList;
	}

	public function decrypt_e($crypt, $ky) {

		$crypt = base64_decode($crypt);
		$key = $ky;
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', 'cbc', '');
		$iv = "@@@@&&&&####$$$$";
		mcrypt_generic_init($td, $key, $iv);
		$decrypted_data = mdecrypt_generic($td, $crypt);
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		$decrypted_data = $this->pkcs5_unpad_e($decrypted_data);
		$decrypted_data = rtrim($decrypted_data);
		return $decrypted_data;
	}

	public function pkcs5_unpad_e($text) {
		$pad = ord($text{strlen($text) - 1});
		if ($pad > strlen($text))
			return false;
		return substr($text, 0, -1 * $pad);
	}

    public function memberInitiatePayment(Request $request)
    {
//        $customer_id = $request->session()->get('signUpCustomerId');
//        echo $customer_id; exit;
//        if (!(empty($customer_id))) {
        $customer_id = Auth::id();
//        }
        $customer = Customer::find($customer_id);
        $amount = $request->session()->get('memberFee');
        if (!empty($customer_id)) {

            $checkSum = "";
            $paramList = array();

            $ORDER_ID = "PAY".$customer_id."-".time();
            $CUST_ID = $customer->locker;
            $INDUSTRY_TYPE_ID = 'Retail109';
            $CHANNEL_ID = 'WEB';
            $TXN_AMOUNT = round($amount);

            $EMAIL  = $customer->email;

            // Create an array having all required parameters for creating checksum.
            $paramList["MID"] = 'INDLLP22228431438570';
            $paramList["ORDER_ID"] = $ORDER_ID;
            $paramList["CUST_ID"] = $CUST_ID;
            $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
            $paramList["CHANNEL_ID"] = $CHANNEL_ID;
            $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
            $paramList["WEBSITE"] = 'INDLLPWEB';
            $paramList["CALLBACK_URL"] = route('member.paytm.status');


//            if (!empty($PHONE)) {
//                $paramList["MOBILE_NO"] = $PHONE;
//            }

            if (!empty($EMAIL)) {
                $paramList["EMAIL"] = $EMAIL;
            }

            $paramList["ORDER_DETAILS"] = "time ".time();

            //Here checksum string will return by getChecksumFromArray() function.
            $checkSum = $this->getChecksumFromArray($paramList, 'r&Xd973ZIk43rWzq');

            return view('myaccount.customer.payment.paytm_do')->with(['paramList' => $paramList, 'checkSum' => $checkSum]);

        } else {
            return redirect()->route('member.pay')->with('error', 'Unauthorized customer transaction!');
        }

    }

    public function memberResponsePayment(Request $request)
    {

//        $customer_id = $request->session()->get('signUpCustomerId');
//        if (!(empty($customer_id))) {
        $customer_id = Auth::id();
//        }
//        $customer = Customer::find($customer_id);
        $amount = $request->session()->get('memberFee');
        $membership_type = $request->session()->get('membership_type');
        if (!empty($customer_id)) {
            $MembershipValidity =
            $paytmChecksum = "";
            $paramList = array();
            $isValidChecksum = "FALSE";

            $paramList = $request->all();
            $paytmChecksum = isset($request->CHECKSUMHASH) ? $request->CHECKSUMHASH : "";

            $isValidChecksum = $this->verifychecksum_e($paramList, 'r&Xd973ZIk43rWzq', $paytmChecksum);

            $STATUS = $request->STATUS;

            if($isValidChecksum == "TRUE") {
                if ($membership_type === 'y') {
                    $Validity_date = \Carbon\Carbon::today()->addYear(1);
                } else if ($membership_type === 'h'){
                    $Validity_date = \Carbon\Carbon::today()->addMonth(6);
                }


                if($STATUS == "TXN_SUCCESS"){
                    Customer::where('id', $customer_id)
                        ->update(['membership_type' => 'P', 'membership_amount' => $amount, 'membership_validity' => $Validity_date]);
                    return redirect()->route('member.success');

                }
                else if($STATUS == "TXN_FAILURE"){
                    $resMsg = $request->RESPMSG;
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
                }
                else if($STATUS == "PENDING" || $STATUS == "OPEN") {
                    $resMsg = "Your transaction in pending now. We will inform you once we have received your payment.";
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_fee' => $payment_gateway_fee, 'final_amount' => $final_amount, 'payment_gateway_name' => 'paytm', 'payment_status' => 'pending', 'admin_info' => 'Payment status pending!', 'admin_read' => 'no']);
                }
                else{
                    $resMsg = "Security Error! Payment Transaction Failed. Try again or contact us for support.";
//                    ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paytm', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
                }

//                Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

                return redirect()->route('member.pay')->with('error', $resMsg);

            }else{

                return redirect()->route('member.pay')->with('error', 'Security Error! Payment Transaction checksum mismatched.');
            }

        }else{
            return redirect()->route('member.pay')->with('error', 'Unauthorized customer transaction!');
        }
    }
}
