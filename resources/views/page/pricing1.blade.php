@extends('layout')

@section('title', 'Pricing | Shipping Cost Calculator - Shoppre')
@section('description', 'Get the right plan that suits your need and calculate your shipping costs from India to any country. Save upto 75% on shipping rates!')
@section('keywords', 'calculate your shipping costs, from india to any country, save 75% on shipping rates, repackaging service, shipping calculator')

@section('css_style')

@endsection

@section('content')
    <section class="header">
        <div class="container header-padder-top" style="padding-bottom: 70px">
            <center>
                <p class="header1 p-color-white">Price Calculator</p>
            </center>
        </div>
        <div class="container div-shop-ship-tabs">
            <button class="btn btn-cal-shop-ship" onclick="openCal('shop&ship')">Shop & Ship</button>
            <button class="btn btn-cal-courier"  onclick="openCal('Courier')">Courier</button>
        </div>
    </section>

    <section>
        <div class="container div-courier-cal ">
            <div class="cal arrow_box" id="shop&ship">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
                    <form class="calc-form" id="shipping">
                        {{ csrf_field() }}
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs ul-margin" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#International" aria-controls="home" role="tab"
                                       data-toggle="tab">International</a>
                                </li>
                                <li role="presentation">
                                    <a href="#Domestic" aria-controls="profile" role="tab"
                                       data-toggle="tab">Domestic</a>
                                </li>
                            </ul>
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="International">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 no-padding" style="margin-top: 20px">
                                            <label class="header6 p-color-cement">Where do you want to send your
                                                package to?</label>
                                            <select class="form-control select2" name="country">
                                                <option value="">Select Country</option>
                                                @foreach($countries as $country)
                                                    <option
                                                        value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-5 col-sm-12 ">
                                            {{--<a href="#" class="tooltipkey" title="Receive your own Locker space in--}}
                                            {{--Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address--}}
                                            {{--given to you to shop from ANY Indian Online Store.">--}}
                                            {{--<i class="fa fa-question-circle-o"></i>--}}
                                            {{--</a>--}}

                                            <p class="header7 p-country-guide">
                                                Country Guide <span class="header7 p-color-red"
                                                                    style="margin-left: 20px">Offers(3)</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input class="radio-pricing header6 p-color-cement-dark" type="radio"
                                                       name="type" value="doc"
                                                       checked>Document
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input class="radio-pricing header6 p-color-cement-dark" type="radio"
                                                       name="type" value="nondoc"
                                                >Non-Document Package
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-12 control-label no-padding">What is the weight of your
                                            package (in kg)? <span style="color:red">*</span> </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-7 no-padding">
                                            <div class="div-text-box">
                                                <span id="aminus" class="btn-puls-minus dec-value">-</span>
                                                <input type="text" id="adnum" class="txt-weight" value="1"
                                                       name="weight">
                                                <span id="aplus" class="btn-puls-minus inc-value">+</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 no-padding" id="weight-option-padding">
                                            <div class="radio">
                                                <label class="checkbox-inline header7 p-color-cement">
                                                    <input class="radio-pricing" type="radio" name="unit" value="kg"
                                                           checked>kg
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="checkbox-inline header7 p-color-cement">
                                                    <input class="radio-pricing" type="radio" name="unit" value="lbs">lb
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-8 col-sm-12 div-dimension">
                                            <div class="div-volumetric-weight">
                                                <center>
                                                    <p class="header7">Volumetric Weight (Optional)</p>
                                                </center>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="radio">
                                                        <label class="checkbox-inline header6 p-color-cement">
                                                            <input class="radio-pricing" type="radio" name="scale"
                                                                   value="cm" checked>cm
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label class="checkbox-inline header6 p-color-cement">
                                                            <input class="radio-pricing" type="radio" name="scale"
                                                                   value="in">in
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4 div-price-cal-length-padding">
                                                    <h6 class="header7 p-color-cement">Length (in cm)</h6>
                                                    <div class="col-sm-12 no-padding div-price-cal-length">
                                                        <span id="aminus"
                                                              class="btn btn-puls-minus dec-value no-padding">-</span>
                                                        <input type="text" class="txt-length" name="length"
                                                               value="0">
                                                        <span id="aplus"
                                                              class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 div-price-cal-length-padding">
                                                    <h6 class="header7 p-color-cement">Width (in cm)</h6>
                                                    <div class="col-sm-12 no-padding div-price-cal-length">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                        <input type="text" class="txt-length" name="width" value="0">
                                                        <span id="aplus"
                                                              class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4  col-xs-4 div-price-cal-length-padding">
                                                    <h6 class="header7 p-color-cement">Height (in cm)</h6>
                                                    <div class="col-sm-12 no-padding div-price-cal-length">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                        <input type="text" class="txt-length" value="0">
                                                        <span id="aplus"
                                                              class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px; padding-bottom: 20px;">
                                        <button type="submit" class="btn btn-pricing-estimate header6">ESTIMATE</button>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Domestic">
                                    <div class="row" style="margin-top: 20px">
                                        <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                            <label class="header7 p-color-cement">Pickup Pincode</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6  col-xs-6 no-padding">
                                            <label class="header7 p-color-cement">Destination Pincode</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                            <input class="header6 p-color-cement txt-pincode" type="text"
                                                   name="pincode-from"
                                                   placeholder=" enter pincode">
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                            <input class="header6 p-color-cement txt-pincode" type="text"
                                                   name="pincode-from"
                                                   placeholder=" enter pincode">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input class="radio-pricing header6 p-color-cement-dark" type="radio"
                                                       name="type" value="doc"
                                                >Document
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input class="radio-pricing header6 p-color-cement-dark" type="radio"
                                                       name="type" value="nondoc"
                                                >Non-Document Package
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-12 control-label no-padding">What is the Weight of your
                                            package(in kg)? <span style="color:red">*</span> </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-7 no-padding">
                                            <div class="div-text-box">
                                                <span id="aminus" class="btn-puls-minus dec-value">-</span>
                                                <input type="text" id="adnum" class="txt-weight" value="1"
                                                       name="weight">
                                                <span id="aplus" class="btn-puls-minus inc-value">+</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 no-padding">
                                            <div class="radio">
                                                <label class="checkbox-inline header7 p-color-cement">
                                                    <input class="radio-pricing" type="radio" name="unit" value="kg"
                                                    >kg
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="checkbox-inline header7 p-color-cement">
                                                    <input class="radio-pricing" type="radio" name="unit" value="lbs">lb
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-8 col-sm-12 div-dimension">
                                            <div class="div-volumetric-weight">
                                                <center>
                                                    <p class="header7">Volumetric Weight(Optional)</p>
                                                </center>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="radio">
                                                        <label class="checkbox-inline header6 p-color-cement">
                                                            <input class="radio-pricing" type="radio" name="scale"
                                                                   value="cm">cm
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label class="checkbox-inline header6 p-color-cement">
                                                            <input class="radio-pricing" type="radio" name="scale"
                                                                   value="in">in
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4 div-price-cal-length-padding">
                                                    <h6 class="header7 p-color-cement">Length (in cm)</h6>
                                                    <div class="col-sm-12 no-padding div-price-cal-length">
                                                        <span id="aminus"
                                                              class="btn btn-puls-minus dec-value no-padding">-</span>
                                                        <input type="text" class="txt-length" name="length"
                                                               value="0">
                                                        <span id="aplus"
                                                              class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 div-price-cal-length-padding">
                                                    <h6 class="header7 p-color-cement">Width (in cm)</h6>
                                                    <div class="col-sm-12 no-padding div-price-cal-length">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                        <input type="text" class="txt-length" name="width" value="0">
                                                        <span id="aplus"
                                                              class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4  col-xs-4 div-price-cal-length-padding">
                                                    <h6 class="header7 p-color-cement">Height (in cm)</h6>
                                                    <div class="col-sm-12 no-padding div-price-cal-length">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                        <input type="text" class="txt-length" value="0">
                                                        <span id="aplus"
                                                              class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px; padding-bottom: 20px;">
                                        <button type="submit" class="btn btn-pricing-estimate header6">ESTIMATE</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                <div class="col-md-5 col-sm-12" id="Price-cal">
                    <div class="div-volumetric-weight-img" >
                        <p class="header6" style="color:#507dbc; margin-top: 30px">
                            <a href="#" class="tooltipkey" title="Receive your own Locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store.">
                                <i class="fa fa-question-circle-o"></i>
                            </a>
                            How to calculate volumetric weight</p>
                        <p class="header7 p-color-cement" >Centimeter/Inch Conversion</p>
                        <h4 class="header6 p-color-cement-dark" >1 in =2.54 cm (1 cm=03937
                            in) </h4>
                        <p class="header7 p-color-cement" >Kilogram/Pound Conversion</p>
                        <h4 class="header6 p-color-cement-dark" >1 in =2.54 cm (1 cm=03937
                            in) </h4>

                        <h5 class="header7" style="color:#507dbc; margin-top: 30px">Courier Sample:</h5>
                        <img style="width: 65%;" src="{{asset('img/images/parcelsample.png')}}" alt="">
                    </div>

                </div>
                <div class="col-md-12 col-sm-12 no-padding" style="margin-top: 50px; display: none;"
                     id="price-cal">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-6">
                                <h6 class="header6 p-color-cement"><span style="color:red">*</span> Estimated Cost <a
                                        href="#" class="tooltipkey" title="Receive your own Locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store.">
                                        <i class="fa fa-question-circle-o"></i></a></h6>
                                {{--<h1 class="header1" style="color: #507dbc;">₹699</h1>--}}
                                {{--<h5 class="header6 p-color-cement" ><strik>₹1000</strik></h5>--}}
                                {{--<div class="result table-responsive">--}}
                                {{--<table class="table " id="prices">--}}
                                {{--</table>--}}
                                {{--</div>--}}
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12 no-padding ">
                                        <h1 class="header1" id="final-price">₹</h1>

                                    </div>
                                    <div class="col-sm-8 col-xs-12 text-final-price-margin">
                                        <strike class="p-color-cement"><span class="header6 p-color-cement"
                                                                             id="actual-amount"></span></strike>
                                        <span class="header6 p-color-red" id="discount"></span> <span
                                            class="header7 p-color-red">% OFF</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive pull-right" src="{{asset('img/images/m-benefits.png')}}"
                                     alt="">
                            </div>

                        </div>
                        <div class="div-estimat-amount-devider"></div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12" style="margin-top: 20px;">
                                <p class="header6 " style="color: #929ca5;"><span style="color: red">*</span>For
                                    electronics
                                    items,
                                    INR 500 will be charged additionally.</p>
                                <p class="header6 " style="color: #929ca5;"><span style="color: red">*</span>For Customs Clearance,
                                    INR 200
                                    will
                                    be charged additionally.</p>

                                <p class="header6" style="color: #929ca5;">Costs may vary based on the volumetric
                                    weight. <br>The
                                    courier will be chosen according to your destination
                                    & the weight of the shipment. We're teamed up with the most trusted couriers such as DHL & DTDC.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12" id="price-cal-btn-margin">
                                <a class="btn btn-price-cal-v-address" href="https://myaccount.shoppre.com/register">Get
                                    a
                                    Virtual Address</a>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12" id="price-cal-btn-margin">
                                <a class="btn btn-price-cal-sounds-good" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12" id="price-cal-btn-margin">
                        <div class="div-country-guide-information">
                            <h6 class="header6 p-color-cement">Tools</h6>
                            <ul>
                                <li><a href="https://www.xe.com/currencyconverter/" target="_blank">Currency Conversion</a></li>
                                <li><a href="{{route('cguide.index')}}">Country Guide</a></li>
                                <li><a href="{{route('cguide.index')}}">Duties & Taxes</a></li>
                                <li><a href="{{route('cguide.index')}}">Restricted & prohibited Items</a></li>
                                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform">Seller Membership Plans</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 no-padding" style="margin-top: 30px; font-weight: 900">
                        <center>
                            <h1 class="header2 p-color-cement-dark">Membership Plans</h1>
                            <p class="header6 p-color-cement">Our plans are tailor-made to help different categories of
                                <br> our customers shop frequently from India & save up on shipping costs only the way.
                            </p>
                            {{--<button class="btn btn-membership-plans-monthly" type="button">Monthly</button>--}}
                            {{--<button class="btn btn-membership-plans-yearly" type="button">Yearly</button>--}}
                        </center>

                        <div class="wrapper">
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                <li>
                                    <a class="btn btn-membership-plans-monthly active" href="#Monthly">Monthly</a>
                                </li>
                                <li>
                                    <a class="btn btn-membership-plans-yearly" href="#Yearly">Yearly</a>
                                </li>
                            </ul>

                            <section id="first-tab-group" class="tabgroup price-cal-desktop">
                                <div class="col-md-12 col-sm-12 no-padding" id="Monthly">
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans"
                                         style="background-color: #fafafb;">
                                        <center>
                                            <h4 class="header2 p-color-cement membership-feature-text-margin">
                                                Features
                                            </h4>
                                            <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                                <h6 class="header6 ">
                                                    Service Tax
                                                </h6>
                                            </div>
                                            <div class="no-padding">
                                                <h6 class="header6">
                                                    Package  Consolidation
                                                </h6>
                                            </div>
                                            <div class="no-padding" style="background-color: #ffffff;">
                                                <h6 class="header6">
                                                    Package Repackaging
                                                </h6>
                                            </div>
                                            <div class="no-padding">
                                                <h6 class="header6 " >
                                                    Photo Update</h6>
                                            </div>
                                            <div class="no-padding" id="view-more-plans">
                                               <div class="no-padding">
                                                   <h6 class="header6">
                                                       Package Storage
                                                   </h6>
                                               </div>
                                                <div class="no-padding">
                                                    <h6 class="header6">
                                                        Document scan
                                                    </h6>
                                                </div>
                                                 <div class="no-padding">
                                                     <h6 class="header6">
                                                         Receive mail
                                                     </h6>
                                                 </div>

                                                  <div class="no-padding">
                                                      <h6 class="header6">
                                                          Shoppre Shipping Discount
                                                      </h6>
                                                  </div>
                                                  <div class="no-padding">
                                                      <h6 class="header6">
                                                          Additional Addresses
                                                      </h6>
                                                  </div>
                                                   <div class="no-padding">
                                                       <h6 class="header6">
                                                           Special Clearance Charges
                                                       </h6>
                                                   </div>
                                                   <div class="no-padding">
                                                       <h6 class="header6">
                                                           Real Time Shipment Tracking
                                                       </h6>
                                                   </div>

                                                   <div class="">
                                                       <h6 class="header6">
                                                           Use Bangalore as a HUB for your business to manage inventory
                                                       </h6>
                                                   </div>
                                                   <div class="no-padding">
                                                       <h6 class="header6">
                                                           Pick up Charges
                                                       </h6>
                                                   </div>
                                                    <div class="no-padding">
                                                        <h6 class="header6">
                                                            GST (Service Tax)
                                                        </h6>
                                                    </div>
                                                   <div class="no-padding">
                                                       <h6 class="header6">
                                                           Package Return Service
                                                       </h6>
                                                   </div>
                                                   <div class="no-padding">
                                                       <h6 class="header6">
                                                           Personal Shopper Service
                                                       </h6>
                                                   </div>
                                            </div>
                                            <div class="no-padding view-all-features" >
                                                <h6 class="header6 ">
                                                    View All Features
                                                </h6>
                                            </div>

                                        </center>

                                    </div>
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                        <center>
                                            <img  src="{{asset('img/svg/indivdual.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                Free</h1>
                                            <h6 class="header6 text-forever">Lifelong</h6>
                                            <div class="text-nochange-margin">
                                                <h5 class="header6  ">
                                                    No change</h5>
                                            </div>

                                            <div class="no-padding div-package-charges">
                                                <h5 class="header6 ">
                                                    100 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6 ">
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" >
                                                <h5 class="header6 " >
                                                    50 Rs. Per Photo</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features
                                                </h7>
                                            </div>

                                            <div class=" btn-plans-individual-wholeseller" >
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Get a Free Address</a>
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                        <center>
                                            <img src="{{asset('img/svg/seller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹500/-</h1>
                                            <h6 class="header6 text-forever ">PER MONTH</h6>
                                            <div class="text-nochange-margin">
                                                <h5 class="header6">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges">
                                                <h5 class="header6 ">
                                                    50 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6 " >
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1">
                                                <h5 class="header6 ">
                                                    10 Rs. Per Photo
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features
                                                </h7>
                                            </div>

                                            {{--<a href="" class="btn-plans-seller">Start Trial</a>--}}
                                            {{--<button class="btn btn-plans-seller">Start Trial</button>--}}
                                            <button class="btn btn-plans-seller">Request Callback</button>
                                        </center>

                                    </div>
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                        <center>
                                            <img src="{{asset('img/svg/wholseller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹1599/-</h1>
                                            <h6 class="header6 text-forever">PER MONTH</h6>
                                            <div class="text-nochange-margin">
                                                <h5 class="header6 ">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges">
                                                <h5 class="header6">
                                                    10 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6"  >
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding div-package-charges1">
                                                <h5 class="header6">
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features</h7>
                                            </div>
                                            <div class=" btn-plans-individual-wholeseller">
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Request Callback</a>
                                            </div>
                                            {{--<a href="" class="btn-plans-individual-wholeseller" style="padding: 10px 30px">Start Trial</a>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Start Trial</button>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Request Callback</button>--}}
                                        </center>

                                    </div>

                                </div>
                                <div class="no-padding" id="Yearly">
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans"
                                         style="background-color: #fafafb;">
                                        <center>
                                            <h4 class="header2 p-color-cement membership-feature-text-margin">
                                                Features
                                            </h4>
                                            <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                                <h6 class="header6 ">
                                                    Service Tax
                                                </h6>
                                            </div>
                                            <div class="no-padding">
                                                <h6 class="header6">
                                                    Package  Consolidation
                                                </h6>
                                            </div>
                                            <div class="no-padding" style="background-color: #ffffff;">
                                                <h6 class="header6">
                                                    Package Repackaging
                                                </h6>
                                            </div>
                                            <div class="no-padding">
                                                <h6 class="header6 " >
                                                    Package Photo Service</h6>
                                            </div>
                                            <div class="no-padding view-all-features" >
                                                <h6 class="header6 ">
                                                    View All Features</h6>
                                            </div>

                                        </center>

                                    </div>
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                        <center>
                                            <img  src="{{asset('img/svg/indivdual.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                Free</h1>
                                            <h6 class="header6 text-forever">Lifelong</h6>
                                            <div class="text-nochange-margin">
                                                <h5 class="header6  ">
                                                    No change</h5>
                                            </div>

                                            <div class="no-padding div-package-charges">
                                                <h5 class="header6 ">
                                                    100 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6 ">
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" >
                                                <h5 class="header6 " >
                                                    50 Rs. Per Photo</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features
                                                </h7>
                                            </div>

                                            <div class=" btn-plans-individual-wholeseller" >
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Get a Free Address</a>
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                        <center>
                                            <img src="{{asset('img/svg/seller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹450/-</h1>
                                            <h6 class="header6 text-forever ">PER MONTH</h6>
                                            <div class="text-nochange-margin">
                                                <h5 class="header6">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges">
                                                <h5 class="header6 ">
                                                    50 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6 " >
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1">
                                                <h5 class="header6 ">
                                                    10 Rs. Per Photo
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features
                                                </h7>
                                            </div>

                                            {{--<a href="" class="btn-plans-seller">Start Trial</a>--}}
                                            {{--<button class="btn btn-plans-seller">Start Trial</button>--}}
                                            <button class="btn btn-plans-seller">Request Callback</button>
                                        </center>

                                    </div>
                                    <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                        <center>
                                            <img src="{{asset('img/svg/wholseller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹1499/-</h1>
                                            <h6 class="header6 text-forever">PER MONTH</h6>
                                            <div class="text-nochange-margin">
                                                <h5 class="header6 ">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges">
                                                <h5 class="header6">
                                                    10 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6"  >
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding div-package-charges1">
                                                <h5 class="header6">
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features</h7>
                                            </div>
                                            <div class=" btn-plans-individual-wholeseller">
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Request Callback</a>
                                            </div>
                                            {{--<a href="" class="btn-plans-individual-wholeseller" style="padding: 10px 30px">Start Trial</a>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Start Trial</button>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Request Callback</button>--}}
                                        </center>

                                    </div>
                                </div>
                            </section>
                            <section id="first-tab-group" class="tabgroup price-cal-mobile">
                                <div class="col-md-12 col-sm-12 no-padding" id="Monthly">
                                    <div class="col-xs-5 no-padding div-monthly-plans div-features-contents"
                                         style="background-color: #fafafb;">
                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                        <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                            <h6 class="header6 ">
                                                Service Tax
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6">
                                                Package  Consolidation
                                            </h6>
                                        </div>
                                        <div class="no-padding" style="background-color: #ffffff;">
                                            <h6 class="header6">
                                                Package Repackaging
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6 " >
                                                Package Photo Service</h6>
                                        </div>
                                        <div class="no-padding view-all-features" >
                                            <h6 class="header6 ">
                                                View All Features</h6>
                                        </div>

                                    </div>
                                    <div class="col-xs-7 no-padding div-monthly-plans div-plan-box">
                                        <center>
                                            <img  src="{{asset('img/svg/indivdual.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                Free</h1>
                                            <h6 class="header6 text-forever">Lifelong</h6>
                                            <div class="text-nochange-margin" style="padding:5px 5px">
                                                <h5 class="header6  ">
                                                    No change</h5>
                                            </div>

                                            <div class="no-padding div-package-charges" style="padding:11px 12px">
                                                <h5 class="header6 ">
                                                    100 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding" style="padding:5px 1px">
                                                <h5 class="header6 ">
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" style="padding-top: 15px; padding-bottom: 12px;">
                                                <h5 class="header6 " >
                                                    50 Rs. Per Photo</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text" >
                                                    View Features
                                                </h7>
                                            </div>

                                            <div class=" btn-plans-individual-wholeseller" >
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Get a Free Address</a>
                                            </div>

                                            {{--<button class="btn-plans-individual-wholeseller"  href="">Sign Up</button>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Request Callback</button>--}}
                                        </center>

                                    </div>
                                    <div class="col-xs-5 no-padding div-monthly-plans div-features-contents"
                                         style="background-color: #fafafb;">

                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                        <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                            <h6 class="header6 ">
                                                Service Tax
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6">
                                                Package  Consolidation
                                            </h6>
                                        </div>
                                        <div class="no-padding" style="background-color: #ffffff;">
                                            <h6 class="header6">
                                                Package Repackaging
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6 " >
                                                Package Photo Service</h6>
                                        </div>
                                        <div class="no-padding view-all-features" >
                                            <h6 class="header6 ">
                                                View All Features</h6>
                                        </div>


                                    </div>
                                    <div class="col-xs-7 no-padding div-monthly-plans div-plan-box">
                                        <center>
                                            <img src="{{asset('img/svg/seller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹500/-</h1>
                                            <h6 class="header6 text-forever ">PER MONTH</h6>
                                            <div class="text-nochange-margin" style="padding:5px 5px">
                                                <h5 class="header6">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges" style="padding:11px 12px">
                                                <h5 class="header6 ">
                                                    50 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6 " style="padding:5px 1px" >
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" style="padding: 14px 12px;">
                                                <h5 class="header6 ">
                                                    10 Rs. Per Photo
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features
                                                </h7>
                                            </div>

                                            {{--<a href="" class="btn-plans-seller">Start Trial</a>--}}
                                            {{--<button class="btn btn-plans-seller">Start Trial</button>--}}
                                            <button class="btn btn-plans-seller">Request Callback</button>
                                        </center>

                                    </div>
                                    <div class="col-xs-5 no-padding div-monthly-plans div-features-contents"
                                         style="background-color: #fafafb;">

                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                        <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                            <h6 class="header6 ">
                                                Service Tax
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6">
                                                Package  Consolidation
                                            </h6>
                                        </div>
                                        <div class="no-padding" style="background-color: #ffffff;">
                                            <h6 class="header6">
                                                Package Repackaging
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6 " >
                                                Package Photo Service</h6>
                                        </div>
                                        <div class="no-padding view-all-features" >
                                            <h6 class="header6 ">
                                                View All Features</h6>
                                        </div>


                                    </div>
                                    <div class="col-xs-7 no-padding div-monthly-plans div-plan-box">
                                        <center>
                                            <img src="{{asset('img/svg/wholseller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹1599/-</h1>
                                            <h6 class="header6 text-forever">PER MONTH</h6>
                                            <div class="text-nochange-margin" style="padding:5px 5px">
                                                <h5 class="header6 ">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges" style="padding:11px 12px">
                                                <h5 class="header6">
                                                    10 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding" style="padding:5px 1px">
                                                <h5 class="header6"  >
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" style="padding: 14px 12px;">
                                                <h5 class="header6">
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features</h7>
                                            </div>
                                            <div class=" btn-plans-individual-wholeseller">
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Request Callback</a>
                                            </div>
                                            {{--<a href="" class="btn-plans-individual-wholeseller" style="padding: 10px 30px">Start Trial</a>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Start Trial</button>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Request Callback</button>--}}
                                        </center>

                                    </div>

                                </div>
                                <div id="Yearly">
                                    <div class="col-xs-5 no-padding div-monthly-plans div-features-contents"
                                         style="background-color: #fafafb;">
                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                        <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                            <h6 class="header6 ">
                                                Service Tax
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6">
                                                Package  Consolidation
                                            </h6>
                                        </div>
                                        <div class="no-padding" style="background-color: #ffffff;">
                                            <h6 class="header6">
                                                Package Repackaging
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6 " >
                                                Package Photo Service</h6>
                                        </div>
                                        <div class="no-padding view-all-features" >
                                            <h6 class="header6 ">
                                                View All Features</h6>
                                        </div>

                                    </div>
                                    <div class="col-xs-7 no-padding div-monthly-plans div-plan-box">
                                        <center>
                                            <img  src="{{asset('img/svg/indivdual.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                Free</h1>
                                            <h6 class="header6 text-forever">Lifelong</h6>
                                            <div class="text-nochange-margin" style="padding:5px 5px">
                                                <h5 class="header6  ">
                                                    No change</h5>
                                            </div>

                                            <div class="no-padding div-package-charges" style="padding:11px 12px">
                                                <h5 class="header6 ">
                                                    100 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding" style="padding:5px 1px">
                                                <h5 class="header6 ">
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" style="padding-top: 15px; padding-bottom: 12px;">
                                                <h5 class="header6 " >
                                                    50 Rs. Per Photo</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text" >
                                                    View Features
                                                </h7>
                                            </div>

                                            <div class=" btn-plans-individual-wholeseller" >
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Get a Free Address</a>
                                            </div>

                                            {{--<button class="btn-plans-individual-wholeseller"  href="">Sign Up</button>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Request Callback</button>--}}
                                        </center>

                                    </div>
                                    <div class="col-xs-5 no-padding div-monthly-plans div-features-contents"
                                         style="background-color: #fafafb;">

                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                        <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                            <h6 class="header6 ">
                                                Service Tax
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6">
                                                Package  Consolidation
                                            </h6>
                                        </div>
                                        <div class="no-padding" style="background-color: #ffffff;">
                                            <h6 class="header6">
                                                Package Repackaging
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6 " >
                                                Package Photo Service</h6>
                                        </div>
                                        <div class="no-padding view-all-features" >
                                            <h6 class="header6 ">
                                                View All Features</h6>
                                        </div>


                                    </div>
                                    <div class="col-xs-7 no-padding div-monthly-plans div-plan-box">
                                        <center>
                                            <img src="{{asset('img/svg/seller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹450/-</h1>
                                            <h6 class="header6 text-forever ">PER MONTH</h6>
                                            <div class="text-nochange-margin" style="padding:5px 5px">
                                                <h5 class="header6">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges" style="padding:11px 12px">
                                                <h5 class="header6 ">
                                                    50 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding">
                                                <h5 class="header6 " style="padding:5px 1px" >
                                                    Free</h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" style="padding: 14px 12px;">
                                                <h5 class="header6 ">
                                                    10 Rs. Per Photo
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features
                                                </h7>
                                            </div>

                                            {{--<a href="" class="btn-plans-seller">Start Trial</a>--}}
                                            {{--<button class="btn btn-plans-seller">Start Trial</button>--}}
                                            <button class="btn btn-plans-seller">Request Callback</button>
                                        </center>

                                    </div>
                                    <div class="col-xs-5 no-padding div-monthly-plans div-features-contents"
                                         style="background-color: #fafafb;">

                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                        <div class="p-service-tax no-padding" style="background-color: #ffffff">
                                            <h6 class="header6 ">
                                                Service Tax
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6">
                                                Package  Consolidation
                                            </h6>
                                        </div>
                                        <div class="no-padding" style="background-color: #ffffff;">
                                            <h6 class="header6">
                                                Package Repackaging
                                            </h6>
                                        </div>
                                        <div class="no-padding">
                                            <h6 class="header6 " >
                                                Package Photo Service</h6>
                                        </div>
                                        <div class="no-padding view-all-features" >
                                            <h6 class="header6 ">
                                                View All Features</h6>
                                        </div>


                                    </div>
                                    <div class="col-xs-7 no-padding div-monthly-plans div-plan-box">
                                        <center>
                                            <img src="{{asset('img/svg/wholseller.svg')}}" alt="">
                                            <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                            <h1 class="header1 p-mem-plans-box membership-text-margin">
                                                ₹1499/-</h1>
                                            <h6 class="header6 text-forever">PER MONTH</h6>
                                            <div class="text-nochange-margin" style="padding:5px 5px">
                                                <h5 class="header6 ">No
                                                    change</h5>
                                            </div>
                                            <div class="no-padding div-package-charges" style="padding:11px 12px">
                                                <h5 class="header6">
                                                    10 Rs. per package</h5>
                                            </div>
                                            <div class="no-padding" style="padding:5px 1px">
                                                <h5 class="header6"  >
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding div-package-charges1" style="padding: 14px 12px;">
                                                <h5 class="header6">
                                                    Free
                                                </h5>
                                            </div>
                                            <div class="no-padding">
                                                <h7 class="header6 view-feature-text">
                                                    View Features</h7>
                                            </div>
                                            <div class=" btn-plans-individual-wholeseller">
                                                <a href="https://myaccount.shoppre.com/register"
                                                   style="color: #507dbc;">Request Callback</a>
                                            </div>
                                            {{--<a href="" class="btn-plans-individual-wholeseller" style="padding: 10px 30px">Start Trial</a>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Start Trial</button>--}}
                                            {{--<button class="btn-plans-individual-wholeseller">Request Callback</button>--}}
                                        </center>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-top: 30px">
                            <center>
                                <p class="header6 p-color-cement">Indian Seller, looking to widen your reach? Check out our <a href="#">Indian Seller Membership Plans </a></p>
                            </center>

                        </div>
                    </div>
                </div>
                <div id="calc_load"></div>
            </div>
            {{--<div class="cal" id="Courier" style="display: none;">--}}
            {{--<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 arrow_box  ">--}}
            {{--<span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>--}}
            {{--<form class="calc-form" id="shipping">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="tab" role="tabpanel">--}}
            {{--<ul class="nav nav-tabs ul-margin" role="tablist">--}}
            {{--<li role="presentation" class="active">--}}
            {{--<a href="#International" aria-controls="home" role="tab"--}}
            {{--data-toggle="tab">International</a>--}}
            {{--</li>--}}
            {{--<li role="presentation">--}}
            {{--<a href="#Domestic" aria-controls="profile" role="tab" data-toggle="tab">Domestic</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<div class="tab-content tabs">--}}
            {{--<div role="tabpanel" class="tab-pane fade in active" id="International">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-9 col-sm-12 no-padding">--}}
            {{--<label class="header6 p-color-cement">Where do you want to send your--}}
            {{--package?</label>--}}
            {{--<select class="form-control select2" name="country">--}}
            {{--<option value="">Select Country</option>--}}
            {{--@foreach($countries as $country)--}}
            {{--<option--}}
            {{--value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>--}}
            {{--@endforeach--}}
            {{--</select>--}}

            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-12 ">--}}
            {{--<a href="#" class="tooltipkey" title="Receive your own Locker space in--}}
            {{--Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address--}}
            {{--given to you to shop from ANY Indian Online Store.">--}}
            {{--<i class="fa fa-question-circle-o"></i>--}}
            {{--</a>--}}
            {{--<p class="header7 p-country-guide">--}}
            {{--Country Guide</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="type" value="nondoc"--}}
            {{--checked>Non Document--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="type" value="doc">Document--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<label class="col-sm-12 control-label no-padding">What is the Weight of your--}}
            {{--package(in kg)? <span style="color:red">*</span> </label>--}}
            {{--<div class="col-md-7 col-sm-8 no-padding">--}}
            {{--<div class="div-text-box">--}}
            {{--<span id="aplus" class="btn-puls-minus inc-value">+</span>--}}
            {{--<input type="text" id="adnum" class="txt-weight" value="1"--}}
            {{--name="weight" placeholder=" Enter Weight" disabled>--}}
            {{--<span id="aminus" class="btn-puls-minus dec-value">-</span>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4 no-padding">--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline header7 p-color-cement">--}}
            {{--<input class="radio-pricing" type="radio" name="unit" value="kg"--}}
            {{--checked>kg--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline header7 p-color-cement">--}}
            {{--<input class="radio-pricing" type="radio" name="unit" value="lbs">lb--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class=" col-md-12 col-sm-12 div-dimension">--}}
            {{--<div class="div-volumetric-weight">--}}
            {{--<center>--}}
            {{--<p>Volumetric Weight(Optional)</p>--}}
            {{--</center>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="scale"--}}
            {{--value="cm" checked>cm--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="scale"--}}
            {{--value="in">in--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-3 div-price-cal-length-padding" >--}}
            {{--<strong>Length</strong>--}}
            {{--<div class="col-sm-12 no-padding div-price-cal-length" >--}}
            {{--<span id="aminus"--}}
            {{--class="btn btn-puls-minus dec-value no-padding">-</span>--}}
            {{--<input type="text" class="txt-length" name="length"--}}
            {{--value="0">--}}
            {{--<span id="aplus"--}}
            {{--class="btn btn-puls-minus inc-value no-padding">+</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 div-price-cal-length-padding" >--}}
            {{--<strong>Width</strong>--}}
            {{--<div class="col-sm-12 no-padding div-price-cal-length">--}}
            {{--<span id="aminus"--}}
            {{--class="btn btn-puls-minus dec-value no-padding">-</span>--}}
            {{--<input type="text" class="txt-length" name="width" value="0">--}}
            {{--<span id="aplus"--}}
            {{--class="btn btn-puls-minus inc-value no-padding">+</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 div-price-cal-length-padding" >--}}
            {{--<strong>Height</strong>--}}
            {{--<div class="col-sm-12 no-padding div-price-cal-length">--}}
            {{--<span id="aminus"--}}
            {{--class="btn btn-puls-minus dec-value no-padding">-</span>--}}
            {{--<input type="text" class="txt-length" value="0">--}}
            {{--<span id="aplus"--}}
            {{--class="btn btn-puls-minus inc-value no-padding">+</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row" style="margin-top: 20px">--}}
            {{--<button type="submit" class="btn btn-pricing-estimate header6">ESTIMATE</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div role="tabpanel" class="tab-pane fade" id="Domestic">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-6 col-sm-6 no-padding">--}}
            {{--<label class="header6 p-color-cement">Pickup Pincode</label>--}}
            {{--<input class="header6 p-color-cement" type="text" name="pincode-from"--}}
            {{--placeholder=" enter pincode" style="height: 35px;">--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-6 no-padding">--}}
            {{--<label class="header6 p-color-cement">Destination Pincode</label>--}}
            {{--<input class="header6 p-color-cement" type="text" name="pincode-from"--}}
            {{--placeholder=" enter pincode" style="height: 35px;">--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="type" value="doc">Document--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="type" value="nondoc"--}}
            {{-->Non Document--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<label class="col-sm-12 control-label no-padding">What is the Weight of your--}}
            {{--package(in kg)? <span style="color:red">*</span> </label>--}}
            {{--<div class="col-md-7 col-sm-8 no-padding">--}}
            {{--<div class="div-text-box">--}}
            {{--<span id="aplus" class="btn btn-puls-minus inc-value">+</span>--}}
            {{--<input type="text" id="adnum" class="txt-weight" value="1"--}}
            {{--name="weight" placeholder=" Enter Weight" disabled>--}}
            {{--<span id="aminus" class="btn btn-puls-minus dec-value">-</span>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4 no-padding">--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline header7 p-color-cement">--}}
            {{--<input class="radio-pricing" type="radio" name="unit" value="kg"--}}
            {{-->kg--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline header7 p-color-cement">--}}
            {{--<input class="radio-pricing" type="radio" name="unit" value="lbs">lb--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class=" col-md-12 col-sm-12 div-dimension">--}}
            {{--<div class="div-volumetric-weight">--}}
            {{--<center>--}}
            {{--<p>Volumetric Weight (Optional)</p>--}}
            {{--</center>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="scale"--}}
            {{--value="cm" >cm--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--<div class="radio">--}}
            {{--<label class="checkbox-inline">--}}
            {{--<input class="radio-pricing" type="radio" name="scale"--}}
            {{--value="in">in--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-3 div-price-cal-length-padding" >--}}
            {{--<strong>Length</strong>--}}
            {{--<div class="col-sm-12 no-padding div-price-cal-length" >--}}
            {{--<span id="aminus"--}}
            {{--class="btn btn-puls-minus dec-value no-padding">-</span>--}}
            {{--<input type="text" class="txt-length" name="length"--}}
            {{--value="0">--}}
            {{--<span id="aplus"--}}
            {{--class="btn btn-puls-minus inc-value no-padding">+</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 div-price-cal-length-padding" >--}}
            {{--<strong>Width</strong>--}}
            {{--<div class="col-sm-12 no-padding div-price-cal-length">--}}
            {{--<span id="aminus"--}}
            {{--class="btn btn-puls-minus dec-value no-padding">-</span>--}}
            {{--<input type="text" class="txt-length" name="width" value="0">--}}
            {{--<span id="aplus"--}}
            {{--class="btn btn-puls-minus inc-value no-padding">+</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 div-price-cal-length-padding" >--}}
            {{--<strong>Height</strong>--}}
            {{--<div class="col-sm-12 no-padding div-price-cal-length">--}}
            {{--<span id="aminus"--}}
            {{--class="btn btn-puls-minus dec-value no-padding">-</span>--}}
            {{--<input type="text" class="txt-length" value="0">--}}
            {{--<span id="aplus"--}}
            {{--class="btn btn-puls-minus inc-value no-padding">+</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row" style="margin-top: 20px">--}}
            {{--<button type="submit" class="btn btn-pricing-estimate header6">ESTIMATE</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--</form>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-12" style="padding-left: 11em;">--}}
            {{--<div class="div-volumetric-weight-img" style="padding-left: 3em; margin-top: 40px">--}}
            {{--<p class="header6" style="color:#507dbc; margin-top: 30px">--}}
            {{--<a href="#" class="tooltipkey" title="Receive your own Locker space in--}}
            {{--Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address--}}
            {{--given to you to shop from ANY Indian Online Store.">--}}
            {{--<i class="fa fa-question-circle-o"></i>--}}
            {{--</a>--}}
            {{--How to calculate volumetric weight</p>--}}
            {{--<p class="header7 p-color-cement" style="text-align: left">Centimeter/Inch Conversion</p>--}}
            {{--<h4 class="header6 p-color-cement-dark" style="text-align: left">1 in =2.54 cm (1 cm=03937 in) </h4>--}}
            {{--<p class="header7 p-color-cement" style="text-align: left">Kilogram/Pound Conversion</p>--}}
            {{--<h4 class="header6 p-color-cement-dark" style="text-align: left">1 in =2.54 cm (1 cm=03937 in) </h4>--}}

            {{--<h5 class="header7" style="color:#507dbc; margin-top: 30px">Courier Sample:</h5>--}}
            {{--<img style="width: 65%;" src="{{asset('img/images/parcelsample.png')}}" alt="">--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--<div class="col-md-12 col-sm-12" style="margin-top: 50px; padding-bottom: 10em; display: none"--}}
            {{--id="price-cal">--}}
            {{--<div class="col-md-8 col-sm-12">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-8 col-sm-4">--}}
            {{--<h6 class="header6 p-color-cement"><span style="color:red">*</span> Estimated Cost <a--}}
            {{--href="#" class="tooltipkey" title="Receive your own Locker space in--}}
            {{--Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address--}}
            {{--given to you to shop from ANY Indian Online Store.">--}}
            {{--<i class="fa fa-question-circle-o"></i></a></h6>--}}
            {{--<h1 class="header1" style="color: #507dbc;">₹699</h1>--}}
            {{--<h5 class="header6 p-color-cement" ><strik>₹1000</strik></h5>--}}
            {{--<div class="result table-responsive">--}}
            {{--<table class="table " style="border: none !important;" id="prices">--}}
            {{--</table>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-4">--}}
            {{--<img class="img-responsive pull-right" src="{{asset('img/images/m-benefits.png')}}" alt="">--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--<div class="div-estimat-amount-devider"></div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-12 col-md-12" style="margin-top: 20px;">--}}
            {{--<p class="header7 p-color-cement"><span style="color: red">*</span>For electoronics items,--}}
            {{--INR 500 will be charged additionally.</p>--}}
            {{--<p class="header7 p-color-cement"><span style="color: red">*</span>For Custom, INR 200 will--}}
            {{--be charged additionally.</p>--}}

            {{--<p class="header7 p-color-cement">Cost may vary based on actual volumetric weight. <br>Best--}}
            {{--carrier will be automatically chosen according to your country--}}
            {{--and weight of shippment. We use trusted courier like DHL and DTDC.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-6 col-sm-12">--}}
            {{--<a class="btn btn-price-cal-v-address" href="https://myaccount.shoppre.com/register">Get a--}}
            {{--Virtual Address</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-12">--}}
            {{--<a class="btn btn-price-cal-sounds-good" href="">Learn More</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-12">--}}
            {{--<div class="div-country-guide-information">--}}
            {{--<h6 class="header6 p-color-cement">Tools</h6>--}}
            {{--<ul>--}}
            {{--<li>Currency Conversion</li>--}}
            {{--<li>Country Guide</li>--}}
            {{--<li>Duties and Taxes</li>--}}
            {{--<li>Restricted & prohibited items</li>--}}
            {{--<li>Seller Membership</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div id="calc_load"></div>--}}
            {{--</div>--}}
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
                    $('#price-cal').hide();
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
                            $("#calc_load").hide();

                            if (res.error == "1") {
                                $('#calc_error').css('display', 'block');
                            } else {
                                var html = "";
                                var final_price = "";
                                var actual_amount = "";
                                var discount = "";
                                res.prices.map(function (price) {

                                    final_price = Math.round(((100 - price.discount) / 100) * price.amount);
                                    actual_amount = price.amount;
                                    discount = price.discount;
                                    html += ' <tr> ' +
                                        // '<td>' + price.partner_name+ '</td>' +
                                        // ' <td class="bg-white">' +
                                        // ' <span>' + price.time + '</span> Business Days' +
                                        // ' <span class="text-red">**</span>' +
                                        // ' </td>' +
                                        '<td>' +
                                        ' <h1 class="header1" style="color: #507dbc;"><i class="fa fa-rupee"></i> <span>' + ((100 - price.discount) / 100) * price.amount + '</span>' +
                                        ' </td>' +
                                        ' <td>' +
                                        '<h6 class="header6 p-color-cement"><span class="striked">' +
                                        '<i class="fa fa-rupee"></i>' +
                                        ' <span><strike>' + price.amount + '</strike></span>' +
                                        '</span></h6>' +
                                        ' </td>' +
                                        '<td class="discount"> <h6 class="header6" style="color: red">' +
                                        ' <span>' + price.discount + '</span>% OFF' +
                                        '</h6></td>' +
                                        ' </tr>';
                                    $('#final-price').text(final_price);
                                    $('#actual-amount').text(actual_amount);
                                    $('#discount').text(discount);
                                    // $('#prices').html(html);
                                    $('#price-cal').slideDown();
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
                        mobile: {required: "Enter your mobile number to contact."}
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

    <script>
        $(document).ready(function () {
            $('.inc-value').click(function () {
                var x = $(this).parent().find('input[type="text"]').val();
                x++;

                if (x > 100) {
                    $(this).parent().find('input[type="text"]').attr('disabled', true);
                }
                else {
                    $(this).parent().find('input[type="text"]').val(x);
                }
            });

            $('.dec-value').click(function () {
                $(this).parent().find('input[type="text"]').attr('disabled', false);
                var x = $(this).parent().find('input[type="text"]').val();
                x--;

                if (x < 0) {
                    $(this).parent().find('input[type="text"]').attr('disabled', true);
                }
                else {
                    $(this).parent().find('input[type="text"]').val(x);
                }
            });
        });
    </script>
    <script>
        $('.tabgroup > div').hide();
        $('.tabgroup > div:first-of-type').show();
        $('.tabs a').click(function (e) {
            e.preventDefault();
            var $this = $(this),
                tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
                others = $this.closest('li').siblings().children('a'),
                target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabgroup).children('div').hide();
            $(target).show();

        })

    </script>

    <script>
        function openCal(cityName) {
            var i;
            var x = document.getElementsByClassName("cal");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>

@endsection
