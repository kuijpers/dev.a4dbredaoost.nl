	$('#view_personal_drafts').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.view_personal_title').text($title);

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('.view_personal_body').text($body);

	});





	$('#edit_personal_drafts').on('show.bs.modal', function(e) {


		$(this).find('#personal_title').attr('value', $(e.relatedTarget).data('title'));

		$body = $(e.relatedTarget).attr('data-body');
		$(this).find('#personal_body').text($body);

		add_summernote();

	});

	function add_summernote(){
		$(document).ready(function() {
			$('#personal_body').summernote({
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
	}


