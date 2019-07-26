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
                        <div class="item">
                            <div class="pad15">
                                <a href="https://www.shoppre.com/university-offer" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/students-shipping-offer.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="pad15">
                                <a href="/first-time-international-shipment-offer" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/International-shipping-offers.png" class="boxofScroll"/>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a href="https://ship.shoppre.com/how-to-send-rakhi-online-from-india-international-delivery/" target="_blank">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/send-rakhi-international-delivery.png" class="boxofScroll"/>
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
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="container">
            <br/>
            <h3 class="header3 p-color-cement-dark font-weight-900">Indian Shopping Sites (July-2019 Sale):</h3>
            <div>

                <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                    <a href="https://www.shoppre.com/send-rakhi-gifts-online-worldwide-at-cheap-rates"
                       title="Rakhi" target="_blank">Send Rakhi Online from India 👉 <span class="f-s-16 f-c-red f-w-9">Shipping Price Starts from  ₹316/-</span> T&C* (15th July - 25th August 2019)</a>
                    </marquee>
            </div>

            <br/>
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Deals of the day</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Upto 65% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.flipkart.com/offers-store" target="_blank">
                                    <img src="{{asset('uploads/stores/logo_5996fd9938980.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">End of season Sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Min. 50% Off</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="https://www.limeroad.com/shopping-offers/?src=shoppre" target="_blank">
                                    <img src="{{asset('uploads/stores/logo_59a5173241735.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">End of Season Sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Upto 50% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.chumbak.com/sale/ngg/c/" target="_blank">
                                    <img src="{{asset('uploads/stores/logo_59a68d693f754.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">EOSS</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Up to 65% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://indiacircus.com/sales/clearance-sale.html" target="_blank">
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
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">End Of Season Sale</h4>
                            <h5 class="header6 p-color-cement font-weight-900">40-80% Off</h5>
                            <br>
                            <div class="ecomSmallBox">
                                <a href="https://www.myntra.com" target="_blank">
                                    <img src="{{asset('uploads/stores/logo_5997a62748742.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Style Splash</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Min. 50% Off</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.ajio.com" target="_blank">
                                    <img src="{{asset('uploads/stores/logo_59a51d8ae4946.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3 col-xs-12">
                    <center>
                        <div class="EcomBox">
                            <h4 class="header4 p-color-blue text-transform-u font-weight-900">Budget Finds</h4>
                            <h5 class="header6 p-color-cement font-weight-900">Under ₹499</h5>
                            <div class="ecomSmallBox">
                                <a href="https://www.amazon.in/b?node=17097545031&pf_rd_p=fa180c8f-c40b-405d-8fc6-8fc43fae1da9&pf_rd_r=ATY0ACPGQ98XXFC3MWQ4" target="_blank">
                                  <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/stores/amazon-india-shopping.png" style="height:100px"/>
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
            <h3 class="header3 p-color-cement-dark font-weight-900">LIVE Sale:</h3>
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
    <br>
    <br>
    <br>
    <section class="div-b-l-w">
        <div class="container-fluid c-f-p seo-hyperlinks"><br>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <h4>Sale & Offers</h4>
                <ul class="nav-ul">
                    <ul class="nav-ul">
                        <li class="li"><a itemprop="url" class=""
                                          href="send-rakhi-gifts-online-worldwide-at-cheap-rates" target="_blank">Rakhi Online Shopping India</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="/personal-shopper-online-shopping-from-india-shipping">AMAZON.IN Great Indian Sale</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="https://ship.shoppre.com/flipkart-the-big-billion-days-sales-offers-deals-online-shopping-with-international-delivery/" target="_blank">
                                FLIPKART Big Billion Day Sale</a></li>
                        <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/prime-amazon-fashion-wardrobe-refresh-sale-shop-online-from-india/" target="_blank">
                                Fashion Wardrobe Refresh Sale</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="https://ship.shoppre.com/online-shopping-flipkart-flipstart-days-2019-offers-fashion-beauty-headphones-laptops-power-banks-mobile-cases/" target="_blank">
                                Flipkart Flipstart Days</a></li>
                        <li class="li"><a itemprop="url" class=""
                                          href="https://ship.shoppre.com/the-biggest-season-sale-flipkart-big-shopping-days-15-may-19-may/" target="_blank">
                                Flipkart Big Shopping Days</a></li>
                        <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/products-on-sale-pure-organic-yoga-clothing-and-products-made-in-india/" target="_blank">
                                Yoga Organic Clothing Sale</a></li>
                        <li class="li"><a itemprop="url" class="" href="https://www.myntra.com/myntrainsider" target="_blank">
                                 Myntra End Of Reason Sale</a></li>
                    </ul>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <h4>Courier Rates/Kg</h4>
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-canada-per-kg">Courier from India to Canada</a></li>
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-germany-per-kg"> Courier from India to Germany</a></li>
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-singapore-per-kg">Courier from India to Singapore</a></li>
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-australia-per-kg">Courier from India to Australia</a></li>
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-usa-per-kg">Courier from India to USA</a></li>
                    <li class="li"><a itemprop="url" class="" href="/international-courier-charges-india-to-uae-per-kg">Courier from India to UAE</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/international-courier-charges-per-kg/from-india-to-finland/" target="_blank">
                            Courier from India to Finland</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/international-courier-charges-per-kg/from-india-to-uk">
                            Courier from India to The UK</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <h4>Mobile Offers </h4>
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="" href="https://www.amazon.in/gp/product/B07HGJJ58K/ref=s9_acss_bw_cg_Top_4a1_w" target="_blank">
                            Samsung Galaxy M30</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.amazon.in/gp/product/B07JWVNKRL/ref=s9_acss_bw_cg_Top_2b1_w" target="_blank">
                            Apple iPhone XR</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.flipkart.com/oppo-f11-fluorite-purple-128-gb/p/itmfgb8ft4kfgfe6" target="_blank">
                            OPPO F11</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.flipkart.com/google-pixel-3-not-pink-128-gb/p/itmfbuyqxkruzg7j" target="_blank">
                            Google Pixel 3</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.tatacliq.com/nokia-61-64-gb-bluegold-4-gb-ram-dual-sim-4g/p-mp000000003223071" target="_blank">
                           Nokia 6.1 64 GB</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.amazon.in/Moto-ONE-White-64-GB/dp/B07RFCVTK1" target="_blank">
                            Moto ONE White 4/64 GB</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.flipkart.com/redmi-note-6-pro-black-64-gb/p/itmfayzxqnzjhtbh" target="_blank">
                            Redmi Note 6 Pro</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://www.2gud.com/asus-zenfone-max-pro-m1-black-64-gb/p/itmf5ptrgsbsbuzs" target="_blank">
                            Asus Zenfone Max Pro M1</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6 no-pad div-align-items-l">
                <h4>Top Indian Stores</h4>
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/online-stores-india/nykaa-india-beauty-products-international-shipping/" target="_blank">
                            Nykaa International Shipping</a></li>
                    <li class="li"><a itemprop="url" class="" href="/myntra-online-shopping-shipping-from-india">Myntra International Shipping</a></li>
                    <li class="li"><a itemprop="url" class="" href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/" target="_blank">Amazon.in International Shipping</a></li>
                    <li class="li"><a itemprop="url" class="" href="/limeroad-shopping-international-shipping">Limeroad International Delivery</a></li>
                    <li class="li"><a itemprop="url" class="" href="/flipkart-shopping-with-shoppre-from-india">Flipkart International Shipping</a></li>
                    <li class="li"><a itemprop="url" class="" href="/etsy-international-shipping-from-india">Etsy International Shipping</a></li>
                    <li class="li"><a itemprop="url" class="" href="/ajio-online-shopping-international-shipping">AJIO International Shipping</a></li>
                    <li class="li"><a itemprop="url" class="" href="/jaypore-international-shipping-from-india">Jaypore International Delivery</a></li>
                </ul>
            </div>
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
        var pubID="54240CL48886";!function(t,s){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=("https:"==document.location.protocol?"https://cdn0.cuelinks.com/js/":"http://cdn0.cuelinks.com/js/")+"cuelinksv1.js",document.getElementsByTagName("body")[0].appendChild(e)}(),$(document).ready(function(){var t=".MultiCarousel",s=".MultiCarousel-inner",e="";function a(){var a=0,i=0,r="",n="",o=$(t).width(),c=$("body").width();$(s).each(function(){i+=1;var t=$(this).find(".item").length;r=$(this).parent().attr("data-items"),n=r.split(","),$(this).parent().attr("id","MultiCarousel"+i),c>=1200?(a=n[3],e=o/a):c>=992?(a=n[2],e=o/a):c>=768?(a=n[1],e=o/a):(a=n[0],e=o/a),$(this).css({transform:"translateX(0px)",width:e*t}),$(this).find(".item").each(function(){$(this).outerWidth(e)}),$(".leftLst").addClass("over"),$(".rightLst").removeClass("over")})}function i(t,a){var i="#"+$(a).parent().attr("id");!function(t,a,i){var r="",n=$(a+" "+s).css("transform").match(/-?[\d\.]+/g),o=Math.abs(n[4]);if(0==t)r=parseInt(o)-parseInt(e*i),$(a+" .rightLst").removeClass("over"),r<=e/2&&(r=0,$(a+" .leftLst").addClass("over"));else if(1==t){var c=$(a).find(s).width()-$(a).width();r=parseInt(o)+parseInt(e*i),$(a+" .leftLst").removeClass("over"),r>=c-e/2&&(r=c,$(a+" .rightLst").addClass("over"))}$(a+" "+s).css("transform","translateX("+-r+"px)")}(t,i,$(i).attr("data-slide"))}$(".leftLst, .rightLst").click(function(){i($(this).hasClass("leftLst")?0:1,this)}),a(),$(window).resize(function(){a()})});
    </script>
@endsection
