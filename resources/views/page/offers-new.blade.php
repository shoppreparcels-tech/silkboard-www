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
        .MultiCarousel{float:left;overflow:hidden;padding:15px;width:100%;position:relative}.MultiCarousel .MultiCarousel-inner{transition:1s ease all;float:left}.MultiCarousel .MultiCarousel-inner .item{float:left}.MultiCarousel .MultiCarousel-inner .item>div{text-align:center;padding:10px;margin:0;background:#f1f1f1;color:#666}.MultiCarousel .leftLst,.MultiCarousel .rightLst{position:absolute;border-radius:50%;top:calc(50% - 20px)}.MultiCarousel .leftLst{left:0}.MultiCarousel .rightLst{right:0}.MultiCarousel .leftLst.over,.MultiCarousel .rightLst.over{pointer-events:none;background:#ccc}.delivery img{width:100%}.text-transform-u{text-transform:uppercase}
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
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                <a href="/diwali-offer" target="_blank">--}}
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/diwali-offer-shipping-2019.png" class="boxofScroll"/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="pad15">--}}
{{--                                <a href="/offers" target="_blank">--}}
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/ind250-shoppre.png" class="boxofScroll"/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="item">
                            <div class="pad15">
                                <a href="/first-time-international-shipment-offer" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/International-shipping-offers.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://ship.shoppre.com/refer-and-earn-with-us/" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/refer-earn-shoppre-shopper-shopping.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="/shop-ship" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/shop-from-india-ship-to-usa.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppre.com/university-offer" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/students-shipping-offer.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                    </div>
{{--                    <button class="btn btn-primary leftLst"><</button>--}}
{{--                    <button class="btn btn-primary rightLst">></button>--}}
                </div>
            </div>
        </div>
        <div class="container">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900">Indian Shopping Sites (November 2019 Sale):</h3>
            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">TOP BRANDS ON DISCOUNT</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 70% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://clnk.in/jVpD" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_5996fd9938980.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">flat store</h4>
                            <h5 class="header6 p-color-cement font-weight-900">100K + Products on Sale</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="/limeroad-online-shopping" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a5173241735.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">November Sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Upto 50% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.chumbak.com/sale/ngg/c/" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a68d693f754.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Festive Sale Corner</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 65% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://indiacircus.com/sales/clearance-sale.html" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a67ba7cb9ec.png"/>
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">New Arrivals</h4>
                            <h5 class="header6 p-color-cement font-weight-900">40-80% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="/ajio-online-shopping">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_59a51d8ae4946.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Styl For Desi Divas</h4>
                            <h5 class="header6 p-color-cement font-weight-900">30-60% Off</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="/myntra-online-shopping" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_5997a62748742.png"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>

                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Festive Fashion</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 70% Off</h5>
{{--                            <div class="ecomSmallBox" style="height: 94px;">--}}
                            <div class="ecomSmallBox">
                            <a href="/amazon-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">AMAZON.in</p>
{{--                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon-india-shopping.png"/>--}}
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">The Real Deals</h4>
                            <h5 class="header6 p-color-cement font-weight-900">50-80% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.jabong.com" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/logo_599691d00e27e.png">
                                </a>
                            </div>
                        </div>
                    </center>
                    <br>
                </div>


                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Men Fashion</h4>
                            <h5 class="header6 p-color-cement font-weight-900">40-80% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://clnk.in/jVqr" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">SNAPDEAL</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">the super stylish</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up To 60% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.jaypore.com/eoss2019" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">JAYPORE</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">FEATURED COLLECTIONS</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up To 50% Off</h5>
                            <div class="ecomSmallBox" >
                                <a href="/pepperfry-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">PEPPERFRY</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">FOLK TALE</h4>
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Dark Blooms</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Shop By Story</h5>
                            <div class="ecomSmallBox">
                                <a href="/tatacliq-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">TATACLIQ</p>
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">INSPIRATION</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Half Price Sale</h5>
                            <div class="ecomSmallBox">
                                <a href="/lifestylestores-online-shopping" target="_blank">
                                    <p class="header3 p-color-cement-dark font-weight-900">LIFESTYLE</p>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            </div>
            <br>

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
        <br>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header2 p-color-cement-dark font-weight-900" >Top Festival Offers, Deals & Sale</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Amazon Great Indian Festival"><span><a
                                        href="/amazon-great-indian-festival-sales-offers-prime-members-shopping-deals-shipping" target="_blank">Great Indian Festival 2019</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big billion Days"><span><a
                                        href="/flipkart-big-billion-days-sale-offers-top-brands-stores" target="_blank">Big Billion Days Sale 2019</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big Shopping Days"><span><a
                                        href="https://ship.shoppre.com/the-biggest-season-sale-flipkart-big-shopping-days-15-may-19-may/" target="_blank">Big Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Freedom Sale"><span><a
                                        href="/amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances" target="_blank">Amazon.in Freedom Sale</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Flipstart Days"><span><a
                                        href="/flipstart-days-avail-best-offers-on-flipkart-enjoy-special-discounts-for-the-first-three-days-of-every-month" target="_blank">Flipkart Flipstart Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="National Shopping Days"><span><a
                                        href="/flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india" target="_blank">National Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Right To Fashion"><span> <a
                                        href="/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" target="_blank">Myntra Right To Fashion Sale</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="puja"><span><a
                                        href="https://ship.shoppre.com/get-6-essential-puja-articles-for-ganesh-puja-from-india/">Buy Puja Items Online</a></span>
                            </li><li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Rakhi"><span><a
                                        href="/send-rakhi-gifts-online-worldwide-at-cheap-rates">Rakhi Online Shopping India</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Yoga Organic Clothing"><span><a
                                        href="https://ship.shoppre.com/products-on-sale-pure-organic-yoga-clothing-and-products-made-in-india/" target="_blank">Yoga Organic Clothing Sale</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/kerala-onam-online-shopping-guide-from-india">Onam online shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="sarees"><span><a
                                        href="https://ship.shoppre.com/8-gorgeously-elegant-sarees-for-every-occasion-to-flaunt-your-curves-craftsvilla-handpicked-for-you/" target="_blank">Sarees Online Shopping</a> </span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Stylish Polka dot dresses"><span><a
                                        href="https://ship.shoppre.com/buy-modern-fashionable-polka-dot-dresses-from-myntra-ship-internationally/" target="_blank">Stylish Polka Dot Dresses</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="best kurta set for men"><span><a
                                        href="https://ship.shoppre.com/shop-for-these-stylish-trendy-kurta-sets-for-men-from-best-brands-myntra-india/" target="_blank">Best Kurta Set for Men</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/onam-community-shipping-offer">Onam Community Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="frst50"><span><a
                                        href="/first-time-international-shipment-offer" target="_blank">First Shipment Discount</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="diwali"><span><a
                                        href="/diwali-offer">Diwali Offer</a></span></li>
{{--                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a--}}
{{--                                        href="/new-year-offer">New Year Offer</a></span></li>--}}
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="shop ship"><span><a
                                        href="/shop-ship">Shop & Ship Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="student"><span><a
                                        href="/university-offer">Student Special Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="easter"><span><a
                                        href="/easter-shopping-from-india-with-international-shipping">Easter Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a
                                        href="/new-year-offer" target="_blank">New Year Offer</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
        <section class="delivery">
        <br>
        <br>
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark">Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">What Are You Waiting For Re! Just Come Shopp Re!</p>
                <a href="{{route('customer.register')}}" target="_blank">
                    <br>
                    <div class="btn btn-s-b btn-b-g">
                        <p>
                            Sign Up for FREE Today!
                        </p>
                    </div>
                </a>
            </center>
        </div>
            <br>
            <br>
            <br>
            <br>
    </section>
@endsection


@section('js_script')
    <script type='text/javascript'>
        var pubID="54240CL48886";!function(t,s){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=("https:"==document.location.protocol?"https://cdn0.cuelinks.com/js/":"http://cdn0.cuelinks.com/js/")+"cuelinksv1.js",document.getElementsByTagName("body")[0].appendChild(e)}(),$(document).ready(function(){var t=".MultiCarousel",s=".MultiCarousel-inner",e="";function a(){var a=0,i=0,r="",n="",o=$(t).width(),c=$("body").width();$(s).each(function(){i+=1;var t=$(this).find(".item").length;r=$(this).parent().attr("data-items"),n=r.split(","),$(this).parent().attr("id","MultiCarousel"+i),c>=1200?(a=n[3],e=o/a):c>=992?(a=n[2],e=o/a):c>=768?(a=n[1],e=o/a):(a=n[0],e=o/a),$(this).css({transform:"translateX(0px)",width:e*t}),$(this).find(".item").each(function(){$(this).outerWidth(e)}),$(".leftLst").addClass("over"),$(".rightLst").removeClass("over")})}function i(t,a){var i="#"+$(a).parent().attr("id");!function(t,a,i){var r="",n=$(a+" "+s).css("transform").match(/-?[\d\.]+/g),o=Math.abs(n[4]);if(0==t)r=parseInt(o)-parseInt(e*i),$(a+" .rightLst").removeClass("over"),r<=e/2&&(r=0,$(a+" .leftLst").addClass("over"));else if(1==t){var c=$(a).find(s).width()-$(a).width();r=parseInt(o)+parseInt(e*i),$(a+" .leftLst").removeClass("over"),r>=c-e/2&&(r=c,$(a+" .rightLst").addClass("over"))}$(a+" "+s).css("transform","translateX("+-r+"px)")}(t,i,$(i).attr("data-slide"))}$(".leftLst, .rightLst").click(function(){i($(this).hasClass("leftLst")?0:1,this)}),a(),$(window).resize(function(){a()})});
    </script>
@endsection
