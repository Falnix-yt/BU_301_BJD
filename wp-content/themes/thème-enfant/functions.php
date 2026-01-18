<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// style du thème parent
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);

	// style du thème enfant
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array('parent-style')
	);
}