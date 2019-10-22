@extends('layout')

@section('title', 'Shop & Ship | Online Shopping International Shipping from India')
@section('description', 'ShoppRe Online Shopping International Shipping from India allows you to shop any Indian Stores & delivery package to your doorstep. Save 80% in shipping costs.')
@section('keywords', 'shop and ship, personal shopper, free international shipping, package consolidation, ship from india to usa, shop from india to uae')


@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/shop-from-india-ship-worldwide" />

    <meta property="og:title" content="Shop from India and Ship Worldwide with ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/shop-from-india-ship-worldwide"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/priyamani-shoppre-online-shopping-in-india.jpg')}}"/>
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="ShoppRe online shopping and parcel forwarding from India" />
    <meta property="og:description" content="ShoppRe an online shopping site in India and international shipping service that allows you to shop from India, and delivery to your doorstep with 20-day Free storage and consolidation services."/>
    <meta property="og:site_name" content="ShoppRe: Online Shopping Site in India"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="Shop from India and Ship Worldwide with ShoppRe.com" />
    <meta name="twitter:description" content="ShoppRe an online shopping site in India and international shipping service that allows you to shop from India, and delivery to your doorstep with 20-day Free storage and consolidation services." />
    <meta name="twitter:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/priyamani-shoppre-online-shopping-in-india.jpg')}}" />
    <meta name="twitter:image:alt" content="ShoppRe online shopping and parcel forwarding from India"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "Shop Indian Stores and Ship Internationally",
    "description": "Online Shopping in India and International Shipping from India",
    "image": {
    "@type": "ImageObject",
    "url": "https://www.shoppre.com/img/logo.png",
    "width": "878",
    "height": "264"
    },
    "url": "https://www.shoppre.com/shop-from-india-ship-worldwide",
    "mainEntityOfPage": "https://www.shoppre.com/shop-from-india-ship-worldwide",
    "inLanguage": "en_IN",
    "headline": "Shop from any Indian stores and Ship Worldwide through ShoppRe",
    "keywords": "online shopping in India, parcel forwarding from india, shopping from Indian stores, best package forwarding company",
    "copyrightYear": "2019",
    "author": {
    "@type": "Organization",
    "name": "ShoppRe",
    "url": "https://www.shoppre.com",
    "sameAs": ["https://twitter.com/Go_Shoppre",
    "https://www.facebook.com/goshoppre",
    "https://www.linkedin.com/company/shoppre.com",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.instagram.com/shoppre_official",
    "https://www.shoppre.com/shop-ship",
    "https://www.shoppre.com/personal-shopper-shopping-concierge-from-india",
    "https://www.shoppre.com/indian-online-stores",
    "https://www.pinterest.com/shoppre"],
    "image": {
    "@type": "ImageObject",
    "url": "https://www.shoppre.com/img/logo.png",
    "height": "264",
    "width": "878"
    },
    "telephone": "+91 80409 44077",
    "address": {
    "@type": "PostalAddress",
    "streetAddress": "#181, Room No:2, 1st Floor, 2nd Cross Rd,1st Block Koramangala",
    "addressLocality": "Bengaluru",
    "addressRegion": "Karnataka",
    "postalCode": "560034",
    "addressCountry": "IN"
    },
    "location": {
    "@type": "Place",
    "name": "Shop from ANY Indian Store, Ship Worldwide - ShoppRe.com",
    "hasMap": "https://g.page/OnlineShoppingIndia",
    "telephone": "+918277919191",
    "geo": {
    "@type": "GeoCoordinates",
    "latitude": "12.9258297",
    "longitude": "77.6355631"
    }
    }
    }
    }
    </script>

    <style>
        .box-ifs p{font-weight:900}.no-margin{margin:0}#image1{margin-top:-94px}#image1 img{margin-left:60px}#image1 h3{margin-top:60px}#how-it-works div{margin:77px 0 13px 0}#text1{padding:0;display:none}#step-register{text-align:center;font-weight:900}#step2{margin-left:70px}#image2{display:none;margin-top:-94px}#image2 h3{margin-top:60px}#image2 img{margin-top:16px;margin-left:40px}#image3{display:none;margin-top:-94px}#image3 img{margin-top:30px;margin-left:45px}#image3 h3{margin-top:60px}#mobile-image2{width:80%;display:none}#mobile-image3{width:80%;display:none}.step-font-weight{font-weight:900;line-height:1}.p-shoper-section{padding-top:100px}.register-free{border-radius:12px;background-color:#e85151;transition:.6s;padding:10px 50px 10px;color:#fff}.register-free:hover{background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6);color:#fff}.register-free:focus{background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6);color:#fff}.div-play-btn{padding-top:20px}.div-play-btn img{width:40px;margin-top:-10px}.div-play-btn a span{margin-top:5px}.ifs-bg-img{background-image:url(../../img/images/international-courier-from-india.png);height:470px;width:100%;background-position:inherit;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:60px;padding-bottom:4%}@media only screen and (max-width:600px){.register-free{padding:10px 9px 10px}.div-play-btn{padding-top:10px}.offer-img-d{display:none}}
    </style>
@endsection

@section('content')
    <section class="header ifs-bg-img">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <center>
                    <p class="header-ifs-p">
                        <a class="bla-1" href="https://www.youtube.com/watch?v=eFop4beZmOk">
                            <img class="btn-vid-img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/btn.svg">
                        </a>

                    </p>
                    <h1 class="header1 p-color-white">Shop Indian Stores <span> & Ship Worldwide</span></h1>
                    <p class="header2 p-color-white header-ifs-p1">Ship your purchases to us; we'll store, consolidate,
                        <br> repackage & ship them to WHEREVER you are! </p>
                    <a href="/customer/register" class="btn btn-s-b btn-b-g" target="_blank">Sign Up & Receive FREE Virtual Address</a>
                </center>
            </div>
        </div>
    </section>

    <section>
        <div>
            <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                <a href="/amazon-online-shopping" title="Amazon" target="_blank">1. Amazon.in 👉Great Indian Festival</a> |
                <a href="/flipkart-online-shopping" title="flipkart" target="_blank">2. Flipkart.com 👉Big Diwali Sale </a> |
                <a href="/myntra-online-shopping" title="myntra" target="_blank">3. Myntra.com 👉The Celebration Is On</a> |
                <a href="/ajio-online-shopping" title="ajio" target="_blank">4. AJIO.com 👉Sparking Sale</a>
            </marquee>
        </div>
        <div class="container" id="how-it-works">
            <div>
                <center>
                    <h2 class="header1 p-color-cement-dark">How it Works?</h2>
                    <h2 class="header2 p-color-cement-dark font-weight-900">Online Shopping International Shipping from India</h2>
                    <p class="header4 p-color-cement">We receive your orders at our facility; store it in a FREE, safe
                        locker;
                        <br>
                        <a href="https://www.shoppre.com/consolidation-service"> consolidate</a>, repackage & send them
                        off as one to your destination.<br>
                </center>
            </div>
        </div>

        <div class="container" id="div-container">
            <div class="col-md-4 col-lg-4  div-step1">
                <div class="box-ifs" id="step1">
                    <center>
                        <span class="header1 p-color-cement step-font-weight" id="number1">1</span>
                        <p class="header7 p-color-cement step-font-weight" >STEP </p>
                    </center>
                </div>
                <div class="" id="image1">
                    <center>
                        <h3 class=" p-color-cement-dark header4 step-font-weight" >Get
                            a Free Virtual
                            Address</h3>
                    </center>
                    <img class="img-responsive img-ifs-v_addres "
                         src="{{env('AWS_CLOUD_FRONT')}}/img/images/virtual-address-india.jpg" alt="get a free virtual address">
                </div>
                <div class="" id="text1">
                    <h3 class="header4 p-color-cement-dark p-ifs-margin-h"
                        id="step-register">Sign Up</h3>
                    <p class="header6 p-color-cement p-ifs-margin-d"
                       id="step-register">
                        Register with us and get a FREE virtual address with 20-day FREE storage facility.
                    </p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4  div-step2">
                <div class="box-ifs" id="step2">
                    <center>
                        <span class="header1 p-color-cement step-font-weight" id="number2">2</span>
                        <p class="header7 p-color-cement step-font-weight" >STEP </p>
                    </center>
                </div>

                <div class="" id="image2">
                    <center>
                        <h3 class=" p-color-cement-dark header4 step-font-weight" >
                            Shop
                        </h3>
                    </center>
                    <img class="img-responsive img-ifs-v_addres "
                         src="{{env('AWS_CLOUD_FRONT')}}/img/images/indian-online-shoppping-store.jpg"
                         alt="purchase from indian online stores">

                </div>

                <div class="" id="text2">
                    <h3 class="header4 p-color-cement-dark p-ifs-margin-h"
                        id="step-register">Purchase</h3>
                    <p class="header6 p-color-cement p-ifs-margin-d"
                       id="step-register">
                        Purchase any product from your favourite indian store and use your
                        locker virtual address for item delivery.
                    </p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4  div-step3">
                <div class="box-ifs" id="step3">
                    <center>
                        <span class="header1 p-color-cement step-font-weight" id="number3">3</span>
                        <p class="header7 p-color-cement step-font-weight">STEP </p>
                    </center>
                </div>

                <div class="" id="image3">
                    <center>
                        <h3 class="header4 p-color-cement-dark step-font-weight">
                            Get It Delivered! </h3>
                    </center>
                    <img class="img-responsive img-ifs-v_addres "
                         src="{{env('AWS_CLOUD_FRONT')}}/img/images/receive-your-package.jpg" alt="receive your package from india">

                </div>

                <div class="" id="text3">
                    <h3 class="header4 p-color-cement-dark p-ifs-margin-h"
                        id="step-register">Receive</h3>
                    <p class="header6 p-color-cement p-ifs-margin-d"
                       id="step-register">
                        We will ship your product to your abroad address with upto 80% less delivery
                        cost. Enjoy!
                    </p>
                </div>
            </div>
        </div>


        {{--mobile view--}}

        <div class="container mobile-view" id="mobile-view">
            <div class="col-sm-4 col-xs-4">
                <center>
                    <div class="box-ifs" style="border-color: red !important;" id="mobile-step1">
                        <center>
                            <p class="header4 p-color-cement"><span class="p-color-red" id="m-number1">1</span> <br>
                                STEP </p>
                        </center>
                    </div>
                </center>
            </div>
            <div class="col-sm-4 col-xs-4">
                <center>
                    <div class="box-ifs" id="mobile-step2">
                        <center>
                            <p class="header4 p-color-cement"><span id="m-number2">2</span> <br> STEP </p>
                        </center>
                    </div>
                </center>
            </div>
            <div class="col-sm-4 col-xs-4">
                <center>
                    <div class="box-ifs" id="mobile-step3">
                        <center>
                            <p class="header4 p-color-cement"><span id="m-number3">3</span><br> STEP </p>
                        </center>
                    </div>
                </center>
            </div>
            <div class="col-xs-12 col-sm-12 mobile-images">
                <center>
                    <img class="img-responsive " id="mobile-image1" src="{{env('AWS_CLOUD_FRONT')}}/img/images/M-virtual-address-india.jpg"
                         alt="get a free virtual address">
                    <img class="img-responsive " id="mobile-image2"
                         src="{{env('AWS_CLOUD_FRONT')}}/img/images/M-indian-online-shoppping-store.jpg"
                         alt="purchase from indian online stores">
                    <img class="img-responsive " id="mobile-image3"
                         src="{{env('AWS_CLOUD_FRONT')}}/img/images/M-receive-your-package.jpg" alt="receive your package from india">
                </center>
            </div>
        </div>


        {{--mobile view--}}
        <br>
        <div class="container">
            <center>
                <a href="/customer/register">
                    <div class="btn header6 btn-get-assisted p-color-white no-margin" style="background-color: #4285f4!important">
                        <center>
                            Get a Free Virtual Address
                        </center>
                    </div>
                </a>
            </center>
        </div>
    </section>
    <br>
    <br>
{{--    <section style="background-color: #fafafb;" id="personal-shopper">--}}
{{--        <div class="container section-3">--}}
{{--            <center>--}}
{{--                <h1 class="header1 p-color-cement-dark">Personal Shopper</h1>--}}
{{--                <h3 class="header2 p-color-cement">Payment hassles at checkout? No worries! <br>Hire one of our experts--}}
{{--                    to shop for you! </h3>--}}
{{--            </center>--}}
{{--        </div>--}}

{{--        <div class="container">--}}
{{--            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 p-shoper-section">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card ">--}}
{{--                        <img class="img " src="{{env('AWS_CLOUD_FRONT')}}/img/svg/international-credit-card-shopping.svg"--}}
{{--                             alt="international credit card shopping">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card">--}}
{{--                        <h4 class="header6 p-color-cement-dark">Store does't accept your <br> International card/Debit--}}
{{--                            Card?--}}
{{--                        </h4>--}}
{{--                    </div>--}}


{{--                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card ">--}}
{{--                        <img class="img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indian-phone-number.svg" alt="indian number">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card">--}}
{{--                        <h4 class="header6 p-color-cement-dark">Don't have an Indian phone number--}}
{{--                            to <br> verify your order?--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card ">--}}
{{--                        <img class="img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indian-address-shopping.svg"--}}
{{--                             alt="indian address for shopping">--}}

{{--                    </div>--}}
{{--                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card">--}}
{{--                        <h4 class="header6 p-color-cement-dark">Don't have an Indian address?--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 img-ifs-card div-play-btn" >--}}
{{--                        <p>--}}
{{--                            <a class="bla-1" href="https://www.youtube.com/watch?v=eFop4beZmOk">--}}
{{--                                <img class="" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/btn.svg" style="">--}}
{{--                            </a>--}}
{{--                            <a class="bla-1" href="https://www.youtube.com/watch?v=eFop4beZmOk">--}}
{{--                                <span class="p-color-cement-dark header6"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watch Video</span>--}}
{{--                            </a>--}}

{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-xs-12" id="img-shopping-mobile">--}}
{{--                        <img class="img-responsive " src="{{env('AWS_CLOUD_FRONT')}}/img/images/image06_v2.png">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <center>--}}
{{--                        <a href="https://www.shoppre.com/personal-shopper">--}}
{{--                            <div class="btn header6 btn-get-assisted p-color-white">--}}
{{--                                Buy For Me--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </center>--}}

{{--                </div>--}}


{{--            </div>--}}
{{--            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 " id="img-shopping">--}}
{{--                <img class=" img-priyamani-shopping" src="{{env('AWS_CLOUD_FRONT')}}/img/images/personal-shopper-service.png"--}}
{{--                     alt="personal shopper service in india">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <section style="background-color: #fafafb; ">
        <div class="container">
            <div class="col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
                <center>
                    <h1 class="header1 p-color-cement-dark">What Do We Offer That Make Us Special?</h1>
                    <h2 class="header2 p-color-cement"> From 20-day FREE storage to consolidation services; we come with
                        tailor-made benefits, all to save you money, time & efforts</h2>
                </center>
            </div>

        </div>

        <div class="container benefits" id="ifs-benefits-desktop">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ifs-tab-container">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ifs-tab-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <div class="div-radio-btn" id="div-radio-btn1">
                                <label class="radio-ifs header5">
                                    <input type="radio" checked="checked" name="is_company">
                                    <span class="checkround"></span>
                                </label>
                            </div>
                            <h5 class="header5 li-header ">Personal Shopper</h5>
                        </a>
                        <a href="#" class="list-group-item ">
                            <div class="div-radio-btn" id="div-radio-btn2">
                                <label class="radio-ifs header5">
                                    <input type="radio" name="is_company">
                                    <span class="checkround"></span>
                                </label>
                            </div>
                            <h5 class="header5 li-header">20-Day Free Storage</h5>
                        </a>
                        <a href="#" class="list-group-item ">
                            <div class="div-radio-btn" id="div-radio-btn3">
                                <label class="radio-ifs header5">
                                    <input type="radio" name="is_company">
                                    <span class="checkround"></span>
                                </label>
                            </div>
                            <h5 class="header5 li-header">Consolidation</h5>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="div-radio-btn" id="div-radio-btn3">
                                <label class="radio-ifs header5">
                                    <input type="radio" name="is_company">
                                    <span class="checkround"></span>
                                </label>
                            </div>
                            <h5 class="header5 li-header">Repackaging</h5>
                        </a>
                        <a href="#" class="list-group-item ">
                            <div class="div-radio-btn" id="div-radio-btn5">
                                <label class="radio-ifs header5">
                                    <input type="radio" name="is_company">
                                    <span class="checkround"></span>
                                </label>
                            </div>
                            <h5 class="header5 li-header">Affordable Rates</h5>
                        </a>
                        <a href="#" class="list-group-item ">
                            <div class="div-radio-btn" id="div-radio-btn6">
                                <label class="radio-ifs header5">
                                    <input type="radio" name="is_company">
                                    <span class="checkround"></span>
                                </label>
                            </div>
                            <h5 class="header5 li-header">24/7 Customer Support</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ifs-tab">
                    <div class="ifs-tab-content active">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12" style="margin-bottom: 70px;">
                            <center>
                                <h4 class="header4 p-color-cement-dark ifs-font-weight"> An expert
                                    will be assigned to purchase for you</h4>
                            </center>
                        </div>


                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                            <center>
                                <img class="img-responsive ifs-image1"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/personal-shopping-india.svg"
                                     alt="personal shopper in india">
                            </center>

                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6  col-xs-6  ">
                            <h4 class="header4 p-color-cement-dark ifs-font-weight ifs-font-weight1">who will;</h4>
                            <ul id="ifs-li">
                                <li>
                                    <p class="header7 p-color-cement ifs-p-1">
                                        Order for you
                                    </p>
                                </li>
                                <li>
                                    <p class="header7 p-color-cement ifs-p-1">
                                        Pay for you
                                    </p>
                                </li>
                                <li>
                                    <p class="header7 p-color-cement ifs-p-1">
                                        Recieve your Order
                                    </p>
                                </li>
                                <li>
                                    <p class="header7 p-color-cement ifs-p-1">
                                        Consolidate & Repackage them
                                    </p>
                                </li>
                                <li>
                                    <p class="header7 p-color-cement ifs-p-1">
                                        Dispatch as one to the destination
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ifs-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <center>
                                <h3 class="header4 p-color-cement-dark ifs-font-weight">20-Day Free Storage
                                    Facility</h3>
                            </center>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-8 col-xs-8">
                            <center>
                                <img class="img-responsive ifs-image2 "
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/20-days-free-storage-shipping.svg"
                                     alt="20 days free storage shopping">
                            </center>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4">
                            <p class="header7 p-color-cement" style="text-align: left;margin-top:50%; ">
                                Shop as much you want for 20 days; we'll store them all in your locker for FREE!
                            </p>
                        </div>
                    </div>

                    <div class="ifs-tab-content">
                        <div class="col-md-6 col-lg-6 col-sm-5 col-xs-5">
                            <center>
                                <h4 class="header4 p-color-cement-dark ifs-font-weight">Individual Shipments</h4>
                                <img class="img-responsive ifs-img3"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/before-consolidation.svg"
                                     alt="consolidation shipping services">
                            </center>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2" style="margin-top: 20%">
                            <p class="header8 p-ifs-img">Save upto <br>
                                <span class="header1 p-ifs-img-percent">80%</span>
                            </p>
                            <p class="header8 p-color-cement">
                                on International <br> Shipping
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-5 col-xs-5">
                            <center>
                                <h4 class="header4 p-color-cement-dark ifs-font-weight"> Consolidated Shipment</h4>
                                <img class="img-responsive ifs-img3"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/after-consolidation.svg"
                                     alt="consolidation shipping india">
                            </center>
                        </div>
                    </div>


                    <div class="ifs-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 29px;">
                            <center>
                                <h3 class="header4 p-color-cement-dark ifs-font-weight">Repackaging</h3>
                            </center>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                            <img class="img-responsive" id="Re-packaging"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/svg/repacking-shipping.svg"
                                 alt="shopping with shoppre repacking service">
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <p class="header7 p-color-cement p-ifs-img4">
                                Package from a store was shipped to ShoppRe warehouse in a box with 25x11x11 inch
                                dimension, representing
                                a volumetric weight of 10kg.
                                <br>
                                <br>
                                After repackaging, the dimensions were reduced to ((21x10x10 inches),
                                representing a volumetric weight of 7kg.
                                <br>
                                <br>
                                <span style="color: #507dbc;">Saving the customer the shipping cost of 3 kg. of volumetric weight!</span>
                            </p>
                        </div>
                    </div>
                    <div class="ifs-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
                            <center>
                                <h3 class="header4 p-color-cement-dark ifs-font-weight">Affordable Rates</h3>
                            </center>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                            <img class="img-responsive ifs-img5"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/svg/affordable-shipping-rates.svg"
                                 alt="affordable international shipping rates">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <p class="header7 p-color-cement p-ifs-img5">
                                Did you know that the first 0.5 KG costs the most to ship? <br><br>
                                With our 20-day FREE storage and consolidation services,
                                you can shop around all you want and ship it to your ShoppRe address.
                                We'll consolidate all of them and repackage them into one,
                                saving you up to 80% in shipping costs!
                            </p>
                        </div>
                    </div>
                    <div class="ifs-tab-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                            <center>
                                <h3 class="header4 p-color-cement-dark ifs-font-weight"
                                >24/7 Customer Support</h3>
                            </center>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <center>
                                <img class="img-responsive ifs-img-6"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/customer-support-shipping.svg"
                                     alt="customer support shoppre">
                            </center>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <p class="header7 p-color-cement p-ifs-img6">
                                Have any queries? Our FAQs don't cover it? But our 24/7 support will! <br> <br>
                                If you need any assistance with making a shipment or sending a courier, our
                                professionals will help you along every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--mobile view--}}
        <div class="container" id="ifs-benefits-mobile">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default ">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Personal Shopper
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            <center>
                                <div class="row">
                                    <h4 class="header6 p-color-cement-dark ifs-font-weight"> An expert
                                        will be assigned to purchase for you</h4>
                                </div>
                                <div class="row">
                                    <img class="img-responsive ifs-image1" style="margin-top: 30px;"
                                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/personal-shopping-india.svg"
                                         alt="personal shopper in india">
                                </div>
                            </center>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 " style="padding-left:10%">
                                    <h4 class="header4 p-color-cement-dark ifs-font-weight">who will;</h4>
                                    <ul>
                                        <li>
                                            <p class="header7 p-color-cement ">
                                                Order for you
                                            </p>
                                        </li>
                                        <li>
                                            <p class="header7 p-color-cement ">
                                                Pay for you
                                            </p>
                                        </li>
                                        <li>
                                            <p class="header7 p-color-cement ">
                                                Recieve your Order
                                            </p>
                                        </li>
                                        <li>
                                            <p class="header7 p-color-cement ">
                                                Consolidate & Repackage them
                                            </p>
                                        </li>
                                        <li>
                                            <p class="header7 p-color-cement ">
                                                Dispatch as one to the destination
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                20-Day Free Storage Facility
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">

                            <div class="row">
                                <center>
                                    <h3 class="header4 p-color-cement-dark ifs-font-weight">20-Day Free Storage
                                        Facility</h3>
                                </center>
                            </div>
                            <div class="row" style="padding-left: 10px; padding-right: 10px;">
                                <center>
                                    <img class="img-responsive ifs-image2 "
                                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/20-days-free-storage-shipping.svg"
                                         alt="20 days free storage shopping">
                                </center>
                            </div>
                            <div class="row">
                                <p class="header7 p-color-cement" style="text-align: center;margin-top:20px ;">
                                    Shop as much you want for 20 days; we'll store them all in your locker for FREE!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Consolidation
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <center>
                                        <h4 class="header6 p-color-cement-dark ifs-font-weight">Individual
                                            Shipments</h4>
                                        <img class="img-responsive ifs-img3"
                                             src="{{env('AWS_CLOUD_FRONT')}}/img/svg/before-consolidation.svg"
                                             alt="consolidation shipping services">
                                    </center>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <center>
                                        <h4 class="header6 p-color-cement-dark ifs-font-weight"> Consolidated
                                            Shipment</h4>
                                        <img class="img-responsive" style="height:180px;margin-top: 50px"
                                             src="{{env('AWS_CLOUD_FRONT')}}/img/svg/after-consolidation.svg"
                                             alt="consolidation shipping india">
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <center>
                                    <p class="header8 p-color-cement ">Save upto <br>
                                        <span class="header1 p-ifs-img-percent ">80%</span>
                                    </p>
                                    <p class="header8 p-color-cement">
                                        on International <br> Shipping
                                    </p>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Repackaging
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <center>
                                    <h3 class="header4 p-color-cement-dark ifs-font-weight">Repackaging</h3>
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <img class="img-responsive "
                                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/repacking-shipping.svg"
                                         alt="shopping with shoppre repacking service">
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <p class="header7 p-color-cement p-ifs-img4"
                                       style="text-align: center !important;margin-top: 20px !important;">
                                        Package from a store was shipped to ShoppRe warehouse in a box 25x11x11 inch
                                        dimension,
                                        representing
                                        a volumetric weight of 10kg.
                                        <br>
                                        <br>
                                        After repackaging, the dimensions were reduced to ((21x10x10 inches),
                                        representing a volumetric weight of 7kg.
                                        <br>
                                        <br>
                                        <span style="color: #507dbc;">Saving the customer the shipping cost of 3 kg. of volumetric weight!</span>
                                    </p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Affordable Rates
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <center>
                                    <h3 class="header4 p-color-cement-dark ifs-font-weight">
                                        Affordable Rates
                                    </h3>
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <img class="img-responsive ifs-img5"
                                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/affordable-shipping-rates.svg"
                                         alt="affordable international shipping rates">
                                </center>
                            </div>
                            <div class="row">
                                <p class="header7 p-color-cement p-ifs-img5"
                                   style="text-align: center !important; margin-top: 20px !important;">
                                    Did you know that the first 0.5 KG costs the most to ship? <br><br>
                                    With our 20-day FREE storage and consolidation services,
                                    you can shop around all you want and ship it to your ShoppRe address.
                                    We'll consolidate all of them and repackage them into one,
                                    saving you up to 80% in shipping costs!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                24/7 Customer Support
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <center>
                                    <h3 class="header4 p-color-cement-dark ifs-font-weight">
                                        24/7 Customer Support
                                    </h3>
                                </center>
                            </div>
                            <div class="row">
                                <center>
                                    <img class="img-responsive ifs-img-6" style="margin-top: 10px;"
                                         src="{{env('AWS_CLOUD_FRONT')}}/img/svg/customer-support-shipping.svg"
                                         alt="customer support shoppre">
                                </center>
                            </div>
                            <div class="row">
                                <p class="header7 p-color-cement p-ifs-img6"
                                   style="text-align: center !important;margin-top: 10px !important;">
                                    Have any queries? Our FAQs don't cover it? But our 24/7 support will! <br> <br>
                                    If you need any assistance with making a shipment or sending a courier, our
                                    professionals will help you along every step of the way.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--mobile view--}}
    </section>
    <section style="background-color: #f2f6fb;">
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark div-margin">Your Favorite Online Stores</p>
                <p class="header2 p-color-cement ">Browse through popular online Indian stores, take your pick, shop & get it
                    delivered to your virtual address; we'll ship it to your destination abroad!</p>
            </center>
        </div>
        <div class="container div-store-padding">
            <center>
                <img     width=" 100%" src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/069b1d2d-ebba-47bb-ab43-c76f422fcee3.png" alt="Top Indian online Stores international shipping">
            </center>
        </div>
        <br>
        <div class="container pad-b-30">
            <center>
                <a href="{{route('stores1')}}" class="f-s-18 f-c-d-gray font-weight-900 text-center" style="color: #4285f4" style="margin-top: -26px">List of Top Indian
                    Stores</a>
            </center>
        </div>
    </section>
    <section class="content-oes">
        <div class="container">
            <h3 class="header2 p-color-cement-dark font-weight-900">SHOP & SHIP from India to Worldwide with ShoppRe!</h3>

            <p>E-commerce industry has revolutionized our shopping experience and we extend the same with presenting
                ShoppRe as <a href="{{route('home')}}"> the best package forwarding company</a> for shipping international purchases . Hence ‘Shop and Ship’! </p>

            <h1>What exactly is our package forwarding service?</h1>

            <p>As almost all of the Indian Shopping Sites like Myntra, <a href="{{route('flipkart.landing')}}">Flipkart</a>, Amazon India etc. don’t offer International Shipping;
                online shopping from India becomes the least favorable for someone who resides outside of India.
                So, what we offer to do for them is, receive their packages from Indian online sellers at our warehouse
                in Bangalore, and courier those along to the destination of the customer abroad;
                with a load of accompanying services and benefits!</p>

            <h1>How does package forwarding work in ShoppRe?</h1>

            <p>Package Forwarding - the backbone of our service, Shop & Ship starts from when a customer signs up for a
                ShoppRe <a href="https://www.shoppre.com/indian-virtual-address">Indian virtual shipping address</a>. The customer gets a Personal Locker with 20 days of FREE
                storage period to accumulate their purchases at our warehouse. We, in turn,
                forward their packages to their address abroad. </p>

            <h1>How do we save you 80% in shipping costs?</h1>

            <p>We consolidate the packages in your Locker into one after you make a Ship Request; which,
                saves you from shipping them in individually - making us the cheapest parcel forwarding company in
                the whole country! Our Package Consolidation hence aids in making
                Online Shopping International Shipping from India reasonably at affordable cost.</p>

            <h1>Finding it difficult to shop on stores?</h1>

            <p>From managing Indian credentials for shipping documentations to making payments for you;
                our <a href="/personal-shopper-shopping-concierge-from-india">Personal Shopper service</a> will help you get your favorite Indian goodies home, at all costs.
                Assisted Purchase is a subsidiary tailor-made service that is intended to handle even
                the whole shopping of yours on your behalf. </p>

            <p>While the majority of Indian websites, even the popular ones don’t offer international shipping with
                their online shopping experience; ShoppRe is splitting the difference by offering the best
                <a href="/international-parcel-forwarding-india-online-shopping">international package forwarding services from India</a>. So the curious shoppers from around the world
                can virtually shop around in India relieved - as international shipping
                from India is not a tough task anymore!</p>


            <br>
            <div class="row">
                <h2 class="f-s-22 f-c-d-gray font-weight-900 text-center" style="color: #4285f4">ShoppRe International shopping and shipping made easy</h2>
                <br>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><span><a href="https://www.shoppre.com/en-us">Shop from India to USA</a></span></li>

                            <li><span>Shop from India to UAE</span></li>

                            <li><span>Shop from India to Canada</span></li>

                            <li><span>Shop from India to Australia</span></li>

                            <li><span>Shop from India to Singapore</span></li>

                            <li><span>Shop from India to Germany</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><span>Shop from India to South Africa</span></li>

                            <li><span><a href="https://www.shoppre.com/en-jp">Shop from India to Japan</a></span></li>

                            <li><span>Shop from India to New Zealand</span></li>

                            <li><span>Shop from India to Malaysia</span></li>

                            <li><span>Shop from India to Switzerland</span></li>

                            <li><span>Shop from India to Mauritius</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><span>Shop from India to Qatar</span></li>

                            <li><span>Shop from India to Dubai</span></li>

                            <li><span>Shop from India to Saudi Arabia</span></li>

                            <li><span>Shop from India to Spain</span></li>

                            <li><span>Shop from India to Brazil</span></li>

                            <li><span>Shop from India to Mexico</span></li>
                        </ul>
                    </div>
                </div>

        </div>
        <br>
        <br>
        <div class="container">
            <center>
                <h3 class="header2 p-color-cement-dark font-weight-900">Want more information about each of our services? Download Our brochure for Free! </h3>
                <br>
                <a href="http://bit.ly/shoppre-brochure" target="_blank">
                    <div class="btn header6 btn-get-assisted p-color-white no-margin" style="background-color: #0b8043!important">
                        <center>
                            Download Here
                        </center>
                    </div>
                </a>
            </center>
            <br>
            <br>
        </div>
    </section>


    <section class="chris-benefits">
        <div class="container " >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >List of popular Indian online stores</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel boxed outer border-1px">
                        <ul>
                            <li><span><a href="myntra-online-shopping-shipping-from-india">Myntra Online Fashion Store</a></span></li>
                            <li><span><a href="flipkart-shopping-with-shoppre-from-india">Flipkart.com Online Shop</a></span></li>
                            <li><span><a href="amazon-india-shop-international-shipping">Amazon.in Shopping India</a></span></li>
                            <li><span><a href="jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>
                            <li><span><a href="ajio-online-shopping-international-shipping">AJIO Fashion & Lifestyle Brand</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/suta-online-shopping-india/" target="_blank">Suta Sarees Online Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/firstcry-baby-products-international-shipping/" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/patanjali-ayurved-products-international-delivery/" target="_blank">Patanjali Ayurvedic Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">Snapdeal Online Shopping</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/shop-pepperfry-online-furniture-international-shipping-india/" target="_blank">Pepperfry Furniture Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/ishashoppe-organic-yoga-clothing-india-international-shipping/" target="_blank">IshaShoppe Yoga Clothing</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/nykaa-india-beauty-products-international-shipping/" target="_blank">Nykaa Cosmetics Products</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/biba-india-international-shipping/" target="_blank">Biba Ethnic Wear Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/boodmo-care-spare-parts-international-shipping-from-india/" target="_blank">Boodmo - Spare Parts for CARS</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <div class="text-center">
            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">List of Indian Online Stores</a>
        </div>
        <br/><br/>
        </div>
    </section>
    <br>
    <br>

@endsection

@section('js_script')

    <script>
        $(document).ready(function(){$(".div-step1").hover(function(){$("#image1").show(),$("#text1").hide(),$("#step1").css({"border-color":"red"}),$("#number1").css({color:"red"})},function(){$("#image1").show(),$("#text1").hide(),$("#step1").css({"border-color":"#929ca5"}),$("#number1").css({color:"#929ca5"}),$(".div-step1").css({height:"400px",width:"634px"})}),$(".div-step2").hover(function(){$("#image2").show(),$("#text2").hide(),$("#step2").css({"border-color":"red"}),$("#number2").css({color:"red"}),$(".div-step1").css({height:"400px",width:"228px","background-color":"#fafafb"}),$("#step1").css({"border-color":"#929ca5"}),$("#image1").hide(),$("#text1").show(),$("#step1").css({"margin-left":"70px"}),$("#step3").css({"margin-left":"70px"})},function(){$("#image2").hide(),$("#text2").show(),$("#step2").css({"border-color":"#929ca5"}),$("#number2").css({color:"#929ca5"}),$(".div-step1").css({height:"400px",width:"679px","background-color":"#ffffff"}),$("#step1").css({"border-color":"red"}),$("#image1").show(),$("#text1").hide(),$("#step1").css({"margin-left":"0"}),$("#step3").css({"margin-left":"70px"}),$(".div-step1").css({height:"400px",width:"634px"})}),$(".div-step3").hover(function(){$("#image3").show(),$("#text3").hide(),$("#step3").css({"border-color":"red"}),$("#number3").css({color:"red"}),$(".div-step1").css({height:"400px",width:"228px","background-color":"#fafafb"}),$("#div-container").css({"background-color":"#ffffff"}),$("#step1").css({"border-color":"#929ca5"}),$("#image1").hide(),$("#text1").show(),$("#step1").css({"margin-left":"70px"}),$("#step2").css({"margin-left":"70px"})},function(){$("#image3").hide(),$("#text3").show(),$("#step3").css({"border-color":"#929ca5"}),$("#number3").css({color:"#929ca5"}),$(".div-step1").css({height:"400px",width:"679px","background-color":"#ffffff"}),$("#step1").css({"border-color":"red"}),$("#image1").show(),$("#text1").hide(),$("#step1").css({"margin-left":"0"}),$("#step2").css({"margin-left":"70px"}),$(".div-step1").css({height:"400px",width:"634px"})}),$("#mobile-step1").hover(function(){$("#mobile-image1").show(),$("#mobile-image2").hide(),$("#mobile-image3").hide()},function(){$("#mobile-image1").show(),$("#mobile-image2").hide(),$("#mobile-image3").hide()}),$("#mobile-step2").hover(function(){$("#mobile-image1").hide(),$("#mobile-image2").show(),$("#mobile-image3").hide(),$("#m-number2").css({color:"red"}),$("#m-number3").css({color:"#929ca5"}),$("#m-number1").css({color:"#929ca5"}),$("#mobile-step2").css({"border-color":"red"}),$("#mobile-step1").css({"border-color":"#929ca5"}),$("#mobile-step3").css({"border-color":"#929ca5"})},function(){$("#mobile-image1").show(),$("#mobile-image2").hide(),$("#mobile-image3").hide(),$("#m-number2").css({color:"#929ca5"}),$("#m-number3").css({color:"#929ca5"}),$("#m-number1").css({color:"red"}),$("#mobile-step2").css({"border-color":"#929ca5"}),$("#mobile-step1").css({"border-color":"red"}),$("#mobile-step3").css({"border-color":"#929ca5"})}),$("#mobile-step3").hover(function(){$("#mobile-image1").hide(),$("#mobile-image2").hide(),$("#mobile-image3").show(),$("#m-number2").css({color:"#929ca5"}),$("#m-number3").css({color:"red"}),$("#m-number1").css({color:"#929ca5"}),$("#mobile-step3").css({"border-color":"red"}),$("#mobile-step1").css({"border-color":"#929ca5"}),$("#mobile-step2").css({"border-color":"#929ca5"})},function(){$("#mobile-image1").show(),$("#mobile-image2").hide(),$("#mobile-image3").hide(),$("#m-number2").css({color:"#929ca5"}),$("#m-number3").css({color:"#929ca5"}),$("#m-number1").css({color:"red"}),$("#mobile-step2").css({"border-color":"#929ca5"}),$("#mobile-step1").css({"border-color":"red"}),$("#mobile-step3").css({"border-color":"#929ca5"})}),$("div.ifs-tab-menu>div.list-group>a").hover(function(e){e.preventDefault(),$(this).siblings("a.active").removeClass("active"),$(this).addClass("active");var o=$(this).index();$("div.ifs-tab>div.ifs-tab-content").removeClass("active"),$("div.ifs-tab>div.ifs-tab-content").eq(o).addClass("active")})}),$(".panel-heading").parent(".panel").hover(function(){$(this).children(".collapse").collapse("show")},function(){$(this).children(".collapse").collapse("hide")});
    </script>
@endsection
