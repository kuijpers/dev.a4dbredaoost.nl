$(document).ready(function() {

	$('#edit_archive_submit').on('click',function(e){

		e.preventDefault();

		var url						=	"/api/board/information/restore";

		var id_field				=	$('#edit_archived_id');

		var roll_back				=	$('#edit_archive_roll_back').prop("checked") ? 1 : 0;

		var CSRF_TOKEN 				= 	$('meta[name="csrf-token"]').attr('content');

		console.log(id_field);

		$.ajax({
			url: url,
			method: 'post',
			data: {
				_token: CSRF_TOKEN,
				id: id_field.val(),
				roll_back: roll_back

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
$('input#edit_archive_roll_back').bootstrapSwitch();

$('input#edit_archive_roll_back').on('switchChange.bootstrapSwitch', function () {


	if ($('input#edit_archive_roll_back').bootstrapSwitch('state')) {

		console.log('ENABLED');

		$('#edit_archive_submit').prop("disabled", true);
		$('#edit_archive_submit').removeAttr("disabled");

	} else {

		console.log('DISABLED');

		$('#edit_archive_submit').prop("disabled", false);
		$('#edit_archive_submit').attr("disabled", true);

	}
});
/*
 *	END OF DISABLED TOGGLE
 */


$('#edit_archive').on('hidden.bs.modal', function () {
	location.reload();
});