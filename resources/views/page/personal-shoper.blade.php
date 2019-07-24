@extends('layout')


@section('title', 'Assisted Purchase for You | Personal Shopper in India | Ship to USA')
@section('description', 'Payment hassles at checkout? No worries. Hire one of our experts to shop for you. We will pay for your order and will receive your order at our warehouse.')
@section('keywords', 'shop online from india, self shopping, assisted purchase usa, personal shopper, international shipping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/personal-shopper-india" />
    <style>
        .ps-section{background-color:#11273b;height:1000px}.ps-section .container>div{padding:20px;margin-bottom:0}.ps-section .container>div h1{font-weight:900}.ps-section .container>#img-shopping{padding-top:158px}.ps-section .container>#img-shopping img{width:596px;height:365px}.h-req-assist{margin-bottom:30px}.product-courier span{font-weight:900}@media only screen and (max-width:600px){.ps-section .container>div{padding:10px;margin-bottom:0}}
    </style>

@endsection
@section('content')
    <section class="ps-section" id="personal-shopper">
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
                    <img class="img " src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/international-credit-card-shopping.svg"
                         alt="international credit card shopping">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Store does't accept your <br> International card/Debit
                        Card?
                    </h4>
                </div>


                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/indian-phone-number.svg" alt="indian number">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian phone number
                        to <br> verify your order?
                    </h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/indian-address-shopping.svg"
                         alt="indian address for shopping">

                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian address?
                    </h4>
                </div>
                <div class="col-sm-12 col-xs-12 no-padding" id="img-shopping-mobile">
                    <img class="img-responsive " src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/image06_v2.png">
                </div>
                {{--</div>--}}
                <div class="col-md-12 col-xs-12 div-btn-padding">
                    <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20ShoppRe%20Team,%20%20I%27m%20looking%20for%20Assisted%20Purchase%20Service" style="color:white" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 no-padding " id="img-shopping" >
                <img class=" " src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/psp.png"
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
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    <span class="p-color-cement-dark">We’ll Pay For You:</span> You can place your order on your own,
                    and get
                    it delivered to us; we’ll pay for it on your behalf.International Credit card / Paypal.

                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    <span class="p-color-cement-dark"> We’ll Shop For You:</span> All you have to do is, let us know
                    what you intend to buy; we’ll make the purchase for you.
                </p>
                <div class="col-md-12 col-xs-12 div-btn-padding" style="margin-top: 15px;">
                    <center>
                    <a href="https://www.shoppre.com/personal-shopper" target="_blank">
                        <div class="btn header6 btn-ifs-l-assisted">
                            Shop For Me
                        </div>
                    </a>
                    </center>
                </div>
            </div>


            <div class="col-xs-4 col-md-4 no-pad">
                <iframe style="height:300px;margin-top:10px;" class="vid-h-w col-md-12 col-sm-12" id="video"  src="https://www.youtube.com/embed/q5R63gFUREk" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                {{--<h4 class="f-s-16 f-c-l-gray txt-a-c">One-stop Solution For All your Shopping & Shipping Needs from India | ShoppRe.com</h4>--}}
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
                            <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/shop-product.svg" alt="">
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
                        <p class="header6 p-color-cement">Copy the links of the products which you opted for Cash on delivery and them on Shoppre
                            order form and Make payment to us.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br>
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step 3</span>
                        <h1 class="header5 p-color-cement">COD, Pay & Receive</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            We will pay for your order and will receive it at our warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel"><br>
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/save80.svg" style="height: 70px" alt="">
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
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/d-step3.svg" style="height: 70px" alt="">
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
                            <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/shop-product.svg" alt="">
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
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/pay-receive.svg" alt="">
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
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/save80.svg" style="height: 70px" alt="">
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
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/d-step3.svg" style="height: 70px" alt="">
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

    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                            <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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



