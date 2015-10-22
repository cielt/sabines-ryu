(function (window, $) {
	$(function () {
		// add fixed
		var wpSidebarDown = new Waypoint({
			element: $('#sidebar-book'),
  		handler: function(direction) {
    		if (direction === 'down') {
    			$(this.element).addClass('scroll-fixed');
    		} 
  		},
  		offset: 0
		});

		// remove
		var wpSidebarUp = new Waypoint({
			element: $('#sidebar-book'),
  		handler: function(direction) {
    		if (direction === 'up') {
    			$(this.element).removeClass('scroll-fixed');
    		} 
  		},
  		offset: 0
		});
	});
})(window, window.jQuery);