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
    });

    $('body').tooltip({
        selector: '.tooltipkey',
        'html' : true
    });
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

{{--<script type="text/javascript">--}}
    {{--var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();--}}
    {{--@if(Auth::guard('customer')->check())--}}
            {{--Tawk_API.visitor = { name  : '{{Auth::user()->name}}', email : '{{Auth::user()->email}}' };--}}
    {{--@endif--}}
    {{--(function () {--}}
        {{--var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];--}}
        {{--s1.async = true;--}}
        {{--s1.src = 'https://embed.tawk.to/{{ Auth::guard('customer')->check() ? "59d72784c28eca75e4624678" : "58dab24ff97dd14875f5a8a9" }}/default';--}}
        {{--s1.charset = 'UTF-8';--}}
        {{--s1.setAttribute('crossorigin', '*');--}}
        {{--s0.parentNode.insertBefore(s1, s0);--}}
    {{--})();--}}
{{--</script>--}}

{{--<!-- Start of shoppre-international-shipping-courier Zendesk Widget script -->--}}
{{--<script>/*<![CDATA[*/window.zE||(function(e,t,s){var n=window.zE=window.zEmbed=function(){n._.push(arguments)}, a=n.s=e.createElement(t),r=e.getElementsByTagName(t)[0];n.set=function(e){ n.set._.push(e)},n._=[],n.set._=[],a.async=true,a.setAttribute("charset","utf-8"), a.src="https://static.zdassets.com/ekr/asset_composer.js?key="+s, n.t=+new Date,a.type="text/javascript",r.parentNode.insertBefore(a,r)})(document,"script","2ab4b736-3ac8-4f95-8b6f-e2c9d6325182");/*]]>*/</script>--}}

{{--<!-- Zendex form autofill if user is login -->--}}
{{--<script type="text/javascript">--}}
  {{--if (localStorage.userinfo) {--}}
    {{--user = JSON.parse(localStorage.userinfo);--}}
    {{--zE(function() {--}}
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
  $(function () {
    $("#regions").change(function () {
      // alert($('option:selected').text());
      // console.log($('option:selected').text());
      let region = $('option:selected').text();
      console.log(region);
      if (region !== 'Bangalore') {
        jQuery.ajax({
          url: 'mailchimp/subscribe',
          type: "POST",
          headers: {
            "accept": "application/json",
            "Access-Control-Allow-Origin":"*"
          },
          data: {
            region: region
          },
          success: function (res) {
            console.log(res);
            $("#calc_load").hide();
            $('#myModal').modal('show');
          }
        });
      }
    });
    $('#btn-thanku').click(function () {
      $('#myModal').modal('hide');
    });
  });
</script>
