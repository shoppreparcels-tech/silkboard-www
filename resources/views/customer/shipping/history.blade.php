@extends('layout')

@section('title', '- Shipment InQueue')

@section('content')

    @include('partials._banner')
    
    <section class="dash-history">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h3>Shipments in Queue</h3>
              <div class="table-responsive">
                @if(!$shipments->isEmpty())
                <table class="table table-bordered">
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Charges</th>
                        <th>Status</th>
                        <th>Invoice</th>
                    </tr>
                    @php ($i = 0)
                    @foreach ($shipments as $shipment)
                        <tr>
                            <td><a class="slide_trigger" data-target="{{++$i}}" href="#" title="Edit"><i class="fa fa-angle-double-down"></i></a></td>
                            <td>
                              @if($shipment->tracking->shipdate)
                                {{date('d M Y', strtotime($shipment->tracking->shipdate))}}</td>
                              @else
                                {{date('d M Y', strtotime($shipment->updated_at))}}</td>
                              @endif
                            <td>
                              @if($shipment->tracking->trackid)
                                Shipped {{$shipment->tracking->box_nos}} Parcel(s) via: {{$shipment->tracking->carrier}} to {{$shipment->location->iso}} {{$shipment->tracking->packweight}} Kg Tracking# <a href="{{$shipment->tracking->track_url}}" target="_blank">{{$shipment->tracking->trackid}}</a>
                              @else
                                Tracking# {{$shipment->orderid}}
                              @endif
                            </td>
                            <td><i class="fa fa-rupee"></i>  
                              @php
                                if($shipment->finalamount != 0){
                                  echo number_format($shipment->finalamount, 2);
                                }else{
                                  echo number_format($shipment->estimated, 2);
                                }
                              @endphp
                            </td>
                            <td>
                              @php
                                switch($shipment->shipstatus){
                                  case 'dispatched':
                                    echo 'Dispatched';
                                  break;
                                  case 'delivered':
                                    echo 'Delivered';
                                  break;
                                  case 'canceled':
                                    echo 'Canceled';
                                  break;
                                }
                              @endphp
                            </td>
                            <td>
                              @if($shipment->shipstatus != 'canceled')
                                <a href="{{route('shipping.invoice', [$shipment->orderid])}}" target="_blank">{{$shipment->orderid}}</a>
                              @endif
                            </td>
                        </tr>
                        <tr id="slidedown_{{$i}}" style="display:none" class="queue_ext">
                          <td colspan="8">
                            <div class="col-sm-7">
                              <address>
                                <h4>SHIP TO:</h4>
                                <p><strong>{{$shipment->fullname}}</strong></p>
                                <p>{{$shipment->address}}</p>
                                <p>PH: {{$shipment->phone}}</p>
                              </address>
                            </div>
                            @if($shipment->shipstatus != 'canceled')
                            <div class="col-sm-5">
                              <div class="payinfo">
                                <p><strong>Estimated Shipping</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format(($shipment->estimated-$shipment->packlevel), 2, ".", "")}}</span></p>
                                <p><strong>Package Level Charges</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format($shipment->packlevel, 2, ".", "")}}</span></p>
                                <p><strong>Coupon Reward</strong> <span class="pull-right">(-) <i class="fa fa-rupee"></i> {{number_format($shipment->coupon, 2, ".", "")}}</span></p>
                                <p><strong>Loyalty Reward</strong> <span class="pull-right">(-) <i class="fa fa-rupee"></i> {{number_format($shipment->loyalty, 2, ".", "")}}</span></p>
                                <hr>
                                <p class="total"><strong>Total Cost</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format($shipment->finalamount, 2, ".", "")}}</span></p>
                              </div>
                            </div>
                            @endif
                          </td>
                        </tr>
                    @endforeach
                </table>
                @else
                <div class="well">
                    <p class="alert alert-danger text-center" role="alert">You currently have no shipments under process.</p>
                </div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script type="text/javascript">
    $('.slide_trigger').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        $('#slidedown_'+target).slideToggle();
    });
</script>
@endsection