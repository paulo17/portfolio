<?php
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/realisation.php';
require get_template_directory() . '/inc/user.php';

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'portfolio_setup' ) ) :

function portfolio_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on portfolio, use a find and replace
	 * to change 'portfolio' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'portfolio' ),
	) );

}
endif; // portfolio_setup

add_action( 'after_setup_theme', 'portfolio_setup' );
add_action('send_headers', 'custom_route');

function custom_route(){
	//require_once 'register.php';
}

/**
 * Register widget area.
 */
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {

	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
	wp_enqueue_script( 'portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );


function add_image_sizes()
{
     if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'single-size', 518, 360, true ); // single project image
     }
}
add_action('after_setup_theme', 'add_image_sizes');

