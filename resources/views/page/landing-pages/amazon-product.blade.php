@extends('layout')

@section('title', 'Amazon Fashion Sale | Amazon.in Online Shopping from India')
@section('description', 'Shop the latest deals across Clothing, Books, Mobiles, Health and Personal Care online at Amazon India store with ShoppRe for International delivery from India.')
@section('keywords', 'amazon india shopping, amazon international shipping rates, largest online store‎')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/amazon-online-shopping" />
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Amazon.in: Online Shopping with ShoppRe International Delivery" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/amazon-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="Amazon international shipping" />
    <meta property="og:description" content="Amazon India products Internatioanl Delivery with ShoppRe at lower rates." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }
        .img-shopperstop-offer {
            display: none;
        }

        .underline-color  {
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

        @media screen and (device-aspect-ratio: 40/71) {
            .img-mobile-view {
                width: 300px;
            }
        }

        @media only screen and (max-width:600px) {
            .img-product {
                width: 120px !important;
            }
            .img-mobile-view {
                display: block !important;
            }

            .img-desktop-view {
                display: none !important;
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

        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-3px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:651px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection

@section('content')
    <main>
        <div class="header">
            <div class="container"><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">Amazon.in Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Amazon.in With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
                <p class="f-c-white f-w-9 text-center" >
                    <i>
                        <a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Amazon.in Products Internationally. T&C*
                    </i>
                </p>
                <br>
                <br>
            </div>
        </div>
    </main>

    <section >
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <div class="">

                    <center>
                        <a href="https://www.amazon.in/b/ref=app_gw_feb20?node=18705327031&pf_rd_r=M52C7KXTNS6CW48EVAEA&pf_rd_p=c60a0e35-ac9b-4155-883f-30d5fbbb8975"
                           target="_blank">
                            <img class="img-desktop-view"
                                 src="https://m.media-amazon.com/images/G/31/img2020/fashion/MA2020/ApparelP0/BOTM/March/1._CB420752560_.jpg"
                                 width="1000px">

                    </center>
                    <center>
                        <a href="https://www.amazon.in/b/ref=app_gw_feb20?node=18705327031&pf_rd_r=M52C7KXTNS6CW48EVAEA&pf_rd_p=c60a0e35-ac9b-4155-883f-30d5fbbb8975"
                           target="_blank">
                            <img class="img-mobile-view img-shopperstop-offer"
                                 src="https://m.media-amazon.com/images/G/31/img2020/fashion/MA2020/ApparelP0/BOTM/March/1._CB420752560_.jpg"
                                 width="310px">
                    </center>
{{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center"><span class="f-s-25 f-c-red f-w-9">👉 <a--}}
{{--                                href="https://www.amazon.in/b?node=6648217031" target="_blank">New Year, New You</a> (Up To 70% OFF)</span> /--}}
{{--                        Below are the Recommended & Recently Shipped Products!</h2>--}}

{{--                    <span class="f-s-25 f-c-red f-w-9">Big Bag Days (25-31 Oct)</span>--}}
                </div>

            </div>


            {{--How to prevent Coronavirus? --}}
            <div class="row text-center">
{{--                <h2 class="f-s-35 p-color-cement-dark font-weight-900 ">How to prevent Coronavirus?</h2>--}}
{{--                <p class="p-color-blue">WHO also advises: Wearing a mask may stop an individual from directly--}}
{{--                    <a href="https://bit.ly/38LXXY2" target="_blank">touching their mouth and nose</a>, which is a common way that viruses and germs enter the body.--}}
{{--                  Buy these below suggested Face mask from Amazon.in and Ship from India to China or any country worldwide.--}}
{{--                </p>--}}

                <br>
{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26">--}}
{{--                        <a href="https://www.amazon.in/Dettol-Shield-Carbon-Activated-Air-Pollution/dp/B07JD4ZXYT/" target="_blank">--}}
{{--                            <img class="img-product m-t-img" src="https://images-na.ssl-images-amazon.com/images/I/61Vsisu8wFL._SL1000_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Carbon Activated Mask, Pack of 5--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                        <a href="https://www.amazon.in/Honeywell-Pollution-Foldable-Exhalation-Valve/dp/B01I9PVOPW/" target="_blank">--}}
{{--                            <img class="img-product m-t-img" src="https://images-na.ssl-images-amazon.com/images/I/61enD1szCcL._SL1500_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Easy Exhalation Valve, Box of 5--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                        <a href="https://www.amazon.in/Dettol-Anti-Pollution-Cambridge-Basic/dp/B07JP51P2S" target="_blank">--}}
{{--                            <img class="img-product m-t-img" src="https://images-na.ssl-images-amazon.com/images/I/61gC5hNVUOL._SL1000_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Dettol Anti Pollution Mask N95--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                        <a href="https://www.amazon.in/Honeywell-D7002-BU10-IND-Anti-Pollution-Foldable-Face/dp/B01AJI0QF6/" target="_blank">--}}
{{--                            <img class="img-product m-t-img " src="https://images-na.ssl-images-amazon.com/images/I/6174Xdh4q8L._SL1500_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Honeywell Face Mask Pack of 10--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                        <a href="https://www.amazon.in/Honeywell-Pollution-Foldable-Exhalation-Printed/dp/B01I9PVHA4/" target="_blank">--}}
{{--                            <img class="img-product m-t-img " src="https://images-na.ssl-images-amazon.com/images/I/61ACK9RYzsL._SL1500_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                2.5 Anti Pollution Face Mask--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                        <a href="https://www.amazon.in/Bodyguard-Reusable-Pollution-Activated-Carbon/dp/B07KG19762" target="_blank">--}}
{{--                            <img class="img-product m-t-img " src="https://images-na.ssl-images-amazon.com/images/I/816VSmIHxPL._SL1500_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Anti Pollution Face Mask--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                        <a href="https://www.amazon.in/Aastha-Non-Woven-Fabric-Layers-Disposable/dp/B07NTHK4P1/" target="_blank">--}}
{{--                            <img class="img-product m-t-img " src="https://images-na.ssl-images-amazon.com/images/I/81fktlB6arL._SL1500_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Face Mask - 100 Pieces--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}



{{--                <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                    <div class="shopandship onam-prod-pic p-b-26">--}}
{{--                        <a href="https://www.amazon.in/dp/B00JB1ARMK/" target="_blank">--}}
{{--                            <img class="img-product m-t-img" src="https://images-na.ssl-images-amazon.com/images/I/617th8a2LoL._SL1000_.jpg">--}}
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Filtra Petit Ladies 3-Ply Ear Loop--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>


            <br>
            <hr style="border-top: 2px solid #beadad !important;">

            <br>

            {{--Women's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Women's Fashion</h2>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_1?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=18ea9e98-d8d0-4a06-b3d6-68cc49876ec1&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=6648217031&node=1953602031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_7._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_2?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=18ea9e98-d8d0-4a06-b3d6-68cc49876ec1&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=6648217031&node=1983578031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_8._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_6?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=18ea9e98-d8d0-4a06-b3d6-68cc49876ec1&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=6648217031&node=1983338031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_12._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_5?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=18ea9e98-d8d0-4a06-b3d6-68cc49876ec1&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=6648217031&node=1374357031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_11._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 30% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QAHeroV_en_IN/ref=QANav11CTA_en_IN_1?pf_rd_r=NYBNNMYCG96B0XC7WHCK&pf_rd_p=d460ccbf-9864-4152-ac26-7e3e05506a53&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307559031&pf_rd_r=A9PVQPVE50TPB2HCRE3M&pf_rd_p=65c5baa1-5fd7-4990-8503-5707ab68b60f&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=mobile-hybrid-8&pf_rd_t=30901&pf_rd_i=20307559031&node=20225741031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/unisex/Wedding-women-final-39._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                D.Boutique
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_2?pf_rd_r=NYBNNMYCG96B0XC7WHCK&pf_rd_p=d460ccbf-9864-4152-ac26-7e3e05506a53&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307559031&ie=UTF8&node=16060580031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/women/Sangeet/Wedding-women-final-19._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                D.Boutique
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/l/14862243031/ref=QANav11CTA_en_IN_3?pf_rd_r=NYBNNMYCG96B0XC7WHCK&pf_rd_p=d460ccbf-9864-4152-ac26-7e3e05506a53&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307559031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/women/Sangeet/Wedding-women-final-17._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                D.Boutique
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_7?pf_rd_r=NYBNNMYCG96B0XC7WHCK&pf_rd_p=d460ccbf-9864-4152-ac26-7e3e05506a53&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307559031&node=17477849031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/women/Wedding/Wedding-women-final-22._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                D.Boutique
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <br>
            {{--Men's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Men's Fashion</h2>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_1?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=f2c91085-b709-4dcb-87ca-b78c4f05a577&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-5&pf_rd_t=&pf_rd_i=6648217031&node=1968024031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_1._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_6?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=f2c91085-b709-4dcb-87ca-b78c4f05a577&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-5&pf_rd_t=&pf_rd_i=6648217031&node=12456568031&ie=UTF8" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_6._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=winterwear/ref=QANav11CTA_en_IN_5?pf_rd_r=6EZY1PTD6SJR5KZE5V97&pf_rd_p=f2c91085-b709-4dcb-87ca-b78c4f05a577&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-5&pf_rd_t=&pf_rd_i=6648217031&node=15671689031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/WinterwearMen._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 60% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_2?pf_rd_r=7J9VBR981AMSFEBG2XV1&pf_rd_p=f2c91085-b709-4dcb-87ca-b78c4f05a577&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-5&pf_rd_t=&pf_rd_i=6648217031&ie=UTF8&node=1983518031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/JANFLIP19/SBC/SBC_New-year_2._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/s/ref=QANav11CTA_en_IN_1?pf_rd_r=B34Z70VYMEF3R9KR0J5X&pf_rd_p=80f2ac3f-b22a-45e8-8809-5bda4fed60e6&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307558031&i=apparel&rh=n%3A1571271031%2Cn%3A1571272031%2Cn%3A1968024031%2Cn%3A1968248031%2Cn%3A1968251031&s=popularity-rank&pf_rd_i=20307558031&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_p=9fa652c7-9ebf-4a6d-81fd-b76ddfd945cd&pf_rd_r=ZWECV3H88R281ZHT8B3D&pf_rd_s=mobile-hybrid-8&pf_rd_t=30901&ref=QAHeroV_en_IN" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/unisex/Wedding-men-final-19._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_2?pf_rd_r=B34Z70VYMEF3R9KR0J5X&pf_rd_p=80f2ac3f-b22a-45e8-8809-5bda4fed60e6&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307558031&node=16289322031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/men/sangeet/Wedding-men-final-15._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/s/ref=QANav11CTA_en_IN_4?pf_rd_r=B34Z70VYMEF3R9KR0J5X&pf_rd_p=80f2ac3f-b22a-45e8-8809-5bda4fed60e6&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307558031&bbn=4068644031&rh=n%3A1571283031%2Cn%3A%211571284031%2Cn%3A1983396031%2Cn%3A1983518031%2Cn%3A4068644031%2Cp_85%3A10440599031&dc&fst=as%3Aoff&qid=1573904626&rnid=10440598031&ref=lp_4068644031_nr_p_85_0" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/men/wedding/Wedding-men-final-21._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/s/ref=QANav11CTA_en_IN_6?pf_rd_r=B34Z70VYMEF3R9KR0J5X&pf_rd_p=80f2ac3f-b22a-45e8-8809-5bda4fed60e6&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_t=&pf_rd_i=20307558031&bbn=1983571031&rh=n%3A1571283031%2Cn%3A%211571284031%2Cn%3A1983396031%2Cn%3A1983518031%2Cn%3A1983571031%2Cp_n_material_browse%3A2022361031&dc&fst=as%3Aoff&qid=1573903675&rnid=2022056031&ref=lp_1983571031_nr_p_n_material_browse_2" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Wed/men/sangeet/Wedding-men-final-17._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>


            </div>
            <br>

            {{--Kid's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Kid's Fashion</h2>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_2?pf_rd_r=31RTMF7WB5QMVPB2HYSN&pf_rd_p=4f824385-8b06-4e19-9ad5-e9965ddf0227&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-7&pf_rd_t=&pf_rd_i=6648217031&ie=UTF8&node=15952299031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/Diwali-Wave2/eventpage/sbc/22._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_1?pf_rd_r=31RTMF7WB5QMVPB2HYSN&pf_rd_p=4f824385-8b06-4e19-9ad5-e9965ddf0227&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-7&pf_rd_t=&pf_rd_i=6648217031&ie=UTF8&node=15952293031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/Diwali-Wave2/eventpage/sbc/21._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 70% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_4?pf_rd_r=31RTMF7WB5QMVPB2HYSN&pf_rd_p=4f824385-8b06-4e19-9ad5-e9965ddf0227&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-7&pf_rd_t=&pf_rd_i=6648217031&ie=UTF8&node=1953148031" target="_blank">
                            <img class="img-product m-t-img" src="https://m.media-amazon.com/images/G/31/img19/Fashion/Diwali-Wave2/eventpage/sbc/11-oct/7._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 60% Off
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.amazon.in/b/ref=QANav11CTA_en_IN_3?pf_rd_r=31RTMF7WB5QMVPB2HYSN&pf_rd_p=4f824385-8b06-4e19-9ad5-e9965ddf0227&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-7&pf_rd_t=&pf_rd_i=6648217031&ie=UTF8&node=4091095031" target="_blank">
                            <img class="img-product m-t-img " src="https://m.media-amazon.com/images/G/31/img19/Fashion/Diwali-Wave2/eventpage/sbc/23._SY530_QL85_.jpg">
                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                Up to 60% Off
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <br>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                            <img class="img-product m-t-img" src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2019/Diwali/W2/PBpage/Teaser/2kurti.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?i=apparel&bbn=1968253031&rh=n%3A1571271031%2Cn%3A%211571272031%2Cn%3A1953602031%2Cn%3A1968253031%2Cn%3A1968255031%2Cp_n_feature_nineteen_browse-bin%3A14852585031&s=price-asc-rank&dc&fst=as%3Aoff&pf_rd_i=15390370031&pf_rd_i=15390370031&pf_rd_m=A1K21FY43GMZF8&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=2f1c8e59-9e56-4065-b083-049d4c8cd373&pf_rd_p=7f8405f5-470a-412c-bd78-ebc5c141f12f&pf_rd_r=KNWQ6SDRPXH38HEQEJHJ&pf_rd_r=P6WZF1RYN8MEPZAH6J7Q&pf_rd_s=merchandised-search-10&pf_rd_s=merchandised-search-10&pf_rd_t=101&pf_rd_t=101&qid=1568199411&rnid=1968253031&ref=sr_nr_n_2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >

                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-format="fluid"
                             data-ad-layout-key="+16+rz-i-q+3f"
                             data-ad-client="ca-pub-6813554619790449"
                             data-ad-slot="3549540616"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

{{--                            <img class="img-product m-t-img" src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2019/Diwali/W2/PBpage/Teaser/4top.jpg">--}}

{{--                        <div class="check-price-padd">--}}
{{--                            <a href="https://www.amazon.in/s?i=fashion&bbn=16491484031&rh=n%3A6648217031%2Cn%3A%216648222031%2Cn%3A%216648224031%2Cn%3A16491484031%2Cn%3A7459780031%2Cn%3A1953602031%2Cn%3A11400137031%2Cn%3A1968542031%2Cn%3A1968543031&dc&field-pct-off-with-tax=00-&fst=as%3Aoff&pf_rd_i=15390370031&pf_rd_i=15390370031&pf_rd_i=16491484031&pf_rd_m=A1K21FY43GMZF8&pf_rd_m=A1K21FY43GMZF8&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=2f1c8e59-9e56-4065-b083-049d4c8cd373&pf_rd_p=7f8405f5-470a-412c-bd78-ebc5c141f12f&pf_rd_p=c2a34733-b7f0-49d5-8501-2c217c198c97&pf_rd_r=D8TTRFK2J96S6GKFCYRK&pf_rd_r=KNWQ6SDRPXH38HEQEJHJ&pf_rd_r=P6WZF1RYN8MEPZAH6J7Q&pf_rd_s=merchandised-search-10&pf_rd_s=merchandised-search-10&pf_rd_s=merchandised-search-4&pf_rd_t=101&pf_rd_t=101&pf_rd_t=101&qid=1569696762&rnid=1968542031&ref=sr_nr_n_1" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2019/Diwali/W2/PBpage/Teaser/1ma.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?i=fashion&bbn=16491484031&rh=n%3A6648217031%2Cn%3A%216648222031%2Cn%3A%216648224031%2Cn%3A16491484031%2Cn%3A7459781031%2Cn%3A1968024031%2Cn%3A1968093031&dc&fst=as%3Aoff&pf_rd_i=15390370031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=7f8405f5-470a-412c-bd78-ebc5c141f12f&pf_rd_r=P6WZF1RYN8MEPZAH6J7Q&pf_rd_s=merchandised-search-10&pf_rd_t=101&qid=1570454768&rnid=1968024031&ref=sr_nr_n_2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2019/Diwali/W2/PBpage/Teaser/3shoe.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?bbn=1983518031&rh=n%3A1571283031%2Cn%3A%211571284031%2Cn%3A1983396031%2Cn%3A1983518031%2Cp_n_feature_nineteen_browse-bin%3A14917613031&dc&fst=as%3Aoff&pf_rd_i=15390370031&pf_rd_i=15390370031&pf_rd_m=A1K21FY43GMZF8&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=2f1c8e59-9e56-4065-b083-049d4c8cd373&pf_rd_p=7f8405f5-470a-412c-bd78-ebc5c141f12f&pf_rd_r=KEVSKMJVV967729CXG54&pf_rd_r=P6WZF1RYN8MEPZAH6J7Q&pf_rd_s=merchandised-search-10&pf_rd_s=merchandised-search-10&pf_rd_t=101&pf_rd_t=101&qid=1568611902&rnid=11301362031&ref=lp_1983518031_nr_p_n_feature_nineteen_1" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/Collectibles/festive/19/SBB-02.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/stores/Idalia/Homepage/page/F6AA8FD5-3B91-4BC1-BD72-3AEA0C44A9E6/ref=s9_acss_bw_cg_Saoffer_2b1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-5&pf_rd_r=0J12E8FQCVB6295JQB5B&pf_rd_t=101&pf_rd_p=5cebb16c-432b-498e-b843-9331120e9f24&pf_rd_i=17930511031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/AmazonSaheli/Store-Page_Tile06_440x300.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?me=A2NSKXH2V2MAQH&marketplaceID=A21TJRUUN4KGV&pf_rd_i=17930511031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=5cebb16c-432b-498e-b843-9331120e9f24&pf_rd_r=0J12E8FQCVB6295JQB5B&pf_rd_s=merchandised-search-5&pf_rd_t=101&ref=s9_acss_bw_cg_Saoffer_3b1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/Collectibles/festive/19/SBB-04.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?me=A2A8XXNVMUD6OI&marketplaceID=A21TJRUUN4KGV&pf_rd_i=17930511031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=5cebb16c-432b-498e-b843-9331120e9f24&pf_rd_r=0J12E8FQCVB6295JQB5B&pf_rd_s=merchandised-search-5&pf_rd_t=101&ref=s9_acss_bw_cg_Saoffer_2d1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/cross-site/03Store-Page_Brand-03_440x300.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?me=AZK73YKMHJHEO&marketplaceID=A21TJRUUN4KGV&pf_rd_i=17930511031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=234083b3-f214-42c5-a918-5d4dddabcbbd&pf_rd_r=0J12E8FQCVB6295JQB5B&pf_rd_s=merchandised-search-7&pf_rd_t=101&ref=s9_acss_bw_cg_Saoffer_2c1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/cross-site/giftsforher.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gcx/Gifts-for-Women/gfhz/ref=s9_acss_bw_cg_Saoffer_2a1_w?categoryId=adult-female&pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-20&pf_rd_r=NZ18P58W19A3QZ6ZJD95&pf_rd_t=101&pf_rd_p=a2eb4ebf-8c38-48d3-a869-227d0c1bdac9&pf_rd_i=18313145031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/cross-site/giftsforhim.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gcx/Gifts-for-Men/gfhz/ref=s9_acss_bw_cg_Saoffer_2b1_w?categoryId=adult-male&pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-20&pf_rd_r=NZ18P58W19A3QZ6ZJD95&pf_rd_t=101&pf_rd_p=a2eb4ebf-8c38-48d3-a869-227d0c1bdac9&pf_rd_i=18313145031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/cross-site/Festivegifts.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gcx/Diwali/gfhz/ref=s9_acss_bw_cg_Saoffer_2c1_w?pf_rd_i=18313145031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=a2eb4ebf-8c38-48d3-a869-227d0c1bdac9&pf_rd_r=NZ18P58W19A3QZ6ZJD95&pf_rd_s=merchandised-search-20&pf_rd_t=101" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/cross-site/6-4-v2.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gcx/Home-Decor/gfhz/ref=cg_GF_F_1_4a1_w/ref=s9_acss_bw_cg_Saoffer_2d1_w?categoryId=home-decor&pf_rd_m=A1K21FY43GMZF8&pf_rd_s=top-slot-1&pf_rd_r=G5D20776ZSSWJW8YM58D&pf_rd_t=0&pf_rd_p=6d4d7a98-f396-412f-9675-927455d2d9c9&pf_rd_i=gf-landing&pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-20&pf_rd_r=NZ18P58W19A3QZ6ZJD95&pf_rd_t=101&pf_rd_p=a2eb4ebf-8c38-48d3-a869-227d0c1bdac9&pf_rd_i=18313145031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Consumables/Jupiter/Wave2/Teaser/SBC/4._CB451243403_.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹55 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?bbn=1374407031&rh=n%3A1355016031%2Cn%3A%211355017031%2Cn%3A1374407031%2Cp_85%3A10440599031&pf_rd_i=17940186031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=10a82d46-be1a-4764-98f8-683c0bd3da54&pf_rd_r=JMDPAPVTMCV5Z9RJ2ZWS&pf_rd_s=merchandised-search-14&pf_rd_t=101&ref=s9_acss_bw_cg_catoffer_2b1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Consumables/Jupiter/Wave2/Teaser/SBC/5._CB451243403_.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?bbn=1374357031&rh=n%3A1355016031%2Cn%3A%211355017031%2Cn%3A1374357031%2Cp_85%3A10440599031&pf_rd_i=17940186031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=10a82d46-be1a-4764-98f8-683c0bd3da54&pf_rd_r=JMDPAPVTMCV5Z9RJ2ZWS&pf_rd_s=merchandised-search-14&pf_rd_t=101&ref=s9_acss_bw_cg_catoffer_2d1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Consumables/Jupiter/Wave2/Teaser/SBC/hygiene._CB451243036_.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Stick <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹125 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?bbn=1374606031&rh=n%3A1350384031%2Cn%3A%211350385031%2Cn%3A1374594031%2Cn%3A1374606031%2Cp_85%3A10440599031&pf_rd_i=17940186031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=10a82d46-be1a-4764-98f8-683c0bd3da54&pf_rd_r=JMDPAPVTMCV5Z9RJ2ZWS&pf_rd_s=merchandised-search-14&pf_rd_t=101&ref=s9_acss_bw_cg_catoffer_2e1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Consumables/Jupiter/Wave2/Teaser/SBC/2._CB451243400_.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?bbn=1374305031&rh=n%3A1355016031%2Cn%3A%211355017031%2Cn%3A1374305031%2Cp_85%3A10440599031&pf_rd_i=17940186031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=10a82d46-be1a-4764-98f8-683c0bd3da54&pf_rd_r=JMDPAPVTMCV5Z9RJ2ZWS&pf_rd_s=merchandised-search-14&pf_rd_t=101&ref=s9_acss_bw_cg_catoffer_2c1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/AmazonBrands/Diwali19/Wave2/Teaser/DE_Skin_440x460_2._CB451600375_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/b/ref=s9_acss_bw_cg_Jup19_3b1_w?node=16676078031&pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-12&pf_rd_r=E7C7YT7SWQ9JGSJ40KSY&pf_rd_t=101&pf_rd_p=0e8283a7-2827-46b6-85da-f106dabda759&pf_rd_i=15390370031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2019/Diwali/PBpage/Diwaliessentials/Handbags._CB1198675309_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?i=fashion&bbn=16491484031&rh=n%3A6648217031%2Cn%3A%216648222031%2Cn%3A%216648224031%2Cn%3A16491484031%2Cn%3A7459780031%2Cn%3A1983338031&dc&field-pct-off-with-tax=60-&fst=as%3Aoff&pf_rd_i=15390370031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=0e8283a7-2827-46b6-85da-f106dabda759&pf_rd_r=E7C7YT7SWQ9JGSJ40KSY&pf_rd_s=merchandised-search-12&pf_rd_t=101&qid=1568197385&rnid=7459780031&ref=sr_nr_n_3" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2019/Diwali/PBpage/Diwaliessentials/Watches._CB1198675309_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/Men-Brands-4-selected-Watches/s?bbn=2563504031&rh=n%3A1350387031%2Cn%3A%211350388031%2Cn%3A2563504031%2Cp_89%3AAntonella+Rossi%7CBRITTON%7CElfin%7CGully+by+Timex&hidden-keywords=-sponsored&pf_rd_i=15390370031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=0e8283a7-2827-46b6-85da-f106dabda759&pf_rd_r=E7C7YT7SWQ9JGSJ40KSY&pf_rd_s=merchandised-search-12&pf_rd_t=101&ref=s9_acss_bw_cg_Jup19_3c1_w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/AmazonBrands/Diwali19/Wave2/Teaser/440x460_2._CB451550225_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?i=kitchen&bbn=1380442031&rh=n%3A976442031%2Cn%3A976443031%2Cn%3A1380442031%2Cp_89%3AAmazon+Brand+-+Solimo%7CAmazonBasics%7CFab+Theory%7CHOME+ATTIRE&hidden-keywords=-sponsored&pf_rd_i=15390370031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=0e8283a7-2827-46b6-85da-f106dabda759&pf_rd_r=E7C7YT7SWQ9JGSJ40KSY&pf_rd_s=merchandised-search-12&pf_rd_t=101&qid=1568237496&rnid=10440598031&ref=sr_nr_p_85_1" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- last 2---}}

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy_25._CB450506374_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B07VRD9CVV/ref=s9_acss_bw_cg_SellingP_6a1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy_5._CB450506375_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B07BCCFBKZ/ref=s9_acss_bw_cg_SellingP_8c1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy_27._CB450506374_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B07XG5V5F7/ref=s9_acss_bw_cg_SellingP_6c1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy7._CB450506368_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B07BLXLY4T/ref=s9_acss_bw_cg_SellingP_2d1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- last 1---}}

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy_36._CB450506369_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B075724BVF/ref=s9_acss_bw_cg_SellingP_8b1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy_21._CB450506374_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B07S7DMG1R/ref=s9_acss_bw_cg_SellingP_4d1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy._CB450506372_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy._CB450506372_.jpg" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Events/SellerTiles/Products/seller-tProducts_w2-copy_20._CB450506374_.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/gp/product/B07R5PKDLQ/ref=s9_acss_bw_cg_SellingP_4c1_w?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=XJ1AFW1VDF9P672YX6MA&pf_rd_t=101&pf_rd_p=5c32d766-c512-4cb6-9388-67cadfea41e0&pf_rd_i=18978977031" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
            <br>
            <br>
    </section>
    <section class="chris-benefits">
        <div class="container " >
            <center>
                <h1 class="f-s-24 f-c-dark f-w-8 txt-center">Best online shops with ShoppRe, Cheap Package Forwarding from India</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel boxed outer border-1px">
                        <ul>
                            <li><span><a href="/myntra-online-shopping">Myntra Online Fashion Store</a></span></li>
                            <li><span><a href="/flipkart-online-shopping">Flipkart.com Online Shop</a></span></li>
                            <li><span><a href="/amazon-india-shop-international-shipping">Amazon.in Shopping India</a></span></li>
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

{{--    <section class="chris-benefits">--}}
{{--        <div class="container" >--}}
{{--            <center>--}}
{{--                <h2 class="header1 p-color-cement-dark font-30">Featured Services & Benefits</h2>--}}
{{--            </center>--}}
{{--            <div class="row text-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies Document-couriers</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel ">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>--}}
{{--                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br/><br/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
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

        (function(d, t) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv2.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>

@endsection
