@extends('layout')

@section('title', ' - Add New Address')

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
                    <div class="">
                    	<div class="col-sm-offset-2 col-sm-8">
                    		<div class="incomings">
                    			<div class="title">
                    				<h2 class="text-center">Add New Shipping Address</h2>
                    			</div>
                    			<form method="post" action="{{route('customer.address.submit')}}">
									{{ csrf_field() }}
									<div class="form-group">
									    <label class="control-label">Name</label>
								    	<input type="text" class="form-control" name="name" placeholder="Enter Name">
								    	@if ($errors->has('name'))
				                            <span class="error">{{ $errors->first('name') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Address Line 1</label>
								    	<input type="text" class="form-control" name="line1" placeholder="Address Line 1">
								    	@if ($errors->has('line1'))
				                            <span class="error">{{ $errors->first('line1') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Address Line 2</label>
									    <input type="text" class="form-control" name="line2" placeholder="Address Line 2">
									</div>
									<div class="form-group">
									    <label class="control-label">City</label>
								    	<input type="text" class="form-control" name="city" placeholder="Enter City">
								    	@if ($errors->has('city'))
				                            <span class="error">{{ $errors->first('city') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">State</label>
								    	<input type="text" class="form-control" name="state" placeholder="Enter State" >
								    	@if ($errors->has('state'))
				                            <span class="error">{{ $errors->first('state') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Country</label>
								    	<select class="form-control select2" name="country">
								    	<option>Select Country</option>
								    	@foreach($countries as $country)
								    		<option value="{{$country->name}}">{{$country->name}}</option>
								    	@endforeach
								    	</select>
								    	@if ($errors->has('country'))
				                            <span class="error">{{ $errors->first('country') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Postal Code</label>
								    	<input type="text" class="form-control" name="pin" placeholder="Enter Your PIN">
								    	@if ($errors->has('pin'))
				                            <span class="error">{{ $errors->first('pin') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Phone</label>
									    <div class="row">
									    	<div class="col-sm-4">
										    	<select class="select2 form-control" name="code">
										    	<option>Country Code</option>
										    	@foreach($countries as $country)
										    		<option value="{{$country->phonecode}}">{{$country->iso}}(+{{$country->phonecode}})</option>
										    	@endforeach
										    	</select>
										    	@if ($errors->has('code'))
						                            <span class="error">{{ $errors->first('code') }}</span>
						                        @endif
										    </div>
										    <div class="col-sm-8">
										    	<input type="text" class="form-control" name="phone" placeholder="Phone Number">
										    	@if ($errors->has('phone'))
						                            <span class="error">{{ $errors->first('phone') }}</span>
						                        @endif
										    </div>
									    </div>
									</div>
									<div class="form-group">
										<hr>
				                        <div class="checkbox">
				                            <label>
				                                <input type="checkbox" name="default" value="1" {{ old('default') ? 'checked' : '' }}> Set this as default shipping address.
				                            </label>
				                        </div>
				                        <hr>
					                </div>
								  	<div class="form-group">
								  		<button type="submit" class="btn btn-block btn-shoppre">Save Address</button>
								  	</div>
								</form>
                    		</div>
                    	</div>
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