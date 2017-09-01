<section class="dashbanner">
    <div class="container">
      <div class="row">
        @if(Auth::guard('customer')->user()->email_verify == 'no')
          <div class="alert alert-danger text-center" style="font-size: 20px;background: transparent;">Please verify your email address to view your shoppre locker address</div>
        @else
        <div class="col-sm-4">
          <div class="dash-complete">
            <h3>Awaiting your first Shipment!</h3>
            <p>Your profile is 100% completed</p>
            <div class="example">
              <div class="textProgress progress_bar">
                  <div class="progress"><span class="percent">100%</span></div>
              </div>
              <input type="hidden" name="progress" id="progress_val" value="100">
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="dash-pic">
            <div class="profile_progress">
              <div class="loader" style="width:100%;"></div>
            </div>
          </div>
          <div class="dash-address">
                <h3>{{Auth::guard('customer')->user()->name}}</h3>
                <p>1st Floor, #181,</p>
                <p>2nd Cross Rd, 7th Main,</p>
                <p>Koramangala 1st Block,</p>
                <p>Locker No: {{Auth::guard('customer')->user()->locker}}</p>
                <p>Bengaluru 560034</p>
                <p>Karnataka, India</p>
                <p>+91 914 835 77 33</p>
          </div>
        </div>
        @endif
      </div>
    </div>
</section>