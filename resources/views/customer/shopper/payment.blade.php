@extends('layout')

@section('title', '- Personal Shopper')

@section('css_style')

@endsection

@section('content')

    @include('partials._banner')
    
    <section class="prsnlshopper">
      <div class="container">
        <div class="col-sm-12">
          <h2>PERSONAL SHOPPER</h2>
          <nav class="prsnlnav">
            <ul>
              <li><a href="{{route('personal.shopper')}}">How it works</a></li>
              <li><a href="{{route('personal.shopper.form')}}">Order Form</a></li>
              <li class="active"><a href="JavaScript:Void(0)">Shopping Cart <span class="count">({{$cartCount}})</span></a></li>
              <li><a href="{{route('personal.shopper.history')}}">Order History</a></li>
            </ul>
          </nav>
          <div class="breadcrumb">
            <a href="{{route('personal.shopper.cart')}}" class="link">Shopping Cart</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <a href="{{route('personal.shopper.options')}}" class="link">Options</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <a href="{{route('personal.shopper.summary')}}" class="link">Summary</a>
            <span class="arrow"><i class="fa fa-angle-double-right"></i></span>
            <span class="link active">Payment</span>
          </div>
          <div class="prnslmain">
            <div class="shopkart">
              @if(!$orders->isEmpty())
              <form action="{{route('personal.shopper.payment.submit')}}" method="post">
              {{csrf_field()}}
                <div class="payform">
                  <h4>Payment options</h4>
                  <div class="col-sm-6">

                      <div class="radio">
                        <label>
                          <input type="radio" name="payoption" value="wire" checked>
                          <span class="label">Wire transfer/money order</span>
                        </label>
                      </div>
                      <!-- <div class="radio">
                        <label>
                          <input type="radio" name="payoption" value="paypal">
                          <span class="label">Paypal</span>
                        </label>
                      </div> -->
                    
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="subtotal">
                  <h4>Total Amount: <i class="fa fa-rupee"></i> {{number_format($orders->sum('subtotal'), 2, ".", "")}}</h4>
                </div>
                <div class="btns">
                  <a href="{{route('personal.shopper.summary')}}" class="btn btn-shoppre"><i class="fa fa-angle-double-left"></i> Summary</a>
                  <p>Items in shopping cart more than 7 days will be removed</p>
                  <button type="submit" class="btn btn-shoppre right">Pay Now <i class="fa fa-angle-double-right"></i></button>
                  <div class="clearfix"></div>
                </div>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')

@endsection