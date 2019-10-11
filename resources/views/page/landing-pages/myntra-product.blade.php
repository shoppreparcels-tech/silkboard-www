@extends('layout')

@section('title', 'Myntra (Fashionotsav 12-15 Oct) | Online Shopping from India')
@section('description', 'Shopping For Apparel, Accessories, Footwear & More At the Comfort Of Your Home')
@section('keywords', 'men, women, sale, india, shopping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/myntra-online-shopping"/>

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
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

        @media only screen and (max-width: 600px) {
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

        @media only screen and (max-width: 600px) {
            .first-time-shipment {
                height: 651px
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
    <section class="first-time-shipment header-section" style="padding-top: 50px !important;">
        <div class="container no-padding banner">
            <p class="f-s-28 f-c-white f-w-9 text-center" style="background-color: #4285f4"><i>MYNTRA FASHIONOTSAV</i></p>
            <div class="col-md-6 col-xs-12" style="padding-top: 7%">
                <center><p class="m-t-sm f-s-30">Why Worries Re, <span
                            style="font-family: Bahnschrift">Just ShoppRe!</span></p></center>
                <p class="f-c-white m-t-sm f-s-18 text-center">
                    If you are in the quest for Indian Fashion & Lifestyle this Diwali for gifting purposes or just
                    getting them for yourselves,
                    then ShoppRe is here to ship all your favorite <span
                        class="underline-color">Shopping & Shipping</span> at your doorsteps to add extra vibrancy to
                    your Diwali (🪔)
                </p>
                <br>
            </div>
            <div class="col-md-6 col-xs-12 no-padding">
                {{--                    <center>--}}
                {{--                        <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>--}}
                {{--                    </center>--}}
                <br>
                <center>
                    <img src="{{asset('img/diwali/diwali-offer.png')}}" alt="Diwali offer india"> <br><br>
                    {{--                        <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-g btn-a-l" target="_blank">Sign UP FREE</a>--}}

                </center>
            </div>
        </div>
        <div class="image-banner">
            <img src="{{asset('img/product/myntra-online-shopping-india.png')}}" alt="myntra sale"
                 style="height: 430px; width: 100%;">
        </div>
    </section>
    <section>
        <div class="container fst-service" style="margin-top: 36px;">
            <div class="row">
                <div class="col-md-8 col-xs-12 ">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Shop Myntra Fashionotsav (12-15 Oct). Ship worldwide with us.</h2>
                </div>
                <div class="col-md-4 col-xs-12 text-center margin-tp">
                    <p class="no-pad Rakhi-mid-div f-s-16 txt-center" style="margin-top: 10px;">(Click on Online Chat
                        for Live Support
                        <br> Right side Bottom of the page)</p>
                    {{--                    <div class="">--}}
                    {{--                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20I%20Love%20to%20Send%20Diwali,%20Gifts%20and%20Sweets%20from%20India" target="_blank">--}}
                    {{--                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/7338208403-personal-shopper-number.png" >--}}
                    {{--                            <span class="font-16">+91-7338208403</span>--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <img class="img-product m-t-img"
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/4d5db3ff-47c1-4b31-aeaa-fd6f07dd44881570689724784-womenDesktop_38.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/fusion-wear" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img"
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/0cfcf9ba-7b73-45b8-8f64-032cf9bcc6441570689724755-womenDesktop_39.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.ajio.com/shop/women" target="_blank">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img"
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/444dfb21-d1f4-4a50-96b2-d5aa396e52f51570689724661-womenDesktop_42.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/sportsallstyles-2017?f=Gender%3Amen%20women%2Cwomen&rf=Discount%20Range%3A30.0_100.0_30.0%20TO%20100.0"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/95351cb0-a7a2-4fa2-bd34-c3fea338514f1570689740950-womenDesktop_47.jpG">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/kids?rf=Discount%20Range%3A50.0_100.0_50.0%20TO%20100.0"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/2cf02665-861a-4a89-a19d-2850c8daf4481570687909889-mensDesktop_44.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-ethnic-wear" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/39b7cabd-9930-4df8-9ac0-90a105567c321570687910058-mensDesktop_39.jpG">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-apparel?f=Categories%3AShirts&rf=Discount%20Range%3A30.0_100.0_30.0%20TO%20100.0"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/7aa03f68-37ad-4374-aa7d-78d70a6d79161570687909993-mensDesktop_41.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/sportsallstyles-2017?f=Gender%3Amen%2Cmen%20women"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/3be27530-4cd1-47ce-bdd6-db244d5af7301570687910020-mensDesktop_40.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-apparel?f=Categories%3ACapris%2CChuridar%2CJeans%2CPatiala%2CPyjamas%2CSalwar%2CShorts%2CThermal%20Bottoms%2CTrack%20Pants%2CTrousers&rf=Discount%20Range%3A30.0_100.0_30.0%20TO%20100.0"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/517f0b46-e637-4d1e-afc4-41e5a3b2bf621570689724698-womenDesktop_41.jpG">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/handbags-and-bags" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/e4408a09-b3a6-493c-9977-291c25da49c71570689724600-womenDesktop_44.jpG">

                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/watches?f=Gender%3Amen%20women%2Cwomen"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/03c9ac4e-77c7-4655-9762-0b2de0a099761570687909963-mensDesktop_42.jpG">

                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-footwear?rf=Discount%20Range%3A50.0_100.0_50.0%20TO%20100.0"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_196,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/10/10/eea1e24e-365d-4c11-82f8-4af67e99a9a61570689724630-womenDesktop_43.jpg">

                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/women-personal-care" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/a11cc42b-30ef-46f8-9c94-402d3fd4d9021555659157635-03.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/wp-co-colourburst_857299" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/f398e63a-7d43-498a-ac02-6baea63f847b1555659157649-02.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/wp-co-bright-bags_857291" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/26de5874-0e9d-41b9-a182-056e167e49d81555659157666-01.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/wp-co-women-artisticmules_857289" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/539eeef5-3b9d-4785-b345-11dce8f98b0a1555659157624-04.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/wp-co-offshoulder-blouse_857293" target="_blank"> <span
                                    class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/8c313652-e4f5-42f9-9f4e-3d896bacb0db1555658537422-03.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-casual-shoes?f=Ankle%20Height%3ARegular%3A%3AFastening%3ASlip-On%3A%3AMaterial%3ACanvas%3A%3AType%3ASlip-On%20Sneakers&sort=popularity"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/b24cbb21-9ec1-4d76-8866-75650abe08e11555658537443-01.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/mens-shorts?f=Categories%3AShorts%3A%3AType%3AChino%20Shorts"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/5b3ba6fe-4d6c-4452-b168-3dec9e2d9b0b1555658537412-04.jpg">

                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-casual-shirts?f=Fabric%3ALinen%3A%3ASleeve%20Length%3AShort%20Sleeves&p=2&sort=popularity"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                        <img class="img-product m-t-img "
                             src="https://assets.myntassets.com/w_245,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2019/4/19/aa4792b3-c639-4674-8a7a-dd40a02121f21555658537432-02.jpg">
                        <div class="check-price-padd">
                            <a href="https://www.myntra.com/men-tshirts?f=Color%3ABeige_e8e6cf%2CBlue_0074D9%2CCoral_ff7f50%2CCream_ede6b9%2CFluorescent%20Green_8dc04a%2CGreen_5eb160%2CLavender_d6d6e5%2CLime%20Green_5db653%2CMauve_e0b0ff%2COrange_f28d20%2CPeach_ffe5b4%2CPink_f1a9c4%2CSea%20Green_2e8b57%3A%3AFabric%3ACotton%2CLinen%3A%3ALength%3ARegular%3A%3ANeck%3APolo%20Collar%3A%3AOccasion%3ACasual%3A%3APattern%3ASolid%3A%3APrint%20or%20Pattern%20Type%3ASolid%3A%3ASleeve%20Length%3AShort%20Sleeves"
                               target="_blank"> <span class="elementor-icon-list-icon">
                                                    <button class="btn btn-s-r btn-b-g btn-h-40">Shop Now</button>
                                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

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
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

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
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

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

@endsection
