@extends('layout')

@section('title', 'How to buy Best book in India | International Shipping Cost')
@section('description', 'Buy the best selling Book online from India for Low Prices. Ship to your country with ShoppRe Cheap International Shipping costs. Easy Book Shopping in India.')
@section('keywords', 'best selling book, indian author, bookstore, shopping online cost, international shipping, buy popular read books')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/online-books-shopping-india-international-shipping"/>
    <meta property="og:title" content="Online shopping for Books in India| Cheap Shipping Costs"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/online-books-shopping-india-international-shipping"/>
    <meta property="og:image" content="https://www.shoppre.com/img/images/bookMob.png"/>
    <meta property="og:description" content="Shop books from any Website in India & Ship books abroad at cheap shipping costs. "/>



    <style>

        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .img-shopperstop-offer {
            display: none;
        }

        .img-product {
            width: 216px;
        }

        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .p-b-26 {
            padding-bottom: 26px !important;
        }

        .img-height{
            height: 250px;
        }

        @media only screen and (max-width: 600px) {
            .img-product {
                width: 120px !important;
            }
            .m-t-img {
                margin-top: 0px !important;
            }
            .p-b-26 {
                padding-bottom: 26px !important;
            }
            .img-height{
                height: 150px;
            }
        }

        @media only screen
        and (min-width: 1024px)
        and (max-height: 1366px)
        and (-webkit-min-device-pixel-ratio: 1.5) {
            .img-product {
                width: 150px !important;
            }
        }
        .first-time-shipment .div-snow {
            padding-top: 146px
        }

        .first-time-shipment .div-snow img {
            position: absolute
        }

        .first-time-shipment .div-snow img {
            margin-left: -3px;
            position: absolute
        }

        .first-time-shipment .div-newyear {
            padding-top: 206px
        }

        .first-time-shipment .div-newyear img {
            margin-left: -12px;
            position: absolute
        }

        .fst-service {
            box-shadow: 0 0 10px rgba(17, 39, 59, .1);
            border-radius: 15px;
            background-color: #fafafb;
            margin-top: -360px;
            padding: 20px
        }

        .fst-service .c-image {
            padding: 20px
        }

        .fst-service .shopandship {
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .ps {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .ic {
            padding: 20px;
            box-shadow: 0 0 6px rgba(80, 125, 188, .08);
            border-radius: 8px;
            border: 1px solid #5a5b5d26
        }

        .fst-service .shopandship:hover {
            border: 1px solid #507dbc
        }

        .fst-service .ps:hover {
            border: 1px solid #507dbc
        }

        .fst-service .ic:hover {
            border: 1px solid #507dbc
        }

        .fst-service .shopandship, .ic, .ps, h2 {
            font-size: 22px;
            font-weight: 500;
            color: rgba(255, 255, 255, .6)
        }

        .fst-service .shopandship, .ic, .ps, p {
            color: #fff;
            font-size: 16px;
            font-weight: 600
        }

        .fst-service .btn-chris-place-order {
            padding: 13px 50px;
            color: #fff;
            width: 300px;
            height: 50px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            border-radius: 30px;
            background-color: #e85151
        }

        .chris-benefits {
            padding-top: 30px
        }

        .chris-benefits ul {
            text-decoration: none;
            list-style: none
        }

        .chris-benefits ul li {
            color: #224464;
            font-family: Montserrat, sans-serif;
            font-size: 15px;
            font-weight: 400;
            text-align: left;
            padding-top: 15px
        }

        .chris-benefits ul li img {
            margin-top: 9px
        }

        .text-center div {
            padding-top: 20px
        }

        .chris-benefits .panel {
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05) !important
        }

        .chris-benefits .panel ul li span {
            margin-left: 15px
        }

        #contact-support {
            padding-bottom: 30px
        }
        .select2-container--default .select2-selection--single {
            background-color: #fff !important;
            border: none !important;
            border-radius: 4px !important;
            height: 40px !important;
            padding-top: 5px !important
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            margin-top: 4px !important
        }

        @media screen and (device-aspect-ratio: 40/71) {
            .img-mobile-view {
                width: 300px;
            }
        }

        @media only screen and (max-width: 600px) {

            .img-mobile-view {
                display: block !important;
            }

            .img-desktop-view {
                display: none !important;
            }

            .fst-service {
                margin-top: -260px
            }

            .chris-benefits ul li {
                font-size: 16px
            }
        }
    </style>

@endsection

@section('content')


    <div class="row" style="margin-top: 3%">
        <img class="img-desktop-view"
             src="/img/images/Book-from-india-desktop.png"
             width="100%">
        <center>
            <img class="img-mobile-view img-shopperstop-offer"
                 src="/img/images/bookMob.png"
                 width="100%" style="margin-top:10%;">
        </center>

    </div>
    <section>

        <div class="container fst-service" style="margin-top: 0px;">

            <div class="row text-center">
                <h2 class="f-s-20 p-color-cement-dark font-weight-900"><u>
                        <i class="fas fa-book-reader"></i> Top Shipping Books From India<i class="fas fa-book-reader"></i>
                    </u></h2>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/alchemist/p/itmfc9jxsc7dckfm?pid=9788172234980&lid=LSTBOK9788172234980YN61C7&marketplace=FLIPKART&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=18fba485-4685-452a-9ddf-8dc8337f201d.9788172234980.SEARCH&ppt=sp&ppn=sp&ssid=2ffqn9r3s00000001584079498999&qH=f0cc536c174fd1ef"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://rukminim1.flixcart.com/image/416/416/book/9/8/0/the-alchemist-original-imadk282hypgngze.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The Alchemist - &nbsp; by Paulo Coelho
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 223
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                   Rating:
                                    <span style="color: #347b4c;">
                                            3.9/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/power-your-subconscious-mind/p/itmfc599jmcfhhwm?affid=salescueli&affExtParam2=CL_54240&affExtParam1=20200313cl8qivpzuoti"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51thwSMFWIL._SX337_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The Power of Your Subconscious Mind - by Joseph Murphy
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 132
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                            4.1/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/zero-one-notes-start-ups-build-future/p/itmec2b892fa0d3d"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51JkDEpHUQL._SX317_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Zero to One: Note on Start Ups or How to Build the Future
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 310
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                            4.2/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/shoe-dog/p/itmfcysgcpg6hshv"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/41Ch2Z3BsVL._SX323_BO1,204,203,200_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Shoe Dog  - Phil Knight - A memoir by the creator of Nike
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 242
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                           4.5/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/educated-international-bestselling-memoir-paperback-import-1-nov-2018/p/itmfee267ph7zhhr"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://rukminim1.flixcart.com/image/416/416/jsxjekw0/book/0/2/7/educated-the-international-bestselling-memoir-paperback-import-1-original-imafed9r7twu49ty.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Educated: Paperback - by Tara Westover
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 499
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                   Rating:
                                    <span style="color: #347b4c;">
                                            4.5/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Pillars-Earth-Kingsbridge-Novels/dp/1509848495"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://rukminim1.flixcart.com/image/416/416/j3lwh3k0/book/4/9/2/the-pillars-of-the-earth-original-imaethwavhydsbxw.jpeg?q=70"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The Pillars of the Earth - by Ken Follett
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 306
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                            4.5/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/zero-one-notes-start-ups-build-future/p/itmec2b892fa0d3d"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/41F8ATXoMOL._SX317_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Attitude is Everything - by Jeff Keller
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 198
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                             4.5/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Subtle-Art-Not-Giving/dp/0062641549"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/511vJPN7p5L._SX331_BO1,204,203,200_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The Subtle Art of Not Giving a F*ck - by Mark Manson
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 369.00
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                           4/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Monk-Who-Sold-His-Ferrari/dp/817992162X/"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://rukminim1.flixcart.com/image/416/416/jrmdvgw0/book/6/2/3/the-monk-who-sold-his-ferrari-original-imafddh7qpcgapgk.jpeg?q=70" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The Monk Who Sold his Ferrari - by Robin Sharma
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 154
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                   Rating:
                                    <span style="color: #347b4c;">
                                            4/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/cry-you-die/p/itmfc59vf9z9gzhd?pid=9788179922323&lid=LSTBOK9788179922323M1NVGD&marketplace=FLIPKART&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=a4e16731-7826-4a8e-b15e-61e3c9503c55.9788179922323.SEARCH&ppt=sp&ppn=sp&ssid=2542zsu8c00000001584083358331&qH=a6f1e9fcd07429fd"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://rukminim1.flixcart.com/image/416/416/jsaocy80/book/3/2/3/who-will-cry-when-you-die-original-imafdw8gnfnvtam5.jpeg?q=70"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Who Will Cry When You Die? - by Robin Sharma
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 139
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                            4/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Think-Grow-Rich-Napoleon-Hill/dp/8192910911"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51Y8jwGiebL._SX328_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Think and Grow Rich - by Napoleon Hill
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 99
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                             4.2/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Search-Schrodingers-Cat-Updated/dp/0552125555"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51LyuQ5aQCL._SX319_BO1,204,203,200_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    In Search Of Schrodinger's Cat: Updated Edition
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 449
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                           4.10/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.flipkart.com/life-s-amazing-secrets/p/itmf76z4byzrhjcz"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/41ga4Wvm1eL._SX330_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    Life's Amazing Secrets - by Gaur Gopal Das
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 146
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                   Rating:
                                    <span style="color: #347b4c;">
                                            4.3/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Habits-Highly-Effective-People/dp/1471131823"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51HshB5UNCL._SX313_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The 7 Habits of Highly Effective People - by R. Stephen Covey
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 432
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                            4.2/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/Only-Life-Laxmi-Journey-Heart/dp/9386797046"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51V2KhawxUL._SX321_BO1,204,203,200_.jpg"/>
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    The Only Life: Osho, Laxmi and a Journey of the Heart
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 223
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                             4.5/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                    <div class="shopandship onam-prod-pic p-b-26 vday-product-div">
                        <a href="https://www.amazon.in/If-Truth-Be-Told-Memoir/dp/9351368068"
                           target="_blank">
                            <div style="padding-top: 0px;">
                                <img class="img-product m-t-img vday-img img-height"
                                     src="https://images-na.ssl-images-amazon.com/images/I/51BubnOQjCL._SX306_BO1,204,203,200_.jpg" />
                            </div>
                            <div style="text-align: left;margin-left: 10%;">
                                <div style="color: #000;font-size: 14px;
                                                padding-top: 0px !important;text-align: left;
                                                text-decoration: none;">
                                    If Truth Be Told: A Monk's Memoir - by Om Swami
                                </div>
                                <div style="padding-top: 0px !important;">
                                        <span style="font-size: 14px;font-weight: bold;
                                                     padding-top: 5px;color: #337ab7;;
                                                     display: inline-block;">
                                            <i class="fa fa-inr" aria-hidden="true"></i> 379
                                        </span>
                                </div>
                                <div style="display: block;padding: 0 0 0 0;
                                                color: #181818;font-size: 14px;font-family: Lato;
                                                text-align: left;">
                                    Rating:
                                    <span style="color: #347b4c;">
                                           4.7/5
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <br>
        <br>
    </section>

    <section>

        <div class="container christmas">
            <label class="f-s-24 f-c-d-greay"> Don’t swipe books but turn the real page: Ship books abroad from India </label>
            <p class="f-s-16 f-c-gray f-w-4 ">Lately, there seems to be nothing much left other than toggling between phone and
                TV remote. Aren’t we forgetting the nostalgic option? Yes, Books are the best way to kill time. Instead of sticking
                to online books and virtual reality, give your eyes some real treat with the best Indian author's books and others.

                <br><br>If you are a book lover, you might already have a list of favourites on your mind. Say, Paulo Coehlo's fantasy novels
                or Robin Sharma's fiction books and other a-z books! You can find the best selling books from India 2019-2020.
                Now, it's time to <b>move your favourites to cart and ship it internationally with <a href="/" target="_blank"> ShoppRe.</a></b>
            </p>

            <h1 class="f-s-20 f-c-d-greay f-w-7">Just name the book you want, you got it!</h1>
            <p class="f-s-16 f-c-gray f-w-4">So, searching for where to buy books online in India
                isn't necessarily a difficult task. You would have known the Online Book Shops India.
                But, product availability is where the problem is. However, with ShoppRe, you can
                <b>browse plenty of Online Indian Bookstores of new and used books options.</b>

                <br><br>Select any book that interests you without checking the product availability. All you have to do is to sign up for free and tell
                us the book you want. Go online books shopping India and the rest is left to <a href="/" target="_blank"> ShoppRe.</a>
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">Where to find Cheap International Shipping for Books?</h3>
            <p class="f-s-16 f-c-gray f-w-4">Never miss the Flipkart Books Sale and Amazon Books sale over
                the thought of excessive shipping costs. Here, you can <b>save up to 80%</b> with the cheapest way
                to ship books internationally. For your orders, you will be assigned with a virtual Indian address
                and a 20-day free personal locker. <br><br>Once your deliverables reach us, all your belongings will be kept
                safe at your customized locker. Meanwhile, track the order status until it reaches your doorstep.
                Also, <b> expect the books on your desk within 3-6 days!</b>
            </p>

            <h3 class="f-s-20 f-c-d-greay f-w-7">Difficulties with the order? Say Hi to Personal Shopper </h3>
            <p class="f-s-16 f-c-gray f-w-4">Buy books online with international shipping at ShoppRe.
                If you are facing difficulties during the payment, or if you have any other problems with your order,
                Just opt for personal shopper assisted purchase service.
                <a href="/personal-shopper-india" target="_blank"> The personal shopper </a> will pay for your purchase and
                it is enough if you make the payment just before the shipping confirmation.
            </p>
            <br>
            <p class="f-s-22 f-c-green f-w-7">Conclusion:</p>
            <p class="f-s-16 f-c-gray f-w-4">For all the book lovers out there,
                <a href="/" target="_blank"> ShoppRe.</a> is here to comfort your Online Books Shopping India.
                Purchasing good books is worth-spending your free time.
                Who knows? You might end up with the best book to read it over and over again!
                So shop books online India and ship it to you at the cheapest international shipping cost.
            </p>

        </div>
        <br>
        <div class="container">
            <div itemscope itemtype="https://schema.org/FAQPage">
                <p class="f-c-red f-s-20" style="font-style: italic">Latest Questions & Frequently asked by our customers:</p>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray">Can I ship books from my house?</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">Yes, you can use our international courier option for the shipment.
                        </p>
                    </div>
                </div>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray">Can I purchase and ship from shops that are not listed on ShoppRe?</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">
                            Yes, you can shop from any other online store. Just keep the link of the product available while filling the shipping form.
                        </p>
                    </div>
                </div>
                <br>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <p itemprop="name" class="f-s-18 f-c-gray">How to order books from amazon India and ship to Malaysia</p>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="f-s-16 f-c-gray f-w-4">
                            Find the book you wanted to order at Amazon.
                            Visit our website and avail the international shipping service option.
                            Fill your details such as your malaysia residence, contact information and other essentials.
                            Confirm your details and now, you are all set to ship books from Amazon India to Malaysia.
                        </p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </section>


    <section class="chris-benefits">
        <div class="container " >
                <h1 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Leave Your Comments</h1>
            <div class="fb-comments" data-href="https://www.shoppre.com/online-books-shopping-india-international-shipping" data-width="1000" data-numposts="5">

            </div>

{{--            <div class="row text-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel boxed outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/myntra-online-shopping-shipping-from-india">Myntra Online Fashion Store</a></span></li>--}}
{{--                            <li><span><a href="/flipkart-online-shopping">Flipkart.com Online Shop</a></span></li>--}}
{{--                            <li><span><a href="/amazon-online-shopping">Amazon.in Shopping India</a></span></li>--}}
{{--                            <li><span><a href="/jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>--}}
{{--                            <li><span><a href="/ajio-online-shopping">AJIO Fashion & Lifestyle Brand</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>--}}
{{--                            <li><span><a href="/chumbak-online-shopping" target="_blank">Chumbak Online Shopping</a></span></li>--}}
{{--                            <li><span><a href="/firstcry-online-shopping" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>--}}
{{--                            <li><span><a href="/fabindia-online-shopping" target="_blank">Fabindia Traditional Wear</a></span></li>--}}
{{--                            <li><span><a href="/lifestylestores-online-shopping" target="_blank">Lifestylestores Shopping India</a></span></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="panel outer border-1px">--}}
{{--                        <ul>--}}
{{--                            <li><span><a href="/pepperfry-online-shopping" target="_blank">Pepperfry Furniture Shopping</a></span></li>--}}
{{--                            <li><span><a href="/shoppersstop-online-shopping" target="_blank">Shoppers Stop Latest Trends‎</a></span></li>--}}
{{--                            <li><span><a href="/nykaa-online-shopping" target="_blank">Nykaa Online Beauty Store</a></span></li>--}}
{{--                            <li><span><a href="/tatacliq-online-shopping" target="_blank">Tata CLiQ Online Shopping</a></span></li>--}}
{{--                            <li><span><a href="https://clnk.in/j1Oo" target="_blank">Biba Ethnic Wear for Ladies</a></span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br/><br/>--}}
{{--            </div>--}}
        </div>
{{--        <div class="text-center">--}}
{{--            <br>--}}
{{--            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">Indian online shopping sites</a>--}}
{{--        </div>--}}
        <br/>
        </div>
    </section>
    <br>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Call us</p>
                    <a href="tel:+91-9148357733" class="header2 p-color-white">+91 91483 57733</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
    </section>

@endsection

@section('js_script')
{{--    <script type='text/javascript'>--}}
{{--        var cId = '52423';--}}

{{--        (function (d, t) {--}}
{{--            var s = document.createElement('script');--}}
{{--            s.type = 'text/javascript';--}}
{{--            s.async = true;--}}
{{--            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/') + 'cuelinksv2.js';--}}
{{--            document.getElementsByTagName('body')[0].appendChild(s);--}}
{{--        }());--}}
{{--    </script>--}}


@endsection
