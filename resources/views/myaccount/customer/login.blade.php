@extends('myaccount.layout')

@section('title', 'Sign In - Your one account for Shopping & Shipping • ShoppRe™')
@section('description', 'Hey welcome back! Log in to your ShoppRe account to access your package details, status, wallet balance, and secure online payment and shipping services.')
@section('keywords', 'log in, sign in')

@section('css_style')

  <link rel="canonical" href="https://www.shoppre.com/customer/login" />

@endsection

@section('content')
  <section class="header-section">
    {{--<div class="container">--}}
      {{--<center>--}}
        {{--<h1 class="f-s-36 f-c-white">Login to ShoppRe</h1>--}}
      {{--</center>--}}
    {{--</div>--}}
  </section>
  <section class="login-sction">
    <div class="container">
      <div class="col-md-6 col-md-offset-3 col-xs-12 loginwindow" >
          <center>
              <h1 class="f-s-36 f-c-d-greay f-w-8"><span class="f-c-red">S</span>ign In</h1>
          </center>

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
          <input type="hidden" name="continue" value="{{session('customer_id')}}" id="mixpanel_customer_id">
        <form class="login-form" id="form_login" role="form" method="POST"
              action="{{ route('customer.login.submit') }}">
        {{--<div class="col-md-12 col-xs-12 divider">--}}
          {{--<center>--}}
            {{--<img src="{{asset('img/divider.svg')}}" alt="">--}}
          {{--</center>--}}
        {{--</div>--}}
        <div class="col-xs-12 col-md-12 email-id">
          <center>
            <input type="hidden" name="continue" value="{{$continue}}">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">

              <input type="text" class="txt-login-register" placeholder="Email address"name="email"
                     value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="help-block">
                      <br>
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </center>
        </div>
        <div class="col-xs-12 col-md-12 password">
          <center>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
              <input type="password" class="txt-login-register" placeholder="password" name="password" required>
              @if ($errors->has('password'))
                <span class="help-block">
                      <br>
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
          </center>
        </div>
        <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12 ">
            <div class="chk-margin">
              <label class="chkn-container">Remember me!
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked="checked">
                <span class="checkmark"></span>
              </label>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 pad-t-20">
          <center>
            <button type="submit" class="btn btn-s-r btn-b-r btn-l">Sign In</button>
          </center>
        </div>

        <div class="col-md-12 col-xs-12 pad-t-20 ">
            <center>
                <div class="col-md-6 col-xs-6 img-google-pluse ">
                    <a href="{{route('customer.social.google')}}?loginAs=Customer&continue={{$continue}}" class="pull-right"><img src="{{asset('img/google-plus-logo-button.png')}}" alt=""></a>
                </div>
                <div class="col-md-6 col-xs-6 img-facebook-pluse">
                    <a href="{{route('customer.social.facebook')}}?continue={{$continue}}" class="pull-left"><img src="{{asset('img/facebook-logo-button.svg')}}" alt=""></a>
                </div>
            </center>
        </div>
        </form>
        <div class="col-md-12 col-xs-12 pad-t-20">
          <div class="col-md-7 col-xs-7 no-padding">
            <label class="pull-left f-s-14 f-c-d-greay">Don't have account?
              <a href="{{route('customer.register')}}?continue={{$continue}}" class="f-c-red">Sign Up</a>
            </label>
          </div>
          <div class="col-md-5 col-xs-5 ">
            <a href="{{route('customer.forgot')}}" class="pull-right f-c-d-greay f-s-14">Forgot Password?</a>
          </div>

        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
  </section>



@endsection

@section('js_script')
    @include('../partials/mixpanel')
    @include('../partials/segment')
  <script src="{{asset('js/validate.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        const customer_id = $('#mixpanel_customer_id').val();
        console.log('mixpanel customer id', customer_id);
        if (customer_id) {
            console.log('if customer id', customer_id);
            mixpanel.identify(customer_id);
            analytics.identify(customer_id);
        }

      // $("#form_login").validate({
      //   rules:
      //     {
      //       email: {required: true, email: true},
      //       password: {required: true},
      //     },
      //   messages:
      //     {
      //       email: {required: "Enter email address", email: "Your email must be in the format of name@domain.com"},
      //       password: {required: "Enter your password"},
      //     },
      // });

      let queryParam = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

      if (queryParam.length === 4) {
        localStorage.myaccount_utm_campaign = queryParam[1].split('=')[1];
        localStorage.myaccount_utm_medium = queryParam[2].split('=')[1];
        localStorage.myaccount_utm_source = queryParam[3].split('=')[1];
        localStorage.myaccount_gcl_id = queryParam[4].split('=')[1];
        localStorage.myaccount_referer = queryParam[5].split('=')[1];
      }

    });
    $(document).ready(function () {
      // $("footer").hide();
    })
  </script>
@endsection
