// AUTHOR APPROVED

$('#view_author_approved').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];

	var author		=	info['author'];

	var editor		=	info['editor'];


	// console.log(info);

	$(this).find('.view_author_approved_title').text(title);

	$(this).find('.view_author_approved_body').html(body);

	$(this).find('.view_author_approved_author').text(author);

	$(this).find('.view_author_approved_editor').text(editor);

});

$('#edit_author_approved').on('show.bs.modal', function(e) {


	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var title_id	=	$("#edit_author_approved_title");

	var body		=	info['body'];

	var body_id		=	'#edit_author_approved_body';

	// console.log(title);
	// console.log(title);

	title_id.val(title);

	add_summernote(body_id,body);

});