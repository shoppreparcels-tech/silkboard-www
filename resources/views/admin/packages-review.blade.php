@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Package Orders</h1>
                <span>View Packages For Shoppre Review</span>
            </div>
        </div>

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
                                        <th>Order #</th>
                                        <th>From</th>
                                        <th>Locker ID</th>
                                        <th>Date Received</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{$package->order_id}}</td>
                                            <td>{{$package->seller}}</td>
                                            <td>{{$package->locker}}</td>
                                            <td>{{$package->received}}</td>
                                            <td><a href="{{route('admin.package.edit', [$package->id])}}"><i class="ti-settings"></i></a></td>
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