@extends('layout')

@section('title', 'How to send 2019 Easter Gifts online from India? - ShoppRe.com')
@section('description', 'Send Easter gifts to your loved ones even when you are miles away at low-cost. Save up to 80% on international shipping cost.')
@section('keywords', 'easter 2019, send easter gifts, ')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/easter-shopping-from-india-with-international-shipping" />

    <style>
        .bg-valentain {background-image: url();height: 900px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 75px;}
        @media only screen and (max-width: 600px) {
            .bg-valentain {height: 1000px}
        }
    </style>

@endsection
@section('content')

    <section class="bg-valentain">
        <div class="container">

            <div class="col-sm-7 col-xs-12">
                <h1 class="f-s-45 f-c-black f-w-8 l-h-1">SAVE UPTO <span class="f-c-red">80%</span> | Shop & Ship from India</h1>
                <h1 class="f-s-26 f-c-black f-w-9 l-h-1">Send Easter Gifts Online across the Globe</h1>
                <h1 class="f-s-26 f-c-gray l-h-1 f-w-9">Starting from<span class="f-c-green">₹566/-</span><span class="offerprice">700/-</span>
                </h1>
                <div class="col-md-7 col-xs-12 div-diwali-coupon">
                    <div class="col-md-6 col-xs-5 no-pad"><br>
                        <h3 class="f-s-16 f-c-gray f-w-9">CASHBACK CODE :</h3>
                    </div>
                    <div class="col-md-6 col-xs-7 no-pad">
                        <h1 class="f-s-40 f-c- f-w-9">ESTR15</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5 col-xs-12 diwali-form-img">
                <form action=""  method="post" id="diwali_coupon">
                    {{csrf_field()}}
                    <br>
                    <div class="formFrame" id="diwali-couponcode1">
                        <div class="form-group" >
                            <a href="tel:+91-8277919191">
                                <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/christmas-contact.png" alt="">
                            </a>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label>Full Name</label>--}}
                            {{--<input type="text" name="Name" class="form-control"--}}
                                   {{--placeholder="Enter the Name Here" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label>Contact Number</label>--}}
                            {{--<input type="text" name="ContactNumber" class="form-control"--}}
                                   {{--placeholder="Enter a Valid Phone number" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label>E-Mail ID</label>--}}
                            {{--<input type="email" name="email" class="form-control"--}}
                                   {{--placeholder="Enter a valid E-mail ID" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group text-center">--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-b-r btn-l">Enquiry Now</button>--}}
                        {{--</div>--}}
                        <div class="form-group text-center div-align-items-l">
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                            <a href="tel:+91-8277919191" class="btn btn-s-r btn-a-l btn-b-r">Call: +91-8277919191</a>
                            {{--</button>--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                            <a href="https://api.whatsapp.com/send?phone=918277919191&text=Hi%20ShoppRe%20Team,%20%20Easter%20Cashback%20%E2%82%B9250" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                            <br>
                        <p class="f-s-8 f-c-d-greay f-w-7">We respect your privacy very much and you'll only be contacted as per relevance by us.</p>
                            <br>
                            <label class="f-s-16 f-c-d-gray">Offer Applicabel for all the services</label><br>
                            <label class="f-s-16 f-c-d-gray"><a href="/shop-from-india-ship-worldwide" target="_blank">Package Forwarding from India</a></label><br>
                            <label class="f-s-16 f-c-d-gray"><a href="/personal-shopper-shopping-concierge-from-india" target="_blank">Assisted Shopping Service</a></label><br>
                            <label class="f-s-16 f-c-d-gray"><a href="/international-courier-shipping-services-india" target="_blank">International Courier</a></label><br>
                    </div>

                    <div class="formFrame" id="diwali-couponcode2">
                        <div class="">
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-congratulation.png" alt="" style="width: 100%">
                        </div>
                        <div class="">
                            <center>
                                <h6 class="header5 p-color-blue">Congratulations!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To Use <br>Your Cashback!</h5>
                            </center>
                        </div>
                        <div class="text-center">
                            <a href="{{route('customer.register')}}" class="btn btn-a-l btn-b-r btn-s-r">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section >
        <div class=" container shopContainer no-padding">
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                    class="startsValidValue"> 11th Apr 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 22nd Apr 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                    class="startsValidValue"> ESTR15</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 offer-description">
                {{--<label class="f-s-16 f-c-d-gray">How would you feel if you could shower your spirit with hues of colors & delicious desi treats even if you aren't home this Holi?</label>--}}

                {{--<label class="f-s-16 f-c-gray">Then Why DELAY Re? USE ShoppRe! Your One-stop solution for all Shopping & Shipping Problems!</label>--}}
                {{--<br>--}}

                {{--<label class="f-s-22 f-c-d-greay">Shop & Ship from 1000+ Indian online stores ‘Including :</label>--}}
                {{--<div class="row" style="padding-right:10px;padding-left: 30px">--}}
                    {{--<center>--}}
                        {{--<div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">--}}
                            {{--<center class="d-online-stores">--}}
                                {{--<img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>--}}
                            {{--</center>--}}

                        {{--</div>--}}
                        {{--<div class="col-md-1  d-stores-box col-xs-6">--}}
                            {{--<center class="d-online-stores">--}}
                                {{--<img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>--}}
                            {{--</center>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1  d-stores-box col-xs-4">--}}
                            {{--<center class="d-online-stores">--}}
                                {{--<img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1.png"--}}
                                     {{--alt="Jabong"/>--}}
                            {{--</center>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1  d-stores-box col-xs-4">--}}
                            {{--<center class="d-online-stores">--}}
                                {{--<img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="SnapDeal"/>--}}
                            {{--</center>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1  d-stores-box col-xs-4">--}}
                            {{--<center class="d-online-stores">--}}
                                {{--<img class="shoppingKart"--}}
                                     {{--src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>--}}
                            {{--</center>--}}
                        {{--</div>--}}

                    {{--</center>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<p class="f-s-16 f-c-gray f-w-4 l-h-2 ">Shop around in 1000+ Indian stores to help make your 2019 Holi extra special,--}}
                    {{--and get us to ship to your destination at the <a href="{{route('pricing')}}">cheapest of shipping rates</a>. </p>--}}
                <h1 class="f-s-18 f-c-d-greay f-w-7">“LET EVERYTHING YOU DO BE DONE IN LOVE”</h1>
                <p class="f-s-16 f-c-gray">Easter is a great time to send someone, you know something lovely. So, how about surprising your loved ones by sending them a perfect gift overseas this easter?
                </p>
                <br>
                <p class="f-s-16 f-c-gray">Staying away from home is anyway a bad feel but if talking about the festival time , it’s the worst one. In such situation receiving a
                    gift from family and friends will surely make one’s day a bit easier and filled with happiness.
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">ShoppRe is here to help you buy and send Easter gifts to your loved ones even when you are miles away.</h1>

                <p class="f-s-16 f-c-gray">With the approaching easter you might be on the lookout for a perfect gifting option so, here are some really cool ideas to help you choose one.
                </p>
                <br>
                <div class="offerDesc">

                    <ul>
                        <li>Easter Cards</li>
                        <li>Easter clothes and toys as gifts</li>
                        <li>Easter baskets and hampers</li>
                        <li>Decorations for the home</li>
                        <li>Books</li>
                        <li>Chocolates</li>
                        <br>
                    </ul>

                </div>
                <h1 class="f-s-18 f-c-d-greay f-w-7">Once after selecting the gifts the question arises of “how to send them ?”</h1>
                <p class="f-s-16 f-c-gray">ShoppRe is here to help you with that. We provide you the facility of international shipping including <a href="/schedule-pickup" target="_blank">pickup</a>
                    from your location anywhere across the country.
                </p>
                <br>
                <div class="offerDesc">
                    <h5>Cashback: Terms & Conditions</h5>
                    <ul>
                        <li>15% Cashback upto INR 250/-</li>
                        <li> This offer cannot be clubbed with any other. </li>
                        <li> The cashback goes to your Wallet. </li>
                        <li>Use Coupon: <strong>ESTR15</strong> when you check-out.</li>
                        <li>Valid from 11th Apr to 22nd Apr 2019 .</li>
                        <li>This cashback is applicable only for international shipments.</li>
                        <li>The cashback can only be used to pay off your shipping costs.</li>
                        <li>Clearance charges are applicable for shipping Special Items - liquids & semi liquids such as cosmetics, medicines, oils & homemade food.</li>
                        <br>
                    </ul>

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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-8040944077" class="header2 p-color-white">+91 80 4094 4077</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#" class="header2 p-color-white">Chat Now</a>--}}
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
                    <a href="https://lc.chat/now/10584982/"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#diwali_coupon").validate({
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
                        url: 'valentines-cashback',
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
