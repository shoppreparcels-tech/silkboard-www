@extends('layout')

@section('title', 'ShoppRe Courier: International Courier Services in India | Safe & Secure')
@section('description', 'One-stop destination for all your international courier services. The cheapest way to send packages overseas. Save up to 80% on shipping costs. Try ShoppRe.')
@section('keywords', 'courier service, international package, schedule a pickup, ship internationally, parcel forwarding, ship a product')

@section('css_style')
    <style>
        .div-padding-bottom{background-image:url(../../img/images/international-courier-from-india.png);height:470px;width:100%;background-position:inherit;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:60px;padding-bottom:4%}.div-padding-bottom .btn-a{margin-left:25px;padding:10px;border-radius:30px;background-color:#e85151;color:#fff;font-size:16px}.div-padding-bottom .btn-b{margin-left:25px;padding:10px;border-radius:30px;background-color:#507dbc;color:#fff;font-size:16px}.div-padding-bottom .btn-a:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.seo-sec{background-color:#fafafb}.seo-sec a{text-decoration:underline}.ul-seo{list-style:none}.ul-seo li{font-size:16px;font-weight:600;color:#677582}@media only screen and (max-width:600px){.div-padding-bottom .btn-a{margin-left:0}}@media only screen and (max-width:600px){table th,td h1{font-weight:700;font-size:15px}table th,td span{font-weight:600;font-size:10px}table th,td p{font-weight:600;font-size:10px}}
    </style>

    <link rel="canonical" href="https://www.shopprecouriers.com/international-courier-shipping-services-india" />

    <meta property="og:title" content="ShoppRe™ Express International Courier in India "/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shopprecouriers.com/international-courier-shipping-services-india"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/international-courier-services-india.png')}}"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="ShoppRe Couriers" />
    <meta property="og:description" content="Best Discount On DHL/FedEx/Export - International Courier Services at Lowest Price"/>
    <meta property="og:site_name" content="ShoppRe International Courier Services in India"/>

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Best International Courier Service in India",
        "description": "ShoppRe Couriers is on a steady pace to becoming the best affordable international courier service in india.",
        "image": {
        "@type": "ImageObject",
        "url": "https://www.shopprecouriers.com/img/logo.png",
        "width": "878",
        "height": "264"
        },
        "url": "https://www.shopprecouriers.com/international-courier-shipping-services-india",
        "mainEntityOfPage": "https://www.shopprecouriers.com/international-courier-shipping-services-india",
        "inLanguage": "en_IN",
        "headline": "The cheapest international courier service from India",
        "keywords": "send courier from India, ship to usa, courier charges, global shipping made easy, international shipping, parcel delivery services",
        "copyrightYear": "2019",
        "author": {
    "@type": "Organization",
        "name": "ShoppRe",
        "url": "https://www.shopprecouriers.com",
        "sameAs": ["https://twitter.com/Go_Shoppre",
        "https://www.facebook.com/goshoppre",
        "https://www.linkedin.com/company/shoppre.com",
        "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
        "https://www.instagram.com/shoppre_official",
        "https://www.shopprecouriers.com/send-international-courier-from-india",
        "https://www.shopprecouriers.com/medicine-international-courier-from-india",
        "https://www.shopprecouriers.com/best-affordable-international-courier-services-in-india",
        "https://www.shopprecouriers.com/international-courier-charges-india-to-usa-per-kg"],
        "image": {
    "@type": "ImageObject",
        "url": "https://www.shoppre.com/img/logo.png",
        "height": "264",
        "width": "878"
    },
    "telephone": "+91 80409 44077",
    "address": {
    "@type": "PostalAddress",
        "streetAddress": "#181, Room No:1, 1st Floor, 2nd Cross Rd,1st Block Koramangala",
        "addressLocality": "Bengaluru",
        "addressRegion": "Karnataka",
        "postalCode": "560034",
        "addressCountry": "IN"
        },
    "location": {
        "@type": "Place",
        "name": "Send Courier from India to USA, UAE and Worldwide - ShoppRe.com",
        "hasMap": "https://g.page/InternationalCourier",
        "telephone": "+918277919191"
   				 }
    	 }
   	  }
   }
</script>

@endsection

@section('content')
    <section class="header">
        <div class="container div-padding-bottom">
            <center>
                <p class="header-ifs-p">
                    <a class="bla-1" href="https://www.youtube.com/watch?v=lQi4Io_WH70">
                        <img class="btn-vid-img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/btn.svg">
                    </a>
                </p>
                <h1 class="header1  p-color-white">ShoppRe Courier</h1>
                <p class="header2 p-color-white">One-stop destination for all your courier needs; domestic & international.
                    <br> We ship to 220+ countries around the world! #GlobalShippingMadeEasy</p> <br><br><br>
                <a id="btn-pick-schedule" href="{{route('schedulePickup.Index')}}" class="btn-a" style="    margin-left: -10px;">Schedule Pickup</a>
                <a href="{{route('pricing')}}" class="btn-b">Get An Estimate</a>
                <br>
                <br>
                <span class="f-s-16 f-c-yellow f-w-9">shoppreCouriers.com</span>
            </center>
        </div>
    </section>

    <section class="seo-sec">

        <div class="container">
            <div class="container div-process">
{{--                <div class="container">--}}
{{--                    <div class="col-md-12 col-xs-12 pad-t-20">--}}
{{--                        <center>--}}
{{--                            <div class="col-md-4 col-xs-12 pad-20 ">--}}
{{--                                <a href="/international-courier-charges-india-to-usa-per-kg">Courier Rates from India to USA per kg</a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-xs-12 pad-20">--}}
{{--                                <a href="/international-courier-charges-india-to-uae-per-kg">Courier Charges starts from ₹566 UAE</a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-xs-12  pad-20">--}}
{{--                                <a href="/international-courier-charges-india-to-canada-per-kg">Courier charges from India to Canada</a>--}}
{{--                            </div>--}}
{{--                        </center>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-12 col-xs-12 no-pad">--}}
{{--                        <center>--}}
{{--                            <div class="col-md-4 col-xs-12  pad-20">--}}
{{--                                <a href="/international-courier-charges-india-to-germany-per-kg">Shipping Rates from india to Germany</a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-xs-12  pad-20">--}}
{{--                                <a href="/international-courier-charges-india-to-australia-per-kg">Low Cost Courier Per Kg to Australia</a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-xs-12 pad-20">--}}
{{--                                <a href="/international-courier-charges-india-to-singapore-per-kg">Cheapest rates from India to Singapore</a>--}}
{{--                            </div>--}}
{{--                        </center>--}}
{{--                    </div>--}}
{{--                </div>--}}

            <div class="col-md-12 col-xs-12 no-pad">
                <div class="col-md-12 col-xs-12 no-pad">
                    <center> <h1 class="f-c-d-greay f-s-30 f-w-8">Special International Courier Rates</h1></center>
                    <table class="table table-bordered txt-a-c">
                        <tr>
                            <td class="btn-b-y tbl-br">
                                <h4>Pricing</h4>
                                <p><span>90</span>Kg Above</p>
                                <p>Including GST & Surcharge</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹440</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>Australia</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹450</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>USA</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹450</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>Canada</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹480</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>UK</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="btn-b-y tbl-br">
                                <h4>Pricing</h4>
                                <p><span>25</span>Kg</p>
                                <p>Excluding GST</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹380</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>Australia</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹450</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>USA</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹270</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>UAE</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹340</h1>
                                <p><span>Per</span> 1 Kg</p>
                                <p>UK</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <center style="margin-top: 350px;">
                <h1 class="header1  p-color-cement-dark">How Does ShoppRe Courier Work?</h1>
                <p class="header2 p-color-cement">Schedule a Pickup from ANY part of India; we’ll come to your doorsteps,<br> get your package & ship it off to the destination in 24 hours.</p>
            </center>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box1">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement" style="line-height: 1;"><span
                                    style="font-size: 22px;font-weight: 900;" id="number1">1</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pic_up.svg">
                            <h2 class="header3 p-color-cement-dark" >Schedule a Pickup</h2>
                            <p class="header5 p-color-cement">
                                After getting your FREE estimate, fill in the order form accordingly and submit it to schedule your pickup.
                            </p>
                        </center>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box2">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"  style="line-height: 1;"><span
                                    style="font-size: 22px;font-weight: 900;" id="number2">2</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive  img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shipments.svg">
                            <h2 class="header3 p-color-cement-dark">We’ll Pick It Up</h2>
                            <p class="header5 p-color-cement">
                                Within 48 hours of you making the request, we’ll come to your doorsteps to pickup your package(s).
                            </p>
                        </center>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box3">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement" style="line-height: 1;"><span
                                    style="font-size: 22px;font-weight: 900;" id="number3">3</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/deliver_package.svg">
                            <h2 class="header3 p-color-cement-dark">Dispatch in 24 Hours</h2>
                            <p class="header5 p-color-cement">
                                We’ll complete the documentation & dispatch your package(s) to one of our courier partners as soon as possible.
                            </p>
                        </center>
                    </div>
                </div>
                <center>
                    <a  href="{{route('schedulePickup.Index')}}" class="btn header6 btn-get-assisted" style="background-color: #4285f4" target="_blank">Schedule Pickup</a>
                </center>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 30px;">
            <center>
                <a href="https://www.shopprecouriers.com/first-time-international-courier-offer" target="_blank">
                    <img src="https://www.shopprecouriers.com/img/images/international-courier-offer.png"
                         alt="rakhi-courier-from-india-shoppre" class="img-responsive">
                </a>
            </center>
        </div>
    </section>

    <section class="product-courier ">
        <div class="container no-padding div-ics-border-btm">
            <center>
                <h1 class="header1 p-color-cement-dark" >
                    We ship all over the world - To the USA, UAE, UK, Europe, Australia, New Zealand, Canada, Middle East & 200 other
                    countries.
                </h1>
            </center>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packing.png" alt="" id="packing">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packed.png" alt="" id="packed" style="display: none">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 " style="padding-top: 50px">
                <div class="row no-padding">
                    <center>
                        <h2 class="header2 p-color-cement-dark font-weight-900">What You Can Get Us to Courier?</h2>
                        <p class="header6 p-color-cement">From Kids’ toys to commercial equipment, we are well-prepared to ship anything under the sun,
                            that follow the international & country-specific shipping regulations. These are some of the goods that we frequently ship for our customers </p>
                    </center>
                </div>
                <br>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Medicine</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Documents</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Sports Equipment</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Homemade foods</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Artwork</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Artificial Jewellery</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul style="text-decoration: none; list-style: none">
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Corporate Gifts</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Children's Toys</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Handicraft </li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Mobile/Cell Phones</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Religious Items</li>
                            <li>& Many More Products</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="container div-ics-border-btm ">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">Features</h1>
                    <p class="header2 p-color-cement">Get a FREE estimate for your courier, and schedule a pickup with us. We’ll come to your doorsteps to pick it up within 48 hours, and will dispatch it within the next 24 hours.Our courier partners are known to reach your destination in 3-6 days, wherever in the world it is!’</p>
                </center>
            </div>
            <div class="row text-center">
                <br/>
                <div class="col-sm-3">
                    <div class="panel "><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <h1 class="header5 p-color-cement">Door-to-Door Delivery</h1>
                        <br/>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">Country-specific Discount</h1>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/support24.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24/7 Support</h1>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/ics-time.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24-hour Dispatch</h1>

                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
{{--                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/indian-sellers-shoppre1.png">--}}
                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/back.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="header1 p-color-cement-dark p-seller">Are you an ambitious Seller?
                    Save up more on shipping.</h1> <br>
                <p class="header3 p-color-cement seller-p">
                    <span class="header2"> Start Your 30-Day FREE Trial </span> to see for yourself; how much you can
                    save to help your business!</p>
                <div class="col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform" class="btn btn-request-cal-back">Request Callback</a>
                        {{--<button class="btn btn-request-cal-back">Request Callback</button>--}}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="" class="btn btn-courier-know">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seo-sec">
        <div class="container">
            <center>
                <br>
                <h1 class="f-s-36 f-c-d-gray font-weight-900">ShoppRe Courier - <span class="f-c-blue">Global Shipping Made Easy</span></h1>
            </center>

            <br>
                <br>
                <p class="f-s-16 f-c-gray">ShoppRe Courier is on a steady pace to becoming the best affordable international courier service in india.
                    It does so by offering up the <a href="{{route('pricing')}}">best shipping rates from India</a> an international shipper can hope for. </p>
                <br>
                <p class="f-s-16 f-c-gray">
                    Every nook & cranny around the world is an Indian and we travel, work & socialize with flair. For the global Indian in you;
                    we have a specific set of courier services that you can avail to cater to all kinds of your shipping needs - from trekking equipments to care packages.
                </p><br>
                <p class="f-s-16 f-c-gray">ShoppRe makes the entire process of <a href="{{route('home')}}">international shipping from India</a> unbelievably easy by offering to pick up your couriers
                    from your door; may it be from Bangalore, Mumbai, Pune, Chennai, Delhi or ANYWHERE in India as far as we’re concerned.
                </p><br>
                <p class="f-s-16 f-c-gray">From Christmas gifts to University documents, ShoppRe ships anything off to anywhere on Earth. And, we are, without a doubt the
                    cheapest way to send parcels overseas!</p><br>
                <p class="f-s-16 f-c-gray"></p><br>

            <h4 class="f-s-20 f-c-d-gray font-weight-900">To send a courier abroad, all you have to do is;</h4>
            <ul class="ul-seo">
                <li>1. <a href="{{route('schedulePickup.Index')}}">Schedule a Pickup</a> from ANYWHERE in India; our experts will come to your door to pick it up,</li>
                <li>2. We process it while you pay us the shipping cost.</li>
                <li>3. And, we jump through hoops to dispatch your package off to your destination in just 48 hours,</li>
                <li>4. One of our efficient & appropriate courier partners will get the package to its destination in just 3-6 days, ANYWHERE in the world,</li>
            </ul>

            <p class="f-s-16 f-c-gray">thus making us the most reliable & fastest international courier of all.</p> <br>
            <h2 class="f-s-22 f-c-d-gray font-weight-900">What do we ship?</h2>
            <p class="f-s-16 f-c-gray">Roughly anything that falls under the international export & customs guidelines and policies;
                can be shipped through ShoppRe. The most common items that we dispatched the past year are;</p> <br>
            <ul class="ul-seo">
                <li>Clothing, shoes & accessories</li>
                <li>Documents/letters</li>
                <li>Homemade/processed/branded food items</li>
                <li>Holiday greetings & gifts</li>
            </ul>
            <br>
            <h2 class="f-s-22 f-c-d-gray font-weight-900">What else do we offer?</h2>
            <p class="f-s-16 f-c-gray">Our broad range of services are categorized into 3. Apart from ShoppRe Courier, we also have; </p> <br>
            <ul class="ul-seo">
                <li><span class="f-c-d-gray font-weight-900"> <a href="{{route('ifs.index')}}">Shop & Ship - </a></span> for effortless online shopping with international shipping options. </li>
                <li><span class="f-c-d-gray font-weight-900"><a href="personal-shopper-shopping-concierge-from-india"> Personal Shopper -</a></span> services including doing the shopping for you & forwarding your purchases as a whole.</li>

            </ul>
            <br>
            <p class="f-s-16 f-c-gray">More to the point, International shipping from India - may it be package forwarding or courier - has been made extremely easy by these key set of our services.</p> <br>

            <div itemscope itemtype="https://schema.org/FAQPage">
            <h2 class="f-s-22 f-c-d-gray font-weight-900">We know what you’re thinking….</h2>
            <p class="f-c-d-greay font-weight-900" style="font-style: italic">These are some questions frequently asked by our customers.</p>
            <br>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">Can I send documents to the USA through ShoppRe Courier?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text" class="f-s-16 f-c-gray">Yes you can. We specialize in securely sending <a href="university-offer">university documents overseas</a> now that studying abroad is more of a common option.
                If you have any such document to courier, you can avail our Student Special Offer discount price,
                starting at just Rs.553!
            </p>
            </div>
            </div><br>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">How to send a courier from India to Abu Dhabi?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text" class="f-s-16 f-c-gray">ShoppRe Courier specializes in sending couriers from ANYWHERE in India to all around the world,
                including to Abu Dhabi. You can <a href="/schedule-pickup">Schedule a Pickup</a> on our website & we offer
                door-to-door courier services that spans out in just 3-6 days.</p>
            </div>
            </div><br>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">What do you charge for a courier from India to USA per kg.?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text" class="f-s-16 f-c-gray">Our international courier charges start from just Rs.690/-. Check out our <a
            href="{{route('pricing')}}">Shipping Cost Calculator</a> for a FREE estimate of your particular courier needs.</p>
            </div>
            </div><br>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">Can I use ShoppRe Courier for parcel forwarding?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text" class="f-s-16 f-c-gray">ShoppRe has a more specified service called Shop & Ship for all package forwarding needs including
                Personal Shopper services. When you sign up with us, you get a FREE virtual shipping address along with a personal
                locker at our warehouse for you to safely store your purchases while you go <a href="{{route('stores1')}}">shopping on Indian online stores.</a>
                At the end of the day, our customers can be rest assured that we offer the best possible
                international shipping rates, all thanks to our Package Consolidation.</p>
            </div></div><br>

            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">Could I send a Rakhi to my brother in Canada using Amazon?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text" class="f-s-16 f-c-gray">Unfortunately amazon.in doesn’t offer to ship internationally. So,
                what you can do is <a href="/amazon-india-shop-international-shipping">shop from Amazon</a> & sign up with us for FREE and use our Shop & Ship/Personal Shopper
                service to forward the Rakhi to Canada. Check out our international shipping
                calculator now for a FREE estimate.</p>
             </div></div><br>


            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">What is the cheapest way to ship a product from India to China?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text" class="f-s-16 f-c-gray">ShoppRe’s Shop&Ship and Package Consolidation will enable you to save up to 80%
                of your shipping costs; hence it is evident that we offer the <a href="{{route('pricing')}}">best shipping rates from India</a>, to anywhere
                in the world, including China. Our pricing is estimated after deducting a certain country-specific discount,
                depending on the country.</p>
            </div></div><br>


            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h2 itemprop="name" class="f-s-18 f-c-d-gray font-weight-900">Can we send gifts online from India to Qatar?</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text" class="f-s-16 f-c-gray">Of course you can.
                But, you’d have to check if your courier falls under the category of restricted items. If that’s the case;
                we wouldn’t be able to help you. And if the courier comes under ‘Special Items’ such as liquids/fluids,
                you’d have to pay an additional clearance fee. <a href="/faq">Learn more</a> about Special Items now.
                </p>
            </div></div> <br>
            </div>

            <h2 class="f-s-18 f-c-d-gray font-weight-900">Now, sit back and relax after <a href="{{route('schedulePickup.Index')}}">Scheduling a Pickup</a>
                for your courier! ShoppRe will take it from there.</h2>

            <br>
            <div class="row">
                <h2 class="f-s-22 f-c-d-gray font-weight-900 text-center">International Courier Rates Per Kg</h2>
                <br>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><span><a
                                        href="/international-courier-charges-india-to-usa-per-kg" target="_blank">India to USA Courier Rates</a></span></li>
                            <li><span><a
                                        href="/international-courier-charges-india-to-uae-per-kg" target="_blank">India to UAE Courier Rates</a></span></li>
                            <li><span><a
                                        href="/international-courier-charges-india-to-canada-per-kg" target="_blank">India to Canada Courier Rates</a></span></li>
                            <li><span><a
                                        href="/international-courier-charges-india-to-australia-per-kg" target="_blank">India to Australia Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-singapore-per-kg" target="_blank">India to Singapore Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-germany-per-kg" target="_blank">India to Germany Courier Rates</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-south-africa-per-kg" target="_blank">India to South Africa Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-japan-per-kg" target="_blank">India to Japan Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-new-zealand-per-kg" target="_blank">India to New Zealand Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-malaysia-per-kg" target="_blank">India to Malaysia Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-switzerland-per-kg" target="_blank">India to Switzerland Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-mauritius-per-kg" target="_blank">India to Mauritius Courier Rates</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-qatar-per-kg" target="_blank">India to Qatar Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-denmark-per-kg" target="_blank">India to Denmark Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-mexico-per-kg" target="_blank">India to Mexico Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-spain-per-kg" target="_blank">India to Spain Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-brazil-per-kg" target="_blank">India to Brazil Courier Rates</a></span></li>
                            <li><span> <a
                                        href="/international-courier-charges-india-to-belgium-per-kg" target="_blank">India to Belgium Courier Rates</a></span></li>
                        </ul>
                    </div>
                </div>
        </div>
            <br>
            <div class="container">
                <center>
                    <h3 class="header2 p-color-cement-dark font-weight-900">Want more information about each of our services? Download Our brochure for Free! </h3>
                    <a href="http://bit.ly/shoppre-brochure" target="_blank">
                        <div class="btn header6 btn-get-assisted p-color-white no-margin" style="background-color: #0b8043">
                            <center>
                                Download Here
                            </center>
                        </div>
                    </a>
                </center>
            </div>
        </div>
    </section>
        <br>
@endsection
@section('js_script')
    @include('../partials/mixpanel')
    <script>
        $(document).ready(function(){$("#ics-box2").hover(function(){$("#ics-box2").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number2").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box2").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number2").css({color:"#677582"})}),$("#ics-box3").hover(function(){$("#ics-box3").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number3").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box3").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number3").css({color:"#677582"})})});
        mixpanel.track("courier_landing_page_visitors");
        mixpanel.track_links("#btn-pick-schedule", "click_courier_landing_page_btn_pickup", {
            "referrer": document.referrer
        })
    </script>

@endsection


