@extends('layout')

@section('title', 'Shoppre Offers')
@section('description', 'This offer is not available')
@section('keywords', 'shipment, suggestion, feedback, information, form')

@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
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
@section('js_script')
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $(".select2").select2();
        });
    </script>
@endsection