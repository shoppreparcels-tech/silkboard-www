@extends('layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')

@section('content')
    <section class="timeline">
        <div class="container ">
            <h3>Schedule Your Pickup</h3>
            <div class="schedule-container">
                <form class="form-horizontal" method="post" action="{{route('schedulePickup.Submit')}}">
                    {{ csrf_field() }}
                    <h4 class="head-align"><u>YOUR CONTACT DETAILS :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label>Firstname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter first name" name="first_name"
                                       required/>
                                @if ($errors->has('first_name'))
                                    <span class="error">{{ $errors->first('first_name') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Lastname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter last name" name="last_name"
                                       required/>
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
                                <input type="text" class="form-control" placeholder="Enter email" name="email"
                                       required/>
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('mobile') }}</span>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label label-padding">Phone<span class="mendatory_fields">*</span></label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <select class="select2 form-control" name="phone_code" required>
                                        <option value="">Country Code</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->phonecode}}">{{$country->iso}}
                                                (+{{$country->phonecode}})
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('code'))
                                        <span class="error">{{ $errors->first('code') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-4 box-size">
                                    <input type="text" class="form-control" name="mobile" placeholder="Phone Number" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="head-align"><u>PICK-UP ADDRESS :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Firstname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter first name"
                                       name="pc_fname" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Lastname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter last name"
                                       name="pc_lname" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State <span class="mendatory_fields">*</span> :</label>
                                <select class="select2 form-control" name="pc_state" required>
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
                                       name="pc_city" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Plaese Enter Street"
                                       name="pc_street" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode"
                                       name="pc_pincode" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Mobile <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile"
                                       name="pc_contact_no" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <h4 class="head-align"><u>PACKAGE INFORMATION :</u></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Weight Of Package(in kg)<span class="mendatory_fields">*</span> :</label>
                                <input type="number" class="form-control" placeholder="Enter package weight"
                                       name="package_weight" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Size Of The Package If You Are Aware( Length, Breadth and Height ) :</label>
                                <input type="text" class="form-control" placeholder="Enter package size (optional)"
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
                                       name="no_of_packages" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Items Of The Package <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Package Items"
                                       name="package_items" required/>
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
                                <input type="text" class="form-control" placeholder="Enter first name"
                                       name="dc_fname" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Lastname <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter last name"
                                       name="dc_lname" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Street <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Plaese Enter Street"
                                       name="dc_street" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-align">
                                <label>Pincode <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Pincode"
                                       name="dc_pincode" required/>
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
                                       name="dc_city" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label ">Country<span class="mendatory_fields">*</span> </label>
                                        <select class="select2 form-control" name="dc_country" required>
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
                                        <select class="select2 form-control" name="dc_phone_code" required>
                                            <option value="">Country Code</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->phonecode}}">{{$country->iso}}
                                                    (+{{$country->phonecode}})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-8 ">
                                        <input type="text" class="form-control" name="dc_contact_no"
                                               placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="head-align"><u> PAYMENT METHOD : </u></h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Amount Transfer Option <span class="mendatory_fields">*</span>:</label>
                                <br>
                                <input type="radio" name="payment_option" value="shoppre_account" required>
                                Transferwise.com or Bank
                                Transer
                                Name: INDIANSHOPPRE LLP , Account<br>&nbsp; &nbsp;&nbsp;&nbsp; Number: 917020057881967 ,
                                IFS
                                Code: UTIB0000009 ,
                                MICR Code:<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 560211002 , <u>E-mail ID:
                                    support@shoppre.com </u>, Swift Code: AXISINBB009<br>
                                <input type="radio" name="payment_option" value="paypal"> PayPal - 10% Extra -
                                support@shoppre.com<br>
                                <input type="radio" name="payment_option" value="paytm"> Paytm - 3% Extra - 9148357733
                                <div class="clearfix"></div>
                                @if ($errors->has('payment_option'))
                                    <span class="error">{{ $errors->first('payment_option') }}</span>
                                @endif
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
@endsection

@section('js_script')
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
        });
    </script>
@endsection