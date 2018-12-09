/**
 * 	Set-up the data required to display in the modals
 * 	Data needs to be send as a JSON string via buttons
 */




	// AUTHOR DRAFTS
-
	$('#view_author_drafts').on('show.bs.modal', function(e) {

		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];


		// console.log(info);

		$(this).find('.view_author_title').text(title);

		$(this).find('.view_author_body').html(body);

	});

	// AUTHOR APPROVED

	$('#view_author_approved').on('show.bs.modal', function(e) {

		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];

		var author		=	info['author'];

		var editor		=	info['editor'];


		// console.log(info);

		$(this).find('.view_author_approved_title').text(title);

		$(this).find('.view_author_approved_body').html(body);

		$(this).find('.view_author_approved_author').text(author);

		$(this).find('.view_author_approved_editor').text(editor);

	});

	$('#edit_author_approved').on('show.bs.modal', function(e) {


		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var title_id	=	$("#edit_author_approved_title");

		var body		=	info['body'];

		var body_id		=	'#edit_author_approved_body';

		// console.log(title);
		// console.log(title);

		title_id.val(title);

		add_summernote(body_id,body);

	});

	// EDITOR APPROVED

	$('#view_editor_approved').on('show.bs.modal', function(e) {

		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];

		var author		=	info['author'];

		var editor		=	info['editor'];


		// console.log(info);

		$(this).find('.view_editor_approved_title').text(title);

		$(this).find('.view_editor_approved_body').html(body);

		$(this).find('.view_editor_approved_author').text(author);

		$(this).find('.view_editor_approved_editor').text(editor);

	});

	$( "#edit_editor_approved" ).on('shown.bs.modal', function(e){

		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];


		// console.log(info);

		$(this).find('.edit_editor_approved_title').text(title);

		$(this).find('.edit_editor_approved_body').html(body);

		add_time_pickers();

		add_summernote();

		checkbox_set_show_publish_dates();

		show_publish_dates();

		checkbox_set_show_timepickers_div();

		show_timepickers_div();

	});

	// PUBLISHER APPROVED

	$('#view_publisher_approved').on('show.bs.modal', function(e) {

		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];

		var author		=	info['author'];

		var editor		=	info['editor'];

		var publisher	=	info['publisher'];

		var start		=	info['start'];

		var end			=	info['end'];


		// console.log(info);

		$(this).find('.view_publisher_approved_title').text(title);

		$(this).find('.view_publisher_approved_body').html(body);

		$(this).find('.view_publisher_approved_author').text(author);

		$(this).find('.view_publisher_approved_editor').text(editor);

		$(this).find('.view_publisher_approved_publisher').text(publisher);

		$(this).find('.view_publisher_approved_start').text(start);

		$(this).find('.view_publisher_approved_end').text(end);

	});

	$('#edit_publisher_approved').on('show.bs.modal', function(e) {

		console.log($(e.relatedTarget).data('info'));

		var info 			= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];

		var start		=	info['start'];

		var end			=	info['end'];


		// console.log(info);

		$(this).find('.edit_publisher_approved_title').text(title);

		$(this).find('.edit_publisher_approved_body').html(body);

		$(this).find('.edit_publisher_approved_start').text(start);

		$(this).find('.edit_publisher_approved_end').text(end);

	});

	// ARCHIVED

	$('#view_archive').on('show.bs.modal', function(e) {

		 console.log($(e.relatedTarget).data('info'));

		 var info 			= $(e.relatedTarget).data('info');

			var title		=	info['title'];

			var body		=	info['body'];

			var author		=	info['author'];

			var editor		=	info['editor'];

			var publisher	=	info['publisher'];

			var start		=	info['start'];

			var end			=	info['end'];


		 // console.log(info);

		$(this).find('.view_archived_title').text(title);

		$(this).find('.view_archived_body').html(body);

		$(this).find('.view_archived_author').text(author);

		$(this).find('.view_archived_editor').text(editor);

		$(this).find('.view_archived_publisher').text(publisher);

		$(this).find('.view_archived_start').text(start);

		$(this).find('.view_archived_end').text(end);

	});

	$('#edit_archive').on('show.bs.modal', function(e) {

		// console.log($(e.relatedTarget).data('info'));

		var info 		= $(e.relatedTarget).data('info');

		var title		=	info['title'];

		var body		=	info['body'];


		$(this).find('.edit_archive_title').text(title);

		$(this).find('.edit_archive_body').text(body);


	});


	// DELETE / DESTROY files

	$('#delete_article').on('show.bs.modal', function(e) {

		// console.log($(e.relatedTarget).data('info'));

		var info 		= $(e.relatedTarget).data('info');

		var id			=	info['id'];

		var title		=	info['title'];

		var body		=	info['body'];

		//var href		= window.location.protocol+ '://' + window.location.hostname + '/bestuur/weetjes/information/'+ id + '/delete';

		var href		= 'information/'+ id + '/delete';

		console.log(href);

		$(this).find('.delete_title').text(title);

		$(this).find('.delete_body').html('<p>' + body + '</p>');


		$(this).find('.btn-ok').attr('href', href);
	});


	$('#destroy_article').on('show.bs.modal', function(e) {

		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.modal-title').text($title);



		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});


