<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country;
use App\Review;
use App\CountryGuide;

class CountryGuideController extends Controller
{
    public function cGuide(Request $request){

        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        return view('page.cguide.cguide')->with([ 'countries' => $countries ]);
    }

    public function showCguide(Request $request)
    {
        $iso = $request->iso;
        $country = Country::where('iso', $iso)->first();
        if (!empty($country)) {

            $countries = Country::orderBy('name', 'asc')
                ->where('shipping', '1')->get();

            $guide = CountryGuide::where('country_id', $country->id)
                ->first();

            $reviews = Review::where('country_id', $country->id)
                ->where('approve', '1')
                ->orderBy('updated_at', 'desc')
                ->paginate(10);

            $to = $country->currency;
            $INR_USA= file_get_contents("http://apilayer.net/api/live?access_key=c6a86d6673b0065cdf9695625c6d7aeb&currencies=INR&source=USD&format=1");
            $INR_USA_rate = json_decode($INR_USA)->quotes->USDINR;
            $USD_TO_DESTINATION = 'USD'.$to;
            $USD_DESTINATION_rate= 0;
            if ($country->currency != 'USD') {
                $USD_DESTINATION= file_get_contents("http://apilayer.net/api/live?access_key=c6a86d6673b0065cdf9695625c6d7aeb&currencies=$to&source=USD&format=1");
                $USD_DESTINATION_rate = json_decode($USD_DESTINATION)->quotes->$USD_TO_DESTINATION;
                $xchange_rate = number_format( $USD_DESTINATION_rate/ $INR_USA_rate , 3);
            } else {
                $xchange_rate = number_format(1 / $INR_USA_rate, 3);
            }

            return view('page.cguide.cguide')
                ->with([
                    'country' => $country,
                    'countries' => $countries,
                    'reviews' => $reviews,
                    'guide' => $guide,
                    'xchange_rate' => $xchange_rate
                ]);
        }

        return redirect()->route('cguide.cguide');
    }

	public function countryGuide()
	{
		$countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
		return view('page.cguide.index')->with([ 'countries' => $countries ]);
	}

	public function show(Request $request)
	{
		$iso = $request->iso;
		$country = Country::where('iso', $iso)->first();
		if (!empty($country)) {

			$countries = Country::orderBy('name', 'asc')
                ->where('shipping', '1')->get();

			$guide = CountryGuide::where('country_id', $country->id)
                ->first();

			$reviews = Review::where('country_id', $country->id)
                ->where('approve', '1')
                ->orderBy('updated_at', 'desc')
                ->paginate(10);

            $to = $country->currency;
            $INR_USA= file_get_contents("http://apilayer.net/api/live?access_key=c6a86d6673b0065cdf9695625c6d7aeb&currencies=INR&source=USD&format=1");
            $INR_USA_rate = json_decode($INR_USA)->quotes->USDINR;
            $USD_TO_DESTINATION = 'USD'.$to;
            $USD_DESTINATION_rate= 0;
            if ($country->currency != 'USD') {
                $USD_DESTINATION= file_get_contents("http://apilayer.net/api/live?access_key=c6a86d6673b0065cdf9695625c6d7aeb&currencies=$to&source=USD&format=1");
                $USD_DESTINATION_rate = json_decode($USD_DESTINATION)->quotes->$USD_TO_DESTINATION;
                $xchange_rate = number_format( $USD_DESTINATION_rate/ $INR_USA_rate , 3);
            } else {
                $xchange_rate = number_format(1 / $INR_USA_rate, 3);
            }

            return view('page.cguide.view')
                ->with([
                    'country' => $country,
                    'countries' => $countries,
                    'reviews' => $reviews,
                    'guide' => $guide,
                    'xchange_rate' => $xchange_rate
                ]);
		}

		return redirect()->route('cguide.index');
	}

	public function exchangeCalculate(Request $request)
	{
		$result = array();

		$country_from = Country::find($request->country_from);
		$country_to = Country::find($request->country_to);

		if (empty($country_from) || empty($country_to)) {
			$result['error'] = 'We can not process this request! Try again later.';
		}

        $to = $country_to->currency;
        $INR_USA= file_get_contents("http://apilayer.net/api/live?access_key=c6a86d6673b0065cdf9695625c6d7aeb&currencies=INR&source=USD&format=1");
        $INR_USA_rate = json_decode($INR_USA)->quotes->USDINR;
        $USD_TO_DESTINATION = 'USD'.$to;
        $USD_DESTINATION_rate= 0;
        if ($country_to->currency != 'USD') {
            $USD_DESTINATION= file_get_contents("http://apilayer.net/api/live?access_key=c6a86d6673b0065cdf9695625c6d7aeb&currencies=$to&source=USD&format=1");
            $USD_DESTINATION_rate = json_decode($USD_DESTINATION)->quotes->$USD_TO_DESTINATION;
            $result['rate'] = number_format( $USD_DESTINATION_rate/ $INR_USA_rate , 3);
        } else {
            $result['rate'] = number_format(1 / $INR_USA_rate, 3);
        }

		if (empty($result['rate'])) {
			$result['error'] = 'We can not process this request! Try again later.';
		}
		$result['from_curr'] = $country_from->currency;
		$result['to_curr'] = $country_to->currency;
		$result['to_name'] = $country_to->name;
		$result['to_capital'] = $country_to->capital;

        return response()->json($result);
	}

	public function countyRESTcURL(Request $request)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		    CURLOPT_URL => "https://restcountries.eu/rest/v2/all",
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => "",
		    CURLOPT_TIMEOUT => 30000,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => "GET",
		    CURLOPT_HTTPHEADER => array(
		        'Content-Type: application/json',
		    ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
		    echo "cURL Error #:" . $err;
		} else {
			dd(json_decode($response));

			/*$url = "http://www.google.co.in/intl/en_com/images/srpr/logo1w.png";
			$contents = file_get_contents($url);
			$name = substr($url, strrpos($url, '/') + 1);
			file_put_contents(public_path().'/uploads/'.basename($url), $contents);*/
		}
	}
}
