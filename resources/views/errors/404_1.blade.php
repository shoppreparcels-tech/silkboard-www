@extends('layout')

@section('title', '404 Page Not Found')

@section('content')

	<section class="page_head">
	    <div class="pagebanner">
	      <img src="{{env('AWS_CLOUD_FRONT')}}/img/banner1.jpg" width="100%">
	      <div class="banner-cap">
	        <h2>Error <span class="text-orange"> Page Not Found</span></h2>
	      </div>
	    </div>
  	</section>
  	<section class="notfound">
		<div class="container">
		  <div class="row">
		    <div class="col-md-12">
		    <img src="{{env('AWS_CLOUD_FRONT')}}/img/404.png" width="100%">
		    <a href="{{route('home')}}" class="btn btn-shoppre">Go To Home Page</a>
		    </div>
		  </div>
		</div>
	</section>

@endsection