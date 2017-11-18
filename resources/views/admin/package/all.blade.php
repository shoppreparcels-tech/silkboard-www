@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Package Orders</h1>
                <span>View All Package Orders</span>
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
                            <form method="get" action="{{route('admin.packages')}}">
                                {{csrf_field()}}
                                <div class="input-field col s10">
                                    <input type="text" name="search" class="validate" value="{{Request::get('search')}}">
                                    <label class="">Search Packages</label>
                                </div>
                                <div class="input-field col s2">
                                    <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Search</button>
                                </div>
                            </form>
                        </div>

                        {{ $packages->appends(Request::except('page'))->links() }}

                        <div class="projects scroll">
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;"></th>
                                        <th>Order #</th>
                                        <th>From</th>
                                        <th>Locker ID</th>
                                        <th>Date Received</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>
                                            @if(!$package->items->isEmpty())
                                            <a href="#" class="slide_trigger" data-target="slidedown_{{$package->id}}"><i class="ti-angle-double-down"></i></a>
                                            @endif
                                            </td>
                                            <td>{{$package->order_id}}</td>
                                            <td>{{$package->seller}}</td>
                                            <td>{{$package->locker}}</td>
                                            <td>{{$package->received}}</td>
                                            <td>
                                                @php
                                                    switch($package->status){
                                                        case 'values':
                                                            echo 'Customer Action';
                                                        break;
                                                        case 'invoice':
                                                            echo 'Upload Invoice';
                                                        break;
                                                        case 'review':
                                                            echo 'In Review';
                                                        break;
                                                        case 'ship':
                                                            echo 'Ready to Ship';
                                                        break;
                                                        case 'request':
                                                            echo 'Shipment Requested';
                                                        break;
                                                        case 'processing':
                                                            echo 'Shipment Process';
                                                        break;
                                                        case 'dispatched':
                                                            echo 'Dispatched';
                                                        break;
                                                        case 'delivered':
                                                            echo 'Delivered';
                                                        break;
                                                        case 'abandoned':
                                                            echo 'Abandoned';
                                                        break;
                                                        case 'splited':
                                                            echo 'Splited';
                                                        break;
                                                    }
                                                @endphp
                                            </td>
                                            <td>
                                                <a href="{{route('admin.package.edit', [$package->id])}}">
                                                    <i class="ti-settings"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.package.delete', [$package->id])}}">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr id="slidedown_{{$package->id}}" style="display:none">
                                            <td colspan="7">
                                                <table class="intable">
                                                    <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($package->items as $item)
                                                        <tr>
                                                            <td>{{$item->item}}</td>
                                                            <td>{{$item->qty}}</td>
                                                            <td>{{$item->price}}</td>
                                                            <td>{{$item->qty * $item->price}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>    
                              </table>
                            </div>
                          </div>  

                          {{ $packages->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection

@section('js_script')
<script type="text/javascript">
    $('.slide_trigger').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        $('#'+target).slideToggle();
    });
</script>
@endsection