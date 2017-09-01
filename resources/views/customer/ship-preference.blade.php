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
                <form class="form-horizontal" method="post" action="{{route('customer.ship.prefer.update')}}" enctype= multipart/form-data>
                {{ csrf_field() }}
                  <div class="section btm-border">
                    <h3>Default Shipping Address</h3>
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
                  </div>
                  <div class="section btm-border">
                    <h3>Log in options</h3>
                    <div class="form-group">
                      <label for="additionalemail" class="col-sm-4 control-label">Additional email address (optional) </label>
                      <div class="col-sm-6">
                        <input type="email" name="email_alt" class="form-control" id="additionalemail" value="{{$settings->email_alt or ''}}">
                        @if ($errors->has('email_alt'))
                          <span class="error">{{ $errors->first('email_alt') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          @php
                            $photo_login = (isset($settings->photo_login) && !empty($settings->photo_login)) ? "checked" : "";
                          @endphp
                          <input type="checkbox" name="photo_login" value="1" {{$photo_login}}>
                          Take photos of item at login*
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="section btm-border">
                    <h3>Shipping Schedule Preference</h3>
                    @php
                      $hold = "checked";
                      $auto = "";
                      if(isset($settings->schedule) && !empty($settings->schedule)){
                        if($settings->schedule == "auto"){
                          $auto = "checked";
                          $hold = "";
                        }else{
                          $hold = "checked";
                          $auto = "";
                        }
                      }
                    @endphp
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="schedule" value="hold" {{$hold}}>
                          Hold
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="schedule" value="auto" {{$auto}}>
                          Automatic
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
                          Repackage your items*
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
                          Fragile Stickers*
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
                          Add extra packing material*
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
                    <div class="form-group">
                      <label for="multipiece" class="col-sm-7 control-label">Maximum weight per box/ Multi-piece shipment (MPS) </label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="box_weight" id="multipiece" value="{{$settings->box_weight or ''}}">
                        @if ($errors->has('box_weight'))
                          <span class="error">{{ $errors->first('box_weight') }}</span>
                        @endif
                      </div>
                      <small class="col-sm-2">1 kg is about 2.20462 pounds</small>
                    </div>
                  </div>
                  <div class="section btm-border">
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
                    <h3>Account Documents</h3>
                    <div class="form-group">
                      <label>Please upload any documents requested by Shoppre to validate your account (For example, your photo identification, etc.). Please do not upload invoices here. Seller invoices can be uploaded to your packages in My Locker.</label>
                    </div>
                    <div class="form-group">
                      <span class="btn btn-shoppre btn-file">
                        <label>Upload Document <i class="fa fa-upload"></i></label><input type="file" class="upload" name="documents[]" multiple>
                      </span>
                      <ul id="jquery_docs" class="ac_docs"></ul>
                      <ul class="ac_docs">
                        @if(!$docs->isEmpty())
                          @foreach($docs as $doc)
                            <li><a href="{{asset('uploads/account-documents')}}/{{$doc->document}}" class="doc">{{$doc->document}}</a><a href="{{route('customer.account-doc.delete', ['id'=>$doc->id])}}" class="trash"><i class="fa fa-trash"></i></a></li>
                          @endforeach
                        @endif
                      </ul>
                    </div>
                    <div class="form-group">
                      <label>Is this secure?</label>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, all uploaded documents are held in our secure server, and are only available for viewing  when you are signed in to your account.</p>
                    </div>
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
