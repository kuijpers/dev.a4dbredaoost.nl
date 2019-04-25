// PERSONAL DRAFTS

$('#view_personal_drafts').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	var info 		= $(e.relatedTarget).data('info');

	var title		=	info['title'];
	var title_id	=	'.view_personal_title';

	var body		=	info['body'];
	var body_id		=	'.view_personal_body';

	var logo		= 	'storage/'+info['image_name'];
	var logo_id		=	"#logo_sponsor";
	var logo_fixed	=	"img/no-image.png";

	var link		= 	info['link'];
	var link_id		=	"#link_sponsor";
	var link_fixed	=	"weblink";


	// console.log(info);
	// console.log(title);
	// console.log(body);
	// console.log(logo);
	// console.log(link);


	// Change the HTML for the selected sponsor name
	$(this).find(title_id).text(title);

	// Change the text for the selected sponsor
	$(this).find(body_id).html(body);

	// Change the logo for the selected sponsor
	var newSrc = $(logo_id).attr("src").replace(logo_fixed, logo);
	$(logo_id).attr("src", newSrc);

	// Change the link for the selected sponsor
	$(this).find('#link_sponsor').text(link);

	var newLink = $(link_id).attr("href").replace(link_fixed, link);
	$(link_id).attr("href", newLink);

});

$('#view_personal_drafts').on('hidden.bs.modal', function () {

	location.reload();

	// $('#logo_sponsor').load('#logo_sponsor', function() {
	// 	/// can add another function here
	// });
});


$('#edit_personal_drafts').on('show.bs.modal', function(e) {


	console.log($(e.relatedTarget).data('info'));

	var info 			= $(e.relatedTarget).data('info');

	var article			=	info['id'];

	var article_id		=	$("#edit_personal_drafts_id");

	var title			=	info['title'];

	var title_id		=	$("#edit_personal_drafts_title");

	var body			=	info['body'];

	var body_id			=	'#edit_personal_drafts_body';

	var package_name	=	info['package'];

	var package_id		=	$("#edit_personal_package")

	var web_link		=	info['link'];

	var web_link_id		=	$("#edit_personal_drafts_link");

	var logo			=	'storage/'+info['image_name'];

	var logo_id			= 	$("#edit_personal_drafts_show_logo");

	var no_image		=	'img/no-image.png';

	// console.log(logo);

	article_id.val(article);

	title_id.val(title);

	add_summernote(body_id,body);

	web_link_id.val(web_link);

	package_id.val(package_name);

	var newSrc = logo_id.attr('src').replace(no_image, logo);
	logo_id.attr('src', newSrc);

	console.log(logo_id.attr('src', newSrc));

});

$('#edit_personal_drafts').on('hidden.bs.modal', function () {
	location.reload();
});

$(document).ready( function() {

	$('#edit_personal_drafts').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#edit_personal_drafts_logo").val(label);
	});

});