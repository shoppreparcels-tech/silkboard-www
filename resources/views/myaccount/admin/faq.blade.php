@extends('myaccount.admin.layout')

@section('css_styles')
@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>FAQs</h1>
                <span>Add/Edit Question & Answers</span>
            </div>
        </div>
        <!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        @if (session('message'))
                          <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form method="post" action="{{route('admin.faq.submit')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="question" value="{{ old('question') }}" required>
                                <label class="active">Question</label>
                                @if ($errors->has('question'))
                                    <span class="error">{{ $errors->first('question') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <textarea name="answer" class="materialize-textarea tinymce">{{ old('answer') }}</textarea>
                                @if ($errors->has('answer'))
                                    <span class="error">{{ $errors->first('answer') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                                <button type="submit" class="btn waves-effect waves-light green darken-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s12">
                    <div class="section">
                      <div class="projects scroll">
                        <ul class="collapsible" data-collapsible="accordion">
                            @foreach($category->faqs as $faq)
                            <li>
                              <div class="collapsible-header">{{$faq->question}}</div>
                              <div class="collapsible-body">
                                <div id="slideup_{{$faq->id}}" style="display:block;width:100%">{!!$faq->answer!!}</div>

                                <p style="clear:both;margin-bottom: 0;">
                                    <a class="slide_trigger" data-target="{{$faq->id}}" href="#" style="display:inline-block;margin:10px 0;"><i class="ti-pencil-alt"></i></a>
                                    <a href="{{route('admin.faq.delete', [$faq->id])}}" style="display:inline-block;margin:10px 0;"><i class="ti-trash"></i></a>
                                </p>

                                <p style="margin: 0;">
                                  <a href="{{route('faq')}}?category={{$category->id}}&question={{$faq->id}}#cat_{{$category->id}}" style="color: #02359c;text-decoration: underline;">{{route('faq')}}?category={{$category->id}}&question={{$faq->id}}#cat_{{$category->id}}</a>
                                </p>

                                <div id="slidedown_{{$faq->id}}" style="display:none">
                                    <form method="post" action="{{route('admin.faq.update')}}" style="float:none;">
                                        {{ csrf_field() }}
                                        <label class="active">Question</label>
                                        <input type="text" class="validate" name="question" value="{{$faq->question}}" required>
                                        <label class="active">Answer</label>
                                        <textarea name="answer" class="materialize-textarea tinymce">{{$faq->answer}}</textarea><br>
                                        <input type="hidden" name="id" value="{{$faq->id}}">
                                        <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                                    </form>
                                </div>
                              </div>
                            </li>
                            @endforeach
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection
@section('js_script')
<script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
    $(".slide_trigger").click(function(e){e.preventDefault();var t=$(this).attr("data-target");$("#slidedown_"+t).slideToggle(),$("#slideup_"+t).slideToggle()}),tinymce.init({selector:"textarea.tinymce",theme:"modern",height:300,plugins:["advlist autolink link image lists charmap print preview hr anchor pagebreak","searchreplace visualblocks visualchars insertdatetime media nonbreaking","table contextmenu directionality emoticons paste textcolor responsivefilemanager"],fontsize_formats:"8pt 10pt 12pt 14pt 18pt 24pt 36pt",toolbar1:"undo redo | styleselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table",toolbar2:" link unlink | media responsivefilemanager | forecolor backcolor  | preview code",image_advtab:!0,external_filemanager_path:"/filemanager/",filemanager_title:"Upload Manager",upload_dir:"/uploads/incoming/",external_plugins:{filemanager:"{{asset('filemanager/plugin.min.js')}}"},content_css:["{{asset('css/style.css')}}"],convert_urls:!1,relative_urls:!1});
</script>
@endsection
