<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
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

  @yield('content')

  <script src="{{asset('admin_asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/materialize.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/script.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin_asset/js/isotope.js')}}"></script>
  <script src="{{asset('admin_asset/js/datetimepicker.min.js')}}"></script>
  @yield('js_script')
</body>
</html>