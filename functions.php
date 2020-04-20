<?php

/**
 * Register and Enqueue Styles.
 */
function template_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'template-styles', get_stylesheet_uri(), [], $theme_version );
}

add_action( 'wp_enqueue_scripts', 'template_register_styles' );