@extends('layout')

@section('title', 'Flipkart Big Diwali Sale | Cheap Online Shopping from India')
@section('description', 'Big Diwali Sale 2019 Dates and Offers. Shopping from Flipkart India online and get ₹250 cashback on Shipping with ShoppRe. ')
@section('keywords', 'diwali sale, flipkart usa, shipping from india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/flipkart-online-shopping" />

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
    <section class="first-time-shipment header-section" style="padding-top: 50px !important;">
        <div class="container no-padding banner">
                <p class="f-s-28 f-c-white f-w-9 text-center" style="background-color: #4285f4"><i>Flipkart Big Diwali Sale Your Favourite Shopping Festival</i></p>
                <div class="col-md-6 col-xs-12" style="padding-top: 7%">
                   <center> <p class="m-t-sm f-s-30">Why Worries Re, <span style="font-family: Bahnschrift">Just ShoppRe!</span></p></center>
                    <p class="f-c-white m-t-sm f-s-18 text-center">
                        If you are in the quest for Indian Fashion & Lifestyle this Diwali for gifting purposes or just getting them for yourselves,
                        then ShoppRe is here to ship all your favorite <span class="underline-color">Shopping & Shipping</span> at your doorsteps to add extra vibrancy to your Diwali (🪔)
                    </p>
                </div>
                <div class="col-md-6 col-xs-12 no-padding">
{{--                    <center>--}}
{{--                        <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>--}}
{{--                    </center>--}}
                    <br>
                    <center>
                        <img src="{{asset('img/diwali/diwali-offer.png')}}" alt="Diwali offer india" > <br><br>
{{--                        <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-g btn-a-l" target="_blank">Sign UP FREE</a>--}}

                    </center>
                </div>
            </div>
        <div class="image-banner">
            <img src="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/ddd53133-931f-4eb7-8c86-6dfcc2638cc8.png" alt="flipkart big diwali sale" style="height: 430px; width: 100%;">
        </div>
    </section>
    <section >
        <div class="container fst-service" style="margin-top: 36px;">
            <div class="row">
                <div class="col-md-8 col-xs-12 ">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Big Diwali Sale. Shop Flipkart & Ship Globally with ShoppRe.</h2>
                </div>
                <div class="col-md-4 col-xs-12 text-center margin-tp">
                    <p class="no-pad Rakhi-mid-div f-s-16 txt-center" style="margin-top: 10px;">(Click on Online Chat for Live Support
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
                            <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/flap/375/534/image/6bbf1e164c668785.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Soan Papdi <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹150 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmD" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/flap/375/534/image/6c76ed069da93dae.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Kaju Katli <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹245 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://www.flipkart.com/mens-footwear/pr?count=40&p%5B%5D=facets.fulfilled_by%255B%255D%3DFlipkart%2BAssured&sid=osp%2Fcil&p%5B%5D=facets.brand%255B%255D%3DPuma&p%5B%5D=facets.brand%255B%255D%3DProvogue&p%5B%5D=facets.brand%255B%255D%3DNike&p%5B%5D=facets.brand%255B%255D%3DVans&p%5B%5D=facets.brand%255B%255D%3DFila&p%5B%5D=facets.brand%255B%255D%3DWoodland&p%5B%5D=facets.brand%255B%255D%3DBata&p%5B%5D=facets.brand%255B%255D%3DLee%2BCooper&p%5B%5D=facets.brand%255B%255D%3DNewport&p%5B%5D=facets.brand%255B%255D%3DLevi%2527s&p%5B%5D=facets.brand%255B%255D%3DLotto&p%5B%5D=facets.brand%255B%255D%3DUnited%2BColors%2Bof%2BBenetton&p%5B%5D=facets.brand%255B%255D%3DSwiss%2BMilitary&p%5B%5D=facets.brand%255B%255D%3DPeter%2BEngland%2BPE&p%5B%5D=facets.brand%255B%255D%3DCarlton%2BLondon%2BMr.CL&p%5B%5D=facets.brand%255B%255D%3DMr.CL&p%5B%5D=facets.brand%255B%255D%3DPower&p%5B%5D=facets.brand%255B%255D%3DHush%2BPuppies&p%5B%5D=facets.brand%255B%255D%3DSkechers&p%5B%5D=facets.brand%255B%255D%3DIndigo%2BNation&p%5B%5D=facets.brand%255B%255D%3DMetronaut&p%5B%5D=facets.brand%255B%255D%3DU.S.%2BPolo%2BAssn&p%5B%5D=facets.brand%255B%255D%3DSlazenger&p%5B%5D=facets.brand%255B%255D%3DArrow&p%5B%5D=facets.brand%255B%255D%3DDC&p%5B%5D=facets.brand%255B%255D%3DLi-Ning&p%5B%5D=facets.brand%255B%255D%3DCrocs&p%5B%5D=facets.brand%255B%255D%3DAsics&p%5B%5D=facets.brand%255B%255D%3DAsics%2BTIGER&p%5B%5D=facets.brand%255B%255D%3DV%2BDot%2BVan%2BHeusen&p%5B%5D=facets.brand%255B%255D%3DWoods&p%5B%5D=facets.brand%255B%255D%3DFlying%2BMachine&p%5B%5D=facets.brand%255B%255D%3DClarks&p%5B%5D=facets.brand%255B%255D%3DRed%2BChief&p%5B%5D=facets.brand%255B%255D%3DNorth%2BStar&p%5B%5D=facets.brand%255B%255D%3DErke&p%5B%5D=facets.brand%255B%255D%3DConverse&p%5B%5D=facets.brand%255B%255D%3DJack%2B%2526%2BJones&p%5B%5D=facets.brand%255B%255D%3DFRANCO%2BLEONE&p%5B%5D=facets.brand%255B%255D%3DFranco%2BLeone&p%5B%5D=facets.brand%255B%255D%3DBond%2BStreet%2BBy%2BRed%2BTape&p%5B%5D=facets.brand%255B%255D%3DSan%2BFrissco&p%5B%5D=facets.brand%255B%255D%3DRed%2BTape&p%5B%5D=facets.brand%255B%255D%3DYonex&p%5B%5D=facets.brand%255B%255D%3DRuosh&p%5B%5D=facets.brand%255B%255D%3DVector%2BX&p%5B%5D=facets.brand%255B%255D%3DNivia&p%5B%5D=facets.brand%255B%255D%3DUnder%2BArmour&p%5B%5D=facets.brand%255B%255D%3DKenneth%2BCole&p%5B%5D=facets.brand%255B%255D%3DMizuno&p%5B%5D=facets.brand%255B%255D%3DNew%2BBalance&p%5B%5D=facets.brand%255B%255D%3DTOMS&p%5B%5D=facets.brand%255B%255D%3DKnotty%2BDerby&p%5B%5D=facets.brand%255B%255D%3DCall%2BIt%2BSpring&p%5B%5D=facets.brand%255B%255D%3DCarlton%2BLondon&p%5B%5D=facets.brand%255B%255D%3DSanta%2BMonica&p%5B%5D=facets.brand%255B%255D%3DQuiksilver&p%5B%5D=facets.brand%255B%255D%3DALDO&p%5B%5D=facets.brand%255B%255D%3DSuperdry&p%5B%5D=facets.brand%255B%255D%3DDiesel&p%5B%5D=facets.brand%255B%255D%3DWildcraft&p%5B%5D=facets.brand%255B%255D%3DBritish%2BKnights&p%5B%5D=facets.brand%255B%255D%3DPavers%2BEngland&p%5B%5D=facets.brand%255B%255D%3DVersace%2B19.69%2BItalia&p%5B%5D=facets.brand%255B%255D%3DScholl&p%5B%5D=facets.brand%255B%255D%3DBacca%2BBucci&p%5B%5D=facets.brand%255B%255D%3DAllen%2BCooper&p%5B%5D=facets.brand%255B%255D%3DVan%2BHeusen&p%5B%5D=facets.brand%255B%255D%3DADIDAS&p%5B%5D=facets.brand%255B%255D%3DADIDAS%2BNEO&p%5B%5D=facets.brand%255B%255D%3DADIDAS%2BORIGINALS&p%5B%5D=facets.brand%255B%255D%3DREEBOK&p%5B%5D=facets.brand%255B%255D%3DAllen%2BSolly&p%5B%5D=facets.brand%255B%255D%3DEd%2BHardy&p%5B%5D=facets.brand%255B%255D%3DStylar&p%5B%5D=facets.brand%255B%255D%3DKiller&p%5B%5D=facets.brand%255B%255D%3DLAWMAN%2BPG3&p%5B%5D=facets.brand%255B%255D%3DA-HA%2BBy%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DCoolers%2B%2528By%2BLiberty%2529&p%5B%5D=facets.brand%255B%255D%3DGliders%2Bby%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DForce%2B10%2BBy%2BLiberty&p%5B%5D=facets.brand%255B%255D%3DLiberty&p%5B%5D=facets.brand%255B%255D%3DDucati&p%5B%5D=facets.brand%255B%255D%3DPark%2BAvenue&p%5B%5D=facets.brand%255B%255D%3DParx&p%5B%5D=facets.brand%255B%255D%3DTommy%2BHilfiger&p%5B%5D=facets.brand%255B%255D%3DAeropostale&p%5B%5D=facets.brand%255B%255D%3DRaymond&p%5B%5D=facets.brand%255B%255D%3DA-GEAR&p%5B%5D=facets.brand%255B%255D%3DThe%2BNorth%2BFace&p%5B%5D=facets.brand%255B%255D%3DSparx&p%5B%5D=facets.brand%255B%255D%3DCampus&p%5B%5D=facets.brand%255B%255D%3DLancer&p%5B%5D=facets.brand%255B%255D%3DAsian&p%5B%5D=facets.brand%255B%255D%3DREEBOK%2BCLASSICS&p%5B%5D=facets.brand%255B%255D%3DFrench%2BConnection&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.discount_range_v1%255B%255D%3D40%2525%2Bor%2Bmore&otracker=clp_banner_2_8.bannerX3.BANNER_fashion-diwali-combat-sneak-peak-store_NINQ608TIVJ3&fm=neo%2Fmerchandising&iid=M_a26afc31-12b6-41a3-bc41-1c4f8e265953_8.NINQ608TIVJ3&ssid=zj6zl67vi80000001570700113859" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img" src="https://rukminim1.flixcart.com/flap/375/534/image/cd65f25e8523878b.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Besan Laddu <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmN" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/200acb2509367cb4.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Burfi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmO" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/357e30aac2d7ff2f.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Raisins <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmP" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/7d3acd04f252d5e0.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹140 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmR" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/347d0321a81c4004.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Mamra Badam <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹640 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmS" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/846175119d280eae.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Cashew <br>(200 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹280 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNmY" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/045da0d11c6eafd9.jpg?q=90" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Sohan Papdi <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹85 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNm2" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/9c90327cf28dc6d3.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Doodh Peda <br>(250 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹145 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNm4" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/a27e4c416fca1b6c.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Dalmoth <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹46 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNm3" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                        <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/375/534/image/273c264cb042247c.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Chow Chow <br>(100 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹42 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNna" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/08d567cfadbb3a74.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹55 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNni" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/cef0d665b504714f.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Jeera Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNno" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/039e954523eb5aa9.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Pista Stick <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹125 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNnu" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <img class="img-product m-t-img " src="https://rukminim1.flixcart.com/flap/250/266/image/1605e9c959f669c8.jpg" alt="signup shoppre">
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            Masala Biscuits <br>(150 grams)--}}
{{--                        </div>--}}
{{--                        <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 30px !important;font-weight: normal">--}}
{{--                            ₹52 + Shipping Charges--}}
{{--                        </div>--}}
                        <div class="check-price-padd">
                            <a href="https://clnk.in/jNns" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-g btn-h-40">Buy Now</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="mar-t-25">--}}
{{--                <div class="txt-center">--}}
{{--                        <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">--}}
{{--                            <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">--}}
{{--                            <p class="btn-md">Estimate Shipping Rate</p>--}}
{{--                            </a>--}}
{{--                        </button>--}}
{{--                        <button type="button" class="btn btn-success bord-rad-5 margin-r-10">--}}
{{--                            <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Diwali,%20Gifts%20and%20Sweets%20from%20India?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">--}}
{{--                            <p class="btn-md">Message Us On WhatsApp</p>--}}
{{--                            </a>--}}
{{--                        </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class=" col-md-12 no-pad"><br>--}}
            <br>
            <br>
{{--                <center>--}}
{{--                    <h2 class="p-color-cement-dark font-weight-900 ">Diwali Jamboree all over the world | Send Sweets abroad from India with ShoppRe--}}
{{--                    </h2>--}}
{{--                </center>--}}
{{--                <br>--}}
{{--                    <p class="header4 p-color-cement">--}}
{{--                        Waking up from the hustling noise, crackers, and children playing is the testament of preparations going on in every Indian house for Diwali celebrations.--}}
{{--                        And every Indian feels the same zeal and happiness for this grand festival of <i>hope, light, and prosperity</i> that marks the triumph of virtue over vice.--}}
{{--                    </p> <br>--}}
{{--                    <p class="header4 p-color-cement">--}}
{{--                        It doesn't matter where in the world we are, Indians always find a way to celebrate Diwali and many major countries like the USA, Australia, Canada, etc also--}}
{{--                        celebrate Diwali lavishly. And amidst this merriment, there is this little package of Indian sweets swathed in love that is--}}
{{--                        sent from home that brings a smile on the face of an Indian far from home. </p> <br>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                        So buy <strong>Indian sweet online from India</strong> and send it to your family and friends within 3-8 days, anywhere in the world with ShoppRe, and enjoy up to 80% low shipping rates.--}}
{{--                        You can easily order sweets for yourself or even buy sweets from India and get them delivered at your doorstep worldwide.--}}

{{--                    </p>--}}
{{--            <br>--}}
{{--                <div id="How_to_save">--}}
{{--                    <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Online indian sweets delivery in USA</h2>--}}
{{--                    <p class="header4 p-color-cement">--}}
{{--                        The splendor of the Diwali celebration is such that even the white house has been celebrating it for so many years now. The revelry of the Indian diaspora--}}
{{--                        is at its zenith and it begins long before Diwali with fairs, parties, lights, visits to temples to pay their obeisance to the gods, and various vivacious rituals.--}}
{{--                        We do online Indian sweets delivery in USA to complete your celebrations.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Export sweets from India to Australia</h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Many cultural and traditional celebrations mark the advent of the Diwali festival in all cities of Australia like Melbourne and Sydney where its thriving--}}
{{--                    Indian population fills the air with jovial activities. There are long rows of oil lamps outside houses to welcome the Hindu gods and celebrate this auspicious--}}
{{--                    festival of light and delight. You can order Indian sweets online Australia with us.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Indian sweets online international delivery Canada</h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Many Canadians celebrate this festival of lights with full vigor and zeal, and this joyous festival attracts plenty of media and public attention.--}}
{{--                    You can order Indian sweets online from Canada with us to serve during corporate Diwali dinners, carnivals or gatherings with elaborate firework displays--}}
{{--                    hosted by various community groups, businesses, schools, and associations to celebrate Diwali.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Send Sweets to Malaysia Online</h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Diwali in Malaysia is celebrated by people of all races and cultures inhabiting there. It is also a public holiday so the Indian diaspora can--}}
{{--                    celebrate this grand festival of light and prosperity with all the pomp and gaiety that they used to do while their time in India.--}}
{{--                    Get a chance to take a trip back memory lane and order Indian sweets online from Malaysia with ShoppRe.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div id="How_to_save">--}}
{{--                <h2  class="f-s-20 f-c-blue f-w-9" class="p-color-cement-dark font-weight-900 ">Order Indian Mithai Online in Singapore from India </h2>--}}
{{--                <p class="header4 p-color-cement">--}}
{{--                    Little India in Singapore is the kernel of Diwali celebrations. People get into the spirit of the festival of lights and discover vibrant Indian culture through it.--}}
{{--                    Serangoon Road is lit with lights, and you can see fireworks, candles being lit, beautiful rangoli decorations and liveliness of people in the night market.--}}
{{--                    Buy Indian sweets online from Singapore and add more joy to celebrations.--}}
{{--                </p>--}}
{{--            </div>--}}
            <br>
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
    <script>
        $(document).ready(function () {
            $("#diwali_coupon").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    debugger;
                    var email = $("input[name='email']").val();
                    var pnumber = $("input[name='pnumber']").val();
                    var cnumber = $("[name='country_code']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'new-year-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            pnumber: pnumber,
                            cnumber: cnumber,
                        },
                        success: function (data) {
                            var url= "{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?email=" + email + "&c_code="+ cnumber +"&PN="+ pnumber ;
                            console.log(data);
                            // window.open(url);
                            window.location.href = url;

                        }
                    })
                }
            });

        });
    </script>
@endsection
