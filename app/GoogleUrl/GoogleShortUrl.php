<?php

namespace App\GoogleUrl;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class GoogleShortUrl extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->contact = $request;
    }

    public static function shorten($url) {
        $key = "AIzaSyA-q8Qz-818FQFHITwTqFti00SNlNzyhjU";
        $gurl = "https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyA-q8Qz-818FQFHITwTqFti00SNlNzyhjU";
        $url  = json_encode(array("longUrl" => $url));
        $ch   = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $gurl);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: appliaction/json", "Content-Type: application/json"));

        $r = json_decode(curl_exec($ch));
        return $r->id;
    }

}
