// DESTROY files

$('#destroy_article').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	let info 		= $(e.relatedTarget).data('info');

	let id			=	info['id'];

	let title		=	info['title'];
	let title_id	=	'#destroy-title';

	let link		= 	'/api/board/sponsors/sponsor/'+ id + '/destroy';
	let link_id		=	'.btn-ok';

	console.log(link);

	$(this).find(title_id).text(title);

	$(this).find(link_id).attr('href', link);
});