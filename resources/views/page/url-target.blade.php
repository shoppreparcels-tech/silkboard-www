{{--@extends('layout-url-landing')--}}
@extends('layout')
@section('title', $title )
@section('description', $description)
@section('keywords', $keywords)

@section('css_style')

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name" : "International shipping from india",
          "url": "https://www.shoppre.com",
          "alternateName": "ShoppRe.com",
          "logo": "https://www.shoppre.com/img/logo.png",
          "sameAs" : [
            "https://www.facebook.com/goshoppre/",
            "https://twitter.com/Go_Shoppre",
            "https://www.linkedin.com/company/shoppre.com",
            "https://www.instagram.com/shoppre_official"
                     ]
          }
    </script>


    <style>
        .carousel{
            margin-top: 20px;
        }
        .carousel-item{
            text-align: center;
            min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
        }
        .bs-example{
            margin: 20px;
        }
    </style>

    <link rel="stylesheet" href="{{asset('css/custom/bulk_url.css')}}?{{Config::get('app.last_commit_hash')}}">

@endsection

@section('content')

    <div id="non-document">
        <section class="">
            <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">

                <!--Shop From India & Ship To destination-->
                <div class="col-md-12 col-xs-12 col-sm-12 background1" >
                    <div class="background01">
                        <div class="container-fluid m-t-10 "><br><br>
                            <div class="col-md-12 col-xs-12 pad-t-20">
                                <div class="col-md-12 col-xs-12 col-sm-12" style="padding-bottom: 2%">
                                    <p style="color: #FAFAFB;font-size: 40px;
                                text-align: center;
                                padding-bottom: 30px;padding-top: 5%;
                                font-weight: 700;font-family: inherit" >
                                        Shop From {{ucfirst(trans($source))}} & Ship To {{ucfirst(trans($destination))}} </p>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 sectiom-view-mobile-none" style="padding-bottom: 2%">
                                    <p style="color: #C7A82B;font-size: 40px;
                                padding-left: 25%; padding-right: 25%;
                                padding-bottom: 30px;text-align: center;
                                font-weight: 700;font-family: inherit" >
                                        Shipping from {{ucfirst(trans($source))}} to {{ucfirst(trans($destination))}}.
                                        ShoppRe offers DOOR TO DOOR courier to {{ucfirst(trans($destination))}} from ANY part of
                                        {{ucfirst(trans($source))}}. </p>
                                </div>
                                <div style="text-align: center;padding-bottom: 5%">
                                    <a href="{{route('customer.login')}}" target="_blank">
                                        <button type="submit" align="center" class="sign-up-in-bulkurl-button"  style="">
                                            <h4> <b>
                                                Sign Up &nbsp;
                                                <i class="fa fa-long-arrow-right"></i>
                                                </b>
                                            </h4>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Estimate Your Shipping Cost From source To destination-->
                <div class="col-md-12 col-xs-12 col-sm-12 background3">
                    <section style="padding: 15px 0 0px;text-align: center;">
                        <div >
                            <span style=" text-align: center;font-family: Montserrat-SemiBold;
                                font-size: 45px; color: #75B2AF;">
                                Estimate Your Shipping Cost From {{ucfirst(trans($source))}} To {{ucfirst(trans($destination))}}
                            </span>
                        </div>
                    </section>
                    <div>
                        <div class="container-fluid"><br>
{{--                            <div class="col-md-12 col-xs-12 col-sm-12">--}}
{{--                                <span style="padding-bottom: 30px;text-align: center;font-family: Montserrat-SemiBold;font-size: 45px;color: #75B2AF;" >--}}
{{--                                    Estimate Your Shipping Cost From {{ucfirst(trans($source))}} To {{ucfirst(trans($destination))}} </span>--}}
{{--                            </div>--}}
                            <div class="col-md-12 col-xs-12 col-sm-12 shiping-cal-mob">
                                <div class="col-md-5 mar-l-0-mobile" style="margin-left: 7%;">
                                    <div class="col-md-12">
                                        <div class="calculator cal_block_new cal_block_new_mob"  style="background-color: #7ACCD7">
                                            <p class="text-white"
                                               style="text-align: center;font-family: Montserrat-Medium;font-size: 25px;letter-spacing: 0;font-weight: 600;">SHIPPING CALCULATOR</p>
                                            <span id="calc_error">Sorry! No delivery options available in requested country. Please
                                                contact our support team for assistance.</span>
                                            <form class="calc-form" id="shipping">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="col-sm-12 "
                                                           style="color: #323439;font-family: Montserrat-Medium;font-size: 18px;">
                                                        Which Country Do You Want To Ship?</label>
                                                    <div class="col-sm-12 country-drop-down">
                                                        <select class="form-control select2 destination-place-dropdown" name="country">
                                                            <option value="">Select Country</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}"{{$country->name == $destination ? 'selected' : ""}}>
                                                                    {{$country->name}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" style="color: #323439;font-family: Montserrat-Medium;
                                                            font-size: 18px;
                                                            width: 388px;height: 32px;
                                                            padding-top: 3%;">
                                                            What is your package type?</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="radio">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="type" value="doc">
                                                                <span style="color:#5C5C5F">
                                                        Document
                                                    </span>
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="type" value="nondoc" checked>
                                                                <span style="color:#5C5C5F">
                                                    Non Document
                                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label">How much does your package weigh?</label>
                                                    <div class="col-sm-6 ">
                                                        <input type="number" class="weigh-inputbox" value="1" name="weight"
                                                               placeholder="Enter Weight">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="radio">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="unit" value="kg" checked>
                                                                <span style="color:#5C5C5F">
                                                        Kilograms
                                                    </span>
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="unit" value="lbs">
                                                                <span style="color:#5C5C5F">
                                                        Pounds
                                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    {{--                                        <div class="clearfix"></div>--}}
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" style="top: 8px;">What are the dimensions of
                                                        your package?
                                                    </label>
                                                    <div class="col-sm-12">
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
                                                    {{--                                        <div class="clearfix"></div>--}}
                                                </div>
                                                <div class="form-group smallboxs">
                                                    <div class="col-sm-2 col-md-2 col-xs-4">
                                                        <input type="text" class="form-control size-input pad-l-35" placeholder="L" name="length">
                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-xs-4">
                                                        <input type="text" class="form-control size-input pad-l-35" placeholder="W" name="width">
                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-xs-4">
                                                        <input type="text" class="form-control size-input pad-l-35" placeholder="H" name="height">
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                                        {{--                                            <input type="text" class="form-control size-input" name="height">--}}
                                                        <img class="parcel-img" src="{{env('AWS_CLOUD_FRONT')}}/img/parcelsample.png">
                                                    </div>
                                                    {{--                                        <div class="clearfix"></div>--}}
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="col-sm-12 shipment-cost-btn">
                                                    <button type="submit" class="button-shipping-rate button-shipping-rate-mob">
                                                    <span class="text-in-button">
                                                        GET UPFRONT SHIPPING RATES
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                            <div id="ship_result" class="calc-result">
                                                <div class="mar-t-10">
                                                    <h4 class="text-red margin_cost">ESTIMATED SHIPPING COST*</h4>
                                                </div>
                                                <p class="info">Best carrier will be automatically chosen according to your country
                                                    and weight of shipment. We use trusted courier services like DHL,
                                                    FedEx and DTDC.</p>
                                                <div class="result table-responsive">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td class="bg-white " style="color: #0a0a0a">
                                                                <span id="ship_time"></span> Business Days
                                                                <span class="text-red">**</span></td>
                                                            <td class="chargers-design">
                                                                <i class="fa fa-rupee"></i>
                                                                <span id="ship_cost" class="values"></span>
                                                            </td>
                                                            <td class="chargers-design">
                                                                <span class="striked chargers-design">
                                                                    <i class="fa fa-rupee"></i>
                                                                    <span id="ship_oldcost" class="values"></span>
                                                                </span>
                                                            </td>
                                                            <td class="discount chargers-design">
                                                                <span id="ship_disc" style="color: black;"></span>
                                                                    % OFF
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <ul class="points">
                                                    <li><span class="text-red">*</span> The chargeable weight is always the greater of
                                                        the two: Volumetric or the Actual weight.
                                                    </li>
                                                    <li><span class="text-red">*</span> The rates displayed are INCLUSIVE of the
                                                        fuel surcharge and taxes within India.
                                                    </li>
                                                    <li><span class="text-red">*</span> You may need to pay duties or tax when your
                                                        shipment arrives, as per the import law of the receiving country.
                                                    </li>
                                                    <li><span class="text-red">*</span> Excludes oversized and palletized shipments,
                                                        and special products (liquids, homemade food, etc.)
                                                    </li>
                                                    <li><span class="text-red">**</span> After dispatch from Shoppre facility. Does
                                                        not apply to ship requests made after 3pm IST on Saturdays, or on holidays.
                                                        Shipments that may require additional time include those containing items
                                                        under review or hazardous materials, oversized packages or where additional
                                                        export documentation is required.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="calc_load"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mar-l-0-mobile">
                                    <div class="col-md-12">
                                        <div class="cal_block_new cal_block_new_mob" style="background-color: #FAFAFB;     padding: 20px 40px 31px;">
                                            {{--                                <table class="table table-striped">--}}
                                            {{--                                    <h3 class="">Pricing details from {{ucfirst(trans($source))}}--}}
                                            {{--                                        to {{ucfirst(trans($destination))}} For Non Documents Products</h3>--}}
                                            <p class=""
                                               style="
                                        color: #323439;
                                        text-align: center;
                                        font-family: Montserrat-Bold;font-size: 25px;
                                        letter-spacing: 0;font-weight: 600;">
                                                Price For Non-Document Package</p>
                                            <br>

                                            @foreach($prices_non_doc as $price)
                                                <div class="non-doc-pricing-box">
                                                    <div class="col-md-6 col-sm-6 col-xs-6 non-doc-price" style="padding-top: 2%;padding-left: 20%;">
                                                        <span> ₹{{$price->amount}} </span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 non-doc-weight" style="padding-top: 2%;">
                                                        <span>{{$price->min}} - {{$price->max}} Kg </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="cal_block_new cal_block_new_mob" style="background-color: #7ACCD7;     padding: 20px 40px 8px;">
                                            <p class=""
                                               style="
                                        color: #FAFAFC;
                                        text-align: center;
                                        font-family: Montserrat-Bold;font-size: 25px;
                                        letter-spacing: 0;font-weight: 600;">
                                                Price For Document Package</p>
                                            <br>

                                            @foreach($prices_non_doc as $price)
                                                <div class="doc-pricing-box">
                                                    <div class="col-md-6 col-sm-6 col-xs-6 non-doc-price"
                                                         style="padding-top: 2%;padding-left: 20%; font-weight: 600;">
                                                        <span> ₹{{$price->amount}} </span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 non-doc-weight"
                                                         style="padding-top: 2%; font-weight: 600;">
                                                        <span>{{$price->min}} - {{$price->max}} Kg </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Shoppre’s Consolidation Service-->
                <div class="col-md-12 col-xs-12 col-sm-12 background4">
                    <section class="service-block">
                        <div class="">
                            <span
                                    style=" text-align: center;font-family: Montserrat-SemiBold;
                                font-size: 45px; color: #75B2AF;">
                                Shoppre's consolidation service
                            </span>
                            <p style="line-height: 25px; font-family: Montserrat;">Combine your packages from multiple stores to one tracking number,<br>
                                and save upto 60% - 80% on shipping rates!</p>
                            <p style="font-style: italic;font-size: 15px; font-family: Montserrat">For example:</p>
                            <div class="col-sm-2" style="padding-top: 10%">
                                <div class="">
                                    <h4 class="shipping-directly-section">Shipping Directly From Most Sellers</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service-section">
                                    <div class="example">
                                        <img class="consolidation-image" src="{{env('AWS_CLOUD_FRONT')}}/img/consolid1.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service-section">
                                    <div class="example">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/consolid2.png" style="max-width: 78%;">
                                    </div>
                                    <p class="result"><strong>Shipping all the items in ONE package:<br>
                                            Total Shipping Costs : $15</strong></p>
                                </div>
                            </div>
                            <div class="col-sm-2" style="padding-top: 10%">
                                <div class="">
                                    <h4 class="shipping-directly-section">
                                        Shipping Through
                                        <a href="{{route('home')}}"">
                                            <b style="color: #75b2af;font-size: larger;">
                                                ShoppRe.com</b>
                                        </a>
                                    </h4>
                                </div>
                                <div style="text-align: center;padding-bottom: 5%">
                                    <a href="{{route('ifs.index')}}" target="_blank">
                                        <button type="submit" align="center" class="know-more-button"  style="">
                                            <h4 style="margin-top: 5px;"><b> Know More</b></h4>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </section>
                </div>

                <!--Shop Through ShoppRe.com-->
                <div class="col-md-12 col-xs-12 col-sm-12 background5">
                    <section class="service-block">
                    <div style="padding-bottom: 2%;">
                        <span style=" text-align: center;font-family: Montserrat-SemiBold;
                             font-size: 45px; color:#75B2AF;">
                            What People Normally Shop Through <b>ShoppRe.com</b>
                        </span>
                    </div>
                        <div class="col-md-12 shiping-cal-mob">
                            <div class="col-md-7 col-xs-12 mar-l-0-mobile pad-10p" >

                            <!-- Jssor Slider Begin -->
                                <!-- You can move inline styles to css file or css block. -->
                                <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

                                    <!-- Loading Screen -->
                                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                            background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                                        </div>
                                        <div style="position: absolute; display: block;
                                        background:  no-repeat center center;
                                            top: 0px; left: 0px;width: 100%;height:100%;">
                                        </div>
                                    </div>

                                    <!-- Slides Container -->
                                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
                                        <div>
                                            <img u="image" src="/img/images/womenCloth.png" />
                                        </div>
                                        <div>
                                            <img u="image" src="/img/images/handcraft.png" />
                                        </div>
                                        <div>
                                            <img u="image" src="/img/images/babyProduct.png" />
                                        </div>
                                        <div>
                                            <img u="image" src="/img/images/worship.png" />
                                        </div>
                                    </div>

                                    <!-- Bullet Navigator Skin Begin -->
                                    <style>
                                        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                                            background: url('/img/images/b05.png') no-repeat;
                                            overflow: hidden;
                                            cursor: pointer;
                                        }

                                        .jssorb05 div {
                                            background-position: -7px -7px;
                                        }

                                        .jssorb05 div:hover, .jssorb05 .av:hover {
                                            background-position: -37px -7px;
                                        }

                                        .jssorb05 .av {
                                            background-position: -67px -7px;
                                        }

                                        .jssorb05 .dn, .jssorb05 .dn:hover {
                                            background-position: -97px -7px;
                                        }
                                    </style>
                                    <!-- bullet navigator container -->
                                    <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
                                        <!-- bullet navigator item prototype -->
                                        <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
                                    </div>
                                    <!-- Bullet Navigator Skin End -->
                                    <!-- Arrow Navigator Skin Begin -->
                                    <style>
                                        .jssora12l, .jssora12r, .jssora12ldn, .jssora12rdn {
                                            position: absolute;
                                            cursor: pointer;
                                            display: block;
                                            background: url('/img/images/a12.png') no-repeat;
                                            overflow: hidden;
                                        }

                                        .jssora12l {
                                            background-position: -16px -37px;
                                        }

                                        .jssora12r {
                                            background-position: -75px -37px;
                                        }

                                        .jssora12l:hover {
                                            background-position: -136px -37px;
                                        }

                                        .jssora12r:hover {
                                            background-position: -195px -37px;
                                        }

                                        .jssora12ldn {
                                            background-position: -256px -37px;
                                        }

                                        .jssora12rdn {
                                            background-position: -315px -37px;
                                        }
                                    </style>
                                    <!-- Arrow Left -->
                                    <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 123px; left: 0px;">
                                    </span>
                                    <!-- Arrow Right -->

                                    <span u="arrowright" class="jssora12r"
                                          style="width: 30px; height: 46px; top: 123px; right: 0px">
                                    </span>
                                    <!-- Arrow Navigator Skin End -->
                                </div>
                                <!-- Jssor Slider End -->
                            </div>
                            <div class="col-md-5 col-xs-12 mar-l-0-mobile shop-cat-div shop-cat-div-mob" >
                                <center>
                                    <div class="col-md-12" style="padding: 15px 0px 2px 0px;">
                            <span style="font-family: Montserrat-SemiBold;font-size: 20px;">
                                <b>Clothes for Women</b>
                            </span>
                                        <br>
                                        <span style="font-family: Montserrat-Regular">(Kurta.Saree, Dresses, Ethnic Wear)</span>
                                    </div>
                                    <div class="col-md-12" style="padding: 3px 0px 2px 0px;">
                            <span style="font-family: Montserrat-SemiBold;font-size: 20px;">
                                <b>
                                    Handicrafts Items </b>
                                 </span>
                                        <br>
                                        <span style="font-family: Montserrat-Regular">
                                (Artificial Jewellery,Wall Decoratives, Paintings or Leather Goods)
                            </span>
                                    </div>
                                    <div class="col-md-12" style="padding: 3px 0px 2px 0px;">
                            <span style="font-family: Montserrat-SemiBold;font-size: 20px;">
                                <b>
                                    Baby Products
                                </b>

                            </span> <br>
                                        <span style="font-family: Montserrat-Regular">
                                (Clothes, Toys, Shoes) </span>
                                    </div>
                                    <div class="col-md-12" style="padding: 3px 5px 15px 5px;">
                            <span style="font-family: Montserrat-SemiBold;font-size: 20px;">
                                <b>
                                    Worship Related Items </b>
                            </span> <br>
                                        <span style="font-family: Montserrat-Regular">
                                    (Rangoli Stencils, Puja Thali Set. Diya or Kundan Plastic Rangoli)
                            </span>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </section>
                </div>

                <!--Personal shopper service-->
                <div class="col-md-12 col-xs-12 col-sm-12 background6">
                    <section class="service-block" >
                        <div>
                        <span
                        style=" text-align: center;font-family: Montserrat-SemiBold;
                                font-size: 45px; color:#75B2AF;">
                                    Use Personal Shopper Service To Purchase Your Items</b>
                        </span>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="mar-b-10px">
                                    <img class="personal-shopper-img personal-shopper-img-desktop ps-img-mar" src="/img/images/familyShopping.png">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12 personal-shopper-content-section personal-shopper-content-section-mob">
                                <div style="text-align: initial;">
                                    <p style="font-family: Montserrat-SemiBold;
                            font-size: 30px;    line-height: 35px;">
                                        Your Personal Shopper
                                    </p>
                                    <span>Simply provide us the product and Seller details,
                        our Personal Shopper will purchase the item on your behalf,
                        using our Indian Local Card!</span>
                                </div>
                                <br>
                                <div style="text-align: initial;">
                                    <p style="font-family: Montserrat-SemiBold;
                            font-size: 30px;     line-height: 35px;">
                                        Gift Your Loved Ones Living In India
                                    </p>
                                    <span>
                        Simply sign up and use Shoppre’s Personal Shopper to
                        buy your favorite product from ANY Indian website,
                        and gift your loved ones in India!
                    </span>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <a href="{{route('ifs.landing')}}" target="_blank">
                                        <button type="submit" class="signup-free">
                                                <span class="text-in-button">
                                                   <h4> <b> Assisted Purchase </b></h4>
                                                </span>
                                        </button>
                                    </a>
                                </div>
                                <br> <br> <br>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Additional Charge-->
                <div class="col-md-12 col-xs-12 col-sm-12 background7 sectiom-view-mobile-none">
                    <div class="container-fluid">
                        <section class="service-block">
                            <div class="container" style="margin-left:8%;">

                                <div class="col-md-3 charge-box"
                                     style="margin: 5% -3% 2% 5%;
                                border-right-color: #92d9db;;
                                border-right-width: 1px;">
                                    <p style="padding-top: 5%">
                                        &nbsp;
                                    </p>
                                    <div class="col-md-12 aditional-charges padd-left-0">
                                        <div class="col-md-6 padd-left-0 font-w-600">
                                            <div class="col-md-1 padd-left-0"> <span>1.</span></div>
                                            <div class="col-md-5 padd-left-0"> <span> Shipping Address </span> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span>Unlimited</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 aditional-charges padd-left-0">
                                        <div class="col-md-6 padd-left-0 font-w-600">
                                            <div class="col-md-1 padd-left-0"> <span>2.</span></div>
                                            <div class="col-md-5 padd-left-0"> <span> Package Return </span> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span>FREE</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padd-left-0" style="margin-bottom: 16%;margin-top: 10%;">
                                        <div class="col-md-6 padd-left-0 font-w-600">
                                            <div class="col-md-1 padd-left-0"> <span>3.</span></div>
                                            <div class="col-md-5 padd-left-0"> <span> Indian Virtual Address</span> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span>FREE</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 charge-box"
                                     style="margin: 5% -2% 2% 3%;
                                        border-right-color: #92d9db;
                                        border-right-width: 1px;
                                        border-left-color: #92d9db;
                                        border-left-width: 1px">
                                    <p style="padding-top: 5%; font-size: 20px; ">
                                        Additional Charges
                                    </p>
                                    <div class="col-md-12 padd-left-0" style="margin: 7% 0 5% 0;">
                                        <div class="col-md-6 padd-left-0 font-w-600">
                                            <div class="col-md-1 padd-left-0"> <span>4.</span></div>
                                            <div class="col-md-5 padd-left-0"> <span> Photos </span> </div>
                                        </div>
                                        {{--                                <span>4. Photos</span>--}}

                                        <div class="col-md-6">
                                            <span style="text-align: right;">5 ₹/ Photo</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padd-left-0" style="margin: 18% 0 5% 0;">
                                        <div class="col-md-6 padd-left-0 font-w-600">
                                            <div class="col-md-1 padd-left-0"> <span>5.</span></div>
                                            <div class="col-md-5 padd-left-0"> <span> Storage </span> </div>
                                        </div>
                                        {{--                                <span>5. Storage</span>--}}
                                        <div class="col-md-6">
                                            <span style="text-align: right;">30 Days</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padd-left-0" style="margin: 18% 0 5% 0;">
                                        <div class="col-md-8 padd-left-0 font-w-600">
                                            <div class="col-md-1 padd-left-0"> <span>6.</span></div>
                                            <div class="col-md-7 padd-left-0"> <span> Consolidation </span> </div>
                                        </div>
                                        {{--                                <span>6. Consolidation</span>--}}
                                        <div class="col-md-4">
                                            <span style="text-align: right;">10 ₹</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin: 0% 0% 8% 0%;">
                                        <a href="https://tawk.to/chat/58dab24ff97dd14875f5a8a9/default" target="_blank">
                                            <button type="submit" class="signup-free">
                                            <span class="text-in-button">
                                                <h3 style="margin-top: 5px;"><b>Live Chat</b></h3>
                                            </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3 charge-box"
                                     style="margin: 5% 0% 2% 2%;
                                    border-left-color: #92d9db;;
                                    border-left-width: 1px;">
                                    <p style="padding-top: 5%">
                                        &nbsp;
                                    </p>
                                    <div class="col-md-12 aditional-charges padd-left-0">
                                        <div class="col-md-12 padd-left-0 font-w-600" style="text-align: start; margin-bottom: 3px;">
                                            <span>7. Personal Shopper</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 aditional-charges" style="margin-top: 1%">
                                        <div class="col-md-12 padd-left-0" style="margin-top: 8%; text-align: start;line-height: 25px;">
                                            <span>Assisted Purchase (By ShoppRe) = 7% Of The Item Value (Min.200₹)</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 aditional-charges" style="margin-top: 6%;">
                                        <div class="col-md-12 padd-left-0" style="margin-bottom: 4%; text-align: start; line-height: 25px;">
                                            <span>Self Purchase (Cash On Delivery) = 10% Of The Item Value (Min. 200₹)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!--Restricted Items-->
                <div class="col-md-12 col-xs-12 col-sm-12" style="padding-bottom: 5%">
                    <div class="container-fluid">
                        <section class="service-block">
                            <div class="col-md-12 col-xs-12 col-sm-12 ">
                                <span
                                        style=" text-align: center;
                                        font-family: Montserrat-SemiBold;font-size: 45px;
                                        color:#75B2AF;">
                            Restricted Items
                        </span>
                            </div>

                            <div class="col-md-12 col-xs-12 col-sm-12 restric-pad">
                                <p style="line-height: 25px">Homemade items (Pickle, Sweets or Snacks), Perfumes,

                                    High Value Gadgets, Alcohol & Coffee.</p>
                            </div>

                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <a href="https://ship.shoppre.com/prohibited-items-what-you-cannot-ship-internationally-from-india/" target="_blank">
                                    <button type="submit" class="signup-free">
                                                <span class="text-in-button">
                                                   <h3 style="margin-top: 5px;"><b>Learn More</b></h3>
                                                </span>
                                    </button>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </section>
    </div>


    <br>

{{--    <center>    <div id="JdBadge" data-s1="b2" data-s2="Y3RyY3QlNDAlNDAlNDAwODBQWFg4MCUyQlhYODAlMkIxNzA4MjIxMDQ2MTAlMkJTNEY0"></div>--}}
{{--        <div id="JdBadgeDest"></div><script type="text/javascript" src="https://www.justdial.com/Jd-Widget"></script>--}}
{{--    </center>--}}


@endsection

@section('js_script')
    <!-- Select2 -->

    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
                //Fade
                { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../../../js/jssor.js"></script>
    <script type="text/javascript" src="../../../js/jssor.slider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){$("#shipping").validate({rules:{country:{required:!0},weight:{required:!0},unit:{required:!0}},messages:{country:{required:"Please select country"},weight:{required:"Please enter weight to calculate."},unit:{required:"Please select unit of weight."}},submitHandler:function(e){var a=$("select[name='country']").val(),i=$("input[name='weight']").val(),t=$("input[name='unit']:checked").val(),n=$("input[name='type']:checked").val(),r=$("input[name='length']").val(),s=$("input[name='width']").val(),u=$("input[name='height']").val(),d=$("input[name=_token]").val();return $("#calc_load").show(),$("#calc_error").hide(),$("#ship_result").hide(),jQuery.ajax({url:"/calculate-shipping",type:"POST",data:{_token:d,country:a,weight:i,unit:t,type:n,length:r,width:s,height:u},success:function(e){if($("#calc_load").hide(),"1"==e.error)$("#calc_error").css("display","block");else{$("#ship_oldcost").text(e.prices[0].amount);var a=Math.round((100-e.prices[0].discount)/100*e.prices[0].amount).toFixed(2);$("#ship_cost").text(a),$("#ship_time").text(e.prices[0].time),$("#ship_disc").text(e.prices[0].discount),$("#ship_result").slideDown()}}}),!1}}),$("#pickup").validate({rules:{first_name:{required:!0},last_name:{required:!0},email:{required:!0},mobile:{required:!0},package_weight:{required:!0},pickup_address:{required:!0},dest_address:{required:!0},package_items:{required:!0},payment_option:{required:!0}},messages:{first_name:{required:"Please enter first name"},last_name:{required:"Please enter last name"},email:{required:"Please enter email"},mobile:{required:"Please enter mobile"},package_weight:{required:"Please enter package weight"},pickup_address:{required:"Please enter pickup address"},dest_address:{required:"Please enter destination address"},package_items:{required:"Please enter package items"},payment_option:{required:"Please select payment option"}},submitHandler:function(e){var a=$("input[name='first_name']").val(),i=$("input[name='last_name']").val(),t=$("input[name='email']").val(),n=$("input[name='mobile']").val(),r=$("input[name='package_weight']").val(),s=$("input[name='pickup_address']").val(),u=$("input[name='dest_address']").val(),d=$("input[name='package_items']").val(),l=$("input[name='payment_option']:checked").val(),c=($("input[name='home_made']:checked").val(),$("input[name='branded_food_items']:checked").val(),$("input[name='liquid_items']:checked").val(),$("input[name='medicine_items']:checked").val(),$("input[name='other']:checked").val(),$("input[name='other_items']").val(),$("input[name=_token]").val());jQuery.ajax({url:"/schedule-pickup/ajexRequest",type:"POST",data:{_token:c,first_name:a,last_name:i,email:t,mobile:n,package_weight:r,pickup_address:s,dest_address:u,package_items:d,payment_option:l},success:function(e){console.log(e)}})}}),$('input[name="other"]').click(function(){this.checked?$(".other_item_box").css("display","block"):$(".other_item_box").css("display","none")})});
    </script>
@endsection
