@extends('myaccount.layout')

@section('title', '- Personal Shopper')

@section('css_style')

@endsection

@section('content')



    <section class="prsnlshopper">
      <div class="container">
        <div class="col-sm-12">
          <h2>PERSONAL SHOPPER</h2>
          <nav class="prsnlnav">
            <ul>
              <li><a href="{{route('personal.shopper')}}">How it works</a></li>
              <li><a href="{{route('personal.shopper.form')}}">Order Form</a></li>
              <li class="active"><a href="JavaScript:Void(0)">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="breadcrumb">
            <a href="{{route('personal.shopper.cart')}}" class="link">Shopping Cart</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <a href="{{route('personal.shopper.options')}}" class="link">Options</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <a href="{{route('personal.shopper.summary')}}" class="link">Summary</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link active">Payment</span>
          </div>
          <div class="prnslmain">
            <div class="shopkart">
              @if(!$orders->isEmpty())
              <form action="{{route('personal.shopper.payment.submit')}}" method="post">
              {{csrf_field()}}
                <div class="payform">
                  <h4>Payment options</h4>
                  <div class="alert alert-warning" role="alert">Please note that you can edit or cancel your order only BEFORE you make your payment. Once you submit your payment, you cannot edit your order anymore; however you can cancel your order until we process the purchase of your items, and your money can either be credited to your account through <strong>your Shoppre Wallet.</strong> For more information, read our <a href="{{route('faq')}}">FAQ</a></div>
                  <div class="col-sm-12">

                      <div class="radio">
                        <label>

                          <input type="radio" name="payment_gateway_name" value="wire" checked>

                          <span class="label">Wire transfer/money order</span>
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" name="payment_gateway_name" value="card">
                          <span class="label">Credit/Debit Card</span>
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" name="payment_gateway_name" value="paypal">
                          <span class="label" style="text-transform: none;">Paypal (10% Extra Payment Gateway Charge) - International PayPal/Bank Accounts Only</span>
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" name="payment_gateway_name" value="paytm">
                          <span class="label" style="text-transform: none;">Paytm (3% Extra Payment Gateway Charge) - Indian PayTm/Bank Accounts Only</span>
                        </label>
                      </div>
                  </div>
                  <input type="hidden" name="hdn_reference_number" value="{{ $reference_number }}">
                  <div class="clearfix"></div>
                </div>
                <div class="sub_total" id="subtotalid">
                  <h4>Total Amount: <i class="fa fa-rupee"></i> {{number_format($orders->sum('sub_total'), 2, ".", "")}}</h4>
                </div>
                <input type="hidden" id="totalamount" value="{{$orders->sum('sub_total')}}">
                <div class="btns">
                  <a href="{{route('personal.shopper.summary')}}" class="btn btn-shoppre"><i class="fa fa-angle-double-left"></i> Summary</a>

                  <p class="text-center">Upon the confirmation of your shipment, Shoppre will make the purchase for you within 24 Hours. Any difference in amount while we made your purchase will be settled at the end, which you can view under your <i>Shoppre Wallet</i> on the right side of your Locker.</p>

                  <button type="submit" class="btn btn-shoppre right">Pay Now <i class="fa fa-angle-double-right"></i></button>
                  <div class="clearfix"></div>
                </div>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')

<script type="text/javascript">
  $("input:checkbox, input:radio").change(function() {
    var amount = parseFloat($("#totalamount").val());
    var payment_gateway_name = $("input[name='payment_gateway_name']:checked").val();
    var payment_gateway_fee = 0;
    var finalamt = amount;
    if (payment_gateway_name == 'paypal') {
      payment_gateway_fee = parseFloat(amount * (10/100))
      finalamt += parseFloat(payment_gateway_fee);
      $("#subtotalid").html('<h5>Total Amount: <i class="fa fa-rupee"></i> '+amount.toFixed(2)+'</h5>');
      $("#subtotalid").append('<h5>10% Extra Payment Gateway Charge for PayPal: <i class="fa fa-rupee"></i> '+payment_gateway_fee.toFixed(2)+'</h5>');
      $("#subtotalid").append('<h4>FINAL AMOUNT TO BE PAID TO SHOPPRE: <i class="fa fa-rupee"></i> '+finalamt.toFixed(2)+'</h4>');
    }else if(payment_gateway_name == 'paytm'){
      payment_gateway_fee = parseFloat(amount * (3/100))
      finalamt += parseFloat(payment_gateway_fee);
      $("#subtotalid").html('<h5>Total Amount: <i class="fa fa-rupee"></i> '+amount.toFixed(2)+'</h5>');
      $("#subtotalid").append('<h5>3% Extra Payment Gateway Charge for PayTm: <i class="fa fa-rupee"></i> '+payment_gateway_fee.toFixed(2)+'</h5>');
      $("#subtotalid").append('<h4>FINAL AMOUNT TO BE PAID TO SHOPPRE: <i class="fa fa-rupee"></i> '+finalamt.toFixed(2)+'</h4>');
    }else{
      $("#subtotalid").html('<h4>Total Amount: <i class="fa fa-rupee"></i> '+amount.toFixed(2)+'</h4>');
    }
  });
</script>

@endsection
