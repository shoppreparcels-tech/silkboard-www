@extends('layout')

@section('title', 'Online Shopping Nykaa Cosmetics | Beauty Products from India')
@section('description', 'Indias No.1 Beauty Destination. Buy Beauty, Skin Care & Wellness Brands at Amazing Prices with ShoppRe International Delivery at lower rates from India.')
@section('keywords', 'cosmetics, beauty products, lipsticks, hair dryers, best products to buy from nykaa, shipping outside india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/nykaa-online-shopping" />
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="Nykaa Online Beauty Store: Online Shopping with ShoppRe International Delivery" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/nykaa-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="Nykaa international shipping" />
    <meta property="og:description" content="Shop your favourite cosmetics & beauty products from Nykaa with ShoppRe for Internatioanl Delivery." />
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
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">NYKAA Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop Nykaa With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i><a href="https://www.shoppre.com/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping Nykaa Cosmetic & Beauty Products Internationally. T&C*</i></p>
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
                    <a href="https://www.nykaa.com/offers.html?transaction_id=210b8973887996b2e048072a2da7be18&intcmp=hp,focus_banner,1,republic-day-sale" target="_blank">
                        <img class="img-desktop-view" src="https://images-static.nykaa.com/uploads/55d379ad-01d1-4588-924b-283f2992401f.jpg" width="1100px"></a>
                        <a href="https://www.nykaa.com/offers.html?transaction_id=210b8973887996b2e048072a2da7be18&intcmp=hp,focus_banner,1,republic-day-sale" target="_blank">
                            <img class="img-mobile-view img-shopperstop-offer" src="https://images-static.nykaa.com/tr:w-640,c-at_max/uploads/dd3614e7-ba06-46ed-b569-e239a2af45fd.jpg" width="370px" ></a>
                    </center>
{{--                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">--}}
{{--                        <span class="f-s-25 f-c-red f-w-9"> Beauty Bonanza (January 2020 )</span> /--}}
{{--                        Below are the Recommended & Recently Shipped Products!</h2>--}}
                </div>
{{--                <div class="col-md-4 col-xs-12 text-center margin-tp">--}}
{{--                    <div class="">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Suresh;%20I%20Love%20to%20Shop%20from%20Nykaa" target="_blank">--}}
{{--                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/7338208403-personal-shopper-number.png" >--}}
{{--                            <span class="font-16"></span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row text-center">


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/618ed275-c774-47ed-b866-79a680c961f1.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Soan Papdi <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹150 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/wella-professionals/c/998?transaction_id=4105412d762d807859d3a7ee08cedd69&intcmp=hp,featured_brands,2,wella-professionals" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/5549a1e6-b307-4e11-8a30-c6d4138d658e.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Kaju Katli <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹245 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/algotherm/c/9852?transaction_id=e954088e609d2bb2a744ff6b3d70a6f3&intcmp=hp,featured_brands,3,algotherm" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/7376f826-f32f-4d73-9da4-2b8d0fce4c6b.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Besan Laddu <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/revlon/c/589?transaction_id=ffc205d6127c691575cd87b670057b4d&intcmp=hp,featured_brands,4,revlon" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/9f3954ba-7de1-428f-bca4-f4902ec548cc.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Doodh Burfi <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/rimmel/c/1075?transaction_id=8dcb40413e0b0217a04c52cd5e451608&intcmp=hp,featured_brands,5,rimmel-london" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                        <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/0db53f2c-ea63-4d85-8480-aa0eb41bceb8.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Soan Papdi <br>(200 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹150 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/physicians-formula/c/10665?transaction_id=0da561f993e8be180c35a279540e087c&intcmp=hp,featured_brands,6,physicians-formula" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/59c38847-a37b-4b9e-9f90-7b62eccec72d.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Kaju Katli <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹245 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/chambor/c/1821?transaction_id=c2b8eaf72ae894bf84e8b16058c8c550&intcmp=hp,featured_brands,7,chambor" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/9b55af49-7de5-4166-a7f3-be2738e8af4c.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Besan Laddu <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/st-botanica/c/2529?transaction_id=39fa71129f7a4435385aba8cd66f4a46&intcmp=hp,featured_brands,8,st-botanica" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-200,c-at_max/uploads/3bf41a7b-ff0e-4445-9bf1-6a01ea868f43.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Doodh Burfi <br>(250 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹145 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/wellness/c/671?transaction_id=f4af879917a778e4497a4a10ef881dad&intcmp=hp,featured_brands,1,wellness" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26">
                            <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-265,c-at_max/uploads/3cae70e8-789f-4d43-8c37-0595bdc69a9e.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/personal-care/bath-and-shower/c/35" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-265,c-at_max/uploads/3e615dc5-0419-4470-b46e-78d700f97689.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Kaju Katli <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹245 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/personal-care/feminine-hygiene/intimate-hygiene/c/1654" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://images-static.nykaa.com/tr:w-265,c-at_max/uploads/1545cd37-f7b9-45f7-adff-a146dc904adb.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/deos-and-roll-ons/c/9235" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-265,c-at_max/uploads/3ab097d6-8707-4821-b952-74c676e28527.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/personal-care/dentalcare/c/661" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:h-200,w-200,cm-pad_resize/4/1/41554433432-1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/maybelline-new-york-fit-me-matte-poreless-foundation/p/31074" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:h-200,w-200,cm-pad_resize/4/1/41554496918-1_1_.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/maybelline-new-york-superstay-matte-ink-liquid-lipstick/p/229917" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:h-200,w-200,cm-pad_resize/m/a/maybelline_tcvem_3.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/maybelline-the-colossal-volum-express-mascara/p/806" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:h-200,w-200,cm-pad_resize/4/1/41554259247-1_1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/maybelline-new-york-instant-age-rewind-concealer/p/189967" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/8/9/8906014839075_1_.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/kama-ayurveda-rose-and-jasmine-hair-cleanser/p/28315" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/8/9/8906014832083_1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/kama-ayurveda-organic-neem-oil/p/34947" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/8/9/8906014831666_1_1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/kama-ayurveda-kumkumadi-brightening-ayurvedic-face-scrub/p/28298" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/8/9/8906014832007_1_1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/kama-ayurveda-mridul-soap-free-face-cleanser/p/28295" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/6/9/6902395724636_1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹55 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/l-oreal-paris-rouge-signature-matte-liquid-lipstick/p/435110" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/8/9/8901526512522.1_1.png">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/l-oreal-paris-excellence-fashion-highlights-hair-color/p/266374" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/1/a/1a76acd8992304024467_1.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Stick <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹125 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/l-oreal-paris-white-perfect-laser-day-cream-spf-18/p/4528" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://images-static.nykaa.com/media/catalog/product/tr:w-276,h-276,cm-pad_resize/l/p/lp_inf24hfoun.jpg">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/l-oreal-paris-infallible-24h-foundation/p/21795" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-259,c-at_max/uploads/12339af8-272b-4aee-9ad3-59154b6dbac5.png">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/mom-and-baby/maternity-care/stretch-mark-cream/c/635" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-259,c-at_max/uploads/e021bb9e-3908-4474-a667-e181d9a679b5.png">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/new-mom-survival-guide-online-sale/breast-pumps-accessories.html" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-259,c-at_max/uploads/07034d70-cc7a-4bfa-9ba1-a808d536bd6e.png">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/mom-and-baby/baby-care/bath-time/c/2057" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-259,c-at_max/uploads/78a56348-b9e8-4bdd-82bc-2a544dc72b9a.png">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/baby-care-essentials-online-sale/diapering/c/934" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-270,c-at_max/uploads/118c616f-b0d3-4116-85d1-05958d9830d1.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹55 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands//c/669" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Flat 25% Off</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-270,c-at_max/uploads/6fc95c17-a915-4363-a0d9-bffac0c44def.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Jeera Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/himalaya-herbals/c/680" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Flat 25% Off</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-270,c-at_max/uploads/97bc53e4-1a3f-4078-9009-becb569c3182.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Pista Stick <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹125 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/lotus-organics/c/9143" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Flat 10% Off</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://images-static.nykaa.com/tr:w-270,c-at_max/uploads/7a51ac49-dde4-4c92-a495-f5de63a3d75f.jpg">
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            Masala Biscuits <br>(150 grams)--}}
                        {{--                        </div>--}}
                        {{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
                        {{--                            ₹52 + Shipping Charges--}}
                        {{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.nykaa.com/brands/bio-oil/c/1191" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Flat 35% Off</button>
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
