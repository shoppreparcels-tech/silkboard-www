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
                <h1>Personal Shopper Order</h1>
                <span>View Order Details</span>
            </div>
            <ul class="admin-breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.shopper.orders')}}">Orders</a></li>
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
                        <form method="post" action="{{route('admin.shopper.update')}}" enctype="multipart/form-data">
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
                                <label class="active">Qty</label>
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
                                <input type="text" class="validate" name="personal_shopper_cost" value="{{$order->personal_shopper_cost}}" disabled>
                                <label class="active">P.S Cost</label>
                                @if ($errors->has('personal_shopper_cost'))
                                    <span class="error">{{ $errors->first('personal_shopper_cost') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="sales_tax" value="{{$order->sales_tax}}" disabled>
                                <label class="active">Sales Tax</label>
                                @if ($errors->has('sales_tax'))
                                    <span class="error">{{ $errors->first('sales_tax') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="delivery_charge" value="{{$order->delivery_charge}}" disabled>
                                <label class="active">Shipping to Bengaluru</label>
                                @if ($errors->has('delivery_charge'))
                                    <span class="error">{{ $errors->first('delivery_charge') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="payment_gateway_fee" value="{{$order->payment_gateway_fee}}" disabled>
                                <label class="active">PG Fee</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="sub_total" value="{{$order->sub_total}}" disabled>
                                <label class="active">Subtotal</label>
                                @if ($errors->has('sub_total'))
                                    <span class="error">{{ $errors->first('sub_total') }}</span>
                                @endif
                            </div>
                          <div class="input-field col s4">
                            <input type="text" class="validate" name="phone" value="{{$order->country_code}} {{$order->phone}}" disabled>
                            <label class="active">Phone Number</label>
                            @if ($errors->has('phone'))
                              <span class="error">{{ $errors->first('phone') }}</span>
                            @endif
                          </div>
                            @if($order->promo_code)
                            <div class="input-field col s6">
                                <p>{{$order->promo_code}}</p>
                                <label class="active">Promo Code</label>
                            </div>
                            @endif
                            @if($order->promo_info)
                            <div class="input-field col s6">
                                <p>{{$order->promo_info}}</p>
                                <label class="active">Promo Description</label>
                            </div>
                            @endif
                            @if($order->instruction)
                            <div class="input-field col s12">
                                <p>{{$order->instruction}}</p>
                                <label class="active">Ordering Instructions</label>
                            </div>
                            @endif
                            <div class="input-field col s12">
                                <p>
                                    {{$order->if_promo_unavailable === 'proceed_without' ? "Proceed without promotional code" : ""}}

                                    {{$order->if_promo_unavailable === 'dont_buy' ? "Do not buy any items from this website" : ""}}
                                </p>
                                <label class="active">If this promotion is not available</label>
                            </div>
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>Upload Seller Invoice</span>
                                    <input type="file" name="invoice" accept="image/*" capture="camera">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                                <div class="section">
                                    @if(!empty($order->seller_invoice))
                                        @php
                                            $photourl = "/uploads/shopper/seller/$order->id/$order->seller_invoice";
                                        @endphp
                                        <div class="col s6">
                                          <div class="card">
                                            <div class="card-image">
                                              <img class="materialboxed" src="{{asset($photourl)}}">
                                            </div>
                                          </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="amount_paid" value="{{$order->amount_paid}}">
                                <label class="active">Final amount paid to the website</label>
                                @if ($errors->has('amount_paid'))
                                    <span class="error">{{ $errors->first('amount_paid') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="status">
                                    <option {{$order->status === 'awaiting' ? "selected" : ""}} value="awaiting">Awaiting Payment</option>
                                    <option {{$order->status === 'received' ? "selected" : ""}} value="received">Payment Received</option>
                                    <option {{$order->status === 'processed' ? "selected" : ""}} value="processed">Processed</option>
                                    <option {{$order->status === 'canceled' ? "selected" : ""}} value="canceled">Cancelled</option>
                                    <option {{$order->status === 'completed' ? "selected" : ""}} value="completed">Completed</option>
                                </select>
                                <label>Status</label>
                                @if($order->status === 'processed')
                                <i class="ti-check"></i> Processed Notification Sent!
                                @endif
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
                                        <img src="{{asset('img/profile.png')}}">
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
                                                            case 'processed':
                                                                echo 'Processed';
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

                        @if(!in_array($order->status, ['canceled']))
                        <div class="widget z-depth-1">
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
                                switch ($order->payment_status) {
                                    case 'pending':
                                        $payment_status = 'Pending';
                                    break;
                                    case 'success':
                                        $payment_status = 'Success';
                                    break;
                                    case 'failed':
                                        $payment_status = 'Failed';
                                    break;
                                    default:
                                        $payment_status = "";
                                    break;
                                }
                            @endphp
                            <p style="margin-bottom: 5px;">
                                <strong>Payment Method </strong><br>
                                <span>{{$payment_gateway_name}}</span>
                            </p>
                            <p style="margin-bottom: 5px;">
                                <strong>Payment Status </strong><br>
                                <span>{{$payment_status}}</span>
                            </p>
                        </div>
                        @endif
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
                                          <th>Item Description</th>
                                          <th>Qty</th>
                                          <th width="130px">Each</th>
                                          <th width="130px">Price</th>
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
                                            <a href="{{$request->url}}" style="text-decoration: none;color: #000; font-weight: 700;">{{$request->item_name}}
                                              @if(!empty($request->item_code))
                                                ({{$request->item_code}})
                                              @endif
                                              @if(!empty($request->item_size))
                                                - Size: {{$request->item_size}}
                                              @endif
                                            </a><br>
                                            @if(!empty($request->item_color))
                                            <span>Color: {{$request->item_color}}</span>
                                            @endif
                                            <span>(If this item is not available:
                                              @php
                                                switch($request->if_item_unavailable){
                                                  case 'cancel':
                                                    echo 'Cancel this item, purchase all other available items';
                                                  break;
                                                  case 'cancel_all':
                                                    echo 'Cancel all items from this site';
                                                  break;
                                                }
                                              @endphp
                                             )</span><br>
                                              @if(!empty($request->note))
                                              <span>Note: {{$request->note}}</span>
                                              @endif
                                          </td>
                                          <td>
                                            {{$request->quantity}}
                                          </td>
                                          <td>INR {{number_format($request->price, 2, ".", "")}}</td>
                                          <td>INR {{number_format($request->total_price, 2, ".", "")}}</td>
                                          <td>
                                            <form method="post" action="{{route('admin.psorder.item.update')}}">
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
