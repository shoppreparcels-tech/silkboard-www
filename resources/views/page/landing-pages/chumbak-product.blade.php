@extends('layout')

@section('title', 'Chumbak International Shipping | Shop for Chumbak from India')
@section('description', 'Chumbak online shopping and international shipping from India at lowest prices with ShoppRe.com')
@section('keywords', 'Chumbak, HandBags, Phone Cases, Crockery, Furniture, Home Decor, Apparel, Mugs')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/chumbak-online-shopping" />
    <meta name="robots" content="nofollow" />

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
                    <h1 class="f-s-36 f-c-white f-w-8">Chumbak Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Chumbak.com With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
{{--                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611">--}}
                <p class="f-c-white f-w-9 text-center">
                    <i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Chumbak Products Internationally. T&C*</i></p>
                <br>
                <br>
            </div>
        </div>
    </main>

    <section >
        <div class="container fst-service" style="margin-top: 0px;">
{{--            <div class="row">--}}
{{--                <a href="https://www.chumbak.com/sale/ngg/c/" target="_blank">--}}
{{--                    <img class="img-desktop-view" src="https://images.prismic.io/chumbakapp/d56e773f-e2c8-449a-b6ed-66f1aaecfaf4_Updated-3.jpg?auto=compress,format" width="1100px"></a>--}}
{{--                <center>--}}
{{--                    <a href="https://www.chumbak.com/sale/ngg/c/" target="_blank">--}}
{{--                        <img class="img-mobile-view img-shopperstop-offer" src="https://images.prismic.io/chumbakapp/eee99a9d-f74d-492e-8b7d-9664ae3c9837_Updated-4.jpg?auto=compress,format" width="320px" ></a>--}}
{{--                </center>--}}
{{--                <div class="">--}}
{{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">November 2019 /--}}
{{--                        Below are the Recommended & Recently Shipped Products!</h2>--}}

{{--                </div>--}}
{{--            </div>--}}

            <div class="row text-center">

                <div class="row text-center">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Women's Fashion</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.chumbak.com/bags/daY/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://images.prismic.io/chumbakapp/37a3da95-fba4-4c16-821e-669e73ab07ad_Fashion-3.jpg?auto=compress,format">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 70% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/jewellery/vpX/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://images.prismic.io/chumbakapp/7d8b2d6c-b158-41cd-befe-b414aaf278fe_Fashion-6.jpg?auto=compress,format">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/scarves/mG4/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://images.prismic.io/chumbakapp/7c094fe5-f5e4-4103-8737-eea2c1be39c8_Fashion-7.jpg?auto=compress,format">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/watches/gGK/c/" target="_blank">
                                <img class="img-product m-t-img " src="https://images.prismic.io/chumbakapp/a0129d5f-57ae-45f1-8761-e34b2671caf8_Fashion-4.jpg?auto=compress,format">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.chumbak.com/dresses/gmq/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/image/500x625/w/-/w-d43-aw19_top.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Dresses
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/topwear/17A/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/w/-/w-tps36-aw19_plus3.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Topwear
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/bottomwear/E1q/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/w/-/w-sh4-aw19_plus1.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Bottomwear
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/outerwear/lGo/c/" target="_blank">
                                <img class="img-product m-t-img " src="https://media.chumbak.com/media/catalog/product/w/-/w-sw2-aw19_top.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Outerwear
                                        </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row text-center">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Home & Decor</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.chumbak.com/tumblers/nWR/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605074745_1_.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Tumblers
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/glasses-pitchers/g7b/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605059032_top_4.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Pitchers
                                    </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/lunch-boxes/vdA/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605078552_1_.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Lunch Bags
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/sippers/azQ/c/" target="_blank">
                                <img class="img-product m-t-img " src="https://media.chumbak.com/media/catalog/product/8/9/8907605056949_top_4.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Slippers
                                    </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.chumbak.com/clocks/NGR/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8904218066204_top_5.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Clocks
                                    </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/wall-art/5q8/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605049187_top_3.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Wall Art
                                    </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/lanterns/AO1/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605071454_1_.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Lighting
                                    </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/vases-planters/Y6P/c/" target="_blank">
                                <img class="img-product m-t-img " src="https://media.chumbak.com/media/catalog/product/8/9/8907605077036_top.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Pots
                                    </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row text-center">
{{--                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">INDIE</h2>--}}

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.chumbak.com/salt-pepper-shakers/Qrg/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605061301_top_1.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Cellars
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/figurines/oZq/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605067839_1_.jpg">
                                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                            Figurines
                                        </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/coasters/2Kq/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605001079_top_7.jpg">
                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                    Coasters
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/breakfast-tables/yOe/c/" target="_blank">
                                <img class="img-product m-t-img " src="https://media.chumbak.com/media/catalog/product/8/9/8907605072758_1_.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Breakfast Tables
                                    </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.chumbak.com/quilts-bedsheets/588/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605074684_main.jpg">
                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                    Quilts & Bedsheets
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/throws/qPK/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605065118_top.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Throws
                                    </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/stationery-and-gifting/nlD/c/" target="_blank">
                                <img class="img-product m-t-img" src="https://media.chumbak.com/media/catalog/product/8/9/8907605083075_1_.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Gifting
                                    </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.chumbak.com/furnishing/RRA/c/" target="_blank">
                                <img class="img-product m-t-img " src="https://media.chumbak.com/media/catalog/product/8/9/8907605079245_1_.jpg">
                                    <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">
                                        Cushions
                                    </div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

            <br>
            <br>
            <br>
        </div>
    </section>
    <br>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Shop all you want from India, We will ship it to your door</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/myntra-online-shopping">Myntra Online Fashion Store</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/amazon-online-shopping">Amazon.in Online Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/ajio-online-shopping">AJIO Fashion Trends</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/fabindia-online-shopping">Fabindia Handcrafted Products‎</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/firstcry-online-shopping">Baby & Kids Online Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/flipkart-online-shopping">Online Shopping Flipkart</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/pepperfry-online-shopping">Pepperfry Home Decor</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/nykaa-online-shopping">Nykaa Online Beauty Store</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/limeroad-online-shopping">Limeroad Fashion Clothing</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/lifestylestores-online-shopping">Lifestyle Stores Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/tatacliq-online-shopping">Tata CLiQ Online Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" ><span><a
                                        href="/shoppersstop-online-shopping">Shoppers Stop Shopping</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <center>
                <h3 class="header2 p-color-cement-dark font-weight-900">Want more information about our services? Download ShoppRe brochure for FREE! </h3>
                <a href="http://bit.ly/shoppre-brochure" target="_blank">
                    <div class="btn header6 btn-get-assisted p-color-white no-margin" style="background-color: #507dbc!important">
                        <center>
                            Download Here
                        </center>
                    </div>
                </a>
            </center>
        </div>
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
