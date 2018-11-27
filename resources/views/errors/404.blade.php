@extends('layout')

@section('title', '404 Page Not Found')
@section('css_style')
    <style>
        .section_err{padding-bottom:50px;background-color: #102436;padding-top: 10%;}
        .section_err div{padding-bottom: 50px}
        .section_err div img{align-content: center}
        @media only screen and (max-width: 600px) {
            .section_err div img{width: 100%}
        }
    </style>

@endsection



@section('content')
    <section class="section_err">
        <div class="container">
            <center>
                <img src="{{asset('img/images/404_1.png')}}" alt="">
                <h6 class="header6 p-color-cement">it looks like youre lost... </h6> <br>
                <h2 class="header4 p-color-cement">Page you're looking is not found.</h2>
                <h2 class="header4 p-color-cement">You're always Welcome to explore <a href="{{route('home')}}" class="p-color-blue">ShoppRe! Home</a> </h2>
            </center>
        </div>
    </section>

@endsection
