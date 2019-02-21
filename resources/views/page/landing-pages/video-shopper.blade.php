@extends('layout')

@section('title', 'Best Shopping International Shipping from India | Personal Shopper')
@section('description', 'Shopping now made easy with ShoppRe personal shopper. Hire one of our experts to shop for you and get shipped your packages doorstep worldwide. Sign Up today!')
@section('keywords', 'nri shopping, personal shopper, virtual shipping address, online shopping from usa to india')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/personal-shopper-online-shopping-from-india-shipping" />
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
                   <iframe class="vid-h-w" id="video" src="https://www.youtube.com/embed/q5R63gFUREk" frameborder="0"
                           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                   </iframe>
                   <h4 class="f-s-16 f-c-l-gray txt-a-c">Shop from multiple Indian online stores and ship to your doorsteps, 3-6 days delivery.</h4>
               </div>
           </div>
           <div class="col-md-12 col-xs-12">
               <h1 class="f-s-26 f-c-d-greay f-w-9">How Relevant Is Our Personal Shopper?</h1>
               <h1 class="f-s-22 f-c-d-greay"> While the market happens to be the whole world, shopping also becomes a more-than-one-person job</h1>
               <div class="col-md-12 col-xs-12 no-pad">
                   <form action="" method="post" id="vidPs">
                       <div class="col-md-4 col-xs-12 pad-r-10 pad-b-20"><br>
                           <input type="text" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="Name" name="name">
                           <div><br></div>
                           <input id="phone" name="phone" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off"> <br/>
                           <input type="Email" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="jhon@email.com" name="email">
                           <div class="col-xs-12 col-md-12 pad-t-20">
                               <button type='submit' class="btn btn-s-r btn-b-r btn-l">Sign up FREE</button>
                           </div>
                       </div>
                   </form>
               </div>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   Personal Shopper - the phrase indicates a person who'd run around the shops & do the shopping for you; either standing by your side
                   through the whole time you shop, or doing it all on your behalf without your presence. What
                   <a href="/offers">ShoppRe offers</a> is a virtual Personal Shopper who stands for all the aforementioned Personal Shopping Services but, performed online.
               </p> <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   While you're an avid shopper with only international Credit/Debit cards to make payment; Our Personal Shopper will
                   come to your aid just like <a href="/personal-shopper-shopping-concierge-from-india">how an International Personal Shopper</a> would help you out in any other country other than your home.
                   We offer to either pay for you on your behalf after you place the order and get it shipped to the Virtual Shipping
                   Address we provide, given that you'll have to pay us later down the line or; do the entire shopping for you.
               </p> <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   Each of our Personal Shopper Orders is carefully dealt with, and made sure of being a quality experience for the particular customer until we send
                   off the package abroad. With the set of our top-notch services as far as Assisted Purchase is concerned; we figured it'd be the best gift for
                   foreign shoppers and the global NRI community alike. It also rectifies the issue of not having an Indian address to
                   ship your packages to - enter, the <a href="{{route('indianVirtual')}}">Virtual Shipping Address</a>!
               </p> <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   The majority of Indian Sellers do not offer to ship packages abroad. May it be Amazon India, Myntra or Flipkart (who currently do not deliver internationally);
                   their customers from outside of India will have to find another option to help them with all of these hassles and ship off their packages to their
                   destination in the safest & most-affordable way possible.
               </p> <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   What our Personal Shoppers exist for, is to make the whole process of <a href="/shop-from-india-ship-worldwide">online shopping with international shipping</a> as easy & smooth as possible.
               </p> <br>
               <h1 class="f-s-20 f-c-d-greay f-w-8 txt-a-l">Here's how we operate;</h1>
               <ul>
                   <li>1. You'd have to Sign Up with ShoppRe</li>
                   <br>
                   <li>2. Paste the links of your purchases from your ShoppRe DashBoard</li>
                   <br>
                   <li>3. We'll make the purchase(s) for you.</li>
                   <br>
                   <li>4. The packages reach our facility.</li>
                   <br>
                   <li>5. You pay the bill including the nominal shipping fee we charge.</li>
                   <br>
                   <li>6. And, make a Ship Request whenever you're ready to ship them in.</li>
               </ul>
               <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">Can't wait to find out how it works? You don't have to think twice about
                   <a href="/shop-ship">shopping from India</a> anymore, our
                   Personal Shoppers are the expert help you sure need.
               </p><br><br>
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
                        url: 'apiVideoPs',
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
