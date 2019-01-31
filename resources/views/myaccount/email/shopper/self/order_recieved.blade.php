<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

            <p><strong>Dear Member,</strong></p>

            @if($order->payment_gateway_name == 'wire')

            <p>We have received your Personal Shopper (PS) order to receive parcels on your behalf. Your Order ID is: <a href="{{route('shopper.self.history')}}"><b>{{$order->reference_number}}</b></a>. You have chosen Wire Transfer as the mode of payment. Upon confirmation of your payment, we shall pay Cash on Delivery on your behalf upon the arrival of packages.
            <br><font color="#ff0000"><b>Gentle Reminder: We will NOT be able to receive your parcels (on Cash on Delivery) unless the amount that you submitted has reflected into our account. If we do not receive your payment within 7 days of creating the PS Order, your order will be cancelled.</b></font></p>
            <p>Here is a summary of your order as we received it:</p>
            @else

            <p>We have received your Personal Shopper (PS) order to receive parcels on your behalf. Your Order Number is: <a href="{{route('shopper.self.history')}}"><b>{{$order->reference_number}}</b></a>. We shall pay Cash on Delivery on your behalf upon the arrival of packages. You will be notified via email when your packages arrive to your Locker. Here is a summary of your order as we received it:</p>
            @endif

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
                                      <td>Order Total</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>{{$customer->locker}}</td>
                                      <td>{{$order->reference_number}}</td>
                                      <td>{{date("D, F j, Y", strtotime($order->created_at))}}</td>
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
                          <br>
                          <div>
                            @if($order->payment_gateway_name == 'wire')
                            <p><strong>How to send a wire transfer:</strong></p>
                            <ol>
                              <li><p>Please reference your LOCKER NUMBER and/or NAME.</p></li>
                              <li>
                                <p>Make your amount payable to Shoppre.com, and mail to the address below:</p>
                                <p>
                                  Account Name: INDIANSHOPPRE LLP<br>
                                  Account Number: 918020022874771<br>
                                  Branch: Bangalore<br>
                                  IFSC Code: UTIB0000009<br>
                                  MICR Code: 560211002<br>
                                  E-mail ID: finance@shoppre.com<br>
                                  Address: NO. 9, M.G. ROAD, BLOCK 'A'<br>
                                  Swift Code: AXISINBB009
                                </p>
                              </li>
                              <li>
                                <p>Please send Shoppre a notification email to <a href="mailto:support@shoppre.com">support@shoppre.com</a> as soon as the amount has been transferred.</p>
                              </li>
                              <li>
                                <p>It might take between 1-7 days for the amount to be reflected in the Shoppre account. We shall notify you via email as soon as we receive the payment.</p> </li>
                            </ol>

                            <p><b>If you cannot make a Wire Transfer,</b> don’t worry, you can pay via Debit/Credit Card, PayPal or PayTm. Simply <a href='{{url("/personal-shopper/self/order/redirect/payment/{$order->reference_number}")}}'>change your payment method!</a></p>

                          @endif
                          </div>
                      </td>

                  </tr>
              </tbody>
            </table>
            <br>
            <p>Questions? Please Refer our <a href="{{route('faq')}}">FAQ</a> to know more!</p>
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
