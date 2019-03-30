$(document).ready(function() {

	$("#AvatarUpload").on('change', function () {

		if (typeof (FileReader) != "undefined") {

			var image_holder = $("#AvatarHolder");

			image_holder.empty();

			var reader = new FileReader();
			reader.onload = function (e) {

				$("<img />", {
					"src": e.target.result,
					"class": "thumb-image avatar"
				}).appendTo(image_holder);

				$('#AvatarUpload').val(e.target.result);

			};
			image_holder.show();
			reader.readAsDataURL($(this)[0].files[0]);




		} else {
			alert("This browser does not support FileReader.");
		}
	});

	$("#close_avatar").on("click",function(){
		$(".avatar").remove();

		location.reload();

	});



});