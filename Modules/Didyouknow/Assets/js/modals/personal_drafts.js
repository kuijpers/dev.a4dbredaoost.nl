// PERSONAL DRAFTS

$('#view_personal_drafts').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];


	// console.log(info);

	$(this).find('.view_personal_title').text(title);

	$(this).find('.view_personal_body').html(body);

});

$('#edit_personal_drafts').on('show.bs.modal', function(e) {


	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var article		=	info['id'];

	var article_id	=	$("#edit_personal_drafts_id");

	var title		=	info['title'];

	var title_id	=	$("#edit_personal_drafts_title");

	var body		=	info['body'];

	var body_id		=	'#edit_personal_drafts_body';

	// console.log(title);

	article_id.val(article);

	title_id.val(title);

	add_summernote(body_id,body);

});

$('#edit_personal_drafts').on('hidden.bs.modal', function () {
	location.reload();
});