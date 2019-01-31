@extends('myaccount.customer.locker.index')

@section('locker')

<div class="table-responsive">
    @if(!$reviews->isEmpty())
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>From</th>
            <th>Package ID</th>
            <th>Date Received</th>
            <th>Item Values</th>
            <th>Weight</th>
        </tr>
        @php ($i = 0)
        @foreach ($reviews as $review)

            <tr>
                <td role="button" data-toggle="collapse" href="#{{$review->order_id}}" aria-expanded="false" align="center"><i class="glyphicon glyphicon-chevron-down"></i></td>
                <td>
                    <strong>{{$review->seller}}</strong><br>
                    {{$review->reference}}
                </td>
                <td>
                    {{$review->order_id}}
                    @if($review->liquid == "1")
                        <span class="spcl_tag">Special Item</span>
                    @endif
                </td>
                <td>
                    @php
                        $expire = strtotime($review->received.' + 20 days');
                        if(time() > $expire){
                            echo '<span class="text-red">'.date('d-m-Y', strtotime($review->received)).' <a href="#" class="tooltipkey text-red" title="This package has exceeded your free storage time limit and is incurring a storage fee."><i class="fa fa-question-circle-o"></i></a></span>';
                        } else {
                            echo date('d-m-Y', strtotime($review->received));
                        }
                    @endphp
                </td>
                <td>
                    <span id="granditemvalue_{{$review->id}}">{{number_format($review->price, 2, ".", "")}}</span>
                </td>
                <td>{{$review->weight}} Kg</td>
            </tr>


            <tr class="collapse" id="{{$review->order_id}}">
                <td class="intable" colspan="8">

                    @if(!empty($review->review))
                        <div class="alert alert-warning text-center">{{$review->review}}</div>
                    @endif


                    @php
                        $basic_photo_check = "";
                        $advc_photo_check = "";
                        foreach($review->photoRequests as $photoReq){
                            if($photoReq->type == "standard" && $photoReq->status == "completed"){
                                $basic_photo_check = "yes";
                            }
                            if($photoReq->type == "advanced" && $photoReq->status == "completed"){
                                $advc_photo_check = "yes";
                            }
                        }
                    @endphp

                    @if($review->status != 'return')

                    <a href="#photo_modal_{{$review->id}}" class="btn btn-photo popup-modal" data-package_id="{{$review->id}}">Photos</a>

                    @if($review->type == 'doc')
                    <a href="#doc_modal_{{$review->id}}" class="btn btn-photo popup-modal">Docs</a>
                    @endif

                    @if($advc_photo_check == "yes")
                        <p style="padding: 10px;background: #f9f2d4;">Advanced photos now available to view.</p>
                    @endif

                    @endif


                    <form action="{{route('customer.values.change')}}" method="post">
                        {{csrf_field()}}
                        <table class="table table-bordered">
                            <tr>
                                <th>PACKAGE DETAILS</th>
                                <th>QTY</th>
                                <th>VALUE PER UNIT(INR)</th>
                                <th>TOTAL LINE VALUE(INR)</th>
                            </tr>
                            @foreach($review->items as $item)
                            <tr>
                                <td>{{$item->item}}</td>
                                <td>{{$item->quantity}}</td>
                                <td><i class="fa fa-rupee"></i> {{$item->price}}</td>
                                <td><i class="fa fa-rupee"></i> {{$item->total}}</td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="col-sm-12">
                            <p>**Values shown are obtained from the merchant invoices, when available. Researched values based on current market prices have been provided above for any items that arrived without invoices. The values should be updated to reflect the actual price paid for each item, and must be confirmed.</p>
                            <p><a href="#add_note{{$review->id}}" class="popup-modal">Add your notes</a> to the package, this is for your use only, Shoppre will not review this area.</p>
                            @if(!empty($review->info))
                                <div class="alert alert-warning" role="alert">{{$review->info}}</div>
                            @endif
                        </div>

                        @if($review->status != 'return')

                        <div class="col-sm-12">
                            <div class="optional_services">
                                <h6>OPTIONAL SERVICES</h6>
                                <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="optional_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Special Requests <span class="caret"></span></button>
                                  <ul class="dropdown-menu" aria-labelledby="optional_menu">
                                    <li><a href="#return_send_{{$review->id}}" class="popup-modal">
                                        <span class="title">Return to Sender <span data-placement="right" class="tooltipkey" title="Once the item arrives at our facility, if you feel the item is not as per your expectation or is damaged, it can be exchanged/returned to the seller (as per the seller exchange/return policy). The cost for returning at item is charged at INR 400*. You will be responsible for all return shipping fees as well (if needed). If it has to be couriered to sender’s destination by Shoppre, charges as per domestic shipping rates will be considered. <br>
                                        *Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above)."><i class="fa fa-question-circle-o"></i></span></span>
                                        <strong> - INR 400 <span class="text-red">*</span> </strong>
                                        <small>(which will be displayed under <i>Shoppre Wallet,</i> and you shall pay along with your next shipment)</small>
                                        <p>Return package to sender. You might have to pay shipping charges as per the Return Policy of the Seller from where you purchased the item.</p>
                                    </a></li>
                                    <li><a href="#split_pack_{{$review->id}}" class="popup-modal">
                                        <span class="title">Split Package <span data-placement="right" class="tooltipkey" title="Shoppre can split your package if it contains more than one item, and if you wish to separate them into multiple packages. You can split your package and discard an item, return it to the sender, ship it at a different time or to a different address. There is a cost of INR 200 per new package* created.<br> For eg. if you have splitted your package into 3, you will be charged INR 400 <br> <small>*Charges may be lesser for Membership Partners, and Loyalty Members (Silver and above).</small>"><i class="fa fa-question-circle-o"></i></span></span>
                                        <strong> - INR 200 <span class="text-red">*</span> Per New Package Created </strong>
                                        <p>Split contents of package into separate packages</p>
                                    </a></li>
                                    <li><a href="#abandon_pack_{{$review->id}}" class="popup-modal">
                                        <span class="title">Abandon Package</span>
                                        <strong> - INR 0 </strong>
                                        <p>Our team will dispose of the package and its contents</p>
                                    </a></li>
                                    <li><p class="text-red" style="margin: 15px;">* Charges may be lesser for Membership Partners, and Loyalty Members (Silver and Above)</p></li>
                                  </ul>
                                </div>
                            </div>
                        </div>

                        @endif

                    </form>

                    <div id="add_note{{$review->id}}" class="modal_photo white-popup-block mfp-hide">
                        <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                        <div class="col-sm-12">
                            <h3>ADD YOUR NOTE</h3>
                            <form method="post" action="{{route('customer.package.note')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label style="font-weight: 400;">This is for your personal use only, Shoppre will not review this area.</label>
                                    <textarea class="form-control" rows="6" placeholder="Type your message here" name="message"></textarea>
                                </div>
                                <input type="hidden" name="note_packid" value="{{$review->id}}">
                                <button type="submit" class="btn btn-shoppre">SAVE YOUR NOTE</button>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div id="doc_modal_{{$review->id}}" class="modal_photo white-popup-block mfp-hide">
                        <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                        <div class="col-sm-12">
                            @if(empty($review->scanRequest))
                            <h3>Scan Documents - <i class="fa fa-rupee"></i> 40.00 Per Page (Minimum <i class="fa fa-rupee"></i> 100.00)</h3>
                            <form method="post" action="{{route('customer.scan.request')}}">
                                {{csrf_field()}}
                                <div class="checkbox">
                                  <label style="padding: 0;">
                                    <input type="radio" name="scan_type" value="full" checked>
                                    Scan entire document
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label style="padding: 0;">
                                    <input type="radio" name="scan_type" value="limited">
                                    Scan only pages
                                    <input type="text" name="page_from" style="width: 30px;margin:0 5px;"> to
                                    <input type="text" name="page_to" style="width: 30px;margin:0 5px;">
                                  </label>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Type your comments here (optional)" name="message"></textarea>
                                    <label style="font-weight: 400;">Shoppre will take upto a maximum period of 24 hours to scan documents. You can view your package in "In Review". You will be charged INR 40.00 Per Page (Minimum INR 100.00). Do you wish to continue?</label>
                                </div>
                                <a href="#" class="btn popup-modal-dismiss">NO</a>
                                <input type="hidden" name="doc_packid" value="{{$review->id}}">
                                <button type="submit" class="btn btn-shoppre">YES</button>
                            </form>
                            @else
                                @if($review->scanRequest->status == 'pending')
                                <h3>Your scan document request under shoppre review.</h3>
                                @elseif($review->scanRequest->status == 'completed')
                                    <h3>Documents from: <strong><span>{{$review->seller}}</span> | <span>{{$review->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($review->scans as $scan){
                                            $url = '/uploads/scandocs/'.$scan->package_id.'/'.$scan->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                    @endphp
                                    </div>
                                @endif
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div id="return_send_{{$review->id}}" class="white-popup-block mfp-hide">
                        <div class="col-sm-12">
                            <h3>Return to Sender - <i class="fa fa-rupee"></i> 400.00</h3>
                            <form method="post" action="{{route('customer.return.request')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label style="font-weight: 400;">Please check with the Sender's Return Policy before you ask us to return your items. You can mention in the box below if you would like us to send the items to your Sender (please mention the full address with Pincode - charges as per domestic shipment) or if the sender will pick up your items from Shoppre.</label>
                                    <textarea class="form-control" rows="6" placeholder="Type your message here" name="message"></textarea>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="return_verify" value="1" required>
                                    <span class="label">I understand that I will have to pay a fee of INR 400 for the return, which will appear in my Shoppre Wallet.</span>
                                  </label>
                                </div>
                                <a href="#" class="btn popup-modal-dismiss">Cancel Request</a>
                                <input type="hidden" name="return_packid" value="{{$review->id}}">
                                <button type="submit" class="btn btn-shoppre">Submit Request</button>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div id="split_pack_{{$review->id}}" class="white-popup-block mfp-hide">
                        <div class="col-sm-12">
                            <h3>Split Package - <i class="fa fa-rupee"></i> INR 200 Per New Package Created</h3>
                            <form method="post" action="{{route('customer.split.request')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label style="font-weight: 400;">How would you like to split your package? Please mention the details in the box below:</label>
                                    <textarea class="form-control" rows="6" placeholder="Type your message here" name="message" required></textarea>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="return_verify" value="1" required>
                                    <span class="label">I understand that I will have to pay a fee of INR 200 per new package created.</span>
                                  </label>
                                </div>
                                <a href="#" class="btn popup-modal-dismiss">Cancel Request</a>
                                <input type="hidden" name="split_packid" value="{{$review->id}}">
                                <button type="submit" class="btn btn-shoppre">Submit Request</button>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div id="abandon_pack_{{$review->id}}" class="white-popup-block mfp-hide">
                        <div class="col-sm-12">
                            <h3>Abandon Package - <i class="fa fa-rupee"></i> INR 0</h3>
                            <form method="post" action="{{route('customer.abandon.request')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label style="font-weight: 400;">Are you sure that you wish to Abandon this Package? You shall not able to recover this package once you have asked us to discard your items.</label>
                                </div>
                                <input type="hidden" name="abandon_packid" value="{{$review->id}}">
                                <button type="submit" class="btn btn-shoppre">YES</button>
                                <a href="#" class="btn popup-modal-dismiss">NO</a>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div id="photo_modal_{{$review->id}}" class="modal_photo white-popup-block mfp-hide">
                        <div id="photo_slider_{{$review->id}}">
                            @if($basic_photo_check == 'yes')
                                <div class="basicphotos">
                                    <h3>Photos from: <strong><span>{{$review->seller}}</span> | <span>{{$review->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($review->photos as $photo){
                                            if($photo->type == "standard"){
                                                $url = '/uploads/packages/standard/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    @if($advc_photo_check == "yes")
                                    <a href="#" class="btn btn-advc" data-pack="{{$review->id}}">View Additional Photos</a>
                                    @endif
                                </div>
                                @if($advc_photo_check == "yes")
                                <div class="advcphotos noshow">
                                    <h3>Photos from: <strong><span>{{$review->seller}}</span> | <span>{{$review->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($review->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    <a href="#" class="btn btn-std" data-pack="{{$review->id}}">View Standard Photos</a>
                                </div>
                                @endif

                            @elseif($advc_photo_check == "yes")
                                <div class="advcphotos">
                                    <h3>Photos from: <strong><span>{{$review->seller}}</span> | <span>{{$review->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($review->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>

                                    @if($basic_photo_check == 'yes')
                                    <a href="#" class="btn btn-std" data-pack="{{$review->id}}">View Standard Photos</a>
                                    @endif

                                    @if($basic_photo_check == 'yes')
                                    <div class="basicphotos">
                                        <h3>Photos from: <strong><span>{{$review->seller}}</span> | <span>{{$review->reference}}</span></strong></h3>
                                        <div class="owl-carousel owl-noajax owl-theme">
                                        @php
                                            foreach($review->photos as $photo){
                                                if($photo->type == "standard"){
                                                    $url = '/uploads/packages/standard/'.$photo->package_id.'/'.$photo->name;
                                                    echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                                }
                                            }
                                        @endphp
                                        </div>
                                        <a href="#" class="btn btn-advc" data-pack="{{$review->id}}">View Additional Photos</a>
                                    </div>

                                    @endif
                                </div>
                            @endif
                        </div>

                        @if( $basic_photo_check != 'yes' || $advc_photo_check != "yes" )

                        <div id="initiate_photo_{{$review->id}}">
                            <div class="blox photo_basic">
                                @if($basic_photo_check != 'yes')
                                <div class="col-sm-3">
                                    <img src="{{asset('img/basic_photo.png')}}">
                                </div>
                                <div class="col-sm-9">
                                    <h3>Basic Photos - <i class="fa fa-rupee"></i> 20.00</h3>
                                    <p>View low-resolution photos taken of your package when it arrived at the Shoppre facility to confirm package contents.</p>
                                    <a href="#" class="btn btn-shoppre photo_nxt" data-type="basic" data-pack="{{$review->id}}">Get Now</a>
                                </div>
                                <div class="clearfix"></div>
                                @endif
                            </div>
                            <div class="blox photo_advance">
                                @if($advc_photo_check != "yes")
                                <div class="col-sm-3">
                                    <img src="{{asset('img/advance_photo.png')}}">
                                </div>
                                <div class="col-sm-9">
                                    <h3>Additional Photos - <i class="fa fa-rupee"></i> 500.00</h3>
                                    <p>Order up 10 high-resolution photos of your content to confirm color, condition and item details</p>
                                    <a href="#" class="btn btn-shoppre photo_nxt" data-type="advanced" data-pack="{{$review->id}}">Request Now</a>
                                </div>
                                <div class="clearfix"></div>
                                @endif
                            </div>
                        </div>

                        <div id="basic_confirm_{{$review->id}}" class="noshow">
                            <div class="col-sm-3">
                                <img src="{{asset('img/basic_photo.png')}}">
                            </div>
                            <div class="col-sm-9">
                                <form class="basicphoto_form">
                                    {{csrf_field()}}
                                    <h3>Basic Photos - <i class="fa fa-rupee"></i> 20.00</h3>
                                    <p>You will be charged <i class="fa fa-rupee"> </i> 20.00. Do you wish to continue?</p>
                                    <a href="#" class="btn btn-cancel" data-pack="{{$review->id}}">Cancel Request</a>
                                    <button type="submit" data-pack="{{$review->id}}" class="btn btn-shoppre basic_confirm_btn">Continue</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="basic_pending_{{$review->id}}" class="noshow">
                            <h3>Success! Your request for standard photos has been submitted.</h3>
                            <p>Your package is now in review by Shoppre team. You will be notified by customer service when your photos are ready to view.</p>
                            <p><strong>Page will refreshed in 5 seconds. <a href="/locker">Click here </a>if not.</strong></p>
                        </div>

                        <div id="conirm_advcreq_{{$review->id}}" class="noshow">
                            <h3>Success! Your request for advanced photos has been submitted.</h3>
                            <p>Your package is now in review by Shoppre team. You will be notified by customer service when your photos are ready to view.</p>
                            <p><strong>Page will refreshed in 5 seconds. <a href="{{route('customer.locker')}}">Click here </a>if not.</strong></p>
                        </div>

                        <div id="advanced_request_{{$review->id}}" class="advance_photo_container noshow">
                            <div class="col-sm-3">
                                <img src="{{asset('img/advance_photo.png')}}">
                            </div>
                            <div class="col-sm-9">
                                <h3>Additional Photos - <i class="fa fa-rupee"></i> 500.00</h3>
                                <form class="advancedreq_form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Please describe any specific photo requests.*</label>
                                        <textarea class="form-control" id="advc_desc_{{$review->id}}" rows="8" placeholder="Type your message here"  name="description"></textarea>
                                    </div>
                                    <div class="checkbox">
                                      <label>
                                        <input id="advc_verify_{{$review->id}}" type="checkbox" name="verify" required>
                                        <span class="label">I understand that I will be charged <i class="fa fa-rupee"></i> 500.00. This request will take additional time. During this time I can manage my package in the In Review section.</span>
                                      </label>
                                    </div>
                                    <div class="form-group" id="advc_error_{{$review->id}}">
                                    </div>
                                    <a href="#" class="btn btn-cancel" data-pack="{{$review->id}}">Cancel Request</a>
                                    <button type="submit" data-pack="{{$review->id}}" class="btn btn-shoppre advc_confirm_btn">Submit Request</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="std_photos_{{$review->id}}" class="std_photo_container noshow">
                            <h3>Photos from: <strong><span>{{$review->seller}}</span> | <span>{{$review->reference}}</span></strong></h3>

                            <div class="owl-carousel owl-theme owl-ajax"></div>
                            @if($advc_photo_check == 'yes')
                                <a href="#" class="btn btn-advc" data-pack="{{$review->id}}">View Additional Photos</a>
                            @else
                                <p>Need Additional Photos?</p>
                                <a href="#" class="photo_nxt" data-type="advanced" data-pack="{{$review->id}}">Request Additional photos for <i class="fa fa-rupee"></i> 500.00</a>
                            @endif
                        </div>

                        @endif

                        <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                        <div class="ajaxloader"></div>
                    </div>


                </td>
            </tr>


        @endforeach
    </table>
    @else
        <div class="well">
            <p class="alert alert-danger text-center" role="alert">You currently have no packages under review by Shoppre.</p>
        </div>
    @endif

</div>

@endsection
