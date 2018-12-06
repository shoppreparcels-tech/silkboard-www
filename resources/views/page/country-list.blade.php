@extends('layout')

@section('title', 'Country List | Shipping Information India to Worldwide - ShoppRe')
@section('description', 'List of countries with pricing, latest import or export restrictions, contact details and address of shipping service from India & Ship your items Worldwide.')
@section('keywords', 'list, countries, shipping, worldwide, pricing, service, india, address')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/countries"/>
    <style>
    .heading-section .container .div-information{background-color: #fff;padding: 20px ;margin-top: 30px; border-radius: 10px}
    .div-information .div-country{padding-top:10%}
    .div-information ul{ list-style-type:square;margin-left: 50px}
    .div-information ul li{ text-align: left;margin-top: 10px}
    .div-information ul li a{text-decoration: none;color:#507dbc }
    .div-information .div-country .select2-container--default .select2-selection--single {background-color:#fafafb}
    </style>

@endsection
@section('content')
    <section class="heading-section">
        <div class="container">
            <center>
                <h1 class="header1 p-color-white">ShoppRe Ship to 220+ countries
                    and territories!</h1>
                <div class="col-md-12 no-padding div-information">
                   <div class="col-md-6">
                       <h2 class="header2 p-color-cement-dark">
                           Find helpful information specific to your country, including:</h2>
                       <br>
                       <ul>
                           <li><a href="">Shipping costs</a></li>
                           <li><a href="">Duties and taxes</a></li>
                           <li><a href="">Restricted & prohibited items</a></li>
                           <li><a href="">Current exchange rates</a></li>
                           <li><a href="">Typical transit times</a></li>
                           <li><a href="">Country alerts</a></li>
                       </ul>
                   </div>
                    <div class="col-md-6 div-country">
                        <form id="country_select">

                            {{ csrf_field() }}
                            <select class="form-control select2" name="country" id="select_iso">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->iso}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>

                </div>

                {{--<div class="col-md-5 col-sm-12 col-md-offset-5 col-sm-offset-0"><h1>Ship Your Item World Wide</h1>--}}
                {{--</div>--}}
            </center>
        </div>

    </section>
    <section class="sellers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="seller_tab">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active">
                                @foreach($countries as $country)
                                    <div class="col-sm-2">
                                        <div class="seller_box">
                                            @php
                                                $logo = (!empty($country->flag)) ? $country->flag : 'brand-logo.png';
                                            @endphp
                                            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'india','destination'=>ucfirst(trans($country->name))])}}"><span
                                                    class="brand_logo"
                                                    style="background-image: url('{{asset('img/flags')}}/{{$logo}}');"></span>
                                                <h5>{{$country->name}}</h5></a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="ajaxload"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="signup_free">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness
                        today!</h3>
                    <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
                    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">sign up for
                        free</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js_script')
    <script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection
