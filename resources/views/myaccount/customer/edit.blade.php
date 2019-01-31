@extends('myaccount.layout')

@section('title', ' - Account Settings')

@section('css_style')
	<!-- Select2 -->
	<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')

	<section class="accnt_settings">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-3">
          	@include('partials._sidebar')
          </div>
	      <div class="col-sm-9">
	        <div class="">
	        	@if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
	        	<h2>Membership Profile</h2>
		        <ul class="nav nav-tabs" role="tablist">
		            <li role="presentation" class="active"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact Information</a></li>
		            <li role="presentation"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Change Password</a></li>
		        </ul>

	          <div class="tab-content">
	            <div role="tabpanel" class="tab-pane active" id="contact">
	              <form class="form-horizontal contact-form" method="post" action="{{route('customer.edit.submit')}}" enctype="multipart/form-data">

	              	{{ csrf_field() }}

	              	<div class="col-md-12">
	              		<h3>Primary Account Holder Name</h3>
		              	<div class="form-group">
		              		@php
		              			$titleExplode = explode(". ", $customer->name, 2);
		              			if(sizeof($titleExplode) == 2){
		              				$title = $titleExplode[0];
		              				$nameRest = $titleExplode[1];
		              			}else{
		              				$title = "";
		              				$nameRest = $titleExplode[0];
		              			}

		              			$last_name = (strpos($nameRest, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $nameRest);
		              			$first_name = trim( preg_replace('#'.$last_name.'#', '', $nameRest ) );
		              		@endphp
		                  <label class="col-sm-3 control-label">Name *</label>
		                  <div class="col-sm-2">
		                  	<select class="form-control" name="title">
		                  		<option value="">Title</option>
		                  		<option {{$title == 'Mr' ? 'selected' : ''}}>Mr</option>
		                  		<option {{$title == 'Ms' ? 'selected' : ''}}>Ms</option>
		                  		<option {{$title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
		                  	</select>
		                  </div>
		                  <div class="col-sm-3" style="padding-left: 0;">
		                    <input type="text" class="form-control" name="firstname" value="{{ $first_name or '' }}" placeholder="First Name *">
		                  </div>
		                  <div class="col-sm-3" style="padding-left: 0;">
		                    <input type="text" class="form-control" name="lastname" value="{{ $last_name or '' }}" placeholder="Last Name *">
		                  </div>
		                </div>
		              	<hr>
		                <h3>Email Address</h3>
		                <div class="form-group">
		                  <label class="col-sm-3 control-label">Email *</label>
		                  <div class="col-sm-8">
		                    <input type="email" class="form-control" value="{{ $customer->email or '' }}" disabled="disabled" placeholder="Email">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-sm-3 control-label">Alternate Email</label>
		                  <div class="col-sm-8">
		                    <input type="email" class="form-control" name="alt_email" placeholder="Secondary Email" value="{{ $contact->alt_email or '' }}" >
		                  </div>
		                </div>
	              	</div>
					<div class="clearfix"></div>
	                <hr>
	                <h3>Phone Numbers</h3>
	                <div class="form-group">
	                  <label class="col-sm-2 control-label">Primary</label>
	                  <div class="col-sm-2">
	                    <select class="form-control select2" name="code">
		                    <option value="">Select Option</option>
		                    @foreach($countries as $country)
		                    	@if(!empty($customer->country_code) && $country->phone_code == $customer->country_code)
		                    		<option value="{{$country->phone_code}}" selected="selected">{{$country->iso}}(+{{$country->phone_code}})</option>
		                    	@else
		                    		<option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
		                    	@endif
					    	@endforeach
	                    </select>
	                  </div>
	                  <div class="col-sm-4">
	                    <input type="text" class="form-control" placeholder="Primary Phone Number" name="phone" value="{{ $customer->phone or '' }}">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label class="col-sm-2 control-label">Secondary</label>
	                  <div class="col-sm-2">
	                    <select class="form-control select2" name="alt_code">
	                      	<option value="">Select Option</option>
	                      	@foreach($countries as $country)
					    		@if(!empty($contact->alt_code) && $country->phone_code == $contact->alt_code)
		                    		<option value="{{$country->phone_code}}" selected="selected">{{$country->iso}}(+{{$country->phone_code}})</option>
		                    	@else
		                    		<option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
		                    	@endif
					    	@endforeach
	                    </select>
	                  </div>
	                  <div class="col-sm-4">
	                    <input type="text" class="form-control" name="alt_phone" placeholder="Alternate Phone Number" value="{{ $contact->alt_phone or '' }}" >
	                  </div>
	                </div>
	                <div class="form-group">
	                  <div class="col-sm-4">
	                    <button type="submit" class="btn btn-block btn-shoppre">Save Changes</button>
	                  </div>
	                </div>
	              </form>
	            </div>

	            <div role="tabpanel" class="tab-pane" id="password">
	            	<form class="form-horizontal" method="post" action="{{route('password.change.submit')}}" >
	            		{{csrf_field()}}
		              	<h3>Change Password</h3>
		              	<div class="form-group {{ $errors->has('old_password') ? 'has-error' : '' }}">
		                  <label class="col-sm-3 control-label">Current Password *</label>
		                  <div class="col-sm-6">
		                    <input type="password" class="form-control" name="old_password" placeholder="Enter Current Password">
		                    @if ($errors->has('old_password'))
			                  <span class="help-block">
			                      <strong>{{ $errors->first('old_password') }}</strong>
			                  </span>
			                @endif
		                  </div>
		                </div>
		                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
		                  <label class="col-sm-3 control-label">New Password *</label>
		                  <div class="col-sm-6">
		                    <input type="password" class="form-control" name="password" placeholder="Enter New Password">
		                    @if ($errors->has('password'))
			                  <span class="help-block">
			                      <strong>{{ $errors->first('password') }}</strong>
			                  </span>
			                @endif
		                  </div>
		                </div>
		                <div class="form-group {{ $errors->has('re_password') ? 'has-error' : '' }}">
		                  <label class="col-sm-3 control-label">Re-Enter Password *</label>
		                  <div class="col-sm-6">
		                    <input type="password" class="form-control" name="re_password" placeholder="Re-Enter New Password">
		                    @if ($errors->has('re_password'))
			                  <span class="help-block">
			                      <strong>{{ $errors->first('re_password') }}</strong>
			                  </span>
			                @endif
		                  </div>
		                </div>
		                <div class="form-group">
		                  <div class="col-sm-offset-5 col-sm-4">
		                    <button type="submit" class="btn btn-block btn-shoppre">Save Changes</button>
		                  </div>
		                  <div class="col-sm-12"><a href="{{route('customer.forgot')}}">Forgot my password. Please remind me.</a></div>
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
	<script type="text/javascript">
		function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	                $('#preview').attr('src', e.target.result);
	            }
	            reader.readAsDataURL(input.files[0]);
	        }
	    }

	    $("#avatar_input").change(function () {
	        readURL(this);
	    });
	</script>
	<script>
	  $(document).on('change', '.upload:file', function() {
	      var input = $(this),
	      numFiles = input.get(0).files ? input.get(0).files.length : 1,
	      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	      if (numFiles > 0) {
	        $(this).parent().find('label').text(label);
	      }else{
	        $(this).parent().find('label').html('Upload Document <i class="fa fa-upload"></i>');
	      }
	  });
	</script>
	<!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
		$(document).ready(function() {
		  $(".select2").select2();
		});
	</script>
@endsection
