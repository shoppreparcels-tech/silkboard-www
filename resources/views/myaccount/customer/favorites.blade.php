@extends('myaccount.layout')

@section('title', '- Favorite Stores')

@section('content')

    <section class="favstore">
      <div class="container">
        <h2>My Favorite Stores</h2>
        <div class="storeblox">
          <div class="category">
            <label>Category</label>
            {{csrf_field()}}
            <select name="cat" >
              <option value="1">Top 15 Online Stores in India</option>
              <option value="2">Apparels - Women, Men and Kids</option>
              <option value="3">Apparels - Only Men</option>
              <option value="5">Luxury / Designer Wear</option>
              <option value="6">Fashion Jewellery</option>
              <option value="7">Handicrafts, Furniture &amp; Home Decor</option>
              @foreach($categories as $catValue)
                @php
                  $checkarray = array(1,2,3,5,6,7);
                  if(!in_array($catValue->id, $checkarray)) :
                    echo '<option value="'.$catValue->id.'">'.$catValue->category.'</option>';
                  endif;
                @endphp
              @endforeach
            </select>
          </div>
          <div class="list">
            <h3>Favorite Stores</h3>
            <div id="favclub">
              @foreach($stores as $club)
                @php
                  $logo = (!empty($club->store->logo)) ? $club->store->logo : 'brand-logo.png';
                @endphp
                <a href="{{$club->url}}" target="_blank">
                  <div class="blox" style="background-image:url('{{asset('uploads/stores')}}/{{$logo}}');">
                    <span class="bookmark active"></span>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
          <div class="ajaxloader"></div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script type="text/javascript">
  $(document).ready(function(){

    $('select[name="cat"]').change(function(e){
        var cat = $(this).val();
        var token = $('input[name=_token]').val();
        $('.ajaxloader').show();
        jQuery.ajax({
            url: '/store/favorite/sort',
            type : "POST",
            dataType: 'json',
            data:{ _token:token, cat:cat },
            success: function(json) {
              $("#favclub").html('');
              $.each(json.stores, function(key, value) {
                $("#favclub").append('<a href="'+value.url+'" target="_blank"><div class="blox" style="background-image:url(\'uploads/stores/'+value.logo+'\')"><span class="bookmark active"></span></div></a>');
              });
              $('.ajaxloader').hide();
            }
        });
    });
  });

</script>

@endsection
