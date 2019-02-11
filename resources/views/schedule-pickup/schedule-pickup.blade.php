@extends('layout')

@section('title', 'Schedule A Pickup - Schedule Your Package Pickup Online | ShoppRe')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 3-6 business days.')
@section('keywords', 'package india, parcel service, schedule pickup, send food, courier services near me, delivery items, shipping rates')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/schedule-pickup"/>
    <meta property="og:title" content="Schedule A Package Pickup with ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/schedule-pickup"/>
    <meta property="og:image" content="{{asset('img/images/schedule-pickup-package-in-india.jpg')}}"/>
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
    <meta name="twitter:image" content="{{asset('img/images/schedule-pickup-package-in-india.jpg')}}"/>
    <meta name="twitter:image:alt" content="ShoppRe online shipping and international courier from India"/>
    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <style>
        .signup-blox {
            background: #fff;
            width: 70%;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, .5);
            border-radius: 10px;
        }

        .address-line {
            font-size: 12px;
            color: gray;
        }

        .box {
            width: 20%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
        }

        .address-color {
            color:black;
        }

        .btn-close-popup {
            float: right;
            background: #e85151;
            border-radius: 36px;
            width: 20px;
            text-align: center;
            cursor: pointer;
        }

        .button {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid orange;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
        }

        .button:hover {
            background: orange;
        }

        .address-book {
            cursor: pointer;
        }

        .overlay {
            position: fixed;
            z-index: 999;
            top: -25px;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0.6, 0.5, 0.6, 0.7);
            transition: opacity 500ms;
            visibility: visible;
            opacity: 1;
        }

        .overlay:target {
            visibility: hidden;
            opacity: 0;
            display: none
        }

        .signup-heading {
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            color: #d78419;
            margin-bottom: 20px;
        }

        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 40%;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popup .close:hover {
            color: orange;
        }

        .address-block {
            display: none;
            margin-bottom: 3%;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .popup .content {
            max-height: 30%;
            overflow: auto;
        }
    </style>
    <style>
        .seo-sec {background-color: #fafafb}
        .seo-sec a {text-decoration: underline}
        .ul-seo ul li{list-style: none;}
        .ul-seo li {font-size: 16px;font-weight: 600;color: #677582}
    </style>
@endsection
@section('content')
    <!-- This code is required -->
    <div id="popup1" class="overlay" style="display: none">
        <div class="popup">
            <span class="btn-close-popup"  id="btn-close-popup-login">x</span>

            <!-------------- Login Block ------------->

            <div class="login-blox" style="padding: 0 0 50px;">
                <h3>Log in to Shoppre Account</h3>
                <center>
                    <label for="" id="lblLoginStatus" style="font-size: 15px;margin-bottom: 20px;"></label>
                </center>
                <div class="col-sm-12">
                    <form class="login-form" id="form_login" >
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email address"
                                   name="email"  required autofocus>
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
                    <form class="signup-form" id="form_signup_ajax" >
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="utm_campaign"  value="" id="utm_campaign" >
                        <input type="hidden" name="utm_source"  value="" id="utm_source" >
                        <input type="hidden" name="utm_medium"  value="" id="utm_medium" >
                        <input type="hidden" name="gcl_id"  value="" id="gcl_id" >
                        <input type="hidden" name="referer"  value="" id="referer" >
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email address"
                                   name="signup_email"  required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name " required>
                        </div>
                            <label for="">Mobile Number</label>
                        <div class="form-group">
                            <div class="col-md-5 no-padding">
                            <select class="select2 select-control col-md-12" name="country_code" >
                                <option value="{{app('request')->input('c_code')? app('request')->input('c_code') : '91'}}"> &nbsp; &nbsp;+{{app('request')->input('c_code')? app('request')->input('c_code') : '91'}}</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->phone_code}}">{{$country->iso}}
                                        (+{{$country->phone_code}})
                                    </option>
                                @endforeach
                            </select>
                            </div>
                            <div class="col-md-7 no-padding">
                                <input type="number" class="form-control txt-mobile-no" placeholder="Mobile Number" name="phone" value="{{app('request')->input('PN')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password"
                                   name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Referral</label>
                            <input type="text" class="form-control  " placeholder="Referral code if any" name="refferal" visible="false">
                        </div>
                        <button type="submit" class="btn btn-block btn-shoppre">Sign in to your account</button>
                    </form>
                    <span class="login-bttm"><a href="#" id="btn-login-block">Already Register? <span style="color: red">Login</span></a></span>
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
                <h3>Schedule Your Pickup - <span class="f-c-red f-s-16">
                    <a class="bla-1" href="https://www.youtube.com/watch?v=lQi4Io_WH70">
                        Watch Video To Know More
                    </a>
                </span></h3>
            </div>
            <div class="col-md-6 col-xs-12 "><br>
                <a href="{{route('first-shipment')}}">
                    <img src="{{asset('img/images/schedule-pickup-courier-from-india-shoppre.png')}}"
                         alt="schedule-pickup-courier-from-india-shoppre" class="img-responsive">
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
                <form class="form-horizontal" id="form-pickup">
                    {{ csrf_field() }}
                    <h4 class="head-align"><u>YOUR CONTACT DETAILS :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter First Name"
                                       name="first_name"/>
                                @if ($errors->has('first_name'))
                                    <span class="error">{{ $errors->first('first_name') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Last Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name"
                                       name="last_name"/>
                                @if ($errors->has('last_name'))
                                    <span class="error">{{ $errors->first('last_name') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="mendatory_fields">*</span> :</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="user_email"
                                />
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label class="control-label">Phone<span class="mendatory_fields">*</span></label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select class="select2 form-control " name="phone_code">
                                            <option value="">Country Code</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->phone_code}}">{{$country->iso}}
                                                    (+{{$country->phone_code}})
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('code'))
                                            <span class="error">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="sch-mobile-number" name="mobile"
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <h4 class="head-align"><u> PICK-UP ADDRESS :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter First Name"
                                      value="{{!empty($pickup_address->pc_fname)?$pickup_address->pc_fname:''}}" name="pc_fname"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Last Name<span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name"
                                       value="{{!empty($pickup_address->pc_lname)?$pickup_address->pc_lname:''}}" name="pc_lname"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State <span class="mendatory_fields">*</span> :</label>
                                <select class="select2 form-control" name="pc_state">
                                    <option value="">Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->name}}" {{$state->name == (!empty($pickup_address->pc_state) ? $pickup_address->pc_state : '') ? 'selected': ''}}>
                                            {{$state->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>City <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter City"
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
                                <input type="text" class="form-control" placeholder="Please Enter Street"
                                       value="{{!empty($pickup_address->pc_street)?$pickup_address->pc_street:''}}"
                                       name="pc_street"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode"
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
                                <input type="text" class="form-control" placeholder="Enter Mobile"
                                       value="{{!empty($pickup_address->pc_contact_no)?$pickup_address->pc_contact_no :''}}"
                                       name="pc_contact_no"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Email :</label>
                                <input type="email" class="form-control" placeholder="Enter Email"
                                       value="{{!empty($pickup_address->pc_email)?$pickup_address->pc_email:''}}"
                                       name="pc_email"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <h4 class="head-align"><u>PACKAGE INFORMATION :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Weight Of Package(in kg)<span class="mendatory_fields">*</span> :</label>
                                <input type="number" class="form-control" placeholder="Enter Package Weight"
                                       name="package_weight"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Size Of The Package If You Are Aware( Length, Breadth and Height ) :</label>
                                <input type="text" class="form-control" placeholder="Enter Package Size"
                                       name="size_of_package"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>No Of Packages <span class="mendatory_fields">*</span> :</label>
                                <input type="number" class="form-control" placeholder="Enter No Of Packages"
                                       name="no_of_packages"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Items Of The Package <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Package Items"
                                       name="package_items"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label><u> Does It Contains The Following:</u></label>
                                <br>
                                <input type="checkbox" name="home_made" value="Home Made Food items"/> Home Made Food
                                items<br>
                                <input type="checkbox" name="branded_food_items" value="Branded Food items"/> Branded
                                Food
                                items<br>
                                <input type="checkbox" name="liquid_items" value="Liquid items"/> Liquid items<br>
                                <input type="checkbox" name="medicine_items"
                                       value="Medicines - Allopathy/Ayurvedic/Homeopathic"/>
                                Medicines - Allopathy/Ayurvedic/Homeopathic<br>
                                <input type="checkbox" name="electronics" value="Electronics"/> Electronic items<br>
                                <input type="checkbox" name="other" value="Other"/> Other<br>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="other_item_box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Other Item Detail:</label>
                                    <input type="text" class="form-control" placeholder="Enter Other Item Detail"
                                           name="other_items"/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="head-align"><u>DESTINATION ADDRESS : </u></h4>
                    @if(!empty($destination_addresses))
                        @if(count($destination_addresses) !=0)
                    <h4 class="head-align address-book" id="address-book"><u>Add Address From Address Book(+)</u></h4>
                    <div class="address-block">
                        <div class="row">
                            @foreach($destination_addresses as $indexKey=>$address)
                            <a href="" data-id="{{$address->id}}" class="btn-destination-address">
                            <div class="col-sm-3" style="margin-top: 20px;">
                                <div class="card" style="padding: 15px;background-color: #fe9611;">
                                        <p style="float: right;color:#ffffff;">Add</p>
                                        <p class="address-color">Address {{++$indexKey}}</p>
                                        <h5 class="address-color"><b>{{$address->salutation}} {{$address->first_name}} {{$address->last_name}}</b></h5>
                                        <p class="address-line address-color">{{$address->city}} {{$address->state}}</p>
                                        <p class="address-line address-color">{{$address->country}}-{{$address->pincode}}</p>
                                </div>
                            </div>
                            </a>
                            @endforeach
                    </div>
                    </div>
                    @endif
                    @endif
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Firstname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter First Name"
                                       name="dc_fname"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Lastname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name"
                                       name="dc_lname"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Please Enter Street"
                                       name="dc_street"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode"
                                       name="dc_pincode"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State :</label>
                                <input type="text" class="form-control" placeholder="Enter State"
                                       name="dc_state"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>City <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter City"
                                       name="dc_city"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label ">Country<span class="mendatory_fields">*</span> </label>
                                <select class="form-control" name="dc_country" id="dc_country">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->name}}">
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
                                        <select class="form-control" name="dc_phone_code" id="dc_phone_code">
                                            <option value="">Country Code</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->phone_code}}">{{$country->iso}}
                                                    (+{{$country->phone_code}})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-8 ">
                                        <input type="text" class="form-control"
                                               name="dc_contact_no"
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="head-align"><u> PAYMENT METHOD : </u></h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Amount Transfer Options <span class="mendatory_fields"></span>:</label>
                                <br>
                                <input type="radio" name="payment_option" value="shoppre_account">
                                Transferwise.com or Bank
                                Transer
                                Name: INDIANSHOPPRE LLP , Account<br>&nbsp; &nbsp;&nbsp;&nbsp; Number: 917020057881967 ,
                                IFS
                                Code: UTIB0000009 ,
                                MICR Code:<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 560211002 , <u>E-mail ID:
                                    support@shoppre.com </u>, Swift Code: AXISINBB009<br>
                                <input type="radio" name="payment_option" value="paypal"> PayPal - 10% Extra -
                                support@shoppre.com<br>
                                <input type="radio" name="payment_option" value="paytm">
                                Paytm - {{env('PAYTM_CHARGE')}}% Extra - 9148357733
                                <br>
                                <input type="radio" name="payment_option" value="card"> Debit/Credit Card
                                <div class="clearfix"></div>
                                @if ($errors->has('payment_option'))
                                    <span class="error">{{ $errors->first('payment_option') }}</span>
                                @endif
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
                            <button type="submit" class="btn btn-block btn-shoppre">Confirm Pickup</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </section>
    <div id="schedule_load"></div>
    <section class="seo-sec">
        <div class="container">
            <center>
                <br>
                <h1 class="f-s-36 f-c-d-gray font-weight-900">ShoppRe Courier - <span class="f-c-blue">Global Shipping Made Easy</span>
                </h1>
            </center>

            <h2 class="f-s-18 f-c-d-gray f-w-8">How do you schedule a pickup for your package?</h2>
            <p class="f-s-16 f-c-gray">Call, chat with or email our 24/7 customer support to schedule a pickup. Our
                experts will show up at your door,
                no matter if its your home or office in just 48 hours. Or you can come to ShoppRe facility to drop your
                package off.
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
                The easiest ways to reach us would be through call, text (WatsApp, SMS), email or directly from our
                website.
                You can <a href="{{route('customer.register')}}">sign up for FREE</a> to start shipping with us!
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
            <p class="f-s-16 f-c-gray"> Pickup Charges will be applicable based on the weight of the content/items/products.
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
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
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
                $('.login-blox').css('display','none');
                $('.signup-blox').css('display','block');
            });

            $('#btn-login-block').click(function () {
                console.log('btn-signup');
                $('.login-blox').css('display','block');
                $('.signup-blox').css('display','none');
            });

            $("#form-pickup").validate({
                rules:
                    {
                        first_name: {required: true},
                        last_name: {required: true},
                        user_email: {required: true},
                        phone_code: {required: true},
                        mobile: {required: true},
                        no_of_packages: {required: true},
                        package_weight: {required: true},
                        package_items: {required: true},
                        payment_option: {required: true},
                        pc_fname: {required: true},
                        pc_lname: {required: true},
                        pc_street: {required: true},
                        pc_pincode: {required: true},
                        pc_city: {required: true},
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
                        phone_code: {required: 'Select Phone Code'},
                        mobile: {required: 'Please Enter Mobile No.'},
                        no_of_packages: {required: 'Please Enter No of Packages'},
                        package_weight: {required: 'Please Enter Package Weight'},
                        package_items: {required: 'Please Enter Package Items'},
                        payment_option: {required: 'Please Select Payment Option'},
                        pc_fname: {required: 'Please Enter First Name'},
                        pc_lname: {required: 'Please Enter Last Name'},
                        pc_street: {required: 'Please Enter The Street'},
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
                    var phone_code = $("select[name='phone_code']").val();
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
                    // alert(email);
                    var token = $('input[name=_token]').val();
                    $("#schedule_load").show();
                    jQuery.ajax({
                        url: 'check/authenticate',
                        type: "GET",
                        success: function (res) {
                            console.log('Auth', res);
                            if (res.status === 'authenticated') {
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
                                        comment: comment
                                    },
                                    success: function (data) {
                                        $("#schedule_load").hide();
                                        // $('#scheduleModel').modal('show');
                                        // $('#popup1').css('display', 'block');
                                        window.location.href = "https://www.shoppre.com/schedule-pickup/confirm";
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

                    return false;
                }
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
                    console.log('email',email);
                    console.log('password',password);

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
                                $('#normal_login_block').css('display','none');
                                $('#ajax_login_block').css('display','block');
                                $('#ajax_customer_username').text(res.name);

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
                    console.log('name',name);
                    console.log('password',password);

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
                                $('.login-blox').css('display','block');
                                $('.signup-blox').css('display','none');
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
                $('.address-block').slideToggle( "slow");
            });

            $('.btn-destination-address').click(function () {
                const address_id = $(this).attr('data-id');
                jQuery.ajax({
                    url: 'schedule-pickup/ajax/destination-address',
                    type: "POST",
                    data: {
                        id:address_id
                    },
                    success: function (data) {
                       console.log('Address Data',data);
                       if (data.status==='success') {
                           $("input[name='dc_fname']").val(data.address.first_name);
                           $("input[name='dc_lname']").val(data.address.last_name);
                           $("input[name='dc_street']").val(data.address.line1+data.address.line2);
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
    </script>
@endsection
