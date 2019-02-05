<!-- Start Header section-->

<header class="header" role="banner">
    <div class="container" style="background-color: #11273b;">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header-login">
                    <ul class="navbar-right">
                        @if (Auth::check())
                            <li>
                                <a href="{{route('customer.locker')}}" id="btn_login">
                                    <i class="fa fa-user" style="padding-right: 8px;font-size: 20px;"></i>{{Auth::user()->name}}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('customer.login')}}"  id="li-login">Login</a>
                                <a class="btn btn-s-r btn-a-m btn-b-r" href="{{route('customer.register')}}" style="color: #ffffff !important; font-size: 14px;font-weight: 600;padding-top: 5px; opacity: 1;">Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <a class="navbar-brand" href="{{route('home')}}">
{{--                    <img class="logo" src="{{env('AWS_CLOUD_FRONT')}}/img/images/shoppre-logo.png" alt="ShoppRe">--}}
                    <img class="logo" src="{{asset('/img/images/logo@2x.png')}}" alt="ShoppRe">
                </a>
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu-about mega-menu-padding-left">
                            <li class="col-md-7 col-sm-7" style="padding-left: 0px;padding-right: 0px">
                                <ul>
                                    <li class="dropdown-header mega-menu-header-text">
                                        About ShoppRe
                                        <div class="div-header-devider"></div>
                                    </li>
                                    <p class="header6 p-color-cement " style="text-align: left;">
                                        As an international shipping solution, we bear each customer and their needs close to heart and treat every package as if it were our own.
                                        <br><br>
                                        What we strive for is getting a better deal for our customers in shipping packages
                                        off to ANYWHERE in the world without worrying about even the most trivial
                                        of mishaps and most importantly, an undesirable range of shipping costs.
                                    </p>

                                    <ul style="text-decoration: none; list-style: none;">
                                        <li>
                                            <a class="footer-a"
                                               href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">
                                                <img class="img-connect"
                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-youtube-video.svg"
                                                     alt="shoppre youtube video">
                                            </a>
                                            <a class="footer-a" href="https://www.facebook.com/goshoppre/">
                                                <img class="img-connect"
                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/go-shoppre-faceboook.svg"
                                                     alt="goshoppre facebook">
                                            </a>
                                            <a class="footer-a" href="https://twitter.com/Go_Shoppre">
                                                <img class="img-connect" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-twitter.svg"
                                                     alt="@Go_Shoppre twitter">
                                            </a>
                                            <a class="footer-a"
                                               href="https://www.instagram.com/shoppre_official/?hl=en">
                                                <img class="img-connect"
                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-instagram.svg"
                                                     alt="shoppre_officia instagram">
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </li>
                            <li class="col-md-5 col-sm-5" style="margin-top: 20px">
                                <ul class="about-menu-links">
                                    <li><a class="header6 p-color-cement-dark" href="https://medium.com/@shoppre" target="_blank">What's New</a></li>
                                    <li><a class="header6 p-color-cement-dark" href="{{route('about')}}">About Our Company</a></li>
                                    <li><a class="header6 p-color-cement-dark" href="{{route('story.index')}}">Our Story</a></li>
                                    <li><a class="header6 p-color-cement-dark" href="https://www.linkedin.com/company/shoppre.com/" >Our Team</a></li>
                                    <li><a class="header6 p-color-cement-dark" href="https://www.indeedjobs.com/shopprecom/_hl/en_IN" >Careers</a></li>
                                    <li><a class="header6 p-color-cement-dark" href="{{route('award.index')}}">Awards</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu mega-menu-padding-left">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header mega-menu-header-text">
                                        SHOP & SHIP
                                        <div class="div-header-devider"></div>
                                    </li>
                                    <div class="">
                                        <p class="header6 p-color-cement">
                                            Shop from any Indian online store; we offer worldwide shipping services along with;</p>
                                    </div>

                                    <div class="div-megamenu-hover-effects">
                                        <a class="mega-menu-hyperlinks" href="{{route('indianVirtual')}}">A FREE Local, Virtual Address</a>

                                        <p class="header6 p-color-cement" style="margin-top: 10px">We’ll receive your package at our facility, store it till all your packages arrive,
                                            and consolidate & ship them off to your destination abroad.</p>
                                    </div>

                                    <div class="div-megamenu-hover-effects">
                                        <a href="/personal-shopper-india" class="mega-menu-hyperlinks">
                                            Personal Shopper
                                        </a>

                                        <p class="header6 p-color-cement" style="margin-top: 10px" >
                                            <span class="p-color-cement-dark">Having trouble at Checkout? No worries!</span> <br>
                                            <br>
                                            1. Pick a store & shop <br>
                                            2. Provide the details of your purchases to our Personal Shopper;<br>
                                            3. We’ll do the shopping for you! <br> <br>
                                            <span class="p-color-cement-dark">Simple enough, eh?!</span>
                                        </p>

                                    </div>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header mega-menu-header-text">
                                        Courier
                                        <div class="div-header-devider"></div>
                                    </li>
                                    <div class="mega-menu-international">
                                            {{--<a href="#" style="padding-left: 0px;">--}}
                                            <h6 class="header6 p-color-cement"><strong>Domestic</strong></h6>
                                            {{--</a>--}}

                                        <p class="header6 p-color-cement">
                                            Door-to-door courier service within India made easy, at affordable rates!
                                        </p>
                                        <a class="mega-menu-hyperlinks" href="{{route('schedulePickup.Index')}}">
                                            Schedule a Pickup
                                        </a>
                                    </div>
                                    <div class="mega-menu-international">

                                        {{--<a href="#" style="padding-left: 0px; margin-top: 20px">--}}
                                        <h6 class="header6 p-color-cement"><strong>International</strong></h6>
                                        {{--</a>--}}

                                        <p class="header6 p-color-cement">We’ll come to you, pick up the courier and ship it to anywhere in the world.</p>
                                        <a href="{{route('schedulePickup.Index')}}" class="mega-menu-hyperlinks">Schedule a Pickup
                                        </a>
                                    </div>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header mega-menu-header-text">
                                        Indian Stores
                                        <div class="div-header-devider"></div>
                                    </li>
                                    <div class="">
                                        <p class="header6 p-color-cement">Have you always been a fan of Indian products & brands? Shop from
                                            <span style="color:#e056ef">Amazon India, Flipkart, Myntra, Jabong</span>
                                            & more, and we’ll get it to your address abroad.</p>
                                        <a href="{{route('stores1')}}" class="mega-menu-hyperlinks" >
                                            Browse Stores
                                        </a>
                                        <p class="header6  p-color-cement" style="margin-top: 20px">Are you a store owner from India? Enlist your store with us & let our customers shop from you!
                                        </p>
                                        <a href="{{route('stores1')}}" class="mega-menu-hyperlinks" >Enlist Your Store</a>
                                    </div>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header mega-menu-header-text">
                                        Partner With Us
                                        <div class="div-header-devider"></div>
                                    </li>
                                    <div class="">
                                        <p class="header6 p-color-cement">Seller from outside India looking for Indian goods?  Join our Partnership Program & get a better deal in shipping!</p>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdL11DQD_pOS2tBNXWaI0d8ryZ4DD0foA-Z7ZR0f0hUG3qpSg/viewform" class="mega-menu-hyperlinks" target="_blank">Register Now</a>
                                    </div>

                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/ic_plane.svg" alt="">
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{route('offers-new.index')}}">Offers <sup class="p-color-red" style="font-size: 8px" id="offer">New</sup> </a></li>
                    <li><a href="{{route('pricing')}}">Shipping Rates</a></li>
                    <li><a href="{{route('contact')}}">Support</a></li>
                    <li>
                        <div class="container-search">
                            <form class="searchbox" action="https://ship.shoppre.com">
                                <input type="search" placeholder="Search......" name="s"  class="searchbox-input" onkeyup="buttonUp();" required>
                                <input type="submit" class="searchbox-submit">
                                <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </form>
                        </div>
                    </li>
                </ul>
                <div id="ajax_login_block" style="display: none">
                <ul class="nav navbar-nav navbar-right " id="header-ul" >
                    <li>
                        <a href="{{route('customer.locker')}}" id="btn_login">
                            <i class="fa fa-user" style="padding-right: 8px;font-size: 20px;"></i><span id="ajax_customer_username"></span>
                        </a>
                    </li>
                </ul>
                </div>
                <div id="normal_login_block">
                <ul class="nav navbar-nav navbar-right " id="header-ul">
                    @if (Auth::check())
                        <li>
                            <a href="{{route('customer.locker')}}" id="btn_login">
                                <i class="fa fa-user" style="padding-right: 8px;font-size: 20px;"></i>{{Auth::user()->name}}
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{route('customer.login')}}" id="btn_login">Login</a>
                        </li>
                        <li class="new-menu-register">
                            <a href="{{route('customer.register')}}" id="btn_register" style="color: #ffffff !important; font-size: 14px;font-weight: 600;padding-top: 5px; opacity: 1;">Sign Up FREE</a>
                        </li>
                    @endif
                </ul>
                </div>
            </div><!-- /.nav-collapse -->
        </nav>
    </div>
</header>
