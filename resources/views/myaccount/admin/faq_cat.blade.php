@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>FAQ Categories</h1>
                <span>Q&A Comes Under Categories</span>
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
                        <form method="post" action="{{route('admin.faq.category.submit')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="heading" value="{{ old('heading') }}" required>
                                <label class="active">Heading</label>
                                @if ($errors->has('heading'))
                                    <span class="error">{{ $errors->first('heading') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light green darken-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s12">
                    <div class="section">
                      <div class="projects scroll">
                        <div class="projects-table">
                          <table class="table striped" style="width:auto;min-width:450px;margin-top: 30px;">
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->heading}}</td>
                                    <td><a href="{{route('admin.faq.category.view', [$category->id])}}">Q&A</a></td>
                                    <td width="50px">
                                      <a class="slide_trigger" data-target="slidedown_{{$category->id}}" href="#" title="Edit"><i class="ti-pencil-alt"></i></a>
                                    </td>
                                </tr>
                                <tr id="slidedown_{{$category->id}}" style="display:none">
                                    <td colspan="4">
                                        <br>
                                        <form method="post" action="{{route('admin.faq.category.update')}}">
                                          {{ csrf_field() }}
                                          <div class="input-field col s9">
                                            <input type="text" class="validate" name="heading" value="{{$category->heading}}" required>
                                            <label class="active">Category</label>
                                        </div>
                                        <div class="input-field col s2">
                                            <input type="hidden" name="category_id" value="{{$category->id}}">
                                            <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection
@section('js_script')
<script type="text/javascript">
    $('.slide_trigger').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        $('#'+target).slideToggle();
    });
</script>
@endsection
