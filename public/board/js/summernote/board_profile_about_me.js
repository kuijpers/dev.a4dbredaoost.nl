$(document).ready(function() {


	var body_id		=	'#about_me';

	var body		=	 $.trim($(body_id).val());


	console.log(body_id,'->',body);

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
			['height', ['height']],
			['insert', ['link']],
			['misc', ['fullscreen']]
		]
	});

	console.log(body_id,'->',body);
	// console.log($('.summernote'));

	$(body_id).summernote('lineHeight', 1);
	$(body_id).summernote('code', body);

});