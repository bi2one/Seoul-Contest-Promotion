<?php

/**
 * ss_contest Actions
 *
 * @package ss_contest
 * @subpackage Core
 *
 * There are a few common places that additional actions can currently be found
 *  - Seoul_SE_Contest: In {@link Seoul_SE_Contest::setup_actions()} in seoul-se-contest.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'plugins_loaded', 'ssc_loaded', 10);
add_action( 'get_header', 'ssc_get_header', 10);
add_action( 'wp_head', 'ssc_head', 10);
add_action( 'wp_enqueue_scripts', 'ssc_enqueue_scripts', 10);
add_action( 'setup_theme', 'ssc_setup_theme', 10);
add_action( 'after_setup_theme', 'ssc_after_setup_theme', 100);

add_action( 'ssc_activation', 'ssc_create_page', 10);
add_action( 'ssc_deactivation', 'ssc_remove_page', 10);

add_action( 'ssc_loaded', 'ssc_register_theme_directory' );

// Try to load the ss-contest-functions.php file from the active themes
add_action( 'ssc_after_setup_theme', 'ssc_load_theme_functions' );

function ssc_get_header() {
	do_action ( 'ssc_get_header' );
}

function ssc_head() {
	do_action( 'ssc_head' );
}

function ssc_enqueue_scripts() {
	do_action( 'ssc_enqueue_scripts' );
}

function ssc_setup_theme() {
	do_action( 'ssc_setup_theme' );
}

function ssc_after_setup_theme() {
	do_action( 'ssc_after_setup_theme' );
}

function ssc_loaded() {
	do_action( 'ssc_loaded' );
}

function ssc_activation() {
	do_action( 'ssc_activation' );
}

function ssc_deactivation() {
	do_action( 'ssc_deactivation' );
}

function ssc_register_theme_directory() {
	do_action( 'ssc_register_theme_directory' );
}

function ssc_create_page() {
	do_action( 'ssc_create_page' );
}

function ssc_remove_page() {
	do_action( 'ssc_remove_page' );
}
?>