<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

            <p><strong>Dear {{$name}},</strong></p>
            <p>This mail is to inform you that we have received the amount of <strong>
                    INR {{number_format($amount, 2, ".", "")}} </strong></p>
            <br>
            <p>Questions? Please Refer our <a href="{{route('faq')}}">FAQ</a> to know more!</p>
            <p>Thank you for using our Personal Shopper service!</p>
            <p>Best regards, </p>
            <a href="https://www.shoppre.com"><p>Your Team at Shoppre</p></a>
        </td>
      </tr>
      <tr>
        <td valign="top">
         <table cellpadding="0" border="0" width="100%" style="margin-top: 15px;background-color:#1f2533;" cellspacing="0">
            <tbody>
               <tr>
                 <td valign="top" width="100">
                   <a target="_blank" href="http://www.shoppre.com" style="text-decoration:none;color:#1f2533;font-weight:bold">
                     <img src="http://www.shoppre.com/img/logo.png" style="display:block;background-color:#1f2533;color:#010101;padding:10px;padding-left:30px;width: 100px;" alt="" border="0" class="CToWUd">
                   </a>
                 </td>
                 <td valign="top" width="300" style="color:#fff;font-size:12px;text-align:right;padding: 30px 30px 0 0;line-height: 0px;">All Rights Reserved. Copyright © <a target="_blank" href="https://www.shoppre.com" style="text-decoration:none;color:#fff;font-weight:bold">Shoppre.com</a>
                 </td>
               </tr>
            </tbody>
         </table>
        </td>
      </tr>
   </tbody>
</table>
