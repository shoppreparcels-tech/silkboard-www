@extends('layout')

@section('title', 'Story | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')
    <div class="container">
        <center>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="decorated"><span>{{$story->title}}</span></h2>
                </div>
            </div>
         </center>
        <section class="mission_band">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <center>
                    <img src="{{env('APP_URL').'/uploads/story/'.$story->id.'/'.$story -> image}}"
                         style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                        <div class="story_content">
                            <h3>{{$story->sub_title}}</h3>
                            {!!$story->description!!}
                        </div>
                    </center>
                </div>
            </div>
        </section>
    </div>
@endsection
