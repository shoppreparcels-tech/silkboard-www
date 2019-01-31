<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Authorization\Authorization;

use Illuminate\Support\Facades\Session;
use Auth;

use App\Customer;
use App\CustomerContact;
use App\Country;
use App\LoyaltyPoint;
use App\LoyaltyMisc;
use App\Admin;
use App\ShippingPreference;
use App\ShopperBalance;
use App\IncomingOrder;
use App\Package;
use App\ShipRequest;
use App\ScheduledMail;
use App\WalletTransaction;
use App\PackageCharge;

use App\Mail\Myaccount\LoyaltyEarned;
use App\Mail\Myaccount\WalletEarned;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:admin');
	}

    public function getPackageCount(Request $request) {
        $customer_id = $request->customer_id;
        $package_count = Package::where('customer_id', $customer_id)->count();
        return response()->json(['package_count' => $package_count]);
    }

	public function packageSubmit(Request $request)
    {
        $package = new Package();
        $customer = Customer::where('locker', $request->locker)->first();
        $packages_count = Package::where('customer_id', $customer->id)->whereIn('status', ['ship','review','invoice','values', 'return'])->count();
        $shipQueue = ShipRequest::where('customer_id', $customer->id)->whereIn('shipping_status', ['inreview', 'inqueue', 'confirmation','received'])->get();

        $shipment_count = count($shipQueue);
        if ($packages_count === 0 && $shipment_count === 0) {
            return redirect()->route('admin.dashboard')->with(['error', 'Please migrate this customer to New Platform','migrate_customer_id'=>$customer->id]);
        }

        if (isset($customer) && !empty($customer)) {
            if($customer->is_migrated == 2) {
               $authrorized_url = Authorization::authorizeUser($customer->email);
                return redirect($authrorized_url);
            }
            do {
                $order_id = 'PCKG-' . rand(100, 999) . $customer->id . rand(1000, 9999);
                $checkOrder = Package::where('order_id', $order_id)->get();
            } while (!$checkOrder->isEmpty());
            $package->order_id = $order_id;
            $package->locker = $request->locker;
            $package->type = $request->type;
            $package->customer_id = $customer->id;
            $package->seller = $request->seller;
            $package->status = 'review';
            $package->received = date("Y-m-d", time());
            $package->save();
            $charges = new PackageCharge;
            $charges->package_id = $package->id;
            $charges->save();
            return redirect()->route('admin.dashboard')->with('message', 'Package added successfully');
        }
        else
        {
            return redirect()->route('admin.dashboard')->with('error', 'Please enter correct locker number');
        }
    }

    public function searchCustomers(Request $request)
    {
        $query = Customer::query();
        if (isset($request->q) && !empty($request->q)) {
            $keyword = $request->q;
            $query->where('name', 'like', '%' . $keyword . '%')
                ->select(['id', 'name', 'locker', 'is_migrated']);
        }
        $customers = $query->get();
        return response()->json(['customers' => $customers]);
    }

    public function quickPackageMigrate(Request $request)
    {
        $userId = $request->id;
        $id = Auth::id();
        $admin = Admin::find($id);

        $AdminUser = new Admin;
        $AdminUser->name = $admin->name;
        $AdminUser->salutation = '';
        $AdminUser->last_name = '';
        $AdminUser->email = $admin->username;
        $AdminUser->mobile = '';
        $AdminUser->password = $admin->password;
        $AdminUser->locker = null;

        $customer = Customer::find($userId);

        if ($customer->is_migrated == 1) {
            $status_code = $this->signUp($customer);

            if ($status_code == 201)
            {
                $customer->is_migrated = 2;
                $customer->save();
            }
        }

        if ($admin->is_migrated == 1) {

            $status_code = $this->signUp($AdminUser);
             if ($status_code == 201)
            {
                $admin->is_migrated = 2;
                $admin->save();
            }
            $authorized_url = Authorization::authorizeUser($admin->username);

            return redirect($authorized_url);
        } else if($admin->is_migrated == 2) {
            $authorized_url = Authorization::authorizeUser($admin->username);
            return redirect($authorized_url);
        } else if($customer->is_migrated == 2) {
            $authorized_url = Authorization::authorizeUser($customer->email);
            return redirect($authorized_url);
        }
    }

    public function signUp($user)
    {
        $status = $this->signUpAPI($user);
        $curl = curl_init();
        $splitName = explode(' ', $user->name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
        $last_name = !empty($splitName[2]) ? $splitName[2] : '';
        $data_string = [
            'id' => $user->id,
            'salutation' => '',
            'first_name' => $first_name,
            'last_name' => $middle_name.' '.$last_name,
            'email' => $user->email,
            'virtual_address_code' => $user->locker,
            'hooks' => false
        ];
        $url = env('MIGRATION_PREFIX') ."parcel-api.".env('DOMAIN')."/api/users/public/register";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER  => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: abea44b9-1858-235d-ef6d-a7d67e8130da"
            ),
        ));

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $httpcode;
        }
    }


    public function signUpAPI($user)
    {
        $curl = curl_init();
        $splitName = explode(' ', $user->name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
        $last_name = !empty($splitName[2]) ? $splitName[2] : '';
        $data_string = [
            'id' => $user->id,
            'salutation' => '',
            'first_name' => $first_name,
            'last_name' => $middle_name.' '.$last_name,
            'email' => $user->email,
            'password' => $user->password,
            'hooks' => false
        ];
        $url = env('MIGRATION_PREFIX') ."api.".env('DOMAIN')."/api/users/public/register";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER  => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: abea44b9-1858-235d-ef6d-a7d67e8130da"
            ),
        ));

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $httpcode;
        }
    }

    public function searchStore(Request $request)
    {
        $query = Store::query();
        if (isset($request->q) && !empty($request->q)) {
            $keyword = $request->q;
            $query->where('name', 'like', '%' . $keyword . '%')
                ->select(['name']);
        }
        $stores = $query->get();
        return response()->json(['stores' => $stores]);
    }

    public function index()
    {

         $customers = Customer::orderBy('id','desc')->get();
         $packages = Package::where('weight','=',null)
                     ->orderBy('id','desc')
                     ->get();
    	 return view('myaccount.admin.index')->with(['customers' => $customers,'packages'=>$packages]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.login');
    }

    public function customers(Request $request)
    {
        $query = Customer::query();
        if (isset($request->search) && !empty($request->search)) {
            $keyword = $request->search;
            $query->orWhere('name', 'like', '%'.$keyword.'%')
                                ->orWhere('email', 'like', '%'.$keyword.'%')
                                ->orWhere('phone', 'like', '%'.$keyword.'%')
                                ->orWhere('locker', 'like', '%'.$keyword.'%');
        }

    	$customers = $query->orderBy('created_at', 'desc')->paginate(100);
//    	$customers = $query->orderBy('created_at', 'desc')->get();
        foreach ($customers as $customer) {
            $this->checkProfileSet($customer->id);
        }
    	return view('myaccount.admin.customers')->with('customers', $customers);
    }

    public function addCustomer()
    {
        $countries = Country::all();
        return view('myaccount.admin.customer_add')->with(['countries'=>$countries]);
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
        $loyalty->customer_id = $customer->id;
        $loyalty->level = 1;
        $loyalty->points = 0;
        $loyalty->total = 0;
        $loyalty->save();

        $setting = new ShippingPreference;
        $setting->customer_id = $customer->id;
        $setting->save();

        $balance = new ShopperBalance;
        $balance->customer_id = $customer->id;
        $balance->amount = 0;
        $balance->save();

        return redirect()->route('admin.customer.edit', [$customer->id]);
    }

    public function editCustomer(Request $request)
    {
    	$customer = Customer::find($request->id);
        $countries = Country::all();
    	if (!empty($customer)) {
            $customer->admin_read = "yes";
            $customer->save();
    		return view('myaccount.admin.customer')->with(['customer'=>$customer, 'countries'=>$countries]);
    	}else{
    		return redirect()->route('admin.customers')->with('error', 'Customer profile doesn\'t exists!');
    	}
    }

    public function markUnread(Request $request)
    {
        $customer = Customer::find($request->customer_id);
        $customer->admin_read = "no";
        $customer->save();
        return redirect()->route('admin.customers');
    }

    public function checkProfileSet($customer_id)
    {
        if (empty(CustomerContact::where('customer_id', $customer_id)->first())) {
            $contact = new CustomerContact;
            $contact->customer_id = $customer_id;
            $contact->save();
        }

        if (empty(LoyaltyPoint::where('customer_id', $customer_id)->first())) {
            $loyalty = new LoyaltyPoint;
            $loyalty->customer_id = $customer_id;
            $loyalty->level = 1;
            $loyalty->points = 0;
            $loyalty->total = 0;
            $loyalty->save();
        }

        if (empty(ShippingPreference::where('customer_id', $customer_id)->first())) {
            $setting = new ShippingPreference;
            $setting->customer_id = $customer_id;
            $setting->save();
        }

        if (empty(ShopperBalance::where('customer_id', $customer_id)->first())) {
            $balance = new ShopperBalance;
            $balance->customer_id = $customer_id;
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
        $customer->country_code = $request->country_code;
        $customer->phone = $request->phone;
        $customer->email_verify = ($request->email_verify == '1') ? 'yes' : 'no';
        if (!empty($request->migrated))
        {
            $customer->is_migrated = $request->migrated;
        }
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
        $customer_id = $request->customer_id;
        $points = $request->points;

        $misc->customer_id = $customer_id;
        $misc->info = $request->info;
        $misc->points = $points;
        $misc->save();

        $loyalid = LoyaltyPoint::where('customer_id', $customer_id)->first()->id;
        $loyalty = LoyaltyPoint::find($loyalid);
        $loyalty->points += $points;
        $loyalty->total += $points;

        if ($loyalty->total < 1000) {
            $loyalty->level = 1;
        }elseif ($loyalty->total >= 1000 && $loyalty->total < 6000) {
            $loyalty->level = 2;
        }elseif ($loyalty->total >= 6000 && $loyalty->total < 26000) {
            $loyalty->level = 3;
        }elseif ($loyalty->total >= 26000) {
            $loyalty->level = 4;
        }

        $loyalty->save();

        $customer = Customer::find($customer_id);
        Mail::to($customer->email)->send(new LoyaltyEarned($customer, $points, $request->info));

        return redirect()->back()->with('message', 'Loyalty points updated!.');
    }

    public function removeMisc(Request $request){

        $misc = LoyaltyMisc::find($request->miscid);
        if (!empty($misc)) {
            $customer_id = $misc->customer_id;
            $points = $misc->points;

            $loyalid = LoyaltyPoint::where('customer_id', $customer_id)->first()->id;
            $loyalty = LoyaltyPoint::find($loyalid);
            $loyalty->points -= $points;
            $loyalty->total -= $points;

            if ($loyalty->total < 1000) {
                $loyalty->level = 1;
            }elseif ($loyalty->total >= 1000 && $loyalty->total < 6000) {
                $loyalty->level = 2;
            }elseif ($loyalty->total >= 6000 && $loyalty->total < 26000) {
                $loyalty->level = 3;
            }elseif ($loyalty->total >= 26000) {
                $loyalty->level = 4;
            }

            $loyalty->save();

            $misc->delete();
        }else{
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Loyalty points deleted!.');
    }

    public function updateMisc(Request $request){

        $misc = LoyaltyMisc::find($request->miscid);
        if (!empty($misc)) {

            $loyalid = LoyaltyPoint::where('customer_id', $misc->customer_id)->first()->id;
            $loyalty = LoyaltyPoint::find($loyalid);
            $loyalty->points -= $misc->points;
            $loyalty->total -= $misc->points;

            $loyalty->points += $request->points;
            $loyalty->total += $request->points;

            if ($loyalty->total < 1000) {
                $loyalty->level = 1;
            }elseif ($loyalty->total >= 1000 && $loyalty->total < 6000) {
                $loyalty->level = 2;
            }elseif ($loyalty->total >= 6000 && $loyalty->total < 26000) {
                $loyalty->level = 3;
            }elseif ($loyalty->total >= 26000) {
                $loyalty->level = 4;
            }

            $loyalty->save();

            $misc->info = $request->info;
            $misc->points = $request->points;
            $misc->save();

            return redirect()->back()->with('error', 'Loyalty points updated!.');
        }

        return redirect()->back();
    }

    public function deleteCustomer(Request $request)
    {
    	Customer::where('id', $request->id)->delete();
    	return redirect()->route('admin.customers')->with('error', 'Customer profile removed!');
    }

    public function incomingOrders()
    {
        $orders = IncomingOrder::orderBy('created_at', 'desc')->get();
        return view('myaccount.admin.incoming')->with('orders', $orders);
    }

    public function incomingUpdate(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'order_id' => 'required',
        ]);

        $order = IncomingOrder::find($request->order_id);
        $order->status = $request->status;
        $order->save();
        return redirect()->back()->with('message', 'Incoming order updated!');
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

    public function walletUpdate(Request $request)
    {
        $this->validate($request, [
            'walid' => 'required',
            'amount' => 'required'
        ]);

        $wallet = ShopperBalance::find($request->walid);
        $wallet->amount = $request->amount;
        $wallet->save();
        return redirect()->back()->with('message', 'Wallet amount updated!');
    }

    public function scheduledMails()
    {
        $mails = ScheduledMail::orderBy('created_at', 'desc')->paginate(20);
        return view('myaccount.admin.scheduled')->with('mails', $mails);
    }

    public function addTransaction(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'amount' => 'required'
        ]);

        $customer = Customer::find($request->customer_id);
        $balance = ShopperBalance::find($customer->balance->id);

        if (!empty($balance)) {
            $balance->amount += $request->amount;
            $balance->save();

            $trans = new WalletTransaction;
            $trans->customer_id = $customer->id;
            $trans->wallet_id = $balance->id;
            $trans->amount = $request->amount;
            $trans->description = $request->description;
            $trans->save();

            Mail::to($customer->email)->send(new WalletEarned($customer, $request->amount, $request->description));

            return redirect()->back()->with('message', 'Wallet transaction added!');
        }

        return redirect()->back();

    }

    public function removeTransaction(Request $request){

        $trans = WalletTransaction::find($request->id);
        if (!empty($trans)) {

            $wallet = ShopperBalance::find($trans->wallet_id);
            $wallet->amount -= $trans->amount;
            $wallet->save();

            $trans->delete();

            return redirect()->back()->with('error', 'Wallet Transaction Removed!.');
        }

        return redirect()->back();
    }

    public function updateTransaction(Request $request){

        $trans = WalletTransaction::find($request->transid);
        if (!empty($trans)) {

            $wallet = ShopperBalance::find($trans->wallet_id);
            $wallet->amount -= $trans->amount;
            $wallet->amount += $request->amount;
            $wallet->save();

            $trans->amount = $request->amount;
            $trans->description = $request->description;
            $trans->save();

            return redirect()->back()->with('message', 'Wallet Transaction Updated!.');
        }

        return redirect()->back();
    }
}
