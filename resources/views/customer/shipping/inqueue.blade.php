@extends('layout')

@section('title', '- Shipment InQueue')

@section('content')

    @include('partials._banner')
    
    <section class="dash-history">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h3>Shipments in Queue</h3>
              @php
                $allStatus = $shipments->pluck('shipstatus')->toArray();
              @endphp
              
              @if(in_array('inreview', $allStatus))
              <div class="alert alert-warning" role="alert"> <strong>Shoppre</strong> team members are currently preparing your shipment(s). No action is required on your part, and you will be notified when your shipment(s) <strong>is packed and weighed</strong>. Past shipments can be viewed in your <a href="{{route('shipping.history')}}" class="alert-link">History</a>.</div>
              @endif

              @if(in_array('confirmation', $allStatus))
              <div class="alert alert-warning" role="alert">Kindly Submit your Payment within 7 DAYS after you have received Shoppre's email titled "Submit Payment | Your Shipment is packed and weighed". From the 8th day, your parcel will start accumulating Storage fees of INR 100/day which you can view in your Shoppre wallet.</div>
              @endif

              <div class="table-responsive">
                @if(!$shipments->isEmpty())
                <table class="table table-bordered">
                    <tr>
                        <th></th>
                        <th>SENDING TO</th>
                        <th>SHIP REQUEST ID</th>
                        <th>REQUEST DATE</th>
                        <th>WEIGHT</th>
                        <th>PACKAGE COUNT</th>
                        <th>STATUS</th>
                    </tr>
                    @php ($i = 0)
                    @foreach ($shipments as $shipment)
                        <tr>
                            <td><a class="slide_trigger" data-target="{{++$i}}" href="#" title="Edit"><i class="fa fa-angle-double-down"></i></a></td>
                            <td>{{$shipment->fullname}}</td>
                            <td>{{$shipment->orderid}}</td>
                            <td>{{date('d M Y', strtotime($shipment->created_at))}}</td>
                            <td>
                              @if($shipment->shipstatus == 'inreview')
                                In Review
                              @else
                                {{number_format($shipment->weight, 2)}} Kg
                              @endif
                            </td>
                            <td>{{$shipment->count}}</td>
                            <td style="max-width: 200px;">
                              @php
                                switch($shipment->shipstatus){
                                  case 'inreview':
                                    echo 'In Review';
                                    echo '<br>';

                                    $diff = date_diff(new DateTime(date('Y-m-d H:i:s')), new DateTime($shipment->created_at));
                                    $hours = ($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h + $diff->i/60;

                                    if(ceil($hours) <= 1){
                                      echo '<a href="'.route('shipping.request.cancel', [$shipment->orderid]).'">Cancel Shipment</a>';
                                      echo ' <a href="javascript::void(0)" class="tooltipkey" title="Shoppre offers a one-hour window to cancel your shipping order. Once your parcel has been prepared, you can no longer cancel your shipment. The status will change to Submit Payment."><i class="fa fa-question-circle-o"></i></a>';
                                    }
                                  break;

                                  case 'inqueue':
                                    echo 'Awaiting Payment';
                                    echo '<br><small>It might take upto 24 Hours to reflect your payments into our account.</small>';
                                    
                                  break;

                                  case 'received':
                                    echo 'Payment Received';
                                    echo '<br>';
                                    echo '<a href="'.route('shipping.invoice', [$shipment->orderid]).'" target="_blank">Invoice</a>';
                                  break;

                                  case 'confirmation':
                                    echo '<a href="'.route('shipping.request.confirm', [$shipment->orderid]).'">Submit Payment</a>';
                                  break;
                                }
                              @endphp
                            </td>
                        </tr>
                        <tr id="slidedown_{{$i}}" style="display:none" class="queue_ext">
                          <td colspan="8">
                            <div class="col-sm-7">
                              <address>
                                <h4>Shipping Address:</h4>
                                <p><strong>{{$shipment->fullname}}</strong></p>
                                <p>{{$shipment->address}}</p>
                                <p>PH: {{$shipment->phone}}</p>
                              </address>
                            </div>
                            @if($shipment->finalamount != 0)
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