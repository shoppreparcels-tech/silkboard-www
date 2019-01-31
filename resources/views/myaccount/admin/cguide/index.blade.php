@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Select Country</h1>
                <span>Choose country from the List</span>

            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <form method="post">
                            <div class="input-field col s12">
                                <select id="select_iso">
                                    <option value="" selected>Select Country</option>
                                    @foreach($countries as $selCountry)
                                      <option value="{{$selCountry->iso}}">{{$selCountry->name}}</option>
                                    @endforeach
                                </select>
                                <label>Select Country</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection

@section('js_script')
  <!-- Select2 -->
  <script type="text/javascript">
    $("#select_iso").change(function(){
        if ($(this).val().length != 0) {
            window.location = "/admin/country/guide/"+$(this).val();
        }
    });
  </script>
@endsection
