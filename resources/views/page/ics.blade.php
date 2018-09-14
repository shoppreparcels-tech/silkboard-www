@extends('layout')

@section('title', 'ShoppRe - Shop Indian Stores & Ship Internationally | Courier Service')
@section('description', 'Signup for Indian Address. Shop your favorite Indian store and Ship Internationally. India&#039;s #1 international courier, shipping and consolidation company.')
@section('keywords', 'shop and ship, courier service, shoppre, consolidation company, indian store, ship internationally')

@section('content')
<section class="header">
    <div class="container">
        <center>
            <a class="video-link" href="https://www.youtube.com/embed/ONaPq2L-MRg?html5=1" data-width="700" data-height="800">
                <img  class="btn-vid-img" src="{{asset('img/svg_image/btn.svg')}}">
            </a>
            <h1 class="header1  p-color-white">Courier Service</h1>
            <p class="header2 p-color-cement" style="margin-bottom: 115px;">We ship Domestic and Internationally</p>

        </center>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12   div-courier-cal   ">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs ul-margin" role="tablist"  >
                    <li role="presentation" class="active">
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
                                <input  class="text-box-margin" type="text" name="" placeholder="From India">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <input  class="text-box-margin" type="text" name="" placeholder="To  United States">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> <input  class="text-box-margin" type="text" name="" placeholder="Weight(kg)">

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-courier-cal-margin">
                                <button type="button" id="International">Get An Estiamate</button>
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Domestic">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <input  class="text-box-margin" type="text" name="" placeholder="From City  ">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <input  class="text-box-margin" type="text" name="" placeholder="To  City">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> <input  class="text-box-margin" type="text" name="" placeholder="Weight(kg)">

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 div-courier-cal-margin">
                                <button type="button" id="International">Get An Estiamate</button>
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
        <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" >
            <div class="box-steps" id="steps">
                <center>
                    <p class="header6 p-color-cement" style="font-weight:900 ">1 <br> step</p>
                </center>
            </div>
            <div>
                <center>
                    <img class="img-responsive img-process" src="{{asset('img/svg_image/pic_up.svg')}}"><h2 class="header3 p-color-cement-dark">Pickup Package</h2>
                    <p class="header4 p-color-cement">
                        Purchase any product from <br> your favourite indian
                        online store and use <br> your locker address for item
                        delivery
                    </p>
                </center>
            </div>

        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box">
            <div class="box-steps" id="steps">
                <center>
                    <p class="header6 p-color-cement" style="font-weight:900 ">2 <br> step</p>
                </center>
            </div>
            <div>
                <center>
                    <img class="img-responsive  img-process" src="{{asset('img/svg_image/shipments.svg')}}">
                    <h2 class="header3 p-color-cement-dark">Shipments</h2>
                    <p class="header5 p-color-cement">
                        Purchase any product from <br> your favourite indian
                        online store and use <br> your locker address for item
                        delivery
                    </p>
                </center>

            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box">
            <div class="box-steps" id="steps">
                <center>
                    <p class="header6 p-color-cement" style="font-weight:900 ">3 <br> step</p>
                </center>
            </div>
            <div>
                <center>
                    <img class="img-process" src="{{asset('img/svg_image/deliver_package.svg')}}">
                    <h2 class="header3 p-color-cement-dark">Deliver Package</h2>
                    <p class="header4 p-color-cement">
                        Purchase any product from <br> your favourite indian
                        online store and use <br> your locker address for item
                        delivery
                    </p>
                </center>

            </div>
        </div>
        <center>
            <button class="btn btn-request">
                Request Pickup
            </button>
        </center>
    </div>

    </div>

</section>

<section>
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div>
                <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2 div-review1">
                    <center><p style="margin-top: 15px;">4.7</p></center>

                </div>
                <div class="col-md-9 col-lg-9 col-sm-10 col-xs-10">
                    <input class="rating rated" style="margin:0 0 0 0 !important;" value="5" id="courier_rating">
                    <p class="header4" style="color: green; margin-top: 10px">4565 reviews
                </div>
                </p>
            </div>


        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <img class="img-responsive img-courier-review-g" src="{{asset('img/svg_image/ic_google.svg')}}">
                <p class="header4" style="color: #e85151;">Reviews</p>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <img class="img-responsive " src="{{asset('img/images/rating_google.png')}}">
            </div>
        </div>
        <div class="col-lg-5 col-md-5  col-sm-12 col-xs-12">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-xs-4">
                <img class="img-responsive img-courier-review-f" src="{{asset('img/images/Facebook_Logo@2x.png')}}">
                <p class="header4" style="color: #507dbc;">Reviews</p>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-8">
                <img class="img-responsive img-facebook-r" style="margin-top: -15px;" src="{{asset('img/images/rating_facebook.png')}}">
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container" style="margin-top: 62px;">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img  class="img-responsive img-shipments" src="{{asset('img/images/back.png')}}">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1 class="header1  p-color-cement-dark p-seller">Are you a Seller? <br>
                Save more on shipping.</h1>
                <p class="header2 p-color-cement"> <span class="header2" style="color: #507dbc;"> Start your FREE 30 Day Trial</span> to know how much you can save monthly on regular shipping</p>
                <div class="col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <button class="btn h4 btn-request-cal-back">Request Callback</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <button class="btn h4 btn-courier-know">Know more</button>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
