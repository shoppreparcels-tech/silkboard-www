@extends('layout')


@section('title', 'Student Special Offer | Courier Any Document Abroad & Save Upto 50%')
@section('description', 'ShoppRe offers you upto 50% discount on your documents sending to Universities/WES abroad. Shipping to 220+ countries & our shipping rates start from just ₹553')
@section('keywords', 'courier documents, dhl student offer, fedex student discount india, courier charges')

@section('css_style')
    <style>
     </style>

@endsection
@section('content')
    <section class="div-b-l-w pad-20" >
       <div class="container no-pad">
           <div class="col-md-12 col-xs-12 div-b-w-s  b-r pad-25">
               <div class="col-xs-12 col-md-12 pad-20">
                   <iframe id="video" width="100%" height="315" src="https://www.youtube.com/embed/NuxgcG8r8Lk" frameborder="0"
                           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                   </iframe>
               </div>
           </div>
       </div>
    </section>

@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#diwali_coupon").validate({
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
                    var email = $("input[name='email']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'api/university',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                        },
                        success: function (data) {
                            console.log(data);
                            window.location.replace("https://myaccount.shoppre.com/register");
                        }
                    })
                }
            });

        });
    </script>
@endsection
