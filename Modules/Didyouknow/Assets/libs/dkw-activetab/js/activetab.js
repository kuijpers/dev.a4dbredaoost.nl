// Get back to TAB after page refresh or visiting other pages

var pageName = $('#dkw-activetab').attr('class');

$('a[data-toggle="tab"]').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});

$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
	var id = $(e.target).attr("href");
	localStorage.setItem(pageName+'selectedTab', id)
});


var selectedTab = localStorage.getItem(pageName+'selectedTab');

if (selectedTab != null) {
	$('a[data-toggle="tab"][href="' + selectedTab + '"]').tab('show');
}