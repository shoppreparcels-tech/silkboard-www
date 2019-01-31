@extends('myaccount.layout')

@section('title', '')
@section('description', '')

@section('css_style')
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  <meta name="robots" content="noindex,nofollow"/>

@endsection

@section('content')
  <section class="timeline">
    <div class="container text-center" style="color: orange;>
          <h1 style=""></h2>
    <div>
      {{--<p class="fas fa-check-circle	"></p>--}}
      <p class=" fa fa-check-square-o" style="font-size:200px;"></p>

    </div>
    <h2>Congragulations</h2>
    <h2>Registration sucessfull for the MI contest</h2>
    <h2>Please click on the below link to continue</h2>
    <input type="button" class="btn btn-shoppre" onclick="" value="Continue" style="width:30%;height:40px;font-size:16px;">
    </div>
  </section>
@endsection
