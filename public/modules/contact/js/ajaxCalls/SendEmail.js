$(document).ready(function() {

	$('#contact_form').on('submit',function(e){

		e.preventDefault();

	//	#contact_name (input[text])
	//	#contact_email (input[text])
	//	#contact_subject (select[option])
	//	#contact_question (textarea)

		var url					=	'http://a4dbredaoost.ddns.net/api/contact/email';

		var contact_name		=	$('#contact_name').val();

		var contact_email		=	$('#contact_email').val();

		var contact_subject		=	$('#contact_subject').val();

		var contact_question	=	$('#contact_question').val();


		var CSRF_TOKEN 			= 	$('meta[name="csrf-token"]').attr('content');


		// console.log(contact_name);

		$.ajax({
			type:"POST",
			url:url,
			data: {_token: CSRF_TOKEN,
					contact_name:contact_name,
					contact_email:contact_email,
					contact_subject:contact_subject,
					contact_question:contact_question
			},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				console.log(Resp);
			},
			success: function(data){

				console.log('Dit is de data :', data);


				// jQuery.each(data.errors, function(key, value){
				// 	jQuery('.alert-danger').show();
				// 	jQuery('.alert-danger').append('<p class="remove-alert">'+value+'</p>');
				//
				// 	$(".contact_form").delay( 5000 ).fadeOut("slow", function() {
				// 		$('.remove-alert').remove();
				// 	});
				// });


				jQuery.each(data.success, function(key, value){
					// jQuery('.alert-success').show();
					jQuery('.alert-success').fadeIn( 'slow' );
					jQuery('.alert-success').append('<p class="remove-alert">'+value+'</p>');

					$(".contact_form").delay( 5000 ).fadeOut("slow", function() {
						$('.remove-alert').remove();
					});
					document.getElementById("contact_form").reset();

				});
			},
			// error: function (data){
			// 		console.log('Error:', data);
			//
			//
			// 		jQuery.each(data.errors, function(key, value){
			// 			jQuery('.alert-danger').show();
			// 			jQuery('.alert-danger').append('<p class="remove-alert">'+value+'</p>');
			//
			// 			$(".contact_form").delay( 5000 ).fadeOut("slow", function() {
			// 				$('.remove-alert').remove();
			// 			});
			// 		});
			//
			//
			// 	}
			error: function (jqXHR, status, error) {
				console.log(jqXHR);
				console.log(status);
				console.log(error);
			}
		});


	});


});