@extends('layout')

@section('title', 'Personal Shopper | Let ShoppRe Do The Shopping for You')
@section('description', 'If you are overseas and want to shop from India, occasionally you would have to go through some hassles in the process. Either your international cards won&#039;t be accepted or order won&#039;t go through on account of you not having Indian credentials mostly')
@section('keywords', 'shop and ship, personal shopper, ship from india to usa, assisted shopping')


@section('css_style')

    <style>
        .ps-main{background-color: #fafafb;}
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
               <h1 class="f-s-36 f-c-d-gray">How Does it Work?</h1>
           </div>
           <div class="col-md-6 div-align-items-r" style="padding-top: 20px">
               <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?src=menu" class="btn-l btn-b-r btn-s-r f-s-9 btn-a-m">Place an Order</a>
               {{--<button class="btn-l btn-b-r btn-s-r pull-right f-s-9">Place an Order</button>--}}
           </div>
           <div class="clearfix"></div>
           <div class="ps-mainidiv">
               <h5 class="f-s-5 f-c-gray">Let <span class="f-c-red">ShoppRe</span><br/>    Do The Shopping for You!</h5>
               <p class="f-s-9 f-c-gray">If you are overseas and want to shop from India, occasionally you would have to go through some hassles in the process. Either your international cards won't be accepted or order won't go through on account of you not having Indian credentials mostly.</p>
               <p class="f-s-9 f-c-gray">This is where our Personal Shopper comes in to play. All you have to do is, let us know what you are intending to buy, and we'll buy it for you!</p>
               <h6 class="f-s-9 f-c-d-gray">How Does a Personal Shopper Help?</h6>
               <p class="f-s-9 f-c-gray"><img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/dot.svg" alt=""/><span class="f-c-d-gray"> We’ll Pay For You:</span> You can place your order on your own, and get it delivered to us; we’ll pay for it on your behalf.</p>
               <p class="f-s-9 f-c-gray"><img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/svg/dot.svg" alt=""/><span class="f-c-d-gray">We’ll Shop For You:</span> All you have to do is, let us know what you intend         to buy; we’ll make the purchase for you.</p>
               <h6 class="f-s-9 f-c-blue">How much does it cost you?</h6><a class="f-s-9 f-c-blue" href="https://www.shoppre.com/terms-and-conditions">Terms & Conditions</a>
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
                       <a  href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?src=menu" class="btn btn-s-r btn-b-r btn-xl btn-a-l" type="submit">Place Your Order Now!</a>
                       {{--<button class="btn btn-s-r btn-b-r btn-xl" type="submit">Place Your Order Now!</button>--}}
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
                       <a  href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?src=menu" class="btn btn-s-b btn-b-b btn-xl btn-a-l" type="submit">Place Your Order Now!</a>
                       {{--<button class="btn btn-s-b btn-b-b btn-xl" type="submit">Place Your Order Now!</button>--}}
                   </center><br/>
               </div>
           </div>
       </div>

   </section>
    <section>
        <br>
        <br>
        <br>
    </section>
@endsection
