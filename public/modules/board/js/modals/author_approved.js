$('#view_author_approved').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.view_author_approved_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.view_author_approved_body').text($body);

	$author = $(e.relatedTarget).attr('data-author');
	$(this).find('.view_author_approved_author').text($author);

});


$('#edit_author_approved').on('show.bs.modal', function(e) {


	$(this).find('#author_approved_title').attr('value', $(e.relatedTarget).data('title'));

	$body = $(e.relatedTarget).attr('data-body');;
	$(this).find('#author_approved_body').text($body)



	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

