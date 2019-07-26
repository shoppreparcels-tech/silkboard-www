@extends('layout')

@section('title', 'Thank you for your Feedback - Shoppre.com')
@section('description', 'Thank you for your Feedback.')

@section('css_style')
    <meta name="robots" content="noindex,nofollow"/>

@endsection

@section('content')
    <section class="timeline">
        <div class="container schedule-container">
            <div class="tab-pane" role="tabpanel" id="complete">
                <div class="img_align">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/success1.png" class="img_size" alt="">
                    <h3>Thank you for your Feedback.</h3>
                    <a href="https://www.shoppre.com/customer/register" class="btn btn-primary btn-info-full next-step3">
                        Sign Up Here
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
