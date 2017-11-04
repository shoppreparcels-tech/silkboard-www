@extends('layout')

@section('title', '- Customer Login')

@section('content')

<section class="login">
  <div class="container">
    <div class="row">
      <div class="login-blox">
        <h3>Log in to Shoppre Account</h3>
        <div class="text-center">
          <div class="login-social">
            <a href="{{route('customer.social.facebook')}}" class="facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
            <a href="{{route('customer.social.google')}}" class="google"><span>Google Plus</span><i class="fa fa-google-plus"></i></a>
          </div>
        </div>
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
        <div class="col-sm-6">
          <form class="login-form" id="form_login" role="form" method="POST" action="{{ route('customer.login.submit') }}">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              <label for="">Email</label>
              <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
              <label for="">Password</label>
              <input type="password" class="form-control" placeholder="Enter your password"  name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="label">Remember Me <small>(Not recommended for public computers)</small></span>
              </label>
            </div>
            <button type="submit" class="btn btn-block btn-shoppre">Sign in to your account</button>
          </form>
          <span class="login-bttm"><a href="{{route('customer.forgot')}}">Forgot my password. Please remind me.</a></span>
          <span class="login-bttm"><a href="{{route('customer.register')}}">Not a member? Register</a></span>
        </div>
        <div class="col-sm-6 text-center">
            <img src="{{asset('img/refer-a-friend.png')}}">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('js_script')
<script src="{{asset('js/validate.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $( "#form_login" ).validate({
      rules:
          {
              email: {required: true, email:true},
              password: {required: true},
          },
          messages: 
          {
              email: { required: "Enter email address", email: "Your email must be in the format of name@domain.com"},
              password: { required: "Enter your password"},
          },
    });
  });
</script>
@endsection