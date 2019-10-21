@extends('layout')

@section('title', 'Cheapest Way to Send International Courier from India | ShoppRe')
@section('description', 'Want to courier abroad from India? We ship to 220 countries. Send homemade food, sweets, utensils, cloths, books. Special Discounts rates for bulk shipments.')
@section('keywords', 'international courier, cargo services, shipping, delivery, schedule a pickup, package, food, books, documents, gifts')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/send-international-courier-from-india" />

    <meta property="og:title" content="International Courier Starting from ₹566 | ShoppRe"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/send-international-courier-from-india"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/international-courier-services-india.png')}}"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="ShoppRe Courier" />
    <meta property="og:description" content="Best international courier and cargo services - Special International Courier Rates for you."/>
    <meta property="og:site_name" content="ShoppRe International Courier Services in India"/>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "ShoppRe.com",
  "alternateName": "Send International Courier From India",
  "url": "https://www.shoppre.com/send-international-courier-from-india",
  "logo": "https://www.shoppre.com/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 8277919191",
    "contactType": "customer service"
  },
  "sameAs": [
    "https://www.facebook.com/goshoppre",
    "https://twitter.com/Go_Shoppre",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre"
  ],
  "aggregateRating": {
    "@type" : "AggregateRating",
    "bestRating": "5",
    "ratingValue" : "4.8",
    "reviewCount" : "4900",
    "worstRating" : 3.5
  }
}
</script>

    <style>
        .bg-ics-landing-page .container>div{padding:20px;margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}.seo-sec a{text-decoration:underline}#packing:hover{display:none}.bg-ics-l-p{background-image:url(../../img/images/overlay1.png);height:580px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:75px}@media only screen and (max-width:600px){.bg-ics-l-p{height:680px}}@media only screen and (max-width:600px){table th,td h1{font-weight:700;font-size:15px}table th,td span{font-weight:600;font-size:10px}table th,td p{font-weight:600;font-size:10px}}
    </style>

@endsection

@section('content')
    <section class="bg-ics-l-p">
        <div class="container">
{{--            <div class="col-md-12">--}}
{{--                <a href="tel:+91-8277919191" class="pull-right d-contact-img-desktop">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">--}}
{{--                </a>--}}
{{--                <a href="tel:+91-8277919191" class="d-contact-img pull-right">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

            <div class="col-sm-7 col-xs-12 no-pad">

                <div class="col-md-12 col-xs-12 no-pad">
                    <h1 class="p-color-white header-spacing d-header-text">International Courier
                        <br></h1>
                    <h1 class="header1 p-color-white header-spacing">Starting @₹566/-</h1>

                    <p class="p-color-white header5 d-header-text1">Want
                        to courier something abroad from India?<br>
                        We ship to 265 countries & our trusted courier partners DHL,<br> DTDC & more help us sail smooth
                        all the way to your<br> destination, wherever it is</p>
                    <br>
                    <br>
                </div>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Schedule Pickup</a>
                    <a href="{{route('pricing')}}" class="btn btn-l btn-s-b btn-b-b btn-a-l">Shipping Calculator</a>
                    <br>
                    <br>
                    <a href="/first-time-international-shipment-offer" class="btn btn-s-r btn-b-r f-s-14">*50% off on your First International Shipment, Use Code: FRST50</a>
                </div>

            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 50px">
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame " id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        <div class="form-group">
                            {{--<a href="https://wa.me/918277919191?text=I'm%20interested%20in%20Shopping%20and%20Shipping%20from%20India%20" target="_blank" class="c-image">--}}
                                <img src="/img/images/christmas-contact.png" alt="">
                            {{--</a>--}}
                        </div>
                        <div class="form-group text-center div-align-items-l">
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                                <a href="tel:+91-8277919191" class="btn btn-s-r btn-a-l btn-b-r">Call: +91-8277919191</a>
                            {{--</button>--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                                <a href="http://bit.ly/2lTtIew" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                            {{--</button>--}}
                        </div>
                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <h1 class="header2 p-color-blue">Get a Quote</h1>
                        <div class="row">
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/request-sent.svg" alt="">
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To start <br>Scheduling your
                                    Courier</h5>
                            </center>

                        </div>
                        <div class="text-center">
                            <a href="{{route('customer.register')}}" class="btn btn-d-signup">Free Sign
                                Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="seo-sec">
        <div class="container">
    {{--            <div class="col-md-12 col-xs-12 pad-t-20">--}}
    {{--                <center>--}}
    {{--                    <div class="col-md-4 col-xs-12 pad-20 ">--}}
    {{--                        <a href="/international-courier-charges-india-to-usa-per-kg">Courier Rates from India to USA per kg</a>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-4 col-xs-12 pad-20">--}}
    {{--                        <a href="/international-courier-charges-india-to-uae-per-kg">Courier Charges starts from ₹566 UAE</a>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-4 col-xs-12  pad-20">--}}
    {{--                        <a href="/international-courier-charges-india-to-canada-per-kg">Courier charges from India to Canada</a>--}}
    {{--                    </div>--}}
    {{--                </center>--}}
    {{--            </div>--}}

    {{--            <div class="col-md-12 col-xs-12 no-pad">--}}
    {{--                <center>--}}
    {{--                    <div class="col-md-4 col-xs-12  pad-20">--}}
    {{--                        <a href="/international-courier-charges-india-to-germany-per-kg">Shipping Rates from india to Germany</a>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-4 col-xs-12  pad-20">--}}
    {{--                        <a href="/international-courier-charges-india-to-australia-per-kg">Low Cost Courier Per Kg to Australia</a>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-4 col-xs-12 pad-20">--}}
    {{--                        <a href="/international-courier-charges-india-to-singapore-per-kg">Cheapest rates from India to Singapore</a>--}}
    {{--                    </div>--}}
    {{--                </center>--}}
    {{--            </div>--}}

            <div class="col-md-12 col-xs-12 no-pad">
                <div class="col-md-12 col-xs-12 no-pad">
                   <center> <h1 class="f-c-d-greay f-s-30 f-w-8">Special International Courier Rates</h1></center>
                    <table class="table table-bordered txt-a-c">
                        <tr>
                            <td class="btn-b-y tbl-br">
                                <h5>Pricing</h5>
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
        </div>

    </section>



    <section class="product-courier ">
        <div class="container no-padding div-ics-border-btm">
            <center>
                <h1 class="f-c-d-greay f-s-30 f-w-8" >
                    Cheapest way to Send International Courier from India - To USA, UAE, UK, Australia, Canada, Singapore, Saudi Arabia, Mauritius & 200 other
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
                        <h2 class="f-c-d-greay f-s-30 f-w-8 ">What You Can Get Us to Courier?</h2>
                        <p class="f-c-l-gray f-s-18 f-w-8">From Kids’ toys to commercial equipment, we are well-prepared to ship anything under the sun,
                            that follow the international & country-specific shipping regulations. These are some of the goods that we frequently ship for our customers </p>
                    </center>
                </div>
                <br>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-6 no-padding" >
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="" >Medicine</li>
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
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">& Many More Products</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container div-ics-border-btm">
            <div class="col-md-12">
                <center>
                    <h1 class="f-s-36 f-c-d-greay">Features</h1>
                    <p class="f-s-24 f-c-gray">Get a FREE estimate for your courier, and schedule a pickup with us. We’ll come to your doorsteps to pick it up within 48 hours, and will dispatch it within the next 24 hours.Our courier partners are known to reach your destination in 3-6 days, wherever in the world it is!’</p>
                </center>
            </div>
            <br>

            <div class="row text-center">
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
                        <br>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>

        <div class="container">
            <center>
                <h1 class="header1  p-color-cement-dark">Our Process</h1>
                <p class="header2 p-color-cement">We will recived your order at our branch and can provide storage,<br>
                    Repackaging and consoldation services to send at abroad address.</p>
            </center>
        </div>

        <div class="container">
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
                            <h2 class="header3 p-color-cement-dark">Schedule a Pickup</h2>
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
                    <a  href="{{route('schedulePickup.Index')}}" class="btn btn-request">Request Pickup</a>
                </center>
            </div>

        </div>
    </section>

    <section style="margin-bottom: 50px">
        <div class="container" style="margin-top: 62px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-tailor.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="f-s-24 font-weight-900 f-c-d-greay">Are you a young Entrepreneur or an upcoming organization
                    aspiring to make your talent & business [B2B, B2C, C2C] reach overseas?</h1>
                <p class="f-s-20 f-c-l-gray">
                    <span> Sit back and relax while we handle the fuss of your company's shipments and delivery.
                        Ship your products with us & reach customers Globally.</span> To know how much you can save monthly on regular shipping.</p>
                <div class="col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform"
                           class="btn btn-request-cal-back">Request Callback</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="" class="btn btn-courier-know">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container fst-service" style="margin-top: 1px; background: seashell;">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <center><h2 class="header2 p-color-cement-dark font-weight-900 txt-align">International courier charges per kg from India</h2></center>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-usa-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">USA Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-mexico-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Mexico Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-singapore-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Singapore Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-germany-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                <span class="elementor-icon-list-text txt-u-l">Germany Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-canada-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Canada Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-australia-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Australia Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-brazil-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                <span class="elementor-icon-list-text txt-u-l">Brazil Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-spain-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Spain Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-belgium-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Belgium Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="/international-courier-charges-india-to-switzerland-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Switzerland Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-south-africa-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">South Africa Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-japan-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Japan Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-new-zealand-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                <span class="elementor-icon-list-text txt-u-l">New Zealand Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-qatar-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Qatar Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-malaysia-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Malaysia Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-hong-kong-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                <span class="elementor-icon-list-text txt-u-l">Hong Kong Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-sri-lanka-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Sri Lanka Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="international-courier-charges-india-to-uae-per-kg" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">UAE Courier Rates</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <br>
        </div>
        <br>
        <div class="mar-t-25">
            <div class="txt-center">
                <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                    <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" title="india shopping sites" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                        <p class="btn-md">Shipping Cost Calculator</p>
                    </a>
                </button>
                <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                    <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20from%20India%20and%20Ship%20Worldwide?" title="Message Me on WhatsApp" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                        <p class="btn-md">Message Us On WhatsApp</p>
                    </a>
                </button>
            </div>
        </div>
        </div>
        <br>
    </section>
    <br>
    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91-91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#"--}}
                       {{--class="header2 p-color-white">Chat Now</a>--}}
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>

    <section class="d-contact-section-desktop">
        <div class="container " id="contact-support">
            <div class="row" id="d-contcat">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 " style="display: none">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-89148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('js_script')
    <script>
        $(document).ready(function(){$("#ics_lp").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(o){var c=$("input[name='email']").val(),n=$("input[name='Name']").val(),s=$("input[name='ContactNumber']").val(),f=$("input[name=_token]").val();jQuery.ajax({url:"send-international-courier-from-india",type:"POST",data:{_token:f,email:c,name:n,contact_no:s},success:function(o){console.log(o),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}}),$("#ics-box2").hover(function(){$("#ics-box2").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number2").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box2").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number2").css({color:"#677582"})}),$("#ics-box3").hover(function(){$("#ics-box3").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number3").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box3").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number3").css({color:"#677582"})})});
    </script>
@endsection



