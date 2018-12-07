@extends('layout')


@section('title', 'Christmas 2018 Offer')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
       .bg-christmas-landing-page {background-image: url("../../img/images/overlay1.png");height: 813px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 60px;}
      .textbox-email{width: 358px;height: 50px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);border-radius: 25px!important;background-color: #ffffff;border: 0;padding-left:9% }
      .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
      .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}
      .christmas-service{box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -360px;padding: 20px}
      .christmas-service .c-image{padding: 20px}
      .christmas-service .shopandship{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);border-radius: 8px;background-image: linear-gradient(228deg, #ff7c5b 0%, #e8517a 100%);}
      .christmas-service .ps{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;background-image: linear-gradient(228deg, #4df696 0%, #50bc70 100%);}
      .christmas-service .ic{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;background-image: linear-gradient(229deg, #27cbff 0%, #2aa1d5 100%);}
      .christmas-service .shopandship,.ps,.ic, h2{font-size: 22px;font-weight: 500;color: rgba(255, 255, 255, 0.6);}
      .christmas-service .shopandship,.ps,.ic, p{color: #ffffff;font-size: 16px;font-weight: 600;}
      .christmas-service .btn-chris-place-order{padding: 13px 50px;color:#fff; width: 300px;height: 50px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 30px;background-color: #e85151;}
      .chris-benefits{padding-top: 30px}
      .chris-benefits ul{text-decoration: none;list-style: none;padding-top: 20px;}
      .chris-benefits ul li{padding-top: 0px;color: #224464;font-family: Bahnschrift;font-size: 22px;font-weight: 400;text-align: left;padding-top: 25px;}
      .chris-benefits ul li img{margin-top: 9px;}
    </style>

@endsection
@section('content')

    <section class="bg-christmas-landing-page">
        <div class="container">
            <center>
                <h2 class="header2 p-color-white header-spacing font-weight-900">SAVE UPTO
                    <span class="p-color-yellow">80% + 15%</span>
                    <span class=""style="color: #68f0ff;">Christmas Offer</span></h2>
                <h1 class="p-color-white header-spacing header1 ">Shop From India,Ship
                    Worldwide</h1>
                <h1 class="header1 p-color-white header-spacing">Starting from
                    <span class="offerprice">₹690/-</span>
                </h1>
                <h4 class="header4 p-color-cement">Grab Christmas Offer*</h4>
                <form action=""  method="post" id="diwali_coupon">
                    {{csrf_field()}}
                    <div class="" id="diwali-couponcode1">
                        <div class="form-group">
                            <input type="email" name="email" class="textbox-email"
                                   placeholder="Enter a valid E-mail ID" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="btnActivate" class="btn btn-grab-offer font-weight-900"> Activate Coupon</button>
                        </div>
                    </div>

                    {{--<div class="formFrame" id="diwali-couponcode2">--}}
                        {{--<div class="">--}}
                            {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-congratulation.png" alt="" style="width: 100%">--}}
                        {{--</div>--}}
                        {{--<div class="">--}}
                            {{--<center>--}}
                                {{--<h6 class="header5 p-color-blue">Congratulations!</h6>--}}
                                {{--<h5 class="header5 p-color-cement">Just One More Step To Use <br>Your Coupon!</h5>--}}
                            {{--</center>--}}
                        {{--</div>--}}
                        {{--<div class="text-center">--}}
                            {{--<a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-d-signup">Sign Up</a>--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-shoppre">Sign Up</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </form>
                <h3 class="header4" style="color: #8eadc8;">*From 10th Dec to 15th Dec 2018</h3>
            </center>
        </div>
    </section>


    <section >
        <div class="container christmas-service">
            <div class="col-md-6 col-xs-6">
                <h2 class="header2 p-color-cement-dark font-weight-900">Offer Valid on All Services</h2>
            </div>
            <div class="col-md-2 col-md-offset-4 col-xs-6">
                <a href="tel:+91-80 4094 4077" class="pull-right c-image">
                    <img src="{{asset('/img/images/christmas-contact.png')}}" alt="">
                </a>
            </div>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-4">
                    <div class="shopandship ">
                        <h2>Shop & Ship</h2>
                        <br/>
                        <p>Purchase products from any <br>
                            Indian online store such as <br>
                            Amazon.in, Flipkart & Myntra; and. <br>
                            Set Cash on Delivery</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ps">
                        <h2>Personal Shopper</h2>
                        <br>
                        <p>Purchase products from any <br>
                            Indian online store such as <br>
                            Amazon.in, Flipkart & Myntra; and. <br>
                            Set Cash on Delivery</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ic">
                        <h2>Personal Shopper</h2>
                        <br>
                        <p>Purchase products from any <br>
                            Indian online store such as <br>
                            Amazon.in, Flipkart & Myntra; and. <br>
                            Set Cash on Delivery</p>

                    </div>
                </div>
            </div>

            <div class=" col-md-12 offer-description">
                <h5 class="header5 p-color-cement">OFFER DESCRIPTION:</h5> <br>
                <h4 class="header4 p-color-cement"> Our Grand Christmas Offer Is Here! Hurry Up &
                    Take Advantage!</h4>
                <br>
                <p class="header4 p-color-cement">While Indians around the world, not just in
                    the country; are gearing up to celebrate the holy
                    season of light taking over the darkness, we have a rather cool offer in store for you to
                    get yourself and your loved ones ready for the celebrations.</p>
                <br>
                <p class="header4 p-color-cement">We offer 15% OFF the shipping costs of
                    international shipments for up to Rs.300, which you
                    can avail by using the Coupon Code CRST15 when you checkout. Consider it a little something
                    from us for this Christmas and don’t hesitate to shop around for Indian ethnic wear or send
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
                <br>
                <div>
                <center><a href="" class="btn-chris-place-order">Place Your Order Now!</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Benefits</h1>
            </center>
            <div class="row text-center">
                <br/>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/>
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Personal Shopper</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">20-Day Free Storage</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Consolidation</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Repackaging</li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/>
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Affordable Rates</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">24/7 Customer Support</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Scanned Copies of Documents</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Country Discount</li>

                        </ul>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/>
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Photo Updates</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Wallet Cashback</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Package Return Service</li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt="">Personalized Product</li>
                            <li>Recommendations</li>
                        </ul>

                    </div>
                </div>
                {{--<div class="text-center">--}}
                    {{--<a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-d-signup">Sign Up</a>--}}
                {{--</div>--}}
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
@endsection
