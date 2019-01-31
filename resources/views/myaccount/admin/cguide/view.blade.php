@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Country Guide - {{strtoupper($country->name)}}</h1>
                <span>View & Edit Details Below</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="col s12">
                    <form method="post">
                        <div class="input-field col s12">
                            <select id="select_iso">
                                <option value="" selected>Select Country</option>
                                @foreach($countries as $selCountry)
                                  <option value="{{$selCountry->iso}}" {{$country->iso == $selCountry->iso ? 'selected' : ''}}>{{$selCountry->name}}</option>
                                @endforeach
                            </select>
                            <label>Change Country</label>
                        </div>
                    </form>
                </div>

                <div class="col s8">
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="widget z-depth-1">
                        <form class="form-horizontal" method="post" action="{{route('admin.cguide.update')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if(!empty($guide->banner_img))
                                <img src="{{asset('/uploads/country/guide/banner')}}/{{$guide->banner_img}}" width="100%">
                            @endif
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>Upload Banner Image 1280x285</span>
                                    <input type="file" name="banner_img" accept="image/*" capture="camera">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                                @if ($errors->has('banner_img'))
                                    <span class="error">{{ $errors->first('banner_img') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <h6 style="margin: 0 0 10px;">DUTIES AND TAXES</h6>
                                <textarea name="dutytax" class="materialize-textarea tinymce">{{$guide->dutytax or ''}}</textarea>
                            </div>
                            <div class="input-field col s12">
                                <label>Shoppre Advantage</label>
                                <textarea name="dutytax_meta" class="materialize-textarea">{{$guide->dutytax_meta or ''}}</textarea>
                            </div>
                            <div class="input-field col s12">
                                <h6 style="margin: 0 0 10px;">PACKAGE TRANSIT TIMES</h6>
                                <textarea name="transits" class="materialize-textarea tinymce">{{$guide->transits or ''}}</textarea>
                            </div>
                            <div class="input-field col s12">
                                <label>Shoppre Advantage</label>
                                <textarea name="transits_meta" class="materialize-textarea">{{$guide->transits_meta or ''}}</textarea>
                            </div>
                            <div class="input-field col s12">
                                <h6 style="margin: 0 0 10px;"> PRODUCTS YOU CAN'T SHIP INTERNATIONALY TO {{strtoupper($country->name)}}</h6>
                                <textarea name="forbidden" class="materialize-textarea tinymce">{{$guide->forbidden or ''}}</textarea>
                            </div>
                            <div class="input-field col s12">
                                <label>Shoppre Advantage</label>
                                <textarea name="forbidden_meta" class="materialize-textarea">{{$guide->forbidden_meta or ''}}</textarea>
                            </div>
                            <h6 style="margin: 0 10px 0px;"> VIDEO SECTION</h6>
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="video_url" value="{{$guide->video_url or ''}}">
                                <label class="active">Url</label>
                            </div>
                            <div class="input-field col s12">
                                <label>Header</label>
                                <input type="text" class="validate" name="video_head" value="{{$guide->video_head or ''}}">
                            </div>
                            <div class="input-field col s12">
                                <label>Description</label>
                                <textarea name="video_desc" class="materialize-textarea">{{$guide->video_desc or ''}}</textarea>
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="country_id" value="{{$country->id}}">
                                <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col s4">
                    <div class="widget z-depth-1">
                        <form method="post" action="{{route('admin.cguide.update_count')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="my-profile-widget" style="margin-top: -20px;">
                                <div class="profile-widget-head">
                                    @if(!empty($country->flag))
                                    <span style="left: 40%; border-radius: 0; width: 150px; top: 20px; "><a href="{{asset('uploads/country')}}/{{$country->flag}}" target="_blank"><img src="{{asset('uploads/country')}}/{{$country->flag}}" width="100%"></a></span> </div>
                                    @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="name" value="{{$country->name}}" required>
                                <label class="active">Country Name</label>
                                @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col s12">
                                <div class="">
                                  <label>Upload Flag</label>
                                  <input type="file" name="flag">
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <div class="switch">
                                    <label>
                                      No
                                      @if($country->shipping == "1")
                                      <input type="checkbox" name="shipping" value="1" checked>
                                      @else
                                      <input type="checkbox" name="shipping" value="1">
                                      @endif
                                      <span class="lever"></span>
                                      Yes
                                    </label>
                                </div>
                                <label class="active">Shipping to this Country?</label>
                                <br>
                                <br>
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="country_id" value="{{$country->id}}">
                                <button type="submit" class="btn waves-effect waves-light green">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection

@section('js_script')
  <!-- Select2 -->
  <script type="text/javascript">
    $("#select_iso").change(function(){
        if ($(this).val().length != 0) {
            window.location = "/admin/country/guide/"+$(this).val();
        }
    });
  </script>
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    <script>
          tinymce.init({
            selector: "textarea.tinymce", theme: "modern", height: 300,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                 "searchreplace visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
            ],
           fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
           toolbar1: "undo redo | styleselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table",
           toolbar2: " link unlink | media responsivefilemanager | forecolor backcolor  | preview code",
           image_advtab: true ,
           external_filemanager_path:"/filemanager/",
           filemanager_title:"Upload Manager" ,
            upload_dir: '/uploads/incoming/',
           external_plugins: { "filemanager" : "{{asset('filemanager/plugin.min.js')}}"},
           content_css: ["{{asset('css/style.css')}}"],
           convert_urls: false,
           relative_urls: false,

          });
      </script>
@endsection
