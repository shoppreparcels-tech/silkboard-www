@extends('layout')


@section('title', 'Assisted Purchase for You | Personal Shopper in India | Ship to USA')
@section('description', 'Payment hassles at checkout? No worries. Hire one of our experts to shop for you. We will pay for your order and will receive your order at our warehouse.')
@section('keywords', 'shop online from india, self shopping, assisted purchase usa, personal shopper, international shipping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/personal-shopper-india" />

    <meta property="og:title" content="ShoppRe -  Assisted Purchase"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/personal-shopper-india"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/psp.png')}}"/>
    <meta property="og:image:alt" content="ShoppRe Shopping Assistance" />
    <meta property="og:description" content="All you have to do is, let us know what you are intending to buy, and we'll buy it for you & ship to your country."/>
    <meta property="og:site_name" content="ShoppRe"/>

    <style>
        .ps-section{background-color:#11273b;height:1000px}.ps-section .container>div{padding:20px;margin-bottom:0}.ps-section .container>div h1{font-weight:900}.ps-section .container>#img-shopping{padding-top:158px}.ps-section .container>#img-shopping img{width:596px;height:365px}.h-req-assist{margin-bottom:30px}.product-courier span{font-weight:900}@media only screen and (max-width:600px){.ps-section .container>div{padding:10px;margin-bottom:0}}
    </style>

@endsection


@section('content')
    <section class="ps-section" id="personal-shopper">
        <div class="modal fade" id="terms" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="panel">
                            <div class="panel-heading">
                                <h5 class="text-success text-center text-u-l">Terms & Conditions For Personal Shopper</h5><br>
                                <ol>
                                    <p><span class="font-bold">1.&nbsp;</span><span>The entire payment, which includes the cost of the order + the Personal Shopper service cost, needs to be cleared BEFORE Shoppre makes the purchase for you.</span>
                                        <span>The Personal Shopper service cost is non-refundable for a successfully placed order, irrespective of whether the order is edited/cancelled at a later stage.</span>
                                        <span>However, the rest of the amount shall be credited to ShoppRe wallet within 24 hours in such a case.</span></p><br>
                                    <p><span class="font-bold">2.&nbsp;</span><span>We accept payment through netbanking/credit card/Paypal/Paytm/wire transfer.</span></p><br>
                                    <p><span class="font-bold">3.&nbsp;</span><span>All Personal Shopper orders will be delivered to your ShoppRe shipping address.</span></p><br>
                                    <p><span class="font-bold">4.&nbsp;</span><span>The Personal Shopper order can be edited or cancelled before you make the payment to ShoppRe. You can also cancel your order post the payment, provided we haven’t already made the purchase on your behalf.</span>
                                        <span>The money will be credited to your ShoppRe wallet within 24 hours, which can then be used for your future ShoppRe orders.</span></p><br>
                                    <p><span class="font-bold">5.&nbsp;</span><span>To edit or cancel your order pre-payment, click on Personal Shopper > Order Form.</span></p><br>
                                    <p><span class="font-bold">6.&nbsp;</span><span>To cancel your order post-payment, access your Order History to view the list of your recent orders. If we haven’t processed the purchase on your behalf, the option to Cancel will be available</span></p><br>
                                    <p><span class="font-bold">7.&nbsp;</span><span>An e-mail notification shall be sent out to you once your order reaches your Shoppre address. You can also request for any additional photographs of the package for an additional cost.</span></p><br>
                                    <p><span class="font-bold">8.&nbsp;</span><span>ShoppRe reserves the right to make any additions/changes in these terms and conditions at any given point of time. Keep checking this page for updates.</span></p>
                                    <p><span class="font-bold">9.&nbsp;</span><span>There is No return policy or Cancellation for Assisted Purchase order from ShoppRe.Because most of the indian online store dont have Return policy service.</span>
                                        <span>Assisted Purchase Cancellation is not allowed, not unless we received damage or incorrect item.</span></p><br>
                                    <p><span class="font-bold">10.&nbsp;</span><span>For Self Purchase the Return or Cancellation Charges for each item will be INR 400.</span></p><br>
                                    <p><span class="font-bold">11.&nbsp;</span><span>We are in no way responsible for the genuineness of the e-commerce website from which customers requests us to buy. The onus to choose the right vendor lies on the customer.</span></p><br>
                                    <p><span class="font-bold">12.&nbsp;</span><span>We do not take responsibility if the item is fake/not up to the expectation of the customer/or if the item differs from the image shown in the e-commerce portal.</span></p><br>
                                    <p><span class="font-bold">13.&nbsp;</span>In an exceptional situation(item damaged/incorrect item/item not received etc), where we are forced to return the item to the e-commerce vendor,<span></span>
                                        <span>we will follow the return policy as per the e-commerce vendor. In case the vendor do not have a refund policy, we would not be able to return the same.</span>
                                        <span>In case the return policy exists, the refund would be initiated once we receive the refund from the e-commerce portal. This may take from 7 days to 3 months.</span></p><br>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background: darkgoldenrod;color: black;">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container heading-section">

        </div>
        <div class="container">
            <div class="col-md-8 col-xs-12 div-align-items-l">
                <h1 class="f-s-36 f-c-white">
                    Shop From India, Ship Worldwide
                </h1>
            </div>
        </div>

        <div class="container">
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                <h1 class="header2 p-color-white">Personal Shopper (Assisted Purchase)</h1>
                <h3 class="header4 p-color-cement">Payment hassles at checkout? No worries! Hire one of our experts
                    to shop for you! </h3>

                {{--<div class="row">--}}
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img " src="{{env('AWS_CLOUD_FRONT')}}/img/svg/international-credit-card-shopping.svg"
                         alt="international credit card shopping">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Store does't accept your <br> International card/Debit
                        Card?
                    </h4>
                </div>


                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indian-phone-number.svg" alt="indian number">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian phone number
                        to <br> verify your order?
                    </h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indian-address-shopping.svg"
                         alt="indian address for shopping">

                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian address?
                    </h4>
                </div>
                <div class="col-sm-12 col-xs-12 no-padding" id="img-shopping-mobile">
                    <img class="img-responsive " src="{{env('AWS_CLOUD_FRONT')}}/img/images/image06_v2.png">
                </div>
                {{--</div>--}}
                <div class="col-md-12 col-xs-12 div-btn-padding">
                    <a href="http://bit.ly/ps-lp-8403" style="color:white" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 no-padding " id="img-shopping" >
                <img class=" " src="{{env('AWS_CLOUD_FRONT')}}/img/images/psp.png"
                     alt="personal shopper service in india">
            </div>
        </div>
    </section>
    <section>
        <div class="container div-lets-ps">
            <div class="col-md-7 col-sm-7 col-xs-12 ">
                <h2 class="header2 p-color-cement-dark">Let <span class="p-color-red">ShoppRe</span> <br> Do the
                    Shopping for you!</h2>
                <p class="header5 p-color-cement">
                    If you are overseas and want to shop from India, occasionally you would have to go
                    through some hassles in the process. Either your international cards won't be
                    accepted or order won't go through on account of you not having Indian credentials mostly.</p>
                <P class="header5 p-color-cement">This is where our Personal Shopper comes in to play. All you have to
                    do is, let us know what you are intending to buy, and we'll buy it for you!</P>
                <br>
                <h5 class="header5 p-color-cement-dark">How Does a Personal Shopper Help?</h5>
                <p class="header5 p-color-cement">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/dot.svg" alt="">
                    <span class="p-color-cement-dark">We’ll Pay For You:</span> You can place your order on your own,
                    and get
                    it delivered to us; we’ll pay for it on your behalf.International Credit card / Paypal.

                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/dot.svg" alt="">
                    <span class="p-color-cement-dark"> We’ll Shop For You:</span> All you have to do is, let us know
                    what you intend to buy; we’ll make the purchase for you.
                </p>
                <br>
                <p>
                    <button type="button" class="call-btn" style="height: 25px; border-radius: 0px; background-color: orange;">Terms & Conditions</button>
                </p>
            </div>


            <div class="col-xs-4 col-md-4 no-pad">
                <iframe style="height:300px;margin-top:10px;" class="vid-h-w col-md-12 col-sm-12" id="video"  src="https://www.youtube.com/embed/q5R63gFUREk" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                {{--<h4 class="f-s-16 f-c-l-gray txt-a-c">One-stop Solution For All your Shopping & Shipping Needs from India | ShoppRe.com</h4>--}}
            </div>
            <div class="col-md-12 col-xs-12 div-btn-padding margin-b-15" >
                <center>
                    <a href="http://bit.ly/vidya-shoppre" target="_blank">
                        <div class="btn header6 btn-get-assisted p-color-white" style="background-color: #4285f4!important">
                            👉 Know More (How it Works)
                        </div>
                    </a>
                </center>
            </div>

        </div>
    </section>

    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">Self Shopping</span> Work?
                    </h1>
                    <h3 class="f-s-1 f-c-blue">Service Charges: 10%</h3>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/>
                <div class="col-sm-3">
                    <div class="panel">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step 1</span>
                            <h1 class="header5 p-color-cement">Shop Products</h1>
                            <br>
                            <p class="header6 p-color-cement ">
                                Purchase products from any Indian online store such as Amazon.in, Flipkart or Myntra; and
                                Choose Cash on Delivery as the Payment Option.
                            </p>

                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/form-fill-up.png" alt="" style="height: 65px;">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Fill up Shoppre Order Form</h1>
                        <br>
                        <p class="header6 p-color-cement">Copy the links of the products which you opted for Cash on delivery and paste them on Shoppre
                            order form.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step 3</span>
                        <h1 class="header5 p-color-cement">Make Payment to Us</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            We will pay for your order which you have set for
                            Cash on Delivery&will receive it at ShoppRe warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Make a Ship Request</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Save upto 80% in shipping cost as we provide 20 days free Locker facility, and repack & ship them to your doorstep as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 5</span>
                        <br>
                        <h1 class="header5 p-color-cement">You Pay, We'll Dispatch</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Once we've confirmed your payment, your order will be dispatched &
                            be on its way to you (taking just 3-6 days)!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="/personal-shopper">Pay For Me !</a>
            </center>
            <br/><br/>
        </div>

        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">Assisted Shopping</span>
                        Work?</h1>
                    <h3 class="f-s-1 f-c-blue">Service Charges: 07%</h3>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/>
                <div class="col-sm-3">
                    <div class="panel">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue" >Step 1</span>
                            <h1 class="header5 p-color-cement">Search Products</h1>
                            <br>
                            <p class="p-color-cement header6">
                                Search products from any Indian online store such as Amazon.in, Flipkart or Myntra.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/form-fill-up.png" alt="" style="height: 65px;">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Fill up Shoppre Order Form</h1>
                        <br>
                        <p class="header6 p-color-cement">Copy the links of the products you
                            want to purchase and paste them on shoppre order form and Make payment to us.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 3</span>
                        <h1 class="header5 p-color-cement">We Do The Shopping</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Once you submit the order form,we'll make the purchase on your behalf.Any difference in the total cost
                            will be settled at the end reflected in your Shoppre Account
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Make a Ship Request</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Once you're done shopping; make a Ship Request. We'll consolidate your packages into one shipment;
                            cutting the shipping costs down by 80%.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 5</span>
                        <br>
                        <h1 class="header5 p-color-cement">You Pay, We'll Dispatch</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Once we've confirmed your payment, your order will be dispatched &
                            be on its way to you (taking just 3-6 days)!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="/personal-shopper" target="_blank">Shop For Me !</a>
            </center>
            <br/><br/>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header3 p-color-cement-dark font-weight-900" >Top Indian Festival Offers, Deals & Sale</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big Shopping Days"><span><a
                                        href="https://ship.shoppre.com/the-biggest-season-sale-flipkart-big-shopping-days-15-may-19-may/" target="_blank">Big Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Freedom Sale"><span><a
                                        href="/amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances" target="_blank">Amazon.in Freedom Sale</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Flipstart Days"><span><a
                                        href="https://ship.shoppre.com/online-shopping-flipkart-flipstart-days-2019-offers-fashion-beauty-headphones-laptops-power-banks-mobile-cases/" target="_blank">Flipkart Flipstart Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="National Shopping Days"><span><a
                                        href="/flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india" target="_blank">National Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Right To Fashion"><span> <a
                                        href="/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" target="_blank">Myntra Right To Fashion Sale</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Rakhi"><span><a
                                        href="/send-rakhi-gifts-online-worldwide-at-cheap-rates">Rakhi Online Shopping India</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Yoga Organic Clothing"><span><a
                                        href="https://ship.shoppre.com/products-on-sale-pure-organic-yoga-clothing-and-products-made-in-india/" target="_blank">Yoga Organic Clothing Sale</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/kerala-onam-online-shopping-guide-from-india">Onam online shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span><a
                                        href="https://ship.shoppre.com/8-gorgeously-elegant-sarees-for-every-occasion-to-flaunt-your-curves-craftsvilla-handpicked-for-you/" target="_blank">Sarees Online Shopping</a> </span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span><a
                                        href="https://ship.shoppre.com/cheap-and-best-hand-painted-art-paintings-to-ship-from-india-ship-internationally/" target="_blank">Hand-Painted Art Paintings</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/onam-community-shipping-offer">Onam Community Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="diwali"><span><a
                                        href="/diwali-offer">Diwali Offer</a></span></li>
                            {{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a--}}
                            {{--                                        href="/new-year-offer">New Year Offer</a></span></li>--}}
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="shop ship"><span><a
                                        href="/shop-ship">Shop & Ship Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="student"><span><a
                                        href="/university-offer">Student Special Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="easter"><span><a
                                        href="/easter-shopping-from-india-with-international-shipping">Easter Offer</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <br> <br>
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
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

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


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align p-color-yellow">
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
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            let urlParams = new URLSearchParams(location.search);
            const popup= urlParams.has('popup');

            if(popup) {
                $('#terms').modal('show');
            }
            $(function () {
            $.fn.myFunction = function(){
                $('#terms').modal('show');
            };

            $(".call-btn").click(function(){
                $.fn.myFunction();
            });
        });
        });

    </script>
@endsection

