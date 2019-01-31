@extends('myaccount.layout')

@section('title', '- Submit Payment')

@section('css_style')
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')

    <section class="shipprocess">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <div class="longblock active">
                        <h4>1. Delivery address <a href="javascript:void(0)" class="tooltipkey" style="font-size: 20px;"
                                                   title="<p>Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000) to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment.</p>"><i
                                        class="fa fa-question-circle-o"></i></a></h4>
                        <div class="info_deliver">
                            <div class="col-sm-10">
                                <p><strong>{{$shipment->full_name}}</strong></p>
                                <p>{{$shipment->address}}</p>
                                <p>PH: {{$shipment->phone}}</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="longblock active">
                        <h4>2. Shipment summary</h4>
                        <div class="info_summer">
                            <div class="col-sm-10">
                                <p>{{$packages->count()}} Packages in this shipment</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="changeSummery">
                            <div class="edit">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <tr>
                                            <th></th>
                                            <th>From</th>
                                            <th>Package ID</th>
                                            <th>Total Value</th>
                                            <th>Weight</th>
                                        </tr>

                                        @php($charges = array('storage' => 0, 'photo' => 0, 'pickup' => 0, 'handling' => 0, 'doc' => 0, 'address' => 0, 'split' => 0, 'scan_doc' => 0))

                                        @foreach($packages as $package)
                                            <tr>
                                                <td><a href="#" data-target="slide{{$package->id}}"
                                                       class="expand slide_trigger"><i
                                                                class="fa fa-angle-double-down"></i></a></td>
                                                <td><strong>{{$package->seller}}</strong><br>{{$package->reference}}
                                                </td>
                                                <td>{{$package->order_id}}</td>
                                                <td><i class="fa fa-rupee"></i> {{$package->price}}</td>
                                                <td>{{$package->weight}} Kg.</td>
                                            </tr>
                                            <tr id="slide{{$package->id}}" style="display:none">
                                                <td colspan="7">
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
                                                        <a href="#photo_modal_{{$package->id}}"
                                                           class="btn btn-photo popup-modal"
                                                           data-package_id="{{$package->id}}"
                                                           style="float: left;border: 1px solid;margin: 10px;padding: 5px 15px;margin-left: 0;">Photos</a>
                                                    @endif

                                                    @if($package->type == 'doc')
                                                        @if($package->scanRequest && $package->scanRequest->status == 'completed')
                                                            <a href="#doc_modal_{{$package->id}}"
                                                               class="btn btn-photo popup-modal"
                                                               style="float: left;border: 1px solid;margin: 10px;padding: 5px 15px;margin-left: 0;">Docs</a>
                                                        @endif
                                                    @endif

                                                    <table class="intable table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($package->items as $item)
                                                            <tr>
                                                                <td>{{$item->item}}</td>
                                                                <td>{{$item->quantity}}</td>
                                                                <td><i class="fa fa-rupee"></i> {{$item->price}}</td>
                                                                <td>
                                                                    <i class="fa fa-rupee"></i> {{$item->quantity * $item->price}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                    @if($advc_photo_check == "yes" || $basic_photo_check == "yes")

                                                        <div id="photo_modal_{{$package->id}}"
                                                             class="modal_photo white-popup-block mfp-hide">
                                                            <div id="photo_slider_{{$package->id}}">
                                                                @if($basic_photo_check == 'yes')
                                                                    <div class="basicphotos">
                                                                        <h3>Photos from:
                                                                            <strong><span>{{$package->seller}}</span> |
                                                                                <span>{{$package->reference}}</span></strong>
                                                                        </h3>
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
                                                                            <a href="#" class="btn btn-advc"
                                                                               data-pack="{{$package->id}}">View
                                                                                Additional Photos</a>
                                                                        @endif
                                                                    </div>
                                                                    @if($advc_photo_check == "yes")
                                                                        <div class="advcphotos noshow">
                                                                            <h3>Photos from:
                                                                                <strong>                                                                                    |
                                                                                    <span>{{$package->reference}}</span></strong>
                                                                            </h3>
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
                                                                            <a href="#" class="btn btn-std"
                                                                               data-pack="{{$package->id}}">View
                                                                                Standard Photos</a>
                                                                        </div>
                                                                    @endif

                                                                @elseif($advc_photo_check == "yes")
                                                                    <div class="advcphotos">
                                                                        <h3>Photos from:
                                                                            <strong><span>{{$package->seller}}</span> |
                                                                                <span>{{$package->reference}}</span></strong>
                                                                        </h3>
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
                                                                            <a href="#" class="btn btn-std"
                                                                               data-pack="{{$package->id}}">View
                                                                                Standard Photos</a>
                                                                        @endif

                                                                        @if($basic_photo_check == 'yes')
                                                                            <div class="basicphotos">
                                                                                <h3>Photos from:
                                                                                    <strong><span>{{$package->seller}}</span>
                                                                                        |
                                                                                        <span>{{$package->reference}}</span></strong>
                                                                                </h3>
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
                                                                                <a href="#" class="btn btn-advc"
                                                                                   data-pack="{{$package->id}}">View
                                                                                    Additional Photos</a>
                                                                            </div>

                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <a class="btn btn-close popup-modal-dismiss" href="#"><i
                                                                        class="fa fa-times"></i></a>

                                                        </div>

                                                    @endif

                                                    @if($package->scanRequest && $package->scanRequest->status == 'completed')

                                                        <div id="doc_modal_{{$package->id}}"
                                                             class="modal_photo white-popup-block mfp-hide">
                                                            <a class="btn btn-close popup-modal-dismiss" href="#"><i
                                                                        class="fa fa-times"></i></a>
                                                            <div class="col-sm-12">
                                                                <h3>Documents from:
                                                                    <strong><span>{{$package->seller}}</span> |
                                                                        <span>{{$package->reference}}</span></strong>
                                                                </h3>
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
                                            @php
                                                $charges['storage'] += $package->charges->storage;
                                                $charges['photo'] += $package->charges->basic_photo + $package->charges->advance_photo;
                                                $charges['pickup'] += $package->charges->pickup;
                                                $charges['handling'] += $package->charges->handling;
                                                $charges['doc'] += $package->charges->doc;
                                                $charges['scan_doc'] += $package->charges->scan_doc;
                                                $charges['split'] += $package->charges->split;
                                                $charges['address'] += $package->charges->address;
                                            @endphp
                                        @endforeach
                                        <tr class="totalbtm">
                                            <td></td>
                                            <td></td>
                                            <td>Shipment Totals</td>
                                            <td>
                                                <i class="fa fa-rupee"></i> {{number_format($packages->sum('price'), 2, ".", "")}}
                                            </td>
                                            <td>{{$packages->sum('weight')}} Kg.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="longblock active">
                        <h4>3. Payment options</h4>
                        <div id="changePayment">
                          <div class="edit">
                            <div class="radio">
                                <label>
                                    @if($payment['payment_gateway_name'] == 'wire')
                                        <input type="radio" name="payment_gateway_name" value="wire" checked>
                                    @else
                                        <input type="radio" name="payment_gateway_name"
                                               value="wire" {{$shipment->axis_banned_item == 1?'checked':''}}>
                                    @endif
                                    <span class="label">Wire transfer/money order</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    @if($payment['payment_gateway_name'] == 'cash')
                                        <input type="radio" name="payment_gateway_name" value="cash" checked>
                                    @else
                                        <input type="radio" name="payment_gateway_name"
                                               value="cash" {{$shipment->axis_banned_item == 1?'checked':''}}>
                                    @endif
                                    <span class="label">Paper Cash</span>
                                </label>
                            </div>
                          @if($wallet_amount >= $shipment->estimated)
                          <div class="radio">
                            <label>
                              @if($payment['payment_gateway_name'] == 'wallet')
                                <input type="radio" name="payment_gateway_name" value="wallet" checked>
                              @else
                                <input type="radio" name="payment_gateway_name" value="wallet" >
                              @endif
                              <span class="label">Wallet - <i class="fa fa-inr"></i>&nbsp{{$wallet_amount}}</span>
                            </label>
                          </div>
                          @endif
                            <div class="radio">
                                <label>
                                    @if($payment['payment_gateway_name'] == 'card' && $shipment->is_axis_banned_item == 0)
                                        <input type="radio" name="payment_gateway_name" value="card" checked>
                                        <span class="label">Credit/Debit Card
                                  </span>
                                    @else
                                        <input type="radio" name="payment_gateway_name"
                                               value="card" {{$shipment->is_axis_banned_item == 1?'disabled':''}}>
                                        <span class="label">Credit/Debit Card
                                            @if($shipment->is_axis_banned_item == 1)
                                                <a href="javascript:void(0)" class="tooltipkey" title="<p>This shipment
                                                have special items which are prohibited by debit/credit card payment
                                                gateways.So you can not choose this payment method.Use another option
                                                to make payment.</p>">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            @endif
                                  </span>
                                    @endif
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    @if($payment['payment_gateway_name'] == 'paypal')
                                        <input type="radio" name="payment_gateway_name" value="paypal" checked>
                                    @else
                                        <input type="radio" name="payment_gateway_name" value="paypal">
                                    @endif
                                    <span class="label" style="text-transform: none;">Paypal (10% Extra Payment Gateway Charge) - International PayPal/Bank Accounts Only</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    @if($payment['payment_gateway_name'] == 'paytm')
                                        <input type="radio" name="payment_gateway_name" value="paytm" checked>
                                    @else
                                        <input type="radio" name="payment_gateway_name" value="paytm">
                                    @endif
                                    <span class="label" style="text-transform: none;">Paytm (3% Extra Payment Gateway Charge) - Indian PayTm/Bank Accounts Only</span>
                                </label>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif
                        @if (session('error_promo'))
                            <div class="alert alert-danger text-center">
                                {{ session('error_promo') }}
                            </div>
                        @endif
                        @if ($promo_status == "cashback_success")
                            <div class="alert alert-success text-center">
                               Promo code {{$cpn_name}} applied INR  {{$cpn_amount}} will be credit in your wallet after shipment dispatched.
                            </div>
                        @endif
                        @if ($promo_status == "discount_success")
                            <div class="alert alert-success text-center">
                                Promo code {{$cpn_name}} applied.
                            </div>
                        @endif
                        @if ($promo_status == "promo_expired")
                            <div class="alert alert-danger text-center">
                                Promo code expired that you applied last.
                            </div>
                        @endif

                    <div class="shipsidebar">
                        <div class="form-group">
                            <form action="{{route('customer.promos.apply')}}" method="post">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" name="promocode"
                                           placeholder="Enter Promo Code" class="form-control"
                                            style="font-size: 11px;">
                                    @if (session('promoerror'))
                                        <div class="alert-danger"
                                             style="font-size: 13px;border: 0;margin: 5px 0;">{{ session('promoerror') }}</div>
                                    @endif
                                    <input type="hidden" name="hdn_ship_id" value="{{$shipment->order_id}}">
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-shoppre">
                                        Apply
                                    </button>
                                </div>
                              </div>
                            </form>
                        </div>
                        <p>Promo Code Applicable on Basic Shipping Costs</p>
                        <div class="dash-sidecost">
                            <h3 class="title">SHIPPING CHARGES SUMMARY</h3>
                            <p>Total Value of items <span class="pull-right">
                      <i class="fa fa-rupee"></i>
                      <span class="totalvalue">{{number_format($shipment->value, 2, ".", "")}}</span>
                      </span>
                            </p>
                            <p>Total Weight <a href="javascript:void(0)" class="tooltipkey" title="<p>All International carriers base their billable shipping rates on the greater of Actual Weight and Dimensional Weight.<p>
                    <p><u>Actual weight</u> is the weight of the package when put on a scale.</p>
                    <p><u>Dimensional weight</u> is based on the size of the package. It is calculated by multiplying the dimensions of the item.</p>
                    For International Shipments:
                    <p>Dimensional Weight = Length x Width x Height (in cm) / 5000</p>
                    For Domestic Shipments:
                    <p>Dimensional Weight = Length x Width x Height (in cm) / 4000</p>"><i
                                            class="fa fa-question-circle-o"></i></a><span class="pull-right">
                      <span class="totalweight">{{$shipment->weight}}</span> Kg.
                      </span>
                            </p>
                            <p>Packages <span class="pull-right">
                      <span class="totalcount">{{$shipment->count}}</span>
                      </span>
                            </p>
                            <hr>
                            <h4>Subtotal: <span class="pull-right"><i class="fa fa-rupee"></i> <span
                                            class="sub_total">{{number_format($shipment->sub_total, 2, ".", "")}}</span></span>
                            </h4>
                            <h4>Shipping Discount <a href="javascript:void(0)" class="tooltipkey"
                                                     title="<p>Apart from Country-based shipping discounts, Additional discounts may apply to Shoppre Membership Partners and to Shoppre Loyalty Members (Gold and above).</p>"><i
                                            class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                            class="fa fa-rupee"></i> <span
                                            class="discount">{{number_format($shipment->discount, 2, ".", "")}}</span></span>
                            </h4>
                          @if(Request::get('wallet') == 1 || $payment['wallet'] < 0)
                            <h4>Shoppre Wallet <a href="javascript:void(0)" class="tooltipkey" title="<p>Shoppre can add or deduct cash from your Shoppre Wallet depending on the situation.</p>
                                <p>For eg: Your Personal Shopper balance will be settled here in your Shoppre Wallet.</p>
                                <p>- If the amount is <i>positive</i>, it means that you own this much cash, and this amount will be deducted from the final charges.</p>
                                <p>- If the amount is <i>negative</i>, it means that this amount will be added to the final charges.</p>"><i
                                  class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                  class="fa fa-rupee"></i> <span
                                  class="discount">{{number_format(abs($payment['wallet']), 2, ".", "")}}</span></span>
                              <small style="display: block;">
                                @if($payment['wallet'] < 0)
                                  (Amount to be added)
                                @elseif($payment['wallet'] > 0)
                                  (Amount to be deducted)
                                @endif
                              </small>
                            </h4>
                          @endif
                          @if($shipment->pick_up_charge > 0)
                            <h4>Pickup Charge <span class="pull-right"><i class="fa fa-rupee"></i> <span
                                  class="estimated">{{$shipment->pick_up_charge}}</span></span>
                            </h4>
                          @endif
                            <hr>
                            @php
                                $estimated = $shipment->estimated - $shipment->package_level_charges - $payment['wallet'];
                            @endphp
                            <h4>Basic Shipping Costs <span class="pull-right"><i class="fa fa-rupee"></i> <span
                                            class="estimated">{{number_format($estimated, 2, ".", "")}}</span></span></h4>
                        </div>
                        @if($shipment->package_level_charges > 0)
                            <div class="dash-sidecost">
                                <h3 class="title">PACKAGE LEVEL CHARGES SUMMARY</h3>
                                @if($charges['storage'] > 0)
                                    <p>Additional Storage Fee <a href="javascript:void(0)" class="tooltipkey"
                                                                 title="Shoppre offers FREE storage up to 20 days*. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is  shipped, picked-up,  discarded or returned to the sender. *No. of days may be more for Membership Partners, and Loyalty Members (Silver and above)."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['storage'], 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($charges['photo'] > 0)
                                    <p>Photo Charges <a href="javascript:void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 50. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <p>Scan Documents: We can scan your documents (2 kgs and below) for a cost of INR 40/page (minimum INR 100).</p>"><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['photo'], 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($charges['pickup'] > 0)
                                    <p>Pick-up Service <a href="javascript:void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['pickup'], 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($charges['split'] > 0)
                                    <p>Split Package <a href="javascript:void(0)" class="tooltipkey" title="Shoppre can split your package if it contains more than one item, and if you wish to separate them into multiple packages. You can split your package and discard an item, return it to the sender, ship it at a different time or to a different address. There is a cost of INR 200 per new package* created.<br>
                      For eg. if you have splitted your package into 3, you will be charged INR 400 <br>
                      <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['split'], 2, ".", "")}}</span>
                                    </p>
                                @endif

                                @if($charges['handling'] > 0)
                                    <p>Special Handling Fee <a href="javascript:void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you.
                        All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                        Less than 5 kg = INR 1000 per shipment<br>
                        5 kg to 10 kg = INR 1500 per shipment<br>
                        Above 10 kg = INR 2500 per shipment<br>
                        The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['handling'], 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($charges['doc'] > 0)
                                    <p>Receive Mail <a href="javascript:void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['doc'], 2, ".", "")}}</span>
                                    </p>
                                @endif

                                @if($charges['scan_doc'] > 0)
                                    <p>Scan Document <a href="javascript:void(0)" class="tooltipkey" title="<p>You can scan your documents (all/some pages of your document) for a charge of INR 40.00/day (Minimum INR 100)*</p><small>* Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>
                        "><i class="fa fa-question-circle-o"></i></a> <span
                                                class="pull-right">{{number_format($charges['scan_doc'], 2, ".", "")}}</span>
                                    </p>
                                @endif


                                @if($charges['address'] > 0)
                                    <p>Address Correction <a href="javascript:void(0)" class="tooltipkey"
                                                             title="Incoming Packages: There is an INR 200 fee for packages that arrive at our distribution center with an incomplete address. You can avoid these fees by making sure the seller properly addresses your order. Outgoing Packages: Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000)* to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment. "><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($charges['address'], 2, ".", "")}}</span>
                                    </p>
                                @endif

                                @php
                                    $option = $shipment->option;
                                @endphp

                                @if($option->repack_amt > 0)
                                    <p>Discard shoe boxes <a href="javascript:void(0)" class="tooltipkey"
                                                             title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment will be incurred to discard shoe boxes)."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->repack_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->sticker_amt > 0)
                                    <p>Fragile stikers <a href="javascript:void(0)" class="tooltipkey"
                                                          title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 100 per shipment."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->sticker_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->extrapack_amt > 0)
                                    <p>Extra packing material <a href="javascript:void(0)" class="tooltipkey"
                                                                 title="Additional protective packaging will be added to every shipment at the cost of INR 500.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->extrapack_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->original_amt > 0)
                                    <p>Ship in original boxes <a href="javascript:void(0)" class="tooltipkey"
                                                                 title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->original_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->giftwrap_amt > 0)
                                    <p>Gift wrap <a href="javascript:void(0)" class="tooltipkey"
                                                    title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->giftwrap_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->giftnote_amt > 0)
                                    <p>Gift note <a href="javascript:void(0)" class="tooltipkey"
                                                    title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->giftnote_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->consolid_amt > 0)
                                    <p>Package consolidation <a href="javascript:void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate).<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->consolid_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif
                                @if($option->liquid_amt > 0)
                                    <p>Special Package Clearance Fee <a href="javascript:void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                                    0.5 kg to 5 kg = INR 1392.4 per shipment*<br>
                                    5 kg to 10 kg = INR 3009 per shipment*<br>
                                    10 kg to 15 kg = INR 5369 per shipment*<br>
                                    Above 15 kg = INR 7729 per shipment*<br>
                                    The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i
                                                    class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i
                                                    class="fa fa-rupee"></i> {{number_format($option->liquid_amt, 2, ".", "")}}</span>
                                    </p>
                                @endif

                                {{--@if($option->overweight_amt > 0)--}}
                                    {{--<p>Overweight Clearance Fee <a href="javascript:void(0)" class="tooltipkey"--}}
                                                                   {{--title="Any shipment which weighs more than 30 kg will be considered as a commercial shipment and will incur a custom clearance cost of INR 2500. If you would like to restrict a Maximum weight of individual boxes in a shipment, you can input the “maximum weight per shipment” of your choice, under your Shipping Preferences. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)."><i--}}
                                                    {{--class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i--}}
                                                    {{--class="fa fa-rupee"></i> {{number_format($option->overweight_amt, 2, ".", "")}}</span>--}}
                                    {{--</p>--}}
                                {{--@endif--}}

                                <hr>
                                <h4>Package Level Charges : <span class="pull-right"><i
                                                class="fa fa-rupee"></i> {{number_format($shipment->package_level_charges, 2, ".", "")}}</span>
                                </h4>
                            </div>

                        @endif

                        <div class="dash-sidecost">
                            <h3 class="title">FINAL CHARGES</h3>

                            <h4>Basic Shipping Costs <span class="pull-right"><i class="fa fa-rupee"></i> <span
                                            class="estimated">{{number_format($estimated, 2, ".", "")}}</span></span></h4>

                            <h4>Package Level Charges <a href="javascript:void(0)" class="tooltipkey" title="<p>Shoppre includes all of the service charges (apart from shipping charges) under Package Level Charges. The break-up is as shown above.</p>
                        "><i class="fa fa-question-circle-o"></i></a> : <span class="pull-right"><i
                                            class="fa fa-rupee"></i> {{number_format($shipment->package_level_charges, 2, ".", "")}}</span>
                            </h4>

                            <h4>Coupon Discount <a href="javascript:void(0)" class="tooltipkey"
                                                   title="<p>This Discount is applicable on Basic Shipping Costs only.</p>"><i
                                            class="fa fa-question-circle-o"></i></a> : <span class="pull-right">(-) <i
                                            class="fa fa-rupee"></i> {{number_format($payment['coupon'], 2, ".", "")}}</span>
                            </h4>

                            <h4>Loyalty Rewards <a href="javascript:void(0)" class="tooltipkey" title="<p>For every 1,000 Shoppre Loyalty Points you earn, a credit of INR 100 will automatically be applied to your next shipment</p>
                        "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">(-) <i
                                            class="fa fa-rupee"></i> {{number_format($payment['loyalty'], 2, ".", "")}}</span>
                            </h4>

                            @if($payment['payment_gateway_fee'] > 0)
                                <h4>Payment Gateway (PG) Fee: <span class="pull-right"><i
                                                class="fa fa-rupee"></i>
                                    {{number_format($payment['payment_gateway_fee'], 2, ".", "")}}
                                  </span>
                                </h4>
                            @endif
                        </div>
                      @if($wallet_amount < $shipment->estimated && $wallet_amount !=0)
                      <div class="checkbox chkbox_background">
                        <label class="label-width">
                            @if($wallet_amount >= 0)
                            <input type="checkbox" name="wallet" value="1"
                              {{Request::get('wallet') == 1 ? 'checked' : '' }}>
                            @elseif($wallet_amount < 0)
                            <input type="checkbox" name="wallet" value="1"
                                   {{Request::get('wallet') == 1 ? 'checked' : 'checked' }} disabled="disabled">
                            @endif
                              <h4 class="amount-margin">Shoppre Wallet &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <span class="pull-right"><i class="fa fa-rupee"></i> <span
                                    class="estimated">{{$wallet_amount}}</span></span></h4>
                        </label>
                      </div>
                      @endif
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--@if(Request::get('insurance') == 2 || Request::get('insurance') == null)--}}
                                    {{--<input type="checkbox" name="insurance" value="2" >--}}
                                {{--@else--}}
                                    {{--<input type="checkbox" name="insurance" value="1" checked>--}}
                                {{--@endif--}}
                                {{--<span class="label">Protect your shipment with Shoppre insurance policy available for only <i--}}
                                            {{--class="fa fa-rupee"></i> 30.00 <a href="javascript:void(0)" class="tooltipkey"--}}
                                                                              {{--title="<p> Insure your shipment upto a total value of INR 6000 for only INR 30. Check our FAQ for more details.</p>"><i--}}
                                                {{--class="fa fa-question-circle-o"></i></a> </span>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        <hr>
                        <div class="est_amount"
                             style="background: #eaeaea;text-align: center;padding: 15px;border-radius: 5px;margin-bottom: 10px;">
                            <h4 style="font-weight: 600;font-size: 20px;margin-bottom: 0;">Final Shipping Charges *</h4>
                            <h3 style="font-weight: 800;margin-top: 10px;"><i
                                        class="fa fa-rupee"></i> {{number_format($payment['amount'], 2, ".", "")}}</h3>
                        </div>
                        <div class="form-group">
                            {{csrf_field()}}
                            <input type="hidden" name="ship_request_id" value="{{$shipment->id}}">
                            <button type="submit" id="submitship" class="btn btn-shoppre"
                                    style="width: 100%;font-size: 18px;border-radius: 5px;background: #10c018;font-weight: 900;">
                                Proceed to Payment
                            </button>
                        </div>
                        <small>* Charges shown DO NOT include any duties and taxes due upon shipment arriaval in your
                            receiving country.
                        </small>
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
    <script src="{{asset('js/jquery.redirect.js')}}"></script>
    <script type="text/javascript">
        $('.slide_trigger').click(function (e) {
            e.preventDefault();
            var target = $(this).attr('data-target');
            $('#' + target).slideToggle();
        });

        // $('input').keypress(function (e) {
        //     if (e.which == 13) {
        //         var token = $('input[name="_token"]').val();
        //         var insurance = $("input[name='insurance']").is(':checked') ? 1 : 2;
        //         var promocode = $("input[name='promocode']").val();
        //         var payment_gateway_name = $("input[name='payment_gateway_name']:checked").val();
        //
        //         $.redirect("", {
        //             _token: token,
        //             insurance: insurance,
        //             promocode: promocode,
        //             payment_gateway_name: payment_gateway_name
        //         }, 'GET');
        //     }
        // });

        $("input:checkbox, input:radio").change(function () {
            var token = $('input[name="_token"]').val();
            var insurance = $("input[name='insurance']").is(':checked') ? 1 : 2;
            var wallet = $("input[name='wallet']").is(':checked') ? 1 : 0;
            var promocode = $("input[name='promocode']").val();
            var payment_gateway_name = $("input[name='payment_gateway_name']:checked").val();

            $.redirect("", {
                _token: token,
                insurance: insurance,
                promocode: promocode,
                wallet: wallet,
                payment_gateway_name: payment_gateway_name
            }, 'GET');
        });


        $("#submitship").click(function (e) {
            e.preventDefault();


            var token = $('input[name="_token"]').val();
            var ship_request_id = $("input[name='ship_request_id']").val();
            var insurance = $("input[name='insurance']").is(':checked') ? 1 : 2;
            var wallet = $("input[name='wallet']").is(':checked') ? 1 : 0;
            var payment_gateway_name = $("input[name='payment_gateway_name']:checked").val();
            var promocode = $("input[name='promocode']").val();

            if (payment_gateway_name != undefined)
            {
              $.redirect("/shipping/request/finalship", {
                  _token: token,
                  ship_request_id: ship_request_id,
                  insurance: insurance,
                  wallet: wallet,
                  promocode: promocode,
                  payment_gateway_name: payment_gateway_name
              });
            }
            else {
              alert('Please select payment gateway');
            }

        });
    </script>
@endsection
