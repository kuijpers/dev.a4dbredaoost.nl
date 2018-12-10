
// While using BS tabs on refresh you will not stay on the active tab
// It will always open the first tab
// With the solution below it will open on active tab

// To have the selection persist only for the during of the current session
// and return to the default tab on the next session,
// replace the two instances of "localStorage" with "sessionStorage".

// Works for BS3 and BS4
// Works on modals

// Get back to TAB after page refresh or visiting other pages

$('a[data-toggle="tab"]').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});

$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
	var id = $(e.target).attr("href");
	localStorage.setItem('selectedTab', id)
});

var selectedTab = localStorage.getItem('selectedTab');
if (selectedTab != null) {
	$('a[data-toggle="tab"][href="' + selectedTab + '"]').tab('show');
}