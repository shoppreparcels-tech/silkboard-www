@extends('layout')

@section('title', 'Confirm Schedule Pickup - Shoppre.com')
@section('description', 'Your pickup request completed Successfully.')
@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow"/>
@endsection

@section('content')
    <section class="timeline">
        <div class="container schedule-container">
            <div class="tab-pane" role="tabpanel" id="complete">
                <div class="img_align">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/success1.png" class="img_size" alt="">
                    <h3>Your pickup request completed Successfully.</h3>
                    <h4>For Confirmation or any Query please call us at <a href="tel:+91-8277919191">+91-8277919191</a></h4>
                    <a href="{{route('home')}}" class="btn btn-primary btn-info-full next-step3">
                        Go To Home Page
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
