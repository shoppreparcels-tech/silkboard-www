@extends('admin.layout')

@section('content')
    <div class="col-md-3">
        @include('admin.partials._sidebar')
    </div>
    <div class="col-md-9">
        <div class="panel panel-info">
            <div class="panel-heading">Edit Profile</div>
            <div class="panel-body">
                @if (session('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
                <form class="form-horizontal" method="post" action="{{route('admin.customer.update')}}">
                {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$customer->id}}">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{ $customer->name or '' }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="{{ $customer->email or '' }}" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" value="{{ $customer->phone or '' }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>           
            </div>
        </div>
    </div>
@endsection