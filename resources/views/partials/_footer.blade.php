<footer  style="background-color: #11273b;">
    <div class="container">
        <div class="row footer-container">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <ul class="nav-ul">
                    <li><a class="footer-a"  href="{{route('about')}}">About Us</a></li>
                    <li><a class="footer-a"  href="#">What's New</a></li>
                    <li><a class="footer-a"  href="{{route('story.index')}}">Our Story</a></li>
                    <li><a class="footer-a"  href="#">Customer Reviews</a></li>
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
                        <a class="footer-a"  href="#">
                            <i class="glyphicon glyphicon-earphone"></i> CALL US
                        </a>
                    </li>
                    <li>
                        <a class="footer-a"  href="tel:+91-80 4094 4077">+918040944077</a>
                    </li>
                    <li>
                        <a class="footer-a"  href="#">
                            <i class="glyphicon glyphicon-envelope"></i>
                            SUPPORT EMAIL
                        </a>
                    </li>
                    <li>
                        <a class="footer-a"  href="mailto:support@shoppre.com">support@shoppre.com</a>
                    </li>
                    <li>
                        <a class="footer-a"  href="#">CONNECT ON</a><br>
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
                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="margin-top: 14px;">
                        <img class="img-footer" src="{{asset('new_assets/img/svg_image/ic_footer_calculator.svg')}}">
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="margin-top: 14px;" >
                        <a class="p-btn-name" href="https://www.shoppre.com/pricing">Price Calculator</a>
                        <p class="p-best-price">Guaranteed best price</p>
                    </div>
                </div>

                <div class="div-btn1">
                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="margin-top: 14px;">
                        <img class="img-footer" src="{{asset('new_assets/img/svg_image/ic_footer_courier.svg')}}">
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="margin-top: 14px;" >
                        <a class="p-btn-name" href="{{route('schedulePickup.Index')}}">Courier Abroad</a>
                        <p class="p-best-price1">Schedule a Pickup</p>
                    </div>
                </div>

                <div class="div-btn1">
                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2" style="margin-top: 14px;">
                        <img class="img-footer" src="{{asset('new_assets/img/svg_image/ic_footer_shop_ship.svg')}}">
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10" style="margin-top: 14px;" >
                        <a class="p-btn-name"  href="{{route('shopFromIndia')}}">Shop & Ship</a>
                        <p class="p-best-price1">Explore Stores now </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container row-divider"></div>

        <div class="row">
            <center>
                <a href="{{route('home')}}"><img class="img-footer-logo" alt="Company" src="{{asset('new_assets/img/svg_image/logo.svg')}}"></a>
                <p class="footer-a p-footer">© 2018, All Rights Reserved - by ShoppRe.com™ </p>
            </center>
        </div>

    </div>
</footer>
