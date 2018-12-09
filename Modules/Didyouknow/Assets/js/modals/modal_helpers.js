// REQUIRED FUNCTIONS

function add_summernote(body_id,body){

	console.log(body_id,'->',body);

	$(document).ready(function() {
		// Clear out summernote field
		$(body_id).summernote();
		$(body_id).summernote('reset');
		$(body_id).summernote('destroy');


		$(body_id).summernote({
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

		console.log(body_id,'->',body);
		// console.log($('.summernote'));

		$(body_id).summernote('lineHeight', 1);
		$(body_id).summernote('code', body);
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