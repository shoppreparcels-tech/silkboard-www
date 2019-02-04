@extends('layout')


@section('title', 'video')
@section('description', 'video')
@section('keywords', '')

@section('css_style')
    <style>
        .vid-h-w{height: 560px; width: 100%}
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
                   <h4 class="f-s-16 f-c-l-gray txt-a-c">Package from multiple online stores consolidated and ship to you as one package</h4>
               </div>
           </div>
           <div class="col-md-12 col-xs-12">
               <h1 class="f-s-22 f-c-d-greay">Package Consolidation: Secret to shipping at the Cheapest From India</h1>
               <h1 class="f-s-22 f-c-d-greay f-w-9">Package consolidation Service</h1>
               <p class="f-s-16 f-c-d-greay f-w-6">Package from multiple online stores consolidated and ship to you as one package</p>
               <br>
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
