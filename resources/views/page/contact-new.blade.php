@extends('layout')

@section('title', 'Contact | Shoppre - International Shipping Partner')
@section('description', 'Have any questions or concerns? about your package or shipping services please call us at +91-8040944077 or start Live chat, Whatsapp with Team Shoppre.')
@section('keywords', 'questions, concerns, about your package, shipping services, please call us, start live chat, whatsapp, team shoppre')

@section('css_style')

@endsection

@section('content')
    <section class="heading-section">
        <div class="container">
            <div class="row">
                <h1>Contact Customer Service & Support</h1>
                <div class="col-md-8 col-md-offset-2 padding-bottom">

                    <h2>Have a question? Consult our shipping FAQ. We are dedicated to making our members happy, so<br>
                        your online account management tools and these FAQ resources are available 24/7.

                    </h2>
                </div>
            </div>
        </div>

    </section>
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1" id="custom-search-input">
                    <div class="input-group search-bar">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span><input type="text" class="form-control input-lg  search-bar-input" placeholder="Can't find your answer? Search Shoppre">

                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2 border-bottom no-padding-leftright">

                    <ul class="list-unstyled faq-list">
                        <li>Do you provide a Membership Plan?</li>
                        <li>Is the address provided by Shoppre, a PO Box address?</li>
                        <li>Why was my Registration Unsuccessful?</li>
                        <li>How do I use my address?</li>
                        <li>Why Choose Shoppre?</li>
                        <li>What couriers do you use to send my merchandise and documents?</li>
                        <li>How can I get my package(s) shipped?</li>
                        <li>How does repacking save me money?</li>
                        <li>What is consolidation, and how does it help me save?</li>
                        <li>Will Shoppre forward my packages to me when I am traveling?</li>
                        <li>How does repacking save me money?</li>
                        <li>What is consolidation, and how does it help me save?</li>
                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-2 faqlink-div">
                    <a href="#" class="faq-link">View All FAQ's</a>
                    <a href="#" class="blue-link pull-right">View All FAQ's</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 phone-detail">
                    <img src="{{asset('img/images/phone.png')}}" >
                </div>
                <div class="col-md-3 contact-details">
                    <p class=""><i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <h4>+91 80 4094 4077</h4>
                </div>
                <div class="col-md-3 contact-details">
                    <p class=""><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <h4>support@shoppre.com</h4>
                </div>
                <div class="col-md-3 contact-details text-right">
                    <p class=""><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <h4>Chat Now</h4>
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
                                <a  href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">
                                    <img src="{{asset('shoppre-youtube-video.svg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/goshoppre/">
                                    <img class="img-connect" src="{{asset('go-shoppre-faceboook.svg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Go_Shoppre">
                                    <img class="img-connect" src="{{asset('shoppre-twitter.svg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/shoppre_official/?hl=en">
                                    <img class="img-connect" src="{{asset('shoppre-instagram.svg')}}">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-9 feedback-form">
                    <h4>Request Callback</h4>
                    <form>
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6 no-padding">
                                <label>Contact Person Full Name <i class="red">*</i></label>
                                <input type="text" class="form-control" placeholder="enter name">
                            </div>
                        </div>
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6 no-padding">
                                <div class="no-padding">  <label>Mobile Number<i class="red">*</i></label></div>
                                <div class="no-padding col-md-2">
                                    <input type="text" class="form-control" placeholder="+91">
                                </div>
                                <div class="no-padding col-md-10">
                                    <input type="text" class="form-control" placeholder="enter mobile number">
                                </div>

                            </div>
                            <div class="col-sm-6 ">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6 no-padding">
                                <label>What is Reason / Issue? <i class="red">*</i></label>
                                <select name="account" class="form-control m-b">
                                    <option value="option 1">select reason/issue from the list</option>
                                </select>
                            </div>
                            <div class="col-sm-6 ">
                                <label>Locker No. (optional)<i class="red">*</i></label>
                                <input type="text" class="form-control" placeholder="enter mobile number">
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Write your message</label>
                            <textarea class="form-control" rows="6" placeholder="Write your concern"></textarea>
                        </div>
                        <button class="btn signup-btn" href="#">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js_script')

@endsection
