<?php

namespace App\Authorization;
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

        $url = env('MIGRATION_PREFIX') . "api.".env('DOMAIN')."/authorise";

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

}
