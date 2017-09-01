@extends('layout')

@section('title', '- Customer Profile')

@section('content')
    <div class="col-md-12">
        @isset($message)
            <div class="alert alert-info text-center">
                {{ $message }}
            </div>
        @endisset
        @isset($error)
            <div class="alert alert-danger text-center">
                {{ $error }}
            </div>
        @endisset
    </div>
@endsection