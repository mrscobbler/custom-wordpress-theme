<?php
function moduleqTheme_scripts() {
	wp_register_script( 'validation', get_template_directory_uri() . '/js/validation.js', array( 'jquery', 'jquery-ui-core' ) );
	wp_register_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js' );
	
	wp_register_script( 'velocity', get_template_directory_uri() . '/js/velocity.min.js');
    wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/scrollTo.js');
    wp_register_script( 'mq', get_template_directory_uri() . '/js/mq.js');
    
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('validation');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('velocity');
    wp_enqueue_script('scrollTo');
    wp_enqueue_script('mq');
}
add_action('wp_enqueue_scripts', 'moduleqTheme_scripts');