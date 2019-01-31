@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
          <div class="page-title">
            <h1>Shoppre Admin Console</h1>
            <span>You have just signed in back</span>
          </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
          <div class="row">
            <div class="masonary">
              <div class="col s4">
                <div class="widget pink lighten-3">
                  <div class="widget-title light">
                    <h3>Users</h3>
                  </div>
                  <a href="https://pulse.shoppre.com/question/852" target="_blank">
                    <div class="main-counter">
                      <strong>{{$customer_count}} <i class="ti-arrow-up"></i></strong>
                      <span><i class="ti-bar-chart"></i></span>
                    </div>
                  </a>
                </div><!-- Widget -->
              </div>
              <div class="col s4">
                <div class="widget purple lighten-3">
                  <div class="widget-title light">
                    <h3>Packages</h3>
                  </div>
                  <div class="main-counter">
                    <strong>{{$package_count}}<i class="ti-arrow-up"></i></strong>
                    <span><i class=" ti-stats-up "></i></span>
                  </div>
                </div><!-- Widget -->
              </div>
              <div class="col s4">
                <div class="widget deep-orange lighten-3">
                  <div class="widget-title light">
                    <h3>Shippings</h3>
                  </div>
                  <div class="main-counter">
                    <strong>{{$shipment_count}}<i class="ti-arrow-up"></i></strong>
                    <span><i class=" ti-money "></i></span>
                  </div>
                </div><!-- Widget -->
              </div>
              @if(!empty($shipQueue))
                <div class="col s12">
                  <div class="widget z-depth-1">
                    <div class="widget-title">
                      <h3>Shipments in Progress</h3>
                      <p>Current Shipment Order Records</p>
                    </div>

                    <div class="projects scroll">
                      <div class="projects-table">
                        <table class="table">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Locker</th>
                            <th>Final Cost</th>
                            <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($shipQueue as $shipment)
                            <tr>
                              <td><a href="{{route('admin.shipping.order', [$shipment->id])}}" class="green-text">{{$shipment->order_id}}</a></td>
                              <td>{{$shipment->customer->name}}</td>
                              <td>{{$shipment->customer->locker}}</td>
                              <td>INR {{number_format($shipment->final_amount, 2)}}</td>

                              <td>
                                @php
                                  switch($shipment->shipping_status){
                                    case 'pending':
                                      echo 'Pending';
                                    break;
                                    case 'confirmation':
                                      echo 'Awaiting Payment Submission';
                                    break;
                                    case 'inreview':
                                      echo 'In Review';
                                    break;
                                    case 'inqueue':
                                      echo 'In Queue';
                                    break;
                                    case 'received':
                                      echo 'Payment Received';
                                    break;
                                    case 'dispatched':
                                      echo 'Dispatched';
                                    break;
                                    case 'delivered':
                                      echo 'Delivered';
                                    break;
                                    case 'canceled':
                                      echo 'Canceled';
                                    break;
                                  }
                                @endphp
                              </td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div><!-- Masonary -->
          </div>
        </div>
      </div><!-- Content Area -->

@endsection
