<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use PayPal\Rest\ApiContext;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;

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

	// show paypal form view
	public function showForm(Request $request)
	{
		return view('payments.paypal');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
    		'amount' => 'required|numeric'
    	]);

		$payer = new Payer();
		$payer->setPaymentMethod('paypal');

		$item = new Item();
		$item->setName('Amount to Add')// item name
			->setCurrency('USD')
			->setQuantity(1)
			->setPrice($request->input('amount')); // unit price

		// add item to list
		$item_list = new ItemList();
		$item_list->setItems([$item]);

		$amount = new Amount();
		$amount->setCurrency('USD')
			->setTotal($request->input('amount'));

		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($item_list)
			->setDescription('Amount to Add');

		$redirect_urls = new RedirectUrls();
		// Specify return & cancel URL
		$redirect_urls->setReturnUrl(url('/payment/add-funds/paypal/status'))
			->setCancelUrl(url('/payment/add-funds/paypal/status'));

		$payment = new Payment();
		$payment->setIntent('Sale')
			->setPayer($payer)
			->setRedirectUrls($redirect_urls)
			->setTransactions(array($transaction));

		try {

			$payment->create($this->_api_context);

		} catch (\PayPal\Exception\PayPalConnectionException $ex) {

			$request->session()->flash('alert', 'Something Went wrong, funds could not be loaded');

			return redirect('/payment/add-funds/paypal');
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


		$request->session()->flash('alert', 'Unknown error occurred');
		return redirect('/payment/add-funds/paypal');
	}

	// Paypal process payment after it is done
	public function getPaymentStatus(Request $request)
	{		
		// Get the payment ID before session clear
		$payment_id = $request->session()->pull('paypal_payment_id');

		dd($payment_id);

		if (empty($request->PayerID) || empty($request->token)) {
			return redirect()->back()->with('alert', 'Payment failed');
		}



		$payment = Payment::get($payment_id, $this->_api_context);

		// PaymentExecution object includes information necessary
		// to execute a PayPal account payment.
		// The payer_id is added to the request query parameters
		// when the user is redirected from paypal back to your site
		$execution = new PaymentExecution();
		$execution->setPayerId($request->input('PayerID'));

		//Execute the payment
		$result = $payment->execute($execution, $this->_api_context);

		if ($result->getState() == 'approved') { // payment made
			// Payment is successful do your business logic here
			//dd($result); 

			$request->session()->flash('alert', 'Funds Loaded Successfully!');
			return redirect('/payment/add-funds/paypal');
		}

		$request->session()->flash('alert', 'Unexpected error occurred & payment has been failed.');
		return redirect('/payment/add-funds/paypal');
	}
}
