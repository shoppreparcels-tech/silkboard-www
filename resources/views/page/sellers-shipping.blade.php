@extends('layout')

@section('title', 'ShoppRe SELLER Partnership, Domestic Courier & International Shipping')
@section('description', 'Seller Partnership Registration. ShoppRe makes shipping super easy. Ship your products Internationally stating at ₹500/-')
@section('keywords', 'seller, flipkart seller, amazon central, alibaba seller, paytm, sell products online')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/seller-partner" />
    <!-- Select2 -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="shortcut icon" href="https://www.shoppre.com/img/favicon.png">
    <link rel="icon" type="image/png" href="https://www.shoppre.com/img/favicon.png" sizes="60x60">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <style>
        .footer-section a {
            color: #ffffff;
        }
    </style>
@endsection
<br>
<br>

<section style="margin-bottom: 50px">
    <div class="container" style="margin-top: 62px;">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-tailor.png">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1 class="f-s-24 font-weight-900 f-c-d-greay">Are you a Seller or an young Entrepreneur or an upcoming organization
                aspiring to make your talent & business [B2B, B2C, C2C] reach overseas?</h1>
            <p class="f-s-20 f-c-l-gray">
                    <span> Sit back and relax while we handle the fuss of your company's shipments and delivery.
                        Ship your products with us & reach customers Globally.</span> To know how much you can save monthly on regular shipping.</p>
            <br>
                <div class="f-s-16 f-c-red">
                    <p>YOUR ONE-STOP SOLUTION FOR ALL SHIPPING PROBLEMS! </p>
            </div>
        </div>
    </div>
</section>

@section('content')
{{--<div style="text-align: center">--}}
{{--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform?embedded=true" width="900" height=2000 frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>--}}
{{--</div>--}}

<div class="row form-group footer-section" style="padding-bottom: 20px;">
    <div style="padding-top: 10px" class="col-md-1 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center"> <button type="submit" name="btnActivate" class="btn btn-l btn-b-r btn-s-r font-weight-900">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform" target="_blank">Click to Fill the Form</a></button></div>
    <div style="padding-top: 10px" class="col-md-1 col-sm-8 col-md-offset-1 col-sm-offset-1 text-center"> <button type="submit" name="btnActivate" class="btn btn-l btn-b-r btn-s-r font-weight-900">
            <a href="http://ship.shoppre.com/seller/" target="_blank">Learn More</a></button></div>

    <div style="padding-top: 10px" class="col-md-1 col-sm-8 col-sm-offset-2 col-md-offset-1 text-center"> <button type="submit" name="btnActivate" class="btn btn-s-b btn-a-l btn-b-g font-weight-900">
            <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20ShoppRe%20Team,%20%20I%27m%20looking%20for%20ShippingSolution" target="_blank">Message us on WhatsApp</></button></div>
</div>

        {{--<div class="form-group text-center div-align-items-l">--}}
            {{--<a href="tel:+91-8277919191" class="btn btn-s-r btn-a-l btn-b-r">Call: +91-8277919191</a>--}}
        {{--</div>--}}


        {{--<div class="form-group text-center div-align-items-l">--}}
            {{--<a href="https://api.whatsapp.com/send?phone=918277919191&text=Hi%20ShoppRe%20Team,%20%20I%27m%20looking%20for%20ParcelForwarding%20Quote%20from%20India" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>--}}
        {{--</div>--}}







@endsection
