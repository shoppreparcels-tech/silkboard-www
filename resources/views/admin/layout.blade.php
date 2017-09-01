<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Admin Template - Shoppre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/materialize.min.css')}}" />
  <link rel="stylesheet" href="{{asset('admin_asset/css/icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/style.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/responsive.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/color.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/datetimepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/custom.css')}}" />
  @yield('css_style')
</head>
<body>
  <div class="loader-container circle-pulse-multiple">
    <div class="page-loader">
      <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
      </div>
    </div>
  </div>

  @if(Auth::guard('admin')->check())
    @include('admin.partials._topbar')
    @include('admin.partials._sidebar')
  @endif

  @yield('content')

  <script src="{{asset('admin_asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/materialize.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/script.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin_asset/js/isotope.js')}}"></script>
  <script src="{{asset('admin_asset/js/datetimepicker.min.js')}}"></script>
  @yield('js_script')
</body>
</html>