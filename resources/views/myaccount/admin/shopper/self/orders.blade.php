@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Self Shopper - Orders</h1>
                <span>View Orders Placed By Customer</span>
            </div>
        </div>
        <!-- Breadcrumb Bar -->
        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">
                          @if (session('message'))
                              <div class="alert alert-success">{{ session('message') }}</div>
                          @endif
                          @if (session('error'))
                              <div class="alert alert-danger">{{ session('error') }}</div>
                          @endif
                          <div class="projects scroll">
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                      <th>Customer</th>
                                      <th>Order Date</th>
                                      <th>Order Number</th>
                                      <th>Status</th>
                                      <th>Merchant</th>
                                      <th>Invoice Total</th>
                                      <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                  <tr>
                                    <td>{{$order->customer->name}}<br>
                                      <small style="font-size: 12px;">({{$order->customer->locker}})</small>
                                    </td>
                                    <td>{{date("d M Y", strtotime($order->created_at))}}</td>
                                    <td>{{$order->reference_number}}</td>
                                    <td>
                                      @php
                                        switch($order->status){
                                          case('submit_pay'):
                                            echo 'Submit Payment';
                                          break;
                                          case('awaiting'):
                                            echo 'Payment Awaiting';
                                          break;
                                          case('received'):
                                            echo 'Payment Received';
                                          break;
                                          case('processing'):
                                            echo 'Processing';
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
                                      <span>INR {{number_format($order->grand_total, 2, ".", "")}}</span>
                                    </td>
                                    <td><a href="{{route('admin.shopper.self.order', [$order->id])}}" class="amber-text text-darken-4"><i class="ti-angle-double-right"></i></a></td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection
