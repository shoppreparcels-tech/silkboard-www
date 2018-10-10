<?php

namespace App\Asana;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class AsanaTaskOperations
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
       // Write custom code here
    }

    public static function createTask($customer_name, $comment) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://app.asana.com/api/1.0/tasks",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "notes=$comment&name=$customer_name
            &workspace=413352110377780&projects=819867433809220",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer 0/5cb44866cd7f8faf38e257d62a7ea366",
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
                "postman-token: 90ce5bfe-3ac9-9f51-ab0d-1c52f1fe313e"
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
