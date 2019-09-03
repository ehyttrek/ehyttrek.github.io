<?php

function my_style() {
    wp_enqueue_style(  'style', get_stylesheet_uri()); 
}

add_action( 'wp_enqueue_scripts', 'my_style' );

function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

// Custom function to return the post slug
function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);



function my_widgets_init() {

	register_sidebar( array(
		'name'          => 'Header Image Widget',
		'id'            => 'header-image-widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
    
    register_sidebar( array(
		'name'          => 'Header Overlay Widget',
		'id'            => 'header-overlay-widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
    
        register_sidebar( array(
		'name'          => 'Footer Widget',
		'id'            => 'footer-widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );




?>