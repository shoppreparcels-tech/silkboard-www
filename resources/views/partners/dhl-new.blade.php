@extends('layout')

@section('title', 'DHL | International Courier & Shipping Services - ShoppRe Partner')
@section('description', 'DHL is the official international courier, shipping and parcel delivery partner of ShoppRe. Find the top products shipped with DHL at great prices.')
@section('keywords', 'dhl, shipping, courier, parcel, partner')
@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/dhl" />
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
        <div class="container shipments-information">
            <div class="col-md-2 col-xs-12">
                <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/dhl.png" alt="">
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
        </div>
        <br>
        <br>
        <br>
        <div class="container no-padding">
            @foreach($shipments as $shipment)
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
                @if(!empty($dispatched) )

                    <div class="col-md-6 left-pad">
                       <a href="{{route('dhl.detail',['id' => $shipment->id])}}">
                            <div class=" col-md-12 shipments-list">
                                <div class="col-md-5 ">
                                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> {{$shipment->country}}</h3>
                                    <h6 class="header6 p-color-cement">Delivered in {{$delivery_days}} days</h6>
                                </div>
                                <div class="col-md-7 col-xs-8">
                                    <h2 class="header4 p-color-cement"> <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/ic_weight.svg" alt=""> Weight : <span class="p-color-blue"> {{$shipment->weight}} kg</span></h2>
                                    <h2 class="header4 p-color-cement"><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/ic_rupee.svg" alt=""> Total Charge:<span class="p-color-blue">INR {{$shipment->final_amount}}</span></h2>
                                </div>
                            </div>
                       </a>
                    </div>
                    <div class="col-md-6 rigth-pad">
                        <a href="{{route('dhl.view',['id' => $shipment->id])}}">
                            <div class=" col-md-12 shipments-list">
                                <div class="col-md-5 ">
                                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> {{$shipment->country}}</h3>
                                    <h6 class="header6 p-color-cement">Delivered in {{$delivery_days}}  days</h6>
                                </div>
                                <div class="col-md-7 col-xs-8">
                                    <h2 class="header4 p-color-cement"> <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/ic_weight.svg" alt=""> Weight : <span class="p-color-blue"> {{$shipment->weight}} kg</span></h2>
                                    <h2 class="header4 p-color-cement"><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/svg/ic_rupee.svg" alt=""> Total Charge:<span class="p-color-blue">{{$shipment->final_amount}}</span></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
            <div id="remove-row">
                <center>
                    {{ $shipments->appends(Request::except('page'))->links() }}
                </center>
            </div>
        </div>
    </section>
    <section class="sec-shipped">
        <div class="container no-padding">
            <div class="shipped-countries">
             <h4 class="p-color-blue header4 font-weight-900">Most popular countries where we shipped recently. </h4>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                                <li><img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/chris-circle.png" alt=""><span>Shipped form India to United States</span></li>
                            </ul>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <br> <br> <br>
    </section>
@endsection

