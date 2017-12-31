@extends('layout')

@section('title', 'About | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')

	<section class="page_head">
    <div class="pagebanner">
      <img src="img/banner1.jpg" width="100%">
      <div class="banner-cap">
        <h2>All About <span class="text-orange">Shoppre</span></h2>
        <h2>The Mission</h2>
      </div>
    </div>
  </section>
  <section class="mission_band">
    <div class="container">
      <div class="col-md-11 col-md-offset-1">
          <div class="col-md-4">
            <div class="info">
              <h2>Our Mission</h2>
              <p>To delight our members every time they open a box from shoppre by treating each package as if it was our own, while displaying our passion for service and superior global shipping expertise.</p>
            </div>
          </div>
          <div class="col-md-8 text-center">
            <div class="circle">
              <span>About<br>Shoppre</span>
            </div>
            <div class="circle">
              <span>Why<br>Shoppre</span>
            </div>
            <div class="circle" style="padding-top: 25px;">
              <span>Our<br>Shipping<br>Partners</span>
            </div>
          </div>
          
      </div>
    </div>
  </section>
  <section class="about_yello">
    <div class="container">
      <p>Shoppre is the brainchild of two NRI women with incurably Desi hearts. Frustrated by the lack of reasonably priced opportunities to express our quintessentially Indian souls abroad, we decided to make one of our own. Shoppre brings thousands of online Indian stores right to your doorstep.</p>
    </div>
  </section>
  <section class="about_why">
    <div class="container">
      <h3>Why <span class="text-orange">Shoppre?</span></h3>
      <div class="whyblock">
        <div class="col-sm-4">
          <img src="img/why-shoppre-1.png">
        </div>
        <div class="col-sm-8">
          <p>Our team of logistics experts have developed a streamlined shipping and handling process, tailored to handle challenges unique to India.They worry about customs and red tape so you don't have to! All while ensuring fast, dependable service at unbelievably low prices!</p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="whyblock">
        <div class="col-sm-8">
          <p>Need help with any aspect of your shopping experience? Our friendly, efficient customer service team is here to guide you through every step of the process!</p>
        </div>
        <div class="col-sm-4">
          <img src="img/why-shoppre-2.png">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <section class="about_partner">
    <div class="container">
      <div class="col-sm-8 text-center">
        <h2>Out Shipping Partners</h2>
        <div class="whitebox">
            <p>Our influence and bulk shipping volume have allowed Shoppre to build long-term partnerships with every major global shipper, including DHL, FedEx and DTDC. As our partners, these global shippers provide Shoppre with the lowest possible rates, fastest delivery times and best shipping solutions.</p>
            <a href="#" class="btn btn-shoppre">Become a Partner</a>
        </div>
      </div>
      <div class="col-sm-4 rightside">
        <img src="img/abt_partner.png">
        <p>We analyze routes and rates so members can choose the fastest or most affordable delivery, depending on their needs.</p>
      </div>
    </div>
  </section>
  <section class="signup_free violet-grade">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of happiness today!</h3>
        <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">sign up for free</a>
        </div>
      </div>
    </div>
  </section>

@endsection