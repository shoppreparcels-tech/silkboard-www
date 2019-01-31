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
            <li class="active"><a href="JavaScript:Void(0)">How it works</a></li>
            <li><a href="{{route('personal.shopper.form')}}">Order Form</a></li>
            <li><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})
                  </span></a></li>
            <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
          </ul>
        </nav>
        <div class="prnslmain">
          <h3>LET SHOPPRE DO THE SHOPPING FOR YOU!</h3>
          <div class="itemblox">
            <p class="head-para">Don’t have the time or the energy to tediously shop from Indian
              online stores? Don’t want to get stuck in the hassle of lengthy payment
              procedures? Allow Shoppre to shop for you!:</p>
            <h4>Why do I need a Personal Shopper?</h4>
            <content>
              <ul>
                <li>Websites who do not allow you to purchase using your International Credit card / Paypal.</li>
                <li>Websites who do not allow you to shop unless you have an active Indian Mobile Number which you
                  have to sign up with, and receive your One Time Password.</li>
                <li>Facebook and Instagram sellers who might accept only Indian NetBank Transfer, money order or
                  PayTm.</li>
              </ul>
              <p>This is where the Shoppre’s Personal Shopper team works for you – we make the purchases, and you
                get more of what India has to offer!</p>
            </content>
          </div>
          <div class="itemblox">
            <h4>How will a Personal Shopper make the purchase on my behalf?
            </h4>
            <content>
              <div class="col-sm-4">
                <div class="whitebox">
                  <img src="{{asset('img/prsnl1.png')}}">
                  <p><strong>1.</strong> Select the type of purchase you'd like to make from Indian online stores
                    (like Amazon.in), Auction sites (like eBay.in) or from any Facebook or Instagram Sellers
                    (like Shemy).
                  </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="whitebox">
                  <img src="{{asset('img/prsnl2.png')}}">
                  <p><strong>2.</strong> Fill out the Order Form and the selected items will be automatiically added
                    to your Shoppre Shopping Cart
                    .</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="whitebox">
                  <img src="{{asset('img/prsnl3.png')}}">
                  <p><strong>3.</strong> We will make the purchase on your behalf. Any difference in the amount
                    will be settled at the end and will be visible in your Personal Shopper balance</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </content>
          </div>
          <div class="itemblox">
            <h4>What is the Personal Shopper service cost?</h4>
            <content>
              <ul>
                <li>The Personal Shopper service cost will be applied per order, not per item. For instance, if your
                  order consists of multiple items from a single seller, you will be changed only once. However, if
                  your order includes multiple items from multiple sellers, you will be charged separately for each
                  seller.</li>
                <li>The service cost is 7% of the total amount of the concerned order, subject to a minimum of
                  Rs. 200</li>
                <li> In case, a Personal Shopper order consists of more than 15 items per online seller, all items
                  above the limit of 15 will incur a flat service cost of Rs. 50 per item.</li>
              </ul>
            </content>
          </div>
          <div class="itemblox">
            {{--<a href="/personal-shopper-terms-and-conditions" style="display: block;font-size: 16px;--}}
            {{--margin-top: 15px;color: #292929;text-decoration: underline;">--}}
            {{--Terms & Conditions For Personal Shopper </a>--}}
            <a href="{{route('personal.termsConditions')}}" style="display: block;font-size: 16px;
                margin-top: 15px;color: #292929;text-decoration: underline;">
              Terms & Conditions For Personal Shopper </a>
            </content>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js_script')

@endsection
