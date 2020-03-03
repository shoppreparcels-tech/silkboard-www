@extends('layout')

@section('title', 'International Courier Rates - Calculate Shipping Cost from India')
@section('description', 'Calculate your shipping costs from India to anywhere in the world. FREE international courier rates estimation for 220+ countries. Save up to 80% on shipping.')
@section('keywords', 'calculate your shipping costs, courier charges, shipping rates, shipping calculator, international package')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator"/>

    <meta property="og:title" content="Estimate your shipping costs from India | ShoppRe.com" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" />
    <meta property="og:image" content="https://gallery.mailchimp.com/8f7212d51aa9533c4788ccf05/images/bd6315a4-c0f4-48fd-8e67-8813e65d5f52.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="international shipping calculator india" />
    <meta property="og:description" content="Shipping Rate Calculator - Calculate Your Shipping Costs Now & Save Up to 80% on 3-6 Day Shipping from India to your Country." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .container-fluid{padding-left:10%;padding-right:10%}.btn span.glyphicon{opacity:0}.btn.active span.glyphicon{opacity:1}.l-pad{padding-left:10px}.div-b-price{border-radius:3px;border:1px solid silver;background-color:#fbfbfc}.div-p-price{box-shadow:0 2px 3px rgba(232,81,81,.1);border-radius:3px;border:1px solid #ffe19a;background-color:#fff7e5}.div-b-b{border-bottom:1px solid rgba(146,156,165,.2);padding-bottom:20px}.btn-terms{border-radius:30px;background-color:#929ca5;color:#fff}.div-c-guide{border-radius:3px;border:1px solid rgba(233,196,106,.2);background-color:#fff7e4}.btn-enable{display:none}.btn-disabled{display:inline-block}.btn-puls-pad{padding:6px 8px}.new-pricing .select-control{float:left;width:89px;height:40px;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:20px;background-color:#fafafb;border:none}.sidebar-nav-fixed{width:13%}.fixed-div{position:fixed}#volumetric-dis{display:none}.margin01{margin:6px}.margin02{margin:4px}.m-b-5{margin-bottom:5px}@media only screen and (max-width:600px){.l-pad{padding-left:0}.container-fluid{padding-left:1%;padding-right:1%}.btn-enable{display:inline-block}.btn-disabled{display:none}.btn-puls-pad{padding:6px 6px}}
    </style>

@endsection

@section('content')
    <section id="new-pricing">
        <div class="container">
            <br><br><br><br>
        </div>
        <div class="container how-to-calculate">
            <div class="modal fade" id="myModal-calculate" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 class="header4 p-color-cement modal-title">How To Calculate Volumetric
                                    Weight</h4>
                            </center>
                        </div>
                        <div class="modal-body">
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/vol_calc.png" style="width: 100%;"
                                 alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ratesModel" id="getRates">View all rates up to 10 Kg</button>--}}
            <div class="modal fade" id="ratesModel" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            {{--<h4 class="modal-title">Shipping Rates: <span id="shippingCountry"></span></h4>--}}
                        </div>
                        <div class="modal-body">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="modal-title f-w-8">Shipping Rates: <span id="shippingCountry"></span></h4>
                                </div>
                                <div class="panel-body">
                                    <h1 class="f-s-22 f-c-l-gray f-w-7">Non-Doc</h1>
                                    <table class="table table-bordered" id="shippingRates">
                                    </table>
                                    <h1 class="f-s-22 f-c-l-gray f-w-7" >Doc</h1>
                                    <table class="table table-bordered" id="shippingRatesDoc">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal fade" id="moreWeight" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            {{--<h4 class="modal-title">Shipping Rates: <span id="shippingCountry"></span></h4>--}}
                        </div>
                        <div class="modal-body">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="modal-title f-w-8"> For more than 70 Kg we will be providing Spot Rates which are extremely competitive.</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="" method="post" id="form-weight">
                                        <div class="col-md-12 col-xs-12 pad-r-10 pad-b-20"><br>
                                            <span class="f-s-16 f-c-blue f-w-9">Full Name:</span><input type="text" class="txt-f-w txt-shadow txt-pad" autocomplete="off" name="MName" placeholder="Enter your name" style="margin-bottom: 20px;" required>
                                            <span class="f-s-16 f-c-blue f-w-9">Phone Number:</span> <input  style="margin-bottom: 20px;" id="phone" name="MContactNumber" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="Enter a valid Phone/WhatsApp Number with Country Code" required>
                                            <span class="f-s-16 f-c-blue f-w-9">Email Id:</span><input  style="margin-bottom: 20px;" type="Email" name="Memail" class="txt-f-w txt-shadow txt-pad" autocomplete="off"   placeholder="Enter a valid Email ID" required>
                                            <span class="f-s-16 f-c-blue f-w-9">Which Country to Ship:</span>
                                            <select class="form-control select-control b-r" name="Mcountry"  style="margin-bottom: 20px;" required>
                                                <option value="">Select Country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->name}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="f-s-16 f-c-blue f-w-9">Weight in Kgs:</span><input type="number" class="txt-f-w txt-shadow txt-pad" autocomplete="off" name="Mweight" placeholder="Enter your Total Shipment Weight" required>
                                            <div class="col-xs-12 col-md-12 pad-t-20">
                                                <button type='submit' class="btn btn-s-r btn-b-r btn-l">Get a Free Quote</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container div-b-l-w no-pad" style="padding-bottom: 30px">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="col-md-12 no-pad">
                    <h1 class="f-c-d-gray f-s-24 f-w-9">Calculate Your International Shipping Cost</h1>
                    <p class="f-c-gray f-s-16 f-w-8">Cheapest international shipping rates from India to anywhere in the
                        world.</p>
                    <br>
                </div>
                <div class="col-md-12 col-xs-12 div-b-w-s pad-20">
                    <form class="calc-form" id="shipping">
                        {{ csrf_field() }}
                        <div class="col-md-12 col-xs-12 no-pad ">
                            <lable class="f-s-14 f-c-l-gray l-h-3">
                                Where do you want to send your package to?
                            </lable>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 no-pad">
                                <select class="form-control select-control b-r" name="country">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->iso}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="col-md-6 col-xs-12 l-pad pad-t-10">--}}
{{--                                <a class="f-s-14 f-c-blue cursor-type-p" data-toggle="modal" data-target="#ratesModel" id="getRates">View Rates up to 10 Kg</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <div class="col-md-6 col-xs-12 col-sm-6 no-pad">
                                <lable class="f-s-14 f-c-l-gray f-w-5 l-h-3">Package Type</lable>
                                <br>
                                <div class="btn-group col-md-12 col-xs-12 no-pad" data-toggle="buttons">
                                    <label class="btn btn-radio active col-md-6 col-xs-6">
                                        <input type="radio" name="package_type" id="option1" value="nondoc" checked="checked">
                                        Non-Document
                                    </label>

                                     <label class="btn btn-radio col-md-6 col-xs-6">
                                        <input type="radio" name="package_type" id="option2" value="doc" >
                                        Document
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 pad-l-10">
                                <lable class="f-s-14 f-c-l-gray f-w-5 l-h-3">Package Weight *</lable>
                                <br>
                                <div class="col-md-12 col-xs-12 no-pad">
                                    <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-radio active btn-h-40">
                                                <input type="radio" name="weight_unit" id="option2" value="kg" checked="checked"> KG
                                            </label>

                                            <label class="btn btn-radio btn-h-40">
                                                <input type="radio" name="weight_unit" id="option1" value="lb"> LB
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 div-b-g b-r no-pad">
                                         <button type="button" class="btn btn-b-w btn-h-40 pull-left dec-value btn-puls-pad col-md-2 col-xs-2" id="aminus">-</button>
                                        <div class="col-md-8 col-xs-8 no-pad">
                                            <input type="text" class="txt-f-w txt-a-c txt-n-b col-md-8 col-xs-8" value="0.5"name="weight">
                                        </div>
                                         <button type="button" class="btn btn-b-w btn-h-40 pull-right inc-value btn-puls-pad col-md-2 col-xs-2" id="aplus">+</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-12 col-sm-12 no-pad">
                            <p class="f-s-14 f-c-l-gray f-w-5 col-md-12 col-xs-12 no-pad l-h-3">
                            <div class="checkbox">
                                <label class="f-s-14 f-c-l-gray f-w-5"><input type="checkbox" id="volumetric_weight">Volumetric Weight (Optional)
                                    <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                             estimated to the maximum accuracy, based on our pricing policies and
                                                 is based upon whichever is greater for your package;
                                             either its volumetric weight or the actual weight">
                                        <i class="fa fa-question-circle-o"></i></a>
                                </label>
                            </div>
                            </p>
                            <div class="col-md-12 col-xs-12 no-pad" id="volumetric-dis">
                                <div class="col-md-5 col-xs-12 pad-r-10">
                                    <div class="col-md-4 col-xs-4 no-pad">
                                        <div class="btn-group" data-toggle="buttons">
                                            <p class="f-s-14 f-c-d-greay f-w-5 pull-left">Unit</p> <br>
                                            <label class="btn btn-radio active btn-h-40">
                                                <input type="radio" name="measurement_unit" id="option2" value="cm" checked="checked"> cm
                                            </label>

                                            <label class="btn btn-radio btn-h-40">
                                                <input type="radio" name="measurement_unit" id="option1" value="in"> in
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-8 no-pad pull-right">
                                        <h14 class="f-s-14 f-c-d-greay f-w-5 pull-left">Length</h14>
                                        <br>
                                        <div class="col-md-12 col-xs-12 div-b-g b-r no-pad">
                                            <button type="button" class="btn btn-b-w btn-h-40 pull-left dec-value btn-puls-pad col-md-2 col-xs-2" id="aminus">-</button>
                                            <div class="col-md-8 col-xs-8 no-pad">
                                                <input type="text" class="txt-f-w txt-a-c txt-n-b" value="0.5"
                                                       name="length">
                                            </div>
                                            <button type="button" class="btn btn-b-w btn-h-40 pull-right inc-value btn-puls-pad col-md-2 col-xs-2" id="aplus">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7 col-xs-12 pad-l-10">
                                    <div class="col-md-6 col-xs-6 pad-r-10 ">
                                        <h14 class="f-s-14 f-c-d-greay f-w-5 pull-left">Height</h14>
                                        <br>
                                        <div class="col-md-12 col-xs-12 div-b-g b-r no-pad">
                                            <button type="button" class="btn btn-b-w btn-h-40 pull-left dec-value btn-puls-pad col-md-2 col-xs-2" id="aminus">-</button>
                                            <div class="col-md-8 col-xs-8 no-pad">
                                                <input type="text" class="txt-f-w txt-a-c txt-n-b" value="0.5"
                                                       name="height">
                                            </div>
                                            <button type="button" class="btn btn-b-w btn-h-40 pull-right inc-value btn-puls-pad col-md-2 col-xs-2" id="aplus">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6 pad-l-10 ">
                                        <h14 class="f-s-14 f-c-d-greay f-w-5 pull-left">Width</h14>
                                        <br>
                                        <div class="col-md-12 col-xs-12 div-b-g b-r no-pad">
                                            <button type="button" class="btn btn-b-w btn-h-40 pull-left dec-value btn-puls-pad col-md-2 col-xs-2" id="aminus">-</button>
                                            <div class="col-md-8 col-xs-8 no-pad">
                                                <input type="text" class="txt-f-w txt-a-c txt-n-b" value="0.5"
                                                       name="width">
                                            </div>
                                            <button type="button" class="btn btn-b-w btn-h-40 pull-right inc-value btn-puls-pad col-md-2 col-xs-2" id="aplus">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            {{--<div class="col-md-6 col-xs-12 pad-r-10"><br>--}}
                                {{--<input id="phone" name="phone" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off">--}}
                            {{--</div>--}}
                            {{--<div class=" col-md-offset-4 col-md-4 col-xs-12 no-pad"><br>--}}
                            {{-- <center>--}}
                                 <button class="btn btn-b-r btn-s-r btn-xl btn-h-40" >Get An Estimate</button>
                            {{--  </center>--}}
                             {{--</div>--}}
                        </div>
                    </form>
                    <br>

                    <div class="col-md-12 col-xs-12 no-pad" id="addImge">
                        <br>
                        <br>
                        <center>
                            <a href="{{route('first-shipment')}}" target="_blank">
                                <img src="https://www.shoppre.com/img/images/200inr-shipping-offer-india-shoppre.png"
{{--                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/200inr-shipping-offer-india-shoppre.png"--}}
                                     alt="shipping offer from india" class="img-responsive">
                            </a>
                        </center>
                    </div>
                    <div class="col-md-12 col-xs-12 no-pad display-none"  id="pricing-panel">
                        <div class="col-md-6 col-xs-12 no-pad">
                            <br>
                            <div class="col-xs-12 col-md-12 div-b-price pad-10 ">
                                <div class="col-xs-12 col-md-12 no-pad">
                                    <h14 class=" f-s-14 f-c-d-greay pull-left"><span class="p-color-red">*</span> <b>Basic
                                        Estimate</b> &nbsp;
                                        <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                            <i class="fa fa-question-circle-o"></i></a>
                                        <hr class="pad01">
                                    </h14>
                                    <h14 class="f-c-d-greay pull-right">Deliver in 3-6 Days</h14>
                                </div>
                                <div class="col-xs-12 col-md-12 no-pad  margin03 ">
                                    {{-- <div class="col-md-6 col-xs-6 pull-left no-pad">--}}
                                         <span class="f-c-blue font-25">₹<span id="customer-price-tag"></span> &nbsp;&nbsp;</span>
                                    {{-- </div>--}}
                                     {{--<div class="col-md-3 col-xs-3 pull-left pad-t-20">--}}
                                        <span class="font-14 f-c-l-gray font-22"><strike>₹<span id="customer_total_price"></span></strike> &nbsp;&nbsp;</span>
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 col-xs-3 pull-left pad-t-20">--}}
                                        <span class="font-14 f-c-red font-18">50% OFF </span>
                                    {{--</div>--}}

                                </div>
                                <div class="col-xs-12 col-md-12 no-pad margin02">
                                    <p><a  class="f-c-red txt-u-l" href="{{route('customer.register')}}" target="_blank">Sign up for
                                            Free</a>
                                        <span class="f-c-l-gray" >& get ₹200 instant discount today !</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 pad-l-10">
                            <br>
                            <div class="col-xs-12 col-md-12 div-p-price pad-10" style="height: 141px">
                                <div class="col-xs-10 col-md-10 no-pad">
                                    <div class="col-xs-12 col-md-12 no-pad">
                                        <h14 class=" f-s-14 .f-c-d-Black pull-left">
                                            <b>Premium Estimate</b>
                                            <span class="p-color-red">*</span>  &nbsp;
                                            <hr class="pad01">
                                        </h14>
                                        {{--  <img src="{{env('AWS_CLOUD_FRONT')}}/img/piggy-bank.svg')}}" alt="piggy-bank">
                                          <h14 class=" f-s-14 f-c-d-greay pull-right">

                                              <span class="p-color-red">*</span> SAVE
                                              UP MORE!
                                          </h14>
                                        --}}

                                    </div>
                                    <div class="col-xs-12 col-md-12 no-pad m-t-10 m-b-5 margin03">
                                       {{-- <div class="col-md-6 col-xs-6 pull-left no-pad">--}}
                                            <span class="f-c-blue font-25">₹<span id="member-price-tag"></span>&nbsp;&nbsp;&nbsp;</span>
                                        {{-- </div>--}}
                                        {{-- <div class="col-md-3 col-xs-3 pull-left pad-t-20">--}}
                                            <span class="f-c-l-gray font-22" ><strike>₹<span id="member_total_price"></span></strike>&nbsp;&nbsp;&nbsp;</span>
                                        {{--  </div>--}}
                                        {{--  <div class="col-md-3 col-xs-3 pull-left pad-t-20">--}}
                                            <span class="f-c-red font-18">55% OFF </span>
                                        {{--  </div>--}}
                                    </div>
                                    <div class="col-xs-12 col-md-12 no-pad margin-16 ">
                                        <p class="f-c-l-gray pull-left">
                                            {{--<span class="p-color-red">*</span>--}}
                                            Membership Benefits
                                            <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                     estimated to the maximum accuracy, based on our pricing policies and
                                                         is based upon whichever is greater for your package;
                                                     either its volumetric weight or the actual weight">
                                                <i class="fa fa-question-circle-o"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-md-2 no-pad txt-a-c">
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/piggy-bank.svg" alt="piggy-bank">
                                    <h4 class="f-c-red custom-font">SAVE UP MORE!</h4>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-md-6 col-xs-12 no-pad">--}}
{{--                            <br>--}}
{{--                            <div class="col-xs-12 col-md-12 div-b-price pad-10">--}}
{{--                                <div class="col-xs-12 col-md-12 no-pad m-5">--}}
{{--                                   <h4 class="font-18 f-c-l-black "><b>Want to Ship Rakhi Abroad?</b></h4>--}}
{{--                                </div>--}}
{{--                                <div class="col-xs-12 col-md-12 no-pad m-5">--}}
{{--                                    <a class="btn btn-b-b btn-s-b " href="send-rakhi-gifts-online-worldwide-at-cheap-rates" target="_blank">--}}
{{--                                        Check Rakhi Rates--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-md-12 col-xs-12 div-b-b"></div>
                        <div class="col-md-12 col-xs-12 no-pad ">
                            <br>
                            <button class="btn btn-terms">Terms Note</button>
                            <br/>
                            <br/>
                            <h14 class="f-s-14 f-c-l-gray">The chargeable weight is always the greater of the two:
                                Volumetric or the Actual weight.
                            </h14>
                            <h14 class="f-s-14 f-c-l-gray">
                                <span class="f-c-red">*</span> The rates displayed are INCLUSIVE of the fuel surcharge
                                and taxes within India
                            </h14>
                            <br/>
                            <br/>
                            <h14 class="f-s-14 f-c-l-gray">
                                <span class="f-c-red">*</span> Excludes oversized and palletized shipments, and special
                                products (liquids, homemade food, etc).
                                <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                    <i class="fa fa-question-circle-o"></i></a>
                            </h14>
                            <br/>
                            <h14 class="f-s-14 f-c-l-gray">
                                <span class="f-c-red">**</span> We cannot push the Ship Requests to Dispatch that are
                                made after 3 PM or on Sundays; the same will be processed the next working day.
                            </h14>
                            <br>
                            <br>
                            <h14 class="f-s-14 f-c-l-gray">
                                The charges are not inclusive of the import duty at the receiving country.
                                The same will vary from country to country and based on the product.
                            </h14>
                            <br>
                            <br>
                            <h14 class="f-s-14 f-c-l-gray">
                                Shipments that may require additional time include those containing items under review,
                                hazardous materials or oversized
                                packages & when additional export documentation is required.
                            </h14>
                            <br>
                            <br>
                            <h14 class="f-s-14 f-c-l-gray">
                                The courier will be chosen according to your destination & the weight of the shipment.
                                We're teamed up with the most
                                trusted couriers such as DHL & DTDC.
                            </h14>
                            <br>
                            <br>
                            <h14 class="f-s-14 f-c-l-gray">
                                Country-specific shipping discount would have been deducted already from the Basic
                                Estimate shown.
                            </h14>
                            <br>

                        </div>
                        <div class="col-md-12 no-pad">
                            <br>
                            <div class="col-md-6 col-xs-12 no-pad">
                                <div class="col-md-6 col-xs-6 no-pad">
                                    <a href="customer/register">
                                        <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Get Virtual Address</button></a>
                                </div>
                                <div class="col-md-6 col-xs-6 ">
                                    <a href="/schedule-pickup">
                                    <button class="btn btn-s-b btn-b-b btn-f-w btn-h-40">Schedule A Pickup</button></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                {{--<div class="sidebar-nav-fixed affix">--}}
                <br>
                <div class="col-md-12 col-xs-12 no-pad">
                    {{--<a href="{{route('domesticPricing')}}" class="btn btn-f-w btn-b-b btn-s-b btn-a-l">Domestic Shipping Rates</a><br>--}}
                    <a href="/seller-partner" class="btn btn-f-w btn-b-b btn-s-b btn-a-l">Seller Shipping Rates</a><br>
                </div>

                <div class="col-md-12 col-xs-12 no-pad"><br>
                    <div class="col-xs-12 col-md-12 div-c-guide pad-10 ">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <p class="f-s-12 f-c-blue">
                                <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                    <i class="fa fa-question-circle-o"></i></a>
                                Country Guide
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <a href="/offers" class="f-s-12 pull-right ">Offers Available </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-xs-12 no-pad"><br>
                    <div class="col-md-12 col-xs-12 div-b-w-s pad-10">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <p class="f-s-12 f-c-blue" data-toggle="modal" data-target="#myModal-calculate">
                                <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                    <i class="fa fa-question-circle-o"></i></a> How to calculate volumetric weight</p>
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/c-box.png" class="img-responsive" alt="">
                            </center>
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad"><br>
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/measurement.png" class="img-responsive" alt="">
                            </center>
                        </div>
                    </div>

                </div>


                <div class="col-md-12 col-xs-12 no-pad"><br>
                    <div class="col-md-12 col-xs-12 div-b-w-s pad-20">
                        <h14 class="f-s-14 f-c-l-gray f-w-8">Tools</h14>
                        <br>
                        <br>
                        <a href="/countries" class="f-s-14 f-c-blue">Currency Conversion</a><br><br>
                        <a href="/faq" class="f-s-14 f-c-blue">Duties and taxes</a><br><br>
                        <a href="https://ship.shoppre.com/prohibited-items-what-you-cannot-ship-internationally-from-india/" class="f-s-14 f-c-blue" target="_blank">
                            Restricted & prohibited items</a><br><br>
                        <a href="/sellers-shipping" class="f-s-14 f-c-blue">Premium Plans for Sellers</a><br><br>
                    </div>
                </div>
                {{--</div>--}}
            </div>

            <div class="col-md-12 col-xs-12"><br>
                <div class="col-md-12 col-xs-12 div-b-w-s no-pad">
                    <div class="col-xs-12 col-md-12 no-pad">
                        <center>
                            <h3 class="f-s-24 f-c-d-greay">Membership Plans</h3>
                            <p class="f-s-16 f-c-l-gray">Membership Plans are specifically designed for customers who
                                use our services
                                including Personal Shopper frequently or for bulk international shipments. You can see
                                the obvious difference in costs from our International Shipping Calculator.</p>  <br>
                        </center>
                    </div>
                    <div class="wrapper">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="pill" class="btn btn-membership-plans-monthly" href="#M">Half Yearly</a>
                            </li>
                            <li>
                                <a data-toggle="pill" class="btn btn-membership-plans-yearly" href="#Y">Yearly</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="M" class="tab-pane fade in active">
                                <table id="memberplans">
                                    <tr>
                                        <th class="col-md-4 col-xs-2">
                                            <h14 class="f-s-18 f-c-d-greay">Features</h14>
                                        </th>
                                        <th class="col-md-4 col-xs-5 no-pad">
                                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/m_premium.png" style="width: 100%" class=""
                                                 alt=""> <br>
                                        </th>
                                        <th class="col-md-4 col-xs-5 no-pad">
                                            <h14 class="f-s-18 f-c-d-greay">Basic Plan</h14>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Consolidation
                                            <a href="#" class="tooltipkey"
                                               title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                                <i class="fa fa-question-circle-o"></i></a></h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹10</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹50</h6></td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Photo
                                                <a href="#" class="tooltipkey"
                                                   title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹5 per photo</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹20 per photo</h6></td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Advanced Photo
                                                <a href="#" class="tooltipkey"
                                                   title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹100 per photo</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹500 per photo</h6></td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Discounts on Shipping
                                                <a href="#" class="tooltipkey"
                                                   title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Country Discount + Seasonal Offers <br>
                                                + 5% Discount</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Country Discount + Seasonal Offers</h6></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Pickup Charges
                                                <a href="#" class="tooltipkey"
                                                   title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">0 - 5 kg = ₹100</h6>
                                            <h6 class="f-s-16 f-c-blue">5.5 - 10 kg = ₹300</h6>
                                            <h6 class="f-s-16 f-c-blue">10.5 - 40 kg = ₹500</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 40 kg = ₹800</h6>

                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">40/kg in Bangalore,</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Min ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">50/kg outside Bangalore,</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Min ₹200</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Storage<a href="#" class="tooltipkey"
                                                      title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a></h6>
                                        </td>

                                        <td><h6 class="f-s-16 f-c-blue">30 Days</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">20 Days</h6></td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Package Return
                                                <a href="#" class="tooltipkey"title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">FREE</h6>
{{--                                            <h6 class="f-s-16 f-c-blue">4 to 10 Days = FREE</h6>--}}
{{--                                            <h6 class="f-s-16 f-c-blue">11 to 15 Days = FREE</h6>--}}
{{--                                            <h6 class="f-s-16 f-c-blue">Above 15 Days = FREE</h6>--}}
{{--                                            <h6 class="f-s-16 f-c-blue">Opted for taking back the Shipment = FREE</h6>--}}
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-gray">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-gray">4 to 10 Days = ₹100/Package</h6>
                                            <h6 class="f-s-16 f-c-gray">11 to 15 Days = ₹200/Package</h6>
                                            <h6 class="f-s-16 f-c-gray">Above 15 Days = ₹400/Package</h6>
                                            <h6 class="f-s-16 f-c-gray">Opted for taking back the Shipment = ₹400</h6>
                                        </td>
                                    </tr>

                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Scanned Copies of Documents
                                                <a href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹40 Per Page</h6></td>
                                        <td><h6 class="f-s-16 f-c-gray">₹100 Per Page</h6></td>

                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">E-mail Updates
                                                <a href="#" class="tooltipkey"
                                                             title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Shipping Addresses<a
                                                href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                        <td><h6 class="p-color-cement header6">Upto 5 addresses</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Liquid/Semi liquid Clearance charge
                                                <a href="#" class="tooltipkey"
                                                   title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">0.5 - 5 Kg -> ₹1400 </h6>
                                            <h6 class="f-s-16 f-c-blue">5.5 - 10 Kg -> ₹3100</h6>
                                            <h6 class="f-s-16 f-c-blue">10.5 - 15 Kg -> ₹5400</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹7800</h6>
                                            <span class="f-s-12 f-c-blue">*Weight in Kg per shipment</span>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹1400 </h6>
                                            <h6 class="f-s-16 f-c-l-gray">5.5 - 10 Kg -> ₹3100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">10.5 - 15 Kg -> ₹5400</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹7800</h6>
                                            <span class="f-s-12 f-c-l-gray">*Weight in Kg per shipment</span>
                                        </td>
                                    </tr>

                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Liquid/Semi liquid Clearance Charges for <br> UAE and Singapore
                                                <a href="#" class="tooltipkey"
                                                   title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">0.5 - 5 Kg -> ₹3100 </h6>
                                            <h6 class="f-s-16 f-c-blue">5.5 - 10 Kg -> ₹5400</h6>
                                            <h6 class="f-s-16 f-c-blue">10.5 - 15 Kg -> ₹7800</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹9999</h6>
                                            <span class="f-s-12 f-c-blue">*Weight in Kg per shipment</span>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹3100 </h6>
                                            <h6 class="f-s-16 f-c-l-gray">5.5 - 10 Kg -> ₹5400</h6>
                                            <h6 class="f-s-16 f-c-l-gray">10.5 - 15 Kg -> ₹7800</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹9999</h6>
                                            <span class="f-s-12 f-c-l-gray">*Weight in Kg per shipment</span>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Electronics/Branded Food Items/Powder items Clearance charges Applicable only for Dubai and Singapore
                                                <a href="#" class="tooltipkey"
                                                   title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">₹ 200/- </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">₹ 500/- </h6>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Real Time Tracking
                                                <a href="#" class="tooltipkey"
                                                                 title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Set Up a Local Hub for Your Business
                                                <a href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue"> Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray"> Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Personal Shopper
                                                <a href="#" class="tooltipkey"title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue"> Assisted Purchase(by ShoppRe) = 7% of the item value (Min ₹200)
                                                <br><br>
                                                Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">Assisted Purchase(by ShoppRe) = 07% of the item value (Min ₹200)
                                                <br><br>
                                                Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Receive your own Indian Virtual Shipping Address & Personal Locker
                                                <a href="#" class="tooltipkey" title="Receive your own FREE locker space in
                                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Receive Parcels
                                                <a href="#" class="tooltipkey"title="We receive your packages here at our facility, log them into your lockers and account;
                                                all this without charging your anything extra!">
                                                <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h14 class="f-s-18 f-c-gray">Half Yearly Fee</h14>
                                        </td>
                                        <td class="pad-20">
                                            <h6 class="f-s-20 f-c-blue f-w-9">₹2500/-</h6>
                                            <a href="{{route('member.register')}}?member=h"
                                               class="btn btn-b-r btn-s-r btn-a-l btn-disabled ">TRY IT
                                            </a>
                                            <a href="{{route('member.register')}}?member=h" class="btn-enable ">Start Plan
                                            </a>

                                        </td>
                                        <td>
                                            <h6 class="f-s-20 f-c-blue f-w-9">FREE FOREVER</h6>
                                            <a href="{{route('customer.register')}}"
                                                class="btn btn-b-b btn-s-b btn-a-l btn-disabled  ">FREE SIGN-UP
                                            </a>
                                            <a href="{{route('customer.register')}}"
                                                class="btn-enable ">Free Signup
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="Y" class="tab-pane fade" style="padding-top: 30px">
                                <table id="memberplans">
                                    <tr>
                                        <th class="col-md-4 col-xs-2">
                                            <h14 class="f-s-18 f-c-d-greay">Features</h14>
                                        </th>
                                        <th class="col-md-4 col-xs-5 no-pad">
                                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/m-premium.png" style="width: 100%" class=""
                                                 alt=""> <br>
                                        </th>
                                        <th class="col-md-4 col-xs-5 no-pad">
                                            <h14 class="f-s-18 f-c-d-greay">Basic Plan</h14>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Consolidation
                                                <a href="#" class="tooltipkey"
                                                   title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                                    <i class="fa fa-question-circle-o"></i></a></h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹10</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹50</h6></td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Photo
                                                <a href="#" class="tooltipkey"
                                                   title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹5 per photo</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹20 per photo</h6></td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Advanced Photo
                                                <a href="#" class="tooltipkey"
                                                   title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹100 per photo</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹500 per photo</h6></td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Discounts on Shipping
                                                <a href="#" class="tooltipkey"
                                                   title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Country Discount + Seasonal Offers <br>
                                                + 5% Discount</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Country Discount + Seasonal Offers</h6></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Pickup Charges
                                                <a href="#" class="tooltipkey"
                                                   title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">0 - 5 kg = ₹100</h6>
                                            <h6 class="f-s-16 f-c-blue">5.5 - 10 kg = ₹300</h6>
                                            <h6 class="f-s-16 f-c-blue">10.5 - 40 kg = ₹500</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 40 kg = ₹800</h6>

                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">40/kg in Bangalore,</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Min ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">50/kg outside Bangalore,</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Min ₹200</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Storage<a href="#" class="tooltipkey"
                                                                                     title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a></h6>
                                        </td>

                                        <td><h6 class="f-s-16 f-c-blue">30 Days</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">20 Days</h6></td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Package Return
                                                <a href="#" class="tooltipkey"title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">FREE</h6>
{{--                                            <h6 class="f-s-16 f-c-blue">4 to 10 Days = FREE</h6>--}}
{{--                                            <h6 class="f-s-16 f-c-blue">11 to 15 Days = FREE</h6>--}}
{{--                                            <h6 class="f-s-16 f-c-blue">Above 15 Days = FREE</h6>--}}
{{--                                            <h6 class="f-s-16 f-c-blue">Opted for taking back the Shipment = FREE</h6>--}}
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-gray">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-gray">4 to 10 Days = ₹100/Package</h6>
                                            <h6 class="f-s-16 f-c-gray">11 to 15 Days = ₹200/Package</h6>
                                            <h6 class="f-s-16 f-c-gray">Above 15 Days = ₹400/Package</h6>
                                            <h6 class="f-s-16 f-c-gray">Opted for taking back the Shipment = ₹400</h6>
                                        </td>
                                    </tr>

                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Scanned Copies of Documents
                                                <a href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">₹40 Per Page</h6></td>
                                        <td><h6 class="f-s-16 f-c-gray">₹100 Per Page</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">E-mail Updates
                                                <a href="#" class="tooltipkey"
                                                   title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Shipping Addresses<a
                                                    href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                        <td><h6 class="p-color-cement header6">Upto 5 addresses</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Electronics/Branded Food Items/Powder items Clearance charges Applicable only for Dubai and Singapore
                                                <a href="#" class="tooltipkey"
                                                   title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">₹ 200/- </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">₹ 500/- </h6>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Liquid/Semi liquid Clearance charge
                                                <a href="#" class="tooltipkey"
                                                   title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue">0.5 - 5 Kg -> ₹1392.4 </h6>
                                            <h6 class="f-s-16 f-c-blue">5.5 - 10 Kg -> ₹3009</h6>
                                            <h6 class="f-s-16 f-c-blue">10.5 - 15 Kg -> ₹5369</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹7729</h6>
                                            <span class="f-s-12 f-c-blue">*Weight in Kg per shipment</span>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹1392.4 </h6>
                                            <h6 class="f-s-16 f-c-l-gray">5.5 - 10 Kg -> ₹3009</h6>
                                            <h6 class="f-s-16 f-c-l-gray">10.5 - 15 Kg -> ₹5369</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹7729</h6>
                                            <span class="f-s-12 f-c-l-gray">*Weight in Kg per shipment</span>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Real Time Tracking
                                                <a href="#" class="tooltipkey"
                                                   title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Set Up a Local Hub for Your Business
                                                <a href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue"> Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray"> Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Personal Shopper
                                                <a href="#" class="tooltipkey"title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue"> Assisted Purchase(by ShoppRe) = 7% of the item value (Min ₹200)
                                                <br> <br>
                                                Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray"> Assisted Purchase(by ShoppRe) = 7% of the item value (Min ₹200)<br>
                                                <br>
                                                Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Receive your own Indian Virtual Shipping Address & Personal Locker
                                                <a href="#" class="tooltipkey" title="Receive your own FREE locker space in
                                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Receive Parcels
                                                <a href="#" class="tooltipkey"title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h14 class="f-s-18 f-c-gray">Yearly Fee</h14>
                                        </td>
                                        <td class="pad-20">
                                            <h6 class="f-s-20 f-c-blue f-w-9">₹5000/-</h6>
                                            <a href="{{route('member.plan')}}?member=y"
                                               class="btn btn-b-r btn-s-r btn-a-l btn-disabled ">TRY IT
                                            </a>
                                            <a href="{{route('member.plan')}}?member=y" class="btn-enable ">Start Plan
                                            </a>
                                        </td>
                                        <td>
                                            <h6 class="f-s-20 f-c-blue f-w-9">Free Forever</h6>
                                            <a href="{{route('customer.register')}}?member=b"
                                               class="btn btn-b-b btn-s-b btn-a-l btn-disabled ">FREE SIGN-UP
                                            </a>
                                            <a href="{{route('customer.register')}}?member=b"
                                               class="btn-enable ">Free Signup
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 col-lg-12"><br>
                <div class="col-md-12 col-xs-12 div-b-w-s pad-20">
                    <h1 class="f-s-22 f-c-blue f-w-9">
                        Come to us for the best shipping costs from India!
                    </h1> <br>
                    <p class="f-s-16 f-c-l-gray">ShoppRe provides the cheapest shipping rates & FREE international shipping estimates for 220+ countries including
                        the USA, UK, UAE, Australia & more. We estimate the shipping cost based on the destination and the weight of
                        the package which would be greater of the actual and volumetric weights. </p> <br>
                    <p class="f-s-16 f-c-l-gray">
                        Country-specific discounts applied to individual countries ease up the cost initially and throw in our Membership Plans,
                        and it's on! ShoppRe tries in however many ways it can to reduce the shipping costs as much as
                        possible so that our customers can <a href="{{route('home')}}" class="f-c-blue">ship from India</a> without any worry.
                    </p> <br>
                    <p class="f-s-16 f-c-l-gray">
                        Have a <a href="{{route('forwarding')}}" class="f-c-blue">package to forward</a> or courier overseas? Use our Price Calculator to get an estimate & make a Ship Request - it is that easy!
                    </p> <br>
                </div>
                <br>
            </div>
        </div>
        <br>
        <br>
    </section>


@endsection

@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
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

            $(".select2").select2();

            if ($(window).width() >600) {
                $('#volumetric_weight').attr("checked",true)
                $("#volumetric-dis").css({'display':'block'})
            }
            else {
                console.log('< 6')
                $('#volumetric_weight').attr("checked",false)
                $("#volumetric-dis").css({'display':'none'})
            }

            $('#volumetric_weight').change(function() {
                if(this.checked) {
                    $("#volumetric-dis").css({'display':'block'})
                }else {
                    $("#volumetric-dis").css({'display':'none'})
                }

            });

            $("#getRates").click(function(e) {
                e.preventDefault();
                let country = $("select[name='country']").val();
                $("#shippingCountry").text(country);
                $.ajax({
                    type: 'get',
                    url: 'https://courier.shoppre.com/api/pricing/slab?all=true&country='+ country +'&rateType=slab&type=nondoc&weight=1',
                    success: function ({prices, pricesDoc}) {
                        // console.log(pricesDoc);
                        var html=' <thead>\n' +
                            ' <tr>\n' +
                            ' <th>Weight(in KG)</th>\n' +
                            ' <th>Rate (in INR)</th>\n' +
                            ' </tr>\n' +
                            '</thead>';
                        var htmldoc=' <thead>\n' +
                            ' <tr>\n' +
                            ' <th>Weight(in KG)</th>\n' +
                            ' <th>Rate (in INR)</th>\n' +
                            ' </tr>\n' +
                            '</thead>';
                        prices.map((p) => {
                            html += '<tbody>' +
                                ' <tr> ' +
                                ' <td class="bg-white">' + p.weight + '</td>' +
                                '<td>' +
                                '<i class="fa fa-rupee"></i> <span>' + p.customerRate + '</span>' +
                                ' </td>' +
                                ' </tr>' +
                                '</tbody>';
                        });
                        pricesDoc.map((d) => {
                            htmldoc += '<tbody>' +
                                ' <tr> ' +
                                ' <td class="bg-white">' + d.weight + '</td>' +
                                '<td>' +
                                '<i class="fa fa-rupee"></i> <span>' + d.customerRate + '</span>' +
                                ' </td>' +
                                ' </tr>' +
                                '</tbody>';
                        });
                        $('#shippingRates').html(html);
                        $('#shippingRatesDoc').html(htmldoc);
                        $('#ratesModel').modal('show')
                    }
                });

            });

            $("#shipping").validate({
                rules:
                    {
                        country: {required: true},
                        weight: {required: true},
                        unit: {required: true},
                    },
                messages:
                    {
                        country: {required: "Please select country"},
                        weight: {required: "Please enter weight to calculate."},
                        unit: {required: "Please select unit of weight."},
                    },
                submitHandler: function (form) {
                    var country = $("select[name='country']").val();
                    var weight = $("input[name='weight']").val();
                    var weight_unit = $("input[name='weight_unit']:checked").val();
                    var measurement_unit = $("input[name='measurement_unit']:checked").val();
                    var package_type = $("input[name='package_type']:checked").val();
                    var length = $("input[name='length']").val();
                    var width = $("input[name='width']").val();
                    var height = $("input[name='height']").val();

                    // console.log('country ' + country + '\n weight ' + weight + '\n weight_unit ' + weight_unit + '\n type ' + package_type + ' \n measurement_unit ' + measurement_unit + '\n length ' + length + '\n width ' + width + '\n height ' + height);
                    if (weight<=70){
                        var queryParams = 'all=true&country=' + country + '&type=' + package_type + '&weight=' + weight;
                        queryParams += '&length=' + length + '&width=' + width + '&height=' + height;
                        queryParams += '&scale=' + measurement_unit + '&unit=' + weight_unit;
                        jQuery.ajax({
                            url: 'https://courier.shoppre.com/api/pricing?' + queryParams,
                            type: 'get',
                            success: function ({prices}) {
                                let customer_price = prices[0].customerRate;
                                let member_price = (customer_price * 95) / 100;
                                $('#customer-price-tag').text(Math.round(customer_price));
                                $('#member-price-tag').text(Math.round(member_price));
                                $('#customer_total_price').text(Math.round(customer_price * 2));
                                $('#member_total_price').text(Math.round(member_price * 2));
                                $('#pricing-panel').slideDown();
                                $('#addImge').hide();
                            }
                        });
                        return false;
                    } else {
                        $('#moreWeight').modal('show')

                    }

                }
            });

            $("#form-weight").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    var country = $("select[name='Mcountry']").val();
                    var email = $("input[name='Memail']").val();
                    var name = $("input[name='MName']").val();
                    var contact_no = $("input[name='MContactNumber']").val();
                    var weight = $("input[name='Mweight']").val();
                    var token = $('input[name=_token]').val();
                    var mailtrain_type = 'pricing';

                    jQuery.ajax({
                        url: 'api-pricing-calculator',
                        type: "POST",
                        data: {
                            _token: token,
                            name: name,
                            weight: weight,
                            email: email,
                            country: country,
                            contact_no: contact_no,
                            mailtrain_type: mailtrain_type,

                        },
                        success: function (data) {
                            $('#moreWeight').modal('hide')
                        }
                    });

                    const url = window.location.href;
                    const arr = url.split("/");
                    const prefix = arr[0]+'//';
                    const subDomain = arr[2].split('.')[0];
                    const domain = arr[2].split('.')[1]+'.'+arr[2].split('.')[2];
                    let leadsSubDomain = '';
                    if (subDomain === 'www') {
                        leadsSubDomain = 'leads';
                    } else {
                        leadsSubDomain = 'staging-leads'
                    }
                    const leadsDomain = prefix + leadsSubDomain+'.'+ domain;

                    const leadObject = {
                        customer: {
                            name: name,
                            email: email,
                            phone: contact_no,
                        },
                        form_info: {
                            form_id: 2,
                        },
                        lead_meta: [
                            {
                                attribute: 'name',
                                value: name,
                            },
                            {
                                attribute: 'weight',
                                value: weight
                            },
                            {
                                attribute: 'email',
                                value: email
                            },
                            {
                                attribute: 'country',
                                value: country
                            },
                            {
                                attribute: 'contact_no',
                                value: contact_no
                            }
                        ]
                    };

                    jQuery.ajax({
                        url: leadsDomain+"/api/leads",
                        crossDomain: true,
                        headers: {
                            'Access-Control-Allow-Origin': '*'
                        },
                        type: "POST",
                        data: { lead: JSON.stringify(leadObject) },
                        success: function(res) {
                        }
                    });
                }
            });

            // End Document ready
        });

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
        });
    </script>
@endsection
