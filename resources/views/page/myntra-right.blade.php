@extends('layout')

@section('title', 'Myntra Independence Sale - Right To Fashion Sale: 9th to 12th August')
@section('description', 'Myntra Right to Fashion sale is for every Indian with extraordinary offers and discounts available. Myntra online shipping from India through ShoppRe.')
@section('keywords', 'right to fashion sale, myntra, online shopping, international shipping, top 10 online shopping sites')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping" />

    <style>
        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-18px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:896px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection
@section('content')
    <section class="first-time-shipment">
        <div class="container no-padding">
            <div class="col-md-3 div-snow">
                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-t-s-priyamani.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 col-xs-12 no-padding">
                <center>
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-t-s-priyamani.png" alt="" class="img-new-year"><br>
                    <a href="{{route('customer.register')}}"><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/tape_signup.svg" alt="" > </a> <br>
                </center>
                <center>
                    <h18 class="f-s-50 f-c-white  f-w-9">₹250 Cashback</h18>
                    <p class="f-s-28 f-c-white f-w-9 ">on your MYNTRA international shipment </p> <br>
                    {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>--}}
                    <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                    <br>
                    <br>
                    <br>
                    <p class="f-s-15 f-c-l-gray f-w-8">Shop during Myntra Right To Fashion Sale and Ship to your country</p>
                    <p class="f-s-12 f-c-l-gray f-w-8">Offer Code for Shipping: IND250</p>
                    <p class="f-s-12 f-c-l-gray f-w-8">Valid: 08th - 20th August 2019</p>


                </center>
            </div>
            <div class="col-md-3 div-newyear">
                <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-courierbox.png" alt="" class="img-responsive">
            </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Myntra.com Right To Fashion Sale ( From 9th to 12th August 2019 )
                    </h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12">
                    <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20MYNTRA%20Right%20To%20Fashion%20Sale%20from%20India%20and%20Ship%20Worldwide?" target="_blank" class="c-image">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/9880393291-shop-ship-contact-number.png" alt="shop and ship number shoppre">
                    </a>
                </div>
            </div>
            <div class=" col-md-12 no-pad">
                <br>
                <p class="header4 p-color-cement">
                    <strong>Myntra right to fashion sale: 9th to 12th august, 2019- Get amazing offers and discounts up to 50-80% to celebrate the 73rd Independence Day of India.</strong>
                    <br><br>
                    It is the right time to turn over a new leaf in your life with the astounding Right to fashion sale from Myntra, and become one with the newest fashion trends in the world by
                    unleashing the fashionista in you. With Myntra being the biggest online fashion shopping store in India, it is bound to give some jaw-dropping deals and offers during the
                    Sale that will be happening from 9th to 12th August on the occasion of 73rd independence day.
                    <br><br>
                    It has made every fashion buff exhilarate with enthusiasm by offering a whopping 50%- 80% off on 1 lakh+ styles sitewide on some prime national and international brands,
                    hence giving them one more reason for Myntra online shopping from India, not that they need one though!
                </p>
                <br>
                <ul>
                    <li>
                        <h4><a href="#myntra-fashion">Offers during the myntra right to fashion sale, 2019</a></h4>
                    </li>
                    <li>
                        <h4><a href="#myntra-category">Offers during the myntra fashion sale-category wise</a></h4>
                    </li>
                    <li>
                        <h4><a href="#myntra-brands">Deals on Brands during the Fashion Sale</a></h4>
                    </li>
                </ul>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" >How you can shop from Right to Fashion Sale, Myntra India from USA or anywhere in the world?</h4>
                <br>
                <p class="header4 p-color-cement">
                    Beckoning for an urge to upgrade your fashion game and renew your wardrobe, Myntra’s Right to fashion sale is for every Indian with extraordinary offers, and
                    discounts that are available site-wide to do Myntra online shopping from India.
                </p><br>
                <p class="header4 p-color-cement">
                    But since Myntra does not make international shipping yet, all the NRI/PIOs can avail <a
                            href="/myntra-online-shopping-shipping-from-india" target="_blank">Myntra international shipping</a> during this magnificent independence day sale on
                    Myntra India through ShoppRe’s reliable, fast, safe, secure and cheap international shipping services from India.
                </p><br>
                <p class="header4 p-color-cement">
                    Therefore, you can do offhand Myntra international shopping from the convenience of your home anywhere in the world. Despite where in the world you are, we will
                    deliver your package to you within 3-6 days at up to 80 % low shipping rates. So start adding your desired products in the cart and leave the rest to us.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" >Here the easy steps you can follow to do myntra international shipping during the Right to Fashion Sale.</h4>
                <br>
                <ul class="header4 p-color-cement">
                    <li>Sign up at ShoppRe.com and you will get a virtual address.
                    </li>
                    <li>Shop from Myntra for everything you want.
                    </li>
                    <li>Provide the virtual address given by ShoppRe at the time of checking out using COD option.
                    </li>
                    <li>We will collect your order and pay for it.
                    </li>
                    <li>Once we receive all of your order we will ship it after you request it to ship.
                    </li>
                    <li>Then we pack and ship the consolidated package at your address abroad. And you receive it within 3-6 days.
                    </li>
                </ul>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="#myntra-fashion">Offers during the myntra right to fashion sale, 2019</h4>
                <br>
                <p class="header4 p-color-cement">To embark you on your journey of shopping and get you started for your shopping bonanza
                    Myntra just made the sale sweeter with some insane and maddening offers. So transform your old self and indulge in the fashion realm by
                    treating yourself with all the feasts that Myntra has to offer this independence day.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    If you are an <b> 10 % instant discount on all the Citi debit and credit cards.
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    Deals like buy 1 and get 4 free and more like this
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    Flat 80 % off on some exclusive brands
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    Instant 10 % cashback on the Payzapp app.
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    72 % off for all the early birds on all the bestsellers of Myntra during the sale.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="#myntra-category">Offers during the myntra fashion sale-category wise</h4>
                <br>
                <p class="header4 p-color-cement">
                    If fashion is your fad then Myntra is your destination, and it will never disappoint you with it's over the top and precise fashion trends and styles.
                    Even with these marvelous offers, Myntra has surprised everyone. Therefore get clothes, accessories, shoes, bags and much more for everyone in
                    your family and friends, or even get a special Rakhi present for your sister or your brother and enthrall them altogether.<br>
                    With up to 80 % off, Myntra has brought in some enormous offers and discounts on practically every category for women, men and kids, so go through
                    this list of offers available on each category during the gratifying sale and never miss an offer.
                </p>
                <br>
                <div >
                    <table style="width: 100%;text-align: center;">
                        <tr >
                            <th style="text-align: center;">CATEGORY</th>
                            <th style="text-align: center;">OFFERS</th>
                        </tr>
                        <tr>
                            <td>Tops and T-shirts</td>
                            <td>40 - 80% Off</td>
                        </tr>
                        <tr>
                            <td>Shirts</td>
                            <td>30 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>Dresses</td>
                            <td>40 - 80% Off</td>
                        </tr>
                        <tr>
                            <td>Jeans</td>
                            <td>40 - 80% Off</td>
                        </tr>
                        <tr>
                            <td>Trousers</td>
                            <td>40 - 80% Off</td>
                        </tr>
                        <tr>
                            <td>Kurtas and Kurta sets</td>
                            <td>Up to 70% Off</td>
                        </tr>
                        <tr>
                            <td>Sports Shoes</td>
                            <td>30 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>Casual Shoes</td>
                            <td>30 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>Bags</td>
                            <td>Up to 80% Off</td>
                        </tr>
                        <tr>
                            <td>Beauty and Grooming</td>
                            <td>Up to 60% Off</td>
                        </tr>
                        <tr>
                            <td>Accessories</td>
                            <td>Up to 80% Off</td>
                        </tr>
                        <tr>
                            <td>Kids</td>
                            <td>50 - 80% Off</td>
                        </tr>
                    </table>
                </div>
                <br>
                <p class="header4 p-color-cement">
                    It is apparent that Myntra has taken care of everyone by offering rebates on every single category sitewide from 30 - 80 %. Since Raksha Bandhan is around
                    the corner, why don't you shop for some ethnic kurtas and kurta sets this festive season and ditch your westerns that you wear every single time?
                    They are up to 70 % off and it can save your buck maybe for something else that you want!
                </p>
                <br>
                <p class="header4 p-color-cement">
                    For all the chic fashionistas out there, now you can do the shopping for your beloved brands and style in your budget as there is 40 - 80 % off on tops and t-shirts,
                    dresses, jeans and trousers, and up to 80 % off on bags and accessories with up to 60 % off on beauty and grooming products.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="myntra-brands">Deals on Brands during the Fashion Sale</h4>
                <p class="header4 p-color-cement">
                    Now go the whole hog with your branded apparel wishlist because they won't stay expensive anymore as Myntra has decided to serve the whole platter of fashion to its
                    customers so they don't go empty-handed during the sale. Apart from all the crazy deals on almost every single category,
                    Myntra also has some of the best deals and discounts on top brands like Vero Moda, Levi’s, Hrx, Nike, Puma, W just to name a few.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    So fulfill all your dreams of wearing branded clothes and accessories this independence day and feel the freedom to shop more and more with these exclusive offers and deals.
                </p>
                <br>
                <div >
                    <table style="width: 100%;text-align: center;">
                        <tr >
                            <th style="text-align: center;">BRANDS</th>
                            <th style="text-align: center;">OFFERS</th>
                        </tr>
                        <tr>
                            <td>Nike</td>
                            <td>Exclusive offer</td>
                        </tr>
                        <tr>
                            <td>The Roadster Life Co.</td>
                            <td>40 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>W</td>
                            <td>30 - 60% Off</td>
                        </tr>
                        <tr>
                            <td>United Colors Of Benetton</td>
                            <td>50 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>Red Tape</td>
                            <td>Minimum 70% Off</td>
                        </tr>
                        <tr>
                            <td>Puma</td>
                            <td>40 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>Wrogn</td>
                            <td>40 - 60% Off</td>
                        </tr>
                        <tr>
                            <td>Levi’s</td>
                            <td>30 - 60% Off</td>
                        </tr>
                        <tr>
                            <td>HRX</td>
                            <td>40 - 70% Off</td>
                        </tr>
                        <tr>
                            <td>U.S. Polo Assn.</td>
                            <td>40 - 60% Off</td>
                        </tr>
                        <tr>
                            <td>Fossil</td>
                            <td>Up to 50% Off</td>
                        </tr>
                        <tr>
                            <td>Vero Moda</td>
                            <td>50 - 70% Off</td>
                        </tr>
                    </table>
                </div>
                <br><p class="header4 p-color-cement">
                    Myntra is resolute to spoil all of us with such rich offers and discounts on these exclusive brands that we would never look back to our old closets hence creating a
                    fashion renaissance in our wardrobes. Every day will be a fashion show when we get these street style fashion or some high-end ramp inspired styles at our fingertips at just a click away.
                </p>
            </div>
            <br>
            <div>
                <center><a href="https://www.myntra.com/shop/rtf19-prebuzz" target="_blank" class="btn btn-s-r btn-a-l btn-b-r">Shop Myntra Right To Fashion Sale</a></center>
            </div>
        </div>

        <br>
        <br>
    </section>

    <section>
        <div class="container fst-service" style="margin-top: 1px">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                        <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Best Online Shopping Sites in India</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            AJIO
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="ajio-online-shopping-international-shipping" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">AJIO Online Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            FLIPKART
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="flipkart-shopping-with-shoppre-from-india" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Flipkart Online Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            AMAZON
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Amazon.in India Online Shopping</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            SNAPDEAL
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                <span class="elementor-icon-list-text txt-u-l">Snapdeal Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            JAYPORE
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="jaypore-international-shipping-from-india" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Jaypore Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            MYNTRA
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="myntra-online-shopping-shipping-from-india" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Myntra Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            LIMEROAD
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="limeroad-shopping-international-shipping" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Limeroad Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            NYKAA
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/online-stores-india/nykaa-india-beauty-products-international-shipping/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">Nykaa Beauty Shopping</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            BIBA
                        </div>

                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/online-stores-india/biba-india-international-shipping/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                                <span class="elementor-icon-list-text txt-u-l">BIBA.in Shopping from India</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mar-t-25">
                <div class="txt-center">
                    <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                        <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Indian Online Shopping Stores</p>
                        </a>
                    </button>
                    <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                        <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20from%20India%20and%20Ship%20Worldwide?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Message Us On WhatsApp</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>

    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-9880393291" class="header2 p-color-white">+91 98803 93291</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
    <section class="d-contact-section-desktop">
        <div class="container " id="contact-support">
            <div class="row" id="d-contcat">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 " style="display: none">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-9880393291" class="header2 p-color-white">+91 98803 93291</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
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
                    var pnumber = $("input[name='pnumber']").val();
                    var cnumber = $("[name='country_code']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'new-year-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            pnumber: pnumber,
                            cnumber: cnumber,
                        },
                        success: function (data) {
                            var url= "{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?email=" + email + "&c_code="+ cnumber +"&PN="+ pnumber ;
                            console.log(data);
                            // window.open(url);
                            window.location.href = url;

                        }
                    })
                }
            });

        });
    </script>
@endsection
