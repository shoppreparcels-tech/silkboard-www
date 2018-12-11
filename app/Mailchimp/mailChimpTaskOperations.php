<?php

namespace App\Mailchimp;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class mailChimpTaskOperations
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

    public static function createList($list_id, $auth, $json_data)
    {
//        return $json_data;
////        print json_encode($comment);
////        print json_encode($form);exit;
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://us19.api.mailchimp.com/3.0/lists/' . $list_id . '/members/');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                'Authorization: Basic ' . $auth));
            curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
            $result = curl_exec($ch);

            // this code is required for next iteration
            return response()->json([
                'message' => 'success'
            ]);
//            $this->sendEmailtoSubscriber($email);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'error'
            ]);
        }
    }
}
