@extends('layout')


@section('title', 'Assisted Purchase for You | Personal Shopper in India | Ship to USA')
@section('description', 'Payment hassles at checkout? No worries. Hire one of our experts to shop for you. We will pay for your order and will receive your order at our warehouse.')
@section('keywords', 'shop online from india, self shopping, assisted purchase usa, personal shopper, international shipping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/personal-shopper-india" />
    <style>
        .ps-section{background-color:#11273b;height:1000px}.ps-section .container>div{padding:20px;margin-bottom:0}.ps-section .container>div h1{font-weight:900}.ps-section .container>#img-shopping{padding-top:158px}.ps-section .container>#img-shopping img{width:596px;height:365px}.h-req-assist{margin-bottom:30px}.product-courier span{font-weight:900}@media only screen and (max-width:600px){.ps-section .container>div{padding:10px;margin-bottom:0}}
    </style>

@endsection
@section('content')
    <section class="ps-section" id="personal-shopper">
        <div class="modal fade" id="terms" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="panel">
                            <div class="panel-heading">
                                <h5 class="text-success text-center text-u-l">Terms & Conditions For Personal Shopper</h5><br>
                                <ol>
                                    <p><span class="font-bold">1.&nbsp;</span><span>The entire payment, which includes the cost of the order + the Personal Shopper service cost, needs to be cleared BEFORE Shoppre makes the purchase for you.</span>
                                        <span>The Personal Shopper service cost is non-refundable for a successfully placed order, irrespective of whether the order is edited/cancelled at a later stage.</span>
                                        <span>However, the rest of the amount shall be credited to Shoppre wallet within 24 hours in such a case.</span></p><br>
                                    <p><span class="font-bold">2.&nbsp;</span><span>We accept payment through netbanking/credit card/Paypal/Paytm/wire transfer.</span></p><br>
                                    <p><span class="font-bold">3.&nbsp;</span><span>All Personal Shopper orders will be delivered to your Shoppre shipping address.</span></p><br>
                                    <p><span class="font-bold">4.&nbsp;</span><span>The Personal Shopper order can be edited or cancelled before you make the payment to Shoppre. You can also cancel your order post the payment, provided we haven’t already made the purchase on your behalf.</span>
                                        <span>The money will be credited to your Shoppre wallet within 24 hours, which can then be used for your future Shoppre orders.</span></p><br>
                                    <p><span class="font-bold">5.&nbsp;</span><span>To edit or cancel your order pre-payment, click on Personal Shopper > Order Form.</span></p><br>
                                    <p><span class="font-bold">6.&nbsp;</span><span>To cancel your order post-payment, access your Order History to view the list of your recent orders. If we haven’t processed the purchase on your behalf, the option to Cancel will be available</span></p><br>
                                    <p><span class="font-bold">7.&nbsp;</span><span>In case you want to cancel the order after Shoppre has made the purchase, please get in touch with the seller regarding its return policy.</span>
                                        <span>If the return is permitted by the seller, intimate us that the order is to be returned when it arrives at your Shoppre address.</span>
                                        <span>In such a case, a cost of Rs. 400, in addition to the return shipping cost (if any) needs to be incurred by the customer.</span>
                                        <span>Once the seller receives the order and issues a refund, the same shall be duly credited to your Shoppre wallet and can be used for your future orders</span></p><br>
                                    <p><span class="font-bold">8.&nbsp;</span><span>An e-mail notification shall be sent out to you once your order reaches your Shoppre address. You can also request for any additional photographs of the package for an additional cost.</span></p><br>
                                    <p><span class="font-bold">9.&nbsp;</span><span>Shoppre reserves the right to make any additions/changes in these terms and conditions at any given point of time. Keep checking this page for updates.</span></p>
                                    <p><span class="font-bold">10.&nbsp;</span><span>There is No return policy or Cancellation for Personal Shopper order from ShoppRe.Because most of the indian online store dont have Return policy service.</span>
                                        <span>Personal Shopper Cancellation is not allowed, not unless we received damage or incorrect item.</span></p><br>
                                    <p><span class="font-bold">11.&nbsp;</span><span>For Self Purchase the Return or Cancellation Charges for each item will be INR 400.</span></p><br>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background: darkgoldenrod;color: black;">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container heading-section">

        </div>
        <div class="container">
            <div class="col-md-8 col-xs-12 div-align-items-l">
                <h1 class="f-s-36 f-c-white">
                    Shop From India, Ship Worldwide
                </h1>
            </div>
        </div>

        <div class="container">
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                <h1 class="header2 p-color-white">Personal Shopper (Assisted Purchase)</h1>
                <h3 class="header4 p-color-cement">Payment hassles at checkout? No worries! Hire one of our experts
                    to shop for you! </h3>

                {{--<div class="row">--}}
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img " src="{{env('AWS_CLOUD_FRONT')}}/img/svg/international-credit-card-shopping.svg"
                         alt="international credit card shopping">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Store does't accept your <br> International card/Debit
                        Card?
                    </h4>
                </div>


                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indian-phone-number.svg" alt="indian number">
                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian phone number
                        to <br> verify your order?
                    </h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 img-ifs-card no-padding">
                    <img class="img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/indian-address-shopping.svg"
                         alt="indian address for shopping">

                </div>
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 img-ifs-card no-padding">
                    <h4 class="header6 p-color-cement">Don't have an Indian address?
                    </h4>
                </div>
                <div class="col-sm-12 col-xs-12 no-padding" id="img-shopping-mobile">
                    <img class="img-responsive " src="{{env('AWS_CLOUD_FRONT')}}/img/images/image06_v2.png">
                </div>
                {{--</div>--}}
                <div class="col-md-12 col-xs-12 div-btn-padding">
                    <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20ShoppRe%20Team,%20%20I%27m%20looking%20for%20Assisted%20Purchase%20Service" style="color:white" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 no-padding " id="img-shopping" >
                <img class=" " src="{{env('AWS_CLOUD_FRONT')}}/img/images/psp.png"
                     alt="personal shopper service in india">
            </div>
        </div>
    </section>
    <section>
        <div class="container div-lets-ps">
            <div class="col-md-7 col-sm-7 col-xs-12 ">
                <h2 class="header2 p-color-cement-dark">Let <span class="p-color-red">ShoppRe</span> <br> Do the
                    Shopping for you!</h2>
                <p class="header5 p-color-cement">
                    If you are overseas and want to shop from India, occasionally you would have to go
                    through some hassles in the process. Either your international cards won't be
                    accepted or order won't go through on account of you not having Indian credentials mostly.</p>
                <P class="header5 p-color-cement">This is where our Personal Shopper comes in to play. All you have to
                    do is, let us know what you are intending to buy, and we'll buy it for you!</P>
                <br>
                <h5 class="header5 p-color-cement-dark">How Does a Personal Shopper Help?</h5>
                <p class="header5 p-color-cement">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/dot.svg" alt="">
                    <span class="p-color-cement-dark">We’ll Pay For You:</span> You can place your order on your own,
                    and get
                    it delivered to us; we’ll pay for it on your behalf.International Credit card / Paypal.

                </p>
                <p class="header5 p-color-cement">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/dot.svg" alt="">
                    <span class="p-color-cement-dark"> We’ll Shop For You:</span> All you have to do is, let us know
                    what you intend to buy; we’ll make the purchase for you.
                </p>
                <br>
                <p>
                    <button type="button" class="call-btn" style="height: 30px; border-radius: 0px; background-color: orange;">Terms&Conditions</button>
                </p>
                <div class="col-md-12 col-xs-12 div-btn-padding" style="margin-top: 15px;">
                    <center>
                    <a href="https://www.shoppre.com/personal-shopper" target="_blank">
                        <div class="btn header6 btn-ifs-l-assisted">
                            Shop For Me
                        </div>
                    </a>
                    </center>
                </div>
            </div>


            <div class="col-xs-4 col-md-4 no-pad">
                <iframe style="height:300px;margin-top:10px;" class="vid-h-w col-md-12 col-sm-12" id="video"  src="https://www.youtube.com/embed/q5R63gFUREk" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                {{--<h4 class="f-s-16 f-c-l-gray txt-a-c">One-stop Solution For All your Shopping & Shipping Needs from India | ShoppRe.com</h4>--}}
            </div>
        </div>
    </section>

    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">Self Shopping</span> Work?
                    </h1>
                    <h3 class="f-s-1 f-c-blue">Service Charges: 10%</h3>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/>
                <div class="col-sm-3">
                    <div class="panel">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step 1</span>
                            <h1 class="header5 p-color-cement">Shop Products</h1>
                            <br>
                            <p class="header6 p-color-cement ">
                                Purchase products from any Indian online store such as Amazon.in, Flipkart or Myntra; and
                                Choose Cash on Delivery as the Payment Option.
                            </p>

                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/form-fill-up.png" alt="" style="height: 65px;">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Fill up Shoppre Order Form</h1>
                        <br>
                        <p class="header6 p-color-cement">Copy the links of the products which you opted for Cash on delivery and paste them on Shoppre
                            order form.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step 3</span>
                        <h1 class="header5 p-color-cement">Make Payment to Us</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            We will pay for your order which you have set for
                            Cash on Delivery&will receive it at our warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Make a Ship Request</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Save upto 80% in shipping cost as we provide 20 days free Locker facility, and repack & ship them to your doorstep as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 5</span>
                        <br>
                        <h1 class="header5 p-color-cement">You Pay, We'll Dispatch</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Once we've confirmed your payment, your order will be dispatched &
                            be on its way to you (taking just 3-6 days)!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="/personal-shopper">Pay For Me !</a>
            </center>
            <br/><br/>
        </div>

        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">Assisted Shopping</span>
                        Work?</h1>
                    <h3 class="f-s-1 f-c-blue">Service Charges: 07%</h3>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/>
                <div class="col-sm-3">
                    <div class="panel">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue" >Step 1</span>
                            <h1 class="header5 p-color-cement">Search Products</h1>
                            <br>
                            <p class="p-color-cement header6">
                                Search products from any Indian online store such as Amazon.in, Flipkart or Myntra.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br/>
                        <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/form-fill-up.png" alt="" style="height: 65px;">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Fill up Shoppre Order Form</h1>
                        <br>
                        <p class="header6 p-color-cement">Copy the links of the products you
                            want to purchase and paste them on shoppre order form and Make payment to us.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 3</span>
                        <h1 class="header5 p-color-cement">We Do The Shopping</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Once you submit the order form,we'll make the purchase on your behalf.Any difference in the total cost
                            will be settled at the end reflected in your Shoppre Account
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Make a Ship Request</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Once you're done shopping; make a Ship Request. We'll consolidate your packages into one shipment;
                            cutting the shipping costs down by 80%.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 5</span>
                        <br>
                        <h1 class="header5 p-color-cement">You Pay, We'll Dispatch</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            Once we've confirmed your payment, your order will be dispatched &
                            be on its way to you (taking just 3-6 days)!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="/personal-shopper" target="_blank">Shop For Me !</a>
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
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

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


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align p-color-yellow" >
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align p-color-yellow">
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
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            $(function () {
            $.fn.myFunction = function(){
                $('#terms').modal('show')
            };

            $(".call-btn").click(function(){
                $.fn.myFunction();
            });
        });
        });

    </script>
@endsection

