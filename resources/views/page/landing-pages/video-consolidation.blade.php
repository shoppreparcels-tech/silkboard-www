@extends('layout')


@section('title', 'Consolidation Video LP')
@section('description', 'video')
@section('keywords', '')

@section('css_style')
    <style>
        .vid-h-w{height: 560px; width: 100%}
        .div-b-l-w ul li{list-style: none; color:#929ca5; font-weight: 700;font-size: 16px; }
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
                   <iframe class="vid-h-w" id="video" src="https://www.youtube.com/embed/eFop4beZmOk" frameborder="0"
                           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                   </iframe>
                   <h4 class="f-s-16 f-c-l-gray txt-a-c">Package from multiple online stores consolidated and ship to you as one package</h4>
               </div>
           </div>
           <div class="col-md-12 col-xs-12">
               <h1 class="f-s-22 f-c-d-greay">Package Consolidation Services</h1>
               <h1 class="f-s-28 f-c-d-greay f-w-9">How Does Our Package Consolidation Help You?</h1>
               <p class="f-s-18 f-c-d-greay f-w-6">Consolidating multiple packages into one shipment has the potential to save a big chunk of your
                   international shipping costs - up to 80% of it, it seems!
               </p>
               <form action="">
                   <div class="col-md-4 col-xs-12 pad-r-10 pad-b-20"><br>
                       <input id="phone" name="phone" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off"> <br/>
                       <input type="Email" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="jhon@email.com">
                    <div class="col-xs-12 col-md-12 pad-t-20">
                        <button type='submit' class="btn btn-s-r btn-b-r btn-l">Sign up FREE</button>
                    </div>
                   </div>

               </form>
           </div>


           <p class="f-s-16 f-c-l-gray f-w-6 txt-a-l">
               Package consolidation services has risen as an extremely relevant shipping solution and ShoppRe is taking the lead in India! With
               the amount of international attention we receive on our cultural aspects such as yoga, ayurveda & more nowadays; it is evident that
               people are looking in, curious, welcoming & ready to try them on.
           </p>
           <h1 class="f-s-22 f-c-d-greay f-w-8 txt-a-l">Consolidated shipping services can come in handy in one of these two situations;</h1>
           <ul>
               <li>1. If you’re on a mission to shop, it is very obvious that you can’t stick to just one shop. Especially if you’re buying online and that
                   too from a faraway country. And, single international shipments cost a load that you can’t be serious in considering shipping in individual
                   shipments. The first 0.5 Kg costing the most and all.</li>
               <br>
               <li>2. Indian online stores that ship internationally would be few to none. If the online shop that you’re trying to shop from doesn’t ship internationally,
                   you’d have no choice but to go for an alternative solution to ship your purchases in.</li>

           </ul>
           <h1 class="f-s-22 f-c-d-greay f-w-8 txt-a-l">How does ShoppRe make it work?</h1>
           <p class="f-s-16 f-c-l-gray f-w-6 txt-a-l">It is quite simple what you have to do to avail our services;</p>
           <ul>
               <li>1. Direct all your purchases from as many different sellers you want, to the virtual shipping address that ShoppRe provides.</li>
               <li>2. We’ll store them all for FREE in the Personal Locker assigned just for you for 20 days.</li>
               <li>3. Make a Ship Request from your ShoppRe Dashboard for us to dispatch it.</li>
               <li>4. We consolidate & repackage them all into just one, saving you up to 80% of the shipping costs!</li>
               <li>5. Receive your package within 3-6 business days!</li>

           </ul>
           <p class="f-s-16 f-c-l-gray f-w-6 txt-a-l">
               If you need assistance shopping, you can make use of our Personal Shopper Services too. From local credentials to payment; they will be of immense help.
           </p>
           <br>
           <ul>
               <li><span class="f-c-d-greay f-w-8">For the smart shoppers</span> who look for the cheapest way to ship in products from India, the savings alone makes it a no-brainer to go for Consolidation. </li>
               <br>
               <li><span class="f-c-d-greay f-w-8">For the avid shoppers & low-key shopaholics</span> around the world; instead of waiting around for Flipkart/Myntra International
                   shipping to become a possibility, this would be a multifaceted alternative and the best at that.
               </li>
           </ul>

           <p class="f-s-16 f-c-l-gray f-w-6 txt-a-l">Okay then,</p>
           <p class="f-s-16 f-c-l-gray f-w-6 txt-a-l">Shop From India & Ship Worldwide with ShoppRe from now on! </p>
           <p class="f-s-16 f-c-l-gray f-w-6 txt-a-l"><a href="https://twitter.com/hashtag/EasyShippingByShoppRe">#EasyShippingByShoppRe</a></p>


           <br>
           <br>
       </div>
    </section>
    <section class="benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>
            </center>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Scanned Copies for Document-couriers</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Country-specific</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/chris-circle.png')}}" alt=""><span> Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <br>
        <br>
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
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'apiVideoLp',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                        },
                        success: function (data) {
                            console.log(data);
                            window.location.replace("https://www.shoppre.com/register");
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