@extends('admin.layout')

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
                            <div class="projects-table">
                                <table class="table">
                                    <tr class="success">
                                        <th style="width: 50px;">#</th>
                                        <th>Country</th>
                                        <th>ISO</th>
                                        <th>Phone Code</th>
                                        <th>Discount(%)</th>
                                        <th style="width: 50px;"></th>
                                        <th style="width: 50px;"></th>
                                    </tr>
                                    @php($i = 0)
                                    @foreach($countries as $country)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$country->name}}</td>
                                        <td>{{$country->iso}}</td>
                                        <td>{{$country->phonecode}}</td>
                                        <td>{{$country->discount}}</td>
                                        <td><a href="#" class="slide_trigger" data-target="slidedown_{{$country->id}}"><i class="ti-pencil-alt"></i></a></td>
                                        <td>
                                            <a href="#"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr id="slidedown_{{$country->id}}" style="display:none">
                                        <td colspan="7">
                                            <br>
                                            <form method="post" action="{{route('admin.country.update')}}">
                                            {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$country->id}}">
                                                <div class="input-field col s5">
                                                    <input type="text" class="validate" name="name" value="{{$country->name}}" required>
                                                    <label class="active">Name</label>
                                                    @if ($errors->has('name'))
                                                        <span class="error">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="input-field col s1">
                                                    <input type="text" class="validate" name="iso" value="{{$country->iso}}" required>
                                                    <label class="active">ISO</label>
                                                    @if ($errors->has('iso'))
                                                        <span class="error">{{ $errors->first('iso') }}</span>
                                                    @endif
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="phonecode" value="{{$country->phonecode}}" required>
                                                    <label class="active">Phone Code</label>
                                                    @if ($errors->has('phonecode'))
                                                        <span class="error">{{ $errors->first('phonecode') }}</span>
                                                    @endif
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="discount" value="{{$country->discount}}">
                                                    <label class="active">Discount(%)</label>
                                                    @if ($errors->has('discount'))
                                                        <span class="error">{{ $errors->first('discount') }}</span>
                                                    @endif
                                                </div>
                                                <div class="input-field col s2">
                                                    <button type="submit" class="btn waves-effect waves-light green lighten-2">Update</button>
                                                </div>
                                            </form>
                                            <div class="clearfix"></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
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