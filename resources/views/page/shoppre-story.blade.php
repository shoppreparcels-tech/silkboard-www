@extends('layout')

@section('title', 'Story | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')
    <section class="page_head">
        <div class="pagebanner">
            <img src="img/banner1.jpg" width="100%">
            <div class="banner-cap">
                <h2>Shoppre <span class="text-orange">Stories</span></h2>
            </div>
        </div>
    </section>
    <div class="container">
        <center>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="decorated"><span>Shoppre Stories</span></h2>
                </div>
            </div>
        </center>
        <section class="mission_band">
            <div class="row">
                @foreach($stories as $story)
                <div class="col-md-4">
                    <div style="border: 1px solid gray;padding: 16px 10px 16px 10px;">
                        <img src="{{'https://www.shoppre.com/uploads/story/'.$story->id.'/'.$story -> image}}"
                             alt="{{$story -> image}}"
                             style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;width: 100%">
                        <div class="news-carousel__item-body">
                            <h3 class="news-carousel__item-title">
                                {{ $story->title }}
                            </h3>
                            <p>
                                {{ $story->pre_description }}
                            </p>
                            <div class="news-carousel__item-data">
                                <center>
                                    <a href="{{route('story.detail',['slug'=>$story->slug])}}"
                                       class="btn btn btn-shoppre" style="min-height: 30px;padding-top: 5px;">
                                        More >>>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </section>
    </div>
@endsection
