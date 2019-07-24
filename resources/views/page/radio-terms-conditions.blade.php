@extends('layout')


@section('title', 'Radio TC Landing Page')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
        .ps-section{background-color:#11273b;height:500px}.ps-section .container>div{padding:20px;margin-bottom:3em}.ps-section .container>div h1{font-weight:900}.ps-section .container>#img-shopping{padding-top:150px}.ps-section .container>#img-shopping img{width:596px;height:365px}.h-req-assist{margin-bottom:30px}.product-courier span{font-weight:900}.div-t-c{padding-top:30px}.div-t-c a{width:50%;height:50px;border-radius:30px;background-color:#e85151;color:#fff;padding:10px}
    </style>

@endsection
@section('content')
    <section class="ps-section" id="personal-shopper">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-80 4094 4077" class="pull-right d-contact-img-desktop">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/d-contact-img1.png" alt="">
                </a>
                <a href="tel:+91-80 4094 4077" class="d-contact-img pull-right">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/d-contact-img2.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="container div-lets-t-c">
            <div class="col-md-12 col-sm-12 col-xs-12 " style="padding-bottom: 5em">
                <h2 class="header2 p-color-cement-dark"><span class="p-color-red">ShoppRe</span> <br> Terms &
                    Conditions!</h2>
                <p class="header5 p-color-cement">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    Using ShoppRe's Personal Shopper Service, purchase form ANY Indian Online Shop worth INR 7,000.

                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    How to do? <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Fill the order form <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Add your items to the cart <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Summary Page <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Set the payment mode as Wire Transfer

                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    The cart value should not increase beyond INR 7,000
                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    Items should not include cosmetics, medicines, liquids/semi liquids, electronics, food items or any
                    restricted items.
                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/dot.svg" alt="">
                    Shipping Charges upto 5Kg will be FREE. Standard charges will apply above 5 Kg.
                </p>
                <br>
                <div class="col-md-12 col-xs-12 no-padding ">
                    <a href="mailto:support@shoppre.com ">For any queries, please chat with our Support team or write to
                        us at support@shoppre.com</a>
                </div>
                <br>
                <br>
                <div class="col-md-12 col-sm-12 no-padding">
                    <div class="col-md-3 col-sm-3 col-xs-6 div-t-c no-padding">
                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}//personal-shopper">Personal
                            Shopper</a>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 div-t-c">
                        <a href="{{route('home')}}">Learn More!</a>
                    </div>
                </div>
                {{--<div class="col-md-12 col-xs-12 no-padding  ">--}}
                {{--<a href="#">Terms & Conditions</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>


    <section class="d-contact-details-section">
        <div class="container " id="contact-support" style="padding-bottom: 30px;">
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
                            Team
                        </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align p-color-yellow">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
@endsection



