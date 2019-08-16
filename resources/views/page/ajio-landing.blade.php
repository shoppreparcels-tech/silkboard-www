@extends('layout')

@section('title', 'AJIO Online Shopping and International Shipping from India | ShoppRe.com')
@section('description', 'Shop online from Ajio and Ship Internationally with ShoppRe Upto 220+ countries. The fast & cheapest way to ship your package from India. Sign Up Free.')
@section('keywords', 'ajio international Shipping, ship india')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/ajio-online-shopping-international-shipping" />
    <style>
        .bg-ics-landing-page .container>div{margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.christmas-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-121px;padding:20px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}.flipkart-h1{font-size:25px}.christmas-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.christmas-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}#packing:hover{display:none}
    </style>
@endsection
@section('content')

    <section class="bg-ics-landing-page">
        <div class="container">
            <br>
            <br>
            <h1 class="f-s-36 f-c-white f-w-8">Shop and Ship your porducts from AJIO.com</h1>
            <p class="f-s-22 f-c-white">Own a Free Virtual Shipping Address and Ship Internationally at Low Rates</p>
            <br>
            <p class="f-s-22 f-c-white">Place your order in AJIO Store with your ShoppRe Indian Address.</p>
            <br>
            <p class="f-s-22 f-c-white">We Consolidate Your Packages & Ship to You from India to 200+ Countries, 3-6 days delivery.</p>
            <br>

            </p>
            <div class="col-md-12 col-xs-12 no-pad">
                <a href="/customer/register" class="btn btn-s-r btn-b-r btn-a-l">Create My Free Address</a>
                {{--<a href="/indian-online-stores" class="btn btn-l btn-s-b btn-b-b btn-a-l">Indian Stores List</a>--}}
            </div>
        </div>
    </section>


    <section class=" ">
        <div class="container christmas-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align"></h2>
                </div>
                <div>
                    <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                        <a href="https://www.ajio.com/" title="AJIO" target="_blank">EVERYTHING ON SALE (Min. 50% Off) | Shop Ajio & Ship Worldwide with ShoppRe.</a>
                    </marquee>
                </div>
            </div>
            <div class=" col-md-12 offer-description">

                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <center>
                            <a href="https://www.ajio.com/" title="Shop AJIO & Ship Worldwide through ShoppRe" target="_blank">
                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/stores/ajio-online-shopping.png" alt="ajio.com">
                        </center>
                    </div>
                </div>

                <h2 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">AJIO.com Online Shopping in India & International Shipping
                    <br>Warehouse for unique designs to dress you up! </h2>
                <h4 class="p-color-cement" style="font-style:italic">Ajio is a farely new Indian online store that's mixes ethnic & chic with western designs,<br>
                    and creates something absolutely breathtaking.</h4>
                <br>
                <p class="header4 p-color-cement">From clothing & accessories to footwear & more, you'll find a ton of great picks on Ajio that's one of a kind.
                    They emphasis on putting up a fancy array of handpicked products from all your favorite brands possible.</p> <br>
                <p class="header4 p-color-cement">India is known for its ethereal conventions in design and peculiar chic taste that's passed down through
                    generations. Paired up with the global wave of fashion trends - they've got a winner! </p> <br>

                <p class="header4 p-color-cement">Since Ajio doesn't offer international shipping & if you are a global shopper residing out of India; you'd need a reliable courier to ship it to
                you while taking care of everything since the moment you place the order with the store, or even before.</p> <br>

                <p class="header4 p-color-cement">If you need help with the shopping itself, or paying for your purchases;
                    <a href="/personal-shopper-online-shopping-from-india-shipping">ShoppRe Personal Shopper</a> will jump in
                to help you out of the situation. All you have to do is, sit back and relax! Your shipment will be at your door in 3-6 business days no matter wherever in the world you are.</p><br>

                <div class="offerDesc">
                    <h2 class="header2 p-color-cement font-weight-900">How do we ease up your Ajio - online shopping?</h2>
                    <p class="header4 p-color-cement">Our streamlined set of Repackaging & Consolidation services, helps you cut the shipping costs down to 80% lower!
                        And, we make our solutions tailor-made, assisting you with all your needs on <a href="{{route('ifs.index')}}">online shopping from India & shipping it worldwide</a>.  </p>
                    <br>
                    <br>
                    <p class="header4 p-color-cement">All you have to do is; </p> <br>

                    <ul>
                        <li>Ship your Myntra purchases to the Virtual Address we provide for FREE,</li>
                        <li>Use our FREE unique personal locker to store them, and finally -</li>
                        <li>Pay the never-before-like shipping cost we charge and,</li>
                        <li>Your shipment will be on it's way to reach you in 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <br>
                <center>
                    <h4 class="p-color-cement-dark flipkart-h1">Payment Hassles with International Credit/Debit Cards?</h4>
                    <h5 class="header5 p-color-cement">Our Personal Shopper with top-of-the-line shopping concierge services will take
                        care of everything and help you along the way of your Indian shopping experience. </h5> <br>
                    <a href="https://www.ajio.com/?src=shoppre.com" class="btn-chris-place-order">Go Shopping Now!</a>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="shopandship ">
                        <h2>Shop & Ship</h2>
                        <br/>
                        <p>Shop From Ajio.com Store; Get a FREE Indian Virtual Address; We'll Ship It to Your Doorsteps!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ps">
                        <h2>Personal Shopper</h2>
                        <br>
                        <p>Payment Hassles at Checkout? No Worries, Let Us Know What You Need; We'll Shop for You at Ajio.com</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ic">
                        <h2>International Courier</h2>
                        <br>
                        <p>Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!</p>

                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
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
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personal Shipping Address</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>20-Days Free Package Storage</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Package Consolidation</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Repackaging</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personal Shopper Service</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Scanned of your documents</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Country-specific Discount</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>3-6 days delivery</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>International Courier Service</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Product Recommendations</span></li>
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
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Buying from AJIO.com from a different country?</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Well, what's the wait? Sign Up with us now for a lifetime of effortless</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Online shopping & high-end international shipping services from India!</h1>

                <br>
                <a href="{{route('customer.register')}}" class="btn-chris-place-order">Sign Up for Free</a>

            </center>
        </div>
    </section>
    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">to Shop Online from AJIO.com</span>?
                    </h1>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step 1</span>
                            <h1 class="header5 p-color-cement">Shop AJIO Products</h1>
                            <br>
                            <p class="p-color-cement header5">
                                Purchase your favourite & brand products from AJIO Indian online store & Set Cash on Delivery
                            </p>

                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Pay & Receive</h1>
                        <br>
                        <p class="header6 p-color-cement">We will pay for your order and will receive your order at our
                            ShoppRe Warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step 3</span>
                        <h1 class="header5 p-color-cement">Ship in @ 80%
                            Less Cost</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Save up to 80% in shipping costs as we wait around for 20 days for all your purchases to
                            reach us - for FREE, and repackage & ship them to your doorsteps as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Unbox Your
                            Package</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            We'll dispatch your shipment within 24 hours of you making a request to ship, and it will
                            reach you safe & sound within 3-6 days, no matter wherever in the world you are!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="https://www.shoppre.com/customer/login">Place Your AJIO Order Now!</a>
            </center>
            <br/><br/>
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
                    {{--<a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"--}}
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
@endsection
@section('js_script')
    <script>
        $(document).ready(function(){$("#packing").mouseover(function(){$("#packing").css({display:"none"}),$("#packed").css({display:"block"})}),$("#packed").mouseout(function(){$("#packing").css({display:"block",transition:"0.2s"}),$("#packed").css({display:"none"})}),$("#ics_lp").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(o){var c=$("input[name='email']").val(),s=$("input[name='Name']").val(),n=$("input[name='ContactNumber']").val(),a=$("input[name=_token]").val();jQuery.ajax({url:"send-international-courier-from-india",type:"POST",data:{_token:a,email:c,name:s,contact_no:n},success:function(o){console.log(o),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}}),$("#ics-box2").hover(function(){$("#ics-box2").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number2").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box2").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number2").css({color:"#677582"})}),$("#ics-box3").hover(function(){$("#ics-box3").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box1").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number3").css({color:"red"}),$("#number1").css({color:"#677582"})},function(){$("#ics-box1").css({"box-shadow":"0 -1px 30px rgba(103, 117, 130, 0.17)"," background-color":"#ffffff"}),$("#ics-box3").css({"box-shadow":"none"," background-color":"#ffffff"}),$("#number1").css({color:"red"}),$("#number3").css({color:"#677582"})})});
    </script>
@endsection



