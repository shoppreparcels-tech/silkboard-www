<!DOCTYPE html>
<html lang="en">

@include('myaccount.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRL4B6X"
                height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('myaccount.partials._header')
@include('myaccount.region-popup')

@yield('content')

@include('myaccount.partials._footer')

@include('myaccount.scripts')

@yield('js_script')

</body>
</html>
