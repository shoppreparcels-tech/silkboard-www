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

    <meta http-equiv="Cache-Control" content="public">
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta http-equiv="Cache-Control" content="must-revalidate">
    <meta http-equiv="Expires" content="public">
    <meta http-equiv="Expires" content="mon, 28 sep 2015 14:30:00 GMT">
    <meta http-equiv="Expires" content="must-revalidate">
    <meta http-equiv="Last-Modified" content="public">
    <meta http-equiv="Last-Modified" content="fri, 01 may 2015 14:30:00 GMT">
    <meta http-equiv="Last-Modified" content="must-revalidate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>



    <link href="{{asset('new_ui_assets/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('new_ui_assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('new_ui_assets/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('new_ui_assets/star-rating.min.css')}}" rel="stylesheet">




    <link rel="manifest" href="/manifest.json" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">
    <link href="{{asset('css/txtProgress.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/algolia.css')}}" rel="stylesheet">
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('css/print.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="//cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{asset('js/slider-js/jssor.js')}}"></script>
    <script src="{{asset('js/slider-js/jssor.slider.js')}}"></script>

    @yield('css_style')

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="publisher" href="https://plus.google.com/101070316798366909776/">
    <meta name="google-play-app" content="app-id=com.shoppre.play"/>
    <meta property="fb:app_id" content="1819630241632764"/>
    <meta property="al:android:url" content="https://www.shoppre.com/"/>
    <meta property="al:android:package" content="com.shoppre.play"/>
    <meta property="al:android:app_name" content="Shoppre - International Shipping from India"/>
    <meta name="msvalidate.01" content="0E25F147AD9B658B4418A996E97D0D7D"/>

    <!-- Facebook Messanger icon alignment -->
    <style>
        .fb_dialog.fb_dialog_advanced.fb_customer_chat_bubble_animated_no_badge.fb_customer_chat_bubble_pop_in {
            right: initial !important;
            left: 62pt !important;
            z-index: 9999999 !important;
        }
        .fb-customerchat.fb_invisible_flow.fb_iframe_widget iframe {
            right: initial !important;
            left: 18pt !important;
        }
    </style>

    <!-- End Facebook Messanger Icon Alignment -->

@yield('schema_markup')


</head>
<body>
@include('partials._header')

<div class="container">



@yield('content')

@include('partials._footer')
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/txtProgress.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
<script src="{{asset('js/validate.min.js')}}"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/star-rating.min.js" type="text/javascript"></script>
<script src="../public/js/select2.min.js"></script>


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
        'size':'xs',
        'min' : 0,
        'max' : 5,
        'step' : 1,
        'displayOnly' : true,
        'showClear' : false,
        'showCaption' : false
    });

    $("#input-rate").rating({
        'size':'sm',
        'min' : 0,
        'max' : 5,
        'step' : 1,
        'showClear' : false,
        'showCaption' : false
    });
</script>
<!-- Select2 -->

<script type="text/javascript">
    $(document).ready(function() {
        $(".select2").select2();
    });
</script>
@yield('js_script')
</body>
</html>
