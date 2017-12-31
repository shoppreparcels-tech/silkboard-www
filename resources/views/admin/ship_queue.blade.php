@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Shipment Orders</h1>
                <span>View All Shipment Orders</span>
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
                                        <th>#</th>
                                        <th>Weight</th>
                                        <th>Cost</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <td>{{$shipment->orderid}}</td>
                                            <td>{{$shipment->weight}} Kg</td>
                                            <td>INR {{number_format($shipment->finalamount, 2)}}</td>
                                            <td>
                                              @php
                                                switch($shipment->payoption){
                                                  case 'wire':
                                                    echo 'Wire transfer/Money order';
                                                  break;
                                                  case 'paypal':
                                                    echo 'PAYPAL';
                                                  break;
                                                  case 'paytm':
                                                    echo 'PAYTM';
                                                  break;
                                                }
                                              @endphp
                                            </td>
                                            <td>
                                              @php
                                                switch($shipment->paystatus){
                                                  case 'pending':
                                                    echo 'Pending';
                                                  break;
                                                  case 'success':
                                                    echo 'Success';
                                                  break;
                                                  case 'canceled':
                                                    echo 'Canceled';
                                                  break;
                                                  case 'error':
                                                    echo 'Error';
                                                  break;
                                                }
                                              @endphp
                                            </td>
                                            <td><a href="{{route('admin.shipping.order', [$shipment->id])}}"><i class="ti-settings"></i></a></td>
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