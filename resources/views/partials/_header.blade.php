<!-- Start Header section-->

<header class="header" role="banner">
    <nav class="navbar ">
        <div class="container">
            <div class="col-md-3 ">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle collapsed nav-icon-right" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img class="logo" src="{{asset('/img/images/shoppre-logo.png')}}" alt="ShoppRe">
                    </a>
                </div>
            </div>
            <div class="col-md-9 " style="margin-top: -12px;">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="nav-li"><a class="nav-a" href="{{route('about')}}">About us</a></li>
                        <li class="nav-li"><a class="nav-a" href="{{route('services')}}">Services</a></li>
                        <li class="nav-li"><a class="nav-a" href="{{route('pricing')}}">Price Calculator</a></li>
                        <li class="nav-li"><a class="nav-a" href="https://www.shoppre.com/offers/send-durga-puja-gifts-from-india-ship-internationally/" target="_blank">Offers</a></li>
                        <li class="nav-li"><a class="nav-a" href="{{route('contact')}}">Support</a></li>
                        <li class="nav-li">
                        <a class="nav-a login-link" target="_blank" href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/login">
                            Login
                        </a>
                        </li>
                        <li class="nav-li btn-register">
                            <a class="nav-a btn-register-text" target="_blanks" href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">
                                Register
                            </a>
                        </li>
                        {{--<li class="nav-li"><a class="nav-a" href="javascript:void(0)"><span class="glyphicon glyphicon-search gly-search"></span></a> </li>--}}
                        {{--<li class="nav-li">--}}
                            {{--<a class="" href="javascript:void(0)">--}}
                                {{--<img class="img-menu" src="{{asset('new_assets/img/svg_image/menu.svg')}}">--}}
                            {{--</a>--}}
                        {{--</li>--}}

                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-->
    </nav>
</header>
<!-- Start Header section-->
<!-- Main container -->
