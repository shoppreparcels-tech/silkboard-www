@extends('layout')

@section('title', 'TATA CLiQ Online Shopping - Brands you love at low prices from India')
@section('description', 'Buy latest Smartphone, Fashion and Lifestyle products from top known brands. Tata Cliq Products delivered to your doorstep with ShoppRe International Shipping.')
@section('keywords', 'tata cliq, fashion, lifestyle products, international shipping, cheap online shopping ')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/tatacliq-online-shopping" />
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Tata CLiQ: Online Shopping with ShoppRe International Shipping" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/tatacliq-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="Tatacliq international shipping" />
    <meta property="og:description" content="Sign-up for Indian Shipping Address. Shop your Tata CLiQ products with ShoppRe for Internatioanl Shipping at lowest price from India." />
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
                    <h1 class="f-s-36 f-c-white f-w-8">Tata CLiQ Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Tata CLiQ With Your ShoppRe Address for International Shipping from India.<br></p>
                    <br>
                </center>
{{--                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611">--}}
                <p class="f-c-white f-w-9 text-center" >
                    <i><a href="https://www.shoppre.com/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Tata CLiQ Products Internationally. T&C*</i></p>
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
                    <center>
                        <a href="https://www.tatacliq.com/eoss-pbuzz?&icid2=eoss:cbc:main:hmp:m00:mulb:best:01:R11:clp:bx:010" target="_blank">
                            <img class="img-desktop-view"
                                 src="//assets.tatacliq.com/medias/sys_master/images/27188426113054.gif"
                                 width="1100px"></a>
                        <a href="https://www.tatacliq.com/eoss-pbuzz?&icid2=eoss:cbc:main:hmp:m00:mulb:best:01:R11:clp:bx:010" target="_blank">
                            <img class="img-mobile-view img-shopperstop-offer"
                                 src="//assets.tatacliq.com/medias/sys_master/images/27170703573022.gif"
                                 width="310px" ></a>
                    </center>
                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center"><span class="f-s-25 f-c-red f-w-9">Indianwear
                    for every season<span>
                        / Below are the Recommended & Recently Shipped Products!</h2>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.tatacliq.com/womens-clothing/c-msh10?q=%3Arelevance%3Acategory%3AMSH10%3Acategory%3AMSH10%3Acategory%3AMSH10%3Acategory%3AMSH10%3Acategory%3AMSH10%3Acategory%3AMSH10%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3Abrand%3AMBH11B10517%3Abrand%3AMBH11B10522%3Abrand%3AMBH11B10518%3Abrand%3AMBH11B10513%3Abrand%3AMBH11B10515%3AdiscountAll%3ADiscounted%2BItems&icid2=mdo:ofc:main:hmp:m10:b10515:best:11:R8:blp:bx:001" target="_blank">
                            <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/27188428177438.jpg">
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.tatacliq.com/marriage-of-colours-men?&icid2=week:tsb:tmain:hmp:m11:mulb:best:02:R10:clp:bx:001" target="_blank">
                            <img class="img-product m-t-img" src="https://assets.tatacliq.com/medias/sys_master/managed/16645510922270.jpg">
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.tatacliq.com/womens-clothing-ethnic-wear-suits/c-msh1012101?q=%3Arelevance%3Acategory%3AMSH1012101%3Acategory%3AMSH1012101%3Acategory%3AMSH1012101%3Acategory%3AMSH1012101%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3Adisplay-classification%3AKurta%2BBottom%2BSet%3Adisplay-classification%3AKurta%2BWith%2BPalazzo%3Adisplay-classification%3AKurta%2BWith%2BPalazzos%3AdiscountAll%3ADiscounted%2BItems&icid2=catl:tsb:main:hmp:m1012101:mulb:best:01:R19:clp:Bx:010" target="_blank">
                            <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/27196106342430.jpg">
                            {{--<div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 45px !important;font-weight: normal">
                            For Party <br>
                        </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.tatacliq.com/kids-girls-clothing-dresses/c-msh2111102?q=%3Arelevance%3Acategory%3AMSH2111102%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3AdiscountAll%3ADiscounted%2BItems&icid2=catl:tsb:main:hmp:m2111102:mulb:best:03:R19:clp:Bx:010" target="_blank">
                            <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/27196106670110.jpg">
                             {{--<div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 45px !important;font-weight: normal">
                                Festive <br>
                            </div>--}}
                        </a>
                    </div>
                </div>

            </div>

            <div class="row text-center">
                            <div class="col-sm-4 col-xs-6 col-md-3">
                                <div class="shopandship onam-prod-pic p-b-26">
                                    <a href="https://www.tatacliq.com/womens-clothing-western-wear-tops-tunics/c-msh1016102/page-1?q=%3Arelevance%3Acategory%3AMSH1016102%3Acategory%3AMSH1016102%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse&icid2=style:2by2:clp:wom:m1016102:mulb:best:01:R11:clp:bx:001" target="_blank">
                                        <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/16774641582110.jpg">
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-6 col-md-3">
                                <div class="shopandship onam-prod-pic p-b-26">
                                    <a href="https://www.tatacliq.com/womens-clothing-ethnic-wear-sarees-and-lehenga-sets/c-msh1012102/page-1?q=%3Arelevance%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3Adisplay-classification%3ASarees%3AFabric-family-kidswear%3ACotton+Silk%3AFabric-family-kidswear%3APoly+Silk%3AFabric-family-kidswear%3AOrganza%3AFabric-family-kidswear%3ATussar+Silk%3AFabric-family-kidswear%3ASilk&icid2=style:tsb:clp:wom:m1012102:mulb:best:02:R11:clp:bx:001" target="_blank">
                                        <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/16774641516574.jpg">
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-6 col-md-3">
                                <div class="shopandship onam-prod-pic p-b-26">
                                    <a href="https://www.tatacliq.com/sarees-and-lehenga-sets/c-msh1012102?q=%3Arelevance%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3Acategory%3AMSH1012102%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3Adisplay-classification%3ALehenga+Choli+Set%3Adisplay-classification%3ATop+With+Skirt%3Adisplay-classification%3AShirt+With+Skirt%3Adisplay-classification%3ABlouse+With+Skirt%3Adisplay-classification%3ALehenga+Set%3Adisplay-classification%3ALehenga%3Adisplay-classification%3ATop+with+Skirt&icid2=style:tsb:clp:wom:m1012102:mulb:best:03:R11:clp:bx:001" target="_blank">
                                        <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/16774641451038.jpg">
                                        {{--<div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 45px !important;font-weight: normal">
                                        For Party <br>
                                    </div>--}}
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-6 col-md-3">
                                <div class="shopandship onam-prod-pic p-b-26">
                                    <a href="https://www.tatacliq.com/footwear-women/c-msh1310/page-1?q=%3Arelevance%3Acategory%3AMSH1310%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3Aheeltype-classification%3AFlat%3AdiscountAll%3ADiscounted+Items%3Asandaltype-classification%3AT-Strap%3Asandaltype-classification%3ASling+Back%3Asandaltype-classification%3ASlide%3Asandaltype-classification%3ABack+Strap%3Asandaltype-classification%3ACross+Strap%3Asandaltype-classification%3AAnkle+Strap%3Asandaltype-classification%3A-%3Asandaltype-classification%3AGladiator&icid2=style:tsb:clp:wom:m1310:mulb:best:05:R11:clp:bx:001" target="_blank">
                                        <img class="img-product m-t-img" src="//assets.tatacliq.com/medias/sys_master/images/16774641713182.jpg">
                                         {{--<div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 45px !important;font-weight: normal">
                                            Festive <br>
                                        </div>--}}
                                    </a>
                                </div>
                            </div>

                        </div>

            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                            <img class="img-product m-t-img" src="https://assets.tatacliq.com/medias/sys_master/managed/16328752889886.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/womens-lifestyle" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://assets.tatacliq.com/medias/sys_master/managed/16328751579166.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Kaju Katli <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹245 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/mens-lifestyle" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://assets.tatacliq.com/medias/sys_master/managed/16328751841310.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jQsZ" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://assets.tatacliq.com/medias/sys_master/managed/16367996239902.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/electronics-tablets-tablets/c-msh1210100" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://assets.tatacliq.com/medias/sys_master/managed/16358104498206.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/womens-clothing-ethnic-wear-suits/c-msh1012101" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://assets.tatacliq.com/medias/sys_master/managed/16358105153566.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/t-shirts-&-polos/c-msh1116100/" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://assets.tatacliq.com/medias/sys_master/managed/16332537593886.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/footwear-men/c-msh1311/" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://assets.tatacliq.com/medias/sys_master/managed/16358104891422.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/electronics-personal-care/c-msh1236?&icid2=catd:nav:regu:anav:m1236:mulb:best:01:R9&icid2=caty:tsb:tmain:hmp:m1316:mulb:min60off:03:R25:clp:Bx:001" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16331083120670.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/womens-clothing-western-wear-tops-tunics/c-msh1016102" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16331077648414.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/footwear-women/c-msh1310/" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16331077713950.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/accessories-women-bags-sling-bags/c-msh1600000" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16331077845022.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/watches/c-msh15/page-1" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/15218384830494.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹55 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/kids/c-msh21?q=%3Arelevance%3Acategory%3AMSH21%3Acategory%3AMSH21%3Aprice%3A%E2%82%B9299-%E2%82%B9599%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3ACategory-type-kidswear%3ACasual+Tops+%26+Tees%3ACategory-type-kidswear%3AT-Shirts&icid2=catd:tsb:clp:wom:m21:mulb:blw599:01:R10" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/15218384961566.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/kids/c-msh21?q=%3Arelevance%3Acategory%3AMSH21%3Acategory%3AMSH21%3Acategory%3AMSH21%3Acategory%3AMSH21%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3ACategory-type-kidswear%3AShorts+%26+Skorts%3ACategory-type-kidswear%3AShorts%3ACategory-type-kidswear%3AJumpsuit%2F+Dungaree%3AdiscountAll%3ADiscounted+Items&icid2=catd:tsb:clp:wom:m21:mulb:ut60off:02:R10" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/15218385027102.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Stick <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹125 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/kids/c-msh21?q=%3Arelevance%3Acategory%3AMSH21%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3AOccasion%3Aoccasionkidswearethnic%3Aprice%3A%E2%82%B9399-%E2%82%B93%2C999&icid2=catd:tsb:clp:wom:m1012:mulb:srt399:03:R10" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/15218385092638.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/kids/c-msh21/page-1?q=:relevance:inStockFlag:true:isLuxuryProduct:false:category:MSH21:category:MSH21:category:MSH21:brand:MBH11B10547&icid2=catd:tsb:clp:wom:m1012:mulb:min20off:04:R10" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16328091664414.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/mens-clothing/c-msh11?q=%3Arelevance%3Acategory%3AMSH11%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3AdiscountFlag%3A70%25+and+more&icid2=catd:tsb:clp:men:m11:mulb:flt70off:03:R2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16328091140126.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/casual/c-msh1311113?q=%3Arelevance%3Acategory%3AMSH1311113%3Acategory%3AMSH1311113%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3AdiscountFlag%3A50%25+-+70%25%3AdiscountFlag%3A70%25+and+more&icid2=catd:tsb:clp:men:m1311113:mulb:flt70off:01:R2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16328098611230.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/mens-clothing/c-msh11/page-1?q=%3Arelevance%3Acategory%3AMSH11%3Acategory%3AMSH11%3Acategory%3AMSH11%3Acategory%3AMSH11%3Acategory%3AMSH11%3Acategory%3AMSH11%3Acategory%3AMSH11%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3Abrand%3AMBH11H00010&icid2=bran:tsb:clp:men:m11:h00010:ut60off:04:R8" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="//assets.tatacliq.com/medias/sys_master/images/16328096415774.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.tatacliq.com/accessories-mens-belts/c-msh1606?q=%3Arelevance%3Acategory%3AMSH1606%3Acategory%3AMSH1606%3Acategory%3AMSH1606%3AinStockFlag%3Atrue%3AisLuxuryProduct%3Afalse%3AdiscountFlag%3A30%25+-+50%25%3AdiscountFlag%3A50%25+-+70%25%3AdiscountFlag%3A70%25+and+more&icid2=catd:tsb:clp:men:m1606:mulb:min50off:04:R6" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            </div>
    </section>

    <section class="content-oes">
            <div class="container-fluid c-f-p">
                  <p class="f-s-36 f-c-white f-w-8">Tata CLiQ International Delivery from India</p>
                  <h1>Saw something you like? Buy it right away and we will ship your order to your country!</h1>

                             <p>You just scrolled down to some amazing products from the Indian online shopping store- tatacliq.com.
                             With more than 1 lack of options from 1200 + brands in women’s fashion, men’s fashion, and kid’s fashion
                             category, Tatacliq is one of the most popular online shopping sites in India. Its popularity is not just for the wide
                             array of selection in the latest fashion but also for the amazing offers and deals of the day where customers can
                             get the best prices on almost everything. With fashion, this amazing Indian online shopping site also takes care of
                             gadget frenzy people out there. Latest launches, bestsellers, and premium phones from the top brands are available at
                             discounts throughout the year for customer’s delight.</p>

                             <h1>Women’s Fashion</h1>

                             <p>Tatacliq has the most beautiful Indian clothes collection from the best Indian brands like Jaipur
                             Kurti, Global Desi, Globus, Varanga, Label Ritu Kumar, W, Pantaloons, Aurelia, and many more.
                             It also offers great collections from international brands like the United color of Benetton,
                             Forever New, Hunkermoller, Nuon, etc. Shop for them and give your wardrobe a new look!</p>

                             <h1>Men’s Fashion</h1>

                             <p>Who says men don’t like to shop? The trendy collection at tatacliq.com from the tops brands
                             like ETA, Pepe Jeans, Puma, Park Avenue, Ascot, Killer, Levi’s, Raymond, Blackberrys, Woodland,
                             etc. is best for the millennials. So shop till you drop with ShoppRe.</p>

                              <h1>Kid’s Fashion</h1>

                              <p>If you are in search of a new outfit for your little one, then look no more. Tatacliq also offers
                              a wide range of fashionably cute dresses, tops, jeans, accessories for your angels from brands like
                              Allen Solly Junior, United Colors at Benetton, Gini & Jony, Pantaloons Junior, Crocs, Cutecumber,
                              Peppermint, A little fable, Miniklub, HOP by Westside, etc.
                             </p>

                              <h1>Mobile Phones</h1>

                              <p>Bored with your old phone? Then get a new one from amazing brands like Apple, Oppo, Xiaomi, Nokia,
                              Motorola, Samsung, Vivo, etc at tatacliq.com. The website offers great deals and offers at almost
                              all times for you to buy the best phone at the best price. So the next time you go on a shopping
                              spree with Tatacliq, just get yourself a new mobile phone that suits your budget.
                              </p>

                               <h1>Online shopping from tatacliq.com</h1>

                               <p>Well, all these great offers over a plethora of products, but what about shipping? Don’t worry,
                               ShoppRe is your answer! If you are from the USA, UAE, Australia, Germany, Canada, Maldives,
                               South Africa, or any other country of the world, shopping from Indian online shopping sites like
                               Tatacliq is possible through our robust and reliable express parcel delivery system with affordable international shipping cost. Just order the products and we will deliver your order at your doorsteps within 3-6 business days.
                               </p>

                         </div>
                         <br>
                         <br>
                </section>

    <section class="delivery" style="background-color: #f2f6fb;">
        <div class="container">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900 txt-center">Indian Shopping Sites Offers & Sale:</h3>
            <br/>
            <div class="row">
            <br/>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Beauty Bonanza</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Daily Dose Of Amazing Offers</h5>
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Inspiration</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Half Price Sale</h5>
                            <div class="ecomSmallBox">
                                <a href="/lifestylestores-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">LIFESTYLE</p>
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Baby Toys</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Flat 50% Off</h5>
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Women's Westernwear</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Flat 50% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.shoppersstop.com/women-westernwear/c-A2060" target="_blank">
                                    <p class="header5 p-color-cement-dark font-weight-900">SHOPPERS STOP</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>

                    <div class="col-md-3 col-xs-12">
                        <center>
                            <div class="EcomBox">
                                <h4 class="header4 p-color-blue text-transform-u font-weight-900">Celebration Wear</h4>
                                <h5 class="header6 p-color-cement font-weight-900">Indian Wedding, Ethnic & more</h5>
                                <div class="ecomSmallBox">
                                    <a href="https://www.manyavar.com/" target="_blank">
                                        <p class="header3 p-color-cement-dark font-weight-900">MANYAVAR</p>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>

                    <div class="col-md-3 col-xs-12">
                        <center>
                            <div class="EcomBox">
                                <h4 class="header4 p-color-blue text-transform-u font-weight-900">MensXP MUD</h4>
                                <h5 class="header6 p-color-cement font-weight-900">From ₹390</h5>
                                <div class="ecomSmallBox">
                                    <a href="https://shop.mensxp.com/all-brands/beauty-brands/mensxp-mud" target="_blank">
                                        <p class="header3 p-color-cement-dark font-weight-900">MENSXP</p>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>

                    <div class="col-md-3 col-xs-12">
                        <center>
                            <div class="EcomBox">
                                <h4 class="header4 p-color-blue text-transform-u font-weight-900">Shirts & Trousers</h4>
                                <h5 class="header6 p-color-cement font-weight-900">Flat 50% Off</h5>
                                <div class="ecomSmallBox">
                                    <a href="https://paytmmall.com/Mens_Shirts_Trousers_Flat_50_Off_Flat_20_Cashback-llpid-202578" target="_blank">
                                        <p class="header3 p-color-cement-dark font-weight-900">PAYTM MALL</p>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>



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
