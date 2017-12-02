@extends('layout')

@section('title', '- Shipping Request Confirm')

@section('content')

    <section class="shipprocess">
      <div class="container">
        <div class="row">
         
            <div class="col-sm-8">
              <div class="longblock active">
                <h4>1.Delivery address</h4>
                <div class="info_deliver">
                  <div class="col-sm-10">
                    <p><strong>{{$shipment->fullname}}</strong></p>
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
                          @foreach($packages as $package)
                          <tr>
                            <td><a href="#" data-target="slide{{$package->id}}" class="expand slide_trigger"><i class="fa fa-angle-double-down"></i></a></td>
                            <td><strong>{{$package->seller}}</strong><br>{{$package->refference}}</td>
                            <td>{{$package->order_id}}</td>
                            <td><i class="fa fa-rupee"></i> {{$package->price}}</td>
                            <td>{{$package->weight}} Kg.</td>
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
                                              <td><i class="fa fa-rupee"></i>  {{$item->price}}</td>
                                              <td><i class="fa fa-rupee"></i>  {{$item->qty * $item->price}}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </td>
                          </tr>
                          @php
                            $charges = array('storage' => 0, 'photo' => 0, 'pickup' => 0, 'handling' => 0, 'doc' => 0, 'address' => 0);
                            $charges['storage'] += $package->charges->storage;
                            $charges['photo'] += $package->charges->basic_photo + $package->charges->advnc_photo;
                            $charges['pickup'] += $package->charges->pickup;
                            $charges['handling'] += $package->charges->handling;
                            $charges['doc'] += $package->charges->doc;
                            $charges['address'] = $package->charges->address;
                          @endphp
                          @endforeach
                          <tr class="totalbtm">
                            <td></td>
                            <td></td>
                            <td>Shipment Totals</td>
                            <td><i class="fa fa-rupee"></i> {{number_format($packages->sum('price'), 2, ".", "")}}</td>
                            <td>{{$packages->sum('weight')}} Kg.</td>
                          </tr>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              <div class="longblock active">
                <h4>3.Payment options</h4>
                <div id="changePayment">
                  <div class="edit">
                    <div class="radio">
                      <label>
                        @if($payment['payoption'] == 'wire')
                        <input type="radio" name="payoption" value="wire" checked>
                        @else
                        <input type="radio" name="payoption" value="wire">
                        @endif
                        <span class="label">Wire transfer/money order</span>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        @if($payment['payoption'] == 'paypal')
                        <input type="radio" name="payoption" value="paypal" checked>
                        @else
                        <input type="radio" name="payoption" value="paypal">
                        @endif
                        <span class="label">Paypal (10% Extra Charge)</span>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        @if($payment['payoption'] == 'paytm')
                        <input type="radio" name="payoption" value="paytm" checked>
                        @else
                        <input type="radio" name="payoption" value="paytm">
                        @endif
                        <span class="label">Paytm (3% Extra Charge)</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="shipsidebar">
                  <div class="form-group">
                    <input type="text" name="promocode" placeholder="Enter Promo Code" class="form-control" value="{{Request::get('promocode')}}">
                    @if (session('promoerror'))
                        <div class="alert-danger" style="font-size: 13px;border: 0;margin: 5px 0;">{{ session('promoerror') }}</div>
                    @endif
                  </div>
                  
                  <div class="dash-sidecost">
                    <p>Total Value <span class="pull-right">
                      <i class="fa fa-rupee"></i> 
                      <span class="totalvalue">{{number_format($shipment->value, 2, ".", "")}}</span>
                      </span>
                    </p>
                    <p>Total Weight <a href="javascript::void(0)" class="tooltipkey" title="<p>All International carriers base their billable shipping rates on the greater of Actual Weight and Dimensional Weight.<p>
                    <p><u>Actual weight</u> is the weight of the package when put on a scale.</p>
                    <p><u>Dimensional weight</u> is based on the size of the package. It is calculated by multiplying the dimensions of the item.</p>
                    For International Shipments:
                    <p>Dimensional Weight = Length x Width x Height (in cm) / 5000</p>
                    For Domestic Shipments:
                    <p>Dimensional Weight = Length x Width x Height (in cm) / 4000</p>"><i class="fa fa-question-circle-o"></i></a><span class="pull-right">
                      <span class="totalweight">{{$shipment->weight}}</span> Kg.
                      </span>
                    </p>
                    <p>Packages <span class="pull-right">
                      <span class="totalcount">{{$shipment->count}}</span>
                      </span>
                    </p>
                    <hr>
                    <h4>Subtotal: <span class="pull-right"><i class="fa fa-rupee"></i> <span class="subtotal">{{number_format($shipment->subtotal, 2, ".", "")}}</span></span></h4>
                    <h4>Shipping Discount <a href="javascript::void(0)" class="tooltipkey" title="<p>Apart from Country-based shipping discounts, Additional discounts may apply to Shoppre Membership Partners and to Shoppre Loyalty Members (Gold and above).</p>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i> <span class="discount">{{number_format($shipment->discount, 2, ".", "")}}</span></span></h4>

                    <h4>Shoppre Wallet <a href="javascript::void(0)" class="tooltipkey" title="<p>Shoppre can add or deduct cash from your Shoppre Walletdepending on the situation.</p>
                    <p>For eg: Your Personal Shopper balance will be settledhere in your Shoppre Wallet.</p>
                    <p>- If the amount is positive, it means that you own this much cash, and this amount will be deducted from the final charges.</p>
                    <p>- If the amount is negative, it means that this amount will be added to the final charges.</p>
                      "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i> <span class="discount">{{number_format($payment['wallet'], 2, ".", "")}}</span></span></h4>

                    @php
                      $estimated = $shipment->estimated - $shipment->packlevel - $payment['wallet'];
                    @endphp

                    <h3>Estimated Shipping  <span class="pull-right"><i class="fa fa-rupee"></i> <span class="estimated">{{number_format($estimated, 2, ".", "")}}</span></span></h3>
                  </div>
                  
                  <div class="dash-sidecost">
                      @if($charges['storage'] > 0)
                        <p>Additional Storage Fee <a href="javascript::void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days*. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is  shipped, picked-up,  discarded or returned to the sender. *No. of days may be more for Membership Partners, and Loyalty Members (Silver and above)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['storage'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['photo'] > 0)
                      <p>Photo Charges <a href="javascript::void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 100. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <p>Scan Documents: We can scan your documents (2 kgs and below) for a cost of INR 40/page (minimum INR 100).</p>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['photo'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['pickup'] > 0)
                      <p>Pick-up Service <a href="javascript::void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['pickup'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['handling'] > 0)
                      <p>Special Handling Fee <a href="javascript::void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. 
                        All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                        Less than 5 kg = INR 1000 per shipment<br>
                        5 kg to 10 kg = INR 1500 per shipment<br>
                        Above 10 kg = INR 2500 per shipment<br>
                        The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['handling'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['doc'] > 0)
                      <p>Receive Mail <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents.<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['doc'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['address'] > 0)
                      <p>Address Correction <a href="javascript::void(0)" class="tooltipkey" title="Incoming Packages: There is an INR 200 fee for packages that arrive at our distribution center with an incomplete address. You can avoid these fees by making sure the seller properly addresses your order. Outgoing Packages: Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000)* to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment. "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['address'], 2, ".", "")}}</span></p>
                      @endif

                      @php
                        $option = $shipment->option;
                      @endphp

                      @if($option->repack_amt > 0)
                      <p>Discard shoe boxes <a href="javascript::void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment will be incurred to discard shoe boxes)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->repack_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->sticker_amt > 0)
                      <p>Fragile stikers <a href="javascript::void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 100 per shipment."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->sticker_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->extrapack_amt > 0)
                      <p>Extra packing material <a href="javascript::void(0)" class="tooltipkey" title="Additional protective packaging will be added to every shipment at the cost given below:<br> 100rs until 10kg<br>200rs for 10-20kg<br>300rs for above 20kg"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->extrapack_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->original_amt > 0)
                      <p>Ship in original boxes <a href="javascript::void(0)" class="tooltipkey" title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->original_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->giftwrap_amt > 0)
                      <p>Gift wrap <a href="javascript::void(0)" class="tooltipkey" title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->giftwrap_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->giftnote_amt > 0)
                      <p>Gift note <a href="javascript::void(0)" class="tooltipkey" title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->giftnote_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->consolid_amt > 0)
                      <p>Package consolidation <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate).<br>
                        <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->consolid_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->liquid_amt > 0)
                      <p>Special Package Clearance Fee  <a href="javascript::void(0)" class="tooltipkey" title="Any Package which requires Special Handling will be prompted via email to you. All liquids/ semi-liquids/ homemade food/ medicines/ ayurvedic products/ dangerous goods like nail polish, etc. will incur charges as below:<br>
                      Less than 5 kg = INR 1000 per shipment<br>
                      5 kg to 10 kg = INR 1500 per shipment<br>
                      Above 10 kg = INR 2500 per shipment<br>
                      The costs might not be limited to the above for all cases (for example, in cases of shipping heavy weight objects or heavy volume dangerous goods such as paints, etc.) - it could vary, and we shall inform you via email."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->liquid_amt, 2, ".", "")}}</span></p>
                      @endif

                      @if($option->overweight_amt > 0)
                      <p>Overweight Clearance Fee <a href="javascript::void(0)" class="tooltipkey" title="Any shipment which weighs more than 30 kg will be considered as a commercial shipment and will incur a custom clearance cost of INR 2500. If you would like to restrict a Maximum weight of individual boxes in a shipment, you can input the “maximum weight per shipment” of your choice, under your Shipping Preferences. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->overweight_amt, 2, ".", "")}}</span></p>
                      @endif
                  </div>
                  <ul>
                    <li>Package Level Charges <a href="javascript::void(0)" class="tooltipkey" title="<p>Shoppre includes all of the service charges (apart from shipping charges) under Package Level Charges. The break-up is as shown above.</p>
                      "><i class="fa fa-question-circle-o"></i></a> : <span><i class="fa fa-rupee"></i> {{number_format($shipment->packlevel, 2, ".", "")}}</span></li>
                    <li>Coupon Discount  <span>(-) <i class="fa fa-rupee"></i> {{number_format($payment['coupon'], 2, ".", "")}}</span></li>
                    <li>Loyalty Rewards <a href="javascript::void(0)" class="tooltipkey" title="<p>For every 1,000 Shoppre Loyalty Points you earn, a credit of INR 100 will automatically be applied to your next shipment</p>
                      "><i class="fa fa-question-circle-o"></i></a> <span>(-) <i class="fa fa-rupee"></i> {{number_format($payment['loyalty'], 2, ".", "")}}</span></li>
                  </ul>
                  <div class="checkbox">
                    <label>
                      @if(Request::get('insurance') == 1)
                        <input type="checkbox" name="insurance" value="1" checked>
                      @else
                        <input type="checkbox" name="insurance" value="1">
                      @endif
                      <span class="label">Protect your shipment with Shoppre insurance policy available for only <i class="fa fa-rupee"></i> 30.00 <a href="javascript::void(0)" class="tooltipkey" title="<p> Insure your shipment upto a total value of INR 6000 for only INR 30. Check our FAQ for more details.</p>"><i class="fa fa-question-circle-o"></i></a> </span>
                    </label>
                  </div>
                  <hr>
                  <div class="est_amount">
                    <h4>Final Shipping Charges</h4>
                    <h3><i class="fa fa-rupee"></i> {{number_format($payment['amount'], 2, ".", "")}}</h3>
                  </div>
                  <div class="form-group">
                    {{csrf_field()}}
                    <input type="hidden" name="shipid" value="{{$shipment->id}}">
                    <button type="submit" id="submitship" class="btn btn-shoppre">Ship Now</button>
                  </div>
                  <small>* Charges shown DO NOT include any duties and taxes due upon shipment arriaval in your receiving country.</small>
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

    $('input').keypress(function (e) {
      if (e.which == 13) {
        var token = $('input[name="_token"]').val();
        var insurance =  $("input[name='insurance']").is(':checked') ? 1 : 0;
        var promocode = $("input[name='promocode']").val();
        var payoption = $("input[name='payoption']:checked").val();

        $.redirect("",{
          _token: token,
          insurance: insurance,
          promocode: promocode,
          payoption: payoption
        }, 'GET');
      }
    });

    $("input:checkbox, input:radio").change(function() {
      var token = $('input[name="_token"]').val();
      var insurance =  $("input[name='insurance']").is(':checked') ? 1 : 0;
      var promocode = $("input[name='promocode']").val();
      var payoption = $("input[name='payoption']:checked").val();

      $.redirect("",{
        _token: token,
        insurance: insurance,
        promocode: promocode,
        payoption: payoption
      }, 'GET');
    });


    $("#submitship").click(function(e) {
      e.preventDefault();
      
      var token = $('input[name="_token"]').val();
      var shipid =  $("input[name='shipid']").val();
      var insurance =  $("input[name='insurance']").is(':checked') ? 1 : 0;
      var payoption =  $("input[name='payoption']:checked").val();

      $.redirect("/shipping/request/finalship",{
        _token: token,
        shipid: shipid,
        insurance: insurance,
        payoption: payoption
      }); 
    });
  </script>
@endsection