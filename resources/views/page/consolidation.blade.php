@extends('layout')

@section('title', 'What is Package Consolidation & How to Save on Shipping Costs? - ShoppRe.com')
@section('description', 'ShoppRe package consolidation service helps in combining your packages purchased from multiple Indian stores into one shipment and saving upto 60-80% on shipping costs.')
@section('keywords', 'shoppre, consolidation service, save on shipping costs, multiple stores, combine packages')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/consolidation-service" />
    <meta property="og:title" content="What is ShoppRe Package Consolidation & How to Save on Shipping Costs?"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="ShoppRe package consolidation service helps in combining your packages purchased from multiple Indian stores into one shipment and saving upto 60-80% on shipping costs."/>
    <meta property="og:url" content="https://www.shoppre.com/consolidation-service"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:site_name" content="ShoppRe.com"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Go_Shoppre"/>
    <meta name="twitter:title" content="What is ShoppRe Package Consolidation & How to Save on Shipping Costs?"/>
    <meta name="twitter:description" content="ShoppRe package consolidation service helps in combining your packages purchased from multiple Indian stores into one shipment and saving upto 60-80% on shipping costs."/>
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
  "alternateName": "What Is ShoppRe Package Consolidation",
  "url": "https://www.shoppre.com/consolidation-service",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "ShoppRe package consolidation service helps in combining your packages purchased from multiple Indian stores into one shipment and saving upto 60-80% on international and domestic shipping costs.",
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

<section class="price_repacking">
      <div class="container">
          <h2 class="text-orange">OUR SERVICES WHICH HELP YOU SAVE ON SHIPPING COSTS</h2>
          <h3>REPACKING SERVICE</h3>
          <p>We repack individual shipments for free and help in reducing wasted space<br> which will allow you to  save over 20% on shipping charges.</p>
          <div class="col-sm-6 repack_box border">
            <img src="{{env('AWS_CLOUD_FRONT')}}/img/repackage.png">
            <h4>We only repack goods which :</h4>
            <ul>
              <li>Require added protection and security if it is inadequately  packed for  international shipping.</li>
              <li>Have high volumetric weight than the actual weight.</li>
              <li>We will repack each package to reduce the  weight, which will reduce your  shipping cost .Original package contents are not compromised by repackaging.</li>
              <li>If you don't wish for your shipments to be repacked, you can set that preference in <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/shipping-preferences" class="text-orange">your account</a>.</li>
            </ul>
          </div>
          <div class="col-sm-6 repack_box">
            <img src="{{env('AWS_CLOUD_FRONT')}}/img/repack_ex.png" style="width: 380px;">
            <h4>Repack example :</h4>
            <ul>
              <li>Package from a store was shipped to the warehouse in a box 25x11x11 inches, representing a volumetric weight of 10kg.</li>
              <li>After repackaging, the receipt dimensions were reduced to  ((21x10x10 inches), representing a volumetric weight of 7kg.</li>
              <li class="linone bold">Saving to the customer was 3kg. in shipping volumetric weight.</li>
            </ul>
          </div>
      </div>
    </section>
    <section class="price_service">
        <div class="container">
            <h2>Shoppre's consolidation service</h2>
            <!-- <h3>which helps you save on international shipping rates!</h3> -->
            <p>Combine your packages from multiple stores to one tracking number,<br>
            and save upto 60% - 80% on shipping rates!</p>
            <p style="font-style: italic;font-size: 15px;">For example:</p>
            <div class="col-sm-6">
              <div class="serv_sec">
                <h4>Shipping Directly from most sellers</h4>
                <div class="example">
                  <img src="{{env('AWS_CLOUD_FRONT')}}/img/consolid1.png">
                </div>
                <p class="result"><strong>Shipping each item abroad separately :<br>
                Total Shipping Cost $60</strong></p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="serv_sec">
                <h4>shipping through <a href="{{route('home')}}" class="text-orange">ShoppRe.com</a></h4>
                <div class="example">
                  <img src="{{env('AWS_CLOUD_FRONT')}}/img/consolid2.png" style="max-width: 78%;">
                </div>
                <p class="result"><strong>Shipping all the items in ONE package:<br>
                Total Shipping Costs : $15</strong></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="serv_foot">
              <h3 class="text-orange"><strong>67% Less</strong> than Shipping Directly from Stores</h3>
              <div class="text-center">
                <h4>When packages are shipped individually, each package bears the rate of the first kilo rate.<br><span class="text-orange">But when you consolidate, you pay for the first half kilo only once!</span></h4>
                <p>Enjoy ShoppRe's special discount rates with our trusted courier partners like DHL, DTDC, etc.<br>thanks to our bulk shipment every month!</p>
              </div>
            </div>
        </div>
    </section>
    <section class="store-band">
      <div class="container">
        <h2>free storage upto 20 days</h2>
          <p>In an effort to maximise consolidation, we will store your packages for 20 days for free. That gives you time to
              <a href="{{route('ifs.index')}}">shop and ship</a> your items to our warehouse, allowing for more packages to be consolidated which saves you money on <a href="{{route('pricing')}}">international shipping costs</a>.</p>
      </div>
    </section>
@endsection

@section('js_script')
    <script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection
