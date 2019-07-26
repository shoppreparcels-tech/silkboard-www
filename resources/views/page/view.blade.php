@extends('layout')

@section('title', $page->metatitle)
@section('description', $page->metadesc)
@section('keywords', $page->metakeyword)

@section('content')

	<section class="page_head">
    <div class="pagebanner">
      <img src="{{env('AWS_CLOUD_FRONT')}}/img/banner1.jpg" width="100%">
      <div class="banner-cap">
        <h2>{{$page->title}}</h2>
      </div>
    </div>
  </section>
  <section class="page_view">
    <div class="container">
      <div class="col-md-12">

      </div>
    </div>
  </section>
@endsection