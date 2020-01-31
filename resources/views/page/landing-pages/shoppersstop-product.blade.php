@extends('layout')

@section('title', 'Shoppers Stop International Delivery | Shopping from India')
@section('description', 'Shop online for apparel, books, home decor products and more at attractive prices from Shoppers Stop. Ship with ShoppRe for International Delivery.')
@section('keywords', 'shoppers stop, ultimate shopping destination, personal shopper, india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/shoppersstop-online-shopping" />
    <meta name="robots" content="nofollow" />

{{--    <meta property="og:title" content="Amazon.in: Online Shopping with ShoppRe International Delivery" />--}}
{{--    <meta property="og:type" content="website" />--}}
{{--    <meta property="og:url" content="https://www.shoppre.com/amazon-online-shopping" />--}}
{{--    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />--}}
{{--    <meta property="og:image:width" content="2160">--}}
{{--    <meta property="og:image:height" content="1216">--}}
{{--    <meta property="og:image:alt" content="Amazon international shipping" />--}}
{{--    <meta property="og:description" content="Amazon India products Internatioanl Delivery with ShoppRe at lower rates." />--}}
{{--    <meta property="og:site_name" content="ShoppRe" />--}}

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .underline-color  {
            text-decoration: underline red;
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
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">Shoppers Stop Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Shoppers Stop With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Shoppersstop.com Products Internationally. T&C*</i></p>
                <br>
                <br>
            </div>
        </div>
    </main>


    <section >
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <div>
                    <center>
                    <a href="https://www.shoppersstop.com/promotions?icid=eoss|homepg|1-1|offerpg" target="_blank">
                        <img class="img-desktop-view"
                             src="https://sslimages.shoppersstop.com/sys-master/root/h6f/hca/14330303676446/banner_00_2000x600_eoss_EN_2000W_20200130.jpg"
                             width="1100px"
                        ></a>
                        </center>
                        <center>
                        <a href="https://www.shoppersstop.com/promotions?icid=eoss|homepg|1-1|offerpg" target="_blank">
                    <img class="img-mobile-view img-shopperstop-offer"
                         src="https://sslimages.shoppersstop.com/sys-master/root/h5f/hc7/14330303741982/banner_04_640x728_eoss_EN_640W_20200130.jpg"
                         width="310px" ></a>
                    </center>
                    {{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">November 2019 Sale /--}}
{{--                        Below are the Recommended & Recently Shipped Products!</h2>--}}
{{--                    <span class="f-s-25 f-c-red f-w-9">Big Bag Days (25-31 Oct)</span>--}}
                </div>

            </div>

            {{--Women's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-22 p-color-cement-dark font-weight-900 ">Women's Fashion</h2>
{{--                <p  class="f-s-20 f-c-red f-w-9">KEEP IT COOL AND CASUAL</p>--}}
                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.shoppersstop.com/brand/biba?icid=createyourownethnicstyles|homepg|3-1|biba" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/hbe/h83/14268519415838/4wid_Biba-2020.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/kashish?icid=createyourownethnicstyles|homepg|3-2|kashish" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h28/hb0/14268517679134/Kashish_4wid-2020.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/ishin?icid=createyourownethnicstyles|homepg|3-3|ishin" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h55/h80/14268519514142/Ishin_4wid-20191205.jpg.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-indianwear/c-A2010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3ALibas%3Abrands%3ALIBAS%3Abrands%3AGERUA&text=&startRange=&endRange=&showType=&icid=createyourownethnicstyles|homepg|3-4|libasgerua" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hff/h7f/14268519546910/Libas-Gerua_4wid-20191205.jpg.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-westernwear/c-A2060?q=%3Adiscount-desc%3AinStockFlag%3Atrue%3Abrands%3AKRAUS&text=&startRange=&endRange=&showType=&icid=keepitcoolandcasual|homepg|2-1|kraus" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hfc/ha2/14126120075294/4-tab_Home-lp_1-krauses.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-westernwear/c-A2060?sort=discount-desc&q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3ALATIN%2BQUARTERS&startRange=&endRange=&icid=keepitcoolandcasual|homepg|2-2|latinquarters" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h53/h8f/14181035376670/4-tab_Home-lp_2-latinquarter.jpg.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-westernwear/c-A2060?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3A109F%3Abrands%3AFUSION%2BBEATS&text=&startRange=&endRange=&showType=&icid=keepitcoolandcasual|homepg|2-3|andglobaldesi" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/ha9/h44/14268537307166/4-tab_Home-lp_3-109F-Fusionbets.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-westernwear/c-A2060?q=%3Adiscount-desc%3AinStockFlag%3Atrue%3Abrands%3ALIFE&text=&startRange=&endRange=&showType=&icid=keepitcoolandcasual|homepg|2-4|life" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h6d/h5d/14126119780382/4-tab_Home-lp_4-life.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>
            </div>

            <br>
            {{--Men's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-22 p-color-cement-dark font-weight-900 ">Men's Fashion</h2>

                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Al3category%3AJeans&text=&startRange=&endRange=&showType=&icid=gocasualinstyle|menpg|3-1|jeans" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h4a/he8/13850563182622/4wid_1-jeans.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Al3category%3AShirts&text=&startRange=&endRange=&showType=&icid=gocasualinstyle|menpg|3-2|shirts" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h27/h12/13850573340702/4wid_2-shirt.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Al3category%3AT-shirts&text=&startRange=&endRange=&showType=&icid=gocasualinstyle|menpg|3-3|t-shirt" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h25/h86/13850580189214/4wid_3-t-shirt.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Al3category%3ACargos%2B%2526%2BTrousers&text=&startRange=&endRange=&showType=&icid=gocasualinstyle|menpg|3-4|cargos&trousers" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h38/h0f/13850594181150/4wid_4-cargous%26traouers.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/puma?q=%3AcategoryRelevance%3AinStockFlag%3Atrue%3Abrands%3APUMA%3AallPromotions%3AFlat%2B50%2525%2BOff&text=&startRange=&endRange=&showType=&brandPageId=&linkText=&icid=musthavebrands|homepg|6-2|puma" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hec/h09/14103685070878/4wid_Puma-20191227.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?sort=categoryRelevance&q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3AJACK%2BAND%2BJONES&startRange=&endRange=&cid=musthavebrands|homepg|6-3|jack&jones" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h77/h9d/14128763043870/4wid_Jack-and-jones-20191231.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/skechers?sort=topRated&q=%3AcategoryRelevance%3AinStockFlag%3Atrue%3Abrands%3ASKECHERS&startRange=&endRange=&icid=musthavebrands|homepg|6-4|skechers" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h83/h73/14103686053918/4wid_Skechers-20191227.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3AUNITED%2BCOLORS%2BOF%2BBENETTON%3AallPromotions%3AFlat%2B30%2525%2BOff&text=&startRange=&endRange=&showType=&icid=musthavebrands|homepg|6-1|ucb" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h0f/hb9/14128674373662/4wid_4-ucb-20191231.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>
            </div>
            <br>

            {{--Kid's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Kid's Fashion</h2>
                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.shoppersstop.com/search?q=a19launch%3Arelevance%3AinStockFlag%3Atrue%3Al1category%3ABOYS%3Al1category%3AGIRLS%3Abrands%3ATINY%2BGIRL&text=a19launch&startRange=&endRange=&showType=&brandPageId=&linkText=&icid=newfavourite|kidspg|3-1|tinygirl" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/he3/haa/13416002846750/NewArrival_po2_kidspg_Tinygirl.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
{{--                        </a>--}}
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/search?q=a19launch%3Arelevance%3AinStockFlag%3Atrue%3Al1category%3ABOYS%3Al1category%3AGIRLS%3Abrands%3AALLEN%2BSOLLY&text=a19launch&startRange=&endRange=&showType=&brandPageId=&linkText=" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h56/h09/13415954087966/NewArrival_po1_kidspg_Allensolly%20%281%29.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/search?q=a19launch%3Arelevance%3AinStockFlag%3Atrue%3Al1category%3ABOYS%3Al1category%3AGIRLS%3Abrands%3AU.S.%2BPOLO%2BASSN.&text=a19launch&startRange=&endRange=&showType=&brandPageId=&linkText=#" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/hb9/h28/13416102985758/NewArrival_po4_kidspg_U.Spolo.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/search?q=a19launch%3Arelevance%3AinStockFlag%3Atrue%3Al1category%3ABOYS%3Al1category%3AGIRLS%3Abrands%3AUNITED%2BCOLORS%2BOF%2BBENETTON&text=a19launch&startRange=&endRange=&showType=&brandPageId=&linkText=#" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/he6/ha7/13416002781214/NewArrival_po3_kidspg_UCB.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>
            </div>

            <br>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/hff/hb0/13498360856606/4-tab_navratri_White.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-WhiteNavratri?icid=navratrifest|navratrifestpg|4-1|white" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                {{--                        g-adsense--}}
                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <a target="_blank">
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
                        <div class="check-price-padd">
                            <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/hcb/h29/13496201543710/4-tab_navratri_1_green.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-GreenNavratri?icid=navratrifest|navratrifestpg|5-1|green" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 ">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hfd/h1f/13496201805854/4-tab_navratri_3_purple01.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-PurpleNavratri?icid=navratrifest|navratrifestpg|5-3|purple" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hd1/h25/13498367442974/4-tab_navratri_Yellow.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-YellowNavratri?icid=navratrifest|navratrifestpg|4-4|yellow" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h42/h1b/13498367115294/4-tab_navratri_Red.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-RedNavratri?icid=navratrifest|navratrifestpg|4-2|red" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hcd/h26/13496201609246/4-tab_navratri_2_gray.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-GreyNavratri?icid=navratrifest|navratrifestpg|5-2|gray" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h3b/h1f/13496201871390/4-tab_navratri_4_peacock-green.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/c-GreenNavratri?icid=navratrifest|navratrifestpg|5-4|peacockgreen" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/he6/h50/13593833046046/web_handbags.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://ssladmin.shoppersstop.com/women-accessories-handbags/c-A202010?sort=discount-desc&q=%3AtopRated%3AinStockFlag%3Atrue&startRange=&endRange=&icid=complementyourstyle|offerpg|5-1|lavie" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hf7/h53/13593833111582/web_womens_footwear.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://ssladmin.shoppersstop.com/women-shoes/c-A2030?sort=discount-desc&q=%3AtopRated%3AinStockFlag%3Atrue&startRange=&endRange=&icid=complementyourstyle|offerpg|5-2|womenfootwear" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/ha5/h54/13593833177118/web_mens_footwear.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://ssladmin.shoppersstop.com/men-shoes/c-A1030?icid=complementyourstyle|offerpg|5-3|mensfootwear" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hb6/h57/13593833242654/Web_wallet%26belts.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://ssladmin.shoppersstop.com/men-accessories/c-A1020?q=%3Adiscount-desc%3AinStockFlag%3Atrue%3Al3category%3ABelts%3Al3category%3AWallets&text=&startRange=&endRange=&showType=&icid=complementyourstyle|offerpg|5-4|wallets&belts" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h4e/h4b/13550150680606/4wid_Web-ishin.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹55 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/brand/ishin?sort=discount-desc&q=%3AcategoryRelevance%3AinStockFlag%3Atrue%3Abrands%3AISHIN&startRange=&endRange=&icid=slaytheethniceway|offerpg|4-1|ishin" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.s3-ap-southeast-1.amazonaws.com/sys-master/images/h56/h77/13056527106078/4wid_Web_2-w.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/brand/w?eoss|offerpg|5-2|w" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/images/h33/h93/13056527958046/4wid_Web_3-Aurelia.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Stick <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹125 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/brand/aurelia?eoss|offerpg|5-3|aurelia" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h90/h5e/13461593227294/4wid_Web_1-varnaga.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/women-indianwear/c-A2010?sort=discount-desc&q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3AVARANGA&startRange=&endRange=&icid=slaytheethnicway|offerpg|5-4|varanga" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h75/h4b/11572784300062/crossword-jk-rowling.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/crossword-books/c-C1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3ACROSSWORD%3Al3category%3AChildren%3AAuthor%3AJ.K.+Rowling&text=&startRange=&endRange=&showType=#" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h70/h4a/11572784398366/crossword-rick.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/crossword-books/c-C1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Al3category%3AChildren%3AAuthor%3ARick+Riordan&text=&startRange=&endRange=&showType=#" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.s3-ap-southeast-1.amazonaws.com/sys-master/root/h7e/ha7/11572783710238/crossword-agatha.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/crossword-books-fiction/c-C101030?q=%3AtopRated%3AinStockFlag%3Atrue%3AAuthor%3AAgatha+Christie&text=&startRange=&endRange=&showType=#" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hdd/h4e/11572784201758/crossword-james.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.shoppersstop.com/crossword-books-children/c-C1010120?q=%3AtopRated%3AinStockFlag%3Atrue%3AAuthor%3AJames+Patterson&showType=&startRange=&endRange=&sort=topRated" target="_blank"> <span class="elementor-icon-list-icon">
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
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900">Shop India Stores Online Ship Globally with ShoppRe.com</h1>
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
                            <li><span><a href="/myntra-women-kurta-kurtis-international-shipping" target="_blank">Women Kurta Shopping</a></span></li>
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

        (function(d, t) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv2.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>

@endsection
