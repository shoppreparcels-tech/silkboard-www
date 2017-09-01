@extends('admin.layout')

@section('content')

  <div class="login-page">
    <div class="login-form-box z-depth-1">
      <img src="{{asset('admin_asset/images/logo.png')}}" class="logo">
      <h3>Login to admin account</h3>
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