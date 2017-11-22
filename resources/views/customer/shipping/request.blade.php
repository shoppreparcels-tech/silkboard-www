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
                            <td>{{$packages->sum('weight')}} Kg.</td>
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
                    <div class="shiprightbox">
                      <h3 class="title">Shipping Preferences Summary</h3>
                      <div class="checkbox">
                        <label>
                          @if($options['repack'] == '1')
                          <input type="checkbox" name="repack" value="1" checked>
                          @else
                          <input type="checkbox" name="repack" value="1">
                          @endif
                          <span class="label">Discard shoe boxes</span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['sticker'] == '1')
                          <input type="checkbox" name="sticker" value="1" checked>
                          @else
                          <input type="checkbox" name="sticker" value="1">
                          @endif
                          <span class="label">Fragile stikers</span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['extrapack'] == '1')
                          <input type="checkbox" name="extrapack" value="1" checked>
                          @else
                          <input type="checkbox" name="extrapack" value="1">
                          @endif
                          <span class="label">Add extra packing material</span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['original'] == '1')
                          <input type="checkbox" name="original" value="1" checked>
                          @else
                          <input type="checkbox" name="original" value="1">
                          @endif
                          <span class="label">Ship in original boxes</span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['giftwrap'] == '1')
                          <input type="checkbox" name="giftwrap" value="1" checked>
                          @else
                          <input type="checkbox" name="giftwrap" value="1">
                          @endif
                          <span class="label">Gift wrap</span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($options['giftnote'] == '1')
                          <input type="checkbox" name="giftnote" value="1" checked>
                          @else
                          <input type="checkbox" name="giftnote" value="1">
                          @endif
                          <span class="label">Gift note</span>
                        </label>
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
                        <li class="active">Additional Storage Fee <a href="javascript::void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is shipped, picked-up,  discarded or returned to the sender."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['storage'], 2, ".", "")}}</span></li>
                        @else
                        <li>Additional Storage Fee <a href="javascript::void(0)" class="tooltipkey" title="Shoppre offers FREE storage up to 20 days. Packages stored past the free storage period will incur storage fees of INR 100/day from the 21st Day. Storage fees continue to accrue until your package is shipped, picked-up,  discarded or returned to the sender."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['photo'] > 0)
                        <li class="active">Photo Charges <a href="javascript::void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 100. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <p>Scan Documents: We can scan your documents (2 kgs and below) for a cost of INR 40/page (minimum INR 100).</p>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['photo'], 2, ".", "")}}</span></li>
                        @else
                        <li>Photo Charges <a href="javascript::void(0)" class="tooltipkey" title="<p>Basic Photos: We take upto 5 Basic photographs of all your items for a cost of INR 100. </p>

                        <p>Additional Photos: You can also request upto 10 additional photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500.<p>

                        <p>Scan Documents: We can scan your documents (2 kgs and below) for a cost of INR 40/page (minimum INR 100).</p>"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['consolid'] > 0)
                        <li class="active">Consolidation Charges <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['consolid'], 2, ".", "")}}</span></li>
                        @else
                        <li>Consolidation Charges <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges a small fee of INR 100 per package (not per item) that you add to the parcel (when you have two or more packages to consolidate)."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($charges['pickup'] > 0)
                        <li class="active">Pick-up Service <a href="javascript::void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['pickup'], 2, ".", "")}}</span></li>
                        @else
                        <li>Pick-up Service <a href="javascript::void(0)" class="tooltipkey" title="The service fee is as below:<br>From Bangalore, INR 40/kg, Minimum INR 100<br>From any other city, INR 50/kg, Minimum INR 200"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
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
                        <li class="active">Receive Mail <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['doc'], 2, ".", "")}}</span></li>
                        @else
                        <li>Receive Mail <a href="javascript::void(0)" class="tooltipkey" title="Shoppre charges an additional amount of INR 100 for receiving a package which is considered as a document (2 kg and below). Shipping charges of Documents slightly vary from that of Non-documents."><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00
                        @endif

                        @if($charges['address'] > 0)
                        <li class="active">Address Correction <a href="javascript::void(0)" class="tooltipkey" title="Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000) to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment. "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">{{number_format($charges['address'], 2, ".", "")}}</span></li>
                        @else
                        <li>Address Correction <a href="javascript::void(0)" class="tooltipkey" title="Please take extra care to make sure that you have entered the correct address while making an International Shipment. The courier will charge an additional fee (between INR 3000 to INR 7000) to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment. "><i class="fa fa-question-circle-o"></i></a> <span class="pull-right">0.00</span></li>
                        @endif

                        @if($options['liquid'] == '1')
                        <li class="active">Clearance Charge <span class="pull-right">To Be Calculated</span></li>
                        @else
                        <li>Clearance Charge <span class="pull-right">0.00</span></li>
                        @endif

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
          invoice_taxid: invoice_taxid,
          invoice_personal: invoice_personal,
          invoice_include: invoice_include,
          addressid : addressid
        });
      }

    });



  </script>
@endsection