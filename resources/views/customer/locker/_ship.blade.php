<div class="table-responsive">
    @if(!$ships->isEmpty())
    <p><strong class="pull-right">Select Packages to Ship**</strong></p>
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>From</th>
            <th>Package ID</th>
            <th>Date Received</th>
            <th>Item Values</th>
            <th>Weight</th>
            <th>
                <div class="squaredFour" style="margin:0;">
                    <input type="checkbox" name="allshipreq" id="allshipreqid" value="1" checked>
                    <label for="allshipreqid"></label>
                </div>
            </th>
        </tr>
        @foreach ($ships as $ship)
            <tr>
                <td role="button" data-toggle="collapse" href="#{{$ship->order_id}}" aria-expanded="false" align="center"><i class="glyphicon glyphicon-chevron-down"></i></td>
                <td>
                    <strong>{{$ship->seller}}</strong><br>
                    {{$ship->refference}}
                </td>
                <td>
                    {{$ship->order_id}}
                    @if($ship->liquid == "1")
                        <span class="spcl_tag">Special Item</span>
                    @endif
                </td>
                <td>
                    @php
                        $expire = strtotime($ship->received.' + 20 days');
                        if(time() > $expire){
                            echo '<span class="text-red">'.date('d-m-Y', strtotime($ship->received)).' <a href="#" class="tooltipkey text-red" title="This package has exceeded your free storage time limit and is incurring a storage fee."><i class="fa fa-question-circle-o"></i></a></span>';
                        } else {
                            echo date('d-m-Y', strtotime($ship->received));
                        }
                    @endphp
                </td>
                <td>
                    <span id="granditemvalue_{{$ship->id}}">{{number_format($ship->price, 2, ".", "")}}</span>
                </td>
                <td>{{$ship->weight}} Kg</td>
                <th>
                    <div class="squaredFour">
                        <input type="checkbox" name="checkshipreq" id="check_{{$ship->id}}" value="{{$ship->id}}" checked>
                        <label for="check_{{$ship->id}}"></label>
                    </div>
                </th>
            </tr>
            <tr class="collapse" id="{{$ship->order_id}}">
                <td class="intable" colspan="8">
                    @php
                        $basic_photo_check = "";
                        $advc_photo_check = "";
                        foreach($ship->photoRequests as $photoReq){
                            if($photoReq->type == "standard" && $photoReq->status == "completed"){
                                $basic_photo_check = "yes";
                            }
                            if($photoReq->type == "advanced" && $photoReq->status == "completed"){
                                $advc_photo_check = "yes";
                            }
                        }
                    @endphp

                    <a href="#photo_modal_{{$ship->id}}" class="btn btn-photo popup-modal" data-packid="{{$ship->id}}">Photos</a>
                    @if($advc_photo_check == "yes")
                        <p style="padding: 10px;background: #f9f2d4;">Advanced photos now available to view.</p>
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
                        @foreach($ship->items as $item)
                        <tr>
                            <td>{{$item->item}}</td>
                            <td>{{$item->qty}}</td>
                            <td>

                                <div class="input-group input-group-sm">
                                  <span class="input-group-addon value-icon"><i class="fa fa-rupee"></i></span>
                                  <input type="text" class="form-control itemcalc" data-itemcalc="{{$item->id}}" data-packid="{{$ship->id}}" placeholder="Price" name="values[{{$item->id}}]" value="{{$item->price}}">
                                  <input type="hidden" id="itemqty_{{$item->id}}" name="qty[{{$item->id}}]" value="{{$item->qty}}">
                                </div>
                                
                            </td>
                            <td><i class="fa fa-rupee"></i> <span id="totalvalue_{{$item->id}}" class="totalitemvalue_{{$ship->id}}">{{$item->total}}</span></td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="col-sm-8">
                        <p>**Values shown are obtained from the merchant invoices, when available. Researched values based on current market prices have been provided above for any items that arrived without invoices. The values should be updated to reflect the actual price paid for each item, and must be confirmed.</p>
                        <p><a href="#">Add your notes</a> to the package, this is for your use only, Shoppre will not review this area.</p>
                    </div>
                    <div class="col-sm-4">
                        <input type="hidden" name="packid" value="{{$ship->id}}">
                        <button type="submit" class="btn btn-block btn-shoppre btn-values">Submit Item Values</button>
                        <button type="reset" class="btn btn-block btn-reset">Reset Values</button>
                    </div>
                    
                    </form>

                    <div id="photo_modal_{{$ship->id}}" class="modal_photo white-popup-block mfp-hide">
                        <div id="photo_slider_{{$ship->id}}">
                            @if($basic_photo_check == 'yes')
                                <div class="basicphotos">
                                    <h3>Photos from: <strong><span>{{$ship->seller}}</span> | <span>{{$ship->refference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($ship->photos as $photo){
                                            if($photo->type == "standard"){
                                                $url = '/uploads/packages/standard/'.$photo->packid.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    @if($advc_photo_check == "yes")
                                    <a href="#" class="btn btn-advc" data-pack="{{$ship->id}}">View Advanced Photos</a>
                                    @endif
                                </div>
                                @if($advc_photo_check == "yes")
                                <div class="advcphotos noshow">
                                    <h3>Photos from: <strong><span>{{$ship->seller}}</span> | <span>{{$ship->refference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($ship->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->packid.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    <a href="#" class="btn btn-std" data-pack="{{$ship->id}}">View Standard Photos</a>
                                </div>
                                @endif

                            @elseif($advc_photo_check == "yes")
                                <div class="advcphotos">
                                    <h3>Photos from: <strong><span>{{$ship->seller}}</span> | <span>{{$ship->refference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($ship->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->packid.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>

                                    @if($basic_photo_check == 'yes')
                                    <a href="#" class="btn btn-std" data-pack="{{$ship->id}}">View Standard Photos</a>
                                    @endif

                                    @if($basic_photo_check == 'yes')
                                    <div class="basicphotos">
                                        <h3>Photos from: <strong><span>{{$ship->seller}}</span> | <span>{{$ship->refference}}</span></strong></h3>
                                        <div class="owl-carousel owl-noajax owl-theme">
                                        @php
                                            foreach($ship->photos as $photo){
                                                if($photo->type == "standard"){
                                                    $url = '/uploads/packages/standard/'.$photo->packid.'/'.$photo->name;
                                                    echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                                }
                                            }
                                        @endphp
                                        </div>
                                        <a href="#" class="btn btn-advc" data-pack="{{$ship->id}}">View Advanced Photos</a>
                                    </div>

                                    @endif
                                </div>
                            @endif
                        </div>

                        @if( $basic_photo_check != 'yes' || $advc_photo_check != "yes" )

                        <div id="initiate_photo_{{$ship->id}}">
                            <div class="blox photo_basic">
                                @if($basic_photo_check != 'yes')
                                <div class="col-sm-3">
                                    <img src="{{asset('img/basic_photo.png')}}">
                                </div>
                                <div class="col-sm-9">
                                    <h3>Basic Photos - <i class="fa fa-rupee"></i> 100.00</h3>
                                    <p>View low-resolution photos taken of your package when it arrived at the Shoppre facility to confirm package contents.</p>
                                    <a href="#" class="btn btn-shoppre photo_nxt" data-type="basic" data-pack="{{$ship->id}}">Get Now</a>
                                </div>
                                <div class="clearfix"></div>
                                @endif
                            </div>
                            <div class="blox photo_advance">
                                @if($advc_photo_check != "yes")
                                <div class="col-sm-3">
                                    <img src="{{asset('img/advnc_photo.png')}}">
                                </div>
                                <div class="col-sm-9">
                                    <h3>Advanced Photos - <i class="fa fa-rupee"></i> 500.00</h3>
                                    <p>Order up 20 high-resolution photos of your content to confirm color, condition and item details</p>
                                    <a href="#" class="btn btn-shoppre photo_nxt" data-type="advanced" data-pack="{{$ship->id}}">Request Now</a>
                                </div>
                                <div class="clearfix"></div>
                                @endif
                            </div>
                        </div>

                        <div id="basic_confirm_{{$ship->id}}" class="noshow">
                            <div class="col-sm-3">
                                <img src="{{asset('img/basic_photo.png')}}">
                            </div>
                            <div class="col-sm-9">
                                <form class="basicphoto_form">
                                    {{csrf_field()}}
                                    <h3>Basic Photos - <i class="fa fa-rupee"></i> 100.00</h3>
                                    <p>You will be charged <i class="fa fa-rupee"> </i> 100.00. Do you wish to continue?</p>
                                    <a href="#" class="btn btn-cancel" data-pack="{{$ship->id}}">Cancel Request</a>
                                    <button type="submit" data-pack="{{$ship->id}}" class="btn btn-shoppre basic_confirm_btn">Continue</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="basic_pending_{{$ship->id}}" class="noshow">
                            <h3>Success! Your request for standard photos has been submitted.</h3>
                            <p>Your package is now in review by Shoppre team. You will be notified by customer service when your photos are ready to view.</p>
                            <p><strong>Page will refreshed in 5 seconds. <a href="/locker/">Click here </a>if not.</strong></p>
                        </div>
                    
                        <div id="conirm_advcreq_{{$ship->id}}" class="noshow">
                            <h3>Success! Your request for advanced photos has been submitted.</h3>
                            <p>Your package is now in review by Shoppre team. You will be notified by customer service when your photos are ready to view.</p>
                            <p><strong>Page will refreshed in 5 seconds. <a href="{{route('customer.locker')}}">Click here </a>if not.</strong></p>
                        </div>

                        <div id="advanced_request_{{$ship->id}}" class="advnc_photo_container noshow">
                            <div class="col-sm-3">
                                <img src="{{asset('img/advnc_photo.png')}}">
                            </div>
                            <div class="col-sm-9">
                                <h3>Advanced Photos - <i class="fa fa-rupee"></i> 500.00</h3>
                                <form class="advancedreq_form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Please describe any specific photo requests.*</label>
                                        <textarea class="form-control" id="advc_desc_{{$ship->id}}" rows="8" placeholder="Type your message here"  name="description"></textarea>
                                    </div>
                                    <div class="checkbox">
                                      <label>
                                        <input id="advc_verify_{{$ship->id}}" type="checkbox" name="verify" required>
                                        <span class="label">I understand that I will be charged <i class="fa fa-rupee"></i> 500.00. This request will take additional time. During this time I can manage my package in the In Review section.</span>
                                      </label>
                                    </div>
                                    <div class="form-group" id="advc_error_{{$ship->id}}">
                                    </div>
                                    <a href="#" class="btn btn-cancel" data-pack="{{$ship->id}}">Cancel Request</a>
                                    <button type="submit" data-pack="{{$ship->id}}" class="btn btn-shoppre advc_confirm_btn">Submit Request</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="std_photos_{{$ship->id}}" class="std_photo_container noshow">
                            <h3>Photos from: <strong><span>{{$ship->seller}}</span> | <span>{{$ship->refference}}</span></strong></h3>

                            <div class="owl-carousel owl-theme owl-ajax"></div>
                            @if($advc_photo_check == 'yes')
                                <a href="#" class="btn btn-advc" data-pack="{{$ship->id}}">View Advanced Photos</a>
                            @else
                                <p>Need Additional Photos?</p>
                                <a href="#" class="photo_nxt" data-type="advanced" data-pack="{{$ship->id}}">Request Advanced photos for <i class="fa fa-rupee"></i> 500.00</a>
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
    <div class="shipbottom">
        <p>* Customs regulations require the purchase price for every item. Proof of value may be requested by customs officials. <a href="{{route('faq')}}">Click here</a> to know more.</p>
        <p>** Shoppre charges a small fee of INR 100 per package that you add to the final shipment (when you have two or more packages to consolidate). This helps you in reducing shipping charges upto 60-80%. <a href="{{route('faq')}}">Click here</a> to know more.</p>
    </div>
    @else
        <div class="well">
            <p class="alert alert-danger text-center" role="alert">There are currently no package to ship. Please purchase a product with shoppre locker address.</p>
        </div>
    @endif
</div>
<div class="clearfix"></div>