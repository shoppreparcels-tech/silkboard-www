@extends('layout')

@section('title', 'ShoppRe - Shop Indian Stores & Ship Internationally | Courier Service')
@section('description', 'Sign Up for Indian Address. Shop your favorite Indian store and Ship Internationally. India&#039;s #1 international courier, shipping and consolidation company.')
@section('keywords', 'shop and ship, courier service, shoppre, consolidation company, indian store, ship internationally, dhl, dtdc, cheapest package forwarding')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/owl.carousel.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/magnific-popup.css">

    <meta property="og:title" content="Shop and Ship with ShoppRe | International Courier & Consolidation Services"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:image:width" content="2506">
    <meta property="og:image:height" content="1312">
    <meta property="og:image:alt" content="ShoppRe international shipping and parcel forwarding from India" />
    <meta property="og:description" content="Signup for Indian Address. Shop your favorite Indian store and Ship Internationally. India's #1 international courier, shipping, consolidation and parcel forwarding company."/>
    <meta property="og:site_name" content="ShoppRe"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="Shop and Ship with ShoppRe | International Courier & Consolidation Services" />
    <meta name="twitter:description" content="Sign Up for Indian Address. Shop your favorite Indian store and Ship Internationally. India's #1 international courier, shipping, consolidation and parcel forwarding company." />
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg" />
    <meta name="twitter:image:alt" content="ShoppRe International Parcel Forwarding from India"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "International Shipping, Shopping from India, Parcel Delivery, Courier Services, ShoppRe",
    "description": "ShoppRe leading provider of parcel delivery, international courier, shipping & consolidation company from India.
     Shipping your items to worldwide & reaches within 3-6 working days, save 60-80% on shipping cost",
    "image": {
        "@type": "ImageObject",
        "url": "https://www.shoppre.com/img/logo.png",
        "width": "878",
        "height": "264"
    },
    "url": "https://www.shoppre.com/",
    "mainEntityOfPage": "https://www.shoppre.com",
    "inLanguage": "en_IN",
    "headline": "International Shipping: Parcel Delivery & Courier Services | ShoppRe India",
    "keywords": "International Shipping From India, Shipping Partner, Parcel Delivery, Courier Services",
    "copyrightYear": "2018",
    "author": {
        "@type": "Organization",
        "name": "ShoppRe",
        "url": "https://www.shoppre.com",
        "sameAs": ["https://twitter.com/Go_Shoppre",
        "https://www.facebook.com/goshoppre",
        "https://plus.google.com/+SHOPPRECOM",
        "https://www.linkedin.com/company/shoppre.com",
        "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
        "https://www.instagram.com/shoppre_official",
        "https://www.pinterest.com/shoppre",
        "https://play.google.com/store/apps/details?id=com.shoppre.play",
         "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"],
        "image": {
            "@type": "ImageObject",
            "url": "https://www.shoppre.com/img/logo.png",
            "height": "264",
            "width": "878"
        },
        "telephone": "+91 80409 44077",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "#181, 1st Floor, 2nd Cross Rd,1st Block Koramangala",
            "addressLocality": "Bengaluru",
            "addressRegion": "Karnataka",
            "postalCode": "560034",
            "addressCountry": "IN"
        },
        "location": {
            "@type": "Place",
            "name": "ShoppRe.com - Your Global Shipping Partner From INDIA",
            "hasMap": "https://www.google.co.in/maps/place/Shoppre.com+-+Your+Global+Shipping+Partner/",
            "telephone": "+91 80409 44077",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "12.9257998",
                "longitude": "77.6332563"
                   }
            }
       }
  }
</script>

<script type="application/ld+json">
 { "@context": "http://schema.org",
 "@type": "Organization",
 "name": "ShoppRe",
 "legalName" : "IndianShoppre LLP",
 "url": "https://www.shoppre.com",
 "logo": "https://www.shoppre.com/img/logo.png",
 "foundingDate": "2016",
 "founders": [
 {
 "@type": "Person",
 "name": "Saira Asif Hassan"
 },
 {
 "@type": "Person",
 "name": "Nikkitha Shanker"
 } ],
 "address": {
 "@type": "PostalAddress",
 "streetAddress": "No.181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala",
 "addressLocality": "Bengaluru",
 "addressRegion": "Karnataka",
 "postalCode": "560034",
 "addressCountry": "IN"
 },
 "contactPoint": {
 "@type": "ContactPoint",
 "contactType": "customer support",
 "telephone": "[+918040944077]",
 "email": "support@shoppre.com"
 },
 "sameAs": [
    "https://www.facebook.com/goshoppre",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://play.google.com/store/apps/details?id=com.shoppre.play",
    "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"
 ]}




</script>

<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "ShoppRe",
  "alternateName": "International Shipping From India, ShoppRe.com",
  "url": "https://www.shoppre.com",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "ShoppRe leading provider of shop and ship, courier and parcel delivery company in India. Shipping your items to worldwide & reaches within 3-6 working days, save 60-80% on shipping cost.",
    "sameAs": [
    "https://www.facebook.com/goshoppre/",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://play.google.com/store/apps/details?id=com.shoppre.play",
    "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"
  ]
}
</script>

    <style>
        .div-shop-ship1 > div {padding-top: 10px;padding-bottom: 10px}
        .div-shop-ship1 > div > p {text-align: center}
        .div-main .div-add{position:fixed;margin-top: 20%;z-index: 1}
        .div-main .div-add1{position:relative; float: right}
        .div-h-offer{border-radius: 15px;background-color: #ffffff;padding: 20px}
        .div-h-offer>div{padding-top: 10px;}
        @media only screen and (max-width: 1024px) {
            .div-add {display: none;}
        }
        @media only screen and (max-width: 1280px) {
            .div-add {display: none;}
        }
        @media only screen and (max-width: 600px) {
            #img-p{display: none}
        }
    </style>

@endsection

@section('content')
    <main class="div-main" role="main">
        <div id="myModal-offer" class="modal fade" role="dialog">
            <div class="modal-dialog modal-pop" >
                <!-- Modal content-->
                <div class="modal-content modal-pop-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center>
                            <h4 class="header2 p-color-white font-weight-900">Avail Your Discount Today!</h4>
                        </center>
                    </div>
                    <div class="no-padding">
                        <center>
                            <p class="font-weight-900">Sign Up and Get <span class="p-color-white">*50%</span> OFF <br>
                                On Your <span class="p-color-white">First Time Shipment</span></p>
                        </center>
                        <br>
                        <div class="col-md-12 col-xs-12 no-padding" style="background-color: rgb(255, 253, 221);">
                            <center>
                                <p class="header6 font-weight-900" style="color: rgb(74, 144, 226);margin-top: 10px">Use coupon code:</p>
                                <h2 style="color: rgb(245, 166, 35);font-size: 23px;text-align: center; font-weight: 900">
                                    FRST50</h2>  <br>
                            </center>
                        </div>
                        <div style="padding-top: 50px !important;"></div>
                    </div>
                    <div class="modal-footer" style="margin-top: 86px!important;">
                        <center>
                            <a href="{{route('customer.register')}}" class="btn-reg-popup" >Sign Up Now! </a>
                        </center>
                        <p class="pull-right header8 p-color-white" style="margin-top: 40px">*Maximum amount that can be availed by a customer is ₹200/-.</p>
                    </div>
                </div>

            </div>
        </div>
        {{--<div class="div-add no-padding pull-right"><a href="https://www.shoppre.com/offers/republic-day-special-offer-from-shoppre/"><img src="{{asset('/img/offers-image/republic_day.png')}}" alt="new year offer" class="pull-right"></a></div>--}}

        <div class="container header-menu-home-page"id="header-menu">
            <div class="col-md-2">
                <a href="{{route('ifs.index')}}" class="header6 p-color-cement">
                    <div>
                        <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/shopandservice.svg" class="header-menu-img"
                             alt="personal shopper">
                        <span class="p-color-cement"> Shop and Ship</span>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{route('personalShopper')}}">
                    <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/personal_shopper.svg" alt="How it Works" class="header-menu-img">
                    <span class="header6 p-color-cement">Personal Shopper</span>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('ics.index')}}" class="header6 p-color-cement">
                    <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/schedule_pickpup.svg" alt="Schedule Pickup"
                         class="header-menu-img">
                    <span class="header6 p-color-cement">Schedule Pickup</span>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('stores1')}}" class="header6 p-color-cement">
                    <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/browse_stores.svg" alt="Indian online stores" class="header-menu-img">
                    <span class="header6 p-color-cement">Browse Stores</span>
                </a>
            </div>
            <div class="col-md-2">
                <a href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32" target="_blank" class="header6 p-color-cement">
                    <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/prtner_with_us.svg" alt="Partner With Us" class="header-menu-img">
                    <span class="header6 p-color-cement">Partner With Us</span>
                </a>
            </div>
            <div class="col-md-2">
                <a href="https://www.shoppre.com/offers"
                   target="_blank" class="header6 p-color-cement">
                    <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/offfer.svg" alt="Offers" class="header-menu-img">
                    <span class="header6 p-color-cement"> Offers and Deals</span>
                </a>
            </div>
        </div>
        {{--<div class="container">--}}
            {{--<marquee class="f-s-16 f-c-red f-w-9">Dear Customers, Kindly note that - On account of the Republic Day Holiday, we have suspended our services on the 26th January, 2019. Happy Republic Day!</marquee>--}}
        {{--</div>--}}

        <div class="container">
            <div class="col-md-7 col-xs-12 col-sm-7 no-padding">
                <div>
                    <h1 class="header1 p-color-white ">
                        International Shipping from India <span class="f-c-yellow" id="country"></span>
                        starting at just <span class="p-color-red">*₹<span id="prices"></span></span><span style="color: #ffffff">!</span>
                    </h1> <br>
                </div>
                <div>
                    <div class="col-md-10 div-h-offer no-padding">
                        <center>
                            <h7 class="f-s-16 f-c-blue f-w-8">Avail Your Discount on your First International Shipment!</h7>
                        </center>
                        <br>
                        <div>
                            <center>
{{--                                <img src="{{asset('img/images/first-50.png')}}" alt="FIRST50 Cashback" class="img-responsive"> <br>--}}
                                <img src="{{asset('img/images/offer-international-courier-india.png')}}" alt="FIRST50 Cashback" class="img-responsive"> <br>
                            </center>
                        </div>
                        <center>
                            <a href="{{route('member.plan')}}" class="btn-l btn-b-r btn-s-r btn-a-l">Sign Up FREE</a>
                        </center>
                        <span class="pull-right f-c-gray f-s-12"><a href="{{route('first-shipment')}}">*T&C Apply</a></span>

                    </div>

                    <div class="col-md-10 col-xs-12 no-padding">
                        <br>
                        <br>
                        <div class="col-md-6 col-xs-6">
                            <center>
                                <p>
                                <a class="bla-1"
                                   href="https://www.youtube.com/watch?v=vb99LF4U1ew" target="_blank">
                                <img src="{{asset('img/images/btnplay.png')}}" alt="" class="img-responsive">
                                </a>
                                </p>
                            </center>

                        </div>
                        <div class="col-md-6 col-xs-6 ">
                            <center>
                                <a href="tel:+91-8277919191">
                                   <img src="{{asset('img/images/number.png')}}" alt="" class="img-responsive">
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5  no-padding">
                <img src="{{asset('img/images/priyamani-new.png')}}" class="img-responsive" alt="" id="img-p">
            </div>
        </div>

        <br>
        <br>
        <br>
    </main>
    <!-- Main container -->
    <section>
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                <center>
                    <h1 class="header1 p-color-cement-dark div-margin">About Us </h1>
                </center>
            </div>

            <div class="col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                <center>

                    <p class="header2 p-color-cement" style="text-align: center">Our trusted partners
                        <span class="p-color-red"><a href="{{route('dhl.index')}}">DHL</a></span>,
                        <span class="p-color-red">
                            <a href="{{route('dtdc.index')}}">
                                DTDC
                            </a>
                        </span>
                        &
                        more help us sail smooth all the way to
                        your destination, wherever it is! </p>
                </center>

            </div>
        </div>
    </section>

    <section>
        <div class="container" style="padding-left: 15px; padding-right: 15px;">
            <div class="div-benifits">
                <div class="row div-benifits-margin">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 ">
                        <center>
                            <a href="{{route('stores1')}}">
                                <img class="img-benifits img-responsive"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-from-indian-online-stores.svg"
                                     alt="shop from indian online stores shoppre">
                                <p class="online-text">&nbsp;1000+</p>
                                <p class="online-text-words">Shop From Indian <br>Online Stores </p>
                            </a>
                        </center>
                    </div>
                    <div class="col-md-3 col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <center>
                            <a href="{{route('countryList')}}">
                                <img class="img-benifits img-responsive"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/ship-worldwide-from-india.svg"
                                     alt="ship to 220 countries worldwide">
                                <p class="online-text">&nbsp;220+</p>
                                <p class="online-text-words">Ship to Countries <br>Around the World </p>
                            </a>
                        </center>
                    </div>
                    <div class="col-md-3 col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <center>
                            <a href="{{route('dhl.index')}}">
                                <img class="img-benifits img-responsive"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/3-6-days-delivery-worldwide.svg"
                                     alt="3 to 6 days worldwide delivery">
                                <p class="online-text">&nbsp;3-6 Days</p>
                                <p class="online-text-words">Worldwide Average <br> Delivery Time </p>
                            </a>
                        </center>
                    </div>
                    <div class="col-md-3 col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <center>
                            <a href="https://www.shoppre.com/offers/save-upto-80-international-shipping-cost-from-india/">
                                <img class="img-benifits img-responsive"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save-upto-80-shipping.svg"
                                     alt="save up to 80% on international shipping">
                                <p class="online-text" style="margin-left: -1px;">Save Up to 80%</p>
                                <p class="online-text-words">By Storing, Consolidating <br>& Repackaging! </p>
                            </a>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--commented code placed homepage folder shoppre benifits--}}
    <section>
        <div class="container ">
            <div class="div-margin">
                <center>
                    <h1 class="header1 p-color-cement-dark">Our Services</h1>
                    <p class="header2 p-color-cement">Ever wonder how do we make it all happen? Trust us, we
                        strategize around your needs!
                    </p>
                </center>
            </div>
            {{--<div class="container">--}}
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <center>
                    <img class="img-shop-ship img-responsive"
                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-india-and-ship-internationally.svg"
                         alt="shop india and ship internationally">

                    <p class="header3 p-color-red ">Shop & Ship</p>
                    <p class="header5 p-color-cement">Sign up for FREE and get a FREE virtual shipping address; shop
                        from ANY Indian online store; store your purchases in your PERSONAL LOCKER & consolidate; we'll
                        repackage & ship them to your doorsteps! <br><br>
                        International Cards giving you trouble at checkout? Take away our Personal Shopper!
                    </p>
                    {{--<center>--}}
                    <a href="{{route('ifs.index')}}">
                        <div class="btn-our-shop-ship btn-font-size">
                            <p>
                                Learn More
                            </p>
                        </div>
                    </a>
                    {{--</center>--}}
                </center>
            </div>
            <div class="col-xs-12 col-sm-12" id="hrline"></div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <center>
                    <img class="img-shop-ship img-responsive"
                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/schedule-a-pickup-courier.svg" alt="schedule a pickup courier">
                    <div class="ship-left-border">
                        <p class="header3 p-courier-h">ShoppRe Courier
                        <p class="header5 p-color-cement p-line-height">Schedule a Pickup from ANY part of India, our
                            professionals will come to your doorsteps in 24-48 hours & dispatch your package to the
                            destination ANYWHERE around the globe in 3-6 business days! <br><br>
                            Need to courier something abroad for a loved one? Worry No More Re! Just Shopp Re!</p>
                    </div>
                    <center>
                        <a href="{{route('schedulePickup.Index')}}">
                            <div class="btn-our-courier btn-font-size" id="btn-our-courier">
                                <p>
                                    Schedule a Pickup
                                </p>
                            </div>
                        </a>
                    </center>
                </center>
            </div>
            {{--</div>--}}
        </div>
    </section>
    <!-- Start whatcanYouship section -->
    <section style="background-color: #f2f6fb;">
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark div-margin">Take a Walk Around Your Favorite Stores</p>
                <p class="header2 p-color-cement ">Browse through popular stores, take your pick, shop & get it
                    delivered to your virtual address; we'll ship it to your destination abroad!</p>
            </center>
        </div>
        <div class="container div-store-padding">
            <center>
                <div class=" col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <a href="{{route('flipkart.landing')}}"><img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/flipkart-international-shopping.png"
                             alt="flipkart.com international delivery shipping"></a>
                    </center>
                </div>
                <div class="col-xs-3   div-stores-img">
                    <center class="online-stores">
                        <a href="{{route('amazon.landing')}}">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/amazon-india-shopping.png"
                             alt="amazon.in international delivery shipping">
                        </a>
                    </center>
                </div>
                <div class="col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/ajio-online-shopping.png"
                             alt="ajio.com free delivery shipping">
                    </center>
                </div>
                <div class=" col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/jabong-online-fashion-shopping.png"
                             alt="jabong.com shipping international">
                    </center>
                </div>
                <div class="  col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/homeshop-18-shopping-company.png"
                             alt="homeshop18.com best deal shopping shipping">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/snapdeal-indian-e-commerce-company.png"
                             alt="snapdeal.com indian e-commerce company">
                    </center>
                </div>
                <div class="col-xs-2 div-stores-img">
                    <center class="online-stores">
                        <a href="{{route('myntra.landing')}}">
                          <img class="img-responsive img-stores"
                            src="{{env('AWS_CLOUD_FRONT')}}/img/stores/myntra-express-delivery-globe.png"
                            alt="myntra.com fashion express delivery globe">
                        </a>
                    </center>
                </div>
                <div class=" col-xs-3 div-stores-img" id="hidestore">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/ebay-india-multinational-e-commerce.png"
                             alt="ebay.in online shopping site in india">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/limeroad-online-shopping-offers.png"
                             alt="limeroad.com shipping from india">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img" id="store-hide">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/infibeam-latest-deals-shopping.png"
                             alt="infibeam.com latest deals on shopping">
                    </center>
                </div>
            </center>
        </div>
        <div class="container">
            <center>
                <a href="{{route('stores1')}}" target="_blank">
                    <div class=" btn-browse-stores  header5 p-color-white">
                        <b><p>Browse Stores</p></b>
                    </div>
                </a>
            </center>
        </div>
    {{--commented code placed in homepage folder review--}}
    </section>
    <!-- Start whatcanYouship section end-->
    <section class="div-fluid">
        <div class="container">
            <center>
                <p class="header1 p-color-white p-h-margin-customer">What Our Customers Think About Us</p>
                <p class="header2 p-wondring">Wondering what our fellow customers are so excited about? Read some real
                    reviews.</p>
            </center>
        </div>
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 div-review">
                <div class="col-md-8 col-lg-8" style="margin-top: 20px">
                    <div class="row" style="margin-left: -36px">
                        <div class="col-md-3  div-inner-review">
                            <div class="row div-img-row" id="reviews-img">
                                <img class=" img-review img-circle" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/034-woman-8.svg">
                                <p class="p-name">&nbsp;&nbsp;&nbsp;&nbsp;Jigyasa Singh</p>
                                <p class="p-name1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA</p>
                                <img class="img-stars" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/stars.svg">
                            </div>
                            <div class="row" id="reviews">
                                <i class="quots-t ">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_up.svg">
                                </i>
                            </div>
                            <div class="row" id="reviews">
                                <p class=" p-reviews">I am really happy with my delivery time. Wow just took 3 days to reach from India to New JERSEY.
                                    AMAMZING CUSTOMER SUPPORT TOO. GO AHEAD WITH THIS FOR INTERNATIONAL SHIPMENT DELIVERIES.
                                    V GOOD SERICE</p>
                            </div>
                            <div class="row" id="reviews">
                          <span class="quots-b">
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_down.svg">
                          </span>
                            </div>
                        </div>
                        <div class="col-md-3 div-inner-review">
                            <div class="row div-img-row" id="reviews-img">
                                <img class=" img-review img-circle" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/040-man-11.svg">
                                <p class="p-name">&nbsp;&nbsp;&nbsp;&nbsp;Sudeep Sagar</p>
                                <p class="p-name1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UAE</p>
                                <img class="img-stars" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/stars.svg">
                            </div>
                            <div class="row" id="reviews">
                                <i class="quots-t ">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_up.svg">
                                </i>
                            </div>
                            <div class="row" id="reviews">
                                <p class="p-reviews">Amazing and very fast service. They told me it would reach
                                    within 5 working days but it actually
                                    reached with in 3 working days. I'm very much satisfied with shoppre
                                    service.
                                </p>
                            </div>
                            <div class="row" id="reviews">
                              <span class="quots-b">
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_down.svg">
                              </span>
                            </div>
                        </div>
                        <div class="col-md-3 div-inner-review">
                            <div class="row div-img-row" id="reviews-img">
                                <img class=" img-review img-circle" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/001-man.svg">
                                <p class="p-name">&nbsp;&nbsp;&nbsp;&nbsp;Anirudh Lal</p>
                                <p class="p-name1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;India</p>
                                <img class="img-stars" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/stars.svg">
                            </div>
                            <div class="row">
                                <i class="quots-t " id="reviews">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_up.svg">
                                </i>
                            </div>
                            <div class="row" id="reviews">
                                <p class="p-reviews">Extremely reliable shipping/courier agents.
                                    Miss Tanuja who had continuously worked for
                                    my shipping to U.S, even after facing hiccups with Dhl, Tanuja had
                                    a secondary plan, and made the shipping happen. </p>
                            </div>
                            <div class="row" id="reviews">
                                  <span class="quots-b">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_down.svg">
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 " style=" margin: 16px 0 16px -13px;">
                            <a href="{{route('reviews')}}"><span
                                    class="header6 p-color-red" id="readmore" style="font-weight: 600;"> Read more reviews </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4" style="padding-left: 5px;">
                    <a href="https://www.google.com/search?q=shoppre&oq=shoppre&aqs=chrome..69i57j69i60l5.4478j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3bae146191401f95:0x1cf2770c1532d7d1,1,,,"
                       target="_blank">
                        <div class="row div-img-row">
                            <img class="img-google-logo "
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/svg/google-reviews-shipping-service-bengaluru.svg"
                                 alt="google reviews cheap international shipping from india">
                            <p class="p-google-review">Reviews</p>
                        </div>
                        <div class="row" style="padding-left: 4px ;margin-top: -20px;">
                            <a href="https://www.google.com/search?q=shoppre&oq=shoppre&aqs=chrome..69i57j69i60l5.4478j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3bae146191401f95:0x1cf2770c1532d7d1,1,,,"
                               target="_blank">
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/google-rating-shipping-service-bengaluru.png"
                                     alt="google rating cheap international shipping from india">
                            </a>
                        </div>
                    </a>
                    <div class="row-between-reviews" id="hrline1"></div>
                    <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank">
                        <div class="row">
                            <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank">
                                <img class="img-facebook-logo"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/images/facebook-reviews-shipping-service.png"
                                     alt="facebook goshoppre reviews international parcel delicery from india">
                                <p class="p-facebook-review">Reviews</p>
                            </a>
                        </div>
                        <div class="row">
                            <img class="img-facebook-r"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/images/facebook-rating-shipping-service.png"
                                 alt="facebook goshoppre rating international parcel delicery from india">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 30px">
        <div class="container" style="margin-top: 60px;padding-bottom: 20px;">
            <center>
                <p class="header1 p-color-cement-dark">Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">What Are You Waiting For Re! Just Come Shopp Re!</p>
                <a href="{{route('member.plan')}}" target="_blank">
                    <div class="btn-login-doorstep header5 p-color-white">
                        <p>
                            Sign Up for FREE
                        </p>
                    </div>
                </a>
            </center>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 hr-line-payment-method"></div>

        </div>
        <div class="container">
            <center>
                <p class="p-payment-method">Payment Methods We Accept</p>
            </center>

        </div>
        <div class="container">
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 no-padding ">
                <img class="img-payment-methods" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/credit-debit-card-courier-shipping.svg"
                     alt="credit debit card courier from india">
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 no-padding">
                <img class="img-payment-methods"
                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/wire-transfer.svg" alt="wire transfer pay online shipping">
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 no-padding">
                <img class="img-payment-methods" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/paypal-pay-online.svg"
                     alt="paypal online courier parcel">
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 no-padding">
                <img class="img-payment-methods" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/paytm-payment-system-and-digital-wallet.svg"
                     alt="paytm e-commerce digital wallet ">
            </div>
        </div>
       {{--commented code placed in homepage folder--}}

    </section>
    <section style="background-color: #f2f6fb;">
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark div-margin">In The News</p>
            </center>
        </div>
        <div class="container div-store-padding">
            <center>
                <div class=" col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/india_today_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/india_today.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/india_today_grey.jpg')">

                    </center>
                </div>
                <div class="col-xs-3   div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/khaleej_time_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/khaleej_time.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/khaleej_time_grey.jpg')">

                    </center>
                </div>
                <div class="col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/exam_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/exam.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/exam_grey.jpg')">
                    </center>
                </div>
                <div class=" col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/euro_press_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/euro_press.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/euro_press_grey.jpg')">
                    </center>
                </div>
                <div class="  col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/yahoo_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/yahoo.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/yahoo_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/malayala_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/malayala.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/malayala_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-2 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores" src="{{env('AWS_CLOUD_FRONT')}}/img/media/business_standard_grey.jpg"alt=""
                        onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_standard.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_standard_grey.jpg')">
                    </center>
                </div>
                <div class=" col-xs-3 div-stores-img" id="hidestore">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/markets_inside_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/markets_inside.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/markets_inside_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/the_week_grey.jpg"alt=""
                        onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/the_week.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/the_week_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img" id="store-hide">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"src="{{env('AWS_CLOUD_FRONT')}}/img/media/business_today_grey.jpg"alt=""
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_today.jpg')" onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_today_grey.jpg')">
                    </center>
                </div>
            </center>
        </div>
        <br>
        <br>
    </section>

    <section class="content-oes">
        <div class="container"><br><br>
            <h1>Shop from India without second thoughts from now on, we ship around the world!</h1>

            <p>Our Shop&Ship enables online shopping from India and shipping to the USA, UK, UAE, Australia etc.-
                (you name it, we ship there) - with a streamlined set of services & an ease that you’ve never known before.
                You can <a href="{{route('stores1')}}">shop around on Indian stores</a>  as much as you want, we’re here to take it from there. </p>

            <h1>Schedule a Pickup from ANYWHERE in India, we’ll come to the door to pick it up!</h1>

            <p>Sending a courier abroad from India is now made extremely easy by ShoppRe Courier.
                We impart personalized attention to each package we handle, and offer country-specific
                discounts; making it the <a href="{{route('ics.index')}}">cheapest international courier service in India!</a></p>

            <h1>Is it possible to shop online from India without any hassles, you ask?</h1>

            <p>Say goodbye to all the international credit/debit card hassles at checkout! A group of experts here at
                ShoppRe is at your beck & call to help you out with the whole shopping process; our Personal Shopper
                will do the shopping for you! They‘re quick on their hands & exists to make package
                forwarding from India a no-brainer.</p>

            <h1>Your favourite Indian shopping site doesn’t deliver Internationally?</h1>

            <p>You don’t have to break a sweat anymore! Come to ShoppRe, we’re here with the cheapest courier rates
                that you can possibly find in India, enabling you to go on a shopping spree online and ship
                your packages internationally without burning a hole through your pockets.</p>

            <h1>So, how do we save you up to 80% on shipping costs?</h1>

            <p>While you gather around your wishlists from all <a href="{{route('stores1')}}">your favourite stores here</a>, you can store all your
                purchases in our FREE personal locker that we assign just for you, we consolidate them into one,
                and send your parcel off to you wherever you’re abroad!</p>

            <h1>Want to send greetings & gifts overseas from India?</h1>

            <p>Tired of looking for the cheapest way possible to ship a courier from India to the USA, UK & such?
                Look no more! You’re right where you need to be. Learn more about the never-before-like
                <a href="{{route('pricing')}}">shipping charges from India</a>, that we offer! </p>


        </div>
        <br>
        <div class="container">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <ul class="nav-ul">
                    <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('medicine')}}">Medicine International Courier</a></li>
                    <li class="li"><a class="f-s-14 f-c-l-gray" href="https://www.shoppre.com/university-offer" target="_blank">Documents International Courier</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <ul class="nav-ul">
                    <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('packers-movers')}}">Relocation, Packers & Movers</a></li>
                    <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('forwarding')}}" target="_blank">Package Forwarding from India</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <ul class="nav-ul">
                <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('indianVirtual')}}">Virtual Shipping Address</a></li>
                <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('consolidationService')}}">Consolidation & Repacking</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <ul class="nav-ul">
                <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('voucher')}}">International Shipping Card</a></li>
                <li class="li"><a class="f-s-14 f-c-l-gray" href="{{route('first-shipment')}}">First Shipment Cashback</a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
    </section>
    <section>
        <div class="container div-got-top">
            <a href="#" style="float: right">
                <img class="img-goto-top" id="back-to-top" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/gototop.svg"
                     alt="gototop shipping">
            </a>
        </div>

    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });
        $(document).ready(function() {
            var id = '#dialog';
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            $('#mask').css({'width':maskWidth,'height':maskHeight});
            $('#mask').fadeIn(500);
            $('#mask').fadeTo("slow",0.9);
            var winH = $(window).height();
            var winW = $(window).width();
            $(id).css('top',  winH/2-$(id).height()/2);
            $(id).css('left', winW/2-$(id).width()/2);
            $(id).fadeIn(2000);

            //if close button is clicked
            $('.window .close').click(function (e) {
                //Cancel the link behavior
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });

            //if mask is clicked
            $('#mask').click(function () {
                $(this).hide();
                $('.window').hide();
            });

        });
    </script>
    <script>
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if ($(this).scrollTop() > 500) {
                        $('#back-to-top').show();
                    } else {
                        $('#back-to-top').hide();
                    }
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 2000);
            });
        }
    </script>
    <script>
        $.getJSON("https://jsonip.com?callback=?", function(data) {
            console.log('ip data',data);
            $.getJSON("https://ipapi.co/"+data.ip+"/json/", function(res){
                console.log('Location Data',res);

                var country = res.country_name;
                var destination = '';
                var destination_country = 'United Arab Emirates';
                if (country != 'India') {
                    var destination = 'to ' + country;
                    destination_country = country;
                }

                console.log('destination_country', destination_country);
                var weight = 0.5;
                var unit = 'kg';
                var type = 'nondoc';
                var box_scale = '';
                var length = '';
                var width = '';
                var height = '';
                jQuery.ajax({
                    url: '/calculate-shipping',
                    type: "POST",
                    data: {
                        country: destination_country,
                        weight: weight,
                        unit: unit,
                        type: type,
                        length: length,
                        width: width,
                        height: height,
                        scale: box_scale,
                        origin: 'home_page',
                    },
                    success: function (res) {
                        console.log('pricing log', res);
                        if (res.error == "1") {
                        } else {
                            var final_price = "";
                            res.prices.map(function (price) {
                                final_price = Math.round(((100 - price.discount) / 100) * price.amount);
                                $('#prices').text(final_price);
                                $("#country").text(destination);
                            });
                        }
                    }
                });
            });
            // alert("Your IP address is :- " + data.ip);
        });
    </script>
@endsection


