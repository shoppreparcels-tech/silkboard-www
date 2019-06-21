@extends('layout')


@section('title', 'Shop From India | International Shipping to USA, UAE, AUS')
@section('description', 'Shop from 1000 Indian online stores with your ShoppRe Address‎. International shipping to USA, UAE, AUS at 80% lower rates on shipping cost. Sign up Free.')
@section('keywords', 'shop from india, ship to usa, indian online stores, shipping address, uae courier')
@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/shop-ship"/>
    <style>
        .bg-diwali-lp{background-image: url(../../img/images/overlay1.png);height: 900px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 60px;}
        .select-control {float: left;width: 90px !important;height: 40px !important;font-size: 13px;font-weight: 400;    font-style: italic;border-left: 0;border-radius: 3px;background-color: #fafafb;border: none;}
        .select2-container--default .select2-selection--single {background-color: #fff !important;border: none !important;border-radius: 4px !important;height: 40px !important;padding-top: 5px!important;}
        .select2-container--default .select2-selection--single .select2-selection__arrow b {margin-top: 4px !important;}
        @media only screen and (max-width: 600px) {
            .bg-diwali-lp{    height: 700px;}
        }

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
                        <span class="p-color-yellow">₹549/-</span>
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
                {{--<form action=""  method="post" id="diwali_coupon">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<div class="" id="diwali-couponcode1">--}}
                        {{--<br>--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" name="email" class="b-r-3 txt-xl txt-shadow txt-pad"--}}
                                   {{--placeholder="Enter Valid E-mail ID" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<select class="select2 select-control" name="country_code" >--}}
                                {{--<option value="91">IN(+91)</option>--}}
                                {{--@foreach($countries as $country)--}}
                                    {{--<option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})--}}
                                    {{--</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                            {{--<input type="text" name="pnumber" class="b-r-3 txt-l txt-shadow txt-pad" pattern="^[0-9]"--}}
                                   {{--placeholder="Phone Number / Whatsapp" required>--}}

                        {{--</div>--}}
                        {{--<div class="col-md-10 col-md-offset-2 col-xs-9 col-xs-offset-3 form-group">--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-l btn-b-r btn-s-r font-weight-900">Sign Up Free</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
                <br>
                <br>
                   <div class="form-group text-center">
                       {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                       <a href="/customer/register" class="btn btn-b-r btn-s-r font-weight-900 col-xs-12" target="_blank">Sign Up For Free</a>
                       {{--</button>--}}
                       <br>
                       <br>
                       {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                       <a  style="margin-top: 10px;" href="https://wa.me/918277919191?text=I'm%20interested%20in%20Shopping%20and%20Shipping%20from%20India%20" target="_blank" class="btn btn-s-b btn-a-l btn-b-g col-xs-12">
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
                            <a href="https://www.flipkart.com/fashion-ffd-june-2019-store" title="Flipkart" target="_blank">1. Flipkart.com 👉Fashion Days Sale 21st - 25th June</a> |
                            <a href="https://www.myntra.com/growth/eors19-homepage/" title="Myntra" target="_blank">2. Myntra.com 👉End of Reason Sale 21st - 24th June</a> |
                            <a href="https://ship.shoppre.com/prime-amazon-fashion-wardrobe-refresh-sale-shop-online-from-india/" title="Amazon.in" target="_blank">3. Amazon.in 👉Wardrobe Refresh Sale 19th - 23rd June</a>
                        </marquee>
                    </div>
                    <center>
                        <h1 class="f-s-20 font-weight-900 f-c-d-greay">Ship What You Love from India & Shop With Your <a href="/indian-virtual-address">
                                Free ShoppRe Indian Virtual Address‎</a></h1>
                    </center>
                </div>
            </div>

            <label class="shop">Shop from <span class="font-weight-900">1000+</span>  Indian online stores ‘Including</label>
            <div class="row" style="padding-right:10px;padding-left: 30px">
                <center>
                    <div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">
                        <center class="d-online-stores">
                            <a href="{{route('flipkart.landing')}}" target="_blank">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>
                            </a>
                        </center>

                    </div>
                    <div class="col-md-1  d-stores-box col-xs-6">
                        <center class="d-online-stores">
                            <a href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/" target="_blank">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>
                            </a>
                        </center>
                    </div>
                    {{--<div class="col-md-1  d-stores-box col-xs-4">--}}
                        {{--<center class="d-online-stores">--}}
                            {{--<img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1.png"--}}
                                 {{--alt="Jabong"/>--}}
                        {{--</center>--}}
                    {{--</div>--}}
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="Myntra"/>
                            </a>
                        </center>
                    </div>
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <a href="{{route('myntra.landing')}}" target="_blank">
                            <img class="shoppingKart"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>
                            </a>
                        </center>
                    </div>

                </center>
            </div>
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                    class="startsValidValue"> 1st June 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 31st July 2019</span></p>
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
                <h5 class="f-s-20 font-weight-900 f-c-d-greay ">Shop from India  & Hassle Free Shipping to USA, UAE, AUS, UK at 80% lower rates on shipping cost!</h5> <br>
                <h4 class="header4 p-color-cement"> Buy Products/Brands you Love from any online store in India;
                    Store, Consolidate, Repack & Ship Worldwide in 3-6 days delivery. Package Forwarding from India Made Easy by ShoppRe.com</h4>
                <br>
                <p class="header4 p-color-cement">While Indians around the world, not just in
                    the country; are gearing up to celebrate the holy
                    season of light taking over the darkness, we have a rather cool offer in store for you to
                    get yourself and your loved ones ready for the celebrations.</p>
                <br>
                <p class="header4 p-color-cement">We offer 50% OFF the <a href="{{route('pricing')}}">shipping costs of
                    international shipments </a>for up to Rs.200, which you
                    can avail by using the Coupon Code FRST50  when you checkout. Consider it a little something
                    from us for this new year and don’t hesitate to shop around for Indian ethnic wear or send
                    your greetings off to your loved ones abroad.</p> <br>

                <div class="offerDesc">
                    <h5 class="f-s-16"> What Else Do You Get Out of Our Offer? </h5>
                    <ul>
                        <li>Store your goods at our facility for 20 days for FREE</li>
                        <li>Get online Support 24/7</li>
                        <li>Get up to 80% OFF in shipping costs</li>
                        <li>A quick delivery within 3-6 days!</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
                    <a href="/customer/register" class="btn btn-s-r btn-a-l btn-b-r" target="_blank">Sign Up for Free</a>
                </div>
                <br/><br/>
            </div>
        </div>

    </section>

    <section>
        <center>
            <h2 class="header2 p-color-cement-dark"><strong><a href="https://ship.shoppre.com/online-shopping-from-india-international-shipping-to-usa/" target="_blank">Online Shopping from India to USA</a>;
                    <a href="https://ship.shoppre.com/online-shopping-from-india-international-shipping-to-uk/" target="_blank">Online Shopping from India to UK</a></strong></h2>
            <h2 class="header2 p-color-cement-dark"><strong><a href="/personal-shopper-india">Personal Shopper Services from India</a></strong></h2>
        </center>
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
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    var pnumber = $("input[name='pnumber']").val();
                    var cnumber = $("[name='country_code']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'shop-ship',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            pnumber: pnumber,
                            cnumber: cnumber,
                        },
                        success: function (data) {
                            var url= "{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register?email=" + email + "&c_code="+ cnumber +"&PN="+ pnumber ;
                            console.log(data);
                            // window.open(url);
                            window.location.href = url;

                        }
                    })
                }
            });

        });
    </script>
@endsection
