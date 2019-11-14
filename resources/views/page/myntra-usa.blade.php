@extends('layout')

@section('title', 'Myntra USA Online Shopping | Ship From India | ShoppRe.com')
@section('description', 'Shop Myntra With Your ShoppRe Address and Ship your favorite products from India to the USA. Myntra online shopping and shipping made easy by ShoppRe.')
@section('keywords', 'myntra usa, international delivery, myntra ship clothes to the US, quora, ecommerce')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/myntra-international-shipping-to-usa" />

    <meta property="og:title" content="Ship Myntra.com Purchases Internationally with ShoppRe" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/myntra-international-shipping-to-usa" />
    <meta property="og:image" content="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/9a54ea3d-1fb9-4c29-9145-cdfac0628cb9.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="myntra international shopping" />
    <meta property="og:description" content="Shop MYNTRA from India & Ship to USA with your ShoppRe Address for Internatioanl Delivery." />
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
                   <p class="f-s-30 f-c-white f-w-9 ">on your first MYNTRA.com international shipment to USA </p>
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>
                   <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                   <br>
                   <br>
                   <p class="f-s-20 f-c-l-gray f-w-8">Shop Myntra from India and Ship to your door-step anywhere in the USA</p>

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
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Myntra.com shopping from the USA
                    </h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20Myntra%20from%20India%20and%20Ship%20to%20USA?" target="_blank" title="Text on WhatsApp Now">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/9880393291-shop-ship-contact-number.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue txt-a-l f-w-9"><a href="{{route('ifs.index')}}">Shop & Ship</a></h2>
                            <p class="f-s-12 f-c-l-gray txt-a-l">Shop Your Favourite Product from Myntra Store; Get It to ShoppRe Virtual Address; We'll Ship to Your Doorsteps!</p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <br>
                            <br>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-s-s.svg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class=" col-sm-12 col-xs-12 col-md-12 ps">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue txt-a-l f-w-9"><a href="{{route('personalShopper')}}">Personal Shopper</a></h2>
                            <p class="f-s-12 f-c-l-gray txt-a-l">Payment Hassles at Checkout at Myntra?<br> No Worries, Let Us Know What You Need; We'll Shop for You!</p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-ps.svg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 ic">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue  txt-a-l f-w-9"><a href="{{route('ics.index')}}">International Courier</a></h2>
                            <p class="f-s-12 f-c-l-gray  txt-a-l">Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!</p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-ic.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-12 no-pad"><br>
                <h4 class="f-s-18 f-c-gray f-w-9">A lot more convenient and cheaper alternative for Myntra online shopping form the USA</h4>
                <br>
                <p class="header4 p-color-cement">Myntra is the pre-eminent e-commerce shopping website in terms of fashion. It has become an enormous brand,
                    not only in India but also abroad. It is a one-stop destination for shopaholics worldwide, because of its variety of options in clothes,
                    footwear, accessories, and many more.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Does Myntra ship clothes to the USA?</h4>
                <br>
                <p class="header4 p-color-cement">Unfortunately, <a href="https://www.shoppre.com/myntra-online-shopping-shipping-from-india">Myntra international shipping to the USA</a> is still not a thing, but there is a
                    website that offers all the perks. Shopppre.com is your knight in shining armor. ShoppRe.com is a shipping website that makes international online
                    shopping shipping cost-efficient and hassle-free.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Why shop from Myntra?</h4>
                <br>
                <p class="header4 p-color-cement">I am sure you cannot find anyone who hasn’t heard about the giant shopping website.
                    Almost everyone acknowledges it as a foremost shopping destination.

                    It has some over the top range of latest fashion clothing. It also has an ample range of clothes for men, so wait no more and start Myntra online shopping for men.
                    Myntra Kurti sale, Myntra sale women tops, Myntra sale women footwear are some of the favorites among many sales on Myntra.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">How to do you shop from Myntra as an international customer?</h4>
                <br>
                <p class="header4 p-color-cement">If you are still puzzled about how you can order from Myntra as an NRI/PIO, and get your package shipped at your doorsteps abroad.
                    Then fret no more, here are some easy peasy steps that you can follow and <u><a href="/myntra-online-shopping" target="_blank">shop for your beloved brands and products</a></u>.
                </p>
                <br>
                <ul class="header4 p-color-cement">
                    <li>First, you have to Sign-Up at ShoppRe.com, if you haven’t already. Then you will receive a free virtual Indian shipping address,
                        that you can use while shopping from Indian shopping websites.
                    </li>
                    <li>Go to Myntra and shop like crazy for all your favorite products. While billing out, choose the cash on delivery option. Also,
                        add the <a href="indian-virtual-address" target="_blank">virtual Indian shipping address</a> that was given to you by ShoppRe.</li>
                    <li>Your shipment from Myntra will arrive at our warehouse, and we will pay for it.</li>
                    <li>Once all of your order arrives, we repackage it like one and send them to your actual delivery address in the US at 80% less shipping cost.
                    </li>
                    <li>Then you have to make a shipping request for your order. We will dispatch it within 24 hours, once we receive your request to ship.
                        And you shall receive your order at your doorsteps within 3-6 days.
                    </li>

                </ul>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Why choose us?</h4>
                <br>
                <p class="header4 p-color-cement">We offer all kinds of <a href="https://www.shoppre.com/international-parcel-forwarding-india-online-shopping" target="_blank">parcel forwarding</a> and
                    <a href="https://www.shoppre.com/international-courier-shipping-services-india" target="_blank">courier services</a> with 60-80% cheaper shipping rates anywhere in the world.
                    We also store, repackage, consolidate, and ship the orders in a very efficient manner. All of this results in full customer gratification.
                    <br> <br>
                    While shopping with ShoppRe, you can rest assured. Once you place the order, we take over. Believing customers to be our priority, we take the utmost care of your shipment so that you receive it intact.
                    So experience stress-free shopping and shipping with shoppre.com and shop for all your favorites.

                </p>
                <br>

                <div class="offerDesc">
                    <h4 style="text-decoration: underline" class="f-c-blue">Upcoming Myntra sales, you’ve got to know about:</h4>
                    <p class="header4 p-color-cement">With all the buzz in town about Myntra and its elaborate range of designer and branded collection,
                        it also comes up with considerable sales and discounts. It is a time of sheer exuberance for all thrifty shoppers. Keep an eye for its biggest and most happening sales because they are yet to arrive.
                    </p>
                    <br>
                    <ul>
                        <li>Myntra Maxessorize Sale, 1st to 2nd August 2019</li>
                        <li>Myntra Right to Fashion Sale, 09th to 12th August 2019</li>
                        <li>The Final Clearance Sale, 24th to 26th August 2019</li>
                        <li>Myntra Big Billion Days Sale, September 2019</li>
                        <li>Myntra Diwali Sale, 25th to 27th October 2019</li>
                        <li>Just Kidding(40-70% Off) 13th - 14th November 2019 </li>
                        <li><a href="https://clnk.in/jYmH" target="_blank">Mid Season Sale, 16th to 19th November 2019</a></li>
                    </ul>
                </div>
                <br>
                <div>
                <center><a href="https://clnk.in/i4Fx" target="_blank" class="btn btn-s-r btn-a-l btn-b-r">Shop Myntra.com</a></center>
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
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Consolidation</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Myntra Shipping Address</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>

    </section>

    <section>
        <div class="container div-ics-border-btm">
            <div class="col-md-12 col-xs-12 no-pad">
                {{--                <center>--}}
                {{--                    <h1 class="f-s-30 f-c-d-greay">Indian online shopping websites with ShoppRe International delivery</h1>--}}
                {{--                    <p class="f-s-20 f-c-gray">List of the top Indian online shopping websites international delivery through ShoppRe ecommerce--}}
                {{--                        package forwarding services and Festival Deals, Offers and Sale.</p>--}}
                {{--                    </br>--}}
                {{--                </center>--}}
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li>Top Online Shopping sites in India</li>
                            <br>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/flipkart-usa-shopping" target="_blank">Flipkart USA Shipping</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/myntra-online-shopping-shipping-from-india" target="_blank">Myntra USA Shipping</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/trends-ajio-usa-shipping-from-india" target="_blank">AJIO USA Shipping</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/shop-from-amazon-india-and-ship-to-usa" target="_blank">Amazon.in USA Delivery</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/firstcry-international-shipping-usa" target="_blank">Firstcry Shipping USA</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/jabong-usa-shipping-from-india" target="_blank">Jabong Lifestyle Shipping</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/jaypore-shopping-usa" target="_blank">Jaypore USA Delivery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li>Top Shopping Offers and Sale</li>
                            <br>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="/flipkart-big-billion-days-sale-offers-top-brands-stores" target="_blank">Flipkart Big Billion Day 2019</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="https://ship.shoppre.com/the-biggest-season-sale-flipkart-big-shopping-days-15-may-19-may/" target="_blank">Big Shopping Days</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="https://ship.shoppre.com/prime-amazon-fashion-wardrobe-refresh-sale-shop-online-from-india/" target="_blank">Fashion Wardrobe Refresh Sale</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="https://ship.shoppre.com/online-shopping-flipkart-flipstart-days-2019-offers-fashion-beauty-headphones-laptops-power-banks-mobile-cases/" target="_blank">Flipstart Days Sale 2019</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances" target="_blank">Amazon.in Freedom Sale</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" target="_blank">Myntra Right To Fashion Sale</a></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > <a href="flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india" target="_blank">Flipkart National Shopping Days</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>


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
                    <a href="tel:+91-9880393291" class="header2 p-color-white">+91 98803 93291</a>

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
                    <a href="tel:+91-9880393291" class="header2 p-color-white">+91 98803 93291</a>

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
