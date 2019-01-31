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
  <table id="items">
    <div style="text-align: center;"><h3>Invoice</h3></div>
    <tr>
      <td colspan="5" style="text-align: left;"><h4>CONSIGNER</h4>
      <td colspan="3" style="text-align: left;"><h4>Date</h4></td>
      @php
      $today_date = date("d/m/Y");
      @endphp
      <td colspan="3" style="text-align: left;"><h4>{{$today_date}}</h4></td>
    </tr>
    <tr>
      <td colspan="5" class="blank">
        <h3>Shoppre.com</h3>
        <p class="head-font">#181, 1st Floor, 2nd Cross Rd,</p>
        <p class="head-font">1st Block Koramangala,</p>
        <p class="head-font">Bengaluru - 560034</p>
        <p class="head-font">Mobile:{{env('PHONE')}}</p>
        <p class="head-font">Email:{{env('SUPPORT_EMAIL')}}</p>
      </td>
      <td colspan="3" style="text-align: left;">
        <p class="head-font">
          Invoice No
        </p>
      </td>
      <td colspan="3" style="text-align: left;">
        <p class="head-font">
          <h4>SHPR00{{$ship_request->id}}</h4>
        </p>
      </td>
    </tr>
    <tr>
      <td colspan="5" class="blank"><p class="head-font"></p></td>
      <td colspan="6" style="text-align: left;border: 1px solid"><p class="head-font"><h5>Weight of the shipment
          : {{$ship_request->	weight}} KG </h5>
        <p> (as per your confirmation)</p>
        <p> (which may vary after weighing at Hub)</p></td>
    </tr>
    <tr>
      <td colspan="5" style="text-align: left; "><h4>CONSIGNEE</h4></td>
      <td colspan="6" style="text-align: left;"><h4>PAN No : AAGFI4861F </h4></td>
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
      <td colspan="3" style="text-align: left;border: 1px solid"><h5>Country of Origin Goods </h5></td>
      <td colspan="3" style="text-align: left;border: 1px solid"><h5>Country of Final Destination</h5></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: left;">Pre Carriage by</td>
      <td colspan="3" style="text-align: left;">Place of Receipt by Pre-carrier</td>
      <td colspan="3" style="text-align: left;">INDIA</td>
      <td colspan="3" style="text-align: left;">{{$ship_request->location->iso3}}</td>
    </tr>
    <tr>
      <td colspan="2" class="blank"><p class="head-font">Vathessel/Flight No</p></td>
      <td colspan="3"><p class="head-font">Port of Loading </p></td>
      <td colspan="6" class="blank"></td>
    </tr>
    <tr>
      <td colspan="2" class="blank"><p class="head-font">Port of Discharge </p></td>
      <td colspan="3"><p class="head-font">Final Destination </p></td>
      <td colspan="6" class="blank"></td>
    </tr>
    <tr>
      <td colspan="2" class="blank"></td>
      <td colspan="3"><p class="head-font">{{$ship_request->location->name}} - {{$ship_request->location->iso3}}</p>
      </td>
      <td colspan="6" class="blank"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><p class="head-font">Sl.NO</p></td>
      <td colspan="5" style="text-align: center;"><p class="head-font">DISCRIPTION OF GOODS</p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">QTY</p></td>
      <td colspan="1" style="text-align: center;"><p class="head-font">RATE</p></td>
      <td colspan="2" style="text-align: center;"><p class="head-font">VALUE INR </p></td>
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
      <td colspan="2" style="text-align: center;">
        <p class="head-font"></p>
      </td>
      <td colspan="5" style="text-align: center;">
        <p class="head-font">Total :</p>
      </td>
      <td colspan="4" style="text-align:end;border: 1px solid ">
        <p class="head-font">{{$total}}
        </p>
      </td>
    </tr>
    <tr>
      <td colspan="8" class="blank"><p class="head-font">
        <p class="head-font">
          Amount in words: <b> {{$amount_in_words}} rupees only.</b>
        </p>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank">
        <p class="head-font">Declaration:
        </p>
      </td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank">
        <p class="head-font">
          We Declare that this invoice shows the actual price of the goods
        </p>
      </td>
      <td colspan="3" class="blank" style="text-align: center;">
        <p class="head-font">
          Signature & Date</p>
      </td>
    </tr>
    <tr>
      <td colspan="8" class="blank">
        <p class="head-font">
          Described and that all particulars are true and correct.
        </p>
      </td>
      <td colspan="3" class="blank"></td>
    </tr>
    <tr>
      <td colspan="8" class="blank"></td>
      <td colspan="3" class="blank"></td>
    </tr>
  </table>
</div>
</body>
</html>
