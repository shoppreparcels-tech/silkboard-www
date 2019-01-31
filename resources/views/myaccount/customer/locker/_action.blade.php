@extends('myaccount.customer.locker.index')

@section('locker')

<div class="table-responsive">
    @if(!$confirms->isEmpty())
    <table class="table table-bordered">
        <tr>
            <th>From</th>
            <th>Package ID</th>
            <th>Date Received</th>
            <th class="customer_action">Action Required</th>
            <th></th>
        </tr>
        @foreach ($confirms as $confirm)
            <tr>
                <td>
                    <strong>{{$confirm->seller}}</strong><br>
                    {{$confirm->reference}}
                </td>
                <td>{{$confirm->order_id}}</td>
                <td>{{date('d-m-Y', strtotime($confirm->received))}}</td>
                <td class="customer_action">
                    <p>Provide Item Values</p>
                    <span>As required by Customs</span>
                </td>
                <td role="button" data-toggle="collapse" href="#{{$confirm->order_id}}" aria-expanded="false" align="center"><i class="glyphicon glyphicon-chevron-down"></i></td>
            </tr>
            <tr class="collapse" id="{{$confirm->order_id}}">
                <td class="intable" colspan="8">
                    @php
                        $basic_photo_check = "";
                        $advc_photo_check = "";
                        foreach($confirm->photoRequests as $photoReq){
                            if($photoReq->type == "standard" && $photoReq->status == "completed"){
                                $basic_photo_check = "yes";
                            }
                            if($photoReq->type == "advanced" && $photoReq->status == "completed"){
                                $advc_photo_check = "yes";
                            }
                        }
                    @endphp

                    <a href="#photo_modal_{{$confirm->id}}" class="btn btn-photo popup-modal" data-package_id="{{$confirm->id}}">Photos</a>

                    @if($confirm->type == 'doc')
                    <a href="#doc_modal_{{$confirm->id}}" class="btn btn-photo popup-modal">Docs</a>
                    @endif

                    <div id="photo_modal_{{$confirm->id}}" class="modal_photo white-popup-block mfp-hide">
                        <div id="photo_slider_{{$confirm->id}}">
                            @if($basic_photo_check == 'yes')
                                <div class="basicphotos">
                                    <h3>Photos from: <strong><span>{{$confirm->seller}}</span> | <span>{{$confirm->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($confirm->photos as $photo){
                                            if($photo->type == "standard"){
                                                $url = '/uploads/packages/standard/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    @if($advc_photo_check == "yes")
                                    <a href="#" class="btn btn-advc" data-pack="{{$confirm->id}}">View Additional Photos</a>
                                    @endif
                                </div>
                                @if($advc_photo_check == "yes")
                                <div class="advcphotos noshow">
                                    <h3>Photos from: <strong><span>{{$confirm->seller}}</span> | <span>{{$confirm->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($confirm->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>
                                    <a href="#" class="btn btn-std" data-pack="{{$confirm->id}}">View Standard Photos</a>
                                </div>
                                @endif

                            @elseif($advc_photo_check == "yes")
                                <div class="advcphotos">
                                    <h3>Photos from: <strong><span>{{$confirm->seller}}</span> | <span>{{$confirm->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($confirm->photos as $photo){
                                            if($photo->type == "advanced"){
                                                $url = '/uploads/packages/advanced/'.$photo->package_id.'/'.$photo->name;
                                                echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                            }
                                        }
                                    @endphp
                                    </div>

                                    @if($basic_photo_check == 'yes')
                                    <a href="#" class="btn btn-std" data-pack="{{$confirm->id}}">View Standard Photos</a>
                                    @endif

                                    @if($basic_photo_check == 'yes')
                                    <div class="basicphotos">
                                        <h3>Photos from: <strong><span>{{$confirm->seller}}</span> | <span>{{$confirm->reference}}</span></strong></h3>
                                        <div class="owl-carousel owl-noajax owl-theme">
                                        @php
                                            foreach($confirm->photos as $photo){
                                                if($photo->type == "standard"){
                                                    $url = '/uploads/packages/standard/'.$photo->package_id.'/'.$photo->name;
                                                    echo '<div class="item"><a href="'.$url.'" target="_blank"><img src="'.$url.'"></a></div>';
                                                }
                                            }
                                        @endphp
                                        </div>
                                        <a href="#" class="btn btn-advc" data-pack="{{$confirm->id}}">View Additional Photos</a>
                                    </div>

                                    @endif
                                </div>
                            @endif
                        </div>

                        @if( $basic_photo_check != 'yes' || $advc_photo_check != "yes" )

                        <div id="initiate_photo_{{$confirm->id}}">
                            <div class="blox photo_basic">
                                @if($basic_photo_check != 'yes')
                                <div class="col-sm-3">
                                    <img src="{{asset('img/basic_photo.png')}}">
                                </div>
                                <div class="col-sm-9">
                                    <h3>Basic Photos - <i class="fa fa-rupee"></i> 20.00</h3>
                                    <p>View low-resolution photos taken of your package when it arrived at the Shoppre facility to confirm package contents.</p>
                                    <a href="#" class="btn btn-shoppre photo_nxt" data-type="basic" data-pack="{{$confirm->id}}">Get Now</a>
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
                                    <a href="#" class="btn btn-shoppre photo_nxt" data-type="advanced" data-pack="{{$confirm->id}}">Request Now</a>
                                </div>
                                <div class="clearfix"></div>
                                @endif
                            </div>
                        </div>

                        <div id="basic_confirm_{{$confirm->id}}" class="noshow">
                            <div class="col-sm-3">
                                <img src="{{asset('img/basic_photo.png')}}">
                            </div>
                            <div class="col-sm-9">
                                <form class="basicphoto_form">
                                    {{csrf_field()}}
                                    <h3>Basic Photos - <i class="fa fa-rupee"></i> 20.00</h3>
                                    <p>You will be charged <i class="fa fa-rupee"> </i> 20.00. Do you wish to continue?</p>
                                    <a href="#" class="btn btn-cancel" data-pack="{{$confirm->id}}">Cancel Request</a>
                                    <button type="submit" data-pack="{{$confirm->id}}" class="btn btn-shoppre basic_confirm_btn">Continue</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="basic_pending_{{$confirm->id}}" class="noshow">
                            <h3>Success! Your request for standard photos has been submitted.</h3>
                            <p>Your package is now in review by Shoppre team. You will be notified by customer service when your photos are ready to view.</p>
                            <p><strong>Page will refreshed in 5 seconds. <a href="/locker">Click here </a>if not.</strong></p>
                        </div>

                        <div id="conirm_advcreq_{{$confirm->id}}" class="noshow">
                            <h3>Success! Your request for advanced photos has been submitted.</h3>
                            <p>Your package is now in review by Shoppre team. You will be notified by customer service when your photos are ready to view.</p>
                            <p><strong>Page will refreshed in 5 seconds. <a href="{{route('customer.locker')}}">Click here </a>if not.</strong></p>
                        </div>

                        <div id="advanced_request_{{$confirm->id}}" class="advance_photo_container noshow">
                            <div class="col-sm-3">
                                <img src="{{asset('img/advance_photo.png')}}">
                            </div>
                            <div class="col-sm-9">
                                <h3>Additional Photos - <i class="fa fa-rupee"></i> 500.00</h3>
                                <form class="advancedreq_form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Please describe any specific photo requests.*</label>
                                        <textarea class="form-control" id="advc_desc_{{$confirm->id}}" rows="8" placeholder="Type your message here"  name="description"></textarea>
                                    </div>
                                    <div class="checkbox">
                                      <label>
                                        <input id="advc_verify_{{$confirm->id}}" type="checkbox" name="verify" required>
                                        <span class="label">I understand that I will be charged <i class="fa fa-rupee"></i> 500.00. This request will take additional time. During this time I can manage my package in the In Review section.</span>
                                      </label>
                                    </div>
                                    <div class="form-group" id="advc_error_{{$confirm->id}}">
                                    </div>
                                    <a href="#" class="btn btn-cancel" data-pack="{{$confirm->id}}">Cancel Request</a>
                                    <button type="submit" data-pack="{{$confirm->id}}" class="btn btn-shoppre advc_confirm_btn">Submit Request</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="std_photos_{{$confirm->id}}" class="std_photo_container noshow">
                            <h3>Photos from: <strong><span>{{$confirm->seller}}</span> | <span>{{$confirm->reference}}</span></strong></h3>

                            <div class="owl-carousel owl-theme owl-ajax"></div>
                            @if($advc_photo_check == 'yes')
                                <a href="#" class="btn btn-advc" data-pack="{{$confirm->id}}">View Additional Photos</a>
                            @else
                                <p>Need Additional Photos?</p>
                                <a href="#" class="photo_nxt" data-type="advanced" data-pack="{{$confirm->id}}">Request Additional photos for <i class="fa fa-rupee"></i> 500.00</a>
                            @endif
                        </div>

                        @endif

                        <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                        <div class="ajaxloader"></div>
                    </div>


                    <div id="doc_modal_{{$confirm->id}}" class="modal_photo white-popup-block mfp-hide">
                        <a class="btn btn-close popup-modal-dismiss" href="#"><i class="fa fa-times"></i></a>
                        <div class="col-sm-12">
                            @if(empty($confirm->scanRequest))
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
                                <input type="hidden" name="doc_packid" value="{{$confirm->id}}">
                                <button type="submit" class="btn btn-shoppre">YES</button>
                            </form>
                            @else

                                @if($confirm->scanRequest->status == 'pending')

                                    <h3>Your scan document request under shoppre review.</h3>

                                @elseif($confirm->scanRequest->status == 'completed')

                                    <h3>Documents from: <strong><span>{{$confirm->seller}}</span> | <span>{{$confirm->reference}}</span></strong></h3>
                                    <div class="owl-carousel owl-noajax owl-theme">
                                    @php
                                        foreach($confirm->scans as $scan){
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

                    <h4>How to provide item values:</h4>
                    <p><strong>Option 1:</strong> Enter the values of each item. If the values are accepted, you will be able to ship right away. If the values are declined, a merchant invoice will be required.</p>
                    <p><strong>Option 2:</strong> Upload merchant invoice. Your package will be placed "In Review" untill the values are verified by ShoppRe.</p>
                    <table class="table table-bordered">
                        @if($confirm->status == 'values')
                        <form class="form-inline" method="post" action="{{route('customer.values.confirm')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="package_id" value="{{$confirm->id}}">
                        <tr>
                            <th>PACKAGE DETAILS</th>
                            <th>QTY</th>
                            <th>VALUE PER UNIT(INR)</th>
                            <th>TOTAL LINE VALUE(INR)</th>
                        </tr>
                        @php($i=0)
                        @foreach($confirm->items as $item)
                        <tr>
                            <td>{{$item->item}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>
                                <div class="input-group input-group-sm">
                                  <span class="input-group-addon value-icon"><i class="fa fa-rupee"></i></span>
                                  <input type="text" class="form-control price_calc" placeholder="Price" data-autocalc="{{$item->id}}" data-package_id="{{$confirm->id}}" name="values[{{$item->id}}]" required>
                                  <input type="hidden" id="autoqty_{{$item->id}}" name="quantity[{{$item->id}}]" value="{{$item->quantity}}">
                                </div>
                            </td>
                            <td><i class="fa fa-rupee"></i> <span id="autotal_{{$item->id}}" class="total_price">0.00</span></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">Total Weight : {{$confirm->weight}} Kg</td>
                            <td>Total Values Of This Package : <i class="fa fa-rupee"></i> <span id="grandcalc_{{$confirm->id}}">0.00</span></td>
                            <td style="width:100px"><button type="submit" class="btn btn-shoppre pull-right">Confirm Package</button></td>
                        </tr>
                        </form>
                        @endif

                        @if($confirm->status == 'invoice')
                        <tr>
                            <td colspan="4" class="text-center">
                                <form method="post" action="{{route('customer.invoice.upload')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="invoice" id="file-doc" class="inputfile inputfile-2">
                                <label for="file-doc" style="    margin: 0;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span>Upload Merchant Invoice</span>
                                </label>
                                <input type="hidden" name="package_id" value="{{$confirm->id}}">
                                <button type="submit" class="btn btn-shoppre pull-right">Confirm Package</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    </table>
                <hr>
                <p><strong></strong></p>
                <div class="clearfix"></div>
                </td>
            </tr>
        @endforeach
    </table>
    @else
        <div class="well">
            <p class="alert alert-danger text-center" role="alert">There are currently no packages that require action on your part.</p>
        </div>
    @endif
  </div>

  @endsection
