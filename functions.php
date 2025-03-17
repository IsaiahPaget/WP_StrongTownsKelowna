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
	register_block_type( __DIR__ . "/build/exampleblock" );
	/*register_block_type( __DIR__ . "/build/exampleblocktwo" );*/
}
add_action( 'init', 'blocks_exampleblock_block_init' );

add_theme_support('post-thumbnails');
