@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Shipment Requests - Options</h1>
                <span>View Shipments Under Review</span>
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
                                        <th>Name</th>
                                        <th width="400px">Address</th>
                                        <th>Phone</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <!-- @php
                                              $option = $shipment->option;
                                              $OptsReq = array();
                                              $OptsCost = 0;
                                              if($option->repack == 1){
                                                $OptsReq[] = "Repack Items";
                                                $OptsCost += $option->repack_amt;
                                              }
                                              if($option->sticker == 1){
                                                $OptsReq[] = "Fragile Stickers";
                                                $OptsCost += $option->sticker_amt;
                                              }
                                              if($option->extrapack == 1){
                                                $OptsReq[] = "Add extra packing material";
                                                $OptsCost += $option->extrapack_amt;
                                              }
                                              if($option->original == 1){
                                                $OptsReq[] = "Ship original boxes";
                                                $OptsCost += $option->original_amt;
                                              }
                                              if($option->consolid == 1){
                                                $OptsReq[] = "Package consolidation";
                                                $OptsCost += $option->consolid_amt;
                                              }
                                            @endphp -->
                                            <td>{{$shipment->orderid}}</td>
                                            <td>{{$shipment->fullname}}</td>
                                            <td>{{$shipment->address}}</td>
                                            <td>{{$shipment->phone}}</td>
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