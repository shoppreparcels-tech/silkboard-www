@extends('layout')

@section('title', 'Shoppre - Shop Online from India and Ship Worldwide')
@section('description', 'Shoppre is a parcel forwarding company which allows your packages to ship from India to worldwide starting at ₹466 only and reaches within 2-4 working days!')
@section('keywords', 'parcel forwarding company, borderless shipping from india, personal shipping indian address, fast, cheap, hassle free, shoppre')

@section('css_style')
	<!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
@endsection

<!-- schema markup -->
@section('schema_markup')

@endsection

@section('content')
    <!-- Home Page Contents -->
    <section class="slider">
        <div class="slide">
          <img src="{{asset('img/slider1.jpg')}}" width="100%">
          <div class="caption-block">
            <h2 class="text-orange">BORDERLESS SHIPPING FROM INDIA</h2>
            <h3>Shop from India, Ship Worldwide!</h3>
            <p>Door to Door Pickup and International & Domestic Delivery.
            <p>Receive your FREE Personal Locker and Virtual Shipping Address in India!</p>
           
            <a href="https://www.youtube.com/watch?v=Zf77ljCx9Ik" class="btn btn-shoppre popup-youtube">Video <i class="glyphicon glyphicon-play-circle"></i></a>
            <a href="{{route('schedulePickup.Index')}}" class="btn btn-shoppre">Schedule a Pickup</a>
            <br>
             <a href="https://myaccount.shoppre.com/register" class="btn btn-shoppre">Get Virtual Address & Start Shopping</a>
          </div>
          <div class="bottom">
            <p>Not all Indian Online Stores offer International Shipping</p>
          </div>
        </div>
    </section>
    <section class="all-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="square-box">
              <h2>All About</h2>
              <img src="{{asset('img/texture.png')}}">
            </div>
          </div>
          <div class="col-sm-10">
            <div class="parcel_logs">
              <h3>Ship your Parcel through Shoppre’s trusted Courier Partners</h3>
              <img src="{{asset('img/dhl.png')}}">
              <img src="{{asset('img/fedex.png')}}">
              <img src="{{asset('img/dtdc.png')}}">
              <h4>Shoppre receives and ships over INR 10,00,000 worth in eCommerce purchases monthly!</h4>
            </div>
          </div>
          <div class="clearfix"></div>
          <ul class="horline">
            <li>
              <a href="{{route('stores')}}"><h2>1000+</h2>
              <h4>Indian Shopping Websites</h4></a>
            </li>
            <li>
              <a href="{{route('countryList')}}">
              <h2>220+</h2>
              <h4>Countries Worldwide</h4>
            </a>
            </li>
            <li>
              <h2>2-5 Days</h2>
              <h4>Average Delivery Time</h4>
            </li>            
            <li>
              <h2>Save 60-80%</h2>
              <h4>Storage, Consolidation &amp; Repackaging!</h4>
            </li>
          </ul>
          <div class="text-center">
            <a href="{{route('about')}}" class="btn btn-shoppre">Why You Will Love Us</a>
          </div>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6">
            <div class="service-content">
              <div class="square-box">
                <h2>Our</h2>
                <h2 class="red">Services</h2>
              </div>
              <p class="head-text">We are passionate about delivering happiness through every box with the products you love from India!</p>
              <ul>
                <li>
                  <h3>SHOP AND SHIP</h3>
                  <h4>Always wanted to get products from India?</h4>
                  <p>Sign up for free and get your own Indian shipping address. Shop from any Indian online store. Enjoy our storage facilities, get your purchases consolidated and delivered at your doorstep abroad.</p>
                </li>
                <li>
                  <h3>PERSONAL SHOPPER</h3>
                  <h4>Your International Credit Card isn’t accepted on some portals?</h4>
                  <p>Simply provide us the product and merchant details; our Personal Shopper will purchase the items for you and get what you love!</p>
                </li>
                <li>
                  <h3>SHOPPING GUIDE</h3>
                  <h4>Don’t know where to shop the product that you need from?</h4>
                  <p>We are there to help you through our various filters to select which portal you can shop your favorite product from.</p>
                </li>
              </ul>
              <div class="clearfix"></div>
              <div class="text-center">
                <a href="{{route('services')}}" class="btn btn-shoppre">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="works">
      <div class="container">
        <div class="row">
          <div class="square-box">
            <h2>how shoppre</h2>
            <h2 class="orange">works</h2>
          </div>
          <div class="col-md-12">
            <ul class="works_flow">
              <li>
                <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">
                <h3>Join</h3>
                <p>Sign up with Shoppre and receive your FREE Personal Locker with a Virtual Indian Shipping Address.</p>
                </a>
              </li>
              <li>
                <a href="{{route('stores')}}">
                <h3>Explore</h3>
                <p>Find out from which Indian Online store you can get your favorite product.</p>
                </a>
              </li>
              <li>
                <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/locker">
                <h3>USE YOUR SHOPPRE ADDRESS</h3>
                <p>Use your Shoppre Address to shop from ANY Indian Shopping Website.</p>
              </a>
              </li>
              <li>
                <a href="{{route('stores')}}">
                <h3>AVAIL BENEFITS</h3>
                <p>In case any online store doesn’t accept your International credit card, don’t worry! Our Personal Shopper will purchase the item for you using our Indian Local Credit Card.</p>
              </a>
              </li>
              <li>
               <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/locker">
                <h3>GET NOTIFIED</h3>
                <p>You can view, manage and track your shipments on your ShoppRe account, 24/7. We will notify you as soon as your package arrives at ShoppRe facility. You can ship your items at your convenience in just a click!</p>
                </a>
              </li>
              <li>
               <a href="{{route('consolidationService')}}">
                <h3>RECEIVE &amp; ENJOY</h3>
                <p>Save up to 60-80% by our Consolidation, Repackaging and Storage services. Enjoy the special discounted rates that we get with our trusted courier partners like DHL, FedEx and more. Get your items in just 2-5 Days!</p>
              </a>
              </li>
            </ul>
            <div class="clearfix"></div>
            <div class="text-center">
              <a href="{{route('howitworks')}}" class="btn btn-shoppre">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="brandslove">
      <div class="container">
        <div class="row">
          <div class="square-box">
            <h3>Brands</h3>
            <h2>You <span class="red">Love!</span></h2>
          </div>
          <div class="col-md-12">
            <h2 class="brands-head">Not sure where to shop from?</h2>
            <div class="brands owl-carousel">
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/amazon.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/flipkart.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/abof.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/chumbak.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/jabong.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/myntra.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/pepperfry.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/snapdeal.png')}}"></a>
              </div>
            </div>
            <div class="text-center">
              <a href="{{route('stores')}}" class="btn btn-shoppre">Browse Categories</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pricing">
      <div class="container">
        <div class="row">
            <h2 class="shipping-head">Shipping From India - Pricing</h2>
          <div class="col-md-12">
            <p class="head-text-content">We have heavily optimised our operations to give you the best deal. Our pricing makes us a favourite platform for Indian shoppers worldwide.</p>
            <div class="pricing-terms">
              <div class="col-sm-4">
                <div class="desc_box">
                  <div class="ico_box"></div>
                  <h3>NO MEMBERSHIP <span class="orange">PLANS</span></h3>
                  <p>Pay only as and when you use our services!</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="desc_box">
                  <div class="ico_box" style="background-position: 1px -73px;"></div>
                  <h3>SHIPPING RATE <span class="orange">CALCULATOR</span></h3>
                  <p>Find out how much it would cost you for shipping your favorite product to your home abroad.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="desc_box">
                  <div class="ico_box" style="background-position: 1px -146px;"></div>
                  <h3>COUNTRY <span class="orange">GUIDE</span></h3>
                  <p>Find out helpful information with regards to your country, such as Shipping Costs, Duties and Taxes, Restricted Items, Current Exchange rates, Country Alerts, etc.</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="text-center">
              <a href="{{route('pricing')}}" class="btn btn-shoppre">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonails">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="square-box">
              <h3>What Our</h3>
              <h2>Members <span class="orange">Say!</span></h2>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="testimons owl-carousel">
              @foreach($reviews as $review)
              <div class="item">
                <div class="col-sm-3 text-center">
                  <img src="{{asset('img/flags')}}/{{$review->country->flag}}" class="img-circle">
                </div>
                <div class="col-sm-9">
                  <p>{{$review->review}}</p>
                  <span class="name">{{$review->person}}</span>
                  <span>{{$review->country->name}}</span>
                </div>
                <div class="clearfix"></div>
              </div>
              @endforeach
            </div>
            <div class="text-center">
              <a href="{{route('reviews')}}" class="btn orange">View All Shoppre Reviews</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="signup_free">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
          <h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness today!</h3>
          {{--<p>All you need is a membership to get your Indian Shipping Address immediately!</p>--}}
          <a href="https://myaccount.shoppre.com/register" class="btn btn-shoppre">sign up for free</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
      <div class="mdl-grid mdl-grid--no-spacing">
        <h4 class="mdl-cell mdl-cell--12-col footer__popularDestiHeading">Ship your Package From Various Places In India</h4>
        <div class="mdl-cell mdl-cell--12-col">
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'india','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from India / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'bengaluru','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from Bengaluru / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'delhi','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from Delhi / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'jaipur','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from Jaipur / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'mumbai','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from Mumbai / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'hyderabad','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from Hyderabad / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'chennai','destination'=>'usa'])}}"
              class="footer__destiLinks text_font">Ship from Chennai / </a>
            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'kochi','destination'=>'usa'])}}" 
              class="footer__destiLinks text_font">Ship from Kochi</a>                  
        </div>
      </div>
    </div>
     <hr>
     <div class="container">
      <div class="mdl-grid mdl-grid--no-spacing">
        <h4 class="mdl-cell mdl-cell--12-col footer__popularDestiHeading"> Schedule Your Pickup From Various Places In India</h4>
        <div class="mdl-cell mdl-cell--12-col">
            <a href="{{route('schedulePickup.Index')}}" 
              class="footer__destiLinks text_font">Schedule pickup from Bangalore / </a>           
            <a href="{{route('schedulePickup.Index')}}" 
              class="footer__destiLinks text_font">Schedule pickup from Delhi / </a>
            <a href="{{route('schedulePickup.Index')}}" 
              class="footer__destiLinks text_font">Schedule pickup from Jaipur / </a>
            <a href="{{route('schedulePickup.Index')}}" 
              class="footer__destiLinks text_font">Schedule pickup from Mumbai / </a>
            <a href="{{route('schedulePickup.Index')}}" 
              class="footer__destiLinks text_font">Schedule pickup from Hyderabad / </a>
            <a href="{{route('schedulePickup.Index')}}"
              class="footer__destiLinks text_font">Schedule pickup from Chennai / </a>
            <a href="{{route('schedulePickup.Index')}}" 
              class="footer__destiLinks text_font">Schedule pickup from Kochi</a>                  
        </div>
      </div>
    </div>
    </section>   
@endsection

@section('js_script')
	<!-- Owl Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- Home -->
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
      });
    </script>
@endsection
