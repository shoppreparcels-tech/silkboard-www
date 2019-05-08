@extends('layout')

@section('title', 'ShoppRe Offers, Wallet Cashback, Discounts & Ecommerce Sale | ShoppRe.com')
@section('description', 'Running & upcoming ShoppRe offers, discount, cashback and ecommerce sale on Personal Shopper, International Courier and Parcel Forwarding from India.')
@section('keywords', 'cashback, discounts, coupons, promo codes, vouchers, shopping, shipping, ecommerce deals, wallet')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/offers" />
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
                        Promo Codes and Ecommerce deals for all your <a href="{{route('ifs.index')}}">Shopping and Shipping needs from India</a>.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="delivery">
        <div class="container">
            <br>
            <h3 class="header3 p-color-cement-dark font-weight-900">ShoppRe Offers:</h3>
            <div class="row">
                <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppre.com/university-offer" target="_blank">
                                    <img src="{{asset('img/images/university-offer-may.png')}}" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="pad15">
                                <a href="/first-time-international-shipment-offer" target="_blank">
                                    <img src="{{asset('img/images/first50-offer-may.png')}}" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="/refer-a-friend" target="_blank">
                                    <img src="{{asset('img/images/refer-freind-offer.png')}}" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="/shop-ship" target="_blank">
                                    <img src="{{asset('img/images/shop-from-india-ship-to-usa.png')}}" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">--}}
                    {{--<div class="MultiCarousel-inner">--}}
                        {{--<div class="item">--}}
                            {{--<div class="pad15">--}}
                                {{--<a href="{{route('schedulePickup.Index')}}" target="_blank">--}}
                                    {{--<img src="{{asset('img/images/courier-from-india-to-usa.png')}}" class="boxofScroll"/>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="pad15">--}}
                                {{--<a href="/international-parcel-forwarding-india-online-shopping" target="_blank">--}}
                                    {{--<img src="{{asset('img/images/parcel-forwarding-offer.png')}}" class="boxofScroll"/>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="pad15">--}}
                                {{--<a href="/personal-shopper-india" target="_blank">--}}
                                    {{--<img src="{{asset('img/images/personal-shopper-offer.png')}}" class="boxofScroll"/>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="pad15">--}}
                                {{--<a href="/refer-a-friend" target="_blank">--}}
                                    {{--<img src="{{asset('img/images/refer-freind-offer.png')}}" class="boxofScroll"/>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<button class="btn btn-primary leftLst"><</button>--}}
                    {{--<button class="btn btn-primary rightLst">></button>--}}
                {{--</div>--}}
            {{--</div>--}}


        </div>
        <div class="container">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900">Indian Shopping Sites May-2019 Sales:</h3>
            <div>
                <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                    <a href="https://www.amazon.in/b?node=6630507031&pf_rd_p=5f642fe7-13c9-44df-a7c5-ec4d60078e67&pf_rd_r=9ZARR54SQ5K5YHKSF0G2" title="amazon.in" target="_blank">1. Amazon.in - Mother's Day Gift</a> |
                    <a href="https://www.snapdeal.com/offers/mothers-day" title="Snapdeal" target="_blank">2. Snapdeal - Starting from ₹209</a> |
                    <a href="https://www.voylla.com/campaign/jewellery-for-mother" title="voylla.com" target="_blank">3. Voylla - Jewellery For Mother</a> |
                    <a href="https://www.jabong.com/sis/mothers-day" title="Jabong" target="_blank">4. Jabong - Gift it for your MUM</a> |
                    <a href="https://www.jaypore.com/sale" title="Jaypore" target="_blank">5. Jaypore - Mother's Week Sale 50% Off</a> |
                    <a href="https://www.floweraura.com/mothers-day" title="Floweraura" target="_blank">6. Floweraura</a></marquee>
            </div>

            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Summer Carnival</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up To 80% OFF</h5>
                            <div class="ecomSmallBox">
                                <a href="/flipkart-shopping-with-shoppre-from-india"
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Upto 75% Off</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Summer Alert</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="https://www.limeroad.com/shopping-offers/?src=shoppre">
                                    <img src="{{asset('uploads/stores/logo_59a5173241735.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Little Quirk, Huge Savings.</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Upto 50% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.chumbak.com/sale/ngg/c/">
                                    <img src="{{asset('uploads/stores/logo_59a68d693f754.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Spring Summer Special</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Flat 30% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://indiacircus.com/sales/clearance-sale.html">
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">COMIC CON INDIA</h4>
                            <h5 class="header6 p-color-cement font-weight-900">8th - 12th May 2019</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="https://www.myntra.com/shop/comiccon-prebuzz-may05" target="_blank">
                                    <img src="{{asset('uploads/stores/logo_5997a62748742.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">May newness!</h4>
                            <h5 class="header6 p-color-cement font-weight-900">40-70% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.ajio.com">
                                    <img src="{{asset('uploads/stores/logo_59a51d8ae4946.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Mother's Day Gift Shop</h4>
                            <h5 class="header6 p-color-cement font-weight-900">April 27th to 12th May 2019</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.amazon.in/" target="_blank">
                                  <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/stores/amazon-india-shopping.png" style="height:100px"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Brand Day</h4>
                            <h5 class="header6 p-color-cement font-weight-900">40-60% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.jabong.com">
                                    <img src="https://www.shoppre.com/uploads/stores/logo_599691d00e27e.png"/>
                                </a>
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
        <br>

        <div class="container text-center">
            <h3 class="header3 p-color-cement-dark font-weight-900">LIVE Sales:</h3>
            <p>Fashion Category:</p>
            <iframe width='728' height='90' frameborder='0' scrolling='no' src='https://widget.cuelinks.com/widgets/38315?pub_id=54240CL48886'></iframe>
            <br/>

            <br/>
            <p>Health & Beauty Category:</p>
            <iframe width='728' height='90' frameborder='0' scrolling='no' src='https://widget.cuelinks.com/widgets/38317?pub_id=54240CL48886'></iframe>
            <br/>
            <br/>
            <p>Others:</p>
            <iframe width='728' height='90' frameborder='0' scrolling='no' src='https://widget.cuelinks.com/widgets/38318?pub_id=54240CL48886'></iframe>
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
                <a href="{{route('customer.register')}}" target="_blank">
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

    <script type='text/javascript'>
        var pubID = '54240CL48886';

        (function(d, t) {
            var s = document.createElement('script');s.type = 'text/javascript';
            s.async = true;s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv1.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>
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
