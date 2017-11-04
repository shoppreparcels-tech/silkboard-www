@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Incoming Orders</h1>
                <span>View All Incoming Orders</span>
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
                                        <th>Seller</th>
                                        <th>Tracking No.</th>
                                        <th>Invoice No.</th>
                                        <th>Notes</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td><a href="{{route('admin.customer.edit', [$order->customer_id])}}" target="_blank">{{$order->customer->name}}</a></td>
                                            <td>{{$order->seller}}</td>
                                            <td>{{$order->track_no}}</td>
                                            <td>{{$order->invoice_no}}</td>
                                            <td>{{$order->notes}}</td>
                                            <td><a href="/uploads/incoming/{{$order->document}}" target="_blank"><i class="ti-settings"></i></a></td>
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