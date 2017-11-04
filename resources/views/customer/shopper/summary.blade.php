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
              <li><a href="{{route('personal.shopper.form')}}">Order Form</a></li>
              <li class="active"><a href="JavaScript:Void(0)">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="breadcrumb">
            <a href="{{route('personal.shopper.cart')}}" class="link">Shopping Cart</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <a href="{{route('personal.shopper.options')}}" class="link">Options</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link active">Summary</span>
            <span class="arrow active"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Payment</span>
          </div>
          <div class="prnslmain">
            <div class="shopkart">
              @if(!$orders->isEmpty())
              @foreach($orders as $order)
              <div class="sellerbox">
                <div class="title">
                    <div class="col-sm-3">
                      <p>{{$order->seller}}</p>
                    </div>
                    <div class="col-sm-2 col-sm-offset-7 text-right">
                      <p>{{$order->requests()->count()}} items</p>
                      <p>Rs. {{number_format($order->totalprice, 2, ".", "")}}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>Item Description</th>
                      <th>Qty</th>
                      <th width="170px">Each</th>
                      <th width="120px">Price</th>
                    </tr>
                    @php
                      $requests = $order->requests;
                    @endphp
                    @foreach($requests as $request)
                    <tr>
                      <td>
                        <p>{{$request->item_name}}</p>
                        <span class="color">{{$request->item_color}}</span>
                      </td>
                      <td>
                        <span class="qty">{{$request->qty}}</span>
                      </td>
                      <td><i class="fa fa-rupee"></i> {{number_format($request->price, 2, ".", "")}}</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($request->totalprice, 2, ".", "")}}</td>
                    </tr>
                    @endforeach
                    <tr>
                      <td colspan="2"></td>
                      <td>Sales Tax :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->sale_tax, 2, ".", "")}}</td>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td colspan="">Shipping to Bengaluru :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->ship_charge, 2, ".", "")}}</td>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td colspan="">Personal Shopper Cost :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->pscost, 2, ".", "")}}</td>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td colspan="">Merchant Total :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->subtotal, 2, ".", "")}}</td>
                    </tr>
                  </table>
                </div>
              </div>
              @endforeach

              <div class="subtotal">
                <h4>Estimated Total Cost: <i class="fa fa-rupee"></i> {{number_format($orders->sum('subtotal'), 2, ".", "")}}</h4>
              </div>
              <div class="btns">
                <a href="{{route('personal.shopper.options')}}" class="btn btn-shoppre"><i class="fa fa-angle-double-left"></i> Options</a>
                <p>Items in shopping cart more than 7 days will be removed</p>
                <a href="{{route('personal.shopper.payment')}}" class="btn btn-shoppre right">Payment <i class="fa fa-angle-double-right"></i></a>
                <div class="clearfix"></div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')

@endsection