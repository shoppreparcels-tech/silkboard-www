@extends('layout')

@section('title', '- Customer Registration')

@section('content')

    <section class="register">
      <div class="container">
        <div class="row">
          <div class="register-blox">
            <h3>SIGN UP WITH</h3>
            <div class="text-center">
              <div class="login-social">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                <a href="#" class="google"><span>Google Plus</span><i class="fa fa-google-plus"></i></a>
              </div>
            </div>
            <span class="or_separate">OR</span>
            <h3>CREATE AN ACCOUNT</h3>
            <form class="register-form" role="form" method="POST" action="{{ route('customer.register.submit') }}">
              {{ csrf_field() }}
              <div class="col-sm-6">
              <div class="row">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"> 
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="First Name *" required autofocus>
                  </div>
                  @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              </div>
              <div class="col-sm-6">
              <div class="row">
                <div class="form-group"> 
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control" placeholder="Last Name *" required>
                  </div>
                </div>
              </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                  <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email *" required>
                </div>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                  <input type="password" class="form-control" placeholder="Password *" name="password" required>
                </div>
                @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                  <input type="password" class="form-control" placeholder="Reconfirm Password *"  name="password_confirmation" required>
                </div>
                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group"> 
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                  <input type="text" class="form-control" placeholder="Referral Code(Optional)" required>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-shoppre btn-block">Sign Up</button>
              </div>
            </form>
            <span class="register-bttm">Already a member? <a href="#">Sign in</a> here!</span>
          </div>
        </div>
      </div>
    </section>

@endsection