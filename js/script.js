$(document).ready(function(){
	$("#siteform").validate({
		submitHandler : function(e) {
		    $('#url_getter').button('loading');
			site_url= $('#site_url').val();
	        $.ajax({
	            url: 'ajax.php',
	            method: 'post',
	            data: { site_url: site_url },
	            success: function (data) {
	            	$('#url_getter').button('reset');
	                if(data){
	                	$('#site').contents().find("body").html( data);
	                } else {
	                	alert('Something went wrong please try again');
	                }
	                
	            },
	            cache: false
	        });
		},
		rules : {
			site_url : {
				required : true,
				url: true
			}	
		},
		messages : {
			site_url : {
				required : "Please enter your site address",
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('.form-group').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success : function(element, lab) {
			var messages = new Array("That's Great!", "Looks good!", "You got it!", "Great Job!", "Smart!", "That's it!");
			var num = Math.floor(Math.random() * 6);
			$(lab).closest('.form-group').find('.help-block').text(messages[num]);
			$(lab).addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
		}
	});
	
	
});