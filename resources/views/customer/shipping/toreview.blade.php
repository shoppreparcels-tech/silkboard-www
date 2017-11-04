@extends('layout')

@section('title', '- Ship Request')

@section('css_style')

@endsection

@section('content')

    <section class="ship_response">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="longblock">
              <h4 class="title">Ship Request Response</h4>

              <h3 class="success">Success! You have completed your ship request</h3>
              <p class="confirm">An email confirmation of your request has been sent to your mail address. You can view your ship request in <a href="{{route('shipping.queue')}}">Queue</a></p>

              <div class="col-sm-6">
                <div class="splitbox">
                  <h3>Sent to:</h3>
                  <h4>{{$shipment->fullname}}</h4>
                  <p>{{$shipment->address}}</p>
                  <strong>Phone: {{$shipment->phone}}</strong>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="splitbox">
                  <h3>Shipment Details:</h3>
                  <p># {{$shipment->orderid}}</p>
                </div>
              </div>
              <div class="clearfix"></div>

              @if(isset($options) && !empty($options))
                <div class="col-sm-12">
                    <h4>Shipment Options Requested:</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                          <tr>
                              <th width="50px;"></th>
                              <th>Options</th>
                              <th>Cost</th>
                          </tr>
                          <tr>
                              <td class="text-center">
                                @php
                                  $marking  = ($options->repack == 1) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>';
                                  echo $marking;
                                @endphp
                              </td>
                              <td>Repack items</td>
                              <td>{{$options->repack_amt}}</td>
                          </tr>
                          <tr>
                              <td class="text-center">
                                @php
                                  $marking  = ($options->sticker == 1) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>';
                                  echo $marking;
                                @endphp
                              </td>
                              <td>Fragile stikers</td>
                              <td>{{$options->sticker_amt}}</td>
                          </tr>
                          <tr>
                              <td class="text-center">
                                @php
                                  $marking  = ($options->extrapack == 1) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>';
                                  echo $marking;
                                @endphp
                              </td>
                              <td>Add extra packing material</td>
                              <td>{{$options->extrapack_amt}}</td>
                          </tr>
                          <tr>
                              <td class="text-center">
                                @php
                                  $marking  = ($options->original == 1) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>';
                                  echo $marking;
                                @endphp
                              </td>
                              <td>Ship original boxes</td>
                              <td>{{$options->original_amt}}</td>
                          </tr>
                          <tr>
                              <td class="text-center">
                                @php
                                  $marking  = ($options->consolid == 1) ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>';
                                  echo $marking;
                                @endphp
                              </td>
                              <td>Package consolidation</td>
                              <td>
                                {{$options->consolid_amt}}
                              </td>
                          </tr>
                      </table>
                    </div>
                </div>

              @endif
              <div class="clearfix"></div>
              <div class="ship_points"> 
                <h4>What's Next</h4>
                <ul>
                  <li>Our shipping experts will make every effort to process your shipment within 24 hours.</li>
                  <li>We will send you tracking information by email when shipment leaves shoppre.</li>
                  <li>You can view shipped packages currently in transit in you history.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <ul class="dash-quick" style="margin-top: 0;">
                <li><a href="#">Country Guides</a></li>
                <li><a href="#">Brands You Love</a></li>
                <li><a href="#">Shipping Calculator</a></li>
                <li><a href="#">Personal Shoppre</a></li>
                <li><a href="#">Exchange Rates</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Address Book</a></li>
                <li><a href="#">Blogs</a></li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    

@endsection