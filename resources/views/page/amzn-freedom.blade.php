@extends('layout')

@section('title', 'Offers during the Amazon.in Freedom Sale, 2019: 8th to 11th August')
@section('description', 'Shop during Amazon.in Freedom Sale 2019 and get ₹250 Cashback on your international shipment from India to any country. Offers and discounts on mobiles,
amazon fashion, electronics, appliances.')
@section('keywords', 'freedom sale, shoppre, , international shipping, mobiles, fashion, amazon india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances" />

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
                    <p class="f-s-26 f-c-white f-w-9 ">on your AMAZON.in international shipment </p> <br>
                    {{--<img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>--}}
                    <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                    <br>
                    <br>
                    <br>
                    <p class="f-s-15 f-c-l-gray f-w-8">Shop during Amazon.in Freedom Sale 2019 and Ship to your country</p>
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
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Amazon.in Freedom Sale ( From 8th to 11th August 2019 )
                    </h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12">
                    <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20AMAZON.in%20Freedom%20Sale%20from%20India%20and%20Ship%20Worldwide?" target="_blank" class="c-image">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/9880393291-shop-ship-contact-number.png" alt="shop and ship number shoppre">
                    </a>
                </div>
            </div>
            <h4 class="f-s-18 f-c-gray f-w-9">Amazon is back with its Freedom sale going on from 8th to 11th august with enormous offers and discounts on mobiles, amazon fashion,
                electronics, appliances, home & kitchen, and much more.
            </h4>
            <div class=" col-md-12 no-pad">
                <br>
                <p class="header4 p-color-cement">
                    Amazon Freedom Sale is giving us millions of reasons to shop like crazy for all our favorite things and save lots of cash in the process. Amazon is sitting at the helm of online
                    shopping portals and as we have all seen, it has become evident that amazon releases some groundbreaking sales throughout the year. Keeping that tradition amazon is ready with its
                    freedom sale that will be happening from 8th august to 11th august. The sale will offer enormous discounts on mobiles and accessories, home and kitchen, daily essentials, electronics
                    and more, and who knows what else it has up its sleeve so don't miss out on this big sale if you want to save some cash while doing amazon freedom sale online shopping India.
                    <br><br>
                    There is good news for all the NRI/PIOs too, you can shop for all your favorite things too during the amazon freedom sale from any part of the world because Shoppre is making it
                    possible for you to do amazon international shopping with its reliable, cheap and fast package forwarding service. Along with great discounts that the sale will offer,
                    ShoppRe also offers up to <a href="{{route('pricing')}}" target="_blank">80% low shipping rates</a>, so don't back out from getting anything, and we will deliver your order within 3-6 working days.
                </p>
                <br>
                <ul>
                    <li>
                        <h4><a href="#ship-usa"> Can I buy from Amazon India and ship to USA?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#nri-amazon">How can NRI/PIOs shop during Amazon Freedom Sale, 2019 from India?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#shopping">Steps you can follow to do international shopping for independence day</a></h4>
                    </li>
                    <li>
                        <h4><a href="#save-freedom">Ways to Save extra and stay ahead during the Freedom Sale on Amazon.in</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-fashion">Freedom Sale offers on Amazon Fashion (Up To 80% OFF)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-mobiles">Freedom Sale offers on Mobiles and Accessories (Up To 40% OFF)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-home">Freedom Sale offers on Home and Kitchen (30% - 75% OFF)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-daily">Freedom Sale offers on Daily Essentials (starting ₹99/-)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-electronics">Freedom Sale offers on Electronics (starting ₹179/-)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-books">Freedom Sale offers on Books entertainment and more (Up To 70% OFF)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-tv">Freedom Sale offers on TV and Appliances (Up To 60% OFF)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-devices">Freedom Sale offers on Amazon Devices (Up To ₹5000 OFF)</a></h4>
                    </li>
                    <li>
                        <h4><a href="#amzn-brands">Freedom Sale offers on Amazon brands and more (Up To 65% OFF)</a></h4>
                    </li>
                </ul>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="ship-usa">Can I buy from amazon India and ship to USA?</h4>
                <br>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp; Yes, you can do Indian online shopping international shipping to USA or anywhere in the world with
                    ShoppRe and enjoy <a href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/" target="_blank">Amazon India international shopping with us</a>.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="nri-amazon">How can NRI/PIOs shop during Amazon Freedom Sale, 2019 from India?</h4>
                <br>
                <p class="header4 p-color-cement">
                    Now to Celebrate this glorious Amazon freedom sale you do not need to reside in India, Shoppre has made it possible to shop from any Indian online shopping portal from
                    anywhere in the world. Therefore, You can do effortless amazon international shopping from the convenience of your home anywhere in the world.
                    Despite where in the world you are, we will deliver your package to you within 3-6 days. And if you are overwhelmed with all the offers, discounts and
                    sales and have no idea what or how to purchase, then sit back, relax and continue reading because here is a complete guide for Amazon Freedom sale online shopping.

                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="shopping">
                    Here the easy steps you can follow to do international shopping for Independence Day.
                </h4>
                <ul class="header4 p-color-cement">
                    <li>Sign up at ShoppRe.com and you will get a virtual address
                    </li>
                    <li>Shop from Amazon.in for everything you want.
                    </li>
                    <li>Provide the virtual address given by ShoppRe.com at the time of checking out using COD option. </li>
                    <li>We will collect your order and pay for it.
                    </li>
                    <li>Once we receive all of your order we will ship it after you request it to ship.
                    </li>
                    <li>Then we pack and ship the consolidated package at your address abroad. And you receive it within 3-6 days.
                    </li>
                </ul>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="save-freedom">Ways to Save extra and stay ahead during the Freedom Sale on Amazon India</h4>
                <ul class="header4 p-color-cement">
                    <li>During Amazon Freedom sale, you can also avail 10 % instant discount with your SBI card.
                    </li>
                    <li>If you happen to be a prime member then you are in luck because the sale starts early for your from 12 noon on 7th August.
                    </li>
                    <li>Cashback of upto ₹ 50/- on recharge and bill payments on shopping during the sale
                    </li>
                    <li>Cashback of upto ₹ 50/- on food order while shopping during the sale
                    </li>
                    <li>Cashback of upto ₹ 50/- on domestic flight bookings during the sale
                    </li>
                    <li>Stand a chance to win prizes worth ₹ 5 lakh on downloading the amazon app.
                    </li>
                </ul>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-fashion">Amazon Freedom Sale offers on Amazon Fashion</h4>
                <br>
                <p class="header4 p-color-cement">
                    Amazon Freedom Sale is resolute to set us free with our fashion sense with almost 80 % off on top brands and all the latest trends of the season for men, women, and children.
                    You will observe some great discounts on 500 + international brands like Puma, Casio, Voylla, American Tourister, United Colors of Benetton, USPA, Biba, Miss Chase and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Get ready with your wishlist because there will be tremendous discounts on clothing, luggage, fashion jewelry, footwear, watches, handbags, and backpacks, so you can
                    even give yourself a total makeover this independence day.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Also shop at crazy prices with amazon coupons for apparel, shoes, luggage, watches, handbags, and jewelry that you can start collecting now to further save more and shop more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    There will also be flash sales going on every day on some big brands of clothing, footwear, bags, and accessories that you have to keep an eye out for to save you some extra buck.
                </p>
                <br>

                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-mobiles">Amazon Freedom Sale offers on Mobiles and Accessories</h4>
                <br>
                <p class="header4 p-color-cement">
                    If you have been eyeing that latest mobile phone with amazing features then you don't have to go anywhere because amazon is bringing all the huge
                    latest launches in mobile phones during the freedom sale at whopping discounts and offers.

                </p>
                <br>
                <p class="header4 p-color-cement">
                    New launches in mobile phones at a discount to get your hands on- some of them include OnePlus 7 pro, Samsung Galaxy M40, Oppo K3, and Huawei Y9 Prime.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Best selling budget smartphones like Mi A2, Redmi 6A, LG W30, LG W10, Samsung M10, Honor 10 Lite, Redmi Y2 and many more like this will also be reduced in prices at the lowest price ever and
                    the best offer price ever, giving us all the more reason to get a new phone for ourselves or to gift someone.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    The irresistible exchange offers on premium smartphones like Oppo Reno and Vivo V15 and much more like this gives us all a golden opportunity to get
                    rid of our old phone and get these premium handsets to show off.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    You can also grab a huge discount on best selling mobile accessories like power bank, earphones, phone covers or cases, Bluetooth headsets, cables and chargers from the best brands.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-home">Amazon Freedom Sale offers on Home and Kitchen</h4>
                <br>
                <p class="header4 p-color-cement">
                    If that old mixer grinder of yours is broken or gives you trouble then get a new Prestige mixer grinder during the amazon freedom sale as we will witness a never seen before price
                    drop. Not only Prestige mixer grinder but a lot of home and kitchen essentials will be at off like Lifelong gas stove, Kent water purifier, Bathla ironing board,
                    Maspar bedsheets, Solimo king-size bed, Bosch tool kit and many more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    There will be discounts on all categories like home decor, kitchen and home appliances, kitchen and dining, furniture, home improvement, home gym essentials, garden and
                    outdoor tools and much more on top brands like Bajaj, Kent, prestige, Eureka Forbes, Pigeon, Cello, Milton, Sunflame, Amazonbasics, Bombay Dyeing, Ajanta, Wipro, Home centre, Solimo and more.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-daily">Amazon Freedom Sale offers on Daily essentials</h4>
                <br>
                <p class="header4 p-color-cement">
                    Replenish your pantry during the freedom sale and save a lot on your monthly budget while shopping and saving up to 70 % off on a wide range of daily essentials from the top brands like
                    Head & shoulders, Huggies, Philips, Lakme, Cadbury, Maybelline, Pedigree, Lipton, Nivea, Whisper, Fitbit, Kama Ayurveda, Ariel, Pampers, Mamypoko, Hills, Harpic, TRESemme and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Get that Maybelline lipstick or that Kama Ayurveda moisturizer along with every other cosmetic that you have ever wanted but could not buy due to its high price from the best brands
                    and get that ultimate glow in your skin. During the freedom sale discount on categories like beauty products, baby products, grooming devices, household essentials,
                    dry fruits and chocolates, and pet supplies you will save a lot and get a lot.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-electronics">Amazon Freedom Sale offers on Electronics</h4>
                <br>
                <p class="header4 p-color-cement">
                    You can be that person who always gets all the latest gadgets and devices and stays in trend through The freedom sale offers and discounts on headphones, memory cards,
                    pen drives, fitness tracker, laptop accessories, camera accessories, stationery, office supplies, musical instruments, PC components, monitors,
                    routers, speakers, hard drives, printers, tablets, gaming accessories, home audio, smartwatches, DSLRs and mirrorless cameras.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    The highlight of the sale will be boAT Rockerz 255, Mi band 3, Digitek DTR-550LW Professional Tripod and Samsung EVO Plus 32 GB micro SD that will be available at a great price range.
                    Along with that, you can get a brand new laptop at 30 % off, desktops at 40 % off, printers at 45 % off, tablets at 30 % off and much more.

                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-books">Amazon Freedom Sale offers on Books entertainment and more</h4>
                <br>
                <p class="header4 p-color-cement">
                    This category will witness up to 70 % off sitewide with categories ranging from fitness, sports, books, toys, games, vehicle parts, latest PS 4 console, antivirus,
                    and business software.

                </p>
                <br>
                <p class="header4 p-color-cement">
                    Grab all your favorite books with up to 60 % off, gaming accessories with up to 50 % off, outdoor toys
                    20 % off, toys with up to 20 % off, tools and accessories with up to 60 % off. The featured brands include Yonex, Westland, barbie,
                    vega, Bosch, hero, Pearson, lego, Motul, Nivia, and Mc Graw Hill.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-tv">Amazon Freedom Sale offers on TV and appliances</h4>
                <br>
                <p class="header4 p-color-cement">
                    TV and home appliances are a huge investment in our homes and we think twice before buying them, but
                    with the amazon freedom sale, there will be a steep drop in the prices that you wouldn't be able to resist yourself from getting a new TV for your home.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    The sale will feature up to 50 % off on smart TVs and large screen TVs, up to 40 % off on 32 inch TVs and up to 45 % off on premium TVs, therefore it is
                    time to replace your old TV with a new one.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Don't miss any deal on a wide range of washing machines, TVs, refrigerators, dishwashers, air conditioners, chimneys, microwaves and small
                    appliances from top brands like Samsung, amazon basics, Sony, IFB, TCL, Whirlpool, Bosch, LG, Haier, Kevin, BPL, Godrej, Sanyo, Eurodomo and many more.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-devices">Amazon Freedom Sale offers on Amazon devices</h4>
                <br>
                <p class="header4 p-color-cement">
                    Transform your home into a smart home with up to ₹ 5000/- off on amazon devices like amazon echo, fire tv stick, Alexa, and kindle. All amazon devices are in huge demand and this sale
                    offers them at a great discount like never before so make sure to get your hands on these devices before they are gone.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="amzn-brands">Amazon Freedom Sale offers on Amazon brands and more</h4>
                <br>
                <p class="header4 p-color-cement">
                    A vast number of amazon exclusive brands like amazon basics, Solimo, Vedaka, presto, symbol, MYX, house and shields, Inkast denim,
                    supple, Xmate, Centrino and Styleville will be at up to 65 % off during the freedom sale.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    This features a large number of categories including home and kitchen, electronics, furniture, daily essentials, men's clothing, men's shoes, watches, large appliances, luggage, baby care, women's clothing,
                    women's shoes, handbags, kids clothing, headphones, speakers, sports accessories, car accessories, bike accessories and toys.
                </p>
                <div>
                    <br>
                <center><a href="https://www.amazon.in/b?node=5731634031&pf_rd_p=0c5515a4-9dfe-446d-9105-438cf8b094be&pf_rd_r=8J6DXC1J8K6KF6QKP7T3&tag=cuelinkss14110-21&ascsubtag=20190806cl9lhmkj3thx"
                           target="_blank" class="btn btn-s-r btn-a-l btn-b-r">Shop Amazon.in Freedom Sale from India</a></center>
                </div>
                <br>
            </div>
        <br>
        <br>
    </section>

    <section>
        <div class="container fst-service" style="margin-top: 1px">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                        <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Top Online Shopping Sites in India</h2>
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
