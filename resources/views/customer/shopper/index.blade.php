@extends('layout')

@section('title', '- Personal Shopper')

@section('css_style')

@endsection

@section('content')

    @include('partials._banner')
    
    <section class="prsnlshopper">
      <div class="container">
        <div class="col-sm-12">
          <h2>PERSONAL SHOPPER</h2>
          <nav class="prsnlnav">
            <ul>
              <li class="active"><a href="JavaScript:Void(0)">How it works</a></li>
              <li><a href="{{route('personal.shopper.form')}}">Order Form</a></li>
              <li><a href="{{route('personal.shopper.cart')}}">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="prnslmain">
            <h3>LET SHOPPRE DO THE SHOPPING FOR YOU!</h3>

            <div class="itemblox">
              <h4>Personal Shopper Service</h4>
              <content>
                <p>Most Indian Sellers welcome global shoppers, but at times our members need to purchase from stores who accept only certain forms of payment, and has the following restrictions:</p>
                <ul>
                  <li>Websites who do not allow you to purchase using your International Credit card / Paypal.</li>
                  <li>Websites who do not allow you to shop unless you have an active Indian Mobile Number which you have to sign up with, and receive your One Time Password.</li>
                  <li>Facebook and Instagram sellers who might accept only Indian NetBank Transfer, money order or PayTm.</li>
                </ul>
                <p>This is where the Shoppre’s Personal Shopper team works for you – we make the purchases, and you get more of what India has to offer!</p>
              </content>
            </div>

            <div class="itemblox">
              <h4>How does Personal Shopper work?</h4>
              <content>
                <div class="col-sm-4">
                  <div class="whitebox">
                    <img src="{{asset('img/prsnl1.png')}}">
                    <p><strong>1.</strong> Select the type of purchase you'd like to make from Indian online stores (like Amazon.in), Auction sites (like eBay.in) or from any Facebook or Instagram Sellers (like Shemy).</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="whitebox">
                    <img src="{{asset('img/prsnl2.png')}}">
                    <p><strong>2.</strong> Provide the product details and seller information, and add it to your Shoppre  online shopping cart. Let us confirm the stock for you.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="whitebox">
                    <img src="{{asset('img/prsnl3.png')}}">
                    <p><strong>3.</strong> We make the purchase for you, then you submit payment to Shoppre. We accept most forms of payment.</p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <p>Your Personal Shopper purchase will arrive at our distribution center like any other order, ready for shipment. It couldn't be easier!</p>
                <p>For each order placed you will be limited to 20 items per seller.</p>
                <p>After you submit your request, one of our Personal Shopper experts completes the purchase. Your Shoppre account is billed for the actual cost of the purchase plus a Personal Shopper service fee.</p>
                <p>Once the merchandise arrives at our distribution center, it will appear in your Inbox and be available for shipment to you as usual.</p>
                <p>The Personal Shopper Department is available by phone, or email, Monday through Friday 9:00 am to 5:00 pm IST.</p>
              </content>
            </div>

            <div class="itemblox">
              <h4>Shoppre.com Personal Shopper Service costs</h4>
              <content>
                <p>A Personal Shopper Service Cost is applied per order, not per item. If you request multiple items from a single seller, you will pay only one service cost. Orders with items from multiple sellers will be charged a service cost for each seller.</p>
              </content>
            </div>

            <div class="itemblox">
              <h4>Personal Shopper Service Costs/Payment Methods</h4>
              <content>
                <ul>
                  <li>Netbanking/ Credit Card/ PayPal: 7% of the order total (minimum INR 200.00)</li>
                  <li>Personal Shopper orders with more than 15 items per online merchant will incur a INR 50 per item cost for every item over 15.</li>
                </ul>
                <a href="{{route('personal.shopper.form')}}" class="btn btn-shoppre">Create Order</a>
                <a href="#" style="display: block;font-size: 16px;margin-top: 15px;color: #292929;text-decoration: underline;">View Personal Shopper Terms & Conditions</a>
              </content>
            </div>
            
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')

@endsection