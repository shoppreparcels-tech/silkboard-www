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
              <li><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li class="active"><a href="JavaScript:Void(0)">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <div class="history">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                      <th>Order Date</th>
                      <th>Order Number</th>
                      <th>Status</th>
                      <th>Merchant</th>
                      <th>Invoice Total</th>
                    </tr>

                    @foreach($orders as $order)

                    <tr>
                      <td>{{date("d-M-Y", strtotime($order->updated_at))}}</td>
                      <td>{{$order->refnum}}</td>
                      <td>
                        @php
                          switch($order->status){
                            case('awaiting'):
                              echo 'Payment Awaiting';
                            break;
                            case('received'):
                              echo 'Received';
                            break;
                            case('processing'):
                              echo 'Processing';
                            break;
                            case('processed'):
                              echo 'Processed';
                            break;
                            case('canceled'):
                              echo 'Canceled';
                            break;
                            case('completed'):
                              echo 'Completed';
                            break;
                          }
                        @endphp
                        @if($order->status == 'awaiting' || $order->status == 'received')
                          <div><a href="{{route('personal.shopper.cancel', [$order->refnum])}}">Cancel</a></div>
                        @endif
                        
                      </td>
                      <td>{{$order->seller}}</td>
                      <td>
                        <span><i class="fa fa-rupee"></i> {{number_format($order->subtotal, 2, ".", "")}}</span>
                        <div><a href="{{route('personal.shopper.invoice', [$order->refnum])}}" target="_blank">View Your Receipt</a></div>
                      </td>
                    </tr>

                    @endforeach

                    
                  </table>
                  <div class="btminfo">
                    <a href="{{route('personal.shopper.form')}}" class="btn btn-shoppre">Continue Shopping <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')

@endsection