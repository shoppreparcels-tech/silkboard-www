<?php

namespace App\Http\Controllers\Myaccount\Customer;

use App\WalletTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\ShopperBalance;
use App\PromoCode;
use App\PromoCodeApplied;
use PayPal\Rest\ApiContext;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use App\LockerCharge;

use Auth;
use App\ShipRequest;
use App\Customer;
use App\ShopperOrder;
use App\ShopperRequest;
use App\ShopperOrderSelf;
use App\AdminNotification;

use App\Mail\Myaccount\PaymentFailed;

class PaypalController extends Controller
{
	private $_api_context;

	public function __construct()
	{
		$this->middleware('auth:customer');

		// setup PayPal api context
		$paypal_conf = config('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
	}

    public function lockerGeneratePaymentInitiate(Request $request)
    {

        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $ship_request_id = $request->session()->get('ship_request_id');
        $shipment = ShipRequest::find($ship_request_id);
        if (!empty($customer)) {

//            if (!empty($shipment->payment_gateway_fee)) {
//                $final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
//            }else{
//                $final_amount = $shipment->final_amount;
//            }

            $locker_charge = LockerCharge::orderBy('id','desc')->first();
            $final_amount = $locker_charge->charge;

            $payment_gateway_fee = (10/100) * $final_amount;
            $final_amount += $payment_gateway_fee;

            $jsondata = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=USD_INR&compact=ultra");
            $USD_INR = json_decode($jsondata)->USD_INR;
            $amountUSD = round($final_amount / $USD_INR, 2);

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $amount = new Amount();
            $amount->setCurrency('USD')
                ->setTotal($amountUSD);

            $transaction = new Transaction();
            $transaction->setAmount($amount)->setDescription('Shoppre Locker Generate Payment');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(route('locker.generate.payment.paypal.status'))
                ->setCancelUrl(route('locker.generate.payment.paypal.status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));

            try{

                $payment->create($this->_api_context);

            }catch (\PayPal\Exception\PayPalConnectionException $ex) {

                echo "Payment Failed";
                exit;
//                Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));
//
//                ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
//                return redirect()->route('shipping.queue')->with('error', 'Something Went wrong! Please retry your payment.');

            }

            foreach ($payment->getLinks() as $link) {
                if ($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            // add payment ID to session
            $request->session()->put('paypal_payment_id', $payment->getId());

            if (isset($redirect_url)) {
                // redirect to paypal
                return redirect($redirect_url);
            }

        }else{
//            return redirect()->route('shipping.queue')->with('error', 'Unauthorized customer transaction!');
            return redirect()->route('locker.generate.payment')->with('error', 'Unauthorized customer transaction!');
        }
    }

    public function lockerGenerateResponsePayment(Request $request)
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        $ship_request_id = $request->session()->get('ship_request_id');
        $shipment = ShipRequest::find($ship_request_id);
        if (!empty($customer)) {
            // Get the payment ID before session clear
            $payment_id = $request->session()->pull('paypal_payment_id');
            if (empty($payment_id)) {
                return redirect()->route('locker.generate.payment')->with('error', 'Payment Transaction Failed!');
            }

            if (empty($request->PayerID) || empty($request->token)) {

                echo "Payment Failed";
                exit;
//                Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));
//
//                ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
//                return redirect()->route('shipping.queue')->with('error', 'Payment Transaction Failed!');
            }

            $payment = Payment::get($payment_id, $this->_api_context);

            $execution = new PaymentExecution();
            $execution->setPayerId($request->input('PayerID'));

            //Execute the payment
            $result = $payment->execute($execution, $this->_api_context);

            if ($result->getState() == 'approved') {

//                if (!empty($shipment->payment_gateway_fee)) {
//                    $final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
//                }else{
//                    $final_amount = $shipment->final_amount;
//                }

                $locker_charge = LockerCharge::orderBy('id','desc')->first();
                $final_amount = $locker_charge->charge;

                $payment_gateway_fee = (10/100) * $final_amount;
                $final_amount += $payment_gateway_fee;

//                ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_fee' => $payment_gateway_fee, 'final_amount' => $final_amount, 'payment_gateway_name' => 'paypal', 'payment_status' => 'success']);
//
//                $notify = new AdminNotification;
//                $notify->customer_id = Auth::id();
//                $notify->action_type = 'shipment';
//                $notify->action_id = $shipment->id;
//                $notify->action_description = 'Shipment Payment Successful - PayPal';
//                $notify->save();

                echo "Payment Success";
                exit;

                return redirect()->route('customer.locker');
            }

            echo "Payment Failed";
            exit;
//
//            Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));
//
//            ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'failed']);
//
//            $notify = new AdminNotification;
//            $notify->customer_id = Auth::id();
//            $notify->action_type = 'shipment';
//            $notify->action_id = $shipment->id;
//            $notify->action_description = 'Shipment Payment Failed - PayPal';
//            $notify->save();
//
//            return redirect()->route('shipping.queue')->with('error', 'Unexpected error occurred & payment has been failed.');

        }else{
            return redirect()->route('locker.generate.payment')->with('error', 'Unauthorized customer transaction!');
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

			$payment_gateway_fee = (10/100) * $final_amount;
			$final_amount += $payment_gateway_fee;
            if ($is_wallet_used == 1 && $is_retry_payment == 1)
            {
                $customer_wallet_amount = $customer->balance->amount;
                $final_amount -= $customer_wallet_amount;
            }


			$jsondata = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=USD_INR&compact=ultra");
			$USD_INR = json_decode($jsondata)->USD_INR;
			$amountUSD = round($final_amount / $USD_INR, 2);

			$payer = new Payer();
			$payer->setPaymentMethod('paypal');

			$amount = new Amount();
			$amount->setCurrency('USD')
					->setTotal($amountUSD);

			$transaction = new Transaction();
			$transaction->setAmount($amount)->setDescription('Shoppre Shipment Payment');

			$redirect_urls = new RedirectUrls();
			$redirect_urls->setReturnUrl(route('payment.paypal.status'))
				->setCancelUrl(route('payment.paypal.status'));

			$payment = new Payment();
			$payment->setIntent('Sale')
				->setPayer($payer)
				->setRedirectUrls($redirect_urls)
				->setTransactions(array($transaction));

			try{

				$payment->create($this->_api_context);

			}catch (\PayPal\Exception\PayPalConnectionException $ex) {

				Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

				ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
				return redirect()->route('shipping.queue')->with('error', 'Something Went wrong! Please retry your payment.');

			}

			foreach ($payment->getLinks() as $link) {
				if ($link->getRel() == 'approval_url') {
					$redirect_url = $link->getHref();
					break;
				}
			}

			// add payment ID to session
			$request->session()->put('paypal_payment_id', $payment->getId());

			if (isset($redirect_url)) {
				// redirect to paypal
				return redirect($redirect_url);
			}

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
			// Get the payment ID before session clear
			$payment_id = $request->session()->pull('paypal_payment_id');
			if (empty($payment_id)) {
				return redirect()->route('shipping.queue')->with('error', 'Payment Transaction Failed!');
			}

			if (empty($request->PayerID) || empty($request->token)) {

				Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

				ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'failed', 'admin_info' => 'Payment failed!', 'admin_read' => 'no']);
				return redirect()->route('shipping.queue')->with('error', 'Payment Transaction Failed!');
			}

			$payment = Payment::get($payment_id, $this->_api_context);

			$execution = new PaymentExecution();
			$execution->setPayerId($request->input('PayerID'));

			//Execute the payment
			$result = $payment->execute($execution, $this->_api_context);

			if ($result->getState() == 'approved') {

				if (!empty($shipment->payment_gateway_fee)) {
					$final_amount = $shipment->final_amount - $shipment->payment_gateway_fee;
				}else{
					$final_amount = $shipment->final_amount;
				}

				$payment_gateway_fee = (10/100) * $final_amount;
				$final_amount += $payment_gateway_fee;
                $wallet = $shipment->wallet;
                if ($is_wallet_used == 1 && $is_retry_payment == 1) {
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
                        'shipping_status' => 'inqueue' ,
                        'final_amount' => $final_amount,
                        'payment_gateway_name' => 'paypal',
                        'wallet' => $wallet,
                        'payment_status' => 'success']
                    );

				$notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'shipment';
                $notify->action_id = $shipment->id;
                $notify->action_description = 'Shipment Payment Successful - PayPal';
                $notify->save();

                $coupon_applied_status = PromoCodeApplied::where('shipment_id',$shipment->order_id)->first();
                if (isset($coupon_applied_status) && !empty($coupon_applied_status)) {
                    $promo = PromoCode::where('code', $coupon_applied_status->coupon_code)
                        ->whereDate('validity', '>=', date('Y-m-d'))->first();

                    if (!empty($promo)){
                        if(isset($promo->cashback) && !empty($promo->cashback))
                        {
                            // commented by punith- Cash back creating with cashback percentage
//                            $total_wallet_amount = $customer->balance->amount+( $shipment->estimated * ($promo->cashback / 100));
//                            $shoppre_balance = ShopperBalance::find($customer->balance->id);
//                            $shoppre_balance->amount = $total_wallet_amount;
//                            $shoppre_balance->save();
                            PromoCodeApplied::where('shipment_id',$shipment->order_id)->update(['status' => 'success']);
                        }elseif (isset($promo->discount) && !empty($promo->discount))
                        {
                            PromoCodeApplied::where('shipment_id',$shipment->order_id)->update(['status' => 'success']);
                        }
                    }
                }
//                ShopperBalance::where('customer_id', $customer_id)->update(['amount' => 0]);
                return redirect()->route('shipping.request.response');
			}

			Mail::to($customer->email)->bcc('support@shoppre.com')->send(new PaymentFailed($shipment));

			ShipRequest::where('id', $ship_request_id)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'failed']);

			$notify = new AdminNotification;
            $notify->customer_id = Auth::id();
            $notify->action_type = 'shipment';
            $notify->action_id = $shipment->id;
            $notify->action_description = 'Shipment Payment Failed - PayPal';
            $notify->save();

			return redirect()->route('shipping.queue')->with('error', 'Unexpected error occurred & payment has been failed.');

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
    		$payment_gateway_fee = (10/100) * $final_amount;
			$final_amount += $payment_gateway_fee;

			$jsondata = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=USD_INR&compact=ultra");
			$USD_INR = json_decode($jsondata)->USD_INR;
			$amountUSD = round($final_amount / $USD_INR, 2);

			$payer = new Payer();
			$payer->setPaymentMethod('paypal');

			$amount = new Amount();
			$amount->setCurrency('USD')
					->setTotal($amountUSD);

			$transaction = new Transaction();
			$transaction->setAmount($amount)->setDescription('Personal Shopper Payment');

			$redirect_urls = new RedirectUrls();
			$redirect_urls->setReturnUrl(route('shopper.payment.paypal.status'))
				->setCancelUrl(route('shopper.payment.paypal.status'));

			$payment = new Payment();
			$payment->setIntent('Sale')
				->setPayer($payer)
				->setRedirectUrls($redirect_urls)
				->setTransactions(array($transaction));

			try{
				$payment->create($this->_api_context);
			}catch (\PayPal\Exception\PayPalConnectionException $ex) {
				return redirect()->route('personal.shopper.summary')->with('error', 'Something Went wrong! Please retry your payment.');
			}

			foreach ($payment->getLinks() as $link) {
				if ($link->getRel() == 'approval_url') {
					$redirect_url = $link->getHref();
					break;
				}
			}

			// add payment ID to session
			$request->session()->put('paypal_payment_id', $payment->getId());

			if (isset($redirect_url)) {
				// redirect to paypal
				return redirect($redirect_url);
			}

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

    		// Get the payment ID before session clear
			$payment_id = $request->session()->pull('paypal_payment_id');
			if (empty($payment_id)) {
				return redirect()->route('personal.shopper.summary')->with('error', 'Payment Transaction Failed!');
			}

			if (empty($request->PayerID) || empty($request->token)) {
				return redirect()->route('personal.shopper.summary')->with('error', 'Payment Transaction Failed!');
			}

			$payment = Payment::get($payment_id, $this->_api_context);

			$execution = new PaymentExecution();
			$execution->setPayerId($request->input('PayerID'));

			//Execute the payment
			$result = $payment->execute($execution, $this->_api_context);

			if ($result->getState() == 'approved') {

				foreach ($orders as $order) {
					$final_amount = $order->sub_total;
		    		$payment_gateway_fee = (10/100) * $final_amount;
					$final_amount += $payment_gateway_fee;

					$updateOrder = ShopperOrder::find($order->id);
					$updateOrder->payment_gateway_fee = $payment_gateway_fee;
					$updateOrder->sub_total = $final_amount;
					$updateOrder->save();

					$notify = new AdminNotification;
                    $notify->customer_id = Auth::id();
                    $notify->action_type = 'shopper';
                    $notify->action_id = $order->id;
                    $notify->action_description = 'Personal Shopper Payment Successful - PayPal';
                    $notify->save();
				}

				ShopperOrder::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'paypal', 'payment_status' => 'success', 'status' => 'awaiting', 'created_at' => date("Y-m-d H:i:s") ]);
                ShopperRequest::where('customer_id', $customer_id)->whereIn('order_id', $orderids)->update(['status' => 'awaiting']);

				return redirect()->route('personal.shopper.response');
			}

			foreach ($orders as $order) {
                $notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'shopper';
                $notify->action_id = $order->id;
                $notify->action_description = 'Personal Shopper Payment Failed - PayPal';
                $notify->save();
            }

			return redirect()->route('personal.shopper.summary')->with('error', 'Payment transaction failed');

    	}else{
			return redirect()->route('personal.shopper.summary')->with('error', 'Unauthorized customer transaction!');
		}
	}

	public function selfPaymentStart(Request $request)
	{
		$customer_id = Auth::id();
		$orderids = $request->session()->get('orderids');
		$orders = ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->get();
    	if (!$orders->isEmpty()) {

    		$final_amount = $orders->sum('grand_total');
    		$payment_gateway_fee = (10/100) * $final_amount;
			$final_amount += $payment_gateway_fee;

			$jsondata = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=USD_INR&compact=ultra");
			$USD_INR = json_decode($jsondata)->USD_INR;
			$amountUSD = round($final_amount / $USD_INR, 2);

			$payer = new Payer();
			$payer->setPaymentMethod('paypal');

			$amount = new Amount();
			$amount->setCurrency('USD')
					->setTotal($amountUSD);

			$transaction = new Transaction();
			$transaction->setAmount($amount)->setDescription('Personal Shopper Payment');

			$redirect_urls = new RedirectUrls();
			$redirect_urls->setReturnUrl(route('shopper.self.paypal.status'))
				->setCancelUrl(route('shopper.self.paypal.status'));

			$payment = new Payment();
			$payment->setIntent('Sale')
				->setPayer($payer)
				->setRedirectUrls($redirect_urls)
				->setTransactions(array($transaction));

			try{
				$payment->create($this->_api_context);
			}catch (\PayPal\Exception\PayPalConnectionException $ex) {
				return redirect()->route('shopper.self.history')->with('error', 'Something Went wrong! Please retry your payment.');
			}

			foreach ($payment->getLinks() as $link) {
				if ($link->getRel() == 'approval_url') {
					$redirect_url = $link->getHref();
					break;
				}
			}

			// add payment ID to session
			$request->session()->put('paypal_payment_id', $payment->getId());

			if (isset($redirect_url)) {
				// redirect to paypal
				return redirect($redirect_url);
			}

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

    		// Get the payment ID before session clear
			$payment_id = $request->session()->pull('paypal_payment_id');
			if (empty($payment_id)) {
				return redirect()->route('shopper.self.history')->with('error', 'Payment Transaction Cancelled!');
			}

			if (empty($request->PayerID) || empty($request->token)) {
				return redirect()->route('shopper.self.history')->with('error', 'Payment Transaction Failed!');
			}

			$payment = Payment::get($payment_id, $this->_api_context);

			$execution = new PaymentExecution();
			$execution->setPayerId($request->input('PayerID'));

			//Execute the payment
			$result = $payment->execute($execution, $this->_api_context);

			if ($result->getState() == 'approved') {

				foreach ($orders as $order) {
					$final_amount = $order->grand_total;
		    		$payment_gateway_fee = (10/100) * $final_amount;
					$final_amount += $payment_gateway_fee;

					$updateOrder = ShopperOrderSelf::find($order->id);
					$updateOrder->payment_gateway_fee = $payment_gateway_fee;
					$updateOrder->grand_total = $final_amount;
					$updateOrder->save();

					$notify = new AdminNotification;
                    $notify->customer_id = Auth::id();
                    $notify->action_type = 'selfshopper';
                    $notify->action_id = $order->id;
                    $notify->action_description = 'Personal Shopper Payment Successful - PayPal';
                    $notify->save();
				}

				ShopperOrderSelf::where('customer_id', $customer_id)->whereIn('id', $orderids)->update(['payment_gateway_name' => 'paypal', 'status' => 'received', 'created_at' => date("Y-m-d H:i:s") ]);

				return redirect()->route('shopper.self.response');
			}

			foreach ($orders as $order) {
                $notify = new AdminNotification;
                $notify->customer_id = Auth::id();
                $notify->action_type = 'selfshopper';
                $notify->action_id = $order->id;
                $notify->action_description = 'Personal Shopper Payment Failed - PayPal';
                $notify->save();
            }

			return redirect()->route('shopper.self.history')->with('error', 'Unexpected error occurred & payment has been failed.');

    	}else{
			return redirect()->route('shopper.self.history')->with('error', 'Unauthorized customer transaction!');
		}
	}
}
