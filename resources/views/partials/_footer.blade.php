<footer itemscope itemtype="http://schema.org/Organization">
    <div class="container-fluid c-f-p nav-h-shadow">
        <div class="col-md-12 col-xs-12 pad-t-40">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 pad-5 ">
                <a itemprop="url" href="{{route('home')}}">
                    <img itemprop="logo" class="s-img-footer"
                         src="{{asset('/img/images/shoppre-logo.png')}}"
                         alt="shoppre.com - your global shipping partner from india">
                </a>
                <div itemscope itemtype="http://schema.org/PostalAddress">
                    <p itemprop="streetAddress" class="footer-text-s f-c-l-gray pad-t-10">IndianShoppre LLP,<br>
                        <span> No. 181, 2nd Cross Road, 7th Main,</span> <br>
                        <span itemprop="streetAddress">Koramangala 1st Block,</span><br>
                        <span itemprop="addressLocality"> Bengaluru -</span>
                        <span itemprop="postalCode">560034,</span><br>
                        <span itemprop="addressRegion">Karnataka,</span>
                        <span itemprop="addressCountry"> India</span></p>
                    <span itemprop="telephone">
                        <a class="footer-a footer-social-media" href="tel:+91-8040944077">
                            <img class="pad-t-10" src="{{asset('img/images/shipping-phone-number.png')}}"
                                 alt="Shoppre customer care">
                        </a>
                    </span><br>
                    <span itemprop="telephone">
                        <a href="https://api.whatsapp.com/send?phone=918277919191&text=Hi%20ShoppRe%20Team;" target="_blank">
                            <img class="pad-t-10" src="{{asset('img/images/shipping-whatsapp.png')}}"
                                 alt="Shoppre contact number">
                        </a>
                    </span><br>
                    <a href="mailto:support@shoppre.com footer-social-media">
                        <img class="pad-t-10" src="{{asset('img/images/shiping-support-mail.png')}}"
                             alt="Shoppre email">
                    </a>

                    <ul class="nav-ul pad-t-10">
                        <li>
                            <a itemprop="url" class="footer-a"
                               href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw">
                                <img class="img-connect"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-youtube-video.svg"
                                     alt="shoppre youtube video">
                            </a>
                            <a itemprop="url" class="footer-a" href="https://www.facebook.com/goshoppre/">
                                <img class="img-connect"
                                     src="{{env('AWS_CLOUD_FRONT')}}/img/svg/go-shoppre-faceboook.svg"
                                     alt="goshoppre facebook">
                            </a>
                            <a itemprop="url" class="footer-a" href="https://twitter.com/Go_Shoppre">
                                <img class="img-connect" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-twitter.svg"
                                     alt="@Go_Shoppre twitter">
                            </a>
                            <a itemprop="url" class="footer-a" href="https://www.instagram.com/shoppre_official">
                                <img class="img-connect" src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shoppre-instagram.svg"
                                     alt="shoppre instagram">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-4 pad-5">
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('about')}}">About Us</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('faq')}}">Shipping FAQ</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="https://ship.shoppre.com/franchise-with-shoppre/" target="_blank">Franchise</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('cguide.index')}}" target="_blank">Country Guides</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="/terms-and-conditions">Terms & Conditions</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="/privacy-policy">Privacy Policy</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="https://www.indeedjobs.com/shopprecom/_hl/en_IN" target="_blank">Careers</a></li>
                    <li class="li"><a class="footer-a" href="{{route('reviews')}}">Customer Reviews</a></li>
                    <li class="li"><a class="footer-a" href="http://shoppretracking.aftership.com" target="_blank">Track Your Shipment <sup class="p-color-red" style="font-size: 8px" id="offer">New</sup></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-8 pad-5">
                <ul class="nav-ul">
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('medicine')}}">Medicine International Courier</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="/university-offer">Documents International Courier</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('packers-movers')}}" >Relocation, Packers & Movers</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('forwarding')}}">Package Forwarding from India</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('voucher')}}">International Shipping Card</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="{{route('first-shipment')}}">First Shipment Discount</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="/international-courier-charges-india-to-usa-per-kg" >Courier from India to USA</a></li>
                    <li class="li"><a itemprop="url" class="footer-a" href="international-courier-charges-india-to-uae-per-kg">Courier from India to UAE</a></li>
                </ul>
            </div>


            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 pad-5">
                <div class="col-md-12 col-xs-12 div-b-w-s pad-20 ">
                    <form class="" id="subscribe" role="form" method="POST">
                        {{csrf_field()}}
                    <h1 class="f-s-26 f-c-d-greay f-w-8 h-l-"><span class="f-c-red">S</span>ubscribe</h1>
                    <p class="f-s-14 f-c-l-gray">Join our Mailing List <br>
                        The First Worldwide Indian Shop & Ship Community - Get Instant Updates, Offers & News</p>
                    <h4 class="f-s-14 f-c-d-greay f-w-8 m-t-5">Email Address</h4>
                    <input type="Email" class="txt-shadow-br txt-l-br  txt-f-w txt-pad txt-s-14"
                           placeholder="Enter your Email id " required>
                    <center>
                        <button type="submit" class="btn btn-s-r btn-b-r m-t-20 ">Subscribe</button>
                    </center>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-md-12 pad-t-10">
            <center><br>
                <p class="f-s-14 f-c-l-gray f-w-8">Ship with ❤️ from India<a class="footer-a" </a>
                </p>
                <p class="f-s-16 f-c-l-gray f-w-8">© 2019, All Rights Reserved - by
                    <a class="footer-a" href="/" itemprop="url">ShoppRe.com™</a>
                </p>
            </center>

        </div>
    </div>


</footer>

