@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area"  ng-controller="IndexController">
        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="widget z-depth-1">
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
                    <h4>Add Package Detail :</h4>
                    <form method="post" action="{{route('admin.dashboard.package.submit')}}">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="input-field col s3">
                            {{--<input type="text" class="validate" name="customer_locker" required>--}}
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
                          </div>
                          <div class="input-field col s3">
                            <select name="type">
                              <option value="doc">Document</option>
                              <option value="nondoc" selected>Non Document</option>
                            </select>
                            <label>Type</label>
                          </div>
                          <div class="input-field col s3">
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
                          </div>
                            <div ng-hide="Customers.migrated == 1 || Customers.migrated == 2 " class="input-field col s3">
                                <button type="submit" class="btn btn-large waves-effect waves-light green lighten-2">
                                    Add Package
                                </button>
                            </div>
                            <div ng-show="Customers.migrated == 1 || Customers.migrated == 2" class="input-field col-md-12 col-sm-12 col-xs-12 ">

                                <br>
                                <a style="text-decoration: underline;color:red;" target="_blank" ng-href="<%'{{route('admin.quick.migrate')}}?id=' + Customers.id%>">This account is migrated. click here to Add package </a>
                            </div>

                          @if (session('migrate_customer_id') > 0)
                            <div class="input-field col-md-12 col-sm-12 col-xs-12 ">
                              <br>
                              <a style="text-decoration: underline;color:red;" target="_blank" ng-href="<%'{{route('customer.migrate')}}?admin=yes&id=' + {{session('migrate_customer_id')}}%>">This customer has no package in Locker, Click Here to Migrate </a>
                            </div>
                          @endif

                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-area">
        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                        <div class="col s12">
                            <div class="widget z-depth-1">
                                <div class="widget-title">
                                    <h3>New Package</h3>
                                    <p>New Arrival Packages</p>
                                </div>
                                <div class="projects scroll">
                                    <div class="projects-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Package Id</th>
                                                <th>Locker</th>
                                                <th>Seller</th>
                                                {{--<th>Update</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($packages as $package)
                                                <tr>
                                                    <td>
                                                        <a href="{{route('admin.package.edit',[$package->id])}}">
                                                        {{$package->id}}
                                                        </a>
                                                    </td>
                                                    <td>{{$package->order_id}}</td>
                                                    <td>{{$package->locker}}</td>
                                                    <td>{{$package->seller}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div><!-- Masonary -->
            </div>
        </div>
    </div>
@endsection
