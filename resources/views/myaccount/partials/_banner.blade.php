<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
        <div class="col-sm-3">
          <div class="dash-complete">
            @php
              if($completion['phone'] == 0){
                $percent = 50;
                $compMsg = 'Update your phone number!';
                $compUrl = route('customer.settings');
              }elseif($completion['address'] == 0){
                $percent = 75;
                $compMsg = 'Add your default shipping address!';
                $compUrl = route('customer.address');
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
              <input type="hidden" name="progress" id="progress_val" value="{{$percent}}"><br>
              <a href="{{route('customer.incoming')}}" class="btn btn-blue">Alert Shoppre about my incoming Packages </a>
            </div>

            <div style="margin-top: 30px;font-size:20px !important">
             <p class="text-center" style="font-size:20px !important">Your Wallet Balance<br> </p>
              <p class="text-center" style="font-size: 26px"><i class="fa fa-inr" style="font-size:22px"></i><?php echo (number_format($customer->balance->amount, 2, ".", "")); ?>/-</p>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
            @if($package_count <=0 && $shipment_count <=0 && $customer->is_migrated !=2 && env('TRYNEW') == true )
                <div class="row">
                    <div class="try-new-align">
                        <a href="{{route('customer.migrate')}}" class="btn btn-blue">Try New Platform</a>
                    </div>
                </div>
            @endif
          <div class="dash-pic">
            <div class="profile_progress">
              <div class="loader" style="width:{{$percent}}%;"></div>
            </div>
          </div>
          <div class="dash-address">
            <h4>USE THIS AS YOUR SHIPPING ADDRESS TO SHOP FROM ANY ONLINE SELLER <a href="javascript:void(0)" class="tooltipkey" style="font-size: 20px;" title="<p>Please take extra care while entering your Shipping Address to shop from any online seller in India. All your packages will arrive to your Personal Locker at our Shoppre facility. <br>There is an <b>INR 200 fee for packages</b> that arrive at our distribution center with an <b>incomplete address</b>. You can avoid these fees by making sure the seller properly addresses your order. </p>"><i class="fa fa-question-circle-o"></i></a> </h4> @php
              $titleExplode = explode(". ", Auth::guard('customer')->user()->name, 2);
              if(sizeof($titleExplode) == 2){
                  $title = $titleExplode[0];
                  $full_name = $titleExplode[1];
              }else{
                  $title = "";
                  $full_name = $titleExplode[0];
              }
            @endphp
            <h3>{{$full_name}}</h3>
            <p>Address Line 1: #{{Auth::guard('customer')->user()->locker}}, 1st Floor, #181,</p>
            <p>Address Line 2: 2nd Cross Rd, 7th Main, Koramangala 1st Block,</p>
            <p>City: Bengaluru </p>
            <p>PIN Code: 560034 </p>
            <p>State/Province: Karnataka</p>
            <p>Country:  India</p>
            <p>Phone: +91 914 835 77 33 </p>
            <p>Landmark:  Near Seema English Nursery School</p>
          </div>
        </div>
          <br>
          <br>
          <br>
          <br>
          <div class="container text-center" style="margin-top: 200px;padding-bottom: 14px;">
            <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/browse-categories">
              <img src="https://www.shoppre.com/uploads/img/dash.jpg">
            </a>
          </div>
        @endif

      </div>
    </div>
</section>
