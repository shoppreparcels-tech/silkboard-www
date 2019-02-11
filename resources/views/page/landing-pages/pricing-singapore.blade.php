@extends('layout')

@section('title', 'International Courier Charges Per Kg from India | Singapore')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
        .bg-ics-landing-page .container > div {padding: 20px;margin-bottom: 3em}
        .d-header-text {font-size: 40px;font-weight: 900}
        .d-header-text1 {font-family: Montserrat -Italic;font-style: italic;line-height: 26px;margin-top: 25px}
        .box-steps p {line-height: 1;}
        .box-steps p span {font-size: 22px;font-weight: 900;}
        #packing:hover{display: none}

        .seo-sec {background-color: #fff}
        .seo-sec a {text-decoration: underline}
        .ul-seo ul li{list-style: none;}
        .ul-seo li {font-size: 16px;font-weight: 600;color: #677582}

        table th, td{border: 2px solid #fdf699 !important; border-radius: 4px !important;}
        table th, td h1{color:#11273b;font-weight: 800; font-size: 20px}
        table th, td span{color:#929ca5;font-weight: 800; font-size: 16px}
        table th, td p{color:#507dbc;font-weight: 800; font-size: 16px}
        .bg-ics-l-p{background-image: url(../../img/images/overlay1.png); height: 580px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 60px;        }
        @media only screen and (max-width: 600px) {
            .bg-ics-l-p{height: 680px}
            table th, td h1{font-weight: 700; font-size: 15px}
            table th, td span{font-weight: 600; font-size: 13px}
            table th, td p{font-weight: 600; font-size: 13px}
        }
    </style>

@endsection
@section('content')

    <section class="bg-ics-l-p">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-8277919191" class="pull-right d-contact-img-desktop">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">
                </a>
                <a href="tel:+91-8277919191" class="d-contact-img pull-right">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">
                </a>
            </div>

            <div class="col-sm-7 col-xs-12 no-pad">

                <div class="col-md-12 col-xs-12 no-pad">
                    <h1 class="p-color-white header-spacing d-header-text">International Courier
                        <br></h1>
                    <h1 class="header1 p-color-white header-spacing">Starting @₹695/-</h1>
                    <table class="table table-bordered txt-a-c">
                        <tr>
                            <td class="btn-b-y tbl-br">
                                <h1>Pricing</h1>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹1579</h1>
                                 <p><span>Per</span> 0.5 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹1819</h1>
                                <p><span>Per</span> 1 Kg</p>
                            </td>
                            <td class=" div-b-w-s tbl-br">
                                <h1>₹2301</h1>
                                <p><span>Per</span> 2 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹2954</h1>
                                <p><span>Per</span> 3 Kg</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹3415</h1>
                                <p><span>Per</span> 4 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹3708</h1>
                                <p><span>Per</span> 5 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹6110</h1>
                                <p><span>Per</span> 10 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹10847</h1>
                                <p><span>Per</span> 20 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹29113</h1>
                                <p><span>Per</span> 50 Kg</p>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Schedule Pickup</a>
                    <a href="{{route('pricing')}}" class="btn btn-l btn-s-b btn-b-b btn-a-l">Estimate</a>
                    <br>
                    <br>
                    <a href="/first-time-international-shipment-offer" class="btn btn-s-r btn-b-r btn-f-w">Avail Your Discount on your First International Shipment. Use Code: FRST50</a>
                </div>

            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 50px">
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame div-form-get-quote" id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        <div class="form-group">
                            <label>Full Name <span class="p-color-red">*</span></label>
                            <input type="text" name="Name" class="form-control"
                                   placeholder="Enter Here" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number<span class="p-color-red">*</span></label>
                            <input type="text" name="ContactNumber" class="form-control"
                                   placeholder="Enter a Valid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label>E-Mail ID<span class="p-color-red">*</span></label>
                            <input type="email" name="email" class="form-control"
                                   placeholder="Enter a valid E-mail ID" required>
                        </div>
                        <div class="form-group text-center">
                            {{--<button type="submit" name="btnActivate" class="btn btn-d-activate-coupon"> GET A FREE QUOTE--}}
                            {{--</button>--}}
                            <button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r"> GET A FREE QUOTE
                            </button>
                        </div>
                        <p class="f-s-8 f-c-d-greay f-w-7">Your contact information will not be shared with any third party. We respect your privacy very much and you'll only be contacted as per relevance by us.</p>
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
                            <a href="{{route('customer.register')}}" class="btn btn-b-r btn-a-l btn-s-r">Sign
                            Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="seo-sec">
        <div class="container">
            <div class="col-md-12 col-xs-12 pad-t-20">
                <center>
                    <div class="col-md-4 col-xs-12 pad-20 ">
                        <a href="">courier charges from India to UAE</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="">courier charges from india to canada</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="">courier from india to australia</a>
                    </div>
                </center>
            </div>

            <div class="col-md-12 col-xs-12 ">
                <center>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="">courier from india to singapore</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="">courier charges from india to uk per kg</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="">courier from india to germany</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <center>
                <br>
                <h1 class="f-s-30 f-c-d-gray font-weight-900"> <span class="f-c-blue">International Courier From India to the USA</span>,
                    <br> Now Made Extremely Easy!</h1>
            </center>

            <p class="f-s-16 f-c-gray">Gone are the days when international shipping from India was full of hoops to jump through;
                now you can go on shopping in your favorite Indian shops, and sit back & relax!
                We'll take care of the rest!
            </p>
            <p class="f-s-16 f-c-gray">To check out the courier charges from India to the USA per kg - <a href="">Click here.</a></p>
            <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">How do I courier jewellery from India to the USA?</h2>
            <p class="f-s-16 f-c-gray">We offer to courier jewellery from India to the USA only that it should not be made of
                pricey metals such as Gold, Silver etc. or of costly stones.
                All the other type of jewellery which are not considered as fancy or priceless including ethnique jewellery
                can be shipped through ShoppRe. Now, shipping jewelry is made easy by ShoppRe!
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can you send medicines from India to the USA through courier?</h2>
            <p class="f-s-16 f-c-gray">Of course you can. To courier packages with medicines from India to the USA, it would require
                the original prescription and the invoice for Clearance as it falls under the category of Special Items for Export.
                And, you would need to pay a Special Clearance Fee as well for the extra-care and handling such packages.
                But rest assured that you’d get the best-quality services and a speedy delivery.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">What is the most affordable way to send document couriers from India to the USA?</h2>
            <p class="f-s-16 f-c-gray">The best option for cheap document courier to the USA would be resorting to our Student Special
                Offer where document couriers of academic nature get sent at the cheapest of shipping rates possible and in just 3-6 days.
                <br>
                Click here for the pricing for the same.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8"> How many days would it take for a courier to reach the USA from India?</h2>
            <p class="f-s-16 f-c-gray">For any shipment that’s shipped outside of India is guaranteed a delivery speed of 3-6 business days,
                granted there are no technical difficulties, which are rare. </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can I courier food items from India to the USA?</h2>
            <p class="f-s-16 f-c-gray"> Yes you can. We offer the best food-item courier service and you’d need to
                specify if it’s Homemade or Processed when you place an order though.</p> <br>
            <p class="f-s-16 f-c-gray">Check out this link - [ ] - to learn what all food items we ship.</p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can you courier mangoes from India to the USA?</h2>
            <p class="f-s-16 f-c-gray">Well, mangoes come under Special Items as it is a food item. You’d need to pay the Special Clearance
                Charges for clearing it through the customs and for handling it with extra care all through packing and shipping the same.
            </p> <br>
            <p class="f-s-16 f-c-gray">Click here to get a FREE estimate of your package.</p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">How long will it take for a package to reach its destination?
                Does it ever reach early?</h2>

        </div>
        <br>
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
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    <a href="https://lc.chat/now/10584982/"
                       target="_blank" class="header2 p-color-white">Chat Now</a>

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
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    <a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#ics_lp").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    debugger;
                    var email = $("input[name='email']").val();
                    var name = $("input[name='Name']").val();
                    var contact_no = $("input[name='ContactNumber']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'api-pricing-singapore',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            name: name,
                            contact_no: contact_no,
                        },
                        success: function (data) {
                            console.log(data);
                            $('#diwali-couponcode1').hide();
                            // $('#diwali-couponcode2').css('display','block');
                            $('#diwali-couponcode2').slideDown();
                        }
                    })
                }
            });

        });
    </script>

@endsection
@endsection


