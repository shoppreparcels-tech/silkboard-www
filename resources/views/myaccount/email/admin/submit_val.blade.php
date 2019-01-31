<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

            <p><strong>Dear Team,</strong></p>

            <p><strong>Customer changed package #{{$package->order_id}} values from ready to ship.
            <br>Click below link to review the package.</strong></p>

            <a href="{{route('admin.package.edit', [$package->id])}}" style="display: block;padding: 10px;border: 1px solid #067b7a;
                    width: 150px;margin-top: 15px;text-align: center;background: #4CAF50;
                    text-decoration: none;color: #fff;font-size: 18px;">View Package</a>
                <br>

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
