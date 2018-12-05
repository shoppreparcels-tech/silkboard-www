@extends('layout')

@section('title', 'Country Guides: Learn about 220 Countries | Pricing, Duty & Tax')
@section('description', 'Get Latest helpful information on shipments specific to your country including Shipping Cost, Duties and Taxes, Prohibited Items, Transit Time & Country alerts.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('css_style')
    <!-- Select2 -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@endsection
<style>
    .section-cguide-m {background-color: #11273b;padding-top: 3em;padding-bottom: 3em}
    .section-cguide-m > div > div > span {margin-top: 10px;}
    .section-cguide-m .select2-container--default .select2-selection--single {background-color: #11273b !important;border: none;border-radius: 4px;}
    .section-cguide-m .select2-container--default .select2-selection--single .select2-selection__rendered {color: #fdf699 !important;font-size: 22px !important;line-height: 34px;}
    .section-cguide-t {background-color: #fafafb;}
    .section-cguide-t .container-tab {background-color: #ffffff;border-radius: 20px;}
    .section-cguide-t .container .div-img {width:350px;box-shadow: 0 0 20px rgba(17, 39, 59, 0.05);border-radius: 10px;background-color: #ffffff;padding-top: 10px;padding-bottom: 10px}
    .section-cguide-t .container .div-img img{width:100%}
    .section-cguide-t .padding-left {padding-left: 30px;}
    /*.section-cguide-t .tab{border-bottom: 1px solid rgba(146, 156, 165, 0.2);}*/
    .section-cguide-t .tab .nav-tabs {border-bottom: none;position: relative;}
    .section-cguide-t .tab .nav-tabs li {margin-right: 60px;}
    .section-cguide-t .tab .nav-tabs li a {font-size: 16px;font-weight: 600;color: #677582;border-radius: 0;margin-right: 0;border: none;position: relative;transition: all 0.5s ease 0s;}
    .span .tab .nav-tabs li a:hover { /*background: #fff;*/}
    .section-cguide-t .tab .nav-tabs li a:before {content: "";width: 60%;height: 2px;background: rgba(0, 0, 0, 0.2);position: absolute;bottom: 5px;left: 20px;background: #e85151;transform: scale(0);transition: all 700ms ease 0s;}
    .section-cguide-t .tab .nav-tabs li a:after {content: "";background: #507dbc;margin: 0 auto;position: absolute;bottom: 2px;left: 0;right: 0;transform: scale(0);transition: all 700ms ease 0s;}
    .section-cguide-t .tab .nav-tabs li.active a,
    .section-cguide-t .tab .nav-tabs li.active a:focus,
    .section-cguide-t .tab .nav-tabs li.active a:hover {border: none;color: #e85151;}
    .section-cguide-t .tab .nav-tabs li a:hover:before,
    .section-cguide-t .tab .nav-tabs li.active a:before,
    .section-cguide-t .tab .nav-tabs li a:hover:after,
    .section-cguide-t .tab .nav-tabs li.active a:after {transform: scale(1);}
    .section-cguide-t .tab .tab-content { /*padding: 20px;*/background: #fff;font-size: 14px;color: #677582;line-height: 26px;border-top: 1px solid rgba(146, 156, 165, 0.2)}
    .section-cguide-t .tab .tab-content h3 {font-size: 24px;margin-top: 0;}
    .section-cguide-t form button {width: 210px;height: 40px;color: #ffffff;font-weight: 600;border-radius: 60px !important;background-color: #e85151;transition: 0.6s;margin-bottom: 50px;}
    .section-cguide-t form button:hover{-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.3);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.3);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.3);color: #ffffff;}
    .section-cguide-t .tab-content .div-weight-img {border: 1px solid rgba(146, 156, 165, 0.1);background-color: #fafafb;padding-left: 3em;margin-top: 40px;padding-bottom: 10px;}
    .section-cguide-t .tab-content .div-weight-img img {width: 60%;}


    @media only screen and (max-width: 600px) {
        .section-cguide-t .tab .nav-tabs li {margin-right: 15px;}
        .section-cguide-t .container .div-img {width:300px;margin-top: 15px;}
    }

</style>

@section('content')
    <section class="section-cguide-m">
        <div class="container padding-bottom">
            <center>
                <h1 class="header1 p-color-white">Country Guide</h1>
            </center>
            <div class="col-md-offset-4 col-md-1 col-sm-offset-3 col-sm-1 col-xs-offset-1 col-xs-1 no-padding">
                <span class="header7 p-color-cement pull-right">for &nbsp;&nbsp;&nbsp;</span></h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-8 no-padding">
                <form id="country_select">

                    {{ csrf_field() }}
                    <select class="form-control select2" name="country" id="select_iso">
                        <option value="">Select Country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->iso}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </section>
    <section class="section-cguide-t" role="main-tabs">
        <div class="container container-tab no-padding">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs ul-margin" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#ShippingCost" aria-controls="home" role="tab" data-toggle="tab">Shipping Cost</a>
                    </li>
                    <li role="presentation">
                        <a href="#DutiesTaxes" aria-controls="profile" role="tab" data-toggle="tab">Duties & Taxes</a>
                    </li>
                    <li role="presentation">
                        <a href="#ProhibitedItems" aria-controls="profile" role="tab" data-toggle="tab">Prohibited
                            Items</a>
                    </li>
                    <li role="presentation">
                        <a href="#DutiesTaxes" aria-controls="profile" role="tab" data-toggle="tab">Transit time</a>
                    </li>
                    <li role="presentation">
                        <a href="#Reviews" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a>
                    </li>
                    <li role="presentation">
                        <a href="#SaveMore" aria-controls="profile" role="tab" data-toggle="tab">Save More</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="ShippingCost">
                        <div class="col-lg-7 col-md-7 col-xs-12 ">
                            <form class="calc-form" id="shipping">
                                {{ csrf_field() }}
                                <div class="col-xs-12 col-md-12 no-padding">
                                    <h2 class="header2 p-color-cement-dark">Calculate Shipping Cost</h2>
                                    <div class="col-md-6 col-sm-12 no-padding">
                                        <label class="header6 p-color-cement">
                                            Where do you want to send your
                                            package to?
                                        </label>
                                        <select class="form-control select2" name="country">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $calc_country)
                                                <option value="{{$calc_country->id}}" {{$calc_country->id == $country->id ? 'selected' : ''}}>{{$calc_country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-5 col-sm-12 ">


                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 no-padding ">
                                    <div class="radio">
                                        <label class="checkbox-inline header6">
                                            <input class="radio-pricing  p-color-cement-dark"
                                                   type="radio"
                                                   name="type" value="nondoc" checked
                                            >Non-Document Package
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="checkbox-inline header6">
                                            <input class="radio-pricing p-color-cement-dark"
                                                   type="radio"
                                                   name="type" value="doc"
                                                   Width (in cm)>Document
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 no-padding">
                                    <label class="control-label header6 ">What is the Weight of your Package?
                                        <span>*</span> </label>
                                </div>
                                <div class="col-md-12 col-xs-12 no-padding">
                                    <div class="col-md-6 col-sm-6 col-xs-6 no-padding">
                                        <div class="div-text-box">
                                            <span id="aminus" class="btn btn-puls-minus dec-value no-padding">-</span>
                                            <input type="text" id="adnum" class="txt-weight" value="0.5" name="weight">
                                            <span id="aplus" class="btn btn-puls-minus inc-value no-padding">+</span>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 no-padding " id="weight-option-padding">
                                        <div class="radio">
                                            <label class="checkbox-inline header7 p-color-cement">
                                                <input class="radio-pricing" type="radio" name="unit" value="Kg" checked>Kg
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline header7 p-color-cement">
                                                <input class="radio-pricing" type="radio" name="unit" value="lbs">lb
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 padding-bottom no-padding">
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
                                                        <input class="radio-pricing" type="radio"
                                                               name="scale"
                                                               value="cm" checked>cm
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label class="checkbox-inline header6 p-color-cement">
                                                        <input class="radio-pricing" type="radio"
                                                               name="scale"
                                                               value="in">in
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-sm-4 col-xs-4 div-price-cal-length-padding">
                                                <h6 class="header7 p-color-cement">Length (in cm)</h6>
                                                <div class="col-sm-12 no-padding  div-price-cal-length">
                                                        <span id="aminus"
                                                              class="btn btn-puls-minus dec-value no-padding">-</span>
                                                    <input type="text" class="txt-length" name="length"
                                                           value="0">
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-4 col-sm-4 col-xs-4 div-price-cal-length-padding">
                                                <h6 class="header7 p-color-cement">Width (in cm)</h6>
                                                <div class="col-sm-12 no-padding div-price-cal-length">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                    <input type="text" class="txt-length" name="width"
                                                           value="0">
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-4 col-sm-4  col-xs-4 div-price-cal-length-padding">
                                                <h6 class="header7 p-color-cement">Height (in cm)</h6>
                                                <div class="col-sm-12 no-padding  div-price-cal-length">
                                                            <span class="btn btn-puls-minus dec-value no-padding"
                                                                  id="aminus">-</span>
                                                    <input type="text" class="txt-length" name="height"
                                                           value="0">
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 div-pric-cal-estimate padding-bottom no-padding">
                                    <button type="submit" class="btn header6">ESTIMATE
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="div-weight-img">
                                <div class="row">
                                    <p class="header6 p-color-blue" data-toggle="modal" data-target="#myModal-calculate">
                                        <a href="#" class="tooltipkey" title="The shipping cost for your courier is estimated based on whichever is greater for your package;
                                            either its volumetric weight or the actual weight. Here is how we can calculate the volumetric weight of your package.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                        How to calculate volumetric weight</p>
                                    <p class="header7 p-country-guide ">
                                        <a href="https://www.shoppre.com/offers/save-upto-80-international-shipping-cost-from-india/" target="_blank"><span
                                                class="header7 p-color-red price-cal-country">Offers</span></a>
                                    </p>
                                    <p class="header7 p-color-cement">Centimeter to Inch Conversion</p>
                                    <h4 class="header6 p-color-cement-dark">1 in = 2.54 cm (1 cm = 03937
                                        in) </h4>
                                    <p class="header7 p-color-cement">Kilogram to Pound Conversion</p>
                                    <h4 class="header6 p-color-cement-dark">1 lbs = 0.4536 Kg (1 Kg = 2.2046 lbs) </h4>

                                    <h6 class="header7">Courier Sample:</h6>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/parcelsample.png" alt="">
                                </div>
                                <div class="row">
                                    <br>
                                    <br>
                                    <a href="#" data-toggle="modal" data-target="#myModal-calculate">Learn how to
                                        calculate</a>
                                    {{--<button type="button" class="btn btn-info btn-lg" style="margin-left: -40px;" data-toggle="modal" data-target="#myModal-calculate">Learn how to calculate</button>--}}

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
                                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/vol_calc.png" style="width: 100%;" alt="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 no-padding col-xs-12 " id="price-cal-slide-down">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="row"style="padding-left: 15px">
                                    <div class="col-md-8 col-sm-8 col-xs-6 no-padding">
                                        <h6 class="header6 p-color-cement"><span class="p-color-red">*</span> Estimated
                                            Cost
                                            <a
                                                href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                                <i class="fa fa-question-circle-o"></i></a></h6>
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-12 no-padding ">
                                                <h1 class="header1" id="final-price" style="margin-left: 20px;">₹</h1>

                                            </div>
                                            <div class="col-sm-8 col-xs-12 text-final-price-margin no-padding">
                                                <strike class="p-color-cement"><span class="header6 p-color-cement"
                                                                                     id="actual-amount"></span></strike>
                                                <span class="header6 p-color-red" id="discount"></span> <span
                                                    class="header7 p-color-red">% OFF</span>
                                            </div>
                                        </div>
                                        <p class="header6"><span class="header6 p-color-red">**</span> 3-6 Business Days
                                        </p>

                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <img class="img-responsive pull-right"
                                             src="{{env('AWS_CLOUD_FRONT')}}/img/images/m-benefits.png" alt="">
                                    </div>
                                </div>
                                <div class="div-estimat-amount-devider"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12" style="margin-top: 20px;">
                                        <p class="header7 p-color-cement"><span class="p-color-red">*</span>
                                            The
                                            chargeable weight is always the greater of the two: Volumetric or the Actual
                                            weight.</p>
                                        <p class="header7 p-color-cement"><span class="p-color-red">*</span>
                                            The
                                            rates displayed are INCLUSIVE of the fuel surcharge and taxes within India</p>
                                        <p class="header7 p-color-cement"><span class="p-color-red">*</span>
                                            For
                                            electronics items,<a href="https://www.shoppre.com/parcel-forwarding/guidelines-for-shipping-electronics-items-from-india/"> additional charges are applicable</a>.</p>
                                        <p class="header7 p-color-cement"><span class="p-color-red">*</span>
                                            Excludes oversized and palletized shipments, and <a href="#special-products">special products (liquids,
                                                homemade food, etc.)</a><a href="#" class="tooltipkey" title="Learn More Below">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a></p>
                                        <p class="header7 p-color-cement"><span class="p-color-red">**</span>
                                            After
                                            dispatch from Shoppre facility. Does not apply to ship requests made after
                                            3pm
                                            IST on Saturdays, or on holidays. Shipments that may require additional time
                                            include those containing items under review or hazardous materials,
                                            oversized
                                            packages or where additional export documentation is required.</p>

                                        <p class="header7 p-color-cement">The
                                            courier will be chosen according to your destination
                                            & the weight of the shipment. We're teamed up with the most trusted couriers
                                            such as
                                            DHL & DTDC.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-sm-6 col-xs-12" id="price-cal-btn-margin">
                                        <a class="btn btn-price-cal-v-address"
                                           href="https://myaccount.shoppre.com/register">Get
                                            a
                                            Virtual Address</a>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-xs-12" id="price-cal-btn-margin">
                                        <a class="btn btn-price-cal-sounds-good" href="{{route('ifs.index')}}" target="_blank">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12" id="price-cal-btn-margin">
                                <div class="div-country-guide-information">
                                    <h6 class="header6 p-color-cement">Tools</h6>
                                    <ul>
                                        <li><a href="https://www.xe.com/currencyconverter/" target="_blank">Currency
                                                Conversion</a></li>
                                        <li><a href="{{route('cguide.index')}}">Country Guide</a></li>
                                        <li><a href="{{route('cguide.index')}}">Duties & Taxes</a></li>
                                        <li><a href="{{route('cguide.index')}}">Restricted & prohibited Items</a></li>
                                        <li>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform">Seller
                                                Membership Plans</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="calc_load"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="DutiesTaxes">
                        <div class="col-lg-12 col-md-12 ">
                            @if(isset($guide) && !empty($guide))
                                <section class="cguide_blocks">
                                    @if(!empty($guide->dutytax))
                                        <article>
                                            {{--<h2><img src="{{asset('img/cguide_box1.png')}}"> Duties and Taxes</h2>--}}
                                            <h4 class="header4 p-color-cement-dark"> Duties and Taxes</h4>
                                            <div class="col-md-8">
                                                {!! $guide->dutytax !!}
                                            </div>
                                            @if(!empty($guide->dutytax_meta))
                                                <div class="col-md-4">
                                                    <aside>
                                                        <h3>The Shoppre Advantage</h3>
                                                        <p>{{$guide->dutytax_meta}}</p>
                                                    </aside>
                                                </div>
                                            @endif
                                            <div class="clearfix"></div>
                                        </article>
                                    @endif
                                </section>
                            @endif
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="ProhibitedItems">
                        <div class="col-lg-12 col-md-12 ">
                            <section class="cguide_blocks">
                                @if(!empty($guide->forbidden))
                                    <article>
                                        <h2><img src="{{asset('img/cguide_box3.png')}}"> PRODUCTS YOU CAN'T SHIP INTERNATIONALY TO {{strtoupper($country->name)}}</h2>
                                        <div class="col-md-8">
                                            {!! $guide->forbidden !!}
                                        </div>
                                        @if(!empty($guide->forbidden_meta))
                                            <div class="col-md-4">
                                                <aside>
                                                    <h3>The Shoppre Advantage</h3>
                                                    <p>{{$guide->forbidden_meta}}</p>
                                                </aside>
                                            </div>
                                        @endif
                                        <div class="clearfix"></div>
                                    </article>
                                @endif
                            </section>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Transittime">
                        <div class="col-lg-12 col-md-12 ">
                            @if(isset($guide) && !empty($guide))
                                <section class="cguide_blocks">
                                    @if(!empty($guide->transits))
                                        <article>
                                            <h2><img src="{{asset('img/cguide_box2.png')}}"> PACKAGE TRANSIT TIMES</h2>
                                            <div class="col-md-8">
                                                {!! $guide->transits !!}
                                            </div>
                                            @if(!empty($guide->transits_meta))
                                                <div class="col-md-4">
                                                    <aside>
                                                        <h3>The Shoppre Advantage</h3>
                                                        <p>{{$guide->transits_meta}}</p>
                                                    </aside>
                                                </div>
                                            @endif
                                            <div class="clearfix"></div>
                                        </article>
                                    @endif

                                </section>
                            @endif

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Reviews">
                        @php
                            $index=0;
                            $colors = array("#fc91ad", "#aa62e3", "#2b78dc", "#6558ee", "#fd4e13", "#e5213b", "#94ba2b");
                        @endphp
                        <div class="col-lg-12 col-md-12 ">
                            <div>
                                {{--<div class="row" id="reviews-more">--}}
                                    {{--@foreach($reviews as $review)--}}
                                        {{--@php--}}
                                        {{--$color= $colors[$index];--}}
                                        {{--$pname = $review->person;--}}
                                        {{--$firstname = explode(" ", $pname);--}}
                                        {{--$fl = substr($firstname[0], 0, 1);--}}
                                        {{--$sfl = substr($firstname[1], 0, 1);--}}
                                        {{--$index++;--}}
                                        {{--@endphp--}}
                                        {{--<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">--}}
                                            {{--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 inner-review ">--}}
                                                {{--<div class="row div-img-row">--}}
                                                    {{--<div class="col-md-2 col-lg-2 col-sm-3 col-xs-3 no-padding">--}}
                                                        {{--<div class=" img-review img-circle "--}}
                                                             {{--style="background-color: red;padding-top: 15px">--}}
                                                            {{--<center>--}}
                                                                {{--<p style="text-transform: uppercase"> {{$fl}} {{$sfl}}</p>--}}
                                                            {{--</center>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-5 col-lg-5 col-sm-6 col-xs-6">--}}
                                                        {{--<p class="pull-left p-name-font-weight">{{$review->person}}--}}
                                                            {{--<br>{{$review->name}} </p>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-4 col-lg-4 col-sm-3 col-xs-3 pull-right">--}}
                                                        {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/rating-star.png" style="margin-top: 11px" alt="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="row">--}}
                                                    {{--<i class="quots-t ">--}}
                                                        {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_up.svg" alt="">--}}
                                                    {{--</i>--}}
                                                {{--</div>--}}
                                                {{--<div class="row">--}}
                                                    {{--<p class=" p-reviews">{{substr($review->review, '0','500')}}!</p>--}}
                                                {{--</div>--}}
                                                {{--<div class="row">--}}
                                      {{--<span class="quots-b">--}}
                                         {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/qoute_down.svg" alt="">--}}
                                      {{--</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="SaveMore">
                        <div class="col-lg-12 col-md-12 ">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <center>
                <p class="header-ifs-p">
                    <a class="bla-1" href="https://www.youtube.com/watch?v=eFop4beZmOk">
                        <img class="btn-vid-img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/btn.svg">
                    </a>
                </p>
                <h1 class="header1 p-color-cement-dark">Ship from India to United Status</h1>
                <p class="header2 p-color-cement">Browse through popular stores, take your pick, shop & get it delivered to your virtual address; we'll ship it to your destination abroad! Browse through popular stores, take your pick, shop & get it delivered to your virtual address; we'll ship it to your destination abroad!</p>
            </center>
            <br>
            <br>
            <div class="col-md-4 col-xs-12 ">
                <div class="div-img">
                    <center>
                        <h5 class="header5 p-color-cement-dark">Browse Indian Stores</h5>
                    </center>
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/c-shoping-online-indian-stores.png" alt="">
                </div>

            </div>
            <div class="col-md-4 col-xs-12 ">
                <div class="div-img">
                    <center>
                        <h5 class="header5 p-color-cement-dark">Send Courier</h5>
                    </center>
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/c-g-courier.png" alt="">
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="div-img">
                    <center>
                        <h5 class="header5 p-color-cement-dark">Personal Shopper</h5>
                    </center>
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/c-g-shoping.png" alt="">
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
    </section>


@endsection

@section('js_script')
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            debugger;
            $(".select2").select2();
        });

        $("#select_iso").change(function () {
            if ($(this).val().length != 0) {
                window.location = "/cguide/" + $(this).val();
            }
        });
    </script>
    <script>
        $.ajax({
            url: "https://api.myip.com",
            headers: {
                'Access-Control-Allow-Headers': 'Content-Type',
                'Access-Control-Allow-Origin': '*'

            },
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                var country = res.country;
                var destination = '';
                var destination_country = 'United Arab Emirates';
                if (country != 'India') {
                    var destination = 'to ' + country;
                    destination_country = country;
                }
                var weight = 0.5;
                var unit = 'kg';
                var type = 'nondoc';
                var box_scale = '';
                var length = '';
                var width = '';
                var height = '';
                jQuery.ajax({
                    url: '/calculate-shipping',
                    type: "POST",
                    data: {
                        country: destination_country,
                        weight: weight,
                        unit: unit,
                        type: type,
                        length: length,
                        width: width,
                        height: height,
                        scale: box_scale,
                        origin: 'home_page',
                    },
                    success: function (res) {
                        console.log(res);
                        if (res.error == "1") {
                        } else {
                            var final_price = "";
                            res.prices.map(function (price) {
                                final_price = Math.round(((100 - price.discount) / 100) * price.amount);
                                $('#prices').text(final_price);
                                $("#country").text(destination);
                            });
                        }
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            debugger;
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
                            console.log(res);
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
                                    $('#final-price').text('₹' + final_price);
                                    $('#actual-amount').text('₹' + actual_amount);
                                    $('#discount').text(discount);
                                    // $('#prices').html(html);
                                    $('#price-cal-slide-down').slideDown();
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

@endsection
