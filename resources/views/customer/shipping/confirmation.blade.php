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
                    <p>Total Weight <span class="pull-right">
                      <span class="totalweight">{{$shipment->weight}}</span> Kg.
                      </span>
                    </p>
                    <p>Packages <span class="pull-right">
                      <span class="totalcount">{{$shipment->count}}</span>
                      </span>
                    </p>
                    <hr>
                    <h4>Subtotal: <span class="pull-right"><i class="fa fa-rupee"></i> <span class="subtotal">{{number_format($shipment->subtotal, 2, ".", "")}}</span></span></h4>
                    <h4>Shipping Discount: <span class="pull-right"><i class="fa fa-rupee"></i> <span class="discount">{{number_format($shipment->discount, 2, ".", "")}}</span></span></h4>

                    @php
                      $estimated = $shipment->estimated - $shipment->packlevel;
                    @endphp

                    <h3>Estimated Shipping: <span class="pull-right"><i class="fa fa-rupee"></i> <span class="estimated">{{number_format($estimated, 2, ".", "")}}</span></span></h3>
                  </div>

                  
                  <div class="dash-sidecost">
                      @if($charges['storage'] > 0)
                        <p>Additional Storage Fee :<span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['storage'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['photo'] > 0)
                      <p>Photo Charges :<span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['photo'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['pickup'] > 0)
                      <p>Pick-up Service :<span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['pickup'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['handling'] > 0)
                      <p>Special Handling Fee :<span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['handling'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['doc'] > 0)
                      <p>Receive Mail :<span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['doc'], 2, ".", "")}}</span></p>
                      @endif
                      @if($charges['address'] > 0)
                      <p>Address Correction :<span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($charges['address'], 2, ".", "")}}</span></p>
                      @endif

                      @php
                        $option = $shipment->option;
                      @endphp

                      @if($option->repack_amt > 0)
                      <p>Discard shoe boxes <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->repack_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->sticker_amt > 0)
                      <p>Fragile stikers <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->sticker_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->extrapack_amt > 0)
                      <p>Extra packing material <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->extrapack_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->original_amt > 0)
                      <p>Ship in original boxes <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->original_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->giftwrap_amt > 0)
                      <p>Gift wrap <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->giftwrap_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->giftnote_amt > 0)
                      <p>Gift note <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->giftnote_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->consolid_amt > 0)
                      <p>Package consolidation <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->consolid_amt, 2, ".", "")}}</span></p>
                      @endif
                      @if($option->liquid_amt > 0)
                      <p>Clearance Charge <span class="pull-right"><i class="fa fa-rupee"></i>  {{number_format($option->liquid_amt, 2, ".", "")}}</span></p>
                      @endif
                  </div>
                  <ul>
                    <li>Package Level Charges : <span><i class="fa fa-rupee"></i> {{number_format($shipment->packlevel, 2, ".", "")}}</span></li>
                    <li>Estimated Tax : <span><i class="fa fa-rupee"></i> {{number_format($payment['tax'], 2, ".", "")}}</span></li>
                    <li>Coupon Discount : <span>(-) <i class="fa fa-rupee"></i> {{number_format($payment['coupon'], 2, ".", "")}}</span></li>
                    <li>Loyalty Rewards : <span>(-) <i class="fa fa-rupee"></i> {{number_format($payment['loyalty'], 2, ".", "")}}</span></li>
                  </ul>
                  <div class="checkbox">
                    <label>
                      @if(Request::get('insurance') == 1)
                        <input type="checkbox" name="insurance" value="1" checked>
                      @else
                        <input type="checkbox" name="insurance" value="1">
                      @endif
                      <span class="label">Protect your shipment with Shoppre insurance policy available for only <i class="fa fa-rupee"></i> 30.00</span>
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