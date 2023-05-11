<?php
/**
 * Tabib Hospital functions and definitions
 */

/* Breadcrumb Begin */
 function tabib_hospital_the_breadcrumb() {
 	if (!is_home()) {
 		echo '<a href="';
 			echo esc_url( home_url() );
 		echo '">';
 			bloginfo('name');
 		echo "</a> ";
 		if (is_category() || is_single()) {
 			the_category(',');
 			if (is_single()) {
 				echo "<span> ";
 					the_title();
 				echo "</span> ";
 			}
 		} elseif (is_page()) {
 			echo "<span> ";
 				the_title();
 		}
 	}
 }

function tabib_hospital_setup() {
	
	load_theme_textdomain( 'tabib-hospital', get_template_directory() . '/languages' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'tabib-hospital-featured-image', 2000, 1200, true );
	add_image_size( 'tabib-hospital-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'tabib-hospital' ),
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );


	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', tabib_hospital_fonts_url() ) );
}
add_action( 'after_setup_theme', 'tabib_hospital_setup' );

/* Theme Font URL */
function tabib_hospital_fonts_url(){
	$font_family   = array(
	'ABeeZee:ital@0;1',
	'Abril+Fatfac',
	'Acme',
	'Anton',
	'Architects+Daughter',
	'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
	'Arvo:ital,wght@0,400;0,700;1,400;1,700',
	'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	'Alfa+Slab+One',
	'Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
	'Bangers',
	'Boogaloo',
	'Bad+Script',
	'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Bree+Serif',
	'BenchNine:wght@300;400;700',
	'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	'Cardo:ital,wght@0,400;0,700;1,400',
	'Courgette',
	'Cherry+Swash:wght@400;700',
	'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
	'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
	'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	'Cookie',
	'Coming+Soon',
	'Chewy',
	'Days+One',
	'Dosis:wght@200;300;400;500;600;700;800',
	'Economica:ital,wght@0,400;0,700;1,400;1,700',
	'Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Fredoka+One',
	'Fjalla+One',
	'Francois+One',
	'Frank+Ruhl+Libre:wght@300;400;500;700;900',
	'Gloria+Hallelujah',
	'Great+Vibes',
	'Handlee',
	'Hammersmith+One',
	'Heebo:wght@100;200;300;400;500;600;700;800;900',
	'Inconsolata:wght@200;300;400;500;600;700;800;900',
	'Indie+Flower',
	'IM+Fell+English+SC',
	'Julius+Sans+One',
	'Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
	'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
	'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Lobster',
	'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
	'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
	'Lobster+Two:ital,wght@0,400;0,700;1,400;1,700',
	'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
	'Merienda+One',
	'Monda:wght@400;700',
	'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Marck+Script',
	'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700',
	'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
	'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Overpass+Mono:wght@300;400;500;600;700',
	'Oxygen:wght@300;400;700',
	'Orbitron:wght@400;500;600;700;800;900',
	'Patua+One',
	'Pacifico',
	'Padauk:wght@400;700',
	'Playball',
	'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
	'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
	'Permanent+Marker',
	'Poiret+One',
	'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Quicksand:wght@300;400;500;600;700',
	'Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700',
	'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
	'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
	'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
	'Russo+One',
	'Righteous',
	'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Satisfy',
	'Slabo+13px',
	'Slabo+27px',
	'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
	'Shadows+Into+Light+Two',
	'Shadows+Into+Light',
	'Sacramento',
	'Shrikhand',
	'Staatliches',
	'Tangerine:wght@400;700',
	'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
	'Unica+One',
	'VT323',
	'Varela+Round',
	'Vampiro+One',
	'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
	'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	'Yanone+Kaffeesatz:wght@200;300;400;500;600;700',
	'ZCOOL+XiaoWei'
    );
	
	$fonts_url = add_query_arg( array(
	'family' => implode( '&family=', $font_family ),
	'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/**
 * Widget area.
 */
function tabib_hospital_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tabib-hospital' ),
		'id'            => 'sidebox-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tabib-hospital' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tabib-hospital' ),
		'id'            => 'sidebox-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'tabib-hospital' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$tabib_hospital_widget_areas = get_theme_mod('tabib_hospital_footer_widget', '4');
	for ($i=1; $i<=$tabib_hospital_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'tabib-hospital' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title py-2 mb-3">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'tabib_hospital_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tabib_hospital_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'tabib-hospital-fonts', tabib_hospital_fonts_url(), array(), null );

	// blocks-css
	wp_enqueue_style( 'tabib-hospital-block-style', get_theme_file_uri('/assets/css/blocks.css') );

	//bootstrap
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.css' ));

	// Theme stylesheet.
	wp_enqueue_style( 'tabib-hospital-basic-style', get_stylesheet_uri() );

	//font-awesome 
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
     // Body
    $tabib_hospital_body_color = get_theme_mod('tabib_hospital_body_color', '');
    $tabib_hospital_body_font_family = get_theme_mod('tabib_hospital_body_font_family', '');
    $tabib_hospital_body_font_size = get_theme_mod('tabib_hospital_body_font_size', '');
	// Paragraph
    $tabib_hospital_paragraph_color = get_theme_mod('tabib_hospital_paragraph_color', '');
    $tabib_hospital_paragraph_font_family = get_theme_mod('tabib_hospital_paragraph_font_family', '');
    $tabib_hospital_paragraph_font_size = get_theme_mod('tabib_hospital_paragraph_font_size', '');
	// "a" tag
	$tabib_hospital_atag_color = get_theme_mod('tabib_hospital_atag_color', '');
    $tabib_hospital_atag_font_family = get_theme_mod('tabib_hospital_atag_font_family', '');
	// "li" tag
	$tabib_hospital_li_color = get_theme_mod('tabib_hospital_li_color', '');
    $tabib_hospital_li_font_family = get_theme_mod('tabib_hospital_li_font_family', '');
	// H1
	$tabib_hospital_h1_color = get_theme_mod('tabib_hospital_h1_color', '');
    $tabib_hospital_h1_font_family = get_theme_mod('tabib_hospital_h1_font_family', '');
    $tabib_hospital_h1_font_size = get_theme_mod('tabib_hospital_h1_font_size', '');
	// H2
	$tabib_hospital_h2_color = get_theme_mod('tabib_hospital_h2_color', '');
    $tabib_hospital_h2_font_family = get_theme_mod('tabib_hospital_h2_font_family', '');
    $tabib_hospital_h2_font_size = get_theme_mod('tabib_hospital_h2_font_size', '');
	// H3
	$tabib_hospital_h3_color = get_theme_mod('tabib_hospital_h3_color', '');
    $tabib_hospital_h3_font_family = get_theme_mod('tabib_hospital_h3_font_family', '');
    $tabib_hospital_h3_font_size = get_theme_mod('tabib_hospital_h3_font_size', '');
	// H4
	$tabib_hospital_h4_color = get_theme_mod('tabib_hospital_h4_color', '');
    $tabib_hospital_h4_font_family = get_theme_mod('tabib_hospital_h4_font_family', '');
    $tabib_hospital_h4_font_size = get_theme_mod('tabib_hospital_h4_font_size', '');
	// H5
	$tabib_hospital_h5_color = get_theme_mod('tabib_hospital_h5_color', '');
    $tabib_hospital_h5_font_family = get_theme_mod('tabib_hospital_h5_font_family', '');
    $tabib_hospital_h5_font_size = get_theme_mod('tabib_hospital_h5_font_size', '');
	// H6
	$tabib_hospital_h6_color = get_theme_mod('tabib_hospital_h6_color', '');
    $tabib_hospital_h6_font_family = get_theme_mod('tabib_hospital_h6_font_family', '');
    $tabib_hospital_h6_font_size = get_theme_mod('tabib_hospital_h6_font_size', '');

	$tabib_hospital_custom_css ='
	    body{
		    color:'.esc_html($tabib_hospital_body_color).'!important;
		    font-family: '.esc_html($tabib_hospital_body_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_body_font_size).'px !important;
		}
		p,span{
		    color:'.esc_html($tabib_hospital_paragraph_color).'!important;
		    font-family: '.esc_html($tabib_hospital_paragraph_font_family).';
		    font-size: '.esc_html($tabib_hospital_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($tabib_hospital_atag_color).'!important;
		    font-family: '.esc_html($tabib_hospital_atag_font_family).';
		}
		li{
		    color:'.esc_html($tabib_hospital_li_color).'!important;
		    font-family: '.esc_html($tabib_hospital_li_font_family).';
		}
		h1{
		    color:'.esc_html($tabib_hospital_h1_color).'!important;
		    font-family: '.esc_html($tabib_hospital_h1_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($tabib_hospital_h2_color).'!important;
		    font-family: '.esc_html($tabib_hospital_h2_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($tabib_hospital_h3_color).'!important;
		    font-family: '.esc_html($tabib_hospital_h3_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($tabib_hospital_h4_color).'!important;
		    font-family: '.esc_html($tabib_hospital_h4_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($tabib_hospital_h5_color).'!important;
		    font-family: '.esc_html($tabib_hospital_h5_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($tabib_hospital_h6_color).'!important;
		    font-family: '.esc_html($tabib_hospital_h6_font_family).'!important;
		    font-size: '.esc_html($tabib_hospital_h6_font_size).'!important;
		}
	';

	wp_add_inline_style( 'tabib-hospital-basic-style',$tabib_hospital_custom_css );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-jquery', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'tabib-hospital-skip-link-focus-fix-jquery', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$tabib_hospitalScreenReaderText=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'tabib-hospital-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

		$tabib_hospitalScreenReaderText['expand']         = __( 'Expand child menu', 'tabib-hospital' );
		$tabib_hospitalScreenReaderText['collapse']       = __( 'Collapse child menu', 'tabib-hospital' );		
	}

	wp_enqueue_script( 'jquery-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'bootstrap-jquery', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	require get_parent_theme_file_path( '/color-option.php' );
	wp_add_inline_style( 'tabib-hospital-basic-style',$tabib_hospital_custom_css );

	wp_localize_script( 'tabib-hospital-skip-link-focus-fix-jquery', 'tabib_hospitalScreenReaderText', $tabib_hospitalScreenReaderText );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tabib_hospital_scripts' );

function tabib_hospital_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function tabib_hospital_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function tabib_hospital_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function tabib_hospital_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function tabib_hospital_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'tabib_hospital_loop_columns');
if (!function_exists('tabib_hospital_loop_columns')) {
	function tabib_hospital_loop_columns() {
		$columns = get_theme_mod( 'tabib_hospital_woocommerce_product_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'tabib_hospital_shop_per_page', 20 );
function tabib_hospital_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'tabib_hospital_woocommerce_product_per_page', 9 );
	return $cols;
}

/* Excerpt Limit Begin */
function tabib_hospital_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function tabib_hospital_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

define('TABIB_HOSPITAL_LIVE_DEMO',__('https://www.themeseye.com/demo/tabib-hospital-pro/','tabib-hospital'));
define('TABIB_HOSPITAL_BUY_PRO',__('https://www.themeseye.com/wordpress/hospital-wordpress-theme/','tabib-hospital'));
define('TABIB_HOSPITAL_PRO_DOC',__('https://www.themeseye.com/theme-demo/docs/tabib-hospital-pro/','tabib-hospital'));
define('TABIB_HOSPITAL_FREE_DOC',__('https://themeseye.com/theme-demo/docs/free-tabib-hospital/','tabib-hospital'));
define('TABIB_HOSPITAL_PRO_SUPPORT',__('https://www.themeseye.com/forums/forum/themeseye-support/','tabib-hospital'));
define('TABIB_HOSPITAL_FREE_SUPPORT',__('https://wordpress.org/support/theme/tabib-hospital/','tabib-hospital'));

//footer Link
define('TABIB_HOSPITAL_CREDIT',__('https://www.themeseye.com/wordpress/free-hospital-wordpress-theme/', 'tabib-hospital'));

if ( ! function_exists( 'tabib_hospital_credit' ) ) {
	function tabib_hospital_credit(){
		echo "<a href=".esc_url(TABIB_HOSPITAL_CREDIT)." target='_blank'>".esc_html__(' Hospital WordPress Theme','tabib-hospital')."</a>";
	}
}

function tabib_hospital_enable_image_dimention(){
	if(get_theme_mod('tabib_hospital_post_image_dimention') == 'Custom Image Size' ) {
		return true;
	}
	return false;
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/get_started_info.php' ); 
/* Webfonts */
require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );