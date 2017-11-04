@extends('layout')

@section('title', '- Locker')

@section('css_style')
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')

    @if(empty($address))
      <div class="transcontain">
        <div class="whitebox">
          <h3>Your Default Address</h3>
          <p>Its mandatory for calculate estimated shipping cost</p>
          <form method="post" action="{{route('customer.address.submit')}}" class="addressform">
          {{ csrf_field() }}
          <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name">
              @if ($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label class="control-label">Address Line 1</label>
              <input type="text" class="form-control" name="line1" placeholder="Address Line 1">
              @if ($errors->has('line1'))
                  <span class="error">{{ $errors->first('line1') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label class="control-label">Address Line 2</label>
              <input type="text" class="form-control" name="line2" placeholder="Address Line 2">
          </div>
          <div class="form-group">
              <label class="control-label">City</label>
              <input type="text" class="form-control" name="city" placeholder="Enter City">
              @if ($errors->has('city'))
                  <span class="error">{{ $errors->first('city') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label class="control-label">State</label>
              <input type="text" class="form-control" name="state" placeholder="Enter State" >
              @if ($errors->has('state'))
                  <span class="error">{{ $errors->first('state') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label class="control-label">Country</label>
              <select class="form-control select2" name="country">
              <option>Select Country</option>
              @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
              @endforeach
              </select>
              @if ($errors->has('country'))
                  <span class="error">{{ $errors->first('country') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label class="control-label">Postal Code</label>
              <input type="text" class="form-control" name="pin" placeholder="Enter Your PIN">
              @if ($errors->has('pin'))
                  <span class="error">{{ $errors->first('pin') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label class="control-label">Phone</label>
              <div class="row">
                <div class="col-sm-4">
                  <select class="select2 form-control" name="code">
                  <option value="">Country Code</option>
                  @foreach($countries as $country)
                    <option value="{{$country->phonecode}}">{{$country->iso}}(+{{$country->phonecode}})</option>
                  @endforeach
                  </select>
                  @if ($errors->has('code'))
                      <span class="error">{{ $errors->first('code') }}</span>
                  @endif
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                  @if ($errors->has('phone'))
                      <span class="error">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
              </div>
          </div>
          <div class="form-group">
            <input type="hidden" name="redirect" value="{{url()->current()}}">
            <input type="hidden" name="default" value="1">
            <button type="submit" class="btn btn-block btn-shoppre">Save Address</button>
          </div>
        </form>
        </div>
      </div>
    @elseif(empty($survey))
      <div class="transcontain">
        <div class="whitebox">
          <h3>Hey, a Quick Question</h3>
          <p>How did you get know about us</p>
          <form class="surveyform" action="{{route('customer.register.survey')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <select class="form-control" name="source">
                <option>Google</option>
                <option>Facebook</option>
                <option>Instagram</option>
                <option>Quora</option>
                <option>YouTube</option>
                <option>Twitter</option>
                <option>Linkedin</option>
                <option>Friends &amp; Relatives</option>
                <option>Magazine</option>
                <option>Newspaper</option>
                <option>Radio</option>
                <option>TV</option>
                <option>Theatre</option>
                <option>Another Website</option>
                <option>Others</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-shoppre">Continue to My Profile</button>
            </div>
          </form>
        </div>
      </div>
    @endif

    @include('partials._banner')

    @if(Auth::guard('customer')->user()->email_verify == 'yes')
    
    <section class="dash-orders">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="order-top-left">
              <h3>Packages in Locker {{Auth::guard('customer')->user()->locker}}</h3>
              <a href="{{route('customer.incoming')}}" class="btn btn-blue">Alert Shoppre about my incoming Packages (Optional)</a>
            </div>

            @if(!$shipQueue->isEmpty())
              <div class="order-top-right">
                <a href="{{route('shipping.queue')}}" class="btn">View Queue <span>{{$shipQueue->count()}}</span></a>
                <p>We’re currently preparing {{$shipQueue->count()}} shipment for you.</p>
              </div>
            @endif
            
            <div class="clearfix"></div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="order-tab">
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#ship" aria-controls="ship" role="tab" data-toggle="tab">Ready to send <span class="badge" style="background:#de4535">{{$ships->count()}}</a></li>
                <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">In Review <span class="badge" style="background:#0cbb1a">{{$reviews->count()}}</span></a></li>
                <li role="presentation"><a href="#action" aria-controls="action" role="tab" data-toggle="tab">Action <span class="badge" style="background:#0ebbc2">{{$confirms->count()}}</span></a></li>
                <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">View All <span class="badge">{{$packages->count()}}</span></a></li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ship">
                    @include('customer.locker._ship')
                </div>
                <div role="tabpanel" class="tab-pane" id="review">
                    @include('customer.locker._review')
                </div>
                <div role="tabpanel" class="tab-pane" id="action">
                    @include('customer.locker._action')
                </div>
                <div role="tabpanel" class="tab-pane" id="all">
                    @include('customer.locker._all')
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="dash-rightside">
              <div style="position: relative;" id="shipcost">
                  <div class="dash-sidecost">
                    <p>Shopper Wallet <a href="javascript::void(0)" class="tooltipkey" title="Shoppre can add or deduct cash from your account depending on the situation. If the amount is positive, it means that you own this much money, and this amount will be deducted from the final charges. If the amount is negative, it means that this amount will be added to the final charges."><i class="fa fa-question-circle-o"></i></a> 
                      <span class="pull-right">
                      <i class="fa fa-rupee"></i> 
                      <span>{{number_format($customer->balance->amount, 2, ".", "")}}</span>
                      </span>
                    </p>
                  </div>
                  <div class="dash_opts">
                    <h3 class="title">Shipping Options</h3>
                    <h4>Packing Options</h4>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="repack" value="1">
                        <span class="label">Discard shoe boxes <a href="javascript::void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment will be incurred to discard shoe boxes)."><i class="fa fa-question-circle-o"></i></a> </span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sticker" value="1">
                        <span class="label">Fragile stikers <a href="javascript::void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 100 per shipment."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="extrapack" value="1">
                        <span class="label">Add extra packing material <a href="javascript::void(0)" class="tooltipkey" title="Additional protective packaging will be added to every shipment at the cost given below:<br> 100rs until 10kg<br>200rs for 10-20kg<br>300rs for above 20kg"><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="original" value="1">
                        <span class="label">Ship in original boxes (do not repack) <a href="javascript::void(0)" class="tooltipkey" title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="giftwrap" value="1">
                        <span class="label">Gift wrap <a href="javascript::void(0)" class="tooltipkey" title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="giftnote" value="1">
                        <span class="label">Gift note <a href="javascript::void(0)" class="tooltipkey" title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <h4>Profoma Invoice Options</h4>
                    <div class="form-group taxid">
                      TAX ID: <input type="text" class="form-control" name="invoice_taxid">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="invoice_personal">
                        <span class="label">Mart items for personal use only</span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="invoice_include">
                        <span class="label">Please include a printed profoma invoice with in my shipment</span>
                      </label>
                    </div>
                    <hr>
                    @if(!$ships->isEmpty())
                      {{csrf_field()}}
                      <button type="submit" id="create_rqst" class="btn btn-block btn-shoppre">Create Ship Request</button>
                    @endif
                  </div>
              </div>
                
              <ul class="dash-quick">
                <li style="background-image:url({{asset('img/dashico1.png')}});"><a href="#">Country Guides</a></li>
                <li style="background-image:url({{asset('img/dashico2.png')}});"><a href="#">Brands You Love</a></li>
                <li style="background-image:url({{asset('img/dashico3.png')}});"><a href="#">Shipping Calculator</a></li>
                <li style="background-image:url({{asset('img/dashico4.png')}});"><a href="#">Personal Shopper</a></li>
                <li style="background-image:url({{asset('img/dashico5.png')}});"><a href="#">Exchange Rates</a></li>
                <li style="background-image:url({{asset('img/dashico6.png')}});"><a href="#">Our Services</a></li>
                <li style="background-image:url({{asset('img/dashico7.png')}});"><a href="#">Address Book</a></li>
                <li style="background-image:url({{asset('img/dashico8.png')}});"><a href="#">Blogs</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    @endif

@endsection

@section('js_script')
    <script src="{{asset('js/input-file.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $('.price_calc').each(function() {
            $(this).on('input',function() {
                var id = $(this).attr('data-autocalc');
                var packid = $(this).attr('data-packid');
                var price = parseFloat($(this).val());
                var qty = parseFloat($('#autoqty_'+id).val());
                $('#autotal_'+id).text((qty * price ? qty * price : 0).toFixed(2));

                var total = 0;
                $('.totalprice').each(function(){
                    total += parseFloat(this.innerHTML)
                });
                $('#grandcalc_'+packid).text(total.toFixed(2));
            });
        });

        $('.itemcalc').each(function() {
            $(this).on('input',function() {
                var id = $(this).attr('data-itemcalc');
                var packid = $(this).attr('data-packid');
                var price = parseFloat($(this).val());
                var qty = parseFloat($('#itemqty_'+id).val());
                $('#totalvalue_'+id).text(qty * price ? qty * price : 0);
                var total = 0;
                $('.totalitemvalue_'+packid).each(function(){
                    total += parseFloat(this.innerHTML)
                });
                $('#granditemvalue_'+packid).text(total.toFixed(2));
            });
        });

        $('.btn-reset').on('click', function() {
           $('input, textarea').filter(function() {
            return !this.form;
           }).val(function() {

               $('.itemcalc').each(function() {
                var id = $(this).attr('data-itemcalc');
                var packid = $(this).attr('data-packid');
                var price = this.defaultValue;
                var qty = parseFloat($('#itemqty_'+id).val());
                $('#totalvalue_'+id).text(qty * price ? qty * price : 0);
                var total = 0;
                $('.totalitemvalue_'+packid).each(function(){
                    total += parseFloat(this.innerHTML)
                });
                $('#granditemvalue_'+packid).text(total.toFixed(2));

                return this.defaultValue;

              });
           });
        });

    </script>
    <script src="{{asset('js/photoreq.js')}}"></script>
    <script src="{{asset('js/jquery.redirect.js')}}"></script>
    <script type="text/javascript">

        $(document).ready(function() {

          $("input:checkbox[name='allshipreq']").change(function(){
              if ($(this).is(':checked')) {
                  $("input:checkbox[name='checkshipreq']").each(function() {
                    $(this).prop('checked',true);
                  });
                  $('#create_rqst').prop("disabled", false);
              }else{
                $('input:checkbox[name="checkshipreq"]').prop('checked', false);
                $('#create_rqst').prop("disabled", true);
              }
          });

          $("input:checkbox[name='checkshipreq']").change(function(){
              var i = 0;
              $("input:checkbox[name='checkshipreq']").each(function() {
                if (this.checked == true){ i++; }
              });
              if (i == 0) {
                $('#create_rqst').prop("disabled", true);
              }else{
                $('#create_rqst').prop("disabled", false);
              }
          });

          $("#create_rqst").click(function(e) {
            e.preventDefault();

            var i = 0;
            var packids = [];
            $("input:checkbox[name='checkshipreq']").each(function() {
                if (this.checked == true){ packids[i++] = this.value; }
            });
            var token = $('input[name="_token"]').val();
            var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
            var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
            var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
            var original =  $("input[name='original']").is(':checked') ? 1 : 0;
            var giftwrap =  $("input[name='giftwrap']").is(':checked') ? 1 : 0;
            var giftnote =  $("input[name='giftnote']").is(':checked') ? 1 : 0;

            var invoice_taxid = $("input[name='invoice_taxid']").val();
            var invoice_personal =  $("input[name='invoice_personal']").is(':checked') ? 1 : 0;
            var invoice_include =  $("input[name='invoice_include']").is(':checked') ? 1 : 0;

            $.redirect("/shipping/request/redirect",{
              _token: token,
              packids: packids,
              repack: repack,
              sticker: sticker,
              extrapack: extrapack,
              original: original,
              giftwrap: giftwrap,
              giftnote: giftnote,
              invoice_taxid: invoice_taxid,
              invoice_personal: invoice_personal,
              invoice_include: invoice_include
            });

          });

        });

    </script>
@endsection