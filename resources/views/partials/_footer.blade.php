<footer  style="background-color: #11273b; margin-top: 20px;">
    <div class="container">
        <div class="row footer-container">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <ul class="nav-ul">
                    <li><a class="footer-a"  href="{{route('about')}}">About Us</a></li>
                    {{--This is is required--}}
                    {{--<li><a class="footer-a"  href="#">What's New</a></li>--}}
                    <li><a class="footer-a"  href="{{route('story.index')}}">Our Story</a></li>
                    <li><a class="footer-a"  href="{{route('reviews')}}">Customer Reviews</a></li>
                    <li><a class="footer-a"  href="{{route('contact')}}">Contact Us</a></li>
                    <li><a class="footer-a"  href="https://www.indeedjobs.com/shopprecom/_hl/en_IN" target="_blank">Carrier</a></li>
                    <li><a class="footer-a"  href="http://blog.shoppre.com/" target="_blank">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <ul class="nav-ul">
                    <li><a class="footer-a"  href="{{route('services')}}">Services</a></li>
                    <li><a class="footer-a"  href="{{route('cguide.index')}}">Country Guide</a></li>
                    <li><a class="footer-a"  href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32" target="_blank">Become Partner</a></li>
                    <li><a class="footer-a"  href="{{route('faq')}}">FAQ</a></li>
                    <li><a class="footer-a"  href="{{route('termsAndConditions')}}">Terms & Conditions</a></li>
                    <li><a class="footer-a"  href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
                    <li><a class="footer-a"  href="{{route('refundAndCancellation')}}">Refund & Cancellation Policy</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <ul class="nav-ul">
                    <li>
                        <a class="footer-a"  href="tel:+91-80 4094 4077">
                            <i class="glyphicon glyphicon-earphone"></i> CALL US
                            <br>
                            <span class="span-color">+918040944077</span>
                        </a>
                    </li>
                    <li>
                        <a class="footer-a" href="mailto:support@shoppre.com">
                            <i class="glyphicon glyphicon-envelope"></i>
                            SUPPORT EMAIL
                            <span class="span-color">support@shoppre.com</span>
                        </a>
                    </li>
                    <li>
                        {{--<a class="footer-a"  href="#">CONNECT ON</a><br>--}}
                        <p class="footer-a" style=" margin-bottom: -15px;">CONNECT ON</p><br>
                        <a class="footer-a"  href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">
                            <img class="img-connect" src="{{asset('new_assets/img/svg_image/ic_social_google.svg')}}">
                        </a>
                        <a class="footer-a"  href="https://www.facebook.com/goshoppre/">
                            <img class="img-connect" src="{{asset('new_assets/img/svg_image/ic_social_faceboook.svg')}}">
                        </a>
                        <a class="footer-a"  href="https://twitter.com/Go_Shoppre">
                            <img class="img-connect" src="{{asset('new_assets/img/svg_image/ic_social_twitter.svg')}}">
                        </a>
                        <a class="footer-a"  href="https://www.instagram.com/shoppre_official/?hl=en">
                            <img class="img-connect" src="{{asset('new_assets/img/svg_image/ic_social_instagram.svg')}}">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="div-btn">
                    <a class="p-btn-name" href="{{route('pricing')}}">
                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="margin-top: 14px;">
                        <img class="img-footer" src="{{asset('new_assets/img/svg_image/ic_footer_calculator.svg')}}">
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="margin-top: 14px;" >
                        <span class="span-color">Price Calculator</span>
                        <p class="p-best-price">Guaranteed best price</p>
                    </div>
                    </a>
                </div>

                <div class="div-btn">
                    <a class="p-btn-name" href="{{route('schedulePickup.Index')}}">
                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="margin-top: 14px;">
                        <img class="img-footer" src="{{asset('new_assets/img/svg_image/ic_footer_courier.svg')}}">
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="margin-top: 14px;" >
                        <span class="span-color">Courier Abroad</span>
                        <p class="p-best-price">Schedule a Pickup</p>
                    </div>
                    </a>
                </div>

                <div class="div-btn">
                    <a href="{{route('shopFromIndia')}}">
                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="margin-top: 14px;">
                        <img class="img-footer" src="{{asset('new_assets/img/svg_image/ic_footer_shop_ship.svg')}}">
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="margin-top: 14px;" >
                        <span class="span-color">Shop & Ship</span>
                        <p class="p-best-price">Explore Stores now </p>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container row-divider"></div>

        <div class="row">
            <center>
                <a href="{{route('home')}}"><img class="img-footer-logo" alt="Company" src="{{asset('/img/images/shoppre-logo.png')}}"></a>
                <p class="footer-rights p-footer">© 2018, All Rights Reserved - by <span class="footer-a">ShoppRe.com™</span> </p>
            </center>
        </div>

    </div>
</footer>
