@extends('layout')

@section('title', 'Membership Success | Shoppre - International Shipping Partner')
@section('description', 'Membership Success | Shoppre - International Shipping Partner')
@section('keywords', 'Membership Success | Shoppre - International Shipping Partner')

@section('css_style')
  <!-- Select2 -->
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
@endsection

@section('content')

  <section class="signup_free">
      <div class="row pull-right container">
          Support +91 8277919191 |
          <a href="/contact">Contact US</a>
      </div>
    <div class="container text-left" style="background: #3cabab;padding: 100px;color: black;">
      <div>
          <div class="row">
            <h3>
                <b>Congratulations You have successfully registered with shoppre.com as a premium member</b>
            </h3>
          </div>
      </div>
        <div>
          <div class="row">
              <h4>
                  <b>
                      MemberShip ID : MEM-{{$customer->id}}
                  </b>
              </h4>
              <h4>
                  <b>
                      Validity: {{ date('d-M-Y') }} to {{ date('d-M-Y', strtotime($customer->membership_validity)) }}

                  </b>
              </h4>
              <h4>
                  <b>
                      Membership Type: Premium Membership
                  </b>
              </h4>
          </div>
          <div class="row" style="color: white;font-weight: 900;">
              <h4>
                  <b>
                      <u>Your Indian Address:</u></br></br>
                      {{$customer->name}}</br>
                      SHPR28-598, #181, 1st Floor
                      2nd, Cross Road, 7th Main</br>
                      Koramangala, 1st Block</br>
                      Bengaluru- 560034, Karnataka,</br>
                      India +919148357733</br>
                      Landmark: Near Seema English Nursery School</br>
                  </b>
              </h4>
                  <div class="text-center">
                      <a href="{{route('customer.locker')}}" class="btn btn-shoppre">Proceed to Account</a>
                  </div>

          </div>
      </div>
    </div>
  </section>

@endsection

@section('js_script')

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
                var length = $("input[name='length']").val();
                var width = $("input[name='width']").val();
                var height = $("input[name='height']").val();
                var token = $('input[name=_token]').val();
                $("#calc_load").show();
                $('#calc_error').hide();
                $('#ship_result').hide();
                jQuery.ajax({
                    url: '/calculate-shipping',
                    type : "POST",
                    data:{ _token:token, country:country, weight:weight, unit:unit, type:type, length:length, width:width, height:height},
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
          autoplayTimeout: 8500,
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              600:{
                  items:1,
                  nav:true
              },
              1000:{
                  items:1,
                  nav:true,
                  loop:true
              }
          }
      });
    });
  </script>

  <!-- Select2 -->
  <script src="{{asset('js/select2.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".select2").select2();
    });

    $("#select_iso").change(function(){
      if ($(this).val().length != 0) {
        window.location = "/country/"+$(this).val();
      }
    });

    $("#xchange_calc select").change(function(){
      var country_from = $("#country_from").val();
      var country_to = $("#country_to").val();
      var token = $('input[name=_token]').val();

      $(".xchange_rate #calc_load").show();
      jQuery.ajax({
          url: '/calculate/exchange-rate',
          type : "POST",
          data:{ _token:token, country_from:country_from, country_to:country_to},
          success: function(data) {
            $(".xchange_rate #calc_load").hide();
            if (data.error) {
              $('.xchange_rate #calc_error').css('display', 'block').text('We can not process this request! Try again later.');
            }else{
              $(".xchange_rate #xchange_display").html("1 "+data.from_curr+" = "+data.rate+" "+data.to_curr);
              $(".xchange_rate #rate_input").val(data.rate);
              $(".xchange_rate #rate_from").val(1);
              $(".xchange_rate #rate_to").val(data.rate);
            }
          }
      });
    });

    $(document).on('keyup', '.xchange_rate #rate_from', function() {
        var rate_from = $(".xchange_rate #rate_from").val();
        var rate_input = $(".xchange_rate #rate_input").val();

        var rate_to = parseFloat(rate_from) * parseFloat(rate_input);
        $(".xchange_rate #rate_to").val(rate_to.toFixed(3));
    });

    $(document).on('keyup', '.xchange_rate #rate_to', function() {
        var rate_to = $(".xchange_rate #rate_to").val();
        var rate_input = $(".xchange_rate #rate_input").val();

        var rate_from = parseFloat(rate_to) / parseFloat(rate_input);
        $(".xchange_rate #rate_from").val(rate_from.toFixed(3));
    });

  </script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
      });
    });
  </script>
@endsection
