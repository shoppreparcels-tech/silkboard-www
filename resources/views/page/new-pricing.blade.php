@extends('layout')

@section('title', 'Pricing | Shipping Cost Calculator - Shoppre')
@section('description', 'Get the right plan that suits your need and calculate your shipping costs from India to any country. Save upto 75% on shipping rates!')
@section('keywords', 'calculate your shipping costs, from india to any country, save 75% on shipping rates, repackaging service, shipping calculator')

@section('css_style')
    <style>
        .container-fluid{padding-left: 10%;padding-right: 10%}
        .sec-pc-h{box-shadow: 0 1px 3px rgba(17, 39, 59, 0.1);background-color: #fafafb;}
        .div-b-w-s{box-shadow: 0 1px 3px rgba(17, 39, 59, 0.1);border-radius: 3px;background-color: #ffffff;}
        .b-r{border: 1px solid rgba(146, 156, 165, 0.2) !important;}
        .btn span.glyphicon {opacity: 0;}
        .btn.active span.glyphicon {opacity: 1;}
        .l-pad{padding-left: 10px}
        .div-b-price{border-radius: 3px;border: 1px solid #edeef0;background-color: #fbfbfc;}
        .div-p-price{box-shadow: 0 2px 3px rgba(232, 81, 81, 0.1);border-radius: 3px;border: 1px solid #ffe19a;background-color: #fff7e5;}
        .div-b-b{border-bottom: 1px solid rgba(146, 156, 165, 0.2);padding-bottom: 20px}
        .btn-terms{border-radius: 30px;background-color: #929ca5;color: #fff}
        .div-c-guide{border-radius: 3px;border: 1px solid rgba(233, 196, 106, 0.2);background-color: #fff7e4;}
        .btn-enable{display: none}
        .btn-disabled{display: inline-block}
        .btn-puls-pad{padding: 6px 8px;}
        .new-pricing .select-control {float: left;width: 89px;height: 40px;font-size: 13px;font-weight: 400;font-style: italic;border-left: 0;border-radius: 20px;background-color: #fafafb;border: none;}
        .sidebar-nav-fixed{width:13%}.fixed-div{position: fixed;}

        @media only screen and (max-width: 600px) {
            .l-pad{padding-left: 0px}
            .container-fluid{padding-left: 1%;padding-right: 1%}
            .btn-enable{display: inline-block}
            .btn-disabled{display: none}
            .btn-puls-pad{padding: 6px 6px;}
        }

    </style>
@endsection

@section('content')
    <section id="new-pricing">
        <div class="container sec-pc-h no-pad" style="padding-bottom: 30px">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="col-md-12 no-pad">
                    <h1 class="f-c-d-gray f-s-24 f-w-9">Calculate Your Shipping Cost</h1>
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
                                        <option
                                            value="{{$country->iso}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-xs-12 l-pad">
                                <h5 class="f-s-14 f-c-blue">View all rates up to 10 Kg</h5>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <div class="col-md-6 col-xs-12 col-sm-6 no-pad">
                                <lable class="f-s-14 f-c-l-gray f-w-5 l-h-3">Package Type</lable>
                                <br>

                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active btn-h-40">
                                        <input type="radio" name="package_type" id="option2" value="doc" checked="checked">
                                        <img src="{{asset('img/images/file.svg')}}" alt=""> Document
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </label>

                                    <label class="btn btn-primary btn-h-40">
                                        <input type="radio" name="package_type" id="option1" value="nondoc">
                                        <img src="{{asset('img/images/box.png')}}" alt=""> Non-Document
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 pad-l-10">
                                <lable class="f-s-14 f-c-l-gray f-w-5 l-h-3">Package Weight *</lable>
                                <br>
                                <div class="col-md-12 col-xs-12 no-pad">
                                    <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active btn-h-40">
                                                <input type="radio" name="weight_unit" id="option2" value="kg" checked="checked"> KG
                                                <span class="glyphicon glyphicon-ok"></span>
                                            </label>

                                            <label class="btn btn-primary btn-h-40">
                                                <input type="radio" name="weight_unit" id="option1" value="lb"> LB
                                                <span class="glyphicon glyphicon-ok"></span>
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
                                Volumetric Weight (Optional)
                                <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                             estimated to the maximum accuracy, based on our pricing policies and
                                                 is based upon whichever is greater for your package;
                                             either its volumetric weight or the actual weight">
                                    <i class="fa fa-question-circle-o"></i></a>
                            </p><br>

                            <div class="col-md-5 col-xs-12 pad-r-10">
                                <div class="col-md-4 col-xs-4 no-pad">
                                    <div class="btn-group" data-toggle="buttons">
                                        <p class="f-s-14 f-c-l-gray f-w-5 pull-left">Unit</p> <br>
                                        <label class="btn btn-primary active btn-h-40">
                                            <input type="radio" name="measurement_unit" id="option2" value="cm" checked="checked"> cm
                                            <span class="glyphicon glyphicon-ok"></span>
                                        </label>

                                        <label class="btn btn-primary btn-h-40">
                                            <input type="radio" name="measurement_unit" id="option1" value="in"> in
                                            <span class="glyphicon glyphicon-ok"></span>
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
                                                   name="weight">
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
                                                   name="weight">
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
                                                   name="weight">
                                        </div>
                                        <button type="button" class="btn btn-b-w btn-h-40 pull-right inc-value btn-puls-pad col-md-2 col-xs-2" id="aplus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <div class="col-md-6 col-xs-12 pad-r-10"><br>
                                <input id="phone" name="phone" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off">
                            </div>
                            <div class="col-md-6 col-xs-12 no-pad"><br>
                                <button class="btn btn-b-r btn-s-r btn-f-w btn-h-40" >Get An Estimate</button>
                            </div>
                        </div>
                    </form>
                    <br>

                    <div class="col-md-12 col-xs-12 no-pad" id="addImge">
                        <br>
                        <br>
                        <center>
                            <a href="{{route('customer.register')}}">
                                <img src="{{asset('img/images/schedule-pickup-courier-from-india-shoppre.png')}}"
                                     alt="schedule-pickup-courier-from-india-shoppre" class="img-responsive">
                            </a>
                        </center>
                    </div>
                    <div class="col-md-12 col-xs-12 no-pad display-none"  id="pricing-panel">
                        <div class="col-md-6 col-xs-12 no-pad">
                            <br>
                            <div class="col-xs-12 col-md-12 div-b-price pad-10">
                                <div class="col-xs-12 col-md-12 no-pad">
                                    <h14 class=" f-s-14 f-c-d-greay pull-left"><span class="p-color-red">*</span> Basic
                                        Estimate
                                        <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                            <i class="fa fa-question-circle-o"></i></a></h14>
                                    <h14 class="f-c-d-greay pull-right">Deliver in 3-5 Days</h14>
                                </div>
                                <div class="col-xs-12 col-md-12 no-pad">
                                    <div class="col-md-6 col-xs-6 pull-left no-pad">
                                        <h2 class="f-s-30 f-c-blue">₹<span id="customer-price-tag"></span></h2>
                                    </div>
                                    <div class="col-md-3 col-xs-3 pull-left pad-t-20">
                                        <h4 class="f-s-14 f-c-l-gray"><strike>₹<span id="customer_total_price"></span></strike></h4>
                                    </div>
                                    <div class="col-md-3 col-xs-3 pull-left pad-t-20">
                                        <h4 class="f-s-14 f-c-red">50% OFF </h4>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-md-12 no-pad">
                                    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?src=menu">Sign up for
                                        Free</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 pad-l-10">
                            <br>
                            <div class="col-xs-12 col-md-12 div-p-price pad-10">
                                <div class="col-xs-12 col-md-12 no-pad">
                                    <h14 class=" f-s-14 f-c-d-greay pull-left"><span class="p-color-red">*</span>
                                        Premium Estimate
                                    </h14>
                                    <h14 class=" f-s-14 f-c-d-greay pull-right"><span class="p-color-red">*</span> SAVE
                                        UP MORE!
                                    </h14>

                                </div>
                                <div class="col-xs-12 col-md-12 no-pad">
                                    <div class="col-md-6 col-xs-6 pull-left no-pad">
                                        <h2 class="f-s-30 f-c-blue">₹<span id="member-price-tag"></span></h2>
                                    </div>
                                    <div class="col-md-3 col-xs-3 pull-left pad-t-20">
                                        <h4 class="f-s-14 f-c-l-gray"><strike>₹<span id="member_total_price"></span></strike></h4>
                                    </div>
                                    <div class="col-md-3 col-xs-3 pull-left pad-t-20">
                                        <h4 class="f-s-14 f-c-red">50% OFF </h4>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-md-12 no-pad  ">
                                    <h14 class="f-s-14 f-c-d-greay pull-left"><span class="p-color-red">*</span>
                                        Membership Benefits
                                        <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                            <i class="fa fa-question-circle-o"></i></a></h14>

                                </div>
                            </div>
                        </div>
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
                            <h14 class="f-s-14 f-c-l-gray">
                                <span class="f-c-red">*</span> For electronics items, additional charges are applicable.
                            </h14>
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
                                    <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Get Virtual Address</button>
                                </div>
                                <div class="col-md-6 col-xs-6 ">
                                    <button class="btn btn-s-b btn-b-b btn-f-w btn-h-40">Learn More</button>
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
                    <a href="" class="btn btn-f-w btn-b-b btn-s-b btn-a-l">Domestic Shipping Rates</a><br>
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
                            <a href="" class="f-s-12 pull-right ">Offers Available </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-xs-12 no-pad"><br>
                    <div class="col-md-12 col-xs-12 div-b-w-s pad-10">
                        <div class="col-md-12 col-xs-12 no-pad">
                            <p class="f-s-12 f-c-blue">
                                <a href="#" class="tooltipkey" title="The shipping cost for your courier is
                                                 estimated to the maximum accuracy, based on our pricing policies and
                                                     is based upon whichever is greater for your package;
                                                 either its volumetric weight or the actual weight">
                                    <i class="fa fa-question-circle-o"></i></a> How to calculate volumetric weight</p>
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <center>
                                <img src="{{asset('img/images/c-box.png')}}" class="img-responsive" alt="">
                            </center>
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad"><br>
                            <center>
                                <img src="{{asset('img/images/measurement.png')}}" class="img-responsive" alt="">
                            </center>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 col-xs-12 no-pad"><br>
                    <div class="col-md-12 col-xs-12 div-b-w-s pad-20">
                        <h14 class="f-s-14 f-c-l-gray f-w-8">Tools</h14>
                        <br>
                        <br>
                        <a href="" class="f-s-14 f-c-blue">Currency Conversion</a><br><br>
                        <a href="" class="f-s-14 f-c-blue">Duties and taxes</a><br><br>
                        <a href="" class="f-s-14 f-c-blue">Restricted & prohibited items</a><br><br>
                        <a href="" class="f-s-14 f-c-blue">Premium Plans for Sellers</a><br><br>
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
                                <a data-toggle="pill" class="btn btn-membership-plans-monthly" href="#M">Monthly</a>
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
                                            <img src="{{asset('img/images/m-premium.png')}}" style="width: 100%" class=""
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
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹100</h6></td>

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
                                        <td><h6 class="f-s-16 f-c-blue">₹10 per photo</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹20 per photo</h6></td>

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
                                            <h6 class="f-s-16 f-c-blue">0 - 10 kg = ₹300</h6>
                                            <h6 class="f-s-16 f-c-blue">0 - 40 kg = ₹500</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 40 kg = ₹800</h6>

                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">40/kg in Bangalore,</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Min ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">50/kg in Bangalore,</h6>
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
                                        <td><h6 class="f-s-16 f-c-blue">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-blue">4 to 20 Days = ₹100</h6>
                                            <h6 class="f-s-16 f-c-blue">>20 Days = ₹400</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-l-gray">4 to 10 Days = ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">>10 Days = ₹400</h6>
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
                                        <td><h6 class="f-s-16 f-c-blue">₹100 Per Page</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹40 Per Page</h6></td>
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
                                            <h6 class="f-s-16 f-c-d-greay">Special Clearance Charges
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
                                            <h6 class="f-s-16 f-c-blue">5 - 10 Kg -> ₹3009</h6>
                                            <h6 class="f-s-16 f-c-blue">10 - 15 Kg -> ₹5369</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹7729</h6>
                                            <span class="f-s-10 f-c-blue">*Weight in Kg per shipment</span>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹1392.4 </h6>
                                            <h6 class="f-s-16 f-c-l-gray">5 - 10 Kg -> ₹3009</h6>
                                            <h6 class="f-s-16 f-c-l-gray">10 - 15 Kg -> ₹5369</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹7729</h6>
                                            <span class="f-s-10 f-c-l-gray">*Weight in Kg per shipment</span>
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
                                            <h6 class="f-s-16 f-c-blue"> 7% of the item value <br> (Min ₹200)</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray"> 7% of the item value <br> (Min ₹200)</h6>
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
                                            <h14 class="f-s-18 f-c-d-greay">Monthly Fee</h14>
                                        </td>
                                        <td>
                                            <h6 class="f-s-26 f-c-blue f-w-9">₹599</h6>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                               class="btn btn-b-r btn-s-r btn-a-l btn-disabled">Get a Free
                                                Address
                                            </a>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn-enable">Get a Free
                                                Address
                                            </a>
                                        </td>
                                        <td>
                                            <h6 class="f-s-26 f-c-blue f-w-9">Free Forever</h6>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                                class="btn btn-b-b btn-s-b btn-a-l btn-disabled">Get a Free
                                                Address
                                            </a>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                                class="btn-enable">Get a Free
                                                Address
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
                                            <img src="{{asset('img/images/m-premium.png')}}" style="width: 100%" class=""
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
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹100</h6></td>

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
                                        <td><h6 class="f-s-16 f-c-blue">₹10 per photo</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹20 per photo</h6></td>

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
                                            <h6 class="f-s-16 f-c-blue">0 - 10 kg = ₹300</h6>
                                            <h6 class="f-s-16 f-c-blue">0 - 40 kg = ₹500</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 40 kg = ₹800</h6>

                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">40/kg in Bangalore,</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Min ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">50/kg in Bangalore,</h6>
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
                                        <td><h6 class="f-s-16 f-c-blue">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-blue">4 to 20 Days = ₹100</h6>
                                            <h6 class="f-s-16 f-c-blue">>20 Days = ₹400</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-l-gray">4 to 10 Days = ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">>10 Days = ₹400</h6>
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
                                        <td><h6 class="f-s-16 f-c-blue">₹100 Per Page</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹40 Per Page</h6></td>
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
                                            <h6 class="f-s-16 f-c-d-greay">Special Clearance Charges
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
                                            <h6 class="f-s-16 f-c-blue">5 - 10 Kg -> ₹3009</h6>
                                            <h6 class="f-s-16 f-c-blue">10 - 15 Kg -> ₹5369</h6>
                                            <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹7729</h6>
                                            <span class="f-s-10 f-c-blue">*Weight in Kg per shipment</span>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹1392.4 </h6>
                                            <h6 class="f-s-16 f-c-l-gray">5 - 10 Kg -> ₹3009</h6>
                                            <h6 class="f-s-16 f-c-l-gray">10 - 15 Kg -> ₹5369</h6>
                                            <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹7729</h6>
                                            <span class="f-s-10 f-c-l-gray">*Weight in Kg per shipment</span>
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
                                            <h6 class="f-s-16 f-c-blue"> 7% of the item value <br> (Min ₹200)</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray"> 7% of the item value <br> (Min ₹200)</h6>
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
                                            <h14 class="f-s-18 f-c-d-greay">Monthly Fee</h14>
                                        </td>
                                        <td>
                                            <h6 class="f-s-26 f-c-blue f-w-9">₹599</h6>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                               class="btn btn-b-r btn-s-r btn-a-l btn-disabled">Get a Free
                                                Address
                                            </a>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn-enable">Get a Free
                                                Address
                                            </a>
                                        </td>
                                        <td>
                                            <h6 class="f-s-26 f-c-blue f-w-9">Free Forever</h6>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                               class="btn btn-b-b btn-s-b btn-a-l btn-disabled">Get a Free
                                                Address
                                            </a>
                                            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                               class="btn-enable">Get a Free
                                                Address
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
                    <p class="f-s-15 f-c-l-gray">ShoppRe provides the cheapest shipping rates & FREE international shipping estimates for 220+ countries including
                        the USA, UK, UAE, Australia & more. We estimate the shipping cost based on the destination and the weight of
                        the package which would be greater of the actual and volumetric weights. </p> <br>
                    <p class="f-s-15 f-c-l-gray">
                        Country-specific discounts applied to individual countries ease up the cost initially and throw in our Membership Plans,
                        and it's on! ShoppRe tries in however many ways it can to reduce the shipping costs as much as
                        possible so that our customers can ship from India without any worry.
                    </p> <br>
                    <p class="f-s-15 f-c-l-gray">
                        Have a package to forward or courier overseas? Use our Price Calculator to get an estimate & make a Ship Request - it is that easy!
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
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>
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
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".select2").select2();
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
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
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
                        console.log('country ' + country + '\n weight ' + weight + '\n weight_unit ' + weight_unit + '\n type ' + package_type + ' \n measurement_unit ' + measurement_unit + '\n length ' + length + '\n width ' + width + '\n height ' + height);
                        jQuery.ajax({
                            url: 'https://ship-api.shoppre.com/api/pricing?all=true&country=' + country + '&type=' + package_type + '&weight=' + weight,
                            type: 'get',
                            success: function ({prices}) {
                                console.log(prices[0].customerRate);
                                let customer_price = prices[0].customerRate;
                                let member_price = (customer_price * 95) / 100;
                                console.log(member_price);
                                $('#customer-price-tag').text(Math.round(customer_price));
                                $('#member-price-tag').text(Math.round(member_price));
                                $('#customer_total_price').text(Math.round(customer_price * 2));
                                $('#member_total_price').text(Math.round(member_price * 2));
                                $('#pricing-panel').slideDown();
                                $('#addImge').hide();
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
                        },
                    messages:
                        {
                            state: {required: "Please select state"},
                            city: {required: "Please enter city"},
                            pin: {required: "Please enter PIN"},
                            weight: {required: "Enter package weight."},
                            email: {required: "Enter your email address to contact."},
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
