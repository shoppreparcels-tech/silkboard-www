<header>
  <div class="mo_login">
    @if(!Auth::guard('customer')->check())
    <a href="{{route('customer.login')}}"><i class="fa fa-unlock-alt"></i> Login</a>
    <a href="{{route('customer.register')}}"><i class="fa fa-user"></i> Signup</a>
    @else
    <a href="{{route('customer.locker')}}"><i class="fa fa-user"></i> My Locker</a>
    <a href="{{route('customer.logout')}}"><i class="fa fa-lock"></i> Logout</a>
    @endif
    <div class="clearfix">
    </div>
  </div>
  <nav class="navbar navbar-top">
    <div class="container{{Auth::guard('customer')->check() ? '-fluid': ""}}">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
          <div class="{{Auth::guard('customer')->check() ? "" : 'col-md-offset-1'}}" id="myaccount_logo">
            {{--<a class="navbar-brand" href="{{route('home')}}" style="height: 40px;padding-right:40px">--}}
              <a href="{{route('home')}}"><img src="{{asset('img/logo94.png')}}" style="height: 25px"></a>
            {{--</a>--}}
          </div>
          @if(Auth::guard('customer')->check())
            @if(Auth::guard('customer')->user()->email_verify == 'yes')

                  <li class="active"><a href="{{route('home')}}">Home</a></li>
                  @if(url()->current() == route('customer.locker'))
                    <li class="active"><a href="{{route('customer.locker')}}">My Locker</a></li>
                  @else
                    <li><a href="{{route('customer.locker')}}">My Locker</a></li>
                  @endif

                  @if(url()->current() == route('personal.shopper'))
                    <li class="active"><a href="{{route('personal.shopper')}}">Personal Shopper</a></li>
                  @else
                    <li><a href="{{route('personal.shopper')}}">Personal Shopper</a></li>
                  @endif
                  <li><a href="/schedule-pickup?uid={{Auth::user()->id}}">
                      Schedule Pickup</a>
                  </li>

                  @if(url()->current() == route('shipping.history'))
                    <li class="active"><a href="{{route('shipping.history')}}">Shipment History</a></li>
                  @else
                    <li><a href="{{route('shipping.history')}}">Shipment History</a></li>
                  @endif

                  @if(url()->current() == route('customer.stores.fav'))
                    <li class="active"><a href="{{route('customer.stores.fav')}}">My Favorite Stores</a></li>
                  @else
                    <li><a href="{{route('customer.stores.fav')}}">My Favorite Stores</a></li>
                  @endif

                  @if(url()->current() == route('customer.loyalty.points'))
                    <li class="active"><a href="{{route('customer.loyalty.points')}}">My Loyalty Points</a></li>
                  @else
                    <li><a href="{{route('customer.loyalty.points')}}">My Loyalty Points</a></li>
                  @endif

                  @if(url()->current() == route('customer.reffer.view'))
                    <li class="active"><a href="{{route('customer.reffer.view')}}">Refer a Friend</a></li>
                  @else
                    <li><a href="{{route('customer.reffer.view')}}">Refer a Friend</a></li>
                  @endif

                  {{--<li><a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/shipment-alerts">Shipment Alerts</a></li>--}}
            @endif
          @endif
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guard('customer')->check())

            @if(url()->current() == route('customer.settings'))
              <li class="active"><a href="{{route('customer.settings')}}">Account Settings </a></li>
            @else
              <li><a href="{{route('customer.settings')}}"><i class="fa fa-user"></i> Account Settings</a></li>
            @endif
            <li>
              <select name="" id="regions" class="form-control top-align">
                <option value="">Bangalore</option>
                <option value="">Delhi</option>
                <option value="">Mumbai</option>
                <option value="">Pune</option>
                <option value="">Hyderabad</option>
              </select>
            </li>
                {{--<li><a href="https://play.google.com/store/apps/details?id=com.shoppre.play" target="_blank"><i class="fa fa-android"></i> Download App</a></li>--}}
                <li><a href="{{route('customer.logout')}}"><i class="fa fa-sign-out"></i></a></li>
          @else
            <li><a href="{{route('customer.login')}}"><i class="fa fa-unlock-alt"></i> Login</a></li>
{{--            <li><a href="{{route('member.plan')}}"><i class="fa fa-user"></i> Sign up</a></li>--}}
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
