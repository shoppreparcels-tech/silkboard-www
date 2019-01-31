@extends('myaccount.layout')

@section('title', ' - Incoming Orders')

@section('content')

	<section>
		<div class="container">
		    <div class="row">
			    <div class="col-sm-offset-2 col-sm-8">
			        <div class="incomings">
			        	@if (session('message'))
		                    <div class="alert alert-success">{{ session('message') }}</div>
		                @endif
		                <div class="title">
		                	<h2>Pre-Alert Shoppre about your Incoming Packages</h2>
				        	<p> If you would like to alert us about any of your future incoming items that will be arriving at your locker in our facility, you can provide the details now!</p>
		                </div>
				        <form method="post" action="{{route('customer.incoming.submit')}}" enctype="multipart/form-data">
				        	{{ csrf_field() }}
			              	<div class="form-group {{ $errors->has('seller') ? 'has-error' : '' }}">
				                <label class="control-label"> Seller name / Sender name *</label>
			                    <input type="text" class="form-control" name="seller" placeholder="Enter Name">
			                    @if ($errors->has('seller'))
				                  <span class="help-block">
				                      <strong>{{ $errors->first('seller') }}</strong>
				                  </span>
				                @endif
			                </div>
			                <div class="form-group {{ $errors->has('tracking_number') ? 'has-error' : '' }}">
				                <label class="control-label"> Tracking Number(optional)</label>
			                    <input type="text" class="form-control" name="tracking_number" placeholder="Enter Tracking Number">
			                    @if ($errors->has('tracking_number'))
				                  <span class="help-block">
				                      <strong>{{ $errors->first('tracking_number') }}</strong>
				                  </span>
				                @endif
			                </div>
			                <div class="form-group {{ $errors->has('invoice_no') ? 'has-error' : '' }}">
				                <label class="control-label"> Order/Invoice Number (optional)</label>
			                    <input type="text" class="form-control" name="invoice_no" placeholder="Enter Order/Invoice Number">
			                    @if ($errors->has('invoice_no'))
				                  <span class="help-block">
				                      <strong>{{ $errors->first('invoice_no') }}</strong>
				                  </span>
				                @endif
			                </div>
			                <div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
				                <label class="control-label"> Notes (optional)</label>
			                    <textarea class="form-control" name="notes" placeholder="Enter description" rows="6"></textarea>
			                    @if ($errors->has('notes'))
				                  <span class="help-block">
				                      <strong>{{ $errors->first('notes') }}</strong>
				                  </span>
				                @endif
			                </div>
			                <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
			                	<label class="control-label"> Add Document (Required)</label>
			                	<p>Upload the saved merchant invoice or confirmation email that shows each individual item value as a PDF, JPG, PNG or BMP.</p>
			                	<div class="input-group">
			                		<input type="file" name="document" id="file-doc" class="inputfile inputfile-2">
									<label for="file-doc">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
										<span>Choose a file…</span>
									</label>
									@if ($errors->has('document'))
					                  <span class="help-block">
					                      <strong>{{ $errors->first('document') }}</strong>
					                  </span>
					                @endif
			                	</div>
			                </div>
			                <div class="form-group">
			                    <button type="submit" class="btn btn-block btn-shoppre">Save Changes</button>
			                </div>
			              </form>

			        </div>
			    </div>
		    </div>
		</div>
	</section>

@endsection

@section('js_script')
<script src="{{asset('js/input-file.js')}}"></script>
@endsection
