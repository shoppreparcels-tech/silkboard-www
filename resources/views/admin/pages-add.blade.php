@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Add New Page</h1>
                <span>Enter page content below.</span>
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
                        <form method="post" action="{{route('admin.pages.submit')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="title" value="{{ old('title') }}" required>
                                <label class="active">Page Title</label>
                                @if ($errors->has('title'))
                                    <span class="error">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="slug" value="{{ old('slug') }}" required>
                                <label class="active">Url Slug</label>
                                @if ($errors->has('slug'))
                                    <span class="error">{{ $errors->first('slug') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <textarea name="content" class="materialize-textarea tinymce">{{ old('content') }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="error">{{ $errors->first('content') }}</span>
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
<script type="text/javascript">
    $(document).ready(function() {
        $("input[name='title']").on("change paste keyup", function() {
           var title = $(this).val();
           var slug = convertToSlug(title);
           $("input[name='slug']").val(slug);
           $("label").addClass('active');
        });
        function convertToSlug(Text)
        {
            return Text
                .toLowerCase()
                .replace(/ /g,'-')
                .replace(/[^\w-]+/g,'')
                ;
        }
    });
</script>
<script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
<script>
    tinymce.init({
        selector: "textarea.tinymce", theme: "modern", height: 500,
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
        upload_dir: '/uploads/',
        external_plugins: { "filemanager" : "{{asset('filemanager/plugin.min.js')}}"},
        content_css: ["{{asset('css/style.css')}}"],
        convert_urls: false,
        relative_urls: false,
    });
</script>
@endsection