// DELETE files

$('#delete_article').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	var info 		= $(e.relatedTarget).data('info');

	var id			=	info['id'];

	var title		=	info['title'];

	var body		=	info['body'];

	//var href		= window.location.protocol+ '://' + window.location.hostname + '/bestuur/weetjes/information/'+ id + '/delete';

	var href		= '/api/board/information/'+ id + '/delete';

	console.log(href);

	$(this).find('.delete_title').text(title);

	$(this).find('.delete_body').html('<p>' + body + '</p>');


	$(this).find('.btn-ok').attr('href', href);
});