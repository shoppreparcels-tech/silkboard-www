@extends('layout')

@section('title', 'About | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/about" />
@endsection
@section('content')
    <section class="heading-section">
        <h1>About us</h1>
        <h2>Who Are We? What We Do? What We Strive For</h2>
    </section>
    <section class="story-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 story-image">
                    <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/about-image.png">
                </div>
                <div class="col-md-6 story-text">
                    <h3>The Story Behind</h3>
                    <p>The tiny bean of an idea of ShoppRe is the brainchild of two Indian women who remain Indian at heart despite growing up and belonging elsewhere.
                        Not willing to give in to the heavily pricey outlets abroad to express or satisfy their quintessentially Indian souls - there came the thought of making an exquisitely reliable one themselves. Having known a huge society full of Indians who would love a better way to access Indian goods; it was a no-brainer to infer that they won’t be the only ones around the world with the same dilemma. Hundreds of hours spent brainstorming, millions of strategic thoughts launched in between after; took birth ShoppRe which,
                        is now crossing borders and re-writing history in the service industry and courier platform.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mission-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mission-text">
                    <h3>Mission</h3>
                    <p> While we fly high with two gorgeous wings on our
                        shoulders – Forwarding and Courier Services; teamed up with all the major Indian online stores and shipping giants such as FedEx, DHL, DTDC - we create whirlwinds in the industry with our steadfastness and prompt nature. As we primarily nullify the shipping costs down to 60%-80% lower; our logistic experts also swear by storing, repackaging,
                        consolidating and shipping off each shipment in a fine-tuned system that exists for extreme customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="vision-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 vision-text">
                    <h3>Vision</h3>
                    <p>
                        We bear each customer and their needs close to heart and treat every package as if it were our own.
                        What we strive for, as a superior entity in international shipping is; getting a better deal for our customers in shipping packages off to anywhere in the world without worrying about even the most trivial of mishaps and most importantly,
                        an undesirable array of shipping costs.
                    </p>
                </div>
                <div class="col-md-5 vision-image">
                    <img class="img-responsive" src="{{env('AWS_CLOUD_FRONT')}}/img/images/vision-image.png">
                </div>
            </div>
        </div>
    </section>
    <section class="delivery-section">
        <div class="container">
            <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">
                <div class="btn signup-btn">
                    <center>
                        Sign Up for FREE
                    </center>
                </div>
            </a>

            <div class="row">
                <h3>Delivering Joy to Your Doorsteps</h3>
                <h4>You've got no reason to wait around any longer, just come Shopp Re!</h4>
                <button class="btn signup-btn" href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">Sign Up for FREE</button>
            </div>
        </div>
    </section>
@endsection
