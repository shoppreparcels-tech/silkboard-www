@extends('myaccount.layout')

@section('title', ' - Axis PG Test')

@section('css_style')

@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="">
                    	<div class="col-sm-offset-2 col-sm-8">
                    		<div class="incomings">
                    			<form method="post" action="{{route('payment.axis.start')}}">
									{{ csrf_field() }}
									<div class="form-group">
									    <label class="control-label">Amount</label>
								    	<input type="text" class="form-control" name="amount" placeholder="Enter Amouut">
									</div>
								  	<div class="form-group">
								  		<button type="submit" class="btn btn-block btn-shoppre">Pay Now</button>
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

@endsection
