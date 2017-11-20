@extends('layout')

@section('title', 'How Does it Works | Shoppre - International Shipping Partner')
@section('description', 'Learn more how Our personal Shoppre service manages and ship your packages from multiple Indian stores and delivered to your country in just 2 to 4 days!')
@section('keywords', 'learn more, our personal shoppre service, manages, ship your packages, multiple indian stores, delivered to your country')

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
        <p>At <span class="text-orange">Shoppre</span>, we are the experts at maximizing members’ savings. Shoppre premier package consolidation combines multiple packages into one, saving our members millions on international shipping charges.</p>
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
                  <strong>Simply <a href="{{route('customer.register')}}">SIGN UP FOR FREE</a> and receive your own Personal Locker with a Virtual Indian Shipping Address!</strong>
                  <p>Access thousands of Indian Online Stores and get your favorite products from India.</p>
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
                  <strong><a href="{{route('stores')}}">Browse</a> through Shoppre’s exhaustive list of Top Indian Online Stores to know where to shop your favorite product from!</strong>
                  <p>Savings Tip: Simply SIGN UP and get access to Shoppre's featured stores and special shipping discounts!</p>
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
                  <strong>Shop your favorite product from ANY Indian Store, and at the time of check out, use your Shoppre address as your “Ship to Address”.</strong>
                  <p>Savings Tip: If you know the weight of your item, simply use the <a href="{{route('pricing')}}">Shipping Calculator</a> to find out the Shipping cost to your country. Also, our <a href="#">Country Guides</a> give you specific information related to your country such as Duties and Taxes, Restricted Items, Currency Converter, etc.</p>
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
                  <strong>In case any shopping Portal doesn’t accept your International Credit Card, or in case of any difficulties to shop from Indian Stores, don’t worry!</strong>
                  <p>Our <a href="{{route('personal.shopper')}}">Personal Shopper</a> Service will purchase the items for you using our Indian Local Credit Card!</p>
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
                  <strong>You will be notified via email as soon as your order is received at Shoppre’s facility. View, manage and ship all your packages from multiple stores on your Shoppre’s online account, 24/7.</strong>
                  <ul>
                    <li>We check the item condition and make sure it is not damaged.</li>
                    <li>We weigh and take down the box dimensions.</li>
                    <li>We Prepare any international documents needed to parcel forward the shipment.</li>
                  </ul>
                  <p>Savings Tip: <br>
                  - Let us know which packages to consolidate to ensure you get the biggest savings on shipping costs.<br>
                  - Request extra packaging material, fragile stickers and a variety of other <a href="{{route('customer.ship.prefer')}}">packing options</a>.</p>
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
                  <strong>Save up to 60-80% by our <a href="{{route('services')}}">Consolidation, Repackaging and Storage Services!</a> Track your shipment as soon as your order is dispatched! Most Shoppre members worldwide receive their packages in just 2 to 5 days!</strong>
                  <p>Enjoy the special discounted rates that we get with our trusted courier partners like DHL, FedEx and more, thanks to our bulk volume of shipment.</p>
                  <p>Savings Tip:<br>
                  We give you 20 days of FREE Storage! Simply wait until you have multiple packages in your suite and we will consolidate your packages into one shipment and save you up to 80%!</p>
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
        <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of happiness today!</h3>
        <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
        <a href="{{route('customer.register')}}" class="btn btn-shoppre">sign up for free</a>
        </div>
      </div>
    </div>
  </section>
    
@endsection