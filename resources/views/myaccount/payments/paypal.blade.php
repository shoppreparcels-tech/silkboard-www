@extends('layout')

@section('title', 'PAYPAL')

@section('content')

  <section class="page_head">
      <div class="pagebanner">
        <img src="img/banner1.jpg" width="100%">
        <div class="banner-cap">
          <h2>FAQ</h2>
        </div>
      </div>
  </section>
  <section>
    <div class="container">
       @if ($message = Session::get('alert'))
        <div class="custom-alerts alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {!! $message !!}
        </div>
        @endif
      <form class="form-inline" method="post" action="{{route('payment.paypal.submit')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="text" class="form-control" placeholder="Amount" name="amount">
            <div class="input-group-addon">.00</div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Transfer cash</button>
      </form>
    </div>
  </section>


@endsection
