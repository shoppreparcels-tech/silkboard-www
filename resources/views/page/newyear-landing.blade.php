@extends('layout')


@section('title', 'New Year Offer - ShoppRe.com')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
      .bg-christmas-landing-page {background-image: url("../../img/images/background_newyear.png");height: 813px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 60px;}
      .bg-christmas-landing-page .div-snow{padding-top: 189px;}
      .bg-christmas-landing-page .div-snow img{position: absolute;}
      .bg-christmas-landing-page .div-newyear{padding-top: 155px;}
      .bg-christmas-landing-page .div-newyear img{margin-left: -139px;position: absolute;}
      .textbox-email{width: 358px;height: 50px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);border-radius: 25px!important;background-color: #ffffff;border: 0;padding-left:9% }
      .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
      .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}
      .christmas-service{box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -360px;padding: 20px}
      .christmas-service .c-image{padding: 20px}
      .christmas-service .shopandship{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);border-radius: 8px;background-image: linear-gradient(228deg, #ff7c5b 0%, #e8517a 100%);}
      .christmas-service .ps{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;background-image: linear-gradient(228deg, #4df696 0%, #50bc70 100%);}
      .christmas-service .ic{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;background-image: linear-gradient(229deg, #27cbff 0%, #2aa1d5 100%);}
      .christmas-service .shopandship,.ps,.ic, h2{font-size: 22px;font-weight: 500;color: rgba(255, 255, 255, 0.6);}
      .christmas-service .shopandship,.ps,.ic, p{color: #ffffff;font-size: 16px;font-weight: 600;}
      .christmas-service .btn-chris-place-order{padding: 13px 50px;color:#fff; width: 300px;height: 50px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 30px;background-color: #e85151;}
      .chris-benefits{padding-top: 30px}
      .chris-benefits ul{text-decoration: none;list-style: none;}
      .chris-benefits ul li{color: #224464;font-family: Bahnschrift;font-size: 18px;font-weight: 400;text-align: left;padding-top: 15px;}
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
          .textbox-email {width: 330px;}
          .div-snow{display: none;}
          .div-newyear{display: none;}
          .christmas-service {margin-top: -260px;}
          .c-image{display: none}
          .txt-align{text-align: center}
          .img-new-year{display: block;width: 240px;}
          .chris-benefits ul li{font-size: 16px}
      }
    </style>

@endsection
@section('content')
    <section class="bg-christmas-landing-page">
        <div class="container no-padding">
           <div class="col-md-2 div-snow">
               <img src="{{asset('img/images/snowman.png')}}" alt="">
           </div>
           <div class="col-md-8 col-xs-12 no-padding">
               <center>
                   <img src="{{asset('img/images/newyear_image.png')}}" alt="" class="img-new-year">
                   <h18 class="f-s-18 f-c-yellow font-weight-900">Save upto 80% on international shipping + Get an additional 19% for this New Year!</h18>
                   <h1 class="p-color-white header-spacing header1 ">Shop From India, Ship Worldwide </h1>
                   <h2 class="header2 p-color-white header-spacing font-weight-900">Shipping Starts from ₹690/-</h2>
                   <form action=""  method="post" id="diwali_coupon">
                       {{csrf_field()}}
                       <div class="" id="diwali-couponcode1">
                           <br>
                           <div class="form-group">
                               <input type="email" name="email" class="b-r-3 txt-xl txt-shadow txt-pad"
                                      placeholder="Enter a valid E-mail ID" required>
                           </div>
                           <div class="form-group">

                               <select class="select2 select-control" name="country_code" >
                                   <option value="91">IN(+91)</option>
                                   @foreach($countries as $country)
                                       <option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})
                                       </option>
                                   @endforeach
                               </select>
                                {{--<input type="number" name="email" class="b-r-3 txt-m txt-shadow txt-pad"--}}
                                          {{--placeholder="Enter a valid E-mail ID" required>--}}
                               <input type="text" name="pnumber" class="b-r-3 txt-l txt-shadow txt-pad" pattern="^[0-9]"
                                      placeholder="Phone Number" required>

                           </div>
                           <div class="col-md-12 form-group text-center">
                               <button type="submit" name="btnActivate" class="btn btn-l btn-b-r btn-s-r font-weight-900">Grab the Offer!</button>
                           </div>
                       </div>
                       <br>
                   </form>
                   <h7 class="header7 leter-space f-c-white">*From 27th Dec to 06th Jan 2019</h7>
               </center>
           </div>
            <div class="col-md-2 div-newyear">
                <img src="{{asset('img/images/newyear_image.png')}}" alt="">
            </div>

        </div>
    </section>
    <section >
        <div class="container christmas-service">
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
                <div class="col-sm-4">
                    <div class="shopandship ">
                        <h2>Shop & Ship</h2>
                        <br/>
                        <p>Shop From Any Indian Store; Get It to a FREE Indian Virtual Address; We'll Ship It to Your Doorsteps!</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ps">
                        <h2>Personal Shopper</h2>
                        <br>
                        <p>Payment Hassles at Checkout? No Worries, Let Us Know What You Need; We'll Shop for You!</p>


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

            <div class=" col-md-12 offer-description">
                <h4 class="header4 p-color-cement">Why Not Make Use of the Year End Sales & Get Ready for the New Year's?</h4>
                <br>
                <p class="header4 p-color-cement">2018 is on its last stretch and everyone's busy running around with their last-year resolutions! Let us get ready for another year with an open heart and clean baggage. We're here to help you be a new 'You' for the New Year's.</p>
                <br>
                <p class="header4 p-color-cement">Here's how; you get an <a href="{{route('pricing')}}">80% lesser shipping cost</a> with our top-of-the-line package consolidation services on top of which, you can avail a sweet 19% OFF - a little something from us to start off your New Year with.</p> <br>

                <div class="offerDesc">
                    <h5> What Else Do You Get Out of Our Offer? </h5><br>
                    <ul>
                        <li>A FREE Indian Virtual Address to ship your packages to </li>
                        <li>Get online Support 24/7</li>
                        <li>A quick delivery within 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <div>
                <center><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?src=sny2019" class="btn-chris-place-order">Go Shopping Now!</a></center>
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
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies for Document-couriers</span></li>
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
                {{--<div class="text-center">--}}
                {{--<a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register class="btn btn-d-signup">Sign Up</a>--}}
                {{--</div>--}}
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
                    <a href="http://v2.zopim.com/widget/livechat.html?key=WMWUM4as7ltiMKHbRXiFRw3imdMiLtAV"
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
