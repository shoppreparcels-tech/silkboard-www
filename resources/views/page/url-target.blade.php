@extends('layout')

@section('title', 'How Does it Works | Shoppre - International Shipping Partner')
@section('description', 'Learn more how Our personal Shoppre service manages and ship your packages from multiple Indian stores and delivered to your country in just 2 to 4 days!')
@section('keywords', 'learn more, our personal shoppre service, manages, ship your packages, multiple indian stores, delivered to your country')

@section('content')
  <section class="timeline">
      <div class="container">
          <h1>Shipping from India to {{ucfirst(trans($country))}}</h1>
          <br>
          <h4>Ship from India to {{ucfirst(trans($country))}}. Shoppre offers DOOR TO DOOR courier to {{ucfirst(trans($country))}} from ANY part of India. The charges are cheapest in India for sending courier to {{ucfirst(trans($country))}} . This is by a courier company which is the best in industry for parcel services to {{ucfirst(trans($country))}} .</h4>
      </div>
  </section>
@endsection