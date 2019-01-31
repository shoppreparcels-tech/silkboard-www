@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Package Notifications</h1>
                <span>View All Package Related Notifications</span>
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

                        {{ $notifications->appends(Request::except('page'))->links() }}

                        <div class="projects scroll">
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <td>Date</td>
                                        <th>Customer</th>
                                        <th>Description</th>
                                        <th width="150px">Status</th>
                                        <th width="50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $notify)
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                {{date("d-m-Y, g:i a", strtotime($notify->created_at))}}
                                            </td>
                                            <td>{{$notify->customer->name}}</td>
                                            <td>{{$notify->action_description}}</td>
                                            <td>
                                                @if($notify->solve_status == 'yes')
                                                    <a href="{{route('admin.notify.status', [$notify->id])}}" class="notify_btn solved">Solved</a>
                                                @else
                                                    <a href="{{route('admin.notify.status', [$notify->id])}}" class="notify_btn">Not Solved</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.package.edit', [$notify->action_id])}}"
                                                   class="green-text">
                                                    <i class="ti-angle-double-right"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>

                          {{ $notifications->appends(Request::except('page'))->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection
