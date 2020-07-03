@extends('layout')

@section('title', 'How to buy Best Surgical Face Mask in India | International Shipping ')
@section('description', 'Surgical Mask Shopping Online from India for Low Prices. Ship to your country with ShoppRe Cheap International Shipping Rates. Sign up for Free.')
@section('keywords', 'surgical mask, disposable face mask, gloves, 3 ply, 2 ply, n95, respirator mask, coronavirus, face mask, diagnosis, china virus, wuhan city, sars, washing your hands ')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/face-mask-international-shipping"/>
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Online shopping for Face Masks | ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/face-mask-international-shipping"/>
    <meta property="og:image" content="https://mcusercontent.com/8f7212d51aa9533c4788ccf05/images/a4ce8394-213d-4003-89c6-165a38f814b6.png"/>
    <meta property="og:description" content="Shop Face Mask from any Indian Website & Ship Worldwide. Best Rates, Fastest Processing, Free Sign-up!"/>

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


    <div class="row" style="margin-top: 3%">
        <img class="img-desktop-view"
             src="https://mcusercontent.com/8f7212d51aa9533c4788ccf05/images/b7b06c24-a311-4c3b-a102-6f22facd1bcc.jpg"
             width="100%">
        <center>
            <img class="img-mobile-view img-shopperstop-offer"
                 src="https://mcusercontent.com/8f7212d51aa9533c4788ccf05/images/548fc28f-0531-4024-bdc3-a4189a6a2553.jpg"
                 width="90%" style="margin-top:6%;">
        </center>
        {{--                <div class="">--}}
        {{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">--}}
        {{--                        Below are the Recommended & Recently Shipped Gifts! </h2>--}}
        {{--                </div>--}}
    </div>
    <section>

        <div class="container fst-service" style="margin-top: 0px;">

            <div class="row text-center">
                <marquee direction="left">
                 <span class="f-s-20 p-color-cement-dark font-weight-900">
                    4-ply, 3-ply, 8-Ply, N-95 & Cloth Mask are banned for shipping internationally.</span></marquee>
                <h2 class="f-s-20 p-color-cement-dark font-weight-900"><u>
                        Special Campaign<span class="f-s-20 f-c-blue f-w-9"> ( Virus & Anti Air Pollution )</span>
                    </u></h2>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Disposable-Face-Mask-Elastic-Blue/dp/B07MKD5PYX"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/516r59TKI8L._SL1053_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Disposable 2 Ply Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 800
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
                        <a href="https://www.amazon.in/dp/B084FXVL31/ref=sspa_dk_hqp_detail_aax_0"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71vunNEphJL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Glider Disposable Style 2 Ply
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 2,499.00
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            3-6 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/mop-n-me-disposable-3-ply-air-pollution-blue-face-mask-pack-50-mnm-mask-green-mask/p/itm196322817c5d5"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k6nxrbk0/mask-respirator/3/p/p/m14-mop-n-me-original-imafpfzn38dwz3c5.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Disposable 3 Ply - Pack of 50
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 1,429
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
                        <a href="https://pinkblue.in/romsons-dispo-mask.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://d11eqtcd4tfmzx.cloudfront.net/pub/media/catalog/product/cache/1/image/1000x1000/e9c3970ab036de70892d86c6d221abfe/r/o/romsons_dispo_mask.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Romsons Dispo Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 138
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
                        <a href="https://otbliss.com/face-mask-premium-fluid-resistant.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://otbliss.com/pub/media/catalog/product/cache/ec19c9f8db37af49cbf92829c2885eff/m/a/mask_box_copy.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    3 Ply Face Mask - Fluid Resistant
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 1200
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            7-9 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/sj-stocks-surgical-face-mask-10-pieces-shaping/p/itmc25fbea8e1eb1?pid=FSKFZNSPPHDNCGCF&lid=LSTFSKFZNSPPHDNCGCFSFVARJ&marketplace=FLIPKART&fm=productRecommendation%2Fsimilar&iid=R%3As%3Bp%3AFSKESKWYSTFHACGU%3Bl%3ALSTFSKESKWYSTFHACGUJJ37GP%3Bpt%3App%3Buid%3A52170964-2313-01ab-f854-0e8fe7b362ab%3B.FSKFZNSPPHDNCGCF.LSTFSKFZNSPPHDNCGCFSFVARJ&ppt=pp&ppn=pp&ssid=ap34o1v7cw0000001583305695588&otracker=pp_reco_Similar%2BProducts_1_32.productCard.PMU_HORIZONTAL_Similar%2BProducts_FSKFZNSPPHDNCGCF.LSTFSKFZNSPPHDNCGCFSFVARJ_productRecommendation%2Fsimilar_0&otracker1=pp_reco_PINNED_productRecommendation%2Fsimilar_Similar%2BProducts_GRID_productCard_cc_1_NA_view-all&cid=FSKFZNSPPHDNCGCF.LSTFSKFZNSPPHDNCGCFSFVARJ"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k66sh3k0/face-shaping-mask/g/c/f/surgical-face-mask-10-pieces-mask-sj-stocks-original-imafzzrjj3pafhw7.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Blossom Face Mask 3 Ply
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 210
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            5-8 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/om-face-mask-disposable-2-ply-elastic-shaping/p/itmeskwyh5nzzzwg?pid=FSKESKWYSTFHACGU&lid=LSTFSKESKWYSTFHACGUJJ37GP&marketplace=FLIPKART&srno=s_1_2&otracker=AS_QueryStore_OrganicAutoSuggest_0_5_na_na_na&otracker1=AS_QueryStore_OrganicAutoSuggest_0_5_na_na_na&fm=SEARCH&iid=b1cab310-910f-4c4d-8e31-79536dab756e.FSKESKWYSTFHACGU.SEARCH&ppt=sp&ppn=sp&ssid=ap34o1v7cw0000001583305695588&qH=2cf2ea20ceeeb02c"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/j8ddbbk0-1/face-shaping-mask/y/3/m/face-mask-disposable-3-ply-with-elastic-om-original-imaeyekhgc2bn92k.jpeg?q=70    " />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                   2 ply Elastic Face Shaping Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 590
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
                        <a href="https://www.amazon.in/Nesba-care-Disposable-Surgical-Face/dp/B07QLM3MB7/ref=pd_vtp_328_2/259-1668873-7453237?_encoding=UTF8&pd_rd_i=B07QLM3MB7&pd_rd_r=afbddaea-3f95-4e96-a2eb-cf37d854ad07&pd_rd_w=z5jce&pd_rd_wg=6fxiQ&pf_rd_p=6846093d-b717-478e-876f-7bb6ac0954c3&pf_rd_r=Z6V7J8J5WR2JPD9A1GPC&psc=1&refRID=Z6V7J8J5WR2JPD9A1GPC"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/31AOcE1KuAL.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Surgical Face Mask 3 Ply 100 Pcs
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 2,900.00
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
                        <a href="https://www.snapdeal.com/product/vkare-disposable-face-mask-50/1672755717"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://n3.sdlcdn.com/imgs/a/i/0/Vkare-Disposable-Face-Mask-50-SDL935170834-1-c3db7.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    2 Ply Face Mask - 50pcs
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 950
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            9-11 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.snapdeal.com/product/maxpluss-3ply-surgical-face-mask/619311638656#bcrumbSearch:3ply|bcrumbLabelId:46101962"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://n2.sdlcdn.com/imgs/f/i/z/maxpluss-3Ply-Surgical-Face-Mask-SDL980509008-2-b3b4c.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Maxpluss 3Ply - 50 pcs
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 1950
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            8-11 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.shopclues.com/disposable-elastic-3-ply-surgical-mask-pack-of-50-mask-148961758.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://cdn.shopclues.com/images1/thumbnails/104780/280/1/148961758-104780639-1580887579.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    3-Ply Ear Loop Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 379
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
                        <a href="https://www.shopclues.com/pack-of-1000-surgical-face-mask-118808414.html"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://cdn.shopclues.com/images/thumbnails/70449/280/1/11880841448100threequarter21494664840.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Pack of 1000 Surgical Face Mask
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 2977
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Earliest Delivery:
                                    <span style="color: #347b4c;">
                                            6-8 days
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/dp/B016PV1UWY"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71EjafoAeJL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Origami Soft Toilet Tissue
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 549
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
                        <a href="https://www.amazon.in/Amazon-Brand-Solimo-Bathroom-Tissue/dp/B07GVZFN92"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/71m-Gpu0spL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Solimo 3 Ply Toilet Paper
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 281
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
                        <a href="https://www.amazon.in/Amazon-Brand-Presto-Toilet-Tissue/dp/B0797GJWX3"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://images-na.ssl-images-amazon.com/images/I/91BX3OIhmKL._SL1500_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Presto! 3 Ply Toilet Paper
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 257
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
                        <a href="https://www.flipkart.com/diem-ply-soft-toilet-tissue-paper-rolls-100-sheets-pack-6-roll/p/itm2a31f37901794"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img border-radius-10 vday-img"
                                     src="https://rukminim1.flixcart.com/image/416/416/k2jbyq80/toilet-paper-roll/g/g/y/ply-soft-toilet-tissue-paper-rolls-100-sheets-pack-of-6-6-100-original-imafhvbcmmpj8zj9.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Diem Ply Soft Tissue Paper Rolls
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 220
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
            </div>
        </div>
        <br>
        <br>
    </section>

    <section>

        <div class="container christmas">
            <label class="f-s-24 f-c-d-greay"> Does Surgical Mask help protect you from Coronavirus?</label>
            <p class="f-s-16 f-c-gray f-w-4 "><b>"Coronavirus: Death Toll Exceeds 2500+!"</b> The news headlines and panic vibes of Coronavirus are still alive everywhere.
                Ever since the deadly outbreak happened, the doctors have been advising various precautionary methods to prevent the spread. <br><br>Since coronavirus is an airborne disease,
                the most important custom is to maintain respiratory hygiene. Thus, equipping a mask would minimize the risk of direct contact with the virus. Not only does this apply
                for the people who are uninfected but also for those who are suffering from the disease. <br><br>As surgical face masks would trap the infected individual's expiratory droplets
                (while sneezing and coughing), you can ensure the family/public health by wearing one.
            </p>

            <h1 class="f-s-20 f-c-d-greay f-w-7">Where to buy Surgical Face Masks?</h1>
            <p class="f-s-16 f-c-gray f-w-4">Due to the increased demand for masks, China is facing a shortage of supplies. Hence, recently the Indian government has removed the ban
                on shipping certain masks and gloves abroad. <br><br>Thus, if the face mask is not available at the nearby convenience stores or pharmacies, you can always make use of
                <a href="/" target="_blank">international shipping services online</a>.
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">What are the options available?</h3>
            <p class="f-s-16 f-c-gray f-w-4">You might have come across the product labels that read 2 ply or 3 ply surgical masks. But what is the <strong>difference between 2 ply and 3 ply face masks?</strong>
                The only difference is with the number of layers. In 2 ply masks, there are two layers that are designed to create a potential barrier to filter bacteria. In 3 ply masks,
                you can find an additional outer layer that keeps you away from the fluids and blood contact.
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">ShoppRe and Surgical Mask Shopping Online in India:</h3>
            <p class="f-s-16 f-c-gray f-w-4">As this is a period of a medical emergency, ShoppRe offers 24*7 support for you to shop for surgical face masks online from anywhere.
                All you have to do is to sign up for free. Surf on the Surgical Mask, Gloves and other necessary utilities from India.<br><br> Make your choice and place the order.
                Once you have done that, you will be receiving your orders in no time. Typically, it takes 3 to 6 days for delivery.
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">Just Pay During Shipping Confirmation:</h3>
            <p class="f-s-16 f-c-gray f-w-4">Of course, the purchase of foreign products can become hectic during money transactions. Also, in such cases, you are bound to
                fill up loads of forms that actually feel like homework. <br><br>However, you won't be facing such difficulties at this international shipping service.
                That is because you get to meet <a href="/personal-shopper-india" target="_blank"> Mr.Personal Shopper</a>. <br><br>This fella bot will pay for your purchase. Once your orders arrive at ShoppRe, you will be updated with the status.
                You can check for the pictures of the deliverables and confirm the shipping. Post your payment, the orders will be shipped to your doorstep.
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">"International Shipping for Surgical Face Masks": Does it sound way too far or Do you feel burdened about the budget?</h3>
            <p class="f-s-16 f-c-gray f-w-4">Pocket-friendly international shipping service seems far away from reality. And because ShoppRe provides impressive international shipping service online,
                you might have doubts about the pricing. <br><br>But It's not what you presume. Here is the fact. ShoppRe does massive shipping of products from India to elsewhere.
                Thereby <strong>cutting shipping costs up to 80%</strong>. Now shop at your place without a worry about the hefty
                <a href="{{route('pricing')}}" target="_blank">shipping price</a>.
            </p>
            <br>
            <div>
                <p class="f-s-22 f-c-blue f-w-7">Additional Precautionary Tips:</p>
                <ul>
                    <li>
                        <h4 class="header4 p-color-cement f-w-4"><strong>Can you reuse the surgical face mask?</strong> - Never make a mistake of reusing the surgical masks.
                            They are disposable masks that just serve one time. So how often do you have to change? You can keep it on for a period of 8 hours.
                        </h4>
                    </li>
                    <li>
                        <h4 class="header4 p-color-cement f-w-4">Take your time while <strong>washing your hands</strong>. Preferably, for at least 20 seconds. Every time you cough or sneeze,
                            make sure to thoroughly wash your hands.</h4>
                    </li>
                </ul>
            </div>
            <br>
            <p class="f-s-22 f-c-green f-w-7">Conclusion:</p>
            <p class="f-s-16 f-c-gray f-w-4">When stepping out has become hazardous, you can rely on this international shipping service. You will definitely not be facing issues
                like product unavailability or distance. Face Mask has somehow topped the shopping list of every house. And during your time at ShoppRe, you can experience the concern,
                this shipping service provides. Be on your couch and place your order. Let ShoppRe lend a hand to fight away coronavirus by offering the best international shipping service
                at the cheapest shipping fare.
            </p>

        </div>
        <br>
        <div class="container">
            <div itemscope itemtype="https://schema.org/FAQPage">
                <p class="f-c-red f-s-20" style="font-style: italic">Latest Questions & Frequently asked by our customers:</p>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray">Can I ship N95 Mask?</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">Unfortunately, you cannot make a purchase on N95 masks. The Government of India has prohibited the export of N95 Face Masks.
                        </p>
                    </div>
                </div>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray">Can I ship a 4 ply mask?</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">No, this option is not available either because 4 ply or 8 ply masks are on the list of banned export goods. However, 2 ply and 3 ply masks are available for shipping.
                        </p>
                    </div>
                </div>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray">Is it possible to ship 100k surgical masks to Singapore?</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">
                            Yes, You can ship a quantity of <a href="https://www.shoppreparcels.com/shipping-100k-surgical-face-masks-to-singapore-from-india/ " target="_blank">1,00,000 2 ply and 3 ply surgical masks</a> to Singapore from India.
                        </p>
                    </div>
                </div>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray ">Can I ship face masks manufactured in China?</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">No, you can only order the products that have description in English and that are manufactured from India.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="chris-benefits">
        <div class="container " >
                <h1 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Leave Your Comments</h1>
            <div class="fb-comments" data-href="https://www.shoppre.com/face-mask-international-shipping" data-width="1000" data-numposts="5">

            </div>

{{--            <div class="row text-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel boxed outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/myntra-online-shopping-shipping-from-india">Myntra Online Fashion Store</a></span></li>--}}
{{--                            <li><span><a href="/flipkart-online-shopping">Flipkart.com Online Shop</a></span></li>--}}
{{--                            <li><span><a href="/amazon-online-shopping">Amazon.in Shopping India</a></span></li>--}}
{{--                            <li><span><a href="/jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>--}}
{{--                            <li><span><a href="/ajio-online-shopping">AJIO Fashion & Lifestyle Brand</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>--}}
{{--                            <li><span><a href="/chumbak-online-shopping" target="_blank">Chumbak Online Shopping</a></span></li>--}}
{{--                            <li><span><a href="/firstcry-online-shopping" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>--}}
{{--                            <li><span><a href="/fabindia-online-shopping" target="_blank">Fabindia Traditional Wear</a></span></li>--}}
{{--                            <li><span><a href="/lifestylestores-online-shopping" target="_blank">Lifestylestores Shopping India</a></span></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/pepperfry-online-shopping" target="_blank">Pepperfry Furniture Shopping</a></span></li>--}}
{{--                            <li><span><a href="/shoppersstop-online-shopping" target="_blank">Shoppers Stop Latest Trends‎</a></span></li>--}}
{{--                            <li><span><a href="/nykaa-online-shopping" target="_blank">Nykaa Online Beauty Store</a></span></li>--}}
{{--                            <li><span><a href="/tatacliq-online-shopping" target="_blank">Tata CLiQ Online Shopping</a></span></li>--}}
{{--                            <li><span><a href="https://clnk.in/j1Oo" target="_blank">Biba Ethnic Wear for Ladies</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br/><br/>--}}
{{--            </div>--}}
        </div>
{{--        <div class="text-center">--}}
{{--            <br>--}}
{{--            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">Indian online shopping sites</a>--}}
{{--        </div>--}}
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
    </section>

@endsection

@section('js_script')
{{--    <script type='text/javascript'>--}}
{{--        var cId = '52423';--}}

{{--        (function (d, t) {--}}
{{--            var s = document.createElement('script');--}}
{{--            s.type = 'text/javascript';--}}
{{--            s.async = true;--}}
{{--            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/') + 'cuelinksv2.js';--}}
{{--            document.getElementsByTagName('body')[0].appendChild(s);--}}
{{--        }());--}}
{{--    </script>--}}


@endsection
