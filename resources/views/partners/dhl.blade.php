@extends('layout')

@section('title', 'DHL | International Courier & Shipping Services - ShoppRe Partner')
@section('description', 'DHL is the official international courier, shipping and parcel delivery partner of ShoppRe. Find the top products shipped with DHL at great prices.')
@section('keywords', 'dhl, shipping, courier, parcel, partner')

@section('content')
    <div class="container">
        <center>
            <a class="carrier_font_size" href="javascript:void(0)">DHL</a>
        </center>
        <h2> Shipments we sent across the Globe </h2>
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
                <div class="shipment_card">
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 35px">
                            <a href="{{route('dhl.view',['id' => $shipment->id])}}">
                                <h4><b> To {{$shipment->country}} </b></h4>
                            </a>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5>Weight :&nbsp{{$shipment->weight}} kg.</h5>
                                </div>
                                <div class="col-md-3">
                                    <h5>Total Charge : INR &nbsp{{$shipment->final_amount}}</h5>
                                </div>
                                @if( $delivery_days > 0 )
                                    <div class="col-md-3">
                                        <h5>Delivered In : &nbsp{{$delivery_days}} Days</h5>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <center>
            {{ $shipments->appends(Request::except('page'))->links() }} {{-- For Pagination--}}
        </center>
    </div>
@endsection
