@extends('layout')

@section('title', 'DTDC | International & Domestic Courier Services - ShoppRe Partner')
@section('description', 'DTDC is the international & domestic courier delivery and shipping partner of ShoppRe. Find the top products shipped with DTDC at great prices.')
@section('keywords', 'dtdc, shipping, courier, parcel, indian partner')

@section('content')
    <div class="container">
        <center>
            <a class="carrier_font_size" href="javascript:void(0)">Delivered Via DTDC</a>
        </center>
        <h2> Shipments we sent across the Globe </h2>
        @foreach($shipments as $shipment)
            @php
                $dispatched = '';
                $delivered = '';
                    foreach ($shipment -> mails as $tracking)
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
                $delivery_days = (round($datediff / (60 * 60 * 24)) < 0) ? 0 : round($datediff / (60 * 60 * 24));

            @endphp
            @if(!empty($dispatched) )
                @if($delivery_days <= 10 && !empty($delivery_days) )
                <div class="shipment_card">
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 35px">
                            <a href="{{route('dtdc.view',['id' => $shipment->id])}}">
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
            @endif
        @endforeach
        <center>
            {{ $shipments->appends(Request::except('page'))->links() }} {{-- For Pagination--}}
        </center>
    </div>
@endsection
