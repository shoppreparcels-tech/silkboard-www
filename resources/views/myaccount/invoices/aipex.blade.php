<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
  <meta name="robots" content="noindex, nofollow"/>
  <title>Invoice</title>
  <link rel='stylesheet' type='text/css' href='/css/stylei.css'/>
  <link rel='stylesheet' type='text/css' href='/css/print1.css' media="print"/>
  <style type="text/css">
    .head-font {
      font-size: 16px;
    }
  </style>
</head>
<body>
<div id="page-wrap" style="margin-top:3%;margin-bottom: 6%;">
  <div style="clear:both"></div>
  <table id="items">
    <tr>
      <td colspan="11" style="text-align: center;">
        <h3>Invoice</h3>
      </td>
    </tr>
    <tr>
      <td colspan="5" style="text-align: left;"><h4>CONSIGNER</h4>
      @php
        $today_date = date("d/m/Y");
      @endphp
      <td colspan="3" style="text-align: left;"><h4>Invoice No. & Date:</h4> SHPR00{{$ship_request->id}} & {{$today_date}}</td>
      <td colspan="3" style="text-align: left;"><h4>Exporter Ref:</h4></td>
    </tr>
    <tr>
      <td colspan="5" class="blank">
        <h3>Shoppre.com</h3>
        <p class="head-font">#181, 1st Floor, 2nd Cross Rd,</p>
        <p class="head-font">1st Block Koramangala,</p>
        <p class="head-font">Bengaluru - 560034</p></td>
      <td colspan="6" style="text-align: left;border: 1px solid"><p class="head-font">Buyer's Order No. & Date</p></td>
    </tr>
    <tr>
      <td colspan="5" class="blank">
        <p class="head-font">Mobile:{{env('PHONE')}}</p>
        <p class="head-font">Email:{{env('SUPPORT_EMAIL')}}</p>
      <td colspan="6" style="text-align: left;border: 1px solid"><p class="head-font">Other reference(s)</p></td>
    </tr>
    <tr>
      <td colspan="5" style="text-align: left; "><h4>CONSIGNEE</h4></td>
      <td colspan="6" style="text-align: left;"><h4>Buyer ( if other than consignee ) </h4></td>
    </tr>
    <tr>
      <td colspan="5" class="blank">
        <h3>{{$ship_request->full_name}}</h3>
        <p class="head-font">{{$ship_request->address}}</p>
        <p class="head-font">Mobile:{{$ship_request->phone}}</p>
      {{--<p class="head-font">Email:support@shoppre.com</p></td>--}}
      <td colspan="6" style="text-align: left;border: 1px solid"><p class="head-font"></p></td>
    </tr>
    <tr>
      <td colspan="5" class="blank"><p class="head-font"></p></td>
      <td colspan="3" style="text-align: left;border: 1px solid"><h5>Country of Origin Goods : Bangalore</h5></td>
      <td colspan="3" style="text-align: left;border: 1px solid"><h5>Country of Final
          Destination: {{$ship_request->location->iso3}} </h5></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: left;">Pre Carriage by</td>
      <td colspan="3" style="text-align: left;">Place of Receipt by Pre-carrier</td>
      <td colspan="6" style="text-align: left;">Handling information if any:</td>

    </tr>
    <tr>
      <td colspan="2"><p class="head-font">Vathessel/Flight No</p></td>
      <td colspan="3"><p class="head-font">Port of Loading </p></td>
      <td colspan="6" class="blank"></td>

    </tr>
    <tr>
      <td colspan="2" class="blank"><p class="head-font">Port of Discharge </p></td>
      <td colspan="3"><p class="head-font">Final Destination </p>
        <p class="head-font">{{$ship_request->location->name}} - {{$ship_request->location->iso3}} </p>
      </td>
      <td colspan="3" class="blank"><p class="head-font">Net weight: </p></td>
      <td colspan="3" class="blank"><p class="head-font">Gross weight : {{$ship_request->	weight}} kg</p></td>
    </tr>
    <tr>
      <td colspan="1" style="text-align: center;"><p class="head-font">Marks & Numbers. </p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">No. & kind of Packages </p></td>
      <td colspan="5" style="text-align: center;"><p class="head-font"> Description of Goods </p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font"> Quantity </p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font"> Rate </p></td>
      <td colspan="2" style="text-align: center;"><p class="head-font"> Amount </p></td>
    </tr>
    @foreach($package_items_by_category as $item)
      <tr>
        <td colspan="2" style="text-align: center;"><p class="head-font">{{$loop->index +1}}</p>
        </td>
        <td colspan="5" style="text-align: center;">
          <p class="head-font">{{$item->name}}</p>
        </td>
        <td colspan="1" style="text-align: center;">
          <p class="head-font">{{$item->quantity}}</p>
        </td>
        <td colspan="1" style="text-align: center;">
          <p class="head-font">{{$item->unit_price}}</p>
        </td>
        <td colspan="2" style="text-align: center;">
          <p class="head-font">{{$item->total}}</p>
        </td>
      </tr>
    @endforeach
    <tr>
      <td colspan="2" style="text-align: center;"><p class="head-font"></p></td>
      <td colspan="5" style="text-align: center;"><p class="head-font">Total :</p></td>
      <td colspan="4" style="text-align:end;border: 1px solid "><p class="head-font">{{$total}}</p></td>
    </tr>
    <tr>
      <td colspan="8" class="blank">
        <p class="head-font">
          Amount in words: <b> {{$amount_in_words}} rupees only.</b>
        </p>
      </td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank"><p class="head-font">Volumetric weight: </p></td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank"><p class="head-font">Actual weight: {{$ship_request->	weight}} kg</p></td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank"><p class="head-font">Total Net weight : {{$ship_request->	weight}} kg</p></td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank"><p class="head-font">Total Gross weight:{{$ship_request->	weight}} kg</p></td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="7" class="blank"><p class="head-font">Declaration:</p></td>
      <td colspan="4" class="blank" style="text-align: end;"><p class="head-font">Signature / Date / Co stamp</p></td>
    </tr>
    <tr>
      <td colspan="8" class="blank"><p class="head-font">We Declare that this invoice shows the actual price of the
          goods</p>
        <p class="head-font">Described and that all particulars are true and correct.</p>
      </td>
      <td colspan="3" class="blank"></td>
    </tr>
  </table>
</div>
</body>
</html>
