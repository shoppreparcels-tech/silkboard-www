@extends('myaccount.admin.layout')

@section('content')
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Pages</h1>
                <span>View Page Contents</span>
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
                          <div class="projects scroll">
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th style="width: 50px;"></th>
                                        <!-- <th style="width: 50px;"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $page)
                                        <tr>
                                            <td>{{$page->title}}</td>
                                            <td><a href="{{route('admin.pages.edit', [$page->id])}}"><i class="ti-pencil-alt"></i></a></td>
                                            <!-- <td><a href="#"><i class="ti-trash"></i></a></td> -->
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
        </div>
    </div><!-- Content Area -->

@endsection
