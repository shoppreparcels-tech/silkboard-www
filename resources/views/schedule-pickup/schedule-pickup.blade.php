@extends('layout')

@section('title', 'Schedule A Pickup - Schedule Your Package Pickup Online | ShoppRe')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 3-6 business days.')
@section('keywords', 'package india, parcel service, schedule pickup, send food, courier services near me, delivery items, shipping rates')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/schedule-pickup" />
    <meta property="og:title" content="Schedule A Package Pickup with ShoppRe.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/schedule-pickup"/>
    <meta property="og:image" content="{{asset('img/images/schedule-pickup-package-in-india.jpg')}}"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="ShoppRe online shipping and international courier from India" />
    <meta property="og:description" content="Need to Schedule a package pickup online? Schedule your parcel quickly with ShoppRe from your home or office and we will deliver for you within 3-6 business days."/>
    <meta property="og:site_name" content="ShoppRe: Online Shipping Site in India"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="Schedule A Package Pickup with ShoppRe.com" />
    <meta name="twitter:description" content="Need to Schedule a package pickup online? Schedule your parcel quickly with ShoppRe from your home or office and we will deliver for you within 3-6 business days." />
    <meta name="twitter:image" content="{{asset('img/images/schedule-pickup-package-in-india.jpg')}}" />
    <meta name="twitter:image:alt" content="ShoppRe online shipping and international courier from India"/>
    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>
@endsection
@section('content')
    <section class="timeline">
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
            <h3>Schedule Your Pickup - <span style="color: red;font-size: 16px;">
                    <a class="bla-1" href="https://www.youtube.com/watch?v=lQi4Io_WH70">
                        Watch Video To Know More
                    </a>
                </span></h3>
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
                                        <select class="select2 form-control " name="phone_code" >
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
                                        <input type="text" class="form-control" id="sch-mobile-number" name="mobile" placeholder="Phone Number"  >
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
                                       name="pc_fname"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Last Name<span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name"
                                       name="pc_lname"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State <span class="mendatory_fields">*</span> :</label>
                                <select class="select2 form-control" name="pc_state"  >
                                    <option value="">Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->name}}">
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
                                       name="pc_city"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Please Enter Street"
                                       name="pc_street"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode"
                                       name="pc_pincode"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile"
                                       name="pc_contact_no"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Email :</label>
                                <input type="email" class="form-control" placeholder="Enter Email"
                                       name="pc_email"  />
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
                                       name="package_weight"  />
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
                                       name="no_of_packages"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Items Of The Package <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Package Items"
                                       name="package_items"  />
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

                    <h4 class="head-align"><u>DESTINATION ADDRESS :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Firstname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter First Name"
                                       name="dc_fname"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Lastname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name"
                                       name="dc_lname"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Please Enter Street"
                                       name="dc_street"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode"
                                       name="dc_pincode"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State :</label>
                                <input type="text" class="form-control" placeholder="Enter State"
                                       name="dc_state" />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>City <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter City"
                                       name="dc_city"  />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label ">Country<span class="mendatory_fields">*</span> </label>
                                        <select class="select2 form-control" name="dc_country"  >
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
                                        <select class="select2 form-control" name="dc_phone_code"  >
                                            <option value="">Country Code</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->phone_code}}">{{$country->iso}}
                                                    (+{{$country->phone_code}})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-8 ">
                                        <input type="text" class="form-control" id="sch-mobile-number" name="dc_contact_no"
                                               placeholder="Phone Number"  >
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
                                <input type="radio" name="payment_option" value="shoppre_account"  >
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
                                       placeholder="Enter Any Extra Comment ......." />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-offset-4">
                            <button type="submit"  class="btn btn-block btn-shoppre">Confirm Pickup</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </section>
    <div id="schedule_load"></div>
@endsection

@section('js_script')
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            $('input[name="other"]').click(function () {

                if (this.checked) {
                    $(".other_item_box").css("display", "block");
                }
                else {
                    $(".other_item_box").css("display", "none");
                }
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
                        url: 'api/schedule-pickup/submit',
                        type: "POST",
                        data: {
                            _token: token,
                            first_name: f_name ,
                            last_name: l_name ,
                            user_email: email ,
                            phone_code: phone_code ,
                            mobile: mobile,
                            no_of_packages: no_of_packages,
                            size_of_package:package_size,
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
                            pc_pincode:pc_pincode,
                            pc_state: pc_state,
                            pc_contact_no: pc_contact_no,
                            pc_email: pc_email,
                            dc_fname: dc_fname,
                            dc_lname: dc_lname,
                            dc_street: dc_street,
                            dc_city:dc_city,
                            dc_state: dc_state,
                            dc_country: dc_country,
                            dc_pincode: dc_pincode,
                            dc_phone_code: dc_phone_code,
                            dc_contact_no: dc_contact_no,
                            comment: comment
                        },
                        success: function (data){
                            $("#schedule_load").hide();
                            // $('#scheduleModel').modal('show');
                            window.location.replace("{{route('schedulePickup.confirmPickup')}}");
                            console.log(data);
                        }
                    });
                    return false;
                }
            });
        });
    </script>
@endsection
