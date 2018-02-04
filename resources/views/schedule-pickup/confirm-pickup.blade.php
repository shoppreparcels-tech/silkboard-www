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
                    <img src="../img/success1.png" class="img_size" alt="">
                    <h3>Your pickup request completed Successfully.</h3>
                    <a href="https://myaccount.shoppre.com/register" class="btn btn-primary btn-info-full next-step3">
                        Sign Up Here
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
