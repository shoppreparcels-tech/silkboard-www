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
    <section class="timeline  section-border">
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="col-md-4 col-sm-offset-5">
            <br/>
            <font color="#663399">
                <h1>Edit Campaign</h1>
            </font>
        </div>
        <br/>
        <font size="4">
            <div class="container"  style="background-color: whitesmoke">
                <form class="form-horizontal" method="post" action="{{route('campaign.submit')}}">
                    {{ csrf_field() }}
                    <div class="feedback-container">
                        <div class="row">
                            <div class="col-md-8 col-sm-offset-2">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" value="{{$campaign->name}}" name="name" placeholder="Enter Campaign Name" required>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-offset-2">
                                <div class="form-group">
                                    <label>Coupon Code</label>
                                    <input type="text" class="form-control" value="{{$campaign->coupon_code}}" name="coupon_code" placeholder="Enter Coupon Code">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-offset-2">
                                <div class="form-group">
                                    <label>Coupon Begain Date</label>
                                    <div class="rating-star">
                                        <input class="form-control" type="date"  placeholder="{{$campaign->begain_date}}" name="begain_date" required>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-offset-2">
                                <div class="form-group">
                                    <label>Coupon Begain Date</label>
                                    <div class="rating-star">
                                        <input class="form-control" type="date" placeholder="{{$campaign->end_date}}" name="end_date" required>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-offset-2">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <input type="text" class="form-control" value="{{$campaign->comment}}" name="comment" placeholder="Enter Comment">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="hdn_campaign_id" value="{{$campaign->id}}">
                        <div class="row">
                            <div class="col-md-4 col-sm-offset-4">
                                <button type="submit" class="btn btn-block btn-shoppre">Submit</button>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </font>
    </section>
@endsection
@section('js_script')
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
@endsection