<!-- Chat Widget -->


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
{{--<script type="text/javascript">--}}
{{--window.__lc = window.__lc || {};--}}
{{--window.__lc.license = 10584982;--}}
{{--(function() {--}}
{{--var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;--}}
{{--lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';--}}
{{--var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);--}}
{{--})();--}}

{{--<!--Auto Fill Chat form If Customer Already Login-->--}}

{{--var name = "<?php echo Auth::check()=== true ? Auth::user()->name : ''  ?>";--}}
{{--var email = "<?php echo Auth::check()=== true ? Auth::user()->email : ''  ?>";--}}

{{--window.__lc.visitor = {--}}
{{--name: name,--}}
{{--email: email,--}}
{{--};--}}

{{--</script>--}}
{{--<noscript>--}}
{{--<a href="https://www.livechatinc.com/chat-with/10584982/" rel="nofollow">Chat with us</a>,--}}
{{--powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>--}}
{{--</noscript>--}}

<!-- End of LiveChat code -->


{{--<!-- Start of shoppre-international-shipping-courier Zendesk Widget script -->--}}
<script>/*<![CDATA[*/
    window.zE || (function (e, t, s) {
        var n = window.zE = window.zEmbed = function () {
            n._.push(arguments)
        }, a = n.s = e.createElement(t), r = e.getElementsByTagName(t)[0];
        n.set = function (e) {
            n.set._.push(e)
        }, n._ = [], n.set._ = [], a.async = true, a.setAttribute("charset", "utf-8"), a.src = "https://static.zdassets.com/ekr/asset_composer.js?key=" + s, n.t = +new Date, a.type = "text/javascript", r.parentNode.insertBefore(a, r)
    })(document, "script", "2ab4b736-3ac8-4f95-8b6f-e2c9d6325182");
    /*]]>*/</script>
<!-- Zendex form autofill if user is login -->
<script type="text/javascript">
    if (localStorage.userinfo) {
        user = JSON.parse(localStorage.userinfo);
        zE(function () {
            zE.identify({
                name: user.name,
                email: user.email,
                organization: ' '
            });
        });
    }
</script>

{{--<!-- End of shoppre-international-shipping-courier Zendesk Widget script -->--}}

<!-- Chat Widget -->
