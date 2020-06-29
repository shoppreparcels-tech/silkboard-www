@extends('layout')

@section('title', 'ShoppRe Offers, Wallet Cashback, Discounts & Ecommerce Sale')
@section('description', 'Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India.')
@section('keywords', 'cashback, discounts, coupons, promo codes, vouchers, shopping, shipping, ecommerce deals, wallet')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/offers" />

    <meta property="og:title" content="ShoppRe Offers, Wallet Cashback & Discounts | ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/offers"/>
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg"/>
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="ShoppRe Indian Online Shopping Stores Offers" />
    <meta property="og:description" content="Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India."/>
    <meta property="og:site_name" content="ShoppRe Online Shipping Sites in India"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="ShoppRe Offers, Wallet Cashback & Discounts | ShoppRe.com" />
    <meta name="twitter:description" content="Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India." />
    <meta name="twitter:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta name="twitter:image:alt" content="ShoppRe international shipping offers"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <style>
        .MultiCarousel{float:left;overflow:hidden;padding:15px;width:100%;position:relative}.MultiCarousel .MultiCarousel-inner{transition:1s ease all;float:left}.MultiCarousel .MultiCarousel-inner .item{float:left}.MultiCarousel .MultiCarousel-inner .item>div{text-align:center;padding:10px;margin:0;background:#f1f1f1;color:#666}.MultiCarousel .leftLst,.MultiCarousel .rightLst{position:absolute;border-radius:50%;top:calc(50% - 20px)}.MultiCarousel .leftLst{left:0}.MultiCarousel .rightLst{right:0}.MultiCarousel .leftLst.over,.MultiCarousel .rightLst.over{pointer-events:none;background:#ccc}.delivery img{width:100%}.text-transform-u{text-transform:uppercase}
        .dis-no{
            display: none;
        }
        dis-mob-no{
            display: block !important;
        }
        @media only screen and (max-width: 600px) {
            .test{
                position: relative; top: 0px; left: 0px;
                width: 330px; height: 310px;
                overflow: hidden;
            }
            .dis-no{
                display: block !important;
            }
            .dis-mob-no{
                display: none;
            }
        }
    </style>
@endsection

@section('content')
    <section class="heading-section ">
        <div class="container">
            <div class="row">
                <h1 class="header1 p-color-white">ShoppRe Shopping and Shipping Offers</h1>
                <div class="col-md-12 padding-bottom">
                    <h2 class="header2 p-color-cement">Know more about the latest ShoppRe Offers, Discounts, Coupons, Wallet Cashback,
                        Promo Codes and Ecommerce deals for all your <a href="{{route('ifs.index')}}">Shopping and Shipping needs from India</a>.
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="delivery">
        <div class="container">
            <br>
            <h3 class="header3 p-color-cement-dark font-weight-900">ShoppRe Offers:</h3>
            <div class="row">
                <div class="MultiCarousel dis-mob-no" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                <a href="/diwali-offer" target="_blank">--}}
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/diwali-offer-shipping-2019.png" class="boxofScroll"/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                <a href="/offers" target="_blank">--}}
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/ind250-shoppre.png" class="boxofScroll"/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                <a href="/christmas-offer" target="_blank">--}}
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/christmas-2019.png" class="boxofScroll"/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                <a href="{{route('valentines')}}" target="_blank">--}}
{{--                                    <img src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/5a139c20-b51d-4b5f-8f1f-72821a2524a3.png" class="boxofScroll"/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="item">
                            <div class="pad15">
                                <a href="/first-time-international-shipment-offer" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/International-shipping-offers.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://ship.shoppre.com/refer-and-earn-with-us/" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/refer-earn-shoppre-shopper-shopping.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                    <img src="/img/images/savings.png" class="boxofScroll"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppreparcels.com/offers/ship-more-save-more/" target="_blank">
                                    <img src="/img/images/MoreSavings.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shopprecouriers.com/best-international-courier-service-for-students" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/students-shipping-offer.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                    </div>
{{--                    <button class="btn btn-primary leftLst"><</button>--}}
{{--                    <button class="btn btn-primary rightLst">></button>--}}
                </div>

                <div class=" MultiCarousel dis-no" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="col-md-12 col-xs-12 col-sm-12 ">
                        <div class="MultiCarousel-inner" style="width: 100%;">
                            <div class="test" id="slider1_container"
                                 style=" ">

                                <!-- Loading Screen -->
                                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                                    </div>
                                    <div style="position: absolute; display: block;
                                            background:  no-repeat center center;
                                                top: 0px; left: 0px;
                                                width: 100%;height:100%;"
                                    >
                                    </div>
                                </div>

                                <!-- Slides Container -->
                                <div u="slides" style="cursor: move; position: absolute;
                                left: 0px; top: 0px;
                                width: 330px; height: 310px;
                                overflow: hidden;">
                                    <div>
                                        <a href="/first-time-international-shipment-offer" target="_blank">
                                            <img u="image" style="width: 330px; height: 310px;" src="{{env('AWS_CLOUD_FRONT')}}/img/images/International-shipping-offers.png" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://ship.shoppre.com/refer-and-earn-with-us/" target="_blank">
                                            <img u="image" style="width: 330px; height: 310px;" src="{{env('AWS_CLOUD_FRONT')}}/img/images/refer-earn-shoppre-shopper-shopping.png" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://www.shoppreparcels.com/offers/ship-more-save-more/" target="_blank">
                                            <img u="image" style="width: 330px; height: 310px;" src="/img/images/MoreSavings.png" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/university-offer" target="_blank">
                                            <img u="image" style="width: 330px; height: 310px;" src="{{env('AWS_CLOUD_FRONT')}}/img/images/students-shipping-offer.png" />
                                        </a>
                                    </div>
                                </div>

                                <!-- Bullet Navigator Skin Begin -->
                                <style>
                                    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                                        background: url('/img/images/b05.png') no-repeat;
                                        overflow: hidden;
                                        cursor: pointer;
                                    }

                                    .jssorb05 div {
                                        background-position: -7px -7px;
                                    }

                                    .jssorb05 div:hover, .jssorb05 .av:hover {
                                        background-position: -37px -7px;
                                    }

                                    .jssorb05 .av {
                                        background-position: -67px -7px;
                                    }

                                    .jssorb05 .dn, .jssorb05 .dn:hover {
                                        background-position: -97px -7px;
                                    }
                                </style>
                                <!-- bullet navigator container -->
                                <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
                                    <!-- bullet navigator item prototype -->
                                    <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
                                </div>
                                <!-- Bullet Navigator Skin End -->

                                <!-- Arrow Navigator Skin Begin -->
                                <style>
                                    .jssora12l, .jssora12r, .jssora12ldn, .jssora12rdn {
                                        position: absolute;
                                        cursor: pointer;
                                        display: block;
                                        background: url('/img/images/a12.png') no-repeat;
                                        overflow: hidden;
                                    }

                                    .jssora12l {
                                        background-position: -16px -37px;
                                    }

                                    .jssora12r {
                                        background-position: -75px -37px;
                                    }

                                    .jssora12l:hover {
                                        background-position: -136px -37px;
                                    }

                                    .jssora12r:hover {
                                        background-position: -195px -37px;
                                    }

                                    .jssora12ldn {
                                        background-position: -256px -37px;
                                    }

                                    .jssora12rdn {
                                        background-position: -315px -37px;
                                    }
                                </style>
                                <!-- Arrow Left -->
                                <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 123px; left: 0px;">
                                    </span>
                                <!-- Arrow Right -->

                                <span u="arrowright" class="jssora12r"
                                      style="width: 30px; height: 46px; top: 123px; right: 0px">
                                    </span>
                                <!-- Arrow Navigator Skin End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <br/>
           <h3 class="header3 p-color-cement-dark font-weight-900">Indian Shopping Sites (June 2020 Sale):</h3>
            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">FASHION BRANDS</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 70% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="/flipkart-online-shopping" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_5996fd9938980.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Best Selling Kurtas</h4>
                            <h5 class="header6 p-color-cement font-weight-900">10K + Products on Sale</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="/limeroad-online-shopping" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a5173241735.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">June Sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 60% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="/chumbak-online-shopping" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a68d693f754.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">SPRING SUMMER SPECIALS</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 65% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://indiacircus.com/sales/clearance-sale.html" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a67ba7cb9ec.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">THE AJIOMANIA SALE</h4>
                            <h5 class="header6 p-color-cement font-weight-900">50-90% Off</h5>
{{--                            <h5 class="header6 p-color-cement font-weight-900">22nd-4th June</h5>--}}
                            <div class="ecomSmallBox">
                                <a href="/ajio-online-shopping" target="_blank">
                                    <img style="margin-top: -10%;" src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a51d8ae4946.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">MADE IN INDIA</h4>
                           <h5 class="header6 p-color-cement font-weight-900">Starting @ ₹199</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="/myntra-online-shopping" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_5997a62748742.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">END OS SEASON SALE</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Min. 50% Off</h5>
        {{-- <div class="ecomSmallBox" style="height: 94px;"> --}}
                            <div class="ecomSmallBox">
                            <a href="/amazon-india-shop-international-shipping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">AMAZON.in</p>
        {{--  <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon-india-shopping.png"/> --}}
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">ethnic wear</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Upto 70% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="/shoppersstop-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">SHOPPERSSTOP</p>
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_599691d00e27e.png">--}}
                                </a>
                            </div>
                        </div>
                    </center>
                    <br>
                </div>

                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Weeding Store</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Upto 80% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://clnk.in/jZre" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">SNAPDEAL</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">the summer of saving sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up To 60% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.jaypore.com/eoss2019" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">JAYPORE</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">FEATURED COLLECTIONS</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up To 50% Off</h5>
                            <div class="ecomSmallBox" >
                                <a href="/pepperfry-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">PEPPERFRY</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Toys and Games</h4>
                            <h5 class="header6 p-color-cement font-weight-900">40% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="/firstcry-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">FIRSTCRY</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <div class="row">

                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Indian Wear</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up To 30% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="/nykaa-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">NYKAA</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">end of season sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">20th - 30th June</h5>
                            <div class="ecomSmallBox">
                                <a href="/tatacliq-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">TATACLIQ</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Fabindia Traditions</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Festiva Season</h5>
                            <div class="ecomSmallBox" >
                                <a href="/fabindia-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">FABINDIA</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">INSPIRATION</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Half Price Sale</h5>
                            <div class="ecomSmallBox">
                                <a href="/lifestylestores-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">LIFESTYLE</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
            <br>

        <div class="container" style=" border-bottom: 1px solid rgba(146, 156, 165, 0.2);display: none">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900">ShoppRe Deals</h3>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals1.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals2.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals3.png"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals4.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals1.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals2.png"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals3.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals4.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals1.png"/>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
        <br>
        <br>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header2 p-color-cement-dark font-weight-900" >Top Festival Offers, Deals & Sale</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Amazon Great Indian Festival"><span><a
                                        href="/amazon-great-indian-festival-sales-offers-prime-members-shopping-deals-shipping" target="_blank">Great Indian Festival 2020</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big billion Days"><span><a
                                        href="/flipkart-big-billion-days-sale-offers-top-brands-stores" target="_blank">Big Billion Days Sale 2020</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big Shopping Days"><span><a
                                        href="https://ship.shoppre.com/the-biggest-season-sale-flipkart-big-shopping-days-15-may-19-may/" target="_blank">Big Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Freedom Sale"><span><a
                                        href="/amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances" target="_blank">Amazon.in Freedom Sale</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Flipstart Days"><span><a
                                        href="/flipstart-days-avail-best-offers-on-flipkart-enjoy-special-discounts-for-the-first-three-days-of-every-month" target="_blank">Flipkart Flipstart Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="National Shopping Days"><span><a
                                        href="/flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india" target="_blank">National Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Right To Fashion"><span> <a
                                        href="/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" target="_blank">Myntra Right To Fashion Sale</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="puja"><span><a
                                        href="/pepperfry-online-shopping">Furniture Shopping in India</a></span>
                            </li><li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Rakhi"><span><a
                                        href="/send-rakhi-gifts-online-worldwide-at-cheap-rates">Rakhi Online Shopping India</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="kurta Clothing"><span><a
                                        href="/myntra-women-kurta-kurtis-international-shipping" target="_blank">Women Kurta Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/kerala-onam-online-shopping-guide-from-india">Onam online shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="sarees"><span><a
                                        href="/wedding-sarees-women-clothing-international-shipping" target="_blank">Sarees Online Shopping</a> </span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Stylish Polka dot dresses"><span><a
                                        href="/myntra-women-maxi-dresses-international-shipping" target="_blank">Maxi Dresses for Women</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="best kurta set for men"><span><a
                                        href="/firstcry-online-shopping" target="_blank">Baby & Kids Shopping</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a--}}
{{--                                        href="/new-year-offer" target="_blank">New Year Offer</a></span></li>--}}
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a
                                                                    href="https://www.shopprecouriers.com/first-time-international-courier-offer" target="_blank">Courier Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="frst50"><span><a
                                        href="/first-time-international-shipment-offer" target="_blank">First Shipment Discount</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="diwali"><span><a
                                        href="/diwali-offer">Diwali Offer</a></span></li>
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a--}}
{{--                                        href="/new-year-offer">New Year Offer</a></span></li>--}}
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="shop ship"><span><a
                                        href="/shop-ship">Shop & Ship Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="student"><span><a
                                        href="https://www.shopprecouriers.com/best-international-courier-service-for-students" target="_blank">Student Special Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="valentine"><span><a
                                        href="/send-valentines-day-gifts-international-shipping">Valentine's Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/onam-community-shipping-offer">Onam Community Offer</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
        <section class="delivery">
        <br>
        <br>
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark">Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">What Are You Waiting For Re! Just Come Shopp Re!</p>
                <a href="{{route('customer.register')}}" target="_blank">
                    <br>
                    <div class="btn btn-s-b btn-b-g">
                        <p>
                            Sign Up for FREE Today!
                        </p>
                    </div>
                </a>
            </center>
        </div>
            <br>
            <br>
            <br>
            <br>
    </section>
@endsection


@section('js_script')


    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
                //Fade
                { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../../../js/jssor.js"></script>
    <script type="text/javascript" src="../../../js/jssor.slider.js"></script>



    <script type='text/javascript'>
        var pubID="54240CL48886";!function(t,s){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=("https:"==document.location.protocol?"https://cdn0.cuelinks.com/js/":"http://cdn0.cuelinks.com/js/")+"cuelinksv1.js",document.getElementsByTagName("body")[0].appendChild(e)}(),$(document).ready(function(){var t=".MultiCarousel",s=".MultiCarousel-inner",e="";function a(){var a=0,i=0,r="",n="",o=$(t).width(),c=$("body").width();$(s).each(function(){i+=1;var t=$(this).find(".item").length;r=$(this).parent().attr("data-items"),n=r.split(","),$(this).parent().attr("id","MultiCarousel"+i),c>=1200?(a=n[3],e=o/a):c>=992?(a=n[2],e=o/a):c>=768?(a=n[1],e=o/a):(a=n[0],e=o/a),$(this).css({transform:"translateX(0px)",width:e*t}),$(this).find(".item").each(function(){$(this).outerWidth(e)}),$(".leftLst").addClass("over"),$(".rightLst").removeClass("over")})}function i(t,a){var i="#"+$(a).parent().attr("id");!function(t,a,i){var r="",n=$(a+" "+s).css("transform").match(/-?[\d\.]+/g),o=Math.abs(n[4]);if(0==t)r=parseInt(o)-parseInt(e*i),$(a+" .rightLst").removeClass("over"),r<=e/2&&(r=0,$(a+" .leftLst").addClass("over"));else if(1==t){var c=$(a).find(s).width()-$(a).width();r=parseInt(o)+parseInt(e*i),$(a+" .leftLst").removeClass("over"),r>=c-e/2&&(r=c,$(a+" .rightLst").addClass("over"))}$(a+" "+s).css("transform","translateX("+-r+"px)")}(t,i,$(i).attr("data-slide"))}$(".leftLst, .rightLst").click(function(){i($(this).hasClass("leftLst")?0:1,this)}),a(),$(window).resize(function(){a()})});
    </script>
@endsection
