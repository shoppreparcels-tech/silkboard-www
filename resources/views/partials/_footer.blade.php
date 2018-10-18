<footer style="background-color: #11273b;">
    <section class="mail-section">
        <div class="container ">
            <div class="no-padding col-md-1 col-sm-1 col-xs-4 img-flag-desktop">
                <img src="{{asset('img/svg/mail-box.svg')}}" alt="">
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12 no-padding">
                <center>
                    <img class="img-mobile-flag" src="{{asset('img/svg/mail-box.svg')}}" alt="">
                    <h3 class="header3 p-color-white">Join our Mailing List</h3>
                    <h6 class="header6 p-color-cement">First Worldwide Indian Shop & Ship Community</h6>
                </center>
            </div>
            <div class="col-md-7 col-lg-7  div-footer-mail-subscripton">
                <form class="" id="subscribe" role="form" method="POST">
                    {{csrf_field()}}
                    <input class="txt-subscription form-group" placeholder="   enter your email" name="email"  type="email" required>
                    <button type="submit" class="btn btn-email-subscription pull-right " id="btn-desktop-mail">
                        Subscribe <img class="img-arrow pull-right" src="{{asset('img/svg/arrow.svg')}}" alt="">
                    </button>
                    <button type="submit" class="btn btn-email-subscription pull-right" id="btn-mobile-mail">
                        <img class="img-arrow pull-right" src="{{asset('img/svg/arrow.svg')}}" alt="">
                    </button>
                </form>
            </div>
        </div>
    </section>
    <div class="container no-padding">
        <div class="footer-container">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 ">
                <ul class="nav-ul">
                    <li class="li"><a class="footer-a" href="{{route('about')}}">About Us</a></li>
                    <li class="li"><a class="footer-a" href="{{route('services')}}">Services</a></li>
                    <li class="li"><a class="footer-a" href="https://blog.shoppre.com/" target="_blank">Blog</a></li>
                    <li class="li"><a class="footer-a" href="{{route('story.index')}}">Our Story</a></li>
                    <li class="li"><a class="footer-a" href="{{route('contact')}}">Contact Us</a></li>
                    <li class="li"><a class="footer-a" href="https://medium.com/@shoppre">What's New</a></li>
                    <li class="li"><a class="footer-a" href="https://www.indeedjobs.com/shopprecom/_hl/en_IN"
                                      target="_blank">Careers</a></li>
                    <li class="li"><a class="footer-a" href="{{route('reviews')}}">Customer Reviews</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 ">
                <ul class="nav-ul">

                    <li class="li"><a class="footer-a" href="{{route('cguide.index')}}">Country Guide</a></li>
                    <li class="li"><a class="footer-a" href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32" target="_blank">Become
                           a Partner</a></li>
                    <li class="li"><a class="footer-a" href="{{route('faq')}}">FAQ</a></li>
                    <li class="li"><a class="footer-a" href="{{route('termsAndConditions')}}">Terms & Conditions</a>
                    </li>
                    <li class="li"><a class="footer-a" href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
                    <li class="li"><a class="footer-a" href="{{route('refundAndCancellation')}}">Refund & Cancellation
                            Policy</a></li>
                    <li class="li"><a class="footer-a" href="https://in.hotjar.com/s?siteId=623115&surveyId=65096">Earn
                            1000 Loyalty Points</a></li>
                    <li class="li"><a class="footer-a"
                                      href="https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch">Install
                            Chrome Extension</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 div-footer-margin">
                <ul class="nav-ul">
                    <li>
                        <i class="footer-social-media-font1 glyphicon glyphicon-earphone">&nbsp;CALL US</i> <br>
                        <a class="footer-a footer-social-media" href="tel:+91-80 4094 4077">
                            <span class="span-color footer-social-media footer-social-media-font">+918040944077</span>
                        </a>
                    </li>
                    <li>
                        <i class="footer-social-media-font1 glyphicon glyphicon-envelope">&nbsp;SUPPORT</i>
                        <br>
                        <a class="footer-a" href="mailto:support@shoppre.com footer-social-media">
                            <span
                                class="span-color footer-social-media footer-social-media-font">support@shoppre.com</span>
                        </a>
                    </li>
                    <li>
                        <p class="footer-social-media-font1 footer-social-media">CONNECT ON</p><br>
                        <a class="footer-a" href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">
                            <img class="img-connect" src="{{asset('img/svg/shoppre-youtube-video.svg')}}"
                                 alt="shoppre youtube video">
                        </a>
                        <a class="footer-a" href="https://www.facebook.com/goshoppre/">
                            <img class="img-connect" src="{{asset('img/svg/go-shoppre-faceboook.svg')}}"
                                 alt="goshoppre facebook">
                        </a>
                        <a class="footer-a" href="https://twitter.com/Go_Shoppre">
                            <img class="img-connect" src="{{asset('img/svg/shoppre-twitter.svg')}}"
                                 alt="@Go_Shoppre twitter">
                        </a>
                        <a class="footer-a" href="https://www.instagram.com/shoppre_official/?hl=en">
                            <img class="img-connect" src="{{asset('img/svg/shoppre-instagram.svg')}}"
                                 alt="shoppre_officia instagram">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12  div-footer-margin">
                <div class="div-btn">
                    <a class="p-btn-name" href="{{route('pricing')}}">
                        <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
                            <img class="img-footer1" src="{{asset('img/svg/shipping-price-calculator.svg')}}"
                                 alt="international shipping pricing calculator">
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 div-footer-btn">
                            <span class="span-color">Price Calculator</span>
                            <p class="p-best-price" id="p-best-price">Guaranteed Best Price</p>
                        </div>
                    </a>
                </div>

                <div class="div-btn">
                    <a class="p-btn-name" href="{{route('schedulePickup.Index')}}">
                        <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
                            <img class="img-footer2" src="{{asset('img/svg/sending-courier-abroad.svg')}}"
                                 alt="send courier abroad from india">
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 div-footer-btn">
                            <span class="span-color">Courier Abroad</span>
                            <p class="p-best-price" id="p-best-price">Schedule a Pickup</p>
                        </div>
                    </a>
                </div>

                <div class="div-btn" id="div-btn">
                    <a href="{{route('ifs.index')}}">
                        <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 div-footer-btn">
                            <img class="img-footer" src="{{asset('img/svg/shop-and-ship-india.svg')}}"
                                 alt="shop and ship india">
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 div-footer-btn">
                            <span class="span-color">Shop & Ship</span>
                            <p class="p-best-price" id="p-best-price">Go Visit the Stores Now </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="container row-divider"></div>--}}
    <section style="background-color: #102436;margin-top:80px;">
        <div class="container" style="padding-bottom: 20px;">
            <center>
                <a href="{{route('home')}}"><img class="img-footer-logo" src="{{asset('/img/images/shoppre-logo.png')}}"
                                                 alt="shoppre.com - your global shipping partner from india"></a>
                <p class="footer-rights">© 2018, All Rights Reserved - by <a class="footer-a" href="#">ShoppRe.com™</a>
                </p>
            </center>

        </div>
    </section>


</footer>

