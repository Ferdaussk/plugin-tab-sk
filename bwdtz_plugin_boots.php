<?php
namespace CreativeTabZone;

use CreativeTabZone\PageSettings\Page_Settings;
define( "BWDTZ_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDTZ_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassBWDTZTabs {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdtz_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdtz_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdtz_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdtz_the_service_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdtz-tabs.php' );
	}

	public function bwdtz_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDTZTabs() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/super-tabs-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdtz_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwd-tabs-zone-category',
			[
				'title' => esc_html__( 'BWD Tabs Zone', 'bwd-tabs-zone' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdtz_all_assets_for_the_public(){
		$all_css_js_file = array(
            'bwdtz_tabs_fontawesome_css' => array('bwdtz_path_define'=>BWDTZ_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'bwdtz_tabs_style_css' => array('bwdtz_path_define'=>BWDTZ_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),

            'bwdtz_tabs_min_js' => array('bwdtz_path_define'=>BWDTZ_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/min.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdtz_path_define'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdtz_path_define'], ['jquery'], '1.0', true);
        }
	}
	public function bwdtz_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdtz_tabs_admin_icon_css' => array('bwdtz_path_admin_define'=>BWDTZ_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdtz_path_admin_define'], null, '1.0', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdtz_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdtz_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdtz_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdtz_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdtz_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDTZTabs::instance();