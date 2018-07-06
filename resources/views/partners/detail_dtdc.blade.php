@extends('layout')

@section('title', 'Partner | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')
    <div class="container">
        <div class="shipping_detail">
            <div class="row">
                <div class="col-md-4">
                    <img src="/../img/dtdc.jpg" alt="">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
               <div class="col-md-4 package_items">
                    <center>
                        <h4>Items customer purchased from various indian online stores</h4>
                    </center>
                        <ul>
                            @foreach($packages as $package)
                                @foreach($package->items as $package_items)
                                    <li style="font-size: 14px;color: chocolate;">{{$package_items->item}}</li>
                                @endforeach
                            @endforeach
                        </ul>
                </div>
                <div class="col-md-8">
                    <center>
                        <h4>Customer Purchased From Indian Online Stores and Shipped From </h4>
                        <h3> India To {{ $shipment->country }}</h3>
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
                        @if($delivery_days)
                            <h4 class="heading_color"> Delivered From India To {{ $shipment->country }} In :
                                {{$delivery_days}} Days.
                            </h4>
                        @endif
                    </center>
                </div>
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
            </div>
            <div class="row top_seller_heading">
                <div class="col-md-12">
                <div class="seller_tab">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#web" aria-controls="web" role="tab" data-toggle="tab">
                                        Top Indian Sellers
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active">
                        @foreach($stores as $store)
                            <div class="col-sm-3">
                                <div class="seller_box">
                                    @php
                                        $logo = (!empty($store->logo)) ? $store->logo : 'brand-logo.png';
                                    @endphp
                                    <a href="{{$store->url}}" target="_blank" title="{{$store->name}}"><span
                                            class="brand_logo"
                                            style="background-image: url('https://www.shoppre.com/uploads/stores/{{$logo}}');">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
     </div>
   </div>
 </div>
@endsection
