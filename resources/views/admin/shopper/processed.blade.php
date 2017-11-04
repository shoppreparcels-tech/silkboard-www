@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Personal Shopper Orders</h1>
                <span>View All Processed Orders</span>
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
                                    <td>{{date("d M Y", strtotime($order->updated_at))}}</td>
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
                                      
                                    </td>
                                    <td>{{$order->seller}}</td>
                                    <td>
                                      <span>INR {{number_format($order->subtotal, 2, ".", "")}}</span>
                                    </td>
                                    <td><a href="{{route('admin.shopper.order', [$order->id])}}" class="amber-text text-darken-4"><i class="ti-angle-double-right"></i></a></td>
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