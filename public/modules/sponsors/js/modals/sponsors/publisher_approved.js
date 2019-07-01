// PUBLISHER APPROVED

$('#view_publisher_approved').on('show.bs.modal', function(e) {

	// console.log($(e.relatedTarget).data('info'));

	let info 				= $(e.relatedTarget).data('info');

	let title				=	info['title'];
	let title_id			=	'.view_publisher_approved_title';

	let body				=	info['body'];
	let body_id				=	'.view_publisher_approved_body';

	let image_name			=	info['image_name'];
	let logo				= 	'storage/'+image_name;
	let logo_id				=	"#view_publisher_approved_logo_sponsor";
	let logo_fixed			=	"img/no-image.png";

	let link				= 	info['link'];
	let link_id				=	"#view_publisher_approved_link_sponsor";
	let link_fixed			=	"weblink";
	let link_section		=	"#view_publisher_link";

	let author				=	info['author'];
	let author_id			=	'.view_publisher_approved_author';

	let editor				=	info['editor'];
	let editor_id			=	'.view_publisher_approved_editor';

	let publisher			=	info['publisher'];
	let publisher_id		=	'.view_publisher_approved_publisher';

	let payment				=	info['payment_received'];
	let payment_id_paid		=	$('#view_publisher_approved_paid_id');
	let payment_id_unpaid	=	$('#view_publisher_approved_unpaid_id');

	let publish_start		=	'#show_publish_start_date';
	let publish_start_date	=	info['publish_date_start'];

	let publish_end			=	'#show_publish_end_date';
	let publish_end_date	=	info['publish_date_end'];


	// console.log(info);

	$(this).find(title_id).text(title);

	$(this).find(body_id).html(body);

	if (image_name){
		// Change the logo for the selected sponsor
		let newSrc = $(logo_id).attr("src").replace(logo_fixed, logo);
		$(logo_id).attr("src", newSrc);
	}

	if(link){

		// Change the link for the selected sponsor
		$(this).find(link_id).text(link);

		let newLink = $(link_id).attr("href").replace(link_fixed, link);
		$(link_id).attr("href", newLink);

	}else{

		$(link_section).hide();

	}

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

	$(this).find(publish_start).text(publish_start_date);
	// @todo When end date is before start send string saying forever.
	$(this).find(publish_end).text(publish_end_date);

});


$('#view_publisher_approved').on('hidden.bs.modal', function () {

	location.reload();

});



$( "#edit_publisher_approved" ).on('shown.bs.modal', function(e){

	console.log($(e.relatedTarget).data('info'));

	let info 				= $(e.relatedTarget).data('info');

	let article				=	info['id'];
	let article_id			=	'#edit_publisher_approved_id';

	let title				=	info['title'];
	let title_id			=	'#edit_publisher_approved_title';

	let body				=	info['body'];
	let body_id				=	'#edit_publisher_approved_body';

	let link				= 	info['link'];
	let link_id				=	"#edit_publisher_approved_link_sponsor";
	let link_fixed			=	"weblink";
	let link_section		=	"#edit_publisher_link";

	let image_name			=	info['image_name'];
	let logo				= 	'storage/'+image_name;
	let logo_id				=	"#edit_publisher_approved_logo_sponsor";
	let logo_fixed			=	"img/no-image.png";

	let author				=	info['author'];
	let author_id			=	'.edit_publisher_approved_author';

	let editor				=	info['editor'];
	let editor_id			=	'.edit_publisher_approved_editor';

	let publisher			=	info['publisher'];
	let publisher_id		=	'.edit_publisher_approved_publisher';

	let payment				=	info['payment_received'];
	let payment_id_paid		=	$('#edit_publisher_approved_paid_id');
	let payment_id_unpaid	=	$('#edit_publisher_approved_unpaid_id');

	let publish_start		=	'#show_publish_start_date';
	let publish_start_date	=	info['publish_date_start'];

	let publish_end			=	'#show_publish_end_date';
	let publish_end_date	=	info['publish_date_end'];


	// console.log(info);

	$(article_id).val(article);

	$(title_id).text(title);

	$(body_id).html(body);

	if(link){

		// Change the link for the selected sponsor
		$(this).find(link_id).text(link);

		let newLink = $(link_id).attr("href").replace(link_fixed, link);
		$(link_id).attr("href", newLink);

	}else{

		$(link_section).hide();

	}

	if (image_name){
		// Change the logo for the selected sponsor
		let newSrc = $(logo_id).attr("src").replace(logo_fixed, logo);
		$(logo_id).attr("src", newSrc);
	}

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






	$(this).find(publish_start).text(publish_start_date);
	// @todo When end date is before start send string saying forever.
	$(this).find(publish_end).text(publish_end_date);

});

$('#edit_publisher_approved').on('hidden.bs.modal', function () {
	location.reload();
});


$(document).ready( function() {

	$('#edit_publisher_approved').on('fileselect', function(event, numFiles, label) {

		// console.log(numFiles);
		// console.log(label);

		$("#edit_publisher_approved_logo").val(label);
	});

});