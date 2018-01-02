@extends('layout')

@section('title',  'Shipping From India To '.ucfirst(trans($destination)).' - Courier Services To '.ucfirst(trans($destination)))
@section('description', 'Shoppre offers Door to Door courier service to ' .ucfirst(trans($destination)).
' from any part of India. The charges are cheapest in India for sending courier to ' .ucfirst(trans($destination)).'. Sign Up Now!')
@section('keywords', 'ship your packages, delivered to your country, parcel services to '.ucfirst(trans($destination)).',
sending courier to ' .ucfirst(trans($destination)).', shipping')

@section('content')
  <section class="timeline">
      <div class="container">
          <h1>Shipping from India to {{ucfirst(trans($destination))}}</h1>
          <br>
          <h4>Ship from India to {{ucfirst(trans($destination))}}. Shoppre offers DOOR TO DOOR courier to
              {{ucfirst(trans($destination))}} from ANY part of India. The charges are cheapest in India for sending
              courier to {{ucfirst(trans($destination))}} . This is by a courier company which is the best in industry
              for parcel services to {{ucfirst(trans($destination))}} .</h4>
      </div>
  </section>
@endsection