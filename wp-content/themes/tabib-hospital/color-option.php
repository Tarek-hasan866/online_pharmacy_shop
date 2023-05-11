<?php

	/*---------------------------Width Layout -------------------*/
	$tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_theme_options','Default');
    if($tabib_hospital_theme_lay == 'Default'){
		$tabib_hospital_custom_css .='body{';
			$tabib_hospital_custom_css .='max-width: 100%;';
		$tabib_hospital_custom_css .='}';
		$tabib_hospital_custom_css .='.page-template-custom-home-page .middle-header{';
			$tabib_hospital_custom_css .='width: 97.3%';
		$tabib_hospital_custom_css .='}';
	}else if($tabib_hospital_theme_lay == 'Wide Layout'){
		$tabib_hospital_custom_css .='body{';
			$tabib_hospital_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$tabib_hospital_custom_css .='}';
		$tabib_hospital_custom_css .='.page-template-custom-home-page .middle-header{';
			$tabib_hospital_custom_css .='width: 97.7%';
		$tabib_hospital_custom_css .='}';
	}else if($tabib_hospital_theme_lay == 'Box Layout'){
		$tabib_hospital_custom_css .='body{';
			$tabib_hospital_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$tabib_hospital_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$tabib_hospital_slider_layout = get_theme_mod( 'tabib_hospital_slider_opacity_color','0.3');
	if($tabib_hospital_slider_layout == '0'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.1'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.1';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.2'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.2';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.3'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.3';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.4'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.4';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.5'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.5';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.6'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.6';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.7'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.7';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.8'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.8';
		$tabib_hospital_custom_css .='}';
		}else if($tabib_hospital_slider_layout == '0.9'){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:0.9';
		$tabib_hospital_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$tabib_hospital_slider_layout = get_theme_mod( 'tabib_hospital_slider_content_option','Left');
    if($tabib_hospital_slider_layout == 'Left'){
		$tabib_hospital_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tabib_hospital_custom_css .='text-align:left; left:15%; right:45%; bottom: auto;';
		$tabib_hospital_custom_css .='}';		
	}else if($tabib_hospital_slider_layout == 'Center'){
		$tabib_hospital_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tabib_hospital_custom_css .='text-align:center; left:20%; right:20%; bottom: auto;';
		$tabib_hospital_custom_css .='}';		
	}else if($tabib_hospital_slider_layout == 'Right'){
		$tabib_hospital_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tabib_hospital_custom_css .='text-align:right; left:45%; right:15%; bottom: auto;';
		$tabib_hospital_custom_css .='}';		
	}

	/*----------------------------- Button Settings option-----------------------*/
	$tabib_hospital_top_bottom_padding = get_theme_mod('tabib_hospital_top_bottom_padding');
	$tabib_hospital_left_right_padding = get_theme_mod('tabib_hospital_left_right_padding');
	$tabib_hospital_custom_css .='.post-link a, #slider .readbutton, .form-submit input[type="submit"]{';
		$tabib_hospital_custom_css .='padding-top: '.esc_attr($tabib_hospital_top_bottom_padding).'px; padding-bottom: '.esc_attr($tabib_hospital_top_bottom_padding).'px; padding-left: '.esc_attr($tabib_hospital_left_right_padding).'px; padding-right: '.esc_attr($tabib_hospital_left_right_padding).'px; display:inline-block;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_border_radius = get_theme_mod('tabib_hospital_border_radius');
	$tabib_hospital_custom_css .='.post-link a,#slider .readbutton, .form-submit input[type="submit"]{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/
	$tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_blog_post_layout','Default');
    if($tabib_hospital_theme_lay == 'Default'){
		$tabib_hospital_custom_css .='.blogger{';
			$tabib_hospital_custom_css .='';
		$tabib_hospital_custom_css .='}';
	}else if($tabib_hospital_theme_lay == 'Center'){
		$tabib_hospital_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$tabib_hospital_custom_css .='text-align:center;';
		$tabib_hospital_custom_css .='}';
		$tabib_hospital_custom_css .='.post-info{';
			$tabib_hospital_custom_css .='margin-top:10px;';
		$tabib_hospital_custom_css .='}';
		$tabib_hospital_custom_css .='.blogger .post-link{';
			$tabib_hospital_custom_css .='margin-top:25px;';
		$tabib_hospital_custom_css .='}';
	}else if($tabib_hospital_theme_lay == 'Image and Content'){
		$tabib_hospital_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$tabib_hospital_custom_css .='text-align:Left;';
		$tabib_hospital_custom_css .='}';
		$tabib_hospital_custom_css .='.blogger .post-link{';
			$tabib_hospital_custom_css .='text-align:right;';
		$tabib_hospital_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$tabib_hospital_loader_color_setting = get_theme_mod('tabib_hospital_loader_color_setting');
	$tabib_hospital_custom_css .=' .circle .inner{';
		$tabib_hospital_custom_css .='border-color: '.esc_attr($tabib_hospital_loader_color_setting).';';
	$tabib_hospital_custom_css .='} ';

	$tabib_hospital_loader_background_color = get_theme_mod('tabib_hospital_loader_background_color');
	$tabib_hospital_custom_css .=' #pre-loader{';
		$tabib_hospital_custom_css .='background-color: '.esc_attr($tabib_hospital_loader_background_color).';';
	$tabib_hospital_custom_css .='} ';

	$tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_preloader_types','Default');
    if($tabib_hospital_theme_lay == 'Default'){
		$tabib_hospital_custom_css .='{';
			$tabib_hospital_custom_css .='';
		$tabib_hospital_custom_css .='}';
	}elseif($tabib_hospital_theme_lay == 'Circle'){
		$tabib_hospital_custom_css .='.circle .inner{';
			$tabib_hospital_custom_css .='width:unset;';
		$tabib_hospital_custom_css .='}';
	}elseif($tabib_hospital_theme_lay == 'Two Circle'){
		$tabib_hospital_custom_css .='.circle .inner{';
			$tabib_hospital_custom_css .='width:80%;
    border-right: 5px;';
		$tabib_hospital_custom_css .='}';
	}

	// Responsive Media
	$tabib_hospital_preloader = get_theme_mod( 'tabib_hospital_enable_disable_preloader', false);
	if($tabib_hospital_preloader == true && get_theme_mod( 'tabib_hospital_loader_setting', false) == false){
    	$tabib_hospital_custom_css .='#pre-loader{';
			$tabib_hospital_custom_css .='visibility:hidden;';
		$tabib_hospital_custom_css .='} ';
	}
    if($tabib_hospital_preloader == true){
    	$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='#pre-loader{';
			$tabib_hospital_custom_css .='visibility:visible;';
		$tabib_hospital_custom_css .='} }';
	}else if($tabib_hospital_preloader == false){
		$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='#pre-loader{';
			$tabib_hospital_custom_css .='visibility:hidden;';
		$tabib_hospital_custom_css .='} }';
	}
	
	$tabib_hospital_sidebar = get_theme_mod( 'tabib_hospital_enable_disable_sidebar',true);
    if($tabib_hospital_sidebar == true){
    	$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='#sidebox{';
			$tabib_hospital_custom_css .='display:block;';
		$tabib_hospital_custom_css .='} }';
	}else if($tabib_hospital_sidebar == false){
		$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='#sidebox{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} }';
	}

	$tabib_hospital_stickyheader = get_theme_mod( 'tabib_hospital_enable_disable_topbar',false);
	if($tabib_hospital_stickyheader == true && get_theme_mod( 'tabib_hospital_show_hide_topbar', false) == false){
    	$tabib_hospital_custom_css .='.topbar{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} ';
	}
    if($tabib_hospital_stickyheader == true){
    	$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='.topbar{';
			$tabib_hospital_custom_css .='display:block;';
		$tabib_hospital_custom_css .='} }';
	}else if($tabib_hospital_stickyheader == false){
		$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='.topbar{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} }';
	}

	$tabib_hospital_slider = get_theme_mod( 'tabib_hospital_enable_disable_slider', false);
	if($tabib_hospital_slider == true && get_theme_mod( 'tabib_hospital_slider_arrows', false) == false){
    	$tabib_hospital_custom_css .='#slider{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} ';
	}
    if($tabib_hospital_slider == true){
    	$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='#slider{';
			$tabib_hospital_custom_css .='display:block;';
		$tabib_hospital_custom_css .='} }';
	}else if($tabib_hospital_slider == false){
		$tabib_hospital_custom_css .='@media screen and (max-width:575px){';
		$tabib_hospital_custom_css .='#slider{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} }';
	}

	$tabib_hospital_sliderbutton = get_theme_mod( 'tabib_hospital_show_hide_slider_button', true);
	if($tabib_hospital_sliderbutton == true && get_theme_mod( 'tabib_hospital_slider_button', true) != true){
    	$tabib_hospital_custom_css .='#slider .readbutton{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} ';
	}
    if($tabib_hospital_sliderbutton == true){
    	$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='#slider .readbutton{';
			$tabib_hospital_custom_css .='display:inline-block;';
		$tabib_hospital_custom_css .='} }';
	}else if($tabib_hospital_sliderbutton != true){
		$tabib_hospital_custom_css .='@media screen and (max-width:575px){';
		$tabib_hospital_custom_css .='#slider .readbutton{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} }';
	}

	$tabib_hospital_scroll = get_theme_mod( 'tabib_hospital_enable_disable_scrolltop', false);
	if($tabib_hospital_scroll == true && get_theme_mod( 'tabib_hospital_hide_show_scroll', false) == false){
    	$tabib_hospital_custom_css .='.scrollup i{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} ';
	}
    if($tabib_hospital_scroll == true){
    	$tabib_hospital_custom_css .='@media screen and (max-width:575px) {';
		$tabib_hospital_custom_css .='.scrollup i{';
			$tabib_hospital_custom_css .='display:block;';
		$tabib_hospital_custom_css .='} }';
	}else if($tabib_hospital_scroll == false){
		$tabib_hospital_custom_css .='@media screen and (max-width:575px){';
		$tabib_hospital_custom_css .='.scrollup i{';
			$tabib_hospital_custom_css .='display:none;';
		$tabib_hospital_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$tabib_hospital_copyright_top_bottom_padding = get_theme_mod('tabib_hospital_copyright_top_bottom_padding');
	$tabib_hospital_custom_css .='.site-info{';
		$tabib_hospital_custom_css .='padding-top: '.esc_attr($tabib_hospital_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($tabib_hospital_copyright_top_bottom_padding).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_footer_text_font_size = get_theme_mod('tabib_hospital_footer_text_font_size', 16);
	$tabib_hospital_custom_css .='.site-info{';
		$tabib_hospital_custom_css .='font-size: '.esc_attr($tabib_hospital_footer_text_font_size).'px;';
	$tabib_hospital_custom_css .='}';

	// Slider Height 
	$tabib_hospital_slider_height_option = get_theme_mod('tabib_hospital_slider_height_option');
	$tabib_hospital_custom_css .='#slider img{';
		$tabib_hospital_custom_css .='height: '.esc_attr($tabib_hospital_slider_height_option).'px;';
	$tabib_hospital_custom_css .='}';

	// scroll to top setting
	$tabib_hospital_scroll_border_radius = get_theme_mod('tabib_hospital_scroll_border_radius');
	$tabib_hospital_custom_css .='.scrollup i{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_scroll_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_scroll_top_fontsize = get_theme_mod('tabib_hospital_scroll_top_fontsize');
	$tabib_hospital_custom_css .='.scrollup i{';
		$tabib_hospital_custom_css .='font-size: '.esc_attr($tabib_hospital_scroll_top_fontsize).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_scroll_top_bottom_padding = get_theme_mod('tabib_hospital_scroll_top_bottom_padding');
	$tabib_hospital_scroll_left_right_padding = get_theme_mod('tabib_hospital_scroll_left_right_padding');
	$tabib_hospital_custom_css .='.scrollup i{';
		$tabib_hospital_custom_css .='padding-top: '.esc_attr($tabib_hospital_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($tabib_hospital_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($tabib_hospital_scroll_left_right_padding).'px; padding-right: '.esc_attr($tabib_hospital_scroll_left_right_padding).'px;';
	$tabib_hospital_custom_css .='}';

	// comment settings
	$tabib_hospital_comment_button_text = get_theme_mod('tabib_hospital_comment_button_text', 'Post Comment');
	if($tabib_hospital_comment_button_text == ''){
		$tabib_hospital_custom_css .='#comments p.form-submit {';
			$tabib_hospital_custom_css .='display: none;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_comment_form_heading = get_theme_mod('tabib_hospital_comment_form_heading', 'Leave a Reply');
	if($tabib_hospital_comment_form_heading == ''){
		$tabib_hospital_custom_css .='#comments h2#reply-title {';
			$tabib_hospital_custom_css .='display: none;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_comment_form_size = get_theme_mod( 'tabib_hospital_comment_form_size',100);
	$tabib_hospital_custom_css .='#comments textarea{';
		$tabib_hospital_custom_css .='width: '.esc_attr($tabib_hospital_comment_form_size).'%;';
	$tabib_hospital_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$tabib_hospital_shop_button_padding_top = get_theme_mod('tabib_hospital_shop_button_padding_top', 9);
	$tabib_hospital_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tabib_hospital_custom_css .='padding-top: '.esc_attr($tabib_hospital_shop_button_padding_top).'px; padding-bottom: '.esc_attr($tabib_hospital_shop_button_padding_top).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_shop_button_padding_left = get_theme_mod('tabib_hospital_shop_button_padding_left', 16);
	$tabib_hospital_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tabib_hospital_custom_css .='padding-left: '.esc_attr($tabib_hospital_shop_button_padding_left).'px; padding-right: '.esc_attr($tabib_hospital_shop_button_padding_left).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_shop_button_border_radius = get_theme_mod('tabib_hospital_shop_button_border_radius',3);
	$tabib_hospital_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_shop_button_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_display_related_products = get_theme_mod('tabib_hospital_display_related_products',true);
	if($tabib_hospital_display_related_products == false){
		$tabib_hospital_custom_css .='.related.products{';
			$tabib_hospital_custom_css .='display: none;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_shop_products_border = get_theme_mod('tabib_hospital_shop_products_border', true);
	if($tabib_hospital_shop_products_border == false){
		$tabib_hospital_custom_css .='.woocommerce .products li{';
			$tabib_hospital_custom_css .='border: none;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_shop_page_top_padding = get_theme_mod('tabib_hospital_shop_page_top_padding',10);
	$tabib_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tabib_hospital_custom_css .='padding-top: '.esc_attr($tabib_hospital_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($tabib_hospital_shop_page_top_padding).'px !important;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_shop_page_left_padding = get_theme_mod('tabib_hospital_shop_page_left_padding',10);
	$tabib_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tabib_hospital_custom_css .='padding-left: '.esc_attr($tabib_hospital_shop_page_left_padding).'px !important; padding-right: '.esc_attr($tabib_hospital_shop_page_left_padding).'px !important;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_shop_page_border_radius = get_theme_mod('tabib_hospital_shop_page_border_radius',0);
	$tabib_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_shop_page_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_shop_page_box_shadow = get_theme_mod('tabib_hospital_shop_page_box_shadow',0);
	$tabib_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tabib_hospital_custom_css .='box-shadow: '.esc_attr($tabib_hospital_shop_page_box_shadow).'px '.esc_attr($tabib_hospital_shop_page_box_shadow).'px '.esc_attr($tabib_hospital_shop_page_box_shadow).'px #e4e4e4;';
	$tabib_hospital_custom_css .='}';

	// footer widget background
	$tabib_hospital_footer_widget_background = get_theme_mod('tabib_hospital_footer_widget_background', '#2d2d2d2');
	$tabib_hospital_custom_css .='.site-footer{';
		$tabib_hospital_custom_css .='background-color: '.esc_attr($tabib_hospital_footer_widget_background).';';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_footer_widget_image = get_theme_mod('tabib_hospital_footer_widget_image');
	if($tabib_hospital_footer_widget_image != false){
		$tabib_hospital_custom_css .='.site-footer{';
			$tabib_hospital_custom_css .='background: url('.esc_attr($tabib_hospital_footer_widget_image).');';
		$tabib_hospital_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$tabib_hospital_navigation_menu_font_size = get_theme_mod('tabib_hospital_navigation_menu_font_size');{
		$tabib_hospital_custom_css .='.main-navigation a, .navigation-top a{';
			$tabib_hospital_custom_css .='font-size: '.esc_attr($tabib_hospital_navigation_menu_font_size).'px;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_menu_text_tranform','Default');
	if($tabib_hospital_theme_lay == 'Uppercase'){
		$tabib_hospital_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a{';
			$tabib_hospital_custom_css .='text-transform:Uppercase;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_menu_font_weight','Default');
	if($tabib_hospital_theme_lay == 'Normal'){
		$tabib_hospital_custom_css .='.main-navigation a, .navigation-top a{';
			$tabib_hospital_custom_css .='font-weight: normal;';
		$tabib_hospital_custom_css .='}';
	}

	// menu color
	$tabib_hospital_menu_color = get_theme_mod('tabib_hospital_menu_color');
	$tabib_hospital_custom_css .='.main-navigation a, .main-navigation ul li a, #site-navigation li a{';
			$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_menu_color).' !important;';
	$tabib_hospital_custom_css .='}';

	// Sub menu color
	$tabib_hospital_sub_menu_color = get_theme_mod('tabib_hospital_sub_menu_color');
	$tabib_hospital_custom_css .='.main-navigation ul.sub-menu a, .main-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a{';
			$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_sub_menu_color).' !important;';
	$tabib_hospital_custom_css .='}';

	// menu hover color
	$tabib_hospital_menu_hover_color = get_theme_mod('tabib_hospital_menu_hover_color');
	$tabib_hospital_custom_css .='.main-navigation a:hover, .main-navigation ul li a:hover, .main-navigation .current_page_item > a:hover, .main-navigation .current-menu-item > a:hover, .main-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_menu_hover_color).' !important;';
	$tabib_hospital_custom_css .='}';

	// Sub menu hover color
	$tabib_hospital_sub_menu_hover_color = get_theme_mod('tabib_hospital_sub_menu_hover_color');
	$tabib_hospital_custom_css .='.main-navigation ul.sub-menu a:hover, .main-navigation ul.sub-menu li a:hover, .main-navigation .current_page_item > a:hover, .main-navigation .current-menu-item > a:hover, .main-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover{';
			$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_sub_menu_hover_color).' !important;';
	$tabib_hospital_custom_css .='}';

	// site title color option
	$tabib_hospital_site_title_color_setting = get_theme_mod('tabib_hospital_site_title_color_setting');
	$tabib_hospital_custom_css .=' .site-title a{';
		$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_site_title_color_setting).';';
	$tabib_hospital_custom_css .='} ';

	$tabib_hospital_tagline_color_setting = get_theme_mod('tabib_hospital_tagline_color_setting');
	$tabib_hospital_custom_css .=' .site-description {';
		$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_tagline_color_setting).'!important;';
	$tabib_hospital_custom_css .='} ';

	// site title font size option
	$tabib_hospital_site_title_font_size = get_theme_mod('tabib_hospital_site_title_font_size', 30);{
	$tabib_hospital_custom_css .='.logo h1, .site-title a{';
	$tabib_hospital_custom_css .='font-size: '.esc_attr($tabib_hospital_site_title_font_size).'px;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_site_tagline_font_size_settings = get_theme_mod('tabib_hospital_site_tagline_font_size_settings', 13);{
	$tabib_hospital_custom_css .='.logo p.site-description{';
	$tabib_hospital_custom_css .='font-size: '.esc_attr($tabib_hospital_site_tagline_font_size_settings).'px;';
		$tabib_hospital_custom_css .='}';
	}

	// -------------- site logo margin ------------
	$tabib_hospital_logo_margin = get_theme_mod('tabib_hospital_logo_margin', '');{
	$tabib_hospital_custom_css .='.logo{';
	$tabib_hospital_custom_css .='margin: '.esc_attr($tabib_hospital_logo_margin).'px ;';
	$tabib_hospital_custom_css .='}';
	}
		//  ------------------logo padding-----------
		$tabib_hospital_logo_padding = get_theme_mod('tabib_hospital_logo_padding');
		$tabib_hospital_custom_css .='.logo{';
		$tabib_hospital_custom_css .='padding: '.esc_attr($tabib_hospital_logo_padding).'px;';
		$tabib_hospital_custom_css .='}';

	/*------------------ Background Skin Option  -------------------*/
	$tabib_hospital_theme_lay = get_theme_mod( 'tabib_hospital_background_image_type','Transparent');
    if($tabib_hospital_theme_lay == 'Background'){
		$tabib_hospital_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$tabib_hospital_custom_css .='background-color: #fff;';
		$tabib_hospital_custom_css .='}';
	}else if($tabib_hospital_theme_lay == 'Transparent'){
		$tabib_hospital_custom_css .='#services h3{';
			$tabib_hospital_custom_css .='background-color: transparent;';
		$tabib_hospital_custom_css .='}';
	}

	// slider overlay
	$tabib_hospital_show_slider_image_overlay = get_theme_mod('tabib_hospital_show_slider_image_overlay', true);
	if($tabib_hospital_show_slider_image_overlay == false){
		$tabib_hospital_custom_css .='#slider img{';
			$tabib_hospital_custom_css .='opacity:1;';
		$tabib_hospital_custom_css .='}';
	} 
	$tabib_hospital_color_slider_image_overlay = get_theme_mod('tabib_hospital_color_slider_image_overlay', true);
	if($tabib_hospital_show_slider_image_overlay != false){
		$tabib_hospital_custom_css .='#slider{';
			$tabib_hospital_custom_css .='background-color: '.esc_attr($tabib_hospital_color_slider_image_overlay).';';
		$tabib_hospital_custom_css .='}';
	}

	// woocommerce product sale settings
	$tabib_hospital_border_radius_product_sale_text = get_theme_mod('tabib_hospital_border_radius_product_sale_text',50);
	$tabib_hospital_custom_css .='.woocommerce span.onsale {';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_border_radius_product_sale_text).'%;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_position_product_sale = get_theme_mod('tabib_hospital_position_product_sale', 'Right');
	if($tabib_hospital_position_product_sale == 'Right' ){
		$tabib_hospital_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tabib_hospital_custom_css .=' left:auto; right:0;';
		$tabib_hospital_custom_css .='}';
	}elseif($tabib_hospital_position_product_sale == 'Left' ){
		$tabib_hospital_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tabib_hospital_custom_css .=' left:0; right:auto;';
		$tabib_hospital_custom_css .='}';
	}

	$tabib_hospital_product_sale_text_size = get_theme_mod('tabib_hospital_product_sale_text_size',14);
	$tabib_hospital_custom_css .='.woocommerce span.onsale{';
		$tabib_hospital_custom_css .='font-size: '.esc_attr($tabib_hospital_product_sale_text_size).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_top_bottom_product_sale_padding = get_theme_mod('tabib_hospital_top_bottom_product_sale_padding');
	$tabib_hospital_left_right_product_sale_padding = get_theme_mod('tabib_hospital_left_right_product_sale_padding');
	$tabib_hospital_custom_css .='.woocommerce span.onsale{';
		$tabib_hospital_custom_css .='padding-top: '.esc_attr($tabib_hospital_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($tabib_hospital_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($tabib_hospital_left_right_product_sale_padding).'px; padding-right: '.esc_attr($tabib_hospital_left_right_product_sale_padding).'px; display:inline-block;';
	$tabib_hospital_custom_css .='}';

	// woocommerce Product Navigation
	$tabib_hospital_shop_products_navigation = get_theme_mod('tabib_hospital_shop_products_navigation', 'Yes');
	if($tabib_hospital_shop_products_navigation == 'No'){
		$tabib_hospital_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$tabib_hospital_custom_css .='display: none;';
		$tabib_hospital_custom_css .='}';
	}

	// Post Block
	$tabib_hospital_post_break_block_setting = get_theme_mod( 'tabib_hospital_post_break_block_setting','Into Blocks');
    if($tabib_hospital_post_break_block_setting == 'Without Blocks'){
		$tabib_hospital_custom_css .='.blogger{';
			$tabib_hospital_custom_css .='border: none; margin:30px 0;';
		$tabib_hospital_custom_css .='}';
	}

	// fixed header padding option
	$tabib_hospital_fixed_header_padding_option = get_theme_mod('tabib_hospital_fixed_header_padding_option');
	$tabib_hospital_custom_css .='.fixed-header{';
		$tabib_hospital_custom_css .='padding: '.esc_attr($tabib_hospital_fixed_header_padding_option).'px;';
	$tabib_hospital_custom_css .='}';

	// slider top and bottom padding
	$tabib_hospital_padding_top_bottom_slider_content = get_theme_mod('tabib_hospital_padding_top_bottom_slider_content');
	$tabib_hospital_padding_left_right_slider_content = get_theme_mod('tabib_hospital_padding_left_right_slider_content');
	$tabib_hospital_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$tabib_hospital_custom_css .='top: '.esc_attr($tabib_hospital_padding_top_bottom_slider_content).'%; bottom: '.esc_attr($tabib_hospital_padding_top_bottom_slider_content).'%;left: '.esc_attr($tabib_hospital_padding_left_right_slider_content).'%;right: '.esc_attr($tabib_hospital_padding_left_right_slider_content).'%;';

	$tabib_hospital_custom_css .='}';

	// featured image setting
	$tabib_hospital_post_image_border_radius = get_theme_mod('tabib_hospital_post_image_border_radius', 0);
	$tabib_hospital_custom_css .='.post-image img, .wrapper img, .middle-align img{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_post_image_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_featured_image_box_shadow = get_theme_mod('tabib_hospital_featured_image_box_shadow',0);
	$tabib_hospital_custom_css .='.post-image img, .wrapper img{';
		$tabib_hospital_custom_css .='box-shadow: '.esc_attr($tabib_hospital_featured_image_box_shadow).'px '.esc_attr($tabib_hospital_featured_image_box_shadow).'px '.esc_attr($tabib_hospital_featured_image_box_shadow).'px #ccc;';
	$tabib_hospital_custom_css .='}';

    //Copyright background css
	$tabib_hospital_copyright_background_color = get_theme_mod('tabib_hospital_copyright_background_color');
	$tabib_hospital_custom_css .='.site-info{';
		$tabib_hospital_custom_css .='background-color: '.esc_attr($tabib_hospital_copyright_background_color).';';
	$tabib_hospital_custom_css .='}';
     
    // featured image dimention
	$tabib_hospital_post_image_dimention = get_theme_mod('tabib_hospital_post_image_dimention', 'Default');
	$tabib_hospital_post_featured_image_width = get_theme_mod('tabib_hospital_post_featured_image_width');
	$tabib_hospital_post_featured_image_height = get_theme_mod('tabib_hospital_post_featured_image_height');
	if($tabib_hospital_post_image_dimention == 'Custom Image Size'){
		$tabib_hospital_custom_css .='.post-image img{';
			$tabib_hospital_custom_css .='width: '.esc_attr($tabib_hospital_post_featured_image_width).'px; height: '.esc_attr($tabib_hospital_post_featured_image_height).'px;';
		$tabib_hospital_custom_css .='}';
	}
	
	// Single Post Categories
	$tabib_hospital_show_hide_single_post_categories = get_theme_mod('tabib_hospital_show_hide_single_post_categories',false);
	if ($tabib_hospital_show_hide_single_post_categories == false) {
		$tabib_hospital_custom_css .='.post-info{';
			$tabib_hospital_custom_css .=' margin-top:20px;';
		$tabib_hospital_custom_css .='}';
	}

	 // Blog post image border radious
    $tabib_hospital_blog_post_img_border_radius = get_theme_mod('tabib_hospital_blog_post_img_border_radius', 0);
	$tabib_hospital_custom_css .='.post-image img{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_blog_post_img_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

     // Blog post image box shadow
	$tabib_hospital_blog_post_img_box_shadow = get_theme_mod('tabib_hospital_blog_post_img_box_shadow',0);
	$tabib_hospital_custom_css .='.post-image img{';
		$tabib_hospital_custom_css .='box-shadow: '.esc_attr($tabib_hospital_blog_post_img_box_shadow).'px '.esc_attr($tabib_hospital_blog_post_img_box_shadow).'px '.esc_attr($tabib_hospital_blog_post_img_box_shadow).'px #ccc;';
	$tabib_hospital_custom_css .='}';

    // Single post image border radious
	$tabib_hospital_single_post_img_border_radius = get_theme_mod('tabib_hospital_single_post_img_border_radius', 0);
	$tabib_hospital_custom_css .='.blogger.singlebox .post-image img{';
		$tabib_hospital_custom_css .='border-radius: '.esc_attr($tabib_hospital_single_post_img_border_radius).'px;';
	$tabib_hospital_custom_css .='}';

	 // Single post image box shadow
	$tabib_hospital_single_post_img_box_shadow = get_theme_mod('tabib_hospital_single_post_img_box_shadow',0);
	$tabib_hospital_custom_css .='.blogger.singlebox .post-image img{';
		$tabib_hospital_custom_css .='box-shadow: '.esc_attr($tabib_hospital_single_post_img_box_shadow).'px '.esc_attr($tabib_hospital_single_post_img_box_shadow).'px '.esc_attr($tabib_hospital_single_post_img_box_shadow).'px #ccc;';
	$tabib_hospital_custom_css .='}';

	// Single post comments
	$tabib_hospital_post_comment_enable = get_theme_mod('tabib_hospital_post_comment_enable',true);
	if($tabib_hospital_post_comment_enable == false){
		$tabib_hospital_custom_css .='#comments{';
			$tabib_hospital_custom_css .='display: none;';
		$tabib_hospital_custom_css .='}';
	}
	
	//scroll to top css
	$tabib_hospital_scroll_background_color = get_theme_mod('tabib_hospital_scroll_background_color');
	$tabib_hospital_custom_css .='.scrollup i{';
	$tabib_hospital_custom_css .='background: '.esc_attr($tabib_hospital_scroll_background_color).';';
	$tabib_hospital_custom_css .='border-color: '.esc_attr($tabib_hospital_scroll_background_color).';';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_scroll_icon_color = get_theme_mod('tabib_hospital_scroll_icon_color');
	$tabib_hospital_custom_css .='.scrollup i{';
	$tabib_hospital_custom_css .='color: '.esc_attr($tabib_hospital_scroll_icon_color).';';
	$tabib_hospital_custom_css .='}';

	$tabib_hospital_scroll_background_hover_color = get_theme_mod('tabib_hospital_scroll_background_hover_color');
	$tabib_hospital_custom_css .='.scrollup i:hover{';
	$tabib_hospital_custom_css .='background: '.esc_attr($tabib_hospital_scroll_background_hover_color).';';
	$tabib_hospital_custom_css .='border-color: '.esc_attr($tabib_hospital_scroll_background_hover_color).';';
	$tabib_hospital_custom_css .='}';