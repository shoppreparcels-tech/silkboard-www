@extends('layout')

@section('title', 'FLIPKART USA Shipping | Shop from India Online | ShoppRe.com')
@section('description', 'Shop Flipkart in India and Ship to USA through ShoppRe International shipping services. Save up to 80% on shipping, delivered to your doorsteps within 3-6 days')
@section('keywords', 'shop from india to usa, shop online india international shipping')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/flipkart-national-shopping-days-sale" />

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
                    <h18 class="f-s-50 f-c-white  f-w-9">50% Discount</h18>
                    <p class="f-s-32 f-c-white f-w-9 ">on your first FLIPKART shipment </p>
                    <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-s-t-coupon.png" alt="" > <br><br>
                    <a href="{{route('customer.register')}}" target="_blank" class="btn btn-s-r btn-b-r btn-a-l ">Sign UP FREE</a>
                    <br>
                    <br>
                    <br>
                    <p class="f-s-10 f-c-l-gray f-w-8">Shop Flipkart from India and Ship to your door-step anywhere in the USA</p>

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
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Flipkart National Shopping Days | From 8th to 10th August
                    </h2>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12">
                    <a href="https://api.whatsapp.com/send?phone=919880393291&text=Can%20I%20Shop%20FLIPKART%20from%20India%20and%20Ship%20to%20USA?" target="_blank" class="c-image">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/9880393291-shop-ship-contact-number.png" alt="shop and ship number shoppre">
                    </a>
                </div>
            </div>
            <div class=" col-md-12 no-pad"><br>
                <br>
                <p class="header4 p-color-cement">
                Flipkart’s National Shopping Days Sale or Big Freedom Sale will be a three-day affair, happening from 8th August to 10th August.
                Flipkart is appreciated for its extensive range of categories and products available on its website, and the national shopping day sale will reduce the price of all of these products for its customers to a great extent.
                The sale guarantees to make enormous offers and discounts on mobiles, electronics, clothing, home appliances, handbags, games, books, beauty products, and much more which means it will have something in store for everyone out there.
                    <br><br>
                Being an Indian it is accessible for us to shop from Flipkart and get our order delivered to our address in India within a few days, but for someone who is residing outside India, it is not easy to shop and ship from Flipkart because Flipkart does not offer international shipping for people outside India.
                So for all the NRI/PIOs, Shoppre has brought its package forwarding services solely dedicated to catering to their needs and longings for Indian products from Indian shopping websites.
                With us, you can effortlessly shop from Flipkart or any other Indian shopping portal and ship your order at your doorstep anywhere in the world within 3-6 days.
                </p>
                <br>
                <ul>
                    <li>
                        <h4><a href="#Great_deal"> Great deals every day during the Flipkart National Shopping Day Sale, 2019</a></h4>
                    </li>
                    <li>
                        <h4><a href="#mobile_phone_gallery">Mobile Phones gallery at a glance</a></h4>
                    </li>
                    <li>
                        <h4><a href="#Electronics">Electronics and accessories</a></h4>
                    </li>
                    <li>
                        <h4><a href="#Fashion">Fashion</a></h4>
                    </li>
                    <li>
                        <h4><a href="#Beauty">Beauty, Toys, Sports Product, Baby care and more</a></h4>
                    </li>
                </ul>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="Great_deal">Great deals every day during the Flipkart National Shopping Day Sale, 2019</h4>
                <br>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp; The Flipkart National Shopping Day sale is offering grand deals on every category site-wide, and with these amazing discounts and offers, it will also launch great deals for its customers now and then to save a bit more.
                </p>
                <br>
                <ul class="header4 p-color-cement">
                    <li><b>Blockbuster Deals:</b> Blockbuster Deals will pop up on the website after every eight <hours class=""></hours>
                    </li>
                    <li><b>Price Crash:</b> There will be massive changes in prices with at least 10% drop as the price gets refreshed  after every eight hours.
                    </li>
                    <li><b>Rush Hour:</b> There will be a huge rush of discounts and deals upto 5 % on top brands for two hours in between 12 a.m. to 2 a.m. </li>
                    <li><b>The Freedom Countdown: </b>The prices will be dropped down upto 20 % for 31 minutes only, and timings will be from  7:47 pm to 8:19 pm.
                    </li>
                    <li><b>Hourly Deals:</b> New deals coming up every hour of the sale period.
                    </li>
                </ul>
                <br>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    If you are an <b> ICICI credit or debit cardholderb </b>, then apart from all the amazing discounts you can also get an instant 10% discount on your order.
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    The sale starts early for <b>Flipkart Plus members</b>, from 7th August 8 PM. They can make payments using super coins and get exclusive discounts.
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    <b>Pre-Sale Deals | 4th to 6th August </b> - Just before the Big Freedom Sale starts, Flipkart will be launching a pre-sale for best prices on a large number of products and fast delivery.
                </p>
                <p class="header4 p-color-cement">
                    <span class="glyphicon glyphicon-hand-right"></span>  &nbsp;&nbsp;
                    Get up to ₹ 25,000 off on <b>flight bookings</b> during the sale and travel wherever you want.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="mobile_phone_gallery">Mobile Phones gallery at a glance</h4>
                <br>
                <p class="header4 p-color-cement">
                    Flipkart is the most reliable place to get a phone at the best price point,
                    and we better believe it when this e-commerce giant says that it is the best time to get the bestseller of the year- <b>Redmi Note 7 Pro</b> starting at just ₹ 13,999/-, with extra 1000 off on exchange.
                    You can also get another eye-catchy phone the <b>Vivo</b> Z1 Pro starting from ₹ 14,990/- only and extra 1000 off on prepaid orders.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9">
                    Below are the top offers on smartphones sitewide with the lowest price ever.
                </h4>
                <div >
                    <table style="width: 100%;text-align: center;">
                        <tr >
                            <th style="text-align: center;">Mobile Phone</th>
                            <th style="text-align: center;">MRP</th>
                            <th style="text-align: center;">Sale Price</th>
                        </tr>
                        <tr>
                            <td>Redmi Note 7S</td>
                            <td> ₹ 11,999</td>
                            <td>₹ 9,999</td>
                        </tr>
                        <tr>
                            <td>Realme 3 Pro</td>
                            <td> ₹ 15,999</td>
                            <td>₹ 12,999</td>
                        </tr>
                        <tr>
                            <td>Honor 20i</td>
                            <td>₹ 16,999</td>
                            <td>₹ 12,999</td>
                        </tr>
                        <tr>
                            <td>Oppo K1</td>
                            <td>₹ 18,990</td>
                            <td>₹ 12,990</td>
                        </tr>
                        <tr>
                            <td>Mi A2</td>
                            <td>₹ 17,499</td>
                            <td>₹  9,999</td>
                        </tr>
                        <tr>
                            <td>Asus Max Pro M1</td>
                            <td>₹ 12,999 </td>
                            <td>₹  8,499</td>
                        </tr>
                        <tr>
                            <td>Nokia 5.1 Plus</td>
                            <td>₹ 13,199</td>
                            <td>₹  7,999</td>
                        </tr>
                        <tr>
                            <td>Honor 8C</td>
                            <td>₹ 12,999</td>
                            <td>₹  7,999</td>
                        </tr>
                        <tr>
                            <td>Realme 2Pro</td>
                            <td>₹ 13,990</td>
                            <td>₹ 10,490</td>
                        </tr>
                    </table>
                </div>
                <br>
                <p class="header4 p-color-cement">
                    If you have been wanting to buy an <b>iPhone</b> for so long, then there will be no better time than the Flipkart freedom sale,
                    the phones will be available on no-cost EMI and complete mobile protection along with other big offers.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    How can we forget the incredible exchange offers on phones and Flipkart too has taken care of that department as well,
                    by offering up to ₹ 3000 extra off on exchange on <b>Samsung A series</b> starting from ₹ 7,990. Also ₹ 4,000 off on exchange over
                    <b>Vivo V15,</b> ₹ 3,000 off on exchange over<b> Vivo V15 Pro</b> and <b>Oppo F11</b>, making all of these are worth buying at these marvelous offers
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Flipkart will also launch grand and never seen before deals on premium smartphones making your wish of getting a premium phone true.
                    You can get up to ₹ 5,000 extra off on exchange over <b>the Samsung S10 series</b> and
                    ₹ 7,000 extra off on exchange over <b>Oppo R17 Pro</b>, and much more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    If you wanted to buy the <b>Redmi 7A </b>then you better hurry because it will be gone in a second when Flipkart puts it on sale
                    at just ₹ 5,999 on Thursday. Flipkart has something to fit everyone's budget including budget phones
                    under ₹ 7,000, so no reason for you to not buy a new phone this independence day.
                    Also get 2GUD certified refurbished mobiles, smart TVs, speakers and much more at up to 80% off.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9">Mobile Phones gallery at a glance</h4>
                <p class="header4 p-color-cement">
                    Buy TV, refrigerators, washing machines, air conditioners, steam irons, microwaves, geysers and much more at up to 75 % off,
                    so do not forget to check for these awesome deals on electronics to save you some cash.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Get a new Android TV for your home and watch all your favorite movies and series in
                    the best quality because Flipkart is putting <b>Iffalcon android TVs</b> on sale every day at sharp 12, noon which will be a limited hour deal.
                </p>
                <br><p class="header4 p-color-cement">
                    Because it is too hot and you can not do without ACs, Flipkart has taken care of that too with a mega price slash on
                    inverter ACs from the brands <b>Hitachi, Carrier, Midea</b> and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    The newly launched <b>Faber Chimneys</b> will be available up to 60 % off during the sale along with great offers on new launches including <b>Samsung (32) HD Ready Smart TV,
                    Midea fully automatic washing machine, Whirlpool 195 L 5 star refrigerator, Livpure Smart ACs and Crompton 3L Instant water geyser.</b>
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Flipkart has brought big savings for the country with products available for shopping <b>under ₹ 599,
                    minimum ₹ 10,000 off and flat 60 % off sitewide</b> and with two amazing offers - <b>Buy 2, get extra 10% off and Buy 3, get an extra 15 % off.</b>
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="Electronics">Electronics and accessories</h4>
                <br>
                <p class="header4 p-color-cement">
                    Whether you want a laptop, a tablet, a desktop, a camera or even a speaker,
                    you will get everything along with accessories, remote controls, covers and cases, memory cards,
                    tripods and much more at a humongous discount of almost 80 % that you have never seen before.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Thin and light laptops from bands like <b>Avita, Acer, Asus,</b> and more will be available at fabulous discounts along with top deals on laptops from <b>Dell, Lenovo,</b> and more.
                    Laptop and computer accessories like keyboard, mouse, router and more from brands like <b>HP and Logitech</b> will also be introduced at great discounts.
                    Save so much on top printers, monitors and more from brands like <b>HP, Acer, LG, Canon, and Epson.</b>
                    Get top deals on <b>Apple iPad</b> and tablets from <b>Apple, Alcatel, Lenovo,</b> and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    There will be a minimum of 50 % off on bestselling party speakers by <b>LG, boAT </b>and more along with true wireless earbuds
                    starting at just ₹ 1,799 from <b>Noise, Skulcande, Bose</b> and many more. Give your phone a new look and an upgrade with mobile accessories,
                    designer back covers, cables, chargers and much more at the lowest price point.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Not even your electronics but you will also have a new look with the top 20 trimmers by <b>Nova, Philips</b> and many more starting at just ₹ 299/-,
                    and up to 60 % off on women's beauty devices from enormous brands like <b>Havells, Vega, Syska</b> and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Grab Fast charging power banks starting at just  ₹ 499 and compact power banks starting at just  ₹ 599
                    from brands like <b>Philips, Ambrane, Urbn,</b> and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Unleash the photographer in you and get the best selling action cameras from <b>Noise, GoPro, DJI,</b> and more starting at just ₹ 2,999
                    along with some high-end DSLRs, mirrorless cameras starting at just ₹ 18,999 from <b>Nikon, Sony, Canon </b>and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Also, astounding deals on smart devices from <b>Google, Mi, Apple</b> and more along with hard disks,
                    pen drives and memory cards from <b>Toshiba, Samsung, Sandisk, Seagate</b> and more will be at discounts to save all your data in a jiffy.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    A deal worth grabbing for all the pro gamers out there is the <b>Xbox One S (1 TB)</b> along with other gaming accessories
                    at huge discounts that start at just ₹ 499/-.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="Fashion">Fashion</h4>
                <br>
                <p class="header4 p-color-cement">
                    On the occasion of 73rd independence day, Flipkart is offering a mind-blowing discount of 73% on fashion apparel for men
                    and women and kids clothing, shoes, watches, sunglasses, beauty products, and a lot more during the Flipkart independence day sale
                    and this immense sale only calls for all of us to reinvent our style and get in all the latest fashion and trends this season.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Exhibit your love towards your country with Flipkart exclusive army printed t-shirts, shoes, pants, military cargo, camouflage t-shirts,
                    bags and a lot more for both men and women at cheap prices from international brands like <b>converse, Provogue, Wildcraft, F Gear </b>and more.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Swipe through some of the best Indian brands like <b>Aurelia, Libas, Divastri, Voylla, Rjwari, Skybags, Lavie, Dressberry, Tokyo Talkies,
                    VIP, Chemistry, Flying machine, People, Metro</b> and more for top offers for everyone only on Flipkart, and find your perfect dress for a
                    date, party, wedding, or even just a casual brunch with friends, and look fashionable and chic all the way from head to toe.
                </p>
                <br>
                <h4 class="f-s-18 f-c-blue f-w-9" id="Beauty">Beauty, Toys, Sports Product, Baby care and more</h4>
                <br>
                <p class="header4 p-color-cement">
                    Beauty products, toys, sports, and books will start at just Rs.99 during the sale and this rebate  will be like a dream come true for so many of us.
                    Buy more to save will be the motto of the Flipkart national shopping day sale as you can <b>get an extra 10 % off on buying 3 products or shopping for ₹1450, 15% off on buying 4 products or shopping for ₹ 1950</b>. And don't miss out on the flea market where everything will be under ₹ 500/-.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Beauty and grooming brands like <b>Lakme, Nivea, Biotique, Vaseline, Himalaya, Wet and Wild, Urban Decay, Fogg</b> and many more will be 25% -70% off
                    so you can not afford to miss this deal that will benefit you to save a lot of cash.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Toys and School supplies brands like <b>Hot Wheels, Barbie, Toyhouse, Disney, Miss & Chief, Funskool</b> and many more will be at up to 70 % off
                    so go get your kids all the toys they crave for.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Baby Care brands like <b>Johnson’s, Himalaya, Miss & Chief, Philips Avent, Cerelac, Chicco </b>and many more will be at a minimum of 20 % off
                    so don't forget to get all the baby essentials during the sale and save a lot.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Food and nutrition brands like <b> Cadbury, Ching’s, Nestle, Lays, American Garden, Muscle blaze, GNC</b> and many more will be at up to 70% off so
                    fill up your pantry and save some cash for your other desires.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Sports and fitness brands like <b>Cosco, Jaspo, GM, DSC, Yonex, Li-Ning, Adrenex by Flipkart</b> and many more will be at 30 % - 80 % off so
                    go get yourself a new cricket gear, football or badminton rackets.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Books and music brands like <b>Juarez, Casio</b> and more will be available at a 20% -70 % off for all the bookworms and music lovers.
                </p>
                <br>
                <p class="header4 p-color-cement">
                    Car and bike accessories brands like <b>Sony, Vega, Steelbird, Ambrane, FKSB, Motul, Shell</b> and many more will start at just ₹ 99/-.
                </p>
                <br>
                <div>
                <center><a href="https://www.flipkart.com/" target="_blank" class="btn btn-s-r btn-a-l btn-b-r">Shop Flipkart.com</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Consolidation</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Flipkart Shipping Address</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
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
