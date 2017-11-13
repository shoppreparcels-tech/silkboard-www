@extends('layout')

@section('title', '- Personal Shopper')

@section('css_style')

@endsection

@section('content')

    @include('partials._banner')
    
    <section class="prsnlshopper">
      <div class="container">
        <div class="col-sm-12">
          <h2>PERSONAL SHOPPER</h2>
          <nav class="prsnlnav">
            <ul>
              <li><a href="{{route('personal.shopper')}}">How it works</a></li>
              <li class="active"><a href="JavaScript:Void(0)">Edit Order</a></li>
              <li><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <div class="orderForm">
              <p>Shoppre Personal Shopper service can be used for tangible merchandise purchases only, and cannot be used to pay for any type of services (e.g., gift certificates, student loans, credit card payments, internet service, subscriptions, memberships, utility bills, electronic downloads).</p>
              <p>It is your responsibility to ensure all items are in stock before placing your Personal Shopper request. If an item is not available, we will cancel that item and process the rest of your order. If you do not want to receive a partial order, please make a note in the special instructions section.</p>
              <form class="form-horizontal" id="order_form" method="post" action="{{route('personal.shopper.update')}}">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Select type of purchase</label>
                  <div class="col-sm-6">
                    <select name="type" class="form-control" required>
                      @php
                        $purtypes = array('Online Store', 'Facebook');
                        foreach($purtypes as $purtype){
                          if($purtype == $order->type){
                            echo "<option selected>$purtype</option>";
                          }else{
                            echo "<option>$purtype</option>";
                          }
                        }
                      @endphp
                    </select>
                    @if ($errors->has('type'))
                        <span class="error">{{ $errors->first('type') }}</span>
                    @endif
                  </div>
                </div>
                <h4>Add item from Online Store</h4>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Qty</label>
                  <div class="col-sm-4">
                    <select class="form-control" style="width:60px;" name="qty" required>
                    @php
                      for($i = 1; $i <= 20; $i++){
                        if($order->qty == $i){
                          echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                          echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                      }
                    @endphp
                    </select>
                    @if ($errors->has('qty'))
                        <span class="error">{{ $errors->first('qty') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Item URL</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="url" value="{{ $order->url }}" required>
                    @if ($errors->has('url'))
                        <span class="error">{{ $errors->first('url') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Item Number</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="item_num" value="{{ $order->item_num }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Item Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="item_name" value="{{ $order->item_name }}" required>
                    @if ($errors->has('item_name'))
                        <span class="error">{{ $errors->first('item_name') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Color</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="item_color" value="{{ $order->item_color }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Size</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="item_size" value="{{ $order->item_size }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Price per Item(in INR)</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="{{ $order->price }}" required>
                    @if ($errors->has('price'))
                        <span class="error">{{ $errors->first('price') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Note Concerning this item</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="note">{{ $order->note }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">If this item is not available</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="unavail" required>
                      @php
                        switch ($order->unavail) {
                          case 'cancel':
                              echo '<option value="cancel">Cancel this item, purchase all other available items</option>';
                          break;
                        }
                      @endphp
                    </select>
                    @if ($errors->has('unavail'))
                        <span class="error">{{ $errors->first('unavail') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2">
                    <a href="{{route('personal.shopper.cart')}}" class="btn btn-block btn-shoppre">Cancel</a>
                  </div>
                  <div class="col-sm-3">
                    {{csrf_field()}}
                    <input type="hidden" name="reqid" value="{{$order->id}}" required>
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
  <script type="text/javascript">
    $(document).ready(function(){
      $( "#order_form" ).validate({
        rules:
          {
              type:{required: true},
              qty:{required: true, min: 1},
              url: {required: true},
              item_name: {required: true},
              price: {required: true, number: true},
              unavail: {required: true}
          },
      });
    });
  </script>
@endsection