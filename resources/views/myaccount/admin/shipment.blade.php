@extends('myaccount.admin.layout')

@section('css_style')

  <style type="text/css">
    .shipoptions input {
      margin-bottom: 0;
    }
  </style>

@endsection

@section('content')
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form method="post" action="{{route('admin.proforma-invoice')}}">
          {{ csrf_field() }}
          <div class="modal-body">
            <div class="row">
              <div class="col-m8">
                <h5>Select Your to Generate Invoice</h5>
                <select name="dropdown_carrier" id="" required>
                  <option value="">------Select Carrier------</option>
                  <option value="dhl">DHL</option>
                  <option value="dtdc">DTDC</option>
                  <option value="aipex">AIPEX</option>
                </select>
              </div>
            </div>
            <input type="hidden" name="shipment_id" value="{{$shipment->id}}"/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="btn_cancel_popup">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light green " style="margin-right: 3%">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal -->
  <div class="content-area">
    <div class="breadcrumb-bar">
      <div class="page-title">
        <h1>Shipment Order #{{$shipment->order_id}}</h1>
        <span>Update shipment details</span>
      </div>
      <ul class="admin-breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('admin.shipping')}}">Shipments</a></li>
      </ul>
    </div><!-- Breadcrumb Bar -->

    <div class="widgets-wrapper">
      <div class="row">

        <div class="col s8">
          @if (session('message'))
            <div class="alert alert-success text-center">
              {{ session('message') }}
            </div>
          @endif
          @if (session('error'))
            <div class="alert alert-danger text-center">
              {{ session('error') }}
            </div>
          @endif
          <div class="widget z-depth-1">
            <form method="post" action="{{route('admin.order.update')}}">
              {{ csrf_field() }}
              <div class="input-field col s6">
                <input type="text" class="validate" name="full_name" value="{{$shipment->full_name}}" required>
                <label class="active">Name</label>
                @if ($errors->has('full_name'))
                  <span class="error">{{ $errors->first('full_name') }}</span>
                @endif
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" name="phone" value="{{$shipment->phone}}" required>
                <label class="active">Phone</label>
                @if ($errors->has('phone'))
                  <span class="error">{{ $errors->first('phone') }}</span>
                @endif
              </div>
              <div class="input-field col s12">
                <textarea class="materialize-textarea" name="address" required>{{$shipment->address}}</textarea>
                <label class="active">Address</label>
                @if ($errors->has('address'))
                  <span class="error">{{ $errors->first('address') }}</span>
                @endif
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" value="{{$shipment->count}}" disabled>
                <label class="active">Item Count</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" name="weight" value="{{$shipment->weight}}" required>
                <label class="active">Net Weight</label>
                @if ($errors->has('weight'))
                  <span class="error">{{ $errors->first('weight') }}</span>
                @endif
              </div>
              <div class="input-field col s3">
                <input type="text" class="validate" name="actual_weight" value=  "{{$shipment->actual_weight}}"  required>
                <label class="active">Actual Weight</label>
                @if ($errors->has('actual_weight'))
                  <span class="error">{{ $errors->first('actual_weight') }}</span>
                @endif
              </div>

              <div class="input-field col s3">
                <input type="text" class="validate" name="volumetric_weight" value=  "{{$shipment->volumetric_weight}}"  required>
                <label class="active">Volumetric Weight</label>
                @if ($errors->has('volumetric_weight'))
                  <span class="error">{{ $errors->first('volumetric_weight') }}</span>
                @endif
              </div>

              <div class="input-field col s6">
                <input type="text" class="validate" value="{{$shipment->value}}" disabled>
                <label class="active">Total Item Value</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" value="{{$shipment->sub_total}}" name="sub_total" required>
                <label class="active">Subtotal</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" value="{{$shipment->discount}}" name="discount" required>
                <label class="active">Country Discount</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" name="package_level_charges"
                       value="{{$shipment->package_level_charges}}">
                <label class="active">Package Level Charges</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" value="{{$shipment->pick_up_charge}}" name="pick_up_charge" required>
                <label class="active">Pickup Charge</label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" value="{{$shipment->estimated}}" disabled>
                <label class="active">Estimated Charge</label>
              </div>

              @if($shipment->shipping_status != 'inreview' &&  $shipment->shipping_status != 'confirmation')

                <div class="input-field col s6">
                  <input type="text" class="validate" value="{{$shipment->coupon}}" disabled>
                  <label class="active">Coupon Reward</label>
                </div>
                <div class="input-field col s6">
                  <input type="text" class="validate" value="{{$shipment->loyalty}}" disabled>
                  <label class="active">Loyalty Reward</label>
                </div>
                <div class="input-field col s6">
                  <input type="text" class="validate" value="{{$shipment->payment_gateway_fee}}" disabled>
                  <label class="active">Payment Gateway Fee</label>
                </div>
                <div class="input-field col s6">
                  <input type="text" class="validate" value="{{$shipment->wallet}}" disabled>
                  <label class="active">Wallet Amount Used</label>
                </div>
                <div class="input-field col s6">
                  <input type="text" class="validate" value="{{$shipment->final_amount}}" disabled>
                  <label class="active">Final Amount</label>
                </div>
              @endif
              <div class="input-field col s6">
                <select name="shipment_type" required>
                  <option value="">Please Choose...</option>
                  <option {{$shipment->shipment_type === 'locker' ? "selected" : ""}}
                          value="locker">Locker
                  </option>
                  <option {{$shipment->shipment_type === 'pickup' ? "selected" : ""}}
                          value="pickup">Pick up
                  </option>
                  <option {{$shipment->shipment_type === 'dropoff' ? "selected" : ""}}
                          value="dropoff">Drop off
                  </option>
                </select>
                <label>Shipment Type</label>
                @if ($errors->has('shipment_type'))
                  <span class="error">{{ $errors->first('shipment_type') }}</span>
                @endif
              </div>
              <div class="input-field col s6">
                @if($shipment->shipping_status === 'inreview')
                  <select name="shipping_status">
                    <option {{$shipment->shipping_status === 'inreview' ? "selected" : ""}}
                            value="inreview">Under Review
                    </option>
                    <option {{$shipment->shipping_status === 'confirmation' ? "selected" : ""}}
                            value="confirmation">Submit Payment
                    </option>
                    <option {{$shipment->shipping_status === 'canceled' ? "selected" : ""}}
                            value="canceled">Cancel
                    </option>
                  </select>
                @elseif($shipment->shipping_status === 'confirmation')
                  <select disabled>
                    <option>Awaiting Payment Submission</option>
                  </select>
                @elseif($shipment->shipping_status === 'canceled')
                  <select disabled>
                    <option>Canceled</option>
                  </select>
                @else
                  <select name="shipping_status">
                    <option {{$shipment->shipping_status === 'inqueue' ? "selected disabled" : ""}}
                            value="inqueue">In Queue
                    </option>
                    <option value="pay_failed">Payment Failed</option>
                    <option {{$shipment->shipping_status === 'received' ? "selected disabled" : ""}}
                            value="received">Payment Received
                    </option>
                    <option
                      {{$shipment->shipping_status === 'dispatched' ? "selected disabled" : ""}}
                      value="dispatched">Dispatched
                    </option>
                    <option {{$shipment->shipping_status === 'delivered' ? "selected disabled" : ""}}
                            value="delivered">Delivered
                    </option>
                    <option {{$shipment->shipping_status === 'canceled' ? "selected disabled" : ""}}
                            value="canceled">Cancelled
                    </option>
                    <option {{$shipment->shipping_status === 'refunded' ? "selected disabled" : ""}}
                            value="refunded">Refunded
                    </option>
                  </select>
                @endif
                <label>Shipment Status</label>
                @if ($errors->has('shipping_status'))
                  <span class="error">{{ $errors->first('shipping_status') }}</span>
                @endif
              </div>
              <div class="input-field col s4">
                <div class="switch">
                  <label>
                    No
                    <input type="checkbox" name="is_axis_banned_item"
                           value="1" {{$shipment->is_axis_banned_item === '1' ? "checked" : ""}}>
                    <span class="lever"></span>
                    Yes
                  </label>
                </div>
                <label class="active">It Contains Axis Bank Banned Items</label>
                <br>
                <br>
                <br>
              </div>
              <div class="input-field col s12">
                <input type="hidden" name="ship_request_id" value="{{$shipment->id}}">
                <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col s4">
          <div class="widget z-depth-1">
            <div class="my-profile-widget" style="margin-top: -20px;">
              <div class="profile-widget-head">
                <h3>{{$customer->name}}</h3>
                <i>{{$customer->email}}</i>
                <span>
                                    <img src="{{asset('img/profile.png')}}">
                                </span>
              </div>
              <h4>{{$customer->locker}}</h4>
              @if(!empty($customer->phone))
                <span class="red"><i class="ti-mobile"></i> +{{$customer->code}} {{$customer->phone}}</span>
              @endif

              <p><strong>Shoppre Wallet : </strong>{{number_format($customer->balance->amount, 2, ".", "")}}</p>
              <p><strong>Loyalty Points : </strong>{{$customer->rewards->sum('points')}}</p>

              <div class="col s12">
                <a href="{{route('admin.customer.access', [$customer->id])}}"
                   class="btn waves-effect waves-light amber darken-4" target="_blank">Access Customer Account</a>
              </div>
              @if(!$shipment->mails->isEmpty())
                <div class="col s12">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header active" style="font-size: 14px;">Mail History</div>
                      <div class="collapsible-body" style="padding: 0;">
                        @foreach($shipment->mails as $mail)
                          <p style="margin: 10px;text-align: left;font-size: 13px;">
                            @php
                              switch($mail->condition){
                                  case 'for_confirm':
                                      echo 'Submit Payment';
                                  break;

                                  case 'pay_received':
                                      echo 'Payment Received';
                                  break;

                                  case 'ship_dispatched':
                                      echo 'Dispatched';
                                  break;

                                  case 'ship_delivered':
                                      echo 'Delivered';
                                  break;

                                  case 'pay_failed':
                                      echo 'Payment Failed';
                                  break;
                              }
                            @endphp

                            <i style="float: right;">
                              {{date("M j, Y, g:i a", strtotime($mail->created_at))}}
                            </i>
                          </p>
                        @endforeach
                      </div>
                    </li>
                  </ul>
                </div>
              @endif
              <div style="clear: both;"></div>
              <p><a href="{{route('admin.customer.edit', [$customer->id])}}" target="_blank"><i class="ti-user"></i>
                  View Profile</a></p>
            </div>
          </div>

          @if(!in_array($shipment->shipping_status, ['inreview', 'canceled']))
            <div class="widget z-depth-1">
              @php
                switch ($shipment->payment_gateway_name) {
                    case 'wire':
                        $payment_gateway_name = 'Wire Transfer / Money Order';
                    break;
                     case 'cash':
                        $payment_gateway_name = 'Paper Cash';
                    break;
                    case 'paypal':
                        $payment_gateway_name = 'PAYPAL';
                    break;
                    case 'paytm':
                        $payment_gateway_name = 'PAYTM';
                    break;
                    case 'card':
                        $payment_gateway_name = 'Credit/Debit Card';
                    break;
                    case 'pending':
                        $payment_gateway_name = 'Pending';
                    break;
                     case 'wallet':
                        $payment_gateway_name = 'Wallet';
                    break;
                    default:
                        $payment_gateway_name = '';
                    break;
                }
                switch ($shipment->payment_status) {
                    case 'pending':
                        $payment_status = 'Pending';
                    break;
                    case 'success':
                        $payment_status = 'Success';
                    break;
                    case 'failed':
                        $payment_status = 'Failed';
                    break;
                    default:
                        $payment_status = "";
                    break;
                }
              @endphp
              <p style="margin-bottom: 5px;">
                <strong>Payment Method </strong><br>
                <span>{{$payment_gateway_name}}</span>
              </p>
              <p style="margin-bottom: 5px;">
                <strong>Payment Status </strong><br>
                <span>{{$payment_status}}</span>
              </p>
              @if($shipment->payment_status == 'success')
                <a href="{{route('admin.shipping.invoice', [$shipment->order_id])}}"
                   style="display: block;text-align: center;padding: 10px;color: #fff;background: #0190c8;"
                   target="_blank">View Invoice</a>
              @endif

            </div>
          @endif
          <div class="widget z-depth-1">
            <a href="javascript:void(0)" style="display: block;text-align: center;
                         padding: 10px;color: #fff;background: #ff6f00 !important;" id="btn_proforma_invoice">
              Proforma Invoice
            </a>
          </div>
        </div>

        @if(!empty($shipment->tracking))

          <div class="col s12">
            <div class="widget z-depth-2">
              <div class="widget-title">
                <h3>Shipment Tracking</h3>
                <p>Shipping tracking information</p>
              </div>
              <div class="projects-table">
                <form method="post" action="{{route('admin.shipping.tracking')}}">
                  {{csrf_field()}}
                  <table class="table">
                    <tr>
                      <td>
                        <div class="input-field">
                          <input type="text" name="ship_request_date" class="validate"
                                 value="{{$shipment->tracking->ship_request_date}}" required>
                          <label class="active">Ship Date</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field">
                          <input type="text" name="carrier" class="validate" value="{{$shipment->tracking->carrier}}"
                                 required>
                          <label class="active">Carrier</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field">
                          <input type="text" name="box_nos" class="validate" value="{{$shipment->tracking->box_nos}}"
                                 required>
                          <label class="active">No. of Boxes</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field">
                          <input type="text" name="package_weight" class="validate"
                                 value="{{$shipment->tracking->package_weight}}" required>
                          <label class="active">Package Weight</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field">
                          <input type="text" name="package_value" class="validate"
                                 value="{{$shipment->tracking->package_value}}" required>
                          <label class="active">Package Value</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <div class="input-field">
                          <input type="text" name="tracking_id" class="validate"
                                 value="{{$shipment->tracking->tracking_id}}" required>
                          <label class="active">Tracking ID</label>
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="input-field">
                          <input type="text" name="tracking_url" class="validate"
                                 value="{{$shipment->tracking->tracking_url}}" required>
                          <label class="active">Tracking URL</label>
                        </div>
                      </td>
                      <td>
                        <input type="hidden" name="trackingid" value="{{$shipment->tracking->id}}">
                        <button type="submit" class="btn waves-effect waves-light green">Update</button>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        @endif

        @if($shipment->option)
          @php
            $option = $shipment->option;
          @endphp

          <div class="col s12">
            <div class="widget z-depth-2">
              <div class="widget-title">
                <h3>Shipment Options</h3>
                <p>Shipment options requested</p>
              </div>
              <div class="projects-table shipoptions">
                <form method="post" action="{{route('admin.shipping.options.update')}}">
                  {{ csrf_field() }}
                  <table class="table">
                    <tr>
                      <th width="50px;"></th>
                      <th>Options</th>
                      <th width="200px;">Cost</th>
                    </tr>
                    @if($option->repack == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->repack == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Repack items</td>
                        <td>
                          <input
                            type="text"
                            name="repack_amt"
                            value="{{$option->repack_amt}}"
                            readonly="readonly">
                        </td>
                      </tr>
                    @endif

                    @if($option->sticker == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->sticker == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Fragile stickers</td>
                        <td><input
                            type="text"
                            name="sticker_amt"
                            value="{{$option->sticker_amt}}"
                            readonly="readonly"></td>
                      </tr>
                    @endif

                    @if($option->extrapack == 1)

                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->extrapack == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Add extra packing material</td>
                        <td><input
                            type="text"
                            name="extrapack_amt"
                            value="{{$option->extrapack_amt}}"
                            readonly="readonly"></td>
                      </tr>
                    @endif

                    @if($option->original == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->original == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Ship original boxes</td>
                        <td>{{$option->original_amt}}</td>
                      </tr>
                    @endif

                    @if($option->consolid == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->consolid == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Package consolidation</td>
                        <td>
                          <input type="text" name="consolid_amt" value="{{$option->consolid_amt}}"
                                 readonly="readonly">
                        </td>
                      </tr>
                    @endif

                    @if($option->gift_wrap == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->gift_wrap == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Gift Wrap</td>
                        <td>
                          <input type="text" name="giftwrap_amt" value="{{$option->giftwrap_amt}}" readonly="readonly">
                        </td>
                      </tr>
                    @endif

                    @if($option->gift_note == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->gift_note == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Gift Note<p
                            style="margin: 5px 0;font-size: 14px;font-style: italic;">{{$option->giftnote_txt}}</p></td>
                        <td>
                          <input type="text" name="giftnote_amt" value="{{$option->giftnote_amt}}" readonly="readonly">
                        </td>
                      </tr>
                    @endif

                    @if($option->insurance == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->insurance == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Insurance</td>
                        <td>
                          <input type="text" name="insurance_amt" value="{{$option->insurance_amt}}"
                                 readonly="readonly">
                        </td>
                      </tr>
                    @endif

                    @if($option->liquid == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->liquid == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td>Liquid</td>
                        <td>
                          {{$option->liquid_amt}}
                        </td>
                      </tr>
                    @endif

                    {{--@if($option->overweight == 1)--}}
                      {{--<tr>--}}
                        {{--<td class="text-center">--}}
                          {{--@php--}}
                            {{--$marking  = ($option->overweight == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';--}}
                            {{--echo $marking;--}}
                          {{--@endphp--}}
                        {{--</td>--}}
                        {{--<td>Overweight</td>--}}
                        {{--<td>--}}
                          {{--{{$option->overweight_amt}}--}}
                        {{--</td>--}}
                      {{--</tr>--}}
                    {{--@endif--}}

                    @if($option->profoma_personal == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->profoma_personal == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td colspan="2">Mark as personal use only</td>
                      </tr>
                    @endif

                    @if($option->invoice_include == 1)
                      <tr>
                        <td class="text-center">
                          @php
                            $marking  = ($option->invoice_include == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                            echo $marking;
                          @endphp
                        </td>
                        <td colspan="2">Include a printed profoma invoice</td>
                      </tr>
                    @endif

                    @if($option->max_weight > 0)
                      <tr>
                        <td colspan="2">Maximum Weight</td>
                        <td>
                          {{$option->max_weight}} Kg
                        </td>
                      </tr>
                    @endif

                    @if($option->profoma_taxid)
                      <tr>
                        <td colspan="2">Profoma Invoice TAX ID</td>
                        <td>
                          {{$option->profoma_taxid}}
                        </td>
                      </tr>
                    @endif
                    @if($shipment->shipping_status == 'inreview')
                      <tr>
                        <td colspan="2"></td>
                        <td>
                          <input type="hidden" name="ship_request_id" value="{{$shipment->id}}">
                          <input type="hidden" name="optionid" value="{{$option->id}}">
                          <button type="submit" class="btn waves-effect waves-light green">
                            Update Charges
                          </button>
                        </td>
                      </tr>
                    @endif
                  </table>
                </form>
              </div>
            </div>
          </div>
        @endif
        <div class="col s12">
          <div class="widget z-depth-2">
            <div class="widget-title">
              <h3>Packages in shipment</h3>
              <p>List of packages comes under this shipment</p>
            </div>
            <div class="projects-table">
              <table class="table">
                <tr>
                  <th>Id</th>
                  <th>From</th>
                  <th>Package ID</th>
                  <th>Total Value</th>
                  <th>Weight</th>
                  <th width="50px"></th>
                </tr>
                @foreach($packages as $package)
                  <tr>
                    <td>{{$package->id}}</td>
                    <td><strong>{{$package->seller}}</strong><br>{{$package->reference}}</td>
                    <td>{{$package->order_id}}</td>
                    <td>INR {{$package->price}}</td>
                    <td>{{$package->weight}} Kg.</td>
                    <td><a href="{{route('admin.package.edit', [$package->id])}}"><i class="ti-settings"></i></a></td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
        <a href="{{route('admin.shipping.delete', [$shipment->id])}}"
           class="btn waves-effect waves-light red darken-2 pull-right">
          Delete Shipment #{{$shipment->order_id}}
        </a>
      </div>
    </div>
  </div><!-- Content Area -->

@endsection
@section('js_script')
  <script type="text/javascript">
    $(document).ready(function () {
      $("#btn_proforma_invoice").click(function () {
        $('#myModal').modal('open');
      });
      $('#btn_cancel_popup').click(function () {
        $('#myModal').modal('close');
      });
    });
  </script>
@endsection
