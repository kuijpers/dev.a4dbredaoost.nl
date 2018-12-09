$('#view_archive').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.view_archived_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.view_archived_body').text($body);

	$author = $(e.relatedTarget).attr('data-author');
	$(this).find('.view_archived_author').text($author);

	$editor = $(e.relatedTarget).attr('data-editor');
	$(this).find('.view_archived_editor').text($editor);

	$publisher = $(e.relatedTarget).attr('data-publisher');
	$(this).find('.view_archived_publisher').text($publisher);

	$start = $(e.relatedTarget).attr('data-start');
	$(this).find('.view_archived_start').text($start);

	$end = $(e.relatedTarget).attr('data-end');
	$(this).find('.view_archived_end').text($end);

});


$('#edit_archive').on('show.bs.modal', function(e) {


	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.edit_archive_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.edit_archive_body').text($body);


});