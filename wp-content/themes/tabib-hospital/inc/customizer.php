<?php
/**
 * Tabib Hospital: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function tabib_hospital_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'tabib_hospital_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'tabib-hospital' ),
	    'description' => __( 'Description of what this panel does.', 'tabib-hospital' ),
	) );

	// font array
	$tabib_hospital_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'tabib_hospital_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'tabib-hospital' ),
		'panel' => 'tabib_hospital_panel_id'
	) );

	// This is Body Color setting
	$wp_customize->add_setting( 'tabib_hospital_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_body_color', array(
		'label' => __('Body Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('tabib_hospital_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
		'tabib_hospital_body_font_family', array(
		'section'  => 'tabib_hospital_typography',
		'label'    => __( 'Body Fonts','tabib-hospital'),
		'type'     => 'select',
		'choices'  => $tabib_hospital_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('tabib_hospital_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_body_font_size',array(
		'label'	=> __('Body Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_body_font_size',
		'type'	=> 'text'
	));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_paragraph_color', array(
		'label' => __('Paragraph Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_paragraph_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'Paragraph Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	$wp_customize->add_setting('tabib_hospital_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_atag_color', array(
		'label' => __('"a" Tag Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_atag_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( '"a" Tag Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_li_color', array(
		'label' => __('"li" Tag Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_li_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( '"li" Tag Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_h1_color', array(
		'label' => __('H1 Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_h1_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'H1 Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('tabib_hospital_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_h1_font_size',array(
		'label'	=> __('H1 Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_h2_color', array(
		'label' => __('h2 Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_h2_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'h2 Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('tabib_hospital_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_h2_font_size',array(
		'label'	=> __('h2 Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_h3_color', array(
		'label' => __('h3 Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_h3_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'h3 Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('tabib_hospital_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_h3_font_size',array(
		'label'	=> __('h3 Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_h4_color', array(
		'label' => __('h4 Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_h4_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'h4 Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('tabib_hospital_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_h4_font_size',array(
		'label'	=> __('h4 Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_h5_color', array(
		'label' => __('h5 Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_h5_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'h5 Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('tabib_hospital_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_h5_font_size',array(
		'label'	=> __('h5 Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'tabib_hospital_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_h6_color', array(
		'label' => __('h6 Color', 'tabib-hospital'),
		'section' => 'tabib_hospital_typography',
		'settings' => 'tabib_hospital_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('tabib_hospital_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tabib_hospital_h6_font_family', array(
	    'section'  => 'tabib_hospital_typography',
	    'label'    => __( 'h6 Fonts','tabib-hospital'),
	    'type'     => 'select',
	    'choices'  => $tabib_hospital_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('tabib_hospital_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_h6_font_size',array(
		'label'	=> __('h6 Font Size','tabib-hospital'),
		'section'	=> 'tabib_hospital_typography',
		'setting'	=> 'tabib_hospital_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('tabib_hospital_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','tabib-hospital'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','tabib-hospital'),
            'Background' => __('Background','tabib-hospital'),
        ),
	) );

  	// woocommerce Options
	$wp_customize->add_section( 'tabib_hospital_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'tabib-hospital' ),
		'panel' => 'tabib_hospital_panel_id'
	) );

	$wp_customize->add_setting('tabib_hospital_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','tabib-hospital'),
       'section' => 'tabib_hospital_shop_page_options',
    ));

    $wp_customize->add_setting('tabib_hospital_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','tabib-hospital'),
       'section' => 'tabib_hospital_shop_page_options',
    ));

  	$wp_customize->add_setting('tabib_hospital_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop Page Sidebar','tabib-hospital'),
       'section' => 'tabib_hospital_shop_page_options',
    ));

    $wp_customize->add_setting('tabib_hospital_single_product_sidebar',array(
        'default' => true,
        'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('tabib_hospital_single_product_sidebar',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Single Product Sidebar','tabib-hospital'),
      	'section' => 'tabib_hospital_shop_page_options',
	));

	$wp_customize->add_setting( 'tabib_hospital_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'tabib_hospital_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tabib_hospital_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'tabib-hospital' ),
		'section'  => 'tabib_hospital_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('tabib_hospital_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));	
	$wp_customize->add_control('tabib_hospital_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','tabib-hospital'),
		'section'	=> 'tabib_hospital_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control( 'tabib_hospital_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control( 'tabib_hospital_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tabib_hospital_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'tabib_hospital_shop_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('tabib_hospital_position_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_position_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','tabib-hospital'),
        'section' => 'tabib_hospital_shop_page_options',
        'choices' => array(
            'Right' => __('Right','tabib-hospital'),
            'Left' => __('Left','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting( 'tabib_hospital_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_border_radius_product_sale_text', array(
        'label'  => __('Product Sale Border Radius','tabib-hospital'),
        'section'  => 'tabib_hospital_shop_page_options',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('tabib_hospital_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float'
	));
	$wp_customize->add_control('tabib_hospital_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_shop_page_options',
		'type'=> 'number'
	));
	
	$wp_customize->add_setting( 'tabib_hospital_top_bottom_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_top_bottom_product_sale_padding',	array(
		'label' => esc_html__( 'Top / Bottom Product Sale Padding','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tabib_hospital_left_right_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_left_right_product_sale_padding',array(
		'label' => esc_html__( 'Left / Right Product Sale Padding','tabib-hospital' ),
		'section' => 'tabib_hospital_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('tabib_hospital_shop_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control('tabib_hospital_shop_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','tabib-hospital'),
       'choices' => array(
            'Yes' => __('Yes','tabib-hospital'),
            'No' => __('No','tabib-hospital'),
        ),
       'section' => 'tabib_hospital_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'tabib_hospital_width_layout', array(
    	'title'      => __( 'Layout Settings', 'tabib-hospital' ),
		'panel' => 'tabib_hospital_panel_id'
	) );

	$wp_customize->add_setting( 'tabib_hospital_single_page_breadcrumb',array(
		'default' => true,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
  	) );
  	$wp_customize->add_control('tabib_hospital_single_page_breadcrumb',array(
	  	'type' => 'checkbox',
	    'label' => __( 'Show / Hide Single Page Breadcrumb','tabib-hospital'),
	    'section' => 'tabib_hospital_width_layout'
  	));

	//Sticky Header
	$wp_customize->add_setting( 'tabib_hospital_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tabib_hospital_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','tabib-hospital' ),
        'section' => 'tabib_hospital_width_layout'
    ));

    $wp_customize->add_setting( 'tabib_hospital_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','tabib-hospital' ),
		'section'     => 'tabib_hospital_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tabib_hospital_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','tabib-hospital'),
       'section' => 'tabib_hospital_width_layout'
    ));

    $wp_customize->add_setting('tabib_hospital_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','tabib-hospital'),
        'section' => 'tabib_hospital_width_layout',
        'choices' => array(
            'Default' => __('Default','tabib-hospital'),
            'Circle' => __('Circle','tabib-hospital'),
            'Two Circle' => __('Two Circle','tabib-hospital')
        ),
	) );

    $wp_customize->add_setting( 'tabib_hospital_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'tabib-hospital'),
	    'section' => 'tabib_hospital_width_layout',
	    'settings' => 'tabib_hospital_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'tabib_hospital_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'tabib-hospital'),
	    'section' => 'tabib_hospital_width_layout',
	    'settings' => 'tabib_hospital_loader_background_color',
  	)));

	$wp_customize->add_setting('tabib_hospital_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','tabib-hospital'),
        'description' => __('Here you can change the Width layout. ','tabib-hospital'),
        'section' => 'tabib_hospital_width_layout',
        'choices' => array(
            'Default' => __('Default','tabib-hospital'),
            'Wide Layout' => __('Wide Layout','tabib-hospital'),
            'Box Layout' => __('Box Layout','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting( 'tabib_hospital_post_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_post_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','tabib-hospital' ),
		'section'     => 'tabib_hospital_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tabib_hospital_featured_image_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tabib_hospital_sanitize_number_range',
	));
	$wp_customize->add_control('tabib_hospital_featured_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','tabib-hospital' ),
		'section' => 'tabib_hospital_width_layout',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	// Button Settings
	$wp_customize->add_section( 'tabib_hospital_button_option', array(
		'title' => __('Button','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));

	$wp_customize->add_setting('tabib_hospital_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tabib_hospital_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_left_right_padding',array(
		'label'	=> __('Left and Right Padding','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','tabib-hospital' ),
		'section'     => 'tabib_hospital_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// sidebar setting
	$wp_customize->add_section( 'tabib_hospital_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'tabib-hospital' ),
		'panel' => 'tabib_hospital_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('tabib_hospital_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','tabib-hospital'),
        'section' => 'tabib_hospital_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','tabib-hospital'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','tabib-hospital'),
            'Right Sidebar' => __('Right Sidebar','tabib-hospital'),
            'One Column' => __('Full Column','tabib-hospital'),
            'Grid Layout' => __('Grid Layout','tabib-hospital')
        ),
	) );

	$wp_customize->add_setting('tabib_hospital_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','tabib-hospital'),
        'section' => 'tabib_hospital_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','tabib-hospital'),
            'Right Sidebar' => __('Right Sidebar','tabib-hospital'),
            'One Column' => __('Full Column','tabib-hospital')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('tabib_hospital_contact_details',array(
		'title'	=> __('Topbar Section','tabib-hospital'),
		'description'	=> __('Add Header Content here','tabib-hospital'),
		'priority'	=> null,
		'panel' => 'tabib_hospital_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'tabib_hospital_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tabib_hospital_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','tabib-hospital' ),
        'section' => 'tabib_hospital_contact_details'
    ));

	$wp_customize->add_setting('tabib_hospital_contact_number_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_contact_number_text',array(
		'label'	=> __('Add Phone Number Text','tabib-hospital'),
		'section'	=> 'tabib_hospital_contact_details',
		'setting'	=> 'tabib_hospital_contact_number_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_phone_number'
	));
	$wp_customize->add_control('tabib_hospital_contact_number',array(
		'label'	=> __('Add Phone Number','tabib-hospital'),
		'section'	=> 'tabib_hospital_contact_details',
		'setting'	=> 'tabib_hospital_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tabib_hospital_address',array(
		'label'	=> __('Add Address','tabib-hospital'),
		'section'	=> 'tabib_hospital_contact_details',
		'setting'	=> 'tabib_hospital_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_address_icon_changer',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_address_icon_changer',array(
		'label'	=> __('Address Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tabib_hospital_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tabib_hospital_time',array(
		'label'	=> __('Add Time','tabib-hospital'),
		'section'	=> 'tabib_hospital_contact_details',
		'setting'	=> 'tabib_hospital_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_time_icon_changer',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_time_icon_changer',array(
		'label'	=> __('Time Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_contact_details',
		'type'		=> 'icon'
	)));

	// navigation menu 
	$wp_customize->add_section( 'tabib_hospital_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'tabib-hospital' ),
		'priority'   => null,
		'panel' => 'tabib_hospital_panel_id'
	) );

	$wp_customize->add_setting('tabib_hospital_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_menu_color', array(
		'label'    => __('Menu Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_navigation_menu',
		'settings' => 'tabib_hospital_menu_color',
	)));

	$wp_customize->add_setting('tabib_hospital_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_sub_menu_color', array(
		'label'    => __('Submenu Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_navigation_menu',
		'settings' => 'tabib_hospital_sub_menu_color',
	)));

	$wp_customize->add_setting('tabib_hospital_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_navigation_menu',
		'settings' => 'tabib_hospital_menu_hover_color',
	)));

	$wp_customize->add_setting('tabib_hospital_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_navigation_menu',
		'settings' => 'tabib_hospital_sub_menu_hover_color',
	)));

	$wp_customize->add_setting('tabib_hospital_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','tabib-hospital'),
		'section'=> 'tabib_hospital_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tabib_hospital_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control('tabib_hospital_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','tabib-hospital'),
        'section' => 'tabib_hospital_navigation_menu',
        'choices' => array(
            'Default' => __('Default','tabib-hospital'),
            'Uppercase' => __('Uppercase','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting('tabib_hospital_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control('tabib_hospital_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','tabib-hospital'),
        'section' => 'tabib_hospital_navigation_menu',
        'choices' => array(
            'Default' => __('Default','tabib-hospital'),
            'Normal' => __('Normal','tabib-hospital'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'tabib_hospital_slider' , array(
    	'title'      => __( 'Slider Settings', 'tabib-hospital' ),
		'priority'   => null,
		'panel' => 'tabib_hospital_panel_id'
	) );

	$wp_customize->add_setting('tabib_hospital_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('tabib_hospital_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','tabib-hospital'),
      	'section' => 'tabib_hospital_slider',
	));

	$wp_customize->add_setting('tabib_hospital_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','tabib-hospital'),
       'section' => 'tabib_hospital_slider'
    ));

    $wp_customize->add_setting('tabib_hospital_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','tabib-hospital'),
       'section' => 'tabib_hospital_slider'
    ));

    $wp_customize->add_setting('tabib_hospital_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','tabib-hospital'),
       'section' => 'tabib_hospital_slider'
    ));

    $wp_customize->add_setting('tabib_hospital_slider_width_options',array(
    	'default' => 'Full Width',
     	'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_slider_width_options',array(
		'type' => 'select',
		'label' => __('Slider Width Layout','tabib-hospital'),
		'description' => __('Here you can change the Slider Width. ','tabib-hospital'),
		'section' => 'tabib_hospital_slider',
		'choices' => array(
		   'Full Width' => __('Full Width','tabib-hospital'),
		   'Container Width' => __('Container Width','tabib-hospital'),
		),
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'tabib_hospital_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'tabib_hospital_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'tabib_hospital_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tabib-hospital' ),
			'section'  => 'tabib_hospital_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'tabib_hospital_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'tabib_hospital_sanitize_number_range',
	));
	$wp_customize->add_control( 'tabib_hospital_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','tabib-hospital' ),
		'section' => 'tabib_hospital_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('tabib_hospital_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_slider_height_option',array(
		'label'	=> __('Slider Height Option','tabib-hospital'),
		'section'=> 'tabib_hospital_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('tabib_hospital_slider_content_option',array(
    'default' => __('Left','tabib-hospital'),
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','tabib-hospital'),
        'section' => 'tabib_hospital_slider',
        'choices' => array(
            'Center' => __('Center','tabib-hospital'),
            'Left' => __('Left','tabib-hospital'),
            'Right' => __('Right','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting('tabib_hospital_slider_button_text',array(
		'default'=> __('Discover More','tabib-hospital'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_slider_button_text',array(
		'label'	=> __('Slider Button Text','tabib-hospital'),
		'section'=> 'tabib_hospital_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_slider_button_icon_changer',array(
		'default'	=> 'fas fa-plus',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_slider_button_icon_changer',array(
		'label'	=> __('Slider Button Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_slider',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'tabib_hospital_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'tabib_hospital_sanitize_number_range',
	) );
	$wp_customize->add_control( 'tabib_hospital_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','tabib-hospital' ),
		'section'     => 'tabib_hospital_slider',
		'type'        => 'range',
		'settings'    => 'tabib_hospital_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tabib_hospital_slider_opacity_color',array(
      'default'              => 0.3,
      'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control( 'tabib_hospital_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','tabib-hospital' ),
		'section'     => 'tabib_hospital_slider',
		'type'        => 'select',
		'settings'    => 'tabib_hospital_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','tabib-hospital'),
	      '0.1' =>  esc_attr('0.1','tabib-hospital'),
	      '0.2' =>  esc_attr('0.2','tabib-hospital'),
	      '0.3' =>  esc_attr('0.3','tabib-hospital'),
	      '0.4' =>  esc_attr('0.4','tabib-hospital'),
	      '0.5' =>  esc_attr('0.5','tabib-hospital'),
	      '0.6' =>  esc_attr('0.6','tabib-hospital'),
	      '0.7' =>  esc_attr('0.7','tabib-hospital'),
	      '0.8' =>  esc_attr('0.8','tabib-hospital'),
	      '0.9' =>  esc_attr('0.9','tabib-hospital')
		),
	));

	$wp_customize->add_setting('tabib_hospital_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','tabib-hospital'),
		'section'=> 'tabib_hospital_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tabib_hospital_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','tabib-hospital'),
		'section'=> 'tabib_hospital_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tabib_hospital_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','tabib-hospital'),
       'section' => 'tabib_hospital_slider'
    ));

    $wp_customize->add_setting('tabib_hospital_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_slider',
		'settings' => 'tabib_hospital_color_slider_image_overlay',
	)));

	//Services Section
	$wp_customize->add_section('tabib_hospital_service_section',array(
		'title'	=> __('Services Section','tabib-hospital'),
		'description'	=> __('Add Services Section below.','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));

	$wp_customize->add_setting('tabib_hospital_service_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tabib_hospital_service_section_title',array(
		'label'	=> __('Section Heading Title','tabib-hospital'),
		'section'	=> 'tabib_hospital_service_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_service_section_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tabib_hospital_service_section_text',array(
		'label'	=> __('Section Heading Text','tabib-hospital'),
		'section'	=> 'tabib_hospital_service_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('tabib_hospital_service_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'tabib_hospital_sanitize_choices',
	));
	$wp_customize->add_control('tabib_hospital_service_section_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','tabib-hospital'),
		'section' => 'tabib_hospital_service_section',
	));

	$wp_customize->add_setting( 'tabib_hospital_service_image', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
  	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tabib_hospital_service_image', array(
		'label' => __('Doctor Image','tabib-hospital'),
	   	'section' => 'tabib_hospital_service_section',
  	)));

	//no Result Setting
	$wp_customize->add_section('tabib_hospital_no_result_setting',array(
		'title'	=> __('No Results Settings','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));	

	$wp_customize->add_setting('tabib_hospital_no_search_result_title',array(
		'default'=> __('Nothing Found','tabib-hospital'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_no_search_result_title',array(
		'label'	=> __('No Search Results Title','tabib-hospital'),
		'section'=> 'tabib_hospital_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','tabib-hospital'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_no_search_result_content',array(
		'label'	=> __('No Search Results Content','tabib-hospital'),
		'section'=> 'tabib_hospital_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('tabib_hospital_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));	

	$wp_customize->add_setting('tabib_hospital_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','tabib-hospital'),
		'section'=> 'tabib_hospital_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','tabib-hospital'),
		'section'=> 'tabib_hospital_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('tabib_hospital_mobile_media',array(
		'title'	=> __('Mobile Media Settings','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));

	$wp_customize->add_setting('tabib_hospital_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','tabib-hospital'),
       'section' => 'tabib_hospital_mobile_media'
    ));

	$wp_customize->add_setting('tabib_hospital_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','tabib-hospital'),
       'section' => 'tabib_hospital_mobile_media'
    ));

	$wp_customize->add_setting('tabib_hospital_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','tabib-hospital'),
       'section' => 'tabib_hospital_mobile_media'
    ));

    $wp_customize->add_setting('tabib_hospital_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','tabib-hospital'),
       'section' => 'tabib_hospital_mobile_media'
    ));

    $wp_customize->add_setting('tabib_hospital_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','tabib-hospital'),
       'section' => 'tabib_hospital_mobile_media'
    ));

    $wp_customize->add_setting('tabib_hospital_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','tabib-hospital'),
       'section' => 'tabib_hospital_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('tabib_hospital_blog_post',array(
		'title'	=> __('Post Settings','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));	

	$wp_customize->add_setting('tabib_hospital_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','tabib-hospital'),
       'section' => 'tabib_hospital_blog_post'
    ));

    $wp_customize->add_setting('tabib_hospital_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tabib_hospital_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','tabib-hospital'),
       'section' => 'tabib_hospital_blog_post'
    ));

    $wp_customize->add_setting('tabib_hospital_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tabib_hospital_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','tabib-hospital'),
       'section' => 'tabib_hospital_blog_post'
    ));

    $wp_customize->add_setting('tabib_hospital_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_post_comment_icon_changer',array(
		'label'	=> __('Post Comment Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tabib_hospital_blog_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_blog_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Post Image','tabib-hospital'),
       'section' => 'tabib_hospital_blog_post'
    ));

    $wp_customize->add_setting( 'tabib_hospital_blog_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_blog_post_img_border_radius', array(
		'label'       => esc_html__( 'Post Image Border Radius','tabib-hospital' ),
		'section'     => 'tabib_hospital_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tabib_hospital_blog_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_blog_post_img_box_shadow',array(
		'label' => esc_html__( 'Post Image Shadow','tabib-hospital' ),
		'section' => 'tabib_hospital_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));
    
    $wp_customize->add_setting( 'tabib_hospital_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tabib_hospital_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','tabib-hospital' ),
		'section'     => 'tabib_hospital_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tabib-hospital'),
		'type'        => 'text',
		'settings'    => 'tabib_hospital_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('tabib_hospital_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control('tabib_hospital_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','tabib-hospital'),
        'section' => 'tabib_hospital_blog_post',
        'choices' => array(
            'Default' => __('Default','tabib-hospital'),
            'Center' => __('Center','tabib-hospital'),
            'Image and Content' => __('Image and Content','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting('tabib_hospital_post_break_block_setting',array(
        'default' => 'Into Blocks',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_post_break_block_setting',array(
        'type' => 'radio',
        'label' => __('Display Blog Page posts','tabib-hospital'),
        'section' => 'tabib_hospital_blog_post',
        'choices' => array(
            'Into Blocks' => __('Into Blocks','tabib-hospital'),
            'Without Blocks' => __('Without Blocks','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting('tabib_hospital_post_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control('tabib_hospital_post_image_dimention',array(
       'type' => 'radio',
       'label'	=> __('Post Featured Image Dimention','tabib-hospital'),
       'choices' => array(
            'Default' => __('Default','tabib-hospital'),
            'Custom Image Size' => __('Custom Image Size','tabib-hospital'),
        ),
      	'section'	=> 'tabib_hospital_blog_post'
    ));

    $wp_customize->add_setting( 'tabib_hospital_post_featured_image_width',array(
		'default' => '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_number_range'
	));
	$wp_customize->add_control('tabib_hospital_post_featured_image_width',	array(
		'label' => esc_html__( 'Blog Post Custom Width','tabib-hospital' ),
		'section' => 'tabib_hospital_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'tabib_hospital_enable_image_dimention'
	));

	$wp_customize->add_setting( 'tabib_hospital_post_featured_image_height',array(
		'default' => '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_number_range'
	));
	$wp_customize->add_control('tabib_hospital_post_featured_image_height',	array(
		'label' => esc_html__( 'Blog Post Custom Height','tabib-hospital' ),
		'section' => 'tabib_hospital_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'tabib_hospital_enable_image_dimention'
	));

	$wp_customize->add_setting('tabib_hospital_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','tabib-hospital'),
        'section' => 'tabib_hospital_blog_post',
        'choices' => array(
            'None' => __('None','tabib-hospital'),
            'Post Excerpt' => __('Post Excerpt','tabib-hospital'),
            'Post Content' => __('Post Content','tabib-hospital'),
        ),
	) );

    $wp_customize->add_setting( 'tabib_hospital_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','tabib-hospital' ),
		'section'     => 'tabib_hospital_blog_post',
		'type'        => 'number',
		'settings'    => 'tabib_hospital_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'tabib_hospital_post_excerpt_suffix', array(
		'default'   => __('{...}','tabib-hospital'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tabib_hospital_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','tabib-hospital' ),
		'section'     => 'tabib_hospital_blog_post',
		'type'        => 'text',
		'settings'    => 'tabib_hospital_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('tabib_hospital_button_text',array(
		'default'=> __('READ MORE','tabib-hospital'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_button_text',array(
		'label'	=> __('Add Button Text','tabib-hospital'),
		'section'=> 'tabib_hospital_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tabib_hospital_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','tabib-hospital'),
       'section' => 'tabib_hospital_blog_post'
    ));

	$wp_customize->add_setting( 'tabib_hospital_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control( 'tabib_hospital_pagination_option', array(
        'section' => 'tabib_hospital_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'tabib-hospital' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'tabib-hospital' ),
            'next-prev' => __( 'Next / Previous', 'tabib-hospital' ),
    )));

	// Single post setting
    $wp_customize->add_section('tabib_hospital_single_post_section',array(
		'title'	=> __('Single Post Settings','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));	

	$wp_customize->add_setting('tabib_hospital_single_post_breadcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('tabib_hospital_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','tabib-hospital'),
		'section' => 'tabib_hospital_single_post_section',
	));

	$wp_customize->add_setting('tabib_hospital_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting('tabib_hospital_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting( 'tabib_hospital_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','tabib-hospital' ),
		'section'     => 'tabib_hospital_single_post_section',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tabib_hospital_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','tabib-hospital' ),
		'section' => 'tabib_hospital_single_post_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('tabib_hospital_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting('tabib_hospital_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));
    
    $wp_customize->add_setting('tabib_hospital_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting('tabib_hospital_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

	$wp_customize->add_setting('tabib_hospital_post_comment_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('tabib_hospital_post_comment_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Post Comment','tabib-hospital'),
		'section' => 'tabib_hospital_single_post_section',
	));

	$wp_customize->add_setting('tabib_hospital_prev_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tabib_hospital_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting('tabib_hospital_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tabib_hospital_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting('tabib_hospital_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
 	));
 	$wp_customize->add_control('tabib_hospital_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Single Post Categories','tabib-hospital'),
		'section' => 'tabib_hospital_single_post_section'
	));

    $wp_customize->add_setting( 'tabib_hospital_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tabib_hospital_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','tabib-hospital' ),
		'section'     => 'tabib_hospital_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tabib-hospital'),
		'type'        => 'text',
		'settings'    => 'tabib_hospital_seperator_metabox',
	) );

	$wp_customize->add_setting('tabib_hospital_comment_form_heading',array(
       'default' => __('Leave a Reply','tabib-hospital'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tabib_hospital_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting('tabib_hospital_comment_button_text',array(
       'default' => __('Post Comment','tabib-hospital'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tabib_hospital_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','tabib-hospital'),
       'section' => 'tabib_hospital_single_post_section'
    ));

    $wp_customize->add_setting( 'tabib_hospital_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'tabib_hospital_sanitize_number_range',
	));
	$wp_customize->add_control('tabib_hospital_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','tabib-hospital' ),
		'section' => 'tabib_hospital_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('tabib_hospital_related_post_section',array(
		'title'	=> __('Related Post Settings','tabib-hospital'),
		'panel' => 'tabib_hospital_panel_id',
	));	

	$wp_customize->add_setting('tabib_hospital_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('tabib_hospital_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','tabib-hospital'),
       'section' => 'tabib_hospital_related_post_section',
    ));

	$wp_customize->add_setting( 'tabib_hospital_show_related_post', array(
        'default' => 'By Categories', 
        'sanitize_callback'	=> 'tabib_hospital_sanitize_choices'
    ));
    $wp_customize->add_control( 'tabib_hospital_show_related_post', array(
        'section' => 'tabib_hospital_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'tabib-hospital' ),
        'choices' => array(
            'categories'  => __(' By Categories', 'tabib-hospital'),
            'tags' => __( ' By Tags', 'tabib-hospital' ),
    )));

    $wp_customize->add_setting('tabib_hospital_change_related_post_title',array(
		'default'=> __('Related Posts','tabib-hospital'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','tabib-hospital'),
		'section'=> 'tabib_hospital_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('tabib_hospital_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','tabib-hospital'),
		'section'=> 'tabib_hospital_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting( 'tabib_hospital_related_post_excerpt_number',array(
		'default' =>20,
		'sanitize_callback' => 'tabib_hospital_sanitize_number_range'
	));

	$wp_customize->add_control( 'tabib_hospital_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','tabib-hospital' ),
		'section' => 'tabib_hospital_related_post_section',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	//Footer
	$wp_customize->add_section( 'tabib_hospital_footer' , array(
    	'title'      => __( 'Footer Section', 'tabib-hospital' ),
		'priority'   => null,
		'panel' => 'tabib_hospital_panel_id'
	) );

	$wp_customize->add_setting('tabib_hospital_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'tabib_hospital_sanitize_choices',
    ));
    $wp_customize->add_control('tabib_hospital_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'tabib-hospital'),
        'section'     => 'tabib_hospital_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'tabib-hospital'),
        'choices' => array(
            '1'     => __('One', 'tabib-hospital'),
            '2'     => __('Two', 'tabib-hospital'),
            '3'     => __('Three', 'tabib-hospital'),
            '4'     => __('Four', 'tabib-hospital')
        ),
    )); 

    $wp_customize->add_setting( 'tabib_hospital_footer_widget_background', array(
	    'default' => '#2d2d2d',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tabib_hospital_footer_widget_background', array(
  		'label' => __('Footer Widget Background','tabib-hospital'),
	    'section' => 'tabib_hospital_footer',
  	)));

  	$wp_customize->add_setting('tabib_hospital_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'tabib_hospital_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','tabib-hospital'),
        'section' => 'tabib_hospital_footer'
	)));

	$wp_customize->add_setting('tabib_hospital_hide_show_scroll',array(
        'default' => false,
        'sanitize_callback'	=> 'tabib_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('tabib_hospital_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','tabib-hospital'),
      	'section' => 'tabib_hospital_footer',
	));

	$wp_customize->add_setting('tabib_hospital_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tabib_Hospital_Icon_Changer(
        $wp_customize,'tabib_hospital_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','tabib-hospital'),
		'transport' => 'refresh',
		'section'	=> 'tabib_hospital_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tabib_hospital_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'tabib_hospital_sanitize_choices'
	));
	$wp_customize->add_control('tabib_hospital_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','tabib-hospital'),
        'description' => __('Here you can change the Footer layout. ','tabib-hospital'),
        'section' => 'tabib_hospital_footer',
        'choices' => array(
            'Left align' => __('Left align','tabib-hospital'),
            'Right align' => __('Right align','tabib-hospital'),
            'Center align' => __('Center align','tabib-hospital'),
        ),
	) );

	$wp_customize->add_setting('tabib_hospital_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tabib_hospital_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('tabib_hospital_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tabib_hospital_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tabib_hospital_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	) );
	$wp_customize->add_control( 'tabib_hospital_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','tabib-hospital' ),
		'section'     => 'tabib_hospital_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tabib_hospital_scroll_background_color', array(
		'default'           => '#22b6b8',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_scroll_background_color', array(
		'label'    => __('Scroll To Top Background Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_footer',
	)));

	$wp_customize->add_setting('tabib_hospital_scroll_icon_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_scroll_icon_color', array(
		'label'    => __('Scroll To Top Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_footer',
	)));

	$wp_customize->add_setting('tabib_hospital_scroll_background_hover_color', array(
		'default'           => '#22b6b8',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_scroll_background_hover_color', array(
		'label'    => __('Scroll To Top Background Hover Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_footer',
	)));
	
	$wp_customize->add_setting('tabib_hospital_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tabib_hospital_footer_text',array(
		'label'	=> __('Add Copyright Text','tabib-hospital'),
		'section'	=> 'tabib_hospital_footer',
		'setting'	=> 'tabib_hospital_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('tabib_hospital_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','tabib-hospital'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tabib_hospital_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tabib_hospital_copyright_background_color', array(
		'default'           => '#22b6b8',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tabib_hospital_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'tabib-hospital'),
		'section'  => 'tabib_hospital_footer',
	)));

	$wp_customize->add_setting('tabib_hospital_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'tabib_hospital_sanitize_float',
	));
	$wp_customize->add_control('tabib_hospital_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','tabib-hospital'),
		'section'=> 'tabib_hospital_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'tabib_hospital_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'tabib_hospital_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'tabib_hospital_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Tabib Hospital 1.0
 * @see tabib-hospital_customize_register()
 *
 * @return void
 */
function tabib_hospital_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Tabib Hospital 1.0
 * @see tabib-hospital_customize_register()
 *
 * @return void
 */
function tabib_hospital_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function tabib_hospital_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Tabib_Hospital_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Tabib_Hospital_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Tabib_Hospital_Customize_Section_Pro(
				$manager,
				'tabib_hospital_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Tabib Hospital Pro', 'tabib-hospital' ),
					'pro_text' => esc_html__( 'Go Pro', 'tabib-hospital' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/hospital-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'tabib-hospital-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tabib-hospital-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Tabib_Hospital_Customize::get_instance();