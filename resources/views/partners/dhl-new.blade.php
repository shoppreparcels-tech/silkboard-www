@extends('layout')

@section('title', 'DHL | International Courier & Shipping Services - ShoppRe Partner')
@section('description', 'DHL is the official international courier, shipping and parcel delivery partner of ShoppRe. Find the top products shipped with DHL at great prices.')
@section('keywords', 'dhl, shipping, courier, parcel, partner')
@section('css_style')
    <style>
        .header .container {padding: 20px 0 30px}
        .dhl {padding-top: 40px;background-color: #fafafb;}
        .dhl .dhl-information {box-shadow: 0 0 6px rgba(17, 39, 59, 0.05);border-radius: 3px;background-color: #ffffff;padding-top: 60px;padding-bottom: 60px;}
        .dhl .dhl-information div {padding-left: 30px}
        .dhl .dhl-shipments{box-shadow: 0 0 6px rgba(17, 39, 59, 0.05);border-radius: 3px;background-color: #ffffff;padding:10px;width: 560px; margin-top: 10px}
        .sec-shipped{padding-top: 20px;background-color: #fafafb;}
        .sec-shipped .shipped-countries{box-shadow: 0 0 6px rgba(17, 39, 59, 0.05);border-radius: 3px;background-color: #ffffff; padding: 50px}
        .sec-shipped .shipped-countries ul{text-decoration: none;list-style: none;}
        .sec-shipped .shipped-countries ul li{color: #929ca5;font-size: 18px;font-weight: 400;text-align: left;padding-top: 15px;}
        .sec-shipped .shipped-countries ul li img{margin-top: 9px;}
        .sec-shipped .shipped-countries ul li span{font-family: Montserrat;font-size: 14px;font-weight: 900;font-style: italic;margin-left: 10px;}

    </style>

@endsection
@section('content')
    <section class="header">
        <div class="container">
            <center>
                <h1 class="header1 p-color-white">DHL</h1>
                <h2 class="header2 p-color-cement">Shipments we sent across the Globe though DHL</h2>
            </center>

        </div>
    </section>
    <section class="dhl">
        <div class="container dhl-information">
            <div class="col-md-2 col-xs-12">
                <img src="{{asset('img/dhl.png')}}" alt="">
            </div>
            <div class="col-md-10 col-xs-12">
                <div>
                    <p class="header5 p-color-cement-dark">Write content that describe how we work with DHL... DUMMY/DHL is the
                        global leader in the logistics industry.
                        Specializing in international shipping, courier services and transportation. DHL is the global
                        leader in the logistics industry. Specializing in international shipping,
                        courier services and transportation. DHL is the global leader in the
                        logistics industry. Specializing in international shipping, courier services and transportation.
                    </p>
                    <br>
                    <p class="header5 p-color-cement-dark">DHL is the global leader in the logistics industry. Specializing courier services and transportation.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container no-padding ">
            <div class="col-md-6 col-xs-12 dhl-shipments">
                <div class="col-md-5 col-xs-8">
                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> United Status</h3>
                    <h6 class="header6 p-color-cement">delivered in 5 days</h6>
                </div>
                <div class="col-md-7 col-xs-8">
                   <h2 class="header4 p-color-cement"> <img src="{{asset('/img/svg/ic_weight.svg')}}" alt=""> Weight : <span class="p-color-blue">11.00 kg</span></h2>
                   <h2 class="header4 p-color-cement"><img src="{{asset('/img/svg/ic_rupee.svg')}}" alt=""> Total Charge:<span class="p-color-blue">INR 3180.00</span></h2>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 dhl-shipments" style="margin-left: 10px">
                <div class="col-md-5 col-xs-8">
                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> United Status</h3>
                    <h6 class="header6 p-color-cement">delivered in 5 days</h6>
                </div>
                <div class="col-md-7 col-xs-8">
                    <h2 class="header4 p-color-cement"> <img src="{{asset('/img/svg/ic_weight.svg')}}" alt=""> Weight : <span class="p-color-blue">11.00 kg</span></h2>
                    <h2 class="header4 p-color-cement"><img src="{{asset('/img/svg/ic_rupee.svg')}}" alt=""> Total Charge:<span class="p-color-blue">INR 3180.00</span></h2>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 dhl-shipments">
                <div class="col-md-5 col-xs-8">
                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> United Status</h3>
                    <h6 class="header6 p-color-cement">delivered in 5 days</h6>
                </div>
                <div class="col-md-7 col-xs-8">
                    <h2 class="header4 p-color-cement"> <img src="{{asset('/img/svg/ic_weight.svg')}}" alt=""> Weight : <span class="p-color-blue">11.00 kg</span></h2>
                    <h2 class="header4 p-color-cement"><img src="{{asset('/img/svg/ic_rupee.svg')}}" alt=""> Total Charge:<span class="p-color-blue">INR 3180.00</span></h2>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 dhl-shipments" style="margin-left: 10px">
                <div class="col-md-5 col-xs-8">
                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> United Status</h3>
                    <h6 class="header6 p-color-cement">delivered in 5 days</h6>
                </div>
                <div class="col-md-7 col-xs-8">
                    <h2 class="header4 p-color-cement"> <img src="{{asset('/img/svg/ic_weight.svg')}}" alt=""> Weight : <span class="p-color-blue">11.00 kg</span></h2>
                    <h2 class="header4 p-color-cement"><img src="{{asset('/img/svg/ic_rupee.svg')}}" alt=""> Total Charge:<span class="p-color-blue">INR 3180.00</span></h2>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 dhl-shipments">
                <div class="col-md-5 col-xs-8">
                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> United Status</h3>
                    <h6 class="header6 p-color-cement">delivered in 5 days</h6>
                </div>
                <div class="col-md-7 col-xs-8">
                    <h2 class="header4 p-color-cement"> <img src="{{asset('/img/svg/ic_weight.svg')}}" alt=""> Weight : <span class="p-color-blue">11.00 kg</span></h2>
                    <h2 class="header4 p-color-cement"><img src="{{asset('/img/svg/ic_rupee.svg')}}" alt=""> Total Charge:<span class="p-color-blue">INR 3180.00</span></h2>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 dhl-shipments" style="margin-left: 10px">
                <div class="col-md-5 col-xs-8">
                    <h3 class="header4 p-color-blue"><span class="header7 p-color-cement">to</span> United Status</h3>
                    <h6 class="header6 p-color-cement">delivered in 5 days</h6>
                </div>
                <div class="col-md-7 col-xs-8">
                    <h2 class="header4 p-color-cement"> <img src="{{asset('/img/svg/ic_weight.svg')}}" alt=""> Weight : <span class="p-color-blue">11.00 kg</span></h2>
                    <h2 class="header4 p-color-cement"><img src="{{asset('/img/svg/ic_rupee.svg')}}" alt=""> Total Charge:<span class="p-color-blue">INR 3180.00</span></h2>
                </div>
            </div>
            @foreach($shipments as $shipment)
                @php
                    $dispatched = '';
                    $delivered = '';
                        foreach ($shipment -> tracking as $tracking)
                          {
                              if ($tracking->condition == 'ship_dispatched')
                              {
                                  $dispatched = $tracking->created_at;
                              }
                              elseif( $tracking->condition == 'ship_delivered')
                              {
                                  $delivered = $tracking->created_at;
                              }
                          }
                    $dispatched = strtotime($dispatched);
                    $delivered = strtotime($delivered);
                    $datediff = $delivered - $dispatched;
                    $delivery_days = round($datediff / (60 * 60 * 24));
                @endphp
                @if(!empty($dispatched) )

                    <div class="shipment_card">
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 35px">
                                <a href="{{route('dhl.view',['id' => $shipment->id])}}">
                                    <h4><b> To {{$shipment->country}} </b></h4>
                                </a>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h5>Weight :&nbsp{{$shipment->weight}} kg.</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Total Charge : INR &nbsp{{$shipment->final_amount}}</h5>
                                    </div>
                                    @if( $delivery_days > 0 )
                                        <div class="col-md-3">
                                            <h5>Delivered In : &nbsp{{$delivery_days}} Days</h5>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <center>
                {{ $shipments->appends(Request::except('page'))->links() }} {{-- For Pagination--}}
            </center>
        </div>
        <br>

        <div id="remove-row">
            <center>
                <button class="btn-more-review header5" id="btn-more" data-id="">
                    Load More
                </button>
            </center>
        </div>
    </section>
    <section class="sec-shipped">
        <div class="container no-padding">
            <div class="shipped-countries">
             <h4 class="p-color-blue header4 font-weight-900">Most popular countries where we shipped recently. </h4>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel ">
                            <ul>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                                <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Shipped form India to United Status</span></li>
                            </ul>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <br> <br> <br>
    </section>
@endsection
