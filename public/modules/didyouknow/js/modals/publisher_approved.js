// PUBLISHER APPROVED

$('#view_publisher_approved').on('show.bs.modal', function(e) {

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

	$(this).find('.view_publisher_approved_title').text(title);

	$(this).find('.view_publisher_approved_body').html(body);

	$(this).find('.view_publisher_approved_author').text(author);

	$(this).find('.view_publisher_approved_editor').text(editor);

	$(this).find('.view_publisher_approved_publisher').text(publisher);

	$(this).find('.view_publisher_approved_start').text(start);

	$(this).find('.view_publisher_approved_end').text(end);

});

$('#edit_publisher_approved').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];

	var start		=	info['start'];

	var end			=	info['end'];


	// console.log(info);

	$(this).find('.edit_publisher_approved_title').text(title);

	$(this).find('.edit_publisher_approved_body').html(body);

	$(this).find('.edit_publisher_approved_start').text(start);

	$(this).find('.edit_publisher_approved_end').text(end);

});