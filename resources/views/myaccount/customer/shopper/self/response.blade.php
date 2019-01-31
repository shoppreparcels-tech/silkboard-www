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
              <li class="active"><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <div class="payresponse">
              <h2>Thank You!</h2>
              <p>We have received your Personal Shopper order.</p>
              <p>We will email you once the order is completed or if we have any questions/problems.</p>
              @if($payment_gateway_name == 'wire')
              <div class="wireoption">
                <p>We will process your order after payment received in below bank account.</p>
                <h4>Account Name: INDIANSHOPPRE LLP</h4>
                <p>Account Number: 918020022874771</p>
                <p>Branch: Bangalore</p>
                <p>IFS Code: UTIB0000009</p>
                <p>MICR Code: 560211002</p>
                <p>E-mail ID: finance@shoppre.com</p>
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
                      <p>Order Number : {{$order->reference_number}}</p>
                      <p>{{date("D, F j, Y", strtotime($order->created_at))}}</p>
                      <a href="{{route('shopper.self.invoice', [$order->reference_number])}}" target="_blank">View Your Receipt</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th>Website URL</th>
                          <th>Number of Items</th>
                          <th width="200px">Total Price</th>
                        </tr>
                        @php
                          $requests = $order->requests;
                        @endphp
                        @foreach($requests as $request)
                          <tr class="item">
                            <td>{{$request->url}} <a class="link" href="/uploads/shopper/self/invoice/{{$order->id}}/{{$request->invoice}}" target="_blank" style="display: inline;">(Invoice)</a></td>
                            <td>{{$request->quantity}}</td>
                            <td>INR {{number_format($request->price, 2, ".", "")}}</td>
                          </tr>
                        @endforeach
                        <tr>
                          <td colspan="2"></td>
                          <td>Personal Shopper Cost :</td>
                          <td><i class="fa fa-rupee"></i> {{number_format($order->total_fee, 2, ".", "")}}</td>
                        </tr>
                        @if($order->payment_gateway_fee > 0)
                        <tr class="item">
                          <td colspan="2"></td>
                          <td>Payment Gateway Fee :</td>
                          <td><i class="fa fa-rupee"></i> {{number_format($order->payment_gateway_fee, 2, ".", "")}}</td>
                        </tr>
                        @endif
                        <tr>
                          <td colspan="2"></td>
                          <td colspan="">Merchant Total :</td>
                          <td><i class="fa fa-rupee"></i> {{number_format($order->grand_total, 2, ".", "")}}</td>
                        </tr>
                      </table>
                    </div>
                </div>
                @endforeach
                <div class="btns">
                  <a href="{{route('shopper.self.history')}}" class="btn btn-shoppre">Personal Shopper Order History</a>
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
