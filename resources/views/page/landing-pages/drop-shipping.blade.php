@extends('layout')


@section('title', 'International Dropshipping from India and Worldwide Delivery | ShoppRe')
@section('description', 'Start an Online Store with ShoppRe DropShipping')
@section('keywords', '')

@section('css_style')
    <style>
        .c-f-padding{padding-left: 4%;padding-right: 4%;}
        .ps-section {background-color: #11273b;}
        .ps-section .container > div {padding: 20px;margin-bottom: 0em}
        .ps-section .container > div h1 {font-weight: 900;}
        .ps-section .container > #img-shopping{padding-top: 158px}
        .ps-section .container > #img-shopping img {width: 596px;height: 365px;}
        .h-req-assist{margin-bottom: 30px}
        .product-courier span{font-weight: 900;}

        .vid-h-w{height: 400px; width: 100%}
        .div-b-l-w ul li{list-style: none; color:#929ca5; font-weight: 700;font-size: 16px; }
        .img-d-s{display: block}
        .img-m-s{display: none}
        @media only screen and (max-width: 600px) {
            .ps-section .container > div {padding: 10px;margin-bottom: 0em}
            .vid-h-w{height: 300px; width: 100%}
            .img-d-s{display: none}
            .img-m-s{display: block}
        }

    </style>

@endsection
@section('content')
    <section class="ps-section" id="personal-shopper">
        {{--<div class="container-fluid c-f-padding">--}}
        <div class="container no-pad">
            <div class="col-md-12 col-xs-12 no-pad">
                <div class="col-md-6 col-xs-12 pad-t-20">
                    <img class="pull-right img-m-s" src="{{asset('img/images/drop-shipping-mobile.png')}}"
                         alt="personal shopper service in india">
                    <div class="pad-t-20">
                        <br><br><br>
                        <h1 class="f-s-36 f-c-white">Start an Online Store with
                            ShoppRe DropShipping</h1> <br>
                        <p class="f-s-18 f-c-l-gray">Now, start a thriving online store without the hassles of
                            setting up a traditional online store!</p> <br>

                        <a href="{{route('member.plan')}}" class="btn btn-s-r btn-a-l btn-b-r">Start Your FREE Trial</a>

                    </div>
                    <img class="pull-right display-none" src="{{asset('img/images/drop-shipping-mobile.png')}}"
                         alt="personal shopper service in india">
                </div>
                <div class="col-md-6 col-xs-12 no-pad ">
                    <img class="pull-right img-d-s" src="{{asset('img/images/drop-shipping-desktop.png')}}"
                         alt="personal shopper service in india">

                </div>
            </div>
        </div>
    </section>

    <section class="div-b-l-w">
        <div class="container-fluid c-f-padding">
            <div class="col-md-12 col-xs-12 pad-t-20">
               <center>
                   <h1 class="f-s-36 f-c-d-greay f-w-8">Set up your store right here at low cost</h1>
                   <p class="f-s-20 f-c-l-gray">With ShoppRe DropShopping, you can make up a list of products you're selling right over here on our platform, (?)
                       <br>
                       allowing your customers to shop, and for you to get us to be your shipping partner taking care of everything from A to Z.</p>
               </center>
            </div>

            <div class="col-md-12 col-xs-12 pad-t-20">
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-1.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-2.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6 ">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-3.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-4.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6 ">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 pad-t-20">
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-1.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-2.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6 ">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-3.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 pad-20">
                    <div class="div-b-w-s">
                        <img src="{{asset('img/images/div-ship-stores-4.png')}}" alt="" class="img-f-w">
                    </div>
                    <div class="col-xs-12 col-md-12 div-b-w-s no-pad">
                        <div class="col-md-6 col-xs-6">
                            <div class="div-c display-i-b">

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6 ">
                            <label class="f-s-16 f-c-l-gray pull-right display-i-b m-t-10">Price : <span class="f-c-blue">₹699</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

    </section>
    <section class="div-b-w-s"><br><br>
        <div class="container-fluid c-f-padding ">
            <div class="col-md-12 col-xs-12 pad-20">
                <div class="col-md-6 col-xs-12 div-b-w-s  b-r pad-20 ">
                    <div class="col-xs-12 col-md-12 no-pad">
                        <iframe class="vid-h-w" id="video" src="https://www.youtube.com/embed/RALAR9VLPro" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        <h4 class="f-s-16 f-c-l-gray txt-a-c">How Did I Get Some Much-needed Things Shipped From India</h4>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 ">
                    <br>
                    <br>
                    <p class="f-s-16 f-c-l-gray"><br>
                        “All I needed to do was, ask those sellers to ship my purchases to the address which ShoppRe provides, and they even provide locker facilities!” - Aswathy.</p>
                    <p class="f-s-16 f-c-l-gray"><br>
                        She is one of our many happy customers that allowed us the joy of serving them with their shipping needs!

                    </p>
                    <br>
                    <br>
                    <br>
                    <a href="{{route('member.plan')}}" class="btn btn-s-r btn-b-r btn-a-l">Start Your Success Story</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <img src="{{asset('img/images/drop-shipping-process-d.png')}}" alt="" class="img-f-w img-d-s">
            <img src="{{asset('img/images/drop-shipping-process-m.png')}}" alt="" class="img-f-w img-m-s">
        </div>
    </section>
    <section class="div-b-f-w">
        <div class="container">
        <center>
            <h1 class="f-s-36 f-c-d-greay">Well, don't wait around! Begin your journey to success and <br>
                stand tall with a legend afterwards!</h1> <br>
            <a href="{{route('member.plan')}}" class="btn btn-s-r btn-b-r btn-a-l">Start Trial Now!</a> <br><br><br>
        </center>
        </div>
    </section>


@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#personal_shopper").validate({
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
                    var name = $("input[name='Name']").val();
                    var contact_no = $("input[name='ContactNumber']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'personal-shopper-india',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            name: name,
                            contact_no: contact_no,
                        },
                        success: function (data) {
                            console.log(data);
                            $('#diwali-couponcode1').hide();
                            // $('#diwali-couponcode2').css('display','block');
                            $('#diwali-couponcode2').slideDown();
                        }
                    })
                }
            });

        });
    </script>

@endsection



