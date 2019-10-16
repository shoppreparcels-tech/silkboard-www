@extends('layout')

@section('content')

<div>

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <br>
    <br>
    <center><h1> <a href="{{$url}}" > Click here to place or View the order</a></h1></center>

    <br>
    <br>
    <br>
    <br>  <br>
    <br>
    <br>

    <br>
    <br>



</div>
@endsection

@section('js_script')
    <script type='text/javascript'>
        var cId = '52423';

        (function(d, t) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv2.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>

@endsection

