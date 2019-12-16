@extends('layout')

@section('title', 'International Relocation Services, Packers Movers from India')
@section('description', 'Get a Free Quote. We do ship all the Residential and Corporate items specialising in packing and moving services. Save Upto 80% on International Moving Costs.')
@section('keywords', 'international relocation, packers, movers from india, shipping, virtual address, household packing, door pickup services, free shipment process, consolidation, repackaging')

@section('css_style')

    <link rel="canonical" href="https://www.shopprecouriers.com/best-international-relocation-packers-movers" />

    <style>
        .bg-ics-landing-page .container>div{padding:20px;margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}#packing:hover{display:none}.bg-ics-l-p{background-image:url(../../img/images/overlay1.png);height:580px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:75px}@media only screen and (max-width:600px){.bg-ics-l-p{height:680px}}
    </style>

@endsection
@section('content')
    <section class="bg-ics-l-p">
        <div class="container">
{{--            <div class="col-md-12">--}}
{{--                <a href="tel:+91-8277919191" class="pull-right d-contact-img-desktop">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">--}}
{{--                </a>--}}
{{--                <a href="tel:+91-8277919191" class="d-contact-img pull-right">--}}
{{--                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

            <div class="col-sm-7 col-xs-12 no-pad">

                <div class="col-md-12 col-xs-12 no-pad">
                    <h1 class="p-color-white header-spacing d-header-text">International Relocation Services, Packers & Movers from India
                        </h1>
{{--                    <h1 class="header1 p-color-white header-spacing">Starting @₹695/-</h1>--}}

                    <p class="p-color-white header5 d-header-text1">Relocation services to help you relocate from India.<br>
                        We ship to 220+ countries & our trusted courier partners DHL,<br> DTDC & more help us sail smooth
                        all the way to your<br> destination.</p>
                    <br>
                    <br>
                </div>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Schedule Pickup</a>
                    <a href="{{route('pricing')}}" class="btn btn-l btn-s-b btn-b-b btn-a-l">Estimate</a>
                </div>

            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 50px" >
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame" id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        <div class="form-group">
                            {{--<a href="https://wa.me/918277919191?text=I'm%20interested%20in%20Shopping%20and%20Shipping%20from%20India%20" target="_blank" class="c-image">--}}
                            <img src="/img/images/christmas-contact.png" alt="">
                            {{--</a>--}}
                        </div>

                    <div class="form-group text-center div-align-items-l">
                        {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
{{--                        <a href="tel:+91-8277919191" class="btn btn-s-r btn-a-l btn-b-r">Call: +91-8277919191</a>--}}
                        {{--</button>--}}
                        {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                        <a href="http://bit.ly/shpr-relocation" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                        {{--</button>--}}
                        <br>
                        <br>
                        <a href="https://www.surveymonkey.com/r/C7X2268" target="_blank" class="btn btn-s-b btn-a-l btn-b-r">Request A Free Quote Today!</a>
                    </div>

                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <h1 class="header2 p-color-blue">Get a Quote</h1>
                        <div class="row">
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/request-sent.svg" alt="">
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To start <br>scheduling your
                                    courier</h5>
                            </center>

                        </div>
                        <div class="text-center">
                            <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register" class="btn btn-d-signup">Sign
                                Up
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section class="product-courier ">
        <div class="container no-padding div-ics-border-btm">

            <center>
                <h1 class="f-c-d-greay f-s-30 f-w-8" >
                    <i>Are you relocating to another country or moving from India?</i><br>
                    We Ship to the USA, UAE, UK, Europe, Australia, New Zealand, Canada, Middle East & 220+
                    countries.
                </h1>
            </center>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packing.png" alt="" id="packing">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packed.png" alt="" id="packed" style="display: none">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 " style="padding-top: 50px">
                <div class="row no-padding">
                    <center>
                        <h2 class="f-c-d-greay f-s-22 f-w-8 ">Can I Ship Household Items from India?</h2>
                        <p class="f-c-l-gray f-s-18 f-w-8">Our comprehensive services support to relocating individuals, families and employees globally.
                            We do ship all the <strong class="f-s-18 f-c-blue">Residential and Corporate items</strong> specialising in packing and moving services.
                            Save Upto 80% on International Moving Costs.</p>
                    </center>
                </div>
                <br>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Packing Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Personal Baggage</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Household Packing</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Office Packing</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Labelling service</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" > Product Packaging </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul style="text-decoration: none; list-style: none">
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Loading Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Unloading Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Warehousing</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Bike Transportation </li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >Car Shifting</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" >& Many More Products</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="container div-ics-border-btm">
            <div class="col-md-12 col-xs-12 no-pad">
                <center>
                    <h1 class="f-s-30 f-c-d-greay">Features & Benefits of Our Services</h1>
                    <p class="f-s-20 f-c-gray">Get a FREE estimate for your courier, and schedule a pickup with us. We’ll come to your doorsteps to pick it up within 48 hours.
                        Our courier partners are known to reach your destination in 3-6 days, wherever in the world!’</p>
                    </br>
                </center>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Door to Door Pickup Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Customs Clearance And Paperwork</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Hassle Free Shipment Process</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Low Cost for higher Kgs</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Package Return Services</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Multiple Payment Options Available</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Consolidation & Repackaging</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">FREE Virtual Indian Address</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">20-day FREE, safe storage</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Doorstep delivery in 3–6 business days</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Wallet Cashback</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Real time online tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-12">
                    <div class="panel "><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <h1 class="header5 p-color-cement">Door-to-Door Delivery</h1>
                        <br/>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="panel ">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">Country-specific Discount</h1>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="panel">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/support24.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24/7 Support</h1>
                        <br>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="panel">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/ics-time.svg" alt="">
                        <br/>
                        <h1 class="header5 p-color-cement">24-hour Dispatch</h1>
                        <br>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>

        <div class="container">
            <center>
                <h1 class="header1  p-color-cement-dark">ShoppRe Relocation Process</h1>
                <p class="header3 p-color-cement">Schedule a Pickup from any part of India. We’ll come to your doorsteps,
                    get your package & ship it off to the destination in 24 hours.</p>
            </center>
        </div>

        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box1">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number1">1</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pic_up.svg">
                            <h2 class="header3 p-color-cement-dark">Pickup Package</h2>
                            <p class="header5 p-color-cement">
                                After getting your FREE estimate, fill in the order form accordingly and submit it to schedule your pickup.
                            </p>
                        </center>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box2">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number2">2</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-responsive  img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shipments.svg">
                            <h2 class="header3 p-color-cement-dark">We’ll Pick It Up</h2>
                            <p class="header5 p-color-cement">
                                Within 48 hours of you making the request, we’ll come to your doorsteps to pickup your package(s).
                            </p>
                        </center>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-sm-6 box" id="ics-box3">
                    <div class="box-steps" id="steps">
                        <center>
                            <p class="header8 p-color-cement"><span id="number3">3</span><br> step</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="img-process" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/deliver_package.svg">
                            <h2 class="header3 p-color-cement-dark">Dispatch in 24 Hours</h2>
                            <p class="header5 p-color-cement">
                                We’ll complete the documentation & dispatch your package(s) to one of our courier partners as soon as possible.
                            </p>
                        </center>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <center>
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Request Pickup</a>
                </center>
                <br>
                <br>
            </div>
            <br>
        </div>
    </section>

    <section style="margin-bottom: 50px">
        <div class="container" style="margin-top: 62px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-tailor.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="header1  p-color-cement-dark">Are you a Seller? <br>
                    Save more on shipping.</h1>
                <p class="header2 p-color-cement"><span
                        class="header2 p-color-blue"> Start your FREE 30 Day Trial</span>
                    to know how much you can save monthly on regular shipping</p>
                <div class="col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform"
                           class="btn btn-request-cal-back">Request Callback</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <a href="" class="btn btn-courier-know">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#"--}}
                       {{--class="header2 p-color-white">Chat Now</a>--}}
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
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

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
    </section>
@endsection
@section('js_script')

    <script>(function (t, e, s, o) {
            var n, a, c;
            t.SMCX = t.SMCX || [], e.getElementById(o) || (n = e.getElementsByTagName(s), a = n[n.length - 1], c = e.createElement(s), c.type = "text/javascript", c.async = !0, c.id = o, c.src = ["https:" === location.protocol ? "https://" : "http://", "widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd5lqUcpAZtddD7j_2B2IRQwlnWWrmf4OENw0MNm7JsllDL.js"].join(""), a.parentNode.insertBefore(c, a))
        })(window, document, "script", "smcx-sdk");</script>


    <script>
        $(document).ready(function(){$("#ics_lp").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(o){var c=$("input[name='email']").val(),n=$("input[name='Name']").val(),s=$("input[name='ContactNumber']").val(),f=$("input[name=_token]").val();jQuery.ajax({url:"send-international-courier-from-india",type:"POST",data:{_token:f,email:c,name:n,contact_no:s},success:function(o){console.log(o),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}}),$("#ics-box2").hover(function(){$("#ics-box2").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number2").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box2").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number2").css({color:"#677582"})}),$("#ics-box3").hover(function(){$("#ics-box3").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number3").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box3").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number3").css({color:"#677582"})})});
    </script>
@endsection



