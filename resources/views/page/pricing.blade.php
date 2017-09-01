@extends('layout')

@section('title', '- Shipping Calculator | Pricing')

@section('css_style')
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<!-- Select2 -->
	<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
@endsection

@section('content')

	  <section class="page_head">
        <div class="pagebanner">
          <img src="{{asset('img/banner.jpg')}}" width="100%">
          <div class="banner-cap">
            <h2>Pick Your</h2>
            <h2 class="text-orange">Price &amp; Shipping Method</h2>
          </div>
        </div>
    </section>

    <section class="white-band">
      <h2>Get the right <span class="text-orange">plan that suits your need,</span> find out why you should <span class="text-orange">choose shoppre,</span> and <span class="text-orange">calculate your shipping costs</span></h2>
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
    <section class="price_repacking">
      <div class="container">
          <h2 class="text-orange">Our services which help you to reduce cost</h2>
          <h3>repackaging service</h3>
          <p>We repack individual shipments for free and help in reducing wasted space<br> which will allow you to  save over 20% on shipping charges.</p>
          <div class="col-sm-6 repack_box border">
            <img src="img/repackage.png">
            <h4>We only repack goods which :</h4>
            <ul>
              <li>Require added protection and security if it is inadequately  packed for  international shipping.</li>
              <li>Have high volumetric weight than the actual weight.</li>
              <li>We will repack each package to reduce the  weight, which will reduce your  shipping cost .Original package contents are not compromised by repackaging.</li>
              <li>If you don't wish for your shipments to be repacked, you can set that preference in <a href="#" class="text-orange">your account</a>.</li>
            </ul>
          </div>
          <div class="col-sm-6 repack_box">
            <img src="img/repack_ex.png" style="width: 380px;">
            <h4>Repack example :</h4>
            <ul>
              <li>Package from a store was shipped to the warehouse in a box 21x11x12 inches, representing a volumetric weight of 5kg.</li>
              <li>After repackaging, the receipt dimensions were reduced to  (15x12x3 inches), representing a volumetric weight of 2kg.</li>
              <li class="linone bold">Saving to the customer was 3kg. in shipping volumetric weight.</li>
            </ul>
          </div>
      </div>
    </section>
    <section class="price_service">
        <div class="container">
            <h2>Shoppre’s consolidation service</h2>
            <h3>which helps you save on onternational shipping rates!</h3>
            <p>Combine your packages from multiple stores to one tracking number,<br>
            and save upto 75% on shipping rates!</p>
            <p>For Example</p>
            <div class="col-sm-6 serv_sec border">
              <h4>Shipping Directly from <a href="#" class="text-violet">most sellers</a></h4>
              <div class="example">
                <img src="img/pack-1.png">
                <div class="info">
                  <span>Weight : 0.5 Kg</span>
                  <span>Shipping Cost : <i class="fa fa-rupee"></i> 550.00</span>
                </div>
              </div>
              <div class="example">
                <img src="img/pack-2.png">
                <div class="info">
                  <span>Weight : 0.5 Kg</span>
                  <span>Shipping Cost : <i class="fa fa-rupee"></i> 550.00</span>
                </div>
              </div>
              <div class="example">
                <img src="img/pack-3.png">
                <div class="info">
                  <span>Weight : 0.5 Kg</span>
                  <span>Shipping Cost : <i class="fa fa-rupee"></i> 550.00</span>
                </div>
              </div>
              <p class="result">Shipping each ites abroad separately:<br>
              <strong>Total Shipping Costs: <i class="fa fa-rupee"></i> 60.00</strong></p>
            </div>
            <div class="col-sm-6 serv_sec">
              <h4>shipping through <a href="#" class="text-violet">Shoppre.com</a></h4>
              <div class="example">
                <img src="img/repack_ex1.png">
              </div>
              <div class="example">
                <img src="img/pack-4.png">
                <div class="info">
                  <span>Weight : 1.5 Kg</span>
                  <span>Shipping Cost : <i class="fa fa-rupee"></i> 500.00</span>
                </div>
              </div>
              <p style="margin-top: 135px;" class="result">Shipping all items in ONE package:<br>
              <strong>Total Shipping Costs: <i class="fa fa-rupee"></i>  1500.00</strong></p>
              <p style="font-weight: 800;" class="text-orange">75% Less than Shipping Directly from Stores</p>
            </div>
            <div class="clearfix"></div>
            <p class="boldlg" style="margin-top: 50px;font-size: 22px;">When packages are shipped individually, each package bears the burden of the first half kilo rate.<br><strong>But when you consolidate, you pay for the first half kilo only once!</strong></p>
        </div>
    </section>
    <section class="store-band">
      <div class="container">
        <h2>free storage upto 20 days</h2>
        <p>In an effort to maximise consolidation, we will store your packages for 20 days for free. That gives you time to shop and ship your items to our warehouse,Allowing for more packages to be consolidated which saves you money on international shipping costs.</p>
      </div>
    </section>
    <section class="testimonails">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="square-box">
              <h3>What Our</h3>
              <h2>Members <span class="orange">Say!</span></h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="testimons owl-carousel">
              <div class="item">
                <div class="col-md-3 text-center">
                  <img src="img/us_flag.jpg" class="img-circle">
                </div>
                <div class="col-md-9">
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
          <div class="col-md-12">
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
  <script type="text/javascript">
    $( document ).ready(function() {
      $('.testimons').owlCarousel({
          loop:true,
          margin:10,
          responsiveClass:true,
          navText: '',
          autoplay: true,
          autoplayTimeout: 1500,
          items:1,
          nav:true,
          loop:true
      });
  });
  </script>
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