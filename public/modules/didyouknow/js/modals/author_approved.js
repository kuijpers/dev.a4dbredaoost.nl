$('#view_author_approved').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.view_author_approved_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.view_author_approved_body').text($body);

	$author = $(e.relatedTarget).attr('data-author');
	$(this).find('.view_author_approved_author').text($author);

});


$('#edit_author_approved').on('show.bs.modal', function(e) {


	$(this).find('#author_approved_title').attr('value', $(e.relatedTarget).data('title'));

	$body = $(e.relatedTarget).attr('data-body');;
	$(this).find('#author_approved_body').text($body)

	$(document).ready(function() {
		$('#author_approved_body').summernote({
			height: 200,                 // set editor height
			minHeight: null,             // set minimum height of editor
			maxHeight: null,             // set maximum height of editor
			focus: true,                 // set focus to editable area after initializing summernote

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
	});


	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

