@extends('layout')

@section('title', 'Best and Affordable ShoppRe Courier - THE ONE TO BEAT')
@section('description', 'Ship your items from Anywhere in India to Anywhere Worldwide. The best and affordable way to send parcels overseas. Schedule Courier Pickup online today!')
@section('keywords', 'courier charges, send parcels overseas, international courier services')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/best-affordable-international-courier-services-in-india" />
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
           <div class="col-md-12 col-xs-12 div-b-w-s  b-r no-pad " style="margin-top: 25px;">
               <div class="col-xs-12 col-md-12 no-pad">
                   <iframe class="vid-h-w" id="video" src="https://www.youtube.com/embed/lQi4Io_WH70" frameborder="0"
                           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                   </iframe>
                   <h4 class="f-s-16 f-c-l-gray txt-a-c">Want to Globally Ship your items from ANY part of India?</h4>
               </div>
           </div>
           <div class="col-md-12 col-xs-12">
               <h1 class="f-s-22 f-c-d-greay">Schedule Pickup: Ship your items from Anywhere in India to Worldwide</h1>
               <h1 class="f-s-30 f-c-d-greay f-w-9">ShoppRe Courier - THE ONE TO BEAT</h1>
               <p class="f-s-18 f-c-d-greay f-w-6">Among ShoppRe’s top-notch logistics solutions, ShoppRe Courier is growing up to be one of the best and
                   affordable international courier services in india.</p>
               <div class="col-md-12 col-xs-12 no-pad">
                   {{--<form action="" method="post" id="vidCourier">--}}
                       {{--<div class="col-md-4 col-xs-12 pad-r-10 pad-b-20"><br>--}}
                           {{--<input type="text" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="Name" name="name">--}}
                           {{--<div><br></div>--}}
                           {{--<input id="phone" name="phone" type="tel" class="txt-f-w txt-shadow txt-pad" autocomplete="off"> <br/>--}}
                           {{--<input type="Email" class="txt-f-w txt-shadow txt-pad" autocomplete="off" placeholder="jhon@email.com" name="email">--}}
                           {{--<div class="col-xs-12 col-md-12 pad-t-20">--}}
                               {{--<button type='submit' class="btn btn-s-r btn-b-r btn-l">Sign up FREE</button>--}}
                           {{--</div>--}}
                       {{--</div>--}}
                   {{--</form>--}}
               </div>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   Indians are a traditional bunch and they always make it a point to follow tradition at the least in cultural/ethnic celebrations.
                   Indians have made their mark on almost all things possible and are spread around the whole world. What ShoppRe
                   Courier does is lending a helping hand to all those who wants to remind themselves of their heritage no matter where in the world they are.

               </p> <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   From a Diwali hamper to University documents, ShoppRe ships anything off to anywhere on Earth with a streamlined set
                   of courier services. And in no time, we became <a href="{{route('ics.index')}}">the cheapest way to send parcels overseas</a>!
               </p>
               <h1 class="f-s-18 f-c-d-greay f-w-8 txt-a-l">To book our courier services, all you have to do is;</h1>
               <ul>
                   <li>1. <a href="/schedule-pickup">Schedule your package Pickup</a> from ANYWHERE in India; our experts will come to your door to pick it up,</li>
                   <li>2. We jump through hoops to dispatch your package off to your destination in just 48 hours,</li>
                   <li>3. One of our efficient & appropriate courier partners will get the package to its destination in just 3-6 days, ANYWHERE in the world,</li>

               </ul>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">thus making us the most cheap and reliable international courier of all.</p>
               <h1 class="f-s-18 f-c-d-greay f-w-8 txt-a-l">What else do we offer?</h1>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">Our broad range of services are categorized into three. Apart from ShoppRe Courier, we also have;</p>
               <ul>
                   <li>A. Shop & Ship - for effortless online shopping with international shipping options.</li>
                   <li>B. Personal Shopper - services including doing the shopping for you & forwarding your purchases as a whole.</li>

               </ul>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   In a nutshell, International shipping from India has never been more dependable & smoother!
               </p>
               <br>
               <h1 class="f-s-22 f-c-d-greay f-w-8 txt-a-l">Frequently Asked Questions:</h1>
               <h1 class="f-s-18 f-c-d-greay f-w-8 txt-a-l">What do you charge for a courier from India to USA per kg.?</h1>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   Our international courier charges to the USA start from just Rs.1449/-. Check out our <a href="{{route('pricing')}}">Shipping Calculator</a> for a FREE estimate on your particular courier needs.
               </p>

               <h1 class="f-s-18 f-c-d-greay f-w-8 txt-a-l">How to send a courier from India to Abu Dhabi?</h1>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   ShoppRe Courier specializes in sending couriers from ANYWHERE in India to all around the world, including to Abu Dhabi.
                   You can Schedule a Pickup on our website & we offer door-to-door courier services that spans out in just 3-6 days.
               </p>

               <h1 class="f-s-18 f-c-d-greay f-w-8 txt-a-l">Can I use ShoppRe Courier for parcel forwarding? </h1>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   ShoppRe has a more specified service called Shop & Ship for all package forwarding needs including Personal Shopper services. When you
                   sign up with us, you get a <a href="https://www.shoppre.com/indian-virtual-address">FREE virtual shipping address</a> along with a personal locker at our warehouse for you to safely store your
                   purchases while you go shopping on Indian online stores. <br> <br>
                   At the end of the day, our customers can be rest assured that we offer the best possible international shipping rates, all thanks to our Package Consolidation.
               </p> <br>
               <p class="f-s-18 f-c-l-gray f-w-6 txt-a-l">
                   Hesitate no more, <a href="{{route('ifs.index')}}">Shop From India & Ship Worldwide</a> with ShoppRe from now on!
               </p> <br>

           </div>
           <br>
           <br>
       </div>
    </section>
 @endsection

@section('js_script')
    <script>
        $(document).ready(function(){$("#vidCourier").validate({rules:{email:{required:!0}},messages:{},submitHandler:function(e){var n=$("input[name='name']").val(),i=$("input[name='email']").val(),t=$("input[name='phone']").val(),a=$("input[name=_token]").val();jQuery.ajax({url:"apiVideoCourier",type:"POST",data:{_token:a,name:n,email:i,phone:t},success:function(e){console.log(e),window.location.replace("https://www.shoppre.com/customer/register")}})}})});var input=document.querySelector("#phone");window.intlTelInput(input,{utilsScript:"build/js/utils.js"});
    </script>
@endsection
