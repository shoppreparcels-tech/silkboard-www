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
              <li><a href="{{route('personal.shopper.form')}}">Order Form</a></li>
              <li class="active"><a href="JavaScript:Void(0)">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="breadcrumb">
            <a href="{{route('personal.shopper.cart')}}" class="link">Shopping Cart</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link active">Options</span>
            <span class="arrow active"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Summary</span>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Payment</span>
          </div>
          <div class="prnslmain">
            <div class="shopkart">
              @if(!$orders->isEmpty())
              <form method="post" action="{{route('personal.shopper.options.submit')}}">
                {{csrf_field()}}
              @php $ordersprice = 0; @endphp
              @foreach($orders as $order)
              <div class="sellerbox">
                <div class="title">
                  <div class="col-sm-3">
                    <p>{{$order->seller}}</p>
                  </div>
                  <div class="col-sm-2 col-sm-offset-7 text-right">
                    <p>{{$order->requests()->count()}} items</p>
                    <p>Rs. {{number_format($order->total_price, 2, ".", "")}}</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="optform">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sales Tax charged by the seller <a href="#" class="tooltipkey" title="This is the tax charged by seller. At times, when you shop from some websites, you will notice that you can view the tax amount only towards the end (when you checkout, just before making payment). Please input the value here, if you see such an amount at the end."><i class="fa fa-question-circle-o"></i></a></label>
                        <input type="text" class="form-control" name="sales_tax[{{$order->id}}]" value="{{number_format($order->sales_tax, 2, '.', '')}}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Shipping to Bengaluru (Pin Code : 560032) <a href="#" class="tooltipkey" title="At times, when you shop from some websites, you will notice that you can view the domestic shipping amount only towards the end (when you checkout, just before making payment). Please input the value here, if you see such an amount at the end."><i class="fa fa-question-circle-o"></i></a></label>
                        <input type="text" class="form-control" name="delivery_charge[{{$order->id}}]" value="{{number_format($order->delivery_charge, 2, '.', '')}}">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Promotional Code <a href="#" class="tooltipkey" title="This is a code used by the seller to provide a discout for the items purchased."><i class="fa fa-question-circle-o"></i></a></label>
                        <input type="text" class="form-control" name="promo_code[{{$order->id}}]" value="{{$order->promo_code}}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Promotional Description</label>
                        <input type="text" class="form-control" name="promo_info[{{$order->id}}]" value="{{$order->promo_info}}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>If this promotion is not available</label>
                        <select class="form-control" name="if_promo_unavailable[{{$order->id}}]">
                          <option value="proceed_without">Proceed without promotional code</option>
                          <option value="dont_buy">Do not buy any items from this website</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Ordering Instructions</label>
                        <textarea class="form-control" rows="6" name="instruction[{{$order->id}}]" placeholder="Enter any special ordering instructions here, if you have any.">{{$order->instruction}}</textarea>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  @php
                    $ordersprice += $order->total_price;
                  @endphp
                </div>
              </div>
              @endforeach

              <div class="sub_total">
                <h4>Subtotal: <i class="fa fa-rupee"></i> {{number_format($ordersprice, 2, ".", "")}}</h4>
              </div>
              <div class="btns">
                <a href="{{route('personal.shopper.cart')}}" class="btn btn-shoppre"><i class="fa fa-angle-double-left"></i> Shopping Cart</a>

                <button type="submit" class="btn btn-shoppre right">Summary <i class="fa fa-angle-double-right"></i></button>
                <div class="clearfix"></div>
              </div>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')

@endsection
