<?php
/**
 * Relief Medical Hospital Theme Customizer
 *
 * @package Relief Medical Hospital
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Relief_Medical_Hospital_Customize {

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
		$manager->register_section_type( 'Relief_Medical_Hospital_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Relief_Medical_Hospital_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Medical Hospital Pro', 'relief-medical-hospital' ),
					'pro_text' => esc_html__( 'Go Pro', 'relief-medical-hospital' ),
					'pro_url'  => esc_url( 'https://www.logicalthemes.com/themes/medical-wordpress-theme/' ),
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

		wp_enqueue_script( 'relief-medical-hospital-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'relief-medical-hospital-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Relief_Medical_Hospital_Customize::get_instance();

function relief_medical_hospital_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'relief_medical_hospital_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => esc_html__( 'LT Settings', 'relief-medical-hospital' ),
	) );

	//Layout Setting
	$wp_customize->add_section( 'relief_medical_hospital_left_right' , array(
    	'title'      => esc_html__( 'General Settings', 'relief-medical-hospital' ),
		'priority'   => null,
		'panel' => 'relief_medical_hospital_panel_id'
	) );
    
    //Select width layout
    $wp_customize->add_setting('relief_medical_hospital_width_options',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control('relief_medical_hospital_width_options',array(
        'type' => 'radio',
        'label' => __('Select Width Layout','relief-medical-hospital'),
        'section' => 'relief_medical_hospital_left_right',
        'choices' => array(
        	'Full Width' => esc_html__('Full Width','relief-medical-hospital'),
            'Contained Width' => esc_html__('Contained Width','relief-medical-hospital'),
            'Boxed Width' => esc_html__('Boxed Width','relief-medical-hospital'),
        ),
	) );

    // Add Settings and Controls for Layout
	$wp_customize->add_setting('relief_medical_hospital_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control('relief_medical_hospital_theme_options',array(
        'type' => 'radio',
        'description' => __( 'Choose sidebar between different options', 'relief-medical-hospital' ),
        'label' => esc_html__( 'Post Sidebar Layout.', 'relief-medical-hospital' ),
        'section' => 'relief_medical_hospital_left_right',
        'choices' => array(
            'One Column' => esc_html__('One Column ','relief-medical-hospital'),
            'Three Columns' => esc_html__('Three Columns','relief-medical-hospital'),
            'Four Columns' => esc_html__('Four Columns','relief-medical-hospital'),
            'Right Sidebar' => esc_html__('Right Sidebar','relief-medical-hospital'),
            'Left Sidebar' => esc_html__('Left Sidebar','relief-medical-hospital'),
            'Grid Layout' => esc_html__('Grid Layout','relief-medical-hospital')
        ),
	));

	$relief_medical_hospital_font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'relief_medical_hospital_typography', array(
    	'title'      => __( 'Typography', 'relief-medical-hospital' ),
		'priority'   => null,
		'panel' => 'relief_medical_hospital_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_paragraph_color', array(
		'label' => __('Paragraph Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_paragraph_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'Paragraph Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	$wp_customize->add_setting('relief_medical_hospital_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_atag_color', array(
		'label' => __('"a" Tag Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_atag_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( '"a" Tag Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_li_color', array(
		'label' => __('"li" Tag Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_li_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( '"li" Tag Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_h1_color', array(
		'label' => __('H1 Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_h1_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'H1 Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('relief_medical_hospital_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_h1_font_size',array(
		'label'	=> __('H1 Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_h2_color', array(
		'label' => __('H2 Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_h2_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'H2 Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('relief_medical_hospital_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_h2_font_size',array(
		'label'	=> __('H2 Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_h3_color', array(
		'label' => __('H3 Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_h3_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'H3 Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('relief_medical_hospital_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_h3_font_size',array(
		'label'	=> __('H3 Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_h4_color', array(
		'label' => __('H4 Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_h4_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'H4 Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('relief_medical_hospital_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_h4_font_size',array(
		'label'	=> __('H4 Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_h5_color', array(
		'label' => __('H5 Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_h5_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'H5 Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('relief_medical_hospital_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_h5_font_size',array(
		'label'	=> __('H5 Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'relief_medical_hospital_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'relief_medical_hospital_h6_color', array(
		'label' => __('H6 Color', 'relief-medical-hospital'),
		'section' => 'relief_medical_hospital_typography',
		'settings' => 'relief_medical_hospital_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('relief_medical_hospital_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control(
	    'relief_medical_hospital_h6_font_family', array(
	    'section'  => 'relief_medical_hospital_typography',
	    'label'    => __( 'H6 Fonts','relief-medical-hospital'),
	    'type'     => 'select',
	    'choices'  => $relief_medical_hospital_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('relief_medical_hospital_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('relief_medical_hospital_h6_font_size',array(
		'label'	=> __('H6 Font Size','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_typography',
		'setting'	=> 'relief_medical_hospital_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('relief_medical_hospital_topbar',array(
		'title'	=> esc_html__('Topbar','relief-medical-hospital'),
		'priority'	=> null,
		'panel' => 'relief_medical_hospital_panel_id',
	));

	$wp_customize->add_setting( 'relief_medical_hospital_sticky_header',array(
		'default'	=> false,
      	'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
    ) );
    $wp_customize->add_control('relief_medical_hospital_sticky_header',array(
    	'type' => 'checkbox',
    	'description' => __( 'Click on the checkbox to enable sticky header.', 'relief-medical-hospital' ),
        'label' => __( 'Sticky Header','relief-medical-hospital' ),
        'section' => 'relief_medical_hospital_topbar'
    ));

    //Show /Hide Topbar
	$wp_customize->add_setting( 'relief_medical_hospital_show_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
    ) );
    $wp_customize->add_control('relief_medical_hospital_show_topbar',array(
    	'type' => 'checkbox',
    	'description' => __( 'Click on the checkbox to enable Topbar.', 'relief-medical-hospital' ),
        'label' => __( 'Topbar','relief-medical-hospital' ),
        'section' => 'relief_medical_hospital_topbar'
    ));

	$wp_customize->add_setting('relief_medical_hospital_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'relief_medical_hospital_sanitize_phone_number'
	));
	$wp_customize->add_control('relief_medical_hospital_call',array(
		'label'	=> esc_html__('Add Phone Number','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_topbar',
		'setting'	=> 'relief_medical_hospital_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('relief_medical_hospital_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('relief_medical_hospital_mail',array(
		'label'	=> esc_html__('Add Email','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_topbar',
		'setting'	=> 'relief_medical_hospital_mail',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('relief_medical_hospital_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('relief_medical_hospital_button_text',array(
		'label'	=> __('Add Button Text','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_topbar',
		'setting'	=> 'relief_medical_hospital_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('relief_medical_hospital_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('relief_medical_hospital_button_link',array(
		'label'	=> __('Add Button Link','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_topbar',
		'setting'	=> 'relief_medical_hospital_button_link',
		'type'		=> 'url'
	));	

	//Social Icons(topbar)
	$wp_customize->add_section('relief_medical_hospital_social_media',array(
		'title'	=> esc_html__('Social Media','relief-medical-hospital'),
		'priority'	=> null,
		'panel' => 'relief_medical_hospital_panel_id',
	));

	$wp_customize->add_setting('relief_medical_hospital_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('relief_medical_hospital_facebook_url',array(
		'label'	=> esc_html__('Add Facebook link','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_social_media',
		'setting'	=> 'relief_medical_hospital_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('relief_medical_hospital_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('relief_medical_hospital_twitter_url',array(
		'label'	=> esc_html__('Add Twitter link','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_social_media',
		'setting'	=> 'relief_medical_hospital_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('relief_medical_hospital_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('relief_medical_hospital_linkedin_url',array(
		'label'	=> esc_html__('Add Linkedin link','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_social_media',
		'setting'	=> 'relief_medical_hospital_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('relief_medical_hospital_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('relief_medical_hospital_insta_url',array(
		'label'	=> esc_html__('Add Instagram link','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_social_media',
		'setting'	=> 'relief_medical_hospital_insta_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('relief_medical_hospital_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('relief_medical_hospital_youtube_url',array(
		'label'	=> esc_html__('Add YouTube link','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_social_media',
		'setting'	=> 'relief_medical_hospital_youtube_url',
		'type'		=> 'url'
	));
    
    //Social Icons Font Size
	$wp_customize->add_setting('relief_medical_hospital_social_icon_fontsize',array(
		'default'=> '',
		'sanitize_callback'	=> 'relief_medical_hospital_sanitize_float'
	));
	$wp_customize->add_control('relief_medical_hospital_social_icon_fontsize',array(
		'label'	=> __('Social Icons Font Size','relief-medical-hospital'),
		'input_attrs' => array(
            'step' => 1,
			'min'  => 0,
			'max'  => 100,
        ),
		'section'=> 'relief_medical_hospital_social_media',
		'type'=> 'number',
	));

	//home page slider
	$wp_customize->add_section( 'relief_medical_hospital_slidersettings' , array(
    	'title'      => esc_html__( 'Slider Settings', 'relief-medical-hospital' ),
		'priority'   => null,
		'panel' => 'relief_medical_hospital_panel_id'
	) );

	$wp_customize->add_setting('relief_medical_hospital_slider_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('relief_medical_hospital_slider_hide_show',array(
	   'type' => 'checkbox',
	   'description' => __( 'Click on the checkbox to enable slider.', 'relief-medical-hospital' ),
	   'label' => esc_html__('Show / Hide slider','relief-medical-hospital'),
	   'section' => 'relief_medical_hospital_slidersettings',
	));


	$wp_customize->add_setting('relief_medical_hospital_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('relief_medical_hospital_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','relief-medical-hospital'),
      	'section' => 'relief_medical_hospital_slidersettings',
	));

	$wp_customize->add_setting('relief_medical_hospital_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('relief_medical_hospital_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','relief-medical-hospital'),
      	'section' => 'relief_medical_hospital_slidersettings',
	));

	$wp_customize->add_setting('relief_medical_hospital_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
	));
	$wp_customize->add_control('relief_medical_hospital_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','relief-medical-hospital'),
      	'section' => 'relief_medical_hospital_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		// Add color scheme setting and control.
		$wp_customize->add_setting( 'relief_medical_hospital_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'relief_medical_hospital_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'relief_medical_hospital_slider_page' . $count, array(
			'label'    => esc_html__( 'Select Slider Page', 'relief-medical-hospital' ),
			'section'  => 'relief_medical_hospital_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	// OUR services
	$wp_customize->add_section('relief_medical_hospital_service',array(
		'title'	=> esc_html__('Our Services','relief-medical-hospital'),
		'panel' => 'relief_medical_hospital_panel_id',
	));

	$wp_customize->add_setting('relief_medical_hospital_our_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('relief_medical_hospital_our_services_title',array(
		'label'	=> esc_html__('Section Title','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_service',
		'setting'	=> 'relief_medical_hospital_our_services_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('relief_medical_hospital_category_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'relief_medical_hospital_sanitize_choices',
	));
	$wp_customize->add_control('relief_medical_hospital_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category To Display Post','relief-medical-hospital'),
		'section' => 'relief_medical_hospital_service',
	));

	//footer
	$wp_customize->add_section('relief_medical_hospital_footer_section',array(
		'title'	=> esc_html__('Footer Text','relief-medical-hospital'),
		'panel' => 'relief_medical_hospital_panel_id'
	));

	 /*Footer Background Color */
	$wp_customize->add_setting('relief_medical_hospital_footer_background_color', array(
		'default'           => '#22272b',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'relief_medical_hospital_footer_background_color', array(
		'label'    => __('Footer Background Color', 'relief-medical-hospital'),
		'section'  => 'relief_medical_hospital_footer_section',
	)));
	
	$wp_customize->add_setting('relief_medical_hospital_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('relief_medical_hospital_footer_copy',array(
		'label'	=> esc_html__('Copyright Text','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_footer_section',
		'type'		=> 'text'
	));

    /*copyright text position*/
	$wp_customize->add_setting('relief_medical_hospital_text_position',array(
        'default' => 'center',
        'sanitize_callback' => 'relief_medical_hospital_sanitize_choices'
	));
	$wp_customize->add_control('relief_medical_hospital_text_position',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','relief-medical-hospital'),
        'section' => 'relief_medical_hospital_footer_section',
        'choices' => array(
            'left' => __('Left','relief-medical-hospital'),
            'right' => __('Right','relief-medical-hospital'),
            'center' => __('Center','relief-medical-hospital'),
        ),
	) );

	//Copyright Background Color
    $wp_customize->add_setting('relief_medical_hospital_copyright_background_color', array(
		'default'           => '#191919',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'relief_medical_hospital_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'relief-medical-hospital'),
		'section'  => 'relief_medical_hospital_footer_section',
	)));
	
	//Wocommerce Shop Page
	$wp_customize->add_section('relief_medical_hospital_woocommerce_shop_page',array(
		'title'	=> __('Woocommerce Shop Page','relief-medical-hospital'),
		'panel' => 'relief_medical_hospital_panel_id'
	));

	$wp_customize->add_setting( 'relief_medical_hospital_products_per_column' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'relief_medical_hospital_sanitize_choices',
	) );
	$wp_customize->add_control( 'relief_medical_hospital_products_per_column', array(
		'label'    => __( 'Product Per Columns', 'relief-medical-hospital' ),
		'description'	=> __('How many products should be shown per Column?','relief-medical-hospital'),
		'section'  => 'relief_medical_hospital_woocommerce_shop_page',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('relief_medical_hospital_products_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'relief_medical_hospital_sanitize_float',
	));	
	$wp_customize->add_control('relief_medical_hospital_products_per_page',array(
		'label'	=> __('Product Per Page','relief-medical-hospital'),
		'description'	=> __('How many products should be shown per page?','relief-medical-hospital'),
		'section'	=> 'relief_medical_hospital_woocommerce_shop_page',
		'type'		=> 'number'
	));

	// logo site title size 
	$wp_customize->add_setting('relief_medical_hospital_site_title_font_size',array(
		'default'	=> 25,
		'sanitize_callback'	=> 'relief_medical_hospital_sanitize_float'
	));
	$wp_customize->add_control('relief_medical_hospital_site_title_font_size',array(
		'label'	=> __('Site Title Font Size','relief-medical-hospital'),
		'section'	=> 'title_tagline',
		'setting'	=> 'relief_medical_hospital_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// logo site tagline size 
	$wp_customize->add_setting('relief_medical_hospital_site_tagline_font_size',array(
		'default'	=> 12,
		'sanitize_callback'	=> 'relief_medical_hospital_sanitize_float'
	));
	$wp_customize->add_control('relief_medical_hospital_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size','relief-medical-hospital'),
		'section'	=> 'title_tagline',
		'setting'	=> 'relief_medical_hospital_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// logo site title
	$wp_customize->add_setting('relief_medical_hospital_site_title_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'relief_medical_hospital_sanitize_checkbox'
    ));
    $wp_customize->add_control('relief_medical_hospital_site_title_tagline',array(
       'type' => 'checkbox',
       'label' => __('Display Site Title and Tagline in Header','relief-medical-hospital'),
       'section' => 'title_tagline'
    ));
}
add_action( 'customize_register', 'relief_medical_hospital_customize_register' );