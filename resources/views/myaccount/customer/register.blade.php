@extends('myaccount.layout')

@section('title', 'Sign Up &amp; Create Free Account | International Shipping | ShoppRe.com')
@section('description', 'New to ShoppRe? Sign Up to send your shipment by setting up a personal account. Also, you&#039;ll be able to store & access all your parcel here for free.')
@section('keywords', 'sign up, register, create account, shipment, personal, parcel')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/customer/register"/>
    <script src="{{asset('js/utils.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}?{{Config::get('app.last_commit_hash')}}">
    <script src="{{asset('js/intlTelInput.js')}}"></script>
    <script type='application/ld+json'>
  {
    "@context": "http://www.schema.org",
    "@type": "WebSite",
    "name": "ShoppRe.com",
    "alternateName": "IndianShoppre LLP",
    "url": "https://www.shoppre.com/"
  }


    </script>
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "ShoppRe - International Shipping From India",
    "url": "https://www.shoppre.com",
    "sameAs": [
      "https://www.facebook.com/goshoppre/",
      "https://www.instagram.com/shoppre_official/",
      "https://twitter.com/Go_Shoppre",
      "https://plus.google.com/+SHOPPRECOM",
      "https://www.linkedin.com/company/shoppre.com",
      "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw"
    ]
  }


    </script>
    <link rel="stylesheet" href="{{asset('css/custom')}}/ics.css">
    <style>
        /*label:after {transition-property: all !important;font-size: 0.8rem;transform: none;}*/
        /*label:not(.active):after {transform: translateY(-140%);}*/
        /*.lable-member-margin {margin-top: 50px;margin-bottom: 50px;}*/
        /*.lable-member-margin a {padding-bottom: 20px;}*/
        /*.login{padding-bottom: 50px;}*/
        .div-l-br {border-left: 1px solid #d1d5d9;}
        .h-section {background-color: #11273b;padding-top: 20px;height: 10em}
        .btn-enable{display: none}
        .btn-disabled{display: block}
        .tel-div-pad{padding: 5px;}
        @media only screen and (max-width: 600px) {
            .div-l-br {
                border: none
            }
            .btn-enable{display: block !important;}
            .btn-disabled{display: none !important;}
            .tel-div-pad{padding-left: 20px;}
        }

    </style>


@endsection

@section('content')
    <section class="h-section">
        {{--<div class="container">--}}
        {{--<center>--}}
        {{--<h1 class="f-s-36 f-c-white" id="signup-header">Sign Up Free to ShoppRe</h1>--}}
        {{--</center>--}}
        {{--</div>--}}
    </section>
    <section class="login-sction sec-sign-up" id="First-section">
        <div class="container">
            <div class="col-md-12 col-xs-12 col-sm-12 no-padding" id="signin-email">
                <div class="col-md-6 col-md-offset-3 col-xs-12 loginwindow">
                    <center>
                        <h1 class="f-s-36 f-c-d-greay f-w-8"><span class="f-c-red">S</span>ign Up</h1>
                    </center>

                    <div class="col-md-12 col-xs-12 "><br>
                        <center>
                            <p class="f-s-18 f-c-d-greay f-w-8">
                                Start saving UP TO 80% on Shipping Rates Today
                            </p>
                            <p class="f-s-16 f-c-l-gray">Maximize your international Shipping Discount With a ShoppRe
                                Premium Membership</p>
                        </center>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-6">
                            <center><br>
                                <p class="f-s-14 f-c-blue">
                                    First time Shipment <br>
                                    50% Offer
                                </p>
                                <button class="btn btn-b-b btn-s-b btn-f-w" id="Sign-up">Become Free Member</button>
                            </center>
                        </div>
                        <div class="col-xs-12 col-md-6 div-l-br">
                            <center>
                                <p class="f-s-14 f-c-blue">
                                    First time Shipment <br>
                                    50% Offer <span class="f-c-red"> + Save + 5% <br>
                              Additional on Final Rates</span>
                                </p>
                                <button class="btn btn-b-r btn-s-r btn-f-w" id="becomePartner">Become Premium Member
                                </button>
                            </center>
                            <br>
                            <br>
                        </div>
                    </div>

                    <a href="#" class="f-s-16 f-c-d-greay">Already have account? <span
                            class="f-c-red">Sign in</span></a>
                </div>
                <div class="col-md-offset-3 col-md-6 col-xs-12 no-pad" id="benefits"><br>
                    <h1 class="f-s-36 f-c-d-greay f-w-8"><span
                            class="f-c-red">B</span>enefits</h1> <br>
                    <img src="{{asset('img/images/member-plans-register.png')}}" class="img-f-w" alt="">
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container no-pad display-none" id="memberShip">
            <div class="col-md-12 col-xs-12 no-pad"><br>
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
                                <div class="col-md-12 div-col-xs-12 ">
                                    <table id="memberplans">
                                        <thead>
                                        <tr>
                                            <th class="col-md-4 col-xs-2">
                                                <h14 class="f-s-18 f-c-d-greay">Features</h14>
                                            </th>
                                            <th class="col-md-4 col-xs-5 no-pad">
                                                <img src="{{asset('img/images/m_premium.png')}}" style="width: 100%" class=""
                                                     alt=""> <br>
                                            </th>
                                            <th class="col-md-4 col-xs-5 no-pad">
                                                <h14 class="f-s-18 f-c-d-greay">Basic Plan</h14>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
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
                                            <td><h6 class="f-s-16 f-c-l-gray">₹100</h6></td>

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
                                                    <a href="#" class="tooltipkey" title="Once your purchase(s) arrive at our facility, if you feel
                                                       any item is not as per your expectation or is damaged,
                                                       it can be exchanged/returned to the seller (as per the
                                                       seller's exchange/return policy). It will be couriered back to the seller by us; for which
                                                       you will be charged as per the domestic shipping rates.">
                                                        <i class="fa fa-question-circle-o"></i>
                                                    </a>
                                                </h6>
                                            </td>
                                            <td><h6 class="f-s-16 f-c-blue">Within 3 Days = FREE</h6>
                                                <h6 class="f-s-16 f-c-blue">4 to 20 Days = FREE</h6>
                                                <h6 class="f-s-16 f-c-blue">>20 Days = ₹400</h6>
                                            </td>
                                            <td>
                                                <h6 class="f-s-16 f-c-l-gray">Within 3 Days = FREE</h6>
                                                <h6 class="f-s-16 f-c-l-gray">4 to 10 Days = ₹100</h6>
                                                <h6 class="f-s-16 f-c-l-gray">>10 Days = ₹400</h6>
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
                                            <td><h6 class="f-s-16 f-c-blue">₹100 Per Page</h6></td>
                                            <td><h6 class="f-s-16 f-c-l-gray">₹40 Per Page</h6></td>
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
                                                <h6 class="f-s-16 f-c-d-greay">Electronics/Branded Food Items/Powder items Clearance charge
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
                                                    <a href="#" class="tooltipkey" title="Our Personal Shopper will do the purchase for you in case if the Websites don't
                                                     accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
                                                     with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                        <i class="fa fa-question-circle-o"></i>
                                                    </a>
                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class="f-s-16 f-c-blue"> 7% of the item value <br> (Min ₹200)</h6>
                                            </td>
                                            <td>
                                                <h6 class="f-s-16 f-c-l-gray"> 7% of the item value <br> (Min ₹200)</h6>
                                            </td>
                                        </tr>
                                        <tr class="tr-hide">
                                            <td>
                                                <h6 class="f-s-16 f-c-d-greay">Receive your own Indian Virtual Shipping Address & Personal
                                                    Locker
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
                                                    <a href="#" class="tooltipkey"
                                                       title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                                        <i class="fa fa-question-circle-o"></i>
                                                    </a>
                                                </h6>
                                            </td>
                                            <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                            <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h14 class="f-s-18 f-c-d-greay">Monthly Fee</h14>
                                            </td>
                                            <td class="pad-20">
                                                <h6 class="f-s-20 f-c-blue f-w-9">₹2500/-</h6>
                                                <a href="{{route('member.register')}}?member=h"
                                                class="btn btn-b-r btn-s-r btn-a-l btn-disabled">Start Plan
                                                </a>
                                                <a href="{{route('member.register')}}?member=h" class="btn-enable ">Start Plan
                                                </a>

                                            </td>
                                            <td>
                                                <h6 class="f-s-20 f-c-blue f-w-9">Free Forever</h6>
                                                <a id="free_signup_h" class="btn btn-b-b btn-s-b btn-a-l btn-disabled">Free Signup
                                                </a>
                                                <a id="free_signup_h1" class="btn-enable ">Free Signup
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="Y" class="tab-pane fade" style="padding-top: 30px">
                                <table id="memberplans">
                                    <thead>
                                    <tr>
                                        <th class="col-md-4 col-xs-2">
                                            <h14 class="f-s-18 f-c-d-greay">Features</h14>
                                        </th>
                                        <th class="col-md-4 col-xs-5 no-pad">
                                            <img src="{{asset('img/images/m-premium.png')}}" style="width: 100%"
                                                 class=""
                                                 alt=""> <br>
                                        </th>
                                        <th class="col-md-4 col-xs-5 no-pad">
                                            <h14 class="f-s-18 f-c-d-greay">Basic Plan</h14>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
                                        <td><h6 class="f-s-16 f-c-l-gray">₹100</h6></td>

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
                                                <a href="#" class="tooltipkey" title="Once your purchase(s) arrive at our facility, if you feel
        any item is not as per your expectation or is damaged,
        it can be exchanged/returned to the seller (as per the
        seller's exchange/return policy). It will be couriered back to the seller by us; for which
        you will be charged as per the domestic shipping rates.">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-blue">4 to 20 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-blue">>20 Days = ₹400</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray">Within 3 Days = FREE</h6>
                                            <h6 class="f-s-16 f-c-l-gray">4 to 10 Days = ₹100</h6>
                                            <h6 class="f-s-16 f-c-l-gray">>10 Days = ₹400</h6>
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
                                        <td><h6 class="f-s-16 f-c-blue">₹100 Per Page</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">₹40 Per Page</h6></td>
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
                                            <h6 class="f-s-16 f-c-d-greay">Electronics/Branded Food Items/Powder items
                                                Clearance charge
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
                                                <a href="#" class="tooltipkey" title="Our Personal Shopper will do the purchase for you in case if the Websites don't
        accept your international card Payment, or asking for an active Indian number which you don't have. Personal Shopper orders
        with more than 15 items per online seller, will incur an ₹50/ item for every item over 15. ">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-blue"> 7% of the item value <br> (Min ₹200)</h6>
                                        </td>
                                        <td>
                                            <h6 class="f-s-16 f-c-l-gray"> 7% of the item value <br> (Min ₹200)</h6>
                                        </td>
                                    </tr>
                                    <tr class="tr-hide">
                                        <td>
                                            <h6 class="f-s-16 f-c-d-greay">Receive your own Indian Virtual Shipping
                                                Address & Personal Locker
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
                                                <a href="#" class="tooltipkey"
                                                   title="We receive your packages here at our facility, log them into your lockers and account; all this without charging your anything extra!">
                                                    <i class="fa fa-question-circle-o"></i>
                                                </a>
                                            </h6>
                                        </td>
                                        <td><h6 class="f-s-16 f-c-blue">Free</h6></td>
                                        <td><h6 class="f-s-16 f-c-l-gray">Free</h6></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h14 class="f-s-18 f-c-d-greay">Monthly Fee</h14>
                                        </td>
                                        <td class="pad-20">
                                            <h6 class="f-s-20 f-c-blue f-w-9">₹5000/-</h6>
                                            <a href="{{route('member.plan')}}?member=y"
                                            class="btn btn-b-r btn-s-r btn-a-l btn-disabled ">Start Plan
                                            </a>
                                            <a href="{{route('member.plan')}}?member=y" class="btn-enable ">Start
                                            Plan
                                            </a>
                                        </td>
                                        <td>
                                            <h6 class="f-s-20 f-c-blue f-w-9">Free Forever</h6>
                                            <a class="btn btn-b-b btn-s-b btn-a-l btn-disabled"id="free_signup_y1">Free Signup
                                            </a>
                                            <a class="btn-enable " id="free_signup_y1">Free Signup
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

    </section>
    <section class="login-sction sec-sign-up display-none" id="Sign-up1">
        <div class="container">
            <form class="register-form" id="form_register" role="form" method="POST"
                  action="{{ route('customer.register.submit') }}">
                {{ csrf_field() }}
                <input type="hidden" name="referrer" value="{{app('request')->input('r')}}">
                <input type="hidden" name="continue" value="{{app('request')->input('continue')}}">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="signin-email">
                    <div class="col-md-6 col-md-offset-3 col-xs-12 loginwindow">
                        {{--<center><p class="div-offer-display">*50% off on your first time Shipment.</p></center>--}}
                        <div class="col-md-8 col-md-offset-2 col-xs-12 no-pad" id="addImge">
                            <center>
                                <a href="{{route('offers-new.index')}}" target="_blank">
                                    <img
                                        src="{{asset('/img/images/schedule-pickup-courier-from-india-shoppre.png')}}"
                                        alt="schedule-pickup-courier-from-india-shoppre" class="img-responsive">
                                </a>
                            </center>
                            <br>
                        </div>
                        <div class="col-md-12 col-xs-12 ">
                            <center>
                                <div class="col-md-6 col-xs-6 img-google-pluse">
                                    <a href="{{route('customer.social.google', ['loginAs' => 'Customer'])}}"
                                       class="pull-right"><img
                                            src="{{asset('img/google-plus-logo-button.png')}}" alt=""></a>
                                </div>
                                <div class="col-md-6 col-xs-6 img-facebook-pluse">
                                    <a href="{{route('customer.social.facebook')}}" class="pull-left"><img
                                            src="{{asset('img/facebook-logo-button.svg')}}" alt=""></a>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-12 col-xs-12 no-padd">
                            @if (session('message'))
                                <div class="alert alert-success text-center">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if (session('error_message'))
                                <div class="alert alert-danger text-center">
                                    {{ session('error_message') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-xs-12 col-md-12 email-id">
                            <center>
                                <input type="hidden" name="continue" value="">
                                <div class="form-group">
                                    <input type="email" class="txt-login-register" placeholder="jhon@gmail.com"
                                           id="signup-email" name="email"
                                           value="{{app('request')->input('email')}}" required autofocus>
                                </div>
                                <span class="span-validate">Your Email is required</span>
                            </center>
                        </div>
                        <div class="col-xs-12 col-md-12 other-feilds">
                            <input type="hidden" name="utm_campaign" value="" id="utm_campaign">
                            <input type="hidden" name="utm_source" value="" id="utm_source">
                            <input type="hidden" name="utm_medium" value="" id="utm_medium">
                            <input type="hidden" name="gcl_id" value="" id="gcl_id">
                            <input type="hidden" name="referer" value="" id="referer">
                            <input type="hidden" name="first_visit" value="" id="first_visit">
                            <center>
                                <input type="hidden" name="continue" value="">
                                <div class="form-group">
                                    <input type="text" class="txt-login-register" name="firstname"
                                           value="{{ old('firstname') }}"
                                           placeholder="First Name *" required>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-offset-3 col-md-6 col-xs-12 no-pad">
                            <div class="col-xs-12 col-md-12 tel-div-pad">
                                <input class="txt-login-register" style="" id="phone" type="tel" name="phone" ng-intl-tel-input="" required /> <br/>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12" style="margin-top: -20px;">
                            <center>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <input type="password" class="txt-login-register" placeholder="Password *"
                                           name="password" required>
                                </div>
                            </center>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <center>
                                <div class="form-group">
                                    <input type="text" class="txt-login-register" placeholder="Referral code if any"
                                           name="refferal" visible="false">
                                </div>
                            </center>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <center><br>
                                <button type="submit" class="btn btn-s-r btn-b-r btn-l">Sign Up Free</button>
                            </center>
                        </div>

                        <div class="col-md-12 col-xs-12 pad-t-20">
                            <div class="col-md-8 col-xs-12 no-pad div-align-items-l">
                                <label class="f-c-d-greay">Already have account?
                                    <a href="{{route('customer.login')}}" class="f-c-red"> Sign In</a>
                                </label>
                            </div>
                            <div class="col-md-4 col-xs-12 no-pad div-align-items-r">
                                <a href="https://www.shoppre.com/terms-and-conditions" class="f-c-d-greay" target="_blank">Terms &
                                    Privacy Policy</a>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <br>
    </section>

@endsection

@section('js_script')
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#becomePartner').click(function () {
                $('#benefits').hide();
                $('#memberShip').show();
            });
            $('#Sign-up').click(function () {
                $('#First-section').hide();
                $('#Sign-up1').show();
            });
            $('#free_signup_y1').click(function () {
                $('#First-section').hide();
                $('#Sign-up1').show();
            });
            $('#free_signup_h1').click(function () {
                $('#First-section').hide();
                $('#Sign-up1').show();
            });
            $('#free_signup_y').click(function () {
                $('#First-section').hide();
                $('#Sign-up1').show();
            });
            $('#free_signup_h').click(function () {
                $('#First-section').hide();
                $('#Sign-up1').show();
            });

            $('#utm_campaign').val(localStorage.utm_campaign !== undefined ? localStorage.utm_campaign : 'no-utm-campaign');
            $('#utm_medium').val(localStorage.utm_campaign !== undefined ? localStorage.utm_medium : 'no-utm-medium');
            $('#utm_source').val(localStorage.utm_campaign !== undefined ? localStorage.utm_source : 'no-utm-source');
            $('#gcl_id').val(localStorage.utm_campaign !== undefined ? localStorage.gcl_id : 'no-gcl-id');
            $('#referer').val(localStorage.referer);
            $('#first_visit').val(localStorage.first_visit);
        });
        $(document).ready(function () {
            $('#btn-email').click(function () {
                const sign_email = $('#signup-email').val();
                if (sign_email == '') {
                    $('.span-validate').css('display', 'block');
                }
                else {
                    $('#signin-email').hide();
                    $('#signin-name').show();
                    $('#signup-header').text('Complete Sign Up');
                }
            });

            // $('#utm_campaign').val(localStorage.utm_campaign !== undefined ? localStorage.utm_campaign : 'no-utm-campaign');
            // $('#utm_medium').val(localStorage.utm_campaign !== undefined ? localStorage.utm_medium : 'no-utm-medium');
            // $('#utm_source').val(localStorage.utm_campaign !== undefined ? localStorage.utm_source : 'no-utm-source');
            // $('#gcl_id').val(localStorage.utm_campaign !== undefined ? localStorage.gcl_id : 'no-gcl-id');
            // $('#referer').val(localStorage.referer);
            // $('#first_visit').val(localStorage.first_visit);

        });
    </script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/js/utils.js",
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.validator.addMethod("alpha", function (value, element) {
                return this.optional(element) || /^[a-z ]+$/i.test(value);
            }, "\<br> You can only insert alphabets");

            $.validator.addMethod("pwcheck", function (value) {
                return /^[A-Za-z0-9\d=!\-$#&%@._*]*$/.test(value) // consists of only these
                    && /[a-z]/.test(value) // has a lowercase letter
                    && /\d/.test(value) // has a digit
            });

            // $("#form_register").validate({
            //     rules:
            //         {
            //             // title: {required: true},
            //             firstname: {required: true, alpha: true},
            //             // lastname: {required: true},
            //             country_code: {required: true},
            //             phone: {required: true},
            //             email: {required: true, email: true},
            //             password: {required: true, minlength: 8, pwcheck: true},
            //             // password_confirmation: {required: true, equalTo: "input[name='password']"}
            //         },
            //     messages:
            //         {
            //             firstname: {required: "Your firstname required"},
            //             // lastname: {required: "Your lastname required"},
            //             email: {
            //                 required: "Please enter email address",
            //                 email: "Your email address must be in the format of name@domain.com"
            //             },
            //             password: {
            //                 required: "Please enter your password",
            //                 pwcheck: "Please enter a strong password with alphabets and digits."
            //             },
            //             password_confirmation: {
            //                 required: "Password confirmation required",
            //                 // equalTo: "Password confirmation not matching"
            //             },
            //         },
            // });
        });
    </script>
@endsection
