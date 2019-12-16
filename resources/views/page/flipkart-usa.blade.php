@extends('layout')

@section('title', 'Does Flipkart ship to USA? | Use your ShoppRe Address for Delivery')
@section('description', 'Shop Flipkart in India and Ship to USA through ShoppRe International shipping services. Save up to 80% on shipping, delivered to your doorsteps within 3-6 days')
@section('keywords', 'shop from india to usa, shop online india international shipping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/flipkart-usa-shopping" />

    <meta property="og:title" content="Ship Flipkart.com Purchases Internationally with ShoppRe" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/flipkart-usa-shopping" />
    <meta property="og:image" content="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/d48a86ed-0d6c-42f9-9ea5-2d0437231ed6.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="Flipkart international shopping" />
    <meta property="og:description" content="Shop Flipkart from India & Ship to USA with your ShoppRe Address for Internatioanl Delivery." />
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
                   <p class="f-s-32 f-c-white f-w-9 ">on your first FLIPKART shipment </p>
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>
                   <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                   <br>
                   <br>
                   <br>
                   <p class="f-s-10 f-c-l-gray f-w-8">Shop Flipkart from India and Ship to your door-step anywhere in the USA</p>

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
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Flipkart USA - Shopping from USA made Easy and Affordable!
                    </h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20FLIPKART%20from%20India%20and%20Ship%20to%20USA?" target="_blank">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/9880393291-shop-ship-contact-number.png" alt="shop and ship number shoppre">
                    </a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue txt-a-l f-w-9"><a href="{{route('ifs.index')}}">Shop & Ship</a></h2>
                            <p class="f-s-12 f-c-l-gray txt-a-l">Shop Your Favourite Product from Flipkart Store; Get It to ShoppRe Virtual Address; We'll Ship to Your Doorsteps!</p>
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
                            <p class="f-s-12 f-c-l-gray txt-a-l">Payment Hassles at Checkout at Flipkart?<br> No Worries, Let Us Know What You Need; We'll Shop for You!</p>
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
                <br>
                <p class="header4 p-color-cement">If you are looking for Flipkart shopping from the USA then you have landed at the right place. Flipkart does not offer international shipping. But we do.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Love doing Flipkart shopping from USA?</h4>
                <br>
                <p class="header4 p-color-cement">We are sure you do. With a wide range of fashion clothing, home appliances, electronics, and much more, everyone is bound to shop from this humongous e-commerce website. And with all the sales and discounts it offers are like the cherry on the top. So do all the <b>Flipkart shopping from USA</b> with us.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">Does Flipkart ship to USA?</h4>
                <br>
                <p class="header4 p-color-cement">Flipkart does not ship to the USA. So it makes it difficult for all the NRIs/PIOs to shop from Flipkart because it does not do Flipkart international shipping.
                    Therefore. ShoppRe is the holy grail for all the NRI/PIOs to shop from Flipkart while in the USA. You can easily shop for anything you want.
                </p>
                <br>
                <h4 class="f-s-18 f-c-gray f-w-9">So, how can NRIs/PIOs do Flipkart international shipping?</h4>
                <br>
                <p class="header4 p-color-cement">There is a way that you can shop from Flipkart USA shopping very easily and expeditiously. You can shop from flipkart through ShoppRe.com and easily ship all of your shopping to the USA.
                    Here the easy steps for shopping
                </p>
                <br>
                <ul class="header4 p-color-cement">
                    <li>First, you have to Sign-Up at ShoppRe.com, if you haven’t already. Then you will receive a free virtual Indian shipping address,
                        that you can use while shopping from Indian shopping websites.
                    </li>
                    <li>Go to Flipkart and shop like crazy for all your favorite products. While billing out, choose the cash on delivery option. Also,
                        add the <a href="indian-virtual-address" target="_blank">virtual Indian shipping address</a> that was given to you by ShoppRe.</li>
                    <li>Your shipment from Flipkart will arrive at our warehouse, and we will pay for it.</li>
                    <li>Once all of your order arrives, we repackage it like one and send them to your actual delivery address in the US at 80% less shipping cost.
                    </li>
                    <li>Then you have to make a shipping request for your order. We will dispatch it within 24 hours, once we receive your request to ship.
                        And you shall receive your order at your doorsteps within 3-6 days.
                    </li>

                </ul>
                <br>
                <div class="offerDesc">
                    <h4 style="text-decoration: underline" class="f-c-blue">All about the upcoming Flipkart sales</h4>
                    <p class="header4 p-color-cement">Besides being one of the <a href="indian-online-stores" target="_blank">leading shopping sites in India</a> it also launches some long-awaited sales. The Flipkart sales are huge and offer humongous discounts on major brands. So do all the shopping during the sales and save extra cash while doing Flipkart shopping from USA. Flipkart often launches many sales now and then, however, some of the big sales are listed down below that you cannot afford to miss.
                    </p>
                    <br>
                    <ul>
                        <li>Flipkart Freedom Sale 10th to 12th August</li>
                        <li>Flipkart Big Billion Day Sale 29th September to 2nd October.</li>
                        <li>Flipkart Diwali Sale 21st to 25th October.</li>
                        <li>BOSS Up To 80% Off  11th to 15th December</li>
                        <li><a href="/flipkart-online-shopping" target="_blank">YEAR END SALE 21st to 23th December</a></li>
                    </ul>
                </div>
                <br>
                <div>
                <center><a href="/flipkart-online-shopping" target="_blank" class="btn btn-s-r btn-a-l btn-b-r">Shop Flipkart.com</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Top Indian Stores Shipping To The USA with ShoppRe</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/myntra-international-shipping-to-usa">Myntra Online Fashion Store</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/shop-from-amazon-india-and-ship-to-usa">Amazon.in Online Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/trends-ajio-usa-shipping-from-india">AJIO Fashion Trends</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/fabindia-online-shopping">Fabindia Handcrafted Products‎</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/firstcry-international-shipping-usa">Baby & Kids Online Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/jaypore-shopping-usa">Jaypore Handpicked Products</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/pepperfry-online-shopping">Pepperfry Home Decor</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/nykaa-online-shopping">Nykaa Online Beauty Store</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/limeroad-online-shopping">Limeroad Fashion Clothing</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/lifestylestores-online-shopping">Lifestyle Stores Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/tatacliq-online-shopping">Tata CLiQ Online Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/myntra-women-maxi-dresses-international-shipping">Maxi Dresses For Women</a></span></li>
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

{{--@section('js_script')--}}

{{--@endsection--}}
