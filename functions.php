<?php

// Add scripts and stylesheets
function humaninc_scripts() {
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uikit_icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/js/uikit-icons.min.js' );
  wp_enqueue_script( 'uikit_parallax', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/js/components/parallax.min.js' );
}
add_action( 'wp_enqueue_scripts', 'humaninc_scripts' );

/********************************************************************************
excerpt length
********************************************************************************/
function humaninc_excerpt_length( $length ) {
  return 16;
}
add_filter( 'excerpt_length', 'humaninc_excerpt_length', 999 );


// Custom menu's
function rjk_humaninc_menu() {
  register_nav_menu( 'humaninc_menu', __('Human Inc Menu') );
}
add_action( 'init', 'rjk_humaninc_menu' );

function rjk_humaninc_menu_mobile() {
  register_nav_menu( 'humaninc_menu_mobile', __('humaninc Menu Mobiel') );
}
add_action( 'init', 'rjk_humaninc_menu_mobile' );


add_image_size( 'square-small', 150, 150, true );
add_image_size( 'square', 250, 250, true );
add_image_size( 'square-medium', 400, 400, true );
add_image_size( 'square-big', 500, 500, true );
add_image_size( 'widescreen', 320, 180, true );
add_image_size( 'hvrbox', 250, 300, true );


// Create widgets
function humaninc_create_widget( $description ) {

	register_sidebar(array(
		'name' => __( 'Page sidebar 1' ),
		'id' => 'sidebar-1',
		'description' => __( $description ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 style="font-variant:all-small-caps;">',
		'after_title' => '</h3>'
	));

  register_sidebar(array(
		'name' => __( 'Page sidebar 2' ),
		'id' => 'sidebar-2',
		'description' => __( $description ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
    'before_title' => '<h3 style="font-variant:all-small-caps;">',
		'after_title' => '</h3>'
	));

  register_sidebar(array(
		'name' => __( 'Page sidebar 3' ),
		'id' => 'sidebar-3',
		'description' => __( $description ),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
    'before_title' => '<h3 style="font-variant:all-small-caps;">',
		'after_title' => '</h3>'
	));

}
humaninc_create_widget( 'Page Sidebar', 'page', 'Displays on the bottom of pages with a sidebar' );



/**********************************************************************************
humaninc_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function humaninc_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'producties', 'nieuws' ) );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

  // Wordpress titles
  add_theme_support( 'title-tag' );

  /* Logo support */
  add_theme_support( 'custom-logo', array(
  	'height'      => 240, // set to your dimensions
  	'width'       => 240,
  	'flex-height' => true,
  	'flex-width'  => true,
  ) );

}
add_action( 'after_setup_theme', 'humaninc_theme_support' );
