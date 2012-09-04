<?php
/**
 * SS Contest Template Loader
 *
 * @package ss-contest
 * @subpackage TemplateLoader
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function ssc_load_theme_functions() {
	global $pagenow;

	if ( ! defined( 'WP_INSTALLING' ) || ( ! empty( $pagenow ) && ( 'wp-activate.php' !== $pagenow ) ) ) {
		ssc_locate_template( 'ss-contest-functions.php', true );
	}
}
?>