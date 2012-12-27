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
});