<?php

function _add_stylesheets()
{
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/dist/css/main.min.css', array(), filemtime(get_template_directory() . '/assets/dist/css/main.min.css'), 'all' );
}
add_action('wp_enqueue_scripts', '_add_stylesheets');

?>


