@extends('myaccount.admin.layout')

<style CSS>
  .material-tooltip > .backdrop {
    background-color: #fe9611;
    display: block !important;
  }

  .material-tooltip > span {
    outline-width: 20px;
    line-height: 50px;
    font-size: 15px;
    color: black;
  }

</style>


@section('content')

  <div class="content-area">
    <div class="breadcrumb-bar">
      <div class="page-title">
        <h1>Create Sale</h1>
      </div>
    </div><!-- Breadcrumb Bar -->

    <div class="widgets-wrapper">
      <div class="row">
        <div class="masonary">
          <div class="col s12">

            @if (session('message'))
              <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            @if (session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="post" action="{{route('flash-sale.submit')}}">
              {{ csrf_field() }}
              <div class="input-field col s6">
                <select name="store_id">
                  <option>select</option>
                  @foreach($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                  @endforeach
                </select>
                <label class="">
                  Store Id
                </label>
              </div>
              <div class="input-field col s6">
                <input type="text" class="validate" name="slug" required>
                <label class="">
                  Slug
                </label>
              </div>

              <div class="input-field col s6">
                <input type="text" class="validate" name="name" required>
                <label class="">
                  Name
                </label>

              </div>

              <div class="input-field col s6">
                <input type="text" class="validate datetimepicker" name="starts_at" required>
                <label class="">
                  Starts At
                </label>
              </div>
              {{--<div class="input-field col s6">--}}
                {{--<input type="text" class="validate datetimepicker" name="deleted_at">--}}
                {{--<label class="">--}}
                  {{--Deleted At--}}
                {{--</label>--}}
              {{--</div>--}}

              <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light red lighten-2">Submit</button>
              </div>
            </form>
              <div class="row" style="margin-top:300px ">
                <div class="table-responsive">
                <table class="table table-bordered" style="width: 100%">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Store ID</th>
                    <th>Slug</th>
                    <th>Name</th>
                    <th>Starts At</th>
                    <th>End_at</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($flashsale as $flashsales)
                    <tr class="data_font">
                      <td>{{$flashsales -> id}}</td>
                      <td>{{$flashsales -> store_id}}</td>
                      <td>{{$flashsales -> slug}}</td>
                      <td>{{$flashsales -> name}}</td>
                      <td>{{$flashsales -> starts_at}}</td>
                      <td>{{$flashsales -> deleted_at}}</td>

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
  </div><!-- Content Area -->

@endsection

@section('js_script')
  <script type="text/javascript">
    jQuery('.datetimepicker').datetimepicker({
      timepicker: false,
      scrollMonth: false,
      scrollInput: false,
      format: 'Y-m-d'
    });
    $(document).ready(function () {
      $('.tooltipped').tooltip({delay: 50});

    });
  </script>

@endsection
