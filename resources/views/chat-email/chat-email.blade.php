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
            <h1>Send Chat Email</h1>
           </font>
        </div>
   <br/>
        <font size="4">
        <div class="container"  style="background-color: whitesmoke">
            <form class="form-horizontal" method="post" action="#">
                {{ csrf_field() }}
                <div class="feedback-container">
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Customer Name" required>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Email ID *</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Customer Email" required>
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Email Subject *</label>
                                <input type="text" class="form-control" name="email_subject" placeholder="Enter Email subject" required>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Mobile Number </label>
                                <div class="rating-star">
                                    <input class="form-control" type="text" placeholder="Enter Customer Mobile" name="mobile">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Date Of Chat *</label>
                                <div class="rating-star">
                                    <input class="form-control" type="date"  name="chat_date" required>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Query *</label>
                                <div class="rating-star">
                                    <textarea class="form-control" rows="4" name="query" cols="80" placeholder="Enter Query here..."></textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Answer *</label>
                                <div class="rating-star">
                                    <textarea class="form-control" rows="4" name="answer" cols="80" placeholder="Enter Answer here..."></textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Sender Name *</label>
                                <input type="text" class="form-control" name="sender_name" placeholder="Enter Sender Name" required>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Information URL</label>
                                <input type="text" class="form-control" name="information_url" placeholder="Enter URL " required>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 col-sm-offset-4">
                            <button type="submit" class="btn btn-block btn-shoppre">Send Email</button>
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