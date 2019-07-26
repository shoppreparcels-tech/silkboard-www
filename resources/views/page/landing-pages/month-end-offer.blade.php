@extends('layout')


@section('title', 'Month End Exclusive Offer | ₹200 | Worldwide Shipping | ShoppRe.com')
@section('description', 'International Shipping Month End Exclusive Offer Cashback ₹200. For customers who does 3 times shipment/month. Use Code: MEND20')
@section('keywords', 'mend20, month end offer, worldwide shipping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/month-end-offer-shipping-worldwide" />

    <style>
        .div-b-l-w ul li{list-style: none; color:#929ca5; font-weight: 700;font-size: 16px; }
        @media only screen and (max-width: 600px) {
            .bg-valentain {height: 1000px}
        }
     </style>

@endsection
@section('content')
    <section class="div-b-l-w pad-20" >
       <div class="container pad-t-20">
           <div class="col-md-12 col-xs-12 div-b-w-s  b-r no-pad ">
               <div class="col-xs-12 col-md-12 no-pad">
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/month-end-offer.png" class="img-f-w" alt="">
               </div>
           </div>
           <div class="col-md-12 col-xs-12">
               <h1 class="f-s-28 f-c-d-greay f-w-9">Benefit for all the customers who does 3 times shipment/month</h1>

           </div>
       </div>
    </section>
    <section >
        <div class=" container shopContainer no-padding">
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                        class="startsValidValue"> 18th Feb 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                        class="startsValidValue"> 28th Feb 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                        class="startsValidValue"> 3PE200</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 pad-25">
                <h1 class="f-s-18 f-c-d-greay f-w-7">This Offer is applicable for all the ShoppRe Services</h1>
                <ul>
                    <li>International Courier</li>
                    <li>Personal Shopper</li>
                    <li>Package Forwarding from Indian Shopping Sites</li>
                    <br>
                </ul>
                <br>

                <div class="offerDesc">
                    <h4>Cashback: Terms & Conditions</h4>
                    <ul>
                        <li>Cashback: ₹200 Cashback/3 Shipments</li>
                        <li> This offer cannot be clubbed with any other. </li>
                        <li>Use Coupon: 3PE200 </li>
                        <li>The cashback would only be active during 18th Feb to 28th Feb 2019 .</li>
                        <li>This cashback is applicable only for international shipments.</li>
                        <li>The cashback can only be used to pay off your shipping costs.</li>
                        <li>Clearance charges are applicable for shipping Special Items</li>
                        <br>
                    </ul>

                </div>
            </div>
        </div>
    </section>

@endsection

