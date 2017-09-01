@extends('layout')

@section('title', '- Browse Categories | Sellers')

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
                    {{ csrf_field() }}
                    <li><label><input type="radio" name="cat" value="1" checked="">Top 15 Online Stores in India</label></li>
                    <li><label><input type="radio" name="cat" value="2">Apparels - Women, Men and Kids</label></li>
                    <li><label><input type="radio" name="cat" value="3">Apparels - Only Men</label></li>
                    <li><label><input type="radio" name="cat" value="5">Luxury / Designer Wear</label></li>
                    <li><label><input type="radio" name="cat" value="6">Fashion Jewellery</label></li>
                    <li><label><input type="radio" name="cat" value="7">Handicrafts, Furniture &amp; Home Decor</label></li>
                    <hr style="border-style: dashed;border-color: #555;">
                    @foreach($categories as $category)
                      @php
                        $checkarray = array(1,2,3,5,6,7);
                        if(!in_array($category->id, $checkarray)) :
                        $checked = ($category->id == 1) ? 'checked' : "";
                      @endphp
                      <li><label><input type="radio" name="cat" value="{{$category->id}}" {{$checked}}>{{$category->category}}</label></li>
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
                            <a href="{{$web->url}}" target="_blank" title="{{$web->name}}"><span class="brand_logo" style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                            <a href="#"><i class="bookmark-icon"></i></a>
                            <span class="info">{{$web->info}}</span>
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
                            <a href="{{$web->url}}" target="_blank" title="{{$web->name}}"><span class="brand_logo" style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                            <a href="#"><i class="bookmark-icon"></i></a>
                            <span class="info">{{$web->info}}</span>
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
                            <a href="{{$web->url}}" target="_blank" title="{{$web->name}}"><span class="brand_logo" style="background-image: url('{{asset('uploads/stores')}}/{{$logo}}');"></span></a>
                            <a href="#"><i class="bookmark-icon"></i></a>
                            <span class="info">{{$web->info}}</span>
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
          <a href="#" class="btn btn-shoppre">sign up for free</a>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script type="text/javascript">
  $(".nav-tabs a[data-toggle=tab]").on("click", function(e) {
    if ($(this).hasClass("disabled")) {
      e.preventDefault();
      return false;
    }
  });
  $(document).ready(function(){
    $('input[name="cat"]').click(function(e){

      if ($(this).is(':checked')){

        var filters = ["1","2","3","5","6","7"];

        var cat = $(this).val();

        if(jQuery.inArray(cat,filters) == -1){
          $('a[href="#fb"]').addClass('disabled');
          $('a[href="#featured"]').addClass('disabled');
        }else{
          $('a[href="#fb"]').removeClass('disabled');
          $('a[href="#featured"]').removeClass('disabled');
        }
        
        var token = $('input[name=_token]').val();
        $('.ajaxload').show();
        jQuery.ajax({
            url: '{{route("stores.sort")}}',
            type : "POST",
            dataType: 'json',
            data:{ _token:token, cat:cat },
            success: function(data) {
              $('.ajaxload').hide();
              $("#web").html('');
              $("#fb").html('');
              $("#featured").html('');
              $.each(data, function() {
                console.log(data);
                $.each(this['web'], function(key, value) {
                  if(value.info === null){ value.info = "";}
                  $("#web").append('<div class="col-sm-3"><div class="seller_box"><a href="'+value.url+'" target="_blank" title="'+value.name+'"><span class="brand_logo" style="background-image: url(\'{{asset("uploads/stores")}}/'+value.logo+'\');"></span></a><a href="#"><i class="bookmark-icon"></i></a><span class="info">'+value.info+'</span></div></div>');
                });
                $.each(this['fb'], function(key, value) {
                  $("#fb").append('<div class="col-sm-3"><div class="seller_box"><a href="'+value.url+'" target="_blank" title="'+value.name+'"><span class="brand_logo" style="background-image: url(\'{{asset("uploads/stores")}}/'+value.logo+'\');"></span></a><a href="#"><i class="bookmark-icon"></i></a><span class="info">'+value.info+'</span></div></div>');
                });
                $.each(this['feat'], function(key, value) {
                  $("#featured").append('<div class="col-sm-3"><div class="seller_box"><a href="'+value.url+'" target="_blank" title="'+value.name+'"><span class="brand_logo" style="background-image: url(\'{{asset("uploads/stores")}}/'+value.logo+'\');"></span></a><a href="#"><i class="bookmark-icon"></i></a><span class="info">'+value.info+'</span></div></div>');
                });
              });
              $("#web").append("<div class='clearfix'></div>");
              $("#fb").append("<div class='clearfix'></div>");
              $("#featured").append("<div class='clearfix'></div>")
            }
        });
      };
    });
  });
</script>
@endsection