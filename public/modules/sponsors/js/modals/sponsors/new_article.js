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
		['height', ['height']],
		['misc', ['fullscreen', 'undo', 'redo']]
	],

	lineHeight: 1
});

$(document).ready( function() {
	$('#new_sponsor_form').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#new_draft_logo").val(label);
	});

});