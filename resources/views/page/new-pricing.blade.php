@extends('layout')

@section('title', 'Pricing | Shipping Cost Calculator - Shoppre')
@section('description', 'Get the right plan that suits your need and calculate your shipping costs from India to any country. Save upto 75% on shipping rates!')
@section('keywords', 'calculate your shipping costs, from india to any country, save 75% on shipping rates, repackaging service, shipping calculator')

@section('css_style')
    <style>
        .container-fluid{padding: 1%}
        .sec-pc-h{box-shadow: 0 1px 3px rgba(17, 39, 59, 0.1);background-color: #fafafb;}
        .div-b-w-s{box-shadow: 0 1px 3px rgba(17, 39, 59, 0.1);border-radius: 3px;background-color: #ffffff;}
        .b-r{border: 1px solid rgba(146, 156, 165, 0.2) !important;}
        .btn span.glyphicon {opacity: 0;}
        .btn.active span.glyphicon {opacity: 1;}

    </style>
@endsection

@section('content')
    <section>
        <div class="container sec-pc-h">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <h1 class="f-c-d-gray f-s-24 f-w-9">Calculate Your Shipping Cost</h1>
                    <p class="f-c-gray f-s-16 f-w-8">Cheapest international shipping rates from India to anywhere in the
                        world.</p>
                    <br>
                </div>
                <div class="row div-b-w-s pad-20">
                    <div class="col-md-12 col-xs-12 ">
                        <lable class="f-s-16 f-c-gray f-w-8 ">
                            Where do you want to send your package to?
                        </lable>
                        <br>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-5 no-pad">
                            <select class="form-control select2 b-r" name="country">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option
                                        value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <h5 class="f-s-16 f-c-blue">View all rates up to 10 Kg</h5>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-6 col-xs-12 no-pad">
                            <lable class="f-s-16 f-c-l-gray f-w-8 ">
                                Package Type
                            </lable>
                            <br>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active ">
                                    <input type="radio" name="options" id="option2" autocomplete="off" chacked>
                                    <img src="{{asset('img/images/file.svg')}}" alt=""> Document
                                    <span class="glyphicon glyphicon-ok"></span>
                                </label>

                                <label class="btn btn-primary ">
                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                    <img src="{{asset('img/images/box.png')}}" alt=""> Non-Document
                                    <span class="glyphicon glyphicon-ok"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 no-pad">
                            <lable class="f-s-16 f-c-l-gray f-w-8 ">
                                Package Weight *
                            </lable>
                            <br>
                            <div class="col-md-5 btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active ">
                                    <input type="radio" name="options" id="option2" autocomplete="off" chacked>KG
                                    <span class="glyphicon glyphicon-ok"></span>
                                </label>

                                <label class="btn btn-primary ">
                                    <input type="radio" name="options" id="option1" autocomplete="off">LB
                                    <span class="glyphicon glyphicon-ok"></span>
                                </label>
                            </div>
                            <div class="col-md-7 div-text-box">
                                                    <span id="aminus"
                                                          class="btn btn-puls-minus dec-value no-padding">-</span>
                                <input type="text" id="adnum" class="txt-weight" value="0.5"
                                       name="weight">
                                <span id="aplus"
                                      class="btn btn-puls-minus inc-value no-padding">+</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-4 col-xs-12"><br>
                <a href="" class="btn btn-f-w btn-b-b btn-s-b btn-a-l">Domestic Shipping Rates</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>


@endsection

@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            $(function () {
                $('.popup-modal').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    modal: true
                });
                $(document).on('click', '.popup-modal-dismiss', function (e) {
                    e.preventDefault();
                    $.magnificPopup.close();
                });
            });
        });
    </script>
    <!-- Select2 -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".select2").select2();
        });
    </script>

    <!-- Owl Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.testimons').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                navText: '',
                autoplay: true,
                autoplayTimeout: 2500,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true
                    }
                }
            });
        });
    </script>


    <script src="{{asset('js/validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#shipping").validate({
                rules:
                    {
                        country: {required: true},
                        weight: {required: true},
                        unit: {required: true},
                    },
                messages:
                    {
                        country: {required: "Please select country"},
                        weight: {required: "Please enter weight to calculate."},
                        unit: {required: "Please select unit of weight."},
                    },
                submitHandler: function (form) {
                    var country = $("select[name='country']").val();
                    var weight = $("input[name='weight']").val();
                    var unit = $("input[name='unit']:checked").val();
                    var type = $("input[name='type']:checked").val();
                    var box_scale = $("input[name='scale']:checked").val();
                    var length = $("input[name='length']").val();
                    var width = $("input[name='width']").val();
                    var height = $("input[name='height']").val();
                    var token = $('input[name=_token]').val();
                    var url = 'https://www.shoppre.com/customer-pricing/?weight=' + weight + '&type=' + type + '&dest=' + country;
                    $("#calc_load").show();
                    $('#calc_error').hide();
                    $('#ship_result').hide();
                    jQuery.ajax({
                        url: '/calculate-shipping',
                        type: "POST",
                        data: {
                            _token: token,
                            country: country,
                            weight: weight,
                            unit: unit,
                            type: type,
                            length: length,
                            width: width,
                            height: height,
                            scale: box_scale
                        },
                        success: function (data) {
                            $("#calc_load").hide();
                            console.log(data);
                            if (data.error == "1") {
                                $('#calc_error').css('display', 'block');
                            }
                            else {
                                $('#ship_oldcost').text(data.amount);
                                var disamount = (data.discount / 100) * data.amount;
                                var finalcost = Math.round(data.amount - disamount).toFixed(2);
                                $('#ship_cost').text(finalcost);
                                $('#ship_time').text(data.time);
                                $('#pricing_url').text(url);
                                $('#ship_disc').text(data.discount);
                                $('#ship_result').slideDown();
                            }
                        }
                    });
                    return false;
                }
            });

            $("#form_quote").validate({
                rules:
                    {
                        state: {required: true},
                        city: {required: true},
                        pin: {required: true},
                        type: {required: true},
                        weight: {required: true},
                        unit: {required: true},
                        email: {required: true, email: true},
                    },
                messages:
                    {
                        state: {required: "Please select state"},
                        city: {required: "Please enter city"},
                        pin: {required: "Please enter PIN"},
                        weight: {required: "Enter package weight."},
                        email: {required: "Enter your email address to contact."},
                    },
                submitHandler: function (form) {
                    $("#quote_load").show();
                    jQuery.ajax({
                        url: '/qoute/submit',
                        type: "POST",
                        data: $("#form_quote").serialize(),

                        success: function (data) {
                            $('#form_quote')[0].reset();
                            $("#quote_load").hide();
                            $("#quote_submit").hide();
                            $("#quote_result").show();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            $('#form_quote')[0].reset();
                            $("#quote_load").hide();
                            $("#quote_error").show();
                            $("#quote_submit").hide();
                            /*console.log(xhr.responseText);*/
                        }
                    });
                    return false;
                }
            });

        });
    </script>

@endsection
