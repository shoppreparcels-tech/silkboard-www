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

@include('chat-script')

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
