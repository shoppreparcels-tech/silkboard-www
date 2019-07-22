@extends('myaccount.admin.layout')

@section('css_styles')
@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Promo Codes</h1>
                <span>Add/Edit Promotinal Codes</span>
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
                        <form method="post" action="{{route('admin.promos.submit')}}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" class="validate" name="title" value="{{ old('title') }}" required>
                                <label class="active">Title</label>
                                @if ($errors->has('title'))
                                    <span class="error">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="code" value="{{ old('code') }}" required>
                                <label class="active">Code</label>
                                @if ($errors->has('code'))
                                    <span class="error">{{ $errors->first('code') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="number" class="validate" name="cashback" value="{{ old('cashback') }}">
                                <label class="active">Cashback(%)</label>
                                @if ($errors->has('cashback'))
                                    <span class="error">{{ $errors->first('cashback') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="number" class="validate" name="discount" value="{{ old('discount') }}">
                                <label class="active">Discount(%)</label>
                                @if ($errors->has('discount'))
                                    <span class="error">{{ $errors->first('discount') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="number" class="validate" name="max_cash_amount" value="{{ old('max_cash_amount')}}" required>
                                <label class="active">Maximum Amount (Cashback/Off)</label>
                                @if ($errors->has('discount'))
                                    <span class="error">{{ $errors->first('discount')}}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate datetimepicker" name="validity" value="{{old('validity')}}" required>
                                <label class="">Valid Till</label>
                                @if ($errors->has('validity'))
                                    <span class="error">{{$errors->first('validity')}}</span>
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
                                <label class="active">Display in Home Page</label>
                                <br>
                                <br>
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
                          <table class="table striped" style="margin-top: 30px;">
                            <tbody>
                                <tr>
                                  <td width="300px">Title</td>
                                  <td>PromoCode</td>
                                  <td>Cashback Amount</td>
                                  <td>Discount(%)</td>
                                  <td>Maximum Amount</td>
                                  <td>Valid Till</td>
                                  <td width="50px"></td>
                                  <td width="50px"></td>
                                </tr>
                                @foreach($promos as $promo)
                                <tr>
                                    <td>{{$promo->title}}</td>
                                    <td>{{$promo->code}}</td>
                                    <td>{{$promo->cashback}}</td>
                                    <td>{{$promo->discount}}</td>
                                    <td>{{$promo->max_cash_amount}}</td>
                                    <td>{{$promo->validity}}</td>
                                    <td style="text-align: center;">
                                      @if($promo->featured == "1")
                                        <i class="ti-star small orange-text"></i>
                                      @endif
                                      </td>
                                    <td>
                                      <a class="slide_trigger" data-target="{{$promo->id}}" href="#" title="Edit"><i class="ti-pencil-alt"></i></a>
                                    </td>
                                </tr>
                                <tr id="slidedown_{{$promo->id}}" style="display:none">
                                    <td colspan="6">
                                        <br>
                                        <form method="post" action="{{route('admin.promos.update')}}">
                                          {{ csrf_field() }}
                                          <div class="input-field col s6">
                                            <input type="text" class="validate" name="title" value="{{$promo->title}}" required>
                                            <label class="active">Title</label>
                                          </div>
                                          <div class="input-field col s3">
                                            <input type="text" class="validate" name="code" value="{{$promo->code}}" required>
                                            <label class="active">Code</label>
                                          </div>
                                          <div class="input-field col s3">
                                            <input type="text" class="validate" name="cashback" value="{{$promo->cashback}}">
                                            <label class="active">Cashback</label>
                                        </div>
                                        <div class="input-field col s3">
                                            <input type="text" class="validate" name="discount" value="{{$promo->discount}}">
                                            <label class="active">Discount(%)</label>
                                        </div>
                                        <div class="input-field col s3">
                                            <input type="number" class="validate" name="max_cash_amount" value="{{ $promo->max_cash_amount }}" required>
                                            <label class="active">Maximum Amount (Cashback/Off)</label>
                                        </div>
                                        <div class="input-field col s3">
                                            <input type="text" class="validate datetimepicker" name="validity" value="{{$promo->validity}}" required>
                                            <label class="">Valid Till</label>
                                        </div>
                                        <div class="input-field col s3">
                                            <div class="switch">
                                                <label>
                                                  Yes
                                                    @if($promo->featured == "1")
                                                        <input type="checkbox" name="featured" value="1" checked>
                                                    @else
                                                        <input type="checkbox" name="featured" value="1">
                                                    @endif
                                                  <span class="lever"></span>
                                                  No
                                                </label>
                                            </div>
                                            <label class="active">Display in Home Page</label>
                                            <br>
                                            <br>
                                        </div>
                                          <div class="input-field col s2">
                                              <input type="hidden" name="promoid" value="{{$promo->id}}">
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
    $(".datetimepicker").datetimepicker({timepicker:!1,format:"Y-m-d"}),$(".slide_trigger").click(function(e){e.preventDefault();var t=$(this).attr("data-target");$("#slidedown_"+t).slideToggle()});
</script>
@endsection
