$(document).ready(function () {

	$('#selectall_approved').click(function (event) {

		if (this.checked) {
			$('.approved').each(function () { //loop through each checkbox
				$(this).prop('checked', true); //check
			});
		} else {
			$('.approved').each(function () { //loop through each checkbox
				$(this).prop('checked', false); //uncheck
			});
		}

	});


	$('#selectall_approved').on('switch-change', function () {

		if (this.checked) {
			$('.approved').each(function () { //loop through each checkbox
				$(this).prop('checked', true); //check
			});
		} else {
			$('.approved').each(function () { //loop through each checkbox
				$(this).prop('checked', false); //uncheck
			});
		}

	});

});