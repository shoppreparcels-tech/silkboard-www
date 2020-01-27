@extends('layout')

@section('title', 'AJIO USA | Handpicked Fashion Shopping from India | ShoppRe')
@section('description', 'Looking to Shop Ajio handpicked fashion brands from USA? Now with your ShoppRe Virtual Address and Ship anywhere in the USA. Save Up to 80% on 3-6 Day Shipping')
@section('keywords', 'ajio usa, reliance trends, online shopping india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/trends-ajio-usa-shipping-from-india" />

    <meta property="og:title" content="Ship AJIO.com Purchases Internationally with ShoppRe" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/trends-ajio-usa-shipping-from-india" />
    <meta property="og:image" content="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/0043705b-0903-4f3a-8285-2517b0481db4.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="AJIO international shopping" />
    <meta property="og:description" content="Shop AJIO from India & Ship to USA with your ShoppRe Address for Internatioanl Delivery." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-18px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:896px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection


@section('content')
    <section class="first-time-shipment">
        <div class="container no-padding">
           <div class="col-md-3 div-snow">
               <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-t-s-priyamani.png" alt="" class="img-responsive">
           </div>
           <div class="col-md-6 col-xs-12 no-padding">
               <center>
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-t-s-priyamani.png" alt="" class="img-new-year"><br>
                   <a href="{{route('customer.register')}}"><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/tape_signup.svg" alt="" > </a> <br>
               </center>
               <center>
                   <h18 class="f-s-50 f-c-white  f-w-9">50% Discount</h18>
                   <p class="f-s-34 f-c-white f-w-9 ">on your first AJIO.com shipment </p>
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>
                   <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                   <br>
                   <br>
                   <br>
                   <p class="f-s-10 f-c-l-gray f-w-8">Shop AJIO from India and Ship to your door-step anywhere in the USA</p>

               </center>
           </div>
            <div class="col-md-3 div-newyear">
                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-courierbox.png" alt="" class="img-responsive">
            </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">AJIO.com shopping from the USA - Fashion and Lifestyle Brand
                    </h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=919148357733&text=Can%20I%20Shop%20AJIO%20from%20India%20and%20Ship%20to%20USA?" target="_blank">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/9148357733-support-number.png" alt="shop and ship number shoppre">
                    </a>
                </div>
            </div>

            <div class=" col-md-12 no-pad"><br>
                <center>
                <h2 class="p-color-cement-dark f-w-9 font-30">Do AJIO online shopping and international shipping from India to USA</h2>
                </center>
                <br>
                <p class="header4 p-color-cement">Now you can shop for all your favorite things from Ajio because ShoppRe.com has made Ajio international
                    shipping possible while providing a FREE virtual address and low shipping rates.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">All about Ajio Trends and Ajio USA shopping</h4>
                <br>
                <p class="header4 p-color-cement">With the most stylish, unique and massive exhibit of fashion and lifestyle products, Ajio is one of the topmost
                    online shopping destinations worldwide. This Reliance retail venture is loved by all the fashion enthusiast people. Apart from all the exclusive
                    high-end brands and products, Ajio also offers some groundbreaking trends from its own private label- AJIO OWN. So shop all you want from their
                    100% handpicked and assured quality products.
                </p>
                <br>
                <p class="header4 p-color-cement">Since Ajio does not offer international shipping to the USA, one can make Ajio international shipping through ShoppRe.com,
                    and do Ajio online shopping from anywhere in the world. We also offer a ShoppRe <a href="personal-shopper-india" target="_blank">Personal Shopper</a> if you
                    need help with shopping or paying for your package. ShoppRe is an exclusive way to shop and save internationally as it offers 60% - 80%
                    <a href="cheap-rates-international-shipping-cost-calculator" target="_blank">lower shipping rates</a> with a reliable and safe 3-6 days delivery at your doorstep.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Does AJIO.com Offer international shipping?</h4>
                <br>
                <p class="header4 p-color-cement">While Ajio itself does not offer international shipping but you can shop for all your favorite fashion and lifestyle brand from Ajio and ship that package through ShoppRe.com while doing Ajio USA shopping. We strive for superiority and complete customer gratification, so you can ship your package with us categorically.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Here the easy steps for shopping from AJIO </h4>
                <br>
                <ul class="header4 p-color-cement">
                    <li>First, you have to Sign-Up at ShoppRe.com, if you haven’t already. Then you will receive a free virtual Indian shipping address,
                        that you can use while shopping from Indian shopping websites.
                    </li>
                    <li>Go to Ajio and shop like crazy for all your favorite products. While billing out, choose the cash on delivery option. Also,
                        add the <a href="indian-virtual-address" target="_blank">virtual Indian shipping address</a> that was given to you by ShoppRe.</li>
                    <li>Your shipment from Ajio will arrive at ShoppRe warehouse, and we will pay for it.</li>
                    <li>Once all of your order arrives, we repackage it like one and send them to your actual delivery address in the US at 80% less shipping cost.
                    </li>
                    <li>Then you have to make a shipping request for your order. We will dispatch it within 24 hours, once we receive your request to ship.
                        And you shall receive your order at your doorsteps within 3-6 days.
                    </li>

                </ul>
                <br>
                <div class="offerDesc">
                    <h4 style="text-decoration: underline" class="f-c-blue">Upcoming 2020 AJIO Sales</h4>
                    <br>
                    <ul>
                        <li>AJIO November Steal (Min. 40% Off) - November 2019.</li>
                        <li>No Ifs and Buts Sale‎ (Flat 50% Off) - 22-24 November 2019</li>
                        <li>WEEKDAY THERAPY (Min. 40% Off) - (25th-27th) November 2019</li>
                        <li>PAYDAY SALE (40-80% Off) - (1st-4th) December 2019.</li>
                        <li>AJIO MANIA SALE (50-90% Off) - (5th-9th) December 2019.</li>
                        <li>WEEKEND BINGE SALE (Min 40% Off) - (12th-16th) December 2019.</li>
                        <li>EPIC BLOWOUT SALE (Flat 55% OFF) - (19th-25th) December 2019.</li>
                        <li>BIG BAG DAYS (40-80% OFF) - (25th Dec 2019 - 1st Jan 2020)</li>
                        <li>PAYDAY SALE (40-80% OFF) - (2nd Jan 2020 - 5th Jan 2020)</li>
                        <li>THE AJIO MANIA SALE (50-90% OFF) - (9-12 Jan 2020)</li>
                        <li>REPUBLIC DAY SALE (40-80% OFF) - (24-26 Jan 2020)</li>
                        <li><a href="/ajio-online-shopping" target="_blank">BIG BAG DAYS (40-80% OFF) - (27th - 29th Jan 2020)</a></li>
                    </ul>
                </div>
                <br>
                <div>
                <center><a href="https://www.ajio.com/" target="_blank" class="btn btn-s-r btn-a-l btn-b-r">Shop AJIO.com</a></center>
                </div>
            </div>
        </div>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Ajio Shipping Address</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <br>
    <br>
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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

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
        <br>
    </section>
@endsection

{{--@section('js_script')--}}
{{--   --}}
{{--@endsection--}}
