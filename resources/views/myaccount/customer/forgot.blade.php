@extends('myaccount.layout')

@section('title', 'ShoppRe - Forgot Password')

@section('css_style')
    <meta name="robots" content="noindex,noodp,noydir,follow,noarchive,nosnippet" />

@endsection

@section('content')

<section class="login">
  <div class="container">
    <div class="row">
      <div class="login-blox">
        <h3>Reset Shoppre Account Password</h3>
        @if (session('error'))
            <div class="alert alert-danger"> {{ session('error') }} </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
        @endif
        <div class="col-sm-12">
             <form class="form-horizontal" role="form" method="POST" action="{{ route('customer.forgot.submit') }}">
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
                <div class="form-group"><button type="submit" class="btn btn-block btn-shoppre">Send Password Reset Link</button></div>
            </form>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>

@endsection
