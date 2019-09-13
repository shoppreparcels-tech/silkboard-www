@extends('layout')

@section('title', 'International Courier from India to Singapore | Starting from ₹939')
@section('description', 'Fast and Reliable Shipping from India to Singapore. Ship household stuff, medicine, food items, docs. Save 60% on Shipping Rates. Call 08277919191 for Pick up.')
@section('keywords', 'courier from india to singapore, ship household stuff, packers and movers company, Shop & Ship services')

@section('css_style')

    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "ShoppRe.com",
  "alternateName": "Send International Courier From India to Singapore",
  "url": "https://www.shoppre.com/international-courier-charges-india-to-singapore-per-kg",
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
    "https://g.page/InternationalCourier",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre"
  ],
  "aggregateRating": {
    "@type" : "AggregateRating",
    "bestRating": "5",
    "ratingValue" : "4.8",
    "reviewCount" : "500",
    "worstRating" : 3.0
  }
}
</script>
    <script type="application/ld+json">
{
  "@context": "http://www.schema.org",
  "@type": "ParcelDelivery",
  "name": "ShoppRe",
  "url": "https://www.shoppre.com/international-courier-charges-india-to-singapore-per-kg",
  "image": "https://www.shoppre.com/img/images/schedule-pickup-package-in-india.jpg",
  "description": "international courier from India to Singapore",
  "originAddress": {
    "@type": "PostalAddress",
    "streetAddress": "No.181, 1st Floor 2nd Cross Rd, 1st Block Koramangala",
    "addressLocality": "Bengaluru",
    "addressRegion": "Karnataka",
    "postalCode": "560034",
    "addressCountry": "India"
  },
  "deliveryAddress": {
    "@type": "PostalAddress",
    "addressCountry": "Singapore"
  },
   "hasDeliveryMethod": {
  "@type": "DeliveryMethod",
  "name": "DHL, FedExExpress"
  }
}
</script>

    <link rel="canonical" href="https://www.shoppre.com/international-courier-charges-india-to-singapore-per-kg" />
@endsection
@section('content')

    <section class="bg-ics-l-p">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-8277919191" class="pull-right d-contact-img-desktop">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img1.png" alt="">
                </a>
                <a href="tel:+91-8277919191" class="d-contact-img pull-right">
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/d-contact-img2.png" alt="">
                </a>
            </div>

            <div class="col-sm-7 col-xs-12 no-pad">

                <div class="col-md-12 col-xs-12 no-pad">
                    <h1 class="p-color-white header-spacing d-header-text">International Courier
                        <br></h1>
                    <h1 class="header1 p-color-white header-spacing">Best Rates to Singapore</h1>
                    <table class="table table-bordered txt-a-c">
                        <tr>
                            <td class="btn-b-y tbl-br">
                                <h1>Pricing</h1>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹939</h1>
                                 <p><span>Per</span> 0.5 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹1400</h1>
                                <p><span>Per</span> 1 Kg</p>
                            </td>
                            <td class=" div-b-w-s tbl-br">
                                <h1>₹2087</h1>
                                <p><span>Per</span> 2 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹2960</h1>
                                <p><span>Per</span> 3 Kg</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹3218</h1>
                                <p><span>Per</span> 4 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹3474</h1>
                                <p><span>Per</span> 5 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹3452</h1>
                                <p><span>Per</span> 10 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹7276</h1>
                                <p><span>Per</span> 20 Kg</p>
                            </td>
                            <td class="div-b-w-s tbl-br">
                                <h1>₹20756</h1>
                                <p><span>Per</span> 50 Kg</p>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="{{route('schedulePickup.Index')}}" class="btn btn-s-r btn-b-r btn-a-l">Schedule Pickup</a>
                    <a href="{{route('pricing')}}" class="btn btn-l btn-s-b btn-b-b btn-a-l">Estimate</a>
                    <br>
                    <br>
                    <a href="/first-time-international-shipment-offer" class="btn btn-s-r btn-b-r btn-f-w">Avail Your Discount on your First International Shipment. Use Code: FRST50</a>
                </div>

            </div>

            <div class="col-sm-5 col-xs-12" style="padding-top: 50px">
                <form action="" method="post" id="ics_lp">
                    {{csrf_field()}}
                    <div class="formFrame " id="diwali-couponcode1">
                        <h1 class="header2 p-color-blue" style="margin-bottom: 30px">Request a Callback</h1>
                        <div class="form-group">
                            {{--<a href="https://wa.me/918277919191?text=I'm%20interested%20in%20Shopping%20and%20Shipping%20from%20India%20" target="_blank" class="c-image">--}}
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/christmas-contact.png" alt="">
                            {{--</a>--}}
                        </div>

                        <div class="form-group text-center div-align-items-l">
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                            <a href="tel:+91-8277919191" class="btn btn-s-r btn-a-l btn-b-r">Call: +91-8277919191</a>
                            {{--</button>--}}
                            {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                            <a href="http://bit.ly/shpr-perkg" target="_blank" class="btn btn-s-b btn-a-l btn-b-g">Message us on WhatsApp</a>
                            {{--</button>--}}
                        </div>

                        <p class="f-s-8 f-c-d-greay f-w-7">Your contact information will not be shared with any third party. We respect your privacy very much and you'll only be contacted as per relevance by us.</p>
                    </div>

                    <div class="formFrame  div-form-get-quote" id="diwali-couponcode2">
                        <h1 class="header2 p-color-blue">Get a Quote</h1>
                        <div class="row">
                            <center>
                                <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/request-sent.svg" alt="">
                                <h6 class="header5 p-color-blue">Request Sent!</h6>
                                <h5 class="header5 p-color-cement">Just One More Step To start <br>scheduling your
                                    courier</h5>
                            </center>

                        </div>
                        <div class="text-center">
                            <a href="{{route('customer.register')}}" class="btn btn-b-r btn-a-l btn-s-r">Sign
                            Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="seo-sec">
        <div class="container">
            <div class="col-md-12 col-xs-12 pad-t-20">
                <center>
                    <div class="col-md-4 col-xs-12 pad-20 ">
                        <a href="/medicine-international-courier-from-india">Medicine Courier charges to Singapore</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="/best-international-relocation-packers-movers">Parcle Forwarding from India to Singapore</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/shop-ship">Online Shopping from India to Singapore</a>
                    </div>
                </center>
            </div>

            <div class="col-md-12 col-xs-12 ">
                <center>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="{{route('pricing')}}">International shipping cost calculator</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/international-courier-charges-india-to-uae-per-kg">Courier charges from India to UAE</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="/international-courier-charges-india-to-usa-per-kg">Courier Rates Per Kg to the USA</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <center>
                <br>
                <h1 class="f-s-30 f-c-d-gray font-weight-900"> <span class="f-c-blue">Most Convenient International Courier from India to Singapore</span>,
                    <br>Fast and Reliable Shipping</h1>
            </center>

            <p class="f-s-20 f-c-d-greay">ShoppRe comes up with a way to offer the cheapest courier service from India to Singapore via ShoppRe Courier.
            </p> <br>
            <p class="f-s-20 f-c-d-greay">May it be care packages or shopping forwards, international shipping to Singapore is no more a hassle. You can
                just opt to use our Shop & Ship for the finest forwarding services as well. </a></p>
            <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can I ship household stuff to Singapore from India?</h2>
            <p class="f-s-16 f-c-gray">Of course you can. ShoppRe would be the cheapest and most reliable company for you to consider to help with your moving & shifting needs.
            </p> <br>
            <h2 class="f-s-18 f-c-d-gray f-w-8">For relocating from India to Singapore, which are some good packers and movers to consider?</h2>
            <p class="f-s-16 f-c-gray">ShoppRe is considered <a href="/best-international-relocation-packers-movers">the best packers and movers company</a> & offers domestic, international and commercial moving services which include the complete relocation
                of your residence or office. Attention to detail and extra care to the maximum efficiency would be the highlights of our services.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can I buy a product from India and ship it to Singapore?</h2>
            <p class="f-s-16 f-c-gray">Yes, you can. Our Shop & Ship offers the opportunity for you to <a href="{{route('stores1')}}">shop from indian stores</a> and ship through ShoppRe. All you have to do is, ship your
                packages to the virtual address we provide and we’ll take care of the rest.
                <br>
                <br>
                <p class="f-s-16 f-c-gray">Learn more about our <a href="/shop-from-india-ship-worldwide">Shop & Ship services</a> and our <a href="/personal-shopper-india">Personal Shoppers</a>.</p>
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Can I send medicine via couriers from India to Singapore?</h2>
            <p class="f-s-16 f-c-gray">Yes you can. International medicine couriers come under Special Items and requires special
                treatment in Customs as well. So, you’d need the original prescription to consider shipping it in.  </p> <br>
            <p class="f-s-16 f-c-gray">Check our <a href="{{route('pricing')}}">pricing to learn about our shipping charges from India to Singapore</a> & get a FREE estimate. </p>


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
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('js_script')
    <script>
        $(document).ready(function(){$("#ics_lp").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(e){var a=$("input[name='email']").val(),n=$("input[name='Name']").val(),i=$("input[name='ContactNumber']").val(),o=$("input[name=_token]").val();jQuery.ajax({url:"api-pricing-singapore",type:"POST",data:{_token:o,email:a,name:n,contact_no:i},success:function(e){console.log(e),$("#diwali-couponcode1").hide(),$("#diwali-couponcode2").slideDown()}})}})});
    </script>
@endsection



