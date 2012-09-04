<?php
/*
  Plugin Name: Seoul SE Contest
  Plugin URI: http://twitter.com/bi2one
  Description: seoul se contest prototype.
  Author: JungGyun Lee
  Version: 0.1
  Author URI: http://twitter.com/bi2one
 */

define ( 'WP_DEBUG', true );

final class Seoul_SE_Contest {
	private static $instance;

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new Seoul_SE_Contest;
			self::$instance->setup_globals();
			self::$instance->includes();
			self::$instance->setup_actions();
		}
		return self::$instance;
	}

	public function __construct() { }
	public function __clone() { wp_die( __( 'Cheatin&#8217; huh?', 'seoul-se-contest' ) ); }
	public function __wakeup() { wp_die( __( 'Cheatin&#8217; huh?', 'seoul-se-contest' ) ); }

	private function setup_globals() {
		$this->version = '0.1';
		$this->file = __FILE__;

		$this->basename   = apply_filters( 'ssc_plugin_basename', plugin_basename( $this->file ) );
		$this->plugin_dir = apply_filters( 'ssc_plugin_dir_path', plugin_dir_path( $this->file ) );
		$this->plugin_url = apply_filters( 'ssc_plugin_dir_url', plugin_dir_url( $this->file ) );

		$this->themes_dir = apply_filters( 'ssc_themes_dir', trailingslashit( $this->plugin_dir . 'ssc-themes' ) );
		$this->themes_url = apply_filters( 'ssc_themes_url', trailingslashit( $this->plugin_url . 'ssc-themes' ) );

		$this->theme = new stdClass;
	}

	private function includes() {
		/** Core **************************************************************/
		require( $this->plugin_dir . 'ssc-includes/ssc-core-actions.php' );
		require( $this->plugin_dir . 'ssc-includes/ssc-core-functions.php' );

		/** Templates *********************************************************/
		require( $this->plugin_dir . 'ssc-includes/ssc-template-functions.php' );
		require( $this->plugin_dir . 'ssc-includes/ssc-template-loader.php' );
	}

	private function setup_actions() {
		add_action( 'activate_' . $this->basename, 'ssc_activation' );
		add_action( 'deactivate_' . $this->basename, 'ssc_deactivation' );

		if ( ssc_is_deactivation( $this->basename ) )
			return;

		$actions = array(
			'register_theme_directory'
		);

		foreach( $actions as $class_action )
			add_action( 'ssc_' . $class_action, array( $this, $class_action ), 5 );
		do_action_ref_array( 'ssc_after_setup_actions', array( &$this ) );
	}

	public function register_theme_directory() {
		return register_theme_directory( $this->themes_dir );
	}

	public function create_page() {
		echo 'page created!!';
	}

	public function remove_page() {
		echo 'page deleted!!';
	}
}

function ss_contest() {
	return Seoul_SE_Contest::instance();
}

ss_contest();
?>