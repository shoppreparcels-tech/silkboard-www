@extends('myaccount.admin.layout')

@section('css_style')
    <style type="text/css">
        p{
            display: block;
            margin: 15px 0;
            font-size: 14px;
        }
    </style>
@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Personal Shopper Order - Self</h1>
                <span>View Order Details Placed By Customer</span>
            </div>
            <ul class="admin-breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.shopper.self.orders')}}">Orders</a></li>
            </ul>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="">
                    <div class="col s8">
                        @if (session('message'))
                            <div class="alert alert-success text-center">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="widget z-depth-1">
                        <form method="post" action="{{route('admin.shopper.self.update')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="reference_number" value="{{$order->reference_number}}" disabled>
                                <label class="active">Order Number</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="seller" value="{{$order->seller}}" disabled>
                                <label class="active">Seller</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="total_quantity" value="{{$order->total_quantity}}" disabled>
                                <label class="active">Quantity</label>
                                @if ($errors->has('total_quantity'))
                                    <span class="error">{{ $errors->first('total_quantity') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="total_price" value="{{$order->total_price}}" disabled>
                                <label class="active">Total Price</label>
                                @if ($errors->has('total_price'))
                                    <span class="error">{{ $errors->first('total_price') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="total_fee" value="{{$order->total_fee}}" disabled>
                                <label class="active">P.S Cost</label>
                                @if ($errors->has('total_fee'))
                                    <span class="error">{{ $errors->first('total_fee') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="grand_total" value="{{$order->grand_total}}" disabled>
                                <label class="active">Invoice Total</label>
                                @if ($errors->has('grand_total'))
                                    <span class="error">{{ $errors->first('grand_total') }}</span>
                                @endif
                            </div>
                            @if(!in_array($order->status, ['canceled']))
                            @php
                                switch ($order->payment_gateway_name) {
                                    case 'wire':
                                        $payment_gateway_name = 'Wire Transfer / Money Order';
                                    break;
                                    case 'paypal':
                                        $payment_gateway_name = 'PAYPAL';
                                    break;
                                    case 'paytm':
                                        $payment_gateway_name = 'PAYTM';
                                    break;
                                    case 'card':
                                        $payment_gateway_name = 'Credit/Debit Card';
                                    break;
                                    case 'pending':
                                        $payment_gateway_name = 'Pending';
                                    break;
                                    default:
                                        $payment_gateway_name = '';
                                    break;
                                }
                            @endphp
                            <div class="input-field col s4">
                                <input type="text" class="validate" value="{{$payment_gateway_name}}" disabled>
                                <label class="active">Payment Method</label>
                            </div>
                            @endif
                            <div class="input-field col s4">
                              <input type="text" class="validate" name="phone" value="{{$order->country_code}} {{$order->phone}}" disabled>
                              <label class="active">Phone Number</label>
                              @if ($errors->has('phone'))
                                <span class="error">{{ $errors->first('phone') }}</span>
                              @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="status">
                                    <option {{$order->status === 'submit_pay' ? "selected" : ""}} value="submit_pay">Submit Payment</option>
                                    <option {{$order->status === 'awaiting' ? "selected" : ""}} value="awaiting">Awaiting Payment</option>
                                    <option {{$order->status === 'received' ? "selected" : ""}} value="received">Payment Received</option>
                                    <option value="not_received">Rejected incoming parcels</option>
                                    <option {{$order->status === 'canceled' ? "selected" : ""}} value="canceled">Cancelled</option>
                                    <option {{$order->status === 'completed' ? "selected" : ""}} value="completed">Completed</option>
                                </select>
                                <label>Status</label>
                                @if ($errors->has('status'))
                                    <span class="error">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                <button type="submit" class="btn waves-effect waves-light green">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="widget z-depth-1">
                            <div class="my-profile-widget" style="margin-top: -20px;">
                                <div class="profile-widget-head">
                                    <h3>{{$customer->name}}</h3>
                                    <i>{{$customer->email}}</i>
                                    <span>
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/profile.png">
                                    </span>
                                </div>
                                <h4>{{$customer->locker}}</h4>
                                @if(!empty($customer->phone))
                                <span class="red"><i class="ti-mobile"></i> +{{$customer->code}} {{$customer->phone}}</span>
                                @endif

                                <p><strong>Shopper Balance : </strong>{{number_format($customer->balance->amount, 2, ".", "")}}</p>
                                <p><strong>Loyalty Points : </strong>{{$customer->loyalty->points}}</p>

                                @if(!$mails->isEmpty())
                                <div class="col s12">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <div class="collapsible-header active" style="font-size: 14px;">Mail History</div>
                                            <div class="collapsible-body" style="padding: 0;">
                                                @foreach($mails as $mail)
                                                <p style="margin: 10px;text-align: left;font-size: 13px;">
                                                    @php
                                                        switch($mail->condition){
                                                            case 'received':
                                                                echo 'Payment Received';
                                                            break;
                                                            case 'canceled':
                                                                echo 'Cancelled';
                                                            break;
                                                            case 'not_received':
                                                                echo 'Rejected Parcels';
                                                            break;
                                                        }
                                                    @endphp

                                                    <i style="float: right;">
                                                        {{date("M j, Y, g:i a", strtotime($mail->created_at))}}
                                                    </i>
                                                </p>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                @endif

                                <p><a href="{{route('admin.customer.edit', [$customer->id])}}" target="_blank"><i class="ti-user"></i> View Profile</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="widget z-depth-2">
                            <div class="widget-title">
                                <h3>Order Items</h3>
                                <p>Items comes under this package.</p>
                            </div>
                            <div class="projects-table">
                                <table class="table">
                                    <thead>
                                        <tr class="heading">
                                          <th>Website URL</th>
                                          <th>Number of Items</th>
                                          <th width="200px">Total Price</th>
                                          <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                          $requests = $order->requests;
                                        @endphp
                                        @foreach($requests as $request)
                                        <tr>
                                          <td>
                                            <p style="margin:0;">
                                            <a href="{{$request->url}}" target="_blank">{{$request->url}}</a>
                                            </p>
                                          </td>
                                          <td>{{$request->quantity}}</td>
                                          <td>INR {{number_format($request->price, 2, ".", "")}} (<a href="/uploads/shopper/self/invoice/{{$order->id}}/{{$request->invoice}}" target="_blank">Invoice</a>)</td>
                                          <td>
                                            <form method="post" action="{{route('admin.self.item.update')}}">
                                                {{csrf_field()}}
                                                <div class="input-field">
                                                    <select name="status" class="item_form">
                                                        <option {{$request->status === 'pending' ? "selected" : ""}} value="pending">Pending</option>
                                                        <option {{$request->status === 'received' ? "selected" : ""}} value="received">Received</option>
                                                        <option {{$request->status === 'canceled' ? "selected" : ""}} value="canceled">Cancelled</option>
                                                    </select>
                                                    <label>Status</label>
                                                </div>
                                                <input type="hidden" name="reqid" value="{{$request->id}}">
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
    </div><!-- Content Area -->

@endsection

@section('js_script')
<script type="text/javascript">
    $(document).ready(function() {
      $('.item_form').on('change', function() {
        var form = $(this).closest('form');
        form[0].submit();
      });
    });
</script>
@endsection
