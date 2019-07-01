// DELETE files

$('#delete_article').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	let info 		= 	$(e.relatedTarget).data('info');

	let id			=	info['id'];

	let title		=	info['title'];
	let title_id	=	'.delete_title';

	let body		=	info['body'];
	let body_id		=	'.delete_body'

	let link		= 	'/api/board/sponsors/sponsor/'+ id + '/delete';
	let link_id		=	'.btn-ok';

	console.log(link);

	$(this).find(title_id).text(title);

	$(this).find(body_id).html('<p>' + body + '</p>');


	$(this).find(link_id).attr('href', link);
});