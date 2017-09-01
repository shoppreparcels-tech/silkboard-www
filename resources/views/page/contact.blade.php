@extends('layout')

@section('title', '- Contact')

@section('content')
  <section class="page_head">
      <div class="pagebanner">
        <img src="img/banner2.jpg" width="100%">
        <div class="banner-cap">
          <h2>Contact <span class="text-orange">Us</span></h2>
        </div>
      </div>
  </section>
  <section class="contact_ico">
    <div class="container">
      <div class="blox">
        <img src="img/contact1.png">
        <h4>Call</h4>
        <span>+91 80 4094 4077</span>
      </div>
      <div class="blox">
        <img src="img/contact2.png">
        <h4>Whatsapp</h4>
        <span>00971 52 7786 707</span>
      </div>
      <div class="blox">
        <img src="img/contact3.png">
        <h4>Email</h4>
        <span>serviceteam@shoppre.com</span>
      </div>
      <div class="blox">
        <img src="img/contact4.png">
        <h4>Live Chat</h4>
        <span>Our Team is at your service 24/7</span>
      </div>
      <div class="blox">
        <img src="img/contact5.png">
        <h4>Hours</h4>
        <span>Monday - Friday<br>
        9:00 AM - 5:00 PM IST<br>
        GMT -05:00</span>
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
                <input type="text" class="form-control" placeholder="Select Country" name="country">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><img src="img/reason.png"></div>
                <input type="text" class="form-control" placeholder="Select Reason" name="reason">
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
          <img src="img/map-1.png">
          <p>IndianShoppre LLP, First Floor, No. 181, 2nd Cross Road, 7th Main, Koramangala 1st Block, Bengaluru I 560034, Karnataka, India</p>
          <hr>
          <h4>Our Office in U.A.E</h4>
          <img src="img/map-2.png">
          <p>Sephora Office, Mezzanine Floor, Flora Creek Hotel Apartments, Near Deira City Centre, Port Saeed | 119062 Dubai, UAE</p>
        </div>
        <div class="contact_social">
          <a href="#">
            <img src="img/facebook.png">
            <span>Like Us</span>
          </a>
          <a href="#">
            <img src="img/instagram.png">
            <span>Follow us</span>
          </a>
          <a href="#">
            <img src="img/twitter.png">
            <span>Tweet to us</span>
          </a>
          <a href="#">
            <img src="img/youtube.png">
            <span>Watch our videos</span>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection