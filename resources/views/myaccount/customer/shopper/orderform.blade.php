@extends('myaccount.layout')

@section('title', '- Personal Shopper')

@section('css_style')

@endsection

@section('content')



    <section class="prsnlshopper">
      <div class="container">
        <div class="col-sm-12">
          <h2>PERSONAL SHOPPER</h2>
          <nav class="prsnlnav">
            <ul>
              <li><a href="{{route('personal.shopper')}}">How it works</a></li>
              <li class="active"><a href="JavaScript:Void(0)">Order Form</a></li>
              <li><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <div class="orderForm">
              <p>Shoppre Personal Shopper service can be used for tangible merchandise purchases only, and cannot be used to pay for any type of services (e.g., gift certificates, student loans, credit card payments, internet service, subscriptions, memberships, utility bills, electronic downloads).</p>
              <p>It is your responsibility to ensure all items are in stock before placing your Personal Shopper request. If an item is not available, we will cancel that item and process the rest of your order. If you do not want to receive a partial order, please make a note in the special instructions section.</p>

              <p><strong>You can choose if you wish to <span style="color: #003d98;">place the orders yourself</span>, or if you want <span style="color: #003d98;">Shoppre to place the orders for you</span>. The cost is the same.</strong></p>


              <div class="text-center">
                <div class="ps_click_box self">
                  <h3>Do you want to place the orders yourself?</h3>
                  <p>
                    > Make your purchase on different websites and choose COD as mode of payment,<br>
                    > Submit the payment to us immediately so that we can receive your parcels,<br>
                    > and we shall notify you!
                  </p>
                </div>
                @if ($customer->is_migrated == 2)

                    {{--<div class="ps_click_box shoppre">--}}
                    <div style="text-align: left;color:white;display: inline-block; width: 40%;border: 1px solid #ccc; vertical-align: top; min-height: 235px; padding: 25px; margin: 15px;background: #fe9611; border-radius: 10px;cursor: pointer;">
                      <a href="{{route('shopper.migrate')}}">
                      <h3 style="text-align: left;color:white;">Do you want Shoppre to place the orders for you?</h3>
                      <p style="text-align: left;color:white;">
                        > Fill up the order form,<br>
                        > All your items will go into the Shopping Cart,<br>
                        > Submit the payment to us,<br>
                        > and we shall process the purchase and notify you!</p>
                      </a>
                    </div>
                @endif
                @if ($customer->is_migrated != 2)
                  <div class="ps_click_box shoppre">
                    <h3>Do you want Shoppre to place the orders for you?</h3>
                    <p>
                      > Fill up the order form,<br>
                      > All your items will go into the Shopping Cart,<br>
                      > Submit the payment to us,<br>
                      > and we shall process the purchase and notify you!</p>
                  </div>
                @endif

              </div>

              <form class="form-horizontal self_form" id="self_form" method="post" action="{{route('shopper.self.submit')}}" enctype="multipart/form-data" autocomplete="off" style="display: none;">
                <h4>TO PLACE THE ORDERS YOURSELF:</h4>
                <p>Please choose "<u>Cash on Delivery</u>" while making your purchases from various websites in India.</p>
                <p><u>Also note that you will have to submit your total payment to Shoppre BEFORE your items arrive at our facility.</u> If we haven’t received your payment or there is an error, we will be UNABLE to collect your items and pay on your behalf. So please submit your payment to Shoppre immediately as you finish your purchases on your favorite websites.</p>
                <div id="self_errors">

                </div>
                <div class="form-group">
                  <label class="control-label" style="margin-left: 15px;">Phone Number</label>
                    <div class="col-sm-2">
                      <select class="select2 form-control" name="country_code">
                        <option value="">Country Code</option>
                        @foreach($countries as $country)
                          <option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
                        @endforeach
                      </select>
                      @if ($errors->has('country_code'))
                        <span class="error">{{ $errors->first('country_code') }}</span>
                      @endif
                    </div>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                      @if ($errors->has('phone'))
                        <span class="error">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                </div>
                <ol>
                  <li id="selfol_li0" data-olli="0">
                    <div class="col-sm-6">
                      <label>Website URL that you shopped from</label>
                      <input type="text" class="form-control self_url" name="url[0]" required data-rule-url="true" placeholder="eg: http://www.amazon.in">
                      <label style="margin-top: 15px;">Upload Invoice</label>
                      <input type="file" name="document[0]" class="form-control" required accept="image/*, image/x-eps,application/pdf" data-urle-filesize="1">
                    </div>
                    <div class="col-sm-3">
                      <label>Total Amount(in INR)</label>
                      <input type="text" class="form-control self_amt" name="amount[0]" data-rule-number="true" data-rule-min="1" placeholder="0.00" required>
                    </div>
                    <div class="col-sm-2">
                      <label>Number of Items</label>
                      <input type="text" class="form-control self_qty" name="quantity[0]" required data-rule-digits="true" data-rule-min="1">
                    </div>
                    <div class="col-sm-1">
                      <a href="#" class="remove" data-litarget="0">Remove</a>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ol>

                <a href="#" id="inputplus" class="btn btn-plus"><i class="fa fa-plus"></i> Add more items that you have purchased on Cash-on-Delivery</a>

                <div class="calc_box">
                  <h5>Total value of items : INR <span id="self_total">0.00</span></h5>
                  <div id="self_sellers"></div>
                  <h5 class="total">Total Amount to be paid to Shoppre : INR <span id="self_grand_total">0.00</span></h5>
                </div>

                <div class="form-group">
                  <div class="col-sm-5">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-block btn-shoppre" style="font-weight: 800;">SUBMIT PAYMENT <span class="text-red">*</span></button>
                    <span class="text-red">* Once you click "Submit Payment", you can no longer return to this form to modify.</span>
                  </div>
                </div>
              </form>

              <form class="form-horizontal" id="order_form" method="post" action="{{route('personal.shopper.submit')}}" autocomplete="off" style="display: none;">
                <div class="form-group">
                  <label class="control-label" style="margin-left: 15px;">Phone Number</label>
                    <div class="col-sm-2">
                      <select class="select2 form-control" name="country_code">
                        <option value="">Country Code</option>
                        @foreach($countries as $country)
                          <option value="{{ $country->phone_code }}">{{$country->iso}}(+{{$country->phone_code}})</option>
                        @endforeach
                      </select>
                      @if ($errors->has('country_code'))
                        <span class="error">{{ $errors->first('country_code') }}</span>
                      @endif
                    </div>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="phone" value="{{$cart == '' ? '' :$cart->phone}}" placeholder="Phone Number">
                      @if ($errors->has('phone'))
                        <span class="error">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Select type of purchase</label>
                  <div class="col-sm-6">
                    <select name="type" class="form-control" required>
                      <option>Online Store</option>
                      <option>Facebook</option>
                    </select>
                    @if ($errors->has('type'))
                        <span class="error">{{ $errors->first('type') }}</span>
                    @endif
                  </div>
                </div>
                <h4>Add item from Online Store</h4>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Quantity <span class="text-red">*</span></label>
                  <div class="col-sm-4">
                    <select class="form-control" style="width:75px;" name="quantity" required>
                    @php
                      for($i = 1; $i <= 100; $i++){
                        if(old('quantity') == $i){
                          echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                          echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                      }
                    @endphp
                    </select>
                    @if ($errors->has('quantity'))
                        <span class="error">{{ $errors->first('quantity') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Item URL <span class="text-red">*</span> <a href="javascript:void(0)" class="tooltipkey" title="<img src='/img/ps_tool_1.png' />"><i class="fa fa-question-circle-o"></i></a> </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="url" value="{{ old('url') }}" required>
                    @if ($errors->has('url'))
                        <span class="error">{{ $errors->first('url') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Item Number/Code <a href="javascript:void(0)" class="tooltipkey" title="<img src='/img/ps_tool_2.png' />"><i class="fa fa-question-circle-o"></i></a></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="item_code" value="{{ old('item_code') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Item Name <span class="text-red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="item_name" value="{{ old('item_name') }}" required>
                    @if ($errors->has('item_name'))
                        <span class="error">{{ $errors->first('item_name') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Color</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="item_color" value="{{ old('item_color') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Size</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="item_size" value="{{ old('item_size') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Price per Item(in INR)  <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}" required>
                    @if ($errors->has('price'))
                        <span class="error">{{ $errors->first('price') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Note Concerning this item</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="note">{{ old('note') }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">If this item is not available <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <select class="form-control" name="if_item_unavailable" required>
                      <option value="cancel">Cancel this item, purchase all other available items</option>
                      <option value="cancel_all">Cancel all items from this site</option>
                    </select>
                    @if ($errors->has('if_item_unavailable'))
                        <span class="error">{{ $errors->first('if_item_unavailable') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2">
                    <a href="#" class="btn btn-block btn-shoppre">Cancel</a>
                  </div>
                  <div class="col-sm-3">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-block btn-shoppre">Add to shopping cart</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script src="{{asset('js/validate.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $( "#order_form" ).validate({
        rules:
          {
              type:{required: true},
              quantity:{required: true, min: 1},
              url: {required: true},
              item_name: {required: true},
              price: {required: true, number: true},
              if_item_unavailable: {required: true}
          },
      });
    });
  </script>

  <script type="text/javascript">

    jQuery.extend(jQuery.validator.messages, {
      number: "Please enter a valid numeric value.",
      digits: "Please enter only digits.",
      min: jQuery.validator.format("Please enter a value greater than 0.")
    });

    $("#self_form").validate({
      errorElement: 'span',
    });

    $('.ps_click_box.self').click(function(e) {
        e.preventDefault();
        $('.ps_click_box').removeClass('active');
        $(this).addClass('active');
        $('#self_form').slideDown();
        $('#order_form').slideUp();
    });

    $('.ps_click_box.shoppre').click(function(e) {
        e.preventDefault();
        $('.ps_click_box').removeClass('active');
        $(this).addClass('active');
        $('#order_form').slideDown();
        $('#self_form').slideUp();
    });

    $("#inputplus").click(function(e) {
      e.preventDefault();
      var i = $("#self_form ol li:last").attr('data-olli');
      ++i;
      $("#self_form ol").append('<li id="selfol_li'+i+'" data-olli="'+i+'"><div class="col-sm-6"><label>Website URL that you shopped from</label><input type="text" class="form-control self_url" name="url['+i+']" required data-rule-url="true" placeholder="eg: http://www.amazon.in"><input type="file" name="document['+i+']" class="form-control" required accept="image/*, image/x-eps,application/pdf"></div><div class="col-sm-3"><label>Total Amount(in INR)</label><input type="text" class="form-control self_amt" placeholder="0.00" name="amount['+i+']"  data-rule-number="true" data-rule-min="1" required></div><div class="col-sm-2"><label>Number of Items</label><input type="text" class="form-control self_qty" name="quantity['+i+']"  data-rule-digits="true" data-rule-min="1" required></div><div class="col-sm-1"><a href="#" class="remove" data-litarget="'+i+'">Remove</a></div><div class="clearfix"></div></li>');
    });

    $(document).on("click", "#self_form .remove", function(e){
      e.preventDefault();
      var i = $(this).attr('data-litarget');
      $('#selfol_li'+i).remove();

      updateCalulation();

    });

    $(document).on("keyup", ".self_amt, .self_url, .self_qty", function(e){
      e.preventDefault();
      updateCalulation();

    });

    function updateCalulation() {

      var total = 0;
      var grand_total = 0;
      $('.self_amt').each(function(){
        var a = $(this).val();
        if (a && !isNaN(a) && a <= 2147483647 && a >= 0) {
          total += parseFloat(a);
        }
      });

      grand_total += parseFloat(total);
      $('#self_total').text(total.toFixed(2));

      var sellers = [];
      i = 0;

      $('.self_url').each(function(key, val){
        var url = $(this).val();
        var urlkey = $(this).attr('name').match(/\[(.*?)\]/)[1];
        if(url){
          var hostname = $('<a>').prop('href', url).prop('hostname').replace('www.','');
          var amt = parseFloat($('input[name="amount['+urlkey+']"]').val());
          var quantity = parseInt($('input[name="quantity['+urlkey+']"]').val());

          if(amt && !isNaN(amt) && amt >= 0 && quantity && !isNaN(quantity) && quantity >= 0){
            if (sellers.hasOwnProperty(hostname)) {
              sellers[hostname]['amt'] += amt;
              sellers[hostname]['quantity'] += quantity;
            }else{
              sellers[hostname] = [];
              sellers[hostname]['amt'] = amt;
              sellers[hostname]['quantity'] = quantity;
            }
          }

          i++;
        }
      });

      $("#self_sellers").html('');
      for(var key in sellers) {

          var fee = sellers[key]['amt'] * 7 / 100;
          if(fee < 200){ fee = 200.00; }
          if (sellers[key]['quantity'] > 15) {
            fee += (sellers[key]['quantity'] - 15) * 50;
          }

          grand_total += parseFloat(fee);

          $("#self_sellers").append('<h5>Personal Shopper Fee for Seller ('+key+') <a href="javascript:void(0)" class="tooltipkey" title="<p><strong>Shoppre.com Personal Shopper Service costs</strong></p> <ul> <li>A Personal Shopper Service Cost is applied per order, not per item. If you request multiple items from a single seller, you will pay only one service cost. Orders with items from multiple sellers will be charged a service cost for each seller.</li> <li>Shoppre\'s Personal Shopper Fee is 7% of the order total (minimum INR 200.00)</li> <li>Personal Shopper orders with more than 15 items per online seller will incur INR 50 per item cost for every item over 15.</li> </ul>"><i class="fa fa-question-circle-o"></i></a> : INR '+fee.toFixed(2)+'</h5>');
      }

      $('#self_grand_total').text(grand_total.toFixed(2));
    }

    $(document).ready(function() {
      $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
    });
</script>
@endsection
