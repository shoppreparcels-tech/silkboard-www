@extends('layout')

@section('title', 'ShoppRe Offers, Wallet Cashback, Discounts & Ecommerce Sale')
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
        .faq-block{
            display: block;
            padding: 20px 25px;
            font-weight: 700;
            background-size: 20px;
        }
        .faq-1{
            float: left;
            width: 100%;
            position: relative;
        }
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
            <h3 class="header3 p-color-cement-dark font-weight-900">ShoppRe FAQ:</h3>
            <div class="row" style="background: #f1f1f1;">
                <div class="pad15">
                    <h4 class="faq-block">
                        Asked Question  ??? (India to usa shipping ) Low cost international shipping
                    </h4>
                </div>
                <div class="pad15">
                    <h4 class="faq-block">
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        Answer From Elastic Search:
                            Know more about the latest ShoppRe Offers,
                            Discounts, Coupons, Wallet Cashback, Promo Codes and Ecommerce deals
                            for all your Shopping and Shipping needs from India.
                    </h4>
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
                                        href="/pepperfry-online-shopping">Furniture Shopping in India</a></span>
                            </li><li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Rakhi"><span><a
                                        href="/send-rakhi-gifts-online-worldwide-at-cheap-rates">Rakhi Online Shopping India</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="kurta Clothing"><span><a
                                        href="/myntra-women-kurta-kurtis-international-shipping" target="_blank">Women Kurta Shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/kerala-onam-online-shopping-guide-from-india">Onam online shopping</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="sarees"><span><a
                                        href="/wedding-sarees-women-clothing-international-shipping" target="_blank">Sarees Online Shopping</a> </span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Stylish Polka dot dresses"><span><a
                                        href="/myntra-women-maxi-dresses-international-shipping" target="_blank">Maxi Dresses for Women</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="best kurta set for men"><span><a
                                        href="/firstcry-online-shopping" target="_blank">Baby & Kids Shopping</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a
                                        href="/new-year-offer" target="_blank">New Year Offer</a></span></li>
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
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/onam-community-shipping-offer">Onam Community Offer</a></span></li>
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
