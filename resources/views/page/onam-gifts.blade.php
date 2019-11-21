@extends('layout')

@section('title', 'Onam Shopping Kerala Saree Online and Ethnic Wear for Men, Kids')
@section('description', 'Kerala Onam online shopping ethnic wear for Women Saree, Men Dhoti, Kids Pattu Pavadai. Shop in India and get amazing discounts on Shipping Worldwide')
@section('keywords', 'onam saree online, kerala kasavu saree, balaramapuram kaithari, men wear')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/kerala-onam-online-shopping-guide-from-india" />

    <style>
        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-3px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:651px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection
@section('content')
    <section class="first-time-shipment">
        <div class="container no-padding">
           <div class="col-md-3 div-snow">
               <img src="{{env('AWS_CLOUD_FRONT')}}/img/images/f-t-s-priyamani.png" alt="priyamani" class="img-responsive">
           </div>
           <div class="col-md-6 col-xs-12 no-padding">
               <center>
                   {{--<img src="{{asset('img/images/shoppre-rakhi-left.png')}}" alt="send rakhi online" class="img-new-year"><br>--}}
                   <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>
               </center>
               <center>
                   <h18 class="f-s-50 f-c-white  f-w-9">Celebrate ONAM</h18>
                   <p class="f-s-36 f-c-white f-w-9 ">With ShoppRe.com </p>
                   <a href="/onam-community-shipping-offer" target="_blank"><img src="{{asset('img/images/onam-250-mobile.png')}}" alt="onam offer india" > <br><br></a>
                   <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-r btn-a-l" target="_blank">Sign UP FREE</a>
                   <br>
                   <br>
                   <p class="f-s-15 f-c-l-gray f-w-8">25th August to 25th September 2019</p>

               </center>
           </div>
            <div class="col-md-3 div-newyear">
                <img src="{{asset('img/images/f-s-t-courierbox.png')}}" alt="" class="img-responsive">
            </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12 ">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Shop Onam Sarees, Dress, Gifts & more.  Ship with ShoppRe.com</h2>
                </div>
                <div class="col-md-4 col-xs-12 text-center">
                    <div class="">
                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Rakhi,%20Gifts%20and%20Sweets%20from%20India?" target="_blank">
                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/9880393291-shop-ship-contact-number.png" >
                            {{--<span class="font-16">+91-7338208403</span>--}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 col-xs-12 col-md-4">
                    <div class="shopandship onam-prod-pic" >
                            <img src="{{asset('img/images/pattu-pavadai-girls-onam-dress.png')}}" alt="signup shoppre" >
                        <div class="no-pad Rakhi-mid-div mar-t-10">
                            Pattu Pavadai
                        </div>
                        <div class="check-price-padd">
                            <a href="http://www.malabarshopping.com/kids-collections/check-pattu-pavadai" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Check Price</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="shopandship onam-prod-pic" >
                            <img src="{{asset('img/images/women-cotton-saree-with-blouse-kerala-saree-for-onam.png')}}" alt="signup shoppre" >
                        <div class="no-pad Rakhi-mid-div mar-t-10">
                            Kerala Kasavu Sarees
                        </div>
                        <div class="check-price-padd">
                            <a href="https://www.mirraw.com/store/kerala-sarees" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Check Price</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="shopandship onam-prod-pic" >
                            <img src="{{asset('img/images/balaramapurami-unakkupaavu-handloom-women-saree-kerala.png')}}" alt="signup shoppre" >
                        <div class="no-pad Rakhi-mid-div mar-t-10">
                            Balaramapuram Saree
                        </div>
                        <div class="check-price-padd">
                            <a href="https://www.amazon.in/s?k=balaramapuram+saree&i=apparel&ref=nb_sb_noss" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Check Price</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="shopandship onam-prod-pic" >
                            <img src="{{asset('img/images/black-kara-double-mundu-kerala-traditional-dress-for-men.png')}}" alt="signup shoppre" >
                        <div class="no-pad Rakhi-mid-div mar-t-10">
                            Black Kara Double Mundu
                        </div>
                        <div class="check-price-padd">
                            <a href="https://keralaspecial.in/product/black-kara-double-mundu/" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Check Price</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="shopandship onam-prod-pic" >
                            <img src="{{asset('img/images/onapudava-off-white-dhoti-kasavu-for-men-kerala.png')}}" alt="signup shoppre" >
                        <div class="no-pad Rakhi-mid-div mar-t-10">
                            Golden Double Dothi
                        </div>
                        <div class="check-price-padd">
                            <a href="https://onapudava.com/collections/dhothi/products/dhothi-hd214" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Check Price</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="shopandship onam-prod-pic" >
                            <img src="{{asset('img/images/kerala-indian-state-onam-fancy-dress-costume-for-boys.png')}}" alt="signup shoppre" >
                        <div class="no-pad Rakhi-mid-div mar-t-10">
                            Onam Dress For Boys
                        </div>
                        <div class="check-price-padd">
                            <a href="https://www.hopscotch.in/product/680445/BookMyCostume--Kerala-Indian-State-Onam-Fancy-Dress-Costume-For-Boys-" target="_blank"> <span class="elementor-icon-list-icon">
                                <button class="btn btn-s-r btn-b-r btn-f-w btn-h-40">Check Price</button>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mar-t-25">
                <div class="txt-center">
                        <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                            <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Estimate Shipping Rate</p>
                            </a>
                        </button>
                        <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                            <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Onam,%20Gifts%20and%20Sweets%20from%20India?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Message Us On WhatsApp</p>
                            </a>
                        </button>
                </div>
            </div>
            <div class=" col-md-12 no-pad"><br>
                <center>
                    <h2 class="p-color-cement-dark font-weight-900 ">Onam shopping guide with the best trend and style from India</h2>
                </center>
                <br>
                <ul>
                    <li>
                        <h4><a href="#What_is_Onam"> What is Onam and how to do Onam shopping?</a></h4>
                    </li>
                    <li>
                       <h4><a href="#How_to_shop">How to shop for Onam from abroad?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#How_to_save">How to save some extra cash on shopping for Onam?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#What_to_purchase">What to purchase for your daughter for Onam?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#Indecisive_about">Indecisive about what to wear on Onam for women?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#How_to_shop_Balaramapuram">How to shop Balaramapuram Kaithari sarees from India?</a></h4>
                    </li>
                    <li>
                        <h4><a href="#What_should_men">What should men wear for Onam?</a></h4>
                    </li>
                </ul>
                <br>
                <div id="What_is_Onam">
                    <h2  {{--class="f-s-18 f-c-gray f-w-9"--}} class="p-color-cement-dark font-weight-900 ">What is Onam and how to do Onam shopping?</h2><br>
                    <p class="header4 p-color-cement">
                        Onam is one main crop harvesting festival of Kerala. It is also celebrated with the same vigor and vitality outside India as well.
                        This prominent festival is full of folk dance, music, vigorous games, grand processions, elaborately adorned Pookalam, delicious Onam sadya, thrilling Snake boat race, and unique Kaikottikali dance.
                        And we have curated the latest trends for Onam shopping in this article.
                    </p>
                </div>
                <br>
                <div id="How_to_shop">
                    <h2 class="p-color-cement-dark font-weight-900 ">How to shop for Onam from abroad?</h2>
                    <br>
                    <p class="header4 p-color-cement">
                        To celebrate this festival of love, dignity, reverence, and dharma, you do not need to do much. You can easily do Onam special online shopping from the comfort of your home. Shop for beautiful traditional festive attire for you and your family online through ShoppRe.
                        Despite where in the world you are, we will deliver your package to you within 3-6 days.
                        And if, you have no idea what to purchase, then sit back and continue reading because here is a complete guide for Onam shopping online.
                    </p>
                    <br>
                    <h2 class="p-color-cement-dark font-weight-900 ">Here the easy steps you can follow to do international Onam shopping</h2>
                    <ul>
                        <li class="onam-list">Sign up at ShoppRe.com and you will get a virtual address.</li>
                        <li class="onam-list">Shop for these traditional festive wears from any Indian website</li>
                        <li class="onam-list">Provide the virtual address given by ShoppRe.com at the time of checking out using COD option.</li>
                        <li class="onam-list">We will collect your order and pay for it.</li>
                        <li class="onam-list">Once we receive all of your order we will ship it after you request it to ship.</li>
                        <li class="onam-list">Then we pack and ship the consolidated package at your address abroad. And you receive it within 3-6 days.</li>
                    </ul>
                </div>
                <div id="How_to_save">
                    <h2  {{--class="f-s-18 f-c-gray f-w-9"--}} class="p-color-cement-dark font-weight-900 ">How to save some extra cash on shopping for Onam?</h2><br>
                    <p class="header4 p-color-cement">
                        You can save so much with Onam online shopping offers at various websites.
                        There are wondrous discounts going on at the original price of the products so shop save some cash.
                        You can even save some more if you choose to shop in groups.
                        We offer a fantastic rebate at shipping to everyone <a href="onam-community-shipping-offer" target="_blank">who shops in a group or community</a>.
                        Avail all the benefits and save as much as you can while shopping for all your festive essentials.
                        And 80% less shipping charges are always there with ShoppRe.
                    </p>
                </div>
                <div id="What_to_purchase">
                    <h2  {{--class="f-s-18 f-c-gray f-w-9"--}} class="p-color-cement-dark font-weight-900 ">What to purchase for your daughter for Onam?</h2><br>
                    <p class="header4 p-color-cement">
                        Give your daughter an ethnic attire that she can flaunt.
                        A complete look with Kasavu work blouse and tissue check Pavadai will make your princess look regal in every aspect.
                        She will love and adore this ethnic way of dressing on special occasions.
                        If modern with a hint of ethnicity is your desire for your little girl.
                        Then what you need is something different.
                        Shop from this wide range of super gorgeous and cute collection of kids girls Kerala ethnic off white frocks with a golden border or Kasavu and designer borders.
                    </p>
                </div>
                <div id="Indecisive_about">
                    <h2  {{--class="f-s-18 f-c-gray f-w-9"--}} class="p-color-cement-dark font-weight-900 ">Indecisive about what to wear on Onam for women?</h2><br>
                    <p class="header4 p-color-cement">
                        A traditional Kasavu saree from Kerala is a no brainer to celebrate Onam ostentatiously from an array of Kerala sarees online.
                        These Kerala sarees spell elegance and grandeur of grand festivals like Onam.
                        The simple and magnificent cream saree with glittering golden border is a heart-stealing delight to wear.
                        Don't miss the opportunity to get these gorgeous Kerala sarees online at a discount never seen before.
                        These sarees have a spiritual appeal and a look that oozes placidness so do onam sarees shopping.
                    </p>
                </div>
                <div id="How_to_shop_Balaramapuram">
                    <h2  {{--class="f-s-18 f-c-gray f-w-9"--}} class="p-color-cement-dark font-weight-900 ">How to shop Balaramapuram Kaithari sarees from India?</h2><br>
                    <p class="header4 p-color-cement">
                        Another option is the Balaramapuram Kaithari for Onam saree.
                        These sarees are a handwoven piece of art.
                        Their unique style of weaving coupled with the unique weft processing makes the fabric fine and comfortable to wear.
                        Exclusive cotton fabric with pure Zari work border endows it with six yards of luxury.
                        You can shop for these beauties through ShoppRe and get them delivered at your doorstep.
                        We offer amazing discounts on shipping worldwide.
                        These sarees are best for onam sarees online shopping.
                    </p>
                </div>
                <div id="What_should_men">
                    <h2  {{--class="f-s-18 f-c-gray f-w-9"--}} class="p-color-cement-dark font-weight-900 ">What should men wear for Onam?</h2><br>
                    <p class="header4 p-color-cement">
                        Finding the perfect attire for Onam was never this easy.
                        Go for a simple dhoti with a golden border and a plain white shirt.
                        Here simplicity is the key.
                        Celebrate the opulence of Onam in this traditional look with pride and joy.
                        Shop these exclusive dhotis at rebate going on right now for your Onam shopping online.
                    </p>
                </div>

            <br>
            <br>
                <div>
                <center><a href="{{route('customer.register')}}" class="btn btn-s-r btn-a-l btn-b-r" target="_blank">Sign Up Now for FREE!</a></center>
                </div>
            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h2 class="header1 p-color-cement-dark font-30">Featured Services & Benefits</h2>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies Document-couriers</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>
    <br>
    <br>
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
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

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
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

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
