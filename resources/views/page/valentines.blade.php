@extends('layout')

@section('title', 'Send Valentines Day Gifts | International Gifts Delivery from India ')
@section('description', 'Looking for the perfect Valentine’s day gift to send overseas? Get us to ship it to your destination at the cheapest of shipping rates, taking just 3-6 days.')
@section('keywords', 'valentine shopping, gift delivery, indian online shops, international shipping, love, personalized')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/send-valentines-day-gifts-international-shipping"/>
    <meta name="robots" content="nofollow" />

    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:site_name" content="ShoppRe" />

    <style>

        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .img-shopperstop-offer {
            display: none;
        }
        .underline-color {
            text-decoration: underline red;
        }

        .img-product {
            width: 216px;
        }

        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .banner {
            display: none;
        }

        .image-banner {
            display: block;
        }

        .p-b-26 {
            padding-bottom: 26px !important;
        }

        .header-section {
            height: 480px !important;
        }

        .valentine-slider{
            position: relative; top: 0px;
            left: 0px;
            width: 809px;
            height: 150px;
            overflow: hidden;
        }


        @media only screen and (max-width: 600px) {
            .valentine-slider{
                position: relative !important;
                top: 0px !important;
                left: 0px !important;
                overflow: hidden !important;
            }
            .img-product {
                width: 120px !important;
            }

            .header-section {
                height: 450px !important;
            }

            .m-t-img {
                margin-top: 0px !important;
            }

            .banner {
                display: block;
            }

            .image-banner {
                display: none;
            }

            .p-b-26 {
                padding-bottom: 26px !important;
            }
        }

        @media only screen
        and (min-width: 1024px)
        and (max-height: 1366px)
        and (-webkit-min-device-pixel-ratio: 1.5) {
            .img-product {
                width: 150px !important;
            }
        }

        .first-time-shipment {
            background-color: #11273b;
            height: 813px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 60px
        }

        .first-time-shipment .div-snow {
            padding-top: 146px
        }

        .first-time-shipment .div-snow img {
            position: absolute
        }

        .first-time-shipment .div-snow img {
            margin-left: -3px;
            position: absolute
        }

        .first-time-shipment .div-newyear {
            padding-top: 206px
        }

        .first-time-shipment .div-newyear img {
            margin-left: -12px;
            position: absolute
        }

        .textbox-email {
            width: 358px;
            height: 50px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            border-radius: 25px !important;
            background-color: #fff;
            border: 0;
            padding-left: 9%
        }

        .btn-grab-offer {
            width: 180px;
            height: 40px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            border-radius: 60px;
            background-color: #e85151;
            color: #fff;
            transition: .6s
        }

        .btn-grab-offer:hover {
            color: #fff;
            background-color: #c83b3b;
            -webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .6);
            -moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .6);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .6)
        }

        .fst-service {
            box-shadow: 0 0 10px rgba(17, 39, 59, .1);
            border-radius: 15px;
            background-color: #fafafb;
            margin-top: -360px;
            padding: 20px
        }

        .fst-service .c-image {
            padding: 20px
        }

        .fst-service .shopandship {
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .ps {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .ic {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .shopandship:hover {
            border: 1px solid #507dbc
        }

        .fst-service .ps:hover {
            border: 1px solid #507dbc
        }

        .fst-service .ic:hover {
            border: 1px solid #507dbc
        }

        .fst-service .shopandship, .ic, .ps, h2 {
            font-size: 22px;
            font-weight: 500;
            color: rgba(255, 255, 255, .6)
        }

        .fst-service .shopandship, .ic, .ps, p {
            color: #fff;
            font-size: 16px;
            font-weight: 600
        }

        .fst-service .btn-chris-place-order {
            padding: 13px 50px;
            color: #fff;
            width: 300px;
            height: 50px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            border-radius: 30px;
            background-color: #e85151
        }

        .chris-benefits {
            padding-top: 30px
        }

        .chris-benefits ul {
            text-decoration: none;
            list-style: none
        }

        .chris-benefits ul li {
            color: #224464;
            font-family: Montserrat, sans-serif;
            font-size: 15px;
            font-weight: 400;
            text-align: left;
            padding-top: 15px
        }

        .chris-benefits ul li img {
            margin-top: 9px
        }

        .text-center div {
            padding-top: 20px
        }

        .img-new-year {
            display: none
        }

        .chris-benefits .panel {
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05) !important
        }

        .chris-benefits .panel ul li span {
            margin-left: 15px
        }

        .leter-space {
            letter-spacing: 1px
        }

        #contact-support {
            padding-bottom: 30px
        }

        .select-control {
            float: left;
            width: 90px !important;
            height: 40px !important;
            font-size: 13px;
            font-weight: 400;
            font-style: italic;
            border-left: 0;
            border-radius: 3px;
            background-color: #fafafb;
            border: none
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff !important;
            border: none !important;
            border-radius: 4px !important;
            height: 40px !important;
            padding-top: 5px !important
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            margin-top: 4px !important
        }

        @media screen and (device-aspect-ratio: 40/71) {
            .img-mobile-view {
                width: 300px;
            }
        }

        @media only screen and (max-width: 600px) {
            .first-time-shipment {
                height: 651px
            }

            .img-mobile-view {
                display: block !important;
            }

            .img-desktop-view {
                display: none !important;
            }

            .textbox-email {
                width: 330px
            }

            .div-snow {
                display: none
            }

            .div-newyear {
                display: none
            }

            .fst-service {
                margin-top: -260px
            }

            .c-image {
                display: none
            }

            .txt-align {
                text-align: center
            }

            .img-new-year {
                display: block;
                width: 240px
            }

            .chris-benefits ul li {
                font-size: 16px
            }
        }
    </style>

@endsection

@section('content')

    <main>
        <div class="header">
            <div class="col-md-12 col-sm-12 col-xs-12">

            </div>
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">Valentine Day Gifts Online Shopping</h1>
                    <br>
                </center>
                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i>Send Personalised - Shop Online Valentine Gifts in India | International Gifts Delivery through ShoppRe. </i></p>
                <br>
                <br>
            </div>
        </div>
    </main>


    <section>
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <a href="https://www.myntra.com/shop/rtf20-prebuzz" target="_blank">
                    <img class="img-desktop-view" src="/img/images/vday1.jpg" width="100%"></a>
                <center>
                    <a href="https://www.myntra.com/shop/rtf20-prebuzz" target="_blank">
                        <img class="img-mobile-view img-shopperstop-offer"
                             src="//assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/banners/2020/1/14/f8f55036-8aa7-4a9c-8174-f8370e968cc81578981937131-Untitled-5_01_01.jpG" width="350px" ></a>
                </center>
                <div class="">
                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">
                        Below are the Recommended & Recently Shipped Gifts! </h2>
                </div>
            </div>


            <!-- Jssor Slider Begin -->
            <!-- You can move inline styles to css file or css block. -->
            <div class="" style="margin-top: 20px;padding-bottom: 0px;">
                <center>
                    <div id="slider1_container" class="valentine-slider"
                    >

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px; overflow: hidden;">
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                            <div><img u="image" src="/img/images/slider.jpg" /></div>
                        </div>

                        <!-- Bullet Navigator Skin Begin -->
                        <style>
                            /* jssor slider bullet navigator skin 03 css */
                            /*
                            .jssorb03 div           (normal)
                            .jssorb03 div:hover     (normal mouseover)
                            .jssorb03 .av           (active)
                            .jssorb03 .av:hover     (active mouseover)
                            .jssorb03 .dn           (mousedown)
                            */
                            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
                            {
                                background: url(../img/b03.png) no-repeat;
                                overflow:hidden;
                                cursor: pointer;
                            }
                            .jssorb03 div { background-position: -5px -4px; }
                            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
                            .jssorb03 .av { background-position: -65px -4px; }
                            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
                        </style>
                        <!-- bullet navigator container -->
                    {{--                <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">--}}
                    {{--                    <!-- bullet navigator item prototype -->--}}
                    {{--                    <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><div u="numbertemplate"></div></div>--}}
                    {{--                </div>--}}
                    <!-- Bullet Navigator Skin End -->

                        <!-- Arrow Navigator Skin Begin -->
                        <style>
                            /* jssor slider arrow navigator skin 03 css */
                            /*
                            .jssora03l              (normal)
                            .jssora03r              (normal)
                            .jssora03l:hover        (normal mouseover)
                            .jssora03r:hover        (normal mouseover)
                            .jssora03ldn            (mousedown)
                            .jssora03rdn            (mousedown)
                            */
                            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
                            {
                                position: absolute;
                                cursor: pointer;
                                display: block;
                                background: url(../img/a03.png) no-repeat;
                                overflow:hidden;
                            }
                            .jssora03l { background-position: -3px -33px; }
                            .jssora03r { background-position: -63px -33px; }
                            .jssora03l:hover { background-position: -123px -33px; }
                            .jssora03r:hover { background-position: -183px -33px; }
                            .jssora03ldn { background-position: -243px -33px; }
                            .jssora03rdn { background-position: -303px -33px; }
                        </style>
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
                        <!-- Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                </center>
            </div>

            <div class="row text-center">
                {{--                <p class="f-s-20"><span class="f-c-red f-w-9"><a href="https://www.myntra.com/" target="_blank">END OF SEASON SALE(40-80% OFF)</a></span></p>--}}

                <br>
                <h2 class="f-s-20 p-color-cement-dark font-weight-900"><u>Valentine Love Cards</u></h2>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://clnk.in/kiVR" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k2urhjk0/card/z/z/s/48-set-of-48-love-cards-for-explosion-box-or-other-diy-love-original-imafm3g5yagrgkpm.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Set of 48 Love Cards
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 199
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/38T3mgj" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jr2dpjk0/valentine-gift-set/u/b/z/st0004196-saugat-traders-original-imaezgrzgqmkwfcr.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Sweetheart Scroll Card
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 283
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/3aKCCjv" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k572gsw0/card/n/5/d/10-pinklovenecard-8030-greeting-oddclick-original-imafnxprgzjjm4v8.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Set Of 10 I Love You Cards
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 199
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RYP9Ym" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jnj7iq80/card/n/4/z/1-cwp000001-greeting-crafted-with-passion-original-imafa7a8kamajdsz.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Passion Explosion Box
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 399
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            3-4 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{--                    <div class="col-md-12 col-sm-12 col-xs-12">--}}
                {{--                        <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">category 1</h2>--}}
                {{--                    </div>--}}

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/37tsRo4" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/ju4em4w0/card/c/v/v/1-eb-p-27-greeting-paperica-original-imaffbfksf5gjndd.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Romantic Handmade Cards
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 899
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/36tGrXb" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jcatwnk0/card/m/m/z/1-cl009-greeting-rmantra-original-imafffqdthaagqra.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Handmade Love 3D Card
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 399
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            7-8 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/2Rvrz6s" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/7120AF-BJ5L._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Silk Combo of 2 Teddy
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 349
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            2-4 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/3aKWOSy" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/81qZHtjukbL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Musical LED Greeting Cards
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 299
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 "><u>Valentine Gift Sets</u></h2>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/37wtZHs" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://www.giftcart.com/pub/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/0/0/0004.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Personalised Message in Bottle
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 599
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                             4-6 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RzT12R" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jy4q3680/valentine-gift-set/m/j/z/24k-gold-foil-plated-rose-wedding-decoration-artificial-golden-original-imafgfnhyhcxxbfg.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Artificial Flower Gift Set
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 189
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            5-6 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2Rx8pge" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jr9iwsw0/valentine-gift-set/2/e/b/gift-set-stylin-original-imafdfgtszzreynx.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Stylin Soft Toy
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 190
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            4-5 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2O5wY21" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jpodaq80/valentine-gift-set/k/g/y/message-pill-bottle-tiny-message-in-bottle-surprise-message-in-original-imafbuzhsvggduzz.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Message Pills
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                           <i class="fa fa-inr" aria-hidden="true"></i> 205
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            5-6 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2tVhoit" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jbxyxzk0/valentine-gift-set/q/x/z/couple-showpiece-with-quoted-wooden-photo-frame-valentine-gift-original-imaff64dnnxvhk99.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Tied Ribbons Showpiece
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                                <i class="fa fa-inr" aria-hidden="true"></i> 559
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                1-2 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/317ogpe" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jc0ttow0-1/valentine-gift-set/z/w/s/valentines-day-best-gift-for-husband-hubby-him-boyfriend-original-imaeq6y84s5x8mfm.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Tied Ribbons Greeting Card
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                                <i class="fa fa-inr" aria-hidden="true"></i> 509
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                1-2 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RyMC8b" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k2krekw0/valentine-gift-set/f/j/t/iz19bracelet5msg3candlemn-box-01-me-you-original-imafhw9hymv4temb.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    ME&YOU Gift Set
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 499
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                5-6 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="http://bit.ly/2GsSqK7" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jr58l8w0/valentine-gift-set/c/r/m/valentine-gifts-for-girlfriend-wife-her-gift-box-swan-pendent-original-imafdygznhhgbxpv.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Artificial Flower Gift Set
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 779
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                6-7 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 "><u>Valentine Cushions</u></h2>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/37xs2KN" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jq6y0sw0/valentine-gift-set/r/r/h/valentine-day-gifts-romantic-gift-for-girlfriend-boyfriend-wife-original-imafc9pdcchahub6.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Indigifts Cushion
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 259
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                3-4 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/36tDB4y" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/cushion-pillow-cover/z/z/b/jc01070-jc01070-stybuzz-original-imae3mrswwp9hbfq.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    StyBuzz Abstract Cushions Cove
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 149
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                4-5 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RuwjZN" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jr83gy80/cushion-pillow-cover/8/x/f/happy-valentines-day-valentines-love-gift-for-every-day-with-you-original-imafd2jztggzzd6j.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    OddClick Printed Cushions
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 219
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                4-5 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RSw8Xl" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jwqpocw0/pillow/h/f/h/iz19magiccu16golden-010-iz19magiccu16goldenmn-010-me-you-original-imaffgryprye8kdj.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Sequin Printed Cushion
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 449
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                5-6 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/37x55rh" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71dMI7hRyzL._SL1100_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    indibni Printed Cushion
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 299
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    1-2 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RzZoDj" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/cushion-pillow-cover/2/t/3/stfc00200-stfc00200-stybuzz-original-imaeeujhsfmfzrp4.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    3D Printed Cushions Cover
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 198
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    4-5 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2t2tUw3" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jq6y0sw0/valentine-gift-set/d/v/s/valentine-day-gifts-romantic-gift-for-girlfriend-boyfriend-wife-original-imafc9pbbzhjamhh.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Indigifts Cushion
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 259
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    3-4 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2tYBMz7" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jwqpocw0/pillow/z/y/b/golden-mermaid-sequin-cushion-cover-iz19magiccu16golden-015-original-imaffgtqftqaq4vq.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Sequin Printed Cushion
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 449
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 "><u>Valentine Keychains</u></h2>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/3aSnNMa" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://media.chumbak.com/media/catalog/product/image/500x625/8/9/8907605061509_top_5.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Go Where You Feel
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 295
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/2U8ZN1n" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61KfUX-k49L._SL1100_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Couple Heart Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 199
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    6-7 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/3aNMLw2" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/41cRJHH8MKL.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Asier Designer Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 390
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    3-4 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/3aNvS4z" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/41IAzegck6L._SX450_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Drive Safe Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 169
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    3-4 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/30YZwPO" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71ydT1xGEfL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Kissing Couple Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 158
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    6-7 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/2O2y4vq" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61QfN5U30UL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Metal Heart Couple Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 248
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    3-4 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/3aKQg6h" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71wvRjpIQLL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Pen & Couple Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 359
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    2-3 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/311UXV6" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61sfMn3uSDL._SL1200_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Valentine's Day Keychain
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 69
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    7-8 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 "><u>Valentine Teddy Bears</u></h2>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2tNS4Lo" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jnamvm80/stuffed-toy/h/x/e/couple-bear-20-dimpy-stuff-original-imafaygshec42mv9.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Dimpy Stuff Couple Bear
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 279
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    2-3 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/310IbpD" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jfoac280/stuffed-toy/v/z/e/dimpy-bear-w-cap-20-dimpy-stuff-original-imaf432nhxagrwzv.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Dimpy Stuff Bear W/Cap
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 224
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    2-3 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2uITvKT" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jpbic280/stuffed-toy/s/p/k/romantic-gifts-surprise-cycle-teddy-for-wife-girlfriend-fiance-original-imafbhv79dhtcsgs.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Surprise Cycle Teddy
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 398
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    3-4 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/2TZzWZz" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51JFYS8BsOL._SL1100_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Hanumant Teddy Bear
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 799
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2O46zS8" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://static.archiesonline.com/public/images/product/large/8907089555938-(B).jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Beige Teddy Bear
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 399
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    4-5 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/38IyKhg" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://static.archiesonline.com/public/images/product/large/VAL19-031.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Adorable Gift Hamper
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 698
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    4-5 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2tVyigV" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://cdn.shopclues.com/images/thumbnails/30146/320/320/LWFZ001Pink11452498674.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Dealbindaas Kissing Couple
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 399
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2t4ZF7V" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/jjq18y80/valentine-gift-set/k/u/e/unique-valentine-day-gift-milliardaire-stile-di-vita-original-imaf77ng4gscfc3g.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Artificial Flower & Teddy
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 159
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 "><u>Valentine Special Gifts For Her</u></h2>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/36wGBNp" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71uzcG9Na1L._UL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Bagclan Handbag
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 1010
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    4-5 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/3aNOCRw" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61appNpX7IL._UL1280_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Women's Handbag
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 349
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    4-5 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/36BvaUG" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71tmQkzzazL._UL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Multi Pocket Handbag & Teddy
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 1099
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/31b6S2Z" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/8362339/2019/1/8/e6fca798-0f27-46f9-be29-06a543a91d871546921271109-Allen-Solly-Women-Red-Solid-Three-Fold-Wallet-81015469212705-1.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Red Solid Three Fold Wallet
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 923
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    4-5 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 "><u>Valentine Special Gifts For Him</u></h2>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/2RwtdVm" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/11122526/2020/1/7/d50594e4-ce87-40bc-83c9-5efe16a222a61578379755965-Calvin-Klein-Men-Black-Solid-Two-Fold-Wallet-215157837975513-1.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Black Leather Two Fold Wallet
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 5599
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="http://bit.ly/38D1lEK" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/11281684/2020/1/24/53d86749-6e39-4df6-8963-f54badd043b01579866338382-Roadster-Men-Wallets-2261579866336635-1.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Brown Textured Wallet
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 629
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    5-6 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/3154Hhk" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/81O0PQjAFOL._UL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Urban Forest Wallet
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i> 1119
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    2-3 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://amzn.to/2S1Z7Z0" target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71VGD2wA5pL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                        padding-top: 0px !important;text-align: left;
                                                        text-decoration: none;">
                                    Bullfinch Brown Wallet
                                </div>
                                <div style="padding-top: 0px !important;">
                                                <span style="font-size: 14px;font-weight: bold;
                                                             padding-top: 5px;color: #337ab7;;
                                                             display: inline-block;">
                                                   <i class="fa fa-inr" aria-hidden="true"></i>
                                                </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                        color: #181818;font-size: 14px;font-family: Lato;
                                                        text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                    2-3 days
                                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row text-center">
                {{--                <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Valentine day gift for Him</h2>--}}

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <hr>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.myntra.com/2289170" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/74019ae7-6fce-496f-a09e-f78fb67713261575661210919-Roadster-.png">
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/10472772" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/89f027ba-c551-4044-a975-2be5adac15e61575661203036-H-M_M.png">

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/10646226" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/a28edc66-0975-4a59-94e0-5bf28fefb2051575661203416-Allen_M.png">

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/9682069" target="_blank">
                            <img class="img-product m-t-img " src="https://assets.myntassets.com/assets/images/banners/2019/12/7/73cf29e8-c0b0-4867-944b-977a18de12b51575661203088-GAP_M.png">
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.myntra.com/wrogn201912hero" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/11/4cb92405-0c44-47a3-a762-b86da2a618441576065682731-Wrogn.png">

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/hrx-herolook-dec19-eors" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/823c28b8-c958-4a79-8232-a63a4d55788b1575726970932-HRX.png">

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/it-dhoni-aw19" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/0b761a21-1ab9-4874-a9df-563676191f421575726970902-Indian-Terrain.png">

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/6794737" target="_blank">
                            <img class="img-product m-t-img " src="https://assets.myntassets.com/assets/images/banners/2019/12/7/623b689a-17ed-4a1c-a141-f5896d0c6c2b1575726970839-Skult.png">

                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.myntra.com/hrx-justin-141119?f=Gender%3Amen%2Cmen%20women" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/9298137/2019/9/11/ab51e30a-fb56-4d82-adb7-465b2134fbdb1568184237811-HRX-by-Hrithik-Roshan-Men-Jackets-9821568184236145-1.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                HRX Jackets
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/hrx-by-hrithik-roshan?f=Categories%3ASweatshirts%3A%3AGender%3Amen%2Cmen%20women" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/9445519/2019/7/10/f07075b8-7bfa-4b48-9296-4470f2483ff81562759794838-HRX-by-Hrithik-Roshan-Men-Sweatshirts-8021562759793334-1.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                HRX Sweatshirts
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/hrx-by-hrithik-roshan?f=Categories%3AJackets%3A%3AGender%3Amen%20women%2Cwomen" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/9965771/2019/9/2/30592c23-ed33-47b8-9099-3cdb028d18411567407784876-HRX-by-Hrithik-Roshan-Women-Jackets-311567407783577-1.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                HRX Jackets
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/hrx-by-hrithik-roshan?f=Categories%3ASweatshirts%3A%3AGender%3Amen%20women%2Cwomen" target="_blank">
                            <img class="img-product m-t-img " src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/4653848/2018/11/6/55b3f7c7-48fc-47a9-b0d0-243b389df9d71541507599052-HRX-by-Hrithik-Roshan-Women-Olive-Green-Solid-Hooded-Sweatshirt-7571541507598843-1.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                HRX Sweatshirts
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section >
        <div class=" container shopContainer-valentaine no-padding">
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                        class="startsValidValue"> 1st Feb 2020</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                        class="startsValidValue"> 15th Feb 2020</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                        class="startsValidValue"> LUV2020</span></p>
                        </center>

                    </div>
                </center>
            </div>

            <div class="col-md-12">
                <div class="col-md-4 col-sm-4 col-xs-4">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">

                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">

                </div>
            </div>

            <div class=" col-md-12 offer-description">
                <label class="f-s-28 f-c-d-greay">Shop & Ship from 1000+ Indian online stores:</label>
{{--                <div class="row" style="padding-right:10px;padding-left: 30px">--}}
{{--                    <center>--}}
{{--                        <div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">--}}
{{--                            <center class="d-online-stores">--}}
{{--                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>--}}
{{--                            </center>--}}

{{--                        </div>--}}
{{--                        <div class="col-md-1  d-stores-box col-xs-6">--}}
{{--                            <center class="d-online-stores">--}}
{{--                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>--}}
{{--                            </center>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1  d-stores-box col-xs-4">--}}
{{--                            <center class="d-online-stores">--}}
{{--                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1.png"--}}
{{--                                     alt="Jabong"/>--}}
{{--                            </center>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1  d-stores-box col-xs-4">--}}
{{--                            <center class="d-online-stores">--}}
{{--                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="SnapDeal"/>--}}
{{--                            </center>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1  d-stores-box col-xs-4">--}}
{{--                            <center class="d-online-stores">--}}
{{--                                <img class="shoppingKart"--}}
{{--                                     src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>--}}
{{--                            </center>--}}
{{--                        </div>--}}

{{--                    </center>--}}
{{--                </div>--}}
                <br>
                <p class="f-s-16 f-c-gray f-w-4 l-h-2 ">Shop around in 1000+ Indian stores to help make your Valentines' extra special this year,
                    and get us to ship it to you at the cheapest of shipping rates as fast as it can reach you!   </p>


                <h1 class="f-s-18 f-c-d-greay f-w-7">Love is in the air and it is time to pull out all the stops and get the hopeless romantic in you out and about!</h1>
                <p class="f-s-16 f-c-gray">Celebrate this Valentine’s day with the magnificent beauty of Indian products and the versatility of Indian online shops.</p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">Looking for the perfect Valentine’s day gift to send overseas?</h1>
                <p class="f-s-16 f-c-gray"><a href="{{route('stores1')}}">Indian online shops</a> for sure will help you get the best gift for your loved one this year,
                    and make this one the most memorable ever! Online shopping from India is the best bet when it comes to
                    Valentine’s day gifts, in terms of price and quality.
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">How does online shopping & international shipping from india work though?</h1>
                <p class="f-s-16 f-c-gray">Since the most Indian online shops don’t offer international shipping; you  have to
                    consider <a href="{{route('forwarding')}}">parcel forwarding from India</a> by a third party as your best option.
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">How do we support international shipping from India?</h1>
                <p class="f-s-16 f-c-gray">ShoppRe provides you with a <a href="{{route('indianVirtual')}}">virtual shipping address</a> to where you can ship all your purchases.
                    We’ll receive them at our facility and store them in your personal locker and when you make a request to ship it and make
                    payment, your package will be on its way to the destination, taking just 3-6 days!
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">Now pick your favorite valentines’ indulgences from India, sit back & relax! </h1>
                <p class="f-s-16 f-c-gray">Send Valentine’s day gifts to USA, UK, UAE, Australia or anywhere around the world, we’ll be here to help you through it.</p>
                <br>

                <div class="offerDesc">
                    <h5>Cashback: Terms & Conditions</h5>
                    <ul>
                        <li>15% Cashback upto INR 250/-</li>
                        <li>This offer cannot be clubbed with any other. </li>
                        <li>The cashback goes to your Wallet. (Use Coupon: LUV2020 when you check-out).</li>
                        <li>The cashback would only be active during 1st Feb to 15th Feb 2020.</li>
                        <li>The <shipment></shipment> should contain items related to Valentine's.</li>
                        <li>This cashback is applicable only for international shipments.</li>
                        <li>The cashback can only be used to pay off your shipping costs.</li>
                        <li>Clearance charges are applicable for shipping Special Items - liquids & semi liquids such as cosmetics, medicines, oils & homemade food.</li>
                        <br>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="chris-benefits">
        <div class="container " >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900">Shop India Stores & Ship Globally with ShoppRe.com</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel boxed outer border-1px">
                        <ul>
                            <li><span><a href="/myntra-online-shopping-shipping-from-india">Myntra Online Fashion Store</a></span></li>
                            <li><span><a href="/flipkart-online-shopping">Flipkart.com Online Shop</a></span></li>
                            <li><span><a href="/amazon-online-shopping">Amazon.in Shopping India</a></span></li>
                            <li><span><a href="/jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>
                            <li><span><a href="/ajio-online-shopping">AJIO Fashion & Lifestyle Brand</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="/limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>
                            <li><span><a href="/chumbak-online-shopping" target="_blank">Chumbak Online Shopping</a></span></li>
                            <li><span><a href="/firstcry-online-shopping" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>
                            <li><span><a href="/fabindia-online-shopping" target="_blank">Fabindia Traditional Wear</a></span></li>
                            <li><span><a href="/lifestylestores-online-shopping" target="_blank">Lifestylestores Shopping India</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="/pepperfry-online-shopping" target="_blank">Pepperfry Furniture Shopping</a></span></li>
                            <li><span><a href="/shoppersstop-online-shopping" target="_blank">Shoppers Stop Latest Trends‎</a></span></li>
                            <li><span><a href="/nykaa-online-shopping" target="_blank">Nykaa Online Beauty Store</a></span></li>
                            <li><span><a href="/tatacliq-online-shopping" target="_blank">Tata CLiQ Online Shopping</a></span></li>
                            <li><span><a href="https://clnk.in/j1Oo" target="_blank">Biba Ethnic Wear for Ladies</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <div class="text-center">
            <br>
            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">Indian online shopping sites</a>
        </div>
        <br/>
        </div>
    </section>
    <br>
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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

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
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

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
        <br>
    </section>

@endsection

@section('js_script')
    <script type='text/javascript'>
        var cId = '52423';

        (function (d, t) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/') + 'cuelinksv2.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 809));
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

@endsection
