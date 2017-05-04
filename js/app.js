jQuery(document).ready(function($) {

/* Scroll then sticky side nav */

// $(".slide-out").stick_in_parent();

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

/* Details Page secondary nav */

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
});

/* Asterisk note */
$('.asterisk').click(function() {
    $('.asterisk--note').toggle();
});

/* FAQ */
$('.expandable').click(function(){
    $(this).toggleClass('is-expanded');
    $(this > '.answer').slideToggle('slow');
});

});
