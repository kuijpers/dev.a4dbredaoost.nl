	$(document).ready(function() {

		$('#submit_new').on('click',function(e) {

			e.preventDefault();

			// input field name=title #=title

			var title = $("#title").val();

			// textarea field name=body #=new_article

			var body = $('#new_article').val();


			var author_approved = $("#author_approved").prop("checked") ? 1 : 0;

			var editor_approved = $("#editor_approved").prop("checked") ? 1 : 0;


			create_new_article(title , body , author_approved , editor_approved);

		});

		$('#edit_personal_drafts_submit').on('click',function(e){

			e.preventDefault();

			var url			=	"/api/board/information/update";

			var id_field	=	$('#edit_personal_drafts_id');

			var title_field	=	$('#edit_personal_drafts_title');

			var body_field	=	$('#edit_personal_drafts_body');

			var author_approved = $("#author_approved").prop("checked") ? 1 : 0;

			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


			$.ajax({
				url: url,
				method: 'post',
				data: {
					_token: CSRF_TOKEN,
					type: 'edit_personal_drafts',
					id: id_field.val(),
					title: title_field.val(),
					body: body_field.val(),
					author_approved:author_approved
				},
				dataType: 'JSON',
				complete: function(data) {
					var Resp = data.responseText;
					//console.log(Resp);
				},
				success: function(data){
					console.log(data);

					$.each(data.errors, function(key, value){
						$('#modal_update_fail').show();
						// @todo: Alerts don't show up
						$('#modal_update_fail_alert').append('<p class="remove-alert">'+value+'</p>');
						$('#modal_update_fail').delay( 5000 ).fadeOut( 'slow' );
					});

					$.each(data.success, function(key, value){
						$('#modal_update_success').show();
						$('#modal_update_success_alert').append('<p class="remove-alert">'+value+'</p>');
						$('#modal_update_success').delay( 5000 ).fadeOut( 'slow' );
					});
				}});
			$( ".remove-alert" ).remove();
		});


		function create_new_article(title , body , author_approved , editor_approved){

			// console.log(title , body , author_approved , editor_approved );
			//
			// alert( 'test gedaan' );

			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

			$.ajax({
				type:"POST",
				url:"/api/board/information/create",
				data: {_token: CSRF_TOKEN,
					title:title,
					body:body,
					author_approved:author_approved,
					editor_approved:editor_approved
				},
				dataType: 'JSON',
				complete: function(data) {
					var Resp = data.responseText;
					console.log(Resp);
				},
				success: function(data){

					jQuery.each(data.errors, function(key, value){
						jQuery('.alert-danger').show();
						jQuery('.alert-danger').append('<p class="remove-alert">'+value+'</p>');
						$('.tosti').delay( 5000 ).fadeOut( 'slow' );
					});

					jQuery.each(data.success, function(key, value){
						jQuery('.alert-success').show();
						jQuery('.alert-success').append('<p class="remove-alert">'+value+'</p>');
						$('.tosti').delay( 2000 ).fadeOut( 'slow' );

						setTimeout(function(){
							$('#new_article_form').trigger('reset');
							$('#new_article').summernote();
							$('#new_article').summernote('reset');
						},500);

					});

				}
			});


			$( ".remove-alert" ).remove();
		}

	});