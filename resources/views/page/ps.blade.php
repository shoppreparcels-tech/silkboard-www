@extends('layout')

@section('title', 'Personal Shopper | Let ShoppRe Do The Shopping for You | ShoppRe')
@section('description', 'If you are overseas and want to shop from India, occasionally you would have to go through some hassles in the process. Either your international cards won&#039;t be accepted or order won&#039;t go through on account of you not having Indian credentials mostly')
@section('keywords', 'shop and ship, personal shopper, ship from india to usa, assisted shopping')


@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/personal-shopper-shopping-concierge-from-india" />

    <meta property="og:title" content="Online Shopping from India | Personal Shopper Service"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/personal-shopper-shopping-concierge-from-india"/>
    <meta property="og:image" content="https://www.shoppre.com/img/images/personal-shopper-shopping-concierge-from-india.png"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image:alt" content="shopping concierge india" />
    <meta property="og:description" content="Personal assistance on the products or brands you want to purchase from any Indian online stores & Ship through ShoppRe, saving up to 80% on shipping costs."/>
    <meta property="og:site_name" content="ShoppRe"/>

    <style>
        .bg-img{background-image: url("../../img/images/personal-shopper-shopping-concierge-from-india.png"); height: 813px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;background-color: #fafafb;padding-top: 60px;}        .ps-main{background-color: #fafafb;}
        .ps-mainidiv{box-shadow: 0 2px 3px rgba(17, 39, 59, 0.1); border-radius: 3px; background-color: #ffffff;padding:20px}
        .ps-des-div{ margin-top:50px; box-shadow: 0 2px 3px rgba(17, 39, 59, 0.1);border-radius: 3px;background-color: #ffffff;}
        .ps-p-b{width: 253px;height: 22px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);border-radius: 0 0 3px 3px;background-color: #507dbc;}

        .s-p-card{height:220px; padding-top: 30px;padding-bottom: 30px}
        .s-p-s-b1{background-color:#FAC9CA}
        .s-p-s-b2{background-color: #FBDBDB;}
        .s-p-s-b3{background-color: #FDE4E4;}
        .s-p-s-b4{background-color: #FDF2F3;}

        .ps-s-b1{background-color: rgba(80, 125, 188, 0.3);}
        .ps-s-b2{box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);background-color: rgba(80, 125, 188, 0.2);}
        .ps-s-b3{background-color: rgba(80, 125, 188, 0.15);}
        .ps-s-b4{box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);border-radius: 3px;background-color: rgba(80, 125, 188, 0.07);}
        .img-center{display: block;margin-left: auto;margin-right: auto;margin-top:20px }
        .seo-sec  ul li{font-size: 16px;color: #677582;font-weight: 600 ;list-style:none}
        @media only screen and (max-width: 600px) {
            .xs-li-m{margin-left: 25px;}
            .h4 {font-size: 12px;}
            .s-p-card{height:359px;}
            .btn-xl{width: 250px;}
            .div-align-items-r{text-align: center;}
            .div-align-items-l{text-align: left;}
        }
    </style>

@endsection

@section('content')
    <section class="heading-section">
       <div class="container">
           <center>
               <h1 class="f-s-36 f-c-white">
                 Personal Shopper
               </h1>
               <p class="header-ifs-p">
                   <a class="bla-1" href="https://youtu.be/q5R63gFUREk">
                       <img class="btn-vid-img" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/btn.svg">
                   </a>
               </p>
           </center>
       </div>
    </section>
   <section>
       <div class="container ps-main">
           <div class="col-md-6 div-align-items-l">
               <h1 class="f-s-20 font-weight-900 f-c-d-greay">Not Able to Purchase from certian Indian Sites, Due to Payment Hassles?</h1>
           </div>
           <div class="col-md-6 div-align-items-r" style="padding-top: 20px">
               <a href="/personal-shopper" class="btn-l btn-b-r btn-s-r f-s-9 btn-a-m">Place an Order</a>
           </div>
           <div class="clearfix"></div>
           <div class="ps-mainidiv">
               <h5 class="f-s-5 f-c-gray">Don't Worry <br/> <span class="f-c-red">Our Personal Shopper</span>, Do The Shopping for You!</h5>
               <p class="f-s-9 f-c-gray">If you are overseas and want to shop from India, occasionally you would have to go through some hassles in the process. Either your international cards won't be accepted or order won't go through on account of you not having Indian credentials mostly.</p>
               <p class="f-s-9 f-c-gray">This is where our <a href="personal-shopper-india">Personal Shopper</a> comes in to play. All you have to do is, let us know what you are intending to buy, and we'll buy it for you!</p>
               <h6 class="f-s-12 f-c-d-gray f-w-8">How Does a Personal Shopper Help?</h6>
               <p class="f-s-9 f-c-gray"><img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/dot.svg" alt=""/><span class="f-c-d-gray"> We’ll Pay For You:</span> You can place your order on your own, and get it delivered to us; we’ll pay for it on your behalf.</p>
               <p class="f-s-9 f-c-gray"><img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/dot.svg" alt=""/><span class="f-c-d-gray">We’ll Shop For You:</span> All you have to do is, let us know what you intend         to buy; we’ll make the purchase for you.</p>
           </div>
       </div>
       <div class="container">
           <div class="col-md-12 col-xs-12 ps-des-div">
               <center>
                   <p class="f-c-white f-s-11 ps-p-b">Here is how it all goes down</p>
               </center><br/>
               <div class="col-md-6 col-xs-12">
                   <center>
                       <h class="f-s-20 f-c-red">Self Purchased</h><br/><span class="f-c-gray f-s-15">( Paying For You )</span>
                   </center><br/>
                   <div class="col-md-12 col-xs12 s-p-card s-p-s-b1">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/shop-product.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step1</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">Shop Products</h7>
                           <p class="f-s-9 f-c-gray">
                               Purchase products from any
                               Indian online store such as
                               Amazon.in, Flipkart or Myntra;
                               and. Choose Cash on Delivery as the
                               Payment Option.
                           </p>
                       </div>
                   </div>
                   <div class="col-md-12 col-xs12 s-p-card s-p-s-b2">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/pay-receive.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step2</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">COD, Pay & Receive</h7>
                           <p class="f-s-9 f-c-gray">
                               We will pay for your order and
                               will receive it at our warehouse.
                           </p>
                       </div>
                   </div>
                   <div class="col-md-12 col-xs12 s-p-card s-p-s-b3">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/save80.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step3</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">Ship in @ 80% Less Cost</h7>
                           <p class="f-s-9 f-c-gray">Save up to 80% in shipping costs as we wait around for 20 days for all your purchases to reach us - for FREE, and repackage & ship them to your doorsteps as one!</p>
                       </div>
                   </div>
                   <div class="col-md-12 col-xs12 s-p-card s-p-s-b4">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/d-step3.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step4</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">Unbox Your Package</h7>
                           <p class="f-s-9 f-c-gray">
                               We'll dispatch your shipment within 24 hours of you making a
                               request to ship, and it will reach you safe & sound within 3-6 days,
                               no matter wherever in the world you are!
                           </p>
                       </div>
                   </div><br/><br/>
                   <center>
                       <a  href="/personal-shopper" class="btn btn-s-r btn-b-r btn-xl btn-a-l" type="submit">Pay For Me!</a>
                   </center><br/>
               </div>
               <div class="col-md-6 col-xs-12">
                   <center>
                       <h class="f-s-20 f-c-blue">Assisted Purchase </h><br/><span class="f-c-gray f-s-15">( Shopping For You )</span>
                   </center><br/>
                   <div class="col-md-12 col-xs12 s-p-card ps-s-b1">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/shop-product.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step1</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">Copy Your Cart</h7>
                           <p class="f-s-9 f-c-gray">
                               Copy the links of the products you want to purchase from any Indian
                               online store such as Amazon.in, Flipkart or Myntra; and
                               Paste them over here in the order form on your Dashboard.
                           </p>
                       </div>
                   </div>
                   <div class="col-md-12 col-xs12 s-p-card ps-s-b2">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/pay-receive.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step2</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">We Do The Shopping</h7>
                           <p class="f-s-9 f-c-gray">
                               Once you submit the order form, we'll make the purchase on your behalf.
                               Any difference in the total cost will be settled at the end
                               and reflected in your ShoppRe Account.
                           </p>
                       </div>
                   </div>
                   <div class="col-md-12 col-xs12 s-p-card ps-s-b3">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/save80.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step3</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">Ship in @ 80% Less Cost</h7>
                           <p class="f-s-9 f-c-gray">
                               Save up to 80% in shipping costs as we wait around for
                               20 days for all your purchases to reach us - for FREE,
                               and repackage & ship them to your doorsteps as one!
                           </p>
                       </div>
                   </div>
                   <div class="col-md-12 col-xs12 s-p-card ps-s-b4">
                       <div class="col-md-4 col-xs-12"><img class="img-center" src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/d-step3.svg" alt=""/></div>
                       <div class="col-md-8 col-xs-12">
                           <h14 class="f-s-10 uppercase f-c-blue">step4</h14><br/>
                           <h7 class="f-s-7 uppercase f-c-d-gray">Unbox Your Package</h7>
                           <p class="f-s-9 f-c-gray">
                               We'll dispatch your shipment within 24 hours of you making a
                               request to ship, and it will reach you safe & sound within 3-6 days,
                               no matter wherever in the world you are!
                           </p>
                       </div>
                   </div><br/><br/>
                   <center>
                       <a  href="/personal-shopper" class="btn btn-s-b btn-b-b btn-xl btn-a-l" type="submit">Shop For Me!</a>
                   </center><br/>
               </div>
           </div>
       </div>

   </section>
    <section class="seo-sec">
        <div class="container">
            <div class="col-md-12 col-xs-12 pad-t-20">
                <center>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/myntra-online-shopping-shipping-from-india">Myntra International Shipping</a>
                    </div>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/amazon-india-shop-international-shipping">Amazon India International Shipping</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="/flipkart-shopping-with-shoppre-from-india">Flipkart International Shipping</a>
                    </div>

                </center>
            </div>

            <div class="col-md-12 col-xs-12 ">
                <center>
                    <div class="col-md-4 col-xs-12  pad-20">
                        <a href="/ajio-online-shopping-international-shipping">AJIO International Shipping</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20 ">
                        <a href="/international-parcel-forwarding-india-online-shopping">Package Forwarding From India</a>
                    </div>
                    <div class="col-md-4 col-xs-12 pad-20">
                        <a href="{{route('stores1')}}">Online Shopping Sites in India</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <br>
            <h1 class="f-s-30 f-c-d-gray font-weight-900"> <span class="f-c-blue">How Personal Shopper Service Works?</span></h1>
            <p class="f-s-22 f-c-d-gray">Flexible Shopping Experience with ShoppRe Personal Assistance</p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Why Personal Assistant Service?</h2>
            <p class="f-s-16 f-c-gray">
            <ul>
                <li>- Indian retailers or Indian Online sites do not accept international card,</li><br>
                <li>- Indian retailers only accept a Indian billing address,</li> <br>
                <li>- Indian retailers do not ship to your country,</li> <br>
                <li>- Indian retailers not accept your country IP address,</li> <br>
                <li>- India Online stores won’t allow you to register unless you have an active Indian Mobile Number, to which your One Time Password (OTP) will be sent.</li>
            </ul>
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">What is Personal Assistant Service Fee?</h2>
            <p class="f-s-16 f-c-gray">
            <ul>
                <li>- 7% of total purchase,</li><br>
                <li>- Personal Shopper orders with more than 15 items per online seller will incur an ₹50 per item cost for every item over 15,</li> <br>
                <li>- Simple – Easy – Economic Solutions.</li> <br>
            </ul>
            </p>

            <h1 class="f-s-30 f-c-d-gray font-weight-900"> <span class="f-c-blue">Shop without credit card with our Personal Shopper Service</span></h1>
            <div class="col-md-12 col-xs-12">
                <div class="div-b-w-s b-r pad-15 col-md-12 col-xs-12">
                    <p class="f-s-20 f-c-d-greay f-w-7">No more barriers to shopping in India - Because We Make Your Shopping Experience Rich & Easy!</p>
                </div>
            </div>
            <div class="col-md-12 col-xs-12"> <br></div>
            <h2 class="f-s-18 f-c-d-gray f-w-8">Tell us what to buy for you</h2>
            <p class="f-s-16 f-c-gray"><a href="{{route('customer.register')}}">Sign Up</a> and via the Personal Shopper tab on your dashboard, send us the link or information of the items that
                you want to buy. We’ll send you an email confirming the order prior to purchase.
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Pay for your order</h2>
            <p class="f-s-16 f-c-gray">Upon receiving the invoice, you’ll send us payment for your order via any of these methods:
                Paypal, Debit/Credit Cards, Paytm Wallet, Wire Transfer or Net Banking.</p>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Ship and receive your items!</h2>
            <p class="f-s-16 f-c-gray">Upon payment, we will buy your items. You’ll get tracking notifications and see photos of your packages when they arrive at our ShoppRe Warehouse.
                You can decide to get the packages opened, items packed together and shipped to your home, at up to 80% off retail shipping costs.</p> <br>

            <h1 class="f-s-30 f-c-d-gray font-weight-900"> <span class="f-c-blue">Personal Shopper Service India</span></h1>
            <div class="col-md-12 col-xs-12">
                <div class="div-b-w-s b-r pad-15 col-md-12 col-xs-12">
                    <p class="f-s-20 f-c-d-greay f-w-7">Problems with Indian cards or having only International card &
                        <a href="/indian-virtual-address">Indian virtual Addresses</a> for Your Indian Shopping?</p>
                </div>
            </div>
            <div class="col-md-12 col-xs-12"> <br></div>

            <p class="f-s-16 f-c-gray">Personal Shoppers help you buy Indian goods and get them delivered to your doorstep almost anywhere in the world!</p>
            <br>
            <p class="f-s-16 f-c-gray">
                There are a lot of merchants in the India who won’t accept international credit cards. Some merchants require that the billing and shipping addresses
                match when a credit card is used for a purchase. This practice is often used to protect an international distribution deal that protects markup
                margins on goods in your country, or simply to limit the supply of their goods into your country to create artificial demand.
            </p>
            <br>
            <h1 class="f-s-22 f-c-d-gray f-w-8">Here is ShoppRe Personal Shopper Service Help!</h1>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Personal Shopping without the hassle:</h2>
            <p class="f-s-16 f-c-gray">Now you can avoid credit card problems by using <a href="personal-shopper-india">ShoppRe Personal Shopper service</a>. Just log in to your account and create a Personal
                Shopper request. Provide the details of your order by filling the form out. There is a small fee involved to use our personal shopper service,
                but it is well worth considering. We buy the items for you using our matching Indian credit cards and non associated addresses. Because these
                addresses are off-site and secret, we can place Personal Shopper orders with companies that don’t ship to other forwarders!
            </p> <br>

            <h2 class="f-s-18 f-c-d-gray f-w-8">Managing your packages:</h2>
            <p class="f-s-16 f-c-gray">When the items arrive we will receive them into your account and send you an email notification that your purchase has arrived.
                You can then log in to your account and manage the packages just like you had made the purchase. Request shipment immediately or wait for other items
                to arrive so you can consolidate and save on <a href="{{route('pricing')}}">international shipping charges</a>.
            </p> <br>

            <h2 class="f-s-16 f-c-d-gray f-w-8">What are the things I should be aware of before submitting a personal shopper request?</h2>
            <p class="f-s-15 f-c-gray">Please read the <a href="/terms-and-conditions">important notes</a> listed on the page and also the store return policy.
            </p> <br>

        </div>
        <br>
    </section>

    <section>
        <br>
        <br>
        <br>
    </section>
@endsection
