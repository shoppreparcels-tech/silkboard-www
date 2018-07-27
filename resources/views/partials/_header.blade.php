<header>
    <div class="mo_login">
    @if(!Auth::guard('customer')->check())
    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/login"><i class="fa fa-unlock-alt"></i> Login</a>
    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"><i class="fa fa-user"></i> Signup</a>
    @else
    <a href="javascript:void(0)"><i class="fa fa-user"></i> My Locker</a>
    <a href="{{route('customer.logout')}}"><i class="fa fa-lock"></i> Logout</a>
    @endif
    <div class="clearfix"></div>
    </div>
    <nav class="navbar navbar-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('about')}}">About Shoppre</a></li>
                    <li><a href="https://goo.gl/forms/OZ6NMyGKMrdHvoA32">Become a Partner</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    {{--<li><a href="https://www.quora.com/search?q=shoppre.com" target="_blank">Ask Questions</a></li>--}}
                    {{--<li><a href="https://shoppre-international-shipping-courier.zendesk.com/" target="_blank">Help</a></li>--}}
                    {{--<li><a href="{{route('flash-sale.sales.list')}}" target="_blank">Flash Sale</a></li>--}}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    {{--<li class="padding_li1" href="mailto:support@shoppre.com">support@shoppre.com</li>--}}
                    <li class="padding_li_top"><a href="mailto:support@shoppre.com"><i class="fa fa-envelope icon_margen"></i>support@shoppre.com</a></li>
                    <li class="padding_li_top"><a href="tel:+91-80 4094 4077"><i class="fa fa-mobile icon_margen"></i>+91 804094 4077</a></li>
                    @if(Auth::guard('customer')->check())
                        {{--<li><a href="{{route('customer.locker')}}"><i class="fa fa-user"></i> {{Auth::guard('customer')->user()->name}}</a></li>--}}
                        <li><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/locker"><i
                                        class="fa fa-user"></i> {{Auth::guard('customer')->user()->name}}</a></li>
                        <li><a href="{{route('customer.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                    @else
                        <li><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/login"><i
                                        class="fa fa-unlock-alt"></i> Login</a></li>
                        <li><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"><i class="fa fa-user"></i>
                                Sign up</a></li>
                    @endif
                </ul>
                {{--<form novalidate="novalidate" onsubmit="return false;" class="searchbox">--}}
                    {{--<div role="search" class="searchbox__wrapper">--}}
                        {{--<input id="search-input" type="search" name="search" placeholder="Search for a question"--}}
                               {{--autocomplete="off" required="required" class="searchbox__input">--}}
                        {{--<button type="submit" title="Submit your search query." class="searchbox__submit" >--}}
                            {{--<svg role="img" aria-label="Search">--}}
                                {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-13"></use>--}}
                            {{--</svg>--}}
                        {{--</button>--}}
                        {{--<button type="reset" title="Clear the search query." class="searchbox__reset hide">--}}
                            {{--<svg role="img" aria-label="Reset">--}}
                                {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-3"></use>--}}
                            {{--</svg>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
                {{--@if(!$promos->isEmpty())--}}
                    {{--<div class="promoscroll">--}}
                        {{--<ul id="liticker">--}}
                            {{--@foreach($promos as $promo)--}}
                                {{--<li><a href="{{$promo->url}}" target="_blank">{{$promo->title}} - <span>{{$promo->code}}</span></a></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--@endif--}}
                {{--@if(isset($announcements))--}}
                    {{--<div class="announcescroll">--}}
                        {{--<div class="message_announce">--}}
                            {{--<marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();"--}}
                                     {{--direction="left"><span class="text_deco">{{$announcements->message}}</span>--}}
                            {{--</marquee>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed nav-icon-right" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    {{--@if(Auth::guard('customer')->check())--}}
                        {{--<button  class="nav-icon icon-size">--}}
                            {{--{{Auth::guard('customer')->user()->name}}--}}
                        {{--</button>--}}
                    {{--@else--}}
                        {{--<button class="nav-icon icon-size"><i class="fa fa-user-circle"></i></button>--}}
                    {{--@endif--}}
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="img/original-logo.png" alt="Shoppre - Borderless Shipping From India">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    {{--<li><a href="{{route('flash-sale.mi5A.index')}}" target="_blank">Flash Sale</a></li>--}}
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="hidden-sm hidden-md hidden-lg"><a href="{{route('about')}}">About Shoppre</a></li>
                      <li><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
                                  <strong>SERVICES</strong> <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                  <li><a href="{{route('services')}}">Overview</a></li>
                                  <li><a href="{{route('shopFromIndia')}}">Shop and Ship</a></li>
                                  <li><a href="{{route('schedulePickup.Index')}}">Schedule a Pickup</a></li>
                                  <li><a href="{{route('consolidationService')}}">Repacking & Consolidation</a></li>
                                  <li><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/personal-shopper">Personal Shopper</a></li>
                                  <li><a href="{{route('stores')}}">Indian Online Shops</a></li>
                                  <li><a href="{{route('indianVirtual')}}">Virtual Address</a></li>
                                  <li><a href="{{route('sellerShipping')}}">Sellers Shipping</a></li>
                              </ul></li>
                    <li><a href="{{route('howitworks')}}">How Shoppre Works</a></li>
                    <li><a href="{{route('pricing')}}">Price Calculator</a></li>
                    {{--<li><a href="https://myaccount.shoppre.com/direct/payment">Make Payment</a></li>--}}
                    <li><a href="{{route('contact')}}">Contact us</a></li>
                    {{--<li><a href="{{route('feedback.Index')}}">Feedback</a></li>--}}
                </ul>
            </div> <!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <script src="./js/algolia/algolia.js"></script>
</header>

