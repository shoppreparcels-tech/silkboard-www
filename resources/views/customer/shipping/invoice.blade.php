<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shoppre - Shipment Invoice</title>
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
    .invoice-box table tr.heading th{

    }
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
        text-align: left;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        text-align: left;
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td{
        border-top:2px solid #eee;
        font-weight:bold;
        font-size: 18px;
        text-align: left;
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
                                Order Number : # {{$shipment->orderid}}<br>
                                Date: {{date("D, F j, Y", strtotime($shipment->updated_at))}}<br>
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
                                <h3 style="margin:0 0 0px">Ship To:</h3>
                                <strong>{{$shipment->fullname}}</strong><br>
                                {{$shipment->address}}<br>
                                PH: {{$shipment->phone}}
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
            <tr class="heading">
                <td>From</td>
                <td>Package ID</td>
                <td>Total Value</td>
                <td>Weight</td>
            </tr>
            @foreach($packages as $package)
            <tr class="item">
              <td><strong>{{$package->seller}}</strong> - {{$package->refference}}</td>
              <td>{{$package->order_id}}</td>
              <td>INR {{number_format($package->price, 2, ".", "")}}</td>
              <td>{{$package->weight}} Kg.</td>
            </tr>
            @endforeach
            <tr class="item">
              <td colspan="2"></td>
              <td>Estimated Shipping :</td>
              <td>INR {{number_format(($shipment->estimated-$shipment->packlevel), 2, ".", "")}}</td>
            </tr>
            <tr class="item">
              <td colspan="2"></td>
              <td colspan="">Package Level Charges :</td>
              <td>INR {{number_format($shipment->packlevel, 2, ".", "")}}</td>
            </tr>
            @if($shipment->option->insurance == '1')
            <tr class="item">
              <td colspan="2"></td>
              <td colspan="">Insurance :</td>
              <td>INR {{number_format($shipment->option->insurance_amt, 2, ".", "")}}</td>
            </tr>
            @endif
            <tr class="item">
              <td colspan="2"></td>
              <td colspan="">Coupon Reward :</td>
              <td>(-)INR {{number_format($shipment->coupon, 2, ".", "")}}</td>
            </tr>
            <tr class="item">
              <td colspan="2"></td>
              <td colspan="">Loyalty Reward :</td>
              <td>(-)INR {{number_format($shipment->loyalty, 2, ".", "")}}</td>
            </tr>
            <tr class="total">
              <td colspan="2"></td>
              <td colspan="">Total Cost :</td>
              <td>INR {{number_format($shipment->finalamount, 2, ".", "")}}</td>
            </tr>
        </table>
    </div>
</body>
</html>