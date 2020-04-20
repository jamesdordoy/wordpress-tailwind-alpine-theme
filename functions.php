<?php



function template_theme_support() {

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new Template_Script_Loader();
	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );
}

require get_template_directory() . '/classes/class-template-script-loader.php';

add_action( 'after_setup_theme', 'template_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function template_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'template-styles', get_stylesheet_uri(), [], $theme_version );
    
}

add_action( 'wp_enqueue_scripts', 'template_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function template_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'template-scripts', get_template_directory_uri() . '/app.js', array(), $theme_version, false );
    wp_script_add_data( 'template-scripts', 'defer', true );
}

add_action( 'wp_enqueue_scripts', 'template_register_scripts' );

$menus = [
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
];

register_nav_menus($menus);