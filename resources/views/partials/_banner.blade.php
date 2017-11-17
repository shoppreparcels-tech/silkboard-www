<section class="dashbanner">
    <div class="container">
      <div class="row">
        @if(Auth::guard('customer')->user()->email_verify == 'no')
          <div class="dash-pic unverify">
            <div class="profile_progress">
              <div class="loader"></div>
            </div>
            <h3>Please verify your email address to view your shoppre locker address</h3>
          </div>
        @else
        <div class="col-sm-4">
          <div class="dash-complete">
            @php
              if($complition['phone'] == 0){
                $percent = 50;
                $compMsg = 'Update your phone number!';
                $compUrl = route('customer.settings');
              }else{
                $percent = 100;
                $compMsg = 'Happy Shopping!';
                $compUrl = 'javascript::void(0)';
              }
            @endphp

            <h3><a href="{{$compUrl}}">{{$compMsg}}</a></h3>
            <p>Your profile is {{$percent}}% completed</p>
            <div class="example">
              <div class="textProgress progress_bar">
                  <div class="progress"><span class="percent">{{$percent}}%</span></div>
              </div>
              <input type="hidden" name="progress" id="progress_val" value="{{$percent}}">
            </div>
            

          </div>
        </div>
        <div class="col-sm-8">
          <div class="dash-pic">
            <div class="profile_progress">
              <div class="loader" style="width:{{$percent}}%;"></div>
            </div>
          </div>
          <div class="dash-address">
            <h3>{{Auth::guard('customer')->user()->name}}</h3>
            <p>Address Line 1: #{{Auth::guard('customer')->user()->locker}}, 1st Floor, #181,</p>
            <p>Address Line 2: 2nd Cross Rd, 7th Main, Koramangala 1st Block,</p>
            <p>City: Bengaluru </p>
            <p>PIN Code: 560034 </p>
            <p>State/Province: Karnataka</p>
            <p>Country:  India</p>
            <p>Phone: +91 914 835 77 33 </p>
            <p>Landmark:  Near to Seema English Nursery School</p>
          </div>
        </div>
        @endif

      </div>
    </div>
</section>
@if(Auth::guard('customer')->user()->email_verify == 'yes')
<section class="dashnav">
    <ul class="nav nav-pills nav-justified">
      @if(url()->current() == route('customer.locker'))
        <li class="active"><a href="{{route('customer.locker')}}">My Locker</a></li>
      @else
        <li><a href="{{route('customer.locker')}}">My Locker</a></li>
      @endif

      @if(url()->current() == route('customer.settings'))
        <li class="active"><a href="{{route('customer.settings')}}">Account Settings</a></li>
      @else
        <li><a href="{{route('customer.settings')}}">Account Settings</a></li>
      @endif

      @if(url()->current() == route('personal.shopper'))
        <li class="active"><a href="{{route('personal.shopper')}}">Personal Shopper</a></li>
      @else
        <li><a href="{{route('personal.shopper')}}">Personal Shopper</a></li>
      @endif

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
        <li class="active"><a href="{{route('customer.reffer.view')}}">Reffer a Friend</a></li>
      @else
        <li><a href="{{route('customer.reffer.view')}}">Reffer a Friend</a></li>
      @endif

      <li><a href="/shipment-alerts/">Shipment Alerts</a></li>

    </ul>
</section>
@endif