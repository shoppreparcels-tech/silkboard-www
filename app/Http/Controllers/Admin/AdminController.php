<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Auth;

use App\Customer;
use App\CustomerProfile;

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
    	$customers = Customer::orderBy('created_at', 'desc')->get();
    	return view('admin.customers')->with('customers', $customers);
    }

    public function editCustomer(Request $request)
    {
    	$customer = Customer::find($request->id);
    	if (!empty($customer)) {
    		return view('admin.customer-edit')->with('customer', $customer);
    	}else{
    		return redirect()->route('admin.customers')->with('error', 'Invalid customer profile!');
    	}
    }

    public function updateCustomer(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
        ]);

        $id = $request->id;

        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->save();

        $profile = CustomerProfile::updateOrCreate(
            ['customer_id' => $id],
            ['phone' => $request->phone, 'address' => $request->address, 'city' => $request->city, 'state' => $request->state, 'country' => $request->country, 'pin' => $request->pin]
        );

        return redirect()->back()->with('message', 'Customer profile updated successfully.');
    }

    public function deleteCustomer(Request $request)
    {
    	Customer::where('id', $request->id)->delete();
    	CustomerProfile::where('customer_id', $request->id)->delete();
    	return redirect()->route('admin.customers')->with('error', 'Customer profile removed!');
    }
}
