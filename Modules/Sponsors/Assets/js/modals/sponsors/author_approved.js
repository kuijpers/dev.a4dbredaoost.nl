// AUTHOR APPROVED

$('#view_author_approved').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var title		=	info['title'];
	var title_id	=	'.view_author_approved_title';

	var body		=	info['body'];
	var body_id		=	'.view_author_approved_body';
	//
	var logo		= 	'storage/'+info['image_name'];
	var logo_id		=	"#view_author_approved_logo_sponsor";
	var logo_fixed	=	"img/no-image.png";

	var link		= 	info['link'];
	var link_id		=	"#view_author_approved_link_sponsor";
	var link_fixed	=	"weblink";

	var author		=	info['author'];
	var author_id	=	'.view_author_approved_author';

	var editor		=	info['editor'];
	var editor_id	=	'.view_author_approved_editor';


	// console.log(logo_fixed);

	$(this).find(title_id).text(title);

	$(this).find(body_id).html(body);

	// Change the logo for the selected sponsor
	var newSrc = $(logo_id).attr("src").replace(logo_fixed, logo);
	// console.log(newSrc);
	$(logo_id).attr("src", newSrc);


	// Change the link for the selected sponsor
	$(this).find(link_id).text(link);

	var newLink = $(link_id).attr("href").replace(link_fixed, link);
	$(link_id).attr("href", newLink);

	$(this).find(author_id).text(author);

	$(this).find(editor_id).text(editor);

});

$('#view_author_approved').on('hidden.bs.modal', function () {

	location.reload();

	// $('#logo_sponsor').load('#logo_sponsor', function() {
	// 	/// can add another function here
	// });
});


$('#edit_author_approved').on('show.bs.modal', function(e) {


	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var article		=	info['id'];

	var article_id	=	'#edit_author_approved_id';

	var title		=	info['title'];

	var title_id	=	'#edit_author_approved_title';

	var body		=	info['body'];

	var body_id		=	'#edit_author_approved_body';

	var package_name	=	info['package'];

	var package_id		=	$("#edit_author_approved_package");

	var web_link		=	info['link'];

	var web_link_id		=	$("#edit_author_approved_link");

	var logo			=	'storage/'+info['image_name'];

	var logo_id			= 	$("#edit_author_approved_show_logo");

	var no_image		=	'img/no-image.png';

	// console.log(title);

	$(article_id).val(article);

	$(title_id).val(title);

	add_summernote(body_id,body);

	web_link_id.val(web_link);

	package_id.val(package_name);

	var newSrc = logo_id.attr('src').replace(no_image, logo);
	logo_id.attr('src', newSrc);

	// console.log(logo_id.attr('src', newSrc));

});

$('#edit_author_approved').on('hidden.bs.modal', function () {
	location.reload();
});


$(document).ready( function() {

	$('#edit_author_approved').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#edit_author_approved_logo").val(label);
	});

});