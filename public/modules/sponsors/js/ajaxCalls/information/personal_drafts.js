$(document).ready(function() {

	$('#edit_personal_drafts_submit').on('click',function(e){

		e.preventDefault();

		var edit_type		=	'edit_personal_drafts';

		var url				=	"/api/board/sponsors/information/update";

		var id_field		=	$('#edit_personal_drafts_id');

		var title_field		=	$('#edit_personal_drafts_title');

		var body_field		=	$('#edit_personal_drafts_body');

		var author_approved = 	$("#author_approved").prop("checked") ? 1 : 0;

		var CSRF_TOKEN 		= 	$('meta[name="csrf-token"]').attr('content');


		$.ajax({
			url: url,
			method: 'post',
			data: {
				_token: CSRF_TOKEN,
				type: edit_type,
				id: id_field.val(),
				title: title_field.val(),
				body: body_field.val(),
				author_approved:author_approved
			},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				//console.log(Resp);
			},
			success: function(data){
				console.log(data);

				$.each(data.errors, function(key, value){
					$('#modal_update_fail').show();
					// @todo: Alerts don't show up
					$('#modal_update_fail_alert').append('<p class="remove-alert">'+value+'</p>');
					$('#modal_update_fail').delay( 5000 ).fadeOut( 'slow' );
				});

				$.each(data.success, function(key, value){
					$('#modal_update_success').show();
					$('#modal_update_success_alert').append('<p class="remove-alert">'+value+'</p>');
					$('#modal_update_success').delay( 5000 ).fadeOut( 'slow' );
				});
			}});
		$( ".remove-alert" ).remove();
	});


});