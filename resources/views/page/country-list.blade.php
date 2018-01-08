@extends('layout')

@section('title', 'List Of Countries | Shipping Information From Indian - Shoppre.com')
@section('description', 'We have built a list of countries with pricing, contact details and address of shipping service from India. Ship your item Worldwide!')
@section('keywords', 'list, countries, shipping, worldwide, pricing, service, india, address')

@section('content')

    <section class="sellers">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-sm-12 col-md-offset-4 col-sm-offset-0"><h1>Ship Your Item World Wide</h1></div>
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
                                            <a href="{{route('urlTargetShipping',['initial'=>'shipping','source'=>'india','destination'=>ucfirst(trans($country->name))])}}"><span class="brand_logo" style="background-image: url('{{asset('img/flags')}}/{{$logo}}');"></span>
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
                    <h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness today!</h3>
                    <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
                    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">sign up for free</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js_script')
    <script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection