<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

            <p><strong>Dear Team,</strong></p>

            <p><strong>Customer created and submited personal shopper request. Check below details.</strong></p>

            @if(!$orders->isEmpty())
              @foreach($orders as $order)
                <div class="sellerbox">
                  <div class="title">
                      <p>{{$order->seller}}</p>
                      <p>Order Number : {{$order->reference_number}}</p>
                      <p>{{date("D, F j, Y", strtotime($order->updated_at))}}</p>
                  </div>
                  <table border="1" style="border-collapse: collapse;font-size: 14px;width: 100%;max-width: 800px;text-align: left;">
                      <tr>
                        <th>Item Description</th>
                        <th>Qty</th>
                        <th width="170px">Each</th>
                        <th width="120px">Price</th>
                      </tr>
                      @php
                        $requests = $order->requests;
                      @endphp
                      @foreach($requests as $request)
                      <tr>
                        <td>
                          <p>{{$request->item_name}}</p>
                          <span class="color">{{$request->item_color}}</span>
                        </td>
                        <td>
                          <span class="quantity">{{$request->quantity}}</span>
                        </td>
                        <td><i class="fa fa-rupee"></i> {{number_format($request->price, 2, ".", "")}}</td>
                        <td><i class="fa fa-rupee"></i> {{number_format($request->total_price, 2, ".", "")}}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td colspan="2"></td>
                        <td>Sales Tax :</td>
                        <td><i class="fa fa-rupee"></i> {{number_format($order->sales_tax, 2, ".", "")}}</td>
                      </tr>
                      <tr>
                        <td colspan="2"></td>
                        <td colspan="">Shipping to Bengaluru :</td>
                        <td><i class="fa fa-rupee"></i> {{number_format($order->delivery_charge, 2, ".", "")}}</td>
                      </tr>
                      <tr>
                        <td colspan="2"></td>
                        <td colspan="">Personal Shopper Cost :</td>
                        <td><i class="fa fa-rupee"></i> {{number_format($order->personal_shopper_cost, 2, ".", "")}}</td>
                      </tr>
                      <tr>
                        <td colspan="2"></td>
                        <td colspan="">Merchant Total :</td>
                        <td><i class="fa fa-rupee"></i> {{number_format($order->sub_total, 2, ".", "")}}</td>
                      </tr>
                    </table>
                </div>
                @endforeach
              @endif

        </td>
      </tr>
      <tr>
        <td valign="top">
         <table cellpadding="0" border="0" width="100%" style="margin-top: 15px;background-color:#1f2533;" cellspacing="0">
            <tbody>
               <tr>
                 <td valign="top" width="100">
                   <a target="_blank" href="{{route('home')}}" style="text-decoration:none;color:#1f2533;font-weight:bold">
                     <img src="http://www.shoppre.com/img/logo.png" style="display:block;background-color:#1f2533;color:#010101;padding:10px;padding-left:30px;width: 100px;" alt="" border="0" class="CToWUd">
                   </a>
                 </td>
                 <td valign="top" width="300" style="color:#fff;font-size:12px;text-align:right;padding: 30px 30px 0 0;line-height: 0px;">All Rights Reserved. Copyright © <a target="_blank" href="{{route('home')}}" style="text-decoration:none;color:#fff;font-weight:bold">Shoppre.com</a>
                 </td>
               </tr>
            </tbody>
         </table>
        </td>
      </tr>
   </tbody>
</table>
