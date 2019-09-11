@extends('layout')

@section('title', 'Online Shipping from India to the USA - ShoppRe USA')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/en-us"/>
    <link rel="alternate" href="https://www.shoppre.com/en-us" hreflang="en-us" />

    <style>
        .div-b-l-w ul li{list-style: none; color:#929ca5; font-weight: 700;font-size: 16px; }
        @media only screen and (max-width: 600px) {
            .bg-valentain {height: 1000px}
        }
        .left-padder-20
        {
            padding-left: 20px;
        }
     </style>

@endsection

@section('content')

    <main class="div-main" role="main">
                <div class="container m-t-30 "><br><br>
            <div class="col-md-12 col-xs-12 pad-t-20">
                <div class="col-md-7 col-xs-12 no-pad">
                    <div class="col-md-12 col-xs-12 no-pad">
                        <div class="col-md-12 col-xs-12">
                            <h1 class="f-s-30 f-c-white f-w-8 ">
                                No Second Thoughts on Shopping <br> from India; We deliver to you in the <span
                                    class="p-color-red">USA</span>
                            </h1>

                            <p class="f-s-20 f-c-gray f-w-9">Shopping from India is a no-brainer from now on!</p>
                            <br>
                            <br>
                            <p class="f-s-22 f-c-white f-w-9"><span
                                    class="p-color-yellow">From Amazon.in & Myntra to Jabong & Chumbak; </span> shop around as much as you want,
                                <br>
                                <br>
                            <p class="f-s-22 f-c-white f-w-9"><span
                                    class="p-color-yellow">And ship'em to a virtual address we provide;</span> store them in a unique locker for 20 days for FREE;
                                <br>
                                <br>
                            <p class="f-s-22 f-c-white f-w-9">We'll ship it all to you as one in just <span class="p-color-yellow">3-6 days!</span>
                                <br>
                                <br>
                            <p class="f-s-22 f-c-white f-w-9 ">
                                <a href="{{route('customer.register')}}" target="_blank" class="btn btn-danger" style="background-color: #B72B33; background-color: #B72B33; color: #fff; padding: 15px 40px; border-radius: 5px; text-decoration: none; width: 60%; margin: auto; margin-top: 20px; display: block; text-align: center; font-weight: 700; font-size: 20px;">Free SignUp</a>
                            </p>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>


                <div class="col-md-5 col-xs-12 pad-l-10 "><br>
                    <div class="calculator cal_block" style="padding: 04px 04px 04px !important; ">
                        <center><h3 class="text-red">International Shipping Calculator</h3></center>

                        <span id="calc_error" style="display: none;">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
                        <form class="calc-form ng-pristine ng-valid ng-submitted" id="shipping" novalidate="novalidate">
                            <input type="hidden" name="_token" value="txUccFXVS9erPpnHxSRGRYb89WomjhaEnx3m5HuQ">
                            <div class="form-group">
                                <label class="col-sm-12">Check your shipping cost from India to the USA</label>
                                <div class="col-sm-12">
                                    <p class="form-control select2 valid" name="country" aria-required="true">
                                        <option value="226">
                                            United States
                                        </option>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label">How much does your package weight in KG?</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control valid" value="1" id ="weight" name="weight" placeholder="Enter Weight" aria-required="true">
                                </div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                            <div class="col-sm-12 ">
                                <button id="getRates" class="btn btn-block btn-shoppre">
                                    Get Shipping Rates
                                </button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <div id="ship_result" class="calc-result" style="display: block;">
                            <br>
                            <h4 class="text-red margin_cost">Estimated Shipping Cost*</h4>
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
        </div>
        <br>
    </main>

    <section >
        <div class=" container shopContainer no-padding " style="margin-top: 0px;">
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-4 col-sm-4 no-pad">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                        class="startsValidValue"> 01st Sep 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-4 col-sm-4 no-pad">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                        class="startsValidValue"> 31st Oct 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-4 col-sm-4 no-pad">
                        <center>
                            <p class="startsvalid">OFFER CODE:<span
                                        class="startsValidValue"> FRST50</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 pad-25">
                <p class="f-s-26 f-c-gray f-w-9 text-center">
                    <strong>SHOP FROM INDIA AND SHIP TO THE USA</strong>
                </p>
                <br>
                <p class="f-s-30 f-c-d-greay f-w-9">A complete guide for shipping from India to the USA</p>
                <br>
{{--                <div class="row left-padder-20">--}}
{{--                    <div class="col-md-6  border-1px">--}}
{{--                        <h1 class="f-s-22 f-c-blue f-w-9">Table of Amazon Great Indian Sale 2019</h1>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <h4><a href="#amzn-grandeur">The Grandeur of Amazon Great Indian Sale 2019</a></h4>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <h4><a href="#amzn-nri">How can NRI/PIOs shop during Amazon Great Indian Sale, 2019 from India?</a></h4>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <h4><a href="#amzn-attractive">Attractive Offers for everyone during the Amazon Great Indian Sale</a></h4>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <h4><a href="#amzn-fashion">Amazon Great Indian Sale Offers: Fashion</a></h4>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-grandeur">Who is ShoppRe & How Do We Offer to Help? </h1>

                <p class="header4 p-color-cement">
                    ShoppRe is an international shipping & consolidation company operating out of Bangalore, India. We strive to
                    help our customers ship packages from ANY part of India to ANYWHERE in the world at the cheapest rates possible.
                </p>
                <br>
                <p class="f-s-20 f-c-black f-w-9" >When do we come in?</p>
                <div class="row left-padder-20 outer border-1px">
                    <ul>
                        <li>
                            <h4>International shoppers who are curious about our culture & trends place orders for Indian products on Indian online shops</h4>
                        </li>
                        <li>
                            <h4>People who live outside India, wants to shop Indian goods online, but the stores don’t ship to their country </h4>
                        </li>
                        <li>
                            <h4>People from India with friends/family abroad want to send care packages or holiday greetings abroad </h4>
                        </li>
                        <li>
                            <h4>Tourists & cross-country travelers need a reliable mail & package forwarding service </h4>
                        </li>
                        <li>
                            <h4>Long-haul truckers and contract workers need to send mail & packages to multiple addresses in India or abroad</h4>
                        </li>
                        <li>
                            <h4>Indians with offices/homes in multiple countries need to ship off their belongings/commercial packages to different locations </h4>
                        </li>
                        <li>
                            <h4>Indians who frequently travel internationally for work or pleasure need to ship their cargo beforehand/afterwards </h4>
                        </li>
                        <li>
                            <h4>Charities or church groups doing missions abroad need to ship donations & supplies internationally </h4>
                        </li>
                    </ul>
                </div>
                <br>
                <p class="header4 p-color-cement">These many & more scenarios when our customer base looks for a reliable shipping option; for all which we're ready with tailor-made solutions.
                </p>
                <p class="header4 p-color-cement">Have a package to send abroad? Have a chat with our friendly Support team. We're looking forward to hearing from you!
                </p>
                <br>
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-nri">Send Packages Abroad With Our Expert Package Consolidation & Shipping Services </h1>
                <p class="header4 p-color-cement">Do you miss Indian products & would like to flaunt your ethnicity once in a while? Shop online and get our
                    Shop&Ship services to ship your bags to wherever in the world you want.
                </p>
                <br>
                <p class="header4 p-color-cement">Miss your family & friends who stays abroad, especially on holidays? ShoppRe Courier will take care of everything
                    if you wish to send them your greetings or care packages.
                </p>
                <br>
                <p class="header4 p-color-cement">All you have to do is; just ship your packages to your Personal Locker at ShoppRe and we’ll take it from there right until
                    dispatching it to one of our courier partners. Our expert packers will efficiently repackage all your packages into one shipment to
                    get the lowest shipping rates for you. Since the majority of Indian shopping sites don’t offer to ship internationally,
                    you can get us to forward your purchases for you or your loved ones.
                </p>
                <br>
                <p class="header4 p-color-cement">You can also track your packages/shipment in real time and you'll get e-mail alerts in addition, after it reaches our warehouse.
                    We’ll receive your purchases and hold them for FREE for a period of 20 days. Once you make a Ship Request; our experts get to work and we move on to consolidation.
                    Our Package Consolidation service is what saves our customers up to 80% in shipping costs each time they ship with us.
                </p>
                <br>
                <p class="header4 p-color-cement">Why do it all on your own and pay way too much at your local couriers while spending the next days hoping it clears customs?
                    That is what we're here for! Sit back and relax; we'll take good care of your package.
                </p>
                <br>


                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-nri">Travelling much? We can ship your couriers while you're on the move </h1>
                <p class="header4 p-color-cement">Indians who travel often and need mail/packages delivered to multiple addresses can ship all their packages
                    to a unique locker and we’ll store them for FREE up to 20 days. We’ll forward those items anywhere inside or outside India when they make a ship request.
                    Our package consolidation and repackaging services will ensure they get the lowest shipping rates as possible.
                </p>
                <br>
                 <p class="f-s-20 f-c-gray f-w-9">Who can benefit from our services?</p>
                    <ul class="header4 p-color-cement">
                        <li>
                            <h4>Long-distance hikers, cross country travelers, and people who travel frequently across India for work.</h4>
                        </li>
                        <li>
                            <h4>Long-haul truckers and contract workers who are on the move.</h4>
                        </li>
                        <li>
                            <h4>People with homes/offices in multiple countries/cities</h4>
                        </li>
                        <li>
                            <h4>Indians who travel internationally for work/leisure</h4>
                        </li>
                    </ul>
                <p class="header4 p-color-cement">People usually come to us with their peculiar shipping needs and we never hesitate to go above and beyond for them.</p>
                <br>
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-shopper">Love celebrating Indian holidays, but missing home? </h1>
                <p class="header4 p-color-cement">Indians are a traditional bunch and no matter where in the world they are, holidays get to them. Through ShoppRe, Indians can
                    shop authentic Indian products and Indians here can send their holiday greetings and more off to their family and friends who reside in the US.
                </p>
                <ul class="header4 p-color-cement">
                    <li>
                        <h4>Shop and Ship - allows you to avail all the season offers running on Indian online shops while shopping on any holiday/cultural
                            festival and in turn grants our own discounts in shipping rates</h4>
                    </li>
                    <li>
                        <h4>ShoppRe Courier - lets you send hampers, gifts, holiday special packages and more off to your loved ones in the USA.</h4>
                    </li>
                </ul>

                <br>
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-attractive">What items you cannot send to the USA?</h1>
                <p class="header4 p-color-cement">The US Customs and import laws are quite tough on what goods can be imported along with several restrictions
                    in place on items that it is worth familiarizing yourself with.
                    Please make sure to visit the official US Customs page for restricted and prohibited items before booking a delivery,
                    to avoid any additional fees or delays to your courier/parcel. You can also contact the U.S. Customs and Border Protection office for additional information on what you can
                    and can’t send to the United States. You can also check our list of prohibited items here, to ensure that your items don’t fall under this category.
                </p>
                <br>
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-attractive">How much will it cost to send a package from India to the USA?</h1>
                <p class="header4 p-color-cement">Shipping to the USA starts at as little as ₹1449/- with us. By placing your order through us, you get up to 60-80% low shipping rates,
                    this means that you always pay the lowest price possible for your deliveries to the USA. Your shipment will be delivered by the best courier companies in the
                    market like DHL, DTDC, etc. You can check for the shipping cost through our shipping cost calculator.
                </p>
                <br>
                <h1 class="f-s-26 f-c-blue f-w-9">How do to shop from India and get your package delivered in the USA?</h1>
                <p class="header4 p-color-cement">To shop from your favorite Indian websites and get your package delivered at your doorstep in the USA, follow these easy steps:
                </p>
                <br>
                <ol class="header4 p-color-cement">
                    <li> Sign up at ShoppRe.com, and you will get a virtual address.
                    </li>
                    <li>Shop from your favorite online shopping portal from India and shop for everything you want from clothes, accessories,
                        footwear, bags to electronics, home appliances, mobile phones and much more.
                    </li>
                    <li>Provide the virtual address given by ShoppRe.com at the time of checking out using the COD option.
                    </li>
                    <li>We will collect your order and pay for it.
                    </li>
                    <li>Once we receive all of your order we will ship it after you request it to ship.
                    </li>
                    <li>Then we pack and ship the consolidated package at your address abroad. And you receive it within 3-6 days.
                    </li>
                </ol>
                <br>

                <h1 class="f-s-26 f-c-blue f-w-9">How to send a parcel/courier to the USA?</h1>
                <p class="header4 p-color-cement">Send courier to the USA from India with us and avail the cheapest shipping rates. To send a courier abroad, all you have to do is follow these steps:
                </p>
                <br>
                <ol class="header4 p-color-cement">
                    <li>Schedule a Pickup from ANYWHERE in India; our experts will come to your door to pick it up,
                    </li>
                    <li>We process it while you pay us the shipping cost.
                    </li>
                    <li>And, we jump through hoops to dispatch your package off to your destination in just 48 hours,
                    </li>
                    <li>One of our efficient & appropriate courier partners will get the package to its destination in just 3-6 days, ANYWHERE in the USA.
                    </li>
                </ol>
                <br>

                <h1 class="f-s-26 f-c-blue f-w-9">How to Package Your Goods to send to the USA?</h1>
                <p class="header4 p-color-cement">Your packages will be handled many times when they are loaded and off-loaded from vehicles and aircraft and
                    they may have boxes placed on top of them and experience jerk while transportation. We suggest that you ensure your items are packaged safely, here are some tips:
                </p>
                <br>
                <ul class="header4 p-color-cement">
                    <li>Always use a strong rigid box.
                    </li>
                    <li>You can use a double-lined box if the package exceeds 10 kg and a triple lined box if it exceeds 30 kg.
                    </li>
                    <li>You should wrap each item separately.
                    </li>
                    <li>Whenever you send a parcel containing fragile items, use a double-corrugated cardboard box for the outer packaging.
                    </li>
                    <li>For internal packaging, use bubble-wrap and wrap your items individually. Remember to fill any remaining space left in the box with any left-over bubble wrap, newspaper or foam.
                    </li>
                </ul>

                <br>
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-mobile">When will you receive your package?</h1>
                <p class="header4 p-color-cement">ShoppRe understands its customers and their need for urgent parcel delivery,
                    keeping that in mind we offer the fastest courier services from India to the USA that delivers within 3-6 working days.
                </p>
                <br>
                <h1 class="f-s-26 f-c-blue f-w-9" id="amzn-mobile">Where do we ship in the USA?</h1>
                <p class="header4 p-color-cement">We can ship your package in every state of the USA within 3-6 working days at your doorstep. Some of the cities where we deliver are-
                </p>
                <br>
                <div >
                    <table style="width: 100%;text-align: center;">
                        <tr>
                            <td>Alabama</td> <td>Montana</td>
                        </tr>
                        <tr>
                            <td>Alaska</td> <td>Nebraska</td>
                        </tr>
                        <tr>
                            <td>Arizona</td> <td>Nevada</td>
                        </tr>
                        <tr>
                            <td>Arkansas</td> <td>New Hampshire</td>
                        </tr>
                        <tr>
                            <td>California</td> <td>New Jersey</td>
                        </tr>
                        <tr>
                            <td>Colorado</td> <td>New Mexico</td>
                        </tr>
                        <tr>
                            <td>Connecticut</td> <td>New York</td>
                        </tr>
                        <tr>
                            <td>Delaware</td> <td>North Carolina</td>
                        </tr>
                        <tr>
                            <td>Florida</td> <td>North Dakota</td>
                        </tr>
                        <tr>
                            <td>Georgia</td> <td>Ohio</td>
                        </tr>
                        <tr>
                            <td>Hawaii</td> <td>Oklahoma</td>
                        </tr>
                        <tr>
                            <td>Idaho</td> <td>Oregon</td>
                        </tr>
                        <tr>
                            <td>Illinois</td> <td>Pennsylvania</td>
                        </tr>
                        <tr>
                            <td>Indiana</td> <td>Rhode Island</td>
                        </tr>
                        <tr>
                            <td>Iowa</td> <td>South Carolina</td>
                        </tr>
                        <tr>
                            <td>Kansas</td> <td>South Dakota</td>
                        </tr>
                        <tr>
                            <td>Kentucky</td> <td>Tennessee</td>
                        </tr>
                        <tr>
                            <td>Louisiana</td> <td>Texas</td>
                        </tr>
                        <tr>
                            <td>Maine</td> <td>Utah</td>
                        </tr>
                        <tr>
                            <td>Maryland</td> <td>Vermont</td>
                        </tr>
                        <tr>
                            <td>Massachusetts</td> <td>Virginia</td>
                        </tr>
                        <tr>
                            <td>Michigan</td> <td>Washington</td>
                        </tr>
                        <tr>
                            <td>Minnesota</td> <td>West Virginia</td>
                        </tr>
                        <tr>
                            <td>Mississippi</td> <td>Wisconsin</td>
                        </tr>
                        <tr>
                            <td>Missouri</td> <td>Wyoming</td>
                        </tr>
                    </table>
                </div>
                <br>
{{--                <div class="offerDesc">--}}
{{--                    <h4>Onam Offer: Terms & Conditions</h4>--}}
{{--                    <ul>--}}
{{--                        <li>Discount: ₹250/-</li>--}}
{{--                        <li> This offer cannot be clubbed with any other. </li>--}}
{{--                        <li>Use Coupon: ONM250 </li>--}}
{{--                        <li>The offer would only be active during 25th Aug to 25th Sep 2019 .</li>--}}
{{--                        <li>Applicable only for Onam related products</li>--}}
{{--                        <li>This offer is applicable only for international shipments.</li>--}}
{{--                        <li>The offer can only be used to pay off your shipping costs.</li>--}}
{{--                        <li>Clearance charges are applicable for shipping Special Items</li>--}}
{{--                    </ul>--}}

{{--                </div>--}}

            </div>
        </div>

    </section>

{{--    <section class="chris-benefits">--}}
{{--        <div class="container" >--}}
{{--            <center>--}}
{{--                <h1 class="f-s-26 f-c-d-greay f-w-9" id="top-indian" >Top Indian Festival Offers, Deals & Shopping Sale</h1>--}}
{{--            </center>--}}
{{--            <div class="row text-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big Shopping Days"><span><a--}}
{{--                                        href="https://ship.shoppre.com/the-biggest-season-sale-flipkart-big-shopping-days-15-may-19-may/" target="_blank">Big Shopping Days</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Freedom Sale"><span><a--}}
{{--                                        href="/amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances" target="_blank">Amazon.in Freedom Sale</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Flipstart Days"><span><a--}}
{{--                                        href="/flipstart-days-avail-best-offers-on-flipkart-enjoy-special-discounts-for-the-first-three-days-of-every-month" target="_blank">Flipkart Flipstart Days</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="National Shopping Days"><span><a--}}
{{--                                        href="/flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india" target="_blank">National Shopping Days</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Right To Fashion"><span> <a--}}
{{--                                        href="/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" target="_blank">Myntra Right To Fashion Sale</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Rakhi"><span><a--}}
{{--                                        href="/send-rakhi-gifts-online-worldwide-at-cheap-rates">Rakhi Online Shopping India</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Yoga Organic Clothing"><span><a--}}
{{--                                        href="https://ship.shoppre.com/products-on-sale-pure-organic-yoga-clothing-and-products-made-in-india/" target="_blank">Yoga Organic Clothing Sale</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a--}}
{{--                                        href="/kerala-onam-online-shopping-guide-from-india">Onam online shopping</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span><a--}}
{{--                                        href="https://ship.shoppre.com/8-gorgeously-elegant-sarees-for-every-occasion-to-flaunt-your-curves-craftsvilla-handpicked-for-you/" target="_blank">Sarees Online Shopping</a> </span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span><a--}}
{{--                                        href="https://ship.shoppre.com/6-amazing-face-moisturizer-for-women-from-india-that-you-dont-want-to-miss/" target="_blank">Face Moisturizer</a></span></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a--}}
{{--                                        href="/onam-community-shipping-offer">Onam Community Offer</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="diwali"><span><a--}}
{{--                                        href="/diwali-offer">Diwali Offer</a></span></li>--}}
{{--                            --}}{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a--}}
{{--                            --}}{{--                                        href="/new-year-offer">New Year Offer</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="shop ship"><span><a--}}
{{--                                        href="/shop-ship">Shop & Ship Offer</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="student"><span><a--}}
{{--                                        href="/university-offer">Student Special Offer</a></span></li>--}}
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="easter"><span><a--}}
{{--                                        href="/easter-shopping-from-india-with-international-shipping">Easter Offer</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br/><br/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br> <br> <br>--}}
{{--    </section>--}}

    <br><br>  <br>
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
                var package_type = 'nondoc';
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
                    $('#contact').text('For More than 70kg please contact ShoppRe');
                    $('#customer_rate').text(' ');
                }

            });
        });

    </script>
@endsection
