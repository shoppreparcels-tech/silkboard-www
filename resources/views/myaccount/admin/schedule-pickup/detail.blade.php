@extends('myaccount.admin.layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel
quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree,
following guidelines, website, mobile app')
@section('css_style')
  <meta name="robots" content="noindex,nofollow"/>
@endsection
@section('content')
  <section class="timeline">
    <div class="container ">
      <div class="widgets-wrapper">
        <div class="row top-space">
          <div class="masonary">
            <div class="col s12">
              <div class="widget z-depth-1">
                <h3>Schedule Pickup Detail</h3>
                <div class="schedule-container">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12">
                        <hr>
                        <div class="row">
                          <div class="col-xs-3">
                            <address>
                              <h5><strong>Customer Detail:</strong></h5>
                              <strong>Name:</strong> {{$pickup_details->first_name}} {{$pickup_details->last_name}}<br>
                              <strong>Mobile:</strong> {{$pickup_details->mobile}} <br>
                              <strong>Email:</strong> {{$pickup_details->user_email}}
                            </address>
                          </div>
                          <div class="col-xs-3 col-xs-offset-6 text-right">
                            <address>
                              <h5><strong>Pickup Address:</strong><br></h5>
                              {{$pickup_details->pc_fname}} {{$pickup_details->pc_lname}}<br>
                              {{$pickup_details->pc_street}},{{$pickup_details->pc_city}},<br>
                              {{$pickup_details->pc_contact_no}},<br>
                              {{$pickup_details->pc_state}}-{{$pickup_details->pc_pincode}}
                            </address>
                          </div>
                          <br>
                        </div>
                        <div class="row">
                          <div class="col-xs-3">
                            <address>
                              <h5><strong>Destination Address:</strong><br></h5>
                              <strong>Name:</strong> {{$pickup_details->dc_fname}} {{$pickup_details->dc_lname}}<br>
                              <strong>Mobile:</strong> {{$pickup_details->dc_contact_no}} <br>
                              <strong>Address:</strong><br>
                              {{$pickup_details->dc_street}},{{$pickup_details->dc_city}},<br>
                              {{$pickup_details->dc_state}}, {{$pickup_details->dc_country}},<br>
                              -{{$pickup_details->dc_pincode}}
                            </address>
                          </div>
                          <br>
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
                        <a href="{{route('schedulePickup.list')}}" class="btn btn-shoppre btn-info-full next-step3">
                          Go Back
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

