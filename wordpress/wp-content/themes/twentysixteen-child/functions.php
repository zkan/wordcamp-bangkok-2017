<?php

function child_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

function load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );

function print_hello() {
	echo '<p style="color: white;">Hello, WordCamp!</p>';
}
add_action( 'wp_footer', 'print_hello' );

function convert_to_uppercase( $content ) {
	return strtoupper( $content );
}
add_filter( 'the_content', 'convert_to_uppercase' );

function add_my_credit( $credits ) {
	return $credits . '<span class="dashicons dashicons-facebook"></span>';
}
add_filter( 'wordcamp_credits', 'add_my_credit' );
