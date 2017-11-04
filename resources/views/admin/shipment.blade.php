@extends('admin.layout')

@section('css_style')

@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Shipment Order</h1>
                <span>Update shipment details</span>
            </div>
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
                                    <input type="text" class="validate" name="fullname" value="{{$shipment->fullname}}" required>
                                    <label class="active">Name</label>
                                    @if ($errors->has('fullname'))
                                        <span class="error">{{ $errors->first('fullname') }}</span>
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
                                    <label class="active">Weight</label>
                                    @if ($errors->has('weight'))
                                        <span class="error">{{ $errors->first('weight') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->value}}" disabled>
                                    <label class="active">Total Item Value</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->subtotal}}" disabled>
                                    <label class="active">Subtotal</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->discount}}" disabled>
                                    <label class="active">Country Discount</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="packlevel" value="{{$shipment->packlevel}}">
                                    <label class="active">Package Level Charges</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->estimated}}" disabled>
                                    <label class="active">Estimated Charge</label>
                                </div>

                                @if($shipment->shipstatus != 'inreview' )
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->tax}}" disabled>
                                    <label class="active">Tax Amount</label>
                                </div>

                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->coupon}}" disabled>
                                    <label class="active">Coupon Reward</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->loyalty}}" disabled>
                                    <label class="active">Loyalty Reward</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="{{$shipment->finalamount}}" disabled>
                                    <label class="active">Final Amount</label>
                                </div>
                                @endif

                                <div class="input-field col s6">
                                    @if($shipment->shipstatus === 'inreview')
                                        <select name="shipstatus">
                                            <option {{$shipment->shipstatus === 'inreview' ? "selected" : ""}} value="inreview">Under Review</option>
                                            <option {{$shipment->shipstatus === 'confirmation' ? "selected" : ""}} value="confirmation">Customer Confirmation</option>
                                        </select>
                                    @elseif($shipment->shipstatus === 'confirmation')
                                        <select disabled>
                                            <option>Customer Confirmation Pending</option>
                                        </select>
                                    @elseif($shipment->shipstatus === 'canceled')
                                        <select disabled>
                                            <option>Canceled</option>
                                        </select>
                                    @else
                                        <select name="shipstatus">
                                            <option {{$shipment->shipstatus === 'inqueue' ? "selected" : ""}} value="inqueue">In Queue</option>
                                            <option {{$shipment->shipstatus === 'dispatched' ? "selected" : ""}} value="dispatched">Dispatched</option>
                                            <option {{$shipment->shipstatus === 'delivered' ? "selected" : ""}} value="delivered">Delivered</option>
                                            <option {{$shipment->shipstatus === 'canceled' ? "selected" : ""}} value="canceled">Canceled</option>
                                        </select>
                                    @endif
                                    <label>Shipment Status</label>
                                    @if ($errors->has('shipstatus'))
                                        <span class="error">{{ $errors->first('shipstatus') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s12">
                                    <input type="hidden" name="shipid" value="{{$shipment->id}}">
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
                                <p><a href="#"><i class="ti-user"></i> View Profile</a></p>
                            </div>
                        </div>

                        <div class="widget z-depth-1">
                            @php
                                switch ($shipment->payoption) {
                                    case 'wire':
                                        $payoption = 'Wire Transfer / Money Order';
                                    break;
                                    case 'pending':
                                        $payoption = 'Pending';
                                    break;
                                    default:
                                        $payoption = '';
                                    break;
                                }
                                switch ($shipment->paystatus) {
                                    case 'pending':
                                        $paystatus = 'Pending';
                                    break;
                                    case 'success':
                                        $paystatus = 'Success';
                                    break;
                                    case 'failed':
                                        $paystatus = 'Failed';
                                    break;
                                    default:
                                        $paystatus = "";
                                    break;
                                }
                            @endphp
                            <p style="margin-bottom: 5px;">
                                <strong>Payment Method </strong><br>
                                <span>{{$payoption}}</span>
                            </p>
                            <p style="margin-bottom: 5px;">
                                <strong>Payment Status </strong><br>
                                <span>{{$paystatus}}</span>
                            </p>
                        </div>
                    </div>

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
                            <div class="projects-table">
                                <table class="table">
                                      <tr>
                                          <th width="50px;"></th>
                                          <th>Options</th>
                                          <th>Cost</th>
                                      </tr>
                                      <tr>
                                          <td class="text-center">
                                            @php
                                              $marking  = ($option->repack == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                              echo $marking;
                                            @endphp
                                          </td>
                                          <td>Repack items</td>
                                          <td>{{$option->repack_amt}}</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">
                                            @php
                                              $marking  = ($option->sticker == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                              echo $marking;
                                            @endphp
                                          </td>
                                          <td>Fragile stikers</td>
                                          <td>{{$option->sticker_amt}}</td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">
                                            @php
                                              $marking  = ($option->extrapack == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                              echo $marking;
                                            @endphp
                                          </td>
                                          <td>Add extra packing material</td>
                                          <td>{{$option->extrapack_amt}}</td>
                                      </tr>
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
                                      <tr>
                                          <td class="text-center">
                                            @php
                                              $marking  = ($option->consolid == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                              echo $marking;
                                            @endphp
                                          </td>
                                          <td>Package consolidation</td>
                                          <td>
                                            {{$option->consolid_amt}}
                                          </td>
                                      </tr>
                                  </table>
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
                                    <th>From</th>
                                    <th>Package ID</th>
                                    <th>Total Value</th>
                                    <th>Weight</th>
                                    <th width="50px"></th>
                                  </tr>
                                  @foreach($packages as $package)
                                  <tr>
                                    <td><strong>{{$package->seller}}</strong><br>{{$package->refference}}</td>
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
                
            </div>
        </div>
    </div><!-- Content Area -->

@endsection

@section('js_script')

@endsection