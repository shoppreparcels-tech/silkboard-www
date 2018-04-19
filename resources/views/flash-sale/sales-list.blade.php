@extends('layout')

@section('title', '')
@section('description', '')

@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flashSale.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow"/>

@endsection

@section('content')
    <section class="fw fl" id="secProductCmsBlock">
        <style>

            <
            span id

            =
            "mce_marker"
            data-mce-type

            =
            "bookmark"
            > & #xFEFF

            ;
            <
            /
            span >
            < span id

            =
            "__caret"
            > _<

            /
            span >
            < span id

            =
            "mce_marker"
            data-mce-type

            =
            "bookmark"
            > <

            /
            span >
            < span id

            =
            "__caret"
            > _<

            /
            span >
            < span id

            =
            "mce_marker"
            data-mce-type

            =
            "bookmark"
            > <

            /
            span >
            < span id

            =
            "__caret"
            > _<

            /
            span >
            .ws-category {
                display: block;
                float: left;
                width: 100%;
            }

            .prod-img img {
                width: 100%;
            }

            .ws-category strong {
                display: block;
                font-family: "lato";
                margin-bottom: 10px;
                margin-left: 8px;
                text-transform: uppercase;
            }

            .prod-img {
                display: block;
                float: left;
                margin-bottom: 13px;
                margin-top: 2px;
                width: 100%;
            }

            .ws-category ul {
                background: #ffffff none repeat scroll 0 0;
                float: left;
                padding-bottom: 10px;
                padding-top: 10px;
                width: 100%;
            }

            .ws-category li {
                float: left;
                margin-left: 39px;
                width: 17%;
            }

            .ws-category li a {
                color: #333333;
                font-family: "lato";
                font-size: 14px;
            }

            .ws-category li img {
                float: left;
                margin-right: 18px;
            }

            .ws-category li span {
                display: block;
                margin-top: 32px;
            }

            .mobile-prod-sec {
                background: #f4f4f4 none repeat scroll 0 0;
                float: left;
                margin-bottom: 18px;
                width: 100%;
            }
        </style>

        <div class="mobile-prod-sec">
            <div class="prod-img"><img src="img/mob_hp_main_9mar_fi.jpg"></div>
        </div>

    </section>
    <div class="container">
        <div class="fl fw product_category_list">
            <div id="product_results" class="fl fw">
                <div class="page fl fw" id="page_0" data-url="/product/electronics/mobile-phone-price-in-india?page=0">
                    <article class="fl fw">
                        <div class="row">
                            @foreach($sales as $sale)
                            <div class="col-sm-3">
                                <div class="fl fw product_c" style="height:375px !important;">
                                    <div class="fl fw pos product_seller"><a href="#"
                                                                             id="secProductCompareText0-0">
                                            {{$sale->name}} {{$sale->slug}} <Offer></Offer></a></div>
                                    <div class="fl fw pos product_img" style="margin-left:0px !important; " id="secProductImgOffer0-0">
                                        <br>
                                        <a href="{{route('flash-sale.mi5A.index')}}"><img
                                                alt="Mi J7 Max 32GB Black Mobile"
                                                src="/img/mi2.jpeg"
                                                id="imgProductBannerImg0-0">
                                        </a>
                                    </div>
                                    <div class="fl fw item_detail"><p class="brand" style="font-size: 14px;margin-right: 5px !important;" id="lblProductBrand0-0">
                                            Brand:Mi  {{$sale->slug}}
                                       <br> Starts At {{Carbon\Carbon::parse($sale->starts_at)->format('d-m-Y ')}}
                                             </p><a href="#"
                                                           title="Mi J7 Max 32GB Black Mobile"
                                                           class="product_name"
                                                           id="lblProductName0-0">Mi redmi5A Max 32GB Black
                                            Mobile</a>

                                        <a class="fl button " style="margin-left:30%; " href="{{route('flash-sale.mi5A.index')}}"
                                           target="_blank">GRAB DEAL</a>
                                        <div class="fl fw grab" id="secProductGrabDeal0-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
@endsection
