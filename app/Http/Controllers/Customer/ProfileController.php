<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use DB;
use Hash;
use App\Customer;
use App\CustomerContact;
use App\Package;
use App\Country;
use App\IncomingOrder;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:customer');
	}

    public function viewProfile()
    {
    	$id = Auth::id();
        $customer = DB::table('customers')
            ->where('customer_id', $id)
            ->join('customer_contacts', 'customers.id', '=', 'customer_contacts.customer_id')
            ->select('customers.*', 'customer_contacts.*')
            ->first();

        $ships = Package::where('customer_id', $id)->where('status', 'ship')->get();
        $reviews = Package::where('customer_id', $id)->where('status', 'review')->get();
        $confirms = Package::with('items')->where('customer_id', $id)
                            ->whereIn('status', ['invoice', 'values'])
                            ->get();
        $packages = Package::where('customer_id', $id)->get();

    	return view('customer.locker')->with(['customer'=>$customer, 'ships'=>$ships, 'reviews'=>$reviews, 'confirms'=>$confirms, 'packages'=>$packages]);
    }

    public function editProfile()
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        $contact = CustomerContact::where('customer_id', $id)->first();

        $countries = Country::orderBy('name', 'asc')->get();
        return view('customer.edit')->with(['customer'=>$customer, 'contact'=>$contact , 'countries'=>$countries]);
    }

    public function postProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $id = Auth::id();
        $customer = Customer::find($id);

        $filename = $customer->avatar;

        $customer->name = $request->name;
        $customer->code = $request->code;
        $customer->phone = $request->phone;
        $customer->save();

        CustomerContact::updateOrCreate(
            ['customer_id' => $id],
            ['alt_phone' => $request->alt_phone,
            'alt_code' => $request->alt_code,
            'alt_email' => $request->alt_email
            ]
        );
        return redirect(route('customer.settings'))->with('message', 'Your profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
        $rules = array(
            'old_password' => 'required',
            'password' => 'required|min:6',
            're_password' => 'required|same:password'
        );
        $this->validate($request, $rules);

        $id = Auth::id();
        $customer = Customer::find($id);
        if (Hash::check($request->old_password, $customer->password)) {

            $customer->password = bcrypt($request->password);
            $customer->save();

            Auth::guard('customer')->logout();
            $request->session()->flush();
            $request->session()->regenerate();

            return redirect(route('customer.login'))->with('message', 'Your account password has been updated. Please login to continue.');
        }else{
            return redirect(route('customer.edit'))->with('error', 'Current password entered is incorrect! Please check and try again.');
        }
    }

    public function incomingOrder()
    {
        return view('customer.incoming');
    }

    public function incomingOrderSubmit(Request $request)
    {
        $rules = array(
            'seller' => 'required|max:250',
            'document' => 'required|mimes:pdf,jpeg,bmp,png'
        );

        $this->validate($request, $rules);

        $filename = '';

        if($request->hasFile('document')) {
            $file = $request->file('document');
            $destinationPath = '/uploads/incoming/';
            $filename = "INCMG-".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
        }
        $id = Auth::id();
        $order = new IncomingOrder;
        $order->customer_id = $id;
        $order->seller = $request->seller;
        $order->track_no = $request->track_no;
        $order->invoice_no = $request->invoice_no;
        $order->notes = $request->notes;
        $order->document = $filename;
        $order->save();

        return redirect(route('customer.incoming'))->with('message', 'Your order has been submited to shoppre package collecting centre. We will update you once your package receive our facility.');
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('customer.login');
    }
}
