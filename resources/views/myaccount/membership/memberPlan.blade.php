@extends('myaccount.membership.layout')

@section('title', 'Start saving UP TO 80% on Shipping Rates | ShoppRe Membership Plan')
@section('description', 'Maximize your international shipping discount With our Premium Membership, specifically designed for customers who use our services including Personal Shopper or for bulk international shipments.')
@section('keywords', 'personal shopper, shoppre membership plans, bulk international shipments, shipping rates')

@section('css_style')
    <meta name="robots" content="noindex">
    <link rel="canonical" href="https://www.shoppre.com/member/select/plan"/>
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <style>
        .container-fluid{padding-left: 10%;padding-right: 10%}
        .btn span.glyphicon {opacity: 0;}
        .btn.active span.glyphicon {opacity: 1;}
        .l-pad{padding-left: 10px}
        .div-b-price{border-radius: 3px;border: 1px solid #edeef0;background-color: #fbfbfc;}
        .div-p-price{box-shadow: 0 2px 3px rgba(232, 81, 81, 0.1);border-radius: 3px;border: 1px solid #ffe19a;background-color: #fff7e5;}
        .div-b-b{border-bottom: 1px solid rgba(146, 156, 165, 0.2);padding-bottom: 20px}
        .btn-terms{border-radius: 30px;background-color: #929ca5;color: #fff}
        .div-c-guide{border-radius: 3px;border: 1px solid rgba(233, 196, 106, 0.2);background-color: #fff7e4;}
        .btn-enable{display: none}
        .btn-disabled{display: inline-block}
        .btn-puls-pad{padding: 6px 8px;}
        .new-pricing .select-control {float: left;width: 89px;height: 40px;font-size: 13px;font-weight: 400;font-style: italic;border-left: 0;border-radius: 20px;background-color: #fafafb;border: none;}
        .sidebar-nav-fixed{width:13%}.fixed-div{position: fixed;}
        #volumetric-dis{display: none}


        @media only screen and (max-width: 600px) {
            .l-pad{padding-left: 0px}
            .container-fluid{padding-left: 1%;padding-right: 1%}
            .btn-enable{display: inline-block}
            .btn-disabled{display: none}
            .btn-puls-pad{padding: 6px 6px;}
        }

    </style>

    @endsection

    @section('content')
    </br>
    </br>
    <div class="container" >
        <div class="row text-center">
            <img class="img-responsive" src="{{asset('img/member/progress1.png')}}"  style='height:60px;display:inline !important' alt="Member Plan"></a>
        </div>

        <div class="col-md-12 col-xs-12"><br>
            <div class="col-md-12 col-xs-12 div-b-w-s no-pad">
                <div class="col-xs-12 col-md-12 no-pad">
                    <center>
                        <h3 class="f-s-24 f-c-d-greay">Membership Plans</h3>
                        <p class="f-s-16 f-c-l-gray">Membership Plans are specifically designed for customers who
                            use our services
                            including Personal Shopper frequently or for bulk international shipments. You can see
                            the obvious difference in costs from our International Shipping Calculator.</p>  <br>
                    </center>
                </div>
                <div class="wrapper">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="pill" class="btn btn-membership-plans-monthly" href="#M">Half Yearly</a>
                        </li>
                        <li>
                            <a data-toggle="pill" class="btn btn-membership-plans-yearly" href="#Y">Yearly</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="M" class="tab-pane fade in active">
                            <table id="memberplans">
                                <tr>
                                    <th class="col-md-4 col-xs-2">
                                        <h14 class="f-s-18 f-c-d-greay">Features</h14>
                                    </th>
                                    <th class="col-md-4 col-xs-5 no-pad">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/m_premium.png" style="width: 100%" class=""
                                             alt=""> <br>
                                    </th>
                                    <th class="col-md-4 col-xs-5 no-pad">
                                        <h14 class="f-s-18 f-c-d-greay">Basic Plan</h14>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Consolidation
                                            <a href="#" class="tooltipkey"
                                               title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                                <i class="fa fa-question-circle-o"></i></a></h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">₹50</h6></td>

                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Photo
                                            <a href="#" class="tooltipkey"
                                               title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                <i class="fa fa-question-circle-o"></i></a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">₹10 per photo</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">₹20 per photo</h6></td>

                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Advanced Photo
                                            <a href="#" class="tooltipkey"
                                               title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                <i class="fa fa-question-circle-o"></i></a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">₹100 per photo</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">₹500 per photo</h6></td>

                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Discounts on Shipping
                                            <a href="#" class="tooltipkey"
                                               title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Country Discount + Seasonal Offers <br>
                                            + 5% Discount</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Country Discount + Seasonal Offers</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Pickup Charges
                                            <a href="#" class="tooltipkey"
                                               title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">0 - 5 kg = ₹100</h6>
                                        <h6 class="f-s-16 f-c-blue">0 - 10 kg = ₹300</h6>
                                        <h6 class="f-s-16 f-c-blue">0 - 40 kg = ₹500</h6>
                                        <h6 class="f-s-16 f-c-blue">Above 40 kg = ₹800</h6>

                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">40/kg in Bangalore,</h6>
                                        <h6 class="f-s-16 f-c-l-gray">Min ₹100</h6>
                                        <h6 class="f-s-16 f-c-l-gray">50/kg outside Bangalore,</h6>
                                        <h6 class="f-s-16 f-c-l-gray">Min ₹200</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Storage<a href="#" class="tooltipkey"
                                                                                 title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a></h6>
                                    </td>

                                    <td><h6 class="f-s-16 f-c-blue">30 Days</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">20 Days</h6></td>
                                </tr>
                                <tr>

                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Package Return
                                            <a href="#" class="tooltipkey"title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">Within 3 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">4 to 10 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">11 to 15 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">Above 15 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">Opted for taking back the Shipment = FREE</h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-gray">Within 3 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-gray">4 to 10 Days = ₹100/Package</h6>
                                        <h6 class="f-s-16 f-c-gray">11 to 15 Days = ₹200/Package</h6>
                                        <h6 class="f-s-16 f-c-gray">Above 15 Days = ₹400/Package</h6>
                                        <h6 class="f-s-16 f-c-gray">Opted for taking back the Shipment = ₹400</h6>
                                    </td>
                                </tr>

                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Scanned Copies of Documents
                                            <a href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">₹40 Per Page</h6></td>
                                    <td><h6 class="f-s-16 f-c-gray">₹100 Per Page</h6></td>

                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">E-mail Updates
                                            <a href="#" class="tooltipkey"
                                               title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Shipping Addresses<a
                                                href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                    <td><h6 class="p-color-cement header6">Upto 5 addresses</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Liquid/Semi liquid Clearance charge
                                            <a href="#" class="tooltipkey"
                                               title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">0.5 - 5 Kg -> ₹1392.4 </h6>
                                        <h6 class="f-s-16 f-c-blue">5 - 10 Kg -> ₹3009</h6>
                                        <h6 class="f-s-16 f-c-blue">10 - 15 Kg -> ₹5369</h6>
                                        <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹7729</h6>
                                        <span class="f-s-12 f-c-blue">*Weight in Kg per shipment</span>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹1392.4 </h6>
                                        <h6 class="f-s-16 f-c-l-gray">5 - 10 Kg -> ₹3009</h6>
                                        <h6 class="f-s-16 f-c-l-gray">10 - 15 Kg -> ₹5369</h6>
                                        <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹7729</h6>
                                        <span class="f-s-12 f-c-l-gray">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Electronics/Branded Food Items/Powder items Clearance charges Applicable only for Dubai and Singapore
                                            <a href="#" class="tooltipkey"
                                               title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">₹ 200/- </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">₹ 500/- </h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Real Time Tracking
                                            <a href="#" class="tooltipkey"
                                               title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Set Up a Local Hub for Your Business
                                            <a href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue"> Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Personal Shopper
                                            <a href="#" class="tooltipkey"title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue"> Assisted Purchase(by ShoppRe) = 07% of the item value (Min ₹200)
                                            <br>
                                            Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">Assisted Purchase(by ShoppRe) = 07% of the item value (Min ₹200)
                                            <br>
                                            Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Receive your own Indian Virtual Shipping Address & Personal Locker
                                            <a href="#" class="tooltipkey" title="Receive your own FREE locker space in
                                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Receive Parcels
                                            <a href="#" class="tooltipkey"title="We receive your packages here at our facility, log them into your lockers and account;
                                                all this without charging your anything extra!">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h14 class="f-s-18 f-c-gray">Half Yearly Fee</h14>
                                    </td>
                                    <td class="pad-20">
                                        <h6 class="f-s-20 f-c-blue f-w-9">₹2500/-</h6>
                                        <a href="{{route('member.register')}}?member=h"
                                           class="btn btn-b-r btn-s-r btn-a-l btn-disabled ">TRY IT
                                        </a>
                                        <a href="{{route('member.register')}}?member=h" class="btn-enable ">Start Plan
                                        </a>

                                    </td>
                                    <td>
                                        <h6 class="f-s-20 f-c-blue f-w-9">FREE FOREVER</h6>
                                        <a href="{{route('customer.register')}}"
                                           class="btn btn-b-b btn-s-b btn-a-l btn-disabled  ">FREE SIGN-UP
                                        </a>
                                        <a href="{{route('customer.register')}}"
                                           class="btn-enable ">Free Signup
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="Y" class="tab-pane fade" style="padding-top: 30px">
                            <table id="memberplans">
                                <tr>
                                    <th class="col-md-4 col-xs-2">
                                        <h14 class="f-s-18 f-c-d-greay">Features</h14>
                                    </th>
                                    <th class="col-md-4 col-xs-5 no-pad">
                                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/m-premium.png" style="width: 100%" class=""
                                             alt=""> <br>
                                    </th>
                                    <th class="col-md-4 col-xs-5 no-pad">
                                        <h14 class="f-s-18 f-c-d-greay">Basic Plan</h14>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Consolidation
                                            <a href="#" class="tooltipkey"
                                               title="ShoppRe’s packing experts will
                                                   combine multiple packages into one, for saving the maximum in shipping costs.
                                                   This way, you only have to pay for the first half kg rate
                                                   (which is the most expensive rate) once. At times, some of
                                                   your packages might contain more than
                                                   1 item. While preparing your final shipment, we only charge per
                                                   package, not per item. ">
                                                <i class="fa fa-question-circle-o"></i></a></h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">₹50</h6></td>

                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Photo
                                            <a href="#" class="tooltipkey"
                                               title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                <i class="fa fa-question-circle-o"></i></a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">₹10 per photo</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">₹20 per photo</h6></td>

                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Advanced Photo
                                            <a href="#" class="tooltipkey"
                                               title="Basic Photos: We take up to 5 Basic photographs of all
                                                         your items. Additional Photos: You can request up to 10
                                                         Additional Photos (in case you want to some more details or if
                                                         you want to inspect your purchases in more detail).">
                                                <i class="fa fa-question-circle-o"></i></a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">₹100 per photo</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">₹500 per photo</h6></td>

                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Discounts on Shipping
                                            <a href="#" class="tooltipkey"
                                               title="ShoppRe’s long term partnership with
                                                 trusted courier companies like DHL, DTDC
                                                 and more, gives us amazing shipping rates, thanks
                                                 to our bulk shipments every month. This means more
                                                 savings for you as our customer! (Extra Shipping Discounts
                                                 apply if you choose ShoppRe as your Shipping Partner).">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Country Discount + Seasonal Offers <br>
                                            + 5% Discount</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Country Discount + Seasonal Offers</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Pickup Charges
                                            <a href="#" class="tooltipkey"
                                               title="You can schedule pickup for your courier with us
                                                   from ANYWHERE in India!">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">0 - 5 kg = ₹100</h6>
                                        <h6 class="f-s-16 f-c-blue">0 - 10 kg = ₹300</h6>
                                        <h6 class="f-s-16 f-c-blue">0 - 40 kg = ₹500</h6>
                                        <h6 class="f-s-16 f-c-blue">Above 40 kg = ₹800</h6>

                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">40/kg in Bangalore,</h6>
                                        <h6 class="f-s-16 f-c-l-gray">Min ₹100</h6>
                                        <h6 class="f-s-16 f-c-l-gray">50/kg outside Bangalore,</h6>
                                        <h6 class="f-s-16 f-c-l-gray">Min ₹200</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Storage<a href="#" class="tooltipkey"
                                                                                 title="Purchases are securely housed in our facility,
                                                  allowing time for multiple packages to be delivered & thereby saving up the maximum through
                                                  consolidation. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a></h6>
                                    </td>

                                    <td><h6 class="f-s-16 f-c-blue">30 Days</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">20 Days</h6></td>
                                </tr>
                                <tr>

                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Package Return
                                            <a href="#" class="tooltipkey"title="Once your purchase(s) arrive at our facility, if you feel
                                                           any item is not as per your expectation or is damaged,
                                                           it can be exchanged/returned to the seller (as per the
                                                           seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                           you will be charged as per the domestic shipping rates.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">Within 3 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">4 to 10 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">11 to 15 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">Above 15 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-blue">Opted for taking back the Shipment = FREE</h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-gray">Within 3 Days = FREE</h6>
                                        <h6 class="f-s-16 f-c-gray">4 to 10 Days = ₹100/Package</h6>
                                        <h6 class="f-s-16 f-c-gray">11 to 15 Days = ₹200/Package</h6>
                                        <h6 class="f-s-16 f-c-gray">Above 15 Days = ₹400/Package</h6>
                                        <h6 class="f-s-16 f-c-gray">Opted for taking back the Shipment = ₹400</h6>
                                    </td>
                                </tr>

                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Scanned Copies of Documents
                                            <a href="#" class="tooltipkey" title="
                                                         Documents scan: We scan documents ( for up to 2 kgs and below)
                                                          for a cost of ₹40/page (minimum ₹100).">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">₹40 Per Page</h6></td>
                                    <td><h6 class="f-s-16 f-c-gray">₹100 Per Page</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">E-mail Updates
                                            <a href="#" class="tooltipkey"
                                               title="We charge an additional amount of ₹100 for
                                                       receiving a package which, can be classified as a document
                                                       (for up to 2 kg). Shipping charges for Documents slightly vary
                                                        from that of Non-documents. As of now this service is made available FREE of cost.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Shipping Addresses<a
                                                href="#" class="tooltipkey" title=" Add multiple destination addresses in your address book.
                                                    Choose the address to which you wish to send every time you create a ship request.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="p-color-cement header6">Unlimited</h6></td>
                                    <td><h6 class="p-color-cement header6">Upto 5 addresses</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Electronics/Branded Food Items/Powder items Clearance charges Applicable only for Dubai and Singapore
                                            <a href="#" class="tooltipkey"
                                               title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">₹ 200/- </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">₹ 500/- </h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Liquid/Semi liquid Clearance charge
                                            <a href="#" class="tooltipkey"
                                               title="Any Package which requires Special Handling
                                                         will be prompted to you via email. All liquids/
                                                         semi-liquids/ homemade food/ medicines/ ayurvedic
                                                         products/ dangerous goods like nail polish,  etc.
                                                         will incur a customs clearance charge.The costs might
                                                         not be limited to the given cost for all cases (for
                                                         eg, in cases of shipping heavy weight objects or
                                                         heavy volume dangerous goods such as paints, etc.) -
                                                         costs could vary, and will keep you posted via
                                                         email. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue">0.5 - 5 Kg -> ₹1392.4 </h6>
                                        <h6 class="f-s-16 f-c-blue">5 - 10 Kg -> ₹3009</h6>
                                        <h6 class="f-s-16 f-c-blue">10 - 15 Kg -> ₹5369</h6>
                                        <h6 class="f-s-16 f-c-blue">Above 15 Kg -> ₹7729</h6>
                                        <span class="f-s-12 f-c-blue">*Weight in Kg per shipment</span>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray">0.5 - 5 Kg -> ₹1392.4 </h6>
                                        <h6 class="f-s-16 f-c-l-gray">5 - 10 Kg -> ₹3009</h6>
                                        <h6 class="f-s-16 f-c-l-gray">10 - 15 Kg -> ₹5369</h6>
                                        <h6 class="f-s-16 f-c-l-gray">Above 15 Kg -> ₹7729</h6>
                                        <span class="f-s-12 f-c-l-gray">*Weight in Kg per shipment</span>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Real Time Tracking
                                            <a href="#" class="tooltipkey"
                                               title="As soon as we dispatch your shipment to the courier you'll receive an update to help you track the same.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Set Up a Local Hub for Your Business
                                            <a href="#" class="tooltipkey" title="If you are a seller sourcing products
                                                    from India and sell globally, use Shoppre as your Hub in India.
                                                    Source the products from different parts of India,
                                                    manage inventory through Shoppre and ship globally anywhere in 3-6 days.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue"> Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray"> Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Personal Shopper
                                            <a href="#" class="tooltipkey"title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                         accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                         with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-blue"> Assisted Purchase(by ShoppRe) = 07% of the item value (Min ₹200)
                                            <br>
                                            Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                    </td>
                                    <td>
                                        <h6 class="f-s-16 f-c-l-gray"> Assisted Purchase(by ShoppRe) = 07% of the item value (Min ₹200)<br>
                                            Self Purchase(Cash on Delivery) = 10% of the item value (Min ₹200)</h6>
                                    </td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Receive your own Indian Virtual Shipping Address & Personal Locker
                                            <a href="#" class="tooltipkey" title="Receive your own FREE locker space in
                                                Bengaluru as soon as you sign up with Shoppre! Use the Shipping Address
                                                given to you to shop from ANY Indian Online Store and to ship your purchases to.">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr class="tr-hide">
                                    <td>
                                        <h6 class="f-s-16 f-c-d-greay">Receive Parcels
                                            <a href="#" class="tooltipkey"title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                                <i class="fa fa-question-circle-o"></i>
                                            </a>
                                        </h6>
                                    </td>
                                    <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                    <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h14 class="f-s-18 f-c-gray">Yearly Fee</h14>
                                    </td>
                                    <td class="pad-20">
                                        <h6 class="f-s-20 f-c-blue f-w-9">₹5000/-</h6>
                                        <a href="{{route('member.plan')}}?member=y"
                                           class="btn btn-b-r btn-s-r btn-a-l btn-disabled ">TRY IT
                                        </a>
                                        <a href="{{route('member.plan')}}?member=y" class="btn-enable ">Start Plan
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="f-s-20 f-c-blue f-w-9">Free Forever</h6>
                                        <a href="{{route('customer.register')}}?member=b"
                                           class="btn btn-b-b btn-s-b btn-a-l btn-disabled ">FREE SIGN-UP
                                        </a>
                                        <a href="{{route('customer.register')}}?member=b"
                                           class="btn-enable ">Free Signup
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid c-f-p">
        <center><br>
            <h1 class="f-s-26 f-c-d-greay f-w-8"><span class="f-c-red">S</span>ign Up & Start Shipping from <br>India
                to Worldwide</h1>
            <br>
{{--            <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-b btn-b-g">Create a Free ShoppRe account</a>--}}
{{--            <br><br><br>--}}
        </center>
    </div>


@section('js_script')
    <!-- Owl Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/photoreq.js')}}"></script>
    <script src="{{asset('js/jquery.redirect.js')}}"></script>
    <script type="text/javascript">
        $('.slide_trigger').click(function (e) {
            e.preventDefault();
            var target = $(this).attr('data-target');
            $('#' + target).slideToggle();
        });


        $("input:checkbox, input:radio").change(function () {
            var payment_gateway_name = $("input[name='payment_gateway_name']:checked").val();

            $.redirect("", {
                paymentGatewayName: payment_gateway_name
            }, 'GET');
        });

    </script>
@endsection
