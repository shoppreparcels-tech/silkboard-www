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
              <li><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li class="active"><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <div>
              <a href="{{route('personal.shopper.history')}}" class="btn self_his_btn">Orders Placed By Shoppre</a>
              <a href="JavaScript:Void(0)" class="btn self_his_btn active">Orders Placed By Yourself</a>
            </div>
            @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
              <hr>
            @endif
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
              <hr>
            @endif
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
                      <td>{{date("d-M-Y", strtotime($order->created_at))}}</td>
                      <td>{{$order->reference_number}}</td>
                      <td>
                        @php
                          switch($order->status){
                            case('awaiting'):
                              echo 'Awaiting Payment<br>';
                              echo '<a href="'.route('shopper.self.cancel', [$order->reference_number]).'">Cancel</a> / ';
                              echo '<a href="'.route('shopper.self.redirect.pay', [$order->reference_number]).'">Change Payment Method</a>';
                            break;
                            case('submit_pay'):
                              echo '<a href="'.route('shopper.self.cancel', [$order->reference_number]).'">Cancel</a> / ';
                              echo '<a href="'.route('shopper.self.redirect.pay', [$order->reference_number]).'">Submit Payment</a>';
                            break;
                            case('received'):
                              echo 'Payment Received';
                            break;
                            case('processing'):
                              echo 'Processing';
                            break;
                            case('processed'):
                              echo 'Processed';
                            break;
                            case('canceled'):
                              echo 'Cancelled';
                            break;
                            case('completed'):
                              echo 'Completed';
                            break;
                          }
                        @endphp
                      </td>
                      <td>{{$order->seller}}</td>
                      <td>
                        <span><i class="fa fa-rupee"></i> {{number_format($order->grand_total, 2, ".", "")}}</span>

                        @if($order->status != 'canceled')
                          <div><a href="{{route('shopper.self.invoice', [$order->reference_number])}}" target="_blank">View Your Receipt</a></div>
                        @endif
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
