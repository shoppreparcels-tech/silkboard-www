@extends('layout')

@section('title', 'Shoppre.com - Member Feedback Form | Shoppre')
@section('description', 'How we are doing? Regarding your most recent shipment received through Shoppre.com, please leave your feedback, suggestion and provide us more information.')
@section('keywords', 'shipment, suggestion, feedback, information, form')
@section('robots', 'noindex, nofollow')
@section('css_style')
@endsection
@section('content')
            <div class="coupon_cashback">
                <div class="container-fluid">
                    <h3>Join us and ship Worldwide</h3>
                </div>
                <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/how.jpg" alt="Avatar" style="width:100%;">
                <div class="left-space">
                    <h2><b>10% Cashback</b></h2>
                    <p>Use Promo Code: <span class="promo">{{$coupon_code}}</span>  to avail 10% Cashback</p>
                </div>
            </div>
@endsection