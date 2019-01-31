@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Shipment Orders - Delivered</h1>
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

                          {{--<div class="col s12">--}}
                              {{--<form method="get" action="{{route('admin.shipping')}}">--}}
                                  {{--{{csrf_field()}}--}}
                                  {{--<div class="input-field col s10">--}}
                                      {{--<input type="text" name="search" class="validate" value="{{Request::get('search')}}">--}}
                                      {{--<label class="">Search Shipments</label>--}}
                                  {{--</div>--}}
                                  {{--<div class="input-field col s2">--}}
                                      {{--<button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Search</button>--}}
                                  {{--</div>--}}
                              {{--</form>--}}
                          {{--</div>--}}

                          <div class="projects scroll">
                            <div class="projects-table">
                              <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>#</th>
                                        <th>Weight</th>
                                        <th>Customer</th>
                                        <th>Final Cost</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <td>{{$shipment->id}}</td>
                                            <td>{{$shipment->order_id}}</td>
                                            <td>{{$shipment->weight}} Kg</td>
                                            <td>{{$shipment->customer->name}}<br><small style="font-size: 12px;">({{$shipment->customer->locker}})</small></td>
                                            <td>INR {{number_format($shipment->final_amount, 2)}}</td>

                                            <td><a href="{{route('admin.shipping.order', [$shipment->id])}}" class="green-text"><i class="ti-angle-double-right"></i></a></td>

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

@section('js_script')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#example').DataTable({
                "order": [[ 0, "desc" ]]
            });
        });

    </script>
@endsection
