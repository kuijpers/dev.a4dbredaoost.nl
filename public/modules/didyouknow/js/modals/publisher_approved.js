$('#view_publisher_approved').on('show.bs.modal', function(e) {

	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.view_publisher_approved_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.view_publisher_approved_body').text($body);

	$author = $(e.relatedTarget).attr('data-author');
	$(this).find('.view_publisher_approved_author').text($author);

	$editor = $(e.relatedTarget).attr('data-editor');
	$(this).find('.view_publisher_approved_editor').text($editor);

	$publisher = $(e.relatedTarget).attr('data-publisher');
	$(this).find('.view_publisher_approved_publisher').text($publisher);

	$start = $(e.relatedTarget).attr('data-start');
	$(this).find('.view_publisher_approved_start').text($start);

	$end = $(e.relatedTarget).attr('data-end');
	$(this).find('.view_publisher_approved_end').text($end);

});


$('#edit_publisher_approved').on('show.bs.modal', function(e) {


	$title = $(e.relatedTarget).attr('data-title');
	$(this).find('.edit_publisher_approved_title').text($title);

	$body = $(e.relatedTarget).attr('data-body');
	$(this).find('.edit_publisher_approved_body').text($body);

	$start = $(e.relatedTarget).attr('data-start');
	$(this).find('.edit_publisher_approved_start').text($start);

	$end = $(e.relatedTarget).attr('data-end');
	$(this).find('.edit_publisher_approved_end').text($end);


});


