(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$('#nav-toggle, #nav-close').click(function() {
			$('body').toggleClass('show-menu');
		})

		$(document).mouseup(function (e) {
			if($('body').hasClass('show-menu')) {
				var menu = $("nav#nav-collapse");

				if (!menu.is(e.target) // if the target of the click isn't the container...
					&& menu.has(e.target).length === 0) // ... nor a descendant of the container
				{
					$('body').removeClass('show-menu');
				}
			}
		});

	});

})(jQuery, this);
