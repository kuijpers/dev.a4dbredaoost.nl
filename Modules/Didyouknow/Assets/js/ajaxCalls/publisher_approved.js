$(document).ready(function() {

	$('#edit_publisher_approved_submit').on('click',function(e){

		e.preventDefault();

		var edit_type				=	'edit_publisher_approved';

		var url						=	"/api/board/dyk/information/update";

		var id_field				=	$('#edit_publisher_approved_id');

		var publish_approved	=	$('#publish_approved').prop("checked") ? 1 : 0;

		var CSRF_TOKEN 			= 	$('meta[name="csrf-token"]').attr('content');

		console.log(id_field);

		$.ajax({
			url: url,
			method: 'post',
			data: {
				_token: CSRF_TOKEN,
				type: edit_type,
				id: id_field.val(),
				publisher_approved: publish_approved

			},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				console.log(Resp);
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

					$('#modal_update_success').delay( 5000 ).modal('hide');
				});
			}
		});
		$( ".remove-alert" ).remove();

	});

	// HELPER SECTION !!!


	/*
	 *	DISABLED TOGGLE
	 *
	 *	When opening modal the save button is shown disabled
	 *  When the publish approval is changed to not publish the save button will change to enabled
	 *  and vice versa
	 *
	 */
	$('input#publish_approved').bootstrapSwitch();

	$('input#publish_approved').on('switchChange.bootstrapSwitch', function () {


		if ($('input#publish_approved').bootstrapSwitch('state')) {

			console.log('DISABLED');

			$('#edit_publisher_approved_submit').prop("disabled", false);
			$('#edit_publisher_approved_submit').attr("disabled", true);
		} else {

			console.log('ENABLED');

			$('#edit_publisher_approved_submit').prop("disabled", true);
			$('#edit_publisher_approved_submit').removeAttr("disabled");

		}
	});
	/*
	 *	END OF DISABLED TOGGLE
	 */

});


$('#edit_publisher_approved').on('hidden.bs.modal', function () {
	location.reload();
});