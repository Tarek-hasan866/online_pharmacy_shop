<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

if (!function_exists('popularis_fashion_setup')) :

    /**
     * Global functions.
     */
    function popularis_fashion_setup() {

        // Child theme language
        load_child_theme_textdomain('popularis-fashion', get_stylesheet_directory() . '/languages');
    }

endif;



if (!function_exists('popularis_fashion_parent_css')):

    /**
     * Enqueue CSS.
     */
    function popularis_fashion_parent_css() {
        $parent_style = 'popularis-stylesheet';

        $dep = array('bootstrap');
        if (class_exists('WooCommerce')) {
            $dep = array('bootstrap', 'popularis-woocommerce');
        }

        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css', $dep);
        wp_enqueue_style('popularis-fashion',
                get_stylesheet_directory_uri() . '/style.css',
                array($parent_style),
                wp_get_theme()->get('Version')
        );
        wp_enqueue_script('popularis-fashion', get_stylesheet_directory_uri() . '/js/popularis-fashion.js', array('jquery'), wp_get_theme()->get('Version'), true);
    }

endif;

add_action('wp_enqueue_scripts', 'popularis_fashion_parent_css');
add_action( 'init', 'popularis_customizer' );

if (!function_exists('popularis_fashion_excerpt_length')) :

    /**
     * Limit the excerpt.
     */
    function popularis_fashion_excerpt_length($length) {
        if ( is_admin() ) return $length;
        if (is_home() || is_archive()) { // Make sure to not limit pagebuilders
            return '25';
        } else {
            return $length;
        }
    }

    add_filter('excerpt_length', 'popularis_fashion_excerpt_length', 999);

endif;

if (!function_exists('popularis_fashion_search')) :

    /**
     * Limit the excerpt.
     */
    function popularis_fashion_search() { ?>
    <!-- Search Link -->
    <div class="header-search float-search">   
     <a href="#float-search">
       <i class="fa fa-search"></i>
     </a>
    </div>
    <!-- Search Form -->
    <div id="float-search" class="float-search-form"> 
      <i class="fa fa-close"></i>
      <form role="search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="hidden" name="post_type" value="product" />
        <input class="header-search-input" name="s" type="search" placeholder="<?php esc_attr_e('Search products...', 'popularis-fashion'); ?>"/>
      </form>
    </div>
    
    <?php     
    }

endif;
