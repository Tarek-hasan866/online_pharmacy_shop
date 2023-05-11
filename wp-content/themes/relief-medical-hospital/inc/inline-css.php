<?php
	
	$relief_medical_hospital_custom_css = '';
	
	/*-------------- Footer Text -------------------*/
	$relief_medical_hospital_text_position = get_theme_mod('relief_medical_hospital_text_position');
	if($relief_medical_hospital_text_position != false){
		$relief_medical_hospital_custom_css .='.copyright{';
			$relief_medical_hospital_custom_css .='text-align: '.esc_attr($relief_medical_hospital_text_position).';';
		$relief_medical_hospital_custom_css .='}';
	}

	//Social icon Font size
	 $relief_medical_hospital_social_icon_fontsize = get_theme_mod('relief_medical_hospital_social_icon_fontsize');
	$relief_medical_hospital_custom_css .='.social-media i{';
		$relief_medical_hospital_custom_css .='font-size: '.esc_attr($relief_medical_hospital_social_icon_fontsize).'px;';
	$relief_medical_hospital_custom_css .='}';

	/*----------------Width Layout -------------------*/
    $relief_medical_hospital_theme_lay = get_theme_mod( 'relief_medical_hospital_width_options','Full Width');
    if($relief_medical_hospital_theme_lay == 'Full Width'){
		$relief_medical_hospital_custom_css .='body{';
			$relief_medical_hospital_custom_css .='max-width: 100%;';
		$relief_medical_hospital_custom_css .='}';
	}else if($relief_medical_hospital_theme_lay == 'Contained Width'){
		$relief_medical_hospital_custom_css .='body{';
			$relief_medical_hospital_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$relief_medical_hospital_custom_css .='}';
	}else if($relief_medical_hospital_theme_lay == 'Boxed Width'){
		$relief_medical_hospital_custom_css .='body{';
			$relief_medical_hospital_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$relief_medical_hospital_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$relief_medical_hospital_footer_background_color = get_theme_mod('relief_medical_hospital_footer_background_color');
	$relief_medical_hospital_custom_css .='.footersec{';
		$relief_medical_hospital_custom_css .='background-color: '.esc_attr($relief_medical_hospital_footer_background_color).';';
	$relief_medical_hospital_custom_css .='}';

    /*-------- Copyright background css -------*/
	$relief_medical_hospital_copyright_background_color = get_theme_mod('relief_medical_hospital_copyright_background_color');
	$relief_medical_hospital_custom_css .='.copyright{';
		$relief_medical_hospital_custom_css .='background-color: '.esc_attr($relief_medical_hospital_copyright_background_color).';';
	$relief_medical_hospital_custom_css .='}';

	// site title and tagline font size option
	$relief_medical_hospital_site_title_font_size = get_theme_mod('relief_medical_hospital_site_title_font_size', 25);{
	$relief_medical_hospital_custom_css .='.logo h1 a, .logo p a{';
	$relief_medical_hospital_custom_css .='font-size: '.esc_attr($relief_medical_hospital_site_title_font_size).'px;';
		$relief_medical_hospital_custom_css .='}';
	}

	$relief_medical_hospital_site_tagline_font_size = get_theme_mod('relief_medical_hospital_site_tagline_font_size', 12);{
	$relief_medical_hospital_custom_css .='.logo p{';
	$relief_medical_hospital_custom_css .='font-size: '.esc_attr($relief_medical_hospital_site_tagline_font_size).'px !important;';
		$relief_medical_hospital_custom_css .='}';
	}
     
     