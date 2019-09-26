@extends('layout')

@section('title', 'Shopp Re! Open your big box of happiness today | Sign up Free')
@section('description', 'Enjoy worry-free shopping & fast shipping experience with ShoppRe service team. Delivering Happiness to you through every box with your favorite Indian Products.')
@section('keywords', 'fast, worry-free shipping experience, personal shopper, ship worldwide, simply sign-up, buy now')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/services" />
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "ShoppRe.com",
  "alternateName": "International Shopping and Shipping from India, ShoppRe",
  "url": "https://www.shoppre.com/services",
  "logo": "https://www.shoppre.com/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 80409 44077",
    "contactType": "customer service"
  },
  "sameAs": [
    "https://www.facebook.com/goshoppre",
    "https://twitter.com/Go_Shoppre",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre"
  ],
  "aggregateRating": {
    "@type" : "AggregateRating",
    "bestRating": "5",
    "ratingValue" : "4.8",
    "reviewCount" : "136",
    "worstRating" : 3.0
  }
}
    </script>
@endsection

@section('content')

    <section class="page_head">
        <div class="pagebanner">
            <img src="{{env('AWS_CLOUD_FRONT')}}/img/banner1.jpg" width="100%">
            <div class="banner-cap">
                <h2>ShoppRe <span class="text-orange">Services</span></h2>
            </div>
        </div>
    </section>
    <section class="service-band">
        <div class="container">
            <h2>Know NO Limits in <span class="text-orange">Shopping!</span></h2>
            <p>ShoppRe's expert team is here to Deliver Happiness to you through<br>every box with your favorite Indian Products!</p>
        </div>
    </section>
    <section class="service-sec yellow">
        <div class="container">
            <div class="col-md-4">
                <div class="imgbox">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/services2.png">
                    <h3>Shop and Ship</h3>
                    <p>Always wanted to get products from India?</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="infobox">
                    <h4>Shop online from india.ship worldwide</h4>
                    <p>Enjoy a fast and worry-free shipping experience with ShoppRe’s extensive experience, industry-leading expertise and unmatched member service.</p>
                    <a href="/shop-from-india-ship-worldwide" class="btn btn-shoppre">Learn how to Shop from India</a>
                </div>
                <div class="infobox">
                    <h4>GIFT YOUR LOVED ONES LIVING OUTSIDE INDIA</h4>
                    <p>Simply sign up and buy your favorite product from ANY Indian website, and gift your near and dear ones outside India!</p>
                    <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register" class="btn btn-shoppre">Sign up for free</a>
                </div>
                <div class="infobox">
                    <h4>SHOPPRE’S UPFRONT SHIPPING RATES. 60-80% DISCOUNTED CARRIER RATES</h4>
                    <p>Our revolutionary new pricing system takes the mystery out of global shipping rates - Try out our Shipping Calculator.</p>
                    <a href="{{route('pricing')}}" class="btn btn-shoppre">Learn more about pricing</a>
                </div>
                <div class="infobox">
                    <h4>PACKAGE RETURN SERVICES</h4>
                    <p>Shop without worry! We are happy to help with product returns to Indian stores if your goods arrive at ShoppRe damaged, are not what you expected, or the wrong size or color.</p>
                    <a href="{{route('faq')}}" class="btn btn-shoppre">Learn more about return services</a>
                </div>
            </div>
        </div>
    </section>
    <section class="service-sec">
        <div class="container">
            <div class="col-md-4">
                <div class="imgbox">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/services1.png">
                    <h3>PERSONAL SHOPPER</h3>
                    <p>Your International credit card or mode of payment isn't accepted by some Indian Portals?</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="infobox">
                    <h4>YOUR PERSONAL SHOPPER</h4>
                    <p>Simply provide us the product and Seller details, our Personal Shopper will purchase the item on your behalf, using our Indian Local Card!</p>
                    <a href="https://www.shoppre.com/personal-shopper-india" class="btn btn-shoppre">Learn more about Personal Shopper</a>
                </div>
                <div class="infobox">
                    <h4>GIFT YOUR LOVED ONES LIVING IN INDIA</h4>
                    <p>Simply sign up and use ShoppRe’s Personal Shopper to buy your favorite product from ANY Indian website, and gift your loved ones in India!</p>
                    <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register" class="btn btn-shoppre">Sign up for free</a>
                </div>
            </div>
        </div>
    </section>
    <section class="service-sec yellow">
        <div class="container">
            <div class="col-md-4">
                <div class="imgbox">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/services3.png">
                    <h3>Shopping guide</h3>
                    <p>Dont’t know where to shop the product that you need from?</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="infobox">
                    <h4>BROWSE CATEGORIES AND REVIEW WEBSITES</h4>
                    <p>Read and submit reviews of hundreds of top Indian online stores, so you can always make the best decisions when choosing Indian retailers, brands and products.</p>
                    <a href="{{route('stores1')}}" class="btn btn-shoppre">Explore Indian Shopping Websites</a>
                </div>
                <div class="infobox">
                    <h4>GET SPECIAL DEALS WITH SHOPPRE’S FEATURED STORES</h4>
                    <p>Simply sign up and get access to our exclusive offers when you shop from our featured stores!</p>
                    <a href="{{route('stores1')}}" class="btn btn-shoppre">View our featured Stores</a>
                </div>
            </div>
        </div>
    </section>
    <div class="service-band2">
        <h2>For Business/Seller</h2>
        <h4>
            <a
                href="/seller-partner"
                class="text-orange"
            >
                Become a Partner
            </a>
            with ShoppRe, and discover amazing opportunities.
        </h4>
    </div>
    <section class="signup_free violet-grade">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>So what are you waiting for? Shopp <span class="text-orange">Re</span>! Open your big box of happiness today!</h3>
                    <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
                    <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register" class="btn btn-shoppre" target="_blank">sign up for free</a>
                </div>
            </div>
        </div>
    </section>

@endsection
