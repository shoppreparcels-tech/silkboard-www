<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">
    <link href="{{asset('css/txtProgress.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('css/print.css')}}" rel="stylesheet">
    @yield('css_style')

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="publisher" href="https://plus.google.com/101070316798366909776/">
    <meta name="google-play-app" content="app-id=com.shoppre.play" />
    <meta property="fb:app_id" content="1819630241632764" />
    <meta property="al:android:url" content="https://www.shoppre.com/" />
    <meta property="al:android:package" content="com.shoppre.play" />
    <meta property="al:android:app_name" content="Shoppre - International Shipping from India" />
    <meta name="msvalidate.01" content="0E25F147AD9B658B4418A996E97D0D7D"/>
    
@yield('schema_markup')
<!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NRL4B6X');</script>
    <!-- End Google Tag Manager -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRL4B6X"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<script>
    if (!localStorage.referer) {
        localStorage.referer = "<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'no-referrer'  ?>";
        localStorage.firstVisit = window.location.href;
    }
</script>
@include('partials._header')
<div class="container">
    <!-- Trigger the modal with a button -->
    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="btnClosePopup" class="close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="login-content">
                        <h3 class="head-tag">Log in to Shoppre Account</h3>
                        <div class="text-center">
                            <div class="login-social">
                                <a href="https://myaccount.shoppre.com/social/oauth/facebook" class="facebook"><i
                                            class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="https://myaccount.shoppre.com/social/oauth/google"
                                   class="google"><span>Google Plus</span><i
                                            class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form class="login-form" role="form" method="POST" action="{{route('homeLogin')}}"
                                  novalidate="novalidate">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group ">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control valid"
                                           placeholder="Enter your email address"
                                           name="email_id"
                                           value="" required="" autofocus="" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group ">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control valid" placeholder="Enter your password"
                                           name="l_password"
                                           required="" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember_me">
                                        <span class="label">Remember Me <small>(Not recommended for public computers)</small></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-block btn-shoppre">Sign in to your account</button>
                            </form>
                            {{--<span class="login-bttm"><a href="https://myaccount.shoppre.com/forgot-password">Forgot my password. Please remind me.</a></span>--}}
                            <span class="login-bttm"><a href="javascript:void(0)"
                                                        id="btn_signup_popup">Not a member? Register</a></span>
                        </div>
                        <div class="col-sm-6">
                            @if(!empty($home_campaign->image))
                                <a class="class_pointer"
                                   href="{{route('campaignDetail',['cname'=>$home_campaign->slug,'eid'=>111])}}">
                                    <img src="/img/campaigns/{{$home_campaign->image}}">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="signup-content">
                        <h3 class="head-tag">SIGN UP WITH</h3>
                        <div class="text-center">
                            <div class="login-social">
                                <a href="https://myaccount.shoppre.com/social/oauth/facebook" class="facebook"><i
                                            class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="https://myaccount.shoppre.com/social/oauth/google" class="google"><span>Google Plus</span><i
                                            class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <span class="or_separate">OR</span>
                        <h3>CREATE AN ACCOUNT</h3>
                        <form class="register-form" role="form" method="POST"
                              action="{{route('homeSignup')}}" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="form-group ">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                                            <input type="text" class="form-control" name="firstname" value=""
                                                   placeholder="First Name *"
                                                   required="" autofocus="" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="form-group ">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                                            <input type="text" class="form-control" name="lastname" value=""
                                                   placeholder="Last Name *"
                                                   required="" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="text" class="form-control" name="email" value="" placeholder="Email *"
                                           required=""
                                           aria-required="true">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" class="form-control" placeholder="Password *" name="password"
                                           required=""
                                           aria-required="true">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" class="form-control" placeholder="Reconfirm Password *"
                                           name="password_confirmation" required="" aria-required="true">
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon"><i class="fa fa-tag"></i></div>--}}
                            {{--<input type="text" class="form-control" name="refferal"--}}
                            {{--placeholder="Referral Code (Optional)">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group content-padding">
                                <button type="submit" class="btn btn-shoppre btn-block">Sign Up</button>
                            </div>
                        </form>
                        <span class="register-bttm" id="btn_login_popup">Already a member? <a href="javascript:void(0)">Sign in</a> here!</span>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>

        </div>
    </div>
</div>

@yield('content')

@include('partials._footer')

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/txtProgress.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
<script src="{{asset('js/validate.min.js')}}"></script>

<script>
    $(document).ready(function () {

        $("#btnClosePopup").click(function () {
            localStorage.popupClose = "close";
            $('#myModal').modal('hide');
        });

        $("#btn_signup_popup").click(function () {
            $(".login-content").css("display", "none");
            $(".signup-content").css("display", "block");
        });

        $("#btn_login_popup").click(function () {
            $(".login-content").css("display", "block");
            $(".signup-content").css("display", "none");
        });

        if (!localStorage.popupClose) {
            var t = setTimeout(popupFunction, 6000);
        }

        function popupFunction() {
           localStorage.popupClose = "close";
            $('#myModal').modal('show');
        }
    });

</script>

<script type="text/javascript">
    $(document).ready(function () {
        var progress_val = $("#progress_val").val();
        $('.progress_bar').data("animated", false).textProgress(progress_val);
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.tooltipkey').tooltip({
            'html': true
        })
    })
</script>
<!-- li-Scroller -->
<script src="{{asset('js/liscroller.1.0.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
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
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=437389746641326&ev=PageView&noscript=1"/></noscript>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    @if(Auth::guard('customer')->check())
        Tawk_API.visitor = {
        name: '{{Auth::user()->name . ' - ' . Auth::user()->id}}',
        email: '{{Auth::user()->name}}'
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
    Tawk_API = Tawk_API || {};
    Tawk_API.onPrechatSubmit = function (data) {
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
            "data": {
                "email": data[1].answer,
                "username": data[1].answer,
                "name": data[0].answer,
                "body": data[3].answer,
                "tags": 'tawk',
                "company": "company1",
                "address": "address",
                "city": "city",
                "postal_code": "1234",
                "phone": data[2].answer,
                "team_id": SALES
            }
        };

        $.ajax(settings).done(function (response) {
            console.log('fff', response);
        });

        $.ajax({
            url: '/api/leads/signup',
            type: "POST",
            data: {
                referrer: referrer,
                first_visit: first_visit,
                first_name: data[0].answer,
                last_name: data[1].answer,
                email: data[2].answer,
                phone: data[3].answer
            },
            success: function (data) {
                console.log(data);
            }
        });
    };

</script>
<script>
    if (window.location.href == "https://www.shoppre.com/campaign/flyer/616") {
        if (!localStorage.newsUrlVisit) {
            console.log("News Enter");
            localStorage.newsUrlVisit = window.location.href;
            var coupon_news = "KOR-BLR-N";
            var url = window.location.href;
            storecustomer(localStorage.newsUrlVisit, coupon_news);
        }
    }

    function storecustomer(url, coupon) {
        $.ajax({
            url: '/api/campaign/newaspaper',
            type: "POST",
            data: {
                url: url,
                coupon: coupon
            },
            success: function (data){
                console.log(data);
            }
        });
    }

</script>
@yield('js_script')
</body>
</html>
