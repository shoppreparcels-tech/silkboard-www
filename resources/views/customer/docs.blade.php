@extends('layout')

@section('title', ' - Account Documents')

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
              <h2>Account Documents</h2>
              @if (session('message'))
                  <div class="alert alert-success">{{ session('message') }}</div>
              @endif
              <div class="box-grey">
                <form class="form-horizontal" method="post" action="{{route('customer.account.docs.submit')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="section">
                    <div class="form-group">
                      <label>Please upload any documents requested by Shoppre to validate your account (For example, your photo identification, etc.). Please do not upload invoices here. Seller invoices can be uploaded to your packages in My Locker.</label>
                    </div>
                    <div class="form-group">
                      <span class="btn btn-shoppre btn-file">
                        <label>Upload Document <i class="fa fa-upload"></i></label><input type="file" class="upload" name="documents[]" multiple>
                      </span>
                      @if ($errors->has('documents.*'))
                        <span class="error">{{ $errors->first('documents.*') }}</span>
                      @endif
                      <ul id="jquery_docs" class="ac_docs"></ul>
                      <ul class="ac_docs">
                        @if(!$docs->isEmpty())
                          @foreach($docs as $doc)
                            <li><a href="{{asset('uploads/documents')}}/{{$doc->customer_id}}/{{$doc->document}}" class="doc" target="_blank">{{$doc->document}}</a><a href="{{route('customer.account.docs.delete', ['id'=>$doc->id])}}" class="trash"><i class="fa fa-trash"></i></a></li>
                          @endforeach
                        @endif
                      </ul>
                    </div>
                    <div class="form-group">
                      <label>Is this secure?</label>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, all uploaded documents are held in our secure server, and are only available for viewing  when you are signed in to your account.</p>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
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
