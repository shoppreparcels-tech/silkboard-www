@extends($IS_MOBILE ? 'myaccount.layout-mobile' : 'myaccount.layout')

@section('title', '- Locker')

@section('css_style')
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')

    @if(empty($survey))
      <div class="transcontain">
        <div class="whitebox">
          <h3>Hey, a Quick of Question</h3>
          <p>How did you get know about us</p>
          <form class="surveyform" action="{{route('customer.register.survey')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <select class="form-control" name="source" required>
                <option>Shoppre UAE - MMME</option>
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
              <p> Select your Age </p>
              <div class="form-group">
                  <select class="form-control" name="age" required>
                      <option value="" disabled selected hidden>Please Choose...</option>
                      <option>20-25</option>
                      <option>25-30</option>
                      <option>30-35</option>
                      <option>35-40</option>
                      <option>40-45</option>
                      <option>45 and Above</option>
                  </select>
              </div>
              <p>Select Your Nationality</p>
              <div class="form-group">
                  <select class="form-control" name="country" required>
                      <option value="" disabled selected hidden>Please Choose...</option>
                       @foreach($country as $countries)
                          <option value="{{$countries->id}}" >{{$countries->name}}</option>
                       @endforeach
                  </select>
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-shoppre">Continue to My Profile</button>
            </div>
          </form>
        </div>
      </div>
    @endif
    @if(empty(Auth::guard('customer')->user()->phone))
        <div class="mobile-verification-popup">
            <div class="whitebox">
                <br>
                <br>
                <h3>Verify Your mobile number</h3>
                <p>To continue your to profile</p>
                <form class="mobileform" style="width: 80%" action="{{route('verify.mobile.submit')}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <select class="form-control" name="country" required>
                                    <option value="" disabled selected hidden>--Country Code--</option>
                                    @foreach($country as $countries)
                                        <option value="{{$countries->phone_code}}">+({{$countries->phone_code}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-md-offset-4 col-sm-offset-0">
                                <button type="submit" class="btn btn-shoppre">Verify </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif

    @if(Auth::guard('customer')->user()->email_verify == 'yes')

    <section class="dash-orders">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            @if(!$shipConfirm->isEmpty())
              <h4 class="subpaybtn">Your shipment is ready. <a href="{{route('shipping.queue')}}">Submit Your Payment</a> Quickly in order to avoid storage fees. <a href="javascript:void(0)" class="tooltipkey" title="Your package is now ready to be shipped and your final charges have been updated.You get a free time period of 7 DAYS to submit your payment. You will incur a storage fee of INR 100/ day for your prepared parcel from the 8th day onwards, which you can view in your Shoppre Wallet."><i class="fa fa-question-circle-o"></i></a></h4>
            @endif

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
                  <li role="presentation" class="active"><a href="#ship" aria-controls="ship" role="tab" data-toggle="tab">Ready to send <span class="badge" style="background:#de4535">{{$ships->count()}}</span></a></li>
                <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">In Review <span class="badge" style="background:#0cbb1a">{{$reviews->count()}}</span></a></li>
                <li role="presentation"><a href="#action" aria-controls="action" role="tab" data-toggle="tab">Action Required<span class="badge" style="background:#0ebbc2">{{$confirms->count()}}</span></a></li>
                <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">View All <span class="badge">{{$packages->count()}}</span></a></li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ship">
                    @include('myaccount.customer.locker._ship')
                </div>
                <div role="tabpanel" class="tab-pane" id="review">
                    @include('myaccount.customer.locker._review')
                </div>
                <div role="tabpanel" class="tab-pane" id="action">
                    @include('myaccount.customer.locker._action')
                </div>
                <div role="tabpanel" class="tab-pane" id="all">
                    @include('myaccount.customer.locker._all')
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="dash-rightside">
              <div style="position: relative;" id="shipcost">
                  <div class="dash-sidecost">
                    <p>Shoppre Wallet <a href="javascript:void(0)" class="tooltipkey" title="Shoppre can add or deduct cash from your Shoppre Wallet depending on the situation.<br>
                    For eg: Your Personal Shopper balance will be settled here in your Shoppre Wallet.<br>
                    - If the amount is positive, it means that you own this much cash,
                    and this amount will be deducted from the final charges.<br>
                    - If the amount is negative, it means that this amount will be
                    added to the final charges."><i class="fa fa-question-circle-o"></i></a>
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
                        @if($customer->preference->repack == 1)
                        <input type="checkbox" name="repack" value="1" checked>
                        @else
                        <input type="checkbox" name="repack" value="1">
                        @endif
                        <span class="label">Discard shoe boxes <a href="javascript:void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment will be incurred to discard shoe boxes)."><i class="fa fa-question-circle-o"></i></a> </span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->sticker == 1)
                        <input type="checkbox" name="sticker" value="1" checked>
                        @else
                        <input type="checkbox" name="sticker" value="1">
                        @endif
                        <span class="label">Fragile stickers <a href="javascript:void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 100 per shipment."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->pack_extra == 1)
                        <input type="checkbox" name="extrapack" value="1" checked>
                        @else
                        <input type="checkbox" name="extrapack" value="1">
                        @endif
                        <span class="label">Add extra packing material <a href="javascript:void(0)" class="tooltipkey" title="Additional protective packaging will be added to every shipment at the cost given below:<br> 100rs until 10kg<br>200rs for 10-20kg<br>300rs for above 20kg"><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->orginal_box == 1)
                        <input type="checkbox" name="original" value="1" checked>
                        @else
                        <input type="checkbox" name="original" value="1">
                        @endif
                        <span class="label">Ship in original boxes (do not repack) <a href="javascript:void(0)" class="tooltipkey" title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->gift_wrap == 1)
                        <input type="checkbox" name="gift_wrap" value="1" checked>
                        @else
                        <input type="checkbox" name="gift_wrap" value="1">
                        @endif
                        <span class="label">Gift wrap <a href="javascript:void(0)" class="tooltipkey" title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->gift_note == 1)
                        <input type="checkbox" name="gift_note" value="1" checked>
                        @else
                        <input type="checkbox" name="gift_note" value="1">
                        @endif
                        <span class="label">Gift note <a href="javascript:void(0)" class="tooltipkey" title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i class="fa fa-question-circle-o"></i></a></span>
                      </label>
                    </div>
                    <div class="form-group" style="margin: 10px 0;">
                      <div style="padding: 0;margin-right: 2px;max-width: 65px;display: inline-block;">
                        <input type="text" class="form-control" id="max_weight" name="max_weight" value="{{$customer->preference->max_weight}}" placeholder="(in kg)">
                      </div>
                      <label for="max_weight" class="" style="display: inline-block;width: 70%;vertical-align: top;font-weight: 600;">Maximum weight per package (in kg) <a href="javascript:void(0)" class="tooltipkey" title="" data-original-title="Choose this option if you would like to restrict a Maximum weight of individual boxes in a shipment. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)*.<br>
                      <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></a> </label>
                    </div>
                    <h4>Profoma Invoice Options</h4>
                    <div class="form-group taxid">
                      TAX ID: <input type="text" class="form-control" name="invoice_taxid" value="{{$customer->preference->tax_id}}">
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->personal == 1)
                        <input type="checkbox" name="invoice_personal" value="1" checked>
                        @else
                        <input type="checkbox" name="invoice_personal" value="1">
                        @endif
                        <span class="label">Mark items for personal use only</span>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        @if($customer->preference->include_invoice == 1)
                        <input type="checkbox" name="invoice_include" value="1" checked>
                        @else
                        <input type="checkbox" name="invoice_include" value="1">
                        @endif
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
                <li style="background-image:url({{asset('img/dashico2.png')}});"><a href="{{route('stores')}}">Brands You Love</a></li>
                <li style="background-image:url({{asset('img/dashico3.png')}});"><a href="{{route('pricing')}}">Shipping Calculator</a></li>
                <li style="background-image:url({{asset('img/dashico4.png')}});"><a href="{{route('personal.shopper')}}">Personal Shopper</a></li>
                <li style="background-image:url({{asset('img/dashico5.png')}});"><a href="#">Exchange Rates</a></li>
                <li style="background-image:url({{asset('img/dashico6.png')}});"><a href="{{route('services')}}">Our Services</a></li>
                <li style="background-image:url({{asset('img/dashico7.png')}});"><a href="{{route('customer.address')}}">Address Book</a></li>
                <li style="background-image:url({{asset('img/dashico8.png')}});"><a href="https://blog.shoppre.com" target="_blank">Blogs</a></li>
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
                var package_id = $(this).attr('data-package_id');
                var price = parseFloat($(this).val());
                var quantity = parseFloat($('#autoqty_'+id).val());
                $('#autotal_'+id).text((quantity * price ? quantity * price : 0).toFixed(2));

                var total = 0;
                $('.total_price').each(function(){
                    total += parseFloat(this.innerHTML)
                });
                $('#grandcalc_'+package_id).text(total.toFixed(2));
            });
        });

        $('.itemcalc').each(function() {
            $(this).on('input',function() {
                var id = $(this).attr('data-itemcalc');
                var package_id = $(this).attr('data-package_id');
                var price = parseFloat($(this).val());
                var quantity = parseFloat($('#itemqty_'+id).val());
                $('#totalvalue_'+id).text(quantity * price ? quantity * price : 0);
                var total = 0;
                $('.totalitemvalue_'+package_id).each(function(){
                    total += parseFloat(this.innerHTML)
                });
                $('#granditemvalue_'+package_id).text(total.toFixed(2));
            });
        });

        $('.btn-reset').on('click', function() {
           $('input, textarea').filter(function() {
            return !this.form;
           }).val(function() {

               $('.itemcalc').each(function() {
                var id = $(this).attr('data-itemcalc');
                var package_id = $(this).attr('data-package_id');
                var price = this.defaultValue;
                var quantity = parseFloat($('#itemqty_'+id).val());
                $('#totalvalue_'+id).text(quantity * price ? quantity * price : 0);
                var total = 0;
                $('.totalitemvalue_'+package_id).each(function(){
                    total += parseFloat(this.innerHTML)
                });
                $('#granditemvalue_'+package_id).text(total.toFixed(2));

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
            var package_ids = [];
            $("input:checkbox[name='checkshipreq']").each(function() {
                if (this.checked == true){ package_ids[i++] = this.value; }
            });
            var token = $('input[name="_token"]').val();
            var repack =  $("input[name='repack']").is(':checked') ? 1 : 0;
            var sticker =  $("input[name='sticker']").is(':checked') ? 1 : 0;
            var extrapack =  $("input[name='extrapack']").is(':checked') ? 1 : 0;
            var original =  $("input[name='original']").is(':checked') ? 1 : 0;
            var gift_wrap =  $("input[name='gift_wrap']").is(':checked') ? 1 : 0;
            var gift_note =  $("input[name='gift_note']").is(':checked') ? 1 : 0;

            var max_weight = $("input[name='max_weight']").val();
            var invoice_taxid = $("input[name='invoice_taxid']").val();
            var invoice_personal =  $("input[name='invoice_personal']").is(':checked') ? 1 : 0;
            var invoice_include =  $("input[name='invoice_include']").is(':checked') ? 1 : 0;

            $.redirect("/shipping/request/redirect",{
              _token: token,
              package_ids: package_ids,
              repack: repack,
              sticker: sticker,
              extrapack: extrapack,
              original: original,
              gift_wrap: gift_wrap,
              gift_note: gift_note,
              max_weight: max_weight,
              invoice_taxid: invoice_taxid,
              invoice_personal: invoice_personal,
              invoice_include: invoice_include
            });

          });

        });

        localStorage.name = {{Auth::guard('customer')->user()->name}};
        localStorage.email = {{Auth::guard('customer')->user()->name}};

    </script>
@endsection
