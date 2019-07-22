@extends('myaccount.admin.layout')

@section('css_style')
<style type="text/css">
    .editbtn{display:inline-block!important;background:0 0!important;width:auto!important;float:none!important;padding:0 5px 0!important}h5{font-size:16px;margin:0 0 10px}p{font-size:14px;margin:5px 0}
</style>
@endsection

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Customer Profile - {{ $customer->locker}}</h1>
                <span>Update update profile</span>
            </div>
            <ul class="admin-breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('admin.customers')}}">Customers</a></li>
            </ul>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="col s8">
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
                        <div class="input-field col s12">
                            <div class="input-field col s4">
                                <select name="country_code">
                                    <option value="">Select Code</option>
                                    @foreach($countries as $country)
                                        @if(!empty($customer->country_code) && $country->phone_code == $customer->country_code)
                                            <option
                                                    value="{{$country->phone_code}}"
                                                    selected="selected">{{$country->iso}}(+{{$customer->country_code}})
                                            >
                                            </option>
                                        @else
                                            <option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
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
                        <div class="input-field col s12">
                            <div class="input-field col s4">
                                <select name="alt_code">
                                    <option value="">Select Code</option>
                                    @foreach($countries as $country)
                                        @if(!empty($customer->contact->alt_code) && $country->phone_code == $customer->contact->alt_code)
                                            <option value="{{$country->phone_code}}" selected="selected">{{$country->iso}}(+{{$country->phone_code}})</option>
                                        @else
                                            <option value="{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
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
                            <input type="text" class="validate" name="alt_email" value="{{ $customer->contact->alt_email}}">
                            <label class="active">Alternate Email</label>
                        </div>
                        <div class="input-field col s6">
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
                        <div class="input-field col s4">
                          <input type="text" class="validate" name="migrated" value="{{ $customer->is_migrated}}"
                          {{$customer->is_migrated != 0 ? 'disabled': ''}}>
                          <label class="active">Migrated</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="hidden" name="id" value="{{$customer->id}}">
                            <button type="submit" class="btn waves-effect waves-light green darken-2">Update</button>
                        </div>
                      </div>
                    </form>
                    </div>
                </div>

                <div class="col s4">
                    <div class="widget z-depth-1">
                        <div class="my-profile-widget" style="margin-top: -20px;">
                            <div class="profile-widget-head">
                                <h3>{{$customer->name}}</h3>
                                <i>{{$customer->email}}</i>
                                <span>
                                    <img src="{{asset('img/profile.png')}}">
                                </span>
                            </div>
                            <h4>{{$customer->locker}}</h4>
                            @if(!empty($customer->phone))
                                <span class="red"><i class="ti-mobile"></i> +{{$customer->code}} {{$customer->phone}}</span>
                            @endif

                            <p><strong>Shoppre Wallet : </strong>{{number_format($customer->balance->amount, 2, ".", "")}}</p>

                            <p><strong>Loyalty Points : </strong>{{$customer->rewards->sum('points')}}</p>
                            <p><strong>Loyalty Level - </strong>
                                @if($customer->loyalty->level == 1)
                                    BRONZE SHIPPR
                                @elseif($customer->loyalty->level == 2)
                                    SILVER SHIPPR
                                @elseif($customer->loyalty->level == 3)
                                    GOLD SHIPPR
                                @elseif($customer->loyalty->level == 4)
                                    PLATINUM SHIPPR
                                @endif
                            </p>

                            <div style="clear: both;"></div>
                            <p><a href="{{route('admin.customer.access', [$customer->id])}}" target="_blank"><i class="ti-user"></i> Access Customer Account</a></p>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="widget z-depth-2">
                        <div class="projects-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer->addresses as $address)
                                    <tr>
                                        <td>
                                            <h5>{{$address->city}} Address</h5>
                                            <p>{{$address->name}}</p>
                                            <p>{{$address->line1}}</p>
                                            <p>{{$address->line2}}</p>
                                            <p>{{$address->city}}, {{$address->state}},</p>
                                            <p>{{$address->country}} - {{$address->pin}}</p>
                                            <p>PH : +{{$address->country_code}} {{$address->phone}}</p>
                                            @if($address->is_default)
                                              <span style="font-weight: bold;color: #ff0000">Default Shipping Address</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @php
                    $settings = $customer->preference;
                @endphp

                @if(!empty($settings))

                <div class="col s12">
                    <div class="widget z-depth-2">
                        <div class="widget-title">
                            <h3>Shipping Preferences</h3>
                            <p>Customer account settings detials.</p>
                        </div>
                        <div class="projects-table shipoptions">
                            <table class="table">
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->standard_photo == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Always take standard photos of item at login</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->advance_photo == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Always take advanced photos of item at login</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->scan_doc == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Always scan all pages of my documents</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->repack == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Discard shoe boxes</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->pack_extra == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Add extra packing material</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->orginal_box == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Ship in original shipping boxes</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->gift_wrap == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Gift Wrap</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->gift_note == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Gift Note</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        {{$settings->max_weight or ''}}
                                    </td>
                                    <td>Max weight per box/Multi-piece shipment (MPS)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Performa Invoice Options</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        {{$settings->tax_id or ''}}
                                    </td>
                                    <td>Tax ID</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->personal == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Mark items for "Personal Use Only"</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                          $marking  = ($settings->include_invoice == 1) ? '<i class="ti-check"></i>' : '<i class="ti-close"></i>';
                                          echo $marking;
                                        @endphp
                                    </td>
                                    <td>Please include a printed Proforma Invoice in my shipment</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>

                @endif


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

                <div class="col s12">
                    <div class="widget z-depth-2">
                        <div class="widget-title">
                            <h3>Miscellaneous Rewards</h3>
                            <p>Add miscellaneous loyalty points to this profile.</p>
                            <p><strong>Points to Redeem : </strong>{{$customer->loyalty->points}}</p>
                            <p><strong>Total Points: </strong>{{$customer->loyalty->total}}
                                (
                                    @if($customer->loyalty->level == 1)
                                        BRONZE SHIPPR
                                    @elseif($customer->loyalty->level == 2)
                                        SILVER SHIPPR
                                    @elseif($customer->loyalty->level == 3)
                                        GOLD SHIPPR
                                    @elseif($customer->loyalty->level == 4)
                                        PLATINUM SHIPPR
                                    @endif
                                )
                            </p>
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
                                <input type="hidden" name="customer_id" value="{{$customer->id}}">
                                <button type="submit" class="btn btn-large waves-effect waves-light green">Submit</button>
                            </div>
                        </form>
                        <div class="projects-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Information</th>
                                        <th>Points</th>
                                        <th style="width:50px"></th>
                                        <th style="width:50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer->rewards as $reward)
                                    <tr>
                                        <td style="white-space: nowrap;">
                                            {{date("d-m-Y, g:i a", strtotime($reward->created_at))}}
                                        </td>
                                        <td>{{$reward->info}}</td>
                                        <td>{{$reward->points}}</td>
                                        <td>
                                            <a href="#" class="slide_trigger" data-target="slidedown_loyal{{$reward->id}}" ><i class="ti-pencil-alt blue-text"></i></a>
                                        </td>
                                        <td class="red"><a href="{{route('admin.customer.misc.remove', [$reward->id])}}"><i class="ti-trash white-text"></i></a></td>
                                    </tr>
                                    <tr id="slidedown_loyal{{$reward->id}}" style="display:none">
                                        <td colspan="5">
                                            <br>
                                            <form method="post" action="{{route('admin.loyalty.update')}}">
                                                {{ csrf_field() }}
                                                <div class="input-field col s8">
                                                    <input type="text" class="validate" name="info" value="{{$reward->info}}" required>
                                                    <label class="active">Info/Reason</label>
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="points" value="{{$reward->points}}" required>
                                                    <label class="active">Points</label>
                                                </div>
                                                <div class="input-field col s1">
                                                    <input type="hidden" name="miscid" value="{{$reward->id}}">
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

                <div class="col s12">
                    <div class="widget z-depth-2">
                        <div class="widget-title">
                            <h3>Wallet Balance : INR {{number_format($customer->balance->amount, 2, ".", "")}}</h3>
                            <p>Wallet Transactions</p>
                        </div>
                        <form method="post" action="{{route('admin.transactions.add')}}">
                            {{csrf_field()}}
                            <div class="input-field col s7">
                                <input type="text" name="description" class="validate" required>
                                <label class="">Description</label>
                                @if ($errors->has('description'))
                                    <span class="error">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" name="amount" class="validate" required>
                                <label class="">Amount</label>
                                @if ($errors->has('amount'))
                                    <span class="error">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s1">
                                <input type="hidden" name="customer_id" value="{{$customer->id}}">
                                <button type="submit" class="btn btn-large waves-effect waves-light green">Submit</button>
                            </div>
                        </form>
                        <div class="projects-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th style="width:50px"></th>
                                        <th style="width:50px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer->transactions as $trans)
                                    <tr>
                                        <td style="white-space: nowrap;">
                                            {{date("d-m-Y, g:i a", strtotime($trans->created_at))}}
                                        </td>
                                        <td>{{$trans->description}}</td>
                                        <td>{{$trans->amount}}</td>
                                        <td>
                                            <a href="#" class="slide_trigger" data-target="slidedown_trans{{$trans->id}}" ><i class="ti-pencil-alt blue-text"></i></a>
                                        </td>
                                        <td class="red"><a href="{{route('admin.transactions.remove', [$trans->id])}}"><i class="ti-trash white-text"></i></a></td>
                                    </tr>
                                    <tr id="slidedown_trans{{$trans->id}}" style="display:none">
                                        <td colspan="5">
                                            <br>
                                            <form method="post" action="{{route('admin.transactions.update')}}">
                                                {{ csrf_field() }}
                                                <div class="input-field col s8">
                                                    <input type="text" class="validate" name="description" value="{{$trans->description}}" required>
                                                    <label class="active">Description</label>
                                                </div>
                                                <div class="input-field col s2">
                                                    <input type="text" class="validate" name="amount" value="{{$trans->amount}}" required>
                                                    <label class="active">Amount</label>
                                                </div>
                                                <div class="input-field col s1">
                                                    <input type="hidden" name="transid" value="{{$trans->id}}">
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
    </div><!-- Content Area -->
@endsection

@section('js_script')
<script type="text/javascript">
    $(".slide_trigger").click(function(t){t.preventDefault();var e=$(this).attr("data-target");$("#"+e).slideToggle()});
</script>
@endsection
