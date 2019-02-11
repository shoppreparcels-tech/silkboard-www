<!DOCTYPE html>
<html lang="en" ng-app="shoppre" ng-controller="IndexController">
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

    <!-- Style -->

    <link rel="manifest" href="/manifest.json"/>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">

    <link href="{{env('AWS_CLOUD_FRONT')}}/css/txtProgress.min.css" rel="stylesheet">
    <link href="{{env('AWS_CLOUD_FRONT')}}/css/algolia.css" rel="stylesheet">
    {{--<link href="{{env('AWS_CLOUD_FRONT')}}/css/custom/style1.css" rel="stylesheet">--}}
    {{--<link href="{{env('AWS_CLOUD_FRONT')}}/css/custom/print.css" rel="stylesheet">--}}
    <script src="{{env('AWS_CLOUD_FRONT')}}/js/jquery.min.js"></script>
    <script src="{{asset('js/jquery.ajax-cross-origin.min.js')}}"></script>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom/New_style.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    {{--<link rel="stylesheet" href="{{asset('css/select2.min.css')}}" >--}}
    {{--<link rel="stylesheet" href="{{asset('css/star-rating.min.css')}}" >--}}

    <link rel="stylesheet" href="{{asset('css/custom/ics.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/ifs.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/offers.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/diwali.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/stores-new.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/style.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/faq.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/style-frame.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/custom/signup.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">

    <link rel="stylesheet" href="{{asset('css/demo.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?> ">


    {{--<link rel="stylesheet" href="https://d2njzkuk16ywue.cloudfront.net/cdn/css/bootstrap.min.css" >--}}
    <link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/select2.min.css">
    <link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/star-rating.min.css">


    @yield('css_style')
    <style>
        .btn-reg-popup {background-color: rgb(255, 255, 255);padding: 10px 20px;margin-top: 50px;color: rgb(74, 144, 226);border-radius: 30px;}
        .modal-pop{top:170px;border-radius: 10px!important;}
        .modal-pop-content{background-color: #507dbc;}
        .modal-pop-content .no-padding p{color: rgb(255, 214, 146);font-size: 16px}
    </style>
    <link rel="publisher" href="https://plus.google.com/101070316798366909776/">
    <meta name="google-play-app" content="app-id=com.shoppre.play"/>
    <meta property="fb:app_id" content="1819630241632764"/>
    <meta property="al:android:url" content="https://www.shoppre.com/"/>
    <meta property="al:android:package" content="com.shoppre.play"/>
    <meta property="al:android:app_name" content="Shoppre - International Shipping from India"/>
    <meta name="msvalidate.01" content="0E25F147AD9B658B4418A996E97D0D7D"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">


@yield('schema_markup')

<!--mailchimp RM-->
    <script id="mcjs">!function (c, h, i, m, p) {
            m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
        }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/8f7212d51aa9533c4788ccf05/2a914120f0c71f0c8738d91cf.js");</script>
    <!--mailchimp RM-->
    <!-- One Signal -->
    {{--<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>--}}
    {{--<script>--}}
        {{--if (localStorage.userinfo) {--}}
            {{--var OneSignal = window.OneSignal || [];--}}
            {{--OneSignal.push(function () {--}}
                {{--OneSignal.sendTag("key", JSON.parse(localStorage.userinfo).id);--}}
                {{--OneSignal.init({--}}
                    {{--appId: "b7792635-0674-4e60-bef9-66d31b818a92",--}}
                    {{--allowLocalhostAsSecureOrigin: true,--}}
                    {{--autoRegister: true,--}}
                    {{--notifyButton: {--}}
                        {{--enable: false,--}}
                    {{--},--}}
                {{--});--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}

    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "16b3fb8b-ebf8-4bcf-8f46-b8e124634065",
            });
        });
    </script>
<!-- End one signal -->

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
<body class="body">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRL4B6X"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
    if (!localStorage.referer) {
        localStorage.referer = "<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'no-referrer'  ?>";
        localStorage.first_visit = window.location.href;
    }
    if (window.location.href.indexOf('?') !== -1 ) {
        let queryParam = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        console.log('query param', queryParam);
        if (queryParam.length === 4) {
            if (!localStorage.utm_campaign && queryParam[0].split('=')[0] === 'utm_campaign') {
                localStorage.utm_campaign = queryParam[0].split('=')[1];
            }
            if (!localStorage.utm_source && queryParam[1].split('=')[0] === 'utm_source') {
                localStorage.utm_source = queryParam[1].split('=')[1];
            }
            if (!localStorage.utm_medium && queryParam[2].split('=')[0] === 'utm_medium') {
                localStorage.utm_medium = queryParam[2].split('=')[1];
            }
            if (!localStorage.gcl_id && queryParam[3].split('=')[0] === 'gclid') {
                localStorage.gcl_id = queryParam[3].split('=')[1];
            }
        }
    }
</script>
@include('partials._header')
<div class="container">
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p class="header1 p-color-cement-dark">Thank you for Subscribing!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

@yield('content')

@include('partials._footer')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>

<script src="{{asset('js/utils.js')}}"></script>
<script src="{{asset('js/intlTelInput.js')}}"></script>
<script src="{{asset('js/easyResponsiveTabs.js')}}"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/bootstrap.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/txtProgress.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/validate.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/angular.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/ui-bootstrap-tpls-2.5.0.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/star-rating.min.js" type="text/javascript"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/select2.min.js"></script>


<!-- Angular Script -->
<script>
    angular.module('shoppre', ['ui.bootstrap']);
    function IndexController($scope, $http) {
        $scope.Faqs = {
            select: function ($item) {
                window.location.href = '{{route("faq")}}';
            },
            get: function (search) {
                return $http
                    .get('/faq/search', {
                        params: {
                            q: search,
                        }
                    })
                    .then(function (response) {
                        console.log(response);
                        return response.data.questions;
                    });
            },
            noResults: false,
            loadingFaqs: false,
        };

        $scope.Store = {
            select: function ($item) {
                var href = ($item.name);
                window.open('https://' + href, '_blank');
            },
            get: function (search) {
                return $http
                    .get('/store/search', {
                        params: {
                            q: search,
                        }
                    })
                    .then(function (response) {
                        console.log(response);
                        return response.data.name;
                    });
            },
            noResults: false,
            loadingStore: false,
        };

    }


    angular.module('shoppre')
        .controller('IndexController', IndexController);

</script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('#myModal-offer').modal('show');
    });
</script>
<script type="text/javascript">
    jQuery(function () {
        jQuery("a.bla-1").YouTubePopUp();
        jQuery("a.bla-2").YouTubePopUp({autoplay: 0}); // Disable autoplay
    });
</script>
<script>
    (function ($) {
        $.fn.YouTubePopUp = function (options) {
            var YouTubePopUpOptions = $.extend({
                autoplay: 1
            }, options);

            $(this).on('click', function (e) {
                var youtubeLink = $(this).attr("href");
                if (youtubeLink.match(/(youtube.com)/)) {
                    var split_c = "v=";
                    var split_n = 1;
                }
                if (youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(vimeo.com\/)+[0-9]/)) {
                    var split_c = "/";
                    var split_n = 3;
                }
                if (youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/)) {
                    var split_c = "/";
                    var split_n = 5;
                }

                var getYouTubeVideoID = youtubeLink.split(split_c)[split_n];
                var cleanVideoID = getYouTubeVideoID.replace(/(&)+(.*)/, "");
                if (youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(youtube.com)/)) {
                    var videoEmbedLink = "https://www.youtube.com/embed/" + cleanVideoID + "?autoplay=" + YouTubePopUpOptions.autoplay + "";
                }
                if (youtubeLink.match(/(vimeo.com\/)+[0-9]/) || youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/)) {
                    var videoEmbedLink = "https://player.vimeo.com/video/" + cleanVideoID + "?autoplay=" + YouTubePopUpOptions.autoplay + "";
                }

                $("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation">' +
                    '<div class="YouTubePopUp-Content">' +
                    '<span class="YouTubePopUp-Close">' +
                    '</span><iframe src="' + videoEmbedLink + '" allowfullscreen>' +
                    '</iframe>' +
                    '</div>' +
                    '</div>');

                if ($('.YouTubePopUp-Wrap').hasClass('YouTubePopUp-animation')) {
                    setTimeout(function () {
                        $('.YouTubePopUp-Wrap').removeClass("YouTubePopUp-animation");
                    }, 600);
                }

                $(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click(function () {
                    $(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue(function () {
                        $(this).remove();
                    });
                });

                e.preventDefault();

            });
            $(document).keyup(function (e) {

                if (e.keyCode == 27) {
                    $('.YouTubePopUp-Wrap, .YouTubePopUp-Close').click();
                }

            });

        };

    }(jQuery));

</script>
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
            // var t = setTimeout(popupFunction, 6000);
        }

        function popupFunction() {
            localStorage.popupClose = "close";
            $('#myModal').modal('show');
        }
    });

</script>
<script>
    $(document).ready(function () {
        $('.inc-value').click(function () {
            var x = parseFloat($(this).parent().find('input[type="text"]').val());
            x = x + 0.5;
            if (x > 100) {
                $(this).parent().find('input[type="text"]').attr('disabled', true);
            }
            else {
                $(this).parent().find('input[type="text"]').val(x);
            }
        });

        $('.dec-value').click(function () {
            $(this).parent().find('input[type="text"]').attr('disabled', false);
            var x = parseFloat($(this).parent().find('input[type="text"]').val());
            x = x - 0.5;
            if (x < 0) {
                $(this).parent().find('input[type="text"]').attr('disabled', true);
            }
            else {
                $(this).parent().find('input[type="text"]').val(x);
            }
        });
    });

    {{--let utm_campaign = localStorage.utm_campaign;--}}
    {{--let utm_source = localStorage.utm_source;--}}
    {{--let utm_medium = localStorage.utm_medium;--}}
    {{--let gcl_id = localStorage.gcl_id;--}}
    {{--let loginUrl = '{{route('customer.login')}}?src=menu&utm_campaign='+utm_campaign+'&utm_medium='+utm_medium+'&utm_source='+utm_source+'&gcl_id='+gcl_id+'&referer='+localStorage.referer;--}}
    {{--let registerUrl = '{{ route('customer.register')}}?src=menu&utm_campaign='+utm_campaign+'&utm_medium='+utm_medium+'&utm_source='+utm_source+'&gcl_id='+gcl_id+'&referer='+localStorage.referer;--}}
    {{--let loginUrl = '{{route('customer.login')}}';--}}
    {{--let registerUrl = '{{ route('customer.register')}}';--}}
    {{--$('#btn_login').attr('href', loginUrl);--}}
    {{--$('#btn_register').attr('href', registerUrl);--}}

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

{{--<!-- Facebook Pixel Code -->--}}
{{--<script>--}}
{{--!function (f, b, e, v, n, t, s) {--}}
{{--if (f.fbq) return;--}}
{{--n = f.fbq = function () {--}}
{{--n.callMethod ?--}}
{{--n.callMethod.apply(n, arguments) : n.queue.push(arguments)--}}
{{--};--}}
{{--if (!f._fbq) f._fbq = n;--}}
{{--n.push = n;--}}
{{--n.loaded = !0;--}}
{{--n.version = '2.0';--}}
{{--n.queue = [];--}}
{{--t = b.createElement(e);--}}
{{--t.async = !0;--}}
{{--t.src = v;--}}
{{--s = b.getElementsByTagName(e)[0];--}}
{{--s.parentNode.insertBefore(t, s)--}}
{{--}(window,--}}
{{--document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');--}}
{{--fbq('init', '437389746641326'); // Insert your pixel ID here.--}}
{{--fbq('track', 'PageView');--}}
{{--</script>--}}
{{--<noscript><img height="1" width="1" style="display:none"--}}
{{--src="https://www.facebook.com/tr?id=437389746641326&ev=PageView&noscript=1"/></noscript>--}}
{{--<!-- Load Facebook SDK for JavaScript -->--}}
{{--<div id="fb-root"></div>--}}
{{--<script>(function(d, s, id) {--}}
{{--var js, fjs = d.getElementsByTagName(s)[0];--}}
{{--if (d.getElementById(id)) return;--}}
{{--js = d.createElement(s); js.id = id;--}}
{{--js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';--}}
{{--fjs.parentNode.insertBefore(js, fjs);--}}
{{--}(document, 'script', 'facebook-jssdk'));</script>--}}

{{--<!-- Your customer chat code -->--}}
{{--<div class="fb-customerchat"--}}
{{--attribution="setup_tool"--}}
{{--page_id="1819630241632764">--}}
{{--</div>--}}


<!--Start of Tawk.to Script-->
{{--<script type="text/javascript">--}}
{{--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--(function(){--}}
{{--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--s1.async=true;--}}
{{--s1.src='https://embed.tawk.to/58dab24ff97dd14875f5a8a9/default';--}}
{{--s1.charset='UTF-8';--}}
{{--s1.setAttribute('crossorigin','*');--}}
{{--s0.parentNode.insertBefore(s1,s0);--}}
{{--})();--}}
{{--</script>--}}
<!--End of Tawk.to Script-->

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 10584982;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<noscript>
    <a href="https://www.livechatinc.com/chat-with/10584982/" rel="nofollow">Chat with us</a>,
    powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->

{{--<!-- Start of shoppre-international-shipping-courier Zendesk Widget script -->--}}
{{--<script>/*<![CDATA[*/--}}
    {{--window.zE || (function (e, t, s) {--}}
        {{--var n = window.zE = window.zEmbed = function () {--}}
            {{--n._.push(arguments)--}}
        {{--}, a = n.s = e.createElement(t), r = e.getElementsByTagName(t)[0];--}}
        {{--n.set = function (e) {--}}
            {{--n.set._.push(e)--}}
        {{--}, n._ = [], n.set._ = [], a.async = true, a.setAttribute("charset", "utf-8"), a.src = "https://static.zdassets.com/ekr/asset_composer.js?key=" + s, n.t = +new Date, a.type = "text/javascript", r.parentNode.insertBefore(a, r)--}}
    {{--})(document, "script", "2ab4b736-3ac8-4f95-8b6f-e2c9d6325182");--}}
    {{--/*]]>*/</script>--}}
{{--<!-- Zendex form autofill if user is login -->--}}
{{--<script type="text/javascript">--}}
    {{--if (localStorage.userinfo) {--}}
        {{--user = JSON.parse(localStorage.userinfo);--}}
        {{--zE(function () {--}}
            {{--zE.identify({--}}
                {{--name: user.name,--}}
                {{--email: user.email,--}}
                {{--organization: ' '--}}
            {{--});--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}

{{--<!-- End of shoppre-international-shipping-courier Zendesk Widget script -->--}}
<script>
    if (window.location.href == "https://www.shoppre.com/campaign/flyer/616") {
        if (!localStorage.newsUrlVisit) {
            // console.log("News Enter");
            localStorage.newsUrlVisit = window.location.href;
            // var coupon_news = "KOR-BLR-N";
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
            success: function (data) {
                console.log(data);
            }
        });
    }

</script>
<script type="text/JavaScript">
    window.zESettings = {
        webWidget: {
            position: {
                horizontal: 'right',
                vertical: 'bottom'
            }
        }
    };
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //rotation speed and timer
        var speed = 5000;
        var run = setInterval(rotate, speed);
        var slides = $('.slide');
        var container = $('#slides ul');
        var elm = container.find(':first-child').prop("tagName");
        var item_width = container.width();
        var previous = 'prev'; //id of previous button
        var next = 'next'; //id of next button
        slides.width(item_width); //set the slides to the correct pixel width
        container.parent().width(item_width);
        container.width(slides.length * item_width); //set the slides container to the correct total width
        container.find(elm + ':first').before(container.find(elm + ':last'));
        resetSlides();
        //if user clicked on prev button
        $('#buttons a').click(function (e) {
            //slide the item
            if (container.is(':animated')) {
                return false;
            }
            if (e.target.id == previous) {
                container.stop().animate({
                    'left': 0
                }, 1500, function () {
                    container.find(elm + ':first').before(container.find(elm + ':last'));
                    resetSlides();
                });
            }

            if (e.target.id == next) {
                container.stop().animate({
                    'left': item_width * -2
                }, 1500, function () {
                    container.find(elm + ':last').after(container.find(elm + ':first'));
                    resetSlides();
                });
            }

            //cancel the link behavior
            return false;

        });

        //if mouse hover, pause the auto rotation, otherwise rotate it
        container.parent().mouseenter(function () {
            clearInterval(run);
        }).mouseleave(function () {
            run = setInterval(rotate, speed);
        });


        function resetSlides() {
            //and adjust the container so current is in the frame
            container.css({
                'left': -1 * item_width
            });
        }

    });
    //a simple function to click next link
    //a timer will call this function, and the rotation will begin

    function rotate() {
        $('#next').click();
    }
</script>

<script>
    $(".rated").rating({
        'size': 'xs',
        'min': 0,
        'max': 5,
        'step': 1,
        'displayOnly': true,
        'showClear': false,
        'showCaption': false
    });

    $("#input-rate").rating({
        'size': 'sm',
        'min': 0,
        'max': 5,
        'step': 1,
        'showClear': false,
        'showCaption': false
    });
</script>
<!-- Select2 -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".select2").select2();
    });
</script>


<script>
    $(document).ready(function () {
        $("#subscribe").validate({
            rules:
                {
                    email: {required: true}
                },
            messages:
                {
                    // email: {required: 'Please enter your email id'}
                },
            submitHandler: function (form) {
                debugger;
                var email = $("input[name='email']").val();
                var token = $('input[name=_token]').val();
                jQuery.ajax({
                    url: 'api/subscribe',
                    type: "POST",
                    data: {
                        _token: token,
                        email: email,
                    },
                    success: function (data) {
                        console.log(data);
                        $('#myModal').modal('show');
                        $('.txt-subscription').val('');
                    }
                })
            }
        });

    });
</script>
{{--this block is required --}}
{{--<script>--}}
{{--$(document).ready(function(){--}}
{{--$(".dropdown").hover(--}}
{{--function() {--}}
{{--$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");--}}
{{--$(this).toggleClass('open');--}}
{{--},--}}
{{--function() {--}}
{{--$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");--}}
{{--$(this).toggleClass('open');--}}
{{--}--}}
{{--);--}}
{{--});--}}
{{--</script>--}}
{{--this block is required --}}

<script>
    $(document).ready(function () {
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function () {
            if (isOpen == false) {
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function () {
            return false;
        });
        searchBox.mouseup(function () {
            return false;
        });
        $(document).mouseup(function () {
            if (isOpen == true) {
                $('.searchbox-icon').css('display', 'block');
                submitIcon.click();
                $('.searchbox-input').val('');
            }
        });
    });

    function buttonUp() {
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if (inputVal !== 0) {
            $('.searchbox-icon').css('display', 'block');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display', 'block');
        }
    }

    $(document).ready(function () {
        setInterval(function () {
            $('#offer').animate({Color: 'red'}, 300)
                .animate({Color: 'green'}, 300);
        }, 1000);

    });

    $(document).ready(function () {
        $('#packing').mouseover(function () {
            $("#packing").css({"display": "none"});
            $("#packed").css({"display": "block"});
        });
        $("#packed").mouseout(function () {
            $("#packing").css({"display": "block" ,"transition":"0.2s"});
            $("#packed").css({"display": "none"});
        })
    })

</script>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4601740.js"></script>
<!-- End of HubSpot Embed Code -->
@yield('js_script')

</body>
</html>
