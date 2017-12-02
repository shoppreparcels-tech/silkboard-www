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
                    <h3>Default Shipping Address <a href="javascript::void(0)" class="tooltipkey" title="Please make sure that your address information is correct before you Create yourShip Request. The courier will charge an INR 1000 fee to your Shoppre account if you update your address after the shipment has left our facility. Many couriers charge this fee after delivery, so you may see it charged to your account post-shipment."><i class="fa fa-question-circle-o"></i></a></h3>
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
                          Take standard photos of item at login <a href="javascript::void(0)" class="tooltipkey" title="We take upto 5 Basic photographs of all your items which you can view immediately for a cost of INR 100*.<br>
                          <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a>
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
                          Take advanced photos of item at login <a href="javascript::void(0)" class="tooltipkey" title="You can also request upto 10 Additional Photos (incase you want some more details or if you want to inspect if the items are not damaged) for a cost of INR 500*. This might take upto a maximum period of 48 hours, and until then your package will be “in review”.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a>
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
                          Repackage your items <a href="javascript::void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment* will be incurred to discard shoe boxes).
                          <br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a>
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
                          Fragile Stickers <a href="javascript::void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. At times, we may prompt you via email if we feel that your items require a Fragile Sticker. Fragile stickers will be applied to boxes on every shipment at INR 100 per shipment*.
                          <br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a>
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
                          Add extra packing material <a href="javascript::void(0)" class="tooltipkey" title="Additional protective packaging will be added to every shipment at the cost given below:<br>
                          100rs until 10kg*<br>
                          200rs for 10-20kg*<br>
                          300rs for above 20kg*<br>
                          <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a>
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
                          Ship in original shipping boxes <a href="javascript::void(0)" class="tooltipkey" title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). Incase you do not want any of your items to be repacked, you can choose this option to ship your packages in the original shipping boxes in which they were received."><i class="fa fa-question-circle-o"></i></a>
                        </label>
                      </div>
                    </div>
                    <div class="form-group" style="margin: 10px 0;">
                      <div class="col-sm-2" style="padding: 0;margin-right: 10px;max-width: 65px;">
                        <input type="text" class="form-control" id="maxweight" name="maxweight" value="{{$settings->maxweight or ''}}" placeholder="(in kg)">
                      </div>
                      <label for="maxweight" class="col-sm-9 control-label">Max weight per box/Multi-piece shipment (MPS) <a href="javascript::void(0)" class="tooltipkey" title="Choose this option if you would like to restrict a Maximum weight of individual boxes in a shipment. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)*.<br>
                      <i>Please note that a shipment which weighs more than 30kg will be considered as a commercial shipment and will incur a custom clearance cost of INR 2500.</i><br>
                      <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> <small>1 kilogram is about 2.2046 pounds</small></label>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          @if($settings->giftwrap == 1)
                          <input type="checkbox" name="giftwrap" value="1" checked>
                          @else
                          <input type="checkbox" name="giftwrap" value="1">
                          @endif
                          Gift Wrap <a href="javascript::void(0)" class="tooltipkey" title="We can gift wrap your items at a cost of INR 100/- per package*. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped.<br>
                          <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above). </small>"><i class="fa fa-question-circle-o"></i></a>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          @if($settings->giftnote == 1)
                          <input type="checkbox" name="giftnote" value="1" checked>
                          @else
                          <input type="checkbox" name="giftnote" value="1">
                          @endif
                          Gift Note <a href="javascript::void(0)" class="tooltipkey" title="We can write a gift note and place it inside your package at a cost of INR 50/- per package*.<br>
                          <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a>
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
