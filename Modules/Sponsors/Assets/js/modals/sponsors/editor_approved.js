// EDITOR APPROVED

$('#view_editor_approved').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	var info 				= $(e.relatedTarget).data('info');

	var title				=	info['title'];
	var title_id			=	'.view_editor_approved_title';

	var body				=	info['body'];
	var body_id				=	'.view_editor_approved_body';

	var logo				= 	'storage/'+info['image_name'];
	var logo_id				=	"#view_editor_approved_logo_sponsor";
	var logo_fixed			=	"img/no-image.png";

	var link				= 	info['link'];
	var link_id				=	"#view_editor_approved_link_sponsor";
	var link_fixed			=	"weblink";

	var author				=	info['author'];
	var author_id			=	'.view_editor_approved_author';

	var editor				=	info['editor'];
	var editor_id			=	'.view_editor_approved_editor';

	var publisher			=	info['publisher'];
	var publisher_id		=	'.view_editor_approved_publisher';

	var payment				=	info['payment_received'];
	var payment_id_paid		=	$('#view_editor_approved_paid_id');
	var payment_id_unpaid	=	$('#view_editor_approved_unpaid_id');


	// console.log(info);

	$(this).find(title_id).text(title);

	$(this).find(body_id).html(body);

	// Change the logo for the selected sponsor
	var newSrc = $(logo_id).attr("src").replace(logo_fixed, logo);
	$(logo_id).attr("src", newSrc);

	// Change the link for the selected sponsor
	$(this).find(link_id).text(link);

	var newLink = $(link_id).attr("href").replace(link_fixed, link);
	$(link_id).attr("href", newLink);

	$(this).find(author_id).text(author);

	$(this).find(editor_id).text(editor);

	$(this).find(publisher_id).text(publisher);

	if (payment === 1) {
		// console.log('make checked');

		$(payment_id_unpaid).hide();
		$(payment_id_paid).show();
	}else{

		// console.log('make unchecked');

		$(payment_id_paid).hide();
		$(payment_id_unpaid).show();
	}

});


$('#view_editor_approved').on('hidden.bs.modal', function () {

	location.reload();

});

$( "#edit_editor_approved" ).on('shown.bs.modal', function(e){

	console.log($(e.relatedTarget).data('info'));

	var info 				= $(e.relatedTarget).data('info');

	var article				=	info['id'];

	var article_id			=	'#edit_editor_approved_id';

	var title				=	info['title'];

	var title_id			=	'#edit_editor_approved_title';

	var body				=	info['body'];

	var body_id				=	'#edit_editor_approved_body';

	var logo				=	'storage/'+info['image_name'];

	var logo_id				= 	$("#edit_editor_approved_show_logo");

	var no_image			=	'img/no-image.png';

	var web_link			=	info['link'];
	var web_link_id			=	$("#edit_editor_approved_link");

	var publish_start		=	'#show_publish_start_date';
	var publish_start_date	=	info['publish_date_start'];

	var publish_end			=	'#show_publish_end_date';
	var publish_end_date	=	info['publish_date_end'];


	// console.log(info);

	$(article_id).val(article);

	$(title_id).val(title);

	var newSrc = logo_id.attr('src').replace(no_image, logo);
	logo_id.attr('src', newSrc);

	web_link_id.val(web_link);

	$(this).find(publish_start).text(publish_start_date);

	$(this).find(publish_end).text(publish_end_date);

	add_time_pickers();

	add_summernote(body_id,body);

	checkbox_set_show_publish_dates();

	show_publish_dates();

	checkbox_set_show_timepickers_div();

	show_timepickers_div();

});

$('#edit_editor_approved').on('hidden.bs.modal', function () {
	location.reload();
});


$(document).ready( function() {

	$('#edit_editor_approved').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#edit_editor_approved_logo").val(label);
	});

});