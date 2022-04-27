<?php
/**
 * Plugin Name: BWD Tabs Zone
 * Description: Eye Catching Elementor Tabs Zone, 29+ Unique Design.
 * Plugin URI:  https://bestwpdeveloper.com/plugins/elementor/bwd-tabs-zone
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwd-tabs-zone
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';

final class FinalBWDTZTabs{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdtz_init', array( $this, 'bwdtz_loaded_textdomain' ) );
		// bwdtz_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdtz_init' ) );
	}

	public function bwdtz_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-tabs-zone' );
	}

	public function bwdtz_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For tgm plugin activation
			add_action( 'tgmpa_register', [$this, 'bwdtz_tabs_register_required_plugins'] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdtz_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdtz_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdtz_plugin_boots.php' );
	}

	function bwdtz_tabs_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwd-tabs-zone'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
		);

		$config = array(
			'id'           => 'bwd-tabs-zone',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'plugins.php',
			'capability'   => 'manage_options',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);
	
		tgmpa( $plugins, $config );
	}

	public function bwdtz_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-tabs-zone' ),
			'<strong>' . esc_html__( 'BWD Tabs Zone', 'bwd-tabs-zone' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-tabs-zone' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-tabs-zone') . '</p></div>', $message );
	}

	public function bwdtz_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-tabs-zone' ),
			'<strong>' . esc_html__( 'BWD Tabs Zone', 'bwd-tabs-zone' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwd-tabs-zone' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-tabs-zone') . '</p></div>', $message );
	}
}

// Instantiate bwd-tabs-zone.
new FinalBWDTZTabs();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );