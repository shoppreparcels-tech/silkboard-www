<?php

namespace App\Http\Controllers\Myaccount\Customer;
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

use App\PromoCode;
use App\PromoCodeApplied;
use App\DirectPayment;
use App\Mail\Myaccount\DirectPaymentMail;
use App\ShopperBalance;
use App\WalletTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Conn\Http;
use Auth;
use App\ShipRequest;
use App\Customer;
use App\ShopperOrder;
use App\ShopperRequest;
use App\ShopperRequestSelf;
use App\ShopperOrderSelf;
use App\AdminNotification;

use App\Mail\Myaccount\PaymentFailed;
use Illuminate\Support\Facades\Session;

class AxisController extends Controller
{
    public function __construct()
	{
		return view('myaccount.customer.payment.paytm');
	}

	public function testForm()
	{
		return view('myaccount.customer.payment.axis');
	}

    public function lockerGeneratePaymentInitiate(Request $request)
    {
        $customer_id = Auth::id();
//        $shipid = $request->session()->get('shipid');
//        $shipment = ShipRequest::find($shipid);
        $customer = Customer::find($customer_id);

        if (!empty($shipment) && $shipment->customer_id == $customer_id) {

            if (!empty($shipment->payment_gateway_fee)) {
                $final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
            }else{
                $final_amount = $shipment->final_amount;
            }

            $payment_gateway_fee = 0;

            $data = array(
                "vpc_Version" => "1",
                "vpc_AccessCode" => "YIAX9875",
                "vpc_Command" => "pay",
                "vpc_MerchTxnRef" => "SHIP".$customer_id."-".time(),
                "vpc_MerchantId" => "13I000000000978",
                "vpc_Amount" => round($final_amount) * 100,
                "vpc_OrderInfo" => "SHIPMENT# ".$shipment->order_id,
                "vpc_ReturnURL" => route('payment.axis.status')
            );

            //------ store original data
            $posted_data = $data;

            //------- sort on keys
            ksort($data);

            $SECURE_SECRET = "7BB594D45D47D87893121FDD7CC7672A";  //Add secure secret here
            if($data){
                $str = $SECURE_SECRET;
                foreach($data as $key => $val){
                    $str = $str . $val;
                }
            }

            $str = hash('sha256', utf8_encode($str));

            $posted_data["vpc_SecureHash"] = $str;

            ksort($posted_data);

            $processed_data = $posted_data;
            if($processed_data){
                $str = "";
                foreach($processed_data as $key => $val){
                    $str .= $key."=".$val."::";
                }
                // remove last occurrence of ::
                $pos = strrpos($str, "::");
                if($pos !== false){
                    $str = substr_replace($str, "", $pos, strlen("::"));
                }
            }

            $key = "FC36C5D9E2DC28856FEB90DAD5E84C66";

            $ciphertext_base64 = $this->encrypt($str, $key);

            $encrypted_data = array();
            $encrypted_data["vpc_MerchantId"] = $posted_data["vpc_MerchantId"];
            $encrypted_data["encrypted_data"] = $ciphertext_base64;

            return view('myaccount.customer.payment.axis_do')->with('encrypted_data', $encrypted_data);

        }else{
            return redirect()->route('shipping.queue')->with('error', 'Unauthorized customer transaction!');
        }
    }

    public function directPaymentInitiate(Request $request)
    {
//        $customer_id = Auth::id();
//        $ship_request_id = $request->session()->get('ship_request_id');

        $payment_id = $request->payment_id;
        $request->session()->put(['payment_id' => $payment_id]);
        $payment_detail = DirectPayment::find($payment_id);
        if (!empty($payment_detail)) {

//            if (!empty($shipment->payment_gateway_fee)) {
//                $final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
//            }else{
//                $final_amount = $shipment->final_amount;
//            }

            $payment_gateway_fee = 0;

            $final_amount = $payment_detail->amount;

            $data = array(
                "vpc_Version" => "1",
                "vpc_AccessCode" => "YIAX9875",
                "vpc_Command" => "pay",
                "vpc_MerchTxnRef" => "SHIP".$payment_id."-".time(),
                "vpc_MerchantId" => "13I000000000978",
                "vpc_Amount" => round($final_amount) * 100,
                "vpc_OrderInfo" => "DPAYMENT# ".$payment_id,
                "vpc_ReturnURL" => route('direct.payment.axis.status')
            );

            //------ store original data
            $posted_data = $data;

            //------- sort on keys
            ksort($data);

            $SECURE_SECRET = "7BB594D45D47D87893121FDD7CC7672A";  //Add secure secret here
            if($data){
                $str = $SECURE_SECRET;
                foreach($data as $key => $val){
                    $str = $str . $val;
                }
            }

            $str = hash('sha256', utf8_encode($str));

            $posted_data["vpc_SecureHash"] = $str;

            ksort($posted_data);

            $processed_data = $posted_data;
            if($processed_data){
                $str = "";
                foreach($processed_data as $key => $val){
                    $str .= $key."=".$val."::";
                }
                // remove last occurrence of ::
                $pos = strrpos($str, "::");
                if($pos !== false){
                    $str = substr_replace($str, "", $pos, strlen("::"));
                }
            }

            $key = "FC36C5D9E2DC28856FEB90DAD5E84C66";

            $ciphertext_base64 = $this->encrypt($str, $key);

            $encrypted_data = array();
            $encrypted_data["vpc_MerchantId"] = $posted_data["vpc_MerchantId"];
            $encrypted_data["encrypted_data"] = $ciphertext_base64;
            $request->session()->put(['payid'=>$request->payment_id]);

            return view('myaccount.customer.payment.axis_do')->with('encrypted_data', $encrypted_data);

        }else{
            return redirect()->route('page.payment')->with('error', 'Unauthorized customer transaction!');
        }
    }

    public function directResponsePayment(Request $request)
    {

        $payid = $request->session()->get('payment_id');
        $payment_detail = DirectPayment::find($payid);
        if (!empty($payment_detail)) {

            $data = $request->all();

            $key = "FC36C5D9E2DC28856FEB90DAD5E84C66";
            $received_data= $data;

            $ciphertext_base64 = array_pop($received_data);
            $ciphertext_dec = $this->decrypt($ciphertext_base64, $key);

            // remove last occurrence of ::
            $pos = strrpos($ciphertext_dec, "::");
            if($pos !== false){
                $ciphertext_dec = substr_replace($ciphertext_dec, "", $pos, strlen("::"));
            }

            $array_data_string = explode("::", $ciphertext_dec);
            // remove first garbage element
            //array_shift($array_data_string);

            $result = array();
            if($array_data_string){
                foreach($array_data_string as  $value){
                    $temp_array = explode("||", $value);
                    $result[ $temp_array[0] ]	 = $temp_array[1];
                }
            }

            if (isset($result) && !empty($result)) {


                if ($result['vpc_TxnResponseCode'] == '0') {
                    $customer_id = Auth::id();
                    $update_payment = DirectPayment::where('id',$payid)
                        ->update(['payment_status'=>'success','customer_id' =>$customer_id]);
                    Mail::to($payment_detail->email)->bcc('finance@shoppre.com')
                        ->send(new DirectPaymentMail($payment_detail));
                    $http_ob = new Http();
                    $msg = "INR ".$request->amount." payment received.Txn No: ".$payid." Shoppre.com";
                    $http_ob->sendSms($request->mobile,$msg);

                    return redirect()->route('page.success');

                }elseif ($result['vpc_TxnResponseCode'] == 'Aborted') {
                    $update_payment = DirectPayment::where('id',$payid)->update(['payment_status'=>'failed']);

                    return redirect()->route('page.payment')->with('error', 'Looks like you cancelled the payment.
                     You can try again now or if you faced any issues in completing the payment, please contact us.');
                }else{
                    $update_payment = DirectPayment::where('id',$payid)->update(['payment_status'=>'failed']);

                    return redirect()->route('page.payment')->with('error', 'Looks like you cancelled the
                     payment. You can try again now or if you faced any issues in completing the payment, please 
                     contact us.');
                }

            }else{
                return redirect()->route('page.payment')->with('error', 'Security Error! Please try again after
                 sometime or contact us for support.');
            }
        }else{
            return redirect()->route('page.payment')->with('error', 'Unauthorized customer transaction!');
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

            if ($is_wallet_used == 1 && $is_retry_payment == 1)
            {
                $customer_wallet_amount = $customer->balance->amount;
                $final_amount -= $customer_wallet_amount;
            }

			$payment_gateway_fee = 0;

			$data = array(
				"vpc_Version" => "1",
				"vpc_AccessCode" => "YIAX9875",
				"vpc_Command" => "pay",
				"vpc_MerchTxnRef" => "SHIP".$customer_id."-".time(),
				"vpc_MerchantId" => "13I000000000978",
				"vpc_Amount" => round($final_amount) * 100,
				"vpc_OrderInfo" => "SHIPMENT# ".$shipment->order_id,
				"vpc_ReturnURL" => route('payment.axis.status')
			);

			//------ store original data
			$posted_data = $data;

			//------- sort on keys
			ksort($data);

			$SECURE_SECRET = "7BB594D45D47D87893121FDD7CC7672A";  //Add secure secret here
			if($data){
				$str = $SECURE_SECRET;
				foreach($data as $key => $val){
					$str = $str . $val;
				}
			}

			$str = hash('sha256', utf8_encode($str));

			$posted_data["vpc_SecureHash"] = $str;

			ksort($posted_data);

			$processed_data = $posted_data;
			if($processed_data){
				$str = "";
				foreach($processed_data as $key => $val){
					$str .= $key."=".$val."::";
				}
				// remove last occurrence of ::
				$pos = strrpos($str, "::");
			    if($pos !== false){
			        $str = substr_replace($str, "", $pos, strlen("::"));
			    }
			}

			$key = "FC36C5D9E2DC28856FEB90DAD5E84C66";

			$ciphertext_base64 = $this->encrypt($str, $key);

			$encrypted_data = array();
			$encrypted_data["vpc_MerchantId"] = $posted_data["vpc_MerchantId"];
			$encrypted_data["encrypted_data"] = $ciphertext_base64;

			return view('myaccount.customer.payment.axis_do')->with('encrypted_data', $encrypted_data);

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

			$data = $request->all();

			$key = "FC36C5D9E2DC28856FEB90DAD5E84C66";
			$received_data= $data;

			$ciphertext_base64 = array_pop($received_data);
			$ciphertext_dec = $this->decrypt($ciphertext_base64, $key);;

			// remove last occurrence of ::
			$pos = strrpos($ciphertext_dec, "::");
			if($pos !== false){
			    $ciphertext_dec = substr_replace($ciphertext_dec, "", $pos, strlen("::"));
			}

			$array_data_string = explode("::", $ciphertext_dec);
			// remove first garbage element
			//array_shift($array_data_string);

			$result = array();
			if($array_data_string){
				foreach($array_data_string as  $value){
					$temp_array = explode("||", $value);
					$result[ $temp_array[0] ]	 = $temp_array[1];
				}
			}

			if (isset($result) && !empty($result)) {

				if (!empty($shipment->payment_gateway_fee)) {
					$final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
				}else{
					$final_amount = $shipment->final_amount;
				}

				$payment_gateway_fee = 0;

				if ($result['vpc_TxnResponseCode'] == '0') {
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
                                'payment_gateway_name' => 'card',
                                'payment_status' => 'success'
                                ]);
					$notify = new AdminNotification;
	                $notify->customer_id = Auth::id();
	                $notify->action_type = 'shipment';
	                $notify->action_id = $shipment->id;
	                $notify->action_description = 'Shipment Payment Successful - AXIS';
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

					return redirect()->route('shipping.request.response');

				}elseif ($result['vpc_TxnResponseCode'] == 'Aborted') {
					ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'card', 'payment_status' => 'failed']);

					$notify = new AdminNotification;
	                $notify->customer_id = Auth::id();
	                $notify->action_type = 'shipment';
	                $notify->action_id = $shipment->id;
	                $notify->action_description = 'Shipment Payment Cancelled - AXIS';
	                $notify->save();

					Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

					return redirect()->route('shipping.queue')->with('error', 'Looks like you cancelled the payment. You can try again now or if you faced any issues in completing the payment, please contact us.');
				}else{
					ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'card', 'payment_status' => 'failed']);

					$notify = new AdminNotification;
	                $notify->customer_id = Auth::id();
	                $notify->action_type = 'shipment';
	                $notify->action_id = $shipment->id;
	                $notify->action_description = 'Shipment Payment Failed - AXIS';
	                $notify->save();

					Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

					return redirect()->route('shipping.queue')->with('error', 'Payment transaction failed! You can try again now or if you faced any issues in completing the payment, please contact us.');
				}

			}else{

				Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

				return redirect()->route('shipping.queue')->with('error', 'Security Error! Please try again after sometime or contact us for support.');
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

			$data = array(
				"vpc_Version" => "1",
				"vpc_AccessCode" => "YIAX9875",
				"vpc_Command" => "pay",
				"vpc_MerchTxnRef" => "PSPAY".$customer_id."-".time(),
				"vpc_MerchantId" => "13I000000000978",
				"vpc_Amount" => round($final_amount) * 100,
				"vpc_OrderInfo" => "LOCKER#".$customer->locker,
				"vpc_ReturnURL" => route('shopper.payment.axis.status')
			);

			//------ store original data
			$posted_data = $data;

			//------- sort on keys
			ksort($data);

			$SECURE_SECRET = "7BB594D45D47D87893121FDD7CC7672A";  //Add secure secret here
			if($data){
				$str = $SECURE_SECRET;
				foreach($data as $key => $val){
					$str = $str . $val;
				}
			}

			$str = hash('sha256', utf8_encode($str));

			$posted_data["vpc_SecureHash"] = $str;

			ksort($posted_data);

			$processed_data = $posted_data;
			if($processed_data){
				$str = "";
				foreach($processed_data as $key => $val){
					$str .= $key."=".$val."::";
				}
				// remove last occurrence of ::
				$pos = strrpos($str, "::");
			    if($pos !== false){
			        $str = substr_replace($str, "", $pos, strlen("::"));
			    }
			}

			$key = "FC36C5D9E2DC28856FEB90DAD5E84C66";

			$ciphertext_base64 = $this->encrypt($str, $key);

			$encrypted_data = array();
			$encrypted_data["vpc_MerchantId"] = $posted_data["vpc_MerchantId"];
			$encrypted_data["encrypted_data"] = $ciphertext_base64;

			return view('myaccount.customer.payment.axis_do')->with('encrypted_data', $encrypted_data);

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

			$data = $request->all();

			$key = "FC36C5D9E2DC28856FEB90DAD5E84C66";
			$received_data= $data;

			$ciphertext_base64 = array_pop($received_data);
			$ciphertext_dec = $this->decrypt($ciphertext_base64, $key);;

			// remove last occurrence of ::
			$pos = strrpos($ciphertext_dec, "::");
			if($pos !== false){
			    $ciphertext_dec = substr_replace($ciphertext_dec, "", $pos, strlen("::"));
			}

			$array_data_string = explode("::", $ciphertext_dec);
			// remove first garbage element
			//array_shift($array_data_string);

			$result = array();
			if($array_data_string){
				foreach($array_data_string as  $value){
					$temp_array = explode("||", $value);
					$result[ $temp_array[0] ]	 = $temp_array[1];
				}
			}

			if (isset($result) && !empty($result)) {

				$final_amount = $orders->sum('sub_total');
				$payment_gateway_fee = 0;

				if ($result['vpc_TxnResponseCode'] == '0') {

					ShopperOrder::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'card', 'payment_status' => 'success', 'status' => 'awaiting', 'created_at' => date("Y-m-d H:i:s") ]);
                    ShopperRequest::where('customer_id', $customer_id)->whereIn('order_id', $orderids)->update(['status' => 'awaiting']);

                    foreach ($orders as $order) {
	                    $notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'shopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Successful - AXIS';
	                    $notify->save();
	                }

                    return redirect()->route('personal.shopper.response');

				}elseif ($result['vpc_TxnResponseCode'] == 'Aborted') {

					foreach ($orders as $order) {
	                    $notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'shopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Cancelled - AXIS';
	                    $notify->save();
	                }

					return redirect()->route('personal.shopper.summary')->with('error', 'Looks like you cancelled the payment. You can try again now or if you faced any issues in completing the payment, please contact us.');
				}else{

					foreach ($orders as $order) {
	                    $notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'shopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Failed - AXIS';
	                    $notify->save();
	                }

					return redirect()->route('personal.shopper.summary')->with('error', 'Payment transaction failed! You can try again now or if you faced any issues in completing the payment, please contact us.');
				}

			}else{
				return redirect()->route('personal.shopper.summary')->with('error', 'Security Error! Please try again after sometime or contact us for support.');
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

			$data = array(
				"vpc_Version" => "1",
				"vpc_AccessCode" => "YIAX9875",
				"vpc_Command" => "pay",
				"vpc_MerchTxnRef" => "PSPAY".$customer_id."-".time(),
				"vpc_MerchantId" => "13I000000000978",
				"vpc_Amount" => round($final_amount) * 100,
				"vpc_OrderInfo" => "LOCKER#".$customer->locker,
				"vpc_ReturnURL" => route('shopper.self.axis.status')
			);

			//------ store original data
			$posted_data = $data;

			//------- sort on keys
			ksort($data);

			$SECURE_SECRET = "7BB594D45D47D87893121FDD7CC7672A";  //Add secure secret here
			if($data){
				$str = $SECURE_SECRET;
				foreach($data as $key => $val){
					$str = $str . $val;
				}
			}

			$str = hash('sha256', utf8_encode($str));

			$posted_data["vpc_SecureHash"] = $str;

			ksort($posted_data);

			$processed_data = $posted_data;
			if($processed_data){
				$str = "";
				foreach($processed_data as $key => $val){
					$str .= $key."=".$val."::";
				}
				// remove last occurrence of ::
				$pos = strrpos($str, "::");
			    if($pos !== false){
			        $str = substr_replace($str, "", $pos, strlen("::"));
			    }
			}

			$key = "FC36C5D9E2DC28856FEB90DAD5E84C66";

			$ciphertext_base64 = $this->encrypt($str, $key);

			$encrypted_data = array();
			$encrypted_data["vpc_MerchantId"] = $posted_data["vpc_MerchantId"];
			$encrypted_data["encrypted_data"] = $ciphertext_base64;

			return view('myaccount.customer.payment.axis_do')->with('encrypted_data', $encrypted_data);

    	}else{
			return redirect()->route('personal.shopper.summary')->with('error', 'Unauthorized customer transaction!');
		}
	}

	public function selfPaymentStatus(Request $request)
	{
		$customer_id = Auth::id();
		$customer = Customer::find($customer_id);
		$orderids = $request->session()->get('orderids');
		$orders = ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();
    	if (!$orders->isEmpty()) {

			$data = $request->all();

			$key = "FC36C5D9E2DC28856FEB90DAD5E84C66";
			$received_data = $data;

			$ciphertext_base64 = array_pop($received_data);
			$ciphertext_dec = $this->decrypt($ciphertext_base64, $key);;

			// remove last occurrence of ::
			$pos = strrpos($ciphertext_dec, "::");
			if($pos !== false){
			    $ciphertext_dec = substr_replace($ciphertext_dec, "", $pos, strlen("::"));
			}

			$array_data_string = explode("::", $ciphertext_dec);
			// remove first garbage element
			//array_shift($array_data_string);

			$result = array();
			if($array_data_string){
				foreach($array_data_string as  $value){
					$temp_array = explode("||", $value);
					$result[ $temp_array[0] ]	 = $temp_array[1];
				}
			}

			if (isset($result) && !empty($result)) {

				$final_amount = $orders->sum('grand_total');

				if ($result['vpc_TxnResponseCode'] == '0') {

					ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'card', 'status' => 'received', 'created_at' => date("Y-m-d H:i:s")]);

					foreach ($orders as $order) {
	                    $notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'selfshopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Successful - AXIS';
	                    $notify->save();
	                }

                    return redirect()->route('shopper.self.response');

				}elseif ($result['vpc_TxnResponseCode'] == 'Aborted') {

					foreach ($orders as $order) {
	                    $notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'selfshopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Cancelled - AXIS';
	                    $notify->save();
	                }

					return redirect()->route('shopper.self.history')->with('error', 'Looks like you cancelled the payment. You can try again now or if you faced any issues in completing the payment, please contact us.');
				}else{

					foreach ($orders as $order) {
	                    $notify = new AdminNotification;
	                    $notify->customer_id = Auth::id();
	                    $notify->action_type = 'selfshopper';
	                    $notify->action_id = $order->id;
	                    $notify->action_description = 'Personal Shopper Payment Failed - AXIS';
	                    $notify->save();
	                }

					return redirect()->route('shopper.self.history')->with('error', 'Payment transaction failed! You can try again now or if you faced any issues in completing the payment, please contact us.');
				}

			}else{
				return redirect()->route('shopper.self.history')->with('error', 'Security Error! Please try again after sometime or contact us for support.');
			}

    	}else{
			return redirect()->route('shopper.self.history')->with('error', 'Unauthorized customer transaction!');
		}
	}

	public function encrypt($input, $key) {
		$size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
		$input = $this->pkcs5_pad($input, $size);
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_ECB, '');
		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		mcrypt_generic_init($td, $key, $iv);
		$data = mcrypt_generic($td, $input);
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		$data = base64_encode($data);
		return $data;
	}

	private function pkcs5_pad ($text, $blocksize) {
		$pad = $blocksize - (strlen($text) % $blocksize);
		return $text . str_repeat(chr($pad), $pad);
	}

	public function decrypt($sStr, $sKey) {
		$decrypted= mcrypt_decrypt(
			MCRYPT_RIJNDAEL_128,
			$sKey,
			base64_decode($sStr),
			MCRYPT_MODE_ECB
		);
		$dec_s = strlen($decrypted);
		$padding = ord($decrypted[$dec_s-1]);
		$decrypted = substr($decrypted, 0, -$padding);
		return $decrypted;
	}
}
