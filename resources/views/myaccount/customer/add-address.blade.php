@extends('myaccount.layout')

@section('title', ' - Add New Address')

@section('css_style')
	<!-- Select2 -->
	<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
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
                    			<form method="post" action="{{route('customer.address.submit')}}" id="addressform">
									{{ csrf_field() }}
									<div class="form-group">
									    <label class="col-md-12 control-label" style="padding-left: 0;">Name *</label>
									    <div class="col-sm-2" style="padding-left: 0;">
						                  	<select class="form-control" name="salutation">
						                  		<option value="">Title</option>
						                  		<option>Mr</option>
						                  		<option>Ms</option>
						                  		<option>Mrs</option>
						                  	</select>
						                  	@if ($errors->has('salutation'))
					                            <span class="error">{{ $errors->first('salutation') }}</span>
					                        @endif
						                </div>
						                <div class="col-sm-5" style="padding-left: 0;">
						                    <input type="text" class="form-control" name="first_name" placeholder="First Name *">
						                    @if ($errors->has('first_name'))
					                            <span class="error">{{ $errors->first('first_name') }}</span>
					                        @endif
						                </div>
						                <div class="col-sm-5" style="padding-left: 0;">
						                    <input type="text" class="form-control" name="last_name"  placeholder="Last Name *">
						                    @if ($errors->has('last_name'))
					                            <span class="error">{{ $errors->first('last_name') }}</span>
					                        @endif
						                </div>
						                <div class="clearfix"></div>
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
								    	<select class="form-control select2" name="country_id">
								    	<option value="">Select Country</option>
								    	@foreach($countries as $country)
								    		<option value="{{$country->id}}">{{$country->name}}</option>
								    	@endforeach
								    	</select>
								    	@if ($errors->has('country'))
				                            <span class="error">{{ $errors->first('country') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Postal Code</label>
								    	<input type="text" class="form-control" name="pincode" placeholder="Enter Your pincode">
								    	@if ($errors->has('pincode'))
				                            <span class="error">{{ $errors->first('pincode') }}</span>
				                        @endif
									</div>
									<div class="form-group">
									    <label class="control-label">Phone</label>
									    <div class="row">
									    	<div class="col-sm-4">
										    	<select class="select2 form-control" name="country_code">
										    	<option value="">Country Code</option>
										    	@foreach($countries as $country)
										    		<option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
										    	@endforeach
										    	</select>
										    	@if ($errors->has('country_code'))
						                            <span class="error">{{ $errors->first('country_code') }}</span>
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
				                                <input type="checkbox" name="is_default" value="1" {{ old('is_default') ? 'checked' : '' }}> Set this as default shipping address.
				                            </label>
				                        </div>
				                        <hr>
					                </div>
								  	<div class="form-group">
								  		@php
								  			if(isset(request()->redirect) && !empty(request()->redirect)){
								  				echo '<input type="hidden" name="redirect" value="'.request()->redirect.'">';
								  			}
								  		@endphp
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
	<script src="{{asset('js/validate.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $( "#addressform" ).validate({
		        rules:
	            {
	            	title:{required: true},
	                first_name:{required: true},
	                last_name:{required: true},
	                line1: {required: true},
	                city: {required: true},
	                state: {required: true},
	                country: {required: true},
                  country_code: {required: true},
	                phone: {required: true},
	            },
	            messages:
	            {
	            	title: { required: "Select Title"},
	                first_name: { required: "Enter First Name"},
	                last_name: { required: "Enter Last Name"},
	                line1: { required: "Address line 1 required"},
	                city: { required: "Please enter city"},
	                state: { required: "Please enter state"},
	                country: { required: "Please select your country"},
                  country_code: { required: "Phone country code required"},
	                phone: { required: "Please enter your contact number"},
	            },
		    });
		});
	</script>
@endsection
