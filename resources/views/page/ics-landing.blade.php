@extends('layout')

@section('title', 'ICS Landing Page')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
        .bg-ics-landing-page .container > div {
            padding: 20px;
            margin-bottom: 3em
        }

        .d-header-text {
            font-size: 40px;
            font-weight: 900
        }

        .d-header-text1 {
            font-family: Montserrat -Italic;
            font-style: italic;
            line-height: 26px;
            margin-top: 25px
        }

        .box-steps p {
            line-height: 1;
        }

        .box-steps p span {
            font-size: 22px;
            font-weight: 900;
        }
    </style>

@endsection
@section('content')

    <section class="bg-ics-landing-page">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-80 4094 4077" class="pull-right d-contact-img-desktop">
                    <img src="{{asset('img/images/d-contact-img1.png')}}" alt="">
                </a>
                <a href="tel:+91-80 4094 4077" class="d-contact-img pull-right">
                    <img src="{{asset('img/images/d-contact-img2.png')}}" alt="">
                </a>
            </div>

            <div class="col-sm-7 col-xs-12">
                <h1 class="p-color-white header-spacing d-header-text">International Courier
                    <br></h1>
                <h1 class="header1 p-color-white header-spacing">Starting @₹695/-</h1>

                <p class="p-color-white header5 d-header-text1">Want
                    to courier something abroad from India?<br>
                    We ship to 265 countries & our trusted courier partners DHL,<br> DTDC & more help us sail smooth
                    all the way to your<br> destination, wherever it is</p>
                {{--<div class="col-md-8 div-ics-coupon-parent">--}}
                {{--<h3 class="header4 p-color-red text-center">Diwali Offer Running</h3>--}}
                {{--<div class="col-md-12 col-xs-12 div-ics-coupon">--}}
                {{--<div class="col-md-3 col-xs-3">--}}
                {{--<h3 class="header4 p-color-cement">COUPON: <br>CODE:</h3>--}}
                {{--</div>--}}
                {{--<div class="col-md-8 col-xs-8">--}}
                {{--<h1 class="coupan-code">DIWL15</h1>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 50px">
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame div-form-get-quote" id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        <div class="form-group">
                            <label>Full Name <span class="p-color-red">*</span></label>
                            <input type="text" name="Name" class="form-control"
                                   placeholder="Enter Here" required>
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
                            <button type="submit" name="btnActivate" class="btn btn-d-activate-coupon"> GET A FREE ESTIMATE
                            </button>
                        </div>
                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <h1 class="header2 p-color-blue">Get a Quote</h1>
                        <div class="row">
                            <center>
                                <img src="{{asset('img/svg/request-sent.svg')}}" alt="">
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To start <br>scheduling your
                                    courier</h5>
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
        <div class="container no-padding div-ics-border-btm">

            <center>
                <h1 class="header1 p-color-cement-dark" >
                    We ship all over the world -To the USA, UAE, UK, Europe, Australia, New Zealand, Canada, Middle East & 200 other
                    countries.
                </h1>
            </center>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="{{asset('img/images/ics-box-packing.png')}}" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 " style="padding-top: 50px">
                <div class="row no-padding">
                    <center>
                        <h1 class="header1 p-color-cement-dark">What You Can Get Us to Courier?</h1>
                        <p class="header6 p-color-cement">From Kids’ toys to commercial equipment, we are well-prepared to ship anything under the sun,
                            that follow the international & country-specific shipping regulations. These are some of the goods that we frequently ship for our customers </p>
                    </center>
                </div>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt="">Medicine</li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt=""> Documents</li>
                            {{--<li><img src="{{asset('img/svg/Ellipse.svg')}}" alt=""> Personal goods</li>--}}
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt=""> Sports Equipment</li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt=""> Homemade foods</li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt=""> Artwork</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul style="text-decoration: none; list-style: none">
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt="">Corporate Gifts</li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt="">Children's Toys</li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt="">Handicraft </li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt="">Mobile/Cell Phones</li>
                            <li><img src="{{asset('img/svg/Ellipse.svg')}}" alt="">Religious Items</li>
                            <li>& Many More Products</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container div-ics-border-btm ">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">Features</h1>
                    <p class="header2 p-color-cement">Get a FREE estimate for your courier, and schedule a pickup with us. We’ll come to your doorsteps to pick it up within 48 hours, and will dispatch it within the next 24 hours.Our courier partners are known to reach your destination in 3-6 days, wherever in the world it is!’</p>
                </center>
            </div>
            <br>
            <br>
            <br>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-3">
                    <div class="panel "><br>
                        <img src="{{asset('img/svg/d-step3.svg')}}" style="height: 70px" alt="">
                        <h1 class="header5 p-color-cement">Door-to-Door Delivery</h1>
                        <br/>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ">
                        <br>
                        <img src="{{asset('img/svg/save80.svg')}}" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">Country-specific Discount</h1>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="{{asset('img/svg/support24.svg')}}" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24/7 Support</h1>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="{{asset('img/svg/ics-time.svg')}}" alt="">
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
                            <p class="header8 p-color-cement"><span id="number1">1</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive img-process" src="{{asset('img/svg/pic_up.svg')}}">
                            <h2 class="header3 p-color-cement-dark">Pickup Package</h2>
                            <p class="header5 p-color-cement">
                                Purchase any product from your favourite indian
                                online store and use your locker address for item
                                delivery
                            </p>
                        </center>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box2">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number2">2</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive  img-process" src="{{asset('img/svg/shipments.svg')}}">
                            <h2 class="header3 p-color-cement-dark">Shipments</h2>
                            <p class="header5 p-color-cement">
                                Purchase any product from your favourite indian
                                online store and use your locker address for item
                                delivery
                            </p>
                        </center>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box3">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number3">3</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-process" src="{{asset('img/svg/deliver_package.svg')}}">
                            <h2 class="header3 p-color-cement-dark">Deliver Package</h2>
                            <p class="header5 p-color-cement">
                                Purchase any product from your favourite indian
                                online store and use your locker address for item
                                delivery
                            </p>
                        </center>

                    </div>
                </div>
                <center>
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-request">Request Pickup</a>
                </center>
            </div>
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
                <p class="header2 p-color-cement"><span
                        class="header2 p-color-blue"> Start your FREE 30 Day Trial</span>
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


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    <a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#ics_lp").validate({
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
@endsection


