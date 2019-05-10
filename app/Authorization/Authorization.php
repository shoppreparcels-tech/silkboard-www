<?php

namespace App\Authorization;

use App\Customer;

function  endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}
class Authorization
{
    public function __construct($request)
    {
        $this->data = $request;
    }

    public static function authorizeUser($email)
    {
        $OPS =  2;
        $PARCEL =  3;
        $data_string = [
            'grant_type' => 'loginAs',
            'username' => $email,
            'app_id' => endsWith($email, '@shoppre.com') ? $OPS : $PARCEL,
        ];

        $url = env('MIGRATION_PREFIX') . "login.".env('DOMAIN')."/api/authorise";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: ad5ff945-cdd8-3f67-ddda-9068bfdcce2d"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    public static function authorizeCourierUser($email)
    {
        $Courier =  6;
        $data_string = [
            'grant_type' => 'loginAs',
            'username' => $email,
            'app_id' => $Courier,
        ];

        $url = env('MIGRATION_PREFIX') . "login.".env('DOMAIN')."/api/authorise";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: ad5ff945-cdd8-3f67-ddda-9068bfdcce2d"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

    public static function signUp($customer)
    {
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
            'phone' => $customer->phone,
            'email' => $customer->email,
            'virtual_address_code' => $customer->locker,
            'hooks' => false
        ];

        $url = env('MIGRATION_PREFIX') ."parcel.".env('DOMAIN')."/api/users/public/register";
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

    public static function signUpCourier($customer)
    {
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
            'phone' => $customer->phone,
            'email' => $customer->email,
            'virtual_address_code' => $customer->locker,
            'hooks' => false
        ];

        $url = env('MIGRATION_PREFIX') ."courier.".env('DOMAIN')."/api/users/public/register";
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
}
