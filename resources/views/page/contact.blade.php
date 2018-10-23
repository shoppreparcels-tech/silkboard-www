@extends('layout')

@section('title', 'Contact Support | Customer Care 24*7 | Shipping FAQ - ShoppRe.com')
@section('description', 'Have any questions or concerns? about your purchase or shipping services. Contact our customer care or chat specialists & FAQ resources are available 24*7.')
@section('keywords', 'about your package, shipping services, helpline number, start live chat, shipping faq, team shoppre')

@section('css_style')
    <meta property="og:title" content="Customer Support ShoppRe | International Courier & Consolidation Services"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Have any questions or concerns? about your purchase or shipping services. Contact our customer care or chat specialists & FAQ resources are available 24*7"/>
    <meta property="og:url" content="https://www.shoppre.com/contact"/>
    <meta property="og:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>
    <meta property="og:site_name" content="ShoppRe"/>


    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Go_Shoppre"/>
    <meta name="twitter:title" content="Customer Support ShoppRe | International Courier & Consolidation Services"/>
    <meta name="twitter:description" content="Have any questions or concerns? about your purchase or shipping services. Contact our customer care or chat specialists & FAQ resources are available 24*7"/>
    <meta name="twitter:image" content="https://www.shoppre.com/img/shoppre-international-shipping-partner-india.jpg"/>


    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.shoppre.com/contact",
  "logo": "https://www.shoppre.com/img/images/shoppre-logo.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+91-8040944077",
    "contactType": "customer service"
  }]
}

<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
        "image": "https://www.shoppre.com/img/images/shoppre-logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "No.181, 1st Floor 2nd Cross Rd",
        "addressLocality": "1st Block Koramangala",
        "addressRegion": "Bengaluru, Karnataka",
        "postalCode": "560034",
        "addressCountry": "India"
      },
      "geo": {
    "@type": "GeoCoordinates",
    "latitude": "12.9257998",
    "longitude": "77.635445"
     },
      "description": "International Shipping, Domestic Courier Service and Parcel Forwarding India",
      "name": "ShoppRe.com - Your Global Shipping Partner From INDIA",
      "telephone": "080 4094 4077",
                "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
      ],
      "opens": "00:00",
      "closes": "23:59"
    }
   ]
 }
</script>

@endsection

@section('content')
    <section class="heading-section">
        <div class="container">
            <div class="row padding-bottom">
                <center>
                    <h1 class="header1 p-color-white">Contact Support</h1>
                    <h2 class="header2 p-color-cement">Have a question? Consult our shipping FAQ. We are dedicated to
                        making our members happy, so<br>
                        your online account management tools and these FAQ resources are available 24/7.

                    </h2>
                </center>

            </div>
        </div>

    </section>
    <section class="faq-section">
        <div class="container" ng-controller="IndexController">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" id="custom-search-input">
                    <div class="input-group search-bar">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>

                        <input
                           type="text"
                           class="form-control input-lg  search-bar-input"
                           name="faq"
                           placeholder="Can't find your answer? Search Shoppre"
                           ng-model="Faq.model"
                           uib-typeahead="faq.question for faq in Faqs.get($viewValue)"
                           typeahead-loading="Faqs.loadingFaqs"
                           typeahead-no-results="Faqs.noResults"
                           typeahead-on-select='Faqs.select($item)'
                           typeahead-wait-ms="10"
                           autocomplete="off"
                        />

                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2 col-sm-12 col-xs-12 border-bottom">
                    <ul class="list-unstyled faq-list">
                        <li><a href="{{route('faq')}}">Do you provide a Membership Plan?</a></li>
                        <li><a href="{{route('faq')}}">Is the address provided by ShoppRe, a PO Box address?</a></li>
                        <li><a href="{{route('faq')}}">Why was my Registration Unsuccessful?</a></li>
                        <li><a href="{{route('faq')}}">How do I use my address?</a></li>
                        <li><a href="{{route('faq')}}">Why Choose ShoppRe?</a></li>
                        <li><a href="{{route('faq')}}">What couriers do you use to send my merchandise and documents?</a></li>
                        <li><a href="{{route('faq')}}">How can I get my package(s) shipped?</a></li>
                        <li><a href="{{route('faq')}}">How does repacking save me money?</a></li>
                        <li><a href="{{route('faq')}}">What is consolidation, and how does it help me save?</a></li>
                        <li><a href="{{route('faq')}}">Will ShoppRe forward my packages to me when I am traveling?</a></li>
                        <li><a href="{{route('faq')}}">How does repacking save me money?</a></li>
                        <li><a href="{{route('faq')}}">What is consolidation, and how does it help me save?</a></li>
                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-2 faqlink-div">
                    <a href="{{route('faq')}}" class="faq-link" target="_blank">View All FAQ's</a>
                    <a href="#contact-support" class="faq-link pull-right">Still Need Help?</a>
                </div>
            </div>

        </div>
    </section>

    <section class="contact-details-section">
        <div class="container " id="contact-support">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{asset('img/svg/phone.svg')}}" id="phone">
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

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                        <a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#" class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>

    <section class="location-feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="no-padding address-details">
                        <h4>Locations</h4>
                        <span class="under-line"><img src="{{asset('img/images/line.png')}}"></span>
                        <h5>BANGALORE - INDIA</h5>
                        <p> IndianShoppre LLP,
                            First Floor, <br>No. 181, 2nd Cross Road,
                            7th Main, Koramangala 1st Block, Bengaluru - 560034,
                            Karnataka, India</p>
                    </div>
                    <span class="under-line"><img src="{{asset('img/images/line.png')}}"></span>
                    <div class="no-padding address-details">
                        <h5>DUBAI - U.A.E</h5>
                        <p> Sephora Office, Mezzanine Floor,
                            Flora Creek Hotel Apartments,
                            Near Deira City Centre,
                            Port Saeed - 119062
                            Dubai, UAE</p>
                    </div>
                    <span class="under-line"><img src="{{asset('img/images/line.png')}}"></span>
                    <div class="no-padding address-details">
                        <h5>Connect us on</h5>
                        <ul class="list-inline list-unstyled">
                            <li>
                                <a href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">
                                    <img class="img-connect" src="{{asset('img/svg/shoppre-youtube-video.svg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/goshoppre/">
                                    <img class="img-connect" src="{{asset('img/svg/go-shoppre-faceboook.svg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Go_Shoppre">
                                    <img class="img-connect" src="{{asset('img/svg/shoppre-twitter.svg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/shoppre_official/?hl=en">
                                    <img class="img-connect" src="{{asset('img/svg/shoppre-instagram.svg')}}">
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="col-md-9 feedback-form">
                    <h4>Request Callback</h4>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('contact.submit')}}">
                        {{ csrf_field() }}
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6 no-padding">
                                <label>Full Name <i class="red">*</i></label>
                                <input type="text" class="form-control" placeholder="enter name" name="firstname" required>
                            </div>
                            <div class="col-sm-6 contact-text-padding">
                                <label>Country</label>
                                <select class="form-control m-b " name="country">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6 no-padding">
                                <div class="no-padding"><label>Mobile Number<i class="red">*</i></label></div>
                                <input type="text" class="form-control" placeholder="enter mobile number" name="phone" required>

                            </div>
                            <div class="col-sm-6 contact-text-padding">
                                <label>Email Address<i class="red">*</i></label>
                                <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                            </div>
                        </div>
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6 no-padding">
                                <label>What is Reason / Issue? <i class="red">*</i></label>
                                <select class="form-control m-b"  name="reason" required>
                                    <option value="Select Reason">select reason/issue from the list</option>
                                    <option value="Can't I sign into my account">Can't I sign into my account
                                    <option value="Can you ship Dangerous Goods?">Can you ship Dangerous Goods?
                                    <option value="Can you buy goods for me?">Can you buy goods for me?
                                    <option value="Can I shop from any website I want?"> Can I shop from any website I
                                        want?
                                    <option value="Do you offer a pick up service?"> Do you offer a pick up service?
                                    <option value="How do I apply for a membership?">How do I apply for a membership?
                                    <option value="How do I cancel my account?"> How do I cancel my account?
                                    <option value="How do I cancel my shipment request?">How do I cancel my shipment
                                        request?
                                    <option value="How do I place a Personal Shopper order?">How do I place a Personal
                                        Shopper order?
                                    <option value="How can I purchase items online?">How can I purchase items online?
                                    <option value="How do I partner with Shoppre.com?">How do I partner with
                                        Shoppre.com?
                                    <option value="How do I track my package?"> How do I track my package?
                                    <option value="How Much do you Charge for Shipping?">How Much do you Charge for
                                        Shipping?
                                    <option value="What are my payment options?">What are my payment options?
                                    <option value="What are the Personal Shopper works?">What are the Personal Shopper
                                        works?
                                    <option value="What are the Personal Shopper Fees?"> What are the Personal Shopper
                                        Fees?
                                    <option value="When am I charged for duties and taxes?"> When am I charged for
                                        duties and taxes?
                                    <option value="Why am I not able to create a ship request?"> Why am I not able to
                                        create a ship request?
                                    <option value="What carriers do you ship with?"> What carriers do you ship with?
                                    <option value="What if I entered my address wrong?"> What if I entered my address
                                        wrong?
                                    <option value="Where is my package?">Where is my package?
                                    <option value="What is the consolidation process?">What is the consolidation
                                        process?
                                    <option value="Why was my registration unsuccessful?">Why was my registration
                                        unsuccessful?
                                    <option value="Other Help?"> Other Help?
                                </select>
                            </div>
                            <div class="col-sm-6 contact-text-padding ">
                                <label>Locker No. (optional)</label>
                                <input type="text" class="form-control" placeholder="enter Locker number" name="locker">
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Write your message</label>
                            <textarea class="form-control" rows="6" placeholder="Write your concern" name="msg_content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-contact-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js_script')

@endsection
