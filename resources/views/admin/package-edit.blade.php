@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Package Order</h1>
                <span>Update Package Order</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
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
                        <form method="post" action="{{route('admin.package.update')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="title" value="{{$package->title}}" required>
                                <label class="active">Package Title</label>
                                @if ($errors->has('title'))
                                    <span class="error">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="seller" value="{{$package->seller}}" required>
                                <label class="active">Seller Name</label>
                                @if ($errors->has('seller'))
                                    <span class="error">{{ $errors->first('seller') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="refference" value="{{$package->refference}}" required>
                                <label class="active">Reference/Package No.</label>
                                @if ($errors->has('refference'))
                                    <span class="error">{{ $errors->first('refference') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="locker" value="{{$package->locker}}" required>
                                <label class="active">Locker ID</label>
                                @if ($errors->has('locker'))
                                    <span class="error">{{ $errors->first('locker') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="price" value="{{$package->price}}" required>
                                <label class="active">Price</label>
                                @if ($errors->has('price'))
                                    <span class="error">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="weight" value="{{$package->weight}}" required>
                                <label class="active">Weight</label>
                                @if ($errors->has('weight'))
                                    <span class="error">{{ $errors->first('weight') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate datetimepicker" name="received" value="{{$package->received}}" required>
                                <label class="active">Date Received</label>
                                @if ($errors->has('received'))
                                    <span class="error">{{ $errors->first('received') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="status">
                                    <option {{$package->status === 'values' ? "selected" : ""}} value="values">Customer Action</option>
                                    <option {{$package->status === 'invoice' ? "selected" : ""}} value="invoice">Upload Invoice</option>
                                    <option {{$package->status === 'review' ? "selected" : ""}} value="review">Shoppre Review</option>
                                    <option {{$package->status === 'ship' ? "selected" : ""}} value="ship">Read for shipping</option>
                                </select>
                                <label>Status</label>
                                @if ($errors->has('status'))
                                    <span class="error">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="id" value="{{$package->id}}">
                                <button type="submit" class="btn waves-effect waves-light red lighten-2">Submit</button>
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
                                <span class="red"><i class="ti-mobile"></i> +{{$customer->code}} {{$customer->phone}}</span>
                                <p><a href="#"><i class="ti-user"></i> View Profile</a></p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="widget z-depth-2">
                            <div class="widget-title">
                                <h3>Package Items</h3>
                                <p>Add items comes under this package.</p>
                                @if(!empty($invoice))
                                <p><br>
                                <a class="btn waves-effect waves-light blue lighten-2" href="{{asset('uploads/invoice')}}/{{$invoice->invoice}}" target="_blank">Download Invoice</a>
                                </p>
                                @endif
                            </div>
                            <form method="post" action="{{route('admin.item.submit')}}">
                                {{csrf_field()}}
                                <div class="input-field col s5">
                                    <input type="text" name="item" class="validate">
                                    <label class="">Item Name</label>
                                    @if ($errors->has('item'))
                                        <span class="error">{{ $errors->first('item') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s2">
                                    <input type="text" name="qty" class="validate">
                                    <label class="">Quantity</label>
                                    @if ($errors->has('qty'))
                                        <span class="error">{{ $errors->first('qty') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" name="price" class="validate">
                                    <label class="">Price</label>
                                    @if ($errors->has('price'))
                                        <span class="error">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s1">
                                    <input type="hidden" name="packid" value="{{$package->id}}">
                                    <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">Submit</button>
                                </div>
                            </form>
                            <div class="projects-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:50px">#</th>
                                            <th>Item</th>
                                            <th>Qty</th>
                                            <th>Unit Price</th>
                                            <th>Total Value</th>
                                            <th style="width:50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=0)
                                        @foreach($items as $item) 
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$item->item}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->total}}</td>
                                            <td class="red"><a href="{{route('admin.item.delete', ['id'=>$item->id])}}"><i class="ti-trash white-text"></i></a></td>
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
    jQuery('.datetimepicker').datetimepicker({
        timepicker:false,
        format:'Y-m-d'
    });
</script>
@endsection