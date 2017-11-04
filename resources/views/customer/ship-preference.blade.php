@extends('layout')

@section('title', ' - Shipping Preferences')

@section('content')

	@include('partials._banner')

	<section class="dash-preference">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          	@include('partials._sidebar')
          </div>
          <div class="col-sm-9">
            <div class="ship-preference">
              <h2>Shipping Preferences</h2>
              @if (session('message'))
                  <div class="alert alert-success">{{ session('message') }}</div>
              @endif
              <div class="box-grey">
                <form class="form-horizontal" method="post" action="{{route('customer.ship.prefer.update')}}">
                {{ csrf_field() }}
                  <div class="section btm-border">
                    <h3>Default Shipping Address</h3>
                    @if(!empty($address))
                    <div class="address">
                      <h6>{{$address->city}} Address</h6>
                      <address>
                      <p>{{$address->name}}</p>
                      <p>{{$address->line1}}</p>
                      <p>{{$address->line2}}</p>
                      <p>{{$address->city}}, {{$address->state}}</p>
                      <p>{{$address->country}} - {{$address->pin}}</p>
                      <p>PH: ({{$address->code}}) {{$address->phone}}</p>
                      </address>
                      <a href="{{route('customer.address')}}" class="edit"><i class="fa fa-pencil"></i></a>
                    </div>
                    @else
                      <a href="{{route('customer.address.add')}}">+ Add A Shipping Address</a>
                    @endif
                  </div>
                  <div class="section btm-border">
                    <h3>Log in options</h3>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          @php
                            $std_photo = (isset($settings->std_photo) && !empty($settings->std_photo)) ? "checked" : "";
                          @endphp
                          <input type="checkbox" name="std_photo" value="1" {{$std_photo}}>
                          Take standard photos of item at login
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          @php
                            $advc_photo = (isset($settings->advc_photo) && !empty($settings->advc_photo)) ? "checked" : "";
                          @endphp
                          <input type="checkbox" name="advc_photo" value="1" {{$advc_photo}}>
                          Take advanced photos of item at login
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="section btm-border">
                    <h3>Packing Options</h3>
                    <div class="form-group">
                      @php
                        $repack = (isset($settings->repack) && !empty($settings->repack)) ? "checked" : "";
                      @endphp
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="repack" value="1" {{$repack}}>
                          Repackage your items
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      @php
                        $sticker = (isset($settings->sticker) && !empty($settings->sticker)) ? "checked" : "";
                      @endphp
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="sticker" value="1" {{$sticker}}>
                          Fragile Stickers
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      @php
                        $pack_extra = (isset($settings->pack_extra) && !empty($settings->pack_extra)) ? "checked" : "";
                      @endphp
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="pack_extra" value="1" {{$pack_extra}}>
                          Add extra packing material
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      @php
                        $orginal_box = (isset($settings->orginal_box) && !empty($settings->orginal_box)) ? "checked" : "";
                      @endphp
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="orginal_box" value="1" {{$orginal_box}}>
                          Ship in original shipping boxes
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="section btm-border" id="performa_invoice">
                    <h3>Performa Invoice Options</h3>
                    <div class="form-group">
                      <label for="taxid" class="col-sm-1 control-label">Tax ID </label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="taxid" name="tax_id" value="{{$settings->tax_id or ''}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        @php
                          $personal = (isset($settings->personal) && !empty($settings->personal)) ? "checked" : "";
                        @endphp
                        <label>
                          <input type="checkbox" name="personal" value="1" {{$personal}}>
                          Mark items for "Personal Use Only"
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        @php
                          $include_invoice = (isset($settings->include_invoice) && !empty($settings->include_invoice)) ? "checked" : "";
                        @endphp
                        <label>
                          <input type="checkbox" name="include_invoice" value="1" {{$include_invoice}}>
                          Please include a printed Proforma Invoice in my shipment
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="section">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary pull-right">Update Changes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
<script>
  $(document).on('change', '.upload:file', function() {
      var input = $(this);
      $("#jquery_docs").html("");
      numFiles = input.get(0).files ? input.get(0).files.length : 1;
      labels = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      if (numFiles > 0) {
        var files = $(this)[0].files;
        for (var i = 0; i < files.length; i++) {
            $("#jquery_docs").append('<li><a href="#" class="doc">'+files[i].name+'</a></li>');
        }
      }
  });
</script>
@endsection
