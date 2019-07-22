@extends('layout')

@section('title', 'Shoppre Offers')
@section('description', 'This offer is not available')
@section('keywords', 'shipment, suggestion, feedback, information, form')

@section('css_style')
    <meta name="robots" content="noindex,nofollow"/>
@endsection
@section('content')
            <div class="coupon_cashback">
                <div class="container-fluid head_align">
                    <h3 class="head_color_ex">This offer has been expired.</h3>
                    <br>
                    <a href="{{route('home')}}" class="btn btn-shoppre btn-info-full next-step3">
                        Go To Home
                    </a>
                </div>
            </div>
@endsection