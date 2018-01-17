@extends('layout')

@section('title', 'Shoppre.com - Member Feedback Form | Shoppre')
@section('description', 'How we are doing? Regarding your most recent shipment received through Shoppre.com, please leave your feedback, suggestion and provide us more information.')
@section('keywords', 'shipment, suggestion, feedback, information, form')
@section('robots', 'noindex, nofollow')
@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/star-rating.min.css')}}" rel="stylesheet"/>
@endsection
@section('content')
            <div class="coupon_cashback">
                <div class="container-fluid">
                    <h3>Join us and ship Worldwide</h3>
                </div>
                <img src="/img/how.jpg" alt="Avatar" style="width:100%;">
                <div class="left-space">
                    <h2><b>10% Cashback</b></h2>
                    <p>Use Promo Code: <span class="promo">KOR-BLR-A</span>  to avail 10% Cashback</p>
                </div>
            </div>
@endsection
@section('js_script')
    <script src="{{asset('js/star-rating.min.js')}}" type="text/javascript"></script>
    <script>
        $(".rated").rating({
            'size': 'md',
            'min': 0,
            'max': 5,
            'step': 2,
            'showClear': false,
            'showCaption': false
        });

        $("#input-rate").rating({
            'size': 'md',
            'min': 0,
            'max': 5,
            'step': 2,
            'showClear': false,
            'showCaption': false
        });
    </script>
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".select2").select2();
        });
    </script>
@endsection