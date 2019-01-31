@extends('myaccount.layout')

@section('title', '- Shoppre Wallet Transactions')

@section('content')

    <section class="dash-history">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h3>Transaction History <span class="pull-right" style="text-transform: capitalize;">Shoppre Wallet <a href="javascript:void(0)" style="font-size: 20px; top: 0px;" class="tooltipkey" title="<p>Shoppre can add or deduct cash from your Shoppre Wallet depending on the situation.</p> <p>For eg: Your Personal Shopper balance will be settled here in your Shoppre Wallet.</p> <p>- If the amount is <i>positive</i>, it means that you own this much cash, and this amount will be deducted from the final charges.</p> <p>- If the amount is <i>negative</i>, it means that this amount will be added to the final charges.</p>"><i class="fa fa-question-circle-o"></i></a> : <i class="fa fa-rupee"></i> {{number_format($customer->balance->amount, 2, ".", "")}}</span></h3> <div class="table-responsive">
                @if(!$transactions->isEmpty())
                <table class="table table-bordered">
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                    </tr>
                    @foreach ($transactions as $trans)
                        <tr>
                            <td style="white-space: nowrap;">
                                {{date("d-m-Y, g:i a", strtotime($trans->created_at))}}
                            </td>
                            <td>{{$trans->description}}</td>
                            <td><i class="fa fa-rupee"></i> {{number_format($trans->amount, 2, ".", "")}}</td>
                        </tr>
                    @endforeach
                </table>
                @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
