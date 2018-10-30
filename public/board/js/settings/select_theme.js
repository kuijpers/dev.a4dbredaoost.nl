$(document).ready(function() {

	$( "#select_theme" ).change(function() {

		var selected_theme = $("#select_theme").val();

		// console.log(selected_theme);

		themeChange(selected_theme);

			location.reload();

	});


	function themeChange(theme){

		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		//console.log(theme);

		$.ajax({
			type:"POST",
			url:"/api/board/member/settings/theme-select",
			data: {_token: CSRF_TOKEN, message:theme},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				console.log(Resp);
			}		})

	}


});

