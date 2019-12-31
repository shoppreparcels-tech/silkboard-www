@extends('layout')

@section('title', 'Pepperfry Online Shopping from India | ShoppRe | Shop Now')
@section('description', 'Online Furniture Shopping from India with ShoppRe International Delivery. Shop Mattresses & Bedding, Home Decor, Furnishings, Homeware and more at best prices.')
@section('keywords', 'furniture international shipping, wall art, mattresses, gifting, pepperfry india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/pepperfry-online-shopping" />
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Pepperfry: Online Furniture & Décor Shopping with ShoppRe International Shipping" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/pepperfry-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="pepperfry international shipping" />
    <meta property="og:description" content="Shop your Pepperfry products with ShoppRe for Internatioanl Shipping from India." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
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

        @media only screen and (max-width:600px) {
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

        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-3px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:651px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection

@section('content')
    <main>
        <div class="header">
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">Pepperfry Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Pepperfry With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i><a href="https://www.shoppre.com/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Pepperfry Products Internationally. T&C*</i></p>
                <br>
                <br>
            </div>
        </div>
    </main>

{{--    <section class="first-time-shipment header-section" style="padding-top: 50px !important;">--}}
{{--        <div class="container no-padding banner">--}}
{{--                <p class="f-s-28 f-c-white f-w-9 text-center" style="background-color: #4285f4"><i>Flipkart Big Diwali Sale Your Favourite Shopping Festival</i></p>--}}
{{--                <div class="col-md-6 col-xs-12" style="padding-top: 7%">--}}
{{--                   <center> <p class="m-t-sm f-s-30">Why Worries Re, <span style="font-family: Bahnschrift">Just ShoppRe!</span></p></center>--}}
{{--                    <p class="f-c-white m-t-sm f-s-18 text-center">--}}
{{--                        If you are in the quest for Indian Fashion & Lifestyle this Diwali for gifting purposes or just getting them for yourselves,--}}
{{--                        then ShoppRe is here to ship all your favorite <span class="underline-color">Shopping & Shipping</span> at your doorsteps to add extra vibrancy to your Diwali (🪔)--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-xs-12 no-padding">--}}
{{--                    <br>--}}
{{--                    <center>--}}
{{--                        <img src="{{asset('img/diwali/diwali-offer.png')}}" alt="Diwali offer india" > <br><br>--}}

{{--                    </center>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        <div class="image-banner">--}}
{{--            <img src="{{asset('img/product/india-flipkart-big-diwali-sale-2019.png')}}" alt="flipkart big diwali sale" style="height: 430px; width: 100%;">--}}
{{--        </div>--}}
{{--    </section>--}}


    <section >
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <div class="">
                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">January 2020 Sale /
                        Below are the Recommended & Recently Shipped Products!</h2>
                </div>
{{--                <div class="col-md-4 col-xs-12 text-center margin-tp">--}}
{{--                    <div class="">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Suresh;%20I%20Love%20to%20Shop%20from%20Pepperfry" target="_blank">--}}
{{--                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/7338208403-personal-shopper-number.png" >--}}
{{--                            <span class="font-16"></span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                            <img class="img-product m-t-img" src="https://ii1.pepperfry.com/media/wysiwyg/banners/06_wmyhah_web_05102019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/home-decor-wall-art-paintings.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://ii2.pepperfry.com/media/wysiwyg/banners/05_wmyhah_web_05102019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Kaju Katli <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹245 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/home-decor-art-panels.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://ii3.pepperfry.com/media/wysiwyg/banners/08_wmyhah_web_05102019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/carpets-furnishing-floor-mats.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://ii3.pepperfry.com/media/wysiwyg/banners/04_wmyhah_web_05102019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/lamps-lighting-festive-lights-string-lights.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://ii2.pepperfry.com/media/wysiwyg/banners/04_wmyle_web_18092019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/home-decor-key-holders.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://i1.pepperfry.com/media/wysiwyg/banners/06_wmyle_web_05102019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/kitchen-dining-cutlery.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://ii1.pepperfry.com/media/wysiwyg/banners/07_wmyle_web_18092019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/home-decor-clocks-time-pieces.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://ii2.pepperfry.com/media/wysiwyg/banners/08_wmyle_web_05102019.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/dining-bar-table-linen.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://ii1.pepperfry.com/media/wysiwyg/banners/02_web_we_19092019_mat.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/bed-bath-pillows.html?order=price&dir=asc&p=1&type=clp_mattress_bedding_what_else_block2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">PILLOWS</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://ii1.pepperfry.com/media/wysiwyg/banners/06_web_we_19092019_mat.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="http://www.pepperfry.com/furnishings-bed-covers.html?type=clp_mattress_bedding_what_else_block6" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">BED COVERS</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://ii1.pepperfry.com/media/wysiwyg/banners/01_web_we_19092019_mat.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/mattresses-bedding-mattresses-kids-mattresses.html?order=price&dir=asc&p=1&type=clp_mattress_bedding_what_else_block1" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">MATTRESSES</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://ii1.pepperfry.com/media/wysiwyg/banners/08_web_we_19092019_mat.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.pepperfry.com/mattresses-bedding-duvets.html?type=clp_mattress_bedding_what_else_block8" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">DUVETS</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

{{--            <div class="row text-center">--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img0.junaroad.com/uiproducts/16610103/pri_175_p-1569421625.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹55 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/beige-null-maybelline-p16610103" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img0.junaroad.com/uiproducts/16598835/pri_175_p-1568973862.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹52 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/multi-na-l-oreal-p16598835" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img0.junaroad.com/uiproducts/16377167/pri_175_p-1568984557.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Pista Stick <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹125 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/gold-miss-rose-miss-rose-p16377167" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img0.junaroad.com/uiproducts/16186169/pri_175_p-1554816034.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹52 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/multi-miss-rose-miss-rose-p16186169" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img1.junaroad.com/uiproducts/15159020/pri_175_p-1528346558.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹55 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/white-nylon-aarika-p15159020" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img0.junaroad.com/uiproducts/14505817/pri_175_p-1512130669.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹52 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/green-velvet-aj-dezines-p15475779?imgIdx=0&src_id=5c793c6778400__3" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img1.junaroad.com/uiproducts/15475778/pri_175_p-1539597548.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Pista Stick <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹125 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/beige-velvet-aj-dezines-p15475778" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-xs-6 col-md-3 zoom">--}}
{{--                <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >--}}
{{--                    <img class="img-product m-t-img " src="https://img2.junaroad.com/uiproducts/14791326/pri_175_p-1517917067.jpg">--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                    --}}{{--                            ₹52 + Shipping Charges--}}
{{--                    --}}{{--                        </div>--}}
{{--                    <div class="check-price-padd">--}}
{{--                        <a href="https://www.limeroad.com/brown-cotton-crux-hunter-p14791326" target="_blank"> <span class="elementor-icon-list-icon">--}}
{{--                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>--}}
{{--                                </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}

            <br>
            <br>
            </div>
        <div class="container div-ics-border-btm">
            <div class="col-md-12 col-xs-12 no-pad">
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <br>
                    <p class="f-s-20 f-c-gray txt-center">ShoppRe International Shopping and Shipping Made Easy</p>
                    <div class="col-md-6 col-xs-12 ">
                        <ul>
                            <li><a href="/flipkart-online-shopping">Flipkart.com Online Shop</a></li><br>
                            <li><a href="/ajio-online-shopping">AJIO Trends Online Shop</a></li><br>
                            <li><a href="/firstcry-online-shopping">Baby & Kids Shopping Store</a></li><br>
                            <li><a href="/amazon-online-shopping">Shop Online on Amazon.in</a></li><br>
                            <li><a href="/limeroad-online-shopping">LimeRoad Online Shopping</a></li><br>
                            <li><a href="/nykaa-online-shopping">Nykaa Online Beauty Store</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12 ">
                        <ul>
                            <li><a href="/tatacliq-online-shopping">Tata CLiQ Online Shopping</a></li><br>
                            <li><a href="/lifestylestores-online-shopping">Lifestyle Online Clothing</a></li><br>
                            <li><a href="/myntra-online-shopping">Myntra Online Fashion Store</a></li><br>
                            <li><a href="/fabindia-online-shopping">Fabindia Traditional Wear</a></li><br>
                            <li><a href="/shoppersstop-online-shopping">Shoppers Stop Apparel</a></li><br>
                            <li><a href="/chumbak-online-shopping">Chumbak.com Online Shop</a></li>
                        </ul>
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
