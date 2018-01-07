@extends('layout')

@section('title', $title )
@section('description', $description)
@section('keywords', $keywords)

@section('content')
  <section class="timeline">
      <div class="container">
          <h1>Shipping from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}</h1>
          <br>
          <h4>Ship from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}. Shoppre offers DOOR TO DOOR courier to
              {{ucfirst(trans($destination))}} from ANY part of India. The charges are cheapest in {{ucfirst(trans($source))}} for sending
              courier to {{ucfirst(trans($destination))}} . This is by a courier company which is the best in industry
              for parcel services to {{ucfirst(trans($destination))}} .</h4>
      </div>
       <div class="container">
        <!-- <div class="col-sm-6">
          @php
          $key = 1;
          @endphp
        </div>
         <div class="col-md-6 ">
          <table class="table table-striped">         
              <h3 class="head_color">Pricing details from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}</h3>              
              <thead>
              <tr>
                  <th>No</th>
                  <th>Weight(In Kg.)</th>
                  <th>Price</th>
                  <th>Type</th>
              </tr>
              </thead>
              <tbody>
             @foreach($prices as $price)
              <tr>
                  <td>{{$key}}</td>
                  <td>{{$price->min}} - {{$price->max}}</td>
                  <td>{{$price->amount}}</td>
                  <td>{{$price->item_type}}</td>
              </tr>
              @php
              $key = $key+1;
              @endphp
              @endforeach
              </tbody>
          </table>
   </div> -->
  </section>
      <section class="timeline">
          <div class="container">
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