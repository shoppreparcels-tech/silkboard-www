@extends('layout')

@section('title', 'Schedule a Pickup • Schedule Package Pickup Request • ShoppRe™')
@section('description', 'Schedule your package pickup with ShoppRe | From your home or office | Get delivered in 3-6 business days | #GlobalShippingMadeEasy | Save 70% on Shipping Cost.')
@section('keywords', 'package india, parcel service, schedule pickup, send food, courier services near me, delivery items, shipping rates')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/schedule-pickup"/>
    <link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/select2.min.css">
    <meta property="og:title" content="Schedule A Package Pickup with ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/schedule-pickup"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/schedule-pickup-package-in-india.jpg"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="ShoppRe online shipping and international courier from India"/>
    <meta property="og:description"
          content="Need to Schedule a package pickup online? Schedule your parcel quickly with ShoppRe from your home or office and we will deliver for you within 3-6 business days."/>
    <meta property="og:site_name" content="ShoppRe: Online Shipping Site in India"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="Go_Shoppre"/>
    <meta name="twitter:title" content="Schedule A Package Pickup with ShoppRe.com"/>
    <meta name="twitter:description"
          content="Need to Schedule a package pickup online? Schedule your parcel quickly with ShoppRe from your home or office and we will deliver for you within 3-6 business days."/>
    <meta name="twitter:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/schedule-pickup-package-in-india.jpg"/>
    <meta name="twitter:image:alt" content="ShoppRe online shipping and international courier from India"/>
    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .chk-terms-left-margin{margin-left: 6%;}.signup-blox{background:#fff;width:70%;margin:0 auto;border:1px solid rgba(0,0,0,.5);border-radius:10px}.address-line{font-size:12px;color:gray}.box{width:20%;margin:0 auto;background:rgba(255,255,255,.2);padding:35px;border:2px solid #fff;border-radius:20px/50px;background-clip:padding-box;text-align:center}.address-color{color:#000}.btn-close-popup{float:right;background:#e85151;border-radius:36px;width:20px;text-align:center;cursor:pointer}.button{font-size:1em;padding:10px;color:#fff;border:2px solid orange;border-radius:20px/50px;text-decoration:none;cursor:pointer;transition:all .3s ease-out}.button:hover{background:orange}.address-book{cursor:pointer}.overlay{position:fixed;z-index:999;top:-25px;bottom:0;left:0;right:0;background:rgba(.6,.5,.6,.7);transition:opacity .5s;visibility:visible;opacity:1}.overlay:target{visibility:hidden;opacity:0;display:none}.signup-heading{font-size:20px;font-weight:600;text-align:center;color:#d78419;margin-bottom:20px}.popup{margin:70px auto;padding:20px;background:#fff;border-radius:5px;width:40%;position:relative;transition:all 5s ease-in-out}.popup h2{margin-top:0;color:#333;font-family:Tahoma,Arial,sans-serif}.popup .close{position:absolute;top:20px;right:30px;transition:all .2s;font-size:30px;font-weight:700;text-decoration:none;color:#333}.popup .close:hover{color:orange}.address-block{display:none;margin-bottom:3%}.card{box-shadow:0 4px 8px 0 rgba(0,0,0,.2);transition:.3s}.card:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,.2)}.container{padding:2px 16px}.popup .content{max-height:30%;overflow:auto}.popup-terms-conditions .content{max-height:30%;overflow:auto}.seo-sec{background-color:#fafafb}.seo-sec a{text-decoration:underline}.ul-seo ul li{list-style:none}.ul-seo li{font-size:16px;font-weight:600;color:#677582}
        @media only screen and (max-width:600px) {
            .btn-m-accept-terms-condition {
                width: 38% !important;
                margin-top: 15px !important;
            }
            .terms-block-mobile {
                width: 92%;
                height: 627px;
                margin-top: 27px;
                overflow-y: scroll;
            }
            .terms-content-box {
                height: 450px;
                overflow-y: scroll;
            }
            .chk-terms-left-margin {
                margin-left: 4%;
            }
            .signup-blox {
                width: 100% !important;
            }
            .popup {
                width: 93% !important;
                margin: 38px auto !important;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <br><br><br><br>
    </div>

    <!-- Terms and Conditions  -->
    @include('../partials/pickup-terms-and-conditions')

    <!-- This code is required -->
    <div id="popup1" class="overlay" style="display: none">
        <div class="popup">
            <span class="btn-close-popup" id="btn-close-popup-login">x</span>

            <!-------------- Login Block ------------->

            <div class="login-blox" style="padding: 0 0 50px;">
                <h3>Log in to Shoppre Account</h3>
                <center>
                    <label for="" id="lblLoginStatus" style="font-size: 15px;margin-bottom: 20px;"></label>
                </center>
                <div class="col-sm-12">
                    <form class="login-form" id="form_login">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email address"
                                   name="email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password"
                                   name="password" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-shoppre">Sign in to your account</button>
                    </form>
                    <span class="login-bttm"><a href="#">Forgot my password. Please remind me.</a></span>
                    <span class="login-bttm"><a href="#" id="btn-signup-block">Not a member? <span style="color: red">Register</span></a></span>
                </div>
                <div class="clearfix"></div>
            </div>

            <!--------------End Login Block ------------->
            <!--------------Signup Block ------------->
            <div class="signup-blox" style="padding: 0 0 0px !important; display: none;">
                <center><h3 class="signup-heading">Complete your registration</h3></center>
                <center>
                    <label for="" id="lblSignupStatus" style="font-size: 15px;margin-bottom: 20px;"></label>
                </center>
                <div class="col-sm-12">
                    <form class="signup-form" id="form_signup_ajax">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="utm_campaign" value="" id="utm_campaign">
                        <input type="hidden" name="utm_source" value="" id="utm_source">
                        <input type="hidden" name="utm_medium" value="" id="utm_medium">
                        <input type="hidden" name="gcl_id" value="" id="gcl_id">
                        <input type="hidden" name="referer" value="" id="referer">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email address"
                                   name="signup_email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name " required>
                        </div>
                        <label for="">Mobile Number</label>
                        <div class="form-group">
                            <div class="col-md-5 no-padding">
                                <select class="select2 select-control col-md-12" name="country_code">
                                    <option value="{{app('request')->input('c_code')? app('request')->input('c_code') : '91'}}">
                                        &nbsp;
                                        &nbsp;+{{app('request')->input('c_code')? app('request')->input('c_code') : '91'}}</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->phone_code}}">{{$country->iso}}
                                            (+{{$country->phone_code}})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-7 no-padding">
                                <input type="number" class="form-control txt-mobile-no" placeholder="Mobile Number"
                                       name="phone" value="{{app('request')->input('PN')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password"
                                   name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Referral</label>
                            <input type="text" class="form-control  " placeholder="Referral code if any" name="refferal"
                                   visible="false">
                        </div>
                        <button type="submit" class="btn btn-block btn-shoppre">Sign in to your account</button>
                    </form>
                    <span class="login-bttm"><a href="#" id="btn-login-block">Already Register? <span
                                    style="color: red">Login</span></a></span>
                </div>
                <div class="clearfix"></div>
            </div>

            <br>
            <br>
            <!--------------End Signup Block ------------->
        </div>
    </div>
    <section class="">
        <div class="container">
            <div class="col-md-6 col-xs-12 pad-t-20">
                <h3 class="f-s-25 font-weight-900 f-c-d-greay">Schedule Your Pickup :<span class="f-c-red f-s-16">
                    <br>Learn More 👉 <a href="{{route('ics.index')}}" target="_blank"
                                                              title="Click Here: How to Courier?"><span
                                    class="f-c-blue">How to send a parcel by courier?</span></a>
                    </span></h3>
            </div>
            <div class="col-md-6 col-xs-12 "><br>
                <br>
                <a href="/first-time-international-shipment-offer" target="_blank">
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/schedule-pickup-courier-from-india-shoppre.png"--}}
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/200inr-shipping-offer-india-shoppre.png"
                         alt="shoppre offer" title="Click Here" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="container ">
            <div id="scheduleModel" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="login-content">
                                <h3 class="head-tag">Congratulations !</h3>
                                <h4 class="head-tag">Your Schedule Pickup Request Submitted Successfully.</h4>
                                <div class="text-center">
                                    <div class="login-social">
                                        <a href="{{route('home')}}" class="btn btn-block btn-shoppre
                                         btn-shoppre-padding">Finish</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>

            <div class="schedule-container">
                <form class="form-horizontal self_form1" id="self_form">
                    {{--<form class="form-horizontal self_form" id="self_form" method="post"--}}
                          {{--action="{{route('schedulePickup.submit')}}" enctype="multipart/form-data" autocomplete="off">--}}
                    {{ csrf_field() }}
                    <h4 class="head-align"><u>YOUR CONTACT DETAILS :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Full Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Name" required
                                       name="first_name"/>
                                @if ($errors->has('first_name'))
                                    <span class="error">{{ $errors->first('first_name') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label class="control-label">Phone Number<span class="mendatory_fields">*</span></label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select class="form-control select2" name="phone_code" id="phone_code">
                                            <option value="91">India(+91)</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->phone_code}}">{{$country->name}}
                                                    (+{{$country->phone_code}})
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('code'))
                                            <span class="error">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="sch-mobile-number" maxlength="10"
                                               name="mobile" required
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="mendatory_fields">*</span> :</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="user_email"
                                       required
                                />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Select Service Type<span class="mendatory_fields">*</span> :</label>
                                <select class="form-control" name="type" id="ddl-service-type" required>
                                    <option value="">------ Select Service ------</option>
                                    <option value="pickup">Pickup</option>
                                    <option value="dropoff">Drop Off</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 hide" id="drop-off-location">
                            <div class="form-group">
                                <label>Select Drop-Off Location<span class="mendatory_fields">*</span> <a
                                            href="#" class="tooltipkey" title="Drop-Off Location">
                                        <i class="fa fa-question-circle-o"></i></a>:</label>
                                <select class="form-control" name="drop_off_location_id" id="ddl-location" required>
                                    <option value="">------ Select Location ------</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-3 hide" id="drop-off-address">
                            <label>Drop-Off Address:</label>
                            <p id="address-drop-off-location"></p>
                        </div>
                        <div class="col-sm-2 hide" id="drop-off-map-location">
                            <div class="form-group">
                                <label>Map Location:</label>
                                <a target="_blank" id="drop-off-location-url">
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/map-icon.png" alt="" style="height: 50px;width: 50px">
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="pickup-address">
                                                <h4 class="head-align"><u> PICK-UP ADDRESS :</u></h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="mendatory_fields">*</span> :</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name" required
                                           value="{{!empty($pickup_address->pc_fname)?$pickup_address->pc_fname:''}}"
                                           name="pc_fname"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-align">
                                    <label>Last Name<span class="mendatory_fields">*</span> :</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name" required
                                           value="{{!empty($pickup_address->pc_lname)?$pickup_address->pc_lname:''}}"
                                           name="pc_lname"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>State <span class="mendatory_fields">*</span> :</label>
                                    <input type="text" class="form-control" placeholder="Enter Your State" required
                                           value="{{!empty($pickup_address->pc_state)?$pickup_address->pc_state:''}}"
                                           name="pc_state"/>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-align">
                                    <label>City <span class="mendatory_fields">*</span> :</label>
                                    <input type="text" class="form-control" placeholder="Enter City" required
                                           value="{{!empty($pickup_address->pc_city)?$pickup_address->pc_city:''}}"
                                           name="pc_city"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Street <span class="mendatory_fields">*</span> :</label>
                                    <input type="text" class="form-control" placeholder="Please Enter Street" required
                                           value="{{!empty($pickup_address->pc_street)?$pickup_address->pc_street:''}}"
                                           name="pc_street"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-align">
                                    <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                    <input type="text" class="form-control" placeholder="Enter Pincode" required
                                           value="{{!empty($pickup_address->pc_pincode)?$pickup_address->pc_pincode:''}}"
                                           name="pc_pincode"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mobile <span class="mendatory_fields">*</span> :</label>
                                    <input type="number" maxlength="10" class="form-control" placeholder="Enter Mobile"
                                           required
                                           value="{{!empty($pickup_address->pc_contact_no)?$pickup_address->pc_contact_no :''}}"
                                           name="pc_contact_no"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-align">
                                    <label>Email :</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" required
                                           value="{{!empty($pickup_address->pc_email)?$pickup_address->pc_email:''}}"
                                           name="pc_email"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="head-align"><u>PACKAGE INFORMATION :</u></h4>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="form-group label-align">
                                <label>No Of Boxes<span class="mendatory_fields">*</span> :</label>
                                <div class="row">
                                    <div
                                        class="col-sm-12 div-price-cal-length-padding">
                                        <h6 class="header7 p-color-cement">(in number)</h6>
                                        <div class="col-sm-12 no-padding ">
                                            <input type="number" min="1" class="form-control"
                                                   pattern="^\d*(\.\d{0,2})?$" style="height: 40px"
                                                   name="no_of_packages" required placeholder="Enter No of Boxes">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group label-align">
                                <label>Weight Of Package<span class="mendatory_fields">*</span> :</label>
                                <div class="row">
                                    <div
                                            class="col-sm-12 div-price-cal-length-padding">
                                        <h6 class="header7 p-color-cement">(in kg)</h6>
                                        <div class="col-sm-12 no-padding ">
                                            <input type="number" min="0" value="0" step="0.5" class="form-control"
                                                   pattern="^\d*(\.\d{0,2})?$" style="height: 40px"
                                                   name="package_weight" required placeholder="Enter Package Weight">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <div class="form-group label-align">
                                <label>Size Of The Package If You Are Aware( Optional )<a
                                        href="#" class="tooltipkey" title="volumetric">
                                        <i class="fa fa-question-circle-o"></i></a> :</label>
                                <div class="row">
                                    <div
                                        class="col-md-3 col-sm-4 col-xs-9 div-price-cal-length-padding" >
                                        <h6 class="header7 p-color-cement">Length (in cm)</h6>
                                        <div class="col-sm-12 no-padding  div-price-cal-length">
                    <span id="aminus"
                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                            <input type="text" class="txt-length" name="length" required
                                                   value="0">
                                            <span id="aplus"
                                                  class="btn btn-puls-minus inc-value no-padding">+</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-3 col-sm-4 col-xs-9 div-price-cal-length-padding">
                                        <h6 class="header7 p-color-cement">Width (in cm)</h6>
                                        <div class="col-sm-12 no-padding div-price-cal-length">
                    <span id="aminus"
                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                            <input type="text" class="txt-length" name="width" required
                                                   value="0">
                                            <span id="aplus"
                                                  class="btn btn-puls-minus inc-value no-padding">+</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-3 col-sm-4 col-xs-9 div-price-cal-length-padding">
                                        <h6 class="header7 p-color-cement">Height (in cm)</h6>
                                        <div class="col-sm-12 no-padding  div-price-cal-length">
                    <span class="btn btn-puls-minus dec-value no-padding"
                          id="aminus">-</span>
                                            <input type="text" class="txt-length" name="height" required
                                                   value="0">
                                            <span id="aplus"
                                                  class="btn btn-puls-minus inc-value no-padding">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol style="list-style-type: none;margin-left: -55px;">
                        <li id="selfol_li0" data-olli="0">
                            <div class="col-sm-4 col-xs-12">
                                <label>Item Name <span class="mendatory_fields">*</span></label>
                                <input type="text" class="form-control self_url" name="name[0]" required
                                        placeholder="eg.T Shirt">
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <label>Quantity <span class="mendatory_fields">*</span></label>
                                <input type="number" class="form-control self_amt" name="quantity[0]"
                                         placeholder="eg.2" required>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <label>Price(Per Item) <span class="mendatory_fields">*</span></label>
                                <input type="number" class="form-control self_qty" name="amount[0]"
                                         placeholder="eg.0.00" required>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ol>

                    <a href="#" id="inputplus" class="btn btn-shoppre btn-add-item"><i class="fa fa-plus "></i> Add More
                        Items</a>
                    <h4 class="head-align"><u>DESTINATION ADDRESS : </u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" required
                                       name="dc_fname"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Last Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name" required
                                       name="dc_lname"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Please Enter Street" required
                                       name="dc_street"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode" required
                                       name="dc_pincode"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State :</label>
                                <input type="text" class="form-control" placeholder="Enter State" required
                                       name="dc_state"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>City <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter City" required
                                       name="dc_city"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label ">Country<span class="mendatory_fields">*</span> </label>
                                <select required class="select2 form-control" name="dc_country" id="dc_country">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{$country->id == 99 ? 'disabled': ''}}>
                                            {{$country->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label class="control-label ">Phone <span class="mendatory_fields">*</span> </label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select class="form-control select2" name="dc_phone_code" id="dc_phone_code" required>
                                            <option value="">Country Code</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->phone_code}}" {{$country->phone_code == 91 ? 'disabled': ''}}>{{$country->name}}
                                                    (+{{$country->phone_code}})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-8 ">
                                        <input type="number" class="form-control" required
                                               name="dc_contact_no"
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Comment <span class="mendatory_fields"></span>:</label>
                                <input type="text" name="comment" class="form-control"
                                       placeholder="Enter Any Extra Comment ......."/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-offset-4">
                            <button type="submit" class="btn btn-block btn-shoppre" style="background-color: #4285f4!important">Confirm Pickup</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </section>
    <div id="schedule_load"></div>
    <div class="seo-sec">

        <div class="container">
            <div class="col-md-12 col-xs-12 m-t-20 margin-b-10 no-pad">
                    <div class="col-md-6 col-xs-12 pad-10 padd-left-0">
                        <div class="outer border-1px">
                        <br>
                            <span>
                          <div class="f-s-24 f-c-d-gray f-w-8 txt-align-c margin-b-10">Contact Information</div>
                                <center>
                          <div class="f-s-18 f-c-d-gray f-w-8 margin03">For Pickup Request: <a href="tel:+91-8277919191">+91-8277-919191</a> : 8AM-11PM IST</div>
                          <div class="f-s-18 f-c-d-gray f-w-8 margin-b-10"> Customer Support: <a href="tel:+91-9148357733">+91-91483-57733</a> : 9AM-11PM IST</div>
                          <div class="f-s-18 f-c-d-gray f-w-8 margin-b-10">Seller Support: <a href="tel:+91-9880329134 ">+91-98803-29134</a> : 9AM-7PM IST</div>
                                    <div class="f-s-18 f-c-d-gray f-w-8 margin-b-10">Complaints: <a href="tel:+91-9880329134 ">+91-98803-29134</a> : 9AM-7PM IST</div>
                              </center>
                            </span>

                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 pad-l-10 pad-10">
                        <div class="outer border-1px">
                        <br>

                        <div class="f-s-24 f-c-d-gray f-w-8 txt-align-c margin-b-10">General Information</div>
                            <center>
                        <div class="f-s-18 f-c-d-gray f-w-8 margin03"> <a href="http://shoppretracking.aftership.com" target="_blank">Track your shipment online</a></div>
                        <div class="f-s-18 f-c-d-gray f-w-8 margin-b-10"><a href="/offers" target="_blank"> International shipping offers</a></div>
                         <div class="f-s-18 f-c-d-gray f-w-8 margin-b-10"><a href="https://ship.shoppre.com/refer-and-earn-with-us/" target="_blank">Earn ₹500/- on each Referral</a></div>
                          <div class="f-s-18 f-c-d-gray f-w-8 margin-b-10"><a href="https://ship.shoppre.com/prohibited-items-what-you-cannot-ship-internationally-from-india/" target="_blank">Restricted and Prohibited Items</a></div>
                            </center>
                            </div>
                    </div>
            </div>
        <div class="container">
            <center>
                <br>
                <h1 class="f-s-36 f-c-d-gray font-weight-900">ShoppRe Courier - <span class="f-c-blue">Global Shipping Made Easy</span>
                </h1>
            </center>

            <h2 class="f-s-18 f-c-d-gray f-w-8">How do you schedule a pickup for your package?</h2>
            <p class="f-s-16 f-c-gray">Call, chat with or email our 24/7 customer support to schedule a pickup. Our
                experts will show up at your door,
                no matter if its your home or office in just 48 hours. Or you can come to <a href="/shipping/drop-off-location">ShoppRe facility to drop your package</a> off.
                Either ways, we'll make sure that it is dispatched within 48 hours to one of our courier partners.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can ShoppRe pickup your package from your home?</h2>
            <p class="f-s-16 f-c-gray">The most exciting feature of <a href=""{{route('ics.index')}} >ShoppRe
                    Courier</a> is that we reach every nook and cranny of our country. You can schedule a pickup of a
                package
                from ANYWHERE in India, and our experts will come to pick it up and dispatch it in just 48 hours; only
                to any one
                of our trusted courier partners, for it to reach the destination in just 3-6 days.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Does ShoppRe do Industrial pickups?</h2>
            <p class="f-s-16 f-c-gray">If you have commercial shipments, bulk product procurement orders or if you are
                shifting your business abroad etc.,
                you might need industrial pickups. We do that and more. We only ask that the person who is
                responsible for such an order be present at the pickup location along with the package.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">What are the easiest ways to schedule a pickup with us?</h2>
            <p class="f-s-16 f-c-gray">Our Support team is on alert 24/7 and you can reach them anytime with your
                courier requests.
                The easiest ways to reach us would be through call, text (<a
                        href="http://bit.ly/shopr-pickup" target="_blank">WhatsApp</a>, SMS), email or directly from our website.
                You can <a href="{{route('customer.register')}}" target="_blank">Sign up for FREE</a> to start shipping with us!
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">How can you track the shipment containing your package once we pick it
                up?</h2>
            <p class="f-s-16 f-c-gray">We are partnered up with only the most trustworthy couriers such as DHL, DTDC
                etc.
                Once your package is dispatched to one of them, you can track the whereabouts of
                your shipment on the respective platforms through the direct link we provide. We pride ourselves on
                the quality of our real-time tracking facilities and the updates we offer frequently.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Is scheduling a pickup free?</h2>
            <p class="f-s-16 f-c-gray"> Pickup Charges will be applicable based on the weight of the
                content/items/products.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Does ShoppRe pick up couriers on weekends?</h2>
            <p class="f-s-16 f-c-gray">Our Pickup experts will be at your beck and call 6 days a week; except Sundays.
                In the event of public holidays or unexpected calamities, dispatch services will depend on the status of
                our courier partners though.
            </p> <br>
            <h2 class="f-s-18 f-c-d-gray f-w-8">How long will it take for a package to reach its destination?
                Does it ever reach early?</h2>
            <p class="f-s-16 f-c-gray">Your courier will only take 3-6 business days to reach its destination wherever
                it is in the world,
                once it is dispatched. And yes, it is possible that it reaches earlier than expected too,
                depending on the air traffic conditions and the discretion of the courier partner.
            </p> <br>
        </div>
        <br>
    </div>
@endsection

@section('js_script')
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{env('AWS_CLOUD_FRONT')}}/js/select2.min.js"></script>
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function(){--}}
            {{--$(".select2").select2();$("#self_form").validate({ignore:":not(:visible)"});var e="";jQuery.ajax({url:"drop-off",type:"GET",success:function(a){e=a.data,$.each(a.data,function(e,a){$("#ddl-location").append($("<option></option>").val(a.id).html(a.name))})}}),$("#ddl-location").change(function(){var a=Number($("#ddl-location option:selected").index());if(console.log("Index",a),0!==a){var s=e[a-1].address,o=e[a-1].city,l=e[a-1].state,t=e[a-1].pincode,n=e[a-1].location,i=s+" "+o+", "+l+" - "+t;$("#address-drop-off-location").text(i),$("#drop-off-address").removeClass("hide"),$("#drop-off-map-location").removeClass("hide"),$("a#drop-off-location-url").prop("href",n)}else $("#drop-off-address").addClass("hide"),$("#drop-off-map-location").addClass("hide")});$("#ddl-service-type").change(function(){"dropoff"===$("#ddl-service-type").val()?($("#drop-off-location").removeClass("hide"),$(".pickup-address").css("display","none")):($("#drop-off-location").addClass("hide"),$("#drop-off-address").addClass("hide"),$(".pickup-address").css("display","block"))}),$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$("#utm_campaign").val(localStorage.myaccount_utm_campaign),$("#utm_medium").val(localStorage.myaccount_utm_medium),$("#utm_source").val(localStorage.myaccount_utm_source),$("#gcl_id").val(localStorage.myaccount_gcl_id),$("#referer").val(localStorage.myaccount_referer),$('input[name="other"]').click(function(){this.checked?$(".other_item_box").css("display","block"):$(".other_item_box").css("display","none")}),$("#btn-signup-block").click(function(){console.log("btn-signup"),$(".login-blox").css("display","none"),$(".signup-blox").css("display","block")}),$("#btn-login-block").click(function(){console.log("btn-signup"),$(".login-blox").css("display","block"),$(".signup-blox").css("display","none")}),$("#inputplus").click(function(e){e.preventDefault();var a=$("#self_form ol li:last").attr("data-olli");++a,$("#self_form ol").append('<li style="margin-top: 10px;" id="selfol_li'+a+'" data-olli="'+a+'"><div class="col-sm-5 col-xs-12"><label>Item Name</label><input type="text" class="form-control self_url" name="name['+a+']" required  placeholder="eg: t-shirt"></div><div class="col-sm-2 col-xs-4">   <label>Quantity</label><input type="number" class="form-control self_amt" name="quantity['+a+']" placeholder="eg.2"  data-rule-number="true" data-rule-min="1" required></div><div class="col-sm-2 col-xs-4"><label>Price</label><input type="number" class="form-control self_qty" placeholder="eg..0.00"  name="amount['+a+']"  data-rule-digits="true" data-rule-min="1" required></div><div class="col-sm-1 col-xs-1" style="padding-top: 20px;margin-left: -10px;">   <a style="font-size: 28px;" href="#" class="remove" data-litarget="'+a+'"><i class="fa fa-trash" aria-hidden="true"></i></a></div><div class="clearfix"></div></li>')}),$(document).on("click","#self_form .remove",function(e){e.preventDefault();var a=$(this).attr("data-litarget");$("#selfol_li"+a).remove()}),$("#form_login").validate({rules:{email:{required:!0},password:{required:!0}},messages:{email:{required:"Please Enter First Name"},passwords:{required:"Please Enter Last Name"}},submitHandler:function(e){let a=$("input[name='email']").val(),s=$("input[name='password']").val();$("input[name=_token]").val();return console.log("email",a),console.log("password",s),jQuery.ajax({url:"ajax/login",type:"POST",data:{email:a,password:s},success:function(e){console.log("Login",e),"success"===e.status?($("#popup1").css("display","none"),$("#normal_login_block").css("display","none"),$("#ajax_login_block").css("display","block"),$("#ajax_customer_username").text(e.name)):"wrong_password"===e.status?$("#lblLoginStatus").css("color","red").text("Email and password does not match"):"not_exist"===e.status?$("#lblLoginStatus").css("color","red").text("This Email not registered"):"email_not_verified"===e.status&&$("#lblLoginStatus").css("color","red").text("Please Verify your email ID")}}),!1}}),$("#form_signup_ajax").validate({rules:{signup_email:{required:!0},name:{required:!0},country_code:{required:!0},phone:{required:!0},password:{required:!0}},messages:{signup_email:{required:"Please Enter Email"},name:{required:"Please Enter Name"},country_code:{required:"Please Select Country Code"},dc_phone_code:{required:"Please Select Country Code"},phone:{required:"Please Enter Mobile"},password:{required:"Please Enter Password"}},submitHandler:function(e){let a=$("input[name='signup_email']").val(),s=$("input[name='name']").val(),o=$("select[name='country_code']").val(),l=$("input[name='phone']").val(),t=$("input[name='password']").val();$("input[name=_token]").val();return console.log("name",s),console.log("password",t),jQuery.ajax({url:"ajax/signup",type:"POST",data:{email:a,name:s,country_code:o,phone:l,password:t},success:function(e){"success"===e.status?($("#lblLoginStatus").css("color","darkgreen").text("Please verify your email ID and Try login"),$(".login-blox").css("display","block"),$(".signup-blox").css("display","none")):"duplicate"===e.status&&$("#lblSignupStatus").css("color","red").text("This Email id already registered")}}),!1}}),$("#btn-close-popup-login").click(function(){$("#popup1").css("display","none")}),$("#address-book").click(function(){$(".address-block").slideToggle("slow")}),$(".btn-destination-address").click(function(){const e=$(this).attr("data-id");jQuery.ajax({url:"schedule-pickup/ajax/destination-address",type:"POST",data:{id:e},success:function(e){console.log("Address Data",e),"success"===e.status&&($("input[name='dc_fname']").val(e.address.first_name),$("input[name='dc_lname']").val(e.address.last_name),$("input[name='dc_street']").val(e.address.line1+e.address.line2),$("input[name='dc_pincode']").val(e.address.pincode),$("input[name='dc_state']").val(e.address.state),$("input[name='dc_city']").val(e.address.city),$("input[name='dc_contact_no']").val(e.address.phone),$("#dc_country").val(e.address.country),$("#dc_phone_code").val(e.address.country_code))}})})}),$("#self_form").on("submit",function(){console.log("Pickup form submitted"),!0===$("#self_form").valid()&&$("#schedule_load").show()});--}}
    {{--</script>--}}

            <script>
                $(document).ready(function () {
                    $(".select2").select2();
                    // $("#self_form").validate({ignore:":not(:visible)"});
                    var locations = '';
                    jQuery.ajax({
                        url: 'drop-off',
                        type: "GET",
                        success: function (res) {
                            locations = res.data;
                            $.each(res.data, function (data, value) {
                                $("#ddl-location").append($("<option></option>").val(value.id).html(value.name));
                            })
                        }
                    });
                    $("#ddl-location").change(function () {
                        var index = Number($("#ddl-location option:selected").index());
                        console.log('Index', index);
                        if (index !== 0) {
                            var address = locations[index - 1].address;
                            var city = locations[index - 1].city;
                            var state = locations[index - 1].state;
                            var pincode = locations[index - 1].pincode;
                            var location = locations[index - 1].location;
                            var completeAddress = address + ' ' + city + ', ' + state + ' - ' + pincode;
                            $('#address-drop-off-location').text(completeAddress);
                            $('#drop-off-address').removeClass("hide");
                            $('#drop-off-map-location').removeClass("hide");
                            $("a#drop-off-location-url").prop("href", location);
                        } else {
                            $('#drop-off-address').addClass("hide");
                            $('#drop-off-map-location').addClass("hide");
                        }
                    });
                    var service = '';
                    $('#ddl-service-type').change(function () {
                        service = $('#ddl-service-type').val();
                        if (service === 'dropoff') {
                            $('#drop-off-location').removeClass("hide");
                            $('.pickup-address').css('display', 'none');
                        } else {
                            $('#drop-off-location').addClass("hide");
                            $('#drop-off-address').addClass("hide");
                            $('.pickup-address').css('display', 'block');
                        }
                    });

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $('#utm_campaign').val(localStorage.myaccount_utm_campaign);
                    $('#utm_medium').val(localStorage.myaccount_utm_medium);
                    $('#utm_source').val(localStorage.myaccount_utm_source);
                    $('#gcl_id').val(localStorage.myaccount_gcl_id);
                    $('#referer').val(localStorage.myaccount_referer);
                    $('input[name="other"]').click(function () {
                        if (this.checked) {
                            $(".other_item_box").css("display", "block");
                        }
                        else {
                            $(".other_item_box").css("display", "none");
                        }
                    });
                    $('#btn-signup-block').click(function () {
                        console.log('btn-signup');
                        $('.login-blox').css('display', 'none');
                        $('.signup-blox').css('display', 'block');
                    });
                    $('#btn-login-block').click(function () {
                        console.log('btn-signup');
                        $('.login-blox').css('display', 'block');
                        $('.signup-blox').css('display', 'none');
                    });
                    $("#inputplus").click(function (e) {
                        e.preventDefault();
                        var i = $("#self_form ol li:last").attr('data-olli');
                        ++i;
                        $("#self_form ol").append('<li style="margin-top: 10px;" id="selfol_li' + i + '" data-olli="' + i + '">' +
                            '<div class="col-sm-5 col-xs-5">' +
                            '<label>Item Name</label>' +
                            '<input type="text" class="form-control self_url" name="name[' + i + ']" required  placeholder="eg: t-shirt">' +
                            '</div>' +
                            '<div class="col-sm-2 col-xs-3">' +
                            '   <label>Quantity</label>' +
                            '<input type="number" class="form-control self_amt" name="quantity[' + i + ']" placeholder="eg.2"  data-rule-number="true" data-rule-min="1" required>' +
                            '</div>' +
                            '<div class="col-sm-2">' +
                            '<label>Price</label>' +
                            '<input type="number" class="form-control self_qty" placeholder="eg..0.00"  name="amount[' + i + ']"  data-rule-digits="true" data-rule-min="1" required>' +
                            '</div>' +
                            '<div class="col-sm-1 col-xs-1" style="padding-top: 20px;margin-left: -10px;">' +
                            '   <a style="font-size: 28px;" href="#" class="remove" data-litarget="' + i + '"><i class="fa fa-trash" aria-hidden="true"></i></a>' +
                            '</div>' +
                            '<div class="clearfix"></div>' +
                            '</li>');
                    });

                    $(document).on("click", "#self_form .remove", function (e) {
                        e.preventDefault();
                        var i = $(this).attr('data-litarget');
                        $('#selfol_li' + i).remove();
                    });

                    // Submit form using javascript AJAX with login Enabled

                    $("#self_form").validate({
                        rules:
                            {
                                first_name: {required: true},
                                last_name: {required: true},
                                user_email: {required: true},
                                phone_code: {required: true},
                                drop_off_location_id: {required: true},
                                type: {required: true},
                                mobile: {required: true},
                                no_of_packages: {required: true},
                                package_weight: {required: true},
                                length:{ required: true},
                                width:{ required: true},
                                height:{ required: true},
                                package_items: {required: true},
                                payment_option: {required: true},
                                pc_fname: {required: true},
                                pc_lname: {required: true},
                                pc_street: {required: true},
                                pc_pincode: {required: true},
                                pc_city: {required: true},
                                pc_state: {required: true},
                                pc_contact_no: {required: true},
                                dc_fname: {required: true},
                                dc_lname: {required: true},
                                dc_street: {required: true},
                                dc_city: {required: true},
                                dc_country: {required: true},
                                dc_pincode: {required: true},
                                dc_phone_code: {required: true},
                                dc_contact_no: {required: true}
                            },
                        messages:
                            {
                                first_name: {required: 'Please Enter First Name'},
                                last_name: {required: 'Please Enter Last Name'},
                                user_email: {required: 'Please Enter Email'},
                                type: {required: 'Please Select Service Type'},
                                drop_off_location_id: {required: 'Please Select Drop Off Location'},
                                phone_code: {required: 'Select Phone Code'},
                                length: {required: 'Select Phone Code'},
                                width: {required: 'Select Phone Code'},
                                height: {required: 'Select Phone Code'},
                                mobile: {required: 'Please Enter Mobile No.'},
                                no_of_packages: {required: 'Please Enter No of Packages'},
                                package_weight: {required: 'Please Enter Package Weight'},
                                package_items: {required: 'Please Enter Package Items'},
                                payment_option: {required: 'Please Select Payment Option'},
                                pc_fname: {required: 'Please Enter First Name'},
                                pc_lname: {required: 'Please Enter Last Name'},
                                pc_street: {required: 'Please Enter The Street'},
                                pc_state: {required: 'Please Enter The Street'},
                                pc_pincode: {required: 'Please Enter Pincode'},
                                pc_city: {required: 'Please Enter City'},
                                pc_contact_no: {required: 'Please Enter Contact Number '},
                                dc_fname: {required: 'Please Enter First Name'},
                                dc_lname: {required: 'Please Enter Last Name'},
                                dc_street: {required: 'Please Enter Street'},
                                dc_city: {required: 'Please Enter City'},
                                dc_country: {required: 'Please Select Country'},
                                dc_pincode: {required: 'Please Enter Pincode'},
                                dc_phone_code: {required: 'Select Phone Code'},
                                dc_contact_no: {required: 'Please Enter Contact Number'}
                            },
                        submitHandler: function (form) {
                            var f_name = $("input[name='first_name']").val();
                            var l_name = $("input[name='last_name']").val();
                            var email = $("input[name='user_email']").val();
                            var length= $("input[name='length']").val();
                            var width = $("input[name='width']").val();
                            var height = $("input[name='height']").val();
                            var phone_code = $("select[name='phone_code']").val();
                            var type = $("select[name='type']").val();
                            var drop_off_location_id = $("select[name='drop_off_location_id']").val();
                            console.log('drop_off_location_id', drop_off_location_id);
                            var mobile = $("input[name='mobile']").val();
                            var no_of_packages = $("input[name='no_of_packages']").val();
                            var package_weight = $("input[name='package_weight']").val();
                            var package_size = $("input[name='size_of_package']").val();
                            var package_items = $("input[name='package_items']").val();
                            var home_made = $("input[name='home_made']:checked").val();
                            var branded_food_item = $("input[name='branded_food_items']:checked").val();
                            var liquid_items = $("input[name='liquid_items']:checked").val();
                            var medicine_items = $("input[name='medicine_items']:checked").val();
                            var electronics = $("input[name='electronics']:checked").val();
                            var other = $("input[name='other']:checked").val();
                            var other_items = $("input[name='other_items']").val();
                            var pay_option = $("input[name='payment_option']:checked").val();
                            var pc_fname = $("input[name='pc_fname']").val();
                            var pc_lname = $("input[name='pc_lname']").val();
                            var pc_street = $("input[name='pc_street']").val();
                            var pc_pincode = $("input[name='pc_pincode']").val();
                            var pc_city = $("input[name='pc_city']").val();
                            var pc_state = $("select[name='pc_state']").val();
                            var pc_contact_no = $("input[name='pc_contact_no']").val();
                            var pc_email = $("input[name='pc_email']").val();
                            var dc_fname = $("input[name='dc_fname']").val();
                            var dc_lname = $("input[name='dc_lname']").val();
                            var dc_street = $("input[name='dc_street']").val();
                            var dc_state = $("input[name='dc_state']").val();
                            var dc_city = $("input[name='dc_city']").val();
                            var dc_country = $("select[name='dc_country']").val();
                            var dc_pincode = $("input[name='dc_pincode']").val();
                            var dc_phone_code = $("select[name='dc_phone_code']").val();
                            var dc_contact_no = $("input[name='dc_contact_no']").val();
                            var comment = $("input[name='comment']").val();
                            var itemlist = [];
                            var i= 0;
                            $.each($('.self_url'), function() {
                                var prd =  $(this).val();
                                const n = "";
                                var qty = Number($('input[name="quantity[' + i + ']"]').val());
                                var amt = Number($('input[name="amount[' + i + ']"]').val());
                                itemlist.push({
                                    name: prd,
                                    quantity: qty,
                                    price: amt
                                });
                                i++;
                            });
                            // alert(email);
                            var token = $('input[name=_token]').val();
                            console.log('Schedule Pickup form submitted');
                        $("#schedule_load").show();
                            if (localStorage.termsaccept) {
                            jQuery.ajax({
                                url: 'check/authenticate',
                                type: "GET",
                                success: function (res) {
                                    console.log('Auth', res);
                                    if (res.status === 'authenticated') {
                                        delete window.localStorage["termsaccept"];
                                        jQuery.ajax({
                                            url: 'schedule-pickup/submit',
                                            type: "POST",
                                            data: {
                                                first_name: f_name,
                                                last_name: l_name,
                                                user_email: email,
                                                phone_code: phone_code,
                                                mobile: mobile,
                                                no_of_packages: no_of_packages,
                                                size_of_package: package_size,
                                                package_weight: package_weight,
                                                length: length,
                                                width: width,
                                                height: height,
                                                type: type,
                                                drop_off_location_id: drop_off_location_id,
                                                package_items: package_items,
                                                home_made: home_made,
                                                branded_food_item: branded_food_item,
                                                liquid_items: liquid_items,
                                                medicine_items: medicine_items,
                                                electronics: electronics,
                                                other: other,
                                                other_items: other_items,
                                                payment_option: pay_option,
                                                pc_fname: pc_fname,
                                                pc_lname: pc_lname,
                                                pc_street: pc_street,
                                                pc_city: pc_city,
                                                pc_pincode: pc_pincode,
                                                pc_state: pc_state,
                                                pc_contact_no: pc_contact_no,
                                                pc_email: pc_email,
                                                dc_fname: dc_fname,
                                                dc_lname: dc_lname,
                                                dc_street: dc_street,
                                                dc_city: dc_city,
                                                dc_state: dc_state,
                                                dc_country: dc_country,
                                                dc_pincode: dc_pincode,
                                                dc_phone_code: dc_phone_code,
                                                dc_contact_no: dc_contact_no,
                                                comment: comment,
                                                items: itemlist
                                            },
                                            success: function (data) {
                                                console.log('response', data);
                                                $("#schedule_load").hide();
                                                debugger;
                                                window.location.href = data.redirection_url;
                                                // $('#scheduleModel').modal('show');
                                                // $('#popup1').css('display', 'block');
                                                // window.location.href = "https://www.shoppre.com/schedule-pickup/confirm";
                                                console.log(data);
                                            }
                                        });
                                    }
                                    else if (res.status === 'unauthenticated') {
                                        $("#schedule_load").hide();
                                        $("#popup1").css('display', 'block');
                                    }
                                }
                            });
                        } else {
                                $("#terms-popup").css('display', 'block');
                        }

                            return false;
                        }
                    });

                    $('#btn-term-condition-continue').click(function () {
                        const isAccepted = $('#chk_terms').is(":checked");
                        console.log('terms', isAccepted);
                        localStorage.termsaccept = isAccepted;
                        jQuery.ajax({
                            url: 'check/authenticate',
                            type: "GET",
                            success: function (res) {
                                console.log('Auth', res);
                                if (res.status === 'authenticated') {
                                    $("#terms-popup").css('display', 'none');
                                    $("#schedule_load").hide();
                                }
                                else if (res.status === 'unauthenticated') {
                                    $("#schedule_load").hide();
                                    $("#popup1").css('display', 'block');
                                }
                            }
                        });
                    });

                    $("#form_login").validate({
                        rules:
                            {
                                email: {required: true},
                                password: {required: true},
                            },
                        messages:
                            {
                                email: {required: 'Please Enter First Name'},
                                passwords: {required: 'Please Enter Last Name'},
                            },
                        submitHandler: function (form) {
                            let email = $("input[name='email']").val();
                            let password = $("input[name='password']").val();
                            let token = $('input[name=_token]').val();
                            console.log('email', email);
                            console.log('password', password);
                            jQuery.ajax({
                                url: 'ajax/login',
                                type: "POST",
                                data: {
                                    email: email,
                                    password: password,
                                },
                                success: function (res) {
                                    console.log('Login', res);
                                    if (res.status === 'success') {
                                        $('#popup1').css('display', 'none');
                                        $('#normal_login_block').css('display', 'none');
                                        $('.navbar-header-login-ajax-mobile').css('display', 'block');
                                        $('.navbar-header-login').css('display', 'none');
                                        $('#ajax_login_block').css('display', 'block');
                                        $('#ajax_customer_username').text(res.name);
                                        $('#ajax_customer_username-mobile').text(res.name);
                                        $("#terms-popup").css('display', 'none');
                                    } else if (res.status === 'wrong_password') {
                                        $('#lblLoginStatus').css('color', 'red').text('Email and password does not match');
                                    } else if (res.status === 'not_exist') {
                                        $('#lblLoginStatus').css('color', 'red').text('This Email not registered');
                                    } else if (res.status === 'email_not_verified') {
                                        $('#lblLoginStatus').css('color', 'red').text('Please Verify your email ID');
                                    }
                                }
                            });
                            return false;
                        }
                    });
                    $('#form_signup_ajax').validate({
                        rules:
                            {
                                signup_email: {required: true},
                                name: {required: true},
                                country_code: {required: true},
                                phone: {required: true},
                                password: {required: true},
                            },
                        messages:
                            {
                                signup_email: {required: 'Please Enter Email'},
                                name: {required: 'Please Enter Name'},
                                country_code: {required: 'Please Select Country Code'},
                                phone: {required: 'Please Enter Mobile'},
                                password: {required: 'Please Enter Password'},
                            },
                        submitHandler: function (form) {
                            let email = $("input[name='signup_email']").val();
                            let name = $("input[name='name']").val();
                            let country_code = $("select[name='country_code']").val();
                            let phone = $("input[name='phone']").val();
                            let password = $("input[name='password']").val();
                            let token = $('input[name=_token]').val();
                            console.log('name', name);
                            console.log('password', password);
                            jQuery.ajax({
                                url: 'ajax/signup',
                                type: "POST",
                                data: {
                                    email: email,
                                    name: name,
                                    country_code: country_code,
                                    phone: phone,
                                    password: password,
                                },
                                success: function (data) {
                                    if (data.status === 'success') {
                                        $('#lblLoginStatus').css('color', 'darkgreen').text('Please verify your email ID and Try login');
                                        $('.login-blox').css('display', 'block');
                                        $('.signup-blox').css('display', 'none');
                                    } else if (data.status === 'duplicate') {
                                        $('#lblSignupStatus').css('color', 'red').text('This Email id already registered');
                                    }
                                }
                            });
                            return false;
                        }
                    });
                    $('#btn-close-popup-login').click(function () {
                        $('#popup1').css('display', 'none');
                    });
                    $('#address-book').click(function () {
                        $('.address-block').slideToggle("slow");
                    });
                    $('.btn-destination-address').click(function () {
                        const address_id = $(this).attr('data-id');
                        jQuery.ajax({
                            url: 'schedule-pickup/ajax/destination-address',
                            type: "POST",
                            data: {
                                id: address_id
                            },
                            success: function (data) {
                                console.log('Address Data', data);
                                if (data.status === 'success') {
                                    $("input[name='dc_fname']").val(data.address.first_name);
                                    $("input[name='dc_lname']").val(data.address.last_name);
                                    $("input[name='dc_street']").val(data.address.line1 + data.address.line2);
                                    $("input[name='dc_pincode']").val(data.address.pincode);
                                    $("input[name='dc_state']").val(data.address.state);
                                    $("input[name='dc_city']").val(data.address.city);
                                    $("input[name='dc_contact_no']").val(data.address.phone);
                                    $("#dc_country").val(data.address.country);
                                    $("#dc_phone_code").val(data.address.country_code);
                                }
                            }
                        });
                    });
                });

                // For submitting form using javascript and laravel controller function using form action

                // $('#self_form').on('submit', function () {
                //     console.log('Pickup form submitted');
                //     var validationStatus = $("#self_form").valid();
                //     if (validationStatus === true) {
                //         $('#schedule_load').show();
                //     }
                // });
            </script>
@endsection
