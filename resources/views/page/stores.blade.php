@extends('layout')
@extends('add-sense')

@section('title', 'Browse Categories: List of Top Indian Shopping Sites | Shoppre')
@section('description', 'Shop from list of Top Indian Shopping Sites, Facebook & Instagram Sellers. Save by combining multiple packages into one and get it shipped to your country.')
@section('keywords', 'shop, list of top indian shopping sites, facebook, instagram sellers, multiple packages, shipped to your country')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/indian-online-stores" />
@endsection
@section('content')

	 <section class="page_head">
        <div class="pagebanner">
          <img src="{{asset('img/banner.jpg')}}" width="100%">
          <div class="banner-cap">
            <h2>Brands</h2>
            <h2 class="text-orange">Browse Categories</h2>
          </div>
        </div>
    </section>

    <section class="sellers">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                <form class="browse_form">
                  <ul>
                    <h3>POPULAR CATEGORIES</h3>
                    {{ csrf_field() }}
                    <li><label><input type="radio" name="cat" value="1" class="option-input radio" checked="">Top 15 Online Stores in India</label></li>
                    <li><label><input type="radio" name="cat" value="2" class="option-input radio" >Apparels - Women, Men and Kids</label></li>
                    <li><label><input type="radio" name="cat" value="3" class="option-input radio" >Apparels - Only Men</label></li>
                    <li><label><input type="radio" name="cat" value="5" class="option-input radio" >Luxury / Designer Wear</label></li>
                    <li><label><input type="radio" name="cat" class="option-input radio" value="4">Kids and Moms</label></li>
                    <li><label><input type="radio" name="cat" value="6" class="option-input radio" >Fashion Jewellery</label></li>
                    <li><label><input type="radio" name="cat" value="7" class="option-input radio" >Handicrafts, Furniture &amp; Home Decor</label></li>
                    <hr style="border-style: dashed;border-color: #555;">
                    <h3>OTHER CATEGORIES</h3>
                    @foreach($categories as $category)
                      @php
                        $checkarray = array(1,2,3,4,5,6,7);
                        if(!in_array($category->id, $checkarray)) :
                        $checked = ($category->id == 1) ? 'checked' : "";
                      @endphp
                      <li><label><input type="radio" name="cat" class="option-input radio" value="{{$category->id}}" {{$checked}}>{{$category->category}}</label></li>
                      @php
                        endif;
                      @endphp
                    @endforeach
                  </ul>
                </form>
              </div>
              <div class="col-md-9">
                <div class="seller_tab">
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#web" aria-controls="web" role="tab" data-toggle="tab">Top Website Sellers</a></li>
                    <li role="presentation"><a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">Top FB/Instagram Sellers</a></li>
                    <li role="presentation"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Shoppre Featured Sellers</a></li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="web">
                      @foreach($webs as $web)
                        <div class="col-sm-3">
                          <div class="seller_box">
                            @php
                              $logo = (!empty($web->logo)) ? $web->logo : 'brand-logo.png';
                            @endphp
                            <a href="{{$web->url}}" target="_blank" title="{{$web->name}}">
                                <span class="brand_logo"
                                       style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');">
                                </span>
                            </a>
                            @if(Auth::check())
                              @if(in_array($web->id, $favs))
                              <a href="#" class="myfavstore active" data-clubid="{{$web->id}}"><i class="bookmark-icon"></i></a>
                              @else
                              <a href="#" class="myfavstore" data-clubid="{{$web->id}}"><i class="bookmark-icon"></i></a>
                              @endif
                            @endif
                            @if(empty($web->info))
                              <span class="info" style="background: none"></span>
                            @else
                              <span class="info">{{$web->info}}</span>
                            @endif
                          </div>
                        </div>
                      @endforeach
                      <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="fb">
                      @foreach($fbs as $fb)
                        <div class="col-sm-3">
                          <div class="seller_box">
                            @php
                              $logo = (!empty($fb->logo)) ? $fb->logo : 'brand-logo.png';
                            @endphp
                            <a href="{{$fb->url}}" target="_blank" title="{{$fb->name}}"><span class="brand_logo" style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                            @if(Auth::check())
                              @if(in_array($fb->id, $favs))
                              <a href="#" class="myfavstore active" data-clubid="{{$fb->id}}"><i class="bookmark-icon"></i></a>
                              @else
                              <a href="#" class="myfavstore" data-clubid="{{$fb->id}}"><i class="bookmark-icon"></i></a>
                              @endif
                            @endif
                            <span class="info">{{$fb->info}}</span>
                          </div>
                        </div>
                      @endforeach
                      <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="featured">
                      @foreach($feats as $feat)
                        <div class="col-sm-3">
                          <div class="seller_box">
                            @php
                              $logo = (!empty($feat->logo)) ? $feat->logo : 'brand-logo.png';
                            @endphp
                            <a href="{{$feat->url}}" target="_blank" title="{{$feat->name}}"><span class="brand_logo" style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                            @if(Auth::check())
                              @if(in_array($feat->id, $favs))
                              <a href="#" class="myfavstore active" data-clubid="{{$feat->id}}"><i class="bookmark-icon"></i></a>
                              @else
                              <a href="#" class="myfavstore" data-clubid="{{$feat->id}}"><i class="bookmark-icon"></i></a>
                              @endif
                            @endif
                            <span class="info">{{$feat->info}}</span>
                          </div>
                        </div>
                      @endforeach
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="ajaxload"></div>
                </div>
          </div>
          </div>
        </div>
    </section>

    <section class="signup_free">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness today!</h3>
          <p>All you need is a membership to get your Indian Shipping Address immediately!</p>
          <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">sign up for free</a>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection
