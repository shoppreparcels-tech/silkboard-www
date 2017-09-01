@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
          <div class="page-title">
            <h1>Welcome to Shoppre</h1>
            <span>You have just signed in back</span>
          </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
          <div class="row">
            <div class="masonary">
              <div class="col s4">
                <div class="widget pink lighten-3">
                  <div class="widget-title light">
                    <h3>Users</h3>
                    <p>16.3% compared to last month</p>
                  </div>
                  <div class="main-counter">
                    <strong>65,841 <i class="ti-arrow-up"></i></strong>
                    <span><i class="ti-bar-chart"></i></span>
                  </div>
                </div><!-- Widget -->
              </div>
              <div class="col s4">
                <div class="widget purple lighten-3">
                  <div class="widget-title light">
                    <h3>Packages</h3>
                    <p>22% From Last 1 Month</p>
                  </div>
                  <div class="main-counter">
                    <strong>4,564 <i class="ti-arrow-up"></i></strong>
                    <span><i class=" ti-stats-up "></i></span>
                  </div>
                </div><!-- Widget -->
              </div>
              <div class="col s4">
                <div class="widget deep-orange lighten-3">
                  <div class="widget-title light">
                    <h3>Shippings</h3>
                    <p>35% From Last 1 Month</p>
                  </div>
                  <div class="main-counter">
                    <strong>21,256 <i class="ti-arrow-up"></i></strong>
                    <span><i class=" ti-money "></i></span>
                  </div>
                </div><!-- Widget -->
              </div>
            </div><!-- Masonary -->
          </div>      
        </div>
      </div><!-- Content Area -->

@endsection