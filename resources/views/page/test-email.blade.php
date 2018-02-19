@extends('layout')

@section('title', 'About | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')
  <section class="mission_band">
    <div class="container">
      <div class="col-md-11 col-md-offset-1">
          <div class="col-md-8 text-center">
            <a href="javascript:void(0)" id="btnMail" class="btn btn-shoppre">Test Email</a>
          </div>
      </div>
    </div>
  </section>
@endsection
@section('js_script')
  <script type="text/javascript">
      /* Magnific Popup */
      $(document).ready(function () {

          $("#btnMail").click(function () {
              jQuery.ajax({
                  url: 'api/test/email',
                  type: "POST",
                  data: {
                    name: "Vikas Kumar"
                  },
                  success: function (data){
                     console.log("Email send");
                     console.log(data);
                  }
              });
          });
      });
 </script>
@endsection
