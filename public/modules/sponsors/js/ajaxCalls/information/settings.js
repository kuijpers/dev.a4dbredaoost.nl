// #settings_title_switch

// #settings_info_switch

$(document).ready(function() {


	$('#settings_title_switch').bootstrapSwitch();

	$('#settings_title_switch').on('switchChange.bootstrapSwitch', function () {

		var title_setting = 0;

		var body_setting = 0;

		if ($('#settings_title_switch').bootstrapSwitch('state')) {

			title_setting = 1; // show title ON

			body_setting = 1;

			// console.log(title_setting , body_setting);

			// console.log('ENABLED');

		} else {

			title_setting = 0; // show title OFF

			body_setting = $('#settings_info_switch').prop("checked") ? 1 : 0;

			// console.log(title_setting , body_setting);

			// console.log('DISABLED');

		}

		change_settings(title_setting , body_setting);

	});


	$('#settings_info_switch').bootstrapSwitch();

	$('#settings_info_switch').on('switchChange.bootstrapSwitch', function () {

		var title_setting = 0;

		var body_setting = 0;

		if ($('#settings_info_switch').bootstrapSwitch('state')) {

			body_setting = 1; // show title ON

			title_setting = $('#settings_title_switch').prop("checked") ? 1 : 0;

			// console.log(title_setting , body_setting);

			// console.log('ENABLED');

		} else {

			body_setting = 0; // show title OFF

			title_setting = 0;

			// console.log(title_setting , body_setting);

			// console.log('DISABLED');

		}

		change_settings(title_setting , body_setting);

	});



	function change_settings(title_setting , body_setting){

		console.log('change settings ->' + title_setting , body_setting);

	//	 Make AJAX call

		var url						=	"/api/board/sponsors/information/settings";

		var CSRF_TOKEN 			= 	$('meta[name="csrf-token"]').attr('content');

		$.ajax({
			url: url,
			method: 'post',
			data: {
				_token: CSRF_TOKEN,
				title_setting:title_setting,
				body_setting:body_setting
			},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				// console.log(Resp);
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
		location.reload();

	}




});