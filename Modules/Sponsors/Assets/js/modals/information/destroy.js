// DESTROY files

$('#destroy_article').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 		= $(e.relatedTarget).data('info');

	var id			=	info['id'];

	var title		=	info['title'];

	var href		= '/api/board/sponsors/information/'+ id + '/destroy';

	console.log(href);

	$(this).find('#destroy-title').text(title);

	$(this).find('.btn-ok').attr('href', href);
});