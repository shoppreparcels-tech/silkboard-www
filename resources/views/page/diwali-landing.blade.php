@extends('layout')


@section('title', 'Diwali 2018 Offer')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>

    </style>

@endsection
@section('content')

    <section class="bg-diwali-landing-page">
        <div class="container">
            <div class="col-md-12" style="padding:20px;margin-bottom: 3em">
                <a href="tel:+91-80 4094 4077" class="pull-right d-contact-img-desktop">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">
                </a>
                <a href="tel:+91-80 4094 4077" class="d-contact-img pull-right">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">
                </a>
            </div>

            <div class="col-sm-7 col-xs-12">
                <h1 class="header1 p-color-white header-spacing">SAVE UPTO
                    <span class="p-color-yellow">80%</span></h1>
                <h1 class="p-color-white header-spacing header-landing-page">Shop From India,<br/>Ship
                    Worldwide</h1>
                <h1 class="header1 p-color-white header-spacing">Starting from
                    <span class="p-color-yellow">₹549/-</span>
                    <span class="offerprice">690/-</span>
                </h1>
                <div class="col-md-7 col-xs-12 div-diwali-coupon">
                    <div class="col-md-3 col-xs-3">
                        <h3 class="header4 p-color-white">COUPON: <br>CODE:</h3>
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <h1 class="coupan-code">DIWL15</h1>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 diwali-form-img">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/diwali-banner.png" alt="" class="diwali-offer-img img-responsive" >
                <form action=""  method="post" id="diwali_coupon">
                    {{csrf_field()}}
                    <div class="formFrame" id="diwali-couponcode1">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="Name" class="form-control"
                                   placeholder="Enter the Name Here" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="ContactNumber" class="form-control"
                                   placeholder="Enter a Valid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label>E-Mail ID</label>
                            <input type="email" name="email" class="form-control"
                                   placeholder="Enter a valid E-mail ID" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="btnActivate" class="btn btn-d-activate-coupon"> Activate Coupon</button>
                        </div>
                    </div>

                    <div class="formFrame" id="diwali-couponcode2">
                        <div class="">
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-congratulation.png" alt="" style="width: 100%">
                        </div>
                        <div class="">
                            <center>
                                <h6 class="header5 p-color-blue">Congratulations!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To Use <br>Your Coupon!</h5>
                            </center>
                        </div>
                        <div class="text-center">
                            <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register class="btn btn-d-signup">Sign Up</a>
                            {{--<button type="submit" name="btnActivate" class="btn btn-shoppre">Sign Up</button>--}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section >
        <div class=" container shopContainer no-padding">
            <label class="shop">Shop from 1000+ Indian online stores ‘Including</label>
            <div class="row" style="padding-right:10px;padding-left: 30px">
                <center>
                    <div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">
                        <center class="d-online-stores">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>
                        </center>

                    </div>
                    <div class="col-md-1  d-stores-box col-xs-6">
                        <center class="d-online-stores">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>
                        </center>
                    </div>
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1.png"
                                 alt="Jabong"/>
                        </center>
                    </div>
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="SnapDeal"/>
                        </center>
                    </div>
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <img class="shoppingKart"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>
                        </center>
                    </div>

                </center>
            </div>
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                    class="startsValidValue"> 7th Aug 2018</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 15th Aug 2018</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                    class="startsValidValue"> DIWL15</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 offer-description">
                <h5 class="header5 p-color-cement">OFFER DESCRIPTION:</h5> <br>
                <h4 class="header4 p-color-cement"> Our Grand Diwali Offer Is Here! Hurry Up &
                    Take Advantage!</h4>
                <br>
                <p class="header4 p-color-cement">While Indians around the world, not just in
                    the country; are gearing up to celebrate the holy
                    season of light taking over the darkness, we have a rather cool offer in store for you to
                    get yourself and your loved ones ready for the celebrations.</p>
                <br>
                <p class="header4 p-color-cement">We offer 15% OFF the shipping costs of
                    international shipments for up to Rs.300, which you
                    can avail by using the Coupon Code DIWL15 when you checkout. Consider it a little something
                    from us for this Diwali and don’t hesitate to shop around for Indian ethnic wear or send
                    your greetings off to your loved ones abroad.</p> <br>

                <div class="offerDesc">
                    <h5> What Else Do You Get Out of Our Offer? </h5><br>
                    <ul>
                        <li>Store your goods here at our facility for 20 days for FREE! </li>
                        <li>Get online Support 24/7</li>
                        <li>Get up to 80% OFF in shipping costs on top of the seasonal offer</li>
                        <li>A quick delivery within 3-6 days!”</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fafafb; margin-top: 10px">
        <div class="container" style="padding-top: 30px;">
            <center>
                <h1 class="header1 p-color-cement-dark">How it Works</h1>
            </center>
            <br>
            <div class="row text-center">
                <br/><br/>
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
                    <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register class="btn btn-d-signup">Sign Up</a>
                </div>
                <br/><br/>
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
                    {{--<a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"--}}
                       {{--class="header2 p-color-white">Chat Now</a>--}}

                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#diwali_coupon").validate({
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
                        url: 'diwali-offer',
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
@endsection
