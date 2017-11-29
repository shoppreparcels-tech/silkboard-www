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
                            <td width="30%">
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
            @php
                $charges = array('storage' => 0, 'photo' => 0, 'pickup' => 0, 'handling' => 0, 'doc' => 0, 'address' => 0);
                $charges['storage'] += $package->charges->storage;
                $charges['photo'] += $package->charges->basic_photo + $package->charges->advnc_photo;
                $charges['pickup'] += $package->charges->pickup;
                $charges['handling'] += $package->charges->handling;
                $charges['doc'] += $package->charges->doc;
                $charges['address'] = $package->charges->address;
            @endphp
            @endforeach

            <tr class="item">
              <td colspan="2"></td>
              <td>Estimated Shipping :</td>
              <td>INR {{number_format(($shipment->estimated-$shipment->packlevel), 2, ".", "")}}</td>
            </tr>
            @if($charges['storage'] > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Additional Storage Fee :</td>
              <td>INR {{number_format($charges['storage'], 2, ".", "")}}</td>
            </tr>
            @endif
            @if($charges['photo'] > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Photo Charges :</td>
              <td>INR {{number_format($charges['photo'], 2, ".", "")}}</td>
            </tr>
            @endif
            @if($charges['pickup'] > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Pick-up Service :</td>
              <td>INR {{number_format($charges['pickup'], 2, ".", "")}}</td>
            </tr>
            @endif
            @if($charges['handling'] > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Special Handling Fee :</td>
              <td>INR {{number_format($charges['handling'], 2, ".", "")}}</td>
            </tr>
            @endif
            @if($charges['doc'] > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Receive Mail :</td>
              <td>INR {{number_format($charges['doc'], 2, ".", "")}}</td>
            </tr>
            @endif
            @if($charges['address'] > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Address Correction :</td>
              <td>INR {{number_format($charges['address'], 2, ".", "")}}</td>
            </tr>
            @endif

            @if($shipment->option)

            @php
                $option = $shipment->option;
            @endphp

                @if($option->repack_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Discard shoe boxes :</td>
                  <td>INR {{number_format($option->repack_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->sticker_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Fragile stikers :</td>
                  <td>INR {{number_format($option->sticker_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->extrapack_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Extra packing material :</td>
                  <td>INR {{number_format($option->extrapack_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->original_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Ship in original boxes :</td>
                  <td>INR {{number_format($option->original_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->giftwrap_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Gift wrap :</td>
                  <td>INR {{number_format($option->giftwrap_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->giftnote_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Gift note :</td>
                  <td>INR {{number_format($option->giftnote_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->consolid_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Package consolidation :</td>
                  <td>INR {{number_format($option->consolid_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->liquid_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Clearance Charge :</td>
                  <td>INR {{number_format($option->liquid_amt, 2, ".", "")}}</td>
                </tr>
                @endif
                @if($option->insurance_amt > 0)
                <tr class="item">
                  <td colspan="2"></td>
                  <td>Clearance Charge :</td>
                  <td>INR {{number_format($option->insurance_amt, 2, ".", "")}}</td>
                </tr>
                @endif
            @endif
            @if($shipment->coupon > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Clearance Charge :</td>
              <td>INR {{number_format($shipment->coupon, 2, ".", "")}}</td>
            </tr>
            @endif
            @if($shipment->loyalty > 0)
            <tr class="item">
              <td colspan="2"></td>
              <td>Loyalty Reward :</td>
              <td>INR {{number_format($shipment->loyalty, 2, ".", "")}}</td>
            </tr>
            @endif
            <tr class="total">
              <td colspan="2"></td>
              <td colspan="">Total Cost :</td>
              <td>INR {{number_format($shipment->finalamount, 2, ".", "")}}</td>
            </tr>
        </table>
    </div>
</body>
</html>