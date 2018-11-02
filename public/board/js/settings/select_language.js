$(document).ready(function() {

	$('#select_language').flagStrap({
		countries: {
			"nl": "Nederlands",
			"gb": "English"
		},
		inputName: 'country',
		buttonSize: "btn-lg",
		labelMargin: "10px",
		scrollable: false,
		scrollableHeight: "350px",
		onSelect: function(value) {

			languageChange(value);

		}
	});


	function languageChange(language){

		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			type:"POST",
			url:"/api/board/member/settings/language-select",
			data: {_token: CSRF_TOKEN, message:language},
			dataType: 'JSON',
			complete: function(data) {
				var Resp = data.responseText;
				console.log(Resp);
			},
			success: function() {
					location.reload();
			}
		})


	}


});
