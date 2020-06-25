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

        .img-shopperstop-offer {
            display: none;
        }


        .img-product {
            width: 216px;
        }

        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }


        .p-b-26 {
            padding-bottom: 26px !important;
        }



        @media only screen and (max-width: 600px) {
            .img-product {
                width: 120px !important;
            }


            .m-t-img {
                margin-top: 0px !important;
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

        .chris-benefits .panel {
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05) !important
        }

        .chris-benefits .panel ul li span {
            margin-left: 15px
        }

        #contact-support {
            padding-bottom: 30px
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
            .img-mobile-view {
                display: block !important;
            }

            .img-desktop-view {
                display: none !important;
            }

            .fst-service {
                margin-top: -260px
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
                <div class="container"><br><br>
                    <center>
                        <h1 class="f-s-36 f-c-white f-w-8">MYNTRA Online Shopping</h1>
                        <p class="f-s-20 f-c-l-gray ">Shop Myntra Fashon Store With Your ShoppRe Address for International Delivery from India.<br></p>
                        <br>
                    </center>
{{--                    <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611">--}}
                    <p class="f-c-white f-w-9 text-center" >
                        <i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
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
               <center>
               <a href="https://www.myntra.com/shop/made-in-india-20"
                    target="_blank">
                   <img class="img-desktop-view"
                        src="https://assets.myntassets.com/w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2020/6/8/a7a78034-16a3-4a37-b265-252cc9bd70281591629761456-MII-desktop-banner.jpg"
                        width="900px"></a>
                   </center>
               <center>
                   <a href="https://www.myntra.com/shop/made-in-india-20"
                            target="_blank">
                       <img class="img-mobile-view img-shopperstop-offer"
                            src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/retaillabs/2020/6/23/be0d3564-6f27-48d3-8d08-4802494484aa1592859208381-made-in-india.jpg"
                            width="350px" ></a>
               </center>
               <div class="">
                   <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">
                       Shop in Myntra & get ₹200 Off on Shipping Myntra Products to Any Country.</h2>
               </div>
           </div>

            <div class="row text-center">
              {{-- <p class="f-s-20"><span class="f-c-red f-w-9"><a href="https://www.myntra.com/" target="_blank">END OF SEASON SALE(40-80% OFF)</a></span></p>--}}

                <br>
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900">Cloth Face Mask</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/outdoor-masks/sera/sera-unisex-2-pcs-3-ply-printed-reusable-outdoor-fabric-masks/11815882/buy" target="_blank">
                                <img class="img-product m-t-img"
                                src="https://assets.myntassets.com/dpr_2,q_60,w_210,c_limit,fl_progressive/assets/images/11815882/2020/4/27/04710127-322e-47f0-bd99-0c6b7fefbc5e1588000745700Sera1.jpg">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/outdoor-masks/sera/sera-unisex-2-pcs-3-ply-printed-reusable-outdoor-fabric-masks/11815854/buy" target="_blank">
                                <img class="img-product m-t-img"
                                src="https://assets.myntassets.com/dpr_2,q_60,w_210,c_limit,fl_progressive/assets/images/11815854/2020/4/27/595b38a7-5376-4b36-93bf-6c5bbdffc75a1587996728138Sera1.jpg">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/outdoor-masks/bene-kleed/bene-kleed-unisex-3-pcs-5-ply-reusable-outdoor-fashion-masks/11880914/buy" target="_blank">
                                <img class="img-product m-t-img"
                                src="https://assets.myntassets.com/dpr_2,q_60,w_210,c_limit,fl_progressive/assets/images/11880914/2020/5/27/7ed77b83-bf47-4e18-b792-39be7757ddf61590584931351BeneKleedUnisex3Pcs5-PlyReusableOutdoorFashionMasks1.jpg">

                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.myntra.com/outdoor-masks/pannkh/pannkh-unisex-5-pcs-printed-2-ply-reusable-pleated-fabric-outdoor-mask/11882818/buy" target="_blank">
                                <img class="img-product m-t-img"
                                src="https://assets.myntassets.com/dpr_2,q_60,w_210,c_limit,fl_progressive/assets/images/11882818/2020/5/27/4eb07f43-65ac-476c-9f72-4c89d4eeabc91590559286587PannkhUnisex5PcsPrinted2-PlyReusablePleatedFabricOutdoorMask1.jpg">

                            </a>
                        </div>
                    </div>

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
                            <a href="https://www.myntra.com/shop/dress-store"
                               target="_blank">
                                <img class="img-product m-t-img"
                                     src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/banners/2019/7/29/1be1afa1-0c13-431c-a42b-765220f2100d1564397367897-Dresses-_-jump-suits.jpG">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Vaamsi--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/welcome-to-myntra-women-tops"
                               target="_blank">
                                <img class="img-product m-t-img"
                                     src="https://constant.myntassets.com/pwa/assets/img/a876ce8c-5b1d-4b87-a5cd-626f20b8c1171559216916411-women-category-cards_03_tops.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Libas--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/welcome-to-myntra-women-kurtasets"
                               target="_blank">
                                <img class="img-product m-t-img"
                                     src="https://constant.myntassets.com/pwa/assets/img/4d76fbbe-d72b-4df3-86f9-59e7152b66b51559216916400-women-category-cards_04_kurta_Sets.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Nayo--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.myntra.com/welcome-to-myntra-women-jeans" target="_blank">
                                <img class="img-product m-t-img "
                                     src="https://constant.myntassets.com/pwa/assets/img/2a0ce60a-4d10-4e61-8c0a-f59f377213d51559216916390-women-category-cards_05_jeans.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    AKS--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>
            </div>

            <div class="row text-center">
            <br>
            <br>
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
                        <a href="https://www.myntra.com/shop/wed-hp-m" target="_blank">
                            <img class="img-product m-t-img"
                                 src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2020/2/4/315d2fd4-afbf-4884-9f7c-b59f6e58ea181580798075088-Theme-store-men.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                HRX Jackets--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/shop/street-men-mar22" target="_blank">
                            <img class="img-product m-t-img"
                                 src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/banners/2019/7/29/58bc3c56-2cb0-46ab-9250-6ecceb49f6791564394433597-StreetwearMen.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                HRX Sweatshirts--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/shop/men-workwear" target="_blank">
                            <img class="img-product m-t-img"
                                 src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/banners/2019/7/29/0d110229-0fe3-4b3d-a52a-627a0528623c1564394433563-Workwearmen.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                HRX Jackets--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.myntra.com/shop/party-men" target="_blank">
                            <img class="img-product m-t-img "
                                 src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/banners/2019/12/12/34841729-cf53-4e8f-a6ac-512c73dd7b101576150875446-part-store-men.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                HRX Sweatshirts--}}
{{--                            </div>--}}
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
                    <a onclick="{{Constant::CHATURL}}" href=""
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
                    <a onclick="{{Constant::CHATURL}}" href=""
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
