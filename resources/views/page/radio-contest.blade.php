@extends('layout')


@section('title', 'Radio Landing Page')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
        .ps-section {background-color: #11273b;height: 500px}
        .ps-section .container > div {padding: 20px;margin-bottom: 3em}
        .ps-section .container > div h1 {font-weight: 900;}
        .ps-section .container > #img-shopping  {padding-top: 150px}
        .ps-section .container > #img-shopping img {width: 596px;height: 365px;}
        .h-req-assist{margin-bottom: 30px}
        .product-courier span{font-weight: 900;}
        .btn-activate-coupon{height: 50px;width: 50%;border-radius: 30px;color: #fff;background-color: #e85151;transition: 0.6s;}
        .txt-caps{text-transform: uppercase}


    </style>

@endsection
@section('content')
    <section class="ps-section" id="personal-shopper">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-80 4094 4077" class="pull-right d-contact-img-desktop">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">
                </a>
                <a href="tel:+91-80 4094 4077" class="d-contact-img pull-right">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">
                </a>
            </div>
        </div>

    </section>
    <section>
        <div class="container div-lets-t-c ">
            <div class="col-md-7 col-sm-7 col-xs-12 div-iframe">
                <h2 class="header2 p-color-cement-dark"><span class="p-color-red"> ShoppRe.com</span> <br> Shop From ANY Indian Store & Ship to the UAE</h2>
                <iframe src="https://www.youtube.com/embed/q5R63gFUREk" class="video"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>

                </iframe>
            </div>
            <div class=" col-md-5 col-sm-5 col-xs-12">
                <h1 class="header2 p-color-blue h-req-assist">Radio Contest Reedem your Coupon</h1>
                <form action="" method="post " id="radio">
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
                        <div class="form-group">
                            <label>Coupon Code<span class="p-color-red">*</span></label>
                            <input type="text" name="CouponCode" class="form-control txt-caps" id="Coupon-code"
                                   placeholder="Enter Coupon Code" required>
                        </div>
                        <div class="form-group text-center">
                            <br>
                            <button type="submit" name="btnActivate" class=" btn btn-activate-coupon">Claim Coupon</button>
                        </div>
                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <div class="row">
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/request-sent.svg" alt="" >
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To start <br>using Coupon Code!</h5>
                            </center>

                        </div>
                        <div class="text-center">
                            <a href="{{route('radio.tc')}}" class="btn btn-d-signup">Terms & Conditions</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="d-contact-details-section">
        <div class="container " id="contact-support" style="padding-bottom: 30px;">
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
            <br>
            <br>
        </div>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#Coupon-code").focusout(function () {
                var coupon_code = $("input[name='CouponCode']").val();
                if (coupon_code!=="RADCON"){
                    alert("Invalid Coupon Code ",coupon_code);
                    $("#Coupon-code").val("");
                }
            });

            $("#radio").validate({
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
                    var coupon_code = $("input[name='CouponCode']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'api/diwali-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            name: name,
                            contact_no: contact_no,
                            coupon_code:coupon_code,
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



