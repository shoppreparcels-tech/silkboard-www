<?php

namespace App\Http\Controllers\Myaccount\Customer;

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

	public function index()
	{
        $countries = Country::orderBy('name', 'asc')
            ->where('shipping', '1')
            ->get();
	    return view('myaccount.customer.address.index')
            ->with([
                'countries'=>$countries,
                'address'=>Address::fetch(Auth::id())
                 ]);
	}

	public function addAddress()
	{
		$countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        if (Address::where('customer_id', Auth::id())->count() < 5) {
            return view('myaccount.customer.add-address')->with('countries', $countries);
        }else{
            return redirect(route('customer.address'))->with('error', 'You can add only maximum 5 entries to your address book');
        }
	}

	public function submitAddress(Request $req)
	{
		$this->validate($req, [
            'salutation' => 'required',
            'first_name' => 'required',
    		'last_name' => 'required',
    		'line1' => 'required',
    		'country_id' => 'required',
    		'state' => 'required',
    		'city' => 'required',
    		'country_code' => 'required',
    		'phone' => 'required',
    	]);

    	$req->user = Auth::user();
    	$address = new Address;

    	$address->customer_id = $req->user->id;
    	$address->first_name = $req->first_name;
    	$address->last_name =$req->last_name;
    	$address->salutation =$req->salutation;
    	$address->line1 =$req->line1;
    	$address->line2 =$req->line2;
    	$address->state =$req->state;
    	$address->city =$req->city;
        $address->country_id = $req->country_id;
    	$address->pincode =$req->pincode;
    	$address->country_code = $req->country_code;
    	$address->phone =$req->phone;
    	if (isset($request->is_default)) {
    		Address::where('customer_id', $req->user->id)->update(['is_default' => false]);
    		$address->is_default = true;
    	}else{
            $count = Address::where('customer_id', $req->user->id)->where('is_default')->count();
    		$address->is_default = ($count == 0);
    	}

    	$address->save();

        if (isset($request->redirect) && !empty($req->redirect)) {
            return redirect($req->redirect);
        }

    	return redirect(route('customer.address'))->with('message', 'Shipping address added successfully.');
	}

    public function show(Request $req)
    {
        $req->user = Auth::user();

        $address = Address::where('customer_id', $req->user->id)
            ->select(
                'id', 'customer_id', 'country_id', 'first_name', 'last_name', 'salutation', 'line1', 'line2',
                'state', 'city', 'country', 'pincode', 'country_code', 'phone', 'is_default'
            )
            ->where('id', $req->id)->first();

        if (empty($address)) return response(null,404);

        return response()->json($address);
    }

	public function update(Request $req)
	{
	    $this->validate($req, [
            'salutation' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'line1' => 'required',
            'country_id' => 'required',
            'state' => 'required',
            'city' => 'required',
            'country_code' => 'required',
            'phone' => 'required',
        ]);

	    $req->user = Auth::user();
        $country = Country::find($req->country_id);

    	$address = Address::where('customer_id', $req->user->id)
            ->select(
                'id', 'customer_id', 'country_id', 'first_name', 'last_name', 'salutation', 'line1', 'line2',
                'state', 'city', 'country', 'pincode', 'country_code', 'phone', 'is_default'
            )
            ->where('id', $req->id)->first();

		if(empty($address)) return redirect(route('customer.address'));

        $address->first_name =  $req->first_name;
        $address->last_name =  $req->last_name;
        $address->salutation = $req->salutation;
    	$address->line1 = $req->line1;
    	$address->line2 = $req->line2;
    	$address->state = $req->state;
    	$address->city = $req->city;
        $address->country_id = $country->id;
    	$address->pincode = $req->pincode;
    	$address->country_code = $country->phone_code;
    	$address->phone = $req->phone;
    	if (isset($req->is_default)) {
    		Address::where('customer_id', $req->user->id)->update(['is_default' =>  false]);
    		Address::where('id', $req->id)->update(['is_default' => true]);
    	} else {
    		$address->is_default = false;
    	}

    	$address->save();

        if (Address::where('customer_id', $req->user->id)->where('is_default')->get()->isEmpty()) {
            $address->is_default = true;
            $address->save();
        }

        if (isset($req->edit_add) && !empty($req->edit_add)) {
            return redirect()->back();
        }

    	return redirect(route('customer.address'))->with('message', 'Shipping address updated successfully.');
	}

    public function makeDefault(Request $request)
    {
        $customer_id = Auth::id();
        Address::where('customer_id', $customer_id)->update(['is_default' => false]);
        Address::where('id', $request->id)
            ->where('customer_id', $customer_id)
            ->update(['is_default' => true]);
        return redirect(route('customer.address'))->with('message', 'Default address updated!');
    }

	public function deleteAddress(Request $request)
	{
		$customer_id = Auth::id();
		if (isset($request->id)) {
			$address = Address::where('customer_id', $customer_id)->where('id', $request->id)->first();
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
