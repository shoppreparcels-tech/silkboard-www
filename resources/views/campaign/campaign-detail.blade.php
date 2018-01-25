@extends('layout')

@section('title', 'Shoppre Offers')
@section('description', 'Use this promo code to avail your offer')
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
                @if(!empty($campaign_detail->image))
                    <img src="/img/campaigns/{{$campaign_detail->image}}" alt="Avatar" style="width:100%;">
                @endif
                @if(!empty($campaign_detail->coupon_code))
                <div class="left-space">
                    <h2><b>10% Cashback</b></h2>
                    <p>Use Promo Code: <span class="promo">{{$campaign_detail->coupon_code}}</span>
                        to avail 10% Cashback
                    </p>
                    @if(!empty($campaign_detail->end_date))
                    <h4>Expires On: <span class="exp_date">{{date('d-m-Y', strtotime($campaign_detail->end_date))}}</span></h4>
                    @endif
                    <h3>Terms and conditions for promo code:</h3>
                    <ul class="left-space">
                        <li>Get 10% cashback.</li>
                        <li>Cashback Will be used in next shipment.</li>
                    </ul>
                </div>
                @endif
            </div>
@endsection
@section('js_script')
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".select2").select2();
        });
    </script>
@endsection