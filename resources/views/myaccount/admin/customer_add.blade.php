@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Add New Customer</h1>
                <span>New customer profile</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="col s12">
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="widget z-depth-1">
                    <form class="form-horizontal" method="post" action="{{route('admin.customer.submit')}}">
                        {{ csrf_field() }}
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="name" required>
                            <label class="active">Name</label>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="email" required>
                            <label class="active">Email</label>
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s8">
                            <div class="input-field col s4">
                                <select name="code">
                                    <option value="">Select Code</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col s8">
                                <input type="text" class="validate" name="phone">
                            </div>
                            <label class="active">Phone</label>
                        </div>
                        <div class="input-field col s4">
                            <div class="switch">
                                <label>
                                  No
                                  <input type="checkbox" name="email_verify" value="1" checked>
                                  <span class="lever"></span>
                                  Yes
                                </label>
                            </div>
                            <label class="active">Email Address Verified?</label>
                            <br>
                            <br>
                        </div>
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light green">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->
@endsection
