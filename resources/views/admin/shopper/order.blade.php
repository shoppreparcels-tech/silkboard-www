@extends('admin.layout')


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
                        <form method="post" action="{{route('admin.shopper.update')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="refnum" value="{{$order->refnum}}" disabled>
                                <label class="active">Order Number</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="seller" value="{{$order->seller}}" disabled>
                                <label class="active">Seller</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" class="validate" name="totalqty" value="{{$order->totalqty}}" disabled>
                                <label class="active">Qty</label>
                                @if ($errors->has('totalqty'))
                                    <span class="error">{{ $errors->first('totalqty') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="totalprice" value="{{$order->totalprice}}" disabled>
                                <label class="active">Total Price</label>
                                @if ($errors->has('totalprice'))
                                    <span class="error">{{ $errors->first('totalprice') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s2">
                                <input type="text" class="validate" name="pscost" value="{{$order->pscost}}" disabled>
                                <label class="active">P.S Cost</label>
                                @if ($errors->has('pscost'))
                                    <span class="error">{{ $errors->first('pscost') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="sale_tax" value="{{$order->sale_tax}}" disabled>
                                <label class="active">Sales Tax</label>
                                @if ($errors->has('sale_tax'))
                                    <span class="error">{{ $errors->first('sale_tax') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="ship_charge" value="{{$order->ship_charge}}" disabled>
                                <label class="active">Shipping to Bengaluru</label>
                                @if ($errors->has('ship_charge'))
                                    <span class="error">{{ $errors->first('ship_charge') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="subtotal" value="{{$order->subtotal}}" disabled>
                                <label class="active">Subtotal</label>
                                @if ($errors->has('subtotal'))
                                    <span class="error">{{ $errors->first('subtotal') }}</span>
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
                                    {{$order->promo_unavail === 'proceed_without' ? "Proceed Without" : ""}}
                                </p>
                                <label class="active">If this promotion is not available</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="wallet" value="{{$order->wallet or 0}}">
                                <label class="active">Shopper Wallet</label>
                                @if ($errors->has('wallet'))
                                    <span class="error">{{ $errors->first('wallet') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="status">
                                    <option {{$order->status === 'awaiting' ? "selected" : ""}} value="awaiting">Awaiting Payment</option>
                                    <option {{$order->status === 'received' ? "selected" : ""}} value="received">Received</option>
                                    <option {{$order->status === 'processed' ? "selected" : ""}} value="processed">Processed</option>
                                    <option {{$order->status === 'canceled' ? "selected" : ""}} value="canceled">Canceled</option>
                                    <option {{$order->status === 'completed' ? "selected" : ""}} value="completed">Completed</option>
                                </select>
                                <label>Status</label>
                                @if ($errors->has('status'))
                                    <span class="error">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="orderid" value="{{$order->id}}">
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
                                          <th>Item Description</th>
                                          <th>Qty</th>
                                          <th>Each</th>
                                          <th width="130px">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                          $requests = $order->requests;
                                        @endphp
                                        @foreach($requests as $request)
                                        <tr>
                                          <td>
                                            <a href="{{$request->url}}" target="_blank">{{$request->item_name}}-{{$request->item_color}}</a>
                                          </td>
                                          <td>
                                            {{$request->qty}}
                                          </td>
                                          <td>INR {{number_format($request->price, 2, ".", "")}}</td>
                                          <td>INR {{number_format($request->totalprice, 2, ".", "")}}</td>
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
@endsection