@extends('layout')

@section('title', 'How to Shop from India and Ship Worldwide | ShoppRe')
@section('description', 'How to Shop from India and Ship Worldwide  ShoppRe')
@section('keywords', 'shop, ship, india, worldwide')

@section('css_style')
    <!-- Select2 -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

@endsection

@section('content')
<div style="text-align: center">
    <a  href="https://myaccount.shoppre.com/login?shop-ship-page">
    <img src="{{asset('img/how-to-shop-from-india-ship-worldwide.png')}}"
         alt="how-to-shop-from-india-ship-worldwide"></a>
</div>
@endsection
