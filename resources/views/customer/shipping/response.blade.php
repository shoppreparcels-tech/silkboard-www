@extends('layout')

@section('title', '- Ship Request')

@section('css_style')

@endsection

@section('content')

    <section class="ship_response">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="longblock">
              <h4 class="title">SHIP REQUEST CONFIRMATION</h4>
                <h3 class="success">Success! You have completed your ship request.</h3>
                <p class="confirm">An email confirmation of your request has been sent to <a href="javascript::void(0)">{{Auth::guard('customer')->user()->email}}</a>.</p>

                @if($shipment->payoption == "wire")
                <div class="col-sm-12">
                  <div class="wireoption">
                    <p class="info">We will dispatch your shipment upon the confirmation of your payment to the below bank account. Please note that Wire Transfer via Western Union is not possible at the moment</p>
                    <h4>Account Name: INDIANSHOPPRE LLP</h4>
                    <p>Account Number: 917020057881967</p>
                    <p>Branch: Bangalore</p>
                    <p>IFS Code: UTIB0000009</p>
                    <p>MICR Code: 560211002</p>
                    <p>E-mail ID: support@shoppre.com</p>
                    <p>Address: NO. 9, M.G. ROAD, BLOCK 'A'</p>
                    <p>Swift Code: AXISINBB009</p>
                  </div>
                </div>
                @elseif($shipment->payoption == "paypal")
                <div class="col-sm-12">
                  <div class="wireoption">
                    <h4>PAYPAL: support@shoppre.com</h4>
                  </div>
                </div>
                @elseif($shipment->payoption == "paytm")
                <div class="col-sm-12">
                  <div class="wireoption">
                    <h4>PAYTM: 9148357733</h4>
                  </div>
                </div>
                @endif

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
                    <p>Estimated Weight: {{$shipment->weight}} Kg</p>
                    <p>Estimated Value of Items: INR {{number_format($shipment->value, 2, ".", "")}}</p>
                    <p>Shoppre Shipping Charges: INR {{number_format($shipment->finalamount, 2, ".", "")}}</p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div role="alert" class="alert alert-warning text-center">
                  <h4>AFTER your payment has been confirmed, our shipping experts will make every effort to process your shipment within 24 hours.</h4>
                  <p>An email with your tracking information will be sent to you as soon as your parcels have been dispatched.</p>
                </div>
              <div class="clearfix"></div>
              <div class="ship_points"> 
                <h4>What's Next</h4>
                <ul>
                  <li>The shipment order will be in <a href="{{route('shipping.queue')}}">Queue</a> until the items LEAVE Shoppre facility.</li>
                  <li>You can view your shipped packages in transit in your <a href="{{route('shipping.history')}}">History</a>.</li>
                  <li>We shall let you know if we haven’t received your amount (in case of wire transfer) in 2 days. If we don’t receive your amount within 7 days from the time your parcel was ready to be shipped, you will incur a storage fee of INR 100/day from the 8th day onwards. We can only dispatch your parcel from the Shopre facility upon confirmation of the payment.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

@endsection