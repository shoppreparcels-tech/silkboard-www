@extends('myaccount.layout')

@section('title', '- Change Password')

@section('content')


<section class="login">
  <div class="container">
    <div class="row">
      <div class="login-blox">
        <h3>Change Password</h3>
        @if (session('error'))
            <div class="alert alert-danger"> {{ session('error') }} </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
        @endif
        <div class="col-sm-12">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('customer.reset.submit') }}" id="form_reset">
              {{ csrf_field() }}

              <input type="hidden" name="email" value="{{ $email }}">

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Change Password
                      </button>
                  </div>
              </div>
          </form>

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

    $.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "You can only insert alphabets");

    $.validator.addMethod("pwcheck", function(value) {
       return /^[A-Za-z0-9\d=!\-$#&%@._*]*$/.test(value) // consists of only these
          && /[a-z]/.test(value) // has a lowercase letter
          && /\d/.test(value) // has a digit
    });

    $( "#form_reset" ).validate({
      rules:
          {
            password: {required: true, minlength:8, pwcheck: true},
            password_confirmation: {required: true, equalTo: "input[name='password']"}
          },
          messages:
          {
              password: { required: "Please enter your password", pwcheck: "Please enter a strong password with alphabets and digits."},
              password_confirmation: { required: "Password confirmation required", equalTo: "Password confirmation not matching"},
          },
    });
  });
</script>
@endsection
