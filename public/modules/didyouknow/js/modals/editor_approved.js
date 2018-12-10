// EDITOR APPROVED

$('#view_editor_approved').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];

	var author		=	info['author'];

	var editor		=	info['editor'];

	var publisher	=	info['publisher'];


	// console.log(info);

	$(this).find('.view_editor_approved_title').text(title);

	$(this).find('.view_editor_approved_body').html(body);

	$(this).find('.view_editor_approved_author').text(author);

	$(this).find('.view_editor_approved_editor').text(editor);

	$(this).find('.view_editor_approved_publisher').text(publisher);

});

$( "#edit_editor_approved" ).on('shown.bs.modal', function(e){

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var article		=	info['id'];

	var article_id	=	'#edit_editor_approved_id';

	var title		=	info['title'];

	var title_id	=	'#edit_editor_approved_title';

	var body		=	info['body'];

	var body_id		=	'#edit_editor_approved_body';


	// console.log(info);

	$(article_id).val(article);

	$(title_id).val(title);

	add_time_pickers();

	add_summernote(body_id,body);

	checkbox_set_show_publish_dates();

	show_publish_dates();

	checkbox_set_show_timepickers_div();

	show_timepickers_div();

});