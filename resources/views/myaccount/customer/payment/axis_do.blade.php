<!DOCTYPE html>
<html>
<head>
    <title>Payment Gateway Redirecting - Please Wait</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
    <form name="redirect" action="https://geniusepay.in/VAS/DCC/doEnc.action" method="post" accept-charset="ISO-8859-1" align="center">
        <input type="hidden" name="vpc_MerchantId" value="{{$encrypted_data['vpc_MerchantId']}}" />
         <input type="hidden" name="EncData" value="{{$encrypted_data['encrypted_data']}}" />
    </form>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>
