@extends('layout')

@section('title', 'International Shipping | ShoppRe Price Calculator & Membership Plans')
@section('description', 'Get the right membership plan that suits your need and calculate your shipping costs from India to your country. Save upto 80% on shipping rates. Estimate Now!')
@section('keywords', 'calculate your shipping costs, international shipping calculator, shoppre pricing, membership plans, individual shoppers, global sellers,  wholesalers')

@section('css_style')
    <meta property="og:title" content="How to Estimate Your International Shipping Cost?"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/pricing"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/priyamani-shoppre-online-shopping-in-india.jpg')}}"/>
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="ShoppRe international shipping Price Calculator" />
    <meta property="og:description" content="How much will it cost to ship your package from India to your country? Use ShoppRe Shipping Price Calculator to find out, and choose the best Membership Plans."/>
    <meta property="og:site_name" content="ShoppRe Online Shipping Site in India"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="Shop from India and Ship Worldwide with ShoppRe.com" />
    <meta name="twitter:description" content="How much will it cost to ship your package from India to your country? Use ShoppRe Shipping Price Calculator to find out, and choose the best Membership Plans." />
    <meta name="twitter:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/priyamani-shoppre-online-shopping-in-india.jpg')}}" />
    <meta name="twitter:image:alt" content="ShoppRe international shipping Price Calculator"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "ShoppRe Shipping Price Calculator",
  "alternateName": "ShoppRe International Shipping",
  "url": "https://www.shoppre.com/pricing",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "Get the right membership plan that suits your need and calculate your shipping costs from India to your country. Save upto 80% on shipping rates. Estimate Now!",
    "sameAs": [
    "https://www.facebook.com/goshoppre/",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://goo.gl/maps/uuZy4tMs8582",
    "https://play.google.com/store/apps/details?id=com.shoppre.play",
    "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"
  ]
}
</script>
<style>
        .padding-bottom{
            padding-bottom: 10px;
            padding-left: 0;
            padding-right: 0;
        }

        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .tr-hide {
            display: none;
        }

        .tr-hide1 {
            display: none;
        }

        .tr-hide2 {
            display: none;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #customers tr:nth-child(odd) {
            background-color: #fafafb;
        }

        #customers tr:hover {
            background-color: #fff;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            /*background-color: #4CAF50;*/
            color: #11273b;
        }

        {{--table--}}
        div.shop-ship {
            z-index: 10;
            background-color: #11273b;
            color: #fff;
            padding: 0 !important;
            border-radius: 4px;
            -moz-border-radius: 4px;
            margin-top: 20px;
            filter: alpha(opacity=97);
        }

        div.shop-ship-menu {
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;
        }

        div.shop-ship-menu div.list-group {
            margin-bottom: 0;
        }

        div.shop-ship-menu div.list-group > a {
            margin-bottom: 0;
        }

        div.shop-ship-menu div.list-group > a .glyphicon,
        div.shop-ship-menu div.list-group > a .fa {
            color: #5A55A3;
        }

        div.shop-ship-menu div.list-group > a:first-child {
            border-top-right-radius: 0;
            -moz-border-top-right-radius: 0;
        }

        div.shop-ship-menu div.list-group > a:last-child {
            border-bottom-right-radius: 0;
            -moz-border-bottom-right-radius: 0;
        }

        div.shop-ship-menu div.list-group > a.active,
        div.shop-ship-menu div.list-group > a.active .glyphicon,
        div.shop-ship-menu div.list-group > a.active .fa {
            background-color: #11273b;
            /*background-image: #5A55A3;*/
            color: #ffffff;
        }

        div.shop-ship-menu div.list-group > a:hover {
            color: #ffffff;
        }

        div.shop-ship-menu div.list-group > a.active:after {
            content: '';
            position: absolute;
            /*left: 100%;
            top: 50%;*/
            top: 100%;
            right: 50%;
            /*margin-top: -13px;*/
            border-left: 0;
            border-bottom: 13px solid transparent;
            border-top: 13px solid #11273b;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
        }

        div.shop-ship-tab div.shop-ship-tab-content:not(.active) {
            display: none;
        }

        .list-group-item1 {
            position: relative;
            display: block;
            padding: 15px 15px;
            margin-bottom: -1px;
            background-color: #11273b;
            border: 1px solid #ddd;
            border: none !important;
            color: #677582;
        }

        .courier-membership-plans div {
            border: 1px solid rgba(146, 156, 165, 0.2);
        }

        .div-backgroud-price-cal {
            background-color: #fafafb;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 0;
            padding-right: 0;
        }

        .div-backgroud-price-cal1 {
            background-color: #ffffff;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 0;
            padding-right: 0;
        }

        #courier-membership-plans {
            display: none;
        }

        .how-to-calculate .modal-content {
            border-radius: 0px !important;
        }
    </style>

@endsection

@section('content')
    <section class="header">
        <div class="container header-padder-top">
            <center>
                <p class="header1 p-color-white">Price Calculator</p>
            </center>
        </div>

        <div class="container no-padding">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shop-ship">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shop-ship-menu">
                    <div class="list-group">
                        <a href="#" class="col-md-6 col-xs-6 list-group-item1 active text-center header2">
                            Shop & Ship
                        </a>
                        <a href="#" class="col-md-6 col-xs-6 list-group-item1 text-center header2">
                            Courier
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 30px">
        <div class="container div-courier-cal no-padding ">
            <div class="container shop-ship-tab" style="padding-bottom: 20px">
                <div class="shop-ship-tab-content active">
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 no-padding">
                        <div class="col-sm-10">
                            <br>
                            <label class="header6 p-color-blue">
                                Shop From Any Indian Store; Get It to a FREE Indian Virtual  Address; We'll Ship It to Your Doorsteps!
                            </label>
                        </div>
                        <span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#International" aria-controls="home" role="tab"
                                       data-toggle="tab">International</a>
                                </li>

                                <li role="presentation tab-int-domestic">
                                    <a href="#Domestic" aria-controls="profile" role="tab"
                                       data-toggle="tab">Domestic</a>
                                </li>
                            </ul>
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active padding-bottom" id="International">
                                    <form class="calc-form" id="shipping">
                                        {{ csrf_field() }}
                                        <div class="col-xs-12 col-md-12 no-padding">
                                            <div class="col-md-6 col-sm-12 no-padding padding-bottom">
                                                <label class="header6 p-color-cement">
                                                    Where do you want to send your
                                                    package to?
                                                </label>
                                                <select class="form-control select2" name="country">
                                                    <option value="">Select Country</option>
                                                    @foreach($countries as $country)
                                                        <option
                                                            value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-5 col-sm-12 ">
                                                {{--<p class="header7 p-country-guide ">--}}
                                                    {{--<a href="{{route('cguide.index')}}" class="tooltipkey" title="We ship to 220+ countries! Want to find out if your country is one of them? Check out the specific discounts we offer--}}
                                                         {{--for each country as well while you're at it!">--}}
                                                        {{--<i class="fa fa-question-circle-o"></i>--}}
                                                    {{--</a>--}}
                                                    {{--Country Guide--}}
                                                    {{--<a href="https://www.shoppre.com/offers/flames-shopping-season-sale-india-shipping-offer/" target="_blank"><span--}}
                                                            {{--class="header7 p-color-red price-cal-country">Offers</span></a>--}}
                                                {{--</p>--}}

                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom">
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
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <label class="control-label header6 ">What is the Weight of
                                                your
                                                Package? <span>*</span> </label>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <div class="col-md-6 col-sm-6 col-xs-6 no-padding">
                                                <div class="div-text-box">
                                                    {{--<span id="aminus" class="btn-puls-minus dec-value">-</span>--}}
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                    <input type="text" id="adnum" class="txt-weight" value="0.5"
                                                           name="weight">
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>
                                                    {{--<span id="aplus" class="btn-puls-minus inc-value">+</span>--}}
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 " id="weight-option-padding">
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="Kg"
                                                               checked>Kg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="lbs">lb
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
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
                                        <div class="col-xs-12 col-md-12 div-pric-cal-estimate padding-bottom">
                                            <button type="submit" class="btn btn-pricing-estimate header6">ESTIMATE
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Domestic">
                                    <form class="quote-form calc-form" id="form_quote" method="post">
                                        {{csrf_field()}}
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                                <label class="p-color-cement header6">Pickup Location-Pin
                                                    code</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6  col-xs-6 no-padding">
                                                <label class="p-color-cement header6">Destination-Pincode</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
                                            <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                                <input class="header6 p-color-cement txt-pincode" type="text"
                                                       name="pin"
                                                       placeholder=" Enter Pincode" required>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                                <input class="header6 p-color-cement txt-pincode" type="text"
                                                       name="pincode-from"
                                                       placeholder=" Enter Pincode" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <div class="radio">
                                                <label class="checkbox-inline">
                                                    <input class="radio-pricing header6 p-color-cement-dark"
                                                           type="radio"
                                                           name="type" value="nondoc" checked
                                                    >Non-Document Package
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="checkbox-inline">
                                                    <input class="radio-pricing header6 p-color-cement-dark"
                                                           type="radio"
                                                           name="type" value="doc"
                                                    >Documents
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
                                            <label class="col-sm-12 control-label no-padding header6">What is the Weight of
                                                your
                                                Package? <span>*</span> </label>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <div class="col-md-6 col-sm-6 col-xs-7 no-padding">
                                                <div class="div-text-box">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                    {{--<span id="aminus" class="btn-puls-minus dec-value">-</span>--}}
                                                    <input type="text" id="adnum" class="txt-weight" value="0.5"
                                                           name="weight">
                                                    {{--<span id="aplus" class="btn-puls-minus inc-value">+</span>--}}
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 no-padding">
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="Kg"
                                                               checked
                                                        >Kg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="lbs">Lb
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
                                            <label class="header6 control-label ">Your E-mail Address</label>
                                            <div class="col-sm-10 no-padding">
                                                <input type="text" class="form-control" name="email"
                                                       placeholder="Enter a valid E-mail Id">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 no-padding">
                                            <label class=" col-md-12 no-padding header6 control-label">Contact
                                                Number</label>
                                            <div class="col-sm-10 no-padding">
                                                <input type="text" class="form-control" name="mobile"
                                                       placeholder="Enter a valid Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom div-pric-cal-estimate">
                                            <div class="col-sm-12 no-padding">
                                                <button type="submit"
                                                        class="btn btn-pricing-estimate no-padding header6"
                                                        id="quote_submit">Get An Estimate
                                                </button>
                                                <div id="quote_result">Your enquiry has been submited! Our team will
                                                    contact you soon.
                                                </div>
                                                <div id="quote_error">Sorry! We can't process your request right
                                                    now.
                                                    Please try again
                                                    later.
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12" id="Price-cal">
                        <div class="div-volumetric-weight-img">
                            <div class="row">
                                <p class="header6 p-color-blue" data-toggle="modal" data-target="#myModal-calculate">
                                    <a href="#" class="tooltipkey" title="The shipping cost for your courier is estimated based on whichever is greater for your package;
                                            either its volumetric weight or the actual weight. Here is how we can calculate the volumetric weight of your package.">
                                        <i class="fa fa-question-circle-o"></i>
                                    </a>
                                    How to calculate volumetric weight</p>
                                <p class="header7 p-country-guide ">
                                    <a href="{{route('cguide.index')}}" class="tooltipkey" title="We ship to 220+ countries! Want to find out if your country is one of them? Check out the specific discounts we offer
                                                         for each country as well while you're at it!">
                                        <i class="fa fa-question-circle-o"></i>
                                    </a>
                                    <a href="{{route('cguide.index')}}" target="_blank" class="header7 p-color-blue">Country Guide</a>
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

                        </div>

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
                                        <img src="{{env('AWS_CLOUD_FRONT')}}//img/vol_calc.png" style="width: 100%;" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
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
                                         src="{{env('AWS_CLOUD_FRONT')}}/img/images/m-benefits.png"
                                         alt="">
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

                <div class="shop-ship-tab-content">
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 no-padding">
                        <div class="col-sm-10">
                            <br>
                            <label class="header6 p-color-blue">
                                Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!
                            </label>
                        </div>
                        <span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs ul-margin" role="tablist">
                                <li role="presentation" >
                                    <a href="#International1" aria-controls="home" role="tab"
                                       data-toggle="tab">International</a>
                                </li>
                                <li role="presentation tab-int-domestic" class="active">
                                    <a href="#Domestic1" aria-controls="profile" role="tab"
                                       data-toggle="tab">Domestic</a>
                                </li>
                            </ul>
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade " id="International1">
                                    <form class="calc-form" id="shipping1">
                                        {{ csrf_field() }}
                                        <div class="col-md-12 col-xs-12 no-padding">
                                            <div class="col-md-7 col-sm-12 col-xs-12 no-padding price-cal-country">
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
                                                {{--<p class="header7 p-country-guide ">--}}
                                                    {{--<a href="#" class="tooltipkey" title="We ship to 220+ countries! Want to find out if your country is one of them? Check out the specific discounts we offer--}}
                                                         {{--for each country as well while you're at it!">--}}
                                                        {{--<i class="fa fa-question-circle-o"></i>--}}
                                                    {{--</a>--}}
                                                    {{--Country Guide <a--}}
                                                        {{--href="https://www.shoppre.com/offers/flames-shopping-season-sale-india-shipping-offer/"--}}
                                                        {{--target="_blank"><span--}}
                                                            {{--class="header7 p-color-red price-cal-country">Offers</span></a>--}}
                                                {{--</p>--}}

                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 no-padding">
                                            <div class="radio">
                                                <label class="checkbox-inline header6 p-color-cement">
                                                    <input class="radio-pricing "
                                                           type="radio"
                                                           name="type" value="nondoc" checked
                                                    >Non-Document Package
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="checkbox-inline header6 p-color-cement">
                                                    <input class="radio-pricing "
                                                           type="radio"
                                                           name="type" value="doc"
                                                    >Document
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 no-padding">
                                            <label class="col-sm-12 control-label no-padding header6">What is the Weight
                                                of
                                                your
                                                Package? <span>*</span> </label>
                                        </div>
                                        <div class="col-md-12 col-xs-12 no-padding">
                                            <div class="col-md-6 col-sm-6 col-xs-6 no-padding">
                                                <div class="div-text-box">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                    <input type="text" id="adnum" class="txt-weight" value="1"
                                                           name="weight1">
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 no-padding" id="weight-option-padding">
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="Kg"
                                                               checked>Kg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="lbs">lb
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 no-padding">
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
                                                            <input type="text" class="txt-length" name="length1"
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
                                                            <input type="text" class="txt-length" name="width1"
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
                                                            <input type="text" class="txt-length" name="height1"
                                                                   value="0">
                                                            <span id="aplus"
                                                                  class="btn btn-puls-minus inc-value no-padding">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 no-padding div-pric-cal-estimate">
                                            <button type="submit" class="btn btn-pricing-estimate header6">ESTIMATE
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in active" id="Domestic1">
                                    <form class="quote-form calc-form" id="form_quote1" method="post">
                                        {{csrf_field()}}
                                        <div class="col-xs-12 col-md-12 price-cal-country padding-bottom">
                                            <div class="col-md-4 col-sm-6 col-xs-6 no-padding ">
                                                <label class="header6 p-color-cement">Pickup Location-Pin
                                                    code</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6  col-xs-6 no-padding">
                                                <label class="header6 p-color-cement">Destination-Pincode</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom ">
                                            <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                                <input class="header6 p-color-cement txt-pincode" type="text"
                                                       name="pin"
                                                       placeholder=" Enter Pincode" required>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                                                <input class="header6 p-color-cement txt-pincode" type="text"
                                                       name="pincode-from"
                                                       placeholder=" Enter Pincode" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
                                            <div class="radio">
                                                <label class="checkbox-inline header6  p-color-cement">
                                                    <input class="radio-pricing "
                                                           type="radio"
                                                           name="type" value="nondoc" checked
                                                    >Non-Document Package
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="checkbox-inline header6 p-color-cement">
                                                    <input class="radio-pricing "
                                                           type="radio"
                                                           name="type" value="doc"
                                                    >Documents
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <label class="col-sm-12 control-label no-padding header6">What is the Weight of
                                                your
                                                Package? <span>*</span> </label>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
                                            <div class="col-md-6 col-sm-6 col-xs-7 no-padding">
                                                <div class="div-text-box">
                                                    {{--<span id="aminus" class="btn-puls-minus dec-value">-</span>--}}
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                                    <input type="text" id="adnum" class="txt-weight" value="1"
                                                           name="weight">
                                                    {{--<span id="aplus" class="btn-puls-minus inc-value">+</span>--}}
                                                    <span id="aplus"
                                                          class="btn btn-puls-minus inc-value no-padding">+</span>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 padding-bottom">
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="Kg"
                                                               checked
                                                        >Kg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label class="checkbox-inline header7 p-color-cement">
                                                        <input class="radio-pricing" type="radio" name="unit"
                                                               value="lbs">Lb
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 padding-bottom">
                                            <label class="control-label header6">Your E-mail Address</label>
                                            <div class="col-sm-10 no-padding">
                                                <input type="text" class="form-control" name="email"
                                                       placeholder="Enter a valid E-mail Id">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 padding-bottom">
                                            <label class="col-sm-12 col-xs-12 no-padding control-label header6">Contact
                                                Number</label>
                                            <div class="col-sm-10 no-padding">
                                                <input type="text" class="form-control" name="mobile"
                                                       placeholder="Enter a valid Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 no-padding div-pric-cal-estimate">
                                            <div class="col-sm-12 padding-bottom">
                                                <button type="submit"
                                                        class="btn btn-pricing-estimate no-padding header6"
                                                        id="quote_submit">Get An Estimate
                                                </button>
                                                <div id="quote_result">Your enquiry has been submited! Our team will
                                                    contact you soon.
                                                </div>
                                                <div id="quote_error">Sorry! We can't process your request right
                                                    now.
                                                    Please try again
                                                    later.
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12" id="Price-cal">
                        <div class="div-volumetric-weight-img">
                            <div class="row">
                                <p class="header6 p-color-blue" data-toggle="modal" data-target="#myModal-calculate">
                                    <a href="#" class="tooltipkey" title="The shipping cost for your courier is estimated based on whichever is greater for your package;
                                            either its volumetric weight or the actual weight. Here is how we can calculate the volumetric weight of your package.">
                                        <i class="fa fa-question-circle-o"></i>
                                    </a>
                                    How to calculate volumetric weight</p>
                                <p class="header7 p-country-guide ">
                                    <a href="{{route('cguide.index')}}" class="tooltipkey" title="We ship to 220+ countries! Want to find out if your country is one of them? Check out the specific discounts we offer
                                                         for each country as well while you're at it!">
                                        <i class="fa fa-question-circle-o"></i>
                                    </a>
                                    <a href="{{route('cguide.index')}}" target="_blank" class="header7 p-color-blue">Country Guide</a>
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

                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="price-cal-slide-down1">
                        <div class="col-md-8 col-sm-8 col-xs-12 no-padding ">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-6">
                                    <h6 class="header6 p-color-cement"><span class="p-color-red">*</span> Estimated
                                        Cost
                                        <a
                                            href="#" class="tooltipkey" title="Receive your own Locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store.">
                                            <i class="fa fa-question-circle-o"></i></a></h6>
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-12 no-padding ">
                                            <h1 class="header1" id="final-price1" style="margin-left: 20px;">₹</h1>

                                        </div>
                                        <div class="col-sm-8 col-xs-12 text-final-price-margin no-padding">
                                            <strike class="p-color-cement"><span class="header6 p-color-cement"
                                                                                 id="actual-amount1"></span></strike>
                                            <span class="header6 p-color-red" id="discount1"></span> <span
                                                class="header7 p-color-red">% OFF</span>
                                        </div>
                                    </div>
                                    <p class="header6"><span class="header6 p-color-red">**</span> 3-6 Business Days
                                    </p>

                                </div>
                            </div>
                            <div class="div-estimat-amount-devider"></div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12" style="margin-top: 20px;">
                                    <p class="header7 p-color-cement "><span class="p-color-red">*</span>
                                        <a href="#pickup-charges" class="header7">Pickup charges will be additional</a> </p>
                                    <p class="header7 p-color-cement" ><span class="p-color-red">*</span>
                                        The
                                        rates displayed are INCLUSIVE of the fuel surcharge and taxes within India</p>
                                    <p class="header7 p-color-cement "><span class="p-color-red">*</span>
                                        For
                                        electronics items,<a href="https://www.shoppre.com/parcel-forwarding/guidelines-for-shipping-electronics-items-from-india/"> additional charges are applicable</a> .</p>
                                    <p class="header7 p-color-cement "><span class="p-color-red">*</span>
                                        Excludes oversized and palletized shipments, and <a href="#special-items">special products (liquids,
                                            homemade food, etc.)</a></p>
                                    <p class="header7 p-color-cement "><span class="p-color-red">**</span>
                                        After
                                        dispatch from Shoppre facility. Does not apply to ship requests made after
                                        3pm
                                        IST on Saturdays, or on holidays. Shipments that may require additional time
                                        include those containing items under review or hazardous materials,
                                        oversized
                                        packages or where additional export documentation is required.</p>

                                    <p class="header7 p-color-cement" >The
                                        courier will be chosen according to your destination
                                        & the weight of the shipment. We're teamed up with the most trusted couriers
                                        such as
                                        DHL & DTDC.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-6 col-xs-12" id="price-cal-btn-margin">
                                    <a class="btn btn-price-cal-v-address"
                                       href="{{route('schedulePickup.Index')}}">Schedule a PickUp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="calc_load"></div>
                </div>

            </div>
        </div>

    </section>
    <section role="membership" style="margin-bottom: 50px" >
        <div class="container" id="courier-membership-plans">
            <div class="col-sm-12 col-md-12 no-padding price-cal-membership">
                <center>
                    <h1 class="header2 p-color-cement-dark">Membership Plans</h1>
                    <p class="header6 p-color-cement">Membership plan is free forever for courier service.
                    </p>
                </center>
                <div class="col-md-8 col-md-offset-2 col-xs-12 no-padding">
                    <table id="customers">
                        <tr>
                            <th class="col-md-4 col-xs-6"> <h3 class="header3 p-color-cement-dark">Features</h3> </th>
                            <th class="col-md-4 col-xs-6">
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indivdual.svg" alt=""> <br>
                                <h1 class="header1 p-mem-plans-box">Free</h1>
                                <h6 class="header6 text-forever">LIFELONG</h6>
                            </th>
                        <tr>
                        <tr>
                            <td id="special-items">Special Clearance Charges<a href="#" class="tooltipkey"
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
                                </a></td>
                            <td>
                                <h5 class="header6 p-color-cement">0.5 - 5 Kg -> ₹1392.4 </h5>
                                <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                            </td>
                        </tr>
                        <tr>
                            <td id="pickup-charges">
                                <h6 class="header6">
                                    Pickup Charges
                                    <a href="#" class="tooltipkey"
                                       title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                        <i class="fa fa-question-circle-o"></i>
                                    </a>
                                </h6>
                            </td>
                            <td><h5 class="header6 p-color-cement">40/Kg in Bangalore,</h5>
                                <h5 class="header6 p-color-cement">Min ₹100</h5>
                                <h5 class="header6 p-color-cement">50/Kg Outside Bangalore,</h5>
                                <h5 class="header6 p-color-cement">Min ₹200</h5>
                                <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <br>
                                <br>
                                <a href="{{route('schedulePickup.Index')}}" class=" btn-plans-individual-wholeseller">Schedule a Pickup</a>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="container" id="shop-membership-plans">
            <div class="col-sm-12 col-md-12 no-padding price-cal-membership">
                <center>
                    <h1 class="header2 p-color-cement-dark">Membership Plans</h1>
                    <p class="header6 p-color-cement">Our plans are tailor-made to help different categories of
                        <br> our customers shop frequently from India & save up on shipping costs along the way.
                    </p>
                </center>

                <div class="wrapper price-cal-desktop">
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li>
                            <a class="btn btn-membership-plans-monthly active" href="#Monthly">Monthly</a>
                        </li>
                        <li>
                            <a class="btn btn-membership-plans-yearly" href="#Yearly">Yearly</a>
                        </li>
                    </ul>
                    <section id="first-tab-group" class="tabgroup ">
                        <div class="col-md-12 col-sm-12 no-padding" id="Monthly">
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <div class="div-backgroud-price-cal">
                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                    </div>

                                    <div class="p-service-tax div-backgroud-price-cal1">
                                        <h6 class="header6 ">
                                            GST (Service Tax)
                                            <a href="#" class="tooltipkey" title="" data-original-title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="no-padding div-backgroud-price-cal">
                                        <h6 class="header6">
                                            Package Consolidation
                                            <a href="#" class="tooltipkey" title="" data-original-title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="div-backgroud-price-cal1 ">
                                        <h6 class="header6">
                                            Repackaging
                                            <a href="#" class="tooltipkey" title="" data-original-title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="div-backgroud-price-cal">
                                        <h6 class="header6 ">
                                            Photo Updates
                                            <a href="#" class="tooltipkey" title="" data-original-title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                <i class="fa fa-question-circle-o"></i></a>
                                        </h6>
                                    </div>
                                    <div class="no-padding" id="view-more-plans">
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Storage
                                                <a href="#" class="tooltipkey" title="" data-original-title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered &amp; thereby saving up the maximum through
                                                  consolidation. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h6 class="header6">
                                                Scanned Copies of Documents
                                                <a href="#" class="tooltipkey" title="" data-original-title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                E-mail Updates
                                                <a href="#" class="tooltipkey" title="" data-original-title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>

                                        <div class="div-backgroud-price-cal">
                                            <h6 class="header6">
                                                Discounts on Shipping
                                                <a href="#" class="tooltipkey" title="" data-original-title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Shipping Addresses
                                                <a href="#" class="tooltipkey" title="" data-original-title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-padding-sp-charges" style="background-color: #fafafb">
                                            <h6 class="header6">
                                                Special Clearance Charges
                                                <a href="#" class="tooltipkey" title="" data-original-title="Any Package which requires Special Handling
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
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Real Time Tracking
                                                <a href="#" class="tooltipkey" title="" data-original-title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>

                                        <div class="div-backgroud-price-cal" style="padding-bottom: 13px; padding-top: 13px">
                                            <h6 class="header6">
                                                Set Up a Local Hub for Your Business
                                                <a href="#" class="tooltipkey" title="" data-original-title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1" style="padding-top: 43px;padding-bottom: 43px;">
                                            <h6 class="header6">
                                                Pickup Charges
                                                <a href="#" class="tooltipkey" title="" data-original-title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>

                                        <div class="div-backgroud-price-cal" style="padding-top: 30px;padding-bottom: 30px;">
                                            <h6 class="header6">
                                                Package Returns
                                                <a href="#" class="tooltipkey" title="" data-original-title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Personal Shopper
                                                <a href="#" class="tooltipkey" title="" data-original-title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h6 class="header6" style="line-height: 22px">
                                                Receive your own Indian Virtual Shipping Address &amp; Personal Locker
                                                <a href="#" class="tooltipkey" title="" data-original-title="Receive your own FREE locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Receive Parcels
                                                <a href="#" class="tooltipkey" title="" data-original-title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-all-features view-more-feature">

                                        <label class="header6 view-feature-text" for="" id="view-more-feature">View
                                            All Features</label>
                                        <label class="header6 view-feature-text" for="" id="less-features">Less
                                            Features</label>

                                    </div>

                                </center>

                            </div>
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indivdual.svg" alt="">
                                    <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                    <h1 class="header1 p-mem-plans-box membership-text-margin">
                                        Free</h1>
                                    <h6 class="header6 text-forever">LIFELONG</h6>
                                    <div class=" div-backgroud-price-cal1 text-nochange-margin">
                                        <h5 class="header6  ">
                                            No Extra Charge</h5>
                                    </div>

                                    <div class="div-backgroud-price-cal div-package-charges">
                                        <h5 class="header6 ">
                                            ₹100 Per Package</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal1">
                                        <h5 class="header6 ">
                                            Free</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges1">
                                        <h5 class="header6 ">
                                            ₹50 Per Photo</h5>
                                    </div>
                                    <div class="no-padding" id="view-more-plans1">
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free upto 20 days
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                ₹100 Per Page
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 ">
                                                Country Discount
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Upto 5 addresses
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                            <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                            <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                            <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                            <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 12px;">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">40/Kg in Bangalore,</h5>
                                            <h5 class="header6 p-color-cement">Min ₹100</h5>
                                            <h5 class="header6 p-color-cement">50/Kg outside Bangalore,</h5>
                                            <h5 class="header6 p-color-cement">Min ₹200</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                            <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                            <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                7% of the item value (Min ₹200)
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 20px;padding-bottom: 20px;">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-more-feature">
                                        <label class="header6 view-feature-text" for="" id="view-more-feature1">View
                                            Features
                                        </label>
                                        <label class="header6 view-feature-text" for="" id="less-features1">Less
                                            Features
                                        </label>
                                    </div>

                                    <div class=" btn-plans-individual-wholeseller">
                                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">Get a Free
                                            Address</a>
                                    </div>

                                </center>
                            </div>
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/seller.svg" alt="">
                                    <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                    <h1 class="header1 p-mem-plans-box membership-text-margin">
                                        ₹700/-</h1>
                                    <h6 class="header6 text-forever ">PER MONTH</h6>
                                    <div class="div-backgroud-price-cal1 text-nochange-margin">
                                        <h5 class="header6">No Extra Charge</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges">
                                        <h5 class="header6 ">
                                            ₹50 Per Package</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal1">
                                        <h5 class="header6 ">
                                            Free</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges1">
                                        <h5 class="header6 ">
                                            ₹10 Per Photo
                                        </h5>
                                    </div>
                                    <div class="no-padding" id="view-more-plans2">
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free upto 30 days
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                ₹40 Per Page
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 ">
                                                Country Discount + 5% Discount
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Unlimited
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                            <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                            <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                            <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                            <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 12px;">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100</h5>
                                            <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                            <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                            <h5 class="header6 p-color-cement">Above 40 Kg-> ₹1000</h5>
                                        </div>

                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                            <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                            <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                7% of the item value (Min ₹200)
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 20px;padding-bottom: 20px;">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-more-feature">
                                        <label class="header6 view-feature-text" for="" id="view-more-feature2">View
                                            Features
                                        </label>
                                        <label class="header6 view-feature-text" for="" id="less-features2">Less
                                            Features
                                        </label>
                                    </div>
                                    <div class="btn btn-plans-seller">
                                        <a href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32">
                                            Request Callback
                                        </a>
                                    </div>
                                </center>

                            </div>
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/wholseller.svg" alt="">
                                    <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                    <h1 class="header1 p-mem-plans-box membership-text-margin">
                                        ₹1599/-</h1>
                                    <h6 class="header6 text-forever">PER MONTH</h6>
                                    <div class="div-backgroud-price-cal1 text-nochange-margin">
                                        <h5 class="header6 ">No Extra Charge</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges">
                                        <h5 class="header6">
                                            ₹10 Per Package</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal1">
                                        <h5 class="header6">
                                            Free
                                        </h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges1">
                                        <h5 class="header6">
                                            Free
                                        </h5>
                                    </div>
                                    <div class="no-padding" id="view-more-plans3">
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free upto 30 days
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                ₹40 Per Page
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                Country Discount + 7% Discount
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Unlimited
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                            <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                            <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                            <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                            <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 12px;">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100 </h5>
                                            <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                            <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                            <h5 class="header6 p-color-cement">Above 40 Kg -> ₹1000</h5>
                                        </div>

                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement"> Within 3 Days - ₹0</h5>
                                            <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                            <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                7% of the item value (Min ₹200)
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 20px;padding-bottom: 20px;">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-more-feature">
                                        <label class="header6 view-feature-text" for="" id="view-more-feature3">View
                                            Features</label>
                                        <label class="header6 view-feature-text" for="" id="less-features3">Less
                                            Features</label>
                                    </div>


                                    <div class=" btn-plans-individual-wholeseller">
                                        <a href="https://goo.gl/forms/vVviixAScNRIkegF3">Request Callback</a>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="no-padding" id="Yearly">
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <div class="div-backgroud-price-cal">
                                        <h4 class="header2 p-color-cement membership-feature-text-margin">
                                            Features
                                        </h4>
                                    </div>

                                    <div class="p-service-tax div-backgroud-price-cal1">
                                        <h6 class="header6 ">
                                            GST (Service Tax)
                                            <a href="#" class="tooltipkey"
                                               title="You do not have to pay any extra Sales Tax in India.
                    Our rates are inclusive of fuel surcharge and taxes.
                    However, you might have to check the import rules of your country
                    to know if you have to pay any fee to your courier at the
                    time of receving your package."><i
                                                    class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="no-padding div-backgroud-price-cal">
                                        <h6 class="header6">
                                            Package Consolidation
                                            <a href="#" class="tooltipkey"
                                               title="ShoppRe’s packing experts will
                    combine multiple packages into one, for saving the maximum in shipping costs.
                    This way, you only have to pay for the first half kg rate
                    (which is the most expensive rate) once. At times, some of
                    your packages might contain more than
                    1 item. While preparing your final shipment, we only charge per
                    package, not per item. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="div-backgroud-price-cal1 ">
                                        <h6 class="header6">
                                            Repackaging
                                            <a href="#" class="tooltipkey"
                                               title="We usually repackage all the necessary
                    items (items which arrive at our facility in
                    boxes with extra space left) in order to reduce the dimensional weight,
                    for FREE of cost (except Shoe Boxes which you will have
                    to choose separately to discard).">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="div-backgroud-price-cal">
                                        <h6 class="header6 ">
                                            Photo Updates
                                            <a href="#" class="tooltipkey"
                                               title="Basic Photos: We take up to 5 Basic photographs of all
                    your items. Additional Photos: You can request up to 10
                    Additional Photos (in case you want to some more details or if
                    you want to inspect your purchases in more detail).">
                                                <i class="fa fa-question-circle-o"></i></a>
                                        </h6>
                                    </div>
                                    <div class="no-padding" id="view-more-plans4">
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Storage
                                                <a href="#" class="tooltipkey"
                                                   title="Purchases are securely housed in our facility,
                    allowing time for multiple packages to be delivered & thereby saving up the maximum through
                    consolidation. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h6 class="header6">
                                                Scanned Copies of Documents
                                                <a
                                                    href="#" class="tooltipkey" title="
                    Documents scan: We scan documents ( for up to 2 kgs and below)
                    for a cost of ₹40/page (minimum ₹100).">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                E-mail Updates
                                                <a href="#" class="tooltipkey"
                                                   title="We charge an additional amount of ₹100 for
                    receiving a package which, can be classified as a document
                    (for up to 2 kg). Shipping charges for Documents slightly vary
                    from that of Non-documents. As of now this service is made available FREE of cost.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>

                                        <div class="div-backgroud-price-cal">
                                            <h6 class="header6">
                                                Discounts on Shipping
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
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Shipping Addresses
                                                <a
                                                    href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                    Choose the address to which you wish to send every time you create a ship request.">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-padding-sp-charges div-backgroud-price-cal" id="special-products">
                                            <h6 class="header6">
                                                Special Clearance Charges
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
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Real Time Tracking
                                                <a href="#" class="tooltipkey"
                                                   title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>

                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 13px">
                                            <h6 class="header6">
                                                Set Up a Local Hub for Your Business
                                                <a
                                                    href="#" class="tooltipkey" title="If you are a seller sourcing products
                    from India and sell globally, use Shoppre as your Hub in India.
                    Source the products from different parts of India,
                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1"
                                             style="padding-top: 43px;padding-bottom: 43px;">
                                            <h6 class="header6">
                                                Pickup Charges
                                                <a href="#" class="tooltipkey"
                                                   title="You can schedule pickup for your courier with us
                    from ANYWHERE in India!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>

                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 30px;padding-bottom: 30px;">
                                            <h6 class="header6">
                                                Package Returns
                                                <a href="#" class="tooltipkey"
                                                   title="Once your purchase(s) arrive at our facility, if you feel
                    any item is not as per your expectation or is damaged,
                    it can be exchanged/returned to the seller (as per the
                    seller's exchange/return policy). It will be couriered back to the seller by us; for which
                    you will be charged as per the domestic shipping rates.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Personal Shopper
                                                <a href="#" class="tooltipkey"
                                                   title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                    accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                    with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                    <i class="fa fa-question-circle-o"></i></a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h6 class="header6" style="line-height: 22px">
                                                Receive your own Indian Virtual Shipping Address & Personal Locker
                                                <a href="#" class="tooltipkey" title="Receive your own FREE locker space in
                    Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                    given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h6 class="header6">
                                                Receive Parcels
                                                <a href="#" class="tooltipkey"
                                                   title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-all-features view-more-feature" >
                                        <label class="header6 view-feature-text " for="" id="year-more-view">View
                                            All Features</label>
                                        <label class="header6 view-feature-text year-less-view" for=""
                                               id="year-less-view">Less
                                            Features</label>
                                    </div>

                                </center>

                            </div>
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indivdual.svg" alt="">
                                    <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                    <h1 class="header1 p-mem-plans-box membership-text-margin">
                                        Free</h1>
                                    <h6 class="header6 text-forever">LIFELONG</h6>
                                    <div class=" div-backgroud-price-cal1 text-nochange-margin">
                                        <h5 class="header6  ">
                                            No Extra Charge</h5>
                                    </div>

                                    <div class="div-backgroud-price-cal div-package-charges">
                                        <h5 class="header6 ">
                                            ₹100 Per Package</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal1">
                                        <h5 class="header6 ">
                                            Free</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges1">
                                        <h5 class="header6 ">
                                            ₹50 Per Photo</h5>
                                    </div>
                                    <div class="no-padding" id="view-more-plans5">
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free upto 20 days
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                ₹100 Per Page
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 ">
                                                Country Discount
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Upto 5 addresses
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                            <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                            <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                            <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                            <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 12px;">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">40/Kg in Bangalore,</h5>
                                            <h5 class="header6 p-color-cement">Min ₹100</h5>
                                            <h5 class="header6 p-color-cement">50/Kg outside Bangalore,</h5>
                                            <h5 class="header6 p-color-cement">Min ₹200</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                            <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                            <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                7% of the item value (Min ₹200)
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 20px;padding-bottom: 20px;">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-more-feature">
                                        <label class="header6 view-feature-text" for="" id="year-more-view1">View
                                            Features
                                        </label>
                                        <label class="header6 view-feature-text" for="" id="year-less-view1">
                                            Less Features
                                        </label>
                                    </div>

                                    <div class=" btn-plans-individual-wholeseller">
                                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">Get a Free
                                            Address</a>
                                    </div>

                                </center>
                            </div>
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/seller.svg" alt="">
                                    <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                    <h1 class="header1 p-mem-plans-box membership-text-margin">
                                        ₹6750/- </h1>
                                    <h6 class="header6 text-forever ">PER YEAR</h6>
                                    <div class="div-backgroud-price-cal1 text-nochange-margin">
                                        <h5 class="header6">No Extra Charge</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges">
                                        <h5 class="header6 ">
                                            ₹50 Per Package</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal1">
                                        <h5 class="header6 ">
                                            Free</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges1">
                                        <h5 class="header6 ">
                                            ₹10 Per Photo
                                        </h5>
                                    </div>
                                    <div class="no-padding" id="view-more-plans6">
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free upto 30 days
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                ₹40 Per Page
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 ">
                                                Country Discount + 5% Discount
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Unlimited
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                            <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                            <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                            <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                            <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 12px;">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100</h5>
                                            <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                            <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                            <h5 class="header6 p-color-cement">Above 40 Kg-> ₹1000</h5>
                                        </div>

                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                            <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                            <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                7% of the item value (Min ₹200)
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 20px;padding-bottom: 20px;">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-more-feature">
                                        <label class="header6 view-feature-text " for="" id="year-more-view2">View
                                            Features</label>
                                        <label class="header6 view-feature-text " for="" id="year-less-view2">Less
                                            Features</label>
                                    </div>

                                    <div class="btn btn-plans-seller">
                                        <a href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32">
                                            Request Callback
                                        </a>
                                    </div>
                                </center>

                            </div>
                            <div class="col-md-3 col-sm-6 no-padding div-monthly-plans">
                                <center>
                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/wholseller.svg" alt="">
                                    <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                    <h1 class="header1 p-mem-plans-box membership-text-margin">
                                        ₹19188/-</h1>
                                    <h6 class="header6 text-forever">PER YEAR</h6>
                                    <div class="div-backgroud-price-cal1 text-nochange-margin">
                                        <h5 class="header6 ">No Extra Charge</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges">
                                        <h5 class="header6">
                                            ₹10 Per Package</h5>
                                    </div>
                                    <div class="div-backgroud-price-cal1">
                                        <h5 class="header6">
                                            Free
                                        </h5>
                                    </div>
                                    <div class="div-backgroud-price-cal div-package-charges1">
                                        <h5 class="header6">
                                            Free
                                        </h5>
                                    </div>
                                    <div class="no-padding" id="view-more-plans7">
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free upto 30 days
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                ₹40 Per Page
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6">
                                                Country Discount + 7% Discount
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Unlimited
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                            <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                            <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                            <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                            <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-bottom: 13px; padding-top: 12px;">
                                            <h5 class="header6">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100 </h5>
                                            <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                            <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                            <h5 class="header6 p-color-cement">Above 40 Kg -> ₹1000</h5>
                                        </div>

                                        <div class="div-backgroud-price-cal">
                                            <h5 class="header6 p-color-cement"> Within 3 Days - ₹0</h5>
                                            <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                            <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                7% of the item value (Min ₹200)
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal"
                                             style="padding-top: 20px;padding-bottom: 20px;">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                        <div class="div-backgroud-price-cal1">
                                            <h5 class="header6 p-color-cement">
                                                Free
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="div-backgroud-price-cal1 view-more-feature">
                                        <label class="header6 view-feature-text " for="" id="year-more-view3">View
                                            Features</label>
                                        <label class="header6 view-feature-text " for="" id="year-less-view3">Less
                                            Features</label>
                                    </div>

                                    <div class=" btn-plans-individual-wholeseller">
                                        <a href="https://goo.gl/forms/vVviixAScNRIkegF3">Request Callback</a>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="wrapper price-cal-mobile">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="pill" class="btn btn-membership-plans-monthly" href="#M">Monthly</a>
                        </li>
                        <li>
                            <a data-toggle="pill" class="btn btn-membership-plans-yearly"  href="#Y">Yearly</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="M" class="tab-pane fade in active">
                            <table id="customers">
                                <tr>
                                    <th class="col-xs-5"> <h1 class="header1">Features</h1></th>
                                    <th col="col-xs-7">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indivdual.svg" alt=""> <br>
                                        <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                        <h1 class="header1 p-mem-plans-box membership-text-margin">Free</h1>
                                        <h6 class="header6 text-forever">LIFELONG</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <td>GST (Service Tax)<a href="#" class="tooltipkey"
                                                            title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i
                                                class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">No Extra Charge</h6></td>
                                </tr>
                                <tr>
                                    <td>Package Consolidation <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                    </td>
                                    <td><h6 class="p-color-cement header6">₹100 Per Package</h6></td>

                                </tr>
                                <tr>
                                    <td> Repackaging<a href="#" class="tooltipkey"
                                                       title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>Photo Updates <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹50 Per Photo</h6></td>
                                </tr>

                                <tr>
                                    <td>Storage<a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free upto 20 days</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Scanned Copies of Documents<a
                                            href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹100 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>E-mail Updates<a href="#" class="tooltipkey"
                                                         title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Discounts on Shipping <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6"> Country Discount</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Shipping Addresses<a
                                            href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Upto 5 addresses</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Special Clearance Charges<a href="#" class="tooltipkey"
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
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0.5 - 5 Kg -> ₹1392.4 </h5>
                                        <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                        <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                        <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                        <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Real Time Tracking<a href="#" class="tooltipkey"
                                                             title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Set Up a Local Hub for Your Business <a
                                            href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Pickup Charges<a href="#" class="tooltipkey"
                                                         title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">40/Kg in Bangalore,</h5>
                                        <h5 class="header6 p-color-cement">Min ₹100</h5>
                                        <h5 class="header6 p-color-cement">50/Kg outside Bangalore,</h5>
                                        <h5 class="header6 p-color-cement">Min ₹200</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Package Returns<a href="#" class="tooltipkey"
                                                          title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                        <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                        <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Personal Shopper <a href="#" class="tooltipkey"
                                                            title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> 7% of the item value <br> (Min ₹200)
                                        </h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Receive your own Indian Virtual Shipping Address & Personal Locker<a
                                            href="#" class="tooltipkey" title="Receive your own FREE locker space in
                                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Receive Parcels<a href="#" class="tooltipkey"
                                                          title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>

                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <label class="header6 mobile-view-more " for="">View
                                            All Features
                                        </label>
                                        <label class="header6 mobile-view-less" for="">Less
                                            Features
                                        </label>
                                    </td>
                                    <td>
                                        <br>
                                        <label class="header6 mobile-view-more" for="" >View
                                            Features
                                        </label>
                                        <label class="header6 mobile-view-less" for="">Less
                                            Features
                                        </label>
                                        <br>
                                        <br>
                                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                           class=" btn-plans-individual-wholeseller">Get a Free
                                            Address
                                        </a>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                            <table id="customers">
                                <tr>
                                    <th class="col-xs-5"> <h1 class="header1">Features</h1></th>
                                    <th col="col-xs-7">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/seller.svg" alt="">
                                        <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                        <h1 class="header1 p-mem-plans-box membership-text-margin">₹700/-</h1>
                                        <h6 class="header6 text-forever ">PER MONTH</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <td>GST (Service Tax)<a href="#" class="tooltipkey"
                                                            title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i
                                                class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">No Extra Charge</h6></td>
                                </tr>
                                <tr>
                                    <td>Package Consolidation <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                    </td>
                                    <td><h6 class="p-color-cement header6"> ₹50 Per Package</h6></td>

                                </tr>
                                <tr>
                                    <td> Repackaging<a href="#" class="tooltipkey"
                                                       title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>Photo Updates <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹10 Per Photo</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Storage<a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free upto 30 days</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Scanned Copies of Documents<a
                                            href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹40 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>E-mail Updates<a href="#" class="tooltipkey"
                                                         title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Discounts on Shipping <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6"> Country Discount + 5% Discount</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Shipping Addresses<a
                                            href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Special Clearance Charges<a href="#" class="tooltipkey"
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
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0.5 - 5 Kg -> ₹1392.4 </h5>
                                        <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                        <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                        <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                        <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Real Time Tracking<a href="#" class="tooltipkey"
                                                             title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Set Up a Local Hub for Your Business <a
                                            href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Pickup Charges<a href="#" class="tooltipkey"
                                                         title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100</h5>
                                        <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                        <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                        <h5 class="header6 p-color-cement">Above 40 Kg-> ₹1000</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Package Returns<a href="#" class="tooltipkey"
                                                          title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                        <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                        <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Personal Shopper <a href="#" class="tooltipkey"
                                                            title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> 7% of the item value <br> (Min ₹200)</h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Receive your own Indian Virtual Shipping Address & Personal Locker<a href="#"
                                                                                                             class="tooltipkey"
                                                                                                             title="Receive your own FREE locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Receive Parcels<a href="#" class="tooltipkey"
                                                          title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <label class="header6 mobile-view-more1" for="" >View
                                            All Features
                                        </label>
                                        <label class="header6 mobile-view-less1" for="">Less
                                            Features
                                        </label>
                                    </td>
                                    <td>
                                        <br>
                                        <label class="header6 mobile-view-more1" for="">View
                                            Features
                                        </label>
                                        <label class="header6 mobile-view-less1" for="">Less
                                            Features
                                        </label>
                                        <br>
                                        <br>
                                        <a href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32" class="btn btn-plans-seller">Request
                                            Callback</a>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                            <table id="customers">
                                <tr>
                                    <th class="col-xs-5"> <h1 class="header1">Features</h1></th>
                                    <th col="col-xs-7">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/wholseller.svg" alt="">
                                        <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                        <h1 class="header1 p-mem-plans-box membership-text-margin">₹1599/-</h1>
                                        <h6 class="header6 text-forever">PER MONTH</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <td>GST (Service Tax)<a href="#" class="tooltipkey"
                                                            title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i
                                                class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">No Extra Charge</h6></td>
                                </tr>
                                <tr>
                                    <td>Package Consolidation <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                    </td>
                                    <td><h6 class="p-color-cement header6"> ₹10 Per Package</h6></td>

                                </tr>
                                <tr>
                                    <td> Repackaging<a href="#" class="tooltipkey"
                                                       title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>Photo Updates <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Storage<a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free upto 30 days</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Scanned Copies of Documents<a
                                            href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹40 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>E-mail Updates<a href="#" class="tooltipkey"
                                                         title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Discounts on Shipping <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Country Discount + 7% Discount</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Shipping Addresses<a
                                            href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Special Clearance Charges<a href="#" class="tooltipkey"
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
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0.5 - 5 Kg -> ₹1392.4 </h5>
                                        <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                        <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                        <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                        <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Real Time Tracking<a href="#" class="tooltipkey"
                                                             title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Set Up a Local Hub for Your Business <a
                                            href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Pickup Charges<a href="#" class="tooltipkey"
                                                         title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100</h5>
                                        <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                        <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                        <h5 class="header6 p-color-cement">Above 40 Kg-> ₹1000</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Package Returns<a href="#" class="tooltipkey"
                                                          title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                        <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                        <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Personal Shopper <a href="#" class="tooltipkey"
                                                            title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> 7% of the item value <br> (Min ₹200)</h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Receive your own Indian Virtual Shipping Address & Personal Locker<a href="#"
                                                                                                             class="tooltipkey"
                                                                                                             title="Receive your own FREE locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Receive Parcels<a href="#" class="tooltipkey"
                                                          title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <label class="header6 mobile-view-more2" for="" >View
                                            All Features
                                        </label>
                                        <label class="header6 mobile-view-less2" for="">Less
                                            Features
                                        </label>
                                    </td>
                                    <td>
                                        <br>
                                        <label class="header6 mobile-view-more2" for="" >View
                                            Features
                                        </label>
                                        <label class="header6 mobile-view-less2" for="" >Less
                                            Features
                                        </label>
                                        <br>
                                        <br>
                                        <a href="https://goo.gl/forms/vVviixAScNRIkegF3"
                                           class=" btn-plans-individual-wholeseller">Request Callback</a>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="Y" class="tab-pane fade" style="padding-top: 30px">
                            <table id="customers">
                                <tr>
                                    <th class="col-xs-5"><h1 class="header1"> Features</h1></th>
                                    <th col="col-xs-7">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indivdual.svg" alt=""> <br>
                                        <h6 class="header6 p-mem-plans-box">For Individual Shoppers</h6>
                                        <h1 class="header1 p-mem-plans-box membership-text-margin">Free</h1>
                                        <h6 class="header6 text-forever">LIFELONG</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <td>GST (Service Tax)<a href="#" class="tooltipkey"
                                                            title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i
                                                class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">No Extra Charge</h6></td>
                                </tr>
                                <tr>
                                    <td>Package Consolidation <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                    </td>
                                    <td><h6 class="p-color-cement header6">₹100 Per Package</h6></td>

                                </tr>
                                <tr>
                                    <td> Repackaging<a href="#" class="tooltipkey"
                                                       title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>Photo Updates <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹50 Per Photo</h6></td>
                                </tr>

                                <tr>
                                    <td>Storage<a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free upto 20 days</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Scanned Copies of Documents<a
                                            href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹100 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>E-mail Updates<a href="#" class="tooltipkey"
                                                         title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Discounts on Shipping <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6"> Country Discount</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Shipping Addresses<a
                                            href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Upto 5 addresses</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Special Clearance Charges<a href="#" class="tooltipkey"
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
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0.5 - 5 Kg ->₹1392.4 </h5>
                                        <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                        <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                        <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                        <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Real Time Tracking<a href="#" class="tooltipkey"
                                                             title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Set Up a Local Hub for Your Business <a
                                            href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Pickup Charges<a href="#" class="tooltipkey"
                                                         title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">40/Kg in Bangalore,</h5>
                                        <h5 class="header6 p-color-cement">Min ₹100</h5>
                                        <h5 class="header6 p-color-cement">50/Kg outside Bangalore,</h5>
                                        <h5 class="header6 p-color-cement">Min ₹200</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Package Returns<a href="#" class="tooltipkey"
                                                          title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                        <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                        <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Personal Shopper <a href="#" class="tooltipkey"
                                                            title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> 7% of the item value <br> (Min ₹200)
                                        </h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Receive your own Indian Virtual Shipping Address & Personal Locker<a
                                            href="#" class="tooltipkey" title="Receive your own FREE locker space in
                                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>Receive Parcels<a href="#" class="tooltipkey"
                                                          title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>

                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <label class="header6 mobile-view-more " for="">View
                                            All Features
                                        </label>
                                        <label class="header6 mobile-view-less" for="">Less
                                            Features
                                        </label>
                                    </td>
                                    <td>
                                        <br>
                                        <label class="header6 mobile-view-more" for="" >View
                                            Features
                                        </label>
                                        <label class="header6 mobile-view-less" for="">Less
                                            Features
                                        </label>
                                        <br>
                                        <br>
                                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"
                                           class=" btn-plans-individual-wholeseller">Get a Free
                                            Address
                                        </a>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                            <table id="customers">
                                <tr>
                                    <th class="col-xs-5"><h1 class="header1"> Features</h1></th>
                                    <th col="col-xs-7">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/seller.svg" alt="">
                                        <h6 class="header6 p-mem-plans-box">For Global Sellers</h6>
                                        <h1 class="header1 p-mem-plans-box membership-text-margin">₹6750/-</h1>
                                        <h6 class="header6 text-forever ">PER YEAR</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <td>GST (Service Tax)<a href="#" class="tooltipkey"
                                                            title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i
                                                class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">No Extra Charge</h6></td>
                                </tr>
                                <tr>
                                    <td>Package Consolidation <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                    </td>
                                    <td><h6 class="p-color-cement header6"> ₹50 Per Package</h6></td>

                                </tr>
                                <tr>
                                    <td> Repackaging<a href="#" class="tooltipkey"
                                                       title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>Photo Updates <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹10 Per Photo</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Storage<a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free upto 30 days</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Scanned Copies of Documents<a
                                            href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹40 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>E-mail Updates<a href="#" class="tooltipkey"
                                                         title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Discounts on Shipping <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6"> Country Discount + 5% Discount</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Shipping Addresses<a
                                            href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Special Clearance Charges<a href="#" class="tooltipkey"
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
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0.5 - 5 Kg -> ₹1392.4 </h5>
                                        <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                        <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                        <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                        <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Real Time Tracking<a href="#" class="tooltipkey"
                                                             title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Set Up a Local Hub for Your Business <a
                                            href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Pickup Charges<a href="#" class="tooltipkey"
                                                         title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100</h5>
                                        <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                        <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                        <h5 class="header6 p-color-cement">Above 40 Kg-> ₹1000</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Package Returns<a href="#" class="tooltipkey"
                                                          title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                        <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                        <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Personal Shopper <a href="#" class="tooltipkey"
                                                            title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> 7% of the item value <br> (Min ₹200)</h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Receive your own Indian Virtual Shipping Address & Personal Locker<a href="#"
                                                                                                             class="tooltipkey"
                                                                                                             title="Receive your own FREE locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide1">
                                    <td>Receive Parcels<a href="#" class="tooltipkey"
                                                          title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <label class="header6 mobile-view-more1" for="" >View
                                            All Features
                                        </label>
                                        <label class="header6 mobile-view-less1" for="">Less
                                            Features
                                        </label>
                                    </td>
                                    <td>
                                        <br>
                                        <label class="header6 mobile-view-more1" for="">View
                                            Features
                                        </label>
                                        <label class="header6 mobile-view-less1" for="">Less
                                            Features
                                        </label>
                                        <br>
                                        <br>
                                        <a href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32" class="btn btn-plans-seller">Request
                                            Callback</a>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                            <table id="customers">
                                <tr>
                                    <th class="col-xs-5"><h1 class="header1"> Features</h1></th>
                                    <th col="col-xs-7">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/wholseller.svg" alt="">
                                        <h6 class="header6 p-mem-plans-box">For Wholesalers</h6>
                                        <h1 class="header1 p-mem-plans-box membership-text-margin">₹19188/-</h1>
                                        <h6 class="header6 text-forever">PER YEAR</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <td>GST (Service Tax)<a href="#" class="tooltipkey"
                                                            title="You do not have to pay any extra Sales Tax in India.
                                                   Our rates are inclusive of fuel surcharge and taxes.
                                                   However, you might have to check the import rules of your country
                                                   to know if you have to pay any fee to your courier at the
                                                   time of receving your package."><i
                                                class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">No Extra Charge</h6></td>
                                </tr>
                                <tr>
                                    <td>Package Consolidation <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a>
                                    </td>
                                    <td><h6 class="p-color-cement header6"> ₹10 Per Package</h6></td>

                                </tr>
                                <tr>
                                    <td> Repackaging<a href="#" class="tooltipkey"
                                                       title="We usually repackage all the necessary
                                                  items (items which arrive at our facility in
                                                  boxes with extra space left) in order to reduce the dimensional weight,
                                                  for FREE of cost (except Shoe Boxes which you will have
                                                   to choose separately to discard).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>Photo Updates <a href="#" class="tooltipkey"
                                                         title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Storage<a href="#" class="tooltipkey"
                                                  title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free upto 30 days</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Scanned Copies of Documents<a
                                            href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">₹40 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>E-mail Updates<a href="#" class="tooltipkey"
                                                         title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Discounts on Shipping <a href="#" class="tooltipkey"
                                                                 title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Country Discount + 7% Discount</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Shipping Addresses<a
                                            href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Special Clearance Charges<a href="#" class="tooltipkey"
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
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0.5 - 5 Kg -> ₹1392.4 </h5>
                                        <h5 class="header6 p-color-cement">5 - 10 Kg -> ₹3009</h5>
                                        <h5 class="header6 p-color-cement">10 - 15 Kg -> ₹5369</h5>
                                        <h5 class="header6 p-color-cement">Above 15 Kg -> ₹7729</h5>
                                        <span class="header8 p-color-cement">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Real Time Tracking<a href="#" class="tooltipkey"
                                                             title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Set Up a Local Hub for Your Business <a
                                            href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Pickup Charges<a href="#" class="tooltipkey"
                                                         title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">0 - 5 Kg -> ₹100</h5>
                                        <h5 class="header6 p-color-cement">5 -10 Kg -> ₹300</h5>
                                        <h5 class="header6 p-color-cement">10 - 40 Kg -> ₹500</h5>
                                        <h5 class="header6 p-color-cement">Above 40 Kg-> ₹1000</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Package Returns<a href="#" class="tooltipkey"
                                                          title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td>
                                        <h5 class="header6 p-color-cement">Within 3 Days - ₹0</h5>
                                        <h5 class="header6 p-color-cement">4 to 10 Days - ₹100</h5>
                                        <h5 class="header6 p-color-cement"> >10 Days - ₹400</h5>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Personal Shopper <a href="#" class="tooltipkey"
                                                            title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                            <i class="fa fa-question-circle-o"></i></a></td>
                                    <td><h6 class="p-color-cement header6"> 7% of the item value <br> (Min ₹200)</h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Receive your own Indian Virtual Shipping Address & Personal Locker<a href="#"
                                                                                                             class="tooltipkey"
                                                                                                             title="Receive your own FREE locker space in
                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr class="tr-hide2">
                                    <td>Receive Parcels<a href="#" class="tooltipkey"
                                                          title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                            <i class="fa fa-question-circle-o"></i>
                                        </a></td>
                                    <td><h6 class="p-color-cement header6">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <label class="header6 mobile-view-more2" for="" >View
                                            All Features
                                        </label>
                                        <label class="header6 mobile-view-less2" for="">Less
                                            Features
                                        </label>
                                    </td>
                                    <td>
                                        <br>
                                        <label class="header6 mobile-view-more2" for="" >View
                                            Features
                                        </label>
                                        <label class="header6 mobile-view-less2" for="" >Less
                                            Features
                                        </label>
                                        <br>
                                        <br>
                                        <a href="https://goo.gl/forms/vVviixAScNRIkegF3"
                                           class=" btn-plans-individual-wholeseller">Request Callback</a>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-top: 30px">
                    {{--<center>--}}
                    {{--<p class="header6 p-color-cement">Indian Seller, looking to widen your reach? Check out--}}
                    {{--our <a href="#">Indian Seller Membership Plans </a></p>--}}
                    {{--</center>--}}

                </div>
            </div>
        </div>
    </section>


@endsection

@section('js_script')
    <script src="{{env('AWS_CLOUD_FRONT')}}/js/jquery.magnific-popup.min.js"></script>
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
    <script src="{{env('AWS_CLOUD_FRONT')}}/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".select2").select2();
        });
    </script>


    <script src="{{env('AWS_CLOUD_FRONT')}}/js/validate.min.js"></script>
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
            $("#shipping1").validate({
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
                    var weight = $("input[name='weight1']").val();
                    var unit = $("input[name='unit']:checked").val();
                    var type = $("input[name='type']:checked").val();
                    var box_scale = $("input[name='scale']:checked").val();
                    var length = $("input[name='length1']").val();
                    var width = $("input[name='width1']").val();
                    var height = $("input[name='height1']").val();
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
                                    $('#final-price1').text('₹' + final_price);
                                    $('#actual-amount1').text('₹' + actual_amount);
                                    $('#discount1').text(discount);
                                    // $('#prices').html(html);
                                    $('#price-cal-slide-down1').slideDown();
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
            $("#form_quote1").validate({
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
    <script>
        $('#view-more-feature, #view-more-feature1, #view-more-feature2, #view-more-feature3').click(function () {
            $("#view-more-plans").slideDown();
            $("#view-more-plans1").slideDown();
            $("#view-more-plans2").slideDown();
            $("#view-more-plans3").slideDown();
            $("#view-more-feature").css('display', 'none');
            $("#view-more-feature1").css('display', 'none');
            $("#view-more-feature2").css('display', 'none');
            $("#view-more-feature3").css('display', 'none');
            $("#less-features").css('display', 'block');
            $("#less-features1").css('display', 'block');
            $("#less-features2").css('display', 'block');
            $("#less-features3").css({"display": "block"});
            $(".view-all-features").css('margin-top', '79px');

        });
        $("#less-features, #less-features1, #less-features2, #less-features3").click(function () {
            $("#view-more-plans").slideUp();
            $("#view-more-plans1").slideUp();
            $("#view-more-plans2").slideUp();
            $("#view-more-plans3").slideUp();
            $("#view-more-feature").css('display', 'block');
            $("#view-more-feature1").css('display', 'block');
            $("#view-more-feature2").css('display', 'block');
            $("#view-more-feature3").css('display', 'block');
            $("#less-features").css("display", 'none');
            $("#less-features1").css('display', 'none');
            $("#less-features2").css('display', 'none');
            $("#less-features3").css('display', 'none');
            $(".view-all-features").css('margin-top', '81px');

        });
        $("#year-more-view, #year-more-view1, #year-more-view2, #year-more-view3").click(function () {
            $("#view-more-plans4").slideDown();
            $("#view-more-plans5").slideDown();
            $("#view-more-plans6").slideDown();
            $("#view-more-plans7").slideDown();
            $("#year-more-view").css('display', 'none');
            $("#year-more-view1").css('display', 'none');
            $("#year-more-view2").css('display', 'none');
            $("#year-more-view3").css('display', 'none');
            $("#year-less-view").css('display', 'block');
            $("#year-less-view1").css('display', 'block');
            $("#year-less-view2").css('display', 'block');
            $("#year-less-view3").css({"display": "block"});
            $(".view-all-features").css('margin-top', '79px');

        });
        $("#year-less-view, #year-less-view1, #year-less-view2, #year-less-view3").click(function () {
            $("#view-more-plans4").slideUp();
            $("#view-more-plans5").slideUp();
            $("#view-more-plans6").slideUp();
            $("#view-more-plans7").slideUp();
            $("#year-more-view").css('display', 'block');
            $("#year-more-view1").css('display', 'block');
            $("#year-more-view2").css('display', 'block');
            $("#year-more-view3").css('display', 'block');
            $("#year-less-view").css("display", 'none');
            $("#year-less-view1").css('display', 'none');
            $("#year-less-view2").css('display', 'none');
            $("#year-less-view3").css('display', 'none');
            $(".view-all-features").css('margin-top', '81px');

        });


        $('.mobile-view-more').click(function () {
            $(".tr-hide").slideDown();
            $(".mobile-view-more").css('display', 'none');
            $(".mobile-view-less").css('display', 'block');

        });
        $(".mobile-view-less").click(function () {
            $(".tr-hide").slideUp();
            $(".mobile-view-more").css('display', 'block');
            $(".mobile-view-less").css('display', 'none');


        });
        $('.mobile-view-more1').click(function () {
            $(".tr-hide1").slideDown();
            $(".mobile-view-more1").css('display', 'none');
            $(".mobile-view-less1").css('display', 'block');

        });
        $(".mobile-view-less1").click(function () {
            $(".tr-hide1").slideUp();
            $(".mobile-view-more1").css('display', 'block');
            $(".mobile-view-less1").css('display', 'none');


        });
        $('.mobile-view-more2').click(function () {
            $(".tr-hide2").slideDown();
            $(".mobile-view-more2").css('display', 'none');
            $(".mobile-view-less2").css('display', 'block');

        });
        $(".mobile-view-less2").click(function () {
            $(".tr-hide2").slideUp();
            $(".mobile-view-more2").css('display', 'block');
            $(".mobile-view-less2").css('display', 'none');


        });

    </script>
    <script>
        $(document).ready(function () {
            $("div.shop-ship-menu>div.list-group>a").click(function (e) {
                debugger;
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.shop-ship-tab>div.shop-ship-tab-content").removeClass("active");
                $("div.shop-ship-tab>div.shop-ship-tab-content").eq(index).addClass("active");
                if (index === 1) {
                    $('#courier-membership-plans').css('margin-bottom', '50px');
                    $('#courier-membership-plans').show();
                    $('#shop-membership-plans').hide();
                }
                else {
                    $('#courier-membership-plans').hide();
                    $('#shop-membership-plans').show();
                }

            });
        });
    </script>
@endsection
