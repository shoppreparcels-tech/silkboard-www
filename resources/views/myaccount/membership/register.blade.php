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

@endsection

@section('content')
  <div class="container text-center">
    <div class="row">
      <img class="img-responsive" src="{{asset('img/member/process.png')}}"  style='height:55px;display:inline !important' alt="Member Process"></a>
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
            <center><p class="div-offer-display">*50% off on your first time Shipment.</p></center>
            <div class="row signup-padding">
              <div class="col-md-6 col-xs-6 img-google-pluse">
                <a href="{{route('customer.social.google', ['loginAs' => 'Customer'])}}"><img
                    src="{{asset('img/google-plus-logo-button.png')}}" alt=""></a>
              </div>
              <div class="col-md-6 col-xs-6 img-facebook-pluse">
                <a href="{{route('customer.social.facebook')}}"><img src="{{asset('img/facebook-logo-button.svg')}}" alt=""></a>
              </div>
            </div>

            <div class="col-md-12 col-xs-12 divider">
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
              <center>
                <img src="{{asset('img/divider.svg')}}" alt="">
              </center>
            </div>
            <div class="col-xs-12 col-md-12 email-id">
              <center>
                <input type="hidden" name="continue" value="">
                <div class="form-group">
                  <input type="text" placeholder="john@email.com" id="signup-email" name="email" value="{{app('request')->input('email')}}" required autofocus>
                </div>
                <span class="span-validate">Your Email is required</span>
              </center>
            </div>
            <div class="col-md-12 col-xs-12">
              <center>
                <a href="#" class="btn btn-login" id="btn-email" style="padding-top: 10px;">Sign Up Free</a>
              </center>
            </div>

            <div class="col-md-12 col-xs-12 signin-link">
              <div class="col-md-8 col-xs-12 no-padding">
                <label>Already have account?
                  <a href="{{route('customer.login')}}"> Sign In</a>
                </label>
              </div>
              <div class="col-md-4 col-xs-12 no-padding">
                <a href="https://www.shoppre.com/terms-and-conditions">Terms & Privacy Policy</a>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-12 no-padding" id="signin-name">
          <div class="col-md-6 col-md-offset-3 loginwindow">
            <div class="col-md-12 col-xs-12">
              <center>
                <p class="p-detail">Please enter few details <br>
                  to complete your registration.</p>
              </center>
            </div>
            <div class="col-xs-12 col-md-12 other-feilds">
              <input type="hidden" name="utm_campaign"  value="" id="utm_campaign" >
              <input type="hidden" name="utm_source"  value="" id="utm_source" >
              <input type="hidden" name="utm_medium"  value="" id="utm_medium" >
              <input type="hidden" name="gcl_id"  value="" id="gcl_id" >
              <input type="hidden" name="referer"  value="" id="referer" >
              <input type="hidden" name="first_visit"  value="" id="first_visit" >
              <center>
                <input type="hidden" name="continue" value="">
                <div class="form-group">
                  <input type="text" name="firstname"  value="{{ old('firstname') }}" placeholder="First Name *" required>
                </div>
              </center>
            </div>
            <div class="col-xs-12 col-md-12">
              <center>
                <div class="form-group">
                  <div class="div-mobileNo">
                    <div class="col-md-5 no-padding">
                      <select class="select2 select-control " name="country_code" >
                        <option value="{{app('request')->input('c_code')? app('request')->input('c_code') : '91'}}"> &nbsp; &nbsp;+{{app('request')->input('c_code')? app('request')->input('c_code') : '91'}}</option>
                        @foreach($countries as $country)
                          <option value="{{$country->phone_code}}">{{$country->iso}}
                            (+{{$country->phone_code}})
                          </option>
                        @endforeach
                      </select>
                      @if ($errors->has('code'))
                        <span class="error">{{ $errors->first('code') }}</span>
                      @endif
                    </div>
                    <div class="col-md-7 no-padding">
                      <input type="number" class="txt-mobile-no" placeholder="Mobile Number" name="phone" value="{{app('request')->input('PN')}}" required>
                    </div>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-xs-12 col-md-12 password">
              <center>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                  <input type="password" placeholder="Password *" name="password" required>
                </div>
              </center>
            </div>
            <div class="col-xs-12 col-md-12 other-feilds">
              <center>
                <div class="form-group">
                  <input type="text" placeholder="Referral code if any" name="refferal" visible="false">
                </div>
              </center>
            </div>

            <div class="col-md-12 col-xs-12">
              <center>
                <button type="submit" class="btn btn-login">Sign Up Free</button>
              </center>
            </div>

            <div class="col-md-12 col-xs-12 signin-link ">
              <div class="col-md-7 col-xs-12 no-padding">
                <label>Already have account?
                  <a href="{{route('customer.login')}}"> Sign In</a>
                </label>
              </div>
              <div class="col-md-5 col-xs-12 ">
                <a href="https://www.shoppre.com/terms-and-conditions">Terms & Privacy Policy</a>
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

      $("#form_register").validate({
        rules:
          {
            // title: {required: true},
            firstname: {required: true, alpha: true},
            // lastname: {required: true},
            country_code: {required: true},
            phone: {required: true},
            email: {required: true, email: true},
            password: {required: true, minlength: 8, pwcheck: true},
            // password_confirmation: {required: true, equalTo: "input[name='password']"}
          },
        messages:
          {
            firstname: {required: "Your firstname required"},
            // lastname: {required: "Your lastname required"},
            email: {
              required: "Please enter email address",
              email: "Your email address must be in the format of name@domain.com"
            },
            password: {
              required: "Please enter your password",
              pwcheck: "Please enter a strong password with alphabets and digits."
            },
            password_confirmation: {
              required: "Password confirmation required",
              // equalTo: "Password confirmation not matching"
            },
          },
      });
    });
  </script>
@endsection
