@extends('admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Customer Profile - {{ $customer->locker}}</h1>
                <span>Update update profile</span>
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
                    <form class="form-horizontal" method="post" action="{{route('admin.customer.update')}}">
                        {{ csrf_field() }}
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="name" value="{{ $customer->name}}" required>
                            <label class="active">Name</label>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="email" value="{{ $customer->email}}" required>
                            <label class="active">Email</label>
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <div class="input-field col s4">
                                <select name="code">
                                    <option value="">Select Code</option>
                                    @foreach($countries as $country)
                                        @if(!empty($customer->code) && $country->phonecode == $customer->code)
                                            <option value="{{$country->phonecode}}" selected="selected">{{$country->iso}}(+{{$country->phonecode}})</option>
                                        @else
                                            <option value="{{$country->phonecode}}">{{$country->iso}}(+{{$country->phonecode}})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col s8">
                                <input type="text" class="validate" name="phone" value="{{ $customer->phone}}">
                            </div>
                            <label class="active">Phone</label>
                            @if ($errors->has('phone'))
                                <span class="error">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <div class="input-field col s4">
                                <select name="alt_code">
                                    <option value="">Select Code</option>
                                    @foreach($countries as $country)
                                        @if(!empty($customer->contact->alt_code) && $country->phonecode == $customer->contact->alt_code)
                                            <option value="{{$country->phonecode}}" selected="selected">{{$country->iso}}(+{{$country->phonecode}})</option>
                                        @else
                                            <option value="{{$country->phonecode}}">{{$country->iso}}(+{{$country->phonecode}})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col s8">
                                <input type="text" class="validate" name="alt_phone" value="{{ $customer->contact->alt_phone}}">
                            </div>
                            <label class="active">Alternate Phone</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="validate" value="{{ $customer->locker}}" disabled>
                            <label class="active">Locker</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="alt_email" value="{{ $customer->contact->alt_email}}">
                            <label class="active">Alternate Email</label>
                        </div>
                        <div class="input-field col s3">
                            <div class="switch">
                                <label>
                                  No
                                  @if($customer->email_verify == "yes")
                                  <input type="checkbox" name="email_verify" value="1" checked>
                                  @else
                                  <input type="checkbox" name="email_verify" value="1">
                                  @endif
                                  <span class="lever"></span>
                                  Yes
                                </label>
                            </div>
                            <label class="active">Email Address Verified?</label>
                            <br>
                            <br>
                        </div>
                        <div class="input-field col s12">
                            <input type="hidden" name="id" value="{{$customer->id}}">
                            <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="col s12">
                    <div class="widget z-depth-2">
                        <div class="widget-title">
                            <h3>Miscellaneous Rewards</h3>
                            <p>Add miscellaneous loyalty points to this profile.</p>
                            <p><strong>Loyalty Level - {{$customer->loyalty->level}}</strong></p>
                            <p><strong>Loyalty Points - {{$customer->loyalty->points}}</strong></p>
                        </div>
                        <form method="post" action="{{route('admin.customer.misc')}}">
                            {{csrf_field()}}
                            <div class="input-field col s7">
                                <input type="text" name="info" class="validate">
                                <label class="">Info/Reason</label>
                                @if ($errors->has('info'))
                                    <span class="error">{{ $errors->first('info') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" name="points" class="validate">
                                <label class="">Reward</label>
                                @if ($errors->has('points'))
                                    <span class="error">{{ $errors->first('points') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s1">
                                <input type="hidden" name="custid" value="{{$customer->id}}">
                                <button type="submit" class="btn btn-large waves-effect waves-light green">Submit</button>
                            </div>
                        </form>
                        <div class="projects-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Points</th>
                                        <th>Information</th>
                                        <th style="width:50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer->rewards as $reward) 
                                    <tr>
                                        <td>{{$reward->info}}</td>
                                        <td>{{$reward->points}}</td>
                                        <td class="red"><a href="{{route('admin.customer.misc.remove', [$reward->id])}}"><i class="ti-trash white-text"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>

                @php
                    $docs = $customer->accountDocs;
                @endphp

                @if(!$docs->isEmpty())
                <div class="col s12">
                    <div class="widget z-depth-2">
                        <div class="widget-title">
                            <h3>Account Documents</h3>
                            <p>Files uploaded in shipping preference.</p>
                        </div>
                        <div class="projects-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($docs as $doc)
                                    <tr>
                                        <td><a href="{{asset('uploads/documents')}}/{{$doc->customer_id}}/{{$doc->document}}" class="doc" target="_blank">{{$doc->document}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </div><!-- Content Area -->
@endsection