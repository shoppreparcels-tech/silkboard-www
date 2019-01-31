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
  <!-- <div class="loader-container circle-pulse-multiple">
    <div class="page-loader">
      <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
      </div>
    </div>
  </div> -->

  @if(Auth::guard('admin')->check())
    @include('myaccount.admin.partials._topbar')
    @include('myaccount.admin.partials._sidebar')
  @endif

  @yield('content')

  {{--<script type="text/javascript">--}}
    {{--window.addEventListener( "pageshow", function ( event ) {--}}
      {{--var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );--}}
      {{--if ( historyTraversal ) {--}}
        {{--// Handle page restore.--}}
        {{--window.location.reload();--}}
      {{--}--}}
    {{--});--}}

    {{--setInterval(function() {--}}
      {{--window.location.reload();--}}
    {{--}, 10*60000);--}}
  {{--</script>--}}

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
  <script src="{{asset('admin_asset/js/materialize.min.js')}}"></script>
  <script src="{{asset('admin_asset/js/script.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin_asset/js/isotope.js')}}"></script>
  <script src="{{asset('admin_asset/js/datetimepicker.min.js')}}"></script>
  <script src="{{asset('js/angular.min.js')}}"></script>
  <script src="{{asset('js/ui-bootstrap-tpls-2.5.0.min.js')}}"></script>
  <script>
    angular
        .module('shoppre', ['ui.bootstrap'])
        .config(function($interpolateProvider){
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
        })
        .controller('AppController',  function AppController () {});

    function IndexController ($scope, $http) {
      console.log('IndexController')
      $scope.Customers = {
        select: function($item) {
           return $http
            .get('/admin/get-package-count', {
              params: {
                customer_id: $item.id,
              }
            })
            .then(function (response) {
              console.log('Response', response);
              $scope.Customers.package_count = response.data.package_count;
              $scope.Customers.model = $item.locker;
              $scope.Customers.migrated = $item.is_migrated;
              $scope.Customers.id = $item.id;
            });
        },
        get: function (search) {
           console.log('IndexController: get')
          return $http
            .get('/admin/customers/search', {
              params: {
                q: search,
              }
            })
            .then(function (response) {
              console.log(response);
              return response.data.customers;
            });
        },
        noResults: false,
        loadingCustomers: false,
      };

      $scope.Stores = {
        select: function($item) {
          $scope.Stores.model = $item.name;
        },
        get: function (search) {
          return $http
            .get('/admin/stores/search', {
              params: {
                q: search,
              }
            })
            .then(function (response) {
              return response.data.stores;
            });
        },

        noResults: false,
        loadingStores: false,
      };
    }

    angular.module('shoppre')
      .controller('IndexController', IndexController);

  </script>
  @yield('js_script')
</body>
</html>
