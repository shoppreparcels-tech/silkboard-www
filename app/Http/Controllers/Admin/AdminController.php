<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Auth;

use App\Customer;
use App\CustomerContact;
use App\Country;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\ShippingPreference;
use App\ShopperBalance;
use App\IncomingOrder;


class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:admin');
	}

    public function index()
    {
    	return view('admin.index');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.login');
    }

    public function customers()
    {
    	$customers = Customer::orderBy('created_at', 'desc')->paginate(100);
    	return view('admin.customers')->with('customers', $customers);
    }

    public function addCustomer()
    {
        $countries = Country::all();
        return view('admin.customer_add')->with(['countries'=>$countries]);
    }

    public function submitCustomer(Request $request)
    {
        $rules = array(
            'name' => 'required|max:250',
            'email' => 'required|email|max:250|unique:customers',
        );

        $this->validate($request, $rules);

        $password = 'shoppre@570';

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($password);

        do
        {
            $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
            $user_code = Customer::where('locker', $code)->get();
        }
        while(!$user_code->isEmpty());
        $customer->locker = $code;

        $customer->email_verify = ($request->email_verify == '1') ? 'yes' : 'no';
        $customer->save();

        $contact = new CustomerContact;
        $contact->customer_id = $customer->id;
        $contact->save();

        $loyalty = new LoyaltyPoint;
        $loyalty->custid = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = 0;
        $loyalty->total = 0;
        $loyalty->save();

        $setting = new ShippingPreference;
        $setting->custid = $customer->id;
        $setting->save();

        $balance = new ShopperBalance;
        $balance->custid = $customer->id;
        $balance->amount = 0;
        $balance->save();

        return redirect()->route('admin.customer.edit', [$customer->id]);
    }

    public function editCustomer(Request $request)
    {
    	$customer = Customer::find($request->id);
        $countries = Country::all();
    	if (!empty($customer)) {
            $this->checkProfileSet($customer->id);
    		return view('admin.customer')->with(['customer'=>$customer, 'countries'=>$countries]);
    	}else{
    		return redirect()->route('admin.customers')->with('error', 'Customer profile doesn\'t exists!');
    	}
    }

    public function checkProfileSet($custid)
    {
        if (empty(CustomerContact::where('customer_id', $custid)->first())) {
            $contact = new CustomerContact;
            $contact->customer_id = $custid;
            $contact->save();
        }
        
        if (empty(LoyaltyPoint::where('custid', $custid)->first())) {
            $loyalty = new LoyaltyPoint;
            $loyalty->custid = $custid;
            $loyalty->level = 1;
            $loyalty->points = 0;
            $loyalty->total = 0;
            $loyalty->save();
        }

        if (empty(ShippingPreference::where('custid', $custid)->first())) {
            $setting = new ShippingPreference;
            $setting->custid = $custid;
            $setting->save();
        }

        if (empty(ShopperBalance::where('custid', $custid)->first())) {
            $balance = new ShopperBalance;
            $balance->custid = $custid;
            $balance->amount = 0;
            $balance->save();
        }
    }

    public function updateCustomer(Request $request){
    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|max:250',
        ]);

        $id = $request->id;

        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->code = $request->code;
        $customer->phone = $request->phone;
        $customer->email_verify = ($request->email_verify == '1') ? 'yes' : 'no';
        $customer->save();

        CustomerContact::updateOrCreate(
            ['customer_id' => $id],
            ['alt_phone' => $request->alt_phone,
            'alt_code' => $request->alt_code,
            'alt_email' => $request->alt_email
            ]
        );
        return redirect()->back()->with('message', 'Profile has been updated!.');
    }

    public function submitMisc(Request $request){
        $this->validate($request, [
            'info' => 'required',
            'points' => 'required',
        ]);

        $misc = new LoyaltyMisc;
        $custid = $request->custid;
        $points = $request->points;

        $misc->custid = $custid;
        $misc->info = $request->info;
        $misc->points = $points;
        $misc->save();

        $loyalid = LoyaltyPoint::where('custid', $custid)->first()->id;
        $loyalty = LoyaltyPoint::find($loyalid);
        $loyalty->points += $points;
        $loyalty->total += $points;

        $level = $loyalty->level;
        if ($loyalty->total > 1000) {
            $level = (int)($loyalty->total / 1000) + 1;
        }
        $loyalty->level = $level;
        $loyalty->save();
        
        return redirect()->back()->with('message', 'Loyalty points updated!.');
    }

    public function removeMisc(Request $request){

        $misc = LoyaltyMisc::find($request->miscid);
        if (!empty($misc)) {
            $custid = $misc->custid;
            $points = $misc->points;

            $loyalid = LoyaltyPoint::where('custid', $custid)->first()->id;
            $loyalty = LoyaltyPoint::find($loyalid);
            $loyalty->points -= $points;
            $loyalty->total -= $points;

            $level = $loyalty->level;
            if ($loyalty->total > 1000) {
                $level = (int)($loyalty->total / 1000) + 1;
            }
            $loyalty->level = $level;
            $loyalty->save();

            $misc->delete();
        }else{
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Loyalty points deleted!.');
    }

    public function deleteCustomer(Request $request)
    {
    	Customer::where('id', $request->id)->delete();
    	return redirect()->route('admin.customers')->with('error', 'Customer profile removed!');
    }

    public function incomingOrders()
    {
        $orders = IncomingOrder::orderBy('created_at', 'desc')->get();
        return view('admin.incoming')->with('orders', $orders);
    }

    public function accessAccount(Request $request)
    {
        $customer = Customer::find($request->id);
        if (!empty($customer)) {
            $check = Auth::guard('customer')->loginUsingId($customer->id);
            return redirect()->route('customer.locker');
        }else{
            return redirect()->route('admin.dashboard');
        }
    }
}
