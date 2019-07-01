$(document).ready( function() {
	$('#new_sponsor_form').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#new_draft_logo").val(label);
	});

	$('#edit_personal_drafts').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#edit_personal_drafts_logo").val(label);
	});

});