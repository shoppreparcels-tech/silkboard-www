@extends('myaccount.layout')

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
                <p class="confirm">An email confirmation of your request has been sent to <a href="javascript:void(0)">{{Auth::guard('customer')->user()->email}}</a>.</p>

                @if($shipment->payment_gateway_name == "wire")
                <div class="col-sm-12">
                  <div class="wireoption">
                    <p class="info">We will dispatch your shipment once your payment to the below bank account is confirmed. Kindly note that we currently <strong>DO NOT ACCEPT WESTERN UNION MONEY TRANSFERS</strong>. <strong>Also, it may take up to 7 business days for the amount to reflect in our account, especially in case of International Wire Transfers.</strong> In such a case, we advise you to opt for an alternative payment method if your shipment is urgent or if you don’t want to be charged with storage cost. Please click here if you wish to  <a href='{{url("/shipping/request/payment/retry/{$shipment->order_id}")}}'>change the payment method </a>. </p>
                    <h4>Account Name: INDIANSHOPPRE LLP</h4>
                    <p>Account Number: 918020022874771</p>
                    <p>Branch: Bangalore</p>
                    <p>IFS Code: UTIB0000009</p>
                    <p>MICR Code: 560211002</p>
                    <p>E-mail ID: finance@shoppre.com</p>
                    <p>Address: NO. 9, M.G. ROAD, BLOCK 'A'</p>
                    <p>Swift Code: AXISINBB009</p>
                  </div>
                </div>
                @endif
              @if($shipment->payment_gateway_name == "cash")
                <div class="col-sm-12">
                  <div class="cashoption">
                    <p class="info">We will dispatch your shipment once your payment is confirmed. In such a case, we advise you to opt for an alternative payment method if your shipment is urgent or if you don’t want to be charged with storage cost. Please click here if you wish to  <a href='{{url("/shipping/request/payment/retry/{$shipment->order_id}")}}'>change the payment method </a>. </p>
                  </div>
                </div>
              @endif
                <div class="col-sm-6">
                  <div class="splitbox">
                    <h3>Sent to:</h3>
                    <h4>{{$shipment->full_name}}</h4>
                    <p>{{$shipment->address}}</p>
                    <strong>Phone: {{$shipment->phone}}</strong>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="splitbox">
                    <h3>Shipment Details:</h3>
                    <p># {{$shipment->order_id}}</p>
                    <p>Estimated Weight: {{$shipment->weight}} Kg</p>
                    <p>Estimated Value of Items: INR {{number_format($shipment->value, 2, ".", "")}}</p>
                    <p>Shoppre Shipping Charges: INR {{number_format($shipment->final_amount, 2, ".", "")}}</p>
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
