@extends('layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')
@section('robots', 'noindex, nofollow')
@section('content')
    <section class="timeline">
        {{--<div class="col-sm-4 col-sm-offset-4">--}}
        {{--<h3>Schedule Your Pickup</h3>--}}
        {{--</div>--}}
        <div class="container ">
            <h3>Schedule Pickup Detail</h3>
            <div class="schedule-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <hr>
                            <div class="row">
                                <div class="col-xs-3">
                                    <address>
                                        <h4><strong>Customer Detail:</strong></h4>
                                        <strong>Name:</strong> {{$pickup_details->first_name}} {{$pickup_details->last_name}}<br>
                                        <strong>Mobile:</strong> {{$pickup_details->mobile}} <br>
                                        <strong>Email:</strong> {{$pickup_details->email}}
                                    </address>
                                </div>
                                <div class="col-xs-3 col-xs-offset-6 text-right">
                                    <address>
                                        <h4><strong>Pickup Address:</strong><br></h4>
                                        {{$pickup_details->pickup_address}}
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <address>
                                        <h4><strong>Destination Address:</strong><br></h4>
                                        {{$pickup_details->dest_address}}
                                    </address>
                                </div>
                                <div class="col-xs-3 col-xs-offset-6 text-right">
                                    <address>
                                        <h4><strong>Order Date:</strong><br></h4>
                                        {{$pickup_details->created_at}}<br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Pickup Summary</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <thead>
                                            <tr>
                                                <td><strong>Package Weight</strong></td>
                                                <td class="text-center"><strong>Package Size</strong></td>
                                                <td class="text-center"><strong>Package Items</strong></td>
                                                <td class="text-right"><strong>Special Items</strong></td>
                                                <td class="text-right"><strong>Other Items</strong></td>
                                                <td class="text-right"><strong>Payment Option</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <tr>
                                                <td>{{$pickup_details->package_weight}}</td>
                                                <td class="text-center">{{$pickup_details->size_of_package}}</td>
                                                <td class="text-center">{{$pickup_details->package_items}}</td>
                                                <td class="text-right">{{$pickup_details->special_items}}</td>
                                                <td class="text-right">{{$pickup_details->other_items}}</td>
                                                <td class="text-right">{{$pickup_details->payment_option}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('schedulePickup.List')}}" class="btn btn-shoppre btn-info-full next-step3">
                                Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {

        });
    </script>
@endsection