@extends('layout')

@section('title', 'Partner | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')
@section('css_style')
    <style>
        .shipments-detail{box-shadow: 0 0 6px rgba(17, 39, 59, 0.05);border-radius: 3px;background-color: #ffffff;border-left: 4px solid #e9c46a; padding: 50px}
        .shipping-items{border: 1px solid rgba(146, 156, 165, 0.1);background-color: #fafafb;width: 350px;height: 210px; padding: 10px}

    </style>
@endsection
@section('content')
    <section class="header">
        <div class="container div-s-p-h">
            <center>
                <h1 class="header1 p-color-white">DHL</h1>
                <h2 class="header2 p-color-cement">Shipments we sent across the Globe though DHL</h2>
            </center>

        </div>
    </section>
    <section class="shipping-partner">
        <div class="container shipments-detail">
            <div class="col-md-7">
                <center>
                    @php
                        $dispatched = '';
                        $delivered = '';
                            foreach ($shipment -> tracking as $tracking)
                              {
                                  if ($tracking->condition == 'ship_dispatched')
                                  {
                                      $dispatched = $tracking->created_at;
                                  }
                                  elseif( $tracking->condition == 'ship_delivered')
                                  {
                                      $delivered = $tracking->created_at;
                                  }
                              }
                        $dispatched = strtotime($dispatched);
                        $delivered = strtotime($delivered);
                        $datediff = $delivered - $dispatched;
                        $delivery_days = round($datediff / (60 * 60 * 24));
                    @endphp
                </center>
                <h20 class="f-s-20 f-c-gray font-weight-900">Customer Purchased From
                    Indian Online Stores and Shipped From</h20> <br>
                <h1 class="f-s-36 f-c-blue">India To  {{ $shipment->country }} </h1> <br>
                <h20 class="f-s-20 f-c-gray font-weight-900">Delivered From India To {{ $shipment->country }} In : {{$delivery_days!=null? $delivery_days: 'In Transit '}} Days</h20>
            </div>
            <div class="col-md-5" style="padding:30px">
                <div class="shipping-items">
                    <h18 class="f-c-blue f-s-18 font-weight-900">Items customer purchased from
                        various Indian online Stores.</h18>
                    <div><br>
                        <ul class="list-unstyled">
                            @foreach($packages as $package)
                                @foreach($package->items as $package_items)
                                    <li class="f-s-14 f-c-gray" style="font-style: italic; font-weight:600">
                                        <img src="{{asset('img/images/chris-circle.png')}}" alt="">
                                        <span> {{$package_items->item}}</span>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container shipments-information">
            <div class="col-md-2 col-xs-12">
                <img src="{{asset('img/dhl.png')}}" alt="">
            </div>
            <div class="col-md-10 col-xs-12">
                <div>
                    <p class="header5 p-color-cement-dark">Write content that describe how we work with DHL... DUMMY/DHL is the
                        global leader in the logistics industry.
                        Specializing in international shipping, courier services and transportation. DHL is the global
                        leader in the logistics industry. Specializing in international shipping,
                        courier services and transportation. DHL is the global leader in the
                        logistics industry. Specializing in international shipping, courier services and transportation.
                    </p>
                    <br>
                    <p class="header5 p-color-cement-dark">DHL is the global leader in the logistics industry. Specializing courier services and transportation.</p>
                </div>
            </div>
            <br>
        </div>
        <div class="container no-padding">
            <div class="shipped-countries">
                <h4 class="p-color-blue header4 font-weight-900">Most popular countries where we shipped recently. </h4>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United States</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    {{--</section>--}}
        {{--<div class="container">--}}
            {{--<div class="shipping_detail">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<a class="carrier_font_size" href="javascript:void(0)">DHL</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<br>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4 package_items">--}}
                        {{--<center>--}}
                            {{--<h4>Items customer purchased from various indian online stores</h4>--}}
                        {{--</center>--}}
                            {{--<ul>--}}
                                {{--@foreach($packages as $package)--}}
                                    {{--@foreach($package->items as $package_items)--}}
                                        {{--<li style="font-size: 14px;color: chocolate;">{{$package_items->item}}</li>--}}
                                    {{--@endforeach--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8">--}}
                        {{--<center>--}}
                            {{--<h4>Customer Purchased From Indian Online Stores and Shipped From </h4>--}}
                            {{--<h3> India To {{ $shipment->country }}</h3>--}}
                            {{--@php--}}
                                {{--$dispatched = '';--}}
                                {{--$delivered = '';--}}
                                    {{--foreach ($shipment -> tracking as $tracking)--}}
                                      {{--{--}}
                                          {{--if ($tracking->condition == 'ship_dispatched')--}}
                                          {{--{--}}
                                              {{--$dispatched = $tracking->created_at;--}}
                                          {{--}--}}
                                          {{--elseif( $tracking->condition == 'ship_delivered')--}}
                                          {{--{--}}
                                              {{--$delivered = $tracking->created_at;--}}
                                          {{--}--}}
                                      {{--}--}}
                                {{--$dispatched = strtotime($dispatched);--}}
                                {{--$delivered = strtotime($delivered);--}}
                                {{--$datediff = $delivered - $dispatched;--}}
                                {{--$delivery_days = round($datediff / (60 * 60 * 24));--}}
                            {{--@endphp--}}
                            {{--@if($delivery_days)--}}
                                {{--<h4 class="heading_color"> Delivered From India To {{ $shipment->country }} In :--}}
                                    {{--{{$delivery_days}} Days.--}}
                                {{--</h4>--}}
                            {{--@endif--}}
                        {{--</center>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-7 col-md-offset-1 package_photos">--}}
                        {{--<div class="row">--}}
                            {{--<h4>Item Photos That Customer Purchased</h4>--}}
                            {{--@foreach($packages as $package)--}}
                                {{--@foreach($package->photos as $package_photo)--}}
                                    {{--@php--}}
                                        {{--$photourl = "/uploads/packages/standard/$package_photo->package_id/$package_photo->name";--}}
                                    {{--@endphp--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<img src="{{asset($photourl)}}" alt="">--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row top_seller_heading">--}}
                    {{--<div class="col-md-12">--}}
                    {{--<div class="seller_tab">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-4 col-md-offset-4">--}}
                                {{--<ul class="nav nav-tabs nav-justified" role="tablist">--}}
                                    {{--<li role="presentation" class="active">--}}
                                        {{--<a href="#web" aria-controls="web" role="tab" data-toggle="tab">--}}
                                            {{--Top Indian Sellers--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4"></div>--}}
                        {{--</div>--}}
                    {{--<div class="tab-content">--}}
                        {{--<div role="tabpanel" class="tab-pane fade in active">--}}
                            {{--@foreach($stores as $store)--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="seller_box">--}}
                                        {{--@php--}}
                                            {{--$logo = (!empty($store->logo)) ? $store->logo : 'brand-logo.png';--}}
                                        {{--@endphp--}}
                                        {{--<a href="{{$store->url}}" target="_blank" title="{{$store->name}}"><span--}}
                                                {{--class="brand_logo"--}}
                                                {{--style="background-image: url('https://www.shoppre.com/uploads/stores/{{$logo}}');">--}}
                                            {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
         {{--</div>--}}
       {{--</div>--}}
     {{--</div>--}}
    {{--<section style="background-color: #f2f6fb;">--}}
        <div class="container">
            <center>
                <p class="header1 p-color-cement-dark div-margin">Take a Walk Around Your Favorite Stores</p>
                <p class="header2 p-color-cement ">Browse through popular stores, take your pick, shop & get it
                    delivered to your virtual address; we'll ship it to your destination abroad!</p>
            </center>
        </div>
        <div class="container div-store-padding">
            <center>
                <div class=" col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <a href="{{route('flipkart.landing')}}"><img class="img-responsive img-stores"
                                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/stores/flipkart-international-shopping.png"
                                                                     alt="flipkart.com international delivery shipping"></a>
                    </center>
                </div>
                <div class="col-xs-3   div-stores-img">
                    <center class="online-stores">
                        <a href="{{route('amazon.landing')}}">
                            <img class="img-responsive img-stores"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/stores/amazon-india-shopping.png"
                                 alt="amazon.in international delivery shipping">
                        </a>
                    </center>
                </div>
                <div class="col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/ajio-online-shopping.png"
                             alt="ajio.com free delivery shipping">
                    </center>
                </div>
                <div class=" col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/jabong-online-fashion-shopping.png"
                             alt="jabong.com shipping international">
                    </center>
                </div>
                <div class="  col-xs-3  div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/homeshop-18-shopping-company.png"
                             alt="homeshop18.com best deal shopping shipping">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/snapdeal-indian-e-commerce-company.png"
                             alt="snapdeal.com indian e-commerce company">
                    </center>
                </div>
                <div class="col-xs-2 div-stores-img">
                    <center class="online-stores">
                        <a href="{{route('myntra.landing')}}">
                            <img class="img-responsive img-stores"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/stores/myntra-express-delivery-globe.png"
                                 alt="myntra.com fashion express delivery globe">
                        </a>
                    </center>
                </div>
                <div class=" col-xs-3 div-stores-img" id="hidestore">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/ebay-india-multinational-e-commerce.png"
                             alt="ebay.in online shopping site in india">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/limeroad-online-shopping-offers.png"
                             alt="limeroad.com shipping from india">
                    </center>
                </div>
                <div class="col-xs-3 div-stores-img" id="store-hide">
                    <center class="online-stores">
                        <img class="img-responsive img-stores"
                             src="{{env('AWS_CLOUD_FRONT')}}/img/stores/infibeam-latest-deals-shopping.png"
                             alt="infibeam.com latest deals on shopping">
                    </center>
                </div>
            </center>
        </div>
        <div class="container">
            <center>
                <a href="{{route('stores1')}}" target="_blank">
                    <div class=" btn-browse-stores  header5 p-color-white">
                        <b><p>Browse Stores</p></b>
                    </div>
                </a>
            </center>
        </div>
        {{--commented code placed in homepage folder review--}}
    </section>
@endsection
