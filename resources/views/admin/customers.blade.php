@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Customer Profiles ({{$customers->count()}})</h1>
                <span>Add, Edit and Remove Users</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="projects scroll">
                                {{ $customers->links() }}
                                <div class="projects-table">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Locker</th>
                                            <th>Status</th>
                                            <th width="50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>
                                                @if(!empty($customer->phone))
                                                +{{$customer->code}}-{{$customer->phone}} 
                                                @endif
                                            </td>
                                            <td>{{$customer->locker}}</td>
                                            <td>
                                                @if($customer->email_verify == 'yes')
                                                    <span class="info-verify green"><i class="ti-check-box"></i> Verified</span>
                                                @else
                                                    <span class="info-verify red"><i class="ti-na"></i> Not Verified</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.customer.edit', [$customer->id])}}" class="amber-text text-darken-4"><i class="ti-angle-double-right"></i></a>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>    
                                  </table>
                                </div>
                                {{ $customers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->
    
@endsection