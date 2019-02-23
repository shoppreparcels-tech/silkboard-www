@extends('layout')

@section('title', 'International Courier Charges ₹570 from India to UAE | ShoppRe.com')
@section('description', 'Send international courier from India to UAE at ₹570. Courier Smartphones, Gifts, Documents, Sweets, Medicines, Clothes & more. Call us & Get Free Quote Today.')
@section('keywords', 'send international courier, india to uae, shipping rates, parcel forwarding, online shopping from india ')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/international-courier-charges-india-to-uae-per-kg" />
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
                    <h1 class="p-color-white header-spacing d-header-text">International Courier To UAE
                        <br></h1>
                    <h1 class="header1 p-color-white header-spacing">Starting @₹570/-</h1>
                    <table class="table table-bordered txt-a-c">
                        <tr>
                            <td class="btn-b-y tbl-br">
                                <h1>Pricing</h1>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹570</h1>
                                 <p><span>Per</span> 0.5 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹748</h1>
                                <p><span>Per</span> 1 Kg</p>
                            </td>
                            <td class=" div-b-w-s tbl-br">
                                <h1>₹1104</h1>
                                <p><span>Per</span> 2 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹1459</h1>
                                <p><span>Per</span> 3 Kg</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹1815</h1>
                                <p><span>Per</span> 4 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹2170</h1>
                                <p><span>Per</span> 5 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹3810</h1>
                                <p><span>Per</span> 10 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹6497</h1>
                                <p><span>Per</span> 20 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹15966</h1>
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
                        <a href="/medicine-international-courier-from-india">Medicine Courier Rates from India to UAE</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="/best-international-relocation-packers-movers">Package Forwarding from India to UAE</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/shop-from-india-ship-worldwide">Online Shopping from India to UAE</a>
                    </div>
                </center>
            </div>

            <div class="col-md-12 col-xs-12 ">
                <center>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/sellers-shipping">Seller Shipping Rates to UAE</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="international-courier-charges-india-to-usa-per-kg">Courier Rates from India to USA per kg</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="/flipkart-shopping-with-shoppre-from-india">Flipkart Shopping from India to UAE</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <center>
                <br>
                <h1 class="f-s-30 f-c-d-gray font-weight-900"> <span class="f-c-blue">Worried about the ridiculous courier charges from India to the UAE?</span></h1>
            </center>
            <br>
            <p class="f-s-20 f-c-gray">Here we come with the most reliable courier of all that's also the fastest courier from India to the UAE. ShoppRe Courier offers
                a fancy range of courier services at affordable rates.
            </p>
            <br>
            <p class="f-s-20 f-c-gray">Not only for mere couriers, but for international parcel forwarding from India to the UAE as well; ShoppRe has a wide variety of services.</p>
            <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">How much is the cost per kilogram to send a courier from India to Dubai?</h2>
            <p class="f-s-16 f-c-gray">ShoppRe offers the <a href="{{route('pricing')}}">cheapest shipping rates</a> possible (starting from Rs.570/-) and the cost per Kg.
                depends on the actual weight and the volumetric weight of the package and whichever higher.
            </p>
            <h2 class="f-s-18 f-c-d-gray f-w-8">Can we courier medicines from India to Dubai?</h2>
            <p class="f-s-16 f-c-gray">Of course you can. But it will fall under the category of Special Items for export for which you’re
                bound to pay some fees extra. Rest assured that you’ll have the best care possible for your package until it reaches its destination.
            </p> <br>
            <p class="f-s-16 f-c-gray">Learn more about <a href="/faq">special items here</a>. </p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">What is the most affordable way to send document couriers from India to the UAE?</h2>
            <p class="f-s-16 f-c-gray">The best option for cheap document courier to the UAE would be resorting to our Student Special Offer
                where document couriers of academic nature get sent at the cheapest of shipping rates possible and in just 3-6 days.
            </p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can we courier mobile phones or smartphones from India to Dubai?</h2>
            <p class="f-s-16 f-c-gray">Yes, you can. Phones of any nature comes under Electronics and will have to
                pay a nominal fee for handling them with extra attention.</p><br>
            <p class="f-s-16 f-c-gray">Vivo, Asus ZenFone, Realme 2 are the some popular Mobile phones/Smart Phones shipped from India these days.</p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can I send sweets and gifts to Dubai from here?</h2>
            <p class="f-s-16 f-c-gray"> ShoppRe runs several seasonal offers including over traditional holidays and most of them begin
                and end with sweets! To get our customers the chance of sending greetings and care packages to their loved ones abroad
                or for NRIs who crave Indian taste, we put up the best Courier services. </p> <br>


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
                    <a href="{{Constant::CHATURL}}" target="_blank"
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
                        url: 'api-pricing-uae',
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


