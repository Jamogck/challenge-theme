jQuery(document).ready(function($) {
	// media query event handler
	if (matchMedia) {
	  var mq = window.matchMedia("(min-width: 960px)");
	  mq.addListener(WidthChange);
	  WidthChange(mq);
	}

	// media query change
	function WidthChange(mq) {
	  if (mq.matches) {
	    // window width is at least 960px
	    // $('.slide-out').css('display', 'block');
	    
	  } else {
	    // window width is less than 960px

	    function closeMenu() {
			$('#outer-wrap').removeClass('active-menu');
			$('.slide-out').css('display', 'none');
		}

		$('.slide-out').css('display', 'none');

	    $('.nav-trigger').click(function(e){
			e.stopPropagation();
			if ($('#outer-wrap').hasClass('active-menu')){
				$('.slide-out').css("display", "none");
				$('#outer-wrap').removeClass('active-menu');
			} else {
				$('#outer-wrap').addClass('active-menu');
				$('.slide-out').css('display', 'block');
			}
		});

	    $('#outer-wrap').click( function(e) {
    		closeMenu();
		});
		$(".nav-trigger").click( function(e) {
    		e.stopPropagation();
		});
	  }
	}
});