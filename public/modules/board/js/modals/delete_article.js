
$('#delete_article').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.modal-title').text($title);



	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});