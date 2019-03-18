@extends('layout')

@section('title', 'International Parcel Forwarding | Shipping Packages from Indian E-commerce Stores')
@section('description', 'Want to courier abroad from India? We ship to 2220 countries. Send homemade food, sweets, utensils, cloths, books. Special Discounts rates for bulk shipments.')
@section('keywords', 'international courier, cargo services, shipping, delivery, schedule a pickup')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/international-parcel-forwarding-india-online-shopping" />
    <style>
        .bg-ics-landing-page .container > div {padding: 20px;margin-bottom: 3em}
        .d-header-text {font-size: 40px;font-weight: 900}
        .d-header-text1 {font-family: Montserrat -Italic;font-style: italic;line-height: 26px;margin-top: 25px}
        .box-steps p {line-height: 1;}
        .box-steps p span {font-size: 22px;font-weight: 900;}
        #packing:hover{display: none}
        .bg-ics-l-p{background-image: url(../../img/images/overlay1.png); height: 580px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 75px;        }
        .seo {background-color: #ffffff}
        .seo h1{font-size: 20px;color: #11273b;font-weight: 800}
        .seo p{font-size: 16px;color: #677582;font-weight: 600 }
        .seo  ul li{font-size: 16px;color: #677582;font-weight: 600 ;list-style:none}
        @media only screen and (max-width: 600px) {
            .bg-ics-l-p{height: 680px}
            .seo h1{font-size: 18px;}
            .seo p{font-size: 14px;}
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
                    <h1 class="p-color-white header-spacing d-header-text">International Parcel Forwarding: Shipping Packages from India
                        <br></h1>
                    <h1 class="header1 p-color-white header-spacing">Starting @₹570/-</h1>

                    <p class="p-color-white header5 d-header-text1">Want
                        to ship your packages abroad from India?<br>
                        We ship to 265 countries & our trusted courier partners DHL,<br> DTDC & more help us sail smooth
                        all the way to your<br> destination, 3-6 days delivery.</p>
                    <br>
                    <br>
                </div>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="/personal-shopper" class="btn btn-s-r btn-b-r btn-a-l">Buy For Me</a>
                    <a href="/indian-online-stores" class="btn btn-s-b btn-b-b btn-a-f-w">Indian Shopping Stores</a>
                </div>
            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 50px">
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame " id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        {{--<div class="form-group">--}}
                            {{--<label>Full Name <span class="p-color-red">*</span></label>--}}
                            {{--<input type="text" name="Name" class="form-control"--}}
                                   {{--placeholder="Enter Here" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label>Contact Number<span class="p-color-red">*</span></label>--}}
                            {{--<input type="text" name="ContactNumber" class="form-control"--}}
                                   {{--placeholder="Enter a Valid Phone number" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label>E-Mail ID<span class="p-color-red">*</span></label>--}}
                            {{--<input type="email" name="email" class="form-control"--}}
                                   {{--placeholder="Enter a valid E-mail ID" required>--}}
                        {{--</div>--}}
                        {{--<div class="form-group text-center">--}}

                        <div class="form-group">
                            {{--<a href="https://wa.me/918277919191?text=I'm%20interested%20in%20Shopping%20and%20Shipping%20from%20India%20" target="_blank" class="c-image">--}}
                            <img src="/img/images/christmas-contact.png" alt="">
                            {{--</a>--}}
                        </div>

                        <div class="form-group text-center div-align-items-l">
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                            <a href="tel:+91-8277919191" class="btn btn-s-r btn-a-l btn-b-r">Call: +91-8277919191</a>
                            {{--</button>--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                            <a href="https://api.whatsapp.com/send?phone=918277919191&text=Hi%20ShoppRe%20Team,%20%20I%27m%20looking%20for%20ParcelForwarding%20Quote%20from%20India" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                            {{--</button>--}}
                        </div>
                        </div>
                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <h1 class="header2 p-color-blue">Get a Quote</h1>
                        <div class="row">
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/request-sent.svg" alt="">
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Thank You.
                                    You Will Receive<br> Call Back Shortly from ShoppRe Team
                                </h5>
                            </center>

                        </div>
                        <div class="text-center">
                            <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-r btn-a-m">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="container no-padding">
            <center>
                <h1 class="f-c-d-greay f-s-30 f-w-8" >
                    International Package Forwarding from India
                </h1>
            </center>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-box-packing.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 " style="padding-top: 50px">
                <div class="row no-padding">
                    <center>
                        <h2 class="f-c-d-greay f-s-30 f-w-8 ">What You Can Get Us to Courier?</h2>
                        <p class="f-c-l-gray f-s-18 f-w-8">From Kids’ toys to commercial equipment, we are well-prepared to ship anything under the sun,
                            that follow the international & country-specific shipping regulations. These are some of the goods that we frequently ship for our customers </p>
                    </center>
                </div>
                <br>
                <div class=" col-md-12 col-xs-12 div-ics-prodcts">
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Sarees</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Footwear</li>
                            {{--<li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg')}}" alt=""> Personal goods</li>--}}
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> T-Shirts</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Smartphones</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Kurta & Kurtis</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt=""> Artificial Jewellery</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 no-padding">
                        <ul style="text-decoration: none; list-style: none">
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Corporate Gifts</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Children's Toys</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Handicraft </li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Mobile/Cell Phones</li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/Ellipse.svg" alt="">Religious Items</li>
                            <li>& Many More Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <sectoin class="seo">
        <div class="container"><br>
            <h2 class="f-s-24 f-c-d-greay f-w-8">International Parcel Forwarding from India</h2>
            <p>Ever wondered how to access 1000s of Indian E-commerce Stores without an Indian Address for delivery? If at all
                you are able to shop from different E-commerce platforms, you often face heavy costs and International shipping is a
                tedious & complex process for many. Or more often you end up troubling your relative in India to buy the items,
                pay for them, store them, pack it and find a place to courier them.
            </p> <br>
            <p>Worry no more! We have all this covered for you! ShoppRe.com provides a first class International Parcel Forwarding
                Service from India allowing those who reside outside India to purchase their favorite products from India and get
                it shipped to their doorsteps at an optimized rate and in a hassle-free manner in 3-6 days.
            </p>
            <h1>How we achieve this?</h1>
            <p>We provide a <a href="{{route('indianVirtual')}}">FREE Indian Shipping Address </a> or a Virtual Address in Bangalore. You can use this as address as the delivery address
                while checking out at any E-commerce Platform like Amazon.in, Myntra, Flipkart, Jabong, Ajio, Jaypore etc or any FB/Instagram Sellers.
                Your items will reach ShoppRe warehouse and you will be notified by Email. You are provided 20 days of FREE storage period within
                which you can purchase from various platforms and accumulate as many items as you want in your locker. In the end, we will repack
                & consolidate all these into one package and get it shipped to your doorstep ANYWHERE in the world in 3-6 business days!
            </p><br>
            <p>This storage, repackaging, and consolidation reduces the cost up to 60 - 80% as compared to sending them individually from each store.</p>
            <br>
            <p><span class="txt-italic">Example:</span> Weight of Item A - 0.75 Kg, Weight of Item B - 0.25 Kg</p> <br>
            <p><span class="txt-u-l">Case 1:</span> Sending both items to your FREE ShoppRe Virtual Address, consolidating and sending as 1 package to the USA;
                <br>Total Weight - 0.75 Kg + 0.25 Kg = 1Kg <br>
                Total Cost: INR 1742
            </p> <br>
            <p><span class="txt-u-l">Case 2: </span> Sending both separately; <br>
                The cost to send Item A (0.75 Kg) from 1 store to the USA - INR 1742 <br>
                The cost to send Item B (0.25 Kg) from the other store to the USA- INR 1526 <br>
                Total Cost: INR 3268
            </p> <br>
            <p>
                The Savings you make is 87% in Case 1. Imagine how much extra purchasing power this would give you in a month, in a year and in a lifetime!

            </p> <br>

            <h1>Good so far, but how does this make the shipping process hassle free?</h1>
            <p>We take care of the invoicing, customs process and all the paperwork required for export clearance from India.
                We will notify you at every step and also have a <a href="{{route('contact')}}">24/7 customer support</a>  which guides you at every point and
                clarifies all your doubts and queries. You will receive a tracking code as well to get the status of the shipment once dispatched from our facility.
                However, once the item reaches the destination country, customs duties would be as per the rules of the same and would not be under our control.
            </p>
            <h1>Hmm, what if I don't like the stuff ordered and need to return it?</h1>
            <p>Though we have a curated <a href="{{route('stores1')}}">list of the best stores listed here</a> and recommend all our customers to check the reviews to find the right products,
                we understand there are instances our customers could be worried about the product especially when they have to be shipped Internationally from India.
                Our solution is two-fold: </p><br>
            <ul>
                <li>1.  <span class="txt-italic">Photo Services</span>    - You can see the photo of every product realtime at a very subsidized rate and this
                    helps you understand if the product meets your expectation (especially in case of expensive items)
                </li>
                <br>
                <li>2. <span class="txt-italic">Return Services</span> - In case you are not happy with the product, you can raise a return request with the
                    E-commerce partner (as per their return policy) and we will assist you to return the item to the Store.
                </li>
            </ul>

            <p>However, once the item has reached your doorstep abroad, we cannot arrange for a return. You will have to send
                it back as a fresh import to India and this may work out to be pretty expensive.
            </p>
            <h1>Sometime I try to shop online but my debit/credit card does not seem to work. Can you help?</h1>
            <p>Yes we can. We have what is called <a href="{{route('personalShopper')}}">Personal Shopper services</a> where by you can tell us what to purchase and we purchase on your behalf.
                A small commission of 7% or INR 200  whichever is higher would be charged. So we do international shipping with online shopping from India.
            </p>
            <h1>Can you give me an idea about who your customers are?</h1>
            <p>Our customers are spread across the globe. He/she could be:</p> <br>
            <ul>
                <li> - Someone who stays outside India and is looking for a Shopping Forwarding Address/Shipping Forwarding Address Services</li>
                <br>
                <li> - Someone who is looking for a mail scanning and forwarding address services as they reside outside India and have important documents
                    to be received from banks or have magazines coming in their name. We act as a Virtual Postal Address.
                    For some this is also a Business Address for Mail Forwarding</li>
                <br>
                <li> - Sellers/owners residing in India and have a large customer base abroad use ShoppRe as their International Logistics
                    Partner (these are people who are selling on platforms like Etsy India, <a href="{{route('amazon.landing')}}">Amazon Global Store</a> or have independent e-commerce pages or FB/Insta Pages)</li>
                <br>
                <li> - Many sellers/owners who run businesses outside India use ShoppRe as their hub in India for Fulfillment Needs & Inventory Management.
                    They collect their inventory from different parts of India and store it in ShoppRe and distribute across the globe as per the orders that they receive.</li>
                <br>
            </ul>

            <h1>How is the shipping costing like?</h1>
            <p>You can <a href="{{route('pricing')}}">see more shipping per kg cost details</a></p> <br>
            <ul>
                <li>International parcel forwarding from India to USA starting only at  ₹1449</li>
                <br>
                <li>International parcel forwarding from India to UK starting only at  ₹1556</li> <br>
                <li>International parcel forwarding from India to Australia starting only at  ₹1499</li> <br>
                <li>International parcel forwarding from India to UAE starting only at  ₹566</li> <br>
                <li>International parcel forwarding from India to Canada starting only at  ₹1594</li> <br>
                <li>International parcel forwarding from India to Singapore starting only at ₹939</li> <br>
                <li>International parcel forwarding from India to Hongkong starting only at ₹1501</li> <br>
                <li>International parcel forwarding from India to Saudi Arabia starting only at ₹1517</li>
            </ul>

        </div>
        <br>
    </sectoin>

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
                        url: 'parcel-forwarding',
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
                            $('#diwali-couponcode2').slideDown();
                        }
                    })
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $("#ics-box2").hover(function () {
                $("#ics-box2").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box1").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number2').css({"color": "red"})
                $('#number1').css({"color": "#677582"})
            }, function () {
                $("#ics-box1").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box2").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number1').css({"color": "red"})
                $('#number2').css({"color": "#677582"})

            });
            $("#ics-box3").hover(function () {
                $("#ics-box3").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box1").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number3').css({"color": "red"})
                $('#number1').css({"color": "#677582"})
            }, function () {
                $("#ics-box1").css({
                    "box-shadow": "0 -1px 30px rgba(103, 117, 130, 0.17)",
                    " background-color": "#ffffff"
                });
                $("#ics-box3").css({"box-shadow": "none", " background-color": "#ffffff"});
                $('#number1').css({"color": "red"})
                $('#number3').css({"color": "#677582"})

            });

        });
    </script>
@endsection
@endsection


