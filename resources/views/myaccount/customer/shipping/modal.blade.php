<div id="myAddressModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="edit_margin">
        <div class="accnt_settings">
          <h2 class="heading_align_address">Edit Shipping Address</h2>
          <span id="txt_span"></span>
          <form class="form-horizontal" method="post" action="{{route('customer.address.update')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="col-sm-3 control-label">Name</label>
              <div class="col-sm-3">
                <select class="form-control" name="salutation" id="ddl_salutation" required>
                  <option  value="">Title</option>
                  <option value="Mr">Mr</option>
                  <option value="Ms">Ms</option>
                  <option value="Mrs">Mrs</option>
                </select>
              </div>
              <div class="col-sm-3" style="padding-left: 0;">
                <input type="text" class="form-control" id="txt_first_name" name="first_name"   placeholder="First Name *" required>
              </div>
              <div class="col-sm-3" style="padding-left: 0;">
                <input type="text" class="form-control" id="txt_last_name" name="last_name"   placeholder="Last Name *" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Address Line 1</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="txt_line1" name="line1"  required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Address Line 2</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="txt_line2" name="line2" >
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">State</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="txt_state" name="state" >
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">City</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="txt_city" name="city" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Country</label>
              <div class="col-sm-9">
                <select class="form-control select2" name="country_id" id="ddl_country_id" required>
                  <option value="">Select Country</option>
                  @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Postal Code</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="txt_pincode" name="pincode" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Phone</label>
              <div class="col-sm-3">
                <select class="select2 form-control" name="country_code" id="ddl_country_code" required>
                  <option value="">Select</option>
                  @foreach($countries as $country)
                    <option value="+{{$country->phone_code}}">{{$country->iso}}(+{{$country->phone_code}})</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" id="txt_phone" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 col-md-offset-3">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chk_is_default" name="is_default" value="1"> Set this as default shipping address.
                  </label>
                </div>
              </div>
            </div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-2">
                  <input type="hidden" name="id" id="id" >
                  <input type="hidden" name="edit_add" value="edit_address" >
                  <button type="submit" class="btn btn-shoppre">Update</button>
                </div>
                <div class="col-sm-3">
                  <button type="button" id="btn_cancel" class="btn btn-primary">Cancel</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
  $(document).ready(function () {
    $('#outer_div').on('click', '#btn_edit_address', function () {
      var address_id = $(this).attr("data-address_id");
      jQuery.ajax({
        url: '/address/'+ address_id,
        type: "GET",
        error: function(jqXHR, exception){
          var msg = '';
          if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
          } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
          } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
          } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
          } else if (exception === 'timeout') {
            msg = 'Time out error.';
          } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
          } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
          }
          $('#post').html(msg);
        },
        success: function (address) {
          console.log(address);
          $('#id').val(address.id);
          $("#ddl_salutation").val(address.salutation);
          $("#ddl_country_id").val(address.country_id);
          $("#ddl_country_code").val('+'+address.country_code);

          $('#txt_first_name').val(address.first_name);
          $('#txt_last_name').val(address.last_name);

          $('#txt_line1').val(address.line1);
          $('#txt_line2').val(address.line2);
          $('#txt_state').val(address.state);
          $('#txt_city').val(address.city);
          $('#txt_pincode').val(address.pincode);
          $('#txt_phone').val(address.phone);

          $("#chk_is_default").attr("checked", address.is_default);
          $('#myAddressModal').modal('show');
        }

      });
    });

    $('#btn_cancel').click(function () {
      $('#myAddressModal').modal('hide');
    });
  });
</script>

