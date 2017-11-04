<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shoppre - Personal Shoppre Invoice</title>
    <style>
    .invoice-box{
        max-width: 1280px;
        margin:auto;
        padding:30px;
        border:2px solid #eee;
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
        font-size: 14px;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td{
        border-top:2px solid #eee;
        font-weight:bold;
        font-size: 18px;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{asset('img/logo.png')}}" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Order Number : {{$order->refnum}}<br>
                                Date: {{date("D, F j, Y", strtotime($order->updated_at))}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                {{$customer->name}}<br>
                                {{$customer->email}}<br>
                                +{{$customer->code}}-{{$customer->phone}}<br>
                            </td>
                            
                            <td>
                                INDIANSHOPPRE LLP<br>
                                #181, 1st Floor,<br>2nd Cross Rd, 1st Block Koramangala,<br> Bengaluru, Karnataka 560034<br>
                                Phone : +91 80 4094 4077<br>
                                Email : support@shoppre.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <!-- <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Wire transfer/Money order
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Check
                </td>
                
                <td>
                    1000
                </td>
            </tr> -->
            
            <tr class="heading">
              <td>Item Description</td>
              <td>Qty</td>
              <td>Each</td>
              <td width="130px">Price</td>
            </tr>
            @php
              $requests = $order->requests;
            @endphp
            @foreach($requests as $request)
            <tr class="item">
              <td>
                {{$request->item_name}}-{{$request->item_color}}
              </td>
              <td>
                {{$request->qty}}
              </td>
              <td>INR {{number_format($request->price, 2, ".", "")}}</td>
              <td>INR {{number_format($request->totalprice, 2, ".", "")}}</td>
            </tr>
            @endforeach
            <tr class="item">
              <td colspan="2"></td>
              <td>Sales Tax :</td>
              <td>INR {{number_format($order->sale_tax, 2, ".", "")}}</td>
            </tr>
            <tr class="item">
              <td colspan="2"></td>
              <td colspan="">Shipping to Bengaluru :</td>
              <td>INR {{number_format($order->ship_charge, 2, ".", "")}}</td>
            </tr>
            <tr class="item">
              <td colspan="2"></td>
              <td colspan="">Personal Shopper Cost :</td>
              <td>INR {{number_format($order->pscost, 2, ".", "")}}</td>
            </tr>
            <tr class="total">
              <td colspan="2"></td>
              <td colspan="">Merchant Total :</td>
              <td>INR {{number_format($order->subtotal, 2, ".", "")}}</td>
            </tr>
        </table>
    </div>
</body>
</html>