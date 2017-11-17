@extends('layout')

@section('title', ' - Refer A Friend')

@section('content')

	@include('partials._banner')

	<section class="dash_reffer">
      <div class="container">
        <h2>Refer A Friend</h2>
        <div class="content">
          <img src="{{asset('img/refferafriend.jpg')}}" width="100%">
          <div class="reffer_form">
            <form class="form-horizontal" method="post" id="reffer_friend">
            	{{csrf_field()}}
              	<h4>Enter your friend's email addresses in the fields below (you can send multiple invitations at once)</h4>
              	<div class="form-group">
	                <div class="col-sm-6">
	                <div id="appendInput">
	                	<div class="input-group">
		                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
		                    <input type="email" name="friend_email[]" class="form-control friend_email" placeholder="Email">
		                </div>
	                </div>
	                <a href="#" id="inputplus" class="btn btn-plus"><i class="fa fa-plus"></i> Add Another</a>
	                </div>
              	</div>
              <h4>Include a customized message in the email to your friends:</h4>
              <div class="form-group">
                <div class="col-sm-6">
                  <textarea class="form-control" name="message" rows="8" placeholder="Enter your message"></textarea>
                </div>
              </div>
              <p>Note: We will include your name on every invitation you send.</p>
              <div class="form-group">
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-shoppre">send invitation</button>
                </div>
              </div>
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
			$( "#reffer_friend" ).submit(function(e) {
			  	e.preventDefault();
			  	$('.success').html("");
			  	$('.failed').html("");
	        	var token = $('input[name=_token]').val();
	        	var message = $('textarea[name=message]').val();
	        	$(".friend_email").each(function() {
	        		var input = this;
	        		var email = input.value;
			      	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

			      	if (emailReg.test(email)){
			      		$(".ajaxloader").show();
			      		jQuery.ajax({
			                url: '/reffer-submit',
			                type : "POST",
			                data:{ _token:token, email:email, message:message},
			                error: function (request, status, error) {},
			                success: function(data) {

			                	if (data.error == 0){
			                		$(input).after('<span class="success">Success! Email Send.</span>');
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
