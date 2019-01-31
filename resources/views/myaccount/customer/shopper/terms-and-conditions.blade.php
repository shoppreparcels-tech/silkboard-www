@extends('myaccount.layout')

@section('title', 'Shoppre Services - Shop Online From India. Ship Worldwide')
@section('description', 'Enjoy a fast and worry-free shipping experience with Shoppre’s industry-leading expertise, and unmatched member service. Simply Sign-up and Buy Now!')
@section('keywords', 'fast, worry-free shipping experience, industry-leading expertise, unmatched member service, simply sign-up, buy now')

@section('content')

    <section class="page_head">
        <div class="pagebanner">
          <img src="/img/banner1.jpg" width="100%">
          <div class="banner-cap">
            <h2>PERSONAL SHOPPER TERMS AND CONDITIONS</h2>
          </div>
        </div>
    </section>
    <section >
        <div class="container">
            <div class="col-md-12">
                <h3><strong>Terms & Conditions For Personal Shopper</strong></h3>
                <ul style="font-weight: 400;">
                    <li><p class="terms-paragraph">The entire payment, which includes the cost of the order + the Personal Shopper service cost,
                        needs to be cleared BEFORE Shoppre makes the purchase for you. The Personal Shopper service cost
                        is non-refundable for a successfully placed order, irrespective of whether the order is
                        edited/cancelled at a later stage. However, the rest of the amount shall be credited to Shoppre
                        wallet within 24 hours in such a case.
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">We accept payment through netbanking/credit card/Paypal/Paytm/wire
                            transfer.
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">All Personal Shopper orders will be delivered to your Shoppre
                            shipping address.
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">
                        The Personal Shopper order can be edited or cancelled before you make the payment to Shoppre.
                        You can also cancel your order post the payment, provided we haven’t already made the purchase
                        on your behalf. The money will be credited to your Shoppre wallet within 24 hours, which can
                        then be used for your future Shoppre orders.
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">To edit or cancel your order pre-payment, click on Personal Shopper >
                            Order Form.
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">
                        To cancel your order post-payment, access your Order History to view the list of your recent
                        orders. If we haven’t processed the purchase on your behalf, the option to Cancel
                        will be available
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">
                        In case you want to cancel the order after Shoppre has made the purchase, please get in
                        touch with the seller regarding its return policy. If the return is permitted by the seller,
                        intimate us that the order is to be returned when it arrives at your Shoppre address. In such
                        a case, a cost of Rs. 400, in addition to the return shipping cost (if any) needs to be
                        incurred by the customer. Once the seller receives the order and issues a refund, the same
                        shall be duly credited to your Shoppre wallet and can be used for your future orders
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">
                        An e-mail notification shall be sent out to you once your order reaches your Shoppre address.
                        You can also request for any additional photographs of the package for an additional cost.
                        </p>
                    </li>
                    <li>
                        <p class="terms-paragraph">
                        Shoppre reserves the right to make any additions/changes in these terms and conditions at
                        any given point of time. Keep checking this page for updates.
                        </p>
                    </li>
                </ul>
                <br>
                <br>
                {{--<p><span style="font-weight: 400;">You will be charged for all Personal Shopper orders BEFORE Shoppre places the order for you.</span><span style="font-weight: 400;"> Any difference in amount while we made your purchase will be settled at the end, which you can view under your </span><em><span style="font-weight: 400;">Shoppre Wallet</span></em><span style="font-weight: 400;"> on the right side of your Locker. </span></p>--}}
                {{--<p><span style="font-weight: 400;">Acceptable methods of payment are credit card, paypal, paytm, or wire transfer. There is a non-refundable Personal Shopper fee for each order successfully processed. </span></p>--}}
                {{--<p><span style="font-weight: 400;">A Personal Shopper Service Cost is applied per order, not per item.</span><span style="font-weight: 400;"> If you request multiple items from a single seller, you will pay only one service cost. Orders with items from multiple sellers will be charged a service cost for each seller.</span></p>--}}
                {{--<h3><strong>Personal Shopper Service Costs/Payment Methods</strong></h3>--}}
                {{--<ul>--}}
                    {{--<li style="font-weight: 400;"><span style="font-weight: 400;">Netbanking/ Credit Card/ PayPal/ Cash on Delivery: 7% of the order total </span></li>--}}
                {{--</ul>--}}
                {{--<p><span style="font-weight: 400;">(minimum INR 200.00)</span></p>--}}
                {{--<ul>--}}
                    {{--<li style="font-weight: 400;"><span style="font-weight: 400;">Personal Shopper orders with more than 15 items per online seller will incur an INR 50 per item cost for every item over 15.</span></li>--}}
                {{--</ul>--}}
                {{--<h3><strong>Shipping Policy:</strong></h3>--}}
                {{--<p><span style="font-weight: 400;">All Personal Shopper orders will be sent to your Shoppre shipping address. To ensure all items are received correctly, Personal Shopper orders cannot be shipped to any other address.</span></p>--}}
                {{--<h3><strong>Cancel/Change Order:</strong></h3>--}}
                {{--<p><strong>Yes. You can edit or cancel your order only before you make your payment. Once you submit your payment, you cannot edit your order anymore; however you can cancel your order until we process the purchase of your items</strong><span style="font-weight: 400;">, and your money will be credited to your account through your </span><em><span style="font-weight: 400;">Shoppre Wallet</span></em><span style="font-weight: 400;">, which you can use for your next shipment / personal shopping /etc.</span></p>--}}
                {{--<p><span style="font-weight: 400;">To modify an order</span><span style="font-weight: 400;">, sign in your account and click </span><em><span style="font-weight: 400;">Personal Shopper &gt; Order Form. </span></em><span style="font-weight: 400;">Once all your items are in the cart, you can simply edit or cancel it before you submit your payment.</span></p>--}}
                {{--<p><span style="font-weight: 400;">To cancel an order</span><span style="font-weight: 400;"> after you have submitted your payment, you can click </span><em><span style="font-weight: 400;">History</span></em><span style="font-weight: 400;"> to see a list of your recent orders. If an order can be cancelled, you will see the options </span><em><span style="font-weight: 400;">Cancel</span></em><span style="font-weight: 400;"> displayed under the order number. </span></p>--}}
                {{--<p><strong>Please note:</strong> <strong>Shoppre cannot modify or cancel a Personal Shopper order once it has been placed with the seller.</strong><span style="font-weight: 400;"> If you decide you do not want the purchase, please check with the seller's website regarding their return policy. If returns are permitted, please notify our Personal Shopper department to request that the order is returned when it arrives in your Locker.</span></p>--}}
                {{--<p><span style="font-weight: 400;">An INR 400 fee applies for all </span><span style="font-weight: 400;">returns</span><span style="font-weight: 400;">, in addition to the return shipping cost (if needed). Once the vendor receives the returned package and issues a refund, we will credit your Shoppre account for the refunded amount, which you can view under your </span><em><span style="font-weight: 400;">Shoppre Wallet</span></em><span style="font-weight: 400;">. </span><span style="font-weight: 400;"><br></span><strong>Please note, that one we have processed your order, Personal Shopper Service Fees are NOT refundable.</strong></p>--}}
                {{--<h3><strong>Returns:</strong></h3>--}}
                {{--<p><span style="font-weight: 400;">We will return any orders in accordance with the seller's return policy. You will be responsible for all return shipping fees. In case you want Shoppre to return the item for you, you will be charged as per our Domestic Shipping Rates.</span></p>--}}
                {{--<p><span style="font-weight: 400;">Your Shoppre account will be credited (through your Shoppre Wallet which you can view on the right side of your Locker) once the vendor receives the returned package and we have confirmed the refund from the vendor. </span></p>--}}
                {{--<p><span style="font-weight: 400;">Please note that Personal Shopper Service Fees are NOT refundable.</span></p>--}}
                {{--<h3><strong>Refunds:</strong></h3>--}}
                {{--<p><span style="font-weight: 400;">Personal Shopper refunds will be credited to your Shoppre account (through your Shoppre Wallet which you can view on the right side of your Locker). This credit will be applied to future Personal Shopper orders, shipping costs or membership fees before we invoice your credit card on file. Personal Shopper refunds cannot be returned to your credit card (Shoppre will return it only to your Shoppre Wallet), and </span><span style="font-weight: 400;">please note that Personal Shopper Service Fees are NOT refundable.</span></p>--}}
                {{--<h3><strong>Order Arrival:</strong></h3>--}}
                {{--<p><span style="font-weight: 400;">You will receive email notifications as each package from your Personal Shopper order is received and logged into your suite. You can request for Basic/Additional photos of the package for an additional fee.</span></p>--}}
                {{--<h3><span style="text-decoration: underline;"><strong><a href="/personal-shopper/order">CREATE ORDER</a></strong></span></h3>--}}
                {{--<p><span style="font-weight: 400;">Note: Shoppre reserves the right to make changes of the terms and conditions at any time.</span></p>--}}
            </div>
        </div>
    </section>

@endsection
