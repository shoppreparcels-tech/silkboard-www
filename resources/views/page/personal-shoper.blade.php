@extends('layout')


@section('title', 'Personal Shopper Landing Page')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
        .ps-section {
            background-color: #11273b;
            height: 1000px
        }

        .ps-section .container > div {
            padding: 20px;
            margin-bottom: 3em
        }

        .ps-section .container > div h1 {
            font-weight: 900;
        }
        .ps-section .container > #img-shopping  {
            padding-top: 150px
        }
        .ps-section .container > #img-shopping img {
            width: 596px;height: 365px;
        }
        .h-req-assist{
            margin-bottom: 30px
        }
        .product-courier span{
            font-weight: 900;
        }

    </style>

@endsection
@section('content')
    <section class="ps-section" id="personal-shopper">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-80 4094 4077" class="pull-right d-contact-img-desktop">
                    <img src="{{asset('img/images/d-contact-img1.png')}}" alt="">
                </a>
                <a href="tel:+91-80 4094 4077" class="d-contact-img pull-right">
                    <img src="{{asset('img/images/d-contact-img2.png')}}" alt="">
                </a>
            </div>
        </div>

        <div class="container">
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                <h1 class="header2 p-color-white">Personal Shopper</h1>
                <h3 class="header4 p-color-cement">Payment hassles at checkout? No worries! Hire one of our experts
                    to shop for you! </h3>

                {{--<div class="row">--}}
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img " src="{{asset('img/svg/international-credit-card-shopping.svg')}}"
                         alt="international credit card shopping">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Store does't accept your <br> International card/Debit
                        Card?
                    </h4>
                </div>


                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{asset('img/svg/indian-phone-number.svg')}}" alt="indian number">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian phone number
                        to <br> verify your order?
                    </h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{asset('img/svg/indian-address-shopping.svg')}}"
                         alt="indian address for shopping">

                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian address?
                    </h4>
                </div>
                <div class="col-sm-12 col-xs-12 no-padding" id="img-shopping-mobile">
                    <img class="img-responsive " src="{{asset('img/images/image06_v2.png')}}">
                </div>
                {{--</div>--}}
                <div class="col-md-12 col-xs-12 div-btn-padding">
                    <a href="https://myaccount.shoppre.com/personal-shopper">
                        <div class="btn header6 btn-ifs-l-assisted">
                            Ask For Assistance
                        </div>
                    </a>

                </div>

            </div>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 no-padding " id="img-shopping" >
                <img class=" " src="{{asset('img/images/psp.png')}}"
                     alt="personal shopper service in india">
            </div>
        </div>
    </section>
    <section>
        <div class="container div-lets-ps">
            <div class="col-md-7 col-sm-7 col-xs-12 ">
                <p>
                    <a class="bla-1" href="https://www.youtube.com/watch?v=q5R63gFUREk">
                        <img src="{{asset('img/svg/btn.svg')}}" style="height: 30px">
                    </a>

                </p>
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
                    <img src="{{asset('img/svg/dot.svg')}}" alt="">
                    <span class="p-color-cement-dark">We’ll Pay For You:</span> You can place your order on your own,
                    and get
                    it delivered to us; we’ll pay for it on your behalf.International Credit card / Paypal.

                </p>
                <p class="header5 p-color-cement">
                    <img src="{{asset('img/svg/dot.svg')}}" alt="">
                    <span class="p-color-cement-dark"> We’ll Shop For You:</span> All you have to do is, let us know
                    what you intend to buy; we’ll make the purchase for you.

                </p>
                <div class="col-md-12 col-xs-12 no-padding ">
                    <a href="#">How much does it cost you?</a>
                </div>
                <br>
                <div class="col-md-12 col-xs-12 no-padding  ">
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
            <div class=" col-md-5 col-sm-5 col-xs-12">
                <h1 class="header2 p-color-blue h-req-assist">Request Free Assistance</h1>
                <form action="" method="post " id="personal_shopper">
                    {{csrf_field()}}
                    <div class="formFrame div-form-get-quote" id="diwali-couponcode1">
                        <div class="form-group">
                            <label>Full Name <span class="p-color-red">*</span></label>
                            <input type="text" name="Name" class="form-control"
                                   placeholder="Enter the Name Here" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number<span class="p-color-red">*</span></label>
                            <input type="text" name="ContactNumber" class="form-control"
                                   placeholder="Enter a Valid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label>E-Mail ID<span class="p-color-red">*</span></label>
                            <input type="email" name="email" class="form-control"
                                   placeholder="Enter a valid E-mail ID" required>
                        </div>
                        <div class="form-group text-center">
                            <br>
                            <button type="submit" name="btnActivate" class="btn">Request Assistance</button>
                        </div>
                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <div class="row">
                            <center>
                                <img src="{{asset('img/svg/request-sent.svg')}}" alt="" >
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To start <br>using Personal
                                    Shopper!</h5>
                            </center>

                        </div>
                        <div class="text-center">
                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-d-signup">Sign
                                Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">Self Shopping</span> Work?
                    </h1>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <center>
                            <br/>
                            <img src="{{asset('img/svg/shop-product.svg')}}" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step1</span>
                            <h1 class="header5 p-color-cement">Shop Products</h1>
                            <br>
                            <p class="p-color-cement header5">
                                Purchase products from any Indian online store such as Amazon.in, Flipkart & Myntra;
                                and. Set Cash on Delivery
                            </p>

                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br/>
                        <img src="{{asset('img/svg/pay-receive.svg')}}" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Pay & Receive</h1>
                        <br>
                        <p class="header6 p-color-cement">We will pay for your order and will receive your order at our
                            warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br>
                        <img src="{{asset('img/svg/save80.svg')}}" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step3</span>
                        <h1 class="header5 p-color-cement">Ship in @ 80%
                            Less Cost</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Save up to 80% in shipping costs as we wait around for 20 days for all your purchases to
                            reach us - for FREE, and repackage & ship them to your doorsteps as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{asset('img/svg/d-step3.svg')}}" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Unbox Your
                            Package</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            We'll dispatch your shipment within 24 hours of you making a request to ship, and it will
                            reach you safe & sound within 3-6 days, no matter wherever in the world you are!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="">Place Your Order Now!</a>
            </center>
            <br/><br/>
        </div>

        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">Assisted Shopping</span>
                        Work?</h1>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <center>
                            <br/>
                            <img src="{{asset('img/svg/shop-product.svg')}}" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue" >Step1</span>
                            <h1 class="header5 p-color-cement">Copy Your Cart</h1>
                            <br>
                            <p class="p-color-cement header5">
                                Copy the links of the products you want to purchase from any Indian online store such as
                                Amazon.in,
                                Flipkart & Myntra; and Paste them over here in the order form on our website.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br/>
                        <img src="{{asset('img/svg/pay-receive.svg')}}" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step2</span>
                        <br>
                        <h1 class="header5 p-color-cement">We Do The Shopping</h1>
                        <br>
                        <p class="header6 p-color-cement">Once you submit the order form, we'll make the purchase on
                            your behalf.
                            Any difference in the total cost will be settled at the end and reflected in your ShoppRe
                            Account.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br>
                        <img src="{{asset('img/svg/save80.svg')}}" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step3</span>
                        <h1 class="header5 p-color-cement">Ship in @ 80%
                            Less Cost</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Save up to 80% in shipping costs as we wait around for 20 days for all your purchases to
                            reach us - for FREE, and repackage & ship them to your doorsteps as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{asset('img/svg/d-step3.svg')}}" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Unbox Your
                            Package</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            We'll dispatch your shipment within 24 hours of you making a request to ship,
                            and it will reach you safe & sound within 3-6 days, no matter wherever in the world
                            you are!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="">Place Your Order Now!</a>
            </center>
            <br/><br/>
        </div>

    </section>

    <section style="margin-bottom: 50px">
        <div class="container" style="margin-top: 62px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{asset('img/images/ics-tailor.png')}}">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="header1  p-color-cement-dark">Are you a Seller? <br>
                    Save more on shipping.</h1>
                <p class="header2 p-color-cement"><span class="header2 p-color-blue"> Start your FREE 30 Day Trial</span>
                    to know how much you can save monthly on regular shipping</p>
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
    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{asset('img/svg/phone.svg')}}" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    <a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#"
                       class="header2 p-color-white">Chat Now</a>
                    <a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"
                       target="_blank" class="header2 p-color-white">Chat Now</a>

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
                            <img src="{{asset('img/svg/phone.svg')}}" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{asset('img/svg/phone.svg')}}" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align p-color-yellow">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#personal_shopper").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    debugger;
                    var email = $("input[name='email']").val();
                    var name = $("input[name='Name']").val();
                    var contact_no = $("input[name='ContactNumber']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'api/diwali-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            name: name,
                            contact_no: contact_no,
                        },
                        success: function (data) {
                            console.log(data);
                            $('#diwali-couponcode1').hide();
                            // $('#diwali-couponcode2').css('display','block');
                            $('#diwali-couponcode2').slideDown();
                        }
                    })
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $("#ics-box2").hover(function () {
                $("#ics-box2").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box1").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number2').css({"color": "red"})
                $('#number1').css({"color": "#677582"})
            }, function () {
                $("#ics-box1").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box2").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number1').css({"color": "red"})
                $('#number2').css({"color": "#677582"})

            });
            $("#ics-box3").hover(function () {
                $("#ics-box3").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box1").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number3').css({"color": "red"})
                $('#number1').css({"color": "#677582"})
            }, function () {
                $("#ics-box1").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box3").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number1').css({"color": "red"})
                $('#number3').css({"color": "#677582"})

            });

        });
    </script>
@endsection



