<?php

namespace App\Http\Controllers\Customer;

use App\Dump;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;
use App\Api\MailChimp;
use App\CustomerContact;
use App\LoyaltyPoint;
use App\ShippingPreference;
use App\ShopperBalance;
use App\Admin;

use Socialite;
use Auth;
use App\Authorization\Authorization;

function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

class SocialAuthController extends Controller
{
    public function redirectGoogle(Request $req)
    {

        $login_as = $req->loginAs;
        $membership_type = $req->session()->get('membership_type');
        $req->session()->put(['loginAs' => $login_as]);
        $req->session()->put(['member' => $membership_type]);
        return Socialite::driver('google')
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    public function callbackGoogle(Request $request)
    {
        $login_as = $request->session()->get('loginAs');
        $membership_type = $request->session()->get('membership_type');
        $socialUser = Socialite::driver('google')->user();
        switch($login_as) {
            case 'Customer' : if (!empty($socialUser->email)) {
                                    $checkProfile = Customer::where('email', $socialUser->email)->first();
                                    if (empty($checkProfile)) {
                                        $customer = new Customer;
                                        $customer->name = $socialUser->name;
                                        $customer->email = $socialUser->email;
                                        $customer->password = bcrypt('shoppre@570');
                                        do{
                                            $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
                                            $user_code = Customer::where('locker', $code)->get();
                                        }while(!$user_code->isEmpty());
                                        $customer->locker = $code;
                                        $customer->email_verify = 'yes';
                                        $customer->membership_type = 'b';
                                        $customer->save();
                                        $status = MailChimp::signUpSubscriber($socialUser->name,$socialUser->email);
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

                                        $customer_id = $customer->id;

                                        $this->signUp($customer);
                                        Authorization::authorizeUser($customer->email);
                                    } else{
                                        $customer_id = $checkProfile->id;
                                    }

                                    $this->checkProfileSet($customer_id);
                                    $google_contacts_accessed = Customer::where('email' , $socialUser->email)
                                        ->select('google_contacts_accessed')
                                        ->first()->google_contacts_accessed;
                                    $google_contacts_accessed = 1;
                                    if(!$google_contacts_accessed) {
                                        $user_dump = json_encode([
                                            "token" => $socialUser->token,
                                            "refreshToken" => $socialUser->refreshToken,
                                            "expiresIn" => $socialUser->expiresIn,
                                            "id" => $socialUser->id,
                                            "nickname" => $socialUser->nickname,
                                            "name" => $socialUser->name,
                                            "email" => $socialUser->email,
                                            "avatar" => $socialUser->avatar,
                                            "user" => $socialUser->user,
                                            "avatar_original" => $socialUser->avatar_original,
                                        ]);

                                        $accessToken = $socialUser->token;
                                        $max_results = 10000;

                                        $url = 'https://www.google.com/m8/feeds/contacts/default/full?max-results='
                                            . $max_results . '&access_token=' . $accessToken . '&alt=json';

                                        $contacts_dump = file_get_contents_curl($url);

                                        $google_json = json_decode($contacts_dump);
                                        $contacts = array_map(function ($x) use ($customer_id) {
                                            return [
                                                'name' => $x->title->{'$t'},
                                                'email' => isset($x->{'gd$email'}) ? $x->{'gd$email'}[0]->address : '',
                                                'phone' => isset($x->{'gd$phoneNumber'}) ? $x->{'gd$phoneNumber'}[0]->{'$t'} : '',
                                                'customer_id' => $customer_id,
                                            ];
                                        }, $google_json->feed->entry);

                                        Contact::insert($contacts);

                                        Dump::insert([
                                            'user' => $user_dump,
                                            'contacts' => $contacts_dump
                                        ]);

                                        Customer::where('id', $customer_id)
                                            ->update([
                                                'google_contacts_accessed' => 1
                                            ]);
                                    }

                                    Auth::loginUsingId($customer_id);

                                    if ($membership_type === 'y' || $membership_type === 'h') {
                                        return redirect(route('member.pay'));
                                    }

                                    return redirect(route('customer.locker'));

                                }else{
                                  return redirect(route('customer.register'))->with('error', 'Sorry, Now we are unable to login/register using Google API. Try again after sometime!');
                                }
                                break;
            case 'Admin' : if (!empty($socialUser->email)) {
                                $mail_domain = explode("@", $socialUser->email);
                                if ($mail_domain[1] == 'shoppre.com')
                                {
                                    $checkProfile = Admin::where('username', $socialUser->email)->first();
                                    if (empty($checkProfile)) {
                                        $admin = new Admin;
                                        $admin->name = $socialUser->name;
                                        $admin->username = $socialUser->email;
                                        $admin->password = bcrypt('admin@2020');
                                        $admin->save();
                                    }
                                    if (Auth::guard('admin')->attempt(['username'=>$socialUser->email, 'password'=>'admin@2020'])) {
                                        return redirect()->intended(route('admin.dashboard'));
                                    }
                                } else {
                                    return redirect(route('admin.login'))->with('error', 'Unauthorized Access');
                                }
                            } else {
                                return redirect(route('admin.login'))->with('error', 'Sorry, Now we are unable to login using Google API. Try again after sometime!');
                            }
                            break;
        }
    }


    public function signUp($customer)
    {
        $status = $this->signUpAPI($customer);
        $curl = curl_init();
        $name = $customer->name;
        $name = str_replace("Mr. ","",$name);
        $name = str_replace("Ms. ","",$name);
        $name = str_replace("Mrs. ","",$name);
        $splitName = explode(' ', $name, 3); // Restricts it to only 3 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $middle_name = !empty($splitName[1]) ? $splitName[1] : '';
        $last_name = !empty($splitName[2]) ? $splitName[2] : '';
        $data_string = [
            'id' => $customer->id,
            'salutation' => '',
            'first_name' => $first_name,
            'last_name' => $middle_name.' '.$last_name,
            'email' => $customer->email,
            'virtual_address_code' => $customer->locker,
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

        $customer = Customer::find($customer->id);

        if ($httpcode == 201)
        {
            $customer->is_migrated = 2;
            $customer->save();
        }

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

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(Request $request)
    {
        $membership_type = $request->session()->get('membership_type');
    	if (isset($request->error_code) && $request->error_code == 200) {
    		return redirect(route('customer.register'))->with('error', 'Facebook login process canceled.');
    	}

        $socialUser = Socialite::driver('facebook')->user();
        if (!empty($socialUser->email)) {
        	$checkProfile = Customer::where('email', $socialUser->email)->first();
	        if (empty($checkProfile)) {
	        	$customer = new Customer;
			    $customer->name = $socialUser->name;
			    $customer->email = $socialUser->email;
			    $customer->password = bcrypt('shoppre@570');
			    do{
			        $code = 'SHPR'.rand(10, 99)."-".rand(100, 999);
			        $user_code = Customer::where('locker', $code)->get();
			    }while(!$user_code->isEmpty());
			    $customer->locker = $code;
			    $customer->email_verify = 'yes';
                $customer->membership_type = 'b';
			    $customer->save();

                $status = MailChimp::signUpSubscriber($socialUser->name,$socialUser->email);


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

			    $customer_id = $customer->id;
                $this->signUp($customer);
                Authorization::authorizeUser($customer->email);
	        }else{
	        	$customer_id = $checkProfile->id;
	        }

	        $this->checkProfileSet($customer_id);
	        Auth::loginUsingId($customer_id);

            if ($membership_type === 'y' || $membership_type === 'h') {
                return redirect(route('member.pay'));
            }

	        return redirect()->route('customer.locker');

        }else{
        	return redirect(route('customer.register'))->with('error', 'Sorry, Now we are unable to login/register using Facebook API. Try again after sometime!');
        }
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
}
