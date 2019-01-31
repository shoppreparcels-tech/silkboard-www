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
            <a href="{{route('personal.shopper.options')}}" class="link">Options</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link active">Summary</span>
            <span class="arrow active"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Payment</span>
          </div>
          <div class="prnslmain">
            @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
              <hr>
            @endif
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
                      <p>Rs. {{number_format($order->total_price, 2, ".", "")}}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>Item Description</th>
                      <th>Qty</th>
                      <th width="200px">Each</th>
                      <th width="120px">Price</th>
                    </tr>
                    @php
                      $requests = $order->requests;
                      $i = 0;
                    @endphp
                    @foreach($requests as $request)
                    <tr>
                      <td>
                        <p>{{++$i}}. <a href="{{$request->url}}" style="display: inline; color: #000; font-weight: 700;">{{$request->item_name}} @if(!empty($request->item_code))
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
                      <td colspan="">Personal Shopper Cost <a style="display: inline-block"  href="javascript:void(0)" class="tooltipkey" title="<strong>Shoppre.com Personal Shopper Service costs</strong><br><br><ul><li>A Personal Shopper Service Cost is applied per order, not per item. If you request multiple items from a single seller, you will pay only one service cost. Orders with items from multiple sellers will be charged a service cost for each seller.</li><li>Shoppre's Personal Shopper Fee is 7% of the order total (minimum INR 200.00).</li><li>Personal Shopper orders with more than 15 items per online seller will occur an INR 50 per item cost for every item over 15.</li></ul>"><i class="fa fa-question-circle-o"></i></a> :</td>
                      <td><i class="fa fa-rupee"></i> {{number_format($order->personal_shopper_cost, 2, ".", "")}}</td>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td style="border-top: 1px solid #ccc;">Merchant Total :</td>
                      <td style="border-top: 1px solid #ccc;"><i class="fa fa-rupee"></i> {{number_format($order->sub_total, 2, ".", "")}}</td>
                    </tr>
                  </table>
                </div>
              </div>
              @endforeach

              <div class="sub_total">
                <h4>Estimated Total Cost: <i class="fa fa-rupee"></i> {{number_format($orders->sum('sub_total'), 2, ".", "")}}</h4>
              </div>
              <div class="btns">
                <a href="{{route('personal.shopper.options')}}" class="btn btn-shoppre"><i class="fa fa-angle-double-left"></i> Options</a>

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
