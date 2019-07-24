<!DOCTYPE html>
<html lang="en" ng-app="shoppre" ng-controller="AppController">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>{{Auth::guard('customer')->check() ? 'Dashboard': "Welcome"}} - Shoppre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Styles -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129298696-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129298696-1');
</script>
    @if(Auth::guard('admin')->check())
    @include('myaccount.admin.partials._topbar')
    @include('myaccount.admin.partials._sidebar')
  @endif

  @yield('content')
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/materialize.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/script.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin_asset/js/isotope.js')}}"></script>
  <script src="{{asset('admin_asset/js/datetimepicker.min.js')}}"></script>
  <script src="{{asset('js/angular.min.js')}}"></script>
  <script src="{{asset('js/ui-bootstrap-tpls-2.5.0.min.js')}}"></script>
  <script>
      function IndexController(o,e){console.log("IndexController"),o.Customers={select:function(t){return e.get("/admin/get-package-count",{params:{customer_id:t.id}}).then(function(e){console.log("Response",e),o.Customers.package_count=e.data.package_count,o.Customers.model=t.locker,o.Customers.migrated=t.is_migrated,o.Customers.id=t.id})},get:function(o){return console.log("IndexController: get"),e.get("/admin/customers/search",{params:{q:o}}).then(function(o){return console.log(o),o.data.customers})},noResults:!1,loadingCustomers:!1},o.Stores={select:function(e){o.Stores.model=e.name},get:function(o){return e.get("/admin/stores/search",{params:{q:o}}).then(function(o){return o.data.stores})},noResults:!1,loadingStores:!1}}angular.module("shoppre",["ui.bootstrap"]).config(function(o){o.startSymbol("<%"),o.endSymbol("%>")}).controller("AppController",function(){}),angular.module("shoppre").controller("IndexController",IndexController);
  </script>
  @yield('js_script')
</body>
</html>
