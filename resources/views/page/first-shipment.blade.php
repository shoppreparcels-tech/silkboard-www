@extends('layout')

@section('title', 'First International Shipment Cashback | Discount • ShoppRe.com™')
@section('description', 'Get 50% Discount on your First-time international shipment from India. Additionally get 80% lesser shipping cost with our package consolidation services.')
@section('keywords', 'free shipment process, cashback, shipment, consolidation, repackaging')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/first-time-international-shipment-offer" />

    <style>
      .first-time-shipment {background-color: #11273b;height: 813px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;padding-top: 60px;}
      .first-time-shipment .div-snow{padding-top: 146px;}
      .first-time-shipment .div-snow img{position: absolute;}
      .first-time-shipment .div-snow img{margin-left: -18px; position: absolute;}
      .first-time-shipment .div-newyear{padding-top: 206px;}
      .first-time-shipment .div-newyear img{margin-left: -12px; position: absolute;}
      .textbox-email{width: 358px;height: 50px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);border-radius: 25px!important;background-color: #ffffff;border: 0;padding-left:9% }
      .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
      .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}
      .fst-service{box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -360px;padding: 20px}
      .fst-service .c-image{padding: 20px}
      .fst-service .shopandship{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);border-radius: 8px;border: 1px solid #5a5b5d26}
      .fst-service .ps{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;border: 1px solid #5a5b5d26}
      .fst-service .ic{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;border: 1px solid #5a5b5d26}
      .fst-service .shopandship:hover{border: 1px solid #507dbc}
      .fst-service .ps:hover{border: 1px solid #507dbc}
      .fst-service .ic:hover{border: 1px solid #507dbc}

      .fst-service .shopandship,.ps,.ic, h2{font-size: 22px;font-weight: 500;color: rgba(255, 255, 255, 0.6);}
      .fst-service .shopandship,.ps,.ic, p{color: #ffffff;font-size: 16px;font-weight: 600;}
      .fst-service .btn-chris-place-order{padding: 13px 50px;color:#fff; width: 300px;height: 50px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 30px;background-color: #e85151;}
      .chris-benefits{padding-top: 30px}
      .chris-benefits ul{text-decoration: none;list-style: none;}
      .chris-benefits ul li{color: #224464;font-family: Montserrat, sans-serif;font-size: 15px;font-weight: 400;text-align: left;padding-top: 15px;}
      .chris-benefits ul li img{margin-top: 9px;}
      .text-center div{ padding-top: 20px}
      .img-new-year{display: none}
      .chris-benefits .panel{box-shadow: 0 2px 10px rgba(0,0,0,.05) !important;}
      .chris-benefits .panel ul li span{margin-left: 15px;}
      .leter-space{letter-spacing: 1px;}
      #contact-support{padding-bottom: 30px;}

      .select-control {float: left;width: 90px !important;height: 40px !important;font-size: 13px;font-weight: 400;    font-style: italic;border-left: 0;border-radius: 3px;background-color: #fafafb;border: none;}
      .select2-container--default .select2-selection--single {background-color: #fff !important;border: none !important;border-radius: 4px !important;height: 40px !important;padding-top: 5px!important;}
      .select2-container--default .select2-selection--single .select2-selection__arrow b {margin-top: 4px !important;}
      @media only screen and (max-width: 600px) {
          .first-time-shipment {height: 896px;}
          .textbox-email {width: 330px;}
          .div-snow{display: none;}
          .div-newyear{display: none;}
          .fst-service {margin-top: -260px;}
          .c-image{display: none}
          .txt-align{text-align: center}
          .img-new-year{display: block;width: 240px;}
          .chris-benefits ul li{font-size: 16px}
      }
    </style>

@endsection
@section('content')
    <section class="first-time-shipment">
        <div class="container no-padding">
           <div class="col-md-3 div-snow">
               <img src="{{asset('img/images/f-t-s-priyamani.png')}}" alt="" class="img-responsive">
           </div>
           <div class="col-md-6 col-xs-12 no-padding">
               <center>
                   <img src="{{asset('img/images/f-t-s-priyamani.png')}}" alt="" class="img-new-year"><br>
                   <a href="{{route('customer.register')}}"><img src="{{asset('img/images/tape_signup.svg')}}" alt="" > </a> <br>
               </center>
               <center>
                   <h18 class="f-s-50 f-c-white  f-w-9">50% Discount</h18>
                   <p class="f-s-36 f-c-white f-w-9 ">on your first shipment </p>
                   <img src="{{asset('img/images/f-s-t-coupon.png')}}" alt="" > <br><br>
                   <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                   <br>
                   <br>
                   <br>
                   <p class="f-s-10 f-c-l-gray f-w-8">From 1st Mar to 31st Mar 2019</p>

               </center>
           </div>
            <div class="col-md-3 div-newyear">
                <img src="{{asset('img/images/f-s-t-courierbox.png')}}" alt="" class="img-responsive">
            </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Good News Again! This offer is valid on all our services!</h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12">
                    <a href="https://wa.me/918277919191?text=I'm%20interested%20in%20Shopping%20and%20Shipping%20from%20India%20" target="_blank" class="c-image">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/christmas-contact.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue txt-a-l f-w-9"><a href="{{route('ifs.index')}}">Shop & Ship</a></h2>
                            <p class="f-s-12 f-c-l-gray txt-a-l">Shop From Any Indian Store; Get It to a FREE Indian Virtual Address; We'll Ship It to Your Doorsteps!</p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <br>
                            <br>
                            <img src="{{asset('img/images/f-s-t-s-s.svg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class=" col-sm-12 col-xs-12 col-md-12 ps">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue txt-a-l f-w-9"><a href="{{route('personalShopper')}}">Personal Shopper</a></h2>
                            <p class="f-s-12 f-c-l-gray txt-a-l">Payment Hassles at Checkout?<br> No Worries, Let Us Know What You Need; We'll Shop for You!</p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <img src="{{asset('img/images/f-s-t-ps.svg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 ic">
                        <div class="col-md-6 col-xs-6 no-pad">
                            <h2 class="f-s-16 f-c-blue  txt-a-l f-w-9"><a href="{{route('ics.index')}}">International Courier</a></h2>
                            <p class="f-s-12 f-c-l-gray  txt-a-l">Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!</p>
                        </div>
                        <div class="col-md-6 col-xs-6 no-pad">
                            <img src="{{asset('img/images/f-s-t-ic.png')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-12 no-pad"><br>
                <h4 class="f-s-18 f-c-l-gray f-w-9">Haven't made a shipment with us yet? What're you waiting for?!</h4>
                <br>
                <p class="header4 p-color-cement">Pick & choose your favorites from 1000+ Indian online stores and get us to ship your purchases overseas,
                    or come to us for an international courier; if it's your first shipment with us - you can avail a <strong> 50% Discount UP TO ₹200/- </strong> on
                    top of the savings you make because our consolidation services.
                </p>
                <h6 class="f-s-16 f-c-gray f-w-8">Don't put it on hold - ship with us already! </h6><br>

                <div class="offerDesc">
                    <h4 style="text-decoration: underline">Terms and Conditions:</h4>
                    <ul>
                        <li>Get 50% Discount. </li>
                        <li>Offer Code: <b>FRST50</b></li>
                        <li>Maximum amount that can be availed by a customer is ₹200/-.</li>
                        <li>This offer cannot be clubbed with any other offer.</li>
                        <li>This Coupon is Valid Upto 31-March-2019</li>
                        <li>A customer can avail this offer only once during the offer period.</li>
                        <li>This offer is applicable only for International Shipments.</li>
                        <li>Clearance charges is applicable for Special items</li>
                        <p class="f-s-16 f-c-blue f-w-8">(liquids, semi liquids/cosmetics, medicines, oils, homemade food items).</p>

                    </ul>
                </div>
                <br>
                <div>
                <center><a href="{{route('customer.register')}}" class="btn btn-s-r btn-a-l btn-b-r">Sign Up Now!</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>
            </center>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies Document-couriers</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
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
        <br>
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
                    var pnumber = $("input[name='pnumber']").val();
                    var cnumber = $("[name='country_code']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'new-year-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            pnumber: pnumber,
                            cnumber: cnumber,
                        },
                        success: function (data) {
                            var url= "{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?email=" + email + "&c_code="+ cnumber +"&PN="+ pnumber ;
                            console.log(data);
                            // window.open(url);
                            window.location.href = url;

                        }
                    })
                }
            });

        });
    </script>
@endsection
