@extends('layout')

@section('title', 'Indian Virtual Address - ShoppRe')
@section('description', 'Indian virtual address for shopping and shipping internationally')
@section('keywords', 'virtual address')

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
        <a  href="https://myaccount.shoppre.com/locker?virtual-addr-page">
            <img src="{{asset('img/indian-virtual-address-shop-shipping.jpg')}}"
                 alt="indian-virtual-address-shop-shipping"></a>
    </div>
@endsection
