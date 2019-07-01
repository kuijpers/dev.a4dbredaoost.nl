$(function () {
	$('#start_date').datetimepicker({
		locale: 'nl'
	});
	$('#end_date').datetimepicker({
		locale: 'nl',
		useCurrent: false //Important! See issue #1075
	});
	$("#start_date").on("dp.change", function (e) {
		$('#end_date').data("DateTimePicker").minDate(e.date);
	});
	$("#end_date").on("dp.change", function (e) {
		$('#start_date').data("DateTimePicker").maxDate(e.date);
	});


	$('#payment_received_at').datetimepicker({
		locale: 'nl',
		defaultDate: moment()
	});

});
