<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
    <tbody>
        <tr>
            <td valign="middle">
                @php

                $titleExplode = explode(". ", $shipment->customer->name, 2);
                if(sizeof($titleExplode) == 2){
                    $title = $titleExplode[0];
                    $nameRest = $titleExplode[1];
                }else{
                    $title = "";
                    $nameRest = $titleExplode[0];
                }

                $last_name = (strpos($nameRest, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $nameRest);
                $first_name = trim( preg_replace('#'.$last_name.'#', '', $nameRest ) );

                @endphp
                <p><strong>Hi {{$first_name}},</strong></p>
                <p>This mail is to inform you that you have chosen Paper Cash as the mode of payment for your Shipment ID: <a href="{{url('/shipping/queue')}}">{{$shipment->order_id}}</a>.</p>

                <p><font color="#ff0000">PLEASE NOTE: Kindly submit your payment IMMEDIATELY. </font></p>
                <p><font color="#ff0000">Once your package is invoiced, you get a free time period of 7 DAYS to submit your payment. You will incur a storage fee of INR 100/ day for your prepared parcel from the 8th day onwards, which you can view in your <i>Shoppre Wallet</i>. This amount will continue to be accrued until you make your payment, and will be added to the Final Shipping Charges.</font></p>

                <br>
                Thanking You,
                <br>
                Team Shoppre
                <br><br>
                Note:This is a system alert message. Please do not reply to this email
                <br>
                <p><a href="tel:+91 80 4049 4077">+91 80 4049 4077</a> | <a href="mailto:support@shoppre.com">support@shoppre.com</a> | <a href="https://www.google.co.in/maps/place/Shoppre.com+-+Your+Global+Shipping+Partner/@12.925805,77.6332563,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae146191401f95:0x1cf2770c1532d7d1!8m2!3d12.9257998!4d77.635445"> #181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, Karnataka 560034</a></p>
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

