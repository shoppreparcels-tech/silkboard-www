@extends('myaccount.layout')

@section('title', 'Refer A Friend - ShoppRe.com')

@section('content')

	<section class="dash_reffer">
      <div class="container">
        <h2>Refer A Friend - Get *Free International Shipping on Your Next Shipment.</h2>
        <div class="content">
          <img src="{{asset('img/images/refer-now-and-earn-india.png')}}" width="100%">
          <div class="reffer_form">
            <form class="form-horizontal" method="post" id="reffer_friend">
            	{{csrf_field()}}
				<h4>Invite people to <strong>ShoppRe.com </strong> by Sharing your Personal Referral Link:</h4>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-link"></i></div>
					<input type="text" class="form-control friend_email" id="txt_referrer_url"
						   value="{{env("PREFIX").'www.'.env("DOMAIN").'/customer/register?r='. base64_encode(Auth::user()->id)}}">
				</div>
              	<h4>Enter your Friend's & Followers's Email Address in the fields below (you can send multiple invitations at once)</h4>
              	<div class="form-group">
	                <div class="col-sm-6">
	                <div id="appendInput">
	                	<div class="input-group">
		                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
		                    <input type="email" name="friend_email[]" class="form-control friend_email" placeholder="Enter Your Friend's/Family Member Email Id">
		                </div>
	                </div>
	                <a href="#" id="inputplus" class="btn btn-plus"><i class="fa fa-plus"></i> Add Another</a>
	                </div>
              	</div>
              <h4>Include a customized message in the Email:</h4>
              <div class="form-group">
                <div class="col-sm-6">
                  <textarea class="form-control" name="message" rows="8" placeholder="Enter Your Message (Optional)"></textarea>
                </div>
              </div>
              {{--<p>Note: We will include your name on every invitation you send & also containing a unique referral code, sent by ShoppRe on your behalf.</p>--}}
              <div class="form-group">
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-shoppre">send invitation</button>
                </div>
              </div>
				<h4>Note:</h4>
				<ul>
					<li>We will include your name on every invitation you send</li>
					<li>A unique referral code, is sent by ShoppRe on your behalf</li>
					<li>Your earnings through referral will be credited to your ShoppRe Wallet</li>
					<li>How ShoppRe Loyalty Points Works? - <a href="/loyalty-points">Click Here</a></li>
				</ul>
				<p>For any queries contact us at <a href="tel:+91-8277919191">+91-8277919191</a> or Live <a href="https://tawk.to/chat/58dab24ff97dd14875f5a8a9/default" target="_blank">Chat With Us</a></p>
            </form>
            <div class="clearfix"></div>
            <div class="ajaxloader"></div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js_script')
	<script type="text/javascript">
		$("#inputplus").click(function(e) {
			e.preventDefault();
			$("#appendInput").append('<div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope"></i></div><input type="email" name="friend_email[]" class="form-control friend_email" placeholder="Email"></div>');
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$( "#reffer_friend").submit(function(e) {
			  	e.preventDefault();
			  	$('.success').html("");
			  	$('.failed').html("");
	        	var token = $('input[name=_token]').val();
	        	var message = $('textarea[name=message]').val();
	        	var referrer_url = $('#txt_referrer_url').val();

	        	$(".friend_email").each(function(){
	        		var input = this;
	        		var email = input.value;
			      	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

			      	if (emailReg.test(email)){
			      		$(".ajaxloader").show();
			      		jQuery.ajax({
			                url: '/reffer-submit',
			                type : "POST",
			                data:{ _token:token, email:email, message:message,referrer_url:referrer_url},
			                error: function (request, status, error) {},
			                success: function(data) {

			                	if (data.error == 0){
			                		$(input).after('<span class="success">Success! Email Sent.</span>');
			                		$(input).val("");
			                	}else{
			                		$(input).after('<span class="failed">Failed! '+data.msg+'.</span>');
			                	}
			                	$(".ajaxloader").hide();
			                }
			            });
			      	}
				});
				$('textarea[name=message]').val("");
	            return false;
			});


		});
	</script>
@endsection
