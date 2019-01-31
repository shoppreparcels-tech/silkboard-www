@extends('myaccount.layout')

@section('title', '- Shipment InQueue')

@section('css_style')
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')
    <section class="dash-history">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h3>Shipments in Queue</h3>

              @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                <hr>
              @endif
              @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                <hr>
              @endif


              @php
                $allStatus = $shipments->pluck('shipping_status')->toArray();
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

                      @php
                        $package_ids = explode(",", $shipment->package_ids);
                        $packages = App\Package::whereIn('id', $package_ids)->get();
                      @endphp

                        <tr>
                            <td><a class="slide_trigger" data-target="{{$shipment->id}}" href="#" title="Edit"><i class="fa fa-angle-double-down"></i></a></td>
                            <td>{{$shipment->full_name}}</td>
                            <td>{{$shipment->order_id}}</td>
                            <td>
                                @php
                                    $expire = strtotime($shipment->created_at.' + 7 days');
                                    if(time() > $expire){
                                        echo '<span class="text-red">'.date('d-m-Y', strtotime($shipment->created_at)).' <a href="#" class="tooltipkey text-red" title="Your parcel started accumulating Storage fees of INR 100/day which you can view in your Shoppre wallet."><i class="fa fa-question-circle-o"></i></a></span>';
                                    } else {
                                        echo date('d M Y', strtotime($shipment->created_at));
                                    }
                                @endphp
                            </td>
                            <td>
                              @if($shipment->shipping_status == 'inreview')
                                In Review
                              @else
                                {{number_format($shipment->weight, 2)}} Kg
                              @endif
                            </td>
                            <td>{{$shipment->count}}</td>
                            <td style="max-width: 200px;">
                              @php

                                if($shipment->payment_status == 'failed'){

                                  echo '<a href="'.route('shipping.request.payment.retry', [$shipment->order_id]).'">Retry Payment</a>';

                                }else{

                                  switch($shipment->shipping_status){
                                    case 'inreview':
                                      echo 'In Review';
                                      echo '<br>';

                                      $diff = date_diff(new DateTime(date('Y-m-d H:i:s')), new DateTime($shipment->created_at));
                                      $hours = ($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h + $diff->i/60;

                                      if(ceil($hours) <= 1){
                                        echo '<a href="'.route('shipping.request.cancel', [$shipment->order_id]).'">Cancel Shipment</a>';
                                        echo ' <a href="javascript:void(0)" class="tooltipkey" title="Shoppre offers a one-hour window to cancel your shipping order. Once your parcel has been prepared, you can no longer cancel your shipment. The status will change to Submit Payment."><i class="fa fa-question-circle-o"></i></a>';
                                      }
                                    break;

                                    case 'inqueue':

                                        if($shipment->payment_gateway_name != 'wire' &&  $shipment->payment_gateway_name != 'cash' && $shipment->payment_status != 'success'){
                                            echo '<a href="'.route('shipping.request.payment.retry', [$shipment->order_id]).'">Retry Payment</a>';
                                        }else{
                                            echo 'Awaiting Payment';
                                            echo '<br><small>It might take upto 24 Hours to reflect your payments into our account.</small><br>';

                                            if($shipment->payment_status != 'success'){
                                                echo '<a href="'.route('shipping.request.payment.retry', [$shipment->order_id]).'">Change Payment Method</a>';
                                            }
                                        }
                                    break;

                                    case 'received':
                                      echo 'Payment Received';
                                      echo '<br>';
                                      echo '<a href="'.route('shipping.invoice', [$shipment->order_id]).'" target="_blank">Invoice</a>';
                                    break;

                                    case 'confirmation':
                                      echo '<a href="'.route('shipping.request.confirm', [$shipment->order_id]).'">Submit Payment</a>';
                                    break;
                                  }
                                }
                              @endphp
                            </td>
                        </tr>
                        <tr id="slidedown_{{$shipment->id}}" style="display:none" class="queue_ext">
                          <td colspan="8">
                            <div class="col-sm-7">
                              <address>
                                <h4>Shipping Address:</h4>
                                <p><strong>{{$shipment->full_name}}</strong></p>
                                <p>{{$shipment->address}}</p>
                                <p>PH: {{$shipment->phone}}</p>
                              </address>
                            </div>
                            @if($shipment->final_amount != 0)
                            <div class="col-sm-5">
                              <div class="payinfo">
                                <p><strong>Estimated Shipping</strong> <span class="pull-right"><i class="fa fa-rupee"></i>
                                    @php
                                      $estimated = $shipment->estimated - $shipment->package_level_charges - $shipment->wallet;
                                    @endphp
                                    {{number_format($estimated, 2, ".", "")}}
                                </span></p>
                                <p><strong>Package Level Charges</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format($shipment->package_level_charges, 2, ".", "")}}</span></p>

                                @if($shipment->wallet != 0)
                                <p>
                                    <strong>Shoppre Wallet</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format(abs($shipment->wallet), 2, ".", "")}}</span>
                                    <small style="display: block;">
                                        @if($shipment->wallet < 0)
                                          (Amount added)
                                        @elseif($shipment->wallet > 0)
                                          (Amount deducted)
                                        @endif
                                    </small>
                                </p>
                                @endif

                                @if($shipment->option->insurance_amt > 0)
                                <p><strong>Insurance Fee</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format($shipment->option->insurance_amt, 2, ".", "")}}</span></p>
                                @endif

                                @if($shipment->coupon > 0)
                                <p><strong>Coupon Reward</strong> <span class="pull-right">(-) <i class="fa fa-rupee"></i> {{number_format($shipment->coupon, 2, ".", "")}}</span></p>
                                @endif

                                @if($shipment->loyalty > 0)
                                <p><strong>Loyalty Reward</strong> <span class="pull-right">(-) <i class="fa fa-rupee"></i> {{number_format($shipment->loyalty, 2, ".", "")}}</span></p>
                                @endif

                                @if($shipment->payment_gateway_fee > 0)
                                <p><strong>Payment Gateway (PG) Fee</strong> <span class="pull-right">(-) <i class="fa fa-rupee"></i> {{number_format($shipment->payment_gateway_fee, 2, ".", "")}}</span></p>
                                @endif

                                <hr>
                                <p class="total"><strong>Total Cost</strong> <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format($shipment->final_amount, 2, ".", "")}}</span></p>
                              </div>
                            </div>
                            @endif


  <div class="col-sm-12">
    <div class="table-responsive">
    @if(!$packages->isEmpty())
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>From</th>
            <th>Package ID</th>
            <th>Date Received</th>
            <th>Item Values</th>
            <th>Weight</th>
        </tr>
        @php ($i = 0)
        @foreach ($packages as $package)
            <tr>
                <td role="button" data-toggle="collapse" href="#{{$package->order_id}}" aria-expanded="false" align="center"><i class="glyphicon glyphicon-chevron-down"></i></td>
                <td>
                    <strong>{{$package->seller}}</strong><br>
                    {{$package->reference}}
                </td>
                <td>
                    {{$package->order_id}}
                    @if($package->liquid == "1")
                        <span class="spcl_tag">Special Item</span>
                    @endif
                </td>
                <td>{{date('d-m-Y', strtotime($package->received))}}</td>
                <td>
                    <span id="granditemvalue_{{$package->id}}">{{number_format($package->price, 2, ".", "")}}</span>
                </td>
                <td>{{$package->weight}} Kg</td>
            </tr>

            <tr class="collapse" id="{{$package->order_id}}">
                <td class="intable" colspan="8">
                    @php
                        $basic_photo_check = "";
                        $advc_photo_check = "";
                        foreach($package->photoRequests as $photoReq){
                            if($photoReq->type == "standard" && $photoReq->status == "completed"){
                                $basic_photo_check = "yes";
                            }
                            if($photoReq->type == "advanced" && $photoReq->status == "completed"){
                                $advc_photo_check = "yes";
                            }
                        }
                    @endphp

                    @if($advc_photo_check == "yes" || $basic_photo_check == "yes")
                    <a href="#photo_modal_{{$package->id}}" class="btn btn-photo popup-modal" data-package_id="{{$package->id}}" style="float: left;margin-left: 15px;">Photos</a>
                    @endif

                    @if($package->type == 'doc')
                      @if($package->scanRequest && $package->scanRequest->status == 'completed')
                        <a href="#doc_modal_{{$package->id}}" class="btn btn-photo popup-modal" style="float: left;margin-left: 15px;">Docs</a>
                      @endif
                    @endif

                    <table class="table table-bordered" style="margin: 15px auto;width: 97%;clear: both;">
                        <tr>
                            <th>PACKAGE DETAILS</th>
                            <th>QTY</th>
                            <th>VALUE PER UNIT(INR)</th>
                            <th>TOTAL LINE VALUE(INR)</th>
                        </tr>
                        @foreach($package->items as $item)
                        <tr>
                            <td>{{$item->item}}</td>
                            <td>{{$item->quantity}}</td>
                            <td><i class="fa fa-rupee"></i> {{$item->price}}</td>
                            <td><i class="fa fa-rupee"></i> {{$item->total}}</td>
                        </tr>
                        @endforeach
                    </table>

                    @if($advc_photo_check == "yes" || $basic_photo_check == "yes")



                    <div id="photo_modal_{{$package->id}}" class="modal_photo white-popup-block mfp-hide">
                        <div id="photo_slider_{{$package->id}}">
                            @if($basic_photo_check == 'yes')
                                <div class="basicphotos">
                                    <h3>Photos from: <strong><span>{{$package->seller}}</span> | <span>{{$package->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($package->photos as $photo){
                                            if($photo->type == "standard"){
                                                $url = '/uploads/packages/standard/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    @if($advc_photo_check == "yes")
                                    <a href="#" class="btn btn-advc" data-pack="{{$package->id}}">View Additional Photos</a>
                                    @endif
                                </div>
                                @if($advc_photo_check == "yes")
                                <div class="advcphotos noshow">
                                    <h3>Photos from: <strong><span>{{$package->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($package->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    <a href="#" class="btn btn-std" data-pack="{{$package->id}}">View Standard Photos</a>
                                </div>
                                @endif

                            @elseif($advc_photo_check == "yes")
                                <div class="advcphotos">
                                    <h3>Photos from: <strong><span>{{$package->seller}}</span> | <span>{{$package->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($package->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    @if($basic_photo_check == 'yes')
                                    <a href="#" class="btn btn-std" data-pack="{{$package->id}}">View Standard Photos</a>
                                    @endif

                                    @if($basic_photo_check == 'yes')
                                    <div class="basicphotos">
                                        <h3>Photos from: <strong><span>{{$package->seller}}</span> | <span>{{$package->reference}}</span></strong></h3>
                                        <div class="owl-carousel owl-noajax owl-theme">
                                        @php
                                            foreach($package->photos as $photo){
                                                if($photo->type == "standard"){
                                                    $url = '/uploads/packages/standard/'.$photo->package_id.'/'.$photo->name;
                                                    echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                                }
                                            }
                                        @endphp
                                        </div>
                                        <a href="#" class="btn btn-advc" data-pack="{{$package->id}}">View Additional Photos</a>
                                    </div>

                                    @endif
                                </div>
                            @endif
                        </div>
                        <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>

                    </div>

                    @endif


                    @if($package->scanRequest && $package->scanRequest->status == 'completed')
                        <div id="doc_modal_{{$package->id}}" class="modal_photo white-popup-block mfp-hide">
                          <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                          <div class="col-sm-12">
                            <h3>Documents from: <strong><span>{{$package->seller}}</span> | <span>{{$package->reference}}</span></strong></h3>
                            <div class="owl-carousel owl-noajax owl-theme">
                            @php
                                foreach($package->scans as $scan){
                                    $url = '/uploads/scandocs/'.$scan->package_id.'/'.$scan->name;
                                        echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                    }
                            @endphp
                            </div>
                          </div>
                          <div class="clearfix"></div>
                    </div>
                    @endif


                  </td>
                </tr>
            @endforeach
        </table>
        @endif
    </div>
  </div>

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
<!-- Owl Carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/photoreq.js')}}"></script>
<script type="text/javascript">
    $('.slide_trigger').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        $('#slidedown_'+target).slideToggle();
    });
</script>
@endsection
