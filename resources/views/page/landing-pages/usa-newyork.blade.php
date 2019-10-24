@extends('layout')

@section('title', 'Fast Shipping service from India to New York, USA | ShoppRe')
@section('description', 'International shipping service from India to New York. We offer clothes, medicine, furniture shipping, relocation & more. Call Now Or Get Free Quote.')
@section('keywords', 'international shipping from india, online shopping, india to new york')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/shipping-from-india-to-usa/new-york" />

    <meta property="og:title" content="Cheap Shipping from India to New York with ShoppRe"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/shipping-from-india-to-usa/new-york"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/priyamani-shoppre-online-shopping-in-india.jpg')}}"/>
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="India to New York" />
    <meta property="og:description" content="Get Cheap Shipping to New York with ShoppRe Parcel Forwarding and Consolidation service."/>
    <meta property="og:site_name" content="ShoppRe New York"/>

    <style>
        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}
        .first-time-shipment .div-snow{padding-top:146px}
        .first-time-shipment .div-snow img{position:absolute}
        .first-time-shipment .div-snow img{margin-left:-18px;position:absolute}
        .first-time-shipment .div-newyear{padding-top:206px}
        .first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:600px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection


@section('content')

    <section class="first-time-shipment">
        <div class="container no-padding">
           <div class="col-md-12 col-xs-12 no-padding">
               <center>
                   <a href="{{route('customer.register')}}"><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/tape_signup.svg" alt="shoppre signup" > </a> <br>
               </center>
               <center>
                   <h18 class="f-s-50 f-c-white  f-w-9">₹200 Discount</h18>
                   <p class="f-s-30 f-c-white f-w-9 ">on your First Shipment to NEW YORK from India </p>
                   <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="frst50 shoppre" > <br><br>
                   <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE </a>
                   <br>
                   <br>
                   <br>
                   <p class="f-s-12 f-c-l-gray f-w-8">Shipping services to New York from India</p>

               </center>
           </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">The most reliable and fast shipping from India to New York</h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=918277919191&text=I%27m%20Looking%20for%20Shipping%20Service%20to%20New%20York,%20USA%20from%20India" target="_blank" title="Click to WhatsApp">
                        <img src="/img/images/christmas-contact.png" alt="shoppre contact number 8277919191">
                    </a>
                </div>
            </div>

            <div class=" col-md-12 no-pad"><br>
                <center>
                <h2 class="p-color-cement-dark f-w-9 font-30">Low Cost Shipping from India to New York, USA</h2>
                </center>
                <h4 class="f-s-20 f-c-gray f-w-9">Choose ShoppRe for international shipping from India to New York as we offer the cheapest and the best way
                    to send your courier from India to USA with our trusted courier partners.</h4>
                <br>
                <p class="header4 p-color-cement">India has the world’s largest diaspora population in New York. The reason is better infrastructure,
                    facilities, the standard of living, better career prospects and
                    financial stability. Many people move to pursue their masters or Ph.D. course while others are just working migrants.
                </p>
                <br>
                <p class="header4 p-color-cement">Consequently, there is an enormous online shopping from India, which faces many problems like high shipping
                    charges from India, lost packages, delayed delivery, etc. But we at ShoppRe offer you a reliable, fast and low-cost shipping service with
                    our renowned courier partners DHL and DTDC. So do hassle-free <a href="/shop-from-india-ship-worldwide">online shopping from India</a> and will deliver it to you within 3-6 days.
                </p>
                <br>
                <h4 class="f-s-20 f-c-gray f-w-9"><i>Here is a special discount of ₹200/- Off on your first international shipment to New Jersey, use code: FRST50</i></h4>
                <br>
                <br>


                <div class="col-md-6 col-md-offset-3  col-sm-12 col-xs-12 no-pad">
                    <div class="col-md-12 col-sm-12 col-xs-12  no-pad">
                        <div class="calculator cal_block" style="padding: 04px 04px 04px !important; ">
                            <center><h3 class="text-red">International Shipping Calculator</h3></center>

                            <span id="calc_error" style="display: none;">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
                            <form class="calc-form ng-pristine ng-valid ng-submitted" id="shipping" novalidate="novalidate">
                                <input type="hidden" name="_token" value="txUccFXVS9erPpnHxSRGRYb89WomjhaEnx3m5HuQ">
                                <div class="form-group">
                                    <label class="col-sm-12">Check your shipping cost from India to New York</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2 valid" name="country" aria-required="true">
                                            <option value="226">
                                                New York, USA
                                            </option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label" style="top: 8px;">What is your package
                                        type?</label>
                                    <div class="col-sm-7">
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="type" value="nondoc" checked="">Non Document
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="checkbox-inline">
                                                <input type="radio" name="type" value="doc">Document
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 control-label">How much does your package weight in KG?</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control valid" value="1" id ="weight" name="weight" placeholder="Enter Weight" aria-required="true">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="clearfix"></div>
                                <div class="col-sm-12 ">
                                    <button id="getRates" class="btn btn-block btn-shoppre">
                                        GET RATES
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                            <div id="ship_result" class="calc-result" style="display: block;">
                                <br>
                                <h4 class="text-red margin_cost">Estimated Shipping Cost*</h4>
                                <div class="result table-responsive text-center">
                                    <table class="table table-bordered table-responsive">
                                        <tbody><tr>
                                            <td class="bg-white col-md-5  "><span id="ship_time" >3-6</span> Business Days
                                                <span class="text-red">*</span></td>
                                            <td><i class="fa fa-rupee" ></i> <span style="color:white;font-size:22px;" id="customer_rate"></span></td>
                                        </tr>
                                        </tbody></table>
                                    {{--<tr>--}}
                                        {{--<td colspan="2" style="background-color:white">--}}
                                            <span style="color:red;font-size:18px" id="contact"></span>
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                </div>

                            </div>
                            <div id="calc_load" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <br>
                <div>
                <center><a href="/customer/register" target="_blank" class="btn btn-s-b btn-b-g">Sign Up for FREE & Ship with us</a></center>
                </div>
            </div>
        </div>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="p-color-cement-dark f-w-9 font-22">Some other questions that you might have</h1>
            </center>
            <h2 class="p-color-cement-dark f-w-9 font-18">1. Can you courier medicines from India to New York?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, we courier medicine, ayurvedic medicines and herbs from India to New York starting at just ₹1449/-. For shipping medicines from India to
                New York, you will just need the doctor’s prescription and the commercial bill and we will arrange a pick up at your doorstep for your package.

            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">2. Can you ship snacks from India to New York?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, we do have a food courier service from India to New York. But you cannot send certain items like Perishable
                Foods, Ghee, rice, etc that fall under the prohibited item's category.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">3. Can you ship wedding sarees from India to New York?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, you can ship sarees from India to New York with our
                <a href="/international-courier-shipping-services-india" target="_blank">safe and secure shipping service</a> partners DHL and DTDC.
                And you can even do online shopping for wedding sarees and get them shipped to New York with our package forwarding service from India.
            </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">4. How to send rakhi to New York from India online?</h2>
            <p class="p-color-cement f-w-9 font-9">Just sign up to Shoppre and schedule a pickup, while our experts pick up the package containing rakhi you pay for the
                low-cost shipping, and with the help of renowned courier services like DHL and DTDC you get your package delivered safely within 3-6 days at your doorstep.
          </p>
            <br>
            <h2 class="p-color-cement-dark f-w-9 font-18">5. Can you ship books from India to New York?</h2>
            <p class="p-color-cement f-w-9 font-9">Yes, you can ship books from India to New York or any part of the world through ShoppRe.
                Your parcel will be taken care of. We make shipping books from India to New York completely hassle-free
            </p>
            <br>
            <br>
            <div>
                <center><a href="/customer/register" target="_blank" class="btn btn-s-b btn-b-g">Sign Up for FREE & Ship with us</a></center>
            </div>
            <br>
            <br>
            {{--<s features>--}}
        </div>

    </section>
    <br>
    <br>

    <section>
        <div class="container fst-service" style="margin-top: 1px">
            <div class="row">
                <div class="row">
                    <h2 class="f-s-20 f-c-d-gray font-weight-900 text-center" style="color: #4285f4">ShoppRe International parcel delivery to all USA cities, including </h2>
                    <br>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><span><a href="/shipping-from-india-to-usa/florida">Florida</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/las-vegas">Las Vegas</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/chicago">Chicago</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/los-angeles">Los Angeles</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/michigan">Michigan</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/new-jersey">New Jersey</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/austin">Austin</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/connecticut">Connecticut</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/north-america">North America</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/edison">Edison</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><span><a href="/shipping-from-india-to-usa/texas">Texas</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/california">california</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/virginia">Virginia</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/washington">Washington</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/san-francisco">San Francisco</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/illinois">Illinois</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/alabama">Alabama</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/detroit">Detroit</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/rockland-county">Rockland County</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/cupertino">Cupertino</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><span><a href="/shipping-from-india-to-usa/georgia">Georgia</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/arizona">Arizona</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/pennsylvania">Pennsylvania</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/colorado">Colorado</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/alaska">Alaska</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/delaware">Delaware</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/hawaii">Hawaii</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/arkansas">arkansas</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/palo-alto">Palo Alto</a></span></li>
                                <li><span><a href="/shipping-from-india-to-usa/caribbean">Caribbean</a></span></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <h2 class="f-s-18 f-c-d-gray font-weight-900 text-center" style="color: #4285f4">Get Cheap Shipping to the USA with ShoppRe Parcel Forwarding from online stores in India</h2>
                    <br>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><span><a href="/flipkart-online-shopping">Shop online from Flipkart to USA</a></span></li>
                                <li><span><a href="/ajio-online-shopping">Shop online from AJIO to USA</a></span></li>
                                <li><span><a href="/myntra-online-shopping">Shop online from Myntra to USA</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><span><a href="/amazon-online-shopping">Shop online from Amazon.in to USA</a></span></li>
                                <li><span><a href="/limeroad-online-shopping">Shop online from Limeroad to USA</a></span></li>
                                <li><span><a href="/nykaa-online-shopping">Shop online from Nykaa to USA</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><span><a href="/firstcry-online-shopping">Shop online from Firstcry to USA</a></span></li>
                                <li><span><a href="/fabindia-online-shopping">Shop online from Fabindia to USA</a></span></li>
                                <li><span><a href="/tatacliq-online-shopping">Shop online from Tata Cliq to USA</a></span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            <div class="mar-t-25">
                <div class="txt-center">
                    <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                        <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Indian Online Shopping Stores</p>
                        </a>
                    </button>
                    <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                        <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20from%20India%20and%20Ship%20to%20NEW-YORK?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Message Us On WhatsApp</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>
    </section>
    <br>
    <br>

    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
    <section class="d-contact-section-desktop">
        <div class="container " id="contact-support">
            <div class="row" id="d-contcat">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 " style="display: none">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
    </section>
@endsection


@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

                // submitHandler: function (form) {
            $("#getRates").click(function(e) {
                var country = 'US';
                var weight = $('#weight').val();
                var weight_unit = 'kg'; //  $("input[name='unit']:checked").val();
                var measurement_unit = $("input[name='measurement_unit']:checked").val();
                var package_type =  $("input[name='type']:checked").val();
                var length = 0;
                var width = 0;
                var height = 0;

                if (weight <= 70) {
                    debugger;
                    var queryParams = 'all=true&country=' + country + '&type=' + package_type + '&weight=' + weight;
                    queryParams += '&length=' + length + '&width=' + width + '&height=' + height;
                    queryParams += '&scale=' + measurement_unit + '&unit=' + weight_unit;
                    jQuery.ajax({
                        url: 'https://courier.shoppre.com/api/pricing?' + queryParams,
                        type: 'get',
                        success: function ({prices}) {
                            $('#customer_rate').text(prices[0].customerRate);
                            $('#contact').text(' ');
                        }
                    });
                    return false;
                } else {
                    $('#contact').text('For More than 70 kg please contact Shoppre');
                    $('#customer_rate').text(' ');
                }

            });
        });

    </script>
@endsection
