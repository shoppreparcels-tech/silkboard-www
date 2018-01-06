@extends('layout')

@section('title', 'Browse Categories: List of Top Indian Shopping Sites | Shoppre')
@section('description', 'Shop from list of Top Indian Shopping Sites, Facebook & Instagram Sellers. Save by combining multiple packages into one and get it shipped to your country.')
@section('keywords', 'shop, list of top indian shopping sites, facebook, instagram sellers, multiple packages, shipped to your country')

@section('content')

<section class="price_repacking">
      <div class="container">
          <h2 class="text-orange">OUR SERVICES WHICH HELP YOU SAVE ON SHIPPING COSTS</h2>
          <h3>REPACKING SERVICE</h3>
          <p>We repack individual shipments for free and help in reducing wasted space<br> which will allow you to  save over 20% on shipping charges.</p>
          <div class="col-sm-6 repack_box border">
            <img src="{{asset('img/repackage.png')}}">
            <h4>We only repack goods which :</h4>
            <ul>
              <li>Require added protection and security if it is inadequately  packed for  international shipping.</li>
              <li>Have high volumetric weight than the actual weight.</li>
              <li>We will repack each package to reduce the  weight, which will reduce your  shipping cost .Original package contents are not compromised by repackaging.</li>
              <li>If you don't wish for your shipments to be repacked, you can set that preference in <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/shipping-preferences" class="text-orange">your account</a>.</li>
            </ul>
          </div>
          <div class="col-sm-6 repack_box">
            <img src="{{asset('img/repack_ex.png')}}" style="width: 380px;">
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
                  <img src="{{asset('img/consolid1.png')}}">
                </div>
                <p class="result"><strong>Shipping each item abroad separately :<br>
                Total Shipping Cost $60</strong></p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="serv_sec">
                <h4>shipping through <a href="{{route('home')}}" class="text-orange">Shoppre.com</a></h4>
                <div class="example">
                  <img src="{{asset('img/consolid2.png')}}" style="max-width: 78%;">
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
                <p>Enjoy Shoppre's special discount rates with our trusted courier partners like DHL, FedEx, DTDC, etc.<br>thanks to our bulk shipment every month!</p>
              </div>
            </div>
        </div>
    </section>
    <section class="store-band">
      <div class="container">
        <h2>free storage upto 20 days</h2>
        <p>In an effort to maximise consolidation, we will store your packages for 20 days for free. That gives you time to shop and ship your items to our warehouse,Allowing for more packages to be consolidated which saves you money on international shipping costs.</p>
      </div>
    </section>
@endsection

@section('js_script')
    <script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection