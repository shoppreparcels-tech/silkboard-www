@extends('myaccount.admin.layout')

<!--CSS for tooltip-->

<style CSS>
    .material-tooltip>.backdrop{background-color:#fe9611;display:block!important}.material-tooltip>span{outline-width:20px;line-height:50px;font-size:15px;color:#000}
</style>

@section('content')

    <div class="content-area" ng-controller="IndexController">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Package Orders</h1>
                <span>View All Package Orders</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        @if (session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="post" action="{{route('admin.package.submit')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="picup_id" value="{{ app('request')->input('schedule_pick_id') }}">
                            <div class="input-field col s6">
                              <input type="text"
                                     name="seller"
                                     ng-model="Stores.model"
                                     placeholder="Seller Name"
                                     uib-typeahead="store.name  for store in Stores.get($viewValue)"
                                     typeahead-loading="Stores.loadingStores"
                                     typeahead-no-results="Stores.noResults"
                                     typeahead-on-select='Stores.select($item)'
                                     typeahead-wait-ms="10"
                                     autocomplete="off"
                                     required="required"
                                     class="form-control"/>
                              <label class="active">Seller Name</label>
                                @if ($errors->has('seller'))
                                    <span class="error">{{ $errors->first('seller') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="reference" value="{{ old('reference') }}" required>
                                <label  class="">Reference/Package No.</label>
                                @if ($errors->has('reference'))
                                    <span class="error">{{ $errors->first('reference') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                              <input type="text"
                                     name="locker"
                                     ng-model="Customers.model"
                                     placeholder="Locker Number"
                                     uib-typeahead="(customer.name + ' - ' + customer.locker) for customer in Customers.get($viewValue)"
                                     typeahead-loading="Customers.loadingCustomers"
                                     typeahead-no-results="Customers.noResults"
                                     typeahead-on-select='Customers.select($item)'
                                     typeahead-wait-ms="10"
                                     autocomplete="off"
                                     required="required"
                                     class="form-control"/>
                              <label class="active">Customer Locker Number</label>
                                @if ($errors->has('locker'))
                                    <span class="error">{{ $errors->first('locker') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <select name="type">
                                    <option {{old('type') === 'nondoc' ? "selected" : ""}} value="nondoc">Non Document</option>
                                    <option {{old('type') === 'doc' ? "selected" : ""}} value="doc">Document</option>
                                </select>
                                <label>Package Type</label>
                                @if ($errors->has('type'))
                                    <span class="error">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="number_of_items" value="{{ old('number_of_items', 1) }}" required>
                                <label  class="">Total Items</label>
                                @if ($errors->has('number_of_items'))
                                    <span class="error">{{ $errors->first('number_of_items') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="price" value="{{ old('price') }}" required>
                                <label  class="">Price</label>
                                @if ($errors->has('price'))
                                    <span class="error">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="validate" name="weight" value="{{ old('weight') }}" required>
                                <label  class="">Weight</label>
                                @if ($errors->has('weight'))
                                    <span class="error">{{ $errors->first('weight') }}</span>
                                @endif
                            </div>

                            <div class="input-field col s3">
                                <div class="switch">
                                    <label>
                                      No
                                      <input type="checkbox" name="liquid" value="1">
                                      <span class="lever"></span>
                                      Yes
                                    </label>
                                </div>
                                <label class="active">Special/Non-special
                                    <a class="btn tooltipped" data-position="right"  data-tooltip="Special Items - Medicines,Oils,Lotions,Makeup accessories,Home made foods,Powders,Suppliments,Pickles,Chemicals
                                       " style="width: 29px; height: 29px; color:black; " >?</a>

                                </label>
                                <br>
                                <br>
                            </div>
                            <div class="input-field col s3">
                                <div class="switch">
                                    <label>
                                      No
                                      <input type="checkbox" name="is_featured_seller" value="1">
                                      <span class="lever"></span>
                                      Yes
                                    </label>
                                </div>
                                <label class="active">From a featured seller?</label>
                                <br>
                                <br>
                            </div>
                            <div class="input-field col s3">
                                <div class="switch">
                                    <label>
                                        No
                                        <input type="checkbox" name="is_item_damaged" value="1">
                                        <span class="lever"></span>
                                        Yes
                                    </label>
                                </div>
                                <label class="active">is item damaged</label>
                                <br>
                                <br>
                            </div>
                            <div class="input-field col s3">
                                @php
                                    $today_date = date("Y-m-d");
                                @endphp

                                <input type="text" class="validate datetimepicker" name="received" value="{{ old('received', $today_date)  }}" required>
                                <label class="">Date Received</label>
                                @if ($errors->has('received'))
                                    <span class="error">{{ $errors->first('received') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                              <div class="col s2" ng-hide="Customers.migrated == 1 || Customers.migrated == 2 ">
                                <button type="submit" class="btn waves-effect waves-light red lighten-2">Submit</button>
                              </div>
                                {{--//|| Customers.package_count <= 0--}}
                              <div ng-show="Customers.migrated == 1 || Customers.migrated == 2 " class="input-field col s10">
                                <a style="text-decoration: underline;color:red;" target="_blank" ng-href="<%'{{route('admin.quick.migrate')}}?id=' + Customers.id%>">This account is migrated. click here to Add package </a>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection

@section('js_script')
<script type="text/javascript">
    jQuery(".datetimepicker").datetimepicker({timepicker:!1,scrollMonth:!1,scrollInput:!1,format:"Y-m-d"}),$(document).ready(function(){$(".tooltipped").tooltip({delay:50})});
</script>
@endsection
