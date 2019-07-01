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

	var article		=	info['id'];

	var article_id	=	'#edit_publisher_approved_id';

	var title		=	info['title'];

	var title_id	=	'.edit_publisher_approved_title';

	var body		=	info['body'];

	var body_id		=	'edit_publisher_approved_body';

	var start		=	info['start'];

	var start_id	=	'.edit_publisher_approved_start';

	var end			=	info['end'];

	var end_id		=	'.edit_publisher_approved_end';


	// console.log(info);



	$(article_id).val(article);

	$(this).find(title_id).text(title);

	$(this).find(body_id).html(body);

	$(this).find(start_id).text(start);

	$(this).find(end_id).text(end);

});