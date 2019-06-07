@extends('layout')

@section('title', 'ShoppRe - Shop Indian Stores & Ship Internationally | Courier Service')
@section('description', 'Sign Up for Indian Address. Shop your favorite Indian store and Ship Internationally. India&#039;s #1 International Courier, Shipping & Consolidation Company')
@section('keywords', 'shop and ship, courier service, shoppre, consolidation company, indian store, ship internationally, dhl, dtdc, cheapest package forwarding usa')

@section('css_style')
    <meta name="robots" content="index">
    <link rel="canonical" href="https://www.shoppre.com"/>
    <!-- Owl Carousel -->
    {{--<link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/owl.carousel.min.css">--}}
    <!-- Magnific Popup -->
    {{--<link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/magnific-popup.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

    <link rel="stylesheet" href="{{asset('css/custom/shipment-sliders.css')}}">
    <script src="{{asset('js/shipments-slides.js')}}"></script>

    <meta property="og:title" content="Shop and Ship with ShoppRe | International Courier and Consolidation Services"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:image:width" content="2506">
    <meta property="og:image:height" content="1312">
    <meta property="og:image:alt" content="ShoppRe international shipping and parcel forwarding from India"/>
    <meta property="og:description"
          content="Signup for Indian Address. Shop your favorite Indian store and Ship Internationally. India's #1 international courier, shipping, consolidation and parcel forwarding company."/>
    <meta property="og:site_name" content="ShoppRe"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="Go_Shoppre"/>
    <meta name="twitter:title" content="Shop and Ship with ShoppRe | International Courier & Consolidation Services"/>
    <meta name="twitter:description"
          content="Sign Up for Indian Address. Shop your favorite Indian store and Ship Internationally. India's #1 international courier, shipping, consolidation and parcel forwarding company."/>
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
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
    "copyrightYear": "2019",
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
            "hasMap": "https://goo.gl/maps/uzk2WnBF7U62",
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
        .fuid-padding {
            padding-left: 5%;
            padding-right: 5%
        }

        .div-shop-ship1 > div {
            padding-top: 10px;
            padding-bottom: 10px
        }

        .div-shop-ship1 > div > p {
            text-align: center
        }

        .div-main .div-add {
            position: fixed;
            margin-top: 20%;
            z-index: 1
        }

        .div-main .div-add1 {
            position: relative;
            float: right
        }

        .div-h-offer {
            border-radius: 15px;
            background-color: #ffffff;
            padding: 20px
        }

        .div-h-offer > div {
            padding-top: 10px;
        }

        .h-div {
            height: 50px;
            overflow: hidden
        }

        .img-div {
            padding-top: 10px;
            overflow: hidden
        }

        .des-div {
            height: 150px;
            overflow: hidden
        }

        .div-s-br {
            border-radius: 3px;
            border: 1px solid #677582;
        }

        .h-s-a > div > a > div:hover {
            background-color: #507dbc;
            color: #ffffff;
            transition: 0.3s
        }

        .h-s-a a:hover {
            background-color: #507dbc;
            color: #ffffff
        }

        .vid-s-img {
            width: 100%
        }

        .h-sign-up {
            display: block
        }

        .pad-0-40 {
            padding: 40px
        }

        .pad-0-10 {
            padding-right: 5px;
            padding-left: 5px;
        }

        .pad-0-15 {
            padding-right: 15px;
            padding-left: 15px;
        }

        .offer-img-m {
            display: none
        }

        .offer-img-d {
            display: block
        }

        .pad-l-d {
            padding: 0;
        }

        .seo-hyperlinks {
        }

        .seo-hyperlinks ul {
            list-style: none;
        }

        .seo-hyperlinks ul li {
            font-size: 14px;
            color: #677582;
            margin-top: 5px;
        }

        .seo-hyperlinks ul li a {
            color: #677582;
        }

        @media only screen and (max-width: 1024px) {
            .div-add {
                display: none;
            }

            .mobile-pickup-block {
                display: none;
            }
        }

        @media only screen and (max-width: 1280px) {
            .div-add {
                display: none;
            }

            .mobile-pickup-block {
                display: none;
            }
        }

        @media only screen and (max-width: 600px) {
            #img-p {
                display: none
            }

            .mobile-pickup-block {
                display: block;
            }

            .h-sign-up {
                display: none
            }

            .pad-0-40 {
                padding: 5px
            }

            .pad-0-10 {
                padding-right: 5px;
                padding-left: 5px;
            }

            .offer-img-m {
                display: block
            }

            .offer-img-d {
                display: none
            }

            .fuid-padding {
                padding-left: 3%;
                padding-right: 3%;
            }

            .des-div {
                height: 115px;
                overflow: hidden
            }

            .vid-s-img {
                width: 30%
            }

            .pad-0-15 {
                padding: 0
            }

            .pad-l-d {
                padding-left: 10%;
            }
        }
    </style>

@endsection

@section('content')
    <main class="div-main" role="main">
        <div id="myModal-offer" class="modal fade" role="dialog">
            <div class="modal-dialog modal-pop">
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
                                <p class="header6 font-weight-900" style="color: rgb(74, 144, 226);margin-top: 10px">Use
                                    coupon code:</p>
                                <h2 style="color: rgb(245, 166, 35);font-size: 23px;text-align: center; font-weight: 900">
                                    FRST50</h2>  <br>
                            </center>
                        </div>
                        <div style="padding-top: 50px !important;"></div>
                    </div>
                    <div class="modal-footer" style="margin-top: 86px!important;">
                        <center>
                            <a href="{{route('customer.register')}}" class="btn-reg-popup">Sign Up Now! </a>
                        </center>
                        <p class="pull-right header8 p-color-white" style="margin-top: 40px">*Maximum amount that can be
                            availed by a customer is ₹200/-.</p>
                    </div>
                </div>

            </div>
        </div>
        {{--<div class="div-add no-padding pull-right"><a href="https://www.shoppre.com/offers/republic-day-special-offer-from-shoppre/"><img src="{{asset('/img/offers-image/republic_day.png')}}" alt="new year offer" class="pull-right"></a></div>--}}
        {{--header menu code avail in meena sublime text--}}

        {{--<div class="container">--}}
        {{--<marquee class="f-s-16 f-c-red f-w-9">Dear Customers, Kindly note that - On account of the Republic Day Holiday, we have suspended our services on the 26th January, 2019. Happy Republic Day!</marquee>--}}
        {{--</div>--}}


        <div class="container-fluid c-f-p m-t-30 "><br><br>
            <div class="col-md-12 col-xs-12 pad-t-20">
                <div class="col-md-6 col-xs-12 no-pad">
                    <div class="col-md-12 col-xs-12 no-pad">
                        <div class="col-md-2 col-xs-12 pad-t-20">
                            <center>
                                <a class="bla-1"
                                   href="https://www.youtube.com/watch?v=vb99LF4U1ew" target="_blank">
                                    <img src="{{asset('img/images/shoppre-youtube-shipping.png')}}" class="vid-s-img"
                                         alt="shoppre">
                                </a>
                            </center>
                        </div>
                        <div class="col-md-10 col-xs-12 pad-0-15">
                            <h1 class="f-s-36 f-c-white f-w-8 ">
                                International Shipping from India starting at just <span
                                        class="p-color-red">*₹566</span>!
                                {{--International Shipping from India <span class="f-c-yellow" id="country"></span>--}}
                                {{--starting at just <span class="p-color-red">*₹<span id="prices"></span></span><span style="color: #ffffff">!</span>--}}
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 no-pad h-s-a" style="margin-bottom: 20px;"><br>
                        <div class="col-md-4 col-xs-4 pad-r-5 ">
                            <a class="f-s-18 f-c-white" href="/shop-from-india-ship-worldwide">
                                <div class="col-xs-12 col-md-12 pad-0-40 div-s-br ">
                                    <h5 class="f-s-18 f-c-white txt-a-c"> Shop from India
                                        & <br> Ship Worldwide <br></h5>
                                    <center>
                                        <img src="{{asset('img/images/arrow-home.png')}}" class="pad-t-20  "
                                             alt="Ship Worldwide">
                                    </center>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4 pad-0-10">
                            <a class="f-s-18 f-c-white" href="/personal-shopper-india">
                                <div class="col-xs-12 col-md-12 pad-0-40 div-s-br">
                                    <h5 class="f-s-18 f-c-white txt-a-c"> Personal Shopper <br>
                                        (Assisted Purchase) <br></h5>
                                    <center>
                                        <img src="{{asset('img/images/arrow-home.png')}}" class="pad-t-20"
                                             alt="Personal Shopper">
                                    </center>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4 pad-l-5">
                            <a class="f-s-18 f-c-white" href="{{route('schedulePickup.Index')}}">
                                <div class="col-xs-12 col-md-12 pad-0-40 div-s-br ">
                                    <h5 class="f-s-18 f-c-white txt-a-c"> Courier
                                        <br>(Schedule A Pickup)<br></h5>
                                    <center>
                                        <img src="{{asset('img/images/arrow-home.png')}}" class="pad-t-20  "
                                             alt="International Courier">
                                    </center>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div>
                    <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                    <a href="https://ship.shoppre.com/offers/ramadan/" title="Ramadan Offer" target="_blank" class="f-s-16 f-c-red f-w-9">Ramadan Cashback Flat 25% On International Shipping -
                        Use Code: EID250, valid up to 8th June 2019.</a>
                    </marquee>
                    </div>
                    {{--<span class="f-s-16 f-c-red f-w-9">The biggest sale of the season from Flipkart.com & Amazon.in & Save 80% on International Shipping.</span><br>--}}
                    {{--< style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">--}}
                        {{--<a href="https://www.flipkart.com" title="Flipkart" target="_blank">1. Flipkart.com - Big Shopping Days 15th - 19th May 2019</a> ||--}}
                       {{--<a href="https://www.amazon.in/b?node=6648217031&pf_rd_p=f3b26b83-0a05-4b47-b7fd-09d8cb3d946e&pf_rd_r=H6SQ3E7F56BY4Q8Z0G16" title="Amazon.in" target="_blank">2. Amazon.in - Summer Pop-Up Sale 15th - 19th May 2019</a>--}}

                    {{--</>--}}
                </div>
                <div class="col-md-6 col-xs-12 pad-l-10 "><br>
                    <div class="col-md-12 col-xs-12 div-b-w-s pad-t-20">
                        <div class="col-md-12 col-xs-12 pad-20">
                            <a href="/first-time-international-shipment-offer" target="_blank"><img
                                        src="{{asset('img/images/200inr-shipping-offer-india-shoppre.png')}}" class="img-f-w offer-img-d"
                                        alt="first time international shipment offer"></a>
                            <a href="/first-time-international-shipment-offer" target="_blank"><img
                                        src="{{asset('img/images/200inr-shipping-offer-india.png')}}"
                                        class="img-f-w offer-img-m" alt="first international shipping discount"></a>
                            <center><a href="{{route('customer.login')}}"
                                       class="btn btn-s-r btn-b-r btn-a-l m-t-20 offer-img-m">Sign up for Free</a>
                            </center>
                        </div>
                        <div class="col-md-12 col-xs-12 no-padd">
                            @if (session('message'))
                                <div class="alert alert-success text-center">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if (session('error_message'))
                                <div class="alert alert-danger text-center">
                                    {{ session('error_message') }}
                                </div>
                            @endif
                        </div>
                        <form class="register-form h-sign-up" id="form_register" role="form" method="POST"
                              action="{{ route('customer.register.submit') }}">
                            {{ csrf_field() }}
                            <div class="col-md-6 col-xs-12 pad-20">
                                <input id="firstname" name="firstname" type="input" class="txt-l-br txt-f-w txt-b-r txt-pad m-t-10 f-s-16" autocomplete="off"
                                       placeholder=" Enter your Name" required>
                                <input name="email" type="email" class="txt-f-w txt-b-r txt-l-br txt-pad m-t-10 f-s-16"
                                       autocomplete="off" placeholder=" Enter your Email id" required>
                                <input name="password" type="password"
                                       class="txt-f-w txt-b-r txt-l-br txt-pad m-t-10 f-s-16" autocomplete="off"
                                       placeholder=" Password" required>
                                {{--<a href="" class="btn btn-s-r btn-b-r btn-a-l m-t-20">Sign up for Free</a>--}}
                                <button type="submit" class="btn btn-s-r btn-b-r btn-l m-t-20">Sign Up Free</button>
                                <p class="f-s-14 f-c-blue m-t-20">Avail Your Discount Today!</p>
                            </div>
                            <div class="col-md-6 col-xs-12 no-pad ">
                                <center>
                                    <img src="{{asset('img/images/priyamani-shipping-img.png')}}"
                                         class="img-responsive " alt="priyamani shoppre">
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>
    <!-- Main container -->

    <!-- latest shipments details-->
    <section>
        <div class="container-fluid fuid-padding pad-t`-40"><br><br>
            <div class="col-md-2 col-xs-12 pad-l-d">
                <center>
                    <h1 class="f-s-26 f-c-d-greay f-w-9 txt-a-l">Live <br>
                        <span class="f-s-45 f-w-8 f-c-green "> Sales</span></h1>
                    <h4 class="f-s-18 f-c-l-gray txt-a-l">Grab The<br> Running Offers from<br> Indian Stores</h4>
                </center>
            </div>
            <div class="col-md-10 col-xs-12 pad-b-30">
                <div class="slider" id="shippingCard">
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://clnk.in/iQ78" title="Click to Know More" target="_blank">
                        <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                        <div class="pad-5 bgr-c-gl">
                            <div class="h-div"><h4 class="f-s-20 f-c-white">Flipkart.com</h4></div>
                        </div>
                        <div class="des-div"><br>
                            <p class="f-s-16 f-c-l-gray f-w-7"><span class="f-s-16 f-c-red f-w-9">Redmi Note 7S</p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">From ₹10,999/- </p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">3.0 GB RAM | 32 GB ROM | 48.0MP + 5.0MP | 13.0MP Front Camera.</p>
                        </div>
                        {{--<div>--}}
                            {{--<h2 class="f-s-16 f-c-d-greay">--}}
                                {{--Shop Honor from Amazon.in India : <span class="p-color-blue">Ship to your doorstep </span>--}}
                            {{--</h2>--}}
                        {{--</div>--}}
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://www.ajio.com/" title="Click to Know Highlights" target="_blank">
                        <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                        <div class="pad-5 bgr-c-bl">
                            <div class="h-div"><h4 class="f-s-20 f-c-white">Ajio.com</h4></div>
                        </div>
                        <div class="des-div"><br>
                            <p class="f-s-16 f-c-l-gray f-w-7"><span class="f-s-16 f-c-red f-w-9">Handpicked Sale</span>:4-11 June</p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">60-80% Off</p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">35,000+ exclusive styles. Tops & Dresses, Fusion Wear, Fashion Jewellery</p>
                        </div>
                        {{--<div>--}}
                            {{--<h2 class="f-s-16 f-c-d-greay">--}}
                                {{--<img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">New York	, USA</span>--}}
                            {{--</h2>--}}
                        {{--</div>--}}
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://www.amazon.in/b?node=11400137031&pf_rd_p=47fccc47-5091-4531-a3a9-43bdceb55ea9&pf_rd_r=Z4VBHT14HKQ5SE6TD6FE" title="Know More" target="_blank">
                        <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                        <div class="pad-5 bgr-c-gr">
                            <div class="h-div"><h4 class="f-s-20 f-c-white">Amazon.in</h4></div>
                        </div>
                        <div class="des-div"><br>
                            <p class="f-s-16 f-c-l-gray f-w-7"><span class="f-s-16 f-c-red f-w-9">Tops, Dresses & More</span></p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">Minimum 50% Off</p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">Buy Tops, Shirts, Tees, Jeans, Trousers, & more. Starting from ₹399/-</p>
                        </div>
                        {{--<div>--}}
                            {{--<h2 class="f-s-16 f-c-d-greay">--}}
                                {{--<img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">Texas, USA</span>--}}
                            {{--</h2>--}}
                        {{--</div>--}}
                    </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://www.jaypore.com/eoss2019" title="Click for Offer Details" target="_blank">
                        <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                        <div class="pad-5 bgr-c-gl">
                            <div class="h-div"><h4 class="f-s-20 f-c-white">Jaypore.com</h4></div>
                        </div>
                        <div class="des-div"><br>
                            <p class="f-s-16 f-c-l-gray f-w-7"><span class="f-s-16 f-c-red f-w-9">The Summer Of Savings Sale</span></p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">Up to 60% Off</p>
                            <br>
                            <p class="f-s-16 f-c-l-gray f-w-7">Kurtas & Pants, Duppatas & Stoles, Saress & Blouses and more..</p>
                        </div>
                        {{--<div>--}}
                            {{--<h2 class="f-s-16 f-c-d-greay">--}}
                                {{--<img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">Illinois, USA</span>--}}
                            {{--</h2>--}}
                        {{--</div>--}}
                    </div>
                        </a>
                    </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            {{--<div class="col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">--}}
            <center><br>
                <h1 class="header1 p-color-cement-dark div-margin">About Us </h1>
            </center>
            {{--</div>--}}

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
                            <a href="https://www.shoppre.com/member/select/plan">
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
                                Shop For Me
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
                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/schedule-a-pickup-courier.svg"
                         alt="schedule a pickup courier">
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
                        <a href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/" target="_blank">
                            <img class="img-responsive img-stores"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/stores/amazon-india-shopping.png"
                                 alt="amazon.in international delivery shipping">
                        </a>
                    </center>
                </div>
                <div class="col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <a href="/ajio-online-shopping-international-shipping">
                            <img class="img-responsive img-stores"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/stores/ajio-online-shopping.png"
                                 alt="ajio.com free delivery shipping">
                        </a>
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
                        <a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/snapdeal-indian-e-commerce-company.png"
                             alt="snapdeal.com indian e-commerce company">
                        </a>
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
                        <a href="/limeroad-shopping-international-shipping">
                            <img class="img-responsive img-stores"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/stores/limeroad-online-shopping-offers.png"
                                 alt="limeroad.com shipping from india">
                        </a>
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
        <div class="container pad-b-30">
            <center>
                <a href="{{route('stores1')}}" class="btn btn-s-r btn-b-r" style="margin-top: -26px">Browse Indian
                    Stores</a>
            </center>
        </div>
    </section>
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
                                <img class=" img-review img-circle"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/034-woman-8.svg">
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
                                <p class=" p-reviews">I am really happy with my delivery time. Wow just took 3 days to
                                    reach from India to New JERSEY.
                                    AMAMZING CUSTOMER SUPPORT TOO. GO AHEAD WITH THIS FOR INTERNATIONAL SHIPMENT
                                    DELIVERIES.
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
                                <img class=" img-review img-circle"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/040-man-11.svg">
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
                                <img class=" img-review img-circle"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/001-man.svg">
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
                                <img src="{{asset('img/images/google-rating-shipping-service-bengaluru.png')}}"
                                     alt="google rating cheap international shipping from india">
                            </a>
                        </div>
                    </a>
                    <div class="row-between-reviews" id="hrline1"></div>
                    <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank">
                        <div class="row">
                            <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank">
                                <img class="img-facebook-logo"
                                     src="{{asset('img/images/facebook-reviews-shipping-service.png')}}"
                                     alt="facebook goshoppre reviews international parcel delivery">
                                <p class="p-facebook-review">Reviews</p>
                            </a>
                        </div>
                        <div class="row">
                            <img class="img-facebook-r"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/images/facebook-rating-shipping-service.png"
                                 alt="facebook goshoppre rating international parcel delivery from india">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #FFFBBE;">
        <div class="container-fluid" style="padding-left: 12%;padding-right: 18%;">
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                <p class="header1 p-color-black p-h-margin-customer"><font color="red">E</font>arn with us</p>
                <br>
                <h4>Get an instant reward of 7 dollars in your ShoppRe Wallet just by referring the referral code to a
                    friend.</h4>
                <h4>Referral gets 7 dollars credited to their ShoppRe Wallet post the shipment done by the Referee.</h4>
                <br>
                <a href="https://ship.shoppre.com/refer-and-earn-with-us/" target="_blank" class="btn-s-r btn-b-r btn ">Join Our Referral Network</a>
                <br>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <img class="offer-img-d" src="{{asset('img/images/earn-with-us.png')}}"
                     alt="earn with us" style="width: 450px;">
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid fuid-padding pad-t`-40"><br><br>
            <div class="col-md-2 col-xs-12 pad-l-d">
                <center>
                    <h1 class="f-s-26 f-c-d-greay f-w-9 txt-a-l">ShoppRe <br>
                        <span class="f-s-45 f-w-8 f-c-green "> Live</span></h1>
                    <h4 class="f-s-18 f-c-l-gray txt-a-l">Recent Parcel <br>Delivery Update</h4>
                </center>
            </div>
            <div class="col-md-10 col-xs-12 pad-b-30">
                <div class="slider" id="shippingCard">
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://ship.shoppre.com/online-shop-india/buy-nike-zoom-structure-21-grey-running-shoes-snapdeal-india-ship-to-siddamulla-pannipitiya-sri-lanka/" title="Click to Know More" target="_blank">
                            <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                                <div class="pad-5 bgr-c-gl">
                                    <div class="h-div"><h4 class="f-s-20 f-c-white">Running Shoes</h4></div>
                                </div>
                                <div class="des-div"><br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Nike ZOOM STRUCTURE 21 Grey Running Shoes from <span class="f-s-16 f-c-red f-w-9">Snapdeal.com</span></p>
                                    <br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Product Cost ₹3348 | Cost of Shipping ₹1916 & Delivered 7 working days. </p>
                                </div>
                                <div>
                                    <h2 class="f-s-16 f-c-d-greay">
                                        <img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">Siddhamulla, Piliyandala, Sri Lanka</span>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://ship.shoppre.com/online-shop-india/buy-meraki-essentials-health-hair-essential-oil-set-online-nykaa-shipping-colorado/" title="Click to Know Highlights" target="_blank">
                            <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                                <div class="pad-5 bgr-c-bl">
                                    <div class="h-div"><h4 class="f-s-20 f-c-white">Beauty & Personal Care</h4></div>
                                </div>
                                <div class="des-div"><br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Meraki Essentials Health Hair Essential Oil Set from <span class="f-s-16 f-c-red f-w-9">Nykaa.com</span> </p>
                                    <br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Buy online at low-prices, & get delivered to you within 3 working days. </p>
                                </div>
                                <div>
                                    <h2 class="f-s-16 f-c-d-greay">
                                        <img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">Littleton, Colorado, United States</span>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://ship.shoppre.com/online-shop-india/buy-jabong-pinwheel-grey-striped-a-line-dress-ship-low-cost-bethesda-maryland-united-states/"
                           title="Know Additional Information" target="_blank">
                            <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                                <div class="pad-5 bgr-c-gr">
                                    <div class="h-div"><h4 class="f-s-20 f-c-white">Women's Clothing</h4></div>
                                </div>
                                <div class="des-div"><br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Pinwheel Grey Striped A-Line Dress from <span class="f-s-16 f-c-red f-w-9">Jabong.com</span></p>
                                    <br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Shipped with other 8 products of Kurtas, total shipping charges of ₹2961/- </p>
                                </div>
                                <div>
                                    <h2 class="f-s-16 f-c-d-greay">
                                        <img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">Bethesda, Maryland, United States</span>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12" style="box-shadow:none !important;">
                        <a href="https://ship.shoppre.com/online-shop-india/buy-online-flipkart-sonilex-sl-bt12-extra-bass-sports-ear-headphones-neckband-design-bluetooth-headset-mic-ship-to-1f-cantonment-rd-singapore-085601/"
                           title="Click for Product Details" target="_blank">
                            <div class="inner" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);padding-bottom: 1px">
                                <div class="pad-5 bgr-c-gl">
                                    <div class="h-div"><h4 class="f-s-20 f-c-white">Headphones</h4></div>
                                </div>
                                <div class="des-div"><br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Sonilex SL-BT12 Extra Bass Sports In ear Headphones from <span class="f-s-16 f-c-red f-w-9">Flipkart.com</span></p>
                                    <br>
                                    <p class="f-s-16 f-c-l-gray f-w-7">Shipped Sonilex Headphones Bluetooth Headset with Mic | ₹967/- </p>
                                </div>
                                <div>
                                    <h2 class="f-s-16 f-c-d-greay">
                                        <img src="{{asset('/img/location.svg')}}" width="20" height="20" alt=""> Destination : <span class="p-color-blue">1F Cantonment Road, Singapore</span>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>

        </div>
        </div>
    </section>
    <section>



    <section style="padding-bottom: 30px">
        <div class="container" style="margin-top: 60px;padding-bottom: 20px;">
            <center>
                <p class="header1 p-color-cement-dark">Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">What Are You Waiting For Re! Just Come Shopp Re!</p>
                <a href="{{route('member.plan')}}" class="btn btn-s-r btn-b-r btn-a-l m-t-20">Sign Up for FREE</a>
            </center>
            <hr>
        </div>
        <div class="container">
            <center>
                <p class="p-payment-method">Payment Methods We Accept</p>
            </center>

        </div>
        <div class="container">
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 no-padding ">
                <img class="img-payment-methods"
                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/credit-debit-card-courier-shipping.svg"
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
            <div class="col-md-3 col-lg-3 slider_four_in_linecol-sm-3 col-xs-6 no-padding">
                <img class="img-payment-methods"
                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/paytm-payment-system-and-digital-wallet.svg"
                     alt="paytm e-commerce digital wallet ">
            </div>
        </div>
    </section>
    <section style="background-color: #f2f6fb;">
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark div-margin">In The News</p>
            </center>
        </div>
        <a href="https://ship.shoppre.com/press-release/" title="Global Press Release" target="_blank">
        <div class="container div-store-padding">
            <center>
                <div class=" col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/india_today_grey.jpg" alt="india todya"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/india_today.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/india_today_grey.jpg')">

                    </center>
                </div>
                <div class="col-xs-3   div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/khaleej_time_grey.jpg" alt="khaleej times"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/khaleej_time.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/khaleej_time_grey.jpg')">

                    </center>
                </div>
                <div class="col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores" src="{{env('AWS_CLOUD_FRONT')}}/img/media/exam_grey.jpg"
                             alt="exame"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/exam.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/exam_grey.jpg')">
                    </center>
                </div>
                <div class=" col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/euro_press_grey.jpg" alt="Europress"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/euro_press.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/euro_press_grey.jpg')">
                    </center>
                </div>
                <div class="  col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores" src="{{env('AWS_CLOUD_FRONT')}}/img/media/yahoo_grey.jpg"
                             alt="yahoo finance"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/yahoo.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/yahoo_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/malayala_grey.jpg" alt="malayala manorama"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/malayala.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/malayala_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-2 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/business_standard_grey.jpg"
                             alt="business standard"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_standard.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_standard_grey.jpg')">
                    </center>
                </div>
                <div class=" col-xs-3 div-stores-img" id="hidestore">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/markets_inside_grey.jpg" alt="markets insider"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/markets_inside.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/markets_inside_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/the_week_grey.jpg" alt="the week magazine"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/the_week.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/the_week_grey.jpg')">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img" id="store-hide">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/media/business_today_grey.jpg"
                             alt="Business Today Magazine"
                             onmouseover="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_today.jpg')"
                             onmouseout="$(this).attr('src','{{env('AWS_CLOUD_FRONT')}}/img/media/business_today_grey.jpg')">
                    </center>
                </div>
            </center>
        </div>
        </a>
        <br>
        <br>
    </section>
    <section class="content-oes">
        <div class="container-fluid c-f-p"><br><br>
            <h1>Shop from India without second thoughts from now on, we ship around the world!</h1>

            <p>Our Shop&Ship enables online shopping from India and shipping to the USA, UK, UAE, Australia etc.-
                (you name it, we ship there) - with a streamlined set of services & an ease that you’ve never known
                before.
                You can <a href="{{route('stores1')}}">shop around on Indian stores</a> as much as you want, we’re here
                to take it from there. </p>

            <h1>Schedule a Pickup from ANYWHERE in India, we’ll come to the door to pick it up!</h1>

            <p>Sending a courier abroad from India is now made extremely easy by ShoppRe Courier.
                We impart personalized attention to each package we handle, and offer country-specific
                discounts; making it the <a href="{{route('ics.index')}}">cheapest international courier service in
                    India!</a></p>

            <h1>Is it possible to shop online from India without any hassles, you ask?</h1>

            <p>Say goodbye to all the international credit/debit card hassles at checkout! A group of experts here at
                ShoppRe is at your beck & call to help you out with the whole shopping process; our <a
                        href="/personal-shopper-india">Personal Shopper</a>
                will do the shopping for you! They‘re quick on their hands & exists to make package
                forwarding from India a no-brainer.</p>

            <h1>Your favourite Indian shopping site doesn’t deliver Internationally?</h1>

            <p>You don’t have to break a sweat anymore! Come to ShoppRe, we’re here with the cheapest courier rates
                that you can possibly find in India, enabling you to go on a shopping spree online and ship
                your packages internationally without burning a hole through your pockets.</p>

            <h1>So, how do we save you up to 80% on shipping costs?</h1>

            <p>While you gather around your wishlists from all <a href="{{route('stores1')}}">your favourite stores
                    here</a>, you can store all your
                purchases in our FREE personal locker that we assign just for you, we consolidate them into one,
                and send your parcel off to you wherever you’re abroad!</p>

            <h1>Want to send greetings & gifts overseas from India?</h1>

            <p>Tired of looking for the cheapest way possible to ship a courier from India to USA, UK & such?<br>
                Look no more! You’re right where you need to be. Learn more about the never-before-like
                <a href="{{route('pricing')}}">shipping charges from India</a>, that we offer! </p>


        </div>
        <br>
    </section>
    <section class="div-b-l-w">
        <div class="container-fluid c-f-p seo-hyperlinks"><br>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <ul class="nav-ul">
                    <ul class="nav-ul">
                        <li class="li"><a itemprop="url" class=""
                                          href="/priyamani-ad-launch-parcel-forwarding-service-from-india">Online
                                Shoping in India</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="/personal-shopper-online-shopping-from-india-shipping">Personal Shopper
                                Services</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="/online-shopping-and-international-shipping-sit-back-relax-shop-from-india">Shop
                                India & Ship Worldwide</a></li>
                        <li class="li"><a itemprop="url" class="" href="/schedule-pickup">Schedule Pickup anywhere in
                                India</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="/2018-annual-awards-international-shipping-shopping">2018 Shipping
                                Awards</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="/dropshipping-from-india-and-worldwide-delivery">Dropshipping
                                Service</a></li>
                        <li class="li"><a itemprop="url" class="" href="/indian-virtual-address">Virtual & Mail
                                Forwarding Address</a></li>
                        <li class="li"><a itemprop="url" class="" href="/package-consolidation-international-shipping">Consolidation
                                & Repackaging</a></li>
                    </ul>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class=""
                                      href="/international-courier-charges-india-to-canada-per-kg">Courier from India to
                            Canada</a></li>
                    <li class="li"><a itemprop="url" class=""
                                      href="/international-courier-charges-india-to-germany-per-kg"> Courier from India
                            to Germany</a></li>
                    <li class="li"><a itemprop="url" class=""
                                      href="/international-courier-charges-india-to-singapore-per-kg">Courier from India
                            to Singapore</a></li>
                    <li class="li"><a itemprop="url" class=""
                                      href="/international-courier-charges-india-to-australia-per-kg">Courier from India
                            to Australia</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Uzbekistan">Courier Services
                            to Uzbekistan</a></li>
                    <li class="li"><a itemprop="url" class="" href="/courier-charges-from-pune-to-california">Courier
                            Services to California</a></li>
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-usa-per-kg">Courier
                            Hyderabad to Texas</a></li>
                    <li class="li"><a itemprop="url" class="" href="/courier-charges-from-ahmedabad-to-dubai">Courier
                            from Ahmedabad to Dubai</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Denmark">Shipping from India
                            to Denmark</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Uganda">Shipping from India
                            to Uganda</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Finland">Shipping from India
                            to Finland</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Lithuania">Shipping from
                            India to Lithuania</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Morocco">Shipping from India
                            to Morocco</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-united-states">Shipping
                            United States from India</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Fiji">Shipping Fiji South
                            Pacific from India</a></li>
                    <li class="li"><a itemprop="url" class="" href="/shipping-from-india-to-Bangladesh">Shipping
                            Bangladesh from India</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="" href="/shop-from-india-ship-worldwide"> Shop in India,
                            Ship Worldwide</a></li>
                    <li class="li"><a itemprop="url" class="" href="/myntra-online-shopping-shipping-from-india">Myntra
                            Shopping from USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/">Amazon.in
                            Shopping from USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="/limeroad-shopping-international-shipping">Limeroad
                            Shopping from USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="/flipkart-shopping-with-shoppre-from-india">Flipkart
                            Shopping from USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="/etsy-international-shipping-from-india">Etsy
                            Shopping from USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="/ajio-online-shopping-international-shipping">AJIO
                            Shopping from USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="/jaypore-international-shipping-from-india">Jaypore
                            Shopping from USA</a></li>
                </ul>
            </div>
        </div>
        <br>

    </section>
    <section class="div-b-l-w">
        <div class="container-fluid c-f-p">
            <center><br>
                <h1 class="f-s-26 f-c-d-greay f-w-8"><span class="f-c-red">S</span>ign Up & Start Shipping from <br>India
                    to Worldwide</h1>
                <br>
                <a href="{{route('customer.register')}}" target="_blank" class="btn-s-r btn-b-r btn ">Sign up for
                    Free</a>
                <br><br><br>
            </center>
        </div>

    </section>
    {{--<section>--}}
    {{--<div class="container div-got-top">--}}
    {{--<a href="#" style="float: right">--}}
    {{--<img class="img-goto-top" id="back-to-top" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/gototop.svg"--}}
    {{--alt="gototop shipping">--}}
    {{--</a>--}}
    {{--</div>--}}

    {{--</section>--}}
@endsection

@section('js_script')

    <script type='text/javascript'>
        var pubID = '54240CL48886';

        (function(d, t) {
            var s = document.createElement('script');s.type = 'text/javascript';
            s.async = true;s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv1.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>

    <script>
        $(document).ready(function () {
            let html = '';
            let shipmentItem = '';
            let price = '';
            let color = ['bgr-c-gr', 'bgr-c-bl', 'bgr-c-gl'];
            let i = 0;
            let itmes = 0;
            let imgUrl = 'https://cdn.shoppre.com/shoppre/';

            // jQuery.ajax({
            //     url: 'https://parcel.shoppre.com/api/www/shipments',
            //     type: "GET",
            //     async: false,
            //     success: function (res) {
            //         res.shipment.forEach(x => {
            //
            //             // console.log(x.Packages[0].Store.name);<img class="img-circle"  src='+"https://cdn.shoppre.com/shoppre/-"+item.object +'>
            //             // shipmentItem='';
            //             if (i === 3) i = 0;
            //             itmes = 0;
            //             shipmentItem = '';
            //             price = '';
            //             x.Packages.forEach(p => {
            //                 p.PackageItems.forEach(item => {
            //                     if (itmes < 1) {
            //                         shipmentItem = '';
            //
            //                         shipmentItem += item.name + ',';
            //                         price += item.price_amount;
            //                         imgUrl = +item.object;
            //                         html += '<div class="col-md-3 col-xs-12">' +
            //                             '<div class="row pad-5 ' + color[i] + ' ">' +
            //                             '<div class="h-div"><h4 class="f-s-20 f-c-white"> ' + item.name + '</h4></div>' +
            //                             // '<center> ' +
            //                             // '<div class="pad-t-5"><div class="circle-image "><img class="img-circle"></div></div>' +
            //                             // '</center>' +
            //                             '</div>';
            //                         // console.log(item.name);
            //                         //console.log(item.price_amount);
            //                         //console.log(item.object);
            //                     }
            //                     itmes += 1;
            //                 });
            //             });
            //             html += ' <div class="des-div"><br>' +
            //                 '<p class="f-s-16 f-c-l-gray f-w-7">' + shipmentItem + ' From ' + x.Packages[0].Store.name + ' India to ' + x.Country.name + ' through DHL service provider ' + '</p>' +
            //                 '</div>' +
            //                 '<div>' +
            //                 '<h2 class="f-s-16 f-c-d-greay">' +
            //                 '<img src="/img/svg/ic_weight.svg" alt=""> Weight : <span class="p-color-blue">' + x.weight + ' Kg</span>' +
            //                 '</h2>' +
            //                 '<h2 class="f-s-16 f-c-d-greay">' +
            //                 // '<img src="/img/svg/ic_rupee.svg" alt="">Total Charge:<span class="p-color-blue"> '+ x.value_amount + '</span>' +
            //                 '</h2>' +
            //                 '</div>' +
            //                 '</div>';
            //             i++;
            //         });
            //         html += '<div class="next_button"></div>\n' +
            //             '<div class="prev_button"></div>';
            //         $('#shippingCard').html(html);
            //     }
            // })
        });
        $(document).ready(function () {

            if ($(window).width() <= 600) {
                $('.slider_four_in_line').EasySlides({
                    'autoplay': true,
                    'show': 1
                });
            }
            else if ($(window).width() <= 1400) {
                $('.slider_four_in_line').EasySlides({
                    'autoplay': true,
                    'show': 6
                });
            } else {
                $('.slider_four_in_line').EasySlides({
                    'autoplay': true,
                    'show': 10
                });
            }

        });


    </script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        });
        $(document).ready(function () {
            var id = '#dialog';
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            $('#mask').css({'width': maskWidth, 'height': maskHeight});
            $('#mask').fadeIn(500);
            $('#mask').fadeTo("slow", 0.9);
            var winH = $(window).height();
            var winW = $(window).width();
            $(id).css('top', winH / 2 - $(id).height() / 2);
            $(id).css('left', winW / 2 - $(id).width() / 2);
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
    {{--<script>--}}
    {{--$.getJSON("https://jsonip.com?callback=?", function(data) {--}}
    {{--$.getJSON("https://ipapi.co/"+data.ip+"/json/", function(res){--}}

    {{--var countryName = res.country_name;--}}
    {{--var country = res.country;--}}
    {{--var destination = '';--}}
    {{--var destination_country = 'United Arab Emirates';--}}
    {{--var d_country = 'AE';--}}

    {{--if (country =='IN') {--}}
    {{--country= d_country ;--}}
    {{--}--}}
    {{--if (countryName != 'India') {--}}
    {{--var destination = 'to ' + countryName;--}}
    {{--destination_country = countryName;--}}
    {{--}--}}
    {{--var weight = 0.5;--}}
    {{--var unit = 'kg';--}}
    {{--var type = 'nondoc';--}}
    {{--var box_scale = '';--}}
    {{--var length = '';--}}
    {{--var width = '';--}}
    {{--var height = '';--}}
    {{--var queryParams = 'all=true&country=' + country + '&type=' + type + '&weight=' + weight;--}}
    {{--queryParams += '&length=' + length + '&width=' + width + '&height=' + height;--}}
    {{--queryParams += '&scale=' + '' + '&unit=' + unit;--}}
    {{--jQuery.ajax({--}}
    {{--url: 'https://ship-api.shoppre.com/api/pricing?' + queryParams,--}}
    {{--type: 'get',--}}
    {{--success: function (res) {--}}

    {{--if (res.error == "1") {--}}
    {{--} else {--}}
    {{--var final_price = "";--}}
    {{--$('#prices').text(res.prices[0].customerRate);--}}
    {{--$("#country").text(destination);--}}
    {{--}--}}
    {{--}--}}
    {{--});--}}
    {{--});--}}
    {{--// alert("Your IP address is :- " + data.ip);--}}
    {{--});--}}
    {{--</script>--}}

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            hiddenInput: "full_number",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/js/utils.js",
        });
    </script>
@endsection


