@extends('layout')

@section('title', 'Membership Success | Shoppre - International Shipping Partner')
@section('description', 'Membership Success | Shoppre - International Shipping Partner')
@section('keywords', 'Membership Success | Shoppre - International Shipping Partner')

@section('css_style')
  <!-- Select2 -->
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
@endsection

@section('content')

  <section class="signup_free">
      <div class="row pull-right container">
          Support +91 8277919191 |
          <a href="/contact">Contact US</a>
      </div>
    <div class="container text-left" style="background: #3cabab;padding: 100px;color: black;">
      <div>
          <div class="row">
            <h3>
                <b>Congratulations You have successfully registered with shoppre.com as a premium member</b>
            </h3>
          </div>
      </div>
        <div>
          <div class="row">
              <h4>
                  <b>
                      MemberShip ID : MEM-{{$customer->id}}
                  </b>
              </h4>
              <h4>
                  <b>
                      Validity: {{ date('d-M-Y') }} to {{ date('d-M-Y', strtotime($customer->membership_validity)) }}

                  </b>
              </h4>
              <h4>
                  <b>
                      Membership Type: Premium Membership
                  </b>
              </h4>
          </div>
          <div class="row" style="color: white;font-weight: 900;">
              <h4>
                  <b>
                      <u>Your Indian Address:</u></br></br>
                      {{$customer->name}}</br>
                      SHPR28-598, #181, 1st Floor
                      2nd, Cross Road, 7th Main</br>
                      Koramangala, 1st Block</br>
                      Bengaluru- 560034, Karnataka,</br>
                      India +919148357733</br>
                      Landmark: Near Seema English Nursery School</br>
                  </b>
              </h4>
                  <div class="text-center">
                      <a href="{{route('customer.locker')}}" class="btn btn-shoppre">Proceed to Account</a>
                  </div>

          </div>
      </div>
    </div>
  </section>

@endsection
