@extends('myaccount.admin.layout')

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
                                        <th>Invoice</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td><a href="{{route('admin.customer.edit', [$order->customer_id])}}" target="_blank">{{$order->customer->name}}</a></td>
                                            <td>{{$order->seller}}</td>
                                            <td>{{$order->tracking_number}}</td>
                                            <td>{{$order->invoice_no}}</td>
                                            <td>{{$order->notes}}</td>
                                            <td><a href="/uploads/incoming/{{$order->document}}" target="_blank">View</a></td>
                                            <td width="50px">
                                                <a class="slide_trigger" data-target="slidedown_{{$order->id}}" href="#" title="Edit">
                                                    @if($order->status == 'received')
                                                    <i class="ti-check-box green-text"></i>
                                                    @else
                                                    <i class="ti-pencil-alt red-text"></i>
                                                    @endif
                                                </a>
                                            </td>
                                        </tr>
                                        <tr id="slidedown_{{$order->id}}" style="display:none">
                                            <td colspan="4">
                                                <br>
                                                <form method="post" action="{{route('admin.incoming.update')}}">
                                                    {{ csrf_field() }}
                                                    <div class="input-field col s12">
                                                        <select name="status">
                                                            <option {{$order->status === 'pending' ? "selected" : ""}} value="pending">Pending</option>
                                                            <option {{$order->status === 'received' ? "selected" : ""}} value="received">Received</option>
                                                        </select>
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="input-field col s2">
                                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                                        <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                                                    </div>
                                                </form>
                                            </td>
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
    $(".slide_trigger").click(function(t){t.preventDefault();var e=$(this).attr("data-target");$("#"+e).slideToggle()});
</script>
@endsection
