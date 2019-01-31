<table width="100%" style="font-family:Arial,sans-serif;font-size:14px;">
   <tbody>
      <tr>
        <td valign="middle">

          @php

          $titleExplode = explode(". ", $package->customer->name, 2);
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

          <div>Dear {{$first_name}},</div>
          <div>
              <br>
          </div>
          <div>This mail is to inform you that all the items in your below package will be discarded, as per your request.</div>
          <div>
              <p style="font-size:14px"><strong>Package ID:</strong> {{$package->order_id}}</p>
              <p style="font-size:14px"><strong>From:</strong> {{$package->seller}}</p>
              <p style="font-size:14px"><strong>Arrived:</strong> {{date("j F Y", strtotime($package->received))}}</p>
              <p style="font-size:14px"><strong>Weight:</strong> {{$package->weight}} Kg.</p>
          </div>
          <div>
              <br>
          </div>
          <div><span style="font-size:14px">Please note that you can no longer retrieve the items in your package. Also, you have no additional costs for the same. </span></div><br>
          <div>
              <p style="color:rgb(80,0,80);font-size:14px">Questions? <a href="{{url('/faq')}}">Visit our FAQ page</a> for expert advice and answers to your questions.</p>
              <p style="color:rgb(80,0,80);font-size:14px">Best regards,
                  <br>Your Team at Shoppre
                  <br>
                  <br>Note:This is a system alert message. Please do not reply to this email.</p>
              <p style="color:rgb(80,0,80);font-size:14px">
                  <br>
              </p>
          </div>

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
