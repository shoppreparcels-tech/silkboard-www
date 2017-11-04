@extends('layout')

@section('title', ' - Edit Address')

@section('css_style')
	<!-- Select2 -->
	<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')

	@include('partials._banner')

	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accnt_settings">
                        <h2>Edit Shipping Address</h2>
                        <form class="form-horizontal" method="post" action="{{route('customer.address.update')}}">
						{{ csrf_field() }}
						
						<div class="form-group">
						    <label class="col-sm-3 control-label">Name</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="name" value="{{$address->name or ''}}">
						    	@if ($errors->has('name'))
		                            <span class="error">{{ $errors->first('name') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">Address Line 1</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="line1" value="{{$address->line1 or ''}}">
						    	@if ($errors->has('line1'))
		                            <span class="error">{{ $errors->first('line1') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">Address Line 2</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="line2" value="{{$address->line2 or ''}}">
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">State</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="state" value="{{$address->state or ''}}">
						    	@if ($errors->has('state'))
		                            <span class="error">{{ $errors->first('state') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">City</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="city" value="{{$address->city or ''}}">
						    	@if ($errors->has('city'))
		                            <span class="error">{{ $errors->first('city') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">Country</label>
						    <div class="col-sm-9">
						    	<select class="form-control select2" name="country">
						    	<option>Select Country</option>
						    	@foreach($countries as $country)
						    		@php
						    			$select = ($country->id == $address->countrid) ? "selected" : "";
						    		@endphp
						    		<option value="{{$country->id}}" {{$select}}>{{$country->name}}</option>
						    	@endforeach
						    	</select>
						    	@if ($errors->has('country'))
		                            <span class="error">{{ $errors->first('country') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">Postal Code</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="pin" value="{{$address->pin or ''}}">
						    	@if ($errors->has('pin'))
		                            <span class="error">{{ $errors->first('pin') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-3 control-label">Phone</label>
						    <div class="col-sm-2">
						    	<select class="select2 form-control" name="code">
						    	<option>Select</option>
						    	@foreach($countries as $country)
						    		@php
						    			$select = ($country->phonecode == $address->code) ? "selected" : "";
						    		@endphp
						    		<option value="+{{$country->phonecode}}" {{$select}}>+{{$country->phonecode}}</option>
						    	@endforeach
						    	</select>
						    	@if ($errors->has('code'))
		                            <span class="error">{{ $errors->first('code') }}</span>
		                        @endif
						    </div>
						    <div class="col-sm-7">
						    	<input type="text" class="form-control" name="phone" value="{{$address->phone or ''}}">
						    	@if ($errors->has('phone'))
		                            <span class="error">{{ $errors->first('phone') }}</span>
		                        @endif
						    </div>
						</div>
						<div class="form-group">
		                    <div class="col-md-12 col-md-offset-3">
		                        <div class="checkbox">
		                            <label>
		                            	@php
		                            		$check = ($address->default == "yes") ? "checked" : "";
		                            	@endphp
		                                <input type="checkbox" name="default" value="1" {{$check}}> Set this as default shipping address.
		                            </label>
		                        </div>
		                    </div>
		                </div>
					  	<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-10">
						    	<input type="hidden" name="id" value="{{$address->id}}">
						    	<button type="submit" class="btn btn-shoppre">Save Address</button>
						    </div>
					  	</div>
						
					</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
	<!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
		$(document).ready(function() {
		  $(".select2").select2();
		});
	</script>
@endsection