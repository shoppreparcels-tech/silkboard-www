@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Shipping Charges</h1>
                <span>Edit or Delete Shipping Charges</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">
                          @if (session('error'))
                              <div class="alert alert-danger">{{ session('error') }}</div>
                          @endif
                          <div class="projects scroll">
                            <div class="projects-table">
                                <table class="table" style="max-width: 60%;">
                                    <tr class="success">
                                        <th>#</th>
                                        <th>Country</th>
                                        <th></th>
                                    </tr>
                                    @php($i = 0)
                                    @foreach($countries as $country)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$country->name}}</td>
                                        <td><a href="{{route('admin.shippingrate', [$country->iso])}}">View</a></td>
                                    </tr>
                                    @endforeach
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