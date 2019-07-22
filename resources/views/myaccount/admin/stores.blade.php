@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Stores/Brands</h1>
                <span>View Brands List</span>
            </div>
        </div>
        <!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">
                          @if (session('message'))
                              <div class="alert alert-success">{{ session('message') }}</div>
                          @endif
                          @if (session('error'))
                              <div class="alert alert-danger">{{ session('error') }}</div>
                          @endif

                          <form method="post" action="{{route('admin.stores.submit')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="name" value="{{ old('name') }}" required>
                                <label class="active">Store/Brand Name</label>
                                @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="type">
                                    <option value="web" selected>Website</option>
                                    <option value="fb">Facebook</option>
                                </select>
                                <label>Choose Store Type</label>
                                @if ($errors->has('type'))
                                    <span class="error">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="file-field input-field col s6">
                              <div class="btn">
                                <span>Store/Brand Logo</span>
                                <input type="file" name="logo">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                              </div>
                                @if ($errors->has('logo'))
                                    <span class="error">{{ $errors->first('logo') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light green darken-2">Submit</button>
                            </div>
                          </form>
                          <br style="clear: both;">
                          <hr style="margin: 25px 0;">
                          <div class="projects scroll">
                            {{ $stores->links() }}
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th width="120px"></th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($stores as $store)
                                    <tr>
                                        <td>
                                          @if(!empty($store->logo))
                                          <a href="{{$store->url}}" target="_blank"><img src="{{asset('uploads/stores')}}/{{$store->logo}}" width="100%"></a>
                                          @else
                                            <a href="{{$store->url}}" target="_blank">View</a>
                                          @endif
                                        </td>
                                        <td>{{$store->name}}</td>
                                        <td>
                                          @if($store->type == "web")
                                            {{"Website"}}
                                          @elseif($store->type == "fb")
                                            {{"Facebook"}}
                                          @endif
                                        </td>
                                        <td>
                                          <a class="slide_trigger" data-target="slidedown_{{$store->id}}" href="#" title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr id="slidedown_{{$store->id}}" style="display:none">
                                      <td colspan="4">
                                        <form method="post" action="{{route('admin.stores.update')}}" enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                          <div class="input-field col s4">
                                              <input type="text" class="validate" name="name" value="{{ $store->name }}" placeholder="Store/Brand Name" required>
                                          </div>
                                          <div class="input-field col s3">
                                              <select name="type">
                                                @if($store->type == "web")
                                                <option value="web" selected>Website</option>
                                                <option value="fb">Facebook</option>
                                                @else
                                                <option value="web">Website</option>
                                                <option value="fb" selected>Facebook</option>
                                                @endif
                                            </select>
                                              <label>Choose Store Type</label>
                                          </div>
                                          <div class="file-field input-field col s3">
                                            <div class="btn">
                                              <span>Store/Brand Logo</span>
                                              <input type="file" name="logo">
                                            </div>
                                          </div>
                                          <div class="input-field col s2">
                                              <input type="hidden" name="storeid" value="{{$store->id}}">
                                              <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                                          </div>
                                        </form>
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            {{ $stores->links() }}
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
