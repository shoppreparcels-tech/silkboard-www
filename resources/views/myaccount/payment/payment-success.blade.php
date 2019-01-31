@extends('layout')

@section('title', 'Payment - Payment Success')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')

@section('content')
    <section class="timeline">
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="col-md-4 col-sm-offset-5">
            <br/>
            <font color="#663399">
                <h1>Payment Success</h1>
                <h4>Your payment successfully sent to the shoppre account.</h4>
                <br>
                <br>
                <a href="https://www.shoppre.com" class="btn btn-shoppre">Go To Home</a>
            </font>
        </div>
        <br/>
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

@endsection
