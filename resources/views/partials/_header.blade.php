<!-- Start Header section-->
<header class="nav-h-shadow s-header-fixed" role="banner">
    <div class="container-fluid c-f-p">
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
                                <a class="btn btn-s-r btn-a-m btn-b-r" href="{{route('customer.register')}}" style="color: #ffffff !important; font-size: 14px;font-weight: 600;padding: 5px; opacity: 1;margin-left: 15px;">Sign Up</a>

                            </li>
                        @endif
                    </ul>
                </div>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img id="logo-desktop" class="logo" src="{{env('AWS_CLOUD_FRONT')}}/img/images/shoppre-logo.png" alt="ShoppRe">
                    <img  id="logo-mobile" src="{{env('AWS_CLOUD_FRONT')}}/img/logo94.png" alt="ShoppRe">
                </a>
            </div>
            <div class="collapse navbar-collapse js-navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
{{--                    <li class="dropdown mega-dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>--}}
{{--                        <ul class="dropdown-menu mega-dropdown-menu-about mega-menu-padding-left menu-content-service">--}}
{{--                            <li class="col-md-7 col-sm-7" style="padding-left: 0px;padding-right: 0px">--}}
{{--                                <ul>--}}
{{--                                    <li class="dropdown-header mega-menu-header-text">--}}
{{--                                        About ShoppRe--}}
{{--                                        <div class="div-header-devider"></div>--}}
{{--                                    </li>--}}
{{--                                    <p class="header6 p-color-cement " style="text-align: left;">--}}
{{--                                        As an international shipping solution, we bear each customer and their needs close to heart and treat every package as if it were our own.--}}
{{--                                        <br><br>--}}
{{--                                        What we strive for is getting a better deal for our customers in shipping packages--}}
{{--                                        off to ANYWHERE in the world without worrying about even the most trivial--}}
{{--                                        of mishaps and most importantly, an undesirable range of shipping costs.--}}
{{--                                    </p>--}}

{{--                                    <ul style="text-decoration: none; list-style: none;">--}}
{{--                                        <li>--}}
{{--                                            <a class="footer-a"--}}
{{--                                               href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">--}}
{{--                                                <img class="img-connect"--}}
{{--                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-youtube-video.svg"--}}
{{--                                                     alt="shoppre youtube video">--}}
{{--                                            </a>--}}
{{--                                            <a class="footer-a" href="https://www.facebook.com/goshoppre/">--}}
{{--                                                <img class="img-connect"--}}
{{--                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/go-shoppre-faceboook.svg"--}}
{{--                                                     alt="goshoppre facebook">--}}
{{--                                            </a>--}}
{{--                                            <a class="footer-a" href="https://twitter.com/Go_Shoppre">--}}
{{--                                                <img class="img-connect" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-twitter.svg"--}}
{{--                                                     alt="@Go_Shoppre twitter">--}}
{{--                                            </a>--}}
{{--                                            <a class="footer-a"--}}
{{--                                               href="https://www.instagram.com/shoppre_official/?hl=en">--}}
{{--                                                <img class="img-connect"--}}
{{--                                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-instagram.svg"--}}
{{--                                                     alt="shoppre_officia instagram">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}

{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="col-md-5 col-sm-5" style="margin-top: 20px">--}}
{{--                                <ul class="about-menu-links">--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="https://medium.com/@shoppre" target="_blank">What's New</a></li>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="{{route('about')}}">About Our Company</a></li>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="{{route('story.index')}}">Our Story</a></li>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="https://www.linkedin.com/company/shoppre.com/" >Our Team</a>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="https://nikkithashanker.com/?ref=s.com" target="_blank">Nikkitha Shanker</a></li>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="https://ship.shoppre.com/refer-and-earn-with-us/" target="_blank">Refer & Earn</a></li>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="https://www.indeedjobs.com/shopprecom/_hl/en_IN" target="_blank">Careers</a></li>--}}
{{--                                    <li><a class="header6 p-color-cement-dark" href="{{route('award.index')}}">Awards</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="btn-home-page-service-menu">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu mega-menu-padding-left menu-content-service">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header mega-menu-header-text">
                                        Shop & Ship
                                        <div class="div-header-devider"></div>
                                    </li><span class="f-s-10 f-c-blue f-w-9">(shoppreparcels.com)</span>
                                    <div class="">
                                        <p class="header6 p-color-cement">
                                            Shop from any Indian online store; we offer worldwide shipping services along with;</p>
                                    </div>

                                    <div class="div-megamenu-hover-effects">
                                        <a class="mega-menu-hyperlinks" href="{{route('indianVirtual')}}" target="_blank">A FREE Local, Virtual Address</a>

                                        <p class="header6 p-color-cement" style="margin-top: 10px">We’ll receive your package at our facility, store it till all your packages arrive,
                                            and consolidate & ship them off to your destination abroad.</p>
                                    </div>

                                    <div class="div-megamenu-hover-effects">
                                        <a href="/personal-shopper-shopping-concierge-from-india" target="_blank" class="mega-menu-hyperlinks">
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
                                        Courier Service
                                        <div class="div-header-devider"></div>
                                    </li><span class="f-s-10 f-c-blue f-w-9">(shopprecouriers.com)</span>
                                    <div class="mega-menu-international">
                                            {{--<a href="#" style="padding-left: 0px;">--}}
{{--                                            <h6 class="header6 p-color-cement"><strong>Domestic</strong></h6>--}}
                                            {{--</a>--}}

{{--                                        <p class="header6 p-color-cement">--}}
{{--                                            Door-to-door courier service within India made easy, at affordable rates!--}}
{{--                                        </p>--}}
{{--                                        <a class="mega-menu-hyperlinks" href="{{route('schedulePickup.Index')}}">--}}
{{--                                            Schedule a Pickup--}}
{{--                                        </a>--}}
                                    </div>
                                    <div class="mega-menu-international">

                                        {{--<a href="#" style="padding-left: 0px; margin-top: 20px">--}}
                                        <h6 class="header6 p-color-cement"><strong>International</strong></h6>
                                        {{--</a>--}}

                                        <p class="header6 p-color-cement">We’ll come to you, pick up the courier and ship it to anywhere in the world.</p>
                                        <a id="btn-service-schedule-pickup" href="{{route('schedulePickup.Index')}}" class="mega-menu-hyperlinks">Schedule a Pickup
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
                                            <span style="color:#e056ef">Amazon India, Flipkart, Myntra, AJIO</span>
                                            & more, and we’ll get it to your address abroad.</p>
                                        <a href="{{route('stores1')}}" class="mega-menu-hyperlinks" target="_blank">
                                            Browse Stores
                                        </a>
                                        <p class="header6  p-color-cement" style="margin-top: 20px">Are you a store owner from India? Enlist your store with us & let our customers shop from you!
                                        </p>
                                        <a href="{{route('stores1')}}" target="_blank" class="mega-menu-hyperlinks" >Enlist Your Store</a>
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
                                        <a href="/seller-partner" class="mega-menu-hyperlinks" target="_blank">Know More</a>
                                    </div>

                                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/ic_plane.svg" alt="">
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{route('offers-new.index')}}" class="shoppre-offers">Offers </a></li>
                    <li><a href="{{route('pricing')}}">Shipping Rates</a></li>
                    <li><a href="{{route('ajio-product')}}"><span style="color: #f9c030;" id="offer">Holi Special</span>
{{--                            <sup class="p-color-red" style="font-size: 8px" id="offer">Buy</sup>--}}
                        </a>
                    </li>
{{--                    <li><a href="{{route('contact')}}" class="shoppre-support">Support</a></li>--}}
                    <li><a href="https://www.shopprecouriers.com/seller-courier-partner" target="_blank" class="shoppre-partner">Seller Partner</a></li>
                    @if (Request::route()->getName() !== 'home')
                    <li class="search-nav-prev" style="padding-top: inherit; width: 180px;">
                        <form class="calc-form" id="searchBarNavInner">
                            <div class="search">
                            <input type="text" class="border-radius-10" id="searchTextNavInner"  style="width: 100%; padding-left: 10px;" placeholder="Looking for?">
                                <button type="submit" class="searchButton search-icon-header ">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </li>
                    @endif
                    <li>
                        <div class="dropdown ddl-more-option">
                            <button class="dropbtn">More <span class="caret"></span></button>
                            <div class="dropdown-content">
                                <a href="{{route('offers-new.index')}}">Offers</a>
                                <a href="{{route('contact')}}">Support</a>
                                <a href="https://www.shoppre.com/seller-partner">Seller Partner</a>
                            </div>
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
            <div class="col-md-12 col-xs-12 col-lg-12 out-of-nav no-in-ipad" style="display: none">
                <div style="padding-top: inherit;" >
                    <form class="calc-form" id="searchBarNavOuter">
                        <div class="search">
                            <input type="text" class="border-radius-10" id="searchTextNavOuter"  style="width: 100%; padding-left: 10px;" placeholder="What are you looking for ?">
                            <button type="submit" class="searchButton search-icon-header-hidden">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>


@section('js_script')
    @include('../partials/mixpanel')
@endsection
