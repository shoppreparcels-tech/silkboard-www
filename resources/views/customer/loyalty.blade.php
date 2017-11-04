@extends('layout')

@section('title', ' - Loyalty Points')

@section('content')

	@include('partials._banner')

	<section class="loyalty">
      <div class="container">
        <div class="col-sm-12">
          <h2>MY LOYALTY POINTS </h2>
          <div class="content">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#rewards" aria-controls="rewards" role="tab" data-toggle="tab">Rewards</a></li>
              <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
            </ul>
            <!-- Rewards Panel -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="rewards">
                <h3>Achievements</h3>
                <div class="colorsec">
                  <div class="color-box one">
                    <h4>Level {{$loyalty->level}}</h4>
                    <p>Shopper</p>
                  </div>
                  <div class="color-box two">
                    <h4>{{$loyalty->points}}</h4>
                    <p>Total Points</p>
                  </div>
                  <div class="color-box three">
                    <h4>{{($loyalty->level * 1000) - $loyalty->total}}</h4>
                    <p>Points To Level Up</p>
                  </div>
                </div>
                <div class="circlesec">
                  <p>At Shoppre, members always come first, and nothing says "we appreciate you" more than CASH for shipping! We're excited to unveil the industry's first rewards program that allows you to easily earn shipping credits with Shoppre.</p>
                  <div class="circle">
                    <h4>Free</h4>
                    <span>to every Shoppre<br>member</span>
                  </div>
                  <div class="circle">
                    <h4>REDEEM</h4>
                    <span>your points for<br>future shipments</span>
                  </div>
                  <div class="circle">
                    <h4>SO EASY</h4>
                    <span>to earn points!</span>
                  </div>
                </div>
                <div class="points">
                  <h3>Earn Shoppre Loyalty Points</h3>
                  <p>There are lots of ways to earn Shoppre Loyalty Points, and earn real discounts for your shipments!</p>
                  <ul>
                    <li>
                      <h5>SHIPPING REWARDS</h5>
                      <p>Earn Shoppre Loyalty Points whenever you ship a package (10% of the total amount that you paid for your shipment).</p>
                    </li>
                    <li>
                      <h5>SHOPPING REWARDS</h5>
                      <p>Earn 100 Shoppre Loyalty Points per shipment, by shopping from ANY of our Featured Sellers.</p>
                    </li>
                    <li>
                      <h5>REFER A FRIEND</h5>
                      <p>Earn 100 Shoppre Loyalty Points for each friend you refer as soon as they do their first shipment!</p>
                    </li>
                    <li>
                      <h5>MISCELLANEOUS REWARDS</h5>
                      <p>Earn 50 Shoppre Loyalty Points for participating in social media and surveys.</p>
                    </li>
                  </ul>
                </div>
                <div class="cash">
                  <h3>Turn your points into Cash!</h3>
                  <p>For every 1,000 Shoppre Loyalty Points you earn, a INR 100 credit will automatically be applied to your next shipment. There is no limit to the number of INR 100 Credits you can collect, giving you unlimited earning potential!</p>
                  <img src="img/loyalty.png">
                  <div class="clearfix"></div>
                </div>
              </div>

              <!-- History Panel -->
              <div role="tabpanel" class="tab-pane" id="history">
                <h3>History</h3>
                <table class="table table-bordered">
                  <tr>
                    <th>LOYALTY POINTS</th>
                    <th>REDEEMED <i class="fa fa-rupee"></i> 100 ON:</th>
                  </tr>
                  @foreach($history as $data)
                  <tr>
                    <td>{{$data->points}}</td>
                    <td>{{$data->redeemed}}</td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
	
@endsection
