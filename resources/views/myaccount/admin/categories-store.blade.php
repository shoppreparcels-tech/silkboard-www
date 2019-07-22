@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Store/Brand - Categories</h1>
                <span>View and Update Category Stores</span>
            </div>
        </div><!-- Breadcrumb Bar -->

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
                        <form method="post" action="{{route('admin.category.store.submit')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s6">
                                <select name="store">
                                  <option value="" disabled selected>Choose your option</option>
                                @foreach($stores as $store)
                                  <option value="{{$store->id}}">{{$store->name}}</option>
                                @endforeach
                                </select>
                                <label>Store/Brand</label>
                                @if ($errors->has('store'))
                                    <span class="error">{{ $errors->first('store') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="url" value="{{ old('url') }}" required>
                                <label class="active">Store Url</label>
                                @if ($errors->has('url'))
                                    <span class="error">{{ $errors->first('url') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s9">
                                <textarea name="info" class="materialize-textarea">{{ old('info') }}</textarea>
                                <label class="active">Tip/Info</label>
                                @if ($errors->has('info'))
                                    <span class="error">{{ $errors->first('info') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="rank" value="{{ old('rank') }}">
                                <label class="active">Store Rank</label>
                                @if ($errors->has('rank'))
                                    <span class="error">{{ $errors->first('rank') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <div class="switch">
                                    <label>
                                      No
                                      <input type="checkbox" name="featured" value="1">
                                      <span class="lever"></span>
                                      Yes
                                    </label>
                                </div>
                                <label class="active">Set as featured brand/store</label>
                                <br>
                                <br>
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="category_id" value="{{$category_id}}">
                                <button type="submit" class="btn waves-effect waves-light green darken-2">Submit</button>
                            </div>
                          </form>
                    </div>
                </div>
                <div class="col s12">
                    <div class="section">
                      <div class="projects scroll">
                        <div class="projects-table">
                          <table class="table striped" style="margin-top: 30px;width: auto;min-width: 450px;">
                            <thead>
                                <tr>
                                    <th width="100px">Store</th>
                                    <th>Type</th>
                                    <th>Rank</th>
                                    <th width="80px"></th>
                                    <th width="80px"></th>
                                    <th width="50px"></th>
                                    <th width="50px"></th>
                                </tr>
                                @foreach($clubs as $club)
                                    <tr>
                                        <td>
                                          @if(!empty($club->logo))
                                          <a href="{{$club->url}}" target="_blank"><img src="{{asset('uploads/stores')}}/{{$club->logo}}" width="100%"></a>
                                          @else
                                            <a href="{{$club->url}}" target="_blank">{{$club->name}}</a>
                                          @endif
                                        </td>
                                        <td>
                                            @if($club->type == "web")
                                              {{"Website"}}
                                            @elseif($club->type == "fb")
                                              {{"Facebook"}}
                                            @endif
                                        </td>
                                        <td style="text-align: center;">
                                        @if($club->rank != 0)
                                          {{$club->rank}}
                                        @endif
                                        </td>
                                        <td>
                                            @if(!empty($club->info))
                                                <a class="blue-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="<div class='col s6'>{{$club->info}}</div>" data-html="true"><i class="ti-help-alt"></i></a>
                                            @endif
                                        </td>
                                        <td style="text-align: center;">
                                        @if($club->featured == "1")
                                          <i class="ti-star small orange-text"></i>
                                        @endif
                                        </td>
                                        <td>
                                            <a class="slide_trigger" data-target="slidedown_{{$club->id}}" href="#" title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                        <td>
                                            <a class="red-text" href="{{route('admin.category.store.delete', [$club->id])}}" title="Delete"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr id="slidedown_{{$club->id}}" style="display:none">
                                        <td colspan="7">
                                            <br>
                                            <form method="post" action="{{route('admin.category.store.update')}}">
                                                {{ csrf_field() }}
                                                <div class="input-field col s10">
                                                    <input type="text" class="validate" name="url" value="{{$club->url}}" required>
                                                    <label class="active">Store Url</label>
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="rank" value="{{$club->rank}}">
                                                    <label class="active">Rank</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <textarea name="info" class="materialize-textarea">{{$club->info}}</textarea>
                                                    <label class="active">Tip/Info</label>
                                                </div>
                                                <div class="input-field col s3">
                                                    <div class="switch">
                                                        <label>
                                                          Off
                                                            @if($club->featured == "1")
                                                                <input type="checkbox" name="featured" value="1" checked>
                                                            @else
                                                                <input type="checkbox" name="featured" value="1">
                                                            @endif
                                                          <span class="lever"></span>
                                                          On
                                                        </label>
                                                    </div>
                                                    <label class="active">Featured</label>
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="hidden" name="club_id" value="{{$club->id}}">
                                                    <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </thead>
                            <tbody>

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
    $(".slide_trigger").click(function(t){t.preventDefault();var e=$(this).attr("data-target");$("#"+e).slideToggle()});
</script>
@endsection
