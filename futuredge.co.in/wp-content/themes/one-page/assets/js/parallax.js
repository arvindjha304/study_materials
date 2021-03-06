(function($) {
	// Check if the section has the parallax class.
	if ($('div').hasClass('parallax')) {
		// Check if the browser is IE10 or below.
		if ($.browser.msie) {
			// Remove the parallax scrolling styles and center background image vertically.
			$('.parallax').css({
				backgroundAttachment: 'scroll',
				backgroundPosition: '50% 50%'
			});
		}
		else {
			// If not IE, add the data attributes.
			$('.parallax').data('type', 'background');
			$('.parallax').data('speed', '10');
		}
	}

	$(document).ready( function() {
		// Cache the Window object
		$window = $(window);

		// $('section[data-type="background"]').each(function() {
		$('.parallax').each(function() {
			// assigning the object
			var $bgobj = $(this);

			$(window).scroll(function() {
				// Scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!
				var yPos = -(($(window).scrollTop() - $bgobj.offset().top) / $bgobj.data('speed'));

				// Put together our final background position
				var coords = '50% ' + yPos + 'px';

				// Move the background
				$bgobj.css({ backgroundPosition: coords });
			});
			// window scroll Ends
		});
	});
})(jQuery);