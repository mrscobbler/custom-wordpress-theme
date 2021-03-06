<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
function moduleqTheme_scripts() {
	wp_register_script( 'validation', get_template_directory_uri() . '/js/validation.js', array( 'jquery', 'jquery-ui-core' ) );
	wp_register_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js' );
	
	wp_register_script( 'velocity', get_template_directory_uri() . '/js/velocity.min.js');
    wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/scrollTo.js');
    wp_register_script( 'mq', get_template_directory_uri() . '/js/mq.js');
    
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_enqueue_script('validation');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('velocity');
    wp_enqueue_script('scrollTo');
    wp_enqueue_script('mq');
}
add_action('wp_enqueue_scripts', 'moduleqTheme_scripts');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

function remove_support() {
    remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'remove_support' );

function sidebar_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="widget-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'sidebar_widgets_init' );
?>