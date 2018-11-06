$('#view_personal_drafts').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.view_personal_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.view_personal_body').text($body);

});


$('#edit_personal_drafts').on('show.bs.modal', function(e) {

	// $title = $(e.relatedTarget).attr('data-title');;
	// $(this).find('.modal-title-message').text($title)

	$(this).find('#personal_title').attr('value', $(e.relatedTarget).data('title'));

	$body = $(e.relatedTarget).attr('data-body');;
	$(this).find('#personal_body').text($body)



	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});


$('#delete_personal_drafts').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.modal-title').text($title);



	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
