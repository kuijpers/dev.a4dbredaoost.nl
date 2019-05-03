$(document).ready(function() {


	// $('#edit_editor_approved_submit').on('click',function(e){
	//
	// 	e.preventDefault();
	//
	// 	var edit_type			=	'edit_author_approved';
	//
	// 	var url					=	"/api/board/sponsors/information/update";
	//
	// 	var id_field			=	$('#edit_editor_approved_id');
	//
	// 	var title_field			=	$('#edit_editor_approved_title');
	//
	// 	var body_field			=	$('#edit_editor_approved_body');
	//
	// 	var publisher_approve 	= 	$("#approve_to_publish").prop("checked") ? 1 : 0;
	//
	// 	var select_period;
	//
	// 	var publish_date_start;
	//
	// 	var publish_date_end;
	//
	// 	if(publisher_approve === 1){
	//
	// 		select_period = 	$("#approve_select_period").prop("checked") ? 1 : 0;
	//
	// 		if(select_period === 0){
	// 			publish_date_start = $("#approve_forever").find("input").val();
	// 			publish_date_end	=	'';
	// 		}else{
	// 			publish_date_start = $("#approve_from").find("input").val();
	// 			publish_date_end = $("#approve_till").find("input").val();
	// 		}
	//
	// 	}else{
	// 		publish_date_start	=	'';
	// 		publish_date_end	=	'';
	//
	// 		select_period 		=	0;
	// 	}
	//
	// 	var CSRF_TOKEN 			= 	$('meta[name="csrf-token"]').attr('content');
	//
	// 	// console.log(publish_date_start , '<->' , publish_date_end);
	// 	console.log(select_period);
	//
	//
	// 	$.ajax({
	// 		url: url,
	// 		method: 'post',
	// 		data: {
	// 			_token: CSRF_TOKEN,
	// 			type: 'edit_editor_approved',
	// 			id: id_field.val(),
	// 			title: title_field.val(),
	// 			body: body_field.val(),
	// 			publisher_approved: publisher_approve,
	// 			select_period: select_period,
	// 			publish_date_start: publish_date_start,
	// 			publish_date_end: publish_date_end
	//
	// 		},
	// 		dataType: 'JSON',
	// 		complete: function(data) {
	// 			var Resp = data.responseText;
	// 			console.log(Resp);
	// 		},
	// 		success: function(data){
	// 			console.log(data);
	//
	// 			$.each(data.errors, function(key, value){
	// 				$('#modal_update_fail').show();
	// 				// @todo: Alerts don't show up
	// 				$('#modal_update_fail_alert').append('<p class="remove-alert">'+value+'</p>');
	// 				$('#modal_update_fail').delay( 5000 ).fadeOut( 'slow' );
	// 			});
	//
	// 			$.each(data.success, function(key, value){
	// 				$('#modal_update_success').show();
	// 				$('#modal_update_success_alert').append('<p class="remove-alert">'+value+'</p>');
	// 				$('#modal_update_success').delay( 5000 ).fadeOut( 'slow' );
	// 			});
	// 		}});
	// 	$( ".remove-alert" ).remove();
	// });





});