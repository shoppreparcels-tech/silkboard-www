@extends('layout')

@section('title', 'Face Mask International Shipping | CoronaVirus ')
@section('description', '')
@section('keywords', 'coronavirus, face mask, diagnosis, china virus, wuhan city, sars, ')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/face-mask-international-shipping"/>
    <meta name="robots" content="nofollow" />


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
{{--            <div class="col-md-12 col-sm-12 col-xs-12">--}}

{{--            </div>--}}
{{--            <div class="container"><br><br><br>--}}
{{--                <center>--}}
{{--                    <h1 class="f-s-36 f-c-white f-w-8">Face Mask Online Shopping</h1>--}}
{{--                    <br>--}}
{{--                </center>--}}
{{--                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i>Send Personalised - Shop Online Valentine Gifts in India | International Gifts Delivery through ShoppRe. </i></p>--}}
{{--                <br>--}}
{{--                <br>--}}
{{--            </div>--}}
        </div>
    </main>



        <br>
            <div class="row" style="margin-top: 2%">
                <marquee behavior="alternate" width="" height="30px" height="100px">

                    <span class="f-s-20">* <a href="#terms">ALERT</a>: Due to Export Ban from GOVT. Of India. We are unable to Export Face Mask & Sanitizer.
                        For more deatils chat online. Before placing the Order.*</span>
                </marquee>
                    <img class="img-desktop-view"
                         src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/e959c827-8ad9-4429-a4d4-19eee741e798.png"
                         width="100%">
                <center>
                        <img class="img-mobile-view img-shopperstop-offer"
                             src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/39cae6fc-ebe9-4040-a560-6af6f21b3545.png"
                             width="100%" style="margin-top: 2%;">
                </center>
{{--                <div class="">--}}
{{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">--}}
{{--                        Below are the Recommended & Recently Shipped Gifts! </h2>--}}
{{--                </div>--}}
            </div>
    <section>

        <div class="container fst-service" style="margin-top: 0px;">

            <div class="row text-center">
                <br>
                <h2 class="f-s-20 p-color-cement-dark font-weight-900"><u>
                       Special Campaign<span class="f-s-20 f-c-blue f-w-9"> ( Coronavirus )</span> Latest Shipped Face Mask Across The Globe
                    </u></h2>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Honeywell-Pollution-Foldable-Exhalation-Valve/dp/B01I9PVOPW/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61H7bUkdnSL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                     Anti Pollution Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 553
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
                        <a href="https://www.amazon.in/Filtra-4-Ply-Loop-Surgical-Face/dp/B00IIIKZK6/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61P-uE0k9sL._SL1000_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Surgical Face Mask
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

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Purell-Hand-Sanitizer-Jelly-Carrier/dp/B075QFQM1H/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/41ked%2BPOubL.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Purell Hand Sanitizer
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 352
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
                        <a href="https://www.amazon.in/Dettol-Anti-Pollution-Cambridge-Basic/dp/B07JP51P2S"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61gC5hNVUOL._SL1000_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                   N95 Dettol Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 329
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
                        <a href="https://www.amazon.in/dp/B07SRYFGXD"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71gWubYDTDL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Hygienic Wet Wipes
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 110
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
                        <a href="https://www.amazon.in/NUVO-MEDSURG-Disposable-Face-Elastic/dp/B07C7CGWM1/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/715oemW7LvL._SL1055_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Disposable Filter Mask
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
                        <a href="https://www.amazon.in/dp/B00JB1ARMK/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61OWpIsQpFL._SL1000_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    3-Ply Ear Loop Mask, 100 Pcs
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 250
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
                        <a href="https://www.amazon.in/dp/B00IIIL05A"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/617nqAETaGL._SL1000_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Surgical Face Mask, 50 Pcs
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

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://vitalticks.in/green-guava-premium-elastic-face-mask-4ply.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://vitalticks.in/pub/media/catalog/product/cache/a741282e2e77597504b5eed1936d8886/m/a/maskpremium.png" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    4PLY Premium Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 250
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
                        <a href="https://www.seniority.in/anti-dust-and-pollution-face-mask-pack-of-3-bodyguard-pdp"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://assets.seniority.in/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/b/o/bodyguard_pm_2.5_anti_dust_pollution_sen017-fsp231_1_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                   Anti Dust Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 270
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
                        <a href="https://www.shein.in/Solid-Mouth-Mask-1pc-p-675508-cat-1962.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://img.ltwebstatic.com/images2_pi/2019/08/06/156507325949237198_thumbnail_600x799.webp" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Solid Mouth Mask 1pc
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 121
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
                        <a href="https://www.libraltraders.com/ld-premium-3-ply-face-mask-elastic-loop-100-pk.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://www.libraltraders.com/pub/media/catalog/product/cache/1/image/1000x1320/e9c3970ab036de70892d86c6d221abfe/l/d/ld-face-mask.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    3 Ply Elastic Loop 100/pk
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                           <i class="fa fa-inr" aria-hidden="true"></i> 245
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
                        <a href="https://www.ninthavenue.com/products/unisex-antidust-solid-black-white-star-cotton-earloop-face-mouth-mask-muffle-2pcs"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://cdn.shopify.com/s/files/1/1653/1839/products/513XVvOUCdL_1024x1024.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Unisex Anti Dust Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                                <i class="fa fa-inr" aria-hidden="true"></i> 1,926
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">

                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.1mg.com/otc/smart-air-filters-n99-pollution-mask-with-valvebra-otc468729"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://res.cloudinary.com/du8msdgbj/image/upload/l_watermark_346,w_690,h_700/a_ignore,w_690,h_700,c_pad,q_auto,f_auto/v1537350016/eltyupx7aoyf8lb1dfsc.png" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    N99 Smart Air Filters Musk
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
                                                1-2 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Bodyguard-Reusable-Pollution-Activated-Carbon/dp/B07KG19762"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/816VSmIHxPL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Reusable Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 225
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
                        <a href="https://www.amazon.in/3M-9332-Pollution-Mask-Aura/dp/B01LZF2RQM/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61jgtSSLhJL._SL1000_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    N99 Pollution Mask Aura
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 243
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
                        <a href="https://www.flipkart.com/orthosys-100-pcs-disposable-face-mask-respirator/p/itmer27n7kbwkchc"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/mask-respirator/n/7/b/100-pcs-disposable-face-mask-and-respirator-orthosys-original-imaer2yzuwn32hzp.jpeg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    100 Pcs Disposable Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 103
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
                        <a href="https://www.1mg.com/otc/1mile-disposable-3-ply-face-mask-blue-regular-otc515765"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://res.cloudinary.com/du8msdgbj/image/upload/l_watermark_346,w_690,h_700/a_ignore,w_690,h_700,c_pad,q_auto,f_auto/v1559892258/mnj32m5chdfel8wty3np.png" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    1Mile Disposable 3 Ply Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 525
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
                        <a href="https://www.moglix.com/love4ride-2-pcs-black-cotton-anti-pollution-bike-face-mask-set/mp/msne5n8e1zjgkl"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://img.moglimg.com/p/oqIVnBTM01GOQ.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    Love4ride 2 Pcs Face Mask Set
                                </div>
                                <div style="padding-top: 0px !important;">
                                            <span style="font-size: 14px;font-weight: bold;
                                                         padding-top: 5px;color: #337ab7;;
                                                         display: inline-block;">
                                               <i class="fa fa-inr" aria-hidden="true"></i> 52
                                            </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                    color: #181818;font-size: 14px;font-family: Lato;
                                                    text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                                4-7 days
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/NUVO-MEDSURG-Disposable-Face-Elastic/dp/B07B1XWQB9"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/61oAhJPuz5L._SL1053_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                    padding-top: 0px !important;text-align: left;
                                                    text-decoration: none;">
                                    3 Ply With Elastic Mask (100 Pcs)
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
