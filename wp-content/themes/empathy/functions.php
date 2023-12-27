<?php
/**
* starter-theme
* Developed © Luca
*
* @package  WordPress
*/

/**
 * Strip WP Version in Stylesheets/Scripts
 */
function switch_stylesheet_src( $src, $handle ) {

    $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'switch_stylesheet_src', 10, 2 );

/**
 * Hide update notice
 */
function hide_update_notice_to_all_but_admin_users()
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_update_notice_to_all_but_admin_users', 1 );

/**
 * Clean header
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Theme options
 */

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

/**
 * Scripts
 */
function my_init() {
    if (!is_admin()) {
        wp_deregister_script( 'wp-embed' );
    }
}
add_action('init', 'my_init');


if ( ! function_exists( 'init_header' ) ) :
    /**
     * Enqueue scripts and styles for the front end.
     *
     */
    function init_header() {

        global $template;

        $current_template = basename($template);

        // Load our main stylesheet.
        wp_enqueue_style( 'app', get_template_directory_uri() . '/dist/css/main.css'.'?s='.time() );

        // Load our main js.
        wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/js/main.min.js', array(), '01', true );

        if ($current_template == 'page-contact.php') {
            //wp_enqueue_script( 'form-js', get_template_directory_uri() . '/assets/js/form.js', array('jquery'), '01', true );
        }

    }
endif;
add_action( 'wp_enqueue_scripts', 'init_header',20,1 );

if ( ! function_exists( 'vendor_cdn' ) ) :
    /**
     * Enqueue scripts and styles for the front end.
     *
     */
    function vendor_cdn() {


        // Load our main stylesheet.

        wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
        wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
        wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js');
        wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_script( 'isotope-js', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'vendor_cdn' );


/**
 * Setup theme
 */

if ( ! function_exists( 'setUp_theme' ) ) :
    /**
     * Theme setup.
     *
     * Set up theme defaults and registers support for various WordPress features.
     *
     */
    function setUp_theme() {

        // Enable support for Post Thumbnails, and declare two sizes.
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'example-1', 2000, 1250, true );



        // This theme uses wp_nav_menu() in two locations.
        if (function_exists('register_nav_menus')) {
            register_nav_menus( array(
                'main_menu' => __( 'Main Menu', 'text_domain' ),
                'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
                'lang_menu'  => __( 'Lang Menu', 'text_domain' ),
            ) );
        }

    }
endif;

add_action( 'after_setup_theme', 'setUp_theme' );


/**
 * Excerpt length
 */

function custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// hide update notifications
function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes
