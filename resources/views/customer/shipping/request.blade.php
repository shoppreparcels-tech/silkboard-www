@extends('layout')

@section('title', '- Shipping Request Process')

@section('content')

    <section class="shipprocess">
      <div class="container">
        <div class="row">
         
            <div class="col-sm-8">
              <div class="longblock">
                <h4>1. Delivery address</h4>
                <div id="changeAddress">
                  <div class="edit">
                    @foreach($addresses as $editadss)
                    <div class="radio">
                      <label>
                        @if($editadss->id == $address->id)
                          <input type="radio" name="addressid" value="{{$editadss->id}}" checked>
                        @else
                          <input type="radio" name="addressid" value="{{$editadss->id}}">
                        @endif
                        <span class="label"><strong>{{$editadss->name}}</strong>+{{$editadss->code}} {{$editadss->phone}}<br>
                        {{$editadss->line1}}, 
                        @if(!empty($editadss->line2))
                          {{$editadss->line2}}, 
                        @endif
                        {{$editadss->city}}, 
                        {{$editadss->state}}, {{$editadss->country}} - {{$editadss->pin}}</span>
                      </label>
                    </div>
                    @endforeach
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
                            <td><strong>{{$package->seller}}</strong><br>{{$package->refference}}</td>
                            <td>{{$package->order_id}}</td>
                            <td><i class="fa fa-rupee"></i> {{number_format($package->price, 2, ".", "")}}</td>
                            <td>{{$package->weight}} Kg.</td>
                            <td>
                              <a href="#" class="trash delepack" data-deleid="{{$package->id}}"><i class="fa fa-trash"></i></a>
                              <input type="hidden" name="packids" value="{{$package->id}}">
                            </td>
                          </tr>
                          <tr id="slide{{$package->id}}" style="display:none">
                              <td colspan="7">
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
                                              <td>{{$item->qty}}</td>
                                              <td><i class="fa fa-rupee"></i>  {{number_format($item->price, 2, ".", "")}} </td>
                                              <td><i class="fa fa-rupee"></i>  {{$item->qty * $item->price}}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
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
                              <a href="javascript::void(0)" class="tooltipkey" title="All International carriers base their billable shipping rates
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
                        <p class="sent-email">Order confirmation email will be sent to  <a href="javascript::void(0)">{{Auth::guard('customer')->user()->email}}</a></p>
                      </footer>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="shipreq_right">
                <div id="shipcost">
                    <div class="dash-sidecost">
                      <p>Shoppre Wallet <a href="javascript::void(0)" class="tooltipkey" title="Shoppre can add or deduct cash from your Shoppre Wallet depending on the situation.<br>
                    For eg: Your Personal Shopper balance will be settled here in your Shoppre Wallet.<br>
                    - If the amount is positive, it means that you own this much cash, 
                    and this amount will be deducted from the final charges.<br>
                    - If the amount is negative, it means that this amount will be 
                    added to the final charges."><i class="fa fa-question-circle-o"></i></a> 
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
                          <span class="label">Discard shoe boxes <a href="javascript::void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment will be incurred to discard shoe boxes)."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['sticker'] == '1')
                          <input type="checkbox" name="sticker" value="1" checked>
                          @else
                          <input type="checkbox" name="sticker" value="1">
                          @endif
                          <span class="label">Fragile stickers <a href="javascript::void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 100 per shipment."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['extrapack'] == '1')
                          <input type="checkbox" name="extrapack" value="1" checked>
                          @else
                          <input type="checkbox" name="extrapack" value="1">
                          @endif
                          <span class="label">Add extra packing material <a href="javascript::void(0)" class="tooltipkey" title="Additional protective packaging will be added to every shipment at the cost given below:<br> 100rs until 10kg<br>200rs for 10-20kg<br>300rs for above 20kg"><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['original'] == '1')
                          <input type="checkbox" name="original" value="1" checked>
                          @else
                          <input type="checkbox" name="original" value="1">
                          @endif
                          <span class="label">Ship in original boxes <a href="javascript::void(0)" class="tooltipkey" title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['giftwrap'] == '1')
                          <input type="checkbox" name="giftwrap" value="1" checked>
                          @else
                          <input type="checkbox" name="giftwrap" value="1">
                          @endif
                          <span class="label">Gift wrap <a href="javascript::void(0)" class="tooltipkey" title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['giftnote'] == '1')
                          <input type="checkbox" name="giftnote" value="1" checked>
                          @else
                          <input type="checkbox" name="giftnote" value="1">
                          @endif
                          <span class="label">Gift note <a href="javascript::void(0)" class="tooltipkey" title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="form-group" style="margin: 0px 0;">
                        <div style="padding: 0;margin-right: 2px;max-width: 50px;display: inline-block;">
                          <input type="text" class="form-control" id="maxweight" name="maxweight" value="{{$options['maxweight']}}" placeholder="(in kg)">
                        </div>
                        <label for="maxweight" class="" style="display: inline-block;width: 70%;vertical-align: top;font-weight: 600;">Maximum weight per package (in kg) <a href="javascript::void(0)" class="tooltipkey" title="" data-original-title="Choose this option if you would like to restrict a Maximum weight of individual boxes in a shipment. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)*.<br>
                        <i>Please note that a shipment which weighs more than 30kg will be considered as a commercial shipment and will incur a custom clearance cost of INR 2500.</i><br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> </label>
                      </div>
                      @if($options['giftnote'] == '1')
                      <textarea class="form-control" rows="4" name="giftnote_txt" placeholder="Enter Your Gift Note Description">{{$options['giftnote_txt']}}</textarea>
                      @endif
                    </div>

                    <div class="shiprightbox">
                      <h3 class="title">Package Level Charges Summary</h3>
                      <ul>
                        @if($charges['optsamt'] > 0)
                        <li class="active">Shipping Preference Charges <a href="javascript::void(0)" class="tooltipkey" title="(includes the above mentioned charges)"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['optsamt'], 2, ".", "")}}</span></li>
                        @else
                        <li>Shipping Preference Charges <a href="javascript::void(0)" class="tooltipkey" title="(includes the above mentioned charges)"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['storage'] > 0)
                        <li class="active">Additional Storage Fee <a href="javascript::void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days*. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is  shipped, picked-up,  discarded or returned to the sender. *No. of days may be more for Membership Partners, and Loyalty Members (Silver and above)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['storage'], 2, ".", "")}}</span></li>
                        @else
                        <li>Additional Storage Fee <a href="javascript::void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days*. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is  shipped, picked-up,  discarded or returned to the sender. *No. of days may be more for Membership Partners, and Loyalty Members (Silver and above)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['photo'] > 0)
                        <li class="active">Photo Charges <a href="javascript::void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 100. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <p>Scan Documents: We can scan your documents (2 kgs and below) for a cost of INR 40/page (minimum INR 100).</p>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['photo'], 2, ".", "")}}</span></li>
                        @else
                        <li>Photo Charges <a href="javascript::void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 100*. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <p>Scan Documents: We can scan your documents (2 kgs and below) for a cost of INR 40/page (minimum INR 100).</p>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>
                        "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['consolid'] > 0)
                        <li class="active">Consolidation Charges <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate).<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['consolid'], 2, ".", "")}}</span></li>
                        @else
                        <li>Consolidation Charges <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate).<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['pickup'] > 0)
                        <li class="active">Pick-up Service <a href="javascript::void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['pickup'], 2, ".", "")}}</span></li>
                        @else
                        <li>Pick-up Service <a href="javascript::void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['handling'] > 0)
                        <li class="active">Package Special Handling Fee <a href="javascript::void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. 
                        All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                        Less than 5 kg = INR 1000 per shipment<br>
                        5 kg to 10 kg = INR 1500 per shipment<br>
                        Above 10 kg = INR 2500 per shipment<br>
                        The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['handling'], 2, ".", "")}}</span></li>
                        @else
                        <li>Package Special Handling Fee <a href="javascript::void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. 
                        All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                        Less than 5 kg = INR 1000 per shipment<br>
                        5 kg to 10 kg = INR 1500 per shipment<br>
                        Above 10 kg = INR 2500 per shipment<br>
                        The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['doc'] > 0)
                        <li class="active">Receive Mail <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['doc'], 2, ".", "")}}</span></li>
                        @else
                        <li>Receive Mail <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00
                        @endif

                        @if($charges['address'] > 0)
                        <li class="active">Address Correction <a href="javascript::void(0)" class="tooltipkey" title="Incoming Packages: There is an INR 200 fee for 
packages that arrive at our distribution center with an 
incomplete address. You can avoid these fees by making 
sure the seller properly addresses your order. 
Outgoing Packages: Please take extra care to make sure 
that you have entered the correct address while making 
an International Shipment. The courier will charge an 
additional fee (between INR 3000 to INR 7000)* to your 
Shoppre account if you update your address after the 
shipment has left our facility. Many couriers charge this 
fee after delivery, so you may see it charged to your 
account post-shipment. 
"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['address'], 2, ".", "")}}</span></li>
                        @else
                        <li>Address Correction <a href="javascript::void(0)" class="tooltipkey" title="Incoming Packages: There is an INR 200 fee for 
packages that arrive at our distribution center with an 
incomplete address. You can avoid these fees by making 
sure the seller properly addresses your order. 
Outgoing Packages: Please take extra care to make sure 
that you have entered the correct address while making 
an International Shipment. The courier will charge an 
additional fee (between INR 3000 to INR 7000)* to your 
Shoppre account if you update your address after the 
shipment has left our facility. Many couriers charge this 
fee after delivery, so you may see it charged to your 
account post-shipment. 
"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($options['liquid'] == '1')
                        <li class="active">Special Package Clearance Fee <a href="javascript::void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish,  etc. will incur charges as below:<br>
                          Less than 5 kg = INR 1000 per shipment*<br>
                          5 kg to 10 kg = INR 1500 per shipment*<br>
                          Above 10 kg = INR 2500 per shipment*<br>
                          The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">To Be Calculated</span></li>
                        @else
                        <li>Special Package Clearance Fee <a href="javascript::void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish,  etc. will incur charges as below:<br>
                          Less than 5 kg = INR 1000 per shipment*<br>
                          5 kg to 10 kg = INR 1500 per shipment*<br>
                          Above 10 kg = INR 2500 per shipment*<br>
                          The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif
                        
                        <li class="active">Overweight Clearance Fee <a href="javascript::void(0)" class="tooltipkey" title="Any shipment which weighs more than 30 kg will be considered as a commercial shipment and will incur a custom clearance cost of INR 2500. If you would like to restrict a Maximum weight of individual boxes in a shipment, you can input the “maximum weight per shipment” of your choice, under your Shipping Preferences. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">To Be Calculated</span></li>

                        <li class="active"><h4>Total Package Level Charges <span class="pull-right">{{number_format(array_sum($charges), 2, ".", "")}}</span></h4></li>

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
                      <button type="submit" id="submit_shiprqst" class="btn btn-block btn-shoppre">Confirm Your Ship Request</button>
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
      var packids = [];
      $("input[name='packids']").each(function() {
          if (this.value != deleid) {
            packids[i++] = this.value;
          }
      });

      if (packids.length == 0) {
        alert('Unable to delete ! You must have atleast one package to process ship request.');
        return false;
      }else{

        var token = $('input[name="_token"]').val();
        var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
        var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
        var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
        var original =  $("input[name='original']").is(':checked') ? 1 : 0;
        var giftwrap =  $("input[name='giftwrap']").is(':checked') ? 1 : 0;
        var giftnote =  $("input[name='giftnote']").is(':checked') ? 1 : 0;
        var maxweight = $("input[name='maxweight']").val();

        var giftnote_txt = $("textarea[name='giftnote_txt']").val();
        var liquid = $("input[name='liquid']").val();
        var invoice_taxid = $("input[name='invoice_taxid']").val();
        var invoice_personal =  $("input[name='invoice_personal']").val();
        var invoice_include =  $("input[name='invoice_include']").val();

        var addressid = $('input[name="addressid"]:checked').val();

        $.redirect("/shipping/request/redirect",{
          _token: token,
          packids: packids,
          repack: repack,
          sticker: sticker,
          extrapack: extrapack,
          original: original,
          giftwrap: giftwrap,
          giftnote: giftnote,
          giftnote_txt: giftnote_txt,
          maxweight: maxweight,
          liquid: liquid,
          invoice_taxid: invoice_taxid,
          invoice_personal: invoice_personal,
          invoice_include: invoice_include,
          addressid : addressid
        });
      }
    });

    $("input:checkbox, input:radio").change(function() {
      var i = 0;
      var packids = [];
      $("input[name='packids']").each(function() {
          packids[i++] = this.value;
      });

      var token = $('input[name="_token"]').val();
      var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
      var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
      var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
      var original =  $("input[name='original']").is(':checked') ? 1 : 0;
      var giftwrap =  $("input[name='giftwrap']").is(':checked') ? 1 : 0;
      var giftnote =  $("input[name='giftnote']").is(':checked') ? 1 : 0;
      var maxweight = $("input[name='maxweight']").val();

      var giftnote_txt = $("textarea[name='giftnote_txt']").val();
      var liquid = $("input[name='liquid']").val();
      var invoice_taxid = $("input[name='invoice_taxid']").val();
      var invoice_personal =  $("input[name='invoice_personal']").val();
      var invoice_include =  $("input[name='invoice_include']").val();

      var addressid = $('input[name="addressid"]:checked').val();

      $.redirect("/shipping/request/redirect",{
        _token: token,
        packids: packids,
        repack: repack,
        sticker: sticker,
        extrapack: extrapack,
        original: original,
        giftwrap: giftwrap,
        giftnote: giftnote,
        giftnote_txt: giftnote_txt,
        maxweight: maxweight,
        liquid: liquid,
        invoice_taxid: invoice_taxid,
        invoice_personal: invoice_personal,
        invoice_include: invoice_include,
        addressid : addressid
      });

    });

    $("#submit_shiprqst").click(function(e) {
      e.preventDefault();

      var i = 0;
      var packids = [];
      $("input[name='packids']").each(function() {
          packids[i++] = this.value;
      });

      if (packids.length == 0) {
        alert(' You must have atleast one package to process ship request.');
        return false;
      }else{

        var token = $('input[name="_token"]').val();
        var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
        var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
        var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
        var original =  $("input[name='original']").is(':checked') ? 1 : 0;
        var giftwrap =  $("input[name='giftwrap']").is(':checked') ? 1 : 0;
        var giftnote =  $("input[name='giftnote']").is(':checked') ? 1 : 0;

        var giftnote_txt = $("textarea[name='giftnote_txt']").val();
        var liquid = $("input[name='liquid']").val();
        var maxweight = $("input[name='maxweight']").val();
        var invoice_taxid = $("input[name='invoice_taxid']").val();
        var invoice_personal =  $("input[name='invoice_personal']").val();
        var invoice_include =  $("input[name='invoice_include']").val();

        var addressid = $('input[name="addressid"]:checked').val();

        $.redirect("/shipping/request/submit",{
          _token: token,
          packids: packids,
          repack: repack,
          sticker: sticker,
          extrapack: extrapack,
          original: original,
          giftwrap: giftwrap,
          giftnote: giftnote,
          giftnote_txt: giftnote_txt,
          liquid: liquid,
          maxweight: maxweight,
          invoice_taxid: invoice_taxid,
          invoice_personal: invoice_personal,
          invoice_include: invoice_include,
          addressid : addressid
        });
      }

    });

  </script>
@endsection