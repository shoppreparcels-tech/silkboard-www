@extends('myaccount.layout')

@section('title', 'Locker Dashboard')

@section('css_style')
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endsection

@section('content')

  @if(empty($survey))

    <div class="transcontain">
      <div class="whitebox">
        <span class="pull-right" onClick="$('.transcontain').hide();" style="cursor: pointer;">X</span>
        <br>
        <br>
        <h3>Participate in this quick survey & earn <span style="text-decoration: underline;font-style: italic">  50 loyalty points!</span></h3>
        {{--<h3>Do you mind answering a couple of questions?</h3>--}}
        <p>How did you get know about us?</p>
        <form class="surveyform" action="{{route('customer.register.survey')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <select class="form-control" name="source" required>
              <option value="" disabled selected hidden>Please Choose...</option>
              <option>Hit FM 96.7</option>
              <option>City FM 101.6</option>
              <option>Google</option>
              <option>Facebook</option>
              <option>YouTube</option>
              <option>Instagram</option>
              <option>Quora</option>
              <option>Twitter</option>
              <option>Linkedin</option>
              <option>Friends &amp; Relatives</option>
              <option>Magazine</option>
              <option>Newspaper</option>
              <option>Radio</option>
              <option>TV</option>
              <option>Theatre</option>
              <option>Another Website</option>
              <option>Shoppre UAE - MMME</option>
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
                <option value="{{$countries->id}}">{{$countries->name}}</option>
              @endforeach
            </select>
          </div>
          <p>What do you feel like shopping now?</p>
          <div class="category-align">
            @foreach($productCategories as $index => $category)
              <input type="checkbox" name="productCategory[]"  value="{{$category}}"> {{$category}}
              @if((++$index % 4) == 0)
                <br>
              @endif
            @endforeach
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-shoppre">Continue to My Profile</button>
          </div>
        </form>
      </div>
    </div>
  @endif
  @if (isset($IS_NEW) && $IS_NEW)
    @include('myaccount.partials._banner')
  @else

    @if(Auth::guard('customer')->user()->email_verify == 'yes')
      <section class="dash-orders" id="dashboard">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">

              @if(!$shipConfirm->isEmpty())
                <h4 class="subpaybtn">Your shipment is ready. <a href="{{route('shipping.queue')}}"
                                                                 style="font-weight: 800;">Submit Your Payment</a>
                  Quickly in order to avoid storage fees. <a href="javascript:void(0)" class="tooltipkey"
                                                             title="Your package is now ready to be shipped and your final charges have been updated.You get a free time period of 7 DAYS to submit your payment. You will incur a storage fee of INR 100/ day for your prepared parcel from the 8th day onwards, which you can view in your Shoppre Wallet."><i
                      class="fa fa-question-circle-o"></i></a></h4>
              @endif
              @if($package_count <=0 && $shipment_count <=0) && $customer->is_migrated !=2 && env('TRYNEW') == true )
              <div class="row">
                  <div class="col-md-4" style="margin-bottom: 20px;margin-top: 10px;">
                      <a href="{{route('customer.migrate')}}" class="btn btn-blue">Try New Platform </a>
                  </div>
              </div>
              @endif
              <div class="order-top-left">
                <h3>Packages in Locker {{Auth::guard('customer')->user()->locker}}</h3>
                <a href="{{route('customer.incoming')}}" class="btn btn-blue">Alert Shoppre about my incoming Packages
                  (Optional)
                </a>
              </div>
              <div class="order-top-left">
                <h3 style="color:hotpink">Today's Offer For You</h3>
                <a style="background-color: hotpink" target="_blank"
                   {{--href="https://www.shoppre.com/offers/ganesh-chaturthi-shipping-offers-from-india/"--}}
                   class="btn btn-blue"><strong>ShoppRe : Coming up with new offers very soon</strong></a>
              </div>

              <div class="order-top-left">

              </div>

              @if(!$shipQueue->isEmpty())
                <div class="order-top-right">
                  <a href="{{route('shipping.queue')}}" class="btn">View Queue <span>{{$shipQueue->count()}}</span></a>
                  <p>We’re currently preparing {{$shipQueue->count()}} shipment(s) for you.</p>
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
                <ul class="nav nav-tabs nav-justified">

                  <li class="{{url()->current() == route('customer.locker') ? 'active' : '' }}"><a
                      href="{{route('customer.locker')}}#dashboard">Ready to send <span class="badge"
                                                                                        style="background:#de4535">{{$ships->count()}}</span></a>
                  </li>

                  <li class="{{url()->current() == route('customer.locker.review') ? 'active' : '' }}"><a
                      href="{{route('customer.locker.review')}}#dashboard">In Review <span class="badge"
                                                                                           style="background:#0cbb1a">{{$reviews->count()}}</span></a>
                  </li>

                  <li class="{{url()->current() == route('customer.locker.action') ? 'active' : '' }}"><a
                      href="{{route('customer.locker.action')}}#dashboard">Action Required<span class="badge"
                                                                                                style="background:#0ebbc2">{{$confirms->count()}}</span></a>
                  </li>

                  <li class="{{url()->current() == route('customer.locker.all') ? 'active' : '' }}"><a
                      href="{{route('customer.locker.all')}}#dashboard">View All <span
                        class="badge">{{$packages->count()}}</span></a></li>
                </ul>
                <div class="tab-content" style="padding: 15px;">
                  @yield('locker')
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <section class="dashbanner">
                <div class="container">
                  <div class="row">
                    <div class="dash-address">
                      @php
                        $titleExplode = explode(". ", Auth::guard('customer')->user()->name, 2);
                        if(sizeof($titleExplode) == 2){
                            $title = $titleExplode[0];
                            $full_name = $titleExplode[1];
                        } else {
                            $title = "";
                            $full_name = $titleExplode[0];
                        }
                      @endphp

                      <h3>{{$full_name}}</h3>
                      <p>{{Auth::guard('customer')->user()->locker}}, #181, 1st Floor</p>
                      <p> 2nd Cross Rd, 7th Main</p>
                      <p> Koramangala 1st Block</p>
                      <p>Bengaluru - 560034, Karnataka</p>
                      <p>India - +919148357733 </p>
                      <p>Landmark: Near Seema English Nursery School </p>
                    </div>
                  </div>
                </div>
              </section>
              <div class="dash-rightside">
                <div style="position: relative;" id="shipcost">
                  <div class="dash-sidecost">
                    <p><a href="{{route('customer.wallet.trans')}}" style="font-weight: 600; font-size: 16px;">Shoppre
                        Wallet</a> <a href="javascript:void(0)" class="tooltipkey" title="<p>Shoppre can add or deduct cash from your Shoppre Wallet depending on the situation.</p> <p>For eg: Your Personal Shopper balance will be settled here in your Shoppre Wallet.</p>
                        <p>- If the amount is <i>positive</i>, it means that you own this much cash, and this amount will be deducted from the final charges.</p>
                        <p>- If the amount is <i>negative</i>, it means that this amount will be added to the final charges.</p>"><i
                          class="fa fa-question-circle-o"></i></a>
                      <span class="pull-right">
                          <i class="fa fa-rupee"></i>
                          <span>{{number_format($customer->balance->amount, 2, ".", "")}}</span>
                          </span>
                    </p>
                  </div>

                  @if(url()->current() == route('customer.locker'))

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
                          <span class="label">Discard shoe boxes <a href="javascript:void(0)" class="tooltipkey" title="We repack all the necessary items (items which arrive at our facility in big boxes) for FREE of cost (except Shoe Boxes which we do not discard). Discarding shoe boxes before your shipment is packed can help reduce the dimensional weight of your shipment in some cases. A charge of INR 100 per shipment* will be incurred to discard shoe boxes).
                              <br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                class="fa fa-question-circle-o"></i></a> </span>
                        </label>
                      </div>
                    <!-- <div class="checkbox">
                          <label>
                            @if($customer->preference->sticker == 1)
                      <input type="checkbox" name="sticker" value="1" checked>
                        @else
                      <input type="checkbox" name="sticker" value="1">
                        @endif
                      <span class="label">Fragile stickers <a href="javascript:void(0)" class="tooltipkey" title="Quality packaging is key when it comes to preventing damage. You can click on this option if you need a ‘FRAGILE’ sticker on the packaging of your vulnerable shipments. We may prompt you via email if we feel that your items are fragile. Fragile stickers will be applied to boxes on every shipment at a cost of INR 5000 per shipment."><i class="fa fa-question-circle-o"></i></a></span>
                    </label>
                  </div> -->
                      <div class="checkbox">
                        <label>
                          @if($customer->preference->pack_extra == 1)
                            <input type="checkbox" name="extrapack" value="1" checked>
                          @else
                            <input type="checkbox" name="extrapack" value="1">
                          @endif
                          <span class="label">Add extra packing material <a href="javascript:void(0)" class="tooltipkey"
                                                                            title="Additional protective packaging will be added to every shipment at the cost of INR 500.<br><small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                                class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($customer->preference->orginal_box == 1)
                            <input type="checkbox" name="original" value="1" checked>
                          @else
                            <input type="checkbox" name="original" value="1">
                          @endif
                          <span class="label">Ship in original boxes (do not repack) <a href="javascript:void(0)"
                                                                                        class="tooltipkey"
                                                                                        title="We usually repack all the necessary items (items which arrive at our facility in big boxes) in order to reduce the dimensional weight for FREE of cost (except Shoe Boxes). You can choose this option to ship your packages in the original shipping boxes in which they were received."><i
                                class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($customer->preference->gift_wrap == 1)
                            <input type="checkbox" name="gift_wrap" value="1" checked>
                          @else
                            <input type="checkbox" name="gift_wrap" value="1">
                          @endif
                          <span class="label">Gift wrap <a href="javascript:void(0)" class="tooltipkey"
                                                           title="We can gift wrap your items at a cost of INR 100/- per package. However, please note that the gift wrapped item will be placed in another box before it is being shipped and that box cannot be wrapped."><i
                                class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          @if($customer->preference->gift_note == 1)
                            <input type="checkbox" name="gift_note" value="1" checked>
                          @else
                            <input type="checkbox" name="gift_note" value="1">
                          @endif
                          <span class="label">Gift note <a href="javascript:void(0)" class="tooltipkey"
                                                           title="We can write a gift note and place it inside your package at a cost of INR 50/- per package."><i
                                class="fa fa-question-circle-o"></i></a></span>
                        </label>
                      </div>
                      <div class="form-group" style="margin: 10px 0;">
                        <div style="padding: 0;margin-right: 2px;max-width: 65px;display: inline-block;">
                          <input type="text" class="form-control" id="max_weight" name="max_weight"
                                 value="{{$customer->preference->max_weight}}" placeholder="(in kg)">
                        </div>
                        <label for="max_weight" class=""
                               style="display: inline-block;width: 70%;vertical-align: top;font-weight: 600;">Maximum
                          weight per package (in kg) <a href="javascript:void(0)" class="tooltipkey" title=""
                                                        data-original-title="Choose this option if you would like to restrict a Maximum weight of individual boxes in a shipment. Shoppre will split your shipment into multiple boxes not exceeding this box weight limit (whenever possible), at the same cost of splitting a package (INR 200 per new package created)*.<br>
                          <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i
                              class="fa fa-question-circle-o"></i></a> </label>
                      </div>
                      <h4>Proforma Invoice Options</h4>
                      <div class="form-group taxid">
                        TAX ID: <input type="text" class="form-control" name="invoice_taxid"
                                       value="{{$customer->preference->tax_id}}">
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
                          <span class="label">Please include a printed proforma invoice with in my shipment</span>
                        </label>
                      </div>
                      <hr>
                      @if(!$ships->isEmpty())
                        {{csrf_field()}}
                        <button type="submit" id="create_rqst"
                                class="btn btn-block btn-shoppre btn_createship create_rqst">CREATE SHIP REQUEST
                        </button>

                        <!-- <h5 class="text-center">OR</h5>

                        <a href="#pickup_packs" class="btn btn-shoppre popup-modal btn_pickup" style="font-size: 13px;text-transform: none;display: block;">I will pick-up the items directly from shoppre</a> -->

                        <div id="pickup_packs" class="white-popup-block mfp-hide">

                          <h4 style="margin-top: -10px;line-height: 26px;">PLEASE MAKE SURE THAT YOU HAVE SELECTED YOUR
                            REQUIRED PACKAGES AND SHIPPING PREFERENCES.</h4>

                          <p>Once you submit your request, kindly note that you will no longer be able to change your
                            Package Selections or Shipping Preferences.</p>

                          <p>You are welcome to arrange an appointment Monday through Friday, 9:00 AM - 5:00 PM IST to
                            pick up your mail & packages from the Shoppre facility, Bengaluru.You will be charged a INR
                            500 pick up fee until 1 kg, plus INR 100 for each additional kg. Final cost will also
                            include Package Level Charges, if any.</p>

                          <p><i>Please Note: You may NOT pick up items that are banned for export, including merchandise
                              on our restricted and prohibited items list. Items that Shoppre is unable to export must
                              be returned to the manufacturer or seller, if the seller is an authorized seller and is
                              based in India.</i></p>

                          <div class="text-center">
                            <a class="btn btn-shoppre btn-close popup-modal-dismiss" href="#">GO BACK</a>
                            <button id="pickup_submit" class="btn btn-shoppre" style="background: #00ba09;">SUBMIT
                              PICK-UP REQUEST
                            </button>
                          </div>

                        </div>

                      @endif
                    </div>

                  @endif


                </div>

                <ul class="dash-quick">
                  <li style="background-image:url({{asset('img/dashico1.png')}});"><a
                      href="{{route('cguide.index')}}">Country Guides</a></li>
                  <li style="background-image:url({{asset('img/dashico2.png')}});"><a href="{{route('stores')}}">Brands
                      You Love</a></li>
                  <li style="background-image:url({{asset('img/dashico3.png')}});"><a href="{{route('pricing')}}">Shipping
                      Calculator</a></li>
                  <li style="background-image:url({{asset('img/dashico4.png')}});"><a
                      href="{{route('personal.shopper')}}">Personal Shopper</a></li>
                  <li style="background-image:url({{asset('img/dashico5.png')}});"><a href="#">Exchange Rates</a></li>
                  <li style="background-image:url({{asset('img/dashico6.png')}});"><a href="{{route('services')}}">Our
                      Services</a></li>
                  <li style="background-image:url({{asset('img/dashico7.png')}});"><a
                      href="{{route('customer.address')}}">Address Book</a></li>
                  <li style="background-image:url({{asset('img/dashico8.png')}});"><a href="https://blog.shoppre.com"
                                                                                      target="_blank">Blogs</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </section>

    @endif

  @endif

@endsection

@section('js_script')
  <script src="{{asset('js/input-file.js')}}"></script>
  <!-- Owl Carousel -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/validate.min.js')}}"></script>
  <script type="text/javascript">
    $('.price_calc').each(function () {
      $(this).on('input', function () {
        var id = $(this).attr('data-autocalc');
        var package_id = $(this).attr('data-package_id');
        var price = parseFloat($(this).val());
        var quantity = parseFloat($('#autoqty_' + id).val());
        $('#autotal_' + id).text((quantity * price ? quantity * price : 0).toFixed(2));

        var total = 0;
        $('.total_price').each(function () {
          total += parseFloat(this.innerHTML)
        });
        $('#grandcalc_' + package_id).text(total.toFixed(2));
      });
    });

    $('.itemcalc').each(function () {
      $(this).on('input', function () {
        var id = $(this).attr('data-itemcalc');
        var package_id = $(this).attr('data-package_id');
        var price = parseFloat($(this).val());
        var quantity = parseFloat($('#itemqty_' + id).val());
        $('#totalvalue_' + id).text(quantity * price ? quantity * price : 0);
        var total = 0;
        $('.totalitemvalue_' + package_id).each(function () {
          total += parseFloat(this.innerHTML)
        });
        $('#granditemvalue_' + package_id).text(total.toFixed(2));
      });
    });

    $('.btn-reset').on('click', function () {
      $('input, textarea').filter(function () {
        return !this.form;
      }).val(function () {

        $('.itemcalc').each(function () {
          var id = $(this).attr('data-itemcalc');
          var package_id = $(this).attr('data-package_id');
          var price = this.defaultValue;
          var quantity = parseFloat($('#itemqty_' + id).val());
          $('#totalvalue_' + id).text(quantity * price ? quantity * price : 0);
          var total = 0;
          $('.totalitemvalue_' + package_id).each(function () {
            total += parseFloat(this.innerHTML)
          });
          $('#granditemvalue_' + package_id).text(total.toFixed(2));

          return this.defaultValue;

        });
      });
    });

  </script>
  <script src="{{asset('js/photoreq.js')}}"></script>
  <script src="{{asset('js/jquery.redirect.js')}}"></script>
  <script type="text/javascript">

    $(document).ready(function () {

      $("input:checkbox[name='allshipreq']").change(function () {
        if ($(this).is(':checked')) {
          $("input:checkbox[name='checkshipreq']").each(function () {
            $(this).prop('checked', true);
          });
          $('.btn_createship').prop("disabled", false).removeClass('disabled');
          $('.btn_pickup').removeClass('disabled');
        } else {
          $('input:checkbox[name="checkshipreq"]').prop('checked', false);
          $('.btn_createship').prop("disabled", true).addClass('disabled');
          $('.btn_pickup').addClass('disabled');
        }
      });

      $("input:checkbox[name='checkshipreq']").change(function () {
        var i = 0;
        $("input:checkbox[name='checkshipreq']").each(function () {
          if (this.checked == true) {
            i++;
          }
        });
        if (i == 0) {
          $('.btn_createship').prop("disabled", true).addClass('disabled');
          $('.btn_pickup').addClass('disabled');
        } else {
          $('.btn_createship').prop("disabled", false).removeClass('disabled');
          $('.btn_pickup').removeClass('disabled');
        }
      });

      $(function () {
        $('.disabled').on("click", function (e) {
          e.preventDefault();
        });
      });

      $(".create_rqst").click(function (e) {
        e.preventDefault();

        var i = 0;
        var package_ids = [];
        $("input:checkbox[name='checkshipreq']").each(function () {
          if (this.checked == true) {
            package_ids[i++] = this.value;
          }
        });
        var token = $('input[name="_token"]').val();
        var repack = $("input[name='repack']").is(':checked') ? 1 : 0;
        var sticker = $("input[name='sticker']").is(':checked') ? 1 : 0;
        var extrapack = $("input[name='extrapack']").is(':checked') ? 1 : 0;
        var original = $("input[name='original']").is(':checked') ? 1 : 0;
        var gift_wrap = $("input[name='gift_wrap']").is(':checked') ? 1 : 0;
        var gift_note = $("input[name='gift_note']").is(':checked') ? 1 : 0;

        var max_weight = $("input[name='max_weight']").val();
        var invoice_taxid = $("input[name='invoice_taxid']").val();
        var invoice_personal = $("input[name='invoice_personal']").is(':checked') ? 1 : 0;
        var invoice_include = $("input[name='invoice_include']").is(':checked') ? 1 : 0;

        $.redirect("/shipping/request/redirect", {
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

      $("#pickup_submit").click(function (e) {
        e.preventDefault();
        var i = 0;
        var package_ids = [];
        $("input:checkbox[name='checkshipreq']").each(function () {
          if (this.checked == true) {
            package_ids[i++] = this.value;
          }
        });
        var token = $('input[name="_token"]').val();
        $.redirect("{{route('customer.pickup.request')}}", {
          _token: token,
          package_ids: package_ids
        });
      });

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      $(".return_submit").on('click', function (e) {
        var package_id = $(this).attr('data-package_id');
        var clickedForm = $("#return_form_" + package_id);
        clickedForm.validate({
          debug: true,
          errorElement: "span",
          rules:
            {
              message2: {required: 'input[type="radio"][value="return_shoppre"]:checked'}
            },
          messages:
            {
              message2: {required: "Please mention the Sender's full address with Pincode"},
            },
        });

        if (clickedForm.valid()) clickedForm[0].submit();

      });
    });
    $(document).ready(function () {
      $('#idclose').click(function () {
       $('')
      });
    });
  </script>
@endsection
