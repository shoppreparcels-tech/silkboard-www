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
		$countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        if (Address::where('cust_id', Auth::id())->count() < 5) {
            return view('customer.add-address')->with('countries', $countries);
        }else{
            return redirect(route('customer.address'))->with('error', 'You can add only 5 entries to your address book');
        }
	}

	public function submitAddress(Request $request)
	{
		$this->validate($request, [
    		'name' => 'required',
    		'line1' => 'required',
    		'country' => 'required',
    		'state' => 'required',
    		'city' => 'required',
    		'code' => 'required',
    		'phone' => 'required',
    	]);

    	$id = Auth::id();
        $country = Country::find($request->country);

    	$address = new Address;

    	$address->cust_id = $id;
    	$address->name = $request->name;
    	$address->line1 = $request->line1;
    	$address->line2 = $request->line2;
    	$address->state = $request->state;
    	$address->city = $request->city;
        $address->country = $country->name;
        $address->countrid = $country->id;
    	$address->pin = $request->pin;
    	$address->code = $request->code;
    	$address->phone = $request->phone;
    	
    	if (isset($request->default)) {
    		Address::where('cust_id', $id)->update(['default' => 'no']);
    		$address->default = 'yes';
    	}else{
            $count = Address::where('cust_id', $id)->where('default', 'yes')->get()->count();
    		$address->default = ($count == 0) ? 'yes' : 'no';
    	}

    	$address->save();

        if (isset($request->redirect) && !empty($request->redirect)) {
            return redirect($request->redirect);
        }

    	return redirect(route('customer.address'))->with('message', 'Shipping address added successfully.');
	}

	public function editAddress(Request $request)
	{
		$id = Auth::id();

		$address = Address::where('cust_id', $id)->where('id', $request->id)->first();
		if(empty($address)) return redirect(route('customer.address'));

		$countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();

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
    		'code' => 'required',
    		'phone' => 'required',
    	]);

    	$id = Auth::id();
        $country = Country::find($request->country);

    	$address = Address::where('cust_id', $id)->where('id', $request->id)->first();
		if(empty($address)) return redirect(route('customer.address'));

    	$address->name = $request->name;
    	$address->line1 = $request->line1;
    	$address->line2 = $request->line2;
    	$address->state = $request->state;
    	$address->city = $request->city;
        $address->country = $country->name;
        $address->countrid = $country->id;
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

        if (Address::where('cust_id', $id)->where('default', 'yes')->get()->isEmpty()) {
            $address->default = 'yes';
            $address->save();
        }

    	return redirect(route('customer.address'))->with('message', 'Shipping address updated successfully.');
	}

	public function deleteAddress(Request $request)
	{
		$custid = Auth::id();
		if (isset($request->id)) {
			$address = Address::where('cust_id', $custid)->where('id', $request->id)->first();
            if (!empty($address)) {
                $address->delete();
                return redirect(route('customer.address'))->with('error', 'Address removed from account.');
            }else{
                return redirect(route('customer.address'));
            }
		}else{
    		return redirect(route('customer.address'))->with('error', 'Illegal Access Detected.');
		}
	}
}
