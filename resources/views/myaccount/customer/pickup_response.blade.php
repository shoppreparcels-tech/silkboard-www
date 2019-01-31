@extends('myaccount.layout')

@section('title', '- Pickup Request')

@section('css_style')

@endsection

@section('content')

    <section class="ship_response">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="longblock">
              <h4 class="title">PICK-UP REQUEST</h4>
                <h3 class="success">Thankyou for creating your Pick-up Request!</h3>
                <p>We are excited to start preparing your parcel! Kindly note that you can no longer change the selection of your packages and your Shipping Options</p>

                <p>Shoppre might take up to a maximum period of 24 Hours to pack your items, weigh your parcel and update your shipment totals, unless during peak hours or incase of any special package handling requirement.</p>

                <p><strong>You shall be notified via email when your packages are ready to be shipped from the Shoppre facility.</strong></p>

                <!-- <p>You can now view your shipment in the <a href="#">Queue</a>. P.S. Cancel your shipment right now if you wish to do so, before we start processing your shipment.</p> -->

                <p><strong>Please note that once your package is ready to be shipped and your final cost is updated, KINDLY SUBMIT YOUR PAYMENT WITHIN 7 DAYS.</strong></p>

                <p>From the 8th day, your parcel will start accumulating Storage fees of INR 100/day which you can view in your Shoppre wallet.</p>

                <p>Once the payment is confirmed, you will have to pick up your goods within a period of 10 Days.</p>

                <p>You will need to bring your ID in order to pick up your goods. Kindly do not bring any guests, as they are not authorized to pick up your goods.</p>

                <a href="{{route('customer.locker')}}" class="btn btn-shoppre" style="border-radius: 5px;margin-top: 15px;">I WILL BE AWAITING YOUR NOTIFICATION EMAIL TO SUBMIT MY PAYMENT</a>

            </div>
          </div>
        </div>
      </div>
    </section>


@endsection
