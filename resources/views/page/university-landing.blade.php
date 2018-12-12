@extends('layout')


@section('title', '2018 Has Run Its Course!')
@section('description', '')
@section('keywords', '')

@section('css_style')
    <style>
      .bg-christmas-landing-page {background-image: url("../../img/images/bk_university.png");height: 813px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 60px;}
      .bg-christmas-landing-page .div-snow{padding-top: 221px;}
      .bg-christmas-landing-page .div-snow img{position: absolute;}
      .bg-christmas-landing-page .div-newyear{padding-top: 202px;}
      .bg-christmas-landing-page .div-newyear img{margin-left: -70px;position: absolute;}
      .textbox-email{width: 358px;height: 50px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);border-radius: 25px!important;background-color: #ffffff;border: 0;padding-left:9% }
      .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
      .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}
      .christmas-service{box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fff;margin-top: -360px;padding: 20px}
      .christmas-service .c-image{padding: 20px}
      .christmas-service .un-offers{padding: 20px;border-top: 1px solid rgba(146, 156, 165, 0.2);}
      .btn-chris-place-order{padding: 13px 50px;color:#fff; width: 300px;height: 50px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 30px;background-color: #e85151;}
      .chris-benefits{padding-top: 30px ;background-color: #fafafb;}
      .chris-benefits ul{text-decoration: none;list-style: none;}
      .chris-benefits ul li{color: #224464;font-family: Bahnschrift;font-size: 18px;font-weight: 400;text-align: left;padding-top: 15px;}
      .chris-benefits ul li img{margin-top: 9px;}
      .text-center div{ padding-top: 20px}
      .img-new-year{display: none}
      .chris-benefits .panel{box-shadow: 0 2px 10px rgba(0,0,0,.05) !important;padding-left: 25px; border-radius: 15px}
      .chris-benefits .panel ul li span{margin-left: 15px;}
      #contact-support{padding-bottom: 30px;}
      .chris-benefits div table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%; border-radius: 1em;}
      .chris-benefits div table th {text-align: left;padding:20px;background-color: #929ca5;color: #fff;font-size: 18px;}
      .chris-benefits div table td {text-align: left;padding: 20px;background-color: #fff; font-size: 18px}
      .chris-benefits div table tr:nth-child(even) {background-color: #fafafb;}
      .div-table{overflow: scroll}
      @media only screen and (max-width: 600px) {
          .textbox-email {width: 330px;}
          .div-snow{display: none;}
          .div-newyear{display: none;}
          .christmas-service {margin-top: -200px;}
          .c-image{display: none}
          .txt-align{text-align: center}
          .img-new-year{display: block;width: 240px;}
          .chris-benefits ul li{font-size: 16px;}
          .chris-benefits div table th{padding: 0px;}
      }
    </style>

@endsection
@section('content')
    <section class="bg-christmas-landing-page">
        <div class="container no-padding">
           <div class="col-md-2 div-snow">
               <img src="{{asset('img/images/plane_earth.png')}}" alt="">
           </div>
           <div class="col-md-8 col-xs-12 no-padding" style="    padding-top: 70px;">
               <center>
                   <img src="{{asset('img/images/newyear_image.png')}}" alt="" class="img-new-year">
                   <h2 class="p-color-yellow header-spacing header2 ">50% Offer</h2>
                   <h1 class="header1 p-color-white header-spacing font-weight-900"> Send Documents Abroad</h1>
                   <h2 class="header2 p-color-white font-weight-900">Starting from ₹690/-</h2> <br>
                   <form action=""  method="post" id="diwali_coupon">
                       {{csrf_field()}}
                       <div class="" id="diwali-couponcode1">
                           <div class="form-group">
                               <input type="email" name="email" class="textbox-email"
                                      placeholder="Enter a valid E-mail ID" required>
                           </div>
                           <div class="form-group text-center">
                               <button type="submit" name="btnActivate" class="btn btn-grab-offer font-weight-900">Sign Up Free</button>
                           </div>
                       </div>

                       {{--<div class="formFrame" id="diwali-couponcode2">--}}
                       {{--<div class="">--}}
                       {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-congratulation.png" alt="" style="width: 100%">--}}
                       {{--</div>--}}
                       {{--<div class="">--}}
                       {{--<center>--}}
                       {{--<h6 class="header5 p-color-blue">Congratulations!</h6>--}}
                       {{--<h5 class="header5 p-color-cement">Just One More Step To Use <br>Your Coupon!</h5>--}}
                       {{--</center>--}}
                       {{--</div>--}}
                       {{--<div class="text-center">--}}
                       {{--<a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-d-signup">Sign Up</a>--}}
                       {{--<button type="submit" name="btnActivate" class="btn btn-shoppre">Sign Up</button>--}}
                       {{--</div>--}}
                       {{--</div>--}}
                   </form>
               </center>
           </div>
            <div class="col-md-2 div-newyear">
                <img src="{{asset('img/images/graphic_parsal.png')}}" alt="">
            </div>

        </div>
    </section>
    <section >
        <div class="container christmas-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Send Document Abroad from India</h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12">
                    <a href="tel:+91-80 4094 4077" class="c-image">

                        <img src="{{asset('/img/images/christmas-contact.png')}}" alt="">
                    </a>
                </div>
            </div>

            <div class=" col-md-12 un-offers">
                <p class="header4 p-color-cement">You can send your transcripts and documents to Universities in US and
                    Canada or WES for Credential Evaluation from Yocket via FedEx or DHL University
                    Express starting at discounted price of ₹ 959/- (including pick up).</p>
                <br>
                <p class="header4 p-color-cement">Applying for your MS or MBA to universities abroad requires lot of
                    research and is quite tedious. Also, many top universities require hard copies of your important
                    documents like Semester/Academic transcripts or Letters of Recommendation (LORs) whereas some
                    require you to send these documents to WES for credential evaluation. </p> <br>
                <p class="header4 p-color-cement">In order to send these documents safely and on time, you need a trusted
                    International Courier Service. We understand that this can be quite expensive when you apply to multiple
                    universities. Yocket helps you save on these courier costs by offering the same service from top international
                    courier partners at special discounted prices for students.</p> <br>

                <div class="offerDesc">
                    <h5> What Else Do You Get Out of Our Offer? </h5><br>
                    <ul>
                        <li>Store your goods here at our facility for 20 days for FREE! </li>
                        <li>Get online Support 24/7</li>
                        <li>Get up to 80% OFF in shipping costs on top of the seasonal offer</li>
                        <li>A quick delivery within 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <div>
                <center><a href="" class="btn-chris-place-order">Go Shopping Now!</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container no-padding" >
            <center>
                <h1 class="header1 p-color-cement-dark">Running Discount</h1>
            </center>
            <br>

            <div style="overflow: scroll">
                <table >
                    <tr>
                        <th>Country</th>
                        <th>Discount</th>
                        <th>ShoppRe Discounted Price</th>
                        <th>Courier Partners</th>
                    </tr>
                    <tr>
                        <td>USA</td>
                        <td>Up-to 50%</td>
                        <td>Starting from ₹690 /-</td>
                        <td>DHL, DTDC, Fedex</td>

                    </tr>
                    <tr>
                        <td>Canada</td>
                        <td>Up-to 60%</td>
                        <td>Starting from ₹690 /-</td>
                        <td>DHL, DTDC, Fedex</td>
                    </tr>
                    <tr>
                        <td>United Kingdom</td>
                        <td>Up-to 20%</td>
                        <td>Starting from ₹690 /-</td>
                        <td>DHL, DTDC, Fedex</td>
                    </tr>
                    <tr>
                        <td>Austrelia</td>
                        <td>Up-to 10%</td>
                        <td>Starting from ₹690 /-</td>
                        <td>DHL, DTDC, Fedex</td>
                    </tr>
                    <tr>
                        <td>UAE</td>
                        <td>Up-to 40%</td>
                        <td>Starting from ₹690 /-</td>
                        <td>DHL, DTDC, Fedex</td>
                    </tr>
                    <tr>
                        <td>256+ More</td>
                        <td>Up-to 80%</td>
                        <td>Starting from ₹690 /-</td>
                        <td>DHL, DTDC, Fedex</td>
                    </tr>
                </table>
            </div>
            <div>
                <br>
                <br>
                <center><a href="" class="btn-chris-place-order">Send Douments Now</a></center>
            </div>
            <div class="container div-ics-border-btm">
                <div class="container">
                    <center>
                        <h1 class="header1  p-color-cement-dark">How It Works</h1>
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
                                <span class="p-color-blue">Step1</span>
                                <h1 class="header5 p-color-cement">Shop Products</h1>
                                <br>
                                <p class="p-color-cement header5">
                                    Purchase products from any Indian online store such as Amazon.in, Flipkart & Myntra;
                                    and. Set Cash on Delivery
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
                            <span class="p-color-blue" >Step2</span>
                            <br>
                            <h1 class="header5 p-color-cement">Pay & Receive</h1>
                            <br>
                            <p class="header6 p-color-cement">We will pay for your order and will receive your order at our
                                warehouse.
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="panel ps-img-rounded">
                            <br>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step3</span>
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
                            <span class="p-color-blue" >Step4</span>
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
                    <a href=""class="btn-chris-place-order">Place Your Order Now!</a>
                </center>
                <br/><br/>
            </div>
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
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned of your documents in the courier</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-specific</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personalized Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
            </div>
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
                    var name = $("input[name='Name']").val();
                    var contact_no = $("input[name='ContactNumber']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'api/diwali-offer',
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
