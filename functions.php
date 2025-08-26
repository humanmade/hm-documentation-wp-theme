<?php

add_action( 'init', function() {
	add_action('wp_enqueue_scripts', 'hm_documentation_enqueue_styles');
	add_editor_style( 'style.css' );
} );

function hm_documentation_enqueue_styles() {
	wp_enqueue_style(
		'hm-documentation-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get('Version')
	);
}
