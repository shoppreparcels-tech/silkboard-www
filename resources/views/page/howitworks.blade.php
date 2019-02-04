@extends('layout')

@section('title', 'How Does ShoppRe Works - How to Shop & Ship from India | ShoppRe')
@section('description', 'Sign Up & receive your own Personal Locker with Virtual Indian Shipping Address. Buy product from any Indian stores; Store, Consolidate, Repack & Ship worldwide')
@section('keywords', 'how does shoppre works, our personal shoppre service, ship your packages, multiple indian stores, ship from india')


@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/how-it-works" />
    <meta property="og:title" content="How Does ShoppRe Works and How to Shop & Ship from India"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Sign Up for Free & receive your own Personal Locker with Virtual Indian Shipping Address. Buy your favorite product from any Indian stores; Store, Consolidate, Repack & Ship worldwide"/>
    <meta property="og:url" content="https://www.shoppre.com/how-it-works"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:site_name" content="ShoppRe.com"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Go_Shoppre"/>
    <meta name="twitter:title" content="How Does ShoppRe Works and How to Shop & Ship from India"/>
    <meta name="twitter:description"
          content="Sign Up for Free & receive your own Personal Locker with Virtual Indian Shipping Address. Buy your favorite product from any Indian stores; Store, Consolidate, Repack & Ship worldwide"/>
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>


    <script type='application/ld+json'>

{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "ShoppRe",
  "alternateName": "How Does ShoppRe Works, How to Shop and Ship from India",
  "url": "https://www.shoppre.com/how-it-works/",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "Sign Up for Free & receive your own Personal Locker with Virtual Indian Shipping Address. Buy your favorite product from any Indian stores; Store your purchases up to 20 days of free storage, Consolidate, Repack & Ship worldwide from India.",
    "sameAs": [
    "https://www.facebook.com/goshoppre/",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://goo.gl/maps/uuZy4tMs8582",
    "https://play.google.com/store/apps/details?id=com.shoppre.play",
    "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"
  ]
}
    </script>

@endsection
@section('content')

    <section class="page_head">
        <div class="pagebanner">
            <img src="{{asset('img/banner1.jpg')}}" width="100%">
            <div class="banner-cap">
                <h2>How <span class="text-orange">SHOPPRE</span> works</h2>
            </div>
        </div>
    </section>
    <section class="how_white">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <p>At <span class="text-orange">ShoppRe</span>, we are the experts at maximizing members’ savings.
                    ShoppRe premier package consolidation combines multiple packages into one, saving our members
                    millions on <a href="{{route('pricing')}}">international shipping charges.</a></p>
            </div>
        </div>
    </section>
    <section class="timeline">
        <div class="container">
            <div class="row">
                <div class="blox">
                    <div class="col-md-6 col-sm-12">
                        <div class="story-block story-left">
                            <div class="item_content">
                                <h3>join</h3>
                                <strong>Simply <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register>SIGN UP
                                        FOR FREE</a> and receive your own Personal Locker with a Virtual Indian Shipping
                                    Address!</strong>
                                <p>Access thousands of Indian Online Stores and get your favorite products from
                                    India.</p>
                                <p>Shoppre takes the worry of International Shipping out of you!</p>
                            </div>
                            <div class="item_img" style="top: 19%;">
                                <img src="{{asset('img/how1.png')}}">
                            </div>
                            <span class="story-arrow"></span>
                            <span class="h-line"></span>
                            <span class="line_bullet">1</span>
                        </div>
                    </div>
                </div>
                <div class="blox">
                    <div class="col-md-6 col-sm-12 col-sm-offset-6">
                        <div class="story-block story-right">
                            <div class="item_content">
                                <h3>explore</h3>
                                <strong><a href="{{route('stores')}}">Browse</a> through Shoppre’s exhaustive list of
                                    Top Indian Online Stores to know where to shop your favorite product from!</strong>
                                <p>Savings Tip: Simply SIGN UP and get access to Shoppre's featured stores and special
                                    shipping discounts!</p>
                            </div>
                            <div class="item_img">
                                <img src="{{asset('img/how2.png')}}">
                            </div>
                            <span class="story-arrow"></span>
                            <span class="h-line"></span>
                            <span class="line_bullet">2</span>
                        </div>
                    </div>
                </div>
                <div class="blox">
                    <div class="col-md-6 col-sm-12">
                        <div class="story-block story-left">
                            <div class="item_content">
                                <h3>USE YOUR SHOPPRE ADDRESS</h3>
                                <strong>Shop your favorite product from ANY Indian Store, and at the time of check out,
                                    use your Shoppre address as your “Ship to Address”.</strong>
                                <p>Savings Tip: If you know the weight of your item, simply use the <a
                                        href="{{route('pricing')}}">Shipping Calculator</a> to find out the Shipping
                                    cost to your country.</p>
                            </div>
                            <div class="item_img">
                                <img src="{{asset('img/how3.png')}}">
                            </div>
                            <span class="story-arrow"></span>
                            <span class="h-line"></span>
                            <span class="line_bullet">3</span>
                        </div>
                    </div>
                </div>
                <div class="blox">
                    <div class="col-md-6 col-sm-12 col-sm-offset-6">
                        <div class="story-block story-right">
                            <div class="item_content">
                                <h3>AVAIL BENEFITS</h3>
                                <strong>In case any shopping Portal doesn’t accept your International Credit Card, or in
                                    case of any difficulties to shop from Indian Stores, don’t worry!</strong>
                                <p>Our <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/personal-shopper">Personal
                                        Shopper</a> Service will purchase the items for you using our Indian Local
                                    Credit Card!</p>
                            </div>
                            <div class="item_img">
                                <img src="{{asset('img/how4.png')}}">
                            </div>
                            <span class="story-arrow"></span>
                            <span class="h-line"></span>
                            <span class="line_bullet">4</span>
                        </div>
                    </div>
                </div>
                <div class="blox">
                    <div class="col-md-6 col-sm-12">
                        <div class="story-block story-left">
                            <div class="item_content">
                                <h3>get notified</h3>
                                <strong>You will be notified via email as soon as your order is received at Shoppre’s
                                    facility. View, manage and ship all your packages from multiple stores on your
                                    Shoppre’s online account, 24/7.</strong>
                                <ul>
                                    <li>We check the item condition and make sure it is not damaged.</li>
                                    <li>We weigh and take down the box dimensions.</li>
                                    <li>We Prepare any international documents needed to parcel forward the shipment.
                                    </li>
                                </ul>
                                <p>Savings Tip: <br>
                                    - Let us know which packages to consolidate to ensure you get the biggest savings on
                                    shipping costs.<br>
                                    - Request extra packaging material, fragile stickers and a variety of other <a
                                        href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/shipping-preferences">packing
                                        options</a>.</p>
                            </div>
                            <div class="item_img" style="top: 23%;">
                                <img src="{{asset('img/how5.png')}}">
                            </div>
                            <span class="story-arrow"></span>
                            <span class="h-line"></span>
                            <span class="line_bullet">5</span>
                        </div>
                    </div>
                </div>
                <div class="blox">
                    <div class="col-md-6 col-sm-12 col-sm-offset-6">
                        <div class="story-block story-right">
                            <div class="item_content">
                                <h3>receive and enjoy</h3>
                                <strong>Save up to 60-80% by our <a href="{{route('consolidationService')}}">Consolidation,
                                        Repackaging and Storage Services!</a> Track your shipment as soon as your order
                                    is dispatched! Most Shoppre members worldwide receive their packages in just 2 to 5
                                    days!</strong>
                                <p>Enjoy the special discounted rates that we get with our trusted courier partners like
                                    DHL, FedEx and more, thanks to our bulk volume of shipment.</p>
                                <p>Savings Tip:<br>
                                    We give you 20 days of FREE Storage! Simply wait until you have multiple packages in
                                    your suite and we will consolidate your packages into one shipment and save you up
                                    to 80%!</p>
                            </div>
                            <div class="item_img right" style="top: 23%;">
                                <img src="{{asset('img/how6.png')}}">
                            </div>
                            <span class="story-arrow"></span>
                            <span class="h-line"></span>
                            <span class="line_bullet">6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="signup_free violet-grade">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of
                        happiness today!</h3>
                    <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
                    <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register class="btn btn-shoppre">sign up for
                        free</a>
                </div>
            </div>
        </div>
    </section>


@endsection
