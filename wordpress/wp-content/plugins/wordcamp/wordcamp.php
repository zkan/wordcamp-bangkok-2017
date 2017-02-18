<?php

/**
 * Plugin Name: WordCamp Hook
 * Description: A simple plugin to test hooks at WordCamp Bangkok 2017
 */

function generate_credits() {
	// Dashicons: https://developer.wordpress.org/resource/dashicons/#wordpress
	$credits = '<span class="dashicons dashicons-wordpress"></span>';
	$credits .= '<span class="dashicons dashicons-twitter"></span>';

	echo '<div>';
	echo apply_filters( 'wordcamp_credits', $credits );
	echo '</div>';
}
add_action( 'twentysixteen_credits', 'generate_credits' );
