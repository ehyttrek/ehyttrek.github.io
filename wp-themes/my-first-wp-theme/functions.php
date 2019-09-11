<?php

function my_style() {
    wp_enqueue_style(  'style', get_stylesheet_uri()); 
}

add_action( 'wp_enqueue_scripts', 'my_style' );


add_theme_support( 'post-thumbnails' ); 

function register_my_menus() {
  register_nav_menus(
    array(    
        'main-menu' => __( 'Main Menu' ),
        'page-menu' => __( 'Page Menu' )        
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


function my_widgets_init() {

        register_sidebar( array(
		'name'          => 'Meine Footer Widgets',
		'id'            => 'footer-widget',
		'before_widget' => '<aside>',
		'after_widget'  => '</aside>',
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );

?>