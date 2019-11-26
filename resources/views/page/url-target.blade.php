{{--@extends('layout-url-landing')--}}
@extends('layout')
@section('title', $title )
@section('description', $description)
@section('keywords', $keywords)

@section('css_style')

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name" : "International shipping from india",
          "url": "https://www.shoppre.com",
          "alternateName": "ShoppRe.com",
          "logo": "https://www.shoppre.com/img/logo.png",
          "sameAs" : [
            "https://www.facebook.com/goshoppre/",
            "https://twitter.com/Go_Shoppre",
            "https://www.linkedin.com/company/shoppre.com",
            "https://www.instagram.com/shoppre_official"
                     ]
          }
    </script>

@endsection

@section('content')

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.shoppre.com">
                <img src="{{env('AWS_CLOUD_FRONT')}}/img/logo.png">
            </a>
        </div>
        </div><!-- /.container-fluid -->
    </nav>

        <div id="contentQuickLinks" class="noPrint">
            <p class="quicLinksJumpTo">
                Services: 👉
            </p>
            <ul class="quickLinks quickLinksWidth">
                <li class="quickLinksItem"><a class="link" href="/online-shopping-and-international-shipping-sit-back-relax-shop-from-india" target="_blank">
                        Online Shopping from India</a>|
                </li>
{{--                <li class="quickLinksItem"><a class="link" href="#document">--}}
{{--                        Document</a>|--}}
{{--                </li>--}}
{{--                <li class="quickLinksItem"><a class="link" href="#branded_food_items">--}}
{{--                        Branded & Packaged Food</a>|--}}
                </li>
                <li class="quickLinksItem"><a class="link" href="/priyamani-ad-launch-parcel-forwarding-service-from-india" target="_blank">
                        Package Forwarding</a>|
                </li>
                <li class="quickLinksItem"><a class="link" href="/personal-shopper-shopping-concierge-from-india" target="_blank">
                        Assisted Shopping</a>|
                <li class="quickLinksItem"><a class="link" href="https://www.shoppre.com/schedule-pickup" target="_blank">
                        Courier Pick-up</a>|
                </li>
                </li>
                <li class="quickLinksItem"><a class="link" href="/best-international-relocation-packers-movers" target="_blank">
                        Relocation Services</a>|
                </li>
                <li class="quickLinksItem"><a class="link" href="/package-consolidation-international-shipping" target="_blank">
                        Consolidation & Repackaging</a>|
                </li>
                <li class="quickLinksItem"><a class="link" href="/shop-from-india-ship-worldwide" target="_blank">
                        International Shipping & Shopping</a>
                </li>
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
                    <div class="parcelsample">
                        <h5>Centimeter/Inch Conversion</h5>
                        <p>1 in = 2.54 cm <span>(1 cm = 0.3937 in)</span></p>
                        <h5>Kilogram/Pound Conversion</h5>
                        <p>1 lbs = 0.4536 Kg <span>(1 Kg = 2.2046 lbs)</span></p>
                        <h5>Parcel Sample :</h5>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/parcelsample.png">
                    </div>
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
                                    <label class="col-sm-12">Where do you want to send your package?</label>
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
                                    <label class="col-sm-5 control-label" style="top: 8px;">What is your package
                                        type?</label>
                                    <div class="col-sm-7">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="type" value="nondoc" checked>Non Document
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="type" value="doc">Document
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
                                                <input type="radio" name="unit" value="lbs">Pounds
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
                                                <input type="radio" name="scale" value="in">in
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
                                <h4 class="text-red margin_cost">ESTIMATED SHIPPING COST*</h4>
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
                                        the two: Volumetric or the Actual weight.
                                    </li>
                                    <li><span class="text-red">*</span> The rates displayed are INCLUSIVE of the
                                        fuel surcharge and taxes within India.
                                    </li>
                                    <li><span class="text-red">*</span> You may need to pay duties or tax when your
                                        shipment arrives, as per the import law of the receiving country.
                                    </li>
                                    <li><span class="text-red">*</span> Excludes oversized and palletized shipments,
                                        and special products (liquids, homemade food, etc.)
                                    </li>
                                    <li><span class="text-red">**</span> After dispatch from Shoppre facility. Does
                                        not apply to ship requests made after 3pm IST on Saturdays, or on holidays.
                                        Shipments that may require additional time include those containing items
                                        under review or hazardous materials, oversized packages or where additional
                                        export documentation is required.
                                    </li>
                                </ul>
                            </div>
                            <div id="calc_load"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="document">
        <section class="service-sec">
            <h3 class="htag_align">Non-document Prices for {{ucfirst(trans($destination))}}</h3>
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
            <div style=" height: 295px;">
                <div class="col-md-6">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/homemade.jpg">
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
        <section class="service-sec yellow">
            <h3 class="htag_align">Send branded food items to {{ucfirst(trans($destination))}}</h3>
            <div style=" height: 450px;">
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
                    <img style=" height: 490px;" src="{{env('AWS_CLOUD_FRONT')}}/img/branded-food-items.jpg">
                </div>
            </div>
        </section>
    </div>
    <div id="liquid">
        <section class="service-sec yellow">
            <h3 class="htag_align">Send liquid/semi-liquid to {{ucfirst(trans($destination))}}</h3>
            <div style=" height: 490px;">
                <div class="col-md-5">
                    <img style=" height: 490px;" src="{{env('AWS_CLOUD_FRONT')}}/img/liquid.jpg">
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
    <div id="personal-shopper">
        <section class="service-sec">
            <h3 class="htag_align">Use Personal Shopper Service To Purchse Your Items</h3>
            <div class="container">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/services1.png">
                </div>
                <div class="col-md-8 ">
                    <h4>YOUR PERSONAL SHOPPER</h4>
                    <p>Simply provide us the product and Seller details, our Personal Shopper will purchase the item
                        on your behalf, using our Indian Local Card!</p>
                    <a href="https://www.shoppre.com/personal-shopper-india" target="_blank" class="btn btn-shoppre">Learn more
                        about Personal Shopper </a>

                    <h4>GIFT YOUR LOVED ONES LIVING IN INDIA</h4>
                    <p>Simply sign up and use Shoppre’s Personal Shopper to buy your favorite product from ANY
                        Indian website, and gift your loved ones in India!</p>
                    <a href="https://www.shoppre.com/customer/register" target="_blank" class="btn btn-shoppre">Sign up for free</a>
                </div>
            </div>
        </section>
    </div>
    <div id="locker-facility">
        <section class="service-sec yellow">
            <div class="container locker_fonts">
                <h2>FREE storage upto 20 days</h2>
                <p>
                    ShoppRe has created a brand by itself by specializing as an exclusive international courier service
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
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/repackage.png">
                    <h4>We only repack goods which :</h4>
                    <ul>
                        <li>Require added protection and security if it is inadequately packed for international
                            shipping.
                        </li>
                        <li>Have high volumetric weight than the actual weight.</li>
                        <li>We will repack each package to reduce the weight, which will reduce your shipping cost
                            .Original package contents are not compromised by repackaging.
                        </li>
                        <li>If you don't wish for your shipments to be repacked, you can set that preference in
                            your account.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 repack_box">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/repack_ex.png" style="width: 380px;">
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
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/consolid1.png">
                    </div>
                    <p class="result"><strong>Shipping each item abroad separately :<br>
                            Total Shipping Cost $60</strong></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="serv_sec">
                    <h4>shipping through <a href="{{route('home')}}" class="text-orange">ShoppRe.com</a></h4>
                    <div class="example">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/consolid2.png" style="max-width: 78%;">
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
                    <p>Enjoy ShoppRe's special discount rates with our trusted courier partners like DHL,
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
                        other shipments.
                    </li>
                    <li>Any item whose carriage is prohibited by any law, statute or regulations of the country of
                        origin or destination, or of any country through which the shipment may transit.
                    </li>
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
            <div class="col-md-12 col-xs-12 div-b-w-s  b-r no-pad " style="margin-top: 50px;">
                <h1 class="f-s-22 f-c-d-greay text-center">Cheap and Fast International Shipping from India</h1>
                <div class="col-xs-12 col-md-12 txt-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.719140890176!2d77.63333951482157!3d12.925764390885917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc11d2d90e91693f3!2sCheap%20%26%20Fast%20International%20Shipping%20from%20India%20-%20ShoppRe.com!5e0!3m2!1sen!2sin!4v1572942278596!5m2!1sen!2sin"
                            width="1168" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <h4 class="f-s-16 f-c-l-gray txt-a-c">ShoppRe - International Shipping Services</h4>
                </div>
            </div>
            <br>
        </section>
        <br>
    </div>
{{--    <section class="timeline1">--}}
{{--        <div class="container">--}}
{{--            <div class="col-sm-10">--}}
{{--                <div class="parcel_logs">--}}
{{--                    <h3>Ship your Parcel through ShoppRe’s trusted International Shipping & Delivery Partners</h3>--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/dhl.png">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/fedex.png">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/dtdc.png">--}}
{{--                    <section class="delivery txt-center" >--}}
{{--                        <div class="container">--}}
{{--                            <br/>--}}
{{--                            <h3 class="header3 p-color-cement-dark font-weight-900 txt-center">Ship your Parcel through ShoppRe’s trusted International Shipping & Delivery Partners--}}
{{--                            </h3>--}}
{{--                            <br/>--}}
{{--                            <div class="row">--}}
{{--                                <br/>--}}
{{--                                <div class="col-md-3 col-xs-12">--}}
{{--                                    <center>--}}
{{--                                        <div class="EcomBox">--}}

{{--                                            <div class="ecomSmallBox">--}}

{{--                                                    <p class="header3 p-color-cement-dark font-weight-900">DHL</p>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </center>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-3 col-xs-12">--}}
{{--                                    <center>--}}
{{--                                        <div class="EcomBox">--}}

{{--                                            <div class="ecomSmallBox">--}}

{{--                                                    <p class="header3 p-color-cement-dark font-weight-900">DTDC</p>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </center>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-3 col-xs-12">--}}
{{--                                    <center>--}}
{{--                                        <div class="EcomBox">--}}

{{--                                            <div class="ecomSmallBox" >--}}

{{--                                                    <p class="header3 p-color-cement-dark font-weight-900">Aramex</p>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </center>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </section>--}}
{{--                    <br>--}}
{{--                    <br>--}}
{{--                    <h2 >ShoppRe receives and ships over ₹30,00,000 worth in eCommerce purchases monthly!</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <br>

    <center>    <div id="JdBadge" data-s1="b2" data-s2="Y3RyY3QlNDAlNDAlNDAwODBQWFg4MCUyQlhYODAlMkIxNzA4MjIxMDQ2MTAlMkJTNEY0"></div>
        <div id="JdBadgeDest"></div><script type="text/javascript" src="https://www.justdial.com/Jd-Widget"></script>
    </center>


@endsection

@section('js_script')
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){$("#shipping").validate({rules:{country:{required:!0},weight:{required:!0},unit:{required:!0}},messages:{country:{required:"Please select country"},weight:{required:"Please enter weight to calculate."},unit:{required:"Please select unit of weight."}},submitHandler:function(e){var a=$("select[name='country']").val(),i=$("input[name='weight']").val(),t=$("input[name='unit']:checked").val(),n=$("input[name='type']:checked").val(),r=$("input[name='length']").val(),s=$("input[name='width']").val(),u=$("input[name='height']").val(),d=$("input[name=_token]").val();return $("#calc_load").show(),$("#calc_error").hide(),$("#ship_result").hide(),jQuery.ajax({url:"/calculate-shipping",type:"POST",data:{_token:d,country:a,weight:i,unit:t,type:n,length:r,width:s,height:u},success:function(e){if($("#calc_load").hide(),"1"==e.error)$("#calc_error").css("display","block");else{$("#ship_oldcost").text(e.prices[0].amount);var a=Math.round((100-e.prices[0].discount)/100*e.prices[0].amount).toFixed(2);$("#ship_cost").text(a),$("#ship_time").text(e.prices[0].time),$("#ship_disc").text(e.prices[0].discount),$("#ship_result").slideDown()}}}),!1}}),$("#pickup").validate({rules:{first_name:{required:!0},last_name:{required:!0},email:{required:!0},mobile:{required:!0},package_weight:{required:!0},pickup_address:{required:!0},dest_address:{required:!0},package_items:{required:!0},payment_option:{required:!0}},messages:{first_name:{required:"Please enter first name"},last_name:{required:"Please enter last name"},email:{required:"Please enter email"},mobile:{required:"Please enter mobile"},package_weight:{required:"Please enter package weight"},pickup_address:{required:"Please enter pickup address"},dest_address:{required:"Please enter destination address"},package_items:{required:"Please enter package items"},payment_option:{required:"Please select payment option"}},submitHandler:function(e){var a=$("input[name='first_name']").val(),i=$("input[name='last_name']").val(),t=$("input[name='email']").val(),n=$("input[name='mobile']").val(),r=$("input[name='package_weight']").val(),s=$("input[name='pickup_address']").val(),u=$("input[name='dest_address']").val(),d=$("input[name='package_items']").val(),l=$("input[name='payment_option']:checked").val(),c=($("input[name='home_made']:checked").val(),$("input[name='branded_food_items']:checked").val(),$("input[name='liquid_items']:checked").val(),$("input[name='medicine_items']:checked").val(),$("input[name='other']:checked").val(),$("input[name='other_items']").val(),$("input[name=_token]").val());jQuery.ajax({url:"/schedule-pickup/ajexRequest",type:"POST",data:{_token:c,first_name:a,last_name:i,email:t,mobile:n,package_weight:r,pickup_address:s,dest_address:u,package_items:d,payment_option:l},success:function(e){console.log(e)}})}}),$('input[name="other"]').click(function(){this.checked?$(".other_item_box").css("display","block"):$(".other_item_box").css("display","none")})});
    </script>
@endsection
