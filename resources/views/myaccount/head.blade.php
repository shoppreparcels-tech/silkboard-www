<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}" sizes="60x60">

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
    <link href="{{asset('css/custom/signup.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom/style-frame.css')}}" rel="stylesheet">

  <!-- One Signal -->
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  <script>
    if(localStorage.userinfo) {
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.sendTag("key",JSON.parse(localStorage.userinfo).id);
        OneSignal.init({
          appId: "b7792635-0674-4e60-bef9-66d31b818a92",
          allowLocalhostAsSecureOrigin: true,
          autoRegister: true,
          notifyButton: {
            enable: false,
          },
        });
      });
    }
  </script>

  <!-- End one signal -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NRL4B6X');</script>
    <!-- End Google Tag Manager -->
</head>
