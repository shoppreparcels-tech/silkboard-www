<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    @if(Request::url() ==='https://www.shoppre.com/schedule-pickup/confirm' || Request::url() === 'https://www.shoppre.com/feedback/confirm' || Request::url() === 'https://www.shoppre.com/chat-email' || Request::url() === 'https://www.shoppre.com/chat-email/confirm' || Request::url() === 'https://www.shoppre.com/shipments' || Request::url() === 'https://www.shoppre.com/offer'|| Request::url() === 'https://www.shoppre.com/newsoffer')
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
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Progress Circle -->
    <link href="{{asset('css/txtProgress.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('css/print.css')}}" rel="stylesheet">
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


     <script>
      if(!localStorage.referer) {
          localStorage.referer =  "<?php echo isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : 'no-referrer'  ?>";
          localStorage.firstVisit = window.location.href;
      }
     </script>


    @include('partials._header')


    @yield('content')


    @include('partials._footer')

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/txtProgress.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
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
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
      var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
      @if(Auth::guard('customer')->check())
          Tawk_API.visitor = {
          name  : '{{Auth::user()->name . ' - ' . Auth::user()->id}}',
          email : '{{Auth::user()->name}}'
      };
      @endif;
      (function () {
          var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
          s1.async = true;
          s1.src = 'https://embed.tawk.to/{{ Auth::guard('customer')->check() ? "59d72784c28eca75e4624678" : "58dab24ff97dd14875f5a8a9" }}/default';
          s1.charset = 'UTF-8';
          s1.setAttribute('crossorigin', '*');
          s0.parentNode.insertBefore(s1, s0);
      })();
  </script>
  <!--End of Tawk.to Script-->
  <script>
      Tawk_API = Tawk_API || {}; Tawk_API.onPrechatSubmit = function(data){
          var referrer = localStorage.referer;
          var first_visit = localStorage.firstVisit;
                  console.log(data);
                  var SALES = 1;
                  var settings = {
                      "async": true,
                      "crossDomain": true,
                      "url": "https://leads.shoppre.com/api/leads",
                      "method": "POST",
                      "headers": {
                          "token": "230958jdfsdf89ujie",
                          "content-type": "application/x-www-form-urlencoded",
                          "cache-control": "no-cache"
                      },
                      "data":{
                          "email":data[1].answer,
                          "username": data[1].answer,
                          "name": data[0].answer,
                          "body": data[3].answer,
                          "tags": 'tawk',
                          "company": "company1",
                          "address": "address",
                          "city": "city",
                          "postal_code": "1234",
                          "phone":data[2].answer,
                          "team_id": SALES
                      }
                  };

                  $.ajax(settings).done(function (response) {
                      console.log('fff',response);
                  });
      };
  </script>
  <script>
      if(window.location.href == "https://www.shoppre.com/offer" || window.location.href == "https://www.shoppre.com/newsoffer")
      {
          if(!localStorage.newsUrlVisit && window.location.href == "https://www.shoppre.com/newsoffer")
          {
              console.log("News Enter");
              var newsUser =  "New User";
              localStorage.newsUrlVisit = window.location.href;
              var coupon_news = "KOR-BLR-N";
              storecustomer(newsUser,localStorage.newsUrlVisit,coupon_news);
          }
          else if(!localStorage.airUrlVisit && window.location.href == "https://www.shoppre.com/offer")
          {
              console.log("Airport Enter");
              var airUser =  "New User";
              localStorage.airUrlVisit = window.location.href;
              var coupon_air = "KOR-BLR-A";
              storecustomer(airUser,localStorage.airUrlVisit,coupon_air);
          }
      }

      function storecustomer(user,url,coupon) {
          $.ajax({
              url: '/api/offers',
              type: "POST",
              data: {
                  username: user,
                  url:url,
                  coupon: coupon
              },
              success: function (data) {
                  console.log(data);
              }
          });
      }
  </script>
    @yield('js_script')
  </body>
</html>
