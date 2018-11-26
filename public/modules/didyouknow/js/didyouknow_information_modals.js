/**
 *  @todo : fix functions for ajax calls to get data from DB. To many of the same requests
 */
	// NEW article

	$('#new_article').summernote({
		height: 200,                 // set editor height
		minHeight: null,             // set minimum height of editor
		maxHeight: null,             // set maximum height of editor
		focus: true,                 // set focus to editable area after initializing summernote
		dialogsInBody: true,
		placeholder: 'Write text here.......',

		codemirror: {
			theme: 'hopscotch',
			mode: 'htmlmixed',
			lineWrapping: true,
			scrollbarStyle: "simple"
		},

		toolbar: [
			// [groupName, [list of button]]
			['style', ['bold', 'italic', 'underline', 'clear']],
			['font', ['strikethrough', 'superscript', 'subscript']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']]
		],

		lineHeight: 1
	});


	// VIEW files

	$('#view_personal_drafts').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_personal_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_personal_body').text($body);

	});



	$('#view_author_drafts').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_author_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_author_body').text($body);

	});



	$('#view_author_approved').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_author_approved_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_author_approved_body').text($body);

		$author = $(e.relatedTarget).attr('data-author');
		$(this).find('.view_author_approved_author').text($author);

	});



	$('#view_editor_approved').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_editor_approved_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_editor_approved_body').text($body);

		$author = $(e.relatedTarget).attr('data-author');
		$(this).find('.view_editor_approved_author').text($author);

		$editor = $(e.relatedTarget).attr('data-editor');
		$(this).find('.view_editor_approved_editor').text($editor);

	});



	$('#view_publisher_approved').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_publisher_approved_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_publisher_approved_body').text($body);

		$author = $(e.relatedTarget).attr('data-author');
		$(this).find('.view_publisher_approved_author').text($author);

		$editor = $(e.relatedTarget).attr('data-editor');
		$(this).find('.view_publisher_approved_editor').text($editor);

		$publisher = $(e.relatedTarget).attr('data-publisher');
		$(this).find('.view_publisher_approved_publisher').text($publisher);

		$start = $(e.relatedTarget).attr('data-start');
		$(this).find('.view_publisher_approved_start').text($start);

		$end = $(e.relatedTarget).attr('data-end');
		$(this).find('.view_publisher_approved_end').text($end);

	});



	$('#view_archive').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_archived_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_archived_body').text($body);

		$author = $(e.relatedTarget).attr('data-author');
		$(this).find('.view_archived_author').text($author);

		$editor = $(e.relatedTarget).attr('data-editor');
		$(this).find('.view_archived_editor').text($editor);

		$publisher = $(e.relatedTarget).attr('data-publisher');
		$(this).find('.view_archived_publisher').text($publisher);

		$start = $(e.relatedTarget).attr('data-start');
		$(this).find('.view_archived_start').text($start);

		$end = $(e.relatedTarget).attr('data-end');
		$(this).find('.view_archived_end').text($end);

	});

// EDIT files

	$('#edit_personal_drafts').on('show.bs.modal', function(e) {

			// console.log($(e.relatedTarget).data('id'));

	// Set all variables

		// Get ID from button / link

		var id = $(e.relatedTarget).data('id');

			// For testing comment out above and comment in below

		// var id = 122;

		// Set url to use
			var url= "/api/board/information/"+ id +"/edit";

		// Get Token
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


			// Show content of variable
			// console.log(url);

		// Show content of variable
		// console.log(id);

		// Clear out summernote field
		// $('.summernote').summernote();
		// $('.summernote').summernote('reset');
		// $('.summernote').summernote('destroy');


		$.ajax({
			type: "POST",
			url: url,
			data: {
				_token: CSRF_TOKEN,
				id: id
				},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				 // console.log(Resp);
			},
			success: function(data){
				// If message returns negative then we need to close the modal and set a danger alert
				jQuery.each(data.errors, function(key, value){
					$('#edit_personal_drafts').modal('hide');
					jQuery('.alert-danger').show();
					jQuery('.alert-danger').append('<p class="remove-alert">'+value+'</p>'); /** @todo Make sure that the alert will have a language variable !! Returned value is: id_not_found .**/
					$('.tosti').delay( 5000 ).fadeOut( 'slow' );
				});

				// If message returns with data then we can add the data to the correct fields
				jQuery.each(data.success, function(key, value) {

					var title_id	=	$("#title");

					var title		=	value['title'];

					var body		=	value['body'];

					// console.log(title);

					title_id.val(title);

					add_summernote(body);


				});
			}
		});

		$( ".remove-alert" ).remove();

	});


	$('#edit_author_approved').on('show.bs.modal', function(e) {

		 // console.log($(e.relatedTarget).data('id'));

		// Set all variables

		// Get ID from button / link

		var id = $(e.relatedTarget).data('id');

		// For testing comment out above and comment in below

		// var id = 122;

		// Set url to use
		var url= "/api/board/information/"+ id +"/edit";

		// Get Token
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


		// Show content of variable
		// console.log(id);

		// Clear out summernote field
		// $('.summernote').summernote();
		// $('.summernote').summernote('reset');
		// $('.summernote').summernote('destroy');

		$.ajax({
			type: "POST",
			url: url,
			data: {
				_token: CSRF_TOKEN,
				id: id
			},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				// console.log(Resp);
			},
			success: function(data){
				// If message returns negative then we need to close the modal and set a danger alert
				jQuery.each(data.errors, function(key, value){
					$('#edit_author_approved').modal('hide');
					jQuery('.alert-danger').show();
					jQuery('.alert-danger').append('<p class="remove-alert">'+value+'</p>'); /** @todo Make sure that the alert will have a language variable !! Returned value is: id_not_found .**/
					$('.tosti').delay( 5000 ).fadeOut( 'slow' );
				});

				// If message returns with data then we can add the data to the correct fields
				jQuery.each(data.success, function(key, value) {

					var title_id	=	$("#title");

					var title		=	value['title'];

					var body		=	value['body'];

					console.log(body);

					title_id.val(title);

					add_summernote(body);

				});
			}
		});

		$( ".remove-alert" ).remove();

	});



	$( "#edit_editor_approved" ).on('shown.bs.modal', function(e){


		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.edit_editor_approved_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.edit_editor_approved_body').text($body);

		add_time_pickers();

		add_summernote();

		checkbox_set_show_publish_dates();

		show_publish_dates();

		checkbox_set_show_timepickers_div();

		show_timepickers_div();

	});



	$('#edit_publisher_approved').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.edit_publisher_approved_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.edit_publisher_approved_body').text($body);

		$start = $(e.relatedTarget).attr('data-start');
		$(this).find('.edit_publisher_approved_start').text($start);

		$end = $(e.relatedTarget).attr('data-end');
		$(this).find('.edit_publisher_approved_end').text($end);

	});



	$('#edit_archive').on('show.bs.modal', function(e) {


		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.edit_archive_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.edit_archive_body').text($body);


	});

	// DELETE / DESTROY files

	$('#delete_article').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.modal-title').text($title);



		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});


	$('#destroy_article').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.modal-title').text($title);



		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});

	// REQUIRED FUNCTIONS

	function add_summernote(body){

			// console.log(body);

			$(document).ready(function() {
				// Clear out summernote field
				$('.summernote').summernote();
				$('.summernote').summernote('reset');
				$('.summernote').summernote('destroy');


			$('.summernote').summernote({
				height: 200,                 // set editor height
				minHeight: 200,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: true,                 // set focus to editable area after initializing summernote
				dialogsInBody: true,

				codemirror: {
					theme: 'hopscotch',
					mode: 'htmlmixed',
					lineWrapping: true,
					scrollbarStyle: "simple"
				},

				toolbar: [
					// [groupName, [list of button]]
					['style', ['bold', 'italic', 'underline', 'clear']],
					['font', ['strikethrough', 'superscript', 'subscript']],
					['fontsize', ['fontsize']],
					['color', ['color']],
					['para', ['ul', 'ol', 'paragraph']],
					['height', ['height']]
				]
			});

				console.log(body);

				$('.summernote').summernote('lineHeight', 1);
				$('.summernote').summernote('code', body);
		});
	}

/** @todo : make it more flexible by adding variables to the reqquest function **/

	function show_publish_dates(){

		$('input#edit_editor_approved_approve_publish').bootstrapSwitch();

		$('input#edit_editor_approved_approve_publish').on('switchChange.bootstrapSwitch', function () {

			var hidden = $("#edit_editor_approved_approve_period_block");

			// @todo on state switch reset the state of next switch to unchecked

			if ($('input#edit_editor_approved_approve_publish').bootstrapSwitch('state')) {
				hidden.fadeIn("slow");
			} else {
				hidden.fadeOut("slow");
			}
		});

	}

/** @todo : make it more flexible by adding variables to the reqquest function **/

	function show_timepickers_div(){

		$('input#edit_editor_approved_approve_select_period').bootstrapSwitch();

		$('input#edit_editor_approved_approve_select_period').on('switchChange.bootstrapSwitch', function () {

			var period 	= $("#edit_editor_approved_approve_period_period");
			var forever = $("#edit_editor_approved_approve_period_forever");

			// @todo clear timepickers on change

			if ($('input#edit_editor_approved_approve_select_period').bootstrapSwitch('state')) {
				period.fadeIn("slow");
				forever.fadeOut("slow");
			} else {
				period.fadeOut("slow");
				forever.fadeIn("slow");
			}
		});

	}

/** @todo : make it more flexible by adding variables to the reqquest function **/

	function add_time_pickers(){

		$(function () {
			$('#datetimepicker1').datetimepicker({
				locale: 'nl'
			});
		});

/** @todo : make it more flexible by adding variables to the reqquest function **/
		$(function () {
			$('#datetimepicker6').datetimepicker();
			$('#datetimepicker7').datetimepicker({
				useCurrent: false //Important! See issue #1075
			});
			$("#datetimepicker6").on("dp.change", function (e) {
				$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
			});
			$("#datetimepicker7").on("dp.change", function (e) {
				$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
			});
		});
	}

/** @todo : make it more flexible by adding variables to the reqquest function **/

	function checkbox_set_show_publish_dates(){

		$(function() {


			// Get the form fields and hidden div
			var checkbox = $("#edit_editor_approved_approve_publish");
			var period_block = $("#edit_editor_approved_approve_period_block");

			// Hide the fields.
			// Use JS to do this in case the user doesn't have JS
			// enabled.
			period_block.hide();

			// Setup an event listener for when the state of the
			// checkbox changes.
			checkbox.change(function() {
				// Check to see if the checkbox is checked.
				// If it is, show the fields and populate the input.
				// If not, hide the fields.
				if (checkbox.is(':checked')) {
					// Show the hidden fields.
					period_block.show();
				} else {
					// Make sure that the hidden fields are indeed
					// hidden.
					period_block.hide();
				}
			});
		});
	}

/** @todo : make it more flexible by adding variables to the reqquest function **/

	function checkbox_set_show_timepickers_div(){

		$(function() {


			// Get the form fields and hidden div
			var checkbox = $("#edit_editor_approved_approve_select_period");
			var period = $("#edit_editor_approved_approve_period_period");
			var forever = $("#edit_editor_approved_approve_period_forever");

			// Hide the fields.
			// Use JS to do this in case the user doesn't have JS
			// enabled.
			period.hide();
			forever.show();


			// Setup an event listener for when the state of the
			// checkbox changes.
			checkbox.change(function() {
				// Check to see if the checkbox is checked.
				// If it is, show the fields and populate the input.
				// If not, hide the fields.
				if (checkbox.is(':checked')) {
					// Show the hidden fields.
					period.show();
					forever.hide();
				} else {
					// Make sure that the hidden fields are indeed
					// hidden.
					period.hide();
					forever.show();
				}
			});
		});

	}