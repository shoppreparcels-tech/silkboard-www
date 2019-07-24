<script>
    jQuery(document).ready(function(i){var n={$AutoPlay:!0,$AutoPlaySteps:1,$AutoPlayInterval:3e3,$PauseOnHover:1,$ArrowKeyNavigation:!0,$SlideDuration:500,$MinDragOffsetToSlide:20,$SlideSpacing:0,$DisplayPieces:1,$ParkingPosition:0,$UISearchMode:1,$PlayOrientation:1,$DragOrientation:3,$SlideshowOptions:{$Class:$JssorSlideshowRunner$,$Transitions:[{$Duration:1200,$Opacity:2}],$TransitionsOrder:1,$ShowLink:!0},$BulletNavigatorOptions:{$Class:$JssorBulletNavigator$,$ChanceToShow:2,$AutoCenter:1,$Steps:1,$Lanes:1,$SpacingX:10,$SpacingY:10,$Orientation:1},$ArrowNavigatorOptions:{$Class:$JssorArrowNavigator$,$ChanceToShow:2,$Steps:1}},o=new $JssorSlider$("slider1_container",n);function a(){var i=document.body.clientWidth;i?o.$ScaleWidth(Math.min(i,1920)):window.setTimeout(a,30)}a(),i(window).bind("load",a),i(window).bind("resize",a),i(window).bind("orientationchange",a)});
</script>
<!-- Jssor Slider Begin -->
<!-- You can move inline styles to css file or css block. -->
<div id="slider1_container" style="position: relative; top: 10px; left: 0px; width: 1400px; height: 380px; overflow: hidden; ">

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
        <div style="position: absolute; display: block; background: url(..{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
    </div>

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px; height: 380px; overflow: hidden;">
        <div>
            <a href="https://www.shoppre.com/offers/ganesh-chaturthi-shipping-offers-from-india/" target="_blank">
                <img u="image" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/ganesh_chaturthi_wishes.jpg"
                     alt="international-shipping-shoppre"/>
            </a>
        </div>

        <div>
            <a href="https://www.shoppre.com/offers/ganesh-chaturthi-shipping-offers-from-india/" target="_blank">
                <img u="image" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/Ganesh Chaturthi_Home Page Slider.jpg"
                     alt="international-shipping-shoppre"/>
            </a>
        </div>

        <div>
            <a href="http://bit.ly/save-on-international-shipping" target="_blank">
                <img u="image" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/international-shipping-shoppre.png"
                     alt="international-shipping-shoppre"/>
            </a>
        </div>
        <div>
            <a href="https://www.shoppre.com/schedule-pickup?hp-slider-pickup" target="_blank">
                <img u="image" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/pickup-from-india.png"
                     alt="pickup Courier from india shoppre"/>
            </a>
        </div>
        <div>
            <a href="https://www.shoppre.com/locker?homeslider" target="_blank">
            <img u="image" src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/indian-local-virtual-shipping-address.jpg"
                 alt="international shipping addres in india"/>
            </a>
        </div>
    </div>
    <!-- Bullet Navigator Skin Begin -->
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            background: url({{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/b05.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb05 div {
            background-position: -7px -7px;
        }

        .jssorb05 div:hover, .jssorb05 .av:hover {
            background-position: -37px -7px;
        }

        .jssorb05 .av {
            background-position: -67px -7px;
        }

        .jssorb05 .dn, .jssorb05 .dn:hover {
            background-position: -97px -7px;
        }
    </style>
    <!-- bullet navigator container -->
    <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
    </div>
    <!-- Bullet Navigator Skin End -->
    <!-- Arrow Navigator Skin Begin -->
    <style>
        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l              (normal)
        .jssora12r              (normal)
        .jssora12l:hover        (normal mouseover)
        .jssora12r:hover        (normal mouseover)
        .jssora12ldn            (mousedown)
        .jssora12rdn            (mousedown)
        */
        .jssora12l, .jssora12r, .jssora12ldn, .jssora12rdn {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url({{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/slider-images/img/landscape/a12.png) no-repeat;
            overflow: hidden;
        }

        .jssora12l {
            background-position: -16px -37px;
        }

        .jssora12r {
            background-position: -75px -37px;
        }

        .jssora12l:hover {
            background-position: -136px -37px;
        }

        .jssora12r:hover {
            background-position: -195px -37px;
        }

        .jssora12ldn {
            background-position: -256px -37px;
        }

        .jssora12rdn {
            background-position: -315px -37px;
        }
    </style>
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 165px; left: 0px;">
        </span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 165px; right: 0px">
        </span>
    <!-- Arrow Navigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
</div>
<!-- Jssor Slider End -->
