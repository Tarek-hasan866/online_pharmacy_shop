<?php
/**
 * Custom header implementation
 */

function tabib_hospital_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'tabib_hospital_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 195,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'tabib_hospital_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'tabib_hospital_custom_header_setup' );

if ( ! function_exists( 'tabib_hospital_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see tabib_hospital_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'tabib_hospital_header_style' );
function tabib_hospital_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$tabib_hospital_custom_css = "
        #masthead, .page-template-home-custom #masthead{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'tabib-hospital-basic-style', $tabib_hospital_custom_css );
	endif;
}
endif; // tabib_hospital_header_style