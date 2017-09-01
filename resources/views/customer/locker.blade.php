@extends('layout')

@section('title', '- Customer Profile')

@section('content')

    @include('partials._banner')
    @if(Auth::guard('customer')->user()->email_verify != 'no')
    <section class="teaser_dash">
        <div class="container">
          <!-- Main component for a primary marketing message or call to action -->
          <div class="jumbotron text-center">
            <h3><span class="text-orange">CONGRATULATIONS</span> on receiving your Virtual Shipping Address <br> with your Personal Locker Number!</h3>
            <p>You can start shopping from Multiple Indian Shopping Websites / Facebook or Instagram Sellers of your choice, and start shipping your items to our facility right away!</p>
            <p>As our website is under construction, you can contact us here: <a href="https://api.whatsapp.com/send?phone=971527786707" target="_blank" title="Whatsapp">Whatsapp</a></p>
            <p>Simply request us to process your shipment, and receive all your products in just 2-4 Days!</p>
          </div>
        </div>
    </section>
    @endif

@endsection

@section('js_script')

@endsection