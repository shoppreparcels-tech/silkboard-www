@extends('layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')
@section('css_style')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow"/>
@endsection
@section('content')
    <section class="timeline">
        <div class="col-md-4 col-sm-offset-5">
            <br/>
            <font color="#663399">

                <h1>Schedule Pickup List</h1>
            </font>
        </div>
        <br/>
        <font size="4">
            <div class="container-fluid" style="background-color: whitesmoke">
                <div class="feedback-container">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Shipment Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Receive Date</th>
                            <th>Weight</th>
                            <th>Package Items</th>
                            <th>Special Items</th>
                            <th>Other Items</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Shipment Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Receive Date</th>
                            <th>Weight</th>
                            <th>Package Items</th>
                            <th>Special Items</th>
                            <th>Other Items</th>
                            <th>View</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($pickups as $pickup)
                            <tr class="data_font">
                                <td><a href="{{$pickup->asana_url}}" target="_blank"
                                       style="color: cadetblue;">{{$pickup->id}}</a>
                                    <input type="text" class="form-control txtAsanaLink" value="{{$pickup->asana_url}}"
                                           data-id="{{$pickup->id}}" id="txt_asana_{{$pickup->id}}"
                                           style="display: none">
                                    <i class="glyphicon glyphicon-edit btnEdit" data-id="{{$pickup->id}}"
                                       style="cursor: pointer;"></i>
                                </td>
                                <td>{{$pickup->first_name}} {{$pickup->last_name}}</td>
                                <td>{{$pickup->user_email}}</td>
                                <td>{{$pickup->created_at}}</td>
                                <td>{{$pickup->package_weight}}</td>
                                <td>{{$pickup->package_items}}</td>
                                <td>{{$pickup->special_items}}</td>
                                <td>{{$pickup->other_items}}</td>
                                <td><a href="{{route('schedulePickup.View',['id'=>$pickup->id])}}"
                                       class="btn btn-shoppre">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
                <div id="calc_load"></div>
            </div>
        </font>
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){$("#example").DataTable({order:[[0,"desc"]]}),$(".btnEdit").click(function(){var a="#txt_asana_"+$(this).data("id");$(a).css("width","400px"),$(a).toggle(),$(a).focus()}),$(".txtAsanaLink").keypress(function(a){if(13==a.which){$("#calc_load").show();var t=$(this).val(),c=$(this).data("id");jQuery.ajax({url:"/schedule-pickup/asana-tracking",type:"POST",data:{pickup_id:c,asana_url:t},success:function(a){$("#calc_load").hide(),"1"==a.error?alert("Error !"):$("#txt_asana_"+c).hide()}})}})});
    </script>
@endsection
