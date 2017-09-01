<header>
  <nav class="navbar navbar-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{route('about')}}">About Shoppre</a></li>
          <li><a href="{{route('faq')}}">FAQ</a></li>
          <li><a href="{{route('contact')}}">Contact us</a></li>
          <li><a href="http://blog.shoppre.com/" target="_blank">Blogs</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guard('customer')->check())
          <li><a href="{{route('customer.locker')}}"><i class="fa fa-user"></i> My Locker</a></li>
          <li><a href="{{route('customer.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
          @else
            <li><a href="{{route('customer.login')}}"><i class="fa fa-unlock-alt"></i> Login</a></li>
            <li><a href="{{route('customer.register')}}"><i class="fa fa-user"></i> Sign up</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
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
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('howitworks')}}">How Shoppre Works</a></li>
          <li><a href="{{route('stores')}}">Brands You Love</a></li>
          <li><a href="{{route('pricing')}}">Pricing</a></li>
          @if(!Auth::guard('customer')->check())
          <li class="hidden-sm hidden-md hidden-lg"><a href="{{route('customer.login')}}">Login</a></li>
          <li class="hidden-sm hidden-md hidden-lg"><a href="{{route('customer.register')}}">Sign up</a></li>
          @else
          <li class="hidden-sm hidden-md hidden-lg"><a href="{{route('customer.locker')}}">My Locker</a></li>
          <li class="hidden-sm hidden-md hidden-lg"><a href="{{route('customer.logout')}}">Logout</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
