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

    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#361d69">

    <!-- Style -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="manifest" href="/manifest.json"/>
    <link href="{{env('AWS_CLOUD_FRONT')}}/css/txtProgress.min.css" rel="stylesheet">
    <script src="{{env('AWS_CLOUD_FRONT')}}/js/jquery.min.js"></script>
    {{--    <script src="{{asset('js/jquery.ajax-cross-origin.min.js')}}"></script>--}}

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom/New_style.css')}}?v={{Config::get('app.last_commit_hash')}}">

    <link rel="stylesheet" href="{{asset('css/custom/style.css')}}?{{Config::get('app.last_commit_hash')}}">
    <link rel="stylesheet" href="{{asset('css/custom/success_popup.css')}}?{{Config::get('app.last_commit_hash')}}">
    <link rel="stylesheet" href="{{asset('css/landing-page.css')}}?{{Config::get('app.last_commit_hash')}}">
    <link rel="stylesheet" href="{{asset('css/custom/style-frame.css')}}?{{Config::get('app.last_commit_hash')}}">
    {{--<link rel="stylesheet" href="{{asset('css/custom/signup.css')}}?{{Config::get('app.last_commit_hash')}}">--}}
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
{{--    <link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/select2.min.css">--}}
{{--    <link rel="stylesheet" href="{{asset('/css/select2.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('/css/select2.min.css')}}">

    {{--<link rel="stylesheet" href="{{env('AWS_CLOUD_FRONT')}}/css/star-rating.min.css">--}}


    @yield('css_style')
    <style>
        .btn-reg-popup {background-color: rgb(255, 255, 255);padding: 10px 20px;margin-top: 50px;color: rgb(74, 144, 226);border-radius: 30px;}
        .modal-pop{top:170px;border-radius: 10px!important;}
        .modal-pop-content{background-color: #507dbc;}
        .modal-pop-content .no-padding p{color: rgb(255, 214, 146);font-size: 16px}
    </style>

    <meta name="google-play-app" content="app-id=com.shoppre.play"/>
    <meta property="fb:app_id" content="1819630241632764"/>
    <meta property="al:android:url" content="https://www.shoppre.com/"/>\
    <meta property="al:android:package" content="com.shoppre.play"/>
    <meta property="al:android:app_name" content="Shoppre - International Shipping from India"/>
    <meta name="msvalidate.01" content="0E25F147AD9B658B4418A996E97D0D7D"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">


@yield('schema_markup')

    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<!--mailchimp RM-->
    <script id="mcjs">
        !function (c, h, i, m, p) {
            m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
        }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/8f7212d51aa9533c4788ccf05/2a914120f0c71f0c8738d91cf.js");

        <!-- one signal -->
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "16b3fb8b-ebf8-4bcf-8f46-b8e124634065",
            });
        });
        <!-- End one signal -->

        <!-- Start branch -->
        // load Branch
        (function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-latest.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode autoAppIndex banner closeBanner closeJourney creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setBranchViewData setIdentity track validateCode trackCommerceEvent logEvent disableTracking".split(" "), 0);
        // init Branch
        branch.init('key_live_dpUiXdx8wJuDUbRMgEpMBefpuBcQCx32');
    <!-- End Branch -->

        <!-- Google Tag Manager -->
     (function (w, d, s, l, i) {
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
        })(window, document, 'script', 'dataLayer', 'GTM-NRL4B6X');
    <!-- End Google Tag Manager -->
    </script>

</head>
<body class="body">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRL4B6X"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="fb-root">

    </div>
        <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=651881328327888&autoLogAppEvents=1">

    </script>


@include('partials._header')
<div class="container">
    <!-- Modal -->
{{--    <div id="" class="modal fade" role="dialog">--}}
{{--        <div class="modal-dialog">--}}
{{--            <!-- Modal content-->--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                    <h4 class="modal-title"></h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p class="header1 p-color-cement-dark">Thank you for Subscribing!</p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                </div>

                <div class="modal-body">

                    <div class="thank-you-pop">
                        <img src="/img/images/GreenRoundTick.png" alt="">
                        <h1>Thank You!</h1>
                        <p>for Subscribing Us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- This div is required for mobile view -->
<div class="show-mobile" style="margin-top: 10%; display: none;">
    <h4 >
    </h4>
</div>

@yield('content')

@include('partials._footer')

<script src="{{asset('js/utils.js')}}"></script>
{{--<script src="{{asset('js/intlTelInput.js')}}"></script>--}}
<script src="{{asset('js/easyResponsiveTabs.js')}}"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/bootstrap.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/txtProgress.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/validate.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/angular.min.js"></script>
<script src="{{env('AWS_CLOUD_FRONT')}}/js/ui-bootstrap-tpls-2.5.0.min.js"></script>
{{--<script src="{{env('AWS_CLOUD_FRONT')}}/js/star-rating.min.js" type="text/javascript"></script>--}}
<script src="{{env('AWS_CLOUD_FRONT')}}/js/select2.min.js"></script>
@include('chat-script')
@include('./partials/segment')
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
                var href = ($item.url);
                window.open(href, '_blank');
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

    $(window).on('load', function () {
        if (!localStorage.offer) {
            setTimeout(function () {
                $('#myModal-offer').modal('show');
                localStorage.offer = 1;
            }, 30000);
        }
    });
    // var input = document.querySelector("#phone");
    // window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
    //     utilsScript: "build/js/utils.js",
    // });

    jQuery(function () {
        jQuery("a.bla-1").YouTubePopUp();
        jQuery("a.bla-2").YouTubePopUp({autoplay: 0}); // Disable autoplay
    });

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

    $(document).ready(function () {

        // $(".searchBar").validate({
        //     submitHandler: function (form) {
        //         debugger;
        //         var q = $(".searchText").val();
        //
        //         debugger;
        //         // window.location.href = 'https://www.google.com/search?q='+q;
        //
        //         var queryParams = 'data='+q;
        //
        //         $.ajax({
        //             type: 'POST',
        //             url: '/customer-search',
        //             data: {
        //                 data: q,
        //             },
        //             success: function () {
        //                 var url = 'https://www.google.com/search?q=shoppre '+q;
        //                 window.open(url, '_blank');
        //             }
        //         });
        //     }
        // });

        $("#searchBarHome").validate({
            submitHandler: function (form) {
                var q = $("#searchTextBoxHome").val();
// window.location.href = 'https://www.google.com/search?q='+q;

                var queryParams = 'data='+q;

                searchSave(q);
            }
        });

        $("#searchBarNavOuter").validate({
            submitHandler: function (form) {
                var q = $("#searchTextNavOuter").val();


// window.location.href = 'https://www.google.com/search?q='+q;

                var queryParams = 'data='+q;

                searchSave(q);
            }
        });


        $("#searchBarNavInner").validate({
            submitHandler: function (form) {

                var q = $("#searchTextNavInner").val();


// window.location.href = 'https://www.google.com/search?q='+q;

                var queryParams = 'data='+q;

                searchSave(q);
            }
        });

        function searchSave(q) {
            $.ajax({
                type: 'POST',
                url: '/customer-search',
                data: {
                    data: q,
                },
                success: function (res) {
                    var url = 'https://www.google.com/search?q=shoppre '+q;
                    window.open(url, '_blank');
                }
            });
        }


        $("#subscribe_mail_train").validate({
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
                    var email = $("input[name='mailtrain_email']").val();
                    var mailtrain_type = 'footer';
                    jQuery.ajax({
                        url: '/mailtrain/subscribe',
                        type: "POST",
                        data: {
                            email: email,
                            mailtrain_type: mailtrain_type,
                        },
                        success: function (data) {
                            $('#myModal').modal('show');
                            $('.txt-subscription').val('');
                        }
                    })
                }
            });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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

        var progress_val = $("#progress_val").val();
        $('.progress_bar').data("animated", false).textProgress(progress_val);

        $("ul#liticker").liScroll({travelocity: 0.05});

        $('.tooltipkey').tooltip({
            'html': true
        });

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

        $(".select2").select2();

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

        function rotate() {
            $('#next').click();
        }

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

        setInterval(function () {
            $('#offer').animate({Color: 'red'}, 300)
                .animate({Color: 'green'}, 300);
        }, 1000);

        $('#packing').mouseover(function () {
            $("#packing").css({"display": "none"});
            $("#packed").css({"display": "block"});
        });

        $("#packed").mouseout(function () {
            $("#packing").css({"display": "block" ,"transition":"0.2s"});
            $("#packed").css({"display": "none"});
        })
        // End of Document ready
    });

    window.zESettings = {
        webWidget: {
            position: {
                horizontal: 'right',
                vertical: 'bottom'
            }
        }
    };

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

    <!-- Tech Acoount  -->
    <!-- start Mixpanel -->
    // (function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
    //     0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
    //     for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
    //     MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
    // mixpanel.init("d11e1c2848289284d206db2942112c27");
<!-- end Mixpanel -->


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

</script>

@yield('js_script')

</body>
</html>
