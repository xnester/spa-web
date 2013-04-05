$(document).ready(function() {
	$('#login').live('click', function(){ 
		var user=$('#user').val();
		var passwd=$('#passwd').val();
		if(user=='' || passwd=='')
		{
			   $('#login_alert').html('<div id="login_alert_show" class="alert">'+
				'<button type="button" class="close" data-dismiss="alert">×</button>'+
				'<strong>Warning!</strong> Best check yo self, you\'re not looking too good.'+
				'</div>').fadeIn("fast");
			   $('#login_alert_show').fadeOut(10000,"linear");
		}else{
			$.post('./login/process',{'user':user,'passwd':passwd},function(result) { 				
				if (!result) {
				$('#login_alert').html('<div id="login_alert_check" class="alert alert-error">'+
				'<button type="button" class="close" data-dismiss="alert">×</button>'+
				'<strong>Oh snap!</strong> Change a few things up and try submitting again.'+
				'</div>').fadeIn("fast");
				$('#login_alert_check').fadeOut(10000,"linear");
				}else{$(location).attr('href','./home');}
			});
		}
	});
	
	


	
	/* Contact us*/
	$("#phone").mask("999-999-9999");
	
	$("#form_contact").validate({
		onkeyup: false,
		submitHandler: function() {
			//$("div.error").hide();
			//alert("submit! use link below to go to the other step"); 
			var name = $('#name').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var title = $('#title').val();
			var detail = $('#detail').val();
			
			$.post('./contact/addComment',{ 'name': name, 'email': email, 'phone': phone, 'title': title, 'detail': detail },
					function(result){
						data = JSON.parse(result);
						if(data.code == '1'){
							//alert(data.success);
							$('#myModal').find('.modal-body').text(data.success);
						    
							$("input[type=text], textarea, input[type=email]").val("");
						} else {
							//alert(data.error);
							$('#myModal').find('.modal-body').text(data.error);
						}
						$('#myModal').modal({ keyboard: true,backdrop: true })
					 	//$('#upload_alert').html('<div id="upload_error" class="alert alert-error">'+data.error+'</div>');
					}
			);
		},
	messages: {
			title:"*",
			detail:"*"
		}
		
	});
	
	
});