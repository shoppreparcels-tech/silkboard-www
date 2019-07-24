@extends('layout')

@section('title', 'Become A Partner - Partner With Us - Shoppre Shipping Services')
@section('description', 'Partner with Shoppre to grow your eCommerce business, with our Free & Premium advertising campaigns. Gaining access to global shoppers in 220+ countries.')
@section('content')

    <section class="page_head">
        <div class="pagebanner">
          <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/banner1.jpg" width="100%">
          <div class="banner-cap">
            <h2>Become A <span class="text-orange">Partner</span></h2>
          </div>
        </div>
    </section>
    <section class="partner_white">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-md-6">
            <div class="blox">
              <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/ico1.png">
              <div class="content">
                <h3>Grow Your Business</h3>
                <p>Partner with Shoppre and benefit from global eCommerce growth</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blox">
              <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/ico2.png">
              <div class="content">
                <h3>Simple Integration</h3>
                <p>With our tools for success — banners, links & landing pages</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blox">
              <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/ico3.png">
              <div class="content">
                <h3>Broaden Your Reach</h3>
                <p>Gain access to global shoppers in 220+ countries</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blox">
              <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/ico4.png">
              <div class="content">
                <h3>Contact Us</h3>
                <p>And increase your profits today!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="partner_divide">
      <div class="container">
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="blox">
              <h3>Strategic Partners</h3>
              <ul>
                <li>White-label consumer solutions for postal services, banks, eCommerce business & more</li>
                <li>Supply chain solutions for eCommerce businesses around the world</li>
                <li>Package consolidation, export services, ship notifications, export documents & more</li>
                <li>We're interested in exploring all partnership opportunities!</li>
              </ul>
              <div class="btns">                
                <a href="#" class="btn btn-green">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blox">
              <h3>Merchant Partner Program</h3>
              <ul>
                <li>Do your products have global appeal?</li>
                <li>Expand your business to international customers</li>
                <li>Partner with the world's #1 package consolidation company</li>
                <li>Integration is FREE, simple and requires minimal IT resources</li>
              </ul>
              <div class="btns">              
                <a href="#" class="btn btn-green">Join Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="signup_free">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of happiness today!</h3>
          <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
          <a href="env('PREFIX')/env('DOMAIN')/register" class="btn btn-shoppre">sign up for free</a>
          </div>
        </div>
      </div>
    </section>

@endsection