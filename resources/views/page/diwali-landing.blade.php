@extends('layout')


@section('title', '')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
        .diwali-stores {
            box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);
            border-radius: 15px;
            background-color: #ffffff;
        }

        .d-stores-box {
            width: 164px;
            height: 60px;
            border: 1px solid #f1f1f1;
            background-color: #ffffff;
            display: table;
        }

        .d-online-stores {
            display: table-cell;
            vertical-align: middle;
        }

        .d-contact-div {
            width: 220px;
            height: 50px;
            border-radius: 40px 40px 0;
            padding: 10px;
            border: 2px solid #fdf699;
        }

        .d-contact-div img {
            height: 30px;
            width: 30px;
        }
        #d-contcat a:hover{
            color: #ffffff;
        }
    </style>

@endsection
@section('content')

    <section class="bg-diwali-landing-page" style="background-color: #fafafb; padding-top: 60px;">
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('img/images/logo.png')}}" alt="logo"/>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <img src="{{asset('img/images/ic_contact_header.png')}}"/>
                        <label class="contactTop">
                            +91-80 4094 4077
                        </label>
                        <label class="support">--------------------- 24/7 support</label>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-sm-7" style="">
                    <h1 class="header1 p-color-white" style="letter-spacing: 2.75px;">SAVE UPTO <span
                            style="color: #fdf699">80%</span></h1>
                    <h1 class="p-color-white" style="font-size: 55px;letter-spacing: 2.75px;font-weight: 900;">Shop From India,<br/>Ship
                        Worldwide</h1>
                    <h1 class="header1 p-color-white" style="letter-spacing: 2.75px;">Starting from <span
                            style="color: #fdf699">₹549/-</span> <span class="offerprice">690/-</span></h1>
                    {{--<div class="saveupto">--}}
                    {{--</div>--}}
                    {{--<div class="shopFrom">--}}
                    {{--</div>--}}
                    {{--<div class="startingfrom">Starting from 549/- <span class="offerprice">690/-</span></div>--}}


                    <div class="col-md-7" style=" border:2px #fdf699;border-style: dashed;border-radius: 5px;">
                        <div class="col-md-3" style="padding-top: 11px;">
                            <h3 class="header4 p-color-white">COUPON: <br>CODE:</h3>
                        </div>
                        <div class="col-md-9">
                            <h1 style="font-size: 55px;color: #fdf699;font-weight: 900">DIWL18</h1>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <img src="{{asset('img/images/diwali.png')}}" alt="" style=" margin-left: 15px;">
                    <div class="formFrame">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="lblFullName" class="form-control"
                                   placeholder="Enter the Name Here">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="lblContactNumber" class="form-control"
                                   placeholder="Enter a Valid Phone number">
                        </div>
                        <div class="form-group">
                            <label>E-Mail ID</label>
                            <input type="text" name="lblEmailAddres" class="form-control"
                                   placeholder="Enter a valid E-mail ID">
                        </div>
                        <div class="form-group text-center">
                            <button name="btnActivate" class="btn btn-shoppre"> Activate Coupon</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section>
        {{--<div class=" no-padding">--}}
        <div class="container shopContainer no-padding ">
            <label class="shop">Shop from 1000+ Indian online stores ‘Including</label>
            <div class="row">
                <div class="col-md-1 col-md-offset-2 d-stores-box">
                    <center class="d-online-stores">
                        <img class="shoppingKart" src="{{asset('img/images/flipkart-logo.png')}}" alt="FlipKart"/>
                    </center>

                </div>
                <div class="col-md-1  d-stores-box">
                    <center class="d-online-stores">
                        <img class="shoppingKart" src="{{asset('img/images/amazon_logo_RGB.png')}}" alt="Amazon"/>
                    </center>
                </div>
                <div class="col-md-1  d-stores-box">
                    <center class="d-online-stores">
                        <img class="shoppingKart" src="{{asset('img/images/Jabong-com-925660222-1939026-1.png')}}"
                             alt="Jabong"/>
                    </center>
                </div>
                <div class="col-md-1  d-stores-box">
                    <center class="d-online-stores">
                        <img class="shoppingKart" src="{{asset('img/images/myntra.png')}}" alt="SnapDeal"/>
                    </center>
                </div>
                <div class="col-md-1  d-stores-box">
                    <center class="d-online-stores">
                        <img class="shoppingKart"
                             src="{{asset('img/images/Jabong-com-925660222-1939026-1(1).png')}}" alt="Myntra"/>
                    </center>
                </div>

                {{--<div class="text-center p-15">--}}

                {{--<img class="shoppingKart" src="{{asset('img/images/flipkart-logo.png')}}" alt="FlipKart"/>--}}
                {{--<img class="shoppingKart" src="{{asset('img/images/amazon_logo_RGB.png')}}" alt="Amazon"/>--}}
                {{--<img class="shoppingKart" src="{{asset('img/images/Jabong-com-925660222-1939026-1.png')}}" alt="Jabong"/>--}}
                {{--<img class="shoppingKart" src="{{asset('img/images/myntra.png')}}" alt="SnapDeal"/>--}}
                {{--<img class="shoppingKart" src="{{asset('img/images/Jabong-com-925660222-1939026-1(1).png')}}" alt="Myntra"/>--}}

                {{--</div>--}}
            </div>
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <span class="startsvalid">STARTS FROM :</span><span
                                class="startsValidValue"> 7th Aug 2018</span>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <span class="startsvalid">VALID TILL :</span><span
                                class="startsValidValue"> 15th Aug 2018</span>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <span class="startsvalid">COUPON CODE :</span><span
                                class="startsValidValue"> AD20162</span>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 " style="padding: 50px">
                <h5 class="header5 p-color-cement" style="font-weight: 600;">OFFER DESCRIPTION:</h5> <br>
                <h4 class="header4 p-color-cement" style="font-weight: 600;"> Our Grand Diwali Offer Is Here! Hurry Up &
                    Take Advantage!</h4>
                <br>
                <p class="header4 p-color-cement" style="font-weight: 600;">While Indians around the world, not just in
                    the country; are gearing up to celebrate the holy
                    season of light taking over the darkness, we have a rather cool offer in store for you to
                    get yourself and your loved ones ready for the celebrations.</p>
                <br>
                <p class="header4 p-color-cement" style="font-weight: 600;">We offer 18% OFF the shipping costs of
                    international shipments for up to Rs.300, which you
                    can avail by using the Coupon Code DIWL18 when you checkout. Consider it a little something
                    from us for this Diwali and don’t hesitate to shop around for Indian ethnic wear or send
                    your greetings off to your loved ones abroad.</p> <br>

                <div class="offerDesc">
                    <h5 style="font-weight: 600;"> What Else Do You Get Out of Our Offer? </h5><br>
                    <ul>
                        <li>
                            Store your goods here at our facility for 20 days for FREE!
                        </li>
                        <li>Get online Support 24/7</li>
                        <li>Get up to 80% OFF in shipping costs on top of the seasonal offer</li>
                        <li>A quick delivery within 3-6 days!”</li>
                    </ul>
                </div>
            </div>
            {{--</div>--}}
        </div>
    </section>
    <!--how it Works-->
    <section class=""style="background-color: #fafafb">
        <div class="container">
            <center>
                <h1 class="header1 p-color-cement-dark">How it Works</h1>
            </center>
            <br><br>


            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-4">
                    <div class="panel img-rounded">
                        <br/><br/>
                        <img src="{{asset('img/svg/d-step1.svg')}}" alt="">
                       <br/><br/>
                        <h1 class="header3 p-color-cement" style="font-weight: 900">STEP 1</h1>
                        <br/>
                        <h1 class="header3 p-color-cement" style="font-weight: 900">Get a FREE Idian virtual Address,<br> sit back & shop around.</h1>
                        <br/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel img-rounded">
                        <br/><br/>
                        <img src="{{asset('img/svg/d-step2.svg')}}" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement" style="font-weight: 900">STEP 2</h1>
                        <br>
                        <h1 class="header3 p-color-cement" style="font-weight: 900">Shop from any Indain,<br> online store.</h1>
                        <br>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel img-rounded">
                        <br/><br/>
                        <img src="{{asset('img/svg/d-step3.svg')}}" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement" style="font-weight: 900">STEP 3</h1>
                        <br>
                        <h1 class="header3 p-color-cement" style="font-weight: 900">We'll get your package to<br> your doorsteps in just 3 to 6 days!</h1>
                        <br>

                    </div>
                </div>
                <button name="btnActivate" class="btn btn-shoppre">Sign Up Now!</button>
                <br/><br/><br/><br/>
            </div>
        </div>
    </section>

    <!--Subscribe-->
    {{--<section class="bg-primary">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-3 form-group">--}}
    {{--<button type="submit" class="btn-contactus">Contact Support Team</button>--}}
    {{--</div>--}}
    {{--<div class="col-sm-3 form-group">--}}
    {{--<label class="lblWithglyph"><span class=""></span>CALL US</label><br/>--}}
    {{--<label class="lblWithoutGlyph"> +91 8040944077</label>--}}
    {{--</div>--}}
    {{--<div class="col-sm-3 form-group">--}}
    {{--<label class="lblWithglyph"> <span class=""></span>Email US</label><br/>--}}
    {{--<label class="lblWithoutGlyph"> support@shoppre.com</label>--}}
    {{--</div>--}}
    {{--<div class="col-sm-3 form-group">--}}
    {{--<label class="lblWithglyph"> <span class=""></span>LIVE CHAT</label><br/>--}}
    {{--<label class="lblWithoutGlyph"> Chat Now</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <section class="" style="background-color: #507dbc;padding-top: 3em;padding-bottom: 3em ;margin-bottom: -11px;">
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
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support Team </p>
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

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection
