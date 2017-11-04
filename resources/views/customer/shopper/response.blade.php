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
              <li class="active"><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <div class="payresponse">
              <h2>Thank You!</h2>
              <p>We have received your Personal Shopper order.</p>
              <p>We will email you once the order is completed or if we have any questions/problems.</p>
              @if($payoption == 'wire')
              <div class="wireoption">
                <p>We will process your order after payment received in below bank account.</p>
                <h4>Account Name: INDIANSHOPPRE LLP</h4>
                <p>Account Number: 917020057881967</p>
                <p>Branch: Bangalore</p>
                <p>IFS Code: UTIB0000009</p>
                <p>MICR Code: 560211002</p>
                <p>E-mail ID: support@shoppre.com</p>
                <p>Address: NO. 9, M.G. ROAD, BLOCK 'A'</p>
                <p>Swift Code: AXISINBB009</p>
              </div>
              @endif
            </div>
            <div class="shopkart">
              @if(!$orders->isEmpty())
              @foreach($orders as $order)
              <div class="sellerbox">
                <div class="title">
                    <div class="col-sm-6">
                      <p>{{$order->seller}}</p>
                    </div>
                    <div class="col-sm-6 text-right">
                      <p>Order Number : {{$order->refnum}}</p>
                      <p>{{date("D, F j, Y", strtotime($order->updated_at))}}</p>
                      <a href="{{route('personal.shopper.invoice', [$order->refnum])}}" target="_blank">View Your Receipt</a>
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
              <div class="btns">
                <a href="{{route('personal.shopper.history')}}" class="btn">Personal Shopper Order History</a>
                <a href="{{route('personal.shopper.form')}}" class="btn btn-shoppre right">Continue Shopping</a>
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