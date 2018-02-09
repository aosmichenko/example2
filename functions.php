<?php
/**
 * starter functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package starter
 */

/**
 * Server side mobile detection
 */
require get_template_directory() . '/inc/is-mobile.php';

/**
 * Load helper functions set.
 */
require get_template_directory() . '/inc/osmilab-helper.php';

if ( ! function_exists( 'starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'post-thumb', 540, 500, true );
		add_image_size( 'crop-x1', 1500 );
		add_image_size( 'crop-x2', 2000 );
		add_image_size( 'crop-x3', 2500 );
		add_image_size( 'crop-x4', 3000 );
	}
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'starter' ),
		'project' => esc_html__( 'Project Menu', 'starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	/**
	 * This feature enables woocommerce support for a theme.
	 * @see http://www.woothemes.com/2013/02/last-call-for-testing-woocommerce-2-0-coming-march-4th/
	 */
	add_theme_support( 'woocommerce' );


}
endif; // starter_setup
add_action( 'after_setup_theme', 'starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starter' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'starter' ),
		'id'            => 'footer',
		'description'   => ' Maximum 4 widgets!',
		'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 col-xs-12 %2$s"><div class="widget-wrapper">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<strong class="widget-title">',
		'after_title'   => '</strong>',
	) );
}
add_action( 'widgets_init', 'starter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starter_scripts() {
	$ver = date('Y-m');
//	wp_enqueue_style( 'starter-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	wp_enqueue_style( 'starter-init', get_stylesheet_directory_uri().'/css/init.css', array(), '2.0' );
	wp_enqueue_script( 'starter-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), $ver, false );

	wp_enqueue_script( 'starter-apps', get_template_directory_uri() . '/js/app.min.js', array(), $ver, true );
	wp_enqueue_script( 'starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), $ver, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load ACF functions set.
 */
require get_template_directory() . '/inc/acf-loader.php';

add_action( 'init', 'my_remove_filters_func' );

function my_remove_filters_func() {
	remove_filter( 'the_content', 'sharing_display', 19 );
	remove_filter( 'the_excerpt', 'sharing_display', 19 );
}

add_filter('show_admin_bar', '__return_false');
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Theme Options');

}
