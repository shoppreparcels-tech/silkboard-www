@extends('layout')
@section('title', 'Customer Reviews & Ratings | Leave Your Feedback - ShoppRe.com')
@section('description', 'Read our latest Reviews & Ratings showcasing the excellent service, ship on time & quality of shipment. Share feedback about your shipping experiences with us.')
@section('keywords', 'reviews, ratings, customer, shipping, shopping, service, india')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/reviews">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/star-rating.min.css')}}" rel="stylesheet"/>

    <meta property="og:title" content="Customer Reviews & Ratings | ShoppRe.com "/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Read our latest Review & Ratings showcasing the excellent service, ship on time & quality of shipment. Please share your feedback about your recent shopping and shipping experiences with us."/>
    <meta property="og:url" content="https://www.shoppre.com/reviews"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:site_name" content="ShoppRe.com"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Go_Shoppre"/>
    <meta name="twitter:title" content="Customer Reviews & Ratings | ShoppRe.com"/>
    <meta name="twitter:description" content="Read our latest Review & Ratings showcasing the excellent service, ship on time & quality of shipment. Please share your feedback about your recent shopping and shipping experiences with us."/>
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <style>

        .rating-xl {
            font-size: 23px;
        }

        .form-control {
            height: 41px;
        }

        label {
            float: left;
            margin-left: 4px;
        }

    </style>

    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "ShoppRe",
  "alternateName": "International Shipping From India, ShoppRe.com",
  "url": "https://www.shoppre.com/reviews",
  "logo": "https://www.shoppre.com/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 80409 44077",
    "contactType": "customer service"
  },
  "sameAs": [
    "https://www.facebook.com/goshoppre",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://goo.gl/maps/UkSfQL4hFB52",
    "https://play.google.com/store/apps/details?id=com.shoppre.play",
    "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"
  ],
  "aggregateRating": {
    "@type" : "AggregateRating",
    "bestRating": "5",
    "ratingValue" : "4.8",
    "reviewCount" : "110",
    "worstRating" : 3.0
  }
}

    </script>


@endsection

@section('content')

    <section class="header">
        <div class="container header-padder-top">
            <center>
                <p class="header1 p-color-white">Customer Reviews</p>
                <p class="header4 p-color-cement header-margin-bottom">Our customers love our top-rated
                    service and how easy & worry-free<br> we make <a href="{{route('ifs.index')}}">shopping and shipping from INDIA</a>!
                </p>
            </center>
        </div>
    </section>
    <section>
        <center>
            <div class="container section-social-reviews">
                <center>
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                </center>
                <a href="https://www.google.com/search?q=shoppre&oq=shoppre&aqs=chrome..69i57j69i60l5.4478j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3bae146191401f95:0x1cf2770c1532d7d1,1,,,"
                   target="_blank">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 reviews-page-review-google">
                        <img src="{{asset('img/reviews/review-google.png')}}" alt="Google Reviews">
                    </div>
                </a>
                <div class="col-xs-12 col-sm-12 div-review-hr"></div>
                <a href="https://www.facebook.com/pg/goshoppre/reviews/?ref=page_internal" target="_blank">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 reviews-page-review-fb">
                        <img src="{{asset('img/reviews/review-facebook.png')}}" alt="Facebook Reviews">
                    </div>
                </a>
                <div class="col-xs-12 col-sm-12 div-review-hr"></div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 reviews-page-review-shoppre">
                    <a href="#reviews">
                        <img src="{{asset('img/reviews/review-shoppre.png')}}" alt="Shoppre Reviews">
                    </a>

                </div>
            </div>
        </center>
    </section>

    <section style="background-color: #fafafb">
        <center>
            <div class="container-fluid" style="padding-left: 4%;padding-right: 4%">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 div-submit-review">
                    <center>
                        <p class="margin-bottom-div header1">Leave Your Feedback</p>
                    </center>
                    <form method="post" action="{{route('reviews.submit')}}">
                        {{csrf_field()}}
                        <div class="row margin-bottom-div">
                            <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-12 col-xs-12">
                                <div class="form-group rating-star-left-margin">
                                    <div class="rating-star rating-xl">
                                        <input id="input-rate" type="text" class="rating" name="rating">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Your Name <span class="mendatory_fields">*</span></label>
                                    <input id="input-rate" type="text" name="person" placeholder="enter name"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Country <span class="mendatory_fields">*</span></label>
                                    <select class="form-control" name="country_id">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Comment <span class="mendatory_fields">*</span></label>
                                    <textarea class="form-control" rows="4" name="review" placeholder="enter comment">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <center>
                            <div class="row row-padding">
                                <input type="submit" class="btn-review-submit header5" value="Submit"/>
                            </div>
                        </center>
                    </form>
                </div>

                <div id="reviews">
                    <div class="row">
                        @foreach($reviews as $review)
                            <a href="{{ url('reviews/'.$review->slug) }}"  class="nounderline" ></a>
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 inner-review ">
                                    <div class="row div-img-row">
                                        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
                                            <div
                                                class=" img-review img-circle Avatar Avatar--color0">{{$review->person}}</div>
                                            {{-- <img class=" img-review img-circle" src="{{asset('img/images/23.jpg')}}">--}}
                                        </div>
                                        <div class="col-md-5 col-lg-5 col-sm-4 col-xs-4">
                                            {{--<p class="p-name-font-weight">&nbsp;&nbsp;&nbsp;&nbsp;{{$review->person}} </p>--}}
                                        </div>
                                        <div class="col-md-5 col-lg-5 col-sm-7 col-xs-7 rating-padding-left">
                                            {{--<img src="img/rating-star.png" alt="">--}}
                                            <img src="{{asset('img/rating-star.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <i class="quots-t ">
                                            <img src="{{asset('img/svg/qoute_up.svg')}}" alt="">
                                        </i>
                                    </div>
                                    <div class="row">
                                        <p class=" p-reviews">{{$review->review}}!</p>
                                    </div>
                                    <div class="row">
                          <span class="quots-b">
                            <img src="{{asset('img/svg/qoute_down.svg')}}" alt="">
                          </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="remove-row">
                        <center>
                            <button class="btn-more-review header5" id="btn-more" data-id="{{ $review->id }}">
                                Load More
                            </button>
                        </center>

                    </div>


                    {{--<a href="">--}}
                    {{--<div class="btn-more-review header5">--}}
                    {{--<p>--}}
                    {{--Load More--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                </div>
            </div>
        </center>
    </section>

    <section style="background-color: #fafafb">
        <div class="container-fluid padder-top-review">
            <center>
                <p class="header1 p-color-cement-dark">
                    Delivering Joy to Your Doorsteps</p>
                <p class="header2 p-doorstep-des">You've got no reason to wait around any longer, just come ShoppRe!</p>
                <a href="https://myaccount.shoppre.com/register" target="_blank">
                    <div class="btn-signup-review header5 p-color-white">
                        <p>
                            Sign Up for FREE
                        </p>
                    </div>
                </a>
            </center>
        </div>
    </section>

@endsection

@section('js_script')
    <script src="{{asset('js/star-rating.min.js')}}" type="text/javascript"></script>
    <script>
        $(".rated").rating({
            'size': 'lg',
            'min': 0,
            'max': 5,
            'step': 1,
            'displayOnly': true,
            'showClear': false,
            'showCaption': false
        });

        $("#input-rate").rating({
            'size': 'lg',
            'min': 0,
            'max': 5,
            'step': 1,
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


    <script>
        $(document).ready(function () {
            $(document).on('click', '#btn-more', function () {
                var id = $(this).data('id');
                $("#btn-more").html("Loading....");
                $.ajax({
                    url: '/more-reviews',
                    method: "POST",
                    data: {id: id, _token: "{{csrf_token()}}"},
                    dataType: "text",
                    success: function (data) {
                        debugger;
                        if (data != '') {
                            // $('#remove-row').remove();
                            $('#reviews').append(data);
                        }
                        else {
                            $('#btn-more').html("No Data");
                        }
                    }
                });
            });
        });
    </script>



@endsection
