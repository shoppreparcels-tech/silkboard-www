<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="shoppre" />
    <meta name="description" content="Shop online from India. Ship Worldwide." />
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
      <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}" sizes="60x60">
    <title>Shoppre @yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Progress Circle -->
    <link href="{{asset('css/txtProgress.min.css')}}" rel="stylesheet">
    @yield('css_style')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
  </head>
  <body>

    @include('partials._header')
    

    @yield('content')


    @include('partials._footer')

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/txtProgress.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var progress_val = $("#progress_val").val();
        $('.progress_bar').data("animated", false).textProgress(progress_val);
      });
    </script>
    @yield('js_script')
  </body>
</html>