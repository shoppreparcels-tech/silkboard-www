<?php

namespace App\Api;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class MailChimp
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

    // This method for getting interest id from a group in mailchimp list

    public static function getInterest()
    {

        $api_key = 'a002efc79844b755621fe6c4d1beefc6-us19'; // YOUR API KEY
        $server = 'us19.'; // server name followed by a dot. We use us13 because us13 is present in API KEY

        $list_id = 'f07015fe57';
        $group_id = 'f7b2078168';
        $auth = base64_encode( 'user:'.$api_key );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'api.mailchimp.com/3.0/lists/'.$list_id.'/interest-categories/'.$group_id.'/interests');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic '.$auth));
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);

        $result_obj = json_decode($result);

        foreach ($result_obj->interests as $obj) {
            echo $obj->id . ' - ' . $obj->name;
            echo '<br />';
        }

        echo '<pre>'; print_r($result_obj); echo '</pre>';
    }


    // Create user inside the groups

    public static function signUpSubscriber2($name, $email) {
        $memberHash = md5($email);

        $api_key = 'a002efc79844b755621fe6c4d1beefc6-us19'; // YOUR API KEY
        $server = 'us19.'; // server name followed by a dot. We use us13 because us13 is present in API KEY

        $list_id = 'f995a1fef9'; // YOUR LIST ID
//        $interest = 'af31063117'; // YOUR INTEREST/GROUP ID

        $auth = base64_encode( 'user:'.$api_key );

        $data = array(
            'apikey'        => $api_key,
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => array(
                'FNAME' => $name,
                'LNAME'    => ''

            )
//        ,
//            'interests'        => array(
//                $interest => true
//            ),
        );
        $json_data = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'api.mailchimp.com/3.0/lists/'.$list_id.'/members/'.$memberHash);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic '.$auth));
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

        $result = curl_exec($ch);

        $result_obj = json_decode($result);

        return response()->json([
            'message' => $result_obj
        ]);
    }

    public static function signUpSubscriber($name, $email) {
        $apikey = 'a002efc79844b755621fe6c4d1beefc6-us19';
        $auth = base64_encode( 'user:'.$apikey );
        $listId ='43d34f0675';
        $data = array(
            'apikey'        => $apikey,
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => array(
                'FNAME' => $name,
            )
        );
        $json_data = json_encode($data);
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://us19.api.mailchimp.com/3.0/lists/'.$listId.'/members/');
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
                'message' => 'success',
                "result" => $result,
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'message' => 'error'
            ]);
        }
    }
}
