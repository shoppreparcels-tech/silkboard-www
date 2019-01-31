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
              <p>We have received your Personal Shopper order. Upon confirmation of your payment, Shoppre will make the purchase for you within a maximum period of 24 hours. Any difference in amount while we made your purchase will be settled at the end, which you can view under your Shoppre Wallet on the right side of your Locker.</p>
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
                      <a href="{{route('personal.shopper.invoice', [$order->reference_number])}}" target="_blank">View Your Receipt</a>
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
                        <p><a href="{{$request->url}}" style="display: inline; color: #000; font-weight: 700;">{{$request->item_name}} @if(!empty($request->item_code))
                            ({{$request->item_code}})
                          @endif
                          @if(!empty($request->item_size))
                            - Size: {{$request->item_size}}
                          @endif
                          </a>
                        </p>
                        @if(!empty($request->item_color))
                        <span class="color" style="margin-left: 18px;">Color: {{$request->item_color}}</span>
                        @endif
                        <span class="if_item_unavailable">(If this item is not available:
                          @php
                            switch($request->if_item_unavailable){
                              case 'cancel':
                                echo 'Cancel this item, purchase all other available items';
                              break;
                              case 'cancel_all':
                                echo 'Cancel all items from this site';
                              break;
                            }
                          @endphp
                         )</span><br>
                          @if(!empty($request->note))
                          <span class="if_item_unavailable" style="margin-left: 18px;">Note: {{$request->note}}</span>
                          @endif
                      </td>
                      <td>
                        <span class="quantity">{{$request->quantity}}</span>
                      </td>
                      <td><i class="fa fa-rupee"></i> {{number_format($request->price, 2, ".", "")}}</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($request->total_price, 2, ".", "")}}</td>
                    </tr>
                    @endforeach
                    <tr>
                      <td colspan="2">
                        @if(!empty($order->promo_code))
                          <span>Promotional Code : {{$order->promo_code}}
                            (If this promotion is not available:
                              {{$order->if_promo_unavailable === 'proceed_without' ? "Proceed Without" : ""}}
                              {{$order->if_promo_unavailable === 'dont_buy' ? "Do not buy any items from this website" : ""}}
                            )
                          </span><br>
                          @if(!empty($order->promo_info))
                          <span>Promotional Description: {{$order->promo_info}}</span>
                          @endif
                        @endif
                      </td>
                      <td>Sales Tax :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->sales_tax, 2, ".", "")}}</td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        @if(!empty($order->instruction))
                        <span>
                          Ordering instructions:
                          {{$order->instruction}}
                        </span>
                        @endif
                      </td>
                      <td colspan="">Shipping to Bengaluru :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->delivery_charge, 2, ".", "")}}</td>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td>Personal Shopper Cost :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->personal_shopper_cost, 2, ".", "")}}</td>
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
                      <td><i class="fa fa-rupee"></i> {{number_format($order->sub_total, 2, ".", "")}}</td>
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
