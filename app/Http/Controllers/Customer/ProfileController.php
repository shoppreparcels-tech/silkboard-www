<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use DB;
use Hash;
use App\Customer;
use App\CustomerContact;
use App\Package;
use App\PackageCharge;
use App\Country;
use App\IncomingOrder;
use App\Address;
use App\RefferCode;
use App\LoyaltyPoint;
use App\LoyaltyHistory;
use App\ShipRequest;
use App\RegisterSurvey;
use App\ShippingPreference;
use App\ShopperBalance;

use App\Mail\RefferMail;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:customer');
	}

    public function viewProfile()
    {
    	$id = Auth::id();
        $this->checkProfileSet($id);
        $customer = Customer::find($id);

        $ships = Package::where('customer_id', $id)->where('status', 'ship')->get();
        $reviews = Package::where('customer_id', $id)->where('status', 'review')->get();
        $confirms = Package::with('items')->where('customer_id', $id)
                            ->whereIn('status', ['invoice', 'values'])
                            ->get();
        $packages = Package::where('customer_id', $id)
                            ->whereIn('status', ['ship','review','invoice','values'])
                            ->get();

        $shipQueue = ShipRequest::where('custid', $id)->whereIn('shipstatus', ['inqueue', 'inreview', 'confirmation'])->get();
        $shipConfirm = ShipRequest::where('custid', $id)->where('shipstatus', 'confirmation')->get();

        foreach ($ships as $ship) {
            $expireDays = 0;
            $expire = strtotime($ship->received.' + 20 days');
            if(time() > $expire){
                $expireDays = floor((time() - $expire) / (60 * 60 * 24)) + 1;
                $storageCost = $expireDays * 100;
                PackageCharge::where('packid', $ship->id)->update([ 'storage' => $storageCost ]);
            }
        }

        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $address = Address::where('cust_id', $id)->where('default', 'yes')->first();

        $survey = RegisterSurvey::where('custid', $id)->first();

    	return view('customer.locker')->with(['customer'=>$customer, 'ships'=>$ships, 'reviews'=>$reviews, 'confirms'=>$confirms, 'packages'=>$packages, 'shipQueue'=>$shipQueue, 'countries'=>$countries, 'address'=>$address, 'survey'=>$survey, 'shipConfirm'=>$shipConfirm]);
    }

    public function registerSurvey(Request $request)
    {
        if(!empty($request->source))
        {
            $custid = Auth::id();
            $customer = Customer::find($custid);
            $survey = new RegisterSurvey;
            $survey->custid = $custid;
            $survey->fullname = $customer->name;
            $survey->email = $customer->email;
            $survey->source = $request->source;
            $survey->save();
            return redirect()->route('customer.locker');
        }else{
            return redirect()->route('customer.locker');
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

    public function refferAfriend()
    {
        return view('customer.reffer');
    }

    public function refferSubmit(Request $request)
    {
        $id = Auth::id();
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $checkEmail = RefferCode::where('friend', $request->email)->get();
            if ($checkEmail->isEmpty()) {
                $reffer = new RefferCode;
                $reffer->custid = $id;
                $reffer->friend = $request->email;
                do
                {
                    $code = $this->randomUnique(8);
                    $user_code = RefferCode::where('code', $code)->get();
                }
                while(!$user_code->isEmpty());
                $reffer->code = $code;
                $reffer->save();

                $customer = Customer::find($id);
                $friendmsg = $request->message;
                $mail = Mail::to($request->email)->send(new RefferMail($code, $customer->name, $friendmsg));

                return response()->json(['error'=> 0, 'mail'=>$mail]);

            }else{
                return response()->json(['error'=> 1, 'msg'=>'Refferal code already submited for this email address']);
            }
        }else{
            return response()->json(['error'=> 1, 'msg'=>'Invalid Email Address']);
        }
    }

    public function randomUnique($size) {
        $alpha_key = '';
        $keys = range('A', 'Z');
        for ($i = 0; $i < 2; $i++) {
            $alpha_key .= $keys[array_rand($keys)];
        }
        $length = $size - 2;
        $key = '';
        $keys = range(0, 9);
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $alpha_key . $key;
    }

    public function loyaltyPoints()
    {
        $id = Auth::id();
        $loyalty = LoyaltyPoint::where('custid', $id)->first();
        $history = LoyaltyHistory::where('custid', $id)->get();
        return view('customer.loyalty')->with([ 'loyalty'=>$loyalty, 'history'=>$history ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('customer.login');
    }
}
