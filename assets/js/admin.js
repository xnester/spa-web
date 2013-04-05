(function() {
	var bar = $('.bar');
	var percent = $('.percent');
	var status = $('#status');
	
	$('form#gallery_upload').ajaxForm({
		beforeSend: function() {
	        status.empty();
	        var percentVal = '0%';
	        bar.width(percentVal)
	        percent.html(percentVal);
	    },
	    uploadProgress: function(event, position, total, percentComplete) {
	        var percentVal = percentComplete + '%';
	        bar.width(percentVal)
	        percent.html(percentVal);
			//console.log(percentVal, position, total);
	    },
		complete: function(xhr) {
			status.html(xhr.responseText);
			
			/*
			$('#btn_upload').addClass('disabled');
			$('#btn_upload').attr("disabled", "disabled");
			*/
			var $out = $('#results');
            $out.html('Your results:');
            data = JSON.parse(xhr.responseText);
			
				
	            //alert(data.length);
	            var num=0;
	            for (num = 0; num < data.length; num++)
	            {
	            	if(data.code != 1)
	            	{
	            		$out.append('<div><pre>'+ data[num].upload_data.file_name +'</pre></div>');
	            	}else {
	    				$out.append('<div><pre>'+ data.error +'</pre></div>');
	    			}
	            }
			
		}

	}); 
	
})();