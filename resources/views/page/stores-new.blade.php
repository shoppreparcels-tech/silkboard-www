@extends('layout')
@extends('add-sense')

@section('title', 'Browse Categories: List of Top Indian Shopping Sites | Shoppre')
@section('description', 'Shop from list of Top Indian Shopping Sites, Facebook & Instagram Sellers. Save by combining multiple packages into one and get it shipped to your country.')
@section('keywords', 'shop, list of top indian shopping sites, facebook, instagram sellers, multiple packages, shipped to your country')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/shop-from-india-ship-worldwide"/>
@endsection
@section('content')
    <section class="b-heading-section">
        <div class="container">
            <div class="row padding-bottom">
                <center>
                    <h1 class="header1 p-color-white">Keep Track of Indian Online Stores!</h1>
                    <h2 class="header2 p-color-cement">Browse through the hottest of Indian online stores, shop as much
                        as you
                        <br>like & ship in your purchases in just 3 steps. </h2>
                </center>
            </div>
        </div>

    </section>
    <section role="steps">
        <div class="container steps-container">
            <div class=" steps-row">
                <div class="col-sm-4 padding-top-bottom-100">
                    <div class=" img-rounded">
                        <p class="p-color-cement padding-bottom-15" style="font-weight: 900">STEP 1</p>
                        <img src="{{asset('img/svg/d-step1.svg')}}" alt="">
                        <h4>Your FREE Shipping Address</h4>
                        <p class="description-p  p-color-cement">#181, 2nd Cross Rd,7th Main, Koramangala<br>
                            1st Block, Bengaluru-560034,<br>
                            Karnataka, India.
                        </p>
                    </div>
                    <div class=" img-rounded" style="display: none">
                        <p class="p-color-cement padding-bottom-15" style="font-weight: 900">STEP 1</p>
                        <img src="{{asset('img/svg/d-step1.svg')}}" alt="">
                        <h4>Get a FREE Virtual Address</h4>
                        <p class="description-p  p-color-cement">Sign up to get a FREE virtual address along with a
                            personal
                            locker; get your purchases delivered to us, we’ll take care of the rest!
                        </p>
                        <a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register">Sign Up now</a>
                    </div>
                </div>
                <div class="col-sm-4 border-bottom-red padding-top-bottom-100 ">
                    <div class="img-rounded">
                        <p class=" p-color-cement padding-bottom-15">STEP 2</p>
                        <img src="{{asset('img/svg/d-step2.svg')}}" alt="">
                        <h4>Shop Around</h4>
                        <p class=" description-p  p-color-cement">Purchase from 1000+ online stores
                            and add virtual locker address as delivery address
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 padding-top-bottom-100 " id="mobile-step2">
                    <div class="img-rounded">
                        <p class=" p-color-cement padding-bottom-15">STEP 2</p>
                        <img src="{{asset('img/svg/d-step2.svg')}}" alt="">
                        <h4>Shop Around</h4>
                        <p class=" description-p  p-color-cement">Purchase from 1000+ online stores
                            and add virtual locker address as delivery address
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 padding-top-bottom-100 no-border-inmobile">
                    <div class=" img-rounded">
                        <p class=" p-color-cement padding-bottom-15" style="font-weight: 900">STEP 3</p>
                        <img src="{{asset('img/svg/d-step3.svg')}}" alt="">
                        <h4>@ Your Doorsteps</h4>
                        <p class="  description-p p-color-cement">
                            We will ship your products from you your doorsteps in
                            just 3 to 6 days!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sellers">
        <div class="container" id="stores-radio">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <form class="browse_form">
                        <ul>
                            <h3 class="category-heading">POPULAR CATEGORIES</h3>
                            {{ csrf_field() }}
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="1" checked="">
                                    <span class="label-text">Top 15 Online Stores in India</span>
                                </label>
                            </li>
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="2">
                                    <span class="label-text">Apparels - Women, Men and Kids</span>
                                </label>
                            </li>
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="3">
                                    <span class="label-text">Apparels - Only Men</span>
                                </label>
                            </li>
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="5">
                                    <span class="label-text">Luxury / Designer Wear</span>
                                </label>
                            </li>
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="4">
                                    <span class="label-text">Kids and Moms</span>
                                </label>
                            </li>
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="6">
                                    <span class="label-text">Fashion Jewellery</span>
                                </label>
                            </li>
                            <li class="radio-button-blue">
                                <label>
                                    <input type="radio" name="cat" value="7">
                                    <span class="label-text">Handicrafts, Furniture &amp; Home Decor</span>
                                </label>
                            </li>
                            <hr style="border-style: dashed;border-color: #555;">
                            <h3 class="category-heading">OTHER CATEGORIES</h3>
                            @foreach($categories as $category)
                                @php
                                    $checkarray = array(1,2,3,4,5,6,7);
                                    if(!in_array($category->id, $checkarray)) :
                                    $checked = ($category->id == 1) ? 'checked' : "";
                                @endphp
                                <li class="radio-button-blue">
                                    <label>
                                        <input type="radio" name="cat" value="{{$category->id}}">
                                        <span class="label-text"{{$checked}}>{{$category->category}}</span>
                                    </label>
                                </li>
                                @php
                                    endif;
                                @endphp
                            @endforeach
                        </ul>
                    </form>
                </div>
                {{-- MOBILE CATEGORIES --}}

                <div class="col-md-8">
                    <div class="row search-bar-row">
                        <div class="visible-xs col-xs-2 category-toggle-div">
                            <button type="button" class="btn btn-info btn-md mobile-category-toggle" data-toggle="modal"
                                    data-target="#categoryModal">
                                <span class="glyphicon glyphicon-align-justify"></span>
                            </button>

                        </div>
                        <div class="col-md-7 col-sm-10 col-xs-10" id="custom-search-input">
                            <div class="input-group search-bar">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>

                                <input
                                    type="text"
                                    class="form-control input-lg  search-bar-input"
                                    name="faq"
                                    placeholder="Search your store"
                                    ng-model="Faq.model"
                                    uib-typeahead="faq.question for faq in Faqs.get($viewValue)"
                                    typeahead-loading="Faqs.loadingFaqs"
                                    typeahead-no-results="Faqs.noResults"
                                    typeahead-on-select='Faqs.select($item)'
                                    typeahead-wait-ms="10"
                                    autocomplete="off"
                                />

                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12 no-padding stroes-ul">
                            <ul class="list-inline list-unstyled">
                                <li role="presentation" class="active"><a href="#web" aria-controls="web" role="tab"
                                                                          data-toggle="tab">Online Stores</a></li>
                                <li role="presentation"><a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">Social
                                        Stores</a></li>
                                <li role="presentation"><a href="#featured" aria-controls="featured" role="tab"
                                                           data-toggle="tab">Favourites</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="seller_tab">
                        {{-- <ul class="nav nav-tabs nav-justified" role="tablist">
                           <li role="presentation" class="active"><a href="#web" aria-controls="web" role="tab" data-toggle="tab">Top Website Sellers</a></li>
                           <li role="presentation"><a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">Top FB/Instagram Sellers</a></li>
                           <li role="presentation"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Shoppre Featured Sellers</a></li>
                         </ul>--}}
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="web">
                                @foreach($webs as $web)
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="seller_box">
                                            <span class="glyphicon glyphicon-heart seller-box-heart"></span>
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
                                                    <a href="#" class="myfavstore active" data-clubid="{{$web->id}}"><i
                                                            class="bookmark-icon"></i></a>
                                                @else
                                                    <a href="#" class="myfavstore" data-clubid="{{$web->id}}"><i
                                                            class="bookmark-icon"></i></a>
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
                                    <div class="col-sm-3 col-xs-3">
                                        <div class="seller_box">
                                            @php
                                                $logo = (!empty($fb->logo)) ? $fb->logo : 'brand-logo.png';
                                            @endphp
                                            <a href="{{$fb->url}}" target="_blank" title="{{$fb->name}}"><span
                                                    class="brand_logo"
                                                    style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                                            @if(Auth::check())
                                                @if(in_array($fb->id, $favs))
                                                    <a href="#" class="myfavstore active" data-clubid="{{$fb->id}}"><i
                                                            class="bookmark-icon"></i></a>
                                                @else
                                                    <a href="#" class="myfavstore" data-clubid="{{$fb->id}}"><i
                                                            class="bookmark-icon"></i></a>
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
                                    <div class="col-sm-3 col-xs-3">
                                        <div class="seller_box">
                                            <span class="glyphicon glyphicon-heart seller-box-heart"></span>
                                            @php
                                                $logo = (!empty($feat->logo)) ? $feat->logo : 'brand-logo.png';
                                            @endphp
                                            <a href="{{$feat->url}}" target="_blank" title="{{$feat->name}}"><span
                                                    class="brand_logo"
                                                    style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                                            @if(Auth::check())
                                                @if(in_array($feat->id, $favs))
                                                    <a href="#" class="myfavstore active" data-clubid="{{$feat->id}}"><i
                                                            class="bookmark-icon"></i></a>
                                                @else
                                                    <a href="#" class="myfavstore" data-clubid="{{$feat->id}}"><i
                                                            class="bookmark-icon"></i></a>
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
                    <!-- Modal FOR DISPLAY THE CATEGORIES -->
                    <div id="categoryModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Search Box Comes Here</h4>
                                </div>
                                <div class="modal-body category-in-modal">
                                    <form class="browse_form category-in-modal">
                                        <ul>
                                            <h3 class="category-heading">POPULAR CATEGORIES</h3>
                                            {{ csrf_field() }}

                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="1" checked=""><span
                                                        class="label-text">Top 15 Online Stores in India</span></label>
                                            </li>
                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="2"><span
                                                        class="label-text">Apparels - Women, Men and Kids</span></label>
                                            </li>
                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="3"><span
                                                        class="label-text">Apparels - Only Men</span></label></li>
                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="5"><span
                                                        class="label-text">Luxury / Designer Wear</span></label></li>
                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="4"><span
                                                        class="label-text">Kids and Moms</span></label></li>
                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="6"><span
                                                        class="label-text">Fashion Jewellery</span></label></li>
                                            <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                        value="7"><span
                                                        class="label-text">Handicrafts, Furniture &amp; Home Decor</span></label>
                                            </li>
                                            <hr style="border-style: dashed;border-color: #555;">
                                            <h3 class="category-heading">OTHER CATEGORIES</h3>
                                            @foreach($categories as $category)
                                                @php
                                                    $checkarray = array(1,2,3,4,5,6,7);
                                                    if(!in_array($category->id, $checkarray)) :
                                                    $checked = ($category->id == 1) ? 'checked' : "";
                                                @endphp
                                                <li class="radio-button-blue"><label><input type="radio" name="cat"
                                                                                            value="{{$category->id}}">
                                                        <span class="label-text"{{$checked}}>{{$category->category}}
                                                    </label></li>
                                                @php
                                                    endif;
                                                @endphp
                                            @endforeach
                                        </ul>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="signup_free">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<h3>So what are you waiting for? Shopp <span class="red">re</span>! Open your big box of happiness today!</h3>--}}
    {{--<p>All you need is a membership to get your Indian Shipping Address immediately!</p>--}}
    {{--<a href="{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register" class="btn btn-shoppre">sign up for free</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

@endsection

@section('js_script')
    <script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection
