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
                        <th>SENDING TO</th>
                        <th>SHIP REQUEST ID</th>
                        <th>REQUEST DATE</th>
                        <th>TOTAL VALUE</th>
                        <th>WEIGHT</th>
                        <th>PACKAGE COUNT</th>
                        <th></th>
                    </tr>
                    @php ($i = 0)
                    @foreach ($shipments as $shipment)
                        <tr>
                            <td>{{$shipment->fullname}}</td>
                            <td>{{$shipment->orderid}}</td>
                            <td>{{$shipment->created_at}}</td>
                            <td>{{$shipment->value}}</td>
                            <td>
                              @if($shipment->shipstatus == 'inreview')
                                In Review
                              @else
                                {{number_format($shipment->weight, 2)}} Kg
                              @endif
                            </td>
                            <td>{{$shipment->count}}</td>
                            <td>
                              @php
                                switch($shipment->shipstatus){
                                  case 'inqueue':
                                    echo 'Processing';
                                  break;
                                  case 'inreview':
                                    echo 'In Review';
                                    echo '<br>';

                                    $diff = date_diff(new DateTime(date('Y-m-d H:i:s')), new DateTime($shipment->created_at));
                                    $hours = ($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h + $diff->i/60;

                                    if(floor($hours) <= 7){
                                      echo '<a href="'.route('shipping.request.cancel', [$shipment->orderid]).'">Cancel</a>';
                                      echo ' <a href="javascript::void(0)" class="tooltipkey" title="You can cancel your ship request with in 7 hours. Once The Shoppre Team has begun to prepare your shipment, and it can no longer be canceled online."><i class="fa fa-question-circle-o"></i></a>';
                                    }

                                  break;
                                  case 'confirmation':
                                    echo '<a href="'.route('shipping.request.confirm', [$shipment->orderid]).'">Confirm Order</a>';
                                  break;
                                }
                              @endphp
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