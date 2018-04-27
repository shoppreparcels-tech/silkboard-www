@extends('layout')

@section('title', 'Contact | Shoppre - International Shipping Partner')
@section('description', 'Have any questions or concerns? about your package or shipping services please call us at +91-8040944077 or start Live chat, Whatsapp with Team Shoppre.')
@section('keywords', 'questions, concerns, about your package, shipping services, please call us, start live chat, whatsapp, team shoppre')

@section('css_style')
<style>
  #map1,#map2 {
    height: 180px;
    width: 100%;
   }
   .infobox{}
   .infobox h5{margin: 0;}
   .infobox p{margin: 0;font-size: 12px;margin-top: 5px !important;}
</style>
@endsection

@section('content')
  <section class="page_head">
      <div class="pagebanner">
        <img src="{{asset('img/banner2.jpg')}}" width="100%">
        <div class="banner-cap">
          <h2>Contact <span class="text-orange">Us</span></h2>
        </div>
      </div>
  </section>
  <section class="contact_ico">
    <div class="container">
      <div class="blox">
        <img src="{{asset('img/contact1.png')}}">
        <h4>Call</h4>
        <span><a href="tel:+91 80 4094 4077">+91 80 4094 4077</a></span>
      </div>
      <div class="blox">
        <img src="{{asset('img/contact3.png')}}">
        <h4>Email</h4>
        <span><a href="mailto:support@shoppre.com">support@shoppre.com</a></span>
      </div>
      <div class="blox">
        <img src="{{asset('img/contact4.png')}}">
        <h4>Live Chat</h4>
        <span><a href="https://tawk.to/chat/59d72784c28eca75e4624678/default/?$_tawk_popout=true" target="_blank">Our Team is at your service 24/7</a></span>
      </div>
      <div class="blox">
        <img src="{{asset('img/contact5.png')}}">
        <h4>Hours</h4>
        <span>Monday - Sunday<br>service 24/7</span>
      </div>
    </div>
  </section>
  <section class="contact_us">
    <div class="container">
      <div class="col-sm-7">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="contact_form">
          <form class="form-horizontal" method="post" action="{{route('contact.submit')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/name.png"></div>
                <input type="text" class="form-control" placeholder="First Name" name="firstname">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/name.png"></div>
                <input type="text" class="form-control" placeholder="Last Name" name="lastname">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/mail.png"></div>
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/locker.png"></div>
                <input type="text" class="form-control" placeholder="My Locker(optional)" name="locker">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon"><img src="img/country.png"></div>
                  <select class="form-control select2" name="country">
                      <option value="">Select Country</option>
                      @foreach($countries as $country)
                          <option value="{{$country->name}}">{{$country->name}}</option>
                      @endforeach
                  </select>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/phone-512.png"></div>
                <input type="number" class="form-control " placeholder="Contact Number" name="phone">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/reason.png"></div>
                <select class="form-control select2" name="reason">
                    <option value="Select Reason">Select Reason</option>
                    <option value="Can't I sign into my account">Can't I sign into my account
                    <option value="Can you ship Dangerous Goods?">Can you ship Dangerous Goods?
                    <option value="Can you buy goods for me?">Can you buy goods for me?
                    <option value="Can I shop from any website I want?"> Can I shop from any website I
                        want?
                    <option value="Do you offer a pick up service?"> Do you offer a pick up service?
                    <option value="How do I apply for a membership?">How do I apply for a membership?
                    <option value="How do I cancel my account?"> How do I cancel my account?
                    <option value="How do I cancel my shipment request?">How do I cancel my shipment
                        request?
                    <option value="How do I place a Personal Shopper order?">How do I place a Personal
                        Shopper order?
                    <option value="How can I purchase items online?">How can I purchase items online?
                    <option value="How do I partner with Shoppre.com?">How do I partner with
                        Shoppre.com?
                    <option value="How do I track my package?"> How do I track my package?
                    <option value="How Much do you Charge for Shipping?">How Much do you Charge for
                        Shipping?
                    <option value="What are my payment options?">What are my payment options?
                    <option value="What are the Personal Shopper works?">What are the Personal Shopper
                        works?
                    <option value="What are the Personal Shopper Fees?"> What are the Personal Shopper
                        Fees?
                    <option value="When am I charged for duties and taxes?"> When am I charged for
                        duties and taxes?
                    <option value="Why am I not able to create a ship request?"> Why am I not able to
                        create a ship request?
                    <option value="What carriers do you ship with?"> What carriers do you ship with?
                    <option value="What if I entered my address wrong?"> What if I entered my address
                        wrong?
                    <option value="Where is my package?">Where is my package?
                    <option value="What is the consolidation process?">What is the consolidation
                        process?
                    <option value="Why was my registration unsuccessful?">Why was my registration
                        unsuccessful?
                    <option value="Other Help?"> Other Help?
                </select>
              </div>
            </div>
            <div class="form-group textarea">
                <textarea type="text" rows="6" class="form-control" placeholder="Enter Your Message" name="msg_content"></textarea>
            </div>
            <div class="form-group">
              <div class="input-group">
                <button type="submit" class="btn btn-shoppre">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="contact_loc">
          <h4>Our Office in India</h4>
          <div id="map1"></div>
          <p>IndianShoppre LLP, First Floor, No. 181, 2nd Cross Road, 7th Main, Koramangala 1st Block, Bengaluru I 560034, Karnataka, India</p>
          <hr>
          <h4>Our Office in U.A.E</h4>
          <div id="map2"></div>
          <p>Sephora Office, Mezzanine Floor, Flora Creek Hotel Apartments, Near Deira City Centre, Port Saeed | 119062 Dubai, UAE</p>
        </div>
        <div class="contact_social">
          <a href="https://www.facebook.com/goshoppre/" target="_blank">
            <img src="img/facebook.png">
            <span>Like Us</span>
          </a>
          <a href="https://www.instagram.com/shoppre_official/?hl=en" target="_blank">
            <img src="img/instagram.png">
            <span>Follow us</span>
          </a>
          <a href="https://twitter.com/Go_Shoppre" target="_blank">
            <img src="img/twitter.png">
            <span>Tweet to us</span>
          </a>
          <a href="https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw" target="_blank">
            <img src="img/youtube.png">
            <span>Watch our videos</span>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js_script')
  <script>
    var map1, map2;
    function initialize() {
        var LatLng1 = {lat: 12.9257893, lng: 77.6343453};
        map1= new google.maps.Map(document.getElementById("map1"), {
            zoom: 14,
            center: LatLng1,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker1 = new google.maps.Marker({
          position: LatLng1,
          map: map1,
        });

        var LatLng2 = {lat: 25.2534363, lng: 55.3282428};
        map2 = new google.maps.Map(document.getElementById("map2"), {
            zoom: 14,
            center: LatLng2,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker2 = new google.maps.Marker({
          position: LatLng2,
          map: map2,
        });

    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQzl11fjwwyiw_KRIV61HN7U-5HPPwmLQ&callback=initialize"></script>
@endsection
