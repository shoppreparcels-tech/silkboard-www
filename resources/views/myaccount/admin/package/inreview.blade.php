@extends('myaccount.admin.layout')

@section('content')
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" action="{{route('admin.delete.package')}}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p class="popup-head">Are you sure to delete this item ?</p>
                        <label for="txtname"></label>
                        <input type="hidden" name="hdn_p_id" id="hdn_pack_id"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="btn_cancel_popup">Cancel</button>
                        <button type="submit" class="btn waves-effect waves-light red " style="margin-right: 3%">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

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

                        {{ $packages->links() }}

                        <div class="projects scroll">
                            <div class="projects-table">
                              <div id="outer_div">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;"></th>
                                        <th>Id</th>
                                        <th>Order #</th>
                                        <th>From</th>
                                        <th>Customer</th>
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
                                            <td>{{$package->id}}</td>
                                            <td>{{$package->order_id}}</td>
                                            <td>{{$package->seller}}</td>
                                            <td>
                                                {{$package->customer->name}}<br>
                                                <small style="font-size: 12px;">({{$package->locker}})</small>
                                            </td>
                                            <td>
                                                @php
                                                    $expire = strtotime($package->received.' + 20 days');
                                                    if(time() > $expire){
                                                        echo '<span class="red-text">'.date('d-m-Y', strtotime($package->received)).'</span>';
                                                    } else {
                                                        echo date('d-m-Y', strtotime($package->received));
                                                    }
                                                @endphp
                                            </td>
                                            <td>In Review</td>
                                            <td><a href="{{route('admin.package.edit', [$package->id])}}" class="green-text"><i class="ti-angle-double-right"></i></a></td>
                                            {{--<td><a href="{{route('admin.package.delete', [$package->id])}}" class="red-text text-darken-4"><i class="ti-trash"></i></a></td>--}}
                                            <td><a href="javascript:void(0)" class="red-text text-darken-4"
                                               data-package_id='{{$package->id}}' id="btn_delete_package"><i
                                                        class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr id="slidedown_{{$package->id}}" style="display:none">
                                            <td colspan="7">
                                                <table class="intable">
                                                    <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>Category</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($package->items as $item)
                                                        <tr>
                                                            <td>{{$item->item}}</td>
                                                            <td>{{$item->item_name}}</td>
                                                            <td>{{$item->quantity}}</td>
                                                            <td>{{$item->price}}</td>
                                                            <td>{{$item->quantity * $item->price}}</td>
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

    $(document).ready(function () {

        $('#example').DataTable({
            "order": [[ 0, "desc" ]]
        });

        $('#outer_div').on('click', '#btn_delete_package', function () {
            var pack_id = $(this).attr("data-package_id");
            console.log(pack_id);
            $('#hdn_pack_id').val(pack_id);
            $('#myModal').modal('open');
            // $('#myModal').show();
        });

        $('#btn_cancel_popup').click(function () {
            $('#myModal').modal('close');
        });
    });

</script>
@endsection
