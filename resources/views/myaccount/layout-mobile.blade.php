<!DOCTYPE html>
<html lang="en">

    @include('head')

    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRL4B6X"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        @yield('content')

        @include('partials._footer')

        @include('scripts')

        @yield('js_script')

    </body>

</html>
