@extends('layout')

@section('title', 'The most reliable, cheap and fast Shipping service from India to USA')
@section('description', 'Cheap and fast way to send your courier to USA from India. Get ₹200 Off on your first international shipment. Save 80% on shipping rates. Sign Up Now!')
@section('keywords', 'usa courier, shipping from india, courier charges, shipping cost, package')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/cheap-and-fast-shipping-service-from-india-to-usa" />

    <style>
        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}
        .first-time-shipment .div-snow{padding-top:146px}
        .first-time-shipment .div-snow img{position:absolute}
        .first-time-shipment .div-snow img{margin-left:-18px;position:absolute}
        .first-time-shipment .div-newyear{padding-top:206px}
        .first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:600px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection
@section('content')
    <section class="first-time-shipment">
        <div class="container no-padding">
           <div class="col-md-12 col-xs-12 no-padding">
               <center>
                   <a href="{{route('customer.register')}}"><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/tape_signup.svg" alt="" > </a> <br>
               </center>
               <center>
                   <h18 class="f-s-50 f-c-white  f-w-9">₹200 Discount</h18>
                   <p class="f-s-30 f-c-white f-w-9 ">on your First Shipment to USA from India </p>
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>
                   <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE </a>
                   <br>
                   <br>
                   <br>
                   <p class="f-s-12 f-c-l-gray f-w-8">How to find a cheap and reliable shipping to usa</p>

               </center>
           </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Cheapest way to send parcel to USA from India</h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=918277919191&text=I%27m%20Looking%20for%20Shipping%20Service%20to%20USA%20from%20India" target="_blank" title="Click to WhatsApp">
                        <img src="/img/images/christmas-contact.png" alt="shoppre contact number 8277919191">
                    </a>
                </div>
            </div>

            <div class=" col-md-12 no-pad"><br>
                <center>
                <h2 class="p-color-cement-dark f-w-9 font-30">International Shipping from India to USA</h2>
                </center>
                <h4 class="f-s-20 f-c-gray f-w-9">Choose ShoppRe for international shipping from India to USA as
                    we offer the cheapest and the best way to send your courier from India to USA with our trusted courier partners.</h4>
                <br>
                <p class="header4 p-color-cement">Be it package forwarding or courier, ShoppRe offers international shipping from India in an effective manner by offering
                    FREE 20 days storage service, pickup from your doorstep at your domestic address in India and delivery within 3-6 working days to anywhere in the USA
                    and 220 + countries while saving up to 80 % on shipping rates.
                </p>
                <br>
                <p class="header4 p-color-cement">Our sets of services are what sets us apart and make our adversaries run for the hills because we make international
                    courier delivery cheap, reliable and fast. We have partnered with the renowned courier services like DHL, DTDC and more, for best
                    courier rates from India to USA and also the fastest courier from India to USA.
                </p>
                <br>
                <h4 class="f-s-20 f-c-gray f-w-9"><i>Here is a special something for your first international courier delivery ₹200/- Off on your first international shipment use code: FRST50</i></h4>
                <br>
                <br>


                <div class="col-md-6 col-md-offset-3  col-sm-12 col-xs-12 no-pad">
                    <div class="col-md-12 col-sm-12 col-xs-12  no-pad">
                        <div class="calculator cal_block" style="padding: 04px 04px 04px !important; ">
                            <center><h3 class="text-red">International Shipping Calculator</h3></center>

                            <span id="calc_error" style="display: none;">Sorry! No delivery options available in requested country. Please
contact our support team for assistance.</span>
                            <form class="calc-form ng-pristine ng-valid ng-submitted" id="shipping" novalidate="novalidate">
                                <input type="hidden" name="_token" value="txUccFXVS9erPpnHxSRGRYb89WomjhaEnx3m5HuQ">
                                <div class="form-group">
                                    <label class="col-sm-12">Where do you want to send your package?</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2 valid" name="country" aria-required="true">
                                            <option value="226">
                                                United States
                                            </option>
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
                                                <input type="radio" name="type" value="nondoc" checked="">Non Document
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
                                    <label class="col-sm-12 control-label">How much does your package weight in KG?</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control valid" value="1" id ="weight" name="weight" placeholder="Enter Weight" aria-required="true">
                                    </div>
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="radio">--}}
                                            {{--<label class="checkbox-inline">--}}
                                                {{--<input type="radio" name="unit" value="kg" checked="" aria-required="true" class="valid">Kilograms--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                        {{--<div class="radio">--}}
                                            {{--<label class="checkbox-inline">--}}
                                                {{--<input type="radio" name="unit" value="lbs" class="valid">Pounds--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="clearfix"></div>
                                </div>


                                <div class="clearfix"></div>
                                <div class="col-sm-12 ">
                                    <button id="getRates" class="btn btn-block btn-shoppre">
                                        GET RATES
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                            <div id="ship_result" class="calc-result" style="display: block;">
                                <h4 class="text-red margin_cost">ESTIMATED SHIPPING COST*</h4>

                                <div class="result table-responsive text-center">
                                    <table class="table table-bordered table-responsive">
                                        <tbody><tr>
                                            <td class="bg-white col-md-5  "><span id="ship_time" >3-6</span> Business Days
                                                <span class="text-red">*</span></td>
                                            <td><i class="fa fa-rupee" ></i> <span style="color:white;font-size:22px;" id="customer_rate"></span></td>
                                        </tr>
                                        </tbody></table>
                                    {{--<tr>--}}
                                        {{--<td colspan="2" style="background-color:white">--}}
                                            <span style="color:red;font-size:18px" id="contact"></span>
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                </div>

                            </div>
                            <div id="calc_load" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <h2 class="p-color-cement-dark f-w-9 font-25">Special services provided by us for the ease of shipping from India to USA</h2>
                <br>
                <p class="header4 p-color-cement">If you come across some kind of trouble while making your payment with your international card or
                    an issue arises related to your order, then you can request a personal shopper from shoppre for assisted purchasing.
                    All you need to do is, fill a form of your order and we buy those items for you, and when you make the shipping request, we will dispatch your order
                    that you shall receive within 3-6 working days.
                </p>
                <br>
                <p class="header4 p-color-cement">We also have some amazing and super saver membership plans for customers who use our services including personal shopper frequently
                    or buy bulk international shipments and do bulk shipping from India to USA. You can see the difference in the
                    <a href="/international-courier-charges-india-to-usa-per-kg">cost of courier from India to USA</a> with these plans.
                    We have two plans- the basic plan and the premium plan, for both yearly and half-yearly basis. We recommend the premium plan
                    for huge savings that is up to 80% on shipping rates.
                </p>
                <br>
                <h4 class="f-s-20 f-c-gray f-w-9">ShoppRe International Package Forwarding service includes:</h4>
                <br>
                <ul class="header4 p-color-cement">
                    <li>International shipping from "India"</li>
                    <li>Repackaging items (if needed) to ensure safe arrival and lower shipping cost</li>
                    <li>Consolidating several packages to reduce shipping cost</li>
                    <li>Large international shipping rate discounts from carriers (FEDEX, DHL, DTDC & More).</li>
                    <li>Shipment insurance & Item storage</li>
                    <li>Payment via bank transfer, Paypal, credit card, debit card, netbanking & more</li>
                </ul>
                <br>
                <div class="offerDesc">
                    <h4 style="text-decoration: underline" class="f-c-blue">What do we ship?</h4>
                    <p class="header4 p-color-cement">Almost anything that falls under the international export & customs guidelines and policies can be shipped through ShoppRe.
                        The most common items that we ship are;
                    </p>
                    <br>
                    <ul>
                        <li>Clothing, shoes & accessories</li>
                        <li>Documents/Letters</li>
                        <li>Homemade/processed/branded food items</li>
                        <li>Holiday greetings & gifts</li>
                    </ul>
                    <p class="header4 p-color-cement">We are ready to ship anything for you including kids toys, medicine, documents, sports equipment, homemade food, artwork,
                        artificial jewellery, gifts, cell phones, religious items and many more products.
                    </p>
                </div>
                <br>
                <div>
                <center><a href="/customer/register" target="_blank" class="btn btn-s-b btn-b-g">Sign Up for FREE</a></center>
                </div>
            </div>
        </div>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Some other questions that you might have</h1>
            </center>
            <h2 class="p-color-cement-dark f-w-9 font-18">1. How long does shipping from India to usa take?</h2>
            <p class="p-color-cement f-w-9 font-9">Once your package is consolidated, packed and all set at our warehouse,
                and we receive your request to ship, then it just takes 3-6 working days to ship your package to the USA or ANYWHERE in the world.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">2. What are the courier charges from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">We have the cheapest way of shipping by offering up to 80% less shipping cost and the
                international courier to USA starts at just ₹1449/-. Check here for the best courier rates from India to the USA for your package.
                <br>
                You can use our shipping cost calculator to know Shipping charges from india to usa per kg.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">3. Can you courier medicines from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, we courier medicine, ayurvedic medicines and herbs from India to USA starting at just ₹1449/- .
                For <a href="/medicine-international-courier-from-india" target="_blank">shipping medicines from india to usa</a> you will just need the doctor’s prescription and the commercial bill and we will arrange a pickup at
                your doorstep for your package. We have partnered with some of the renowned courier services like DHL and DTDC, hence making medicine delivery to the US from India safe and fast.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">4. Can we send clothes to USA from India?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, you can send as many clothes as you want in a package via our international courier
                delivery services that you can count on for fast and safe courier delivery to the US, making shipping clothes from INDIA to USA easy and efficient.

            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">5. Can you ship Sarees from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">You can ship any type of clothing from india to usa, shipping sarees from india to usa,
                shipping used clothes from india to usa or even shipping dresses from india to usa is possible.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">6. How can we send LED TV from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Shipping led tv from usa to india is easy with shoppre’s amazing and reliable courier services that offers
                up to 80% lower shipping cost, making it the best courier rates from India to the USA. We ship items like these
                that need to be handled with care with our courier partners like DHL and DTDC while offering DHL courier tracking from India to USA and DTDC
                courier from india to USA tracking for safety.

            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">7. Can you send Furniture from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes in fact we are shipping heavy items from india to usa with our
                trusted courier partners that ensure safe and timely delivery of your package. Thus making Shipping furniture from India to USA cost efficient and hassle free.

            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">8. Can you ship Snacks from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, we do have food courier service from India to USA. But you cannot
                send certain items like Perishable Foods, Ghee, rice etc that are prohibited and you cannot ship from India.
                <br> <br>
                There are some items that fall under the prohibited items category and we unable to ship prohibited and non-approved restricted items on behalf of our customers.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">9. How Can you ship Jewelry from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Since any form of precious metals are banned to be exported from India,
                we ship Artificial Jewellery from india to usa through our courier services that will take care of your package.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">10. How Can you ship Mango from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Once your package is consolidated, packed and all set at our warehouse,
                and we receive your request to ship, then it just takes 3-6 working days to ship your package to the USA or ANYWHERE in the world. </p>
            <ul class="header4 p-color-cement"  style="list-style-type: disc;">
                <li>Sign up at ShoppRe and Get free Virtual Address to ship from India.</li>
                <li>We Purchase Mango's in India for you.</li>
                <li>We will deliver mangoes at your doorstep anywhere in the European Countries & USA.</li>
            </ul>

            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">11. Can you ship books from India to usa?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes you can ship books from india to usa or any part of the world through ShoppRe.
                Your parcel will be taken care of. We make shipping books from india to usa completely hassle free.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-20 f-c-blue">To send a courier abroad, all you have to do is;</h2>
            <p class="p-color-cement f-w-9 font-9">1. Schedule a Pickup from ANYWHERE in India; our experts will come to your door to pick it up,
            </p><br>
            <p class="p-color-cement f-w-9 font-9">2. We process it while you pay us the shipping cost.
            </p><br>
            <p class="p-color-cement f-w-9 font-9">3. And, we jump through hoops to dispatch your package off to your destination in just 48 hours,
            </p><br>
            <p class="p-color-cement f-w-9 font-9">4. One of our efficient & appropriate courier partners will get the package to its destination in just   3-6 days, ANYWHERE in the world.
            </p>
            <br>

            <div class="row text-center">
                <center>
                    <h1 class="header1 p-color-cement-dark">ShoppRe Shipping Features & Benefits</h1>
                </center>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Home/work delivery services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-day Free, Safe storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Delivery as fast as 3-6 day</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Real time online tracking</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Door to door Pickup in India</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>India Shipping Address</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Door to door delivery in USA</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Commercial courier services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Online Payment Options </span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section>
        <div class="container fst-service" style="margin-top: 1px">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Best Online Shopping Sites from India to USA</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="myntra-international-shipping-to-usa" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Myntra Shopping from USA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="flipkart-usa-shopping" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Flipkart Shopping from USA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="shop-from-amazon-india-and-ship-to-usa" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Amazon.in Shopping from USA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="jabong-usa-shipping-from-india" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                <span class="elementor-icon-list-text txt-u-l">Jabong Shopping from USA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="trends-ajio-usa-shipping-from-india" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">AJIO Shopping from USA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="jaypore-shopping-usa" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Jaypore Shopping from USA</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="limeroad-shopping-international-shipping" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Limeroad Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">


                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/online-stores-india/nykaa-india-beauty-products-international-shipping/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Nykaa Beauty Shopping</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/online-stores-india/biba-india-international-shipping/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">BIBA.in Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="mar-t-25">
                <div class="txt-center">
                    <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                        <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Indian Online Shopping Stores</p>
                        </a>
                    </button>
                    <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                        <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20from%20India%20and%20Ship%20Worldwide?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Message Us On WhatsApp</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <br>
        <br>
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
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

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
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

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


@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

                // submitHandler: function (form) {
            $("#getRates").click(function(e) {
                var country = 'US';
                var weight = $('#weight').val();
                var weight_unit = 'kg'; //  $("input[name='unit']:checked").val();
                var measurement_unit = $("input[name='measurement_unit']:checked").val();
                var package_type =  $("input[name='type']:checked").val();
                var length = 0;
                var width = 0;
                var height = 0;

                if (weight <= 70) {
                    debugger;
                    var queryParams = 'all=true&country=' + country + '&type=' + package_type + '&weight=' + weight;
                    queryParams += '&length=' + length + '&width=' + width + '&height=' + height;
                    queryParams += '&scale=' + measurement_unit + '&unit=' + weight_unit;
                    jQuery.ajax({
                        url: 'https://courier.shoppre.com/api/pricing?' + queryParams,
                        type: 'get',
                        success: function ({prices}) {
                            $('#customer_rate').text(prices[0].customerRate);
                            $('#contact').text(' ');
                        }
                    });
                    return false;
                } else {
                    $('#contact').text('For More than 70 kg please contact Shoppre');
                    $('#customer_rate').text(' ');
                }

            });
        });

    </script>
@endsection
