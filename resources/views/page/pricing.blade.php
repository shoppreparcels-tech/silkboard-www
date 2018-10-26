@extends('layout')

@section('title', 'Pricing | Shipping Cost Calculator - Shoppre')
@section('description', 'Get the right plan that suits your need and calculate your shipping costs from India to any country. Save upto 75% on shipping rates!')
@section('keywords', 'calculate your shipping costs, from india to any country, save 75% on shipping rates, repackaging service, shipping calculator')

@section('css_style')
    <!-- Select2 -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')

    <section class="page_head">
        <div class="pagebanner">
            <img src="{{asset('img/banner.jpg')}}" width="100%">
            <div class="banner-cap">
                <h2>PRICING</h2>
                <h2>THAT <span class="text-orange">NEVER</span> BUSTS YOUR WALLET</h2>
            </div>
        </div>
    </section>

    <section class="white-band">
        <h2>Want something from India?</h2>
        <h3>SHOP ONLINE WITH A <a class="anchor-color" href="https://www.shoppre.com/services/virtual-address-in-india/"
            target="_blank">SHOPPRE VIRTUAL ADDRESS</a> AND PERSONAL LOCKER NUMBER!</h3>
        <p>Tell us where you want to send your parcel and get <span class="text-orange">Upfront Pricing</span>; get your
            parcel in just 3-6 Days!</p>
        <p><a class="anchor-color" href="https://www.shoppre.com/offers/save-upto-80-international-shipping-cost-from-india"
              target="_blank">Save upto 60-80% on Shipping Costs </a>, through <span class="text-orange">Shoppre’s Cost-saving Services!</span>
        </p>
    </section>

    <section class="shipping-calculator">
        <div class="container">
            <div class="head">
                <h2>Get Shipping Rates</h2>
                <span>The chargeable weight is always the greater of the two :<br>
            The actual or the volumetric weight.</span>
                <small><a class="popup-modal" href="#vol_model">Learn how to calculate the Volumetric Weight</a></small>

                <div id="vol_model" class="white-popup-block mfp-hide">
                    <h3>How To Calculate Volumetric Weight</h3>
                    <img src="{{asset('img/vol_calc.png')}}">
                    <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="calculator block">
                    <h3 class="text-red">INTERNATIONAL SHIPPING CALCULATOR</h3>
                    <h4>(From your Shoppre Locker in Bengaluru to your doorstep Abroad)</h4>
                    <span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
                    <form class="calc-form" id="shipping">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-12">Where do you want to send your package?</label>
                            <div class="col-sm-12">
                                <select class="form-control select2" name="country">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" style="top: 8px;">What is your package type?</label>
                            <div class="col-sm-7">
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="type" value="nondoc" checked>Non Document
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="type" value="doc">Document
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label">How much does your package weight? </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="1" name="weight"
                                       placeholder="Enter Weight">
                            </div>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="unit" value="kg" checked>Kilograms
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="unit" value="lbs">Pounds
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-8 control-label" style="top: 8px;">What are the dimensions of your
                                package? (Optional)</label>
                            <div class="col-sm-4">
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="scale" value="cm" checked>cm
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="scale" value="in">in
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group smallboxs">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="length"> <strong>Length</strong>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="width"> <strong>Width</strong>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="height"> <strong>Height</strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-block btn-shoppre-red margin_btn"><font size="4px"><strong>ESTIMATE</strong></font></button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
          <div id="ship_result" class="calc-result">
           <h4 class="text-red">ESTIMATED SHIPPING COST*</h4>
            <p class="info">Best carrier will be automatically chosen according to your country and weight
              of shipment. We use trusted courier services like DHL, FedEx and DTDC.</p>
            <div class="result table-responsive">
              <table class="table table-bordered" id="prices">
              </table>
            </div>
              <div class="row button_row">
                  <div class="col-sm-4 col-sm-offset-1">
                      <a href="{{route('schedulePickup.Index')}}"
                         class="btn btn-block btn-shoppre">
                          Schedule a Pickup
                      </a>
                  </div>
                  <div class="col-sm-5 col-sm-offset-1">
                      <a href="https://myaccount.shoppre.com/register" target="_blank"
                         class="btn btn-block btn-shoppre-red">
                          Get Free Virtual Address
                      </a>
                  </div>
              </div>
            <ul class="points">
                            <li><span class="text-red">*</span> The chargeable weight is always the greater of the two:
                                Volumetric or the Actual weight.
                            </li>
                            <li><span class="text-red">*</span> The rates displayed are INCLUSIVE of the fuel surcharge
                                and taxes within India.
                            </li>
                            <li><span class="text-red">*</span> You may need to pay duties or tax when your shipment
                                arrives, as per the import law of the receiving country.
                            </li>
                            <li><span class="text-red">*</span> <a href="#special_address" class="list-color">Excludes oversized and palletized shipments, and special
                                products (liquids, homemade food, etc.)</a>
                            </li>
                            <li><span class="text-red">**</span> After dispatch from Shoppre facility. Does not apply to
                                ship requests made after 3pm IST on Saturdays, or on holidays. Shipments that may
                                require additional time include those containing items under review or hazardous
                                materials, oversized packages or where additional export documentation is required.
                            </li>
                            <li><span class="text-red">**</span> For electronics items , INR 500 will be charged additionally.
                            </li>
                        </ul>
                    </div>
                    <div id="calc_load"></div>
                </div>
                <div class="parcelsample">
                    <h5>Centimeter/Inch Conversion</h5>
                    <p>1 in = 2.54 cm <span>(1 cm = 0.3937 in)</span></p>
                    <h5>Kilogram/Pound Conversion</h5>
                    <p>1 lbs = 0.4536 Kg <span>(1 Kg = 2.2046 lbs)</span></p>
                    <h5>Parcel Sample :</h5>
                    <img src="{{asset('img/parcelsample.png')}}">
                </div>
            </div>
            <div class="col-md-5">
                <div class="getquote block">
                    <h3>DOMESTIC SHIPMENT</h3>
                    <form class="quote-form calc-form" id="form_quote" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-12">Where do you want to send your package?</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="state">
                                    <option value="">Select State</option>
                                    @php
                                        $states  = array (
                                         'AP' => 'Andhra Pradesh',
                                         'AR' => 'Arunachal Pradesh',
                                         'AS' => 'Assam',
                                         'BR' => 'Bihar',
                                         'CT' => 'Chhattisgarh',
                                         'GA' => 'Goa',
                                         'GJ' => 'Gujarat',
                                         'HR' => 'Haryana',
                                         'HP' => 'Himachal Pradesh',
                                         'JK' => 'Jammu & Kashmir',
                                         'JH' => 'Jharkhand',
                                         'KA' => 'Karnataka',
                                         'KL' => 'Kerala',
                                         'MP' => 'Madhya Pradesh',
                                         'MH' => 'Maharashtra',
                                         'MN' => 'Manipur',
                                         'ML' => 'Meghalaya',
                                         'MZ' => 'Mizoram',
                                         'NL' => 'Nagaland',
                                         'OR' => 'Odisha',
                                         'PB' => 'Punjab',
                                         'RJ' => 'Rajasthan',
                                         'SK' => 'Sikkim',
                                         'TN' => 'Tamil Nadu',
                                         'TR' => 'Tripura',
                                         'UK' => 'Uttarakhand',
                                         'UP' => 'Uttar Pradesh',
                                         'WB' => 'West Bengal',
                                         'AN' => 'Andaman & Nicobar',
                                         'CH' => 'Chandigarh',
                                         'DN' => 'Dadra and Nagar Haveli',
                                         'DD' => 'Daman & Diu',
                                         'DL' => 'Delhi',
                                         'LD' => 'Lakshadweep',
                                         'PY' => 'Puducherry',
                                        );
                                    @endphp
                                    @foreach($states as $state)
                                        <option value="{{$state}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="City">
                            </div>
                            <div class="col-sm-6">
                                <label>Pin Code</label>
                                <input type="text" name="pin" class="form-control" placeholder="PIN">
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">What is your package type?</label>
                            <div class="col-sm-8">
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="type" value="nondoc" checked>Non Document
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="type" value="doc">Document
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label">How much does your package weigh?</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="weight" placeholder="Enter Weight">
                            </div>
                            <div class="col-sm-7">
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="unit" value="kg" checked>Kilograms
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="unit" value="lbs">Pounds
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-8 control-label" style="top: 8px;">What are the dimensions of your
                                package?</label>
                            <div class="col-sm-4">
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="scale" value="cm" checked>cm
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                        <input type="radio" name="scale" value="in">in
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group smallboxs">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="length"> <strong>Length</strong>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="width"> <strong>Width</strong>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="height"> <strong>Height</strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group" style="margin-top: 8px;">
                            <label class="col-sm-12 control-label">Your Email Address</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 8px;">
                            <label class="col-sm-12 control-label">Your Mobile Number</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-block btn-shoppre" id="quote_submit">Get A Quote
                                </button>
                                <div id="quote_result">Your enquiry has been submited! Our team will contact you soon.
                                </div>
                                <div id="quote_error">Sorry! We can't process your request right now. Please try again
                                    later.
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>

                    <div class="clearfix"></div>

                    <div id="quote_load" class="ajaxloader"></div>
                </div>

                <div class="block pickup">
                    <div class="text-center">
                        <h3>SCHEDULE A PICK-UP</h3>
                        <p>Where do you want to send package?</p>
                    </div>
                    <ul>
                        <h4>DOMESTIC SHIPMENT</h4>
                        <li>From any city in India to your Shoppre locker in Bengaluru</li>
                        <li>From any city in India to any other city in India</li>
                    </ul>
                    <ul>
                        <h4>INTERNATIONAL SHIPMENT</h4>
                        <li>From Bengaluru, directly to your doorstep abroad</li>
                        <li>From any city in India, directly to your doostep abroad</li>
                    </ul>
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-block btn-shoppre">Schedule A Pickup</a>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section class="pricing_plans">
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="title">
                    <h1><span class="text-red">No</span> Membership Plans</h1>
                    <h2 class="text-orange">START SAVING UP TO 60-80% ON INTERNATIONAL SHIPPING RATES TODAY!</h2>
                    <p>All Shoppre members receive our world-class customer service and express door-to-door delivery
                        options. </p>
                    <strong>Pay ONLY when you choose to use any of our services!</strong>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Services</th>
                            <th class="text-center">Cost</th>
                        </tr>
                        <tr>
                            <td>Receive your own Indian Shipping Address & Personal Locker
                                <a href="#" class="tooltipkey" title="Receive your own Locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store.">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">Free</td>
                        </tr>
                        <tr>
                            <td>Receive Parcels
                                <a href="#" class="tooltipkey"
                                                   title="All your purchases from various Indian Stores
                                                   arrive to your Shoppre Address. It is absolutely free for
                                                   Shoppre to login all your parcels into your locker and to
                                                   your account.">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">Free</td>
                        </tr>
                        <tr>
                            <td>Shoppre Shipping Discount
                                <a href="#" class="tooltipkey"
                                                 title="Shoppre’s long term partnership with
                                                 trusted courier companies like DHL, FedEx, DTDC
                                                 and more, gives us amazing shipping rates thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose Shoppre as your Shipping Partner).">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">Free</td>
                        </tr>
                        <tr>
                            <td>Service Tax in India
                                <a href="#" class="tooltipkey"
                                                   title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and tax in India.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any cash amount to your carrier at the
                                                   time of receving your parcel."><i
                                            class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">No Extra Service Tax</td>
                        </tr>
                        <tr>
                            <td>Package Consolidation
                                <a href="#" class="tooltipkey"
                                                   title="Shoppre’s packing experts will
                                                   combine multiple packages into one, for maximum shipping cost
                                                   savings. This way, you have to pay for the first half kg rate
                                                   (which is the most expensive rate) only once. At times, some of
                                                   your package that arrives at our facility might contain more than
                                                   1 item. While preparing your final shipment, we charge only per
                                                   package, and not per item. ">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">INR 100 per extra package <span>(not per extra item)</span></td>
                        </tr>
                        <tr>
                            <td>Package Repacking
                                <a href="#" class="tooltipkey"
                                                  title="We usually repack all the necessary
                                                  items (items which arrive at our facility in
                                                  big boxes) in order to reduce the dimensional weight
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">Free</td>
                        </tr>
                        <tr>
                            <td>Package Storage
                                <a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple package delivery and maximum
                                                  consolidation savings. ">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">Free upto 20 days <span>(INR 100 for every extra day)</span></td>
                        </tr>
                        <tr>
                            <td>Package Photo Service
                                <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take upto 5 Basic photographs of all
                                                         your items. Additional Photos: You can also request upto 10
                                                         Additional Photos (incase you want some more details or if
                                                         you want to inspect if the items are not damaged).Scan
                                                         Documents: We can scan your documents (2 kgs and below)
                                                          for a cost of INR 40/page (minimum INR 100).">
                                    <i class="fa fa-question-circle-o"></i></a></td>
                            <td class="cell-2">INR 50 (Basic Photos)<br><span>INR 500 (Additional Photos)</span></td>
                        </tr>
                        <tr>
                            <td>Personal Shopper Service
                                <a href="#" class="tooltipkey"
                                                         title="Shoppre’s Personal Shopper Team will purchase the
                                                         items on your behalf incase some Indian Websites does not
                                                         accept International Card Payment, or requires you to register
                                                         with an active Indian Mobile number. Personal Shopper orders
                                                         with more than 15 items per online seller will incur an INR
                                                         50 per item cost for every item over 15. ">
                                    <i class="fa fa-question-circle-o"></i></a></td>
                            <td class="cell-2"> 7% of the item value <span>(Minimum INR 200)</span></td>
                        </tr>
                        <tr>
                            <td id="special_address">Special Package Clearance Fee
                                <a href="#" class="tooltipkey"
                                                         title="Any Package which requires Special Handling
                                                         will be prompted via email to you. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and we shall inform you via
                                                         email. ">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">
                                0.5 kg to 5 kg  = INR 1392.4/Shipment <br>
                                5 kg to 10 kg    = INR 3009/Shipment <br>
                                10 kg to 15 kg  = INR 5369/Shipment <br>
                                Above 15kg 	    = INR 7729/Shipment
                            </td>
                        </tr>
                        <tr>
                            <td>Pick-up Service
                                <a href="#" class="tooltipkey"
                                                   title="You can request Shoppre to pick-up your items
                                                   from any city in India!">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">
                                <span>From Bangalore:</span>
                                INR 40/kg, Min INR 100
                                <span>From any other city in India:</span>
                                INR 50/kg, Min INR 200
                            </td>
                        </tr>
                        <tr>
                            <td>Receive Mail (post)
                                <a href="#" class="tooltipkey"
                                                       title="Shoppre charges an additional amount of INR 100 for
                                                       receiving a package which is considered as a document
                                                       (2 kg and below). Shipping charges of Documents slightly vary
                                                        from that of Non-documents.As of now the same is FREE of cost. ">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2"><strike>INR 100</strike> Free </td>
                        </tr>
                        <tr>
                            <td>Real-time Shipment Tracking
                                <a href="#" class="tooltipkey"
                                                        title="You will receive carrier tracking information
                                                        as soon as your package leaves the Shoppre facility.">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">Free</td>
                        </tr>
                        <tr>
                            <td>Package Return Services
                                <a href="#" class="tooltipkey"
                                                           title="Once the item arrives at our facility, if you feel
                                                           the item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller exchange/return policy). You will be responsible for
                                                           all return shipping fees as well (if needed). If it has to
                                                           be couriered to sender’s destination by Shoppre, charges
                                                           as per domestic shipping rates will be considered.">
                                    <i class="fa fa-question-circle-o"></i>
                                </a>
                            </td>
                            <td class="cell-2">INR 400</td>
                        </tr>
                        {{--<tr>--}}
                            {{--<td>Shoppre Shipping Guarantee--}}
                                {{--<a href="#" class="tooltipkey"--}}
                                                            {{--title="Insure your shipment upto a total value of INR--}}
                                                            {{--6000 for only INR 30. Check out our FAQ for more--}}
                                                            {{--details.">--}}
                                    {{--<i class="fa fa-question-circle-o"></i>--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td class="cell-2">INR 30</td>--}}
                        {{--</tr>--}}
                        <tr>
                            <td>Shipping Preferences
                                <a href="#" class="tooltipkey"
                                                        title="Shoppre gives you various shipping preference
                                                        options to choose from!">
                                    <i class="fa fa-question-circle-o"></i></a></td>
                            <td class="cell-2"><a
                                        href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/shipping-preferences">Click
                                    here to know your options</a></td>
                        </tr>
                        <tr>
                            <td style="border-color: #ffffff;border-right-color: #87bc00;"></td>
                            <td style="padding: 0 !important;border-color: #87bc00;"><a
                                        href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                        class="btn btn-block">Sign up for free</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="price_cguide">
        <div class="container">
            <h2>Country Guides</h2>
            <p>Each country has its own customs laws and the duties for diifferent types of goods and values are set
                locally.All our international courier partners must adhere to local customs legislation and will pay
                duties on the receiver’s behalf to clear shipments on aarival.The goods will be released to you upon the
                full repayment of any duties and taxes that were paid on your behalf.</p>
            <h4>Find helpful information specific to your country, including :</h4>
            <ul>
                <li>Shipping costs</li>
                <li>Duties and taxes</li>
                <li>Restricted &amp; prohibited items</li>
                <li>Current exchange rates</li>
                <li>Typical transit times</li>
                <li>Country alerts</li>
            </ul>
            <a href="javascript:void(0)" class="btn btn-shoppre">Learn More</a>
        </div>
    </section>

    <section class="testimonails">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="square-box">
                        <h3>What Our</h3>
                        <h2>Members <span class="orange">Say!</span></h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="testimons owl-carousel">
                        @foreach($reviews as $review)
                            <div class="item">
                                <div class="col-sm-3 text-center">
                                    @if(!empty($review->country->flag))
                                        <img src="{{asset('img/flags')}}/{{$review->country->flag}}"
                                             class="img-circle">
                                    @endif
                                </div>
                                <div class="col-sm-9">
                                    <p>{{$review->review}}</p>
                                    <span class="name">{{$review->person}}</span>
                                    <span>{{$review->country->name}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center">
                        <a href="{{route('reviews')}}" class="btn orange">View All Shoppre Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="signup_free">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness
                        today!</h3>
                    <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
                    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">sign up for
                        free</a>
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
            $(function () {
                $('.popup-modal').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    modal: true
                });
                $(document).on('click', '.popup-modal-dismiss', function (e) {
                    e.preventDefault();
                    $.magnificPopup.close();
                });
            });
        });
    </script>
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".select2").select2();
        });
    </script>

    <!-- Owl Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.testimons').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                navText: '',
                autoplay: true,
                autoplayTimeout: 2500,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true
                    }
                }
            });
        });
    </script>


    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#shipping").validate({
                rules:
                    {
                        country: {required: true},
                        weight: {required: true},
                        unit: {required: true}
                    },
                messages:
                    {
                        country: {required: "Please select country"},
                        weight: {required: "Please enter weight to calculate."},
                        unit: {required: "Please select unit of weight."}
                    },
                submitHandler: function (form) {
                    var country = $("select[name='country']").val();
                    var weight = $("input[name='weight']").val();
                    var unit = $("input[name='unit']:checked").val();
                    var type = $("input[name='type']:checked").val();
                    var box_scale = $("input[name='scale']:checked").val();
                    var length = $("input[name='length']").val();
                    var width = $("input[name='width']").val();
                    var height = $("input[name='height']").val();
                    var token = $('input[name=_token]').val();
                    $("#calc_load").show();
                    $('#calc_error').hide();
                    $('#ship_result').hide();
                    jQuery.ajax({
                        url: '/calculate-shipping',
                        type: "POST",
                        data: {
                            _token: token,
                            country: country,
                            weight: weight,
                            unit: unit,
                            type: type,
                            length: length,
                            width: width,
                            height: height,
                            scale: box_scale
                        },
                        success: function (res) {
                            console.log(res);
                            $("#calc_load").hide();

                            if (res.error == "1") {
                              $('#calc_error').css('display', 'block');
                            } else {
                              var html = "";
                              res.prices.map(function(price) {

                                html += ' <tr> ' +
                                // '<td>' + price.partner_name+ '</td>' +
                                ' <td class="bg-white">' +
                                ' <span>' + price.time+ '</span> Business Days' +
                                ' <span class="text-red">**</span>' +
                                ' </td>' +
                                '<td>' +
                                '<i class="fa fa-rupee"></i> <span>' + ((100-price.discount)/100) * price.amount+ '</span>' +
                                ' </td>' +
                                ' <td>' +
                                '<span class="striked">' +
                                '<i class="fa fa-rupee"></i>' +
                                ' <span>' +  price.amount+ '</span>' +
                                '</span>' +
                                ' </td>' +
                                '<td class="discount">' +
                                ' <span>' + price.discount + '</span>% OFF' +
                                '</td>' +
                                ' </tr>';

                                $('#prices').html(html);
                                $('#ship_result').slideDown();
                              });
                            }
                          }
                        });
                    return false;
                }
            });

            $("#form_quote").validate({
                rules:
                    {
                        state: {required: true},
                        city: {required: true},
                        pin: {required: true},
                        type: {required: true},
                        weight: {required: true},
                        unit: {required: true},
                        email: {required: true, email: true},
                        mobile: {required: true}
                    },
                messages:
                    {
                        state: {required: "Please select state"},
                        city: {required: "Please enter city"},
                        pin: {required: "Please enter PIN"},
                        weight: {required: "Enter package weight."},
                        email: {required: "Enter your email address to contact."},
                        mobile: { required: "Enter your mobile number to contact."}
                    },
                submitHandler: function (form) {
                    $("#quote_load").show();
                    jQuery.ajax({
                        url: '/qoute/submit',
                        type: "POST",
                        data: $("#form_quote").serialize(),

                        success: function (data) {
                            $('#form_quote')[0].reset();
                            $("#quote_load").hide();
                            $("#quote_submit").hide();
                            $("#quote_result").show();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            $('#form_quote')[0].reset();
                            $("#quote_load").hide();
                            $("#quote_error").show();
                            $("#quote_submit").hide();
                            /*console.log(xhr.responseText);*/
                        }
                    });
                    return false;
                }
            });
        });
    </script>

@endsection
