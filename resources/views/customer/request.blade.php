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
                        @if($editadss->default == "yes")
                          <input type="radio" name="addressid" value="{{$editadss->id}}" checked>
                        @else
                          <input type="radio" name="addressid">
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
                          @endforeach
                          <tr class="totalbtm">
                            <td></td>
                            <td></td>
                            <td>Shipment Totals</td>
                            <td><i class="fa fa-rupee"></i> {{number_format($shipping['price'], 2, ".", "")}}</td>
                            <td>{{$shipping['weight']}} Kg.</td>
                          </tr>
                        </table>
                      </div>
                      <a href="{{route('shipping.request.cancel', [$shipment->orderid])}}" class="cancel">Cancel Request</a>
                  </div>
                </div>
              </div>
              <div class="longblock">
                <h4>3.Payment options</h4>
                <div id="changePayment">
                  <div class="edit">
                    <div class="radio">
                      <label>
                        <input type="radio" name="payoption" value="wire" checked>
                        <span class="label">Wire transfer/money order</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="shipsidebar">
                  <div class="form-group">
                    <input type="text" name="promocode" placeholder="Enter Promo Code" class="form-control">
                  </div>
                  <ul>
                    <li>Estimated Shipping Charges : <span><i class="fa fa-rupee"></i> {{number_format($shipping['estimated'], 2, ".", "")}}</span></li>
                    <li>Estimated Tax : <span><i class="fa fa-rupee"></i> {{number_format($payment['tax'], 2, ".", "")}}</span></li>
                    <li>Coupon Discount : <span>(-) <i class="fa fa-rupee"></i> 0.00</span></li>
                    <li>Loyalty Rewards : <span>(-) <i class="fa fa-rupee"></i> {{number_format($payment['loyalty'], 2, ".", "")}}</span></li>
                  </ul>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="insurance" value="1">
                      <span class="label">Protect your shipment with Shoppre insurance policy available for only <i class="fa fa-rupee"></i> 20.00</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="giftnote" value="1">
                      <span class="label">Add a Gift Note for only <i class="fa fa-rupee"></i> 25.00</span>
                    </label>
                  </div>
                  <hr>
                  <div class="est_amount">
                    <h4>Estimated Shipping Charges</h4>
                    <h3><i class="fa fa-rupee"></i> {{number_format($payment['amount'], 2, ".", "")}}</h3>
                  </div>
                  <div class="form-group">
                    {{csrf_field()}}
                    <button type="submit" id="submit_shiprqst" class="btn btn-shoppre">Ship Now</button>
                  </div>
                  <small>Final shipping charges may vary slightly.Charges shown DO NOT include any duties and taxes due upon shipment arrival. Shipping costs can often be reduced by consolidating packages</small>
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
    $("#submit_shiprqst").click(function(e) {
      e.preventDefault();
      
      var token = $('input[name="_token"]').val();

      var insurance =  $("input[name='insurance']").is(':checked') ? 1 : 0;
      var giftnote =  $("input[name='giftnote']").is(':checked') ? 1 : 0;
      var payoption =  $("input[name='payoption']").val();
      var addressid =  $("input[name='addressid']").val();

      $.redirect("/shipping/request/submit",{
        _token: token,
        insurance: insurance,
        giftnote: giftnote,
        payoption: payoption,
        addressid: addressid,
      }); 
    });
  </script>
@endsection