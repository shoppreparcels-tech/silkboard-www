@extends('layout')

@section('title',  'Shipping From India To '.ucfirst(trans($country)).'- Courier Services To '.ucfirst(trans($country)))
@section('description', 'Shoppre offers Door to Door courier service to ' .ucfirst(trans($country)). 'from any part of India. The charges are cheapest in India for sending courier to' .ucfirst(trans($country)).'. Sign Up Now!')
@section('keywords', 'ship your packages, delivered to your country, parcel services to '.ucfirst(trans($country)).', sending courier to ' .ucfirst(trans($country)).', shipping')

@section('content')
  <section class="timeline">
      <div class="container">
          <h1>Shipping from India to {{ucfirst(trans($country))}}</h1>
          <br>
          <h4>Ship from India to {{ucfirst(trans($country))}}. Shoppre offers DOOR TO DOOR courier to {{ucfirst(trans($country))}} from ANY part of India. The charges are cheapest in India for sending courier to {{ucfirst(trans($country))}} . This is by a courier company which is the best in industry for parcel services to {{ucfirst(trans($country))}} .</h4>
      </div>
  </section>
@endsection