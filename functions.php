<?php

function add_title_tag() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_title_tag');

function my_theme_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
	wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', null, '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

function blocks_exampleblock_block_init() {
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) { // Function introduced in WordPress 6.8.
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	} else {
		if ( function_exists( 'wp_register_block_metadata_collection' ) ) { // Function introduced in WordPress 6.7.
			wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		}
		$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
		foreach ( array_keys( $manifest_data ) as $block_type ) {
			register_block_type( __DIR__ . "/build/{$block_type}" );
		}
	}
}
add_action( 'init', 'blocks_exampleblock_block_init' );
