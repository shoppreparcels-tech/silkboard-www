<?php

namespace App\Http\Controllers;

use App\CampaignStatistics;
use App\City;
use App\Mail\EmailChat;
use App\Mail\EmailSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\Country;
use App\ShippingRate;
use App\StoreCategory;
use App\StoreCatClub;
use App\FaqCategory;
use App\Faq;
use App\Page;
use App\FavoriteStore;
use App\Review;
use App\ChatEmail;
use App\Store;
use App\Asana\AsanaTaskOperations;
use App\Mailchimp\mailChimpTaskOperations;
use App\Mail\ContactEnquiry;
use App\Mail\GetQuote;


class PageController extends Controller
{

    public function icsIndex()
    {
        return view('page.ics');
    }

    public function diwali()
    {
        return view('page.diwali-landing');
    }
    public function christmas()
    {
        return view('page.christmas-landing');
    }
    public function newyear()
    {
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        return view('page.newyear-landing')->with(['countries'=> $countries]);
    }
    public function university()
    {
        return view('page.university-landing');
    }

    public function icsLandingPage()
    {
        return view('page.ics-landing');
    }

    public function flipkartIndex()
    {
        return view('page.flipkart-landing');
    }
    public function myntraIndex()
    {
        return view('page.myntra-landing');
    }
    public function amazonIndex()
    {
        return view('page.amazon-landing');
    }

    public function ifsLandingPage()
    {
        return view('page.personal-shoper');
    }

    public function seller()
    {
        return view('page.become-partner');
    }
    public function radioContest()
    {
        return view('page.radio-contest');
    }
    public function radioTermsConditions()
    {
        return view('page.radio-terms-conditions');
    }
    public function faqNew()
    {
        $categories = FaqCategory::all();
        return view('page.faq-new')->with('categories', $categories);
    }

    public function storeNew()
    {
        $categories = StoreCategory::orderBy('category', 'asc')->get();
        $webs = StoreCatClub::where('category_id', 1)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get();
        $fbs = StoreCatClub::where('category_id', 1)
            ->where('type', 'fb')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get();
        $feats = StoreCatClub::where('category_id', 1)
            ->where('featured', 1)
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get();

        if (Auth::check()) {
            $favs = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
            return view('page.stores-new')->with(['categories' => $categories, 'webs' => $webs, 'fbs' => $fbs, 'feats' => $feats, 'favs' => $favs]);
        }

        return view('page.stores-new')->with(['categories' => $categories, 'webs' => $webs, 'fbs' => $fbs, 'feats' => $feats]);
    }

    public function award()
    {
        return view('page.award');
    }

    public function ifsIndex()
    {
        return view('page.ifs');
    }

    public function aboutIndex()
    {
        return view('page.about-new');
    }

    public function contactIndex()
    {
        return view('page.contact-new');
    }

    public function offersIndex()
    {
        return view('page.offers-new');
    }

    public function pricing1()
    {
        $reviews = Review::orderBy('updated_at', 'desc')
            ->where('approve', '1')
            ->limit(10)
            ->get();
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        return view('page.pricing-old')->with(['reviews' => $reviews, 'countries' => $countries]);

    }

    public function createSubscriber(Request $req)
    {
        $id = Auth::id();
        $apikey = '6ba458bdb6f82f2b2e45c7ab25204e37-us19';
        $list_id = '551f00fe3c';
        $auth = base64_encode('user:' . $apikey);
        $email = $req->email;
        $data = array(
            'apikey' => $apikey,
            'email_address' => $email,
            'status' => 'subscribed'
        );

        $json_data = json_encode($data);
        $commnet = "Enquiry from footer subscriber email: ".$email;
        AsanaTaskOperations::createTask($email, $commnet, "E");
//        mailChimpTaskOperations::createList($list_id, $auth, $json_data);


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

    public function diwaliCoupon(Request $req)
    {
        $id = Auth::id();
        $apikey = '6ba458bdb6f82f2b2e45c7ab25204e37-us19';
        $list_id = '458f84e53e';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)) {
            $email = $req->email;
            $name = $req->name;
            $contact = $req->contact_no;
            $commnet = "Lead from diwali landing page email " . $email . "\n contact No: " . $contact;
            AsanaTaskOperations::createTask($name, $commnet, "L");
        }

        $data = array(
            'apikey' => $apikey,
            'email_address' => $email,
            'status' => 'subscribed',
            'merge_fields' => array(
                'FNAME' => $name,
                'LNAME' => '',
                'PHONE' => $contact
            )
        );
        $json_data = json_encode($data);
        mailChimpTaskOperations::createList($list_id, $auth, $json_data);
    }

    public function newYearOffer(Request $req)
    {
        $id = Auth::id();
        $apikey = 'a002efc79844b755621fe6c4d1beefc6-us19';
        $list_id = '554a2a1794';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)){
            $email = $req->email;
            $pnumber =$req->pnumber;
            $cnumber =$req->cnumber;
            $commnet = "Lead from NewYear landing page email ".$email."\n Phone number +".$cnumber."-".$pnumber;
            AsanaTaskOperations::createTask($email, $commnet, "L");
          
            $data = array(
                'apikey' => $apikey,
                'email_address' => $email,
                'status' => 'subscribed',
                'merge_fields' => array(
                    'PHONE' => '+'.$cnumber. $pnumber
                )
            );
            $json_data = json_encode($data);
            mailChimpTaskOperations::createList($list_id, $auth, $json_data );
        };
    }
    public function icsLandingPageSubmit(Request $req)
    {
        $id = Auth::id();
        $apikey = 'a002efc79844b755621fe6c4d1beefc6-us19';
        $list_id = '458f84e53e';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)) {
            $email = $req->email;
            $name = $req->name;
            $contact = $req->contact_no;
            $commnet = "Lead from send-international-courier-from-india landing page email " . $email . "\n contact No: " . $contact . "\n Name :" . $name;
            AsanaTaskOperations::createTask($name, $commnet, "L");
        }

        $data = array(
            'apikey' => $apikey,
            'email_address' => $email,
            'status' => 'subscribed',
            'merge_fields' => array(
                'FNAME' => $name,
                'LNAME' => '',
                'PHONE' => $contact
            )
        );
        $json_data = json_encode($data);
        mailChimpTaskOperations::createList($list_id, $auth, $json_data);
    }
    public function psLandingPageSubmit(Request $req)
    {
        $id = Auth::id();
        $apikey = '6ba458bdb6f82f2b2e45c7ab25204e37-us19';
        $list_id = '458f84e53e';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)) {
            $email = $req->email;
            $name = $req->name;
            $contact = $req->contact_no;
            $commnet = "Lead from personal-shopper-india landing page email " . $email . "\n contact No: " . $contact . "\n Name :" . $name;
            AsanaTaskOperations::createTask($name, $commnet, "L");
        }

        $data = array(
            'apikey' => $apikey,
            'email_address' => $email,
            'status' => 'subscribed',
            'merge_fields' => array(
                'FNAME' => $name,
                'LNAME' => '',
                'PHONE' => $contact
            )
        );
        $json_data = json_encode($data);
        mailChimpTaskOperations::createList($list_id, $auth, $json_data);
    }
    public function radconSubmit(Request $req)
    {
        $id = Auth::id();
        $apikey = '6ba458bdb6f82f2b2e45c7ab25204e37-us19';
        $list_id = '458f84e53e';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)) {
            $email = $req->email;
            $name = $req->name;
            $contact = $req->contact_no;
            $coupon = $req->coupon_code;
            $commnet = "Lead from radcon landing page email " . $email . "\n contact No: " . $contact . "\n Coupon No :" . $coupon;
            AsanaTaskOperations::createTask($name, $commnet, "L");
        }
        $data = array(
            'apikey' => $apikey,
            'email_address' => $email,
            'status' => 'subscribed',
            'merge_fields' => array(
                'FNAME' => $name,
                'LNAME' => '',
                'PHONE' => $contact
            )
        );
        $json_data = json_encode($data);
        mailChimpTaskOperations::createList($list_id, $auth, $json_data);
    }
    public function christmasSubmit(Request $req)
    {
        $id = Auth::id();
        $apikey = '6ba458bdb6f82f2b2e45c7ab25204e37-us19';
        $list_id = '458f84e53e';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)) {
            $email = $req->email;
            $commnet = "Lead from christmas landing page email " . $email;
            AsanaTaskOperations::createTask($email, $commnet, "L");
        }
    }
    public function universitySubmit(Request $req)
    {
        $id = Auth::id();
        $apikey = '6ba458bdb6f82f2b2e45c7ab25204e37-us19';
        $list_id = '458f84e53e';
        $auth = base64_encode('user:' . $apikey);
        if (!empty($req->email)) {
            $email = $req->email;
            $commnet = "Lead from university landing page email " . $email;
            AsanaTaskOperations::createTask($email, $commnet, "L");
        }
    }
    public function sendEmailtoSubscriber($email)
    {
        Mail::to($email)
            ->bcc(['support@shoppre.com'])
            ->send(new EmailSubscriber($email));

    }


    public function getCountry()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.myip.com/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 616f5043-e64a-3446-aef2-4bd5a92ccb03"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }


    public function saveFlyerUser(Request $request)
    {
        $emp_id = 616;
        $campaign_id = 2;
        $name = "Flyer";
        $channel = "newspaper";
        $campaign_data = new CampaignStatistics();
        $campaign_data->name = $name;
        $campaign_data->coupon_code = $request->coupon;
        $campaign_data->url = $request->url;
        $campaign_data->campaign_id = $campaign_id;
        $campaign_data->employee_id = $emp_id;
        $campaign_data->channel = $channel;
        $result = $campaign_data->save();

        return response()->json(['error' => '0', 'message' => 'Success']);
    }

    public function customerPricing(Request $request)
    {
        $item_type = $request->type;
        $weight = $request->weight;
        $country_id = $request->dest;

        $country = Country::find($country_id);

        $unit = $request->unit;
        $discount = $country->discount;

        $type = $request->weight <= 2 ? $item_type : 'nondoc';

        if ($weight <= 300) {
            $rate = ShippingRate::where('country_id', $country->id)
                ->where('item_type', $type)
                ->where('min', '<', $weight)
                ->where('max', '>=', $weight)
                ->first();
        } else {
            $rate = ShippingRate::where('country_id', $country->id)
                ->where('item_type', $type)
                ->where('min', '<', $weight)
                ->where('max', '=', 0)
                ->first();
        }

        $reviews = Review::orderBy('updated_at', 'desc')
            ->where('approve', '1')
            ->limit(10)
            ->get();

        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();

        if (!empty($rate)) {
            $amount = $rate->rate_type == "fixed" ? $rate->amount : $rate->amount * $weight;

            $amount = number_format($amount, 2, '.', '');
            $time = $rate->timerange;

            $disamount = ($discount / 100) * $amount;
            $final_amount = round(($amount - $disamount), 2);

            return view('page.customer-pricing')->with(['reviews' => $reviews, 'countries' => $countries,
                'time' => $time, 'amount' => $amount, 'discount' => $discount, 'final_amount' => $final_amount,
                'weight' => $weight, 'item_type' => $item_type, 'country_id' => $country_id]);
        }
    }

    public function newPricing()
    {
//        $mac = shell_exec("arp -a ".escapeshellarg($_SERVER['REMOTE_ADDR'])." | grep -o -E '(:xdigit:{1,2}:){5}:xdigit:{1,2}'");
        echo "mac" . $_SERVER['REMOTE_ADDR'];
        exit;
//        $reviews = Review::orderBy('updated_at', 'desc')
//            ->where('approve', '1')
//            ->limit(10)
//            ->get();
//        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
//        return view('page.new-pricing')->with(['reviews' => $reviews, 'countries' => $countries]);
    }

    public function chatMailConfirm()
    {
        return view('chat-email.confirm-chat-email');
    }

    public function pickupByAjex(Request $request)
    {
        return response()->json(['error' => '0', 'request' => $request->first_name]);
    }

    public function chatMailSent(Request $request)
    {
        $body = $request->all();
        unset($body['_token']);
        $chat_email = new ChatEmail($body);
        $result = $chat_email->save();
        $this->sendChatEmail($chat_email);
        return redirect(route('chatMail.confirm'));
    }

    public function sendChatEmail($chatData)
    {
        Mail::to($chatData->email)->bcc('support@shoppre.com')->send(new EmailChat($chatData));
    }

    public function chatMailIndex()
    {
        return view('chat-email.chat-email');
    }

    public function refundAndCancellation()
    {
        return view('page.refund-and-cancellation');
    }

    public function privacyPolicy()
    {
        return view('page.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('page.terms-and-conditions');
    }

    public function consolidationService()
    {
        return view('page.consolidation');
    }

    public function personalShopper()
    {
        return view('page.personal-shopper');
    }

    public function countryList()
    {
        $countries = Country::orderBy('name', 'asc')->get();

        return view('page.country-list')->with(['countries' => $countries]);
    }

    public function urlTargetShipping(Request $request)
    {
        $destination = $request->destination;
        if ($destination == 'usa') {
            $destination = 'united-states';
        }
        $source = $request->source;
        $initial = $request->initial;
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $country = Country::where('slug', $destination)->first();
        if (!$country) {
            $city = City::where('slug', $destination)->first();
            if ($city) {
                $country = Country::find($city->country_id);
            }
        }
        if ($country) {
            $prices_non_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'nondoc')
                ->where('country_id', $country->id)->get();

            foreach ($prices_non_doc as $key => $field) {
                $disamount = ((100 - $country->discount) / 100) * $field->amount;
                $prices_non_doc[$key]['amount'] = $disamount;
            }

            $prices_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'doc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_doc as $key => $field) {
                $disamount = ((100 - $country->discount) / 100) * $field->amount;
                $prices_doc[$key]['amount'] = $disamount;
            }

            $title = ucwords($initial) . " From " . ucwords($source) . " To " . ucwords($destination) . " - Courier Services To " . ucwords($destination);
            $description = "Shoppre offers Door to Door courier service to " . ucwords($destination) .
                " from any part of " . ucwords($source) . ". The charges are cheapest in " . ucwords($source) . "for sending courier to " . ucwords($destination) . ". Sign Up Now!";
            $keywords = "ship your packages, delivered to your country, parcel services to " . ucwords($destination) . ",
              sending courier to " . ucwords($destination) . ", shipping";
            return view('page.url-target')->with(['source' => $source, 'destination' => $country->name, 'title' => $title, 'description' => $description, 'keywords' => $keywords,
                'prices_non_doc' => $prices_non_doc, 'prices_doc' => $prices_doc, 'countries' => $countries]);
        } else {
            return redirect(route('home'));
        }
    }

    public function urlTargetSend(Request $request)
    {
        $destination = $request->destination;
        if ($destination == 'usa') {
            $destination = 'united-states';
        }
        $source = $request->source;
        $content = $request->contents;
        $initial = $request->initial;
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $country = Country::where('slug', $destination)->first();
        if (!$country) {
            $city = City::where('slug', $destination)->first();
            if ($city) {
                $country = Country::find($city->country_id);
            }
        }
        if ($country) {
            $prices_non_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'nondoc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_non_doc as $key => $field) {
                $disamount = ((100 - $country->discount) / 100) * $field->amount;
                $prices_non_doc[$key]['amount'] = $disamount;
            }

            $prices_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'doc')
                ->where('country_id', $country->id)->get();

            foreach ($prices_doc as $key => $field) {
                $disamount = ((100 - $country->discount) / 100) * $field->amount;
                $prices_doc[$key]['amount'] = $disamount;
            }

            $title = ucwords($initial) . " " . ucwords($content) . " From " . ucwords($source) . " To " . ucwords($destination) . " - " . ucwords($content) . " Delivery " . ucwords($destination) . ".";
            $description = ucwords($initial) . " " . "rakhi, chocolates, sweets, cookies, dress, birthday gifts and more to your friends and family, get delivered to " . ucwords($destination) .
                " from " . ucwords($source) . ".";
            $keywords = ucwords($initial) . " " . ucwords($content) . ", delivery " . ucwords($content) . " to " . ucwords($destination) . ",
              gift overseas";

            return view('page.url-target')->with(['source' => $source, 'content' => $content, 'destination' => $destination,
                'title' => $title, 'description' => $description, 'keywords' => $keywords,
                'prices_non_doc' => $prices_non_doc, 'prices_doc' => $prices_doc, 'countries' => $countries]);
        } else {
            return redirect(route('home'));
        }
    }

    public function urlTargetContent(Request $request)
    {
        $destination = $request->destination;
        if ($destination == 'usa') {
            $destination = 'united-states';
        }
        $source = $request->source;
        $cprefix = $request->cprefix;
        $cpostfix = $request->cpostfix;
        $initial = $request->initial;
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $country = Country::where('slug', $destination)->first();
        if (!$country) {
            $city = City::where('slug', $destination)->first();
            if ($city) {
                $country = Country::find($city->country_id);
            }
        }
        if ($country) {
            $prices_non_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'nondoc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_non_doc as $key => $field) {
                $disamount = ((100 - $country->discount) / 100) * $field->amount;
                $prices_non_doc[$key]['amount'] = $disamount;
            }

            $prices_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'doc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_doc as $key => $field) {
                $disamount = ((100 - $country->discount) / 100) * $field->amount;
                $prices_doc[$key]['amount'] = $disamount;
            }
            $title = ucwords($initial) . " " . ucwords($cprefix) . " " . ucwords($cpostfix) . " From " . ucwords($source) . " To " . ucwords($destination) . ". - " . ucwords($initial) . " " . ucwords($cprefix) . " To " . ucwords($destination);
            $description = ucwords($initial) . " " . ucwords($cprefix) . " " . ucwords($cpostfix) . " From " . ucwords($source) . " To " . ucwords($destination) . ". " . "Shoppre offers door to door express delivery service for all your " . ucwords($cprefix) . " " . ucwords($cpostfix) .
                " at lowest shipping rates. Send Now!";
            $keywords = ucwords($initial) . " " . ucwords($cprefix) . " " . ucwords($cpostfix) . ", shipping " . ucwords($cprefix) . " " . ucwords($cpostfix) . ", parcel " . ucwords($cprefix) . " " . ucwords($cpostfix);

            return view('page.url-target')->with(['source' => $source, 'destination' => $destination, 'title' => $title,
                'description' => $description, 'keywords' => $keywords, 'prices_non_doc' => $prices_non_doc,
                'prices_doc' => $prices_doc, 'countries' => $countries]);
        } else {
            return redirect(route('home'));
        }
    }

    public function home()
    {
        $reviews = Review::orderBy('updated_at', 'desc')
            ->where('approve', '1')
            ->limit(5)
            ->get();

        return view('page.home')->with([
            'reviews' => $reviews
        ]);
    }

    public function about()
    {
        return view('page.about');
    }

    public function partner()
    {
        return view('page.partner');
    }

    public function faq()
    {
        $categories = FaqCategory::all();
        return view('page.faq')->with('categories', $categories);
    }

    public function faqSearch(Request $request)
    {

        $query = Faq::query();
        if (isset($request->q) && !empty($request->q)) {
            $keyword = $request->q;
            $query->where('question', 'like', '%' . $keyword . '%')
                ->select(['question']);
        }
        $questions = $query->get();
        return response()->json(['questions' => $questions]);
    }

    public function storeSearch(Request $request)
    {
        $query = Store::query();
        if (isset($request->q) && !empty($request->q)) {
            $keyword = $request->q;
            $query->where('name', 'like', '%' . $keyword . '%')
                ->select(['name']);
        }
        $questions = $query->get();
        return response()->json(['name' => $questions]);
    }

    public function contact()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return view('page.contact')->with('countries', $countries);
    }

    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:250',
//            'lastname' => 'required|max:250',
            'email' => 'required|email|max:250',
            'phone' => 'required',
            'msg_content' => 'required',
        ]);

        $commnet = "Contact page: Email: ".$request->email."\n Contact No: ".$request->phone."\n Reason: ".$request->reason."\n Locker No: ".$request->locker."\n Query: ".$request->locker;
        AsanaTaskOperations::createTask($request->firstname, $commnet, "E");

        Mail::to("Leads@shoppre.com")->bcc('aloak@shoppre.com')->send(new ContactEnquiry($request));
        return view('page.confirm-contact-us');
    }

    public function services()
    {
        return view('page.services');
    }

    public function howitworks()
    {
        return view('page.howitworks');
    }

    public function viewPage(Request $request)
    {
        $slug = $request->slug;
        $page = Page::where('slug', $slug)->first();
        if (empty($page)) return abort(404);
        return view('page.view')->with('page', $page);
    }

    public function pricing()
    {
        $reviews = Review::orderBy('updated_at', 'desc')
            ->where('approve', '1')
            ->limit(10)
            ->get();
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        return view('page.pricing')->with(['reviews' => $reviews, 'countries' => $countries]);

    }

    public function shipCalculate(Request $request)
    {
        $weight = $request->weight;
        if ($request->origin == 'home_page') {
            $country = Country::where('name', 'like', '%' . $request->country . '%')
                ->select(['id', 'discount'])
                ->first();
        } else {
            $country = Country::find($request->country);
        }

        if (isset($request->length) && isset($request->width) && isset($request->height)) {
            $volume = $request->length * $request->width * $request->height;
//            if ($request->scale == "in") {
//                $volume = $volume/2.54;
//            }
//            $volWeight = $volume/5000;
//            if ($volWeight > $weight) {
//                $weight = $volWeight;
//            }
            if ($request->scale == "in") {
                $d_weight = $volume / 305;
            } else {
                $d_weight = $volume / 5000;
            }
            if ($d_weight > $weight) {
                $weight = $d_weight;
            }
        }

        $unit = $request->unit;
        $discount = $country->discount;

        $type = $request->weight <= 2 ? $request->type : 'nondoc';

        if ($unit === "lbs") {
            $weight = $weight * 0.45;
        }
        $IS_BELOW_300 = $weight <= 300;
        $rates = ShippingRate::
        select('shipping_rates.rate_type',
            'shipping_rates.amount',
            'shipping_rates.timerange')
//          'shipping_rates.partner_id',
//          'partners.name as partner_name')
//          ->join('partners', 'shipping_rates.partner_id', '=', 'partners.id')
            ->where('country_id', $country->id)
            ->where('item_type', $type)
            ->where('min', '<', $weight)
            ->where('max', $IS_BELOW_300 ? '>=' : '=', $IS_BELOW_300 ? $weight : 0)
            ->get();

        if (!empty($rates)) {
            $prices = [];

            foreach ($rates as $rate) {
                $amount = $rate->rate_type == "fixed" ? $rate->amount : $rate->amount * $weight;

                $amount = number_format($amount, 2, '.', '');

                array_push($prices, [
                    'time' => $rate->timerange,
                    'amount' => $amount,
                    'discount' => $discount,
//              'partner_name'=> $rate->partner_name,
                ]);
            }
            return response()->json([
                'error' => '0',
                'prices' => $prices,
            ]);

        } else {
            return response()->json(['error' => '1']);
        }
    }

    public function getQuote(Request $request)
    {
//        $this->validate($request, [
//            'state' => 'required|max:250',
//            'city' => 'required|max:250',
//            'pin' => 'required',
//            'type' => 'required',
//            'weight' => 'required',
//            'unit' => 'required',
//            'email' => 'required|email|max:250',
//        ]);
        $pincodeF= $request->pin;
        $pincodeT= $request->pincode;
        $contact= $request->mobile;
        $email= $request->email;
//        $commnet = "Enquiry from pricing calculator page Pickup Location pin-code : ". $pincodeF."\n Destination pin-code : ".$pincodeT."\n contact number : ".$contact;
//        AsanaTaskOperations::createTask($email, $commnet, "E");
        $mail = Mail::to("Leads@shoppre.com")->send(new GetQuote($request));
        return response()->json(['mail' => $mail]);
    }

    public function stores()
    {
        $categories = StoreCategory::orderBy('category', 'asc')->get();
        $webs = StoreCatClub::where('category_id', 1)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get();
        $fbs = StoreCatClub::where('category_id', 1)
            ->where('type', 'fb')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get();
        $feats = StoreCatClub::where('category_id', 1)
            ->where('featured', 1)
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get();

        if (Auth::check()) {
            $favs = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
            return view('page.stores')->with(['categories' => $categories, 'webs' => $webs, 'fbs' => $fbs, 'feats' => $feats, 'favs' => $favs]);
        }

        return view('page.stores')->with(['categories' => $categories, 'webs' => $webs, 'fbs' => $fbs, 'feats' => $feats]);
    }

    public function sortStores(Request $request)
    {
        $cat = $request->cat;
        $stores = array();

        $stores['web'] = StoreCatClub::where('category_id', $cat)
            ->where('type', 'web')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get()
            ->toArray();

        $stores['fb'] = StoreCatClub::where('category_id', $cat)
            ->where('type', 'fb')
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get()
            ->toArray();

        $stores['feat'] = StoreCatClub::where('category_id', $cat)
            ->where('featured', 1)
            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
            ->get()
            ->toArray();
        if (Auth::check()) {
            $stores['custid'] = true;
            $stores['favs'] = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
        }

        return response()->json(['stores' => $stores]);
    }

    public function reviews()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        $reviews = Review::orderBy('id', 'desc')
            ->where('approve', '1')
            ->select('reviews.*', 'countries.name', 'countries.iso3')
            ->join('countries', 'countries.id', '=', 'reviews.country_id')
            ->limit(6)
            ->get();

        return view('page.reviews')->with(['countries' => $countries, 'reviews' => $reviews]);
    }


    public function moreReviews(Request $request)
    {

        $output = '';
        $id = $request->id;
        $index = 0;
        $colors = array("#fc91ad", "#aa62e3", "#2b78dc", "#6558ee", "#fd4e13", "#e5213b", "#94ba2b");

        $reviews = Review::orderBy('reviews.id', 'desc')
            ->where('reviews.id', '<', $id)
            ->where('reviews.approve', '1')
            ->select('reviews.*', 'countries.name', 'countries.iso3')
            ->join('countries', 'countries.id', '=', 'reviews.country_id')
            ->limit(6)->get();

        if (!$reviews->isEmpty()) {
            foreach ($reviews as $review) {
                $color = $colors[$index];
                $index++;
                $sfl = null;
                $pname = $review->person;
                $firstname = explode(" ", $pname);
                $fl = substr($firstname[0], 0, 1);
                if (sizeof($firstname) > 1) {
                    $sfl = substr($firstname[1], 0, 1);
                }
//                <p>' . $fl . ' ' . $sfl . '</p>

                $output .= '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 " >
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 inner-review " >
                                    <div class="row div-img-row" >
                                        <div class="col-md-1 col-sm-2 col-xs-2 no-padding">                                          
                                          <div class=" img-review img-circle "style="background-color: ' . $color . ';">
                                            <cneter>
                                               <p>'. $fl .'</p>
                                            </cneter>
                                           
                                          </div>
                                        </div >
                                        <div class="col-md-6 col-sm-7 col-xs-7" >                                          
                                          <p class="pull-left p-name-font-weight">' . $review->person . ' <br> ' . $review->name . '  </p>
                                        </div >
                                        <div class="col-md-4 col-lg-4 col-sm-3 col-xs-3 pull-right " style="margin-top: 11px" >
                                            <img src="img/rating-star.png" alt="">
                                        </div >
                                    </div >
                                    <div class="row" >
                                        <i class="quots-t " >
                                            <img src = "img/svg/qoute_up.svg">
                                        </i >
                                    </div >
                                    <div class="row" >                                              
                                        <p class=" p-reviews" >' . substr($review->review, '0', '550') . '!</p >                          
                                    </div >
                                    <div class="row" >
                                      <span class="quots-b" >
                                        <img src = "img/svg/qoute_down.svg" >
                                      </span >
                                    </div >
                                </div >
                            </div >';
            }

            $output .= '<div id="remove-row">
                            <center>
                            <button class="btn-more-review header5" id="btn-more" data-id=" ' . $review->id . ' ">
                                Load More
                            </button>
                          </center>
                        </div>';
            echo $output;
        }
    }

    //    load more reviews


    public function submitReview(Request $request)
    {

        $this->validate($request, [
            'person' => 'required|max:250',
            'country_id' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);
        $commnet = "Reviews : ".$request->review."\n Rating ".$request->rating."\n Country id :".$request->country_id;
        AsanaTaskOperations::createTask($request->person, $commnet, "E");
        $review = new Review;
        $review->person = $request->person;
        $review->country_id = $request->country_id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->approve = '0';
        $review->save();

        return redirect()->back()->with('message', 'Success! Review has been submit for admin approval.');
    }

    public function indianVirtual()
    {
        return view('page.indian-virtual-address');
    }
//    public function shopFromIndia()
//    {
//        return view('page.shop-india-ship-worldwide');
//    }
    public function sellerShipping()
    {
        return view('page.sellers-shipping');
    }

    public function shopper()
    {
        return view('page.personal-shopper');
    }
}
