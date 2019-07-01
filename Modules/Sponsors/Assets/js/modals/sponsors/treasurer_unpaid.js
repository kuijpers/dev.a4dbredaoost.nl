// PERSONAL DRAFTS

$('#view_treasurer_unpaid').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	var info 		= $(e.relatedTarget).data('info');

	var title		=	info['title'];
	var title_id	=	'.view_treasurer_unpaid_title';

	var body		=	info['body'];
	var body_id		=	'.view_treasurer_unpaid_body';

	var logo		= 	'storage/'+info['image_name'];
	var logo_id		=	"#view_treasurer_unpaid_logo_sponsor";
	var logo_fixed	=	"img/no-image.png";

	var link		= 	info['link'];
	var link_id		=	"#view_treasurer_unpaid_link_sponsor";
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
	$(this).find(link_id).text(link);

	var newLink = $(link_id).attr("href").replace(link_fixed, link);
	$(link_id).attr("href", newLink);

});

$('#view_treasurer_unpaid').on('hidden.bs.modal', function () {

	location.reload();

	// $('#logo_sponsor').load('#logo_sponsor', function() {
	// 	/// can add another function here
	// });
});


$('#edit_treasurer_unpaid').on('show.bs.modal', function(e) {


	console.log($(e.relatedTarget).data('info'));

	var info 		= $(e.relatedTarget).data('info');

	var article			=	info['id'];
	var article_id		=	$("#edit_treasurer_unpaid_id");

	var title			=	info['title'];
	var title_id		=	'.edit_treasurer_unpaid_title';

	var body			=	info['body'];
	var body_id			=	'.edit_treasurer_unpaid_body';

	var logo			= 	'storage/'+info['image_name'];
	var logo_id			=	"#edit_treasurer_unpaid_logo_sponsor";
	var logo_fixed		=	"img/no-image.png";

	var link			= 	info['link'];
	var link_id			=	"#edit_treasurer_unpaid_link_sponsor";
	var link_fixed		=	"weblink";


	// console.log(info);
	// console.log(article);
	// console.log(title);
	// console.log(body);
	// console.log(logo);
	// console.log(link);


	article_id.val(article);

	// Change the HTML for the selected sponsor name
	$(this).find(title_id).text(title);

	// Change the text for the selected sponsor
	$(this).find(body_id).html(body);

	// Change the logo for the selected sponsor
	var newSrc = $(logo_id).attr("src").replace(logo_fixed, logo);
	$(logo_id).attr("src", newSrc);

	// Change the link for the selected sponsor
	$(this).find(link_id).text(link);

	var newLink = $(link_id).attr("href").replace(link_fixed, link);
	$(link_id).attr("href", newLink);


});

$('#edit_treasurer_unpaid').on('hidden.bs.modal', function () {
	location.reload();
});