@extends('myaccount.layout')
@section('title', '- ')

@section('css_style')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/materialize.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_asset/css/icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/color.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/datetimepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/css/custom.css')}}" />
@endsection

@section('content')

    <div class="container-fluid">
        <div class="customer-content-area">
            <div class="customer-breadcrumb-bar">
                <div class="page-title">
                    <h1>Package Orders</h1>
                    <span>View All Package Orders</span>
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
                            <form method="post" action="{{route('admin.package.submit')}}">
                                {{ csrf_field() }}
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="seller" value="{{ old('seller') }}" required>
                                    <label  class="">Seller Name</label>
                                    @if ($errors->has('seller'))
                                        <span class="error">{{ $errors->first('seller') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="reference" value="{{ old('reference') }}" required>
                                    <label  class="">Reference/Package No.</label>
                                    @if ($errors->has('reference'))
                                        <span class="error">{{ $errors->first('reference') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="locker" value="{{ old('locker') }}" required>
                                    <label  class="">Locker ID</label>
                                    @if ($errors->has('locker'))
                                        <span class="error">{{ $errors->first('locker') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <select name="type">
                                        <option {{old('type') === 'nondoc' ? "selected" : ""}} value="nondoc">Non Document</option>
                                        <option {{old('type') === 'doc' ? "selected" : ""}} value="doc">Document</option>
                                    </select>
                                    <label>Package Type</label>
                                    @if ($errors->has('type'))
                                        <span class="error">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="price" value="{{ old('price') }}" required>
                                    <label  class="">Price</label>
                                    @if ($errors->has('price'))
                                        <span class="error">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" name="weight" value="{{ old('weight') }}" required>
                                    <label  class="">Weight</label>
                                    @if ($errors->has('weight'))
                                        <span class="error">{{ $errors->first('weight') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s3">
                                    <div class="switch">
                                        <label>
                                            No
                                            <input type="checkbox" name="liquid" value="1">
                                            <span class="lever"></span>
                                            Yes
                                        </label>
                                    </div>
                                    <label class="active">Liquid / Semi-Liquid</label>
                                    <br>
                                    <br>
                                </div>
                                <div class="input-field col s3">
                                    <div class="switch">
                                        <label>
                                            No
                                            <input type="checkbox" name="is_featured_seller" value="1">
                                            <span class="lever"></span>
                                            Yes
                                        </label>
                                    </div>
                                    <label class="active">From a featured seller?</label>
                                    <br>
                                    <br>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate datetimepicker" name="received" value="{{ old('received') }}" required>
                                    <label class="">Date Received</label>
                                    @if ($errors->has('received'))
                                        <span class="error">{{ $errors->first('received') }}</span>
                                    @endif
                                </div>
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light lighten-2 red color_text">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Content Area -->
    </div>

@endsection

@section('js_script')
    @yield('content')

    <script src="{{asset('admin_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/materialize.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/script.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin_asset/js/isotope.js')}}"></script>
    <script src="{{asset('admin_asset/js/datetimepicker.min.js')}}"></script>
    @yield('js_script')

    <script type="text/javascript">
        jQuery('.datetimepicker').datetimepicker({
            timepicker:false,
            format:'Y-m-d'
        });
    </script>
@endsection
