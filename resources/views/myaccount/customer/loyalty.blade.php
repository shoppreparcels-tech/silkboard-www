@extends('myaccount.layout')

@section('title', 'Loyalty Points - ShoppRe.com')

@section('css_style')
<style type="text/css">
  .progress_circle{
    width: 200px;
    margin: 40px auto 0;
    display: block;
    position: relative;
    text-align: center;
    vertical-align: top;
  }
  .progress_circle strong{
    position: absolute;
    top: 100px;
    left: 0;
    width: 100%;
    text-align: center;
    line-height: 0;
    font-size: 30px;
  }
</style>
@endsection

@section('content')

  <section class="loyalty">
    <div class="container">
      <div class="col-sm-12">
        <h2>MY LOYALTY POINTS </h2>
        <div class="content">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#rewards" aria-controls="rewards" data-toggle="tab">Rewards</a></li>
            <li><a href="#points_his" aria-controls="rewards" data-toggle="tab">Points History</a></li>
            <li><a href="#history" aria-controls="history" data-toggle="tab">Redeem History</a></li>
          </ul>
          <!-- Rewards Panel -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="rewards">
              <p class="para-format">It’s never a dull moment with Shoppre. We believe in the idea of return gifts, which is why you
                always get to take back a little extra, every time you shop with Shoppre.</p>
              <div class="title">
                @if($loyalty->level == 1)
                  <h3>YOU ARE A <span class="text-orange">BRONZE SHIPPR</span></h3>
                  <i>Earn {{1000 - $loyalty->total}} points to level up and become a Silver Shippr
                  </i>
                  <input type="hidden" id="loyaltotal" value="1000">
                @elseif($loyalty->level == 2)
                  <h3>YOU ARE A <span class="text-orange">SILVER SHIPPR</span></h3>
                  <i>Earn {{6000 - $loyalty->total}} points to level up and become a Gold Shippr
                  </i>
                  <input type="hidden" id="loyaltotal" value="6000">
                @elseif($loyalty->level == 3)
                  <h3>YOU ARE A <span class="text-orange">GOLD SHIPPR</span></h3>
                  <i>Earn {{26000 - $loyalty->total}} points to level up and become a Platinum Shippr
                  </i>
                  <input type="hidden" id="loyaltotal" value="26000">
                @elseif($loyalty->level == 4)
                  <h3>YOU ARE A <span class="text-orange">PLATINUM SHIPPR</span></h3>
                  <i>You are a Premium Shippr. Enjoy the Amazing benefits!</i>
                  <input type="hidden" id="loyaltotal" value="0">
                @endif
                <input type="hidden" id="loyalpoints" value="{{$loyalty->total}}">
              </div>

              <div class="circlesec">

                <div class="progress_circle" id="circle-c">
                  <strong></strong>
                </div>

                <img src="{{asset('img/loyatlypoints.png')}}">
                <div class="circle">
                  <h4>Free</h4>
                  <span>loyalty points to every <br> Shoppre member</span>
                </div>
                <div class="circle">
                  <h4>REDEEM</h4>
                  <span>your points for<br>future shipments</span>
                </div>
                <div class="circle">
                  <h4>SO EASY</h4>
                  <span>Use the credit for <br> your  future  Shoppre <br> shipments</span>
                </div>
              </div>
              <div class="points">
                <h3 class="text-orange">How To Earn Shoppre Loyalty Points?</h3>
                <p>Earn Shoppre Loyalty Points and get real Cash Discounts for your shipments! Higher level Shopprees have surprise benefits!</p>
                <ul>
                  <li>
                    <h5>SHIPPING REWARDS</h5>
                    <p>Earn Shoppre Loyalty Points whenever you ship a package <br>
                      @if($loyalty->level == 1)
                        Get rewarded each time you ship a package. A Bronze Shippr earns loyalty points worth
                        5% of the shipment value. As you level up, you earn points faster!
                      @elseif($loyalty->level == 2)
                        Get rewarded each time you ship a package. A Silver Shippr earns loyalty points worth 8% of
                        the shipment value. As you level up, you earn points faster!
                      @elseif($loyalty->level == 3)
                        Get rewarded each time you ship a package. A Gold Shippr earns loyalty points worth 10% of
                        the shipment value. As you level up, you earn points faster!
                      @elseif($loyalty->level == 4)
                        Get rewarded each time you ship a package. A Platinum Shippr earns loyalty points worth 12% of
                        the shipment value. As you level up, you earn points faster!
                      @endif
                    </p>
                  </li>
                  <li>
                    <h5>SHOPPING REWARDS</h5>
                    <p>Shop from any of our
                      <a href="{{route('stores1')}}" target="_blank">
                        <strong>Featured Sellers</strong></a> and earn 50 loyalty points for every shipment.
                    </p>
                  </li>
                  <li>
                    <h5>REFER A FRIEND</h5>
                    <p><a href="{{route('customer.reffer.view')}}" target="_blank">Refer a friend</a> to ShoppRe and
                      earn 200 loyalty points whenever he joins our family and makes
                      his first shipment.
                    </p>
                  </li>
                  <li>
                    <h5> PARTICIPATION REWARDS</h5>
                    <p>Participate in our social media surveys and earn anything up to 500 loyalty points! You
                      shall be notified via e-mail so that you don’t miss out on a single point!</p>
                  </li>
                </ul>
              </div>
              <div class="cash">
                <h3 class="text-orange">Turn your points into Cash!</h3>
                <p>For every 1,000 ShoppRe Loyalty Points you earn, a credit of INR 100 will automatically be
                  applied to your next shipment.</p>
                <p>No limit on the number of loyalty points you can earn so start shopping and shipping with
                  Shoppre!</p>
                <img src="img/loyalty.png">
                <div class="clearfix"></div>
              </div>
            </div>

            <!-- Points History Panel -->
            <div role="tabpanel" class="tab-pane" id="points_his">
              <h3 style="font-size: 18px;font-weight: 800;">LOYALTY POINTS HISTORY</h3>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Points</th>
                  </tr>
                  @foreach($points as $point)
                    <tr>
                      <td style="white-space: nowrap;">
                        {{date("d-m-Y, g:i a", strtotime($point->created_at))}}
                      </td>
                      <td>{{$point->info}}</td>
                      <td>{{$point->points}}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>

            <!-- Redeem History Panel -->
            <div role="tabpanel" class="tab-pane" id="history">
              <h3>History</h3>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th>LOYALTY POINTS</th>
                    <th>ACHIEVED ON:</th>
                    <th>REDEEMED <i class="fa fa-rupee"></i> 100 ON:</th>
                  </tr>
                  @foreach($history as $data)
                    <tr>
                      <td>{{$data->points}}</td>
                      <td>{{date('d/m/Y', strtotime($data->created_at))}}</td>
                      <td>{{$data->redeemed}}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js_script')
<script type="text/javascript" src="{{asset('js/circle-progress.min.js')}}"></script>
<script type="text/javascript">
  var points = $("#loyalpoints").val();
  var total = $("#loyaltotal").val();
  if (total == 0){
    var progVal = 1;
  }else{
    var progVal = points/total;
  }

  $('#circle-c').circleProgress({
    startAngle: -1.55,
    size: 200,
    value: progVal,
    fill: {gradient: ['#ff1e41', '#ff5f43']}
  }).on('circle-animation-progress', function(event, progress, stepValue) {
    if (total == 0) {
      $(this).find('strong').text('Enjoy!');
    }else{
      $(this).find('strong').text(points+'/'+total);
    }
  });
</script>
@endsection
