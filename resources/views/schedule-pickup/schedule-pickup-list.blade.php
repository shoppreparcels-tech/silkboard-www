@extends('layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')
@section('robots', 'noindex, nofollow')
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
                                <th>Id</th>
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
                                <th>Id</th>
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
                                <td>{{$pickup->id}}</td>
                                <td>{{$pickup->first_name}} {{$pickup->last_name}}</td>
                                <td>{{$pickup->email}}</td>
                                <td>{{$pickup->created_at}}</td>
                                <td>{{$pickup->package_weight}}</td>
                                <td>{{$pickup->package_items}}</td>
                                <td>{{$pickup->special_items}}</td>
                                <td>{{$pickup->other_items}}</td>
                                <td><a href="{{route('schedulePickup.View',['id'=>$pickup->id])}}" class="btn btn-shoppre">View</a></td>
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