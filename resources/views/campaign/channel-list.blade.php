@extends('layout')

@section('title', 'Campaigns')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')
@section('robots', 'noindex, nofollow')
@section('content')
    <section class="timeline">
        <div class="col-md-4 col-sm-offset-5">
            <br/>
            <font color="#663399">
                <h1>Channels List</h1>
            </font>
        </div>
        <div class="col-md-2">
            <br/>
            <br/>
            <br/>
            <a href="{{route('channelCreate',['camp_id'=>$campaign_id])}}" class="btn btn-shoppre">+ Create Channel</a>
            <br/>
            <br/>
        </div>
        <br/>
        <font size="4">
            <div class="container-fluid" style="background-color: whitesmoke">
                    <div class="feedback-container">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Campaign Id</th>
                                <th>Channel</th>
                                <th>Employee Id</th>
                                <th>Shorten Url</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Campaign Id</th>
                                <th>Channel</th>
                                <th>Employee Id</th>
                                <th>Shorten Url</th>
                                <th>Created At</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($channels as $channel)
                            <tr class="data_font">
                                <td>{{$channel->id}}</td>
                                <td>{{$channel->campaign_id}}</td>
                                <td>{{$channel->channel}}</td>
                                <td>{{$channel->employee_id}}</td>
                                <td>{{$channel->shorten_url}}</td>
                                <td>{{$channel->created_at}}</td>
                                {{--<td><a href="{{route('campaignEdit',['id'=>$campaign->id])}}" class="btn btn-shoppre">Edit</a></td>--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </font>
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            $('#example').DataTable({
                "order": [[ 0, "desc" ]]
            });
        });
    </script>
@endsection