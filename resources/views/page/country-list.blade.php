@extends('layout')

@section('title',  'Shipping From India To World Wide))
@section('description', 'Shoppre offers Door to Door courier service to Anywhere in the world. Sign Up Now!')
@section('keywords', 'ship your packages, delivered to your country, parcel services to World Wide)

@section('content')
  <section class="timeline">
      <div class="container-fluid">
          <h1>Shipping from india to world wide</h1>
          <br> 
          <div class="col-sm-10">
           <div class="parcel_logs">
          <h3>Ship your Parcel through Shoppre’s trusted Courier Partners</h3>
          <img src="{{asset('img/dhl.png')}}">
          <img src="{{asset('img/fedex.png')}}">
          <img src="{{asset('img/dtdc.png')}}">
          <h4>Shoppre receives and ships over INR 10,00,000 worth in eCommerce purchases monthly!</h4>
           </div>
          </div>
      </div>
  </section>
@endsection