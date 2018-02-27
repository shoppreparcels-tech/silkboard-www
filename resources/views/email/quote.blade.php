<div marginwidth="0" marginheight="0" style="font-family:Arial,sans-serif;">
  <table cellpadding="0" cellspacing="0" width="100%" border="0" align="center" style="padding:25px 0 15px 0;font-family:Arial,sans-serif;">
    <tbody><tr>
      <td width="100%" valign="top">
        <table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="ffffff" style="min-width:600px;margin:0 auto">
          <tbody>
            <tr>
              <td valign="top">
                <table cellpadding="0" cellspacing="0" width="600" border="0" align="center">
                  <tbody>
                  <tr>
                    <td valign="top" width="500" style="background-color:#ffffff;color:#666666;font-size:15px;text-align:left;padding: 20px 10px 20px 30px;line-height:20px;color: #5e5e5f;border: 1px solid #eee;">
                      <p style="font-size: 32px;color: #1f2533;">Hello Shoppre,</p>
                      <p style="font-size: 16px;">Email: {{$email}}</p>
                      <p style="font-size: 16px;">Mobile: {{$mobile}}</p>
                      <p style="font-size: 16px;">State: {{$state}}</p>
                      <p style="font-size: 16px;">City: {{$city}}</p>
                      <p style="font-size: 16px;">PIN: {{$pin}}</p>
                      <p style="font-size: 16px;">Package: {{$weight}} {{$unit}} ({{$type}})</p>
                      @if(!empty($length) && !empty($width) && !empty($height))
                      <hr>
                      <p style="font-size: 16px;">Length: {{$length}} {{$scale}}</p>
                      <p style="font-size: 16px;">Width: {{$width}} {{$scale}}</p>
                      <p style="font-size: 16px;">Height: {{$height}} {{$scale}}</p>
                      @endif
                    </td>
                  </tr>
                 </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <table cellpadding="0" cellspacing="0" width="600" border="0" align="center">
                  <tbody><tr>
                    <td valign="top" width="100" style="background-color:#1f2533;">
                      <a href="#" style="text-decoration:none;color:#1f2533;font-weight:bold" target="_blank">
                        <img src="http://www.shoppre.com/img/logo.png" style="display:block;background-color:#1f2533;color:#010101;padding:10px;padding-left:30px;width: 100%;" alt="" border="0" class="CToWUd">
                      </a>
                    </td>
                    <td valign="top" width="300" style="background-color:#1f2533;color:#fff;font-size:12px;text-align:right;padding:30px 10px 15px 20px">All Rights Reserved. Copyright © <a href="#" style="text-decoration:none;color:#fff;font-weight:bold" target="_blank">Shoppre.com</a>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody></table>
</div>