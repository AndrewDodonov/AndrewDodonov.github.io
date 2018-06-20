$(document).ready(function(){
	/*$(function(){
	
		$('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;
	});*/
		//scroll
	    $('#head_menus a, .first_block a').bind('click.smoothscroll',function (e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);
      
      if($('#menu').hasClass('fixed')) { 
        var mtop = $target.offset().top-98;
      } else { 
        var mtop = $target.offset().top-220;
      }
      
      $('html, body').stop().animate({
        'scrollTop': mtop
      }, 900, 'swing');
    });
	
	var menu = $('#menu');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
        menu.addClass('fixed');
      } else {
        menu.removeClass('fixed');
      }
    });
	
});