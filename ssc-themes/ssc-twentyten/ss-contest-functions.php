<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'SSC_Twenty_Ten' ) ) :
class SSC_Twenty_Ten {
	/**
	 * The main ss-contest (Twenty Ten) Loader
	 *
	 * @since ss-contest (v0.1)
	 */
	public function __construct() {
		$this->setup_globals();
		$this->setup_actions();
		$this->setup_settings();
	}

	private function setup_settings() {
	}

	private function setup_globals() {
		$ssc = ss_contest();
		$this->id = 'ssc-twentyten';
		$this->name = 'Twenty Ten (SS Contest)';
		$this->version = $ssc->version;
		$this->dir = trailingslashit( $ssc->themes_dir . 'ssc-twentyten' );
		$this->url = trailingslashit( $ssc->themes_url . 'ssc-twentyten' );
		$this->media_url = trailingslashit( $this->url . 'media' );
		$this->css_url = trailingslashit( $this->media_url . 'css' );
		$this->js_url = trailingslashit( $this->media_url . 'js' );
		$this->image_url = trailingslashit( $this->media_url . 'images' );

		/** Register CSS ******************************************************/
		wp_register_style( 'ssc-bootstrap', $this->media_url . 'bootstrap/css/bootstrap.min.css', 'twentyten', $this->version, 'screen' );
		wp_register_style( 'ssc-reset', $this->css_url . 'reset.css', 'twentyten', $this->version, 'screen' );
		wp_register_style( 'ssc-promotion', $this->css_url . 'promotion.css', 'twentyten', $this->version, 'screen' );

		/** Register Script ***************************************************/
		wp_register_script( 'ssc-bootstrap', $this->media_url . 'bootstrap/js/bootstrap.js', 'twentyten', $this->version, false );
		wp_register_script( 'ssc-promotion', $this->js_url . 'promotion.js', 'ssc-bootstrap', $this->version, false );
	}

	private function setup_actions() {
		/* add_action( 'ssc_enqueue_scripts', array( $this, 'customize_background' ) ); */
		add_action( 'ssc_get_header', array( $this, 'customize_background' ) );
		add_action( 'ssc_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'ssc_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		add_filter( 'show_admin_bar', '__return_false' );
	}

	public function customize_background() {
		remove_theme_support( 'custom-background' );
	}

	public function enqueue_styles() {
		wp_enqueue_style( 'twentyten', trailingslashit( get_template_directory_uri() ) . 'style.css', '', $this->version, 'screen' );
		wp_enqueue_style( 'ssc-twentyten', $this->css_url . 'ss_contest.css', 'twentyten', $this->version, 'screen' );
		if ( is_page_template( 'page-promotion.php' ) ) {
			// wp_enqueue_style( 'ssc-bootstrap' );
			// wp_enqueue_style( 'ssc-reset' );
			// wp_enqueue_style( 'ssc-promotion' );
		}
	}

	public function enqueue_scripts() {
		if ( is_page_template( 'page-promotion.php' ) ) {
			// wp_enqueue_script( 'ssc-bootstrap' );
			// wp_enqueue_script( 'ssc-promotion' );
		}
	}
}
ss_contest()->theme = new SSC_Twenty_Ten();
endif;

function ssc_image_url( $filename ) {
	echo ssc_get_image_url( $filename );
}

function ssc_get_image_url( $filename ) {
	return ss_contest()->theme->image_url . $filename;
}
?>