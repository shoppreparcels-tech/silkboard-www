<header>
  <div class="mo_login">
    @if(!Auth::guard('customer')->check())
    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/login"><i class="fa fa-unlock-alt"></i> Login</a>
    <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"><i class="fa fa-user"></i> Signup</a>
    @else
    {{--<a href="{{route('customer.locker')}}"><i class="fa fa-user"></i> My Locker</a>--}}
    <a href="{{route('customer.logout')}}"><i class="fa fa-lock"></i> Logout</a>
    @endif
    <div class="clearfix"></div>
  </div>
  <nav class="navbar navbar-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{route('about')}}">About Shoppre</a></li>
          <li><a href="{{route('partner')}}">Become a Partner</a></li>
          <li><a href="{{route('faq')}}">FAQ</a></li>
          <li><a href="http://blog.shoppre.com/" target="_blank">Blogs</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="padding_li1" href="mailto:support@shoppre.com"><i class="fa fa-envelope icon_margen"></i>support@shoppre.com</li>
          <li class="padding_li2" href="tel:+91-80 4094 4077"><i class="fa fa-mobile icon_margen"></i>+91 80 4094 4077</li>
          @if(Auth::guard('customer')->check())
            {{--<li><a href="{{route('customer.locker')}}"><i class="fa fa-user"></i> {{Auth::guard('customer')->user()->name}}</a></li>--}}
            <li><a href="javascript:void(0)"><i class="fa fa-user"></i> {{Auth::guard('customer')->user()->name}}</a></li>
            <li><a href="{{route('customer.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
          @else
            <li><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/login"><i class="fa fa-unlock-alt"></i> Login</a></li>
            <li><a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register"><i class="fa fa-user"></i> Sign up</a></li>
          @endif
        </ul>
        @if(!$promos->isEmpty())
        <div class="promoscroll">
          <ul id="liticker">
            @foreach($promos as $promo)
            <li>{{$promo->title}} - <span>{{$promo->code}}</span></li>
            @endforeach
          </ul>
        </div>
        @endif
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">
          <img src="{{asset('img/logo.png')}}">
        </a>
      </div>
      
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('home')}}">Home</a></li>
          <li class="hidden-sm hidden-md hidden-lg"><a href="{{route('about')}}">About Shoppre</a></li>
          <li><a href="{{route('services')}}">Our Services</a></li>
          <li><a href="{{route('howitworks')}}">How Shoppre Works</a></li>
          <li><a href="{{route('consolidationService')}}">Consolidation Service</a></li>
          {{--<li><a href="{{route('stores')}}">Browse Categories</a></li>--}}
          <li><a href="{{route('pricing')}}">Price Calculator</a></li>         
          <li><a href="{{route('contact')}}">Contact us</a></li>
          {{--<li><a href="{{route('feedback.Index')}}">Feedback</a></li>--}}
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
