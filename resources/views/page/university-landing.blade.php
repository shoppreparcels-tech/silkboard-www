@extends('layout')


@section('title', 'Student Special Offer | Courier Any Document Abroad & Save Upto 50%')
@section('description', 'ShoppRe offers you upto 50% discount on your documents sending to Universities/WES abroad. Shipping to 220+ countries & our shipping rates start from just ₹553')
@section('keywords', 'courier documents, dhl student offer, fedex student discount india, courier charges')

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
      .chris-benefits .ps-img-rounded {    height: 340px;}
      .chris-benefits .ps-img-rounded span {font-size: 22px;color: #11273b;}
      .text-center div{ padding-top: 20px}
      .img-new-year{display: none}
      .chris-benefits .panel{box-shadow: 0 2px 10px rgba(0,0,0,.05) !important;border-radius: 15px}
      .chris-benefits .u-benifits .panel{box-shadow: 0 2px 10px rgba(0,0,0,.05) !important;border-radius: 15px; padding-left: 25px}
      .chris-benefits .panel ul li span{margin-left: 15px;}
      #contact-support{padding-bottom: 30px;}
      .chris-benefits div table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%; border-radius: 1em;}
      .chris-benefits div table th {text-align: left;padding:20px;background-color: #929ca5;color: #fff;font-size: 18px;}
      .chris-benefits div table td {text-align: left;padding: 20px;background-color: #fff; font-size: 18px}
      .chris-benefits div table tr:nth-child(even) {background-color: #fafafb;}
      .div-content{padding-top: 70px;padding-right: 0;padding-left: 0;padding-bottom: 0}
      .div-table{overflow: scroll}
      @media only screen and (max-width: 600px) {
          .textbox-email {width: 330px;}
          .div-snow{display: none;}
          .div-newyear{display: none;}
          .christmas-service {margin-top: -200px;}
          .c-image{display: none}
          .txt-align{text-align: center}
          .img-new-year{display: block;margin-left: 35px;}
          .chris-benefits ul li{font-size: 16px;}
          .chris-benefits div table th{padding: 0px;}
          .div-content{padding-top: 0px;}
      }
    </style>

@endsection
@section('content')
    <section class="bg-christmas-landing-page">
        <div class="container no-padding">
           <div class="col-md-2 div-snow">
               <img src="{{asset('img/images/plane_earth.png')}}" alt="">
           </div>
           <div class="col-md-8 col-xs-12 div-content" >
               <center>
                   <img src="{{asset('img/images/plane_earth.png')}}" alt="" class="img-new-year">
                   <h2 class="p-color-yellow header-spacing header2 ">Student Special Offer <br> Save Upto 50% Off On Shipping Costs!</h2>
                   <h1 class="header1 p-color-white header-spacing font-weight-900">Courier Any Document Abroad</h1>
                   <h2 class="header2 p-color-white font-weight-900">Starting from ₹553/-</h2> <br>
                   <form action=""  method="post" id="diwali_coupon">
                       {{csrf_field()}}
                       <div class="" id="diwali-couponcode1">
                           <div class="form-group">
                               <input type="email" name="email" class="textbox-email"
                                      placeholder="Enter a valid E-mail ID" required>
                           </div>
                           <div class="form-group text-center">
                               <button type="submit" name="btnActivate" class="btn btn-grab-offer font-weight-900" onclick="">Sign Up For FREE!</button>
                           </div>
                       </div>
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
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Have Some Documents to Send Abroad?</h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12">
                    <a href="tel:+91-8277919191" class="c-image">

                        <img src="{{asset('/img/images/christmas-contact.png')}}" alt="contact shoppre">
                    </a>
                </div>
            </div>

            <div class=" col-md-12 un-offers">
                <p class="header4 p-color-cement">Are you a student applying for higher studies abroad, or a potential candidate
                    for a job position? Either ways, and for other broader range of reasons; if you have documents to send overseas,
                    we're the best & the right choice. We ship to 220+ countries, and our shipping rates start from just *Rs.553.</p>
                <br>
                <p class="header4 p-color-cement">Applying for your MS or MBA to universities abroad requires lot of
                    research and is quite tedious. Also, many top universities require hard copies of your important
                    documents like Semester/Academic transcripts or Letters of Recommendation (LORs) whereas some
                    require you to send these documents to WES for credential evaluation. </p> <br>
                <p class="header4 p-color-cement">For you to courier documents of these natures safe and secure, we rely
                    on only the most <a href="{{route('ics.index')}}">trusted courier services</a>, and make it as affordable as possible. And, we go
                    the extra mile by offering our fellow students a special discounted price too.</p> <br>
                <div class="offerDesc">
                    <h5> What Else Do You Get Out of Our Offer? </h5><br>
                    <ul>
                        <li>Store your goods here at our facility for 20 days for FREE! </li>
                        <li>Get online Support 24/7</li>
                        <li>Get up to 80% OFF in shipping costs on top of this Student Special Offer</li>
                        <li>A quick delivery within 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <div>
                <center><a href="{{route('schedulePickup.Index')}}" class="btn-chris-place-order">Schedule A Pickup!</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container no-padding" >
            <center>
                <h1 class="header1 p-color-cement-dark">Country-specific Discounts Running Now</h1>
            </center>
            <br>

            <div style="overflow: scroll">
                <table >
                    <tr>
                        <th>Country</th>
                        <th>Price for 100grams</th>
                        <th>Price for 300grams</th>
                        <th>Courier Partners</th>
                    </tr>
                    <tr>
                        <td>UAE</td>
                        <td>₹553</td>
                        <td>₹636</td>
                        <td>DHL, DTDC</td>
                    </tr>
                    <tr>
                        <td>Germany</td>
                        <td>₹1287</td>
                        <td>₹1346</td>
                        <td>DHL, DTDC</td>
                    </tr>
                    <tr>
                        <td>USA</td>
                        <td>₹1297</td>
                        <td>₹1356</td>
                        <td>DHL, DTDC</td>

                    </tr>
                    <tr>
                        <td>Canada</td>
                        <td>₹1395</td>
                        <td>₹1458</td>
                        <td>DHL, DTDC</td>
                    </tr>
                    <tr>
                        <td>Australia</td>
                        <td>₹1455</td>
                        <td>₹1521</td>
                        <td>DHL, DTDC</td>
                    </tr>
                </table>
            </div>
                {{--<div>--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--<center><a href="" class="btn-chris-place-order">Courier Now</a></center>--}}
                {{--</div>--}}
            <div class="container">
                <br>
                <div class="row text-center">
                    <center>
                        <h1 class="header1  p-color-cement-dark">How It Works</h1>
                    </center>
                    <br/><br/>
                    <div class="col-sm-4">
                        <div class="panel ps-img-rounded">
                            <center>
                                <br/>
                                <img src="{{asset('img/images/graphic_parsal.png')}}" alt="" style="height: 64px;">
                                <br/>
                                <br/>
                                <span>Step 1</span>
                                <h1 class="header5 p-color-cement">Courier Document</h1>
                                <br>
                                <p class="p-color-cement header5">Schedule a Pickup from ANYWHERE in India, we'll come to your door in just 48 hours.</p>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ps-img-rounded">
                            <br>
                            <img src="{{asset('/img/svg/online-shop-un.svg')}}" alt="">
                            <br/>
                            <br/>
                            <span>Step 2</span>
                            <h1 class="header5 p-color-cement">Ship in @ 80% Less Cost</h1>
                            <br>
                            <p class="header6 p-color-cement">
                                Save up to 80% in shipping costs as we wait around for 20 days for all your package to
                                reach us - for FREE, and repackage & ship them to your doorsteps as one!
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ps-img-rounded">
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                            <br/>
                            <br/>
                            <span>Step 3</span>
                            <br>
                            <h1 class="header5 p-color-cement">Pay & Receive</h1>
                            <br>
                            <p class="header6 p-color-cement">Documents will be deliver to
                                your university. WES or other
                                address within 3-5 working days
                                after pickup.</p>

                        </div>
                    </div>


                </div>
                <br/><br/>
                <center>
                    {{--<a href=""class="btn-chris-place-order">Place Your Order Now!</a>--}}
                </center>
                <br/><br/>
            </div>
            <div class="row text-center u-benifits">
                <div class="container">
                    <center>
                        <h1 class="header1  p-color-cement-dark">Our Featured Services & Benefits</h1>
                    </center>
                </div>
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
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'university',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                        },
                        success: function (data) {
                            console.log(data);
                            window.location.replace("https://myaccount.shoppre.com/register");
                        }
                    })
                }
            });

        });
    </script>
@endsection
