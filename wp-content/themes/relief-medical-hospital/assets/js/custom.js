jQuery(function($){
 "use strict";
   jQuery('.main-menu-navigation > ul').superfish({
     delay:       500,                            
     animation:   {opacity:'show',height:'show'},  
     speed:       'fast'                        
   });

});

function relief_medical_hospital_resmenu_open() {
	window.relief_medical_hospital_mobileMenu=true;
	jQuery(".sidebar").addClass('menubar');
}
function relief_medical_hospital_resmenu_close() {
	window.relief_medical_hospital_mobileMenu=false;
	jQuery(".sidebar").removeClass('menubar');
}

jQuery(document).ready(function () {

	window.relief_medical_hospital_currentfocus=null;
  	relief_medical_hospital_checkfocusdElement();
	var relief_medical_hospital_body = document.querySelector('body');
	relief_medical_hospital_body.addEventListener('keyup', relief_medical_hospital_check_tab_press);
	var relief_medical_hospital_gotoHome = false;
	var relief_medical_hospital_gotoClose = false;
	window.relief_medical_hospital_mobileMenu=false;
 	function relief_medical_hospital_checkfocusdElement(){
	 	if(window.relief_medical_hospital_currentfocus=document.activeElement.className){
		 	window.relief_medical_hospital_currentfocus=document.activeElement.className;
	 	}
 	}
	function relief_medical_hospital_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
			if (e.keyCode == 9) {
				if(window.relief_medical_hospital_mobileMenu){
					if (!e.shiftKey) {
						if(relief_medical_hospital_gotoHome) {
							jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
						}
					}
					if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
						relief_medical_hospital_gotoHome = true;
					} else {
						relief_medical_hospital_gotoHome = false;
					}

			}else{

					if(window.relief_medical_hospital_currentfocus=="resToggle"){
						jQuery( "" ).focus();
					}
				}
			}
		}
		if (e.shiftKey && e.keyCode == 9) {
			if(window.innerWidth < 999){
				if(window.relief_medical_hospital_currentfocus=="header-search"){
					jQuery(".resToggle").focus();
				}else{
					if(window.relief_medical_hospital_mobileMenu){
						if(relief_medical_hospital_gotoClose){
							jQuery("a.closebtn.responsive-menu").focus();
						}
						if (jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
							relief_medical_hospital_gotoClose = true;
						} else {
							relief_medical_hospital_gotoClose = false;
					}
				
				}else{

					if(window.relief_medical_hospital_mobileMenu){
					}
				}

				}
			}
		}
	 	relief_medical_hospital_checkfocusdElement();
	}

});

(function( $ ) {

	$(window).scroll(function(){
	  var sticky = $('.sticky-menubox'),
	      scroll = $(window).scrollTop();

	  if (scroll >= 100) sticky.addClass('fixed-menubox');
	  else sticky.removeClass('fixed-menubox');
	});

})( jQuery );