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
         <p>So, congratulations 'cause you've won <strong>{{$points}}</strong> <a href="{{route('customer.loyalty.points')}}">ShoppRe Loyalty points</a> for {{$reason}}</p>
         <p>Keep ShoppRe-ing and accumulating your loyalty points.</p>
         <p>Don't forget, the higher your points, the bigger your surprises. So, go get your loyalty game up!</p>
         <p>Questions? <a href="{{route('faq')}}">Visit our FAQ page</a> for expert advice and answers to your questions.</p>
         <p>
            Best Regards,
            <br>
            Your Team at ShoppRe
            <br><br>
            Note:This is a system alert message. Please do not reply to this email.
            <br>
            <p>
            <a href="tel:+91-8040494077">+91-8040494077</a> | <a href="mailto:support@shoppre.com">support@shoppre.com</a> | #181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, KA 560034, India</p>
         </p>
         </td>
      </tr>
   </tbody>
</table>
