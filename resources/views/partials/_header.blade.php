<!-- Start Header section-->

<header class="header" role="banner">
    <nav class="navbar ">
        <div class="container navbar-container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-5">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img class="logo" src="{{asset('/img/images/shoppre-logo.png')}}" alt="ShoppRe">
                        </a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left left-ul" style="margin-left: 20px;">
                            <li ><a class="nav-a" href="{{route('about')}}">About Us</a></li>
                            <li ><a class="nav-a" href="{{route('services')}}">Services</a></li>
                            <li ><a class="nav-a" href="{{route('pricing')}}">Price Calculator</a></li>
                            <li ><a class="nav-a" href="https://www.shoppre.com/offers/send-durga-puja-gifts-from-india-ship-internationally/" target="_blank">Offers</a></li>
                            <li><a class="nav-a" href="{{route('contact')}}">Support</a></li>

                        </ul>
                    </div> <!-- /.navbar-collapse -->
                </div>
                <div class="col-md-3 col-sm-3 col-xs-5 ">
                    <div class="pull-right">
                        <ul class="nav navbar-nav list-inline list-unstyled register-ul">
                            <li>
                                <a class="nav-a" target="_blank" href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/login?src=menu">
                                    Login
                                </a>
                            </li>
                            <li class="btn-register btn-hover">
                                <a class="nav-a" target="_blanks" href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?src=menu">
                                    Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-1 visible-xs no-padding pull-right">
                    <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>





            {{--</div>--}}
        </div><!-- /.container-->
    </nav>
</header>
<!-- Start Header section-->
<!-- Main container -->
