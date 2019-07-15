@extends('layout')

@section('title', 'Shop Myntra Online & Ship Internationally From India | ShoppRe.com')
@section('description', 'Online Shopping from Myntra and Ship to US, UAE, Australia address & Upto 220+ countries. The cheapest way to courier your package from India. Sign Up for Free.')
@section('keywords', 'Myntra International Shipping, Online Fashion Store, ship usa, how to shop')

@section('css_style')
    <meta property="og:title" content="Shop online from Myntra fashion store & Ship Internationally with Shoppre" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/myntra-online-shopping-shipping-from-india" />
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg" />
    <meta property="og:image:width" content="2506">
    <meta property="og:image:height" content="1312">
    <meta property="og:image:alt" content="shoppre international shipping india" />
    <meta property="og:description" content="Buy in Myntra and Ship your purchases from India to USA, UK, UAE, Australia & such, at an affordable shipping cost." />
    <meta property="og:site_name" content="shoppre" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="go_shoppre" />
    <meta name="twitter:title" content="Myntra International Shipping from India " />
    <meta name="twitter:description" content="Shop in Myntra and courier your packages from India to USA, UK, UAE, Australia at a cheap courier cost." />
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg" />
    <meta name="twitter:image:alt" content="shoppre international shipping" />


 <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Myntra Online Shopping India with ShoppRe",
  "alternateName": "Myntra International Shipping",
  "url": "https://www.shoppre.com/myntra-online-shopping-shipping-from-india",
  "logo": "https://www.shoppre.com/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 8277919191",
    "contactType": "customer service"
  },
  "sameAs": [
    "https://www.facebook.com/goshoppre",
    "https://twitter.com/Go_Shoppre",
    "https://www.instagram.com/shoppre_official",
    "https://g.page/OnlineShoppingIndia",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre"
  ],
  "aggregateRating": {
    "@type" : "AggregateRating",
    "bestRating": "5",
    "ratingValue" : "4.8",
    "reviewCount" : "4560",
    "worstRating" : 3.5
  }
}
</script>

    <style>
        .bg-myntra {background-image: url(../../img/images/overlay1.png);width: 100%;background-position: center;background-repeat: no-repeat;
            background-size: cover;
            background-color: #fafafb;
            padding-top: 60px;
        }
        .bg-ics-landing-page .container > div {margin-bottom: 3em}
        .d-header-text {font-size: 40px;font-weight: 900}
        .d-header-text1 {font-family: Montserrat -Italic;font-style: italic;line-height: 26px;margin-top: 25px}
        .christmas-service {box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -190px;padding: 20px;}
        .shopandship {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);
            border-radius: 8px;
            background-image: linear-gradient(228deg, #ff7c5b 0%, #e8517a 100%);
        }
        .ps {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);
            border-radius: 8px;
            background-image: linear-gradient(228deg, #4df696 0%, #50bc70 100%);
        }
        .ic {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);
            border-radius: 8px;
            background-image: linear-gradient(229deg, #27cbff 0%, #2aa1d5 100%);
        }
        .box-steps p {line-height: 1;}
        .box-steps p span {font-size: 22px;font-weight: 900;}
        .flipkart-h1{font-size: 25px}

        .myntra-service{box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -150px;padding: 20px;}
        .myntra-service .shopandship,.ps,.ic, h2{font-size: 22px;font-weight: 500;color: rgba(255, 255, 255, 0.6);}
        .myntra-service .shopandship,.ps,.ic, p{color: #ffffff;font-size: 16px;font-weight: 600;}
        .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
        .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}

        #packing:hover{display: none}
    </style>

@endsection
@section('content')

    <section class="bg-myntra">
        <div class="container">
            <center>
                <h1 class="f-s-36 f-c-white f-w-8">Myntra - International Shipping From India</h1>

            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <a href="https://www.myntra.com" target="_blank"><div class="shopandship ">
                            <h2>End Of Season Sale</h2>
                            <br/>
                            <p>40-80% Off</p>
                            <p>Choose From 2.3 Lakhs+ Styles</p>
                            <p>Explore Now</p>
                        </div></a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.myntra.com/rakhi" target="_blank"><div class="ps">
                        <h2>Myntra Rakhi</h2>
                        <br>
                        <p>Handcrafted Rakhi</p>
                        <p>Price Starts from ₹244/-</p>
                        <p>July 2019</p>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.myntra.com/mww-all?rf=Discount%20Range%3A30.0_100.0_30.0%20TO%20100.0" target="_blank"><div class="ic">
                            <h2>A Formal Affair</h2>
                            <br>
                            <p>Men's Workwear At </p>
                            <p>UP TO 50% OFF</p>
                            <p>Starting from ₹227/-</p></div></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>


    <section class=" ">
        <div class="container myntra-service">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">
                        <span class="f-s-16 f-c-red f-w-9"><a href="https://www.myntra.com/" target="_blank">Shop from Myntra.com "End of Season Sale"</a></span> & Get ₹200 discount on your First Shipment.
                            </marquee>
                   <center>
                       <a href="https://clnk.in/itIM" title="Shop Myntra & Ship Internationally" target="_blank">
                           <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/stores/myntra-express-delivery-globe.png" alt="Myntra.com"></a>
                   </center>
                </div>
            </div>

            <div class=" col-md-12 ">
                <h2 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Online Shopping From Myntra, But Need a Cheaper Shipping Option?</h2>
                <h4 class="p-color-cement" style="font-style:italic">Are you one among the many international fans of Myntra, trying to ship your wishlists in this Christmas and New Year? Say no more. </h4>
                <br>
                <p class="header4 p-color-cement">Myntra is well-known for having the widest variety and versatility in clothing and accessories.
                    Even after being acquired by the <a href="{{route('flipkart.landing')}}">E-Commerce giant Flipkart</a>, it has been over-the-top successful in keeping true to itself and
                    being the most reliable more than ever. And the loyal customers have remained forever-loyal as well.</p>
                <br>
                <p class="header4 p-color-cement">However for the International bunch of customers, there is a slight
                    issue when it comes to checking-out & shipping their purchases in from India to USA, UK, UAE, Australia & such,
                    at an <a href="{{route('pricing')}}">affordable shipping cost</a>. Since Myntra (or its parent site Flipkart) doesn't offer to ship
                    internationally, customers have no other choice but to look for alternative shipping options.</p> <br>
                <p class="header4 p-color-cement">We’re a shipping & consolidation company that specializes in domestic & international logistic solutions.
                    We handle over ₹1,000,000 worth of E-Commerce shipments and 2000 Courier pickup requests a month! A potential customer can shop
                    from 1000+ <a href="{{route('stores1')}}">desi/Indian online stores</a> and, we ship those packages/couriers off to 220+ countries around the world. Our vision has
                    always been to be of help to the Global Indian Community, and their need to shop authentic products from India,
                    and help them ship it all in at a reasonable cost. </p> <br>

                <div class="offerDesc">
                    <h2 class="header2 p-color-cement font-weight-900">How are we the best international shipping solution from India?</h2>
                    <p class="header4 p-color-cement">Our streamlined set of <a href="{{route('consolidationService')}}">Repackaging & Package Consolidation</a> services, helps you cut down the shipping costs to 80% lesser!</p>
                    <br>
                    <p class="header4 p-color-cement">In a sense, it is tailor-made for the Myntra-manic in you!</p>
                    <br>
                    <p class="header4 p-color-cement">All you have to do is; </p> <br>

                    <ul>
                        <li>Ship your purchases to the Virtual Address we provide for FREE,</li>
                        <li>Use our FREE unique personal locker to store them, and finally -</li>
                        <li>Pay the never-before-like shipping cost we charge and,</li>
                        <li>Your shipment will be on it's way to reach you in 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <br>
                <center>
                    <h4 class="p-color-cement-dark flipkart-h1">International Credit/Debit Cards Giving You Trouble?</h4>
                    <h5 class="header5 p-color-cement">No worries! Our <a href="/personal-shopper-shopping-concierge-from-india">Personal Shopper </a>will swoop in & take care of it all for you!</h5> <br>
                    <a href="https://clnk.in/itIM" class="btn btn-s-r btn-b-r btn-a-l" target="_blank">Go Shop Myntra Now!</a>
                </center>
            </div>
        </div>

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
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>3-6 days delivery with online tracking</span></li>

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
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personalized Product Recommendations</span></li>
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
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Well, what's the wait? Sign Up with us now for a lifetime of effortless shopping!</h1>
                <br>
                <a href="{{route('customer.register')}}" class="btn btn-b-r btn-s-r btn-a-l" target="_blank">Sign Up for Free</a>

            </center>
        </div>
    </section>
    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">to Bag Your Favorites from Myntra</span>?
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
                            <h1 class="header5 p-color-cement">Shop Myntra Products</h1>
                            <br>
                            <p class="p-color-cement header5">
                                Purchase your favourite & brand products from Myntra Indian online store & Set Cash on Delivery
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
                <a href="https://www.myntra.com/?src=shoppre.com">Place Your Order from Myntra Now!</a>
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
    <script type='text/javascript'>
        var pubID = '54240CL48886';

        (function(d, t) {
            var s = document.createElement('script');s.type = 'text/javascript';
            s.async = true;s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv1.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>

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


