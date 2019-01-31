@extends('myaccount.layout')

@section('title', '- Shipping Request Process')

@section('css_style')
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')
    <!-- Modal -->
    @include('myaccount.customer.shipping.modal')
    <!-- End Modal -->
    <section class="shipprocess">
      <div class="container">
        <div class="row">
            <div class="col-sm-8">
              <div class="longblock">
                <h4>1. Delivery address <a href="javascript:void(0)" class="tooltipkey" style="font-size: 20px;color: #fff;" title="<p>Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000) to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment.</p>"><i class="fa fa-question-circle-o"></i></a></h4>
                <div id="changeAddress">
                  <div class="edit">
                      <div id="outer_div">
                    @foreach($addresses as $address)
                    <div class="radio">
                      <label>
                          <input type="radio" name="address_id" value="{{$address->id}}"
                                  {{ $address->id==Session::get('address')->id ? 'checked' : ''}}>
                        <span class="label">
                          <strong>
                            {{$address->salutation}}. {{$address->first_name}} {{$address->last_name}}
                          </strong>
                          +{{$address->country_code}} {{$address->phone}}
                          <a href="javascript:void(0)" id="btn_edit_address" data-address_id='{{$address->id}}' class="fa fa-pencil-square-o"></a>
                          <br>
                        {{$address->line1}},
                        @if(!empty($address->line2))
                          {{$address->line2}},
                        @endif
                        {{$address->city}},
                        {{$address->state}}, {{$address->country->name}} - {{$address->pincode}}</span>
                      </label>
                    </div>
                    @endforeach
                      </div>
                    <a href="{{route('customer.address.add')}}?redirect={{url()->current()}}" class="newadd"><i class="fa fa-plus"></i> Add New Address</a>
                  </div>
                </div>
              </div>
              <div class="longblock">
                <h4>2. Shipment summary</h4>
                <div class="info_summer">
                  <div class="col-sm-10">
                    <p>{{$packages->count()}} Packages in this shipment</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div id="changeSummery">
                  <div class="edit">
                      <a href="{{route('customer.locker')}}" class="addpack"><i class="fa fa-plus"></i> Add More Packages</a>
                      <div class="table-responsive">
                        <table class="table table-bordered text-center">
                          <tr>
                            <th></th>
                            <th>From</th>
                            <th>Package ID</th>
                            <th>Total Value</th>
                            <th>Weight</th>
                            <th width="50px"></th>
                          </tr>
                          @foreach($packages as $package)
                          <tr>
                            <td><a href="#" data-target="slide{{$package->id}}" class="expand slide_trigger"><i class="fa fa-angle-double-down"></i></a></td>
                            <td><strong>{{$package->seller}}</strong><br>{{$package->reference}}</td>
                            <td>{{$package->order_id}}</td>
                            <td><i class="fa fa-rupee"></i> {{number_format($package->price, 2, ".", "")}}</td>
                            <td>{{$package->weight}} Kg.</td>
                            <td>
                              <a href="#" class="trash delepack" data-deleid="{{$package->id}}"><i class="fa fa-trash"></i></a>
                              <input type="hidden" name="package_ids" value="{{$package->id}}">
                            </td>
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
                                <a href="#photo_modal_{{$package->id}}" class="btn btn-photo popup-modal" data-package_id="{{$package->id}}" style="float: left;border: 1px solid;margin: 10px;padding: 5px 15px;margin-left: 0;">Photos</a>
                                @endif

                                @if($package->type == 'doc')
                                  @if($package->scanRequest && $package->scanRequest->status == 'completed')
                                    <a href="#doc_modal_{{$package->id}}" class="btn btn-photo popup-modal" style="float: left;border: 1px solid;margin: 10px;padding: 5px 15px;margin-left: 0;">Docs</a>
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
                                              <td><i class="fa fa-rupee"></i>  {{number_format($item->price, 2, ".", "")}} </td>
                                              <td><i class="fa fa-rupee"></i>  {{$item->quantity * $item->price}}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
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
                          <tr class="totalbtm">
                            <td></td>
                            <td></td>
                            <td>Shipment Totals</td>
                            <td><i class="fa fa-rupee"></i> {{number_format($packages->sum('price'), 2, ".", "")}}</td>
                            <td>
                              <small>Final Weight of<br>Shipment to be<br>calculated</small>
                              <a href="javascript:void(0)" class="tooltipkey" title="All International carriers base their billable shipping rates
                              on the greater of Actual Weight and Dimensional Weight.
                              Actual weight is the weight of the package when put on a
                              scale.<br>
                              Dimensional weight is based on the size of the package. It is
                              calculated by multiplying the dimensions of the item.<br>
                              For International Shipments:<br>
                              Dimensional Weight = Length x Width x Height (in cm) / 5000
                              For Domestic Shipments:<br>
                              Dimensional Weight = Length x Width x Height (in cm) / 4000"><i class="fa fa-question-circle-o"></i></a>
                            </td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                      <a href="{{route('customer.locker')}}" class="cancel">Cancel Request</a>
                      <footer>
                        <p class="sent-email">Order confirmation email will be sent to  <a href="javascript:void(0)">{{Auth::guard('customer')->user()->email}}</a></p>
                        <button type="submit" id="submit_shiprqst" class="btn btn-block btn-shoppre submit_shiprqst" style="width: auto;font-size: 16px;border-radius: 5px;background: #10c018;">Confirm Your Ship Request *</button>
                        <i class="info" style="margin-top: 10px;display: block;font-size: 12px;color: #000;font-weight: 700;">* Kindly note that you <span class="text-red">CANNOT</span> change your Delivery Address, Package Selection or your Shipping Preferences after you create your ship request.</i>
                      </footer>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="shipreq_right">
                <div id="shipcost">
                    <div class="dash-sidecost">
                      <p>Shoppre Wallet <a href="javascript:void(0)" class="tooltipkey" title="<p>Shoppre can add or deduct cash from your Shoppre Wallet depending on the situation.</p>
                    <p>For eg: Your Personal Shopper balance will be settled here in your Shoppre Wallet.</p>
                    <p>- If the amount is <i>positive</i>, it means that you own this much cash, and this amount will be deducted from the final charges.</p>
                    <p>- If the amount is <i>negative</i>, it means that this amount will be added to the final charges.</p>"><i class="fa fa-question-circle-o"></i></a>
                        <span class="pull-right">
                        <i class="fa fa-rupee"></i>
                        <span>{{number_format($customer->balance->amount, 2, ".", "")}}</span>
                        </span>
                      </p>
                    </div>
                    <div class="shiprightbox">
                      <h3 class="title">Shipping Preferences Summary</h3>
                      <div class="checkbox">
                        <label>
                          @if($options['repack'] == '1')
                          <input type="checkbox" name="repack" value="1" checked>
                          @else
                          <input type="checkbox" name="repack" value="1">
                          @endif
                          <span class="label">Discard shoe boxes <a href="javascript:void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment will be incurred to discard shoe boxes)."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <!-- <div class="checkbox">
                        <label>
                          @if($options['sticker'] == '1')
                          <input type="checkbox" name="sticker" value="1" checked>
                          @else
                          <input type="checkbox" name="sticker" value="1">
                          @endif
                          <span class="label">Fragile stickers <a href="javascript:void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 5000 per shipment."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div> -->
                      <div class="checkbox">
                        <label>
                          @if($options['extrapack'] == '1')
                          <input type="checkbox" name="extrapack" value="1" checked>
                          @else
                          <input type="checkbox" name="extrapack" value="1">
                          @endif
                          <span class="label">Add extra packing material <a href="javascript:void(0)" class="tooltipkey" title="Additional protective packaging will be added to every shipment at the cost of INR 500.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['original'] == '1')
                          <input type="checkbox" name="original" value="1" checked>
                          @else
                          <input type="checkbox" name="original" value="1">
                          @endif
                          <span class="label">Ship in original boxes <a href="javascript:void(0)" class="tooltipkey" title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['gift_wrap'] == '1')
                          <input type="checkbox" name="gift_wrap" value="1" checked>
                          @else
                          <input type="checkbox" name="gift_wrap" value="1">
                          @endif
                          <span class="label">Gift wrap <a href="javascript:void(0)" class="tooltipkey" title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['gift_note'] == '1')
                          <input type="checkbox" name="gift_note" value="1" checked>
                          @else
                          <input type="checkbox" name="gift_note" value="1">
                          @endif
                          <span class="label">Gift note <a href="javascript:void(0)" class="tooltipkey" title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                        @if($options['gift_note'] == '1')
                        <textarea class="form-control" rows="4" name="giftnote_txt" placeholder="Enter Your Gift Note Description">{{$options['giftnote_txt']}}</textarea>
                        @endif
                      </div>
                      <div class="form-group" style="margin: 0px 0;">
                        <div style="padding: 0;margin-right: 2px;max-width: 60px;display: inline-block;">
                          <input type="text" class="form-control" id="max_weight" name="max_weight" value="{{$options['max_weight']}}" placeholder="in Kg">
                        </div>
                        <label for="max_weight" class="" style="display: inline-block;width: 75%;vertical-align: middle;font-weight: 600;">Maximum weight per package <a href="javascript:void(0)" class="tooltipkey" title="" data-original-title="Choose this option if you would like to restrict a Maximum weight of individual boxes in a shipment. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)*.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> </label>
                      </div>
                    </div>

                    <div class="shiprightbox">
                      <h3 class="title">Package Level Charges Summary</h3>
                      <ul>

                        <li class="active">Shipping Preference Charges <a href="javascript:void(0)" class="tooltipkey" title="(includes the above mentioned charges)"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['optsamt'], 2, ".", "")}}</span></li>

                        @if($charges['storage'] > 0)
                        <li class="active">Additional Storage Fee <a href="javascript:void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days*. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is  shipped, picked-up,  discarded or returned to the sender. *No. of days may be more for Membership Partners, and Loyalty Members (Silver and above)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['storage'], 2, ".", "")}}</span></li>
                        @else
                        <li>Additional Storage Fee <a href="javascript:void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days*. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is  shipped, picked-up,  discarded or returned to the sender. *No. of days may be more for Membership Partners, and Loyalty Members (Silver and above)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['photo'] > 0)
                        <li class="active">Photo Charges <a href="javascript:void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 50. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['photo'], 2, ".", "")}}</span></li>
                        @else
                        <li>Photo Charges <a href="javascript:void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 50*. </p>
                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['consolid'] > 0)
                        <li class="active">Consolidation Charges <a href="javascript:void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate).<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['consolid'], 2, ".", "")}}</span></li>
                        @else
                        <li>Consolidation Charges <a href="javascript:void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate).<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['pickup'] > 0)
                        <li class="active">Pick-up Service <a href="javascript:void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['pickup'], 2, ".", "")}}</span></li>
                        @else
                        <li>Pick-up Service <a href="javascript:void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['split'] > 0)
                        <li class="active">Split Package <a href="javascript:void(0)" class="tooltipkey" title="Shoppre can split your package if it contains more than one item, and if you wish to separate them into multiple packages. You can split your package and discard an item, return it to the sender, ship it at a different time or to a different address. There is a cost of INR 200 per new package* created.<br> For eg. if you have splitted your package into 3, you will be charged INR 400 <br> <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['split'], 2, ".", "")}}</span></li>
                        @else
                        <li>Split Package <a href="javascript:void(0)" class="tooltipkey" title="Shoppre can split your package if it contains more than one item, and if you wish to separate them into multiple packages. You can split your package and discard an item, return it to the sender, ship it at a different time or to a different address. There is a cost of INR 200 per new package* created.<br> For eg. if you have splitted your package into 3, you will be charged INR 400 <br> <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['handling'] > 0)
                        <li class="active">Package Special Handling Fee <a href="javascript:void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you.
                        All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                        Less than 5 kg = INR 1000 per shipment<br>
                        5 kg to 10 kg = INR 1500 per shipment<br>
                        Above 10 kg = INR 2500 per shipment<br>
                        The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['handling'], 2, ".", "")}}</span></li>
                        @else
                        <li>Package Special Handling Fee <a href="javascript:void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you.
                        All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                        Less than 5 kg = INR 1000 per shipment<br>
                        5 kg to 10 kg = INR 1500 per shipment<br>
                        Above 10 kg = INR 2500 per shipment<br>
                        The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['doc'] > 0)
                        <li class="active">Receive Mail <a href="javascript:void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['doc'], 2, ".", "")}}</span></li>
                        @else
                        <li>Receive Mail <a href="javascript:void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['scan_doc'] > 0)
                        <li class="active">Scan Document <a href="javascript:void(0)" class="tooltipkey" title="<p>You can scan your documents (all/some pages of your document) for a charge of INR 40.00/day (Minimum INR 100)*</p><small>* Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>
                        "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['scan_doc'], 2, ".", "")}}</span></li>
                        @else
                        <li>Scan Document <a href="javascript:void(0)" class="tooltipkey" title="<p>You can scan your documents (all/some pages of your document) for a charge of INR 40.00/day (Minimum INR 100)*</p><small>* Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>
                        "><i class="fa fa-question-circle-o"></i></a><span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['address'] > 0)
                        <li class="active">Address Correction <a href="javascript:void(0)" class="tooltipkey" title="Incoming Packages: There is an INR 200 fee for packages that arrive at our distribution center with an incomplete address. You can avoid these fees by making sure the seller properly addresses your order. Outgoing Packages: Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000)* to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment. "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['address'], 2, ".", "")}}</span></li>
                        @else
                        <li>Address Correction <a href="javascript:void(0)" class="tooltipkey" title="Incoming Packages: There is an INR 200 fee for packages that arrive at our distribution center with an incomplete address. You can avoid these fees by making sure the seller properly addresses your order. Outgoing Packages: Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000)* to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment. "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($options['liquid'] == '1')
                        <li class="active">Special Package Clearance Fee<a href="javascript:void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish,  etc. will incur charges as below:<br>
                          0.5 kg to 5 kg = INR 1392.4 per shipment*<br>
                          5 kg to 10 kg = INR 3009 per shipment*<br>
                          10 kg to 15 kg = INR 5369 per shipment*<br>
                          Above 15 kg = INR 7729 per shipment*<br>
                          The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">To Be Calculated</span></li>
                        @else
                        <li>Special Package Clearance Fee <a href="javascript:void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish,  etc. will incur charges as below:<br>
                          Less than 5 kg = INR 1000 per shipment*<br>
                          5 kg to 10 kg = INR 1500 per shipment*<br>
                          Above 10 kg = INR 2500 per shipment*<br>
                          The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        <li class="active">Overweight Clearance Fee <a href="javascript:void(0)" class="tooltipkey" title="Any shipment which weighs more than 30 kg will be considered as a commercial shipment and will incur a custom clearance cost of INR 2500. If you would like to restrict a Maximum weight of individual boxes in a shipment, you can input the “maximum weight per shipment” of your choice, under your Shipping Preferences. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">To Be Calculated</span></li>

                        <li class="active"><h4>Total Package Level Charges <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format(array_sum($charges), 2, ".", "")}}</span></h4></li>

                      </ul>
                    </div>

                    <div class="shiprightbox">
                      <h3 class="title">Shipping Charges</h3>
                      <p class="text-center"><strong>To be estimated after we pack your items</strong></p>
                      {{csrf_field()}}
                      <input type="hidden" name="liquid" value="{{$options['liquid']}}">
                      <input type="hidden" name="invoice_taxid" value="{{$options['invoice_taxid']}}">
                      <input type="hidden" name="invoice_personal" value="{{$options['invoice_personal']}}">
                      <input type="hidden" name="invoice_include" value="{{$options['invoice_include']}}">
                      <button type="submit" id="submit_shiprqst" class="btn btn-block btn-shoppre submit_shiprqst" style="background: #10c018;">Confirm Your Ship Request *</button>
                      <i class="info">* Kindly note that you <span class="text-red">CANNOT</span> change your Delivery Address, Package Selection or your Shipping Preferences after you create your ship request.</i>
                    </div>
                </div>
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
    $('.slide_trigger').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        $('#'+target).slideToggle();
    });

    $("a.delepack").click(function(e) {
      e.preventDefault();

      var deleid = $(this).attr('data-deleid');

      var i = 0;
      var package_ids = [];
      $("input[name='package_ids']").each(function() {
          if (this.value != deleid) {
            package_ids[i++] = this.value;
          }
      });

      if (package_ids.length == 0) {
        alert('Unable to delete ! You must have atleast one package to process ship request.');
        return false;
      }else{

        var token = $('input[name="_token"]').val();
        var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
        var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
        var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
        var original =  $("input[name='original']").is(':checked') ? 1 : 0;
        var gift_wrap =  $("input[name='gift_wrap']").is(':checked') ? 1 : 0;
        var gift_note =  $("input[name='gift_note']").is(':checked') ? 1 : 0;
        var max_weight = $("input[name='max_weight']").val();

        var giftnote_txt = $("textarea[name='giftnote_txt']").val();
        var liquid = $("input[name='liquid']").val();
        var invoice_taxid = $("input[name='invoice_taxid']").val();
        var invoice_personal =  $("input[name='invoice_personal']").val();
        var invoice_include =  $("input[name='invoice_include']").val();

        var address_id = $('input[name="address_id"]:checked').val();

        $.redirect("/shipping/request/redirect",{
          _token: token,
          package_ids: package_ids,
          repack: repack,
          sticker: sticker,
          extrapack: extrapack,
          original: original,
          gift_wrap: gift_wrap,
          gift_note: gift_note,
          giftnote_txt: giftnote_txt,
          max_weight: max_weight,
          liquid: liquid,
          invoice_taxid: invoice_taxid,
          invoice_personal: invoice_personal,
          invoice_include: invoice_include,
          address_id : address_id
        });
      }
    });

    $("input:checkbox, input:radio").not( "#chk_is_default" ).change(function() {
      var i = 0;
      var package_ids = [];
      $("input[name='package_ids']").each(function() {
          package_ids[i++] = this.value;
      });

      var token = $('input[name="_token"]').val();
      var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
      var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
      var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
      var original =  $("input[name='original']").is(':checked') ? 1 : 0;
      var gift_wrap =  $("input[name='gift_wrap']").is(':checked') ? 1 : 0;
      var gift_note =  $("input[name='gift_note']").is(':checked') ? 1 : 0;
      var max_weight = $("input[name='max_weight']").val();

      var giftnote_txt = $("textarea[name='giftnote_txt']").val();
      var liquid = $("input[name='liquid']").val();
      var invoice_taxid = $("input[name='invoice_taxid']").val();
      var invoice_personal =  $("input[name='invoice_personal']").val();
      var invoice_include =  $("input[name='invoice_include']").val();

      var address_id = $('input[name="address_id"]:checked').val();

      $.redirect("/shipping/request/redirect",{
        _token: token,
        package_ids: package_ids,
        repack: repack,
        sticker: sticker,
        extrapack: extrapack,
        original: original,
        gift_wrap: gift_wrap,
        gift_note: gift_note,
        giftnote_txt: giftnote_txt,
        max_weight: max_weight,
        liquid: liquid,
        invoice_taxid: invoice_taxid,
        invoice_personal: invoice_personal,
        invoice_include: invoice_include,
        address_id : address_id
      });

    });

    $(".submit_shiprqst").click(function(e) {
      e.preventDefault();

      var i = 0;
      var package_ids = [];
      $("input[name='package_ids']").each(function() {
          package_ids[i++] = this.value;
      });

      if (package_ids.length == 0) {
        alert(' You must have atleast one package to process ship request.');
        return false;
      }else{

        var token = $('input[name="_token"]').val();
        var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
        var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
        var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
        var original =  $("input[name='original']").is(':checked') ? 1 : 0;
        var gift_wrap =  $("input[name='gift_wrap']").is(':checked') ? 1 : 0;
        var gift_note =  $("input[name='gift_note']").is(':checked') ? 1 : 0;

        var giftnote_txt = $("textarea[name='giftnote_txt']").val();
        var liquid = $("input[name='liquid']").val();
        var max_weight = $("input[name='max_weight']").val();
        var invoice_taxid = $("input[name='invoice_taxid']").val();
        var invoice_personal =  $("input[name='invoice_personal']").val();
        var invoice_include =  $("input[name='invoice_include']").val();

        var address_id = $('input[name="address_id"]:checked').val();

        $.redirect("/shipping/request/submit",{
          _token: token,
          package_ids: package_ids,
          repack: repack,
          sticker: sticker,
          extrapack: extrapack,
          original: original,
          gift_wrap: gift_wrap,
          gift_note: gift_note,
          giftnote_txt: giftnote_txt,
          liquid: liquid,
          max_weight: max_weight,
          invoice_taxid: invoice_taxid,
          invoice_personal: invoice_personal,
          invoice_include: invoice_include,
          address_id : address_id
        });
      }

    });

  </script>
@endsection
