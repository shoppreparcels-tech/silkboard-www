@extends('layout')

@section('title', 'Campaign')
@section('description', 'How we are doing? Regarding your most recent shipment received through Shoppre.com, please leave your feedback, suggestion and provide us more information.')
@section('keywords', 'shipment, suggestion, feedback, information, form')

@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/star-rating.min.css')}}" rel="stylesheet"/>
    <meta name="robots" content="noindex,nofollow"/>
@endsection
@section('content')
    <section class="timeline  section-border">
    <br/>
        <div class="col-md-4 col-sm-offset-5">
           <br/>
           <font color="#663399">
            <h1>Create Campaign</h1>
           </font>
        </div>
      <br/>
        <font size="4">
        <div class="container"  style="background-color: whitesmoke">
            <form class="form-horizontal" method="post" action="{{route('channelSubmit',['camp_id'=>$campaign_id])}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="feedback-container">
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Campaign Name *</label>
                            <select class="form-control select2" name="campaign_id" required>
                                <option value="">Select Campaign</option>
                                @foreach($campaigns as $campaign)
                                    <option value="{{$campaign->id}}">{{$campaign->name}}({{$campaign->id}})</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Channel Name *</label>
                                <select class="form-control select2" name="channel" required>
                                    <option value="">Select Channel</option>
                                    <option value="facebook" >Facebook</option>
                                    <option value="newspaper">News Paper</option>
                                    <option value="whatsapp">WhatsApp</option>
                                    <option value="email">Email</option>
                                    <option value="linkedin">Linked In</option>
                                    <option value="twitter">Twitter</option>
                                    <option value="website">Website</option>
                                    <option value="instagram">Instagram</option>
				    <option value="google">Google Post</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2">
                            <div class="form-group">
                                <label>Employee Name*</label>
                                <select class="form-control select2" name="employee_id" required>
                                    <option value="">Select Employee</option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}({{$customer->id}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <input type="hidden" name="hdn_campaign_id" value="{{$campaign_id}}">
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
