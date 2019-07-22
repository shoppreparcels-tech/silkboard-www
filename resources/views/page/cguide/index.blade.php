@extends('layout')

@section('title', 'Country Guides: Learn about 220 Countries | Pricing, Duty & Tax')
@section('description', 'Get Latest helpful information on shipments specific to your country including Shipping Cost, Duties and Taxes, Prohibited Items, Transit Time & Country alerts.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('css_style')
  <!-- Select2 -->
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')

	<section class="page_head">
    <div class="pagebanner">
      <img src="{{asset('img/banner2.jpg')}}" width="100%">
      <div class="banner-cap">
        <h2>Shoppre delivers to <span class="text-orange">220+</span></h2>
        <h2><span class="text-orange">countries</span> around the globe!</h2>
      </div>
    </div>
  </section>

  <section class="select_cguide">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <h3>Find helpful information specific to your country, including :</h3>
        <ul class="infoitems">
          <li>Shipping costs</li>
          <li>Duties and taxes</li>
          <li>Restricted & prohibited items</li>
          <li>Current exchange rates</li>
          <li>Typical transit times</li>
          <li>Country alerts</li>
        </ul>
        <div class="clearfix"></div>
        <form id="country_select">
          {{ csrf_field() }}
          <select class="form-control select2" name="country" id="select_iso">
            <option value="">Select Country</option>
            @foreach($countries as $country)
              <option value="{{$country->iso}}">{{$country->name}}</option>
            @endforeach
          </select>
        </form>
      </div>
    </div>
  </section>

  <section class="signup_free violet-grade">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h3>So what are you waiting for? Shopp <span class="text-orange">re</span>! Open your big box of happiness today!</h3>
        <p>Simply login to get your Personal Indian Shipping Address immediately!</p>
        <a href="{{route('customer.register')}}" class="btn btn-shoppre">sign up for free</a>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js_script')
  <!-- Select2 -->
  <script src="{{asset('js/select2.min.js')}}"></script>
  <script type="text/javascript">
      $(document).ready(function(){$(".select2").select2()}),$("#select_iso").change(function(){0!=$(this).val().length&&(window.location="/country/"+$(this).val())});
  </script>
@endsection
