// PERSONAL DRAFTS

$('#view_personal_drafts').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];

	var body		=	info['body'];

	var logo		= 	info['image_name'];

	var link		= 	info['link'];


	// console.log(info);
	// console.log(title);
	// console.log(body);
	// console.log(logo);
	console.log(link);


	// Change the HTML for the selected sponsor name
	$(this).find('.view_personal_title').text(title);

	// Change the text for the selected sponsor
	$(this).find('.view_personal_body').html(body);

	// Change the logo for the selected sponsor
	var newSrc = $("#logo_sponsor").attr("src").replace("img/no-image.png", 'storage/'+logo);
	$("#logo_sponsor").attr("src", newSrc);

	// Change the link for the selected sponsor
	$(this).find('#link_sponsor').text(link);

	var newLink = $("#link_sponsor").attr("href").replace("weblink", link);
	$("#link_sponsor").attr("href", newLink);

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