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
})

/* Input Label Floats (initializing jvFloat.js)
- When input is active, label floats to top of input
*/
$('input').jvFloat();

/* Scroll Up Top Bar
- .secondary-navigation becomes fixed at top of viewport when user scrolls.
- Page scrolls smoothly when user clicks anchor in .secondary-navigation.
- Hash changes when user clicks on new anchor in .secondary-navigation
*/

$(".secondary-navigation").stick_in_parent();


$('.secondary-navigation').onePageNav({
    currentClass: 'current',
    changeHash: true,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function() {
        //I get fired when the animation is starting
    },
    end: function() {
        //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    }
});

/* larger tappable li elements in .secondary-navigation 
*/

$('.secondary-navigation li').click(function() {
	window.location = $('a', this).attr('href');
})

});
