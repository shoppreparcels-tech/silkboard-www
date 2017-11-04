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
            <a href="#" class="link active">Shopping Cart</a>
            <span class="arrow active"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Options</span>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Summary</span>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link">Payment</span>
          </div>
          <div class="prnslmain">
            <div class="shopkart">
              @if(!$orders->isEmpty())
                @php $ordersprice = 0; @endphp
                @foreach($orders as $order)
                <div class="sellerbox">
                  <div class="title">
                    <div class="col-sm-3">
                      <p>{{$order->seller}}</p>
                    </div>
                    <div class="col-sm-2 col-sm-offset-7 text-right">
                      <p>{{$order->requests()->count()}} items</p>
                      <p>Rs. {{number_format($order->totalprice, 2, ".", "")}}</p>
                      <a href="#" class="delete">Delete All <i class="fa fa-trash"></i></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th colspan="3">Item Description</th>
                        <th>Qty</th>
                        <th>Each</th>
                        <th>Price</th>
                      </tr>
                      @php
                        $requests = $order->requests;
                      @endphp
                      @foreach($requests as $request)
                      <tr>
                        <td>
                          <a href="#"><i class="fa fa-trash"></i><span>Delete</span></a>
                        </td>
                        <td>
                          <a href="#"><i class="fa fa-pencil"></i><span>Edit</span></a>
                        </td>
                        <td>
                          <p>{{$request->item_name}}</p>
                          <span class="color">{{$request->item_color}}</span>
                          <span class="unavail">(If this item is not available: 
                            @php
                              switch($request->unavail){
                                case 'cancel':
                                  echo 'Cancel this item, purchase all other available items';
                                break;
                              }
                            @endphp
                           )</span>
                        </td>
                        <td>
                          <span class="qty">{{$request->qty}}</span>
                        </td>
                        <td><i class="fa fa-rupee"></i> {{number_format($request->price, 2, ".", "")}}</td>
                        <td><i class="fa fa-rupee"></i> {{number_format($request->totalprice, 2, ".", "")}}</td>
                      </tr>
                      @endforeach
                    </table>
                    @php
                      $ordersprice += $order->totalprice;
                    @endphp
                  </div>
                </div>
                @endforeach

              <div class="subtotal">
                <h4>Subtotal: <i class="fa fa-rupee"></i> {{number_format($ordersprice, 2, ".", "")}}</h4>
              </div>
              <div class="btns">
                <a href="{{route('personal.shopper.form')}}" class="btn btn-shoppre"><i class="fa fa-angle-double-left"></i> Order Form</a>
                <p>Items in shopping cart more than 7 days will be removed</p>
                <a href="{{route('personal.shopper.options')}}" class="btn btn-shoppre right">Options <i class="fa fa-angle-double-right"></i></a>
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