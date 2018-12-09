// EDITOR APPROVED

$('#view_editor_approved').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];

	var author		=	info['author'];

	var editor		=	info['editor'];


	// console.log(info);

	$(this).find('.view_editor_approved_title').text(title);

	$(this).find('.view_editor_approved_body').html(body);

	$(this).find('.view_editor_approved_author').text(author);

	$(this).find('.view_editor_approved_editor').text(editor);

});

$( "#edit_editor_approved" ).on('shown.bs.modal', function(e){

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];


	// console.log(info);

	$(this).find('.edit_editor_approved_title').text(title);

	$(this).find('.edit_editor_approved_body').html(body);

	add_time_pickers();

	add_summernote();

	checkbox_set_show_publish_dates();

	show_publish_dates();

	checkbox_set_show_timepickers_div();

	show_timepickers_div();

});