(function ($) {
   'use strict';
   $(document).ready(function(){
  	$('a[href="#float-search"]').on('click', function(e) { 
      e.preventDefault();
       e.stopPropagation();                   
  		$('.float-search-form').addClass('open');
  		$('.float-search-form > form > input[type="search"]').focus();
  	});            
  	$('.float-search-form, .float-search-form .fa-close').on('click keyup', function(e) {
  		if (e.target == this || e.target.className == 'close' || e.keyCode == 27) {
  			$('.float-search-form').removeClass('open');
  		}
  	});
    $('.float-search-form > form > input[type="search"]').on('focusout', function(e) {                    
  		$('.float-search-form').removeClass('open');
  	});             
  });
  
     $(window).scroll(function () {
        var $myDiv = $('.float-cart-login');
        if ($myDiv.length) {
            var header = $('#site-navigation').outerHeight();
            if ($(document).scrollTop() >  120) {
                $myDiv.animate({'top': '40px'}, 200);
            } else {
                 $myDiv.stop(true).animate({'top': '18%'}, 100);
            }
        }
    });
    
})(jQuery);