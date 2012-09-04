<?php
/**
 * SS Contest Template Functions
 *
 * @package ss-contest
 * @subpackage TemplateFunctions
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function ssc_locate_template( $template_names, $load = false, $require_once = true ) {
	// No file found yet
	$located = false;

	// Try to find a template file
	foreach ( (array) $template_names as $template_name ) {

		// Continue if template is empty
		if ( empty( $template_name ) )
			continue;

		// Trim off any slashes from the template name
		$template_name = ltrim( $template_name, '/' );

		// Check child theme first
		if ( file_exists( trailingslashit( STYLESHEETPATH ) . $template_name ) ) {
			$located = trailingslashit( STYLESHEETPATH ) . $template_name;
			break;

		// Check parent theme next
		} elseif ( file_exists( trailingslashit( TEMPLATEPATH ) . $template_name ) ) {
			$located = trailingslashit( TEMPLATEPATH ) . $template_name;
			break;
		}

		// Check theme compatibility last
		/* } elseif ( file_exists( trailingslashit( bbp_get_theme_compat_dir() ) . $template_name ) ) { */
		/* 	$located = trailingslashit( bbp_get_theme_compat_dir() ) . $template_name; */
		/* 	break; */
		/* } */
	}

	if ( ( true == $load ) && !empty( $located ) )
		load_template( $located, $require_once );

	return $located;
}
?>