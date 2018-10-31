@extends('layout')

@section('title', 'Get Your Own Free Indian Virtual Shipping Address - ShoppRe.com')
@section('description', 'Get your own free Indian virtual address for shopping any Indian online stores and ship to your doorsteps, delivered in 3-6 days. Sign Up Now!')
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
