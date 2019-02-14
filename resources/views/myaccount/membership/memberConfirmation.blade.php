@extends('myaccount.membership.layout')

@section('title', 'Submit Payment - Membership Plan | ShoppRe.com')

@section('css_style')
    <meta name="robots" content="noindex, noodp, noydir, nosnippet"/>
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')

</br>
    </br>
        <div class="container" >
            </br>
            <div class="row text-center">
                <img src="{{asset('img/member/process3.png')}}" height="60px" alt="Member Process"></a>
            </div>

            </br></br></br>
            <div class="text">
            <div class="row">
                <div class="shiprightbox col-md-8 col-md-offset-2" style="text-align: left;">
                    <h3 class="title">Payment Summary</h3>
                    <ul>

                        <li class="active">Membership Charges <a href="javascript:void(0)" class="tooltipkey"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"> {{number_format($memberFeeAmount, 2, ".", "")}}</span></li>
                        <li class="active">Payment Gateway Charges <a href="javascript:void(0)" class="tooltipkey"><i class="fa fa-question-circle-o"></i></a> <span class="pull-right"> {{number_format($pgFee, 2, ".", "")}}</span></li>

                        <li class="active"><h4>Total Charges <span class="pull-right"><i class="fa fa-rupee"></i> {{number_format($totalAmount, 2, ".", "")}}</span></h4></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <form  action="{{route('member.proceed.pay',['paymentGatewayName'=>'card'])}}"  method="post">
                    {{csrf_field()}}
                    <div class="longblock active col-md-8 col-md-offset-2 shiprightbox">
                        <h3 class="title"> Payment options</h3>
                        <div id="changePayment">
                          <div class="edit">
                              <input type="hidden" name="totalAmount" value="{{$totalAmount}}"/>
                            <div class="radio">
                                <label>
                                    @if($paymentGatewayName == 'card')
                                        <input type="radio" name="payment_gateway_name" value="card" checked>
                                        <span class="label">Credit/Debit Card  (2.5% Extra Payment Gateway Charge)</span>
                                    @else
                                        <input type="radio" name="payment_gateway_name" value="card" >
                                        <span class="label">Credit/Debit Card  (2.5% Extra Payment Gateway Charge)</span>
                                    @endif
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    @if($paymentGatewayName == 'paypal')
                                        <input type="radio" name="payment_gateway_name" value="paypal" checked>
                                        <span class="label" style="text-transform: none;">Paypal (10% Extra Payment Gateway Charge) - International PayPal/Bank Accounts Only</span>
                                    @else
                                        <input type="radio" name="payment_gateway_name" value="paypal" >
                                        <span class="label" style="text-transform: none;">Paypal (10% Extra Payment Gateway Charge) - International PayPal/Bank Accounts Only</span>
                                    @endif
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    @if($paymentGatewayName == 'paytm')
                                        <input type="radio" name="payment_gateway_name" value="paytm" checked>
                                        <span class="label" style="text-transform: none;">Paytm (3% Extra Payment Gateway Charge) - Indian PayTm/Bank Accounts Only</span>
                                    @else
                                        <input type="radio" name="payment_gateway_name" value="paytm" >
                                        <span class="label" style="text-transform: none;">Paytm (3% Extra Payment Gateway Charge) - Indian PayTm/Bank Accounts Only</span>
                                    @endif
                                </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    </br>
                    <div class="row col-md-12 col-xs-12 text-center">
                        @if ($message)
                            <div class="alert alert-success">
                                {{$message}}
                            </div>
                        @endif
                    </div>
                    <button type="submit" id="submitship" class="btn btn-shoppre col-md-8 col-md-offset-2"
                            style="font-size: 18px;border-radius: 5px;background: #10c018;font-weight: 900;">
                        Proceed to Payment
                    </button>
                    <br>
                </form>
                </div>

        </div>
    </div>

    <div class="text-center">
        </br>
        <a href="/locker?message={{$message}}"  style="color:red;text-decoration: underline">Cancel and Continue with Basic Plan</a>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            <hr>
        @endif
    </div>
    </section>
@endsection


@section('js_script')
    <!-- Owl Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/photoreq.js')}}"></script>
    <script src="{{asset('js/jquery.redirect.js')}}"></script>
    <script type="text/javascript">
        $('.slide_trigger').click(function (e) {
            e.preventDefault();
            var target = $(this).attr('data-target');
            $('#' + target).slideToggle();
        });


        $("input:checkbox, input:radio").change(function () {
            var payment_gateway_name = $("input[name='payment_gateway_name']:checked").val();

            $.redirect("", {
                paymentGatewayName: payment_gateway_name
            }, 'GET');
        });

    </script>
@endsection
