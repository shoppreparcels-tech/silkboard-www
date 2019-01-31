@extends('myaccount.admin.layout')

@section('content')

  <div class="login-page">
    <div class="login-form-box z-depth-1">
      <img src="{{asset('admin_asset/images/logo.png')}}" class="logo">
      <h3>Login to admin account</h3>
      <div style="margin-top: 50%;">
      <p class="header6 p-color-cement" style="color: #444;font-size: 15px;letter-spacing: 0;line-height: 1.5;margin-bottom: 0px;">Login with</p>
      <a class="header4 p-color-white" style="text-decoration:none " href="{{route('customer.social.google', ['loginAs' =>'Admin'])}}">
        <center>
          <div class="btn-login-g" style="text-align: center; padding-top: 10px;background-color: #e85151;width: 260px;height: 40px;border-radius: 5px;border: 1px solid rgba(146, 156, 165, 0.2);">
            Google Plus
          </div>
        </center>
      </a>
        @if (session('error'))
          <div style="margin-top: 6%;" class="alert alert-danger text-center">
            {{ session('error') }}
          </div>
        @endif
      </div>
      <form method="post" action="{{route('admin.login.submit')}}">
        @if (session('message'))
            <div class="alert-box alert-info">{{ session('message') }}<a title=""  class="close" href="#">×</a></div>
        @endif
        {{csrf_field()}}
        <div class="input-field">
          <input type="text" id="username" name="username" value="{{ old('username') }}">
          <label for="username">Username</label>
          @if ($errors->has('username'))
            <span class="error">{{ $errors->first('username') }}</span>
          @endif
        </div>
        <div class="input-field">
          <input type="password" id="password" name="password">
          <label for="password">Password</label>
          @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <div class="input-field">
          <input type="checkbox" id="remember">
          <label for="remember">Remember Me!</label>
        </div>
        <button class="btn waves-effect waves-light red" type="submit">Sign In</button>
      </form>
    </div>
  </div>

@endsection
