@extends('layout')

@section('title', 'Myntra Fashion Store | Shop Now | Online Shopping from India ')
@section('description', 'Convenient Shopping for Apparel, Accessories, Footwear, Home Decor & more. Ship your Myntra purchases with your ShoppRe Address at lower rates from India.')
@section('keywords', 'shoes, clothing, accessories, lifestyle products, women, men, best online fashion store, kids dresses, jumpsuits')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/myntra-online-shopping"/>
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Myntra: Online Shopping with ShoppRe International Delivery" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/myntra-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="Myntra international shipping" />
    <meta property="og:description" content="Sign-up for Indian Shipping Address. Shop your Myntra products with ShoppRe for Internatioanl Delivery." />
    <meta property="og:site_name" content="ShoppRe" />

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

        <main>
            <div class="header">
                <div class="container"><br><br><br>
                    <center>
                        <h1 class="f-s-36 f-c-white f-w-8">MYNTRA Online Shopping</h1>
                        <p class="f-s-20 f-c-l-gray ">Shop Myntra Fashon Store With Your ShoppRe Address for International Delivery from India.<br></p>
                        <br>
                    </center>
                    <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                            Get ₹200 Discount on Shipping Myntra Products Internationally. T&C*</i></p>
                    <br>
                    <br>
                </div>
            </div>
        </main>
{{--        <div class="container no-padding banner">--}}
{{--            <p class="f-s-28 f-c-white f-w-9 text-center" style="background-color: #4285f4"><i>MYNTRA Online Fashion Store</i></p>--}}
{{--            <div class="col-md-6 col-xs-12" style="padding-top: 7%">--}}
{{--                <center><p class="m-t-sm f-s-30">Why Worries Re, <span--}}
{{--                            style="font-family: Bahnschrift">Just ShoppRe!</span></p></center>--}}
{{--                <p class="f-c-white m-t-sm f-s-18 text-center">--}}
{{--                    If you are in the quest for Indian Fashion & Lifestyle this Diwali for gifting purposes or just--}}
{{--                    getting them for yourselves,--}}
{{--                    then ShoppRe is here to ship all your favorite <span--}}
{{--                        class="underline-color">Shopping & Shipping</span> at your doorsteps to add extra vibrancy to--}}
{{--                    your Diwali (🪔)--}}
{{--                </p>--}}
{{--                <br>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-xs-12 no-padding">--}}
{{--                                    <center>--}}
{{--                                        <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>--}}
{{--                                    </center>--}}
{{--                <br>--}}
{{--                <center>--}}
{{--                    <img src="{{asset('img/diwali/diwali-offer.png')}}" alt="Diwali offer india"> <br><br>--}}
{{--                                            <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-g btn-a-l" target="_blank">Sign UP FREE</a>--}}

{{--                </center>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="image-banner">--}}
{{--            <img src="{{asset('img/product/myntra-online-shopping-india.png')}}" alt="myntra sale"--}}
{{--                 style="height: 430px; width: 100%;">--}}
{{--        </div>--}}
    </section>


    <section>
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <div class="">
                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">
                        Below are the Recommended & Recently Shipped Products from Myntra India!</h2>
                </div>
            </div>

            <div class="row text-center">
                <p class="f-s-20"><span class="f-c-red f-w-9"><a href="https://www.myntra.com/fusion-wear?rf=Discount%20Range%3A50.0_100.0_50.0%20TO%20100.0" target="_blank">Redefining Elegance(50-70% OFF) Women's Wear</a></span></p>
                <br>
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Myntra Women's Fashion</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/7186140" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/c7c95950-20f8-458c-9a09-8d3ab74cd1401575661203373-Anouk_W.png">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/9626019" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/0e25db2d-cf1e-4d8b-a7f4-90c98353706f1575661217197-W.png">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/10142031" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/ea705ec6-63c8-47e6-8634-cd1a2ad848701575661211159-MANGO_W.png">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/levis-women?f=Categories%3AJeans" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/cdeeb814-a9d7-4e63-a823-e084c2f33b691575661211201-Levis_W.png">

                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right">
                            <a href="https://www.myntra.com/8698155" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/a46d6bc0-b542-46dd-8b33-1c3a9fe550e31575726970872-Nush.png">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/7785934" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/e18105aa-2c34-4e47-b574-ddec359739441575726971042-Caprese.png">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Vishudh--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/watches/daniel-wellington/daniel-wellington-women-black-iconic-link-analogue-watch-dw00100206/10974244/buy" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/assets/images/banners/2019/12/7/c92bfee0-67c6-4d69-9338-ae9485b93ac71575726971010-Daniel-Wellington.png">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/7331555" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.myntassets.com/assets/images/banners/2019/12/7/2babe933-a52e-4915-81a2-608f6f152d521575661203207-Catwalk_W.png">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/kurtas/vaamsi/vaamsi-women-pink--white-printed-straight-kurta/9861569/buy" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/9861569/2019/6/10/ecd642f2-59a0-4bf6-ae93-c324803180dd1560166594474-Vaamsi-Women-Kurtas-2221560166592645-1.jpg">
                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                    Vaamsi
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/kurta-sets/libas/libas-women-beige--golden-printed-kurta-with-palazzos--dupatta/10356383/buy" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/10356383/2019/8/8/6fd6cb7a-4c48-42a8-8a29-96cf9950c2bb1565258772315-Libas-Women-Kurta-Sets-4881565258770107-1.jpg">
                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                    Libas
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/kurta-sets/nayo/nayo-women-burgundy--mustard-yellow-printed-kurta-with-palazzos/7723448/buy" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/7723448/2018/11/14/1ee178ba-8790-4895-a2f4-a46cca595ade1542191578846-Nayo-Women-Kurta-Sets-9521542191578621-1.jpg">
                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                    Nayo
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/kurtas/aks/aks-women-green--brown-printed-straight-kurta/9269643/buy" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/9269643/2019/4/15/bf6d1164-4229-4577-9f27-24bbfbd404d61555319879401-Green-Printed-Straight-Kurta-1241555319877321-1.jpg">
                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                    AKS
                                </div>
                            </a>
                        </div>
                    </div>
            </div>

            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Myntra Men's Fashion</h2>

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

@endsection
