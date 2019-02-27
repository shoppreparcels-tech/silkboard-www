@extends('layout')

@section('title', 'Online Shopping From India')
@section('description', 'Shopping now made easy with ShoppRe personal shopper. Hire one of our experts to shop for you and get shipped your packages doorstep worldwide. Sign Up today!')
@section('keywords', 'nri shopping, personal shopper, virtual shipping address, online shopping from usa to india')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/priyamani-ad-launch-parcel-forwarding-service-from-india" />
    <style>
        .vid-h-w{height: 560px; width: 100%}
        .div-b-l-w ul li{list-style: none; color:#929ca5; font-weight: 700;font-size: 18px; }
        @media only screen and (max-width: 600px) {
            .vid-h-w{height: 300px; width: 100%}
        }
     </style>

@endsection
@section('content')
    <section class="div-b-l-w pad-20" >
       <div class="container pad-t-20">
           <div class="col-md-12 col-xs-12 div-b-w-s  b-r no-pad ">
               <div class="col-xs-12 col-md-12 no-pad">
                   <iframe class="vid-h-w" id="video" src="https://www.youtube.com/embed/Zf77ljCx9Ik" frameborder="0"
                           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                   </iframe>
                   <h4 class="f-s-16 f-c-l-gray txt-a-c">Shop Online and Ship from India | ShoppRe.com</h4>
               </div>
           </div>
           <div class="col-md-12 col-xs-12">
               <h1 class="f-s-26 f-c-d-greay f-w-9">International Shipping At Its Finest!</h1>
               <h1 class="f-s-22 f-c-d-greay f-w-9">Sit back, relax & shop from India</h1>
               <h1 class="f-s-22 f-c-d-greay">Now that we make it all easier by designing & deploying streamlined global shipping services for a hassle-free shopping experience!</h1>
               <div class="col-md-12 col-xs-12 no-pad">
                   <form action="" method="post" id="vidPs">
                       <div class="col-md-4 col-xs-12 pad-r-10 pad-b-20"><br>
                           <input type="text" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="Name" name="name">
                           <div><br></div>
                           <input id="phone" name="phone" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off"> <br/>
                           <input type="Email" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="jhon@email.com" name="email">
                           <div class="col-xs-12 col-md-12 pad-t-20">
                               <button type='submit' class="btn btn-s-r btn-b-r btn-l">Sign Up FREE</button>
                           </div>
                       </div>
                   </form>
               </div>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   Go shopping on 1000+ Indian online shops, pick your favorites, ship them to us; we'll store, consolidate,
                   repackage & ship them to you as one - saving you up to</p>
                   <center>
                       <div class="col-md-12 col-xs-12">
                           <center>
                               <div class="div-b-w-s b-r pad-20 col-md-2 col-xs-12">
               <p class="f-s-20 f-c-d-greay f-w-7">80%</p>
               <p class="f-s-16 f-c-l-gray">In shipping costs!</p>
               </center>

           </div>
                       <h1 class="f-s-21 f-c-d-greay f-w-8 txt-a-l">Shop Online And Ship From India at the Cheapest Rates!</h1>
               </center>
       </div>

                <br>
               <h1 class="f-s-20 f-c-d-greay f-w-8 txt-a-l">How does ShoppRe make it work?</h1>
               <p>It is quite simple what you have to do to avail our services; </p>
               <ul>
                   <li>1. Direct all your purchases from as many different sellers as you want, to the virtual shipping address that ShoppRe provides.</li>
                   <br>
                   <li>2. We’ll store them all for FREE in the Personal Locker assigned just for you for 20 days.</li>
                   <br>
                   <li>3. Make a Ship Request from your ShoppRe Dashboard for us to dispatch it.</li>
                   <br>
                   <li>4. We consolidate & repackage them all into just one, saving you up to 80% of the shipping costs!</li>
                   <br>
                   <li>5. Receive your package within 3-6 business days!</li>

               </ul>
               <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">If you need assistance shopping, you can make use of our Personal Shopper Services too.
                   From local credentials to payment; they will be of immense help.
               </p><br>

           <h1>Well, Don't Worry Re, Just Shopp Re!</h1>
           <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">Our customers can be rest assured that we offer the best possible international shipping rates and one might
               even say international shipping from India has never been smoother!</p><br>
           <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">From fussing over Indian online shopping sites that ship worldwide to online personal shoppers from India; we've come a long way, and we'd like you to join us in
               the glory of being the best international package forwarding service from India that offers pretty much everything!</p>
           </div>
           <br>
           <br>
       </div>


    </section>
    {{--<section class="benefits">--}}
        {{--<div class="container" >--}}
            {{--<center>--}}
                {{--<h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>--}}
            {{--</center>--}}
            {{--<br>--}}
            {{--<div class="row text-center">--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="panel ">--}}
                        {{--<ul>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Consolidation</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Repackaging</span></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="panel ">--}}
                        {{--<ul>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Scanned Copies for Document-couriers</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Country-specific</span></li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="panel ">--}}
                        {{--<ul>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>--}}
                            {{--<li><img src="{{asset('img/chris-circle.png')}}" alt=""><span> Product Recommendations</span></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br/><br/>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<br>--}}
    {{--</section>--}}
    <br>
<section>
    <div class="container">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <ul class="nav-ul">
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/amazon-india-shop-international-shipping">Amazon.in International Delivery</a></li>
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/flipkart-shopping-with-shoppre-from-india">Flipkart.com International Delivery</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <ul class="nav-ul">
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/myntra-online-shopping-shipping-from-india">Myntra.com International Delivery</a></li>
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/ajio-online-shopping-international-shipping">Ajio.com International Delivery</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <ul class="nav-ul">
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/jaypore-international-shipping-from-india">Jaypore.com International Delivery</a></li>
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/limeroad-shopping-international-shipping">Limeroad International Delivery</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <ul class="nav-ul">
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/etsy-international-shipping-from-india">Etsy.com International Delivery</a></li>
                <li class="li"><a class="f-s-14 f-c-l-gray" href="/personal-shopper-india">Onlline Shopping Concierge Service</a></li>
            </ul>
        </div>
    </div>
</section>

    <br>
    <br>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#vidPs").validate({
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
                    var name = $("input[name='name']").val();
                    var email = $("input[name='email']").val();
                    var phone = $("input[name='phone']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'apiVideoPriyamani',
                        type: "POST",
                        data: {
                            _token: token,
                            name: name,
                            email: email,
                            phone: phone,
                        },
                        success: function (data) {
                            console.log(data);
                            window.location.replace("https://www.shoppre.com/customer/register");
                        }
                    })
                }
            });

        });
    </script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>
@endsection
