@extends('layout')

@section('title', 'Partner | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')
    <div class="container">
        <center>
            <img src="img/dhl.png" alt="">
        </center>
        <center>
        {{ $shipments->appends(Request::except('page'))->links() }} {{-- For Pagination--}}
        </center>
        <h2> Shipments we sent across the Globe </h2>
        @foreach($shipments as $shipment)
        <div class="shipment_card">
           <div class="row">
               <div class="col-md-8" style="padding-left: 35px">
                   <h4><b>From India To </b>  {{$shipment->country}}</h4>
              <div class="row">
                  <div class="col-md-2">
                      <h5>Weight:&nbsp{{$shipment->weight}}</h5>
                  </div>
                  <div class="col-md-3">
                      <h5>Carrier:&nbsp{{$shipment->carrier}}</h5>
                  </div>
              </div>
               </div>
               <div class="col-md-1 col-lg-offset-2" style="padding-top: 1%;">
                   <a href="{{route('dhl.view',['id' => $shipment->id])}}" class="btn btn-success">
                       More Detail
                   </a>
               </div>
           </div>
        </div>
        @endforeach
        <center>
            {{ $shipments->appends(Request::except('page'))->links() }} {{-- For Pagination--}}
        </center>
    </div>
@endsection
