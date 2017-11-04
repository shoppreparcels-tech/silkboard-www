@extends('admin.layout')

@section('css_style')
    <style type="text/css">
        table td p{font-size: 13px;margin: 0 0 5px;}
        table tr td{background: #fff;}
    </style>
@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Reviews</h1>
                <span>Add/Edit Reviews</span>
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
                        <form method="post" action="{{route('admin.reviews.submit')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="person" value="{{ old('person') }}" required>
                                <label class="active">Name</label>
                                @if ($errors->has('person'))
                                    <span class="error">{{ $errors->first('person') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="countrid">
                                    @foreach($countries as $country)
                                    <option {{old('countrid') === $country->id ? "selected" : ""}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                <label>Country</label>
                                @if ($errors->has('countrid'))
                                    <span class="error">{{ $errors->first('countrid') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <textarea name="review" class="materialize-textarea">{{ old('review') }}</textarea>
                                <label class="active">Review</label>
                                @if ($errors->has('review'))
                                    <span class="error">{{ $errors->first('review') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <div class="switch">
                                    <label>
                                      No
                                      <input type="checkbox" name="approve" value="1">
                                      <span class="lever"></span>
                                      Yes
                                    </label>
                                </div>
                                <label class="active">Review approved?</label>
                                <br>
                                <br>
                            </div>
                            <div class="input-field col s2">
                                <label class="active">Rating</label>
                                <p class="range-field">
                                  <input type="range" min="1" max="5" name="rating" value="2" />
                                </p>
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
                        {{ $reviews->links() }}
                        <div class="projects-table">
                          <table class="table" style="margin-top: 30px;">
                            <tbody>
                                @foreach($reviews as $review)
                                <tr>
                                    <td>
                                        <p>
                                            {{$review->person}} - {{$review->country->name}}
                                            @if($review->approve == '1')
                                                (Approved)
                                            @else
                                                (Not Approved)
                                            @endif
                                        </p>
                                        <p>
                                            @php
                                                for($i = 1; $i <= 5; $i++ ){
                                                    if($review->rating >= $i){
                                                        echo '<i class="ti-star red-text text-darken-2"></i>';
                                                    }else{
                                                        echo '<i class="ti-star"></i>';
                                                    }
                                                    
                                                }
                                            @endphp
                                        </p>
                                        <p>{{$review->review}}</p>
                                    </td>
                                    <td>
                                      <a class="slide_trigger" data-target="{{$review->id}}" href="#" title="Edit"><i class="ti-pencil-alt"></i></a>
                                    </td>
                                    <td><a href="{{route('admin.reviews.delete', [$review->id])}}"><i class="ti-trash"></i></a></td>
                                </tr>
                                <tr id="slidedown_{{$review->id}}" style="display:none">
                                    <td colspan="6">
                                        <br>
                                        <form method="post" action="{{route('admin.reviews.update')}}">
                                            {{ csrf_field() }}
                                            <div class="input-field col s6">
                                                <input type="text" class="validate" name="person" value="{{$review->person}}" required>
                                                <label class="active">Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <select name="countrid">
                                                    @foreach($countries as $country)
                                                    <option {{$review->countrid === $country->id ? "selected" : ""}} value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea name="review" class="materialize-textarea">{{$review->review}}</textarea>
                                                <label class="active">Review</label>
                                            </div>
                                            <div class="input-field col s2">
                                                <div class="switch">
                                                    <label>
                                                      No
                                                      @if($review->approve == "1")
                                                      <input type="checkbox" name="approve" value="1" checked>
                                                      @else
                                                      <input type="checkbox" name="approve" value="1">
                                                      @endif
                                                      <span class="lever"></span>
                                                      Yes
                                                    </label>
                                                </div>
                                                <label class="active">Review Approved</label>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="input-field col s2">
                                                <label class="active">Rating</label>
                                                <p class="range-field">
                                                  <input type="range" min="1" max="5" name="rating" value="{{$review->rating}}" />
                                                </p>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="hidden" name="reviewid" value="{{$review->id}}">
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
        $('#slidedown_'+target).slideToggle();
    });
</script>
@endsection