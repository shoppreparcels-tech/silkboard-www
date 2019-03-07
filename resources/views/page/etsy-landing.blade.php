@extends('layout')

@section('title', 'Esty International Shopping & Shipping From India | ShoppRe.com')
@section('description', 'Shop wide range of products, jewelry, bags, clothing, home decor, Kids clothing, wedding accessories, sculpture & gifts at Etsy India & Ship at cheap Worldwide')
@section('keywords', 'etsy, e-commerce, factory-manufactured items, handmade, vintage items, jewelry, bags, clothing, home décor, furniture ')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/etsy-international-shipping-from-india" />

    <style>
        .bg-etsy-landing-page{background-image: url(../../img/images/overlay1.png);height: 560px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 70px;}
        .bg-etsy-landing-page .container > div {margin-bottom: 3em}
        .d-header-text {font-size: 40px;font-weight: 900}
        .d-header-text1 {font-family: Montserrat -Italic;font-style: italic;line-height: 26px;margin-top: 25px}
        .christmas-service {box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -121px;padding: 20px;}
        .box-steps p {line-height: 1;}
        .box-steps p span {font-size: 22px;font-weight: 900;}
        .flipkart-h1{font-size: 25px}
        .christmas-service .shopandship,.ps,.ic, h2{font-size: 22px;font-weight: 500;color: rgba(255, 255, 255, 0.6);}
        .christmas-service .shopandship,.ps,.ic, p{color: #ffffff;font-size: 16px;font-weight: 600;}
        .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
        .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}

        #packing:hover{display: none}
        @media only screen and (max-width: 600px) {
            .bg-etsy-landing-page{;height: 628px}
        }
    </style>

@endsection
@section('content')

    <section class="bg-etsy-landing-page">
        <div class="container">
            <br>
            <br>
            <h1 class="f-s-36 f-c-white f-w-8">Shop handmade or vintage items from Etsy India</h1>
            <p class="f-s-22 f-c-white">Get your Free Virtual Shipping Address and Ship Internationally from India</p>
            <br>
            <p class="f-s-22 f-c-white">Place your order in Etsy India Store with your Free ShoppRe India Address.</p>
            <br>
            <p class="f-s-22 f-c-white">Shop wide range of categories, such as jewelry, bags, clothing, home décor, wedding accessories & gifts</p>
            <br>

            </p>
            <div class="col-md-12 col-xs-12 no-pad">
                <a href="/customer/register" class="btn btn-s-r btn-b-r btn-a-l">Create My Free Address</a>
            </div>
        </div>

    </section>


    <section class=" ">
        <div class="container christmas-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align"></h2>
                </div>
            </div>

            <div class=" col-md-12 offer-description">
                <h2 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Etsy IN - The wonder world of arts & crafts!</h2>
                <h4 class="p-color-cement" style="font-style:italic">Etsy India contains a world full of fresh crafts with art filled in all of their products.
                    <br>This refreshing range of Indian merchandise from home decor to jewelry, is yours for the taking. </h4>
                <br>
                <p class="header4 p-color-cement">Indian sellers on Etsy sure know what it's about! The variety of designs on all their merchandise is
                    something to look out for. They offer a broad spectrum of products from handmade sweaters to expressionist wall art. </p><br>
                <p class="header4 p-color-cement">Since the platform of Etsy doesn't offer international shipping & if you are a global shopper residing out of India;
                    you'd need a reliable courier to ship it to you while taking care of everything since the moment you place the order with the store, or even before.</p> <br>
                <p class="header4 p-color-cement"><a href="{{route('ifs.index')}}">ShoppRe's Shop & Ship</a> gives you an Indian Virtual Address which you can ship your purchases to. With a FREE storage period of 20
                    days and a personal locker; you can shop all you want from the store and be rest assured that all your packages are safe and sound. </p> <br>
                <p class="header4 p-color-cement">If you need help with the shopping itself, or paying for your purchases;
                    <a href="/personal-shopper-shopping-concierge-from-india">ShoppRe Personal Shopper</a> will jump in to help you out of the
                    situation. All you have to do is, sit back and relax! Your shipment will be at your door in 3-6 business days no matter wherever in the world you are.</p> <br>
                <p class="header4 p-color-cement"><a href="{{route('dropShipping')}}" target="_blank">ShoppRe DropShipping</a> is another featured service you can use if you're a seller from India; you can get us to pick up the
                    products from the maunfacturers themselves and ship them to your customers. </p> <br>

                <div class="offerDesc">
                    <h2 class="header2 p-color-cement font-weight-900">How do we ease up your Etsy - online shopping experience?</h2>
                    <p class="header4 p-color-cement">Our streamlined set of Repackaging & Consolidation services, helps you cut the shipping costs down to 80% lower! And, we make our solutions
                        tailor-made, assisting you with all your needs on international shipping & thereby offering the
                        <a href="{{route('ics.index')}}">cheapest courier service from India</a>.</p>
                    <br>
                    <br>
                    <p class="header4 p-color-cement">All you have to do is; </p>

                    <ul>
                        <li>Ship your purchases to the Virtual Address we provide for FREE,</li>
                        <li>Use our FREE unique personal locker to store them, and finally</li>
                        <li>Pay the never-before-like shipping cost we charge and</li>
                        <li>Your shipment will be on it's way to reach you in 3-6 days!</li>
                    </ul>
                    <br>
                    <p class="header4 p-color-cement">Now, If you're a seller;</p>

                    <ul>
                        <li><a href="/schedule-pickup" target="_blank">Schedule a pickup for your packages</a>, giving us the address to go to (Using DropShipping)</li>
                        <li>Or, you can forward your packages from the manufacturer to our Shop & Ship - our international package forwarding service, we'll take it from there. </li>
                    </ul>
                </div>
                <br>
                <br>
                <center>
                    <h4 class="p-color-cement-dark flipkart-h1">International Credit/Debit Cards Giving You Trouble?</h4>
                    <h5 class="header5 p-color-cement">No worries! Our Personal Shopper will swoop in & take care of it all for you!</h5> <br>
                    <a href="https://www.etsy.com/in-en/?src=shoppre.com" class="btn-chris-place-order" target="_blank">Go Shopping Now!</a>
                </center>
            </div>
            <br>
            <br>
        </div>
        <br>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >Here Are Some of Our Many Featured Services & Benefits</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shipping Address</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Days Free Package Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper Service</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned of your documents</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-specific Discount</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>3-6 days delivery, online tracking</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>International Courier Service</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>

        </div>
    </section>
    <section>
        <br>
        <div class="container">
            <center>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Well, what's the wait? Sign Up with us now for a lifetime of effortless</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Online shopping & high-end Etsy/international shipping services!</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900"><a href="{{route('ifs.index')}}">Indian Online shopping with International Shipping</a></h1>
                <br>
                <br>
                <a href="{{route('customer.register')}}" class="btn-chris-place-order">Sign Up for Free</a>
                <h2 class="flipkart-h1 p-color-cement-dark font-weight-900">Find out more about the offers running now on etsy.com/in-en/</h2>
                <h3>Learn how to sell on Etsy & start setting up your seller account. </h3>
                <h3>Place an order on Etsy, from wherever you are! We'll ship'em to you.</h3>
                <h3>Want to learn more about the <a href="/faq">customs duties & taxes</a> concerning the US, UK & more first? </h3>
            </center>
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
                    <a href="https://lc.chat/now/10584982/"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>

@section('js_script')
    <script>
        $(document).ready(function () {
             $('#packing').mouseover(function () {
                 $("#packing").css({"display": "none"});
                 $("#packed").css({"display": "block"});
             });
            $("#packed").mouseout(function () {
                $("#packing").css({"display": "block" ,"transition":"0.2s"});
                $("#packed").css({"display": "none"});
            })
        })
    </script>
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
                        url: 'send-international-courier-from-india',
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


