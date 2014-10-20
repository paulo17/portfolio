<?php
// require get_template_directory() . '/inc/template-tags.php';
// require get_template_directory() . '/inc/extras.php';
// require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/inc/realisation.php';
require get_template_directory() . '/inc/user.php';
require get_template_directory() . '/inc/custom-register.php';
require get_template_directory() . '/inc/template-tags.php';

if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

if ( ! function_exists( 'portfolio_setup' ) ) :

	function portfolio_setup() {


		load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			) );
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
			) );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'portfolio' ),
			'footer' => __( 'Footer Menu', 'portfolio' ),
			) );

	}

endif; // portfolio_setup
add_action( 'after_setup_theme', 'portfolio_setup' );


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


function insert_realisation($post_id){

}
add_action('acf/save_post', 'insert_realisation');


/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
	wp_register_script( 'infinite-scroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', 'jquery', '2.0', true );
	wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', 'jquery', '2.0', true );
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
	wp_enqueue_script( 'infinite-scroll' );
	wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

function custom_acf_deregister_styles(){
	if (!is_admin()){
		//wp_deregister_style( 'acf-global');
		//wp_deregister_style( 'acf-input' );
	}
}

add_action( 'wp_print_styles', 'custom_acf_deregister_styles', 999 );


/*
*  Create an advanced sub page called 'Options' that sits under the General options menu
*/

if( function_exists('acf_add_options_sub_page') ){
	acf_add_options_sub_page(array(
		'title' => 'Options',
		'parent' => 'options-general.php',
		'capability' => 'manage_options'
		));
}

function my_search_form( $form ) {
	$form = '<form role="search" method="post" action="' . home_url( '/' ) . 'search" >
	<div><input type="text" value="' . get_search_query() . '" name="search" placeholder="Rechercher..." id="search-input" /></div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );
