<table width="100%">
   <tbody>
      <tr>
         <td valign="middle">

            @php

             $titleExplode = explode(". ", $customer->name, 2);

             if(sizeof($titleExplode) == 2){
                 $title = $titleExplode[0];
                 $nameRest = $titleExplode[1];
             }else{
                 $title = "";
                 $nameRest = $titleExplode[0];
             }

             @endphp

         <p><strong>Guess what, {{$nameRest}},</strong></p>

         <p>We totally believe in the idea of return gifts.</p>
         <p>So, congratulations 'cause you've won <strong>{{$points}}</strong> <a href="{{route('customer.loyalty.points')}}">Shoppre Loyalty points</a> for {{$reason}}</p>
         <p>Keep Shoppre-ing and accumulating your loyalty points.</p>
         <p>Don't forget, the higher your points, the bigger your surprises. So, go get your loyalty game up!</p>
         <p>Questions? <a href="{{route('faq')}}">Visit our FAQ page</a> for expert advice and answers to your questions.</p>
         <p>
            Best regards,
            <br>
            Your Team at Shoppre
            <br><br>
            Note:This is a system alert message. Please do not reply to this email
            <br>
            <p>
            <a href="tel:+91 80 4049 4077">+91 80 4049 4077</a> | <a href="mailto:support@shoppre.com">support@shoppre.com</a> | <a href="https://www.google.co.in/maps/place/Shoppre.com+-+Your+Global+Shipping+Partner/@12.925805,77.6332563,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae146191401f95:0x1cf2770c1532d7d1!8m2!3d12.9257998!4d77.635445"> #181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, Karnataka 560034</a>
            </p>
         </p>
         </td>
      </tr>
   </tbody>
</table>
