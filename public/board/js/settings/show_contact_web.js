$(document).ready(function() {

// Show email on website
	$('#show_email').bootstrapSwitch();

	$('#show_email').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_email';

		if ($('#show_email').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});

// Show secundary email on website
	$('#show_sec_email').bootstrapSwitch();

	$('#show_sec_email').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_sec_email';

		if ($('#show_sec_email').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});

// Show address on website
	$('#show_address').bootstrapSwitch();

	$('#show_address').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_address';

		if ($('#show_address').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});


// Show phone on website
	$('#show_phone').bootstrapSwitch();

	$('#show_phone').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_phone';

		if ($('#show_phone').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});


// Show wallet on website
	$('#show_wallet').bootstrapSwitch();

	$('#show_wallet').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_wallet';

		if ($('#show_wallet').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});


// Show dob on website
	$('#show_dob').bootstrapSwitch();

	$('#show_dob').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_dob';

		if ($('#show_dob').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});


// Show profile image on website
	$('#show_img').bootstrapSwitch();

	$('#show_img').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_img';

		if ($('#show_img').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});


// Show profile image on website
	$('#show_about_me').bootstrapSwitch();

	$('#show_about_me').on('switchChange.bootstrapSwitch', function () {

		var column_name	=	'show_about_me';

		if ($('#show_about_me').bootstrapSwitch('state')) {

			change_settings(1 , column_name);

			// console.log('ENABLED');

		} else {

			change_settings(0 , column_name);

			// console.log('DISABLED');

		}

	});



	function change_settings(value , column){

		// console.log('change settings ->' + value , column);

		//	 Make AJAX call

		var url						=	"/api/board/member/settings/show-web";

		var CSRF_TOKEN 			= 	$('meta[name="csrf-token"]').attr('content');

		console.log(value , column , url , CSRF_TOKEN)

		$.ajax({
			url: url,
			method: 'post',
			data: {
				_token: CSRF_TOKEN,
				value:value,
				column:column
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
		// location.reload();

	}




});