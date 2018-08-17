@extends('layout')
@section('title', 'ShoppRe Offers')
@section('description', 'Use this promo code to avail your offer')
@section('keywords', 'shipment, suggestion, feedback, information, form')

@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex,follow"/>
@endsection
@section('content')
            <div class="coupon_cashback">
                <div class="container-fluid">
                    <h3>Join us and ship Worldwide</h3>
                </div>
                @if(!empty($campaign_detail->image))
                    <a href="{{$campaign_detail->image != null ? $campaign_detail->hyper_link : ' '}}" target="_blank">
                        <img src="/img/campaigns/{{$campaign_detail->image}}" alt="Avatar" style="width:100%;">
                    </a>
                @endif
                @if(!empty($campaign_detail->coupon_code))
                    <div class="left-space">
                        <h2><b>{{$campaign_detail->cashback}}% Discount</b></h2>
                        <p>Use Promo Code: <span class="promo">{{$campaign_detail->coupon_code}}</span>
                            to avail {{$campaign_detail->cashback}}% Discount
                        </p>
                        @if(!empty($campaign_detail->end_date))
                        <h4>Expires On: <span class="exp_date">{{date('d-m-Y', strtotime($campaign_detail->end_date))}}
                            </span></h4>
                        @endif
                      <div class="text-center">
                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">Claim Offer</a>
                      </div>
                        <h3>Terms and conditions:</h3>
                        <ul class="left-space">
                            <li>Get {{$campaign_detail->cashback}}% off.</li>
                            <li>Maximum amount that can be availed by a customer is Rs. 1000.</li>
                            <li>This offer cannot be clubbed with any other offer.</li>
                            <li>A customer can avail this offer only once during the offer period.</li>
                            <li>The discount is available only on the shipping charge.</li>
                            <li>This offer is applicable only for International Shipments.</li>
                            <li>Clearance charges is applicable for Special items (liquids, semi liquids/cosmetics, medicines, oils, homemade food items).</li>
                        </ul>
                    </div>
                @else
                    <div class="left-space">
                        <ul class="left-space">
                            <h3 style="color: #f79646">Have a Blast This Season of Rakhi!</h3>
                            <h4><b>Check Out Our Special Prices On International Shipping! </b></h4>
                            <h5><b>*Terms & Conditions:</b></h5>

                            <li>Special prices for packages weighing from 100 to 300 grams;</li>
                            <table class="table table-bordered" style="width: 100%">
                                <thead>
                                <tr>
                                    <th>Weight in Grams</th>
                                    <th>UAE </th>
                                    <th>USA</th>
                                    <th>Germany</th>
                                    <th>Canada</th>
                                    <th>Ausrtalia</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="data_font">
                                        <td>100</td>
                                        <td>371</td>
                                        <td>1128</td>
                                        <td>1355</td>
                                        <td>1127.92</td>
                                        <td>1672</td>

                                    </tr>
                                    <tr class="data_font">
                                        <td>300</td>
                                        <td>521</td>
                                        <td>1378</td>
                                        <td>1605</td>
                                        <td>1377.92</td>
                                        <td>1872</td>
                                    </tr>
                                </tbody>
                            </table>
                            <li>This offer cannot be clubbed with any other offer & is applicable only for international shipments.</li>
                        </ul>
                    </div>
                @endif
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
