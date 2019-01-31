@extends('myaccount.admin.layout')

<!--CSS for tooltip-->

<style CSS>
  .material-tooltip > .backdrop {
    background-color:#fe9611 ;
    display: block !important;
  }
  .material-tooltip > span {
    outline-width: 20px;
    line-height: 50px;
    font-size: 15px;
    color: black;
  }

</style>

@section('content')
  <div class="content-area" ng-controller="IndexController">
    <div class="breadcrumb-bar">
      <div class="page-title">
        <h1>Shoppre Story</h1>
        <span> Add Shoppre Story </span>
      </div>
    </div><!-- Breadcrumb Bar -->

    <div class="widgets-wrapper">
      <div class="row">
        <div class="masonary">
          <div class="col s12">
            @if (session('error'))
              <div class="alert alert-danger text-center">
                {{ session('error') }}
              </div>
            @endif
            <form method="post" action="{{route('story.submit')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="input-field col s10">
                <input type="text"
                       name="url"
                       required="required"
                       class="form-control"/>
                <label class="active">Url</label>
                @if ($errors->has('url'))
                  <span class="error">{{ $errors->first('url') }}</span>
                @endif
              </div>
              <div class="input-field col s10">
                <input type="text"
                       name="title"
                       required="required"
                       class="form-control"/>
                <label class="active">Title</label>
                @if ($errors->has('title'))
                  <span class="error">{{ $errors->first('title') }}</span>
                @endif
              </div>
              <div class="input-field col s10">
                <input type="text"
                       name="sub_title"
                       class="form-control"/>
                <label class="active">Sub Title</label>
                @if ($errors->has('sub_title'))
                  <span class="error">{{ $errors->first('sub_title') }}</span>
                @endif
              </div>
              <div class="input-field col s10">
                <div id="counter"></div>
                <input type="text"
                       name="pre_description"
                       required="required"
                       class="form-control"/>
                <label class="active">Pre Description</label>

                @if ($errors->has('pre_description'))
                  <span class="error">{{ $errors->first('pre_description') }}</span>
                @endif
              </div>
              <div class="input-field col s8">
                <input type="file"
                       name="story_image"
                       class="form-control"/>
              </div>
              <div class="input-field col s12">
                <textarea name="description" class="materialize-textarea tinymce">{{ old('answer') }}</textarea>
                @if ($errors->has('description'))
                  <span class="error">{{ $errors->first('description') }}</span>
                @endif
              </div>
              <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light red lighten-2">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Content Area -->

@endsection

@section('js_script')
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
