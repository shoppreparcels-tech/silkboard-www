@extends('layout')

@section('title', 'About ShoppRe.com | The First Worldwide Indian Shop & Ship Community')
@section('description', 'ShoppRe - The First Worldwide, Indian Shop & Ship Community that Promotes Online Shopping From India & Delivers Pure Joy to Your Doorsteps in 3-6 Days!')
@section('keywords', 'about shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, mission, vission')

@section('css_style')
    <meta property="og:title" content="ShoppRe.com | The First Worldwide Indian Shop & Ship Community"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="ShoppRe - The First Worldwide, Indian Shop & Ship Community That Promotes Online Shopping From India & Delivers Pure Joy to Your Doorsteps in 3-6 Days!"/>
    <meta property="og:url" content="https://www.shoppre.com/about"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:site_name" content="ShoppRe.com"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Go_Shoppre"/>
    <meta name="twitter:title" content="ShoppRe.com | The First Worldwide Indian Shop & Ship Community"/>
    <meta name="twitter:description" content="ShoppRe - The First Worldwide, Indian Shop & Ship Community That Promotes Online Shopping From India & Delivers Pure Joy to Your Doorsteps in 3-6 Days!"/>
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "ShoppRe - Delivering Joy to Your Doorsteps",
  "alternateName": "The First Worldwide Indian Shop and Ship Community",
  "url": "https://www.shoppre.com/consolidation-service",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "ShoppRe - The First Worldwide, Indian Shop & Ship Community that Promotes Online Shopping From India & Delivers Pure Joy to Your Doorsteps in 3-6 Days!",
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
    <script type="application/ld+json">
 { "@context": "http://schema.org",
 "@type": "Organization",
 "name": "ShoppRe.com",
 "legalName" : "IndianShoppre LLP",
 "url": "https://www.shoppre.com",
 "logo": "https://www.shoppre.com/img/logo.png",
 "foundingDate": "2016",
 "founders": [
 {
 "@type": "Person",
 "name": "Saira Asif Hassan"
 },
 {
 "@type": "Person",
 "name": "Nikkitha Shanker"
 } ],
 "address": {
 "@type": "PostalAddress",
 "streetAddress": "No.181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala",
 "addressLocality": "Bengaluru",
 "addressRegion": "Karnataka",
 "postalCode": "560034",
 "addressCountry": "IN"
 },
 "contactPoint": {
 "@type": "ContactPoint",
 "contactType": "customer support",
 "telephone": "[+918040944077]",
 "email": "support@shoppre.com"
 },
 "sameAs": [
    "https://www.facebook.com/goshoppre",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.linkedin.com/company/shoppre.com"
 ]}
    </script>

@endsection
@section('content')
  <section class="heading-section">
      <h1 class="header1 p-color-white">About Us</h1>
      <h2 class="header4 p-color-cement">Who Are We? What We Do? <br>What We Strive For?</h2>
  </section>
  <section class="story-section">
      <div class="container">
          <div class="row">
              <div class="col-md-6 story-image">
                  <img class="img-responsive" src="{{asset('img/images/about-image.png')}}" alt="ShoppRe About Us">
              </div>
              <div class="col-md-6 story-text">
                  <h3 class="header2">The Story Behind</h3>
                  <p>The tiny bean of an idea of ShoppRe is the brainchild of two Indian women who remain Indian at heart despite growing up and belonging elsewhere.
                      Not willing to give in to the heavily pricey outlets abroad to express or satisfy their quintessentially Indian souls - there came the thought of making an exquisitely reliable one themselves.
                      <br> Having known a huge society full of Indians who would love a better way to access Indian goods; it was a no-brainer to infer that they won’t be the only ones around the world with the same dilemma.
                      <br>Hundreds of hours spent brainstorming, millions of strategic thoughts launched in between after; took birth
                      <a href="{{route('home')}}">ShoppRe</a> which,
                      is now crossing borders and re-writing history in the service industry and courier platform.</p>
              </div>
          </div>
      </div>
  </section>
  <section class="mission-section">
      <div class="container mission-section-background">
          <div class="row">
              <div class="col-md-7 mission-text">
                  <h3>Mission</h3>
                  <p> While we fly high with two gorgeous wings on our
                      shoulders – <strong> Forwarding and Courier Services;</strong> teamed up with all the major Indian online stores and shipping giants such as DHL, DTDC - we create whirlwinds in the industry with our steadfastness and prompt nature.
                      <br> As we primarily nullify the shipping costs down to <strong> 60%-80% </strong>lower; our logistic experts also swear by storing, repackaging,
                      consolidating and shipping off each shipment in a fine-tuned system that exists for <strong>extreme customer satisfaction.</strong></p>
              </div>
          </div>
      </div>
  </section>
  <section class="vision-section">
      <div class="container ">
          <div class="row">
              <div class="col-md-7 vision-text">
                  <h3>Vision</h3>
                  <p>
                      We bear each customer and their needs close to heart and treat every package as if it were our own.
                      <br>
                      What we strive for, as a superior entity in international shipping is; getting a better deal for our customers in shipping packages off to ANYWHERE in the world without worrying about even the most trivial of mishaps and most importantly,
                      an undesirable array of <a href="{{route('pricing')}}">shipping costs</a>.
                  </p>
              </div>
              <div class="col-md-5 vision-image">
                  <img class="img-responsive" src="{{asset('img/images/vision-image.png')}}" alt="">
              </div>
          </div>
      </div>
  </section>
  <section class="delivery-section">
      <div class="container">
          <center>
              <h1 class="header1 p-color-cement-dark">Delivering Joy to Your Doorsteps</h1>
              <h2 class="header2 p-color-cement">You've got no reason to wait around any longer, just come Shopp Re!</h2>
              {{--<button class="btn signup-btn" href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">Sign Up for FREE</button>--}}

              <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" target="_blank">
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
