<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class cuelinkController extends Controller
{
    public function index(Request $request)
    {
        $productId = $request->product_id;
        $itemUrl = $this->getProductUrl($productId);
        $data = json_decode($itemUrl, true);
        return view('cuelink.cuelink')->with(['url'=>$data['url']]);
    }

    public function getProductUrl($productId) {

        $url = env('MIGRATION_PREFIX') . "parcel.".env('DOMAIN')."/api/packageItems/".$productId."/itemDetail";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
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
