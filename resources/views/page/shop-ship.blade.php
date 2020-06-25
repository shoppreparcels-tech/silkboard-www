@extends('layout')

@section('title', 'Online Shopping from India | Hassle Free Worldwide Shipping')
@section('description', 'Shop from 1000 Indian online stores with your ShoppRe Address. Hassle Free worldwide shipping from India at 80% lower rates. 3-6 days delivery. Sign up Now!')
@section('keywords', 'shop from india, ship to usa, indian online stores, shipping address, uae courier, international shopping')
@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/shop-ship"/>

    <meta property="og:title" content="Online Shopping from India with ShoppRe International Shipping" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/shop-ship" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="international shopping" />
    <meta property="og:description" content="Shop online stores in India with your ShoppRe Address for Internatioanl Delivery." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .bg-diwali-lp{background-image:url(../../img/images/overlay1.png);height:900px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:60px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default.select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.bg-diwali-lp{height:700px}}
    </style>

@endsection

@section('content')

    <section class="bg-diwali-lp">
        <div class="container">
            <div class="col-md-12 col-xs-12">
                <center>

                    <h1 class="f-s-28 p-color-white header-spacing">SAVE UPTO
                        <span class="p-color-yellow">80%</span></h1>
                    <h2 class="f-c-yellow header-spacing f-s-36 font-weight-900">Shop in India, Ship
                        Worldwide</h2>
                    <h1 class="f-s-20 p-color-white header-spacing font-weight-900">Starting from
                        <span class="p-color-yellow">₹566/-</span>
                        <span class="offerprice">690/-</span>
                    </h1>
                    <div class="col-md-4 col-md-offset-4 col-xs-12 div-diwali-coupon">
                        <div class="col-md-3 col-xs-3">
                            <h3 class="header4 p-color-white">COUPON: <br>CODE:</h3>
                        </div>
                        <div class="col-md-9 col-xs-9">
                            <h1 class="f-s-36 f-c-yellow">FRST50</h1>
                        </div>
                    </div>
                </center>
            </div>

            <div class="col-md-5 col-md-offset-4 col-xs-12 diwali-form-img">
                <br>
                <br>
                   <div class="form-group text-center">
                       {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                       <a href="/customer/register" class="btn btn-b-r btn-s-r font-weight-900 col-xs-12" target="_blank">Sign Up For Free</a>
                       {{--</button>--}}
                       <br>
                       <br>
                       {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                       <a  style="margin-top: 10px;" href="https://api.whatsapp.com/send?phone=919148357733"
                           target="_blank" class="btn btn-s-b btn-a-l btn-b-g col-xs-12">
                           Message us on WhatsApp</a>
                       {{--</button>--}}
                   </div>

            </div>
        </div>
    </section>


    <section >
        <div class=" container shopContainer no-padding">
            <div class="col-md-12" style="padding:20px;">
                <div class="col-md-10">
                    <div>
                        <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                            <a href="/myntra-online-shopping" title="Myntra" target="_blank">1. 👉 MADE IN INDIA</a> |
                            <a href="/ajio-online-shopping" title="Ajio" target="_blank">2. 👉 THE AJIOMANIA SALE</a> |
                            <a href="/amazon-online-shopping" title="amazon" target="_blank">3. 👉 WARDROBE REFRESH SALE</a> |
                            <a href="/flipkart-online-shopping" title="Flipkart" target="_blank"> 4. 👉 BIG SAVING DAYS</a>
                        </marquee>
                    </div>
                    <center>
                        <h1 class="f-s-20 font-weight-900 f-c-d-greay">Ship What You Love from India & Shop With Your <a href="/indian-virtual-address" target="_blank">
                                Free ShoppRe Indian Virtual Address</a></h1>
                    </center>
                </div>
            </div>

            <label class="shop txt-u-l f-s-20 f-c-gray" >Shop from 1000+ Indian online stores</label>
            <div class="container div-store-padding">
                <center>
                    <img width="100%" src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/069b1d2d-ebba-47bb-ab43-c76f422fcee3.png"
                         alt="Top Indian online Stores international shipping">
                </center>
            </div>

{{--            <div class="row" style="padding-right:10px;padding-left: 30px">--}}
{{--                <center>--}}
{{--                    <div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">--}}
{{--                        <center class="d-online-stores">--}}
{{--                            <a href="{{route('flipkart.landing')}}" target="_blank">--}}
{{--                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>--}}
{{--                            </a>--}}
{{--                        </center>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-1  d-stores-box col-xs-6">--}}
{{--                        <center class="d-online-stores">--}}
{{--                            <a href="/amazon-india-shop-international-shipping" target="_blank">--}}
{{--                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>--}}
{{--                            </a>--}}
{{--                        </center>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-1  d-stores-box col-xs-4">--}}
{{--                        <center class="d-online-stores">--}}
{{--                            <a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">--}}
{{--                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="Myntra"/>--}}
{{--                            </a>--}}
{{--                        </center>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-1  d-stores-box col-xs-4">--}}
{{--                        <center class="d-online-stores">--}}
{{--                            <a href="{{route('myntra.landing')}}" target="_blank">--}}
{{--                            <img class="shoppingKart"--}}
{{--                                 src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>--}}
{{--                            </a>--}}
{{--                        </center>--}}
{{--                    </div>--}}

{{--                </center>--}}
{{--            </div>--}}

            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                    class="startsValidValue"> 1st JAN 2020</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 30th JUN 2020</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                    class="startsValidValue"> FRST50</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 offer-description">
                <h5 class="f-s-20 font-weight-900 f-c-d-greay ">Online Shopping from India with your ShoppRe Address & Hassle Free Shipping to USA, UAE, AUS, UK at 80% lower rates on shipping cost!</h5> <br>
                <h4 class="header4 p-color-cement"> Buy Products/Brands you Love from any online store in India;
                    Store, Consolidate, Repack & Ship Worldwide in 3-6 days delivery. Package Forwarding from India Made Easy by ShoppRe.com</h4>
                <br>
{{--                <p class="header4 p-color-cement">While Indians around the world, not just in--}}
{{--                    the country; are gearing up to celebrate the holy--}}
{{--                    season of light taking over the darkness, we have a rather cool offer in store for you to--}}
{{--                    get yourself and your loved ones ready for the celebrations.</p>--}}

                <p class="header4 p-color-cement">We offer 50% OFF the <a href="{{route('pricing')}}">shipping costs of
                    international shipments </a>for up to Rs.200, which you</p>
{{--                    can avail by using the Coupon Code FRST50  when you checkout. Consider it a little something--}}
{{--                    from us for this new year and don’t hesitate to shop around for Indian ethnic wear or send--}}
{{--                    your greetings off to your loved ones abroad.</p> <br>--}}
                <br>
                <div class="offerDesc">
                    <h5 class="f-s-20"> What Else Do You Get Out of ShoppRe Offer? </h5>
                    <ul>
                        <li>Store your goods at our facility for 20 days for FREE</li>
                        <li>Get online support (Live Chat or Call, WhatsApp)</li>
                        <li>Get up to 80% OFF in shipping costs</li>
                        <li>A fast delivery within 3-6 days!</li>
                        <li>Access to thousands of Online stores in India</li>
                        <li>Personal ShoppRe shipping address</li>
                        <li>Discounted Rates with DHL, FedEx & more</li>
                        <li>Door-to-door package tracking</li>
                    </ul>
                </div>
                <br>
                <div class="offerDesc">
                    <img src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/2f93b692-f0c0-41ad-ac42-e7f637e072c7.png" class="img-f-w" alt="parcel india">
                </div>
            </div>
        </div>
    </section>
    <br>
    <section style="background-color: #fafafb; margin-top: 10px">
        <div class="container" style="padding-top: 30px;">
            <center>
                <h2 class="header2 p-color-cement-dark"><strong>How ShoppRe works with purchases from Indian Stores?</strong></h2>
                <h1 class="header3 p-color-cement">Buy in India, Ship online and We deliver to you</h1>
            </center>
            <div class="row text-center">
                <br/>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step1.svg" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement">STEP 1</h1>
                        <br/>
                        <h1 class="header3 p-color-cement">Get a FREE Indian virtual Address,<br> sit back & shop around.
                        </h1>
                        <br/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step2.svg" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement">STEP 2</h1>
                        <br>
                        <h1 class="header3 p-color-cement">Shop from any Indian,<br> online store.</h1>
                        <br>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement">STEP 3</h1>
                        <br>
                        <h1 class="header3 p-color-cement">We'll get your package to<br> your doorsteps in just 3 to 6
                            days!</h1>
                        <br>

                    </div>
                </div>
                <div class="text-center">
                    <a href="/customer/register" class="btn btn-s-b btn-b-g" target="_blank">Sign Up for FREE</a>
                </div>
                <br/><br/>
            </div>
        </div>

    </section>

    <section class="chris-benefits">
        <div class="container " >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >Shop from 1000+ Indian online stores with ShoppRe Address</h1>
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
                            <li><span><a href="/chumbak-online-shopping" target="_blank">Chumbak Online Shopping</a></span></li>
                            <li><span><a href="https://www.shoppre.com/firstcry-online-shopping" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/patanjali-ayurved-products-international-delivery/" target="_blank">Patanjali Ayurvedic Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">Snapdeal Online Shopping</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="/pepperfry-online-shopping" target="_blank">Pepperfry Furniture Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/ishashoppe-organic-yoga-clothing-india-international-shipping/" target="_blank">IshaShoppe Yoga Clothing</a></span></li>
                            <li><span><a href="/nykaa-online-shopping" target="_blank">Nykaa Cosmetics Products</a></span></li>
                            <li><span><a href="/tatacliq-online-shopping" target="_blank">Tata CLiQ Online Shopping</a></span></li>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 9148357733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#" class="header2 p-color-white">Chat Now</a>--}}
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 9148357733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection
