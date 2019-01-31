<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

            <p><strong>Dear Member,</strong></p>

            <p>This mail is to inform you that the following personal shopper order <a href="{{url('/personal-shopper/self/order/history')}}"><b>{{$order->reference_number}}</b></a> has been <b>cancelled</b> as you did not submit your payment via wire transfer.</p>
            <p>Here is a summary of your order as we received it:</p>
            <table width="100%">
              <tbody>
                  <tr>
                      <td width="auto">
                          <table width="100%">
                              <tbody>
                                  <tr>
                                      <td style="vertical-align:top" width="70%">
                                          <table width="100%" style="font-size:10pt">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                      <u>Payment type to merchant:
                                                      @php
                                                        switch ($order->payment_gateway_name) {
                                                            case 'wire':
                                                                echo 'Wire Transfer / Money Order';
                                                            break;
                                                            case 'paypal':
                                                                echo 'PAYPAL';
                                                            break;
                                                            case 'paytm':
                                                                echo 'PAYTM';
                                                            break;
                                                            case 'card':
                                                                echo 'Credit/Debit Card';
                                                            break;
                                                        }
                                                      @endphp
                                                      </u>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                          <br>
                          <table width="100%" style="text-align:center;">
                              <thead>
                                  <tr>
                                      <td>Locker</td>
                                      <td>Order #</td>
                                      <td>Date Ordered</td>
                                      <td>Order Status</td>
                                      <td>Order Total</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>{{$customer->locker}}</td>
                                      <td>{{$order->reference_number}}</td>
                                      <td>{{date("D, F j, Y", strtotime($order->created_at))}}</td>
                                      <td>Cancelled</td>
                                      <td>INR {{number_format($order->grand_total, 2, ".", "")}}</td>
                                  </tr>
                              </tbody>
                          </table>
                          <br>
                          <br>
                          <div>
                              <div>
                                  <table  width="100%" border="1" style="border-collapse:collapse;border: 0;width:100%;text-align: center;">
                                    <tr>
                                      <th style="padding: 10px 0;">Website URL</th>
                                      <th>Number of Items</th>
                                      <th width="170px">Total Price</th>
                                    </tr>
                                    @php
                                      $requests = $order->requests;
                                    @endphp
                                    @foreach($requests as $request)
                                    <tr class="item">
                                      <td style="padding: 10px;">
                                        <a href="{{$request->url}}">{{$request->url}}</a>
                                      </td>
                                      <td style="padding: 10px;">{{$request->quantity}}</td>
                                      <td style="padding: 10px;">INR {{number_format($request->price, 2, ".", "")}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                      <td colspan=""></td>
                                      <td style="padding: 10px;text-align: right;">Personal Shopper Cost <span style="color:Red">*</span> :</td>
                                      <td style="padding: 10px;text-align: left;">INR {{number_format($order->total_fee, 2, ".", "")}}</td>
                                    </tr>
                                    <tr>
                                      <td colspan=""></td>
                                      <td style="padding: 10px;text-align: right;"><b>Merchant Total </b><span style="color:Red">*</span> :</td>
                                      <td style="padding: 10px;text-align: left;"><b>INR {{number_format($order->grand_total, 2, ".", "")}}</b></td>
                                    </tr>
                                  </table>
                                  <p><span style="font-size:8pt;color:Red">* Based on information provided</span></p>
                              </div>
                          </div>
                      </td>

                  </tr>
              </tbody>
            </table>
            <br>
            <p>Questions? Please Refer our <a href="{{url('/faq')}}">FAQ</a> to know more!</p>
            <p>Thank you for using our Personal Shopper service!</p>
            <p>Best regards, </p>
            <p>Your Team at Shoppre</p>
        </td>
      </tr>

      <tr>
        <td valign="top">
         <table cellpadding="0" border="0" width="100%" style="margin-top: 15px;background-color:#1f2533;" cellspacing="0">
            <tbody>
               <tr>
                 <td valign="top" width="100">
                   <a target="_blank" href="{{url('/')}}" style="text-decoration:none;color:#1f2533;font-weight:bold">
                     <img src="http://www.shoppre.com/img/logo.png" style="display:block;background-color:#1f2533;color:#010101;padding:10px;padding-left:30px;width: 100px;" alt="" border="0" class="CToWUd">
                   </a>
                 </td>
                 <td valign="top" width="300" style="color:#fff;font-size:12px;text-align:right;padding: 30px 30px 0 0;line-height: 0px;">All Rights Reserved. Copyright © <a target="_blank" href="{{url('/')}}" style="text-decoration:none;color:#fff;font-weight:bold">Shoppre.com</a>
                 </td>
               </tr>
            </tbody>
         </table>
        </td>
      </tr>

   </tbody>
</table>
