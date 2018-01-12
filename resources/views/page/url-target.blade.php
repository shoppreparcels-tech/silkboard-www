@extends('layout1')

@section('title', $title )
@section('description', $description)
@section('keywords', $keywords)

@section('content')

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://www.shoppre.test">
                <img src="http://www.shoppre.test/img/logo.png">
            </a>
        </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid content_space">

        <div id="contentQuickLinks" class="noPrint">
            <p class="quicLinksJumpTo">
                Goto:
            </p>
            <ul class="quickLinks quickLinksWidth">
                <li class="quickLinksItem"><a class="link"  href="#non-document">
                        Non-Document</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#document">
                        Document</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#home_made_products">
                        Home Made Food Items</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#branded_food_items">
                        Branded & Packaged Food</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#liquid">
                        Liquid</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#schedule-pickup">
                        Pickups</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#personal-shopper">
                        Personal Shopper</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#locker-facility">
                        Locker Facility</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#consolidation">
                        Consolidation & Repackaging</a>|
                </li>
                <li class="quickLinksItem"><a class="link"  href="#restricted-items">
                        Restricted Items</a></li>
            </ul>
        </div>
        <br/>
    </div>

    <div id="non-document">
    <section class="service-sec yellow">
            <div class="container-fluid">
              <div class="container">
                  <h4>
                      Ship from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}. Shoppre offers DOOR
                      TO DOOR courier to
                      {{ucfirst(trans($destination))}} from ANY part of India. The charges are cheapest
                      in {{ucfirst(trans($source))}} for sending
                      courier to {{ucfirst(trans($destination))}} . This is by a courier company which is the best in
                      industry
                      for parcel services to {{ucfirst(trans($destination))}}.
                  </h4>
                  <br>
                  <h2>{{$title}}</h2>
              </div>
                <div class="col-md-5 col-md-offset-1">
                    <table class="table table-striped">
                        <h3 class="head_color">Pricing details from {{ucfirst(trans($source))}}
                            to {{ucfirst(trans($destination))}} For Non Documents Products</h3>
                        <thead>
                        <tr>
                            <th>Weight(In Kg.)</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prices_non_doc as $price)
                            <tr>
                                <td>{{$price->min}} - {{$price->max}}</td>
                                <td>{{$price->amount}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-5 cal_padding">
                    <div class="col-md-12">
                        <div class="calculator cal_block">
                            <h3 class="text-red">INTERNATIONAL SHIPPING CALCULATOR</h3>
                            <h4>(From your Shoppre Locker in Bengaluru to your doorstep Abroad)</h4>
                            <span id="calc_error">Sorry! No delivery options available in requested country. Please
                                contact our support team for assistance.</span>
                            <form class="calc-form" id="shipping">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-12">Where  do you want to send your package?</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2" name="country">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}"{{$country->name == $destination ? 'selected' : ""}}>
                                                    {{$country->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label" style="top: 8px;">What is your package type?</label>
                                    <div class="col-sm-7">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="type" value="nondoc" checked>Non Document
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="type" value="doc" >Document
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">How much does your package weigh?</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="1" name="weight"
                                               placeholder="Enter Weight">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="unit" value="kg" checked>Kilograms
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="unit" value="lbs" >Pounds
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-8 control-label" style="top: 8px;">What are the dimensions of
                                        your package?
                                    </label>
                                    <div class="col-sm-4">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="scale" value="cm" checked>cm
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="scale" value="in" >in
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group smallboxs">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="length"> <strong>Length</strong>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="width"> <strong>Width</strong>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="height"> <strong>Height</strong>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-block btn-shoppre">
                                        GET UPFRONT SHIPPING RATES
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                            <div id="ship_result" class="calc-result">
                                <h4 class="text-red">ESTIMATED SHIPPING COST*</h4>
                                <p class="info">Best carrier will be automatically chosen according to your country
                                    and weight of shipment. We use trusted courier services like DHL,
                                    FedEx and DTDC.</p>
                                <div class="result table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td class="bg-white"><span id="ship_time"></span> Business Days
                                                <span class="text-red">**</span></td>
                                            <td><i class="fa fa-rupee"></i> <span id="ship_cost"></span></td>
                                            <td><span class="striked"><i class="fa fa-rupee"></i>
                                                    <span id="ship_oldcost"></span></span></td>
                                            <td class="discount"><span id="ship_disc"></span>% OFF</td>
                                        </tr>
                                    </table>
                                </div>
                                <ul class="points">
                                    <li><span class="text-red">*</span> The chargeable weight is always the greater of
                                        the two: Volumetric or the Actual weight.</li>
                                    <li><span class="text-red">*</span> The rates displayed are INCLUSIVE of the
                                        fuel surcharge and taxes within India.</li>
                                    <li><span class="text-red">*</span> You may need to pay duties or tax when your
                                        shipment arrives, as per the import law of the receiving country.</li>
                                    <li><span class="text-red">*</span> Excludes oversized and palletized shipments,
                                        and special products (liquids, homemade food, etc.)</li>
                                    <li><span class="text-red">**</span> After dispatch from Shoppre facility. Does
                                        not apply to ship requests made after 3pm IST on Saturdays, or on holidays.
                                        Shipments that may require additional time include those containing items
                                        under review or hazardous materials, oversized packages or where additional
                                        export documentation is required.</li>
                                </ul>
                            </div>
                            <div id="calc_load"></div>
                        </div>

                        <div class="parcelsample">
                            <h5>Centimeter/Inch Conversion</h5>
                            <p>1 in = 2.54 cm <span>(1 cm = 0.3937 in)</span></p>
                            <h5>Kilogram/Pound Conversion</h5>
                            <p>1 lbs = 0.4536 Kg <span>(1 Kg = 2.2046 lbs)</span></p>
                            <h5>Parcel Sample :</h5>
                            <img src="{{asset('img/parcelsample.png')}}">
                        </div>
                       </div>
                    </div>
                </div>
    </section>
    </div>
    <div id="document">
      <section class="service-sec">
            <div class="container">
                <div class="col-md-10">
                    <table class="table table-striped">
                        <h3 class="head_color">Pricing details from {{ucfirst(trans($source))}}
                            to {{ucfirst(trans($destination))}} For Documents</h3>
                        <thead>
                        <tr>
                            <th>Weight(In Kg.)</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prices_doc as $price)
                            <tr>
                                <td>{{$price->min}} - {{$price->max}}</td>
                                <td>{{$price->amount}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
       </section>
    </div>
    <div id="home_made_products">
       <section class="service-sec yellow">
        <h3 class="htag_align">Send your home made items to {{ucfirst(trans($destination))}}</h3>
            <div class="container">
                <div class="col-md-6">
                    <img src="img/homemade.jpg">
                </div>
                <div class="col-md-6">
                    <h4>Shop online from india.ship worldwide</h4>
                    <p>Shoppre is an courier service provider for sending Home made Food items to all countries like
                        USA, UAE,UK , to make this happen – Shoppre.com.Taking your needs into consideration Shoppre
                        has gone one step ahead for maintaining a consistent relationship with families by offering
                        unmatched discounts which incredible in the market. We assure this package called
                        International Home madeFood Products Specialists exclusively introduced by Shoppre is the
                        right option for families/individuals to encash on this golden opportunity of sending Home
                        made food products abroad.</p>
                </div>
            </div>
      </section>
    </div>
    <div id="branded_food_items">
        <section class="service-sec" >
            <h3 class="htag_align">Send branded food items to {{ucfirst(trans($destination))}}</h3>
                <div class="container">
                    <div class="col-md-6">
                        <h4>Ship branded food items to worldwide</h4>
                        <p>Shoppre has created a brand by itself by specializing as an exclusive international
                            courier service provider for Sending Branded food products worldwide.Customers staying
                            abroad need not have to feel deprived of enjoying the Indian food/delicacies now. All a
                            customer has to do is either mail us all their International Branded food product
                            requirements at support@shoppre.com or visit our website and fill in one of the pickup
                            request forms and we precisely assure that we will either purchase your required Branded
                            food products or pickup from your near and dear ones, or from your desired given address
                            and dispatch it safely to your preferred destination anywhere around the globe.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="img/branded-food-items.jpg">
                    </div>
                </div>
        </section>
    </div>
    <div id="liquid">
    <section class="service-sec yellow">
        <h3 class="htag_align">Send liquid/semi-liquid to {{ucfirst(trans($destination))}}</h3>
            <div class="container">
                <div class="col-md-5">
                    <img src="img/liquid.jpg">
                </div>
                <div class="col-md-5">
                    <h4>Ship liquid/semi-liquid items to worldwide</h4>
                    <p>Shoppre is proud to be one of the best courier service for parcels with liquid products.
                        In fact, we have been regularly providing cost effective courier solutions.Courier
                        parcels may be any of the following product types – Oil, Shampoos, Lotions.</p>
                </div>
            </div>
    </section>
    </div>
    {{--<div id="schedule-pickup">--}}
        {{--<section class="service-sec">--}}
            {{--<h3 class="htag_align">Schedule Your Pickup</h3>--}}
            {{--<div class="container">--}}
                {{--<div class="schedule-container">--}}
                    {{--<form class="form-horizontal" id="schedule-pickup">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Firstname <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter first name" name="first_name" />--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Lastname <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter last name" name="last_name" />--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Email <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter email" name="email"/>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Mobile <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter mobile" name="mobile" />--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Weight Of Package <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter package weight" name="package_weight" />--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Size Of The Package If You Are Aware( Length, Breadth and Height ) :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter package size (optional)" name="size_of_package" />--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Pickup Address <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter pickup address" name="pickup_address" />--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Destination Address <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter destination address"--}}
                                           {{--name="dest_address" required/>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Items Of The Package <span class="mendatory_fields">*</span> :</label>--}}
                                    {{--<input type="text" class="form-control" placeholder="Enter Package Items"--}}
                                           {{--name="package_items" required/>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Does It Contains The Following:</label>--}}
                                    {{--<br>--}}
                                    {{--<input type="checkbox" name="home_made" value="Home Made Food items"/> Home Made Food--}}
                                    {{--items<br>--}}
                                    {{--<input type="checkbox" name="branded_food_items" value="Branded Food items"/> Branded Food--}}
                                    {{--items<br>--}}
                                    {{--<input type="checkbox" name="liquid_items" value="Liquid items"/> Liquid items<br>--}}
                                    {{--<input type="checkbox" name="medicine_items"--}}
                                           {{--value="Medicines - Allopathy/Ayurvedic/Homeopathic"/>--}}
                                    {{--Medicines - Allopathy/Ayurvedic/Homeopathic<br>--}}
                                    {{--<input type="checkbox" name="other" value="Other"/> Other<br>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="other_item_box">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Other Item Detail <span class="mendatory_fields">*</span> :</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Enter Other Item Detail"--}}
                                               {{--name="other_items"/>--}}
                                        {{--<div class="clearfix"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Amount Transfer Option <span class="mendatory_fields">*</span>:</label>--}}
                                    {{--<br>--}}
                                    {{--<input type="radio" name="payment_option" value="shoppre_account"> Transferwise.com or Bank--}}
                                    {{--Transer--}}
                                    {{--Name: INDIANSHOPPRE LLP , Account<br>&nbsp; &nbsp;&nbsp;&nbsp; Number: 917020057881967 , IFS--}}
                                    {{--Code: UTIB0000009 ,--}}
                                    {{--MICR Code:<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 560211002 , <u>E-mail ID:--}}
                                        {{--support@shoppre.com </u>, Swift Code: AXISINBB009<br>--}}
                                    {{--<input type="radio" name="payment_option" value="paypal" > PayPal - 10% Extra ---}}
                                    {{--support@shoppre.com<br>--}}
                                    {{--<input type="radio" name="payment_option" value="paytm" > Paytm - 3% Extra - 9148357733--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-4 col-sm-offset-4">--}}
                                {{--<button type="submit" class="btn btn-block btn-shoppre">Confirm Pickup</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</form>--}}
                    {{--<div id="pickup_load"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}
    <div id="personal-shopper">
    <section class="service-sec">
        <h3 class="htag_align">Use Personal Shopper Service To Purchse Your Items</h3>
            <div class="container">
                <div class="col-md-4">
                    <img src="img/services1.png">
                </div>
                <div class="col-md-8 ">
                    <h4>YOUR PERSONAL SHOPPER</h4>
                    <p>Simply provide us the product and Seller details, our Personal Shopper will purchase the item
                        on your behalf, using our Indian Local Card!</p>
                    <a href="https://myaccount.shoppre.com/personal-shopper" class="btn btn-shoppre">Learn more
                        about Personal Shopper </a>

                    <h4>GIFT YOUR LOVED ONES LIVING IN INDIA</h4>
                    <p>Simply sign up and use Shoppre’s Personal Shopper to buy your favorite product from ANY
                        Indian website, and gift your loved ones in India!</p>
                    <a href="https://myaccount.shoppre.com/register" class="btn btn-shoppre">Sign up for free</a>
                </div>
            </div>
    </section>
    </div>
    <div id="locker-facility">
    <section class="service-sec yellow">
            <div class="container locker_fonts">
                <h2>Free storage upto 20 days</h2>
                <p>
                    Shoppre has created a brand by itself by specializing as an exclusive international courier service
                    provider for you to hold your items in their locker facility.<br>
                    In an effort to maximise consolidation, we will store your packages for 20 days for free. That gives
                    you time to shop and ship your items to our warehouse,Allowing for more packages to be consolidated
                    which saves you money on international shipping.
                </p>
            </div>
    </section>
    </div>
    <div id="consolidation">
        <section class="price_repacking_margin">
            <div class="container">
                <h2 class="text-orange">OUR SERVICES WHICH HELP YOU SAVE ON SHIPPING COSTS</h2>
                <h3 class="packing_align"><u>REPACKING SERVICE</u></h3>
                <p>We repack individual shipments for free and help in reducing wasted space<br> which will allow
                    you to save over 20% on shipping charges.</p>
                <div class="col-sm-6 repack_box border">
                    <img src="{{asset('img/repackage.png')}}">
                    <h4>We only repack goods which :</h4>
                    <ul>
                        <li>Require added protection and security if it is inadequately packed for international
                            shipping.
                        </li>
                        <li>Have high volumetric weight than the actual weight.</li>
                        <li>We will repack each package to reduce the weight, which will reduce your shipping cost
                            .Original package contents are not compromised by repackaging.
                        </li>
                        <li>If you don't wish for your shipments to be repacked, you can set that preference in <a
                                    href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/shipping-preferences"
                                    class="text-orange">your account</a>.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 repack_box">
                    <img src="{{asset('img/repack_ex.png')}}" style="width: 380px;">
                    <h4>Repack example :</h4>
                    <ul>
                        <li>Package from a store was shipped to the warehouse in a box 25x11x11 inches, representing
                            a volumetric weight of 10kg.
                        </li>
                        <li>After repackaging, the receipt dimensions were reduced to ((21x10x10 inches),
                            representing a volumetric weight of 7kg.
                        </li>
                        <li class="linone bold">Saving to the customer was 3kg. in shipping volumetric weight.</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <section class="price_service">
        <div class="container">
            <h2>Shoppre's consolidation service</h2>
            <!-- <h3>which helps you save on international shipping rates!</h3> -->
            <p>Combine your packages from multiple stores to one tracking number,<br>
                and save upto 60% - 80% on shipping rates!</p>
            <p style="font-style: italic;font-size: 15px;">For example:</p>
            <div class="col-sm-6">
                <div class="serv_sec">
                    <h4>Shipping Directly from most sellers</h4>
                    <div class="example">
                        <img src="{{asset('img/consolid1.png')}}">
                    </div>
                    <p class="result"><strong>Shipping each item abroad separately :<br>
                            Total Shipping Cost $60</strong></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="serv_sec">
                    <h4>shipping through <a href="{{route('home')}}" class="text-orange">Shoppre.com</a></h4>
                    <div class="example">
                        <img src="{{asset('img/consolid2.png')}}" style="max-width: 78%;">
                    </div>
                    <p class="result"><strong>Shipping all the items in ONE package:<br>
                            Total Shipping Costs : $15</strong></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="serv_foot">
                <h3 class="text-orange"><strong>67% Less</strong> than Shipping Directly from Stores</h3>
                <div class="text-center">
                    <h4>When packages are shipped individually, each package bears the rate of the first kilo
                        rate.<br><span class="text-orange">But when you consolidate, you pay for the first half kilo
                            only once!</span>
                    </h4>
                    <p>Enjoy Shoppre's special discount rates with our trusted courier partners like DHL, FedEx,
                        DTDC, etc.<br>thanks to our bulk shipment every month!</p>
                </div>
            </div>
        </div>
    </section>
    <div id="restricted-items">
        <section class="service-sec yellow">
            <div class="container locker_fonts">
                <h2 class="packing_align">Restricted items</h2>
                <ol>
                    <li>Currency</li>
                    <li>Dangerous goods</li>
                    <li>Precious & Semi-Precious Items</li>
                    <li>Commodities banned by Law at any given time without prior notice</li>
                    <li>Any shipment which would be likely to cause damage, or delay to equipment, personnel or
                        other shipments.</li>
                    <li>Any item whose carriage is prohibited by any law, statute or regulations of the country of
                        origin or destination, or of any country through which the shipment may transit.</li>
                    <li>Perishable Food items</li>
                    <li>Live animals & plants</li>
                </ol>
                <p>
                    Any items as may from time to time be notified by Shoppre to be restricted and/or banned and/or
                    dangerous and/or prohibited for carriage from time to time (such items include but are not limited
                    to radio-active, incendiary, corrosive or flammable substances, hazardous chemicals, explosives,
                    firearms or parts thereof and ammunition, firecrackers, cyanides, precipitates, gold and silver
                    ore, bullion, precious metals and stones, jewelry, semi-precious stones including commercial
                    carbons or industrial diamonds, currency (paper or coin) of any nationality, securities
                    (including stocks and bonds, share certificates and blank signed share transfer forms),
                    coupons, stamps, negotiable instruments in bearer form, cashier's cheques, travellers’
                    cheques, money orders, passports, credit/debit/ATM cards, antiques, works of art, lottery
                    tickets and gambling devices, livestock, fish, insects, animals, plants and plant material,
                    human corpses, organs or body parts, blood, urine and other liquid diagnostic specimens,
                    hazardous or bio-medical waste, wet ice, pornographic materials, contraband, narcotics and
                    psychotropic substances, fragile glassware, crockery, bone china, shipments to post office
                    box addresses, etc.).
                </p>
            </div>
        </section>
    </div>
    <section class="timeline1">
        <div class="container">
            <div class="col-sm-10">
                <div class="parcel_logs">
                    <h3>Ship your Parcel through Shoppre’s trusted Courier Partners</h3>
                    <img src="{{asset('img/dhl.png')}}">
                    <img src="{{asset('img/fedex.png')}}">
                    <img src="{{asset('img/dtdc.png')}}">
                    <h4>Shoppre receives and ships over INR 10,00,000 worth in eCommerce purchases monthly!</h4>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
    {{--<!-- Select2 -->--}}
    {{--<script src="{{asset('js/select2.min.js')}}"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function() {--}}
            {{--$(".select2").select2();--}}
        {{--});--}}
    {{--</script>--}}
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $( "#shipping" ).validate({
                rules:
                    {
                        country:{required: true},
                        weight: {required: true},
                        unit: {required: true},
                    },
                messages:
                    {
                        country: { required: "Please select country"},
                        weight: { required: "Please enter weight to calculate."},
                        unit: { required: "Please select unit of weight."},
                    },
                submitHandler: function(form) {
                    var country = $("select[name='country']").val();
                    var weight = $("input[name='weight']").val();
                    var unit = $("input[name='unit']:checked").val();
                    var type = $("input[name='type']:checked").val();
                    var length = $("input[name='length']").val();
                    var width = $("input[name='width']").val();
                    var height = $("input[name='height']").val();
                    var token = $('input[name=_token]').val();
                    $("#calc_load").show();
                    $('#calc_error').hide();
                    $('#ship_result').hide();
                    jQuery.ajax({
                        url: '/calculate-shipping',
                        type : "POST",
                        data:{ _token:token, country:country, weight:weight, unit:unit, type:type, length:length, width:width, height:height},
                        success: function(data){
                            $("#calc_load").hide();
                            if (data.error == "1"){
                                $('#calc_error').css('display', 'block');
                            }else{
                                $('#ship_oldcost').text(data.amount);
                                var disamount = (data.discount / 100) * data.amount;
                                var finalcost = Math.round(data.amount - disamount).toFixed(2);
                                $('#ship_cost').text(finalcost);
                                $('#ship_time').text(data.time);
                                $('#ship_disc').text(data.discount);
                                $('#ship_result').slideDown();
                            }
                        }
                    });
                    return false;
                }
            });

            // $( "#schedule-pickup" ).validate({
            //     rules:
            //         {
            //             first_name:{required: true},
            //             last_name: {required: true},
            //             email: {required: true},
            //             // mobile: {required: true},
            //             // package_weight: {required: true},
            //             // pickup_address: {required: true},
            //             // dest_address: {required: true},
            //             // package_items: {required: true},
            //             // payment_option: {required: true}
            //         },
            //     messages:
            //         {
            //             first_name: { required: "Please enter first name"},
            //             last_name: { required: "Please enter last name"},
            //             email: { required: "Please enter email"}
            //             // mobile: { required: "Please enter mobile"},
            //             // package_weight: { required: "Please package weight"},
            //             // pickup_address: { required: "Please enter pickup address."},
            //             // dest_address: { required: "Please enter destination address."},
            //             // package_items: { required: "Please enter package items."},
            //             // payment_option: { required: "Please select payment option."}
            //         },
            //     submitHandler: function(form){
            //         var fname = $("select[name='fname']").val();
            //         var lname = $("input[name='lname']").val();
            //         var email = $("input[name='email']").val();
            //         // var mobile = $("input[name='mobile']").val();
            //         // var package_weight = $("input[name='package_weight']").val();
            //         // var pickup_address = $("input[name='pickup_address']").val();
            //         // var dest_address = $("input[name='dest_address']").val();
            //         // var package_items = $("input[name='package_items']").val();
            //         // var other_items = $("input[name='other_items']").val();
            //         // var payment_option = $("input[name='payment_option']:checked").val();
            //         var token = $('input[name=_token]').val();
            //         $("#pickup_load").show();
            //         jQuery.ajax({
            //             url: '/schedule-pickup/request',
            //             type : "POST",
            //             // data:{ _token:token, fname:fname, lname:lname, email:email},
            //             // data:{ _token:token, fname:fname, lname:lname, email:email, mobile:mobile,
            //             //     pack_weight:package_weight, pickup_address:pickup_address, dest_address:dest_address,
            //             //     pack_items:package_items,other_items:other_items,payment_option:payment_option
            //             // },
            //             success: function(data){
            //                 console.log(data);
            //                 $("#pickup_load").hide();
            //             }
            //         });
            //         return false;
            //     }
            // });

            $('input[name="other"]').click(function () {

                if (this.checked) {
                    $(".other_item_box").css("display","block");
                }
                else {
                    $(".other_item_box").css("display","none");
                }
            });
        });
    </script>
@endsection