@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Countries</h1>
                <span>Edit or Delete Country</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">
                          @if (session('error'))
                              <div class="alert alert-danger">{{ session('error') }}</div>
                          @endif
                          <div class="projects scroll">
                            {{ $countries->links() }}
                            <div class="projects-table">
                                <table class="table">
                                    <tr class="success">
                                        <th style="width: 100px;text-align:center;"><i class="ti-flag-alt"></i></th>
                                        <th>Country</th>
                                        <th>ISO</th>
                                        <th>Phone Code</th>
                                        <th>Discount(%)</th>
                                        <th style="width: 50px;"></th>
                                    </tr>
                                    @foreach($countries as $country)
                                    <tr>
                                        <td>
                                            <a href="{{asset('uploads/country')}}/{{$country->flag}}" target="_blank"><img src="{{asset('uploads/country')}}/{{$country->flag}}" width="100%"></a>
                                        </td>
                                        <td>{{$country->name}}</td>
                                        <td>{{$country->iso}}</td>
                                        <td>{{$country->phone_code}}</td>
                                        <td>{{$country->discount}}</td>
                                        <td><a href="#" class="slide_trigger" data-target="slidedown_{{$country->id}}"><i class="ti-pencil-alt"></i></a></td>
                                    </tr>
                                    <tr id="slidedown_{{$country->id}}" style="display:none">
                                        <td colspan="7">
                                            <br>
                                            <form method="post" action="{{route('admin.country.update')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$country->id}}">
                                                <div class="input-field col s3">
                                                    <input type="text" class="validate" name="name" value="{{$country->name}}" required>
                                                    <label class="active">Name</label>
                                                    @if ($errors->has('name'))
                                                        <span class="error">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="phone_code" value="{{$country->phone_code}}" required>
                                                    <label class="active">Phone Code</label>
                                                    @if ($errors->has('phone_code'))
                                                        <span class="error">{{ $errors->first('phone_code') }}</span>
                                                    @endif
                                                </div>
                                                <div class="input-field col s2">
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
                                                    <label class="active">Shipping</label>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="discount" value="{{$country->discount}}">
                                                    <label class="active">Discount(%)</label>
                                                    @if ($errors->has('discount'))
                                                        <span class="error">{{ $errors->first('discount') }}</span>
                                                    @endif
                                                </div>
                                                <div class="file-field input-field col s3">
                                                    <div class="btn">
                                                      <span>Country Flag</span>
                                                      <input type="file" name="flag">
                                                    </div>
                                                </div>
                                                <div class="input-field col s12">
                                                    <button type="submit" class="btn waves-effect waves-light green">Update</button>
                                                </div>
                                            </form>
                                            <div class="clearfix"></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            {{ $countries->links() }}
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
