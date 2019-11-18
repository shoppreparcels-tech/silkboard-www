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
                <div class="">
{{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">November 2019 Sale /--}}
{{--                        Below are the Recommended & Recently Shipped Products!</h2>--}}
{{--                    <span class="f-s-25 f-c-red f-w-9">Big Bag Days (25-31 Oct)</span>--}}
                </div>
            </div>

            {{--Women's Fashion --}}
            <div class="row text-center">
                <h2 class="f-s-22 p-color-cement-dark font-weight-900 ">Women's Fashion</h2>
                <p  class="f-s-20 f-c-red f-w-9">ETHNIC SWAG FOR WEDDING SCENES</p>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <a href="https://www.shoppersstop.com/women-indianwear-sarees/c-A201050?icid=weddingstore|wsddingstorepg|6-1|sarees" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h68/h82/13719594958878/4-tab_wedding-pg_Sarees.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-indianwear-salwar-churidar-suits/c-A201020?icid=weddingstore|wsddingstorepg|6-2|salwarchuridarsuit" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h25/hcd/13719595024414/4-tab_wedding-pg_SALWAR-%26-CHURIDAR-SUITS.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-indianwear-lehenga-cholis/c-A201080?icid=weddingstore|wsddingstorepg|6-3|lehengacholis" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/h3b/hd1/13719595188254/4-tab_wedding-pg_LEHENGA-CHOLIS.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/women-indianwear-kurtas/c-A201010?icid=weddingstore|wsddingstorepg|6-4|kurta" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hb9/he4/13731136995358/4-tab_wedding-pg_Kurta-20190511.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/biba?icid=weddingstore|wsddingstorepg|3-1|biba" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h1f/he6/13719587684382/BIBA_4-tab_wedding.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/w?icid=weddingstore|wsddingstorepg|3-2|w" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h98/hbe/13719588208670/W_4-tab_wedding.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/indya?icid=weddingstore|wsddingstorepg|3-3|indya" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hd6/h53/13719589290014/indya_4-tab_wedding.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 60% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/varanga?icid=weddingstore|wsddingstorepg|3-4|varanga" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h76/hac/13738612260894/4-tab_wedding-varnaga.jpg">
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
                        <a href="https://www.shoppersstop.com/brand/celio?sort=discount-desc&q=%3AcategoryRelevance%3AinStockFlag%3Atrue%3Abrands%3ACELIO&startRange=&endRange=&icid=versatilestylesyoulllove|menpg|2-1|celio" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/hb8/h4a/13495537369118/4-tab_Celio.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?sort=categoryRelevance&q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3AU.S.%2BPOLO%2BASSN.%3Abrands%3AU.S.%2BPOLO%2BASSN.%2BDENIM%3AallPromotions%3AUS%2BPolo%2BFlat%2B30%2525%2BOff%2BSCM001527710&startRange=&endRange=" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/he8/had/13495538188318/4-tab_Us-polo.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3AJACK%2BAND%2BJONES&text=&startRange=&endRange=&showType=&icid=versatilestylesyoulllove|menpg|2-3|jack&jones" target="_blank">
                            <img class="img-product m-t-img" src="https://sslimages.shoppersstop.com/sys-master/root/ha9/hcd/13495539925022/4-tab_J%26J.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 60% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/brand/UNITED-COLORS-OF-BENETTON?q=%3AcategoryRelevance%3AinStockFlag%3Atrue%3Abrands%3AUNITED%2BCOLORS%2BOF%2BBENETTON%3Al1category%3AMen&text=&startRange=&endRange=&showType=&icid=versatilestylesyoulllove|menpg|2-4|ucb" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/hdd/h2b/13495540088862/4-tab_UCB.jpg">
{{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                Up to 70% Off--}}
{{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3AVAN%2BHEUSEN&text=&startRange=&endRange=&icid=weddingstore|wsddingstorepg|5-1|vanheusen" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h3a/hd0/13736722169886/4-tab_wedding-pg_5-vanhusen.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3ABLACKBERRYS&text=&startRange=&endRange=&icid=weddingstore|wsddingstorepg|5-2|blackberry" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h1c/h53/13736745140254/4-tab_wedding-pg_6-blackberry.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://www.shoppersstop.com/men-clothing/c-A1010?q=%3AtopRated%3AinStockFlag%3Atrue%3Abrands%3ACOLOR%2BPLUS&text=&startRange=&endRange=&icid=weddingstore|wsddingstorepg|5-2|colourplus" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h00/h4d/13736761557022/4-tab_wedding-pg_7-clolurplus.jpg">
                            {{--                            <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                            {{--                                Up to 70% Off--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <a href="https://sslimages.shoppersstop.com/sys-master/root/h7b/h18/13719593943070/4-tab_wedding-pg_4ahncock.jpg" target="_blank">
                            <img class="img-product m-t-img " src="https://sslimages.shoppersstop.com/sys-master/root/h7b/h18/13719593943070/4-tab_wedding-pg_4ahncock.jpg">
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
