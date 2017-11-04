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
                <a href="{{route('customer.social.facebook')}}" class="facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                <a href="{{route('customer.social.google')}}" class="google"><span>Google Plus</span><i class="fa fa-google-plus"></i></a>
              </div>
            </div>
            <span class="or_separate">OR</span>
            <h3>CREATE AN ACCOUNT</h3>
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif
            <form class="register-form" id="form_register" role="form" method="POST" action="{{ route('customer.register.submit') }}">
              {{ csrf_field() }}
              <div class="col-sm-6">
              <div class="row">
                <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="First Name *" required autofocus>
                  </div>
                  @if ($errors->has('firstname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              </div>
              <div class="col-sm-6">
              <div class="row">
                <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}"> 
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name *" required>
                  </div>
                  @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                  @endif
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
                  <input type="text" class="form-control" name="refferal" placeholder="Referral Code (Optional)">
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


@section('js_script')
<script src="{{asset('js/validate.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "You can only insert alphabets");

    $.validator.addMethod("pwcheck", function(value) {
       return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
          && /[A-Z]/.test(value)
          && /[a-z]/.test(value) // has a lowercase letter
          && /\d/.test(value) // has a digit
    });

    $( "#form_register" ).validate({
      rules:
          {
              firstname:{required: true, alpha: true},
              lastname: {required: true},
              email: {required: true, email:true},
              password: {required: true, minlength:8, pwcheck: true},
              password_confirmation: {required: true, equalTo: "input[name='password']"}
          },
          messages: 
          {
              firstname: { required: "Your firstname required"},
              lastname: { required: "Your lastname required"},
              email: { required: "Please enter email address", email: "Your email address must be in the format of name@domain.com"},
              password: { required: "Please enter your password", pwcheck: "Please enter a strong password with uppercase and lowercase letters and digits."},
              password_confirmation: { required: "Password confirmation required", equalTo: "Password confirmation not matching"},
          },
    });
  });
</script>
@endsection