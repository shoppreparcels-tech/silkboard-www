@extends('layout')

@section('title', '- Ship Request')

@section('css_style')

@endsection

@section('content')

    <section class="ship_response toreview">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="longblock">
              <h4 class="title">Thank you for creating your Ship Request!</h4>

              <h3 class="success">Hello there! :)</h3>
              <p>We are excited to start preparing your parcel!</p>
              <p>Kindly note that you can no longer change the selection of your packages, Shipping Options and Delivery Address.</p>
              <p>Shoppre might take up to a maximum period of 24 Hours to pack your items, weigh your parcel and update your shipment totals.</p>
              <p>We usually try to get back to you with your Final Shipment Charges as soon as possible, unless during peak hours or some of your parcels which are put on hold due to its special handling requirement, and hence we might take additional time to notify you and get your approval in certain cases.</p>
                
              <h4>You shall be notified via email when your packages are ready to be shipped from the Shoppre facility. You can now view your shipment in the <a href="javascript::void(0)">Queue</a>.</h4>

              <i>P.S. Cancel your shipment right now if you wish to do so, before we start processing your shipment.</i>

              <p class="text-orange">Please remember that once your package is ready to be shipped and your final cost is updated, KINDLY SUBMIT YOUR PAYMENT WITHIN 7 DAYS. From the 8th day, your parcel will start accumulating Storage fees of INR 100/day which you can view in your Shoppre wallet.</p>

              <div class="text-center">
                <a href="{{route('shipping.queue')}}" class="btn btn-shoppre" style="border-radius: 5px;margin-top: 15px;">I WILL BE AWAITING YOUR NOTIFICATION EMAIL TO SUBMIT MY PAYMENT</a>
              </div>
              
              <div class="splitbox">
                  <h3>Shipment Details:</h3>
                  <p># {{$shipment->orderid}}</p>
                  <hr>
                  <h3>Shipping Address:</h3>
                  <h4>{{$shipment->fullname}}</h4>
                  <p>{{$shipment->address}}</p>
                  <strong>Phone: {{$shipment->phone}}</strong>
              </div>
              
            </div>
          </div>
          <div class="col-sm-4">
            <ul class="dash-quick" style="margin-top: 0;">
                <li style="background-image:url({{asset('img/dashico1.png')}});"><a href="#">Country Guides</a></li>
                <li style="background-image:url({{asset('img/dashico2.png')}});"><a href="{{route('stores')}}">Brands You Love</a></li>
                <li style="background-image:url({{asset('img/dashico3.png')}});"><a href="{{route('pricing')}}">Shipping Calculator</a></li>
                <li style="background-image:url({{asset('img/dashico4.png')}});"><a href="{{route('personal.shopper')}}">Personal Shopper</a></li>
                <li style="background-image:url({{asset('img/dashico5.png')}});"><a href="#">Exchange Rates</a></li>
                <li style="background-image:url({{asset('img/dashico6.png')}});"><a href="{{route('services')}}">Our Services</a></li>
                <li style="background-image:url({{asset('img/dashico7.png')}});"><a href="{{route('customer.address')}}">Address Book</a></li>
                <li style="background-image:url({{asset('img/dashico8.png')}});"><a href="https://blog.shoppre.com" target="_blank">Blogs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    

@endsection