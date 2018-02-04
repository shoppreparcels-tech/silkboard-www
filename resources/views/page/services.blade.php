@extends('layout')

@section('title', 'Shoppre Services - Shop Online From India. Ship Worldwide')
@section('description', 'Enjoy a fast and worry-free shipping experience with Shoppre industry-leading expertise, and unmatched member service. Simply Sign-up and Buy Now!')
@section('keywords', 'fast, worry-free shipping experience, industry-leading expertise, unmatched member service, simply sign-up, buy now')

@section('content')

    <section class="page_head">
        <div class="pagebanner">
          <img src="img/banner1.jpg" width="100%">
          <div class="banner-cap">
            <h2>Shoppre <span class="text-orange">Services</span></h2>
          </div>
        </div>
    </section>
    <section class="service-band">
      <div class="container">
        <h2>Know NO Limits in <span class="text-orange">Shopping!</span></h2>
        <p>Shoppre's expert team is here to Deliver Happiness to you through<br>every box with your favorite Indian Products!</p>
      </div>
    </section>
    <section class="service-sec yellow">
      <div class="container">
        <div class="col-md-4">
          <div class="imgbox">
            <img src="img/services2.png">
            <h3>Shop and Ship</h3>
            <p>Always wanted to get products from India?</p>
          </div>
        </div>
        <div class="col-md-8">
            <div class="infobox">
              <h4>Shop online from india.ship worldwide</h4>
              <p>Enjoy a fast and worry-free shipping experience with Shoppre’s extensive experience, industry-leading expertise and unmatched member service.</p>
              <a href="{{route('howitworks')}}" class="btn btn-shoppre">Learn how shoppre works</a>
            </div>
            <div class="infobox">
              <h4>GIFT YOUR LOVED ONES LIVING OUTSIDE INDIA</h4>
              <p>Simply sign up and buy your favorite product from ANY Indian website, and gift your near and dear ones outside India!</p>
              <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">Sign up for free</a>
            </div>
            <div class="infobox">
              <h4>SHOPPRE’S UPFRONT SHIPPING RATES. 60-80% DISCOUNTED CARRIER RATES</h4>
              <p>Our revolutionary new pricing system takes the mystery out of global shipping rates - Try out our Shipping Calculator.</p>
              <a href="{{route('pricing')}}" class="btn btn-shoppre">Learn more about pricing</a>
            </div>
            <div class="infobox">
              <h4>PACKAGE RETURN SERVICES</h4>
              <p>Shop without worry! We are happy to help with product returns to Indian stores if your goods arrive at Shoppre damaged, are not what you expected, or the wrong size or color.</p>
              <a href="{{route('faq')}}" class="btn btn-shoppre">Learn more about return services</a>
            </div>
        </div>
      </div>
    </section>
    <section class="service-sec">
      <div class="container">
        <div class="col-md-4">
          <div class="imgbox">
            <img src="img/services1.png">
            <h3>PERSONAL SHOPPER</h3>
            <p>Your International credit card or mode of payment isn't accepted by some Indian Portals?</p>
          </div>
        </div>
        <div class="col-md-8">
            <div class="infobox">
              <h4>YOUR PERSONAL SHOPPER</h4>
              <p>Simply provide us the product and Seller details, our Personal Shopper will purchase the item on your behalf, using our Indian Local Card!</p>
              <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/personal-shopper" class="btn btn-shoppre">Learn more about Personal Shopper</a>
            </div>
            <div class="infobox">
              <h4>GIFT YOUR LOVED ONES LIVING IN INDIA</h4>
              <p>Simply sign up and use Shoppre’s Personal Shopper to buy your favorite product from ANY Indian website, and gift your loved ones in India!</p>
              <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">Sign up for free</a>
            </div>
        </div>
      </div>
    </section>
    <section class="service-sec yellow">
      <div class="container">
        <div class="col-md-4">
          <div class="imgbox">
            <img src="img/services3.png">
            <h3>Shopping guide</h3>
            <p>Dont’t know where to shop the product that you need from?</p>
          </div>
        </div>
        <div class="col-md-8">
            <div class="infobox">
              <h4>BROWSE CATEGORIES AND REVIEW WEBSITES</h4>
              <p>Read and submit reviews of hundreds of top Indian online stores, so you can always make the best decisions when choosing Indian retailers, brands and products.</p>
              <a href="{{route('stores')}}" class="btn btn-shoppre">Explore Indian Shopping Websites</a>
            </div>
            <div class="infobox">
              <h4>GET SPECIAL DEALS WITH SHOPPRE’S FEATURED STORES</h4>
              <p>Simply sign up and get access to our exclusive offers when you shop from our featured stores!</p>
              <a href="{{route('stores')}}" class="btn btn-shoppre">View our featured Stores</a>
            </div>
        </div>
      </div>
    </section>
    <div class="service-band2">
      <h2>For Business</h2>
      <h4><a href="#" class="text-orange">Become a Partner</a> with Shoppre, and discover amazing opportunites. </h4>
    </div>
    <section class="signup_free violet-grade">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of happiness today!</h3>
          <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
          <a href="#" class="btn btn-shoppre">sign up for free</a>
          </div>
        </div>
      </div>
    </section>
    
@endsection
