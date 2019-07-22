@extends('layout')

@section('title', 'Send Valentines Day Gifts | Ship LOVE from India | Save Upto 80% | Fast & Affordable')
@section('description', 'Looking for the perfect Valentine’s day gift to send overseas? Get us to ship it to your destination at the cheapest of shipping rates, taking just 3-6 days.')
@section('keywords', 'valentines, shipping, shopping, gifts, indian online shops, international shipping')

@section('css_style')
    <style>
        .bg-valentain {background-image: url(../../img/images/overlay1.png);height: 900px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 75px;}
        @media only screen and (max-width: 600px) {
            .bg-valentain {height: 1000px}
        }
    </style>

@endsection
@section('content')

    <section class="bg-valentain">
        <div class="container">
            <div class="col-sm-7 col-xs-12">
                <h1 class="f-s-45 f-c-white f-w-8 l-h-1">Ship LOVE from India</h1>
                <h1 class="f-s-26 f-c-white f-w-9 l-h-1">SAVE UPTO <span class="f-c-yellow">80%</span> | Fast & Affordable.</h1>
                <h1 class="f-s-26 f-c-white l-h-1 f-w-9">Starting from<span class="f-c-yellow">₹549/-</span><span class="offerprice">690/-</span>
                </h1>
                <div class="col-md-7 col-xs-12 div-diwali-coupon">
                    <div class="col-md-6 col-xs-5 no-pad"><br>
                        <h3 class="f-s-16 f-c-white f-w-9">CASHBACK CODE :</h3>
                    </div>
                    <div class="col-md-6 col-xs-7 no-pad">
                        <h1 class="f-s-40 f-c-yellow f-w-9">SFEB14</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5 col-xs-12 diwali-form-img">
                <form action=""  method="post" id="diwali_coupon">
                    {{csrf_field()}}

                    <div class="formFrame" id="diwali-couponcode1">
                        <div class="form-group" >
                            <a href="tel:+91-8277919191">
                                <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/christmas-contact.png" alt="">
                            </a>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="Name" class="form-control"
                                   placeholder="Enter the Name Here" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="ContactNumber" class="form-control"
                                   placeholder="Enter a Valid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label>E-Mail ID</label>
                            <input type="email" name="email" class="form-control"
                                   placeholder="Enter a valid E-mail ID" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="btnActivate" class="btn btn-s-r btn-b-r btn-l">Enquiry Now</button>
                        </div>
                        <p class="f-s-8 f-c-d-greay f-w-7">Your contact information will not be shared with any third party. We respect your privacy very much and you'll only be contacted as per relevance by us.</p>
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
                                    class="startsValidValue"> 1th Feb 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 17th Feb 2019</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                    class="startsValidValue"> SFEB14</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 offer-description">
                <label class="f-s-22 f-c-d-greay">Shop & Ship from 1000+ Indian online stores ‘Including :</label>
                <div class="row" style="padding-right:10px;padding-left: 30px">
                    <center>
                        <div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">
                            <center class="d-online-stores">
                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>
                            </center>

                        </div>
                        <div class="col-md-1  d-stores-box col-xs-6">
                            <center class="d-online-stores">
                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>
                            </center>
                        </div>
                        <div class="col-md-1  d-stores-box col-xs-4">
                            <center class="d-online-stores">
                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1.png"
                                     alt="Jabong"/>
                            </center>
                        </div>
                        <div class="col-md-1  d-stores-box col-xs-4">
                            <center class="d-online-stores">
                                <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="SnapDeal"/>
                            </center>
                        </div>
                        <div class="col-md-1  d-stores-box col-xs-4">
                            <center class="d-online-stores">
                                <img class="shoppingKart"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>
                            </center>
                        </div>

                    </center>
                </div>
                <br>
                <p class="f-s-16 f-c-gray f-w-4 l-h-2 ">Shop around in 1000+ Indian stores to help make your Valentines' extra special this year,
                    and get us to ship it to you at the cheapest of shipping rates as fast as it can reach you!   </p>


                <h1 class="f-s-18 f-c-d-greay f-w-7">Love is in the air and it is time to pull out all the stops and get the hopeless romantic in you out and about!</h1>
                <p class="f-s-16 f-c-gray">Celebrate this Valentine’s day with the magnificent beauty of Indian products and the versatility of Indian online shops.</p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">Looking for the perfect Valentine’s day gift to send overseas?</h1>
                <p class="f-s-16 f-c-gray"><a href="{{route('stores1')}}">Indian online shops</a> for sure will help you get the best gift for your loved one this year,
                    and make this one the most memorable ever! Online shopping from India is the best bet when it comes to
                    Valentine’s day gifts, in terms of price and quality.
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">How does online shopping & international shipping from india work though?</h1>
                <p class="f-s-16 f-c-gray">Since the most Indian online shops don’t offer international shipping; you  have to
                    consider <a href="{{route('forwarding')}}">parcel forwarding from India</a> by a third party as your best option.
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">How do we support international shipping from India?</h1>
                <p class="f-s-16 f-c-gray">ShoppRe provides you with a <a href="{{route('indianVirtual')}}">virtual shipping address</a> to where you can ship all your purchases.
                    We’ll receive them at our facility and store them in your personal locker and when you make a request to ship it and make
                    payment, your package will be on its way to the destination, taking just 3-6 days!
                </p>

                <h1 class="f-s-18 f-c-d-greay f-w-7">Now pick your favorite valentines’ indulgences from India, sit back & relax! </h1>
                <p class="f-s-16 f-c-gray">Send Valentine’s day gifts to USA, UK, UAE, Australia or anywhere around the world, we’ll be here to help you through it.</p>
                <br>

                <div class="offerDesc">
                    <h5>Cashback: Terms & Conditions</h5>
                    <ul>
                        <li>15% Cashback upto INR 250/-</li>
                        <li> This offer cannot be clubbed with any other. </li>
                        <li> The cashback goes to your Wallet. (Use Coupon: SFEB14 when you check-out).</li>
                        <li>The cashback would only be active during 1st Feb to 17th Feb 2019 .</li>
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
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
@endsection

@section('js_script')
    <script>
        $(document).ready(function(){$("#diwali_coupon").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(a){var e=$("input[name='email']").val(),n=$("input[name='Name']").val(),i=$("input[name='ContactNumber']").val(),o=$("input[name=_token]").val();jQuery.ajax({url:"valentines-cashback",type:"POST",data:{_token:o,email:e,name:n,contact_no:i},success:function(a){console.log(a),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}})});
    </script>
@endsection
