// AUTHOR DRAFTS

$('#view_author_drafts').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];


	// console.log(info);

	$(this).find('.view_author_title').text(title);

	$(this).find('.view_author_body').html(body);

});