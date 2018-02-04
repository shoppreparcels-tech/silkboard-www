@extends('layout')

@section('title', 'Thank you for your Feedback - Shoppre.com')
@section('description', 'Thank you for your Feedback.')

@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow"/>
@endsection

@section('content')
    <section class="timeline">
        <div class="container schedule-container">
            <div class="tab-pane" role="tabpanel" id="complete">
                <div class="img_align">
                    <img src="../img/success1.png" class="img_size" alt="">
                    <h3>Email Sent Successfully.</h3>
                    <a href="{{route('home')}}" class="btn btn-primary btn-info-full next-step3">
                        Go To Home
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
