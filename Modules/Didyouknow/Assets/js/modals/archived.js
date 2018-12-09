// ARCHIVED

$('#view_archive').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];

	var author		=	info['author'];

	var editor		=	info['editor'];

	var publisher	=	info['publisher'];

	var start		=	info['start'];

	var end			=	info['end'];


	// console.log(info);

	$(this).find('.view_archived_title').text(title);

	$(this).find('.view_archived_body').html(body);

	$(this).find('.view_archived_author').text(author);

	$(this).find('.view_archived_editor').text(editor);

	$(this).find('.view_archived_publisher').text(publisher);

	$(this).find('.view_archived_start').text(start);

	$(this).find('.view_archived_end').text(end);

});

$('#edit_archive').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	var info 		= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];


	$(this).find('.edit_archive_title').text(title);

	$(this).find('.edit_archive_body').text(body);


});