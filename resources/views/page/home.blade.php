@extends('layout')

@section('title', '- Shop Online | Ship Worldwide')

@section('css_style')
	<!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <!-- Select2 -->
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
@endsection

@section('content')
    <!-- Home Page Contents -->
    <section class="slider">
        <div class="slide">
          <img src="{{asset('img/teaser_banner.jpg')}}" width="100%">
          <div class="teaser_slide">
            <h1>Borderless Shipping from <span class="text-orange">INDIA</span></h1>
            <h2 class="text-orange">Starting @ Rs.466 Only*</h2>
            <p>Fast, Cheap and Hassle Free</p>
            <p>Receive your FREE Personal Locker and Virtual Shipping Address in India!</p>
            <a href="#" class="btn btn-shoppre">SIGN UP FOR FREE</a>
            <a href="#" class="btn btn-shoppre">WATCH VIDEO <i class="glyphicon glyphicon-play-circle"></i></a>
          </div>
        </div>
    </section>
    <section class="courier_white">
      <div class="container">
        <div class="col-sm-4">
          <div class="square-box">
            <h2>All About</h2>
            <img src="{{asset('img/texture.png')}}">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="parcel_logs">
            <h3>Ship your Parcel through Shoppre’s trusted Courier Partners</h3>
            <img src="img/dhl.png">
            <img src="img/fedex.png">
            <img src="img/dtdc.png">
          </div>
        </div>
        <div class="clearfix"></div>
        <ul class="horline">
          <li>
            <h2>220+</h2>
            <h4>Countries</h4>
          </li>
          <li>
            <h2>2-4 Days</h2>
            <h4>Average Delivery Time</h4>
          </li>
          <li>
            <h2>1000+</h2>
            <h4>Indian Shopping Websites</h4>
          </li>
          <li>
            <h2>Save 60-80%</h2>
            <h4>Storage, Consolidation &amp; Repackaging!</h4>
          </li>
        </ul>
        <div class="text-center">
          <a href="#" class="btn btn-shoppre">Why You Will Love Us</a>
        </div>
        
      </div>
    </section>
    
    <section class="works">
      <div class="container">
        <div class="row">
          <div class="square-box">
            <h2>how shoppre</h2>
            <h2 class="orange">works</h2>
          </div>
          <div class="col-md-12">
            <ul class="works_flow">
              <li>
                <h3>Join</h3>
                <p>Sign up for free and get a personal shipping Indian address.</p>
              </li>
              <li>
                <h3>Explore</h3>
                <p>Find out your favorite online store in India.</p>
              </li>
              <li>
                <h3>shop</h3>
                <p>Use that address to shop from any Indian shopping website.</p>
              </li>
              <li>
                <h3>AVAIL BENEFITS</h3>
                <p>In case any shopping portal doesn't accept your International credit card, our Personal Shopper will purchase the item for you using our Indian local credit card.</p>
              </li>
              <li>
                <h3>GET NOTIFIED</h3>
                <p>Shoppre lets you know when your item reaches our facility. You can ship your item at your  convenience in just a click.</p>
              </li>
              <li>
                <h3>RECEIVE &amp; ENJOY</h3>
                <p>Save up to 60-80% by our consolidation, repackaging and storage services. Enjoy the discounted rates that we get with our trusted courier partners: DHL and FedEx.</p>
              </li>
            </ul>
            <div class="clearfix"></div>
            <div class="text-center">
              <a href="#" class="btn btn-shoppre">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="brandslove">
      <div class="container">
        <div class="row">
          <div class="square-box">
            <h3>Brands</h3>
            <h2>You <span class="red">Love!</span></h2>
          </div>
          <div class="col-md-12">
            <h2 class="brands-head">Not sure where to shop from?</h2>
            <div class="brands owl-carousel">
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/amazon.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/flipkart.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/abof.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/chumbak.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/jabong.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/myntra.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/pepperfry.png')}}"></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{asset('img/brands/snapdeal.png')}}"></a>
              </div>
            </div>
            <div class="text-center">
              <a href="#" class="btn btn-shoppre">Browse Categories</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="shipping-calculator">
      <div class="container">
        <div class="head">
          <h2>Get Shipping Rates</h2>
          <span>The chargeable weight is always the greater of the two :<br>
            The actual or the volumetric weight.</span>
          <small><a class="popup-modal" href="#vol_model">Learn how to calculate the Volumetric Weight</a></small>

          <div id="vol_model" class="white-popup-block mfp-hide">
            <h3>How To Calculate Volumetric Weight</h3>
            <img src="{{asset('img/vol_calc.png')}}">
            <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
          <div class="block">
            <h3>Shipping Calculator</h3>
            <span id="calc_error">Sorry! No delivery options available in requested country. Please contact our support team for assistance.</span>
            <form class="calc-form" id="shipping">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-sm-12">Where  do you want to send your package?</label>
                <div class="col-sm-12">
                  <select class="form-control select2" name="country">
              <option value="">Select Country</option>
                @foreach($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group" >
                <label class="col-sm-6 control-label" style="top: 8px;">What is your package type?</label>
                <div class="col-sm-6">
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="type" value="doc" checked>Document
                    </label>
                  </div>
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="type" value="nondoc" >Non Document
                    </label>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-12 control-label">How much does your package weigh?</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="weight" placeholder="Enter Weight">
                </div>
                <div class="col-sm-6">
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="unit" value="kg" checked>Kilograms
                    </label>
                  </div>
                  <div class="radio">
                    <label class="checkbox-inline">
                      <input type="radio" name="unit" value="lbs" >Pounds
                    </label>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-block btn-shoppre">get shipping rates</button>
              </div>
              <div class="clearfix"></div>
            </form>
            <div id="ship_result" class="calc-result">
              <p class="info">Best carrier will be automatically chosen according to your country and weight of shipment. We use trusted courier services like DHL and DTDC</p>
              <div class="result table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <td class="bg-white">Est. Shipping Cost</td>
                    <td class="bg-white"><span id="ship_time"></span> Days</td>
                    <td><i class="fa fa-rupee"></i> <span id="ship_cost"></span></td>
                    <td><span class="striked"><i class="fa fa-rupee"></i> <span id="ship_oldcost"></span></span></td>
                    <td class="discount"><span id="ship_disc"></span>% OFF</td>
                  </tr>
                </table>
              </div>
              <ul class="points">
                <li>The rates displayed are exclusive of all the taxes and fuel surcharge as per the Government of india</li>
                <li>You may need to pay duties or tax when your shipment arrives. The cost will depend based on your country's tax law.</li>
                <li>Excludes oversized and palletized shipments.</li>
              </ul>
            </div>
            <div id="calc_load"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>   
    <section class="testimonails">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="square-box">
              <h3>What Our</h3>
              <h2>Members <span class="orange">Say!</span></h2>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="testimons owl-carousel">
              <div class="item">
                <div class="col-sm-3 text-center">
                  <img src="{{asset('img/client.jpg')}}" class="img-circle">
                </div>
                <div class="col-sm-9">
                  <p>This is the first time I shopped from abroad. Shoppre is reliable and has excellent tracking feature.Thank you for such a great first experience.</p>
                  <span class="name">Jessy Varghese</span>
                  <span>United States</span>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="text-center">
              <a href="#" class="btn orange">View All Shoppre Reviews</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="signup_free">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
          <h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness today!</h3>
          <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
          <a href="#" class="btn btn-shoppre">sign up for free</a>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('js_script')
	<!-- Owl Carousel -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <!-- Home -->
  <script src="{{asset('js/home.js')}}"></script>

  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script type="text/javascript">
    /* Magnific Popup */
    $(document).ready(function() {
        $(function () {
            $('.popup-modal').magnificPopup({
                type: 'inline',
                preloader: false,
                modal: true
            });
            $(document).on('click', '.popup-modal-dismiss', function (e) {
                e.preventDefault();
                $.magnificPopup.close();
            });
        });
    });
  </script>

  <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".select2").select2();
    });
  </script>
  <script src="{{asset('js/validate.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $( "#shipping" ).validate({
        rules:
            {
                country:{required: true},
                weight: {required: true},
                unit: {required: true},
            },
            messages: 
            {
                country: { required: "Please select country"},
                weight: { required: "Please enter weight to calculate."},
                unit: { required: "Please select unit of weight."},
            },
            submitHandler: function(form) {
                var country = $("select[name='country']").val();
                var weight = $("input[name='weight']").val();
                var unit = $("input[name='unit']:checked").val();
                var type = $("input[name='type']:checked").val();
                var token = $('input[name=_token]').val();
                $("#calc_load").show();
                $('#calc_error').hide();
                $('#ship_result').hide();
                jQuery.ajax({
                    url: '/calculate-shipping',
                    type : "POST",
                    data:{ _token:token, country:country, weight:weight, unit:unit, type:type},
                    success: function(data) {

                      $("#calc_load").hide();

                      if (data.error == "1") {
                        $('#calc_error').css('display', 'block');
                      }else{
                        
                        $('#ship_oldcost').text(data.amount);
                        var disamount = (data.discount / 100) * data.amount;
                        var finalcost = Math.round(data.amount - disamount).toFixed(2);
                        $('#ship_cost').text(finalcost);
                        $('#ship_time').text(data.time);
                        $('#ship_disc').text(data.discount);
                        $('#ship_result').slideDown();
                      }
                    }
                });

                return false;
            }, 
      });
    });
  </script>
@endsection