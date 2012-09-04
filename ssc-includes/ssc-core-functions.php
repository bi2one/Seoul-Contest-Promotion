<?php

/**
 * SE Contest Core Functions
 *
 * @package seoulSEContest
 * @subpackage Functions
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function ssc_is_deactivation( $basename = '' ) {
	$ssc = ss_contest();

	$action = false;
	if ( ! empty( $_REQUEST['action'] ) && ( '-1' != $_REQUEST['action'] ) )
		$action = $_REQUEST['action'];
	elseif ( ! empty( $_REQUEST['action2'] ) && ( '-1' != $_REQUEST['action2'] ) )
		$action = $_REQUEST['action2'];

	if ( empty( $action ) || !in_array( $action, array( 'deactivate', 'deactivate-selected' ) ) )
		return false;

	if ( $action == 'deactivate' )
		$plugins = isset( $_GET['plugin'] ) ? array( $_GET['plugin'] ) : array();
	else
		$plugins = isset( $_POST['checked'] ) ? (array) $_POST['checked'] : array();

	if ( empty( $basename ) && !empty( $ssc->basename ) )
		$basename = $ssc->basename;

	if ( empty( $basename ) )
		return false;

	return in_array( $basename, $plugins );
}
?>