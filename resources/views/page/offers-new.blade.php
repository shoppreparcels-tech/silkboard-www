@extends('layout')

@section('title', 'ShoppRe Offers, Wallet Cashback, Discounts & Ecommerce Sale | ShoppRe.com')
@section('description', 'Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India.')
@section('keywords', 'cashback, discounts, coupons, promo codes, vouchers, shopping, shipping, ecommerce deals, wallet')

@section('css_style')
    <meta property="og:title" content="ShoppRe Offers, Wallet Cashback & Discounts | ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/offers"/>
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg"/>
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="ShoppRe Indian Online Shopping Stores Offers" />
    <meta property="og:description" content="Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India."/>
    <meta property="og:site_name" content="ShoppRe Online Shipping Sites in India"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="ShoppRe Offers, Wallet Cashback & Discounts | ShoppRe.com" />
    <meta name="twitter:description" content="Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India." />
    <meta name="twitter:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta name="twitter:image:alt" content="ShoppRe international shipping offers"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <style>
        .MultiCarousel {float: left;overflow: hidden;padding: 15px;width: 100%;position: relative;}
        .MultiCarousel .MultiCarousel-inner {transition: 1s ease all;float: left;}
        .MultiCarousel .MultiCarousel-inner .item {float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div {text-align: center;padding: 10px;margin: 0px;background: #f1f1f1;color: #666;}
        .MultiCarousel .leftLst, .MultiCarousel .rightLst {position: absolute;border-radius: 50%;top: calc(50% - 20px);}
        .MultiCarousel .leftLst {left: 0;}
        .MultiCarousel .rightLst {right: 0;}
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {pointer-events: none;background: #ccc;}
        .delivery img {width: 100%}
        .text-transform-u {text-transform: uppercase}
    </style>
@endsection

@section('content')
    <section class="heading-section">
        <div class="container">
            <div class="row">
                <h1 class="header1 p-color-white">ShoppRe Shopping and Shipping Offers</h1>
                <div class="col-md-12 padding-bottom">
                    <h2 class="header2 p-color-cement">Know more about the latest ShoppRe Offers, Discounts, Coupons, Wallet Cashback,
                        Promo Codes and Ecommerce deals for all your Shopping and Shipping needs from India.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="delivery">
        <div class="container">
            <br>
            <h3 class="header3 p-color-cement-dark font-weight-900">Running & Upcoming Offers</h3>
            <div class="row">
                <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppre.com/offers/save-upto-80-international-shipping-cost-from-india/">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/box2.png" class="boxofScroll" alt="save upto 80% international shipping cost from india"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppre.com/offers/50-percent-offer-on-your-first-international-shipment/" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/offer-first-international-shipment.png" class="boxofScroll" alt="Offer first international shipment"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppre.com/offers/christmas-offer-on-international-shipment-courier-from-india/">
                                    <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/offers-image/christmas-offer-shoppre.png" class="boxofScroll" alt="christmas offer"/>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="pad15">
                                <a href="#">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/box1.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="#">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/box2.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="container">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900">Ecommerce Sales</h3>
            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Big Shopping Days</h4>
                            <h5 class="header6 p-color-cement font-weight-900">6th to 8th DEC 2018</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.flipkart.com/"
                                   target="_blank">
                                    <img src="{{asset('uploads/stores/logo_5996fd9938980.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Upto 60% Off</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Extra 5% Cashback via Pay-TM</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="https://www.limeroad.com/">
                                    <img src="{{asset('uploads/stores/logo_59a5173241735.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">End of Season</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Sale - 70% OFF</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.chumbak.com/">
                                    <img src="{{asset('uploads/stores/logo_59a68d693f754.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Upto 50% Off </h4>
                            <h5 class="header6 p-color-cement font-weight-900">On Bags & Wallets‎</h5>
                            <div class="ecomSmallBox">
                                <a href="https://indiacircus.com/?">
                                    <img src="{{asset('uploads/stores/logo_59a67ba7cb9ec.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">40-60% Off</h4>
                            <h5 class="header6 p-color-cement font-weight-900">on Fashion Shopping‎</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="https://www.myntra.com/">
                                    <img src="{{asset('uploads/stores/logo_5997a62748742.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Winter Mania - Min 60%
                                Off </h4>
                            <h5 class="header6 p-color-cement font-weight-900">on ₹ 2490 and above</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.ajio.com/">
                                    <img src="{{asset('uploads/stores/logo_59a51d8ae4946.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <div class="FlatOffer">
                                FLAT 20% OFFER
                            </div>
                            <div class="ecomSmallBox">
                                <div class="FlatOfferDuration">
                                    2 Day Left
                                </div>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/boxCompany.png"/>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <div class="FlatOffer">
                                FLAT 20% OFFER
                            </div>
                            <div class="ecomSmallBox">
                                <div class="FlatOfferDuration">
                                    2 Day Left
                                </div>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/boxCompany.png"/>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="container" style=" border-bottom: 1px solid rgba(146, 156, 165, 0.2);display: none">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900">ShoppRe Deals</h3>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals1.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals2.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals3.png"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals4.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals1.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals2.png"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals3.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals4.png"/>
                </div>
                <div class="col-md-4">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/offers-image/shoppreDeals1.png"/>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>

    </section>
    <section class="delivery">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark">Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">What Are You Waiting For Re! Just Come Shopp Re!</p>
                <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" target="_blank">
                    <div class="btn-login-doorstep header5 p-color-white">
                        <p>
                            Sign Up for FREE
                        </p>
                    </div>
                </a>
            </center>
        </div>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function () {
                var condition = $(this).hasClass("leftLst");
                condition ? click(0, this) : click(1, this);
                // if (condition)
                //     click(0, this);
                // else
                //     click(1, this)
            });

            ResCarouselSize();

            $(window).resize(function () {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                debugger;
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function () {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    }
                    else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    // itemWidth=330;
                    $(this).css({'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers});
                    // $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth});
                    $(this).find(itemClass).each(function () {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                }
                else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
    </script>
@endsection
