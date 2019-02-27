@extends('myaccount.membership.layout')

@section('title', 'Sign Up &amp; Create Free Account | International Shipping | ShoppRe.com')
@section('description', 'New to ShoppRe? Sign Up to send your shipment by setting up a personal account. Also, you&#039;ll be able to store & access all your parcel here for free.')
@section('keywords', 'sign up, register, create account, shipment, personal, parcel')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/customer/register"/>
    <script type='application/ld+json'>
  {
    "@context": "http://www.schema.org",
    "@type": "WebSite",
    "name": "ShoppRe.com",
    "alternateName": "IndianShoppre LLP",
    "url": "https://www.shoppre.com/"
  }

  </script>
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "ShoppRe - International Shipping From India",
    "url": "https://www.shoppre.com",
    "sameAs": [
      "https://www.facebook.com/goshoppre/",
      "https://www.instagram.com/shoppre_official/",
      "https://twitter.com/Go_Shoppre",
      "https://plus.google.com/+SHOPPRECOM",
      "https://www.linkedin.com/company/shoppre.com",
      "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw"
    ]
  }

  </script>

    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/intlTelInput.js')}}"></script>

@endsection

@section('content')
  <div class="container text-center">
    <div class="row text-center">
      <img class="img-responsive" src="{{asset('img/member/process.png')}}"  style='height:70px;display:inline !important' alt="Member Plan"></a>
    </div>
  </div>
  <section style="padding-top: 20px; height: 220px;">
    <div class="container">
      <center>
        <h1 class="f-s-36 f-c-white" id="signup-header">Sign Up Free to ShoppRe</h1>
      </center>
    </div>
  </section>
  <section class="login-sction sec-sign-up">
    <div class="container">
        <form class="register-form" id="form_register" role="form" method="POST"
              action="{{ route('customer.register.submit') }}">
            {{ csrf_field() }}
            <input type="hidden" name="referrer" value="{{app('request')->input('r')}}">
            <input type="hidden" name="continue" value="{{app('request')->input('continue')}}">
            <input type="hidden" name="member" value="{{app('request')->input('member')}}">
            <div class="col-md-12 no-padding" id="signin-email">
                <div class="col-md-6 col-md-offset-3 loginwindow">
                    <div class="col-md-8 col-md-offset-2 col-xs-12 no-pad" id="addImge">
                        <center>
                            <a href="http://127.0.0.1:8001/customer/register">
                                <img
                                    src="{{asset('/img/images/schedule-pickup-courier-from-india-shoppre.png')}}"
                                    alt="schedule-pickup-courier-from-india-shoppre" class="img-responsive">
                            </a>
                        </center>
                        <br>
                    </div>
                    <div class="col-md-12 col-xs-12 ">
                        <center>
                            <div class="col-md-6 col-xs-6 img-google-pluse">
                                <a href="{{route('customer.social.google', ['loginAs' => 'Customer'])}}"
                                   class="pull-right"><img
                                        src="{{asset('img/google-plus-logo-button.png')}}" alt=""></a>
                            </div>
                            <div class="col-md-6 col-xs-6 img-facebook-pluse">
                                <a href="{{route('customer.social.facebook')}}" class="pull-left"><img
                                        src="{{asset('img/facebook-logo-button.svg')}}" alt=""></a>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-12 col-xs-12 no-padd">
                        @if (session('message'))
                            <div class="alert alert-success text-center">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error_message'))
                            <div class="alert alert-danger text-center">
                                {{ session('error_message') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-xs-12 col-md-12 email-id">
                        <center>
                            <input type="hidden" name="continue" value="">
                            <div class="form-group">
                                <input type="text" class="txt-login-register" placeholder="Email address"
                                       id="signup-email" name="email"
                                       value="{{app('request')->input('email')}}" required autofocus>
                            </div>
                        </center>
                    </div>
                    <div class="col-xs-12 col-md-12 other-feilds">
                        <input type="hidden" name="utm_campaign" value="" id="utm_campaign">
                        <input type="hidden" name="utm_source" value="" id="utm_source">
                        <input type="hidden" name="utm_medium" value="" id="utm_medium">
                        <input type="hidden" name="gcl_id" value="" id="gcl_id">
                        <input type="hidden" name="referer" value="" id="referer">
                        <input type="hidden" name="first_visit" value="" id="first_visit">
                        <center>
                            <input type="hidden" name="continue" value="">
                            <div class="form-group">
                                <input type="text" class="txt-login-register" name="firstname"
                                       value="{{ old('firstname') }}"
                                       placeholder="First Name *" required>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-offset-3 col-md-6 col-xs-12 no-pad">
                        <input class="txt-login-register" id="phone" name="phone" type="tel" autocomplete="off"
                               style=" margin-left: 5px;"> <br/>
                    </div>

                    <div class="col-xs-12 col-md-12" style="margin-top: -20px;">
                        <center>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <input type="password" class="txt-login-register" placeholder="Password *"
                                       name="password" required>
                            </div>
                        </center>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <center>
                            <div class="form-group">
                                <input type="text" class="txt-login-register" placeholder="Referral code if any"
                                       name="refferal" visible="false">
                            </div>
                        </center>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <center><br>
                            <button type="submit" class="btn btn-s-r btn-b-r btn-l">Sign Up</button>
                        </center>
                    </div>

                    <div class="col-md-12 col-xs-12 pad-t-20">
                        <div class="col-md-8 col-xs-12 no-pad">
                            <label class="f-c-d-greay">Already have account?
                                <a href="{{route('customer.login')}}" class="f-c-red"> Sign In</a>
                            </label>
                        </div>
                        <div class="col-md-4 col-xs-12 no-pad">
                            <a href="https://www.shoppre.com/terms-and-conditions" class="f-c-d-greay">Terms &
                                Privacy Policy</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>



    </div>
    <br>
  </section>


  <section class="benefits">
    <div class="container" >
      <center>
        <h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>
      </center>
      <br>
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="panel ">
            <ul>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel ">
            <ul>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Scanned Copies for Document-couriers</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Country-specific</span></li>

            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel ">
            <ul>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
              <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span> Product Recommendations</span></li>
            </ul>
          </div>
        </div>
        <br/><br/>
      </div>
    </div>
  </section>

@endsection

@section('js_script')
  <script src="{{asset('js/validate.min.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('#btn-email').click(function () {
        const sign_email = $('#signup-email').val();
        if (sign_email == '')
        {
          $('.span-validate').css('display','block');
        }
        else {
          $('#signin-email').hide();
          $('#signin-name').show();
          $('#signup-header').text('Complete Sign Up');
        }
      });

      $('#utm_campaign').val(localStorage.utm_campaign !== undefined ? localStorage.utm_campaign: 'no-utm-campaign');
      $('#utm_medium').val(localStorage.utm_campaign !== undefined ? localStorage.utm_medium: 'no-utm-medium');
      $('#utm_source').val(localStorage.utm_campaign !== undefined ? localStorage.utm_source: 'no-utm-source');
      $('#gcl_id').val(localStorage.utm_campaign !== undefined ? localStorage.gcl_id: 'no-gcl-id');
      $('#referer').val(localStorage.referer);
      $('#first_visit').val(localStorage.first_visit);

    });
  </script>
  <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
          // allowDropdown: false,
          // autoHideDialCode: false,
          // autoPlaceholder: "off",
          // dropdownContainer: document.body,
          // excludeCountries: ["us"],
          // formatOnDisplay: false,
          // geoIpLookup: function(callback) {
          //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          //     var countryCode = (resp && resp.country) ? resp.country : "";
          //     callback(countryCode);
          //   });
          // },
          // hiddenInput: "full_number",
          // initialCountry: "auto",
          // localizedCountries: { 'de': 'Deutschland' },
          // nationalMode: false,
          // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          // placeholderNumberType: "MOBILE",
          // preferredCountries: ['cn', 'jp'],
          // separateDialCode: true,
          utilsScript: "build/js/utils.js",
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $.validator.addMethod("alpha", function (value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
      }, "\<br> You can only insert alphabets");

      $.validator.addMethod("pwcheck", function (value) {
        return /^[A-Za-z0-9\d=!\-$#&%@._*]*$/.test(value) // consists of only these
          && /[a-z]/.test(value) // has a lowercase letter
          && /\d/.test(value) // has a digit
      });

      // $("#form_register").validate({
      //   rules:
      //     {
      //       // title: {required: true},
      //       firstname: {required: true, alpha: true},
      //       // lastname: {required: true},
      //       country_code: {required: true},
      //       phone: {required: true},
      //       email: {required: true, email: true},
      //       password: {required: true, minlength: 8, pwcheck: true},
      //       // password_confirmation: {required: true, equalTo: "input[name='password']"}
      //     },
      //   messages:
      //     {
      //       firstname: {required: "Your firstname required"},
      //       // lastname: {required: "Your lastname required"},
      //       email: {
      //         required: "Please enter email address",
      //         email: "Your email address must be in the format of name@domain.com"
      //       },
      //       password: {
      //         required: "Please enter your password",
      //         pwcheck: "Please enter a strong password with alphabets and digits."
      //       },
      //       password_confirmation: {
      //         required: "Password confirmation required",
      //         // equalTo: "Password confirmation not matching"
      //       },
      //     },
      // });
    });
  </script>
@endsection
