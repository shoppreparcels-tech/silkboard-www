@extends('layout')

@section('title', 'ShoppRe Awards 2018 | Best Online Shops, Shoppers, Courier & Seller')
@section('description', 'ShoppRe Awards 2018 is not a gaudy celebration of our success which is clearly shown in the numbers & charts, but a gentle reminder of how far we have yet to go')
@section('keywords', 'awards, couriers, shoppers, sellers, favorite, shipper, online shops, uae, usa, australia, canada')

@section('css_style')
    <link rel="stylesheet" href="{{asset('css/animations.css')}}" >
    <link rel="stylesheet" href="{{asset('css/award.css')}}">
    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "ShoppRe Awards 2018",
  "alternateName": "The First Worldwide Indian Shop and Ship Community",
  "url": "https://www.shoppre.com/2018-annual-awards-international-shipping-shopping",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "ShoppRe Awards 2018 - Best-selling online shops, couriers partners, our favorite shoppers and favorite sellers. International Shipping From India",
    "sameAs": [
    "https://www.facebook.com/goshoppre/",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://goo.gl/maps/uuZy4tMs8582",
    "https://play.google.com/store/apps/details?id=com.shoppre.play",
    "https://chrome.google.com/webstore/detail/shoppre-international-shi/kplnmmemlcfmbhbjegagmiiiphghdpch"
  ]
}

    </script>
@endsection
@section('content')
    <section class="award-body">


        <div class="pattern-image"></div>
        <div class="container">
            <div class="circle">
                <img src="{{asset('img/images/awards.png')}}" class="award">
                <h1>ShoppRe   </h1>
                <h1>Awards 2018 Is On   </h1>
            </div><!-- /.circle -->
            <button class="btn-award"><span class="explore"></span></button><!-- /.button -->
            <div class="section animatedParent" data-sequence='1000'>
                <h2 class='animated growIn' data-id='1'>Best-selling Online Shops</h2>

                <div class="divider"></div><!-- /.divider -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12  col-md-7 col-sm-push-2 text-center animatedParent">
                            <div class="col-sm-6">
                                <div class="white-lft animated bounceInLeft">
                                    <img src="{{asset('img/images/human-pic.png')}}">
                                    <div class="ic-award">
                                        the best<br/>
                                        <span>sellout</span>
                                    </div><!-- /.ic-award -->
                                   Myntra.com
                                </div><!-- /.white-lft -->
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="white-rgt animated bounceInRight">
                                    <img src="{{asset('img/images/human-pic.png')}}">
                                    <div class="ic-award">
                                        the up & coming<br/>
                                        <span>seller</span>
                                    </div><!-- /.ic-award -->
                                    Lakshmi, India
                                </div><!-- /.white-rgt -->
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div> <!-- /.section -->


            <div class="section animatedParent" data-sequence='1000'>
                <h2 class='animated growIn' data-id='1'>Couriers We Can Count On</h2>
                <div class="divider"></div><!-- /.divider -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12  col-md-7 col-sm-push-2 text-center animatedParent">
                            <div class="col-sm-6">
                                <div class="white-lft animated bounceInLeft">
                                    <img src="{{asset('img/images/human-pic.png')}}">
                                    <div class="ic-award">
                                       Uprising<br/>
                                        <span>partner</span>
                                    </div><!-- /.ic-award -->
                                    Rahul Thambi, DHL
                                </div><!-- /.white-lft -->
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="white-rgt animated bounceInRight">
                                    <img src="{{asset('img/images/human-pic.png')}}">
                                    <div class="ic-award">
                                        most trusted<br/>
                                        <span>courier</span>
                                    </div><!-- /.ic-award -->
                                    Shobha, DTDC
                                </div><!-- /.white-rgt -->
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section -->
        </div><!-- /.container -->

        <div class="container-fluid animatedParent" data-sequence='1000' id="a">

            <h2 class='animated growIn' data-id='1'>Our Favorite Shoppers</h2>
            <div class="divider100"></div>
            <div class="container animatedParent">

                <div class="col-sm-4">
                    <div class="box-yllw text-center animated fadeInDownShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            {{--the best<br/>--}}
                            <span> SHIPPER</span>
                        </div>
                        <div class="divider40"></div>
                        <img src="{{asset('img/images/circle01.png')}}" class="img-space">

                        <p>Ateeq Sachina<br/>
                            <span>India</span></p>
                    </div><!-- /.box-yllw -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="box-prple text-center animated fadeInUpShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            SUPREME<br/>
                            <span>SHIPPER</span>
                        </div>
                        <div class="divider40"></div>
                        <img src="{{asset('img/images/circle01.png')}}" class="img-space">

                        <p>Angela Thunder<br/>
                            <span>Hawaii</span></p>
                    </div><!-- /.box-prple -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="box-sky text-center animated fadeInDownShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            THE BEST<br/>
                            <span>PERSONAL SHOPPER</span>
                        </div>
                        {{--<div class="divider10"></div>--}}
                        <img src="{{asset('img/images/javier.png')}}" class="img-space">
                        <p class="img-space-p"> Javier Fisherman<br/>
                            <span>Bolivia</span></p>
                    </div><!-- /.box-sky -->
                </div><!-- /.col-sm-4 -->

                <div class="divider100"></div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="box-yllw text-center animated fadeInDownShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            ETHNIC<br/>
                            <span> SHIPPER</span>
                        </div>
                        {{--<div class="divider40"></div>--}}
                        <img src="{{asset('img/images/anupama.png')}}" class="img-space">
                        <p class="img-space-p">Anupama Madhavan<br/>
                            <span>UAE</span></p>
                    </div><!-- /.box-yllw -->
                </div><!-- /.col-sm-4 -->

                <div class="divider100"></div>

                <div class="col-sm-4">
                    <div class="box-pnk text-center animated fadeInUpShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            AWARD FOR<br/>
                            <span>SOCIAL CAUSE</span>
                        </div>
                        {{--<div class="divider40"></div>--}}
                        <img src="{{asset('img/images/israel.png')}}" class="img-space">

                        <p class="img-space-p">Israel<br/>
                            <span>Nigeria</span></p>
                    </div><!-- /.box-pnk -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="box-drk text-center animated fadeInDownShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            FAVOURITE<br/>
                            <span>SHIPPER</span>
                        </div>
                        {{--<div class="divider40"></div>--}}
                        <img src="{{asset('img/images/sheefa.png')}}" class="img-space">
                        <p class="img-space-p">Sheefa Krishna Kumar<br/>
                            <span>UAE</span></p>
                    </div><!-- /.box-dark -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="box-violt text-center animated fadeInUpShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            EPIC<br/>
                            <span>SHIPPER</span>
                        </div>
                        <div class="divider40"></div>
                        <img src="{{asset('img/images/circle01.png')}}" class="img-space">

                        <p>Asuka<br/>
                            <span> Japan</span></p>
                    </div><!-- /.box-violt -->
                </div><!-- /.col-sm-4 -->

                <div class="divider100"></div>
                <h2 class='animated growIn' data-id='1'>Our Favorite Sellers</h2>
                <div class="divider100"></div>
                <div class="col-sm-4">
                    <div class="box-sky text-center animated fadeInDownShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            THE BEST<br/>
                            <span>SELLER</span>
                        </div>
                        <div class="divider10"></div>
                        <img src="{{asset('img/images/circle01.png')}}" class="img-space">

                        <p> Abhinav Mishra<br/>
                            <span>USA</span></p>
                    </div><!-- /.box-sky -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 col-sm-offset-4">
                    <div class="box-pnk text-center animated fadeInUpShort">
                        <img src="{{asset('img/images/ic_award_01.png')}}" class="img-space-top">
                        <div class="fav-ic-award">
                            up coming<br/>
                            <span>SELLER</span>
                        </div>
                        <div class="divider40"></div>
                        <img src="{{asset('img/images/circle01.png')}}" class="img-space">

                        <p>Shilpa Pandey<br/>
                            <span>India</span></p>
                    </div><!-- /.box-pnk -->
                </div><!-- /.col-sm-4 -->

            </div><!-- /.container -->

            <div class="clearfix"></div>
        </div><!-- /.container-fluid -->
        <div class="container num-whisper">
            <div class="animatedParent no-pad" data-sequence='1000'>
                <div class="container no-pad">
                    <h2 class='animated bounceInDown' data-id='1'>What Do the Numbers Whisper?</h2>
                    <div class="divider no-pad"></div>
                    <div class="col-sm-12 no-pad animatedParent">

                        <div class="col-sm-3 no-pad">
                            <div class="white-box text-center animated bounceIn">
                                <div class="middle">
                                  <span><img src="{{asset('img/images/chart1.png')}}" class="award-img">
                                    <p>Indian Stores</p> </span>
                                </div><!-- /.middle -->
                            </div><!-- /.white-box -->
                        </div><!-- /.col-sm-3 -->


                        <div class="col-sm-3 no-pad">
                            <div class="white-box text-center animated bounceIn">
                                <div class="middle">
                                    <span><img src="{{asset('img/images/chart2.png')}}" class="award-img">
                                    <p>Product Categories</p>
                                    </span>
                                </div><!-- /.middle -->
                            </div><!-- /.white-box -->
                        </div><!-- /.col-sm-3 -->


                        <div class="col-sm-3 no-pad">
                            <div class="white-box text-center animated bounceIn">
                                <div class="middle">
                                    <span><img src="{{asset('img/images/chart3.png')}}" class="award-img">
                                        <p>Countries We're Popular In</p>
                                    </span>
                                </div><!-- /.middle -->
                            </div><!-- /.white-box -->
                        </div><!-- /.col-sm-3 -->

                        <div class="col-sm-3 no-pad">
                            <div class="white-box text-center animated bounceIn">
                                <div class="middle">
{{--                                    <span><img src="{{asset('img/images/pie-chart.png')}}">--}}
                                    <span><img src="{{asset('img/images/chart4.png')}}" class="award-img">
                                         <p>International Couriers</p>
                                    </span>
                                </div><!-- /.middle -->
                            </div><!-- /.white-box -->
                        </div><!-- /.sol-sm-3 -->
                    </div><!-- /.col-sm-12 -->
                    <div class="divider"></div>
                    <h2 class="review animated bounceInDown" data-id='1'>Reviews</h2>

                    <div class="review-panel animatedParent">

                        <div class="rvw-lft fl animated bounceInLeft">
                            <img src="{{asset('img/images/ic_smile_01.png')}}" class="zoomoutheader">
                            <div class="divider40"></div>
                            <p>"Working with Shoppre help me to reach
                                products for my business that otherwise would
                                be impossible."<br/>
                            <div class="divider10"></div>
                            <span>- Javier Fisherman, Bolivia</span></p>
                        </div>

                        <div class="rvw-mid fl animated bounceInDown">
                            <img src="{{asset('img/images/ic_smile_02.png')}}" class="zoomoutheader">
                            <div class="divider40"></div>
                            <p>"It's a wonderful site.. great help for NRI s like me who love to shop from Indian traders...
                                easy management of website... very good response via what's app...and very nice delivery
                                service.." <br/>
                            <div class="divider10"></div>
                            <span>- Anupama Madhavan, UAE</span></p>
                        </div>

                        <div class="rvw-rgt fl animated bounceInRight">
                            <img src="{{asset('img/images/ic_smile_03.png')}}" class="zoomoutheader">
                            <div class="divider40"></div>
                            <p>"Amazing and very fast service.They told me it would reach within 5 working days but it actually reached within 3 working days."<br/>
                            <div class="divider10"></div>
                            <span>- Sudeep Sagar, India</span></p>
                        </div>

                    </div>
                </div><!-- /.container -->
            </div><!-- /.section num-whisper-->
        </div>


        <div class="section around-world animatedParent">
            <h2 class='animated shake'>Around the World in 400 Days!</h2>
            <div class="divider"></div>
            <div class="container" style="padding-bottom: 90px">
                <div class="col-sm-4 animated flipInX">
                    <p>
                        It has been 1 whole year since ShoppRe first embarked upon this unusual path of rewriting the
                        norms of global shipping. When we look back now, it has been an ecstatic journey of substantial
                        experiences and followed positive growth.
                    </p>

                    <p>Today, we reach every nook and cranny in the world, bearing hampers of good news, hope, mostly
                        taste and sometimes concern. We give the world the pure joy of opening up a shopping bag or a
                        loving care package from back home; and we thrive in those moments. After all, that is all we’ve
                        ever asked for.</p>
                </div><!-- /.col-sm-4 -->


                <div class="col-sm-8 animated flipInY">
                    <p class="wht-txt">For instance, to a fellow customer in <span>Nigeria;</span> we were the best
                        choice to have some high-
                        quality water purifiers shipped over to his place at the cheapest of costs, to an
                        entrepreneur in <span>Hawaii;</span> we were the most convenient option to procure what he
                        needed
                        for his business at a cost-effective budget, to a collector in <span>Japan;</span> we became the
                        ambassadors of our legends and tales while we helped source a bunch of Indian Epics and
                        artifacts, we reached even <span>Morocco</span> with pieces of clothing that bore the markings
                        of
                        Indian being. </p>

                    <p class="wht-txt">Customer satisfaction has always been our #1 priority, and we take each feedback
                        as
                        constructive criticism to mould our obviously jerky learning curve. Whatever the range and
                        span of our customer base may be, we’re always on our way finding new and cool ways to
                        make the idea of ShoppRe exponentially better for our customers, while staying true to our
                        core.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <p>During the course of the past year, which let us in on a little secret that the world is
                                our oyster; we are soon stepping into the Middle East, starting from Dubai, UAE! We’re
                                expanding our venture, keeping in mind the limitless possibilities we can conquer!</p>
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <p>ShoppRe Awards 2018 is not a gaudy celebration of our success which is clearly shown in
                                the numbers & charts, but a gentle reminder of how far we have yet to go, straight on
                                ahead!</p>
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-sm-8 -->
                <div class="divider"></div>
                <div class="col-sm-6 col-md-6 text-right">
                    <a href="{{route('pricing1')}}" id="singlebutton" name="singlebutton" class="btn btn-primary btn-red btn-award">Our Pricing</a>
                    {{--<button id="singlebutton" name="singlebutton" class="btn btn-primary btn-red btn-award">Check Out--}}
                        {{--Our Pricing--}}
                    {{--</button>--}}
                </div><!-- /.col-md-6 -->
                <div class="col-md-3 text-left">
                    <a href="{{route('stores1')}}" class="btn btn-primary btn-red btn-award" id="singlebutton" name="singlebutton" >Online Store
                        Catalog</a>
                    {{--<button id="singlebutton" name="singlebutton" class="btn btn-primary btn-red btn-award">Online Store--}}
                        {{--Catalog--}}
                    {{--</button>--}}
                </div><!-- /.col-md-3 -->
            </div><!-- /.container -->
        </div><!-- /.section -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src='js/animate.js'></script>
        <script type="text/javascript">
            const bg = document.querySelector('.pattern-image');
            const windowWidth = window.innerWidth / 1;
            const windowHeight = window.innerHeight / 1;
            bg.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX / windowWidth;
                const mouseY = e.clientY / windowHeight;
                bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
            });
        </script>
    </section>
@endsection
