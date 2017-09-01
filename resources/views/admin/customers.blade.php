@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Customer Profiles</h1>
                <span>Add, Edit and Remove Users</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">
                            <div class="widget-title">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <p>{{$customers->count()}} Total Customer Profiles</p>
                            </div>

                           <div class="live-search">
                                <input id="search" name="search" placeholder="Search Here..." type="text" autocomplete="off">

                                <ul class="default_list contacts-list scroll">
                                    @foreach ($customers as $customer)
                                    <li>
                                        <a href="#" title="" class="contact-info">
                                            <span class="info-img">
                                                @if(!empty($customer->avatar))
                                                    <img src="{{asset('uploads/customer')}}/{{$customer->avatar}}">
                                                @else
                                                    <img src="{{asset('img/profile.svg')}}">
                                                @endif
                                            </span>
                                            <span class="info-detail"><i class="cnt-name">{{$customer->name}}</i><i class="mail-id">{{$customer->email}}</i></span>
                                            @if($customer->email_verify == 'yes')
                                                <span class="info-verify green"><i class="ti-check-box"></i> Verified</span>
                                            @else
                                                <span class="info-verify red"><i class="ti-na"></i> Not Verified</span>
                                            @endif
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->
    
@endsection