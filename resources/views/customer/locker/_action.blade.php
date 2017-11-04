<div class="table-responsive">
    @if(!$confirms->isEmpty())
    <table class="table table-bordered">
        <tr>
            <th>From</th>
            <th>Package ID</th>
            <th>Date Received</th>
            <th class="customer_action">Action Required</th>
            <th></th>
        </tr>
        @foreach ($confirms as $confirm)
            <tr>
                <td>
                    <strong>{{$confirm->seller}}</strong><br>
                    {{$confirm->refference}}
                </td>
                <td>{{$confirm->order_id}}</td>
                <td>{{date('d-m-Y', strtotime($confirm->received))}}</td>
                <td class="customer_action">
                    <p>Provide Item Values</p>
                    <span>As required by Customs</span>
                </td>
                <td role="button" data-toggle="collapse" href="#{{$confirm->order_id}}" aria-expanded="false" align="center"><i class="glyphicon glyphicon-chevron-down"></i></td>
            </tr>
            <tr class="collapse" id="{{$confirm->order_id}}">
                <td class="intable" colspan="8">
                    <h4>How to provide item values:</h4>
                    <p><strong>Option 1:</strong> Enter the values of each item. If the values are accepted, you will be able to ship right away. If the values are declined, a merchant invoice will be required.</p>
                    <p><strong>Option 2:</strong> Upload merchant invoice. Your package will be placed "In Review" untill the values are verified by MyUs.</p>
                    <table class="table table-bordered">
                        @if($confirm->status == 'values')
                        <form class="form-inline" method="post" action="{{route('customer.values.confirm')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="packid" value="{{$confirm->id}}">
                        <tr>
                            <th>PACKAGE DETAILS<br>
                            To:Saira Hassan</th>
                            <th>QTY</th>
                            <th>VALUE PER UNIT(INR)</th>
                            <th>TOTAL LINE VALUE(INR)</th>
                        </tr>
                        @php($i=0)
                        @foreach($confirm->items as $item)
                        <tr>
                            <td>{{$item->item}}</td>
                            <td>{{$item->qty}}</td>
                            <td>
                                <div class="input-group input-group-sm">
                                  <span class="input-group-addon value-icon"><i class="fa fa-rupee"></i></span>
                                  <input type="text" class="form-control price_calc" placeholder="Price" data-autocalc="{{$item->id}}" data-packid="{{$confirm->id}}" name="values[{{$item->id}}]">
                                  <input type="hidden" id="autoqty_{{$item->id}}" name="qty[{{$item->id}}]" value="{{$item->qty}}">
                                </div>
                            </td>
                            <td><i class="fa fa-rupee"></i> <span id="autotal_{{$item->id}}" class="totalprice">0.00</span></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">Total Weight : {{$confirm->weight}} Kg</td>
                            <td>Total Values Of This Package : <i class="fa fa-rupee"></i> <span id="grandcalc_{{$confirm->id}}">0.00</span></td>
                            <td style="width:100px"><button type="submit" class="btn btn-shoppre pull-right">Confirm Package</button></td>
                        </tr>
                        </form>
                        @endif
                    
                        @if($confirm->status == 'invoice')
                        <tr>
                            <td colspan="4" class="text-center">
                                <form method="post" action="{{route('customer.invoice.upload')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="invoice" id="file-doc" class="inputfile inputfile-2">
                                <label for="file-doc" style="    margin: 0;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span>Upload Merchant Invoice</span>
                                </label>
                                <input type="hidden" name="packid" value="{{$confirm->id}}">
                                <button type="submit" class="btn btn-shoppre pull-right">Confirm Package</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    </table>
                <hr>
                <p><strong></strong></p>
                <div class="clearfix"></div>
                </td>
            </tr>
        @endforeach
    </table>
    @else
        <div class="well">
            <p class="alert alert-danger text-center" role="alert">There are currently no packages that require action on your part.</p>
        </div>
    @endif
  </div>