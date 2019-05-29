<?php

namespace App\Http\Controllers\Myaccount\Customer;

use App\Mail\Myaccount\SignUpWelcomeMail;
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
use App\Authorization\Authorization;
use App\Address;
use App\RefferCode;
use App\LoyaltyPoint;
use App\LoyaltyHistory;
use App\ShipRequest;
use App\CustomerSurvey;
use App\ShippingPreference;
use App\ShopperBalance;
use App\WalletTransaction;
use App\AdminNotification;
use App\LoyaltyMisc;
use App\Mail\Myaccount\RefferMail;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function welcomeEmail()
    {
        $customer_id = Auth::id();
        $customer = Customer::find($customer_id);
        return view('myaccount.email.welcome-email')
               ->with([
                   'name' => $customer->name,
                   'locker' => $customer->locker,
                   'created_at' => $customer->created_at,
               ]);
    }

    public function createSubscriber(Request $req){
        $id = Auth::id();
        $customer = Customer::select(['name','email'])->where('id','=',$id)->first();
        $apikey = 'd52844a7704e4772bc05e68027403230-us18';
        $auth = base64_encode( 'user:'.$apikey );
        $email = $customer->email;
        $name = $customer->name;
        $region = $req->region;
        $data = array(
            'apikey'        => $apikey,
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => array(
                'NAME' => $name,
                'REGION' => $region
            )
        );
        $json_data = json_encode($data);
       try {
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, 'https://us18.api.mailchimp.com/3.0/lists/e209b5ac6e/members/');
           curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
               'Authorization: Basic '.$auth));
           curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($ch, CURLOPT_TIMEOUT, 10);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

           $result = curl_exec($ch);

//           var_dump($result);
           return response()->json([
               'message' => 'success'
           ]);
       }
       catch(\Exception $e)
       {
           return response()->json([
               'message' => 'error'
           ]);
       }
    }

    public function migrate(Request $request)
    {
//        echo $request->id;exit;
        if ($request->admin === 'yes') {
            $id = $request->id;
        } else {
            $id = Auth::id();
        }

        $customer = Customer::find($id);

        $status_code = $this->signUp($customer, 'parcel');
//        echo  "customer".$customer;exit;

        if ($status_code == 201)
        {
            $customer->is_migrated = 2;
            $customer->save();
            $authorized_url = Authorization::authorizeUser($customer->email);
            return redirect($authorized_url);
        }
        if ($status_code == 409)
        {
            $authorized_url = Authorization::authorizeUser($customer->email);
            return redirect($authorized_url);
        }
        return redirect()->back();
    }

    public function lockerReadyShip(Request $request)
    {
        $id = Auth::id();
        $customer = Customer::find($id);

        if (($customer->is_migrated == 0 && $customer->is_courier_migrated == 0) && ($request->login_attempt =='no' || $request->login_attempt =='')) {

            $status_code = $this->signUp($customer, 'parcel');

            if ($status_code == 201 && $customer->is_migrated == 1)
            {
                $customer->is_migrated = 2;
                $customer->save();
            } else if($status_code == 201 && $customer->is_courier_migrated == 1) {
                $customer->is_courier_migrated = 2;
                $customer->save();
            }

            if ($customer->is_courier_migrated === 2) {
                $authorized_url = Authorization::authorizeCourierUser($customer->email);
            } else {
                $authorized_url = Authorization::authorizeUser($customer->email);
            }

            return redirect($authorized_url);
        } else if(($customer->is_migrated == 2 && $customer->is_courier_migrated == 0)&& ($request->login_attempt =='no' || $request->login_attempt =='')) {
            $authorized_url = Authorization::authorizeUser($customer->email);

            if ($request->session()->get('continue')) {
                return redirect($authorized_url. '&continue='.$request->session()->get('continue') );
            } else {
                return redirect($authorized_url);
            }
        } else if(($customer->is_migrated == 0 && $customer->is_courier_migrated == 2)&& ($request->login_attempt =='no' || $request->login_attempt =='')) {

            $authorized_url = Authorization::authorizeCourierUser($customer->email);

            if ($request->session()->get('continue')) {
                return redirect($authorized_url. '&continue='.$request->session()->get('continue') );
            } else {
                return redirect($authorized_url);
            }
        }  else if(($customer->is_migrated == 2 && $customer->is_courier_migrated == 2)&& ($request->login_attempt =='no' || $request->login_attempt =='')) {
            $authorized_url = Authorization::authorizeUser($customer->email);

            if ($request->session()->get('continue')) {
                return redirect($authorized_url. '&continue='.$request->session()->get('continue') );
            } else {
                return redirect($authorized_url);
            }
        } else if (($customer->is_migrated == 2 && $customer->is_courier_migrated == 0) && ($request->login_attempt =='yes' || $request->login_attempt == '')) {
            $authorized_url = Authorization::authorizeUser($customer->email);
            if ($request->session()->get('continue')) {
                return redirect($authorized_url. '&continue='. $request->session()->get('continue') );
            } else {
                return redirect($authorized_url);
            }
        } else if (($customer->is_migrated == 0 && $customer->is_courier_migrated == 2) && ($request->login_attempt =='yes' || $request->login_attempt == '')) {
            $authorized_url = Authorization::authorizeCourierUser($customer->email);
            if ($request->session()->get('continue')) {
                return redirect($authorized_url. '&continue='. $request->session()->get('continue') );
            } else {
                return redirect($authorized_url);
            }
        } else if (($customer->is_migrated == 2 && $customer->is_courier_migrated == 2) && ($request->login_attempt =='yes' || $request->login_attempt == '')) {
            $authorized_url = Authorization::authorizeUser($customer->email);
            if ($request->session()->get('continue')) {
                return redirect($authorized_url. '&continue='. $request->session()->get('continue') );
            } else {
                return redirect($authorized_url);
            }
        }

        $ships = Package::where('customer_id', $id)->where('status', 'ship')->orderBy('created_at', 'desc')->get();
        $reviews = Package::where('customer_id', $id)->whereIn('status', ['review', 'split','return'])->get();
        $confirms = Package::with('items')->where('customer_id', $id) ->whereIn('status', ['invoice', 'values']) ->get();
        $packages = Package::where('customer_id', $id)->whereIn('status', ['ship','review','invoice','values', 'return'])->get();
        $package_count = count($packages);
        $ship_request_count = ShipRequest::where('customer_id', $id)->count();

        $shipConfirm = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['confirmation', 'inqueue'])->where('payment_gateway_name', '!=', 'wire')->get();
        $shipQueue = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['inreview', 'inqueue', 'confirmation','received'])->get();

        $shipment_count = count($shipQueue);
        $survey = CustomerSurvey::where('customer_id', $id)->first();
        $country = Country::orderBy('id')
            ->select('id', 'name', 'phone_code')
            ->get();

        $product_categories = array('Clothes','Jewellery','Bags','Food Items','Medicines',
            'Home Decor','Books','Cosmetics','Handicraft','Electronics','Watches','Footwear','Car & Bike parts');

        $is_new = false;
        if ($package_count === 0 && $shipment_count === 0 ) {
            $is_new = true;
        }

        return view('myaccount.customer.locker._ship')->with([
            'customer'=>$customer,
            'ships'=>$ships,
            'reviews'=>$reviews,
            'confirms'=>$confirms,
            'packages'=>$packages,
            'shipQueue'=>$shipQueue,
            'country' => $country,
            'survey'=>$survey,
            'shipConfirm'=>$shipConfirm,
            'IS_NEW' => $is_new,
            'NEVER_SENT_SHIPMENTS' =>  $ship_request_count == 0,
            'package_count' => $package_count,
            'IS_MOBILE' => $request->path() == "locker-mobile",
            'productCategories' => $product_categories,
            'shipment_count' => $shipment_count,
        ]);
    }

    public function signUp($customer, $domain)
    {
            $httpcode = $this->signUpApi($customer);
            return $httpcode;
//            $curl = curl_init();
//            $name = $customer->name;
//            $name = str_replace("Mr. ","",$name);
//            $name = str_replace("Ms. ","",$name);
//            $name = str_replace("Mrs. ","",$name);
//            $splitName = explode(' ', $name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones
//
//            $first_name = $splitName[0];
//            $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
//            $last_name = !empty($splitName[2]) ? $splitName[2] : '';
//            $data_string = [
//                'id' => $customer->id,
//                'salutation' => '',
//                'first_name' => $first_name,
//                'last_name' => $middle_name.' '.$last_name,
//                'email' => $customer->email,
//                'referer' => $customer->referer,
//                'first_visit' => $customer->first_visit,
//                'utm_campaign' => $customer->utm_campaign,
//                'utm_source' => $customer->utm_source,
//                'utm_medium' => $customer->utm_medium,
//                'gcl_id' => $customer->gcl_id,
//                'virtual_address_code' => $customer->locker,
//                'hooks' => false
//            ];
//
//            $url = env('MIGRATION_PREFIX') .$domain.".".env('DOMAIN')."/api/users/public/register";
//            curl_setopt_array($curl, array(
//                CURLOPT_URL => $url,
//                CURLOPT_RETURNTRANSFER => true,
//                CURLOPT_HEADER  => true,
//                CURLOPT_ENCODING => "",
//                CURLOPT_MAXREDIRS => 10,
//                CURLOPT_TIMEOUT => 30,
//                CURLOPT_FOLLOWLOCATION => true,
//                CURLOPT_AUTOREFERER    => true,
//                CURLOPT_CONNECTTIMEOUT => 120,
//                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                CURLOPT_CUSTOMREQUEST => "POST",
//                CURLOPT_POSTFIELDS => json_encode($data_string),
//                CURLOPT_HTTPHEADER => array(
//                    "cache-control: no-cache",
//                    "content-type: application/json",
//                    "postman-token: abea44b9-1858-235d-ef6d-a7d67e8130da"
//                ),
//            ));
//
//            $response = curl_exec($curl);
//            $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//            $err = curl_error($curl);
//
//            curl_close($curl);

//            if ($err) {
//                echo "cURL Error #:" . $err;
//            } else {
//                return $httpcode;
//            }
        }

    public function signUpApi($customer)
    {
            $curl = curl_init();
            $splitName = explode(' ', $customer->name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

            $first_name = $splitName[0];
            $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
            $last_name = !empty($splitName[2]) ? $splitName[2] : '';
            $data_string = [
                'id' => $customer->id,
                'salutation' => '',
                'first_name' => $first_name,
                'last_name' => $middle_name.' '.$last_name,
                'email' => $customer->email,
                'password' => $customer->password,
                'virtual_address_code' => $customer->locker,
                'hooks' => false,
                'referer' => $customer->referer,
                'first_visit' => $customer->first_visit,
                'utm_campaign' => $customer->utm_campaign,
                'utm_source' => $customer->utm_source,
                'utm_medium' => $customer->utm_medium,
                'gcl_id' => $customer->gcl_id,
            ];

            $url = env('MIGRATION_PREFIX') ."login.".env('DOMAIN')."/api/users/register";
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

    public function lockerInreview()
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        $ships = Package::where('customer_id', $id)->where('status', 'ship')->get();
        $reviews = Package::where('customer_id', $id)->whereIn('status', ['review', 'split','return'])->orderBy('created_at', 'desc')->get();
        $confirms = Package::with('items')->where('customer_id', $id) ->whereIn('status', ['invoice', 'values']) ->get();
        $packages = Package::where('customer_id', $id)->whereIn('status', ['ship','review','invoice','values', 'return'])->get();
        $package_count = Package::where('customer_id', $id)->count();

        $shipConfirm = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['confirmation', 'inqueue'])->where('payment_gateway_name', '!=', 'wire')->get();
        $shipQueue = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['inreview', 'inqueue', 'confirmation','received'])->get();

        $survey = CustomerSurvey::where('customer_id', $id)->first();

        return view('myaccount.customer.locker._review')->with(['customer'=>$customer,'package_count' => $package_count,'ships'=>$ships, 'reviews'=>$reviews, 'confirms'=>$confirms, 'packages'=>$packages, 'shipQueue'=>$shipQueue, 'survey'=>$survey, 'shipConfirm'=>$shipConfirm]);
    }

    public function lockerActionRequired()
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        $ships = Package::where('customer_id', $id)->where('status', 'ship')->get();
        $reviews = Package::where('customer_id', $id)->whereIn('status', ['review', 'split','return'])->get();
        $confirms = Package::with('items')->where('customer_id', $id) ->whereIn('status', ['invoice', 'values'])->orderBy('created_at', 'desc')->get();
        $packages = Package::where('customer_id', $id)->whereIn('status', ['ship','review','invoice','values', 'return'])->get();

        $package_count = Package::where('customer_id', $id)->count();

        $shipConfirm = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['confirmation', 'inqueue'])->where('payment_gateway_name', '!=', 'wire')->get();
        $shipQueue = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['inreview', 'inqueue', 'confirmation','received'])->get();

        $survey = CustomerSurvey::where('customer_id', $id)->first();

        return view('myaccount.customer.locker._action')->with(['customer'=>$customer,'package_count' => $package_count, 'ships'=>$ships, 'reviews'=>$reviews, 'confirms'=>$confirms, 'packages'=>$packages, 'shipQueue'=>$shipQueue, 'survey'=>$survey, 'shipConfirm'=>$shipConfirm]);
    }

    public function lockerAllPackages()
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        $ships = Package::where('customer_id', $id)->where('status', 'ship')->get();
        $reviews = Package::where('customer_id', $id)->whereIn('status', ['review', 'split','return'])->get();
        $confirms = Package::with('items')->where('customer_id', $id) ->whereIn('status', ['invoice', 'values']) ->get();
        $packages = Package::where('customer_id', $id)->whereIn('status', ['ship','review','invoice','values', 'return'])->orderBy('created_at', 'desc')->get();
        $package_count = Package::where('customer_id', $id)->count();

        $shipConfirm = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['confirmation', 'inqueue'])->where('payment_gateway_name', '!=', 'wire')->get();
        $shipQueue = ShipRequest::where('customer_id', $id)->whereIn('shipping_status', ['inreview', 'inqueue', 'confirmation','received'])->get();

        $survey = CustomerSurvey::where('customer_id', $id)->first();

        return view('myaccount.customer.locker._all')->with(['customer' => $customer,'package_count' => $package_count, 'ships' => $ships, 'reviews' => $reviews, 'confirms' => $confirms, 'packages' => $packages, 'shipQueue' => $shipQueue, 'survey' => $survey, 'shipConfirm' => $shipConfirm]);
    }

    public function verifyMobile(Request $request) {
        $customer_id = Auth::id();
        $customer = Customer::where('id', $customer_id)->first();
        $customer->phone = $request->mobile;
        $customer->country_code = $request->country;
        $customer->save();
        return redirect()->back()->with(['message'=>'success']);
    }

    public function customerSurvey(Request $request)
    {
            if(!empty($request->source)) {
            $customer_id = Auth::id();
            $product_category = " ";
            if (!empty($request->get('productCategory')))
            {
                $product_category = implode(",",$request->get('productCategory'));
            }
            $customer = Customer::find($customer_id);
            $survey = new CustomerSurvey;
            $survey->customer_id = $customer_id;
            $survey->full_name = $customer->name;
            $survey->email = $customer->email;
            $survey->country_id = $request->country;
            $survey->source = $request->source;
            $survey->age = $request->age;
            $survey->product_category = $product_category;
            $survey->save();
            $this->sendWelcomeMail($customer);
            return redirect()->route('customer.locker');
        }
    }

    public function sendWelcomeMail($customer)
    {
        Mail::to($customer->email)->bcc(['social.shoppre@gmail.com','vismaya.rk@shoppre.com'])
            ->send(new SignUpWelcomeMail($customer));
    }

    public function editProfile()
    {
        $id = Auth::id();
        $customer = Customer::find($id);
        if ($customer->is_migrated == 2) {

            $autorised_url = Authorization::authorizeUser($customer->email);

            return redirect($autorised_url);
        }
        $contact = CustomerContact::where('customer_id', $id)->first();
        $countries = Country::orderBy('name', 'asc')->get();
        return view('myaccount.customer.edit')->with(['customer'=>$customer, 'contact'=>$contact , 'countries'=>$countries]);
    }

    public function postProfile(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $id = Auth::id();
        $customer = Customer::find($id);

        $name = "";
        if (!empty($request->title)) {
            $name .= $request->title.". ";
        }
        $name .= $request->firstname." ".$request->lastname;

        $customer->name = $name;
        $customer->country_code = $request->code;
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
        return view('myaccount.customer.incoming');
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
        $order->tracking_number = $request->tracking_number;
        $order->invoice_no = $request->invoice_no;
        $order->notes = $request->notes;
        $order->document = $filename;
        $order->save();

        $notify = new AdminNotification;
        $notify->customer_id = $id;
        $notify->action_type = 'incoming';
        $notify->action_id = $order->id;
        $notify->action_description = 'Incoming order submitted';
        $notify->save();

        return redirect(route('customer.incoming'))->with('message', 'Your order has been submitted to shoppre package collecting centre. We will update you once your package receive our facility.');
    }

    public function refferAfriend()
    {
        return view('myaccount.customer.reffer');
    }

    public function refferSubmit(Request $request)
    {
        $id = Auth::id();
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $checkEmail = RefferCode::where('friend', $request->email)->get();
            if ($checkEmail->isEmpty()) {
                $reffer = new RefferCode;
                $reffer->customer_id = $id;
                $reffer->friend = $request->email;
                $reffer->referred_url = $request->referrer_url;
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
                $mail = Mail::to($request->email)->send(new RefferMail($code, $customer->name, $friendmsg,$request->referrer_url));

                return response()->json(['error'=> 0, 'mail'=>$mail]);

            }else{
                return response()->json(['error'=> 1, 'msg'=>'Refferal code already submitted for this email address']);
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
        $loyalty = LoyaltyPoint::where('customer_id', $id)->first();
        $history = LoyaltyHistory::where('customer_id', $id)->get();
        $points = LoyaltyMisc::where('customer_id', $id)->get();
        return view('myaccount.customer.loyalty')->with([ 'loyalty'=>$loyalty, 'history'=>$history, 'points' => $points ]);
    }

    public function shoppreWallet()
    {
        $id = Auth::id();
        $transactions = WalletTransaction::where('customer_id', $id)->orderBy('created_at', 'desc')->get();
        $customer = Customer::find($id);
        return view('myaccount.customer.wallet')->with(['transactions'=>$transactions, 'customer'=>$customer]);
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
//        return redirect(env('PREFIX'). 'www.'. env('DOMAIN').'/consolidation-service');
        return redirect(route('home'));
    }

    public function cancelLogout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect(route('customer.login'));
    }
}
