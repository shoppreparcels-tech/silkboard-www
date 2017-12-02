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

                          <div class="col s12">
                              <form method="get" action="{{route('admin.shipping')}}">
                                  {{csrf_field()}}
                                  <div class="input-field col s10">
                                      <input type="text" name="search" class="validate" value="{{Request::get('search')}}">
                                      <label class="">Search Shipments</label>
                                  </div>
                                  <div class="input-field col s2">
                                      <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Search</button>
                                  </div>
                              </form>
                          </div>

                          {{ $shipments->appends(Request::except('page'))->links() }}

                          <div class="projects scroll">
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Weight</th>
                                        <th>Est. Cost</th>
                                        <th>Final Cost</th>
                                        <th>Status</th>
                                        <th width="50px"></th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <td>{{$shipment->orderid}}</td>
                                            <td>{{$shipment->weight}} Kg</td>
                                            <td>INR {{number_format($shipment->estimated, 2)}}</td>
                                            <td>INR {{number_format($shipment->finalamount, 2)}}</td>
                                            
                                            <td>
                                              @php
                                                switch($shipment->shipstatus){
                                                  case 'pending':
                                                    echo 'Pending';
                                                  break;
                                                  case 'confirmation':
                                                    echo 'For Customer Confirmation';
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
                                            <td><a href="{{route('admin.shipping.order', [$shipment->id])}}" class="green-text"><i class="ti-angle-double-right"></i></a></td>
                                            <td><a href="{{route('admin.shipping.delete', [$shipment->id])}}" class="red-text"><i class="ti-trash"></i></a></td>
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