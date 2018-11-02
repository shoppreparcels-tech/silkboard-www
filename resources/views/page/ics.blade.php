@extends('layout')

@section('title', 'ShoppRe - Shop Indian Stores & Ship Internationally | Courier Service')
@section('description', 'Signup for Indian Address. Shop your favorite Indian store and Ship Internationally. India&#039;s #1 international courier, shipping and consolidation company.')
@section('keywords', 'shop and ship, courier service, shoppre, consolidation company, indian store, ship internationally')

@section('css_style')

@endsection
@section('content')
    <section class="header">
        <div class="container">
            <center>
                <p class="header-ifs-p">
                    <a class="bla-1" href="https://www.youtube.com/watch?v=Zf77ljCx9Ik&t=5s">
                        <img class="btn-vid-img" src="{{asset('img/svg/btn.svg')}}">
                    </a>
                </p>
                <h1 class="header1  p-color-white">Courier Service</h1>
                <p class="header2 p-color-cement" style="margin-bottom: 170px;">We ship Domestic and Internationally</p>

            </center>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12   div-courier-cal">
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs ul-margin" role="tablist">
                        <li role="presentation" class="active" style="margin-left: 15px">
                            <a href="#International" aria-controls="home" role="tab" data-toggle="tab">International</a>
                        </li>
                        <li role="presentation">
                            <a href="#Domestic" aria-controls="profile" role="tab" data-toggle="tab">Domestic</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active" id="International">
                            <div class="col-lg-12 col-md-12 ">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input class="text-box-margin cal-text-box" type="text" name=""
                                           placeholder="From India">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input class="text-box-margin cal-text-box" type="text" name=""
                                           placeholder="To  United States">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input class="text-box-margin cal-text-box" type="text" name=""
                                           placeholder="Weight(kg)">

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-courier-cal-margin">
                                    <button type="button" class="btn btn-pricing-estimate" id="International" style="margin-top: 13px;">Get An Estiamate</button>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Domestic">
                            <div class="col-lg-12 col-md-12 ">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input class="text-box-margin cal-text-box" type="text" name="" placeholder="From City  ">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input class="text-box-margin cal-text-box" type="text" name="" placeholder="To  City">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <input class="text-box-margin cal-text-box" type="text" name=""placeholder="Weight(kg)">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-courier-cal-margin">
                                    <button type="button" class="btn btn-pricing-estimate" id="International" style="margin-top: 13px;">Get An Estiamate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container div-process">
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
                            <p class="header8 p-color-cement" style="line-height: 1;"><span
                                    style="font-size: 22px;font-weight: 900;" id="number1">1</span><br> step</p>
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
                            <p class="header8 p-color-cement"  style="line-height: 1;"><span
                                    style="font-size: 22px;font-weight: 900;" id="number2">2</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive  img-process" src="{{asset('img/svg/shipments.svg')}}">
                            <h2 class="header3 p-color-cement-dark">Shipments</h2>
                            <p class="header5 p-color-cement">
                                Purchase any product from  your favourite indian
                                online store and use your locker address for item
                                delivery
                            </p>
                        </center>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box3">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement" style="line-height: 1;"><span
                                    style="font-size: 22px;font-weight: 900;" id="number3">3</span><br> step</p>
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
                    <a  href="{{route('schedulePickup.Index')}}" class="btn btn-request">Request Pickup</a>
                </center>
            </div>

        </div>

    </section>

    <section>
        <div class="container">
            <a href="{{route('reviews')}}">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2 div-review1">
                        <center>4.7</center>

                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-10 col-xs-10 div-ifs-shoppre-reviw">
                        <input class="rating rated" style="margin:10px 0 0 0 !important;" value="5" id="courier_rating">
                        <p class="header6" style="color: green; margin:-8px 0 0 12px;">968 reviews </p>
                        <center>
                            {{--<img class="img-responsive " src="img/images/reviews_shoppre.svg">--}}
                        </center>
                    </div>

                </div>
            </a>
            <a href="https://www.google.com/sorry/index?continue=https://www.google.com/search%3Fq%3Dshoppre%26oq%3Dshoppre%26aqs%3Dchrome..69i57j69i60l5.4478j0j7%26sourceid%3Dchrome%26ie%3DUTF-8&q=EgRqM4IPGPOnwt4FIhkA8aeDSz69D7l29hCwOCHBNiJdzO_qD5TRMgFy#lrd=0x3bae146191401f95:0x1cf2770c1532d7d1,1,,,">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 div-ifs-google-reviews">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <img class="img-responsive img-courier-review-g"
                             src="img/svg/google-reviews-shipping-service-bengaluru.svg">
                        <p class="header6" style="color: #e85151;">Reviews</p>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <img class="img-responsive " style="margin-top: 5px;" src="img/images/google-rating-shipping-service-bengaluru.png">
                    </div>
                </div>
            </a>
            <a href="https://www.facebook.com/goshoppre/reviews/?ref=page_internal">
                <div class="col-lg-5 col-md-5  col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-xs-4">
                        <img class="img-responsive img-courier-review-f"
                             src="img/images/facebook-reviews-shipping-service.png">
                        <p class="header6" style="color: #507dbc; line-height: 30px">Reviews</p>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-8">
                        <img class="img-responsive img-facebook-r" style="margin-top: -15px;"
                             src="img/images/facebook-rating-shipping-service.png">
                    </div>
                </div>
            </a>

        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 62px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{asset('img/images/back.png')}}">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="header1  p-color-cement-dark p-seller">Are you a Seller? <br>
                    Save more on shipping.</h1>
                <p class="header2 p-color-cement"><span class="header2" style="color: #507dbc;"> Start your FREE 30 Day Trial</span>
                    to know how much you can save monthly on regular shipping</p>
                <div class="col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform" class="btn btn-request-cal-back">Request Callback</a>
                        {{--<button class="btn btn-request-cal-back">Request Callback</button>--}}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="" class="btn btn-courier-know">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#ics-box2").hover(function () {
                $("#ics-box2").css({"box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"});
                $("#ics-box1").css({"box-shadow": "none"," background-color":"#ffffff"});
                $('#number2').css({"color":"red"})
                $('#number1').css({"color":"#677582"})
            }, function () {
                $("#ics-box1").css({"box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"});
                $("#ics-box2").css({"box-shadow": "none"," background-color":"#ffffff"});
                $('#number1').css({"color":"red"})
                $('#number2').css({"color":"#677582"})

            });
            $("#ics-box3").hover(function () {
                $("#ics-box3").css({"box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"});
                $("#ics-box1").css({"box-shadow": "none"," background-color":"#ffffff"});
                $('#number3').css({"color":"red"})
                $('#number1').css({"color":"#677582"})
            }, function () {
                $("#ics-box1").css({"box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"});
                $("#ics-box3").css({"box-shadow": "none"," background-color":"#ffffff"});
                $('#number1').css({"color":"red"})
                $('#number3').css({"color":"#677582"})

            });

        });
    </script>

@endsection

@endsection
