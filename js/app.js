(function (window, $) {
  var sabinesRyu = {};
  sabinesRyu.breakpoints = {};
  sabinesRyu.breakpoints.SIDEBAR_BP = 1250;  

  $(function () {
    var $bookSidebar = $('#sidebar-book'),
    viewW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

    if ($bookSidebar.length && viewW >= sabinesRyu.breakpoints.SIDEBAR_BP) {
		// add fixed
    var wpSidebarDown = new Waypoint({
     element: $bookSidebar,
     handler: function(direction) {
      if (direction === 'down') {
       $(this.element).addClass('scroll-fixed');
     } 
   },
   offset: 0
 });

  // remove
  var wpSidebarUp = new Waypoint({
    element: $bookSidebar,
    handler: function(direction) {
      if (direction === 'up') {
       $(this.element).removeClass('scroll-fixed');
     } 
   },
   offset: 0
 });
}
});
})(window, window.jQuery);