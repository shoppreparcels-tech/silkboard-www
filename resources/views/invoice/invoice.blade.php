
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <meta name="robots" content="noindex, nofollow"/>
  <title>Editable Invoice</title>

  <link rel='stylesheet' type='text/css' href='css/stylei.css' />
  <link rel='stylesheet' type='text/css' href='css/print1.css' media="print" />
  <script type='text/javascript' src='js/jquery.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>

  <style type="text/css">
    .head-font
    {
      font-size: 16px;
    }
  </style>

</head>

<body>

<div id="page-wrap" style="margin-top:3%;margin-bottom: 6%;">
  <div style="clear:both"></div>

  <div id="customer">

     <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/logo.png" style="width: 212px;margin-left: 11px;" alt="Shoppre.com">

  </div>
  <table id="items">
    <tr id="hiderow">
      <td colspan="5" style="text-align: center;"><h3>Proforma Invoice</h3></td>
    </tr>
    <tr id="hiderow">
      <td colspan="3" style="text-align: center;"><h4>CONSIGNER</h4>
      <td colspan="3" style="text-align: center;"><h4>CONSIGNEE</h4></td>
    </tr>
    <tr id="hiderow">
      <td colspan="3" style="text-align: left;">
       <h3>Shoppre.com</h3>
        <p class="head-font">
          #181, 1st Floor, 2nd Cross Rd,
          1st Block Koramangala,
          Bengaluru - 560034
        </p>
        <p class="head-font">Mobile:9351523344</p>
        <p class="head-font">Email:vikasjson@gmail.com</p>
      </td>
      <td colspan="3" style="text-align: left;">
        <h3>Vikas Kumar</h3>
        <p class="head-font">
          #181, 1st Floor, 2nd Cross Rd,
          1st Block Koramangala,
          Bengaluru - 560034
        </p >
        <p class="head-font">Mobile:9351523344</p>
        <p class="head-font">Email:vikasjson@gmail.com</p>
      </td>
    </tr>
    <tr id="hiderow">
      <td colspan="3" style="text-align: center;"><h4>31-01-2017</h4></td>
      <td colspan="3" style="text-align: center;"><h4>Byer(if other than consignee)</h4></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;">
        <div style="border-bottom: 1px solid;margin-left: -5px;margin-right: -5px;">
          <h4>31-01-2017</h4>
        </div>
        <br>
      </td>
      <td colspan="2" style="text-align: center;"><h4>Country of Origin Goods</h4></td>
      <td colspan="2" style="text-align: center;"><h4>Country of Final Destination</h4></td>
    </tr>
    <tr id="hiderow">
      <td colspan="2" style="text-align: center;"><p class="head-font">E-Carriage by :</p></td>
      <td colspan="4" style="text-align: left;"><p class="head-font">Place of Receipt by Pre-Carrier :</p></td>
    </tr>
    <tr id="hiderow">
      <td colspan="2" style="text-align: center;"><p class="head-font">Vathessel/Flight No:</p></td>
      <td colspan="4" style="text-align:left;"><p class="head-font">Port of Loading: BANGALORE -</p></td>
    </tr>
    <tr id="hiderow">
      <td colspan="2" style="text-align: center;"><p class="head-font">Port Discharge:</p></td>
      <td colspan="4" style="text-align: left;"><p class="head-font">Final Destination:</p></td>
    </tr>
    <tr id="hiderow">
      <td colspan="1" style="text-align: center;"><p class="head-font">Sl.no.</p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">Items</p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">Nos.</p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">Unit Price</p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">AMOUNT IN INR</p></td>
    </tr>
    <tr id="hiderow">
        <td colspan="1" style="text-align: center;"><p class="head-font">1</p>
          <br>
          <p class="head-font">2</p>
          <br>
          <p class="head-font">3</p>
          <br>
          <p class="head-font">4</p>
        </td>
        <td colspan="1" style="text-align: center;"><p class="head-font">Handcrafted leather belts and straps</p>
          <br>
          <p class="head-font">Handcrafted leather belts and straps</p>
          <br>
          <p class="head-font">Handcrafted leather belts and straps</p>
          <br>
          <p class="head-font">Handcrafted leather belts and straps</p>
        </td>
        <td colspan="1" style="text-align: center;"><p class="head-font">1</p>
          <br>
          <p class="head-font">3</p>
          <br>
          <p class="head-font">5</p>
          <br>
          <p class="head-font">2</p>
        </td>
        <td colspan="1" style="text-align: center;"><p class="head-font">8719.31</p>
          <br>
          <p class="head-font">8719.31</p>
          <br>
          <p class="head-font">2351.31</p>
          <br>
          <p class="head-font">8641.31</p>
        </td>
        <td colspan="1" style="text-align: center;"><p class="head-font">8719.31</p>
          <br>
          <p class="head-font">8719.31</p>
          <br>
          <p class="head-font">8719.31</p>
          <br>
          <p class="head-font">2142.21</p>
        </td>
    </tr>
    <tr id="hiderow">
      <td colspan="2" style="text-align: center;"><p class="head-font">Total :</p></td>
      <td colspan="2" class="blank"> </td>
      <td colspan="2" style="text-align:center;border: 0 solid "><p class="head-font">14521.00</p></td>
    </tr>
    <tr>
      <td colspan="6" class="blank"><p class="head-font">Amount in words: Fourteen thousand Five Hundred Twenty One</p>
      </td>

    </tr>
    <tr>
      <td colspan="6" class="blank"><p class="head-font">Declaration:</p></td>
    </tr>
    <tr>
      <td colspan="6" class="blank"><p class="head-font">We Declare that this invoice shows the actual  price of
          the goods</p></td>
    </tr>
    <tr>
      <td colspan="6" class="blank"><p class="head-font">Described and that all particulars are true and correct.
        </p>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="blank"></td>
      <td colspan="1" style="border-left: 0;border-top:0;text-align:center">
        <p class="head-font">Signature & Date</p>
      </td>
    </tr>
  </table>
  <table border="0" style="margin-top: 14px;margin-left: 13%;">
    <tr id="hiderow">
      <td colspan="2" style="text-align: center;border-bottom: 0;border-left: 0;border-top: 0;"><p class="head-font">
          #181, 1st Floor, 2nd Cross Rd,
          1st Block <br> Koramangala,
          Bengaluru - 560034</p></td>
      <td colspan="1" class="blank" style="border-bottom: 0;border-top: 0;border-right: 0;">
        <p class="head-font">
          support@shoppre.com
          <br>
          Tel : +91 9351523344
        </p>
      </td>
      <td colspan="1" style="text-align:center;border: 0 solid "><p class="head-font">shoppre.com</p></td>
    </tr>
  </table>
  </div>
</body>
</html>