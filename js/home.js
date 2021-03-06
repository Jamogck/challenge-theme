jQuery(document).ready(function($) {

/* Motive Tabs
- display first tab content on load
- add active class, displaying tab corresponding to icon clicked
- remove active class from previously active tabs when new tab is clicked
*/
$('.tab-content div').hide();
$('.active').fadeIn();

$('.motive-tabs li').click(function() {
	var li            = $(this);
	var curTab        = "." + $(li).attr("class");

$(curTab).addClass('active').siblings().removeClass('active');
$('.active').fadeIn();
$('.tab-content div:not(.active)').hide();
});

});