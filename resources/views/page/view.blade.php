@extends('layout')

@section('title', '-'.ucwords(strtolower($page->title)))

@section('content')

	<section class="page_head">
    <div class="pagebanner">
      <img src="{{asset('img/banner1.jpg')}}" width="100%">
      <div class="banner-cap">
        <h2>{{$page->title}}</h2>
      </div>
    </div>
  </section>
  <section class="page_view">
    <div class="container">
      <div class="col-md-12">
          {!!$page->content!!}
      </div>
    </div>
  </section>
@endsection