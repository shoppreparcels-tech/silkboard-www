<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    @if(Request::url() ==='https://www.shoppre.com/schedule-pickup/confirm' || Request::url() === 'https://www.shoppre.com/feedback/confirm')
    <meta name="robots" content="@yield('robots')"/> 
    @else
     <meta name="robots" content="noydir, noodp"/>
    @endif
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
    <meta name="msvalidate.01" content="0E25F147AD9B658B4418A996E97D0D7D" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NRL4B6X');</script>
    <!-- End Google Tag Manager -->

  </head>
  <body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRL4B6X"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

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
    <script type="text/javascript">
      $(function () {
        $('.tooltipkey').tooltip({
          'html' : true
        })
      })
    </script>
    <!-- li-Scroller -->
    <script src="{{asset('js/liscroller.1.0.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("ul#liticker").liScroll({travelocity: 0.05});
      });
    </script>
    
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '437389746641326'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=437389746641326&ev=PageView&noscript=1" /></noscript>

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        @if(Auth::guard('customer')->check())
            Tawk_API.visitor = { name  : '{{Auth::user()->name}}', email : '{{Auth::user()->email}}' };
        @endif
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/{{ Auth::guard('customer')->check() ? "59d72784c28eca75e4624678" : "58dab24ff97dd14875f5a8a9" }}/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>


    @yield('js_script')
  </body>
</html>
