@extends('layout')

@section('title', 'Diwali 2019 Offer | Hassle Free Shipping Worldwide from India')
@section('description', 'Send your greetings off to your loved ones abroad. Our Grand Diwali Shipping Offer is Here. We offer 15% OFF on international shipping costs up to Rs.300')
@section('keywords', 'diwali, offer, shopping, shipping')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/diwali-offer" />

    <meta property="og:title" content="ShoppRe - Grand Diwali Offer 2019"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/diwali-offer"/>
    <meta property="og:image" content="{{env('AWS_CLOUD_FRONT')}}/img/images/diwali-offer-shipping-2019.png')}}"/>
    <meta property="og:image:alt" content="ShoppRe Diwali Offer" />
    <meta property="og:description" content="SAVE Up To 80% + ₹250 Cashback Offer on Shipping costs for international shipments. Celebrate DIWALI with ShoppRe. "/>
    <meta property="og:site_name" content="ShoppRe"/>

@endsection

@section('content')

    <section class="bg-diwali-landing-page">
        <div class="container">
            <br>
            <br>

            <div class="col-sm-7 col-xs-12">
                <h1 class="header1 p-color-white header-spacing">SAVE UPTO
                    <span class="p-color-yellow">80%</span></h1>
                <h1 class="p-color-white header-spacing header-landing-page">Celebrate <span class="p-color-yellow">DIWALI</span><br/>with
                    ShoppRe</h1>
                <h1 class="header1 p-color-white header-spacing txt-italic">*Cashback of
                    <span class="p-color-yellow">₹250/-</span>
                </h1>
            </div>

            <div class="col-sm-5  col-sm-12 col-xs-12 diwali-form-img">
                <form action=""  method="post" id="diwali_coupon">
                    {{csrf_field()}}
                    <div class="formFrame" id="diwali-couponcode1">
                       <center>
                           <div class="form-group">
                               <h4 class="f-s-22 f-c-blue f-w-9">1. Shop and Ship</h4>
                               <p class="txt-u-l">Coupon Code: SPD250</p>
                           </div>
                           <div class="form-group">
                               <h4 class="f-s-22 f-c-green f-w-9">2. Personal Shopper</h4>
                               <p class="txt-u-l">Coupon Code: SPD250</p>
                           </div>
                           <div class="form-group">
                               <h4 class="f-s-22 f-c-red f-w-9">3. International Courier</h4>
                               <p class="txt-u-l">Coupon Code: SCD250</p>
                           </div>
                       </center>
                        <div class="form-group text-center ">
                            <a onclick="{{Constant::CHATURL}}" href="" class="btn btn-d-activate-coupon text-white" style="padding: 14px 12px;">
                            Chat with us
                            </a>
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
                                    class="startsValidValue"> 25th SEP</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 31st OCT</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">Offer :<span
                                    class="startsValidValue"> Cashback</span></p>
                        </center>
                    </div>
                </center>
            </div>
            <div class=" col-md-12 offer-description">
                <h4 class="f-s-24 f-c-blue f-w-9"> Our Grand 🪔Diwali Offer Is Here! Hurry Up & Take Advantage!</h4>
                <br>
                <p class="header4 p-color-cement">While Indians around the world, not just in
                    the country; are gearing up to celebrate the holy
                    season of light taking over the darkness, we have a rather cool offer in store for you to
                    get yourself and your loved ones ready for the celebrations.</p>
                <br>
                <p class="header4 p-color-cement">We offer 20% OFF the <a href="/cheap-rates-international-shipping-cost-calculator" target="_blank" class="txt-u-l">shipping costs of
                        international shipments</a> for up to <strong>₹250 cashback</strong>, which you
                    can avail by using the Coupon Code, when you checkout in your ShoppRe Pay dashboard. Consider it a little something
                    from us for this Diwali and don’t hesitate to <strong><i>shop around for Indian ethnic wear</i></strong> or <strong><i> send your greetings off</i></strong> to your loved ones abroad.</p> <br>

                <div class="offerDesc">
                    <h4> What Else Do You Get Out of Our Offer? </h4><br>
                    <ul>
                        <li>Store your goods here at our facility for 20 days for FREE! </li>
                        <li>Get online Support</li>
                        <li>Get up to 80% OFF in shipping costs on top of the seasonal offer</li>
                        <li>A quick delivery within 3-6 days!”</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fafafb; margin-top: 10px">
        <div class="container" style="padding-top: 30px;">
            <center>
                <h1 class="header1 p-color-cement-dark">ShoppRe Services</h1>
            </center>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-s-s.svg" width="170" height="120" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement"><a href="/shop-from-india-ship-worldwide" target="_blank">Shop & Ship</a></h1>
                        <br/>
                        <p class="header4 p-color-cement">
                            Shop From Any Indian Store; Get It to a FREE Indian Virtual Address; We'll Ship It to Your Doorsteps!
                        </p>
                        <br/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-ps.svg" width="170" height="120" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement"><a href="/personal-shopper-india" target="_blank">Personal Shopper</a></h1>
                        <br>
                        <p class="header4 p-color-cement">
                            Payment Hassles at Checkout?
                            No Worries, Let Us Know What You Need; We'll Shop for You!</p>
                        <br>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-ic.png" width="170" height="120" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement"><a href="/international-courier-shipping-services-india" target="_blank">International Courier</a></h1>
                        <br>
                        <p class="header4 p-color-cement">
                            Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!
                            </p>
                        <br>

                    </div>
                </div>
                <div class="text-center">
                    <a href="{{route('customer.register')}}" class="btn header6 btn-get-assisted" style="background-color: #4285f4" target="_blank">Sign Up for Free</a>
                </div>
            </div>
        </div>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark" >Top Indian Festival Sale & Shipping Offers</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Big Billion Days"><span><a
                                        href="/flipkart-big-billion-days-sale-offers-top-brands-stores" target="_blank">Big Billion Days Sale 2019</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Great Sale"><span><a
                                        href="/amazon-great-indian-festival-sales-offers-prime-members-shopping-deals-shipping" target="_blank">Amazon Great Indian Festival</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Myntra Fashion"><span><a
                                        href="/myntra-big-fashion-days-sale-shop-online-india" target="_blank">Myntra Big Fashion Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="National Shopping Days"><span><a
                                        href="/flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india" target="_blank">National Shopping Days</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Right To Fashion"><span> <a
                                        href="/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" target="_blank">Myntra Right To Fashion Sale</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="diwali"><span><a
                                        href="/diwali-offer">Diwali Shipping Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                        href="/onam-community-shipping-offer">Onam Shipping Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="new year"><span><a
                                                                    href="/new-year-offer">New Year Shipping Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="student"><span><a
                                        href="/university-offer">Student Special Offer</a></span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="easter"><span><a
                                        href="/easter-shopping-from-india-with-international-shipping">Easter Shipping Offer</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                         <div class="panel ">
                            <ul>
                                <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Rakhi"><span><a
                                            href="/send-rakhi-gifts-online-worldwide-at-cheap-rates">Rakhi Online Shopping India</a></span></li>
                                <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="Yoga Organic Clothing"><span><a
                                            href="https://ship.shoppre.com/products-on-sale-pure-organic-yoga-clothing-and-products-made-in-india/" target="_blank">Yoga Organic Clothing Sale</a></span></li>
                                <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt="onam"><span><a
                                            href="/kerala-onam-online-shopping-guide-from-india">Onam online shopping</a></span></li>
                                <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span><a
                                            href="https://ship.shoppre.com/8-gorgeously-elegant-sarees-for-every-occasion-to-flaunt-your-curves-craftsvilla-handpicked-for-you/" target="_blank">Sarees Online Shopping</a> </span></li>
                                <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span><a
                                            href="https://ship.shoppre.com/cheap-and-best-hand-painted-art-paintings-to-ship-from-india-ship-internationally/" target="_blank">Hand-Painted Art Paintings</a></span></li>

                            </ul>
                     </div>
                 </div>
                <br/><br/>
            </div>
        </div>
        <br> <br>
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
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
                    {{--<a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"--}}
                       {{--class="header2 p-color-white">Chat Now</a>--}}

                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function(){$("#diwali_coupon").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(e){var a=$("input[name='email']").val(),n=$("input[name='Name']").val(),i=$("input[name='ContactNumber']").val(),o=$("input[name=_token]").val();jQuery.ajax({url:"diwali-offer",type:"POST",data:{_token:o,email:a,name:n,contact_no:i},success:function(e){console.log(e),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}})});
    </script>
@endsection
