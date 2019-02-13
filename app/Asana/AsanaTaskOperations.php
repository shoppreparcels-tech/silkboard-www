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

    public static function createTask($customer_name, $comment, $form) {
        $curl = curl_init();
        $Bearer="";
        $project_id="";
        $workspace_id="";
        if ($form=="S"){
            $project_id="875224685950696";
            $workspace_id="413352110377780";
            $Bearer = "0/76d37fb13148c2dfa9999734bfcdbb1e";
        }elseif($form=="L"){ //landing pages
            $project_id="939744786724687";
            $workspace_id="413352110377780";
            $Bearer = "0/220f58dd72391032c36a19a66a6606be";
//            $Bearer = "0/b1b8a7e730f8b006467e383e96cb1ef5";
        }elseif($form=="E"){//enquiry
            $project_id="942090929966760";
            $workspace_id="413352110377780";
            $Bearer = "0/b1b8a7e730f8b006467e383e96cb1ef5";
        }elseif($form=="P"){ //personal shopper
            $project_id="1106432437090454";
            $workspace_id="413352110377780";
            $Bearer = "0/c422294a9499228a8f529f83fea3fa2d";
        }elseif($form=="R"){//sgin up
            $project_id="1109042271245800";
            $workspace_id="413352110377780";
            $Bearer = "0/c422294a9499228a8f529f83fea3fa2d";
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://app.asana.com/api/1.0/tasks",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "notes=$comment&name=$customer_name
            &workspace=$workspace_id&projects=$project_id",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer $Bearer",
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
