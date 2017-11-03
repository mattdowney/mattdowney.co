(function($) {
  $(function() {
    $('.menu-toggle').on('click', function(){
  $('.full-menu').toggleClass('full-menu-open');
	});
  });

//capture scroll any percentage
//$(window).scroll(function(){
//var wintop = $(window).scrollTop(), docheight = 
    
//    $(document).height(), winheight = $(window).height();
// 			var scrolled = (wintop/(docheight-winheight))*100;
  
//  		$('.scroll-line').css('width', (scrolled + '%'));
//});

$(".wpcf7-form input:text, .wpcf7-form textarea").first().focus();

})(jQuery);