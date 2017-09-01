<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Address;
use App\Country;

class AddressController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:customer');
	}

	public function addressBook()
	{
		$id = Auth::id();
		$address = Address::where('cust_id', $id)->get();
		return view('customer.address')->with('address', $address);
	}

	public function addAddress()
	{
		$countries = Country::orderBy('name', 'asc')->get();
		return view('customer.add-address')->with('countries', $countries);
	}

	public function submitAddress(Request $request)
	{
		$this->validate($request, [
    		'name' => 'required',
    		'line1' => 'required',
    		'country' => 'required',
    		'state' => 'required',
    		'city' => 'required',
    		'pin' => 'required',
    		'code' => 'required',
    		'phone' => 'required',
    	]);

    	$id = Auth::id();

    	$address = new Address;

    	$address->cust_id = $id;
    	$address->name = $request->name;
    	$address->line1 = $request->line1;
    	$address->line2 = $request->line2;
    	$address->country = $request->country;
    	$address->state = $request->state;
    	$address->city = $request->city;
    	$address->pin = $request->pin;
    	$address->code = $request->code;
    	$address->phone = $request->phone;
    	
    	if (isset($request->default)) {
    		Address::where('cust_id', $id)->update(['default' => 'no']);
    		$address->default = 'yes';
    	}else{
    		$address->default = 'no';
    	}

    	$address->save();

    	return redirect(route('customer.address'))->with('message', 'Shipping address added successfully.');
	}

	public function editAddress(Request $request)
	{
		$id = Auth::id();

		$address = Address::where('cust_id', $id)->where('id', $request->id)->first();
		if(empty($address)) return redirect(route('customer.address'));

		$countries = Country::orderBy('name', 'asc')->get();

		return view('customer.edit-address')->with(['address'=>$address, 'countries'=>$countries]);
	}

	public function updateAddress(Request $request)
	{
		$this->validate($request, [
    		'name' => 'required',
    		'line1' => 'required',
    		'country' => 'required',
    		'state' => 'required',
    		'city' => 'required',
    		'pin' => 'required',
    		'code' => 'required',
    		'phone' => 'required',
    	]);

    	$id = Auth::id();

    	$address = Address::where('cust_id', $id)->where('id', $request->id)->first();
		if(empty($address)) return redirect(route('customer.address'));

    	$address->name = $request->name;
    	$address->line1 = $request->line1;
    	$address->line2 = $request->line2;
    	$address->country = $request->country;
    	$address->state = $request->state;
    	$address->city = $request->city;
    	$address->pin = $request->pin;
    	$address->code = $request->code;
    	$address->phone = $request->phone;
    	
    	if (isset($request->default)) {
    		Address::where('cust_id', $id)->update(['default' => 'no']);
    		Address::where('id', $request->id)->update(['default' => 'yes']);
    	}else{
    		$address->default = 'no';
    	}

    	$address->save();

    	return redirect(route('customer.address'))->with('message', 'Shipping address updated successfully.');
	}

	public function deleteAddress(Request $request)
	{
		$id = Auth::id();
		if (isset($request->dele_id)) {
			$address = Address::where('cust_id', $id)->where('id', $request->dele_id)->first();
			$address->delete();
			return redirect(route('customer.address'))->with('error', 'Address removed from account.');
		}else{
    		return redirect(route('customer.address'))->with('error', 'Illegal Access Detected.');
		}
	}
}
