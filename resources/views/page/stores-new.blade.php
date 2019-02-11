@extends('layout')
@extends('add-sense')

@section('title', 'Indian Online Stores: List of Top Indian Shopping Sites | ShoppRe.com')
@section('description', 'Shop from list of Top Indian Shopping Sites, Facebook & Instagram Sellers. Save by combining multiple packages into one and get it shipped to your country.')
@section('keywords', 'shop, list of top indian shopping sites, facebook, instagram sellers, multiple packages, shipped to your country')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/indian-online-stores"/>

    <meta property="og:title" content=" Top Indian Online Shopping Sites 2019"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.shoppre.com/indian-online-stores"/>
    <meta property="og:image" content="https://www.shoppre.com/img/images/personal-shopper-service.png"/>
    <meta property="og:image:width" content="2224">
    <meta property="og:image:height" content="1250">
    <meta property="og:image:alt" content="ShoppRe Indian Online Shopping Stores" />
    <meta property="og:description" content="Shop from list of Top Indian Shopping Sites, Facebook & Instagram Sellers. Save by combining multiple packages into one and get it shipped to your country."/>
    <meta property="og:site_name" content="ShoppRe Online Shipping Sites in India"/>

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Go_Shoppre" />
    <meta name="twitter:title" content="Top Online Shopping Sites in India 2019" />
    <meta name="twitter:description" content="Shop from list of Top Indian Shopping Sites, Facebook & Instagram Sellers. Save by combining multiple packages into one and get it shipped to your country." />
    <meta name="twitter:image" content="https://www.shoppre.com/img/images/personal-shopper-service.png" />
    <meta name="twitter:image:alt" content="ShoppRe international shipping Price Calculator"/>

    <meta name="twitter:app:country" content="IN"/>
    <meta name="twitter:app:name:googleplay" content="ShoppRe - International Shipping from India"/>
    <meta name="twitter:app:id:googleplay" content="com.shoppre.play"/>
    <meta name="twitter:app:url:googleplay" content="https://www.shoppre.com/"/>

    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "ShoppRe Top Indian Shopping Sites",
  "alternateName": "ShoppRe International Shipping",
  "url": "https://www.shoppre.com/indian-online-stores",
  "image": "https://www.shoppre.com/img/logo.png",
  "description": "Shop from the list of Top Indian Online Shopping Stores, Facebook & Instagram Sellers. Shop as much as you like and Ship in your purchases by combining multiple packages into one and get it shipped to your country, delivered in 3-6 days.",
    "sameAs": [
    "https://www.facebook.com/goshoppre/",
    "https://twitter.com/Go_Shoppre",
    "https://plus.google.com/+SHOPPRECOM",
    "https://www.instagram.com/shoppre_official",
    "https://www.youtube.com/channel/UCCBP1ybWY9spoleKqMgAQaw",
    "https://www.linkedin.com/company/shoppre.com",
    "https://in.pinterest.com/shoppre",
    "https://play.google.com/store/apps/details?id=com.shoppre.play"
  ]
}
</script>
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
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step1.svg" alt="">
                        <h4>Your FREE Shipping Address</h4>
                        <p class="description-p  p-color-cement">#181, 2nd Cross Rd,7th Main, Koramangala<br>
                            1st Block, Bengaluru-560034,<br>
                            Karnataka, India.
                        </p>
                    </div>
                    <div class=" img-rounded" style="display: none">
                        <p class="p-color-cement padding-bottom-15" style="font-weight: 900">STEP 1</p>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step1.svg" alt="">
                        <h4>Get a FREE Virtual Address</h4>
                        <p class="description-p  p-color-cement">Sign up to get a FREE virtual address along with a
                            personal
                            locker; get your purchases delivered to us, we’ll take care of the rest!
                        </p>
                        <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register">Sign Up now</a>
                    </div>
                </div>
                <div class="col-sm-4 border-bottom-red padding-top-bottom-100 ">
                    <div class="img-rounded">
                        <p class=" p-color-cement padding-bottom-15">STEP 2</p>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step2.svg" alt="">
                        <h4>Shop Around</h4>
                        <p class=" description-p  p-color-cement">Purchase from 1000+ online stores
                            and add virtual locker address as delivery address
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 padding-top-bottom-100 " id="mobile-step2">
                    <div class="img-rounded">
                        <p class=" p-color-cement padding-bottom-15">STEP 2</p>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step2.svg" alt="">
                        <h4>Shop Around</h4>
                        <p class=" description-p  p-color-cement">Purchase from 1000+ online stores
                            and add virtual locker address as delivery address
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 padding-top-bottom-100 no-border-inmobile">
                    <div class=" img-rounded">
                        <p class=" p-color-cement padding-bottom-15" style="font-weight: 900">STEP 3</p>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" alt="">
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
                        <div class="col-md-6 col-sm-10 col-xs-10" id="custom-search-input">
                            <div class="input-group search-bar">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>

                                <input
                                    type="text"
                                    class="form-control input-lg  search-bar-input"
                                    name="store"
                                    placeholder="Search your store"
                                    ng-model="Store.model"
                                    uib-typeahead="store.name for store in Store.get($viewValue)"
                                    typeahead-loading="Store.loadingFaqs"
                                    typeahead-no-results="Store.noResults"
                                    typeahead-on-select='Store.select($item)'
                                    typeahead-wait-ms="10"
                                    autocomplete="off"
                                    id="stores"
                                />

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 no-padding stroes-ul">
                            <ul class="list-inline list-unstyled">
                                <li role="presentation" class="active"><a href="#web" aria-controls="web" role="tab"
                                                                          data-toggle="tab">Online Stores</a></li>
                                <li role="presentation"><a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">Social
                                        Stores</a></li>
                                <li role="presentation"><a href="#featured" aria-controls="featured" role="tab"
                                                           data-toggle="tab">Featured Stores</a></li>

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
                                            {{--<span class="glyphicon glyphicon-heart seller-box-heart"></span>--}}
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
                                            {{--<span class="glyphicon glyphicon-heart seller-box-heart"></span>--}}
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


    <section class="content-oes-stores">
       <div class="container">
           <h1>Did you know that India has over 1000 shopping portals online? The number is only going up by day. </h1>

           <p>The beauty of e-commerce is, it makes the market truly borderless. Indian trends are gaining popularity and global shoppers are noticing Indian Online Stores now more than ever!</p>

    <h1>Shop around for anything under the sun!</h1>

    <p>From car seats to cosmetics, you can find anything online and get us to ship’em to you; given that your purchases follow our Customs & Clearance policies & yours.</p>

    <h1>What makes India attractive as a shopping hub?</h1>

    <p>Apart from the global NRI community that is always the most-enthusiastic about Indian products,  the
        other shoppers from around the world approach Indian sellers as their shopping sites offer cheap prices
        for high-quality products like clothing & accessories.
        The huge difference in currency values doesn’t hurt either!</p>

    <h1>Where do we come in to the picture?</h1>

    <p>The majority of shopping sites - even the top e-commerce companies in India such as Amazon India,
        Flipkart or Myntra - doesn’t offer International shipping as a service.  So for those who
        tends to do online shopping here ends up with having to look for an <a href="{{route('ics.index')}}">international shipping
        solution</a> from outside the bounds of the seller to ship their purchases in from India.</p>

    <h1>Grab the best deals, and never miss the crazy sales on your favourite shopping site!</h1>

    <p>Here we get all the popular indian portals including Amazon, Flipkart, Myntra & more in one place so
        that you can check out the <a href="{{route('offers-new.index')}}">offers & sales running</a> on them and pick & choose your purchases well-informed!
    </p>

    <h1>How do you get us to ship to your destination?</h1>
    <p>Just ship your purchases to the <a href="/indian-virtual-address">virtual shipping address</a>  we provide, and we take it from there.
        We have even a Personal Shopper in case you need help with your shopping.</p>
    <p>Now shop from Jabong, SnapDeal or any other <a href="https://www.shoppre.com/sellers-shipping">Indian online seller</a> among the many without a doubt;
        we have made international shipping and, shopping for that matter, tons easier!</p>
    <p>We ship to 220+ countries including the USA, UK, Australia & UAE.</p>


</div>
<br>
<br>
</section>

@endsection

@section('js_script')
    <script type="text/javascript" src="{{asset('js/store.js')}}"></script>
@endsection
