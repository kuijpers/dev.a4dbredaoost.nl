$('#view_author_drafts').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.view_author_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.view_author_body').text($body);

});